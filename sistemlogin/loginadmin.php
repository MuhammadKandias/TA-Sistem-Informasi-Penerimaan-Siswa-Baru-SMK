<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">

    <title>LOGIN ADMIN</title>
  </head>
  <body>
    
    <div class="container">
      <h4 class="text-center">Login Admin Untuk Masuk ke Dashboard</h4>
      <hr>
      
      <form method="post" action="prosesloginadmin.php">
      <div class="form-group">
        <label>Username</label>
        <div class="input-group">
          <div class="group-input-prepend">
          </div>
        <input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda" required>
        </div>
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda Anda" required>
      </div>

      <br>


      <center><button type="submit" class="btn btn-primary">LOGIN</button></center>
      
      <?php
        if(isset($_GET['pesan'])){
          if($_GET['pesan']=="gagal"){
            echo"<br>Username atau Password salah, Silahkan isi dengan benar!";
          }else if($_GET['pesan']=="berhasil"){
            echo"<br>Login Berhasil";
          }
        }
      ?>    
      </form>
      

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>