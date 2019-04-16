
<?php

// la base de datos se llama TEST2

try {
    $dbname = "LEYES";
    $dbuser = "root";
    $dbpass = "avaras08";
    $dbhost = "localhost";
    if($dblink = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass))
    {
        echo 'Conexion exitosa';
        $val = $dblink->prepare('select * from usuario');
        $val->execute();
        $result=$val->fetchAll();
        echo '<pre>';
        var_dump($result);
        echo '</pre>';
        
    }
    
    $dblink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {

    echo "ERROR: " . $e->getMessage();
}
?>