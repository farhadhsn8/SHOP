<?php
   
    class pro
    {
        public $db;
        public function __construct($mydb)
        {

            $this->db= $mydb;
            
        }

        public function pro_list()
        {
            $result = $this->db->query("SELECT * FROM pro_tbl");
            $result=$result->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function pro_list_default()
        {
            $result = $this->db->query("SELECT * FROM pro_tbl where chid= '0'");
            $result=$result->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function under_list_default($id)
        {
            $result = $this->db->query("SELECT * FROM pro_tbl where chid= '$id'");
            $result=$result->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        
        public function pro_cat_list()
        {
            $result = $this->db->query("SELECT * FROM procat_tbl where chid!='0'");
            return $result;
        }
        
        public function pro_delete($id)
        {
            $this->db->query("delete FROM pro_tbl where id='$id'");
            
        }
        
        public function pro_show_edit($id)
        {
            $result = $this->db->query("SELECT * FROM pro_tbl where id='$id' ");
            $res=$result->fetch(PDO::FETCH_ASSOC);
            return $res;
        }
        
        public function pro_edit($data,$id)
        {
            $this->db->query("update pro_tbl set title='$data[title]' , chid = '$data[chid]' where id = '$id'");
            
        }
        
        public function file_uploader($file,$data)
        {   
            //var_dump($_FILES);die;
            $q= $data['title'];
            if(!file_exists("pro_pics/".$q))
            {
                mkdir("pro_pics/".$q);
            }
            $file = $_FILES[$file];
            
            
            $filename = $file['name'];
            $array = explode(".",$filename);  
            $ext= end($array);
            $newname= "file" . "-" . rand() .".". $ext;
            $from = $file['tmp_name'];
            $to="pro_pics/".$q."/".$newname;
            echo $to ;
            move_uploaded_file($from,$to);
            return $to;
        }
        
        public function pro_add($data,$img1,$img2,$img3)
        {
            $this->db->query("insert into  pro_tbl (title,cat_id,text,price, count ,image1,image2,image3) value('$data[title]','$data[cat_id]','$data[text]','$data[price]' , '$data[count]','$img1','$img2','$img3')");
            
        }

        public function pro_list_catid($cat_id)
        {
            $result = $this->db->query("SELECT * FROM pro_tbl where cat_id = '$cat_id'");
            $result=$result->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function pro_basket_list($id)
        {
            $result = $this->db->query("SELECT * FROM pro_tbl where id='$id' ");
            $res=$result->fetch(PDO::FETCH_ASSOC);
            return $res;
        }


            
            
            
            
            
    }