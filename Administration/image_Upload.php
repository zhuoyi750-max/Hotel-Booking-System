<?php include 'connection.php';?> 
<?php
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])){

    $target_dir ="../images/Hotel_Rooms/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk=1;    
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if($check !== false){
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists($target_file)){
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if(
    $imageFileType != "jpg" && $imageFileType !="png" && $imageFileType != "jpeg" 
    && $imageFileType != "gif"
    ){
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error

    if($uploadOk == 0){
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        $moved = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    //     if ($moved){
    //         echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"] ["name"])) . " has |"
    //             $RoomID =1;
    //             $sql ="UPDATE `Hotel_Rooms`
    //             SET `Room_Photo`='".$_FILES["fileToUpload"]["name"] ."'
    //             WHERE`Hotel_Room_ID`=". $RoomID . "";
                
    //             try{
    //                 if($conn->query($sql)===TRUE){
    //                     echo "New record created successfully";
    //                 } else {
    //                     echo "<h2> Error:" . $sql . "</h2> <br>". $conn->error;
    //                 }
    //             }
    //             //catch exception
    //             catch(Exception $e){
    //                 echo '<h1>Message:'. $e->getMessage();
    //             }
    //         } else {
    //             echo $target_file , "Sorry, there was an error uploading your file.";
    //         }
        // }
    }

}
?>

<!DOCTYPE html>
<html>

<body>
    
    <form action="" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image"" name="submit">
    </form>

</body>

</html>
