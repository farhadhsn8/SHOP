<?php
    require_once 'model/Mpro.php';
    $class = new pro($mydb);
    switch($action)
    {
        case 'list':
            if(isset($_GET['del']))
            {
                $id = $_GET['id'];
               $class->pro_delete($id);
            }
            $pro = $class->pro_list();
        break;


        case 'add':
            $res = $class->pro_cat_list();
            if($_POST)
            {
                $data = $_POST['frm'];
                $folder = "pro_pics".rand();
                $img1 = $class->file_uploader('image1',$data);
                $img2 = $class->file_uploader('image2',$data);
                $img3 = $class->file_uploader('image3',$data);
                $class->pro_add($data,$img1,$img2,$img3);
            }
            
        break;

        case 'edit':
            $id = $_GET['id'];
           // $res1 = $class->pro_main_list();
            $res = $class->pro_show_edit($id);
            if($_POST)
            {
                $data = $_POST['frm'];
                $class->pro_edit($data,$id);
                $pro = $class->pro_list();
                include_once "view/pro/list.php";
            }
        break;


        // case 'delete':
        //     $id = $_GET['id'];
        //     $class->pro_delete($id);
        // break;
    }

    require_once 'view/'.$controller.'/'.$action.'.php';
    
?>
