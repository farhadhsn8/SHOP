<?php
   
    class procat
    {
        public $db;
        public function __construct($mydb)
        {

            $this->db= $mydb;
            
        }

        public function procat_list()
        {
            $result = $this->db->query("SELECT * FROM procat_tbl");
            $result=$result->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function procat_list_default()
        {
            $result = $this->db->query("SELECT * FROM procat_tbl where chid= '0'");
            $result=$result->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function under_list_default($id)
        {
            $result = $this->db->query("SELECT * FROM procat_tbl where chid= '$id'");
            $result=$result->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function procat_add($data)
        {
            $this->db->query("insert into  procat_tbl (title,chid) value('$data[title]','$data[chid]')");
            
        }

        public function procat_main_list()
        {
            $result = $this->db->query("SELECT * FROM procat_tbl where chid='0'");
            return $result;
        }

        public function procat_delete($id)
        {
             $this->db->query("delete FROM procat_tbl where id='$id'");
            
        }

        public function procat_show_edit($id)
        {
            $result = $this->db->query("SELECT * FROM procat_tbl where id='$id' ");
            $res=$result->fetch(PDO::FETCH_ASSOC);
            return $res;
        }

        public function procat_edit($data,$id)
        {
             $this->db->query("update procat_tbl set title='$data[title]' , chid = '$data[chid]' where id = '$id'");
           
        }



        

    }