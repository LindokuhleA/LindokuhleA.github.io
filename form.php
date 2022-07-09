<?php
$FileName=$_FILES["fuResume"]["name"];
$TmpName=$_FILES["fuResume"]["tmp_name"];

move-uploaded_file($TmpName, $FileName);

echo("File Uploaded Successfully");
?>