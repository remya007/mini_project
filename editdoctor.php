<?php

//create connection
include("connection.php");

$id ="";
$name="";
$branch="";
$dutytime="";


$errorMessage = "";
$successMessage = "";

if( $_SERVER['REQUEST_METHOD'] == 'GET' ){
    //GET method: show the data of the doctor

    if ( !isset($_GET["id"])) {
        header("location: /medshoppe/doctorlist.php");
        exit;
    }

    $id = $_GET["id"];

    //read the row of the selected doctor from the database
    $sql = "SELECT * FROM doctor WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    $row =$result->fetch_assoc();

    if (!$row){
        header("location: /medshoppe/doctorlist.php");
        exit;
    }

$id= $row["id"];
$name= $row["name"];
$branch= $row["branch"];
$dutytime= $row["dutytime"];

}
else {
    //POST method: update the data of the doctor

$id = $_POST["id"];
$name= $_POST["name"];
$branch= $_POST["branch"];
$dutytime= $_POST["dutytime"];

do{
    if(empty($id) || empty($name) || empty($branch) || empty($dutytime)  ) { 
        $errorMessage = "All the feilds are required";
        break;
    }

    $sql = "UPDATE doctor " .
    "SET id = '$id', name = '$name', branch = '$branch', dutytime = '$dutytime'" .
    "WHERE id = $id";

$result = mysqli_query($conn, $sql);


    if(!$result){
        $errorMessage = "invalid query: "  . !$conn;
        break;
    }

    $successMessage = "doctor added correctly";

    header("location: /medshoppe/doctorlist.php");
    exit;


} while (true);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pharmacy management system</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>Add doctor</h2>


        <?php
        if(!empty($errorMessage)){
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>$errorMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
            </div>
            ";
        }

        ?>

<form method="post">
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">id</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="id" value="<?php echo $id; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">Branch</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="branch" value="<?php echo $branch; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">Duty Time</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="dutytime" value="<?php echo $dutytime; ?>">
                </div>
            </div>
            
            
            <?php
            if(!empty($successMessage)){
                echo "
                <div class='row mb-3'>
                <div class='offset-sm-3 col-sm-6'>
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>$successMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
                </div>
                </div>
                </div>
                ";
            }
    ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/medshoppe/doctorlist.php" role="button">cancel</a>
                </div>
            </div>
        </form>
    </div>
  </body>
</html>
