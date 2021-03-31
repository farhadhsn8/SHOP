<?php
    require_once 'model/Mprocat.php';
    $class = new procat($mydb);
    switch($action)
    {
        case 'list':
            if(isset($_GET['del']))
            {
                $id = $_GET['id'];
               $class->procat_delete($id);
            }
            $procat = $class->procat_list();
        break;


        case 'add':
            $res = $class->procat_main_list();
            if($_POST)
            {
                $data = $_POST['frm'];
                $class->procat_add($data);
            }
            
        break;

        case 'edit':
            $id = $_GET['id'];
            $res1 = $class->procat_main_list();
            $res = $class->procat_show_edit($id);
            if($_POST)
            {
                $data = $_POST['frm'];
                $class->procat_edit($data,$id);
                $procat = $class->procat_list();
                include_once "view/procat/list.php";
            }
        break;


        // case 'delete':
        //     $id = $_GET['id'];
        //     $class->procat_delete($id);
        // break;
    }

    require_once 'view/'.$controller.'/'.$action.'.php';
    
?>
