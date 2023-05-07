<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check if file was uploaded without errors
  if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
    // Define upload folder path
    $uploadDir = "upload/";
    // Get the file extension
    $fileExtension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
    // Generate a unique name for the file
    $fileName = uniqid() . "." . $fileExtension;
    // Move the uploaded file to the upload folder
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadDir . $fileName)) {
      // Display the image in a new tab
      echo "<script>window.open('" . $uploadDir . $fileName . "')</script>";
    } else {
      echo "Error uploading file.";
    }
  } else {
    echo "No file uploaded.";
  }
}
?>


<meta http-equiv="refresh" content="5; URL=https://test199031.000webhostapp.com/">