<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Productos DE VENTA</title>
        <link rel="stylesheet" href="css/estilosLogin.css" type="text/css" media="all">
    </head>
    <body>
    <nav class="menu" id="menu">
            <ul>
                <li><a href="Productos_cliente.php">Productos</a></li>
                <li><a href="login.php">Salir</a></li>            
            </ul>
        </nav>
        
    </body>
</html>
<h1><center>PRODUCTOS EN VENTA</center></h1><br>
<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/ESPE202205-T3-AlphaCoders/06-Code/TiendaOnline/db/db.php";
    $filter = [];
    $options = [];
    $query = new MongoDB\Driver\Query($filter, $options);
    $cursor = $manager->executeQuery('TiendaOnline.Productos', $query);
    
    
    echo '<div class="col-md-12"';
    echo '<div class="row" style="padding-left: 10rem;padding-right: 10rem;">';
    echo '<table cellspacing="10" cellpadding="10" border>';
    echo '<tr>';
    echo '<th style="color:black;">Categoria</th>';
    echo '<th style="color:black;">Nombre Producto</th>';
    echo '<th style="color:black;">Talla</th>';
    echo '<th style="color:black;">Precio</th>';
    echo '</tr>';

    foreach ($cursor as $document) {
        $document = json_decode(json_encode($document),true);
            
        echo '<tr>';
        echo '<td>'.$document['categoria'].'</td>';
        echo '<td>'.$document['Nombre_Producto'].'</td>';
        echo '<td>'.$document['Talla'].'</td>';
        echo '<td>'.$document['Precio'].'</td>';
        echo '</tr>';
    }
    echo '</div>';
    echo '</div>';
   
?>
            <?php      
            ?>
        </div>
    </div>

</body>
</html>