<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="Style.css"/>
        <title>Hotel Results</title>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css'
        rel="stylesheet" type='text/css'>
    </head>
    <body>

 <?php include 'connection.php';?> 
<?php include('Navigation_Bar.php');?>
<?php

if(!empty($_POST['HotelSearch'])){
    $CityName =$_POST['CityName'];
    $CheckInDate =$_POST['CheckIn'];
    $CheckOutDate =$_POST['CheckOut'];
    
    $sql = "SELECT * FROM Hotel WHERE Hotel_City ='".$CityName ."';";
    try { 
        $result = $conn->query($sql);
        if($result->num_rows >0){
            //output data of each row
            echo "<br> <h1>We've Found Hotels in".$CityName. "</h1>";
        
            while($row = $result->fetch_assoc()){
                echo"<div class='Results'>";
                echo"<div class='Results_Image'>";
                 echo " <img src='images/Hotel_Image/" . $row["Hotel_Main_Image"]."'></img>";
                echo "</div>";
            
                echo "<div class='Results_Info'>";
                    echo "<h2>" . $row["Hotel_Name"] ."
                    " . $row["Hotel_Number_0f_Stars"] ."
                    <i class='fa fa-star' style='color:gold'></i>
                    </h2>";
                    echo "<p>
                    <i class='fa fa-info-circle' style='color:white'></i>
                    " . $row["Hotel_Description"] . "</p>";
            
                    echo "<p class='small'>
                    <i class='fa fa-map-marker' style='color:white'></i>
                    " . $row["Hotel Address"] . "</p>";

                    echo "<button type='button' class='CheckAvailButton'>Check Availiablity
                    <i class='fa fa-arrow-circle-right' style='color:blue'></i>
                    </button>";
                    
                
                    echo "<a href='View_Hotel.php?HotelName=" . $row["Hotel_Name"]. "&id=" . $row["Hotel_ID"]."'>
                    
                    <button type='button'class='CheckAvailButton'>Check Availiablity
                    <i class='fa fa-arrow-circle-right' style='color:blue'></i>
                    </button>
                    
                    </a>";

                    echo"</div>";
                    echo"</div>";
                    
            } 
        }else {
            echo "<h1>Sorry, We don't have Hotels in". $CityName ."</h1>"; 
        }
    }catch(Exception $e){
        echo 'Message:'.$e->getMessage();
    }
}
?>

    </body>
</html> 

   