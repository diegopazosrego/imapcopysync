<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
<?php
function incForm($Host_imap_origen,$email_origen,$contraseña_origen,$Host_imap_destino,$email_destino,$contraseña_destino){ ?>
    <form action = "insert.php" method = "post">
        <p>Host Imap Origen: <input type = "text" name = "Host_imap_origen" value="<?php echo $Host_imap_origen; ?>" /></p> 
        <p>Email de origen: <input type = "text" name = "email_origen" value="<?php echo $email_origen; ?>"/>(*)</p>
        <p>Contraseña de cuenta de Correo Origen: <input type = "password" name = "contraseña_origen" value="<?php echo $contraseña_origen; ?>"/>(*)</p> 
        <p>Host Imap Destino: <input type = "text" name = "Host_imap_destino" value="<?php echo $Host_imap_destino; ?>" /></p> 
        <p>Email de destino: <input type = "text" name = "email_destino" value="<?php echo $email_destino; ?>"/>(*)</p>
        <p>Contraseña de cuenta de Correo Destino: <input type = "password" name = "contraseña_destino" value="<?php echo $contraseña_destino; ?>"/>(*)</p> 

        <p><input type="reset" value="Borrar"/>
        <p><input type = "submit" name = "Entrar" /></p>

    </form>
<?php
}
?>
    <?php
    if (count($_POST) == 0) {
        incForm("", "", "", "", "", "", array());
    } else {
        $cadenaErrores = "</br>";

/* Procesamiento de datos de origen*/
        $Host_imap_origen = htmlspecialchars(trim(strip_tags(str_replace("&", "&amp;", $_REQUEST["Host_imap_origen"]))), ENT_QUOTES, "ISO-8859-1");
         if ($Host_imap_origen == "") {
            $cadenaErrores.= "Debes establecer un host imap origen. </br>";
        } else {
            
        }

        $email_origen = htmlspecialchars(trim(strip_tags(str_replace("&", "&amp;", $_REQUEST["email_origen"]))), ENT_QUOTES, "ISO-8859-1");
        if (filter_var($_REQUEST["email_origen"], FILTER_VALIDATE_EMAIL)) {
            if (isset($_REQUEST["email_origen"]) && htmlspecialchars(trim(strip_tags($_REQUEST["email_origen"])) != "")) {
                
            } else {
                $cadenaErrores.= "Debes introducir un email de origen.</br>";
            }
        } else {
            $cadenaErrores.= "El email que introduces no es válido.</br>";
        }


        $contraseña_origen = htmlspecialchars(trim(strip_tags(str_replace("&", "&amp;", $_REQUEST["contraseña_origen"]))), ENT_QUOTES, "ISO-8859-1");
        if ($contraseña_origen == "") {
            $cadenaErrores.= "El campo contraseña no puede estar vacío. </br>";
        } else {
        }
/* Procesamiento de datos de destino*/
        $Host_imap_destino = htmlspecialchars(trim(strip_tags(str_replace("&", "&amp;", $_REQUEST["Host_imap_destino"]))), ENT_QUOTES, "ISO-8859-1");
         if ($Host_imap_destino == "") {
            $cadenaErrores.= "Debes establecer un host imap destino. </br>";
        } else {
            
        }

        $email_destino = htmlspecialchars(trim(strip_tags(str_replace("&", "&amp;", $_REQUEST["email_destino"]))), ENT_QUOTES, "ISO-8859-1");
        if (filter_var($_REQUEST["email_destino"], FILTER_VALIDATE_EMAIL)) {
            if (isset($_REQUEST["email_destino"]) && htmlspecialchars(trim(strip_tags($_REQUEST["email_destino"])) != "")) {
                
            } else {
                $cadenaErrores.= "Debes introducir un email de destino.</br>";
            }
        } else {
            $cadenaErrores.= "El email que introduces no es válido.</br>";
        }


        $contraseña_destino = htmlspecialchars(trim(strip_tags(str_replace("&", "&amp;", $_REQUEST["contraseña_destino"]))), ENT_QUOTES, "ISO-8859-1");
        if ($contraseña_destino == "") {
            $cadenaErrores.= "El campo contraseña no puede estar vacío. </br>";
        } else {
        }
    }
    ?>
</body>
</html>   