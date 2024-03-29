<?php 
session_start();
$flag=file_get_contents('flag.txt');
$cntrl;

function mailControl($mail)
  {
    $output = shell_exec("dig +short mx $mail");
    return $output;
  }
  if($_POST){
    if(isset($_POST["mail"])){
        $mail = $_POST["mail"];
        preg_match("/@(.*)/", $mail, $matches);
        $result = $matches[1];
        $cntrl=mailControl($result);
    }
  }



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mail Controller</title>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <form method="POST" action="">
    <div class="form-group">
      <label for="mail">Control Mail:</label>
      <input type="text" class="form-control" id="mail" name="mail" placeholder="Enter text">
    </div>
    <button type="submit" class="btn btn-seconday">Submit</button>
  </form>
  <?php if (empty($cntrl)){
            echo "Mail is not correct";    
    }else{
        echo "Mail is  Correct it's ->".$cntrl;
    }
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>

  