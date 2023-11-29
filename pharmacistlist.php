<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equip="X-UA-Compatible" content="IE=edge">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <title>pharmacist</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container my-5">
            <h2>List of Pharmacist</h2>
            <a class="btn btn-primary" href="/medshoppe/create.php" role="button">Add Pharmacist</a>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>SL NO</th>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PASSWORD</th>
                        <th>ADDRESS</th>
                        <th>PHONE NO</th>
                        <th>ACTION</th>

                    </tr>
                </thead>
            <tbody>
              
                <?php

include("connection.php");
   $sql = "SELECT * FROM pharmacist";
    $result=mysqli_query($conn,$sql);

  if(!$result){
    die("invalid query: " . !$conn);
  }

  while($row =$result->fetch_assoc()) {
    echo "
    <tr>
                    <td>$row[slno]</td>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[password]</td>
                    <td>$row[address]</td>
                    <td>$row[phoneno]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='/medshoppe/edit.php?slno=$row[slno]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='/medshoppe/delete.php?slno=$row[slno]'>Delete</a>
                    </td>
                    </tr>
    ";
  }

?>

                </tbody>
            </table>
        </div>
      
           
    </body>
</html>
