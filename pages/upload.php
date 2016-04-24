<?php
if(isset($_FILES["file"]["type"]))
{
    $validextensions = array("jpeg", "jpg", "png");
    $temporary = explode(".", $_FILES["file"]["name"]);
    $file_extension = end($temporary);
    if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
    ) && ($_FILES["file"]["size"] < 1000000)//Approx. 100kb files can be uploaded.
    && in_array($file_extension, $validextensions)) {
        if ($_FILES["file"]["error"] > 0)
        {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
        }
        else
        {
            if (file_exists("./Images/" . $_FILES["file"]["name"])) {
            echo "<div class='alert alert-info'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Info!</strong> The file you chose to upload may have already been uploaded
        </div> ";
                echo "<p></p>";
                echo "<p>Try renaming your and uploading it again. ";
            }else{
        $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
        $targetPath = "./Images/".$_FILES['file']['name']; // Target path where file is to be stored
                move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
        echo "<div class='alert alert-success'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Success!</strong> Your picture has been uploaded! 
</div><br/>";
        echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
        echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
        echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>";
        echo "<p></p>";
        echo "<p></p>";
        echo "<p>Your picture has been uploaded! Head back to the home page and take a look! </p>";
                
        }
        }
        }
        else
        {
        echo "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error</strong> The file you have uploaded is too large. The file limit is 1000kb per image file.</div>";
        
    }
}
?>