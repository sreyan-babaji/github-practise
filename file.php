<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP AND  HTML</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <style>
	
    </style>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
    <?php
    if(isset($_POST["submit"])) {
	
	$Filename= $_FILES['fileToUpload']['name'];
	$Type = $_FILES['fileToUpload']['type'];
	$Size = $_FILES['fileToUpload']['size'];
	$Tempname = $_FILES['fileToUpload']['tmp_name'];
	$Error  = $_FILES['fileToUpload']['error'];
    $resulation=getimagesize($Tempname);
    $width=$resulation[0];
    $height=$resulation[1];
    $target="uploads/" . basename ($Filename);
    if($Size ==0){
        echo 'please select a image';
    }
    else if($Size>=100000){ //1mb check
        echo 'please upload file upto 1 mb';}
    else if($filename=){}
    else{
        move_uploaded_file($Tempname, $target );
        echo 'image uploaded successfully';
    }
    
}
    ?>
<script src="asset/js/bootstrap.min.js"></script>
</body>
</html>