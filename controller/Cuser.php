<?php
    require_once 'admin/model/Muser.php';
    $user = new user($mydb);
    switch($action)
    {
        case 'register':
           if($_POST)
           {
               $data = $_POST['frm'];
               $data['vc']=uniqid();//baraye taiiid email
               $user->user_add($data);
              // mail($data['email'],'vc subject',"<a href='academyit.net/vc.php?vc=$data[vc]'> برای تایید آدرس ایمیل کلیک کنید</a>");

              //برای ایمیل فرستادن حتما باید روی سرور باشیم 
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