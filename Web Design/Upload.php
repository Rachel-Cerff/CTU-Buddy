<!-- php code for upload form -->
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
 
if (isset($_POST["submit"])){
 
    echo "<p> Target File path : $target_file</p>";
 
    if($_FILES["fileToUpload"]["error"] != UPLOAD_ERR_OK){
        echo "<p> File upload error : " . $_FILES["fileToUpload"]["error"] ."</p>";
 
        $uploadOk = 0;
    }
 
    if ($_FILES["fileToUpload"]["size"] > 5000000){
        echo "<p> Sorry, your file is too large. </p>";
        $uploadOk = 0;
    }
 
    $allowedFileTypes = array("jpg", "png", "pdf");
    if (!in_array($fileType, $allowedFileTypes)){
        echo "<p> Sorry, only JPG, PNG and PDF files are allowed. </p>";
        $uploadOk = 0;
    }
 
    if ($uploadOk == 1){
 
        $servername ="Localhost";
        $username ="root";
        $password ="";
        $dbname ="share recourses today";
 
        $conn = new mysqli($servername, $username, $password, $dbname);
 
        if ($conn->connect_error){
            die("Connection failed :" . $conn->connect_error);
        }
 
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "<p> The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "has been uploaded.</p>";
 
        }
 
        $filename = basename($_FILES["fileToUpload"]["size"]);
        $fileSize = $_FILES["fileToUpload"]["size"];
 
        $stmt = $conn->prepare("INSERT INTO uploaded_files (filename, file_type, file_size) VALUES (?,?,?)");
        $stmt->bind_param("ssi",$filename, $fileType, $fileSize);
 
        if ($stmt->execute()) {
            echo "<p> File metadata saved successfully. </p>";
           
        } else {
            echo "<p> Error:" . $stmt->errno. "</p>";
        }
 
        $stmt->close();
    } else {
        echo "<p> Sorry, there was any error uploading your file. </p>";
        $uploadOk = 0;
    }
 
    $conn->close();
}
