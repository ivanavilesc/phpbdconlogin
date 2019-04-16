<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <link href="css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    </head>
    <body>


        <?php
        // put your code here
        ?>
        <h3>Identificación</h3>
        <form id="frmLogin" method="POST" action="controller/controlador.php">

            <table>
                <tr>
                    <td>Usuario</td>
                    <td><input type="text" id="uid" name="uid" /></td>

                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" id="pwd" name="pwd" /></td>

                </tr>
                <tr>
                    <td><input type="submit" value="Autenticar" /></td>

                </tr>
            </table> 

        </form>

    </body>
</html>
