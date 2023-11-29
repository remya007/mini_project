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
            <h2>List of Doctors on Duty</h2>
            <a class="btn btn-primary" href="/medshoppe/doctor.php" role="button">Add Doctors</a>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Branch</th>
                        <th>Duty  time</th>
                        <th>ACTION</th>
                        
                    </tr>
                </thead>
            <tbody>
              
                <?php

include("connection.php");
   $sql = "SELECT * FROM doctor";
    $result=mysqli_query($conn,$sql);

  if(!$result){
    die("invalid query: " . !$conn);
  }

  while($row =$result->fetch_assoc()) {
    echo "
    <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[branch]</td>
                    <td>$row[dutytime]</td>
                  
                    <td>
                        <a class='btn btn-primary btn-sm' href='/medshoppe/editd.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='/medshoppe/deleted.php?id=$row[id]'>Delete</a>
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
