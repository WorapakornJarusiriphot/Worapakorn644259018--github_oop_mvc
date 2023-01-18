<?php
class ConDB{
    private $host,$db,$user,$pass;
    public $conn;

    public function ConDB(){
        $this->host = 'localhost';
        $this->user = 'root'; 
        $this->pass = ''; 
        $this->db = 'sci_course'; 
    }

    public function connect(){
        try{
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->pass);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    // public function __construct
    //if 
} 
?>