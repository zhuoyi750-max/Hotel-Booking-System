<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="Style.css"/>
        <title>Hotel Search</title>
    </head>
    <body>
        <?php
            include('Navigation_Bar.php');
        ?>
    <h1>Hotel search</h1>
    <form action="Hotel_Results.php" method="post" class="Hotel_Search">
        <label for="CityName">City:</label>
        <input type="text" name="CityName" class="Hotel_Search">

        <label for="CheckIn">Check in Date:</label>
        <input type="date" name="CheckIn" class="Hotel_Search">

        <label for="CheckOut">Check out Date: </label>
        <input type="date" name="CheckOut" class="Hotel_Search">
        
        <input type="submit" name="HotelSearch" value="Search!">
    </form>
    </body>
    </html>