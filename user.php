<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" media="screen and (max-width: 950px)"href="phone.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
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
    .image {
        height: 70px;
        width: 70px;
    }
</style>

</head>
<body style="background-color: #e8bbbb;">
<nav id="navbar">
        <div id="logo">
            <a href="index.php"><img src="banklogo.jpg" class="image" alt="bank Logo"></a>
            <!-- <img src="Images/FoodLogo.png" alt="Food Logo"> -->
        </div>

        <ul>
            <li class="items"><a href="user.php">Home</a></li>
            <br>
            <li class="items"><a href="index.php">Logout</a></li>
            <br>
            

        </ul>
    </nav>

    

    <?php
    include 'connection.php';
    session_start();
    $account_no=$_SESSION['account_no'];
    $sql="SELECT * FROM users WHERE account_no=$account_no";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    ?>
    

    

<main class="profile">
  <div class="profile-bg"></div>
  <section class="container">
    <aside class="profile-image">
    </aside>
    <section class="profile-info">
      <h1 class="first-name"><?php echo $row["name"]; ?></h1>
      
      <h2>Account No: <?php echo $row["account_no"]; ?></h2>
      <p>
        Balance: <?php echo $row["balance"]; ?>
      </p>
      <p>
        Email: <?php echo $row["email"]; ?>
      </p>

      
    </section>
  </section>
  
  <button class="icon close"></button>
</main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>