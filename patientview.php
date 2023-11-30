<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>Enter Medicine Name</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="medicinename" value="<?php if(isset($_GET['medicinename'])){echo $_GET['medicinename'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    include("connection.php");

                                    if(isset($_GET['medicinename']))
                                    {
                                        $medicinename = $_GET['medicinename'];

                                        $sql = "SELECT * FROM medicine WHERE medicinename='$medicinename' ";
                                        $query_run = mysqli_query($conn, $sql);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <div class="form-group mb-3">
                                                    <label for="">Id</label>
                                                    <input type="text" value="<?= $row['medid']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Company name</label>
                                                    <input type="text" value="<?= $row['companyname']; ?>" class="form-control">
                                                </div>
                                               
                                                <div class="form-group mb-3">
                                                    <label for="">Manufacture date</label>
                                                    <input type="text" value="<?= $row['manufacturedate']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Expiry date</label>
                                                    <input type="text" value="<?= $row['expirydate']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Rate</label>
                                                    <input type="text" value="<?= $row['rate']; ?>" class="form-control">
                                                </div>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
   
    <div style="background-color: #f8f9fa; padding: 5px;">
    <div style="display: flex; justify-content: center; align-items: center;">
        <a href="doctorlist.php" style="text-decoration: none; color: #000;">
            <div style="background-color: #007bff; color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); transition: background-color 0.3s ease;">
                <h3 style="margin: 0;">Doctors on Duty</h3>
            </div>
        </a>
    
<div style="background-color: #f8f9fa; padding: 5px;">
    <div style="display: flex; justify-content: center; align-items: center;">
        <a href="complaint.php" style="text-decoration: none; color: #000;">
            <div style="background-color: #007bff; color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); transition: background-color 0.3s ease;">
                <h3 style="margin: 0;">Complaint</h3>
            </div>
        </a>
    </div>
</div>
    </div></div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
