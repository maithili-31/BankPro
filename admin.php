<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" media="screen and (max-width: 950px)"href="phone.css">
    <title>Details</title>
    <style type="text/css">
        button {
            transition: 1.5s;
        }    
        button:hover{
            background-color: burlywood;
            color: darkblue;
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
            <li class="items"><a href="createuser.php">Create User</a></li>
            <br>
            <li class="items"><a href="index.php">Logout</a></li>
            <br>
            

        </ul>
    </nav>
    <?php
    include 'connection.php';
    $sql="select * from users";
    $result=mysqli_query($conn,$sql);
    ?>
    

    <div class="container">
        <h2 class="text-center pt-4" style="color: black;">Details of Customers</h2>
        <br>
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead style="color: black;">
                        <tr>
                            <th scope="col" class="text-center py-2">ID</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">Email</th>
                            <th scope="col" class="text-center py-2">Account No</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            <th scope="col" class="text-center py-2">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($rows=mysqli_fetch_assoc($result)){
                            ?>
                            <tr style="color: black;">
                            <td class="py-2"><?php echo $rows['id']; ?></td>
                            <td class="py-2"><?php echo $rows['name']; ?></td>
                            <td class="py-2"><?php echo $rows['email']; ?></td>
                            <td class="py-2"><?php echo $rows['account_no']; ?></td>
                            <td class="py-2"><?php echo $rows['balance']; ?></td>
                            <td><a href="transfer.php?id=<?php echo $rows['id'];?>"><button type="submit">Transfer</button></a>
                            <a href="withdraw.php?id=<?php echo $rows['id'];?>"><button type="submit">withdraw</button></a>
                            <a href="deposit.php?id=<?php echo $rows['id'];?>"><button type="submit">deposit</button></a></td>
                            <td><a href="delete.php?id=<?php echo $rows['id'];?>"><button type="submit">Delete</button></a></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>