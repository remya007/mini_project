<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admindash.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>ADMIN PANEL</h1>
        </div>
        <ul>
            <li><img src="dashboard.png" alt="">&nbsp; <span>Dashboard</span> </li>
            <li><img src="pharmacist.png" alt="">&nbsp;<span>pharmacist</span> </li>
            <li><img src="medicine.png" alt="">&nbsp;<span>medicine list</span> </li>
            <li><img src="medicine.png" alt="">&nbsp;<span>expired drugs</span> </li>
            <li><img src="stock.png" alt="">&nbsp;<span>out of stock</span> </li>
            <li><img src="doctor.png" alt="">&nbsp; <span>Doctors list</span></li>
            <li><img src="help-web-button.png" alt="">&nbsp;<span>Help</span> </li>
            <li><img src="settings.png" alt="">&nbsp;<span>Settings</span> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="#" class="btn">Add New</a>
                    <div class="img-case">
                        <img src="user.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
       <div class="content">
            <div class="cards">
                <a href="pharmacistlist.php" class="card">
                    <div class="box">
                        <h3>pharmacist</h3>
                    </div>
                </a>
                   
    
                <a href="" class="card">
                    <div class="box">
                        <h3>Complaints</h3>
                    </div>
                </a>
                  
                <a href="" class="card">
                    <div class="box">
                        <h3>Medicine list</h3>
                    </div>
                   
                </a>
                <a href="" class="card">
                    <div class="box">
                        <h3>Out of stock</h3>
                    </div>
                </a>
                <a href="" class="card">
                    <div class="box">
                        <h3>Doctors list</h3>
                    </div>
                </a>
                           
                
            </div>
        </div>
    </div>
</body>

</html>
