<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../View/TodolistView.php";
require_once __DIR__ . "/../Helper/inputHelper.php";

use \Entity\Todolist;
use \Repository\TodoListRepositoryImpl;
use \Service\TodolistServiceImpl;
use \View\TodolistView;

function testViewShowTodolist(): void
{

    $todolistRepository = new TodoListRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodoList("Belajar PHP Dasar");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP Database");

    $todolistView->showTodoList();

}

function testViewAddTodolist(): void
{

    $todolistRepository = new TodoListRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodoList("Belajar PHP Dasar");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP Database");

    $todolistView->showTodoList();

    $todolistView->addTodoList();

    $todolistView->showTodoList();

    $todolistView->addTodoList();

    $todolistView->showTodoList();


}

function testViewRemoveTodolist(): void
{

    $todolistRepository = new TodoListRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodoList("Belajar PHP Dasar");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP Database");

    $todolistView->showTodoList();

    $todolistView->removeTodoList();

    $todolistView->showTodoList();

    $todolistView->removeTodoList();

    $todolistView->showTodoList();


}

testViewRemoveTodolist();
