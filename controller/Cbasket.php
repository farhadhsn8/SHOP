<?php
    require_once 'admin/model/Mbasket.php';
    $basket = new basket($mydb);
    switch($action)
    {
        case 'detail':
           if(isset($_SESSION['user_id']))
           {
               $user_id = $_SESSION['user_id'];
              $result = $basket->basket_list($user_id);
              //var_dump($result);die;
           }
           else
           {
               header("location:index.php?c=user&a=login");
           }
               

        break;


        case 'login':
        if($_POST)
        {
            $data = $_POST['frm'];
            $user = $user->user_login($data);
            $_SESSION['user_id']=$user['id'];
            $_SESSION['user_name']=$user['name'];
            header("location:index.php?c=index&a=index");
        }
        break;


        case 'logout':
           session_destroy();
           header("location:index.php?c=user&a=login");
        break;




        
    }

    require_once 'view/'.$controller.'/'.$action.'.php';
?>