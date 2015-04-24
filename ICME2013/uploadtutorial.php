<?php
include 'include.php';
echoStart();
?>

<form enctype="multipart/form-data" action="uptutorial.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="50000000" />
Choose a file to upload: <input name="uploadedfile" type="file" /><br />
<input type="submit" value="Upload Tutorial" />
</form>

<?php
echoEnd();
?>