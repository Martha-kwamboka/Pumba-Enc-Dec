<?php

include('action.php');
include('index.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Panda </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap.css">
<script src = "https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<!--link to css placed within the head tag as well as the style tag-->
<body class="big-info">
<h1 style="color:#5EF720"></p> Panda Encryption & Decryption tool </h1>
   <div class="container contact-form">

        <form action= "action.php" method= "post">
      <div class="row">
      <div class="col-md-8 offset-md-2 bg-light p-4 mt-5 rounded">
      <div class="form-group">
      <label for=""><b> Decrypt Message: </b></<label for=""></label>
        <textarea name="text" class="form-control" rows="10"  value="<?php echo $decrypt_message; ?>"
        placeholder="Encrypted Message"></textarea>
      </div>
      <br>
      <div class="form-group">
      <label for=""><b> Enter Private Key: </b></<label for=""></label>
        <input type="text" name="key"class="form-control" placeholder="Input Private Key"></div>
       <br>
       <button type="submit" name="decrypt" class=" button"> Decrypt </button>
      
</form>

</div>
</div>
</div>

        </body>
</html>