<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="phone.css"> -->
    <title>Create User</title>

    <style>
        .center {
            width: 80vw;
            margin: auto;
            margin-top: 50px;
            margin-left: 500px;
        }
        body{
            background:url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.BR7KHYL-AnJJ6YIdsV3zDwHaE1%26pid%3DApi&f=1');
            background-repeat: no-repeat;
            background-size: 100vw;
            margin:auto;
           
            position:relative;
            
        }
    </style>


</head>
<body>
    <?php
    include 'connection.php';
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $account_no=$_POST['account_no'];
        $password=$_POST['password'];
        $branch_id=$_POST['branch_id'];
        $branch_code=$_POST['branch_code'];
        $branch_location=$_POST['branch_location'];
        $balance=$_POST['balance'];
        $sql="insert into users(`name`,`email`,`account_no`,`password`,`branch_id`,`branch_code`,`branch_location`,`balance`) values('{$name}','{$email}','{$account_no}','{$password}','{$branch_id}','{$branch_code}','{$branch_location}','{$balance}')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "<script> alert('user created');
            window.location='admin.php';
            </script>";
        }
    }
    ?>
    <h2 class="text-center pt-4" style="color: black;">Create a User</h2>
    <br>
    <div class="background">
        <div class="container">
            <div class="screen">
                <div class="screen-header">
                    <div class="screen-header-right">
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                    </div>
                </div>
                <div class="screen-body">
                    
                    <div class="screen-body-item">
                        <form class="app-form" method="post">
                            <div class="app-form-group">
                                <input type="text" class="app-form-control" placeholder="Name" name="name" required>
                            </div><br>
                            <div class="app-form-group">
                                <input type="email" class="app-form-control" placeholder="Email" name="email" required>
                            </div><br>
                            <div class="app-form-group">
                                <input type="number" class="app-form-control" placeholder="Account no" name="account_no" required>
                            </div><br>
                            <div class="app-form-group">
                                <input type="password" class="app-form-control" placeholder="Password" name="password" required>
                            </div><br>
                            <div class="app-form-group">
                                <input type="number" class="app-form-control" placeholder="Branch ID" name="branch_id" required>
                            </div><br>
                            <div class="app-form-group">
                                <input type="number" class="app-form-control" placeholder="Branch Code" name="branch_code" required>
                            </div><br>
                            <div class="app-form-group">
                                <input type="text" class="app-form-control" placeholder="Branch Location" name="branch_location" required>
                            </div><br>
                            <div class="app-form-group">
                                <input type="number" class="app-form-control" placeholder="Balance" name="balance" required>
                            </div><br>
                            <br>
                            <div class="app-form-group button">
                                <input class="app-form-button" type="submit" value="Create User" name="submit" style="margin-right:10px;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center mt-5 py-2">
        
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>