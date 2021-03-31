<?php
   
    class basket
    {
        public $db;
        public function __construct($mydb)
        {

            $this->db= $mydb;
            
        }

       

        public function basket_list($user_id)
        {
            $result = $this->db->query("SELECT * FROM basket_tbl where user_id = '$user_id'");
            $result=$result->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }



            
            
            
            
            
    }