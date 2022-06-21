<!DOCTYPE html>
<html >
<head>
    <title>LOGIN</title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <link 
</head>
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Nombre de Usuario</label>
        <input type="text" name="uname" placeholder="Escriba Usario">

        <label>Contraseña</label>
        <input type="password" name="password" placeholder="Escriba Contraseña">
    
    <button type="submit">Enviar</button>
    </form>    
</body>
</html>