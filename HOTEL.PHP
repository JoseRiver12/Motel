<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="jquery.mobile/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="jquery.mobile/jquery.mobile.icons-1.4.5.min.css">
    <link rel="stylesheet" href="jquery.mobile/jquery.mobile.structure-1.4.5.min.css">
    <link rel="stylesheet" href="themes/personal.min.css">
    <script src="jquery.mobile/demos/js/jquery.min.js"></script>
    <script src="jquery.mobile/demos/js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
        <div data-role="page" data-theme="c">
        <div data-role="header">
            <a href="index.php" data-role="button" data-icon="home">Inicio</a>
            <h1>HOTEL BLACK CORNER</h1>
           
        </div>
        <div data-role="main">
            <hr>
            
            <form action="enviar-registro.php" method="POST" data-ajax="false">
                <br>
                <br>
                <br>
                <input type="text" name="usuario" placeholder="usuario">
                <br>
                <br>
                <br>
                <input type="password" name="contra" placeholder="contraseña">
                
                <input type="submit" value="Registrase">
               
            </form>
        
        </div>
        <div data-role="footer">
            <img src="jquery.mobile/images/it.jpg" style="height:100px; width: 15%"> 
		    <img src="jquery.mobile/images/fb.png" style="height:100px; width: 15%"> 
		    <img src="jquery.mobile/images/te.png" style="height:100px; width: 15%"> 
	       <h4>maria camila nuñez molano     -tel:3133582617</h4>
        </div>
    </div>
</body>
</html>