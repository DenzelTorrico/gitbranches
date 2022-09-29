<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <?php
       require_once("./conexion/conectar.php");
       $pro = new productos();
       
    ?>
</head>
<body>
    <table class="table">
        <tr>
            <th>id</th>
            <th>producto</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Imagen</th>
        </tr>
        <?php foreach(productos::mostrar() as $producto): ?>
            <tr>
                <td><?php echo $producto["id_producto"] ?></td>
                <td><?php echo $producto["producto"] ?></td>
                <td><?php echo $producto["descripcion"] ?></td>
                <td><?php echo $producto["precio"] ?></td>
                <td><?php echo $producto["image"] ?></td>
            </tr>

        <?php endforeach; ?>
    </table>
</body>
</html>