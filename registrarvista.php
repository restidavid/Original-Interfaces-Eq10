<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="style2.css">
	

</head>  
<body>
 <form action="php/registro_usuario_be.php" method="POST" class="formulario">
    
    <h1>Registro</h1>
     <div class="contenedor">
     
     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" placeholder="Nombre Completo" name="nombre_completo">
         
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="Correo Electronico" name="correo">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" placeholder="Contraseña" name="contrasena">
         
         </div>
         <input type="submit" value="Registrate" class="button">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta?<a class="link" href="loginvista.php">Iniciar Sesion</a></p>
     </div>
    </form>
</body>
</html>