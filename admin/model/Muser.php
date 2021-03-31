<?php
   
    class user
    {
        public $db;
        public function __construct($mydb)
        {

            $this->db= $mydb;
            
        }

       
        
        public function user_add($data)
        {
            $this->db->query("insert into  user_tbl (email , password , status , vc) value('$data[email]','$data[password]','0', '$data[vc]')");
            
        }

        public function user_login($data)
        {
            $result = $this->db->query("SELECT * FROM user_tbl where email= '$data[email]' and password = '$data[password]'");
            $result=$result->fetch(PDO::FETCH_ASSOC);
            return $result;
            
        }

        



            
            
            
            
            
    }