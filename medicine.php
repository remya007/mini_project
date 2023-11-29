<?php

//create connection
include("connection.php");

$medid ="";
$medicinename="";
$companyname="";
$qty="";
$manufacturedate="";
$expirydate="";
$rate="";

$errorMessage = "";
$successMessage = "";

if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
$medid = $_POST["medid"];
$medicinename= $_POST["medicinename"];
$companyname= $_POST["companyname"];
$qty= $_POST["qty"];
$manufacturedate= $_POST["manufacturedate"];
$expirydate= $_POST["expirydate"];
$rate= $_POST["rate"];

do{
    if(empty($medid) || empty($medicinename) || empty($companyname) || empty($qty) || empty($manufacturedate) || empty($expirydate) || empty($rate) ) {
        $errorMessage = "All the feilds are required";
        break;
    }

    // add new medicine

    $sql= "INSERT INTO medicine (medid,medicinename,companyname,qty,manufacturedate,expirydate,rate) VALUES ('$medid', '$medicinename', '$companyname','$qty', '$manufacturedate', '$expirydate', '$rate')";

    $result=mysqli_query($conn,$sql);

    if(!$result){
        $errorMessage = "invalid query: "  . !$conn;
        break;
    }

$medid ="";
$medicinename="";
$companyname="";
$qty="";
$manufacturedate="";
$expirydate="";
$rate="";

$successMessage = "medicine added correctly";

header("location: /medshoppe/medicinelist.php");
exit;


}while (false);
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
        <h2>Add Medicine</h2>


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
                <label  class="col-sm-3 col-form-label">Med id</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="medid" value="<?php echo $medid; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">Medicine name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="medicinename" value="<?php echo $medicinename; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">Company name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="companyname" value="<?php echo $companyname; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">Qty</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="qty" value="<?php echo $qty; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">Manufacture date</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="manufacturedate" value="<?php echo $manufacturedate; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">Expiry date</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="expirydate" value="<?php echo $expirydate; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">Rate</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="rate" value="<?php echo $rate; ?>">
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
                    <a class="btn btn-outline-primary" href="/medshoppe/medicinelist.php" role="button">cancel</a>
                </div>
            </div>
        </form>
    </div>
  </body>
</html>
