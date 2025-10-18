<?php
echo "Hotel Name: ".$_GET["HotelName"]."|Hotel ID:".$_GET["id"];
?>
<?php include connection.php';?>
<?php

echo "Hotel Name: " .$_GET["HotelName"]."| Hotel ID:". $_GET["id"];

$sql = "SELECT Hotel_room.Room_Name, Hotel_room.Room_Price, Hotel_room.Room_Photo,
Hotel_room.Room_Description, Hotels.Hotel_Name, Hotels.Hotel_City, Hotels.Hotel_Address,Hotels.Hotel_Description, Hotels.Hotel_Number_0f_Stars, Hotels.Hotel_Main_Image
FROM`Hotel_room
INNER J0IN Hotels ON Hotel_room.Hote_ID = Hotels.Hotel_ID
WHERE Hotel_room.Hotel_ID ='".$_GET["id"]."';";

try {
    $result = $conn->query($sql);
    if($result->num_rows > 0){  
        echo "<br> <h1> We've Found Hotels in".$CityName ."</h1>";
        while($row = $result->fetch_assoc()){

            echo "<p> Hotel Name:". $row["Hotel—_Name"]."</p>";
            echo "<p> Hotel City:". $row["Hotel_City"]." </p>";
            echo "<p> Hotel Address:". $row["Hotel_Address"]." </p>";
            echo "<p> Hotel Description:".$row["Hotel_Description"]." </p>";
            echo "<p> Hotel Name: ". $row["Hotel_Number_0f_Stars"]."</p>";
            echo "<p> Hotel Name:".$row["Hotel_Main_Image"]."</p>";

            echo "<p> Room Name: ".$row["Room_Name"]." </p>";
            echo "<p> Room Price:".$row["Room_Price"]."</p>";
            echo "<p> Room Photo:". $row["Room_Photo"]." </p>";
            echo "<p> Room Description:". $row["Room_Description"]." </p>";

            }     
        } else {
            echo "<h1>Sorry, We've not found any rooms at ". $_GET["HotelName"]."</h1>";
        }
    }catch(Exception $e){
echo 'Message:'.$e->getMessage();
    }
?>
