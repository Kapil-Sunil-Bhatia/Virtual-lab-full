<?php
$con=mysqli_connect('localhost','root','','register');

try{

    $statement = $db->query("SELECT * FROM users");
    $members = $statement->fetchAll(PDO::FETCH_ASSOC);

}catch (PDOException $ex){
    
    $result = flashMessage("An error occurred: " .$ex->getMessage());
}