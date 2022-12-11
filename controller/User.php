<?php
require DIR.'/model/UserModel.php';
class User{
    public function List(){
        
        $UserModel = new UserModel();
        $data = $UserModel->UserList();

        require DIR.'/view/UserList.php';

    }
}