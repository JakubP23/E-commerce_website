<?php
session_start();

$servername = "localhost";
$dbUsername = "wilder1_STOREOWNER";
$dbPass = "sdfnjcoaismdieroinasdf";
$dbName = "wilder1_FA21_02CompanyDB";

// Create/check connection
$conn = new mysqli($servername, $dbUsername, $dbPass, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Image in MySql using PHP</title>
</head>
<body>
    
    <?php

    
    if(isset($_POST['submit'])){
        $file = $_FILES['file'];
        print_r($file);
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];
        
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowed = array('jpg', 'jpeg', 'png', 'pdf');
        
        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                if($fileSize < 500000){
                    $fileNameNew = uniqid('',true).".".$fileActualExt;
                    $fileDestination = 'product_images'/$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                }else{
                    echo'your file is too big';
                }
            }else{
                echo'there was an error uploading file';
            }
        }else{
            echo ' you cannot upload files of this type';
        }
    }
    
    ?>
    
    <form action = "" method = "POST" enctype ="multipart/form-data">
        <input type="file" name="file" >
        <input type=hidden name="test" value=3>
        <input type="submit" name = "submit" value = "click here">
    </form>
    
    <div>
        <?php 
            $sql_test = "SELECT * FROM PRODUCT WHERE itemID = 0";
            $result_test = $conn -> query($sql_test);
            $var_test = $result_test -> fetch_assoc();
            echo '<img src="data:image/jpeg;base64,'.base64_encode($var_test['phot_path']).'"/>';
        ?>
    </div>
    
    
    
    
    
</body>
</html>