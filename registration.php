<!DOCTYPE html>
<html>

<head>

    <style>
    .button {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }

    .button:hover {
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    }

    .input {
        width: 80%;
        height: 25px;
        padding-left: 10px;
        margin-right: 10px;
    }

    .form {
        font: sans-serif;
        background: url("images/number-bg.png") no-repeat scroll 0 0 transparent;
        border: 0 none;
        background-color: #e7e7e7;
        padding-left: 10px;
        padding-bottom: 5px;
        width: 70%;
        border: #000000 solid 1px;
        position: center;
    }

    .label {
        width: 80%;
        height: 25px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .p1 {
        font-family: "Times New Roman", Times, serif;
    }

    .p2,
    h1 {
        font-family: Arial, Helvetica, sans-serif;
    }

    .p3 {
        font-family: "Lucida Console", "Courier New", monospace;
    }
    </style>
</head>

<body>

    <?php
  /* if(isset($_POST["SubmitBtn"])){

  $fileName=$_FILES["resume"]["name"];
  $fileSize=$_FILES["resume"]["size"]/1024;
  $fileType=$_FILES["resume"]["type"];
  $fileTmpName=$_FILES["resume"]["tmp_name"];  

  if($fileType=="application/msword"){
    if($fileSize<=200){
*/
  //New file name
  $fileName = 'CAND';
  $random = rand(1111, 9999);
  $newFileName = $fileName . $random;
  //echo"$newFileName <br>";

  /*  //File upload path
      $uploadPath="testUpload/".$newFileName;

      //function for upload file
      if(move_uploaded_file($fileTmpName,$uploadPath)){
        echo "Successful"; 
        echo "File Name :".$newFileName; 
        echo "File Size :".$fileSize." kb"; 
        echo "File Type :".$fileType; 
      }
    }
    else{
      echo "Maximum upload file size limit is 200 kb";
    }
  }
  else{
    echo "You can only upload a Word doc file.";
  }  
} */
  ?>

    <h1>APPLICATION FORM</h1>
    <form class="form" action="" method="post" enctype="multipart/form-data" name="form1"><br>
        <label class="label">Application Id:</label>
        <input type="text" class="input" name="id number" value="<?php echo "$newFileName"; ?>" readonly /> <br><br>
        <label class="label">NAME:</label>
        <input type="text" class="input" name="id number" placeholder="ENTER YOUR NAME" value="<?php ?>" /> <br><br>
        <label class="label">Upload Resume:</label>
        <input type="file" name="resume" id="resume"><br><br>
        <input type="submit" class="button" name="SubmitBtn" id="SubmitBtn" value="Submit">
    </form>
</body>

</html>