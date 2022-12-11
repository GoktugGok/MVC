<?php 

class UserModel{
    public $db;
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=testdbs;','root','');
    }
    public function UserList(){
        $q = $this->db->query('SELECT * FROM users');
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }
}