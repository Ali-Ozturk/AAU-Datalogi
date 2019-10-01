<?php
include('../includes/connect.php');

// Non-file related stuff
$smoke_title = $_POST['uti-title'];
$smoke_type = $_POST['uti-type'];
$smoke_map = $_POST['uti-map'];
$smoke_exec = $_POST['uti-exec'];
$smoke_creator = $_POST['uti-creator'];

$currentDir = dirname(getcwd(), 1);
$uploadDirectory = "/media/";

$errors = []; // Store all foreseen and unforseen errors here

$fileExtensions = ['mp4']; // Get all the file extensions

$fileName = $_FILES['myfile']['name'];
$fileTmpName = $_FILES['myfile']['tmp_name'];
$fileType = $_FILES['myfile']['type'];
$fileExtension = strtolower(end(explode('.', $fileName)));

$uploadPath = $currentDir . $uploadDirectory . basename($fileName);

if (isset($_POST['submit'])) {

    if (!in_array($fileExtension, $fileExtensions)) {
        $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
    }

    if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
            $addUtility = "INSERT INTO `utilities`(`title`, `type`, `map_id`, `execution`, `source`, `created_by`) VALUES ('" . $smoke_title . "','" . $smoke_type . "', $smoke_map ,'" . $smoke_exec . "','" . basename($fileName) . "',$smoke_creator)";
            mysqli_query($db, $addUtility);
            echo "The file " . basename($fileName) . " has been uploaded";
        } else {
            echo "An error occurred somewhere. Try again or contact the admin";
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "These are the errors" . "\n";
        }
    }
}


?>