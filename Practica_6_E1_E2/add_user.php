
<?php
include_once('db/database_utilities.php');
if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['status_id']) && isset($_POST['user_type_id'])){
  //Esta funcion es para agregar el usuario
  add_user($_POST['email'],$_POST['password'],$_POST['status_id'],$_POST['user_type_id']);
  echo "<script language='javascript'>"; 
   echo "alert('El usuario ha sido registrado exitosamente')"; 
   echo "</script>"; 
  header("location: index.php");
    }
    
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <div class="row">
 
      <div class="large-4 columns">
        <h3>Agregar Nuevo Usuario</h3>
        <br>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
                <form method="POST" action="add_user.php">
                  <label for="email">Correo:</label>
                  <input type="text" name="email" required><br>

                  <label for="password">Contraseña:</label>
                  <input type="text" name="password" required><br>

                  <label for="status">Estado del usuario:</label>
                  <input type="radio" name="status_id" value="1" id="status_user_1">
                  <label for="status_user_1">Activo</label><br>
                  <input type="radio" name="status_id" value="2" id="status_user_2">
                  <label for="status_user_2">Inactivo</label><br>
                  <br>
                  <label for="type">Tipo de usuario:</label>
                  <input type="radio" name="user_type_id" value="1" id="user_type_id_1">
                  <label for="user_type_id_1">Final</label><br>
                  <input type="radio" name="user_type_id" value="2" id="user_type_id_2">
                  <label for="user_type_id_2">Admin</label><br>
                  <br>
                  <button type="submit" class="success">GUARDAR</button>
                  <a href="index.php"><button type="button" class="primary">VOLVER A LOGIN</button></a>
                </form>
            </div>
          </section>
        </div>
      </div>
    </div>
     
    <?php require_once('footer.php'); ?>