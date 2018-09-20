<?php
include_once('db/database_utilities.php');
//$id=$_REQUEST['id']
//$fecha = date("Y-m-d");

if(isset($_POST['email']) && isset($_POST['password'])){
  //Esta condición es para saber si el email correcto y la contraseña correcta
  if(login($_POST['email'],$_POST['password'])){
    $_SESSION['email'] = $_POST['email'];
    //add_user_log($fecha,$id);
    header("location: menu.php");
  }
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
</head>
<body>
	<br>
	<br>
	<div class="row" align="">
      <div class="large-5 columns">
        <center><h3><strong>LOGIN DE USUARIOS</strong></h3></center>
        <br>
        <div class="section-container tabs" data-section>
          <section class="section" >
            <div class="content" data-slug="panel1" align="center">
                <form method="POST" action="#">
                  <label for="email">Correo electrónico</label>
                  <input type="email" name="email" required><br>

                  <label for="password">Contaseña</label>
                  <input type="password" name="password" required><br>

                  <button type="submit" class="success">ACCEDER</button>
                  <a href="add_user.php"><button type="button" class="primary">REGISTRAR</button></a>
                </form>
            </div>
          </section>
        </div>
      </div>
    </div>
</body>

</html>
