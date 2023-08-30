<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" media="screen and (max-width: 950px)"href="phone.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    

</head>
<style>
    img {
        height: 70px;
        width: 70px;
    }
</style>

<body>
<?php
    include 'connection.php';
    session_start();
    if(isset($_POST['submit'])){
       
        $account_no=$_POST['account_no'];
        $password=$_POST['password'];

        $_SESSION['account_no'] = $account_no;
        
        $sql="select * from users where account_no=$account_no and password='$password'";
        $result=mysqli_query($conn,$sql);  
        $sql1=mysqli_fetch_array($result);
        if($sql1){
            header('Location: user.php?val='.$account_no);
        }
        else {
            echo "Invalid User";
        }
    }

    
    ?>

    <nav id="navbar">
        <div id="logo">
            <a href="index.php"><img src="banklogo.jpg" alt="bank Logo"></a>
        </div>

        <ul>
            <li class="items"><a href="index.php">Home</a></li>
        </ul>
    </nav>


    <div class="login-wrap">
        <form method="post">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Account No</label>
                        <input id="user" name="account_no" type="number" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" name="password" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In" name="submit">
                    </div>
                    <div class="hr"></div>
                </div>
                
            </div>
        </div>
    </form>
    </div>

    

    

    <footer>
        <div class="center">
            Copyright &copy; www.ABCBank.com. All right reserved.
        </div>
    </footer>
</body>

</html>