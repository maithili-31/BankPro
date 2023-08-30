<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $from=$_GET['id'];
    
    $amount=$_POST['amount'];

    $sql="select * from users where id=$from";
    $query=mysqli_query($conn,$sql);
    $sql1=mysqli_fetch_array($query);

   

    if(($amount)<0){
        echo '<script type="text/javascript">';
        echo ' alert("negative value")';
        echo '</script>';
    }
    else if($amount>$sql1['balance']){
        echo '<script type="text/javascript">';
        echo ' alert("low balance")';
        echo '</script>';
    }
    else if($amount==0){
        echo '<script type="text/javascript">';
        echo ' alert("zero value cannot be transferred")';
        echo '</script>';
    }
    else{
        $newbalance=$sql1['balance']+$amount;
        $sql="update users set balance=$newbalance where id=$from";
        mysqli_query($conn,$sql);

        

        $sender=$sql1['name'];
        
       

        if($query){
            echo "<script> alert('transaction successful');
            window.location='admin.php';
            </script>";
            
        }

        $newbalance=0;
        $amount=0;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" media="screen and (max-width: 950px)"href="phone.css">
    <title>Transaction</title>
    <style type="text/css">
        button {
            border: none;
            background-color: blanchedalmond;
        }    
        button:hover{
            background-color: burlywood;
            color: darkblue;
            transform: scale(1.1);
        }
    </style>
    <style>
    img {
        height: 70px;
        width: 70px;
    }
</style>
</head>
<body>

    
            
                <?php
                include 'connection.php';
                $sid = $_GET['id'];
                $sql = "DELETE FROM users WHERE id = $sid";
                $result = mysqli_query($conn, $sql);
                echo "<script> alert('user deleted');
                window.location='admin.php';
                </script>";
                ?>
               

                

                
                
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>