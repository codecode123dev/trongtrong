<?php
require_once('../../db/dbhelper.php');

if(!empty($_POST)){
   if(isset($_POST['action'])){
    $action = $_POST['action'];
    switch ($action){
        case 'delete':
            if(isset($_POST['id'])){
                $id = $_POST['id'];
                // câu lệnh truy vấn xóa
                $sql ='delete from category where id = '.$id;
                execute($sql);
            }
            break;
    }
   }
}