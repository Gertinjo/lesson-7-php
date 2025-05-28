<?php


$host = 'localhost';
$user = 'root';
$password = "";



try{

    $conn = new PDO("mysql:host=$host" , $user , $password);

    $sql = " create database mydb";
    $conn->exec($sql);
    echo "Db is connected";
}catch(Exeption $e){

    echo "Not connected";
}








?>