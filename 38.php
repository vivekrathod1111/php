<html>
<body>
<form action="#" method="post"enctype="multipart/form-data">
Select File:
<input type="file" name="fileToUpload"/>
<input type="submit" value="Upload" Image" 
name="submit"/>
</form>
</body>
</html>

<?php
$target_path="d:/";
$target_path=$target_path.basename($_FILES['fileToUpload']['name']);
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_path))
{
echo "File uploaded successfully!";
}
else
{
echo "Sorry, file not uploaded, please try again!";
}
?>