<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../Config/Database.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodoListRepositoryImpl;

function testShowTodolist(){

    $connection = \Config\Database::getConnection();
    $todolistRepository =  new TodoListRepositoryImpl($connection);
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar OOP");
    $todolistService->addTodoList("Belajar Database");

    $todolistService->showTodoList();

}

function testAddTodolist(): void
{
    $connection = \Config\Database::getConnection();
    $todolistRepository =  new TodoListRepositoryImpl($connection);

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar OOP");
    $todolistService->addTodoList("Belajar Database");

    //$todolistService->showTodoList();

}

function testRemoveTodolist(): void
{
    $connection = \Config\Database::getConnection();
    $todolistRepository =  new TodoListRepositoryImpl($connection);

    $todolistService = new TodolistServiceImpl($todolistRepository);

    echo $todolistService->removeTodoList(5) . PHP_EOL;
    echo $todolistService->removeTodoList(4) . PHP_EOL;
    echo $todolistService->removeTodoList(3) . PHP_EOL;
    echo $todolistService->removeTodoList(2) . PHP_EOL;
    echo $todolistService->removeTodoList(1) . PHP_EOL;

}

testShowTodolist();
