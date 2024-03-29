<?php
session_start();

if($_POST){
    if($_POST['username']==="test" && $_POST['password']==="test"){
        $arr=["user_role"=>"0","user_name"=>"test"];
        $val=base64_encode(gzencode(serialize($arr)));
        setcookie("session_id",$val);
        header("location:/profile.php");	
    }else{
      $_SESSION["error"]="<h3> You can login with test:test</h3>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title text-center">Giriş Yap</h3>
            <form method="POST" action="index.php">
              <div class="mb-3">
                <label for="username" class="form-label">Kullanıcı Adı:</label>
                <input type="text" class="form-control" id="username" name="username" required>
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Şifre:</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Giriş Yap</button>
              </div>
              <div class="warning d-grid">
                
                <?php
                if(isset($_SESSION["error"])){
                  echo $_SESSION["error"];
                } 
                ?>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

