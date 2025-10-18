<div class="topnav">
    <a href="index.php">Home</a>
    <a href="Hotel_Search.php">Hotels</a>
    <a href="">Trains</a>
    <a href="">Flights</a>
    <div class="right">
        <a href="" >Search Bookings</a>
        <?php

        if(!isset($_SESSION["loggedin"])|| !$_SESSION["loggedin"]){
            echo " <a href='Signip.php'>Sign in / Register</a>";
            echo " <a href='Login.php'>Login</a>";
        } else {
            echo " <a href=''>".$_SESSION["username"]."'s Account</a>";
            echo " <a href='Logout.php'>Log 0ut</a>";
        }
        ?>
    </div>

</div>
