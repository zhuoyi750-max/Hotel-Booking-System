<!doctype html>
<?php

// include '../connection.php';

// if(!empty($_POST['Input_Hotels'])){

    // $HotelName =$_POST['HotelName'];
    // $HotelCity =$_POST['HotelCity'];
    // $HotelDescription =$_POST['HotelDescription'];
    // $HotelAdress =$_POST['HotelAddress'];
    // $HotelStars =$_POST['HotelStars'];
    // $HotelImage =$_POST['HotelImage'];
    // echo $HotelName;
    // echo $HotelCity;
    // echo $HotelDescription;
    // echo $HotelAddress;
    // echo $HotelStars;
    // echo $HotelImage;

    //    $sql = "INSERT INTO `Hotels`(`Hotel_Name`, `Hotel_City`, `Hotel_Address`, 
    //     `Hotel_Description`, `Hotel_Number_Of_Stars`, `Hotel_Main_Image`)
    //     VALUES ('" . $HotelName . "','" . $CityName . "',
    //     '" . $Address . "','" . $Description . "' ,'" . $Stars . "' ,'" . $Image . "');";

    // echo "dog;";

    // try {
    //     if($conn->query($sql)){
    //         echo "New record created successfully";
    //      }else {
    //          echo "<h2> Error:". $sql ."</h2> <br>". $conn->error;
    //      }
    //      echo "dog;";
    // //catch exception
    // }catch(Exception $e){
    //     echo 'Message: '. $e->getMessage();
    // }
    // echo 'Complete';
    // }


?>
<html>
    <head>
        <link rel="style" href="Style1.css"/>
        <title>Input Hotel</title>
    </head>
    <body>
<h1>InputH otels</h1>
    <form action="" method="post" class="Input_Hotel">
        <label for="HotelName">Hotel Name:</label>
        <input type="text" name="HotelName" class="Input_Hotel_Input">

        <label for="HotelCity">Hotel city:</label>
        <input type="text" name="HotelCity" class="Input_Hotel_Input">

        <label for="HotelDescription">Hotel Description: </label>
        <input type="text" name="HotelDescription" class="Input_Hotel_Input">

        <label for="HotelAddress">Hotel Address: </label>
        <input type="text" name="HotelAddress" class="Input_Hotel_Input">

        <label for="HotelStars">Hotel Stars: </label>
        <input type="int" name="HotelStars" class="Input_Hotel_Input">

        <label for="HotelImage">Hotel Image: </label>
        <input type="text" name="HotelImage" class="Input_Hotel_Input">
        
        <input type="submit" name="Input Hotels" value="Input Hotels" class="Input_Hotel_Input">
    </form>
</body>
</html>
