<?php 
require ("../config.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="styleRE.css">
  </head>
  <body>

    <div class="login-box">
      <img src="logo.jpg" class="avatar" alt="Avatar Image">
      <h1>Registro</h1>
      <form onsubmit="register(event)">
        
        <!-- nombres -->
        <label for="nombre">Nombre</label>
        <input name="name" type="text" placeholder="Ingresa tu nombre" required>
        <!-- apellido -->
        <label for="apellido">Apellido</label>
        <input name="lastname" type="text" placeholder="Ingresa tu apellido" required>
        <!-- username -->
        <label for="username">Nombre de usuario</label>
        <input name="username" type="text" placeholder="Ingresa un nombre de usuario" required>
        <!-- password input -->
        <label type="email">Correo electrónico</label> 
        <input name="email" type="email" placeholder="Ingresa tu correo electronico" required>

        <label for="password">Contraseña</label>
        <input name="password" type="password" placeholder="Ingresa tu contraseña" required>

        <label for="password"> Confirmación de contraseña</label>
        <input name="confirm-password" type="password" placeholder="Confirma tu contraseña" required>

        <input type="submit" value="Registrarse">
        
      </form>
    </div>
    <script>
      function register(e) {
        e.preventDefault();
        e.stopPropagation();

        const myFormData = new FormData(e.target);
        const dataArray = [...myFormData];
        const data = Object.fromEntries(dataArray);

        $.ajax({ 
          url: '<?= $SERVER ?>/api/auth.php',
          data,
          type: 'POST',
          dataType: 'json',
          success: (data) => {
            if(data.error) {
              alert(data.message);
              return false
            }

            location.pathname = '/frontend'
          }
        })

        return false;
      }
    </script>
  </body>
</html>

