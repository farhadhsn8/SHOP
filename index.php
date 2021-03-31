<?php
    ob_start();
    include_once "public/include/config.php";
    include_once "controller/Clayout.php";
    include_once "view/layout/header.php";
?>


    <?php

 
        if(isset($_GET['c']))   
        {
            $controller = $_GET['c'];
        }
        else
        {
            $controller = 'index';
        }



        if(isset($_GET['a']))  //which action ? 
        {
            $action = $_GET['a'];
        }
        else
        {
            $action = 'index';
        }


        
        
        if(file_exists('controller/C'.$controller.'.php'))
        {
            require_once'controller/C'.$controller.'.php';
        }
    ?>


<?php

    include_once "view/layout/footer.php";
?>