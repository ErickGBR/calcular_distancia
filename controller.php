<?php
header("Access-Control-Allow-Origin: *");
include('conection.php');

$class = new conection();

$db = $class->cone();
//TEST de conexion
if($_POST["flag"] == "login"){
    try{
            $data = $db->prepare("SELECT * FROM users WHERE login = :user AND password = :pass");
            $data->execute(array(":user" => $_POST['user'],
            ":pass" => $_POST['pass']));
            $users = array();
            while($w = $data->fetch(PDO::FETCH_ASSOC)){
                $users[] = $w;
            }
            echo json_encode($users);
        }catch(Exeption $err){
            echo $err;
        }
}

if($_POST["flag"] == "message"){
    try{
    $inser = $db->prepare("INSERT INTO users_log (id_user, state)VALUES(:id, :msg)");
    $inser->execute(array(":id" =>$_POST['user_id'], ":msg" => $_POST['data']));
    echo "success";
    }catch(Exeption $err){
        echo "error";
    }
}

if($_POST["flag"] == "manager"){
    try{
        $data = $db->prepare("SELECT * FROM users_log");
        $data->execute();
        $users = array();
            while($w = $data->fetch(PDO::FETCH_ASSOC)){
                $users[] = $w;
            }
            echo json_encode($users);
    }catch(Exeption $err){
        echo "error";
    }
}

if($_POST["flag"] == "delete"){
    try{
        $delete = $db->prepare("DELETE FROM users_log WHERE id = :id");
        $delete->execute(array(":id"=> $_POST["id_user"]));
        echo "Eliminado";
    }catch(Exeption $err){
        echo "error";
    }
}

?>