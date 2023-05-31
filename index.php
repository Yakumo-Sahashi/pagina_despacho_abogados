<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página Oficial PINEDA TEPALCAPA & ASOCIADOS"/>
    <?php 
        require_once 'app/config.php';
        require_once 'app/dependencias.php';
        require_once 'app/router.php';    
    ?>
</head>
<body>
    <?php 
        require_once 'view/main/loader.php';
        if(isset($_GET['view']) && $_GET['view'] != "home"){
            require_once 'view/main/header.php';
            require_once 'view/main/navbar.php';
        }
    ?>
    <div class="d-flex flex-column justify-content-between" style="min-height: 100vh; max-height: 100vh;">
        <div>
            <?php Router::direccion(); ?>
        </div>
        <?php require_once 'view/main/footer.php'; ?>
    </div>
    <script>
        AOS.init();
    </script>
</body>
</html>