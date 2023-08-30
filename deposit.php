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
<body style="background-color: #e8bbbb;">
<nav id="navbar">
        <div id="logo">
            <a href="index.php"><img src="banklogo.jpg" alt="bank Logo"></a>
            <!-- <img src="Images/FoodLogo.png" alt="Food Logo"> -->
        </div>

        <ul>
        <li class="items"><a href="admin.php">Home</a></li>
            <br>
            <li class="items"><a href="index.php">Logout</a></li>
            <br>
            

        </ul>
    </nav>
    <div class="container">
    <h2 class="text-center pt-4" style="color: black;">Deposit</h2>
        <?php
        include 'connection.php';
        $sid = $_GET['id'];
        $sql = "SELECT * FROM users WHERE id = $sid";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            echo "Error : " .$sql. "<br>" .mysqli_error($conn);
        }
        $rows = mysqli_fetch_assoc($result);
        ?>
        <form method="post" name="tcredit" class="tabletext"><br>
            <div>
                <table class="table table-striped table-condensed table-bordered">
                    <tr style="color: black;">
                        <th class="text-center">Id</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Balance</th>
                    </tr>
                    <tr style="color: black;">
                        <td class="py-2"><?php echo $rows['id'];?></td>
                        <td class="py-2"><?php echo $rows['name'];?></td>
                        <td class="py-2"><?php echo $rows['email'];?></td>
                        <td class="py-2"><?php echo $rows['balance'];?></td>
                    </tr>
                </table>
            </div>
            <br>
            
                <?php
                include 'connection.php';
                $sid = $_GET['id'];
                $sql = "SELECT * FROM users WHERE id != $sid";
                $result = mysqli_query($conn, $sql);
                ?>
               

                

                <div>
                    </select>
                    <br><br>
                    <label style="color: black;"><b>Amount: </b></label>
                    <input type="number" class="form-control" name="amount" required>
                    <br><br>
                    <div class="text-center">
                        <button class="btn mt-3" name="submit" type="submit" id="myBtn">Deposit</button>
                    </div>
                    </form>
                </div>
                
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>