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
            <h2>Medicine list</h2>
            <a class="btn btn-primary" href="/medshoppe/medicine.php" role="button">Add Medicine</a>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Med id</th>
                        <th>Medicine name</th>
                        <th>Company name</th>
                        <th>Qty</th>
                        <th>Manufacture date</th>
                        <th>Expiry date</th>
                        <th>Rate</th>
                        <th>Action</th>

                    </tr>
                </thead>
            <tbody>
              
                <?php

include("connection.php");
   $sql = "SELECT * FROM medicine";
    $result=mysqli_query($conn,$sql);

  if(!$result){
    die("invalid query: " . !$conn);
  }

  while($row =$result->fetch_assoc()) {
    echo "
    <tr>
                    <td>$row[medid]</td>
                    <td>$row[medicinename]</td>
                    <td>$row[companyname]</td>
                    <td>$row[qty]</td>
                    <td>$row[manufacturedate]</td>
                    <td>$row[expirydate]</td>
                    <td>$row[rate]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='/medshoppe/editm.php?medid=$row[medid]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='/medshoppe/delete.php?medid=$row[medid]'>Delete</a>
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
