<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Bank</title>
    <link rel="stylesheet" href="style.css">
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
    <nav id="navbar">
        <div id="logo">
            <a href="index.php"><img src="banklogo.jpg" alt="bank Logo"></a>
            <!-- <img src="Images/FoodLogo.png" alt="Food Logo"> -->
        </div>

        <ul>
            <li class="items"><a href="#home">Home</a></li>
            <br>
            <li class="items"><a href="#services-container">Our Services</a></li>
            <br>
            

        </ul>
    </nav>

    <section id="home">
        <h1 class="h-primary">Welcome to ABC bank</h1>
        <p>One of the top bank in Pune, Mumbai, Nagpur</p>
        <p></p>
        <button class ="btn" onclick="window.location.href='userlogin.php'">User login</button>
        <button class ="btn" onclick="window.location.href='adminlogin.php'">Admin login</button>
    </section>

    <section id="services-container">
        <h1 class="h-primary center">Our Services</h1>
        <div id="services">
            <div class="box">
                <img src="loan.jpg" alt="Loans">
                <h2 class="h-secondary center">Loans</h2>
                <p class="center">
                    We provide best prices of loans
                </p>
            </div>
            <div class="box">
                <img src="FD.jpg" alt="FD">
                <h2 class="h-secondary center">FD</h2>
                <p class="center">
                    Hurry up!!!There is 7% of intrest available
                </p>
            </div>
            <div class="box">
                <img src="cards.jpg" alt="Cards">
                <h2 class="h-secondary center">Cards</h2>
                <p class="center">
                    There are so many variety of card like Rupee, visa cards are availiable here. 
                </p>
            </div>
            <div class="box">
                <img src="homevisit.jpg" alt="Home visits">
                <h2 class="h-secondary center">Home visit</h2>
                <p class="center">
                    We provide home visit for people above 60 years.
                </p>
            </div>

        </div>


    <footer>
        <div class="center">
            Copyright &copy; www.ABCbank.com. All right reserved.
        </div>
    </footer>
</body>

</html>