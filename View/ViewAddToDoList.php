<?php 

require_once __DIR__ . "/../Model/ToDoList.php";
require_once __DIR__ . "/../Helper/input.php";
require_once __DIR__ . "/../BusinessLogic/AddToDoList.php";

function viewAddToDoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;
    
    $todo = input("Todo (x untuk batal)");

    if ($todo == "x"){
        echo "Batal menambah Todo" . PHP_EOL;
    } else {
        addToDoList($todo);
    }
}