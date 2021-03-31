<?php
    require_once 'admin/model/Mpro.php';
    $pro = new pro($mydb);
    switch($action)
    {
        case 'list':
            if(isset($_GET['procat']))
            {
                $catid = $_GET['procat'];
                $result = $pro->pro_list_catid($catid);
            }
            else
            {
                $result = $pro->pro_list();

            }

        break;

        case 'detail':
           $id = $_GET['id'];
           $result = $pro->pro_show_edit($id);
        break;


        
    }

    require_once 'view/'.$controller.'/'.$action.'.php';
    
?>

