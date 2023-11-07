<?php

namespace Service {

    use Entity\Todolist;
    use Repository\TodoListRepository;

    interface TodolistService {

        function showTodoList(): void;

        function addTodoList(string $todo): void;

        function removeTodoList(int $number): void;

    }

    class TodolistServiceImpl implements TodolistService {

        private TodoListRepository $todoListRepository;

        public function __construct(TodoListRepository $todoListRepository)
        {
            $this->todoListRepository = $todoListRepository;
        }

        public function showTodoList(): void
        {
            echo "TODOLIST" . PHP_EOL;
            $todolist = $this->todoListRepository->findAll();
            foreach ($todolist as $number => $value) {
                echo $value->getId() ." ." . $value->getTodo() . PHP_EOL;
            }
        }

        public function addTodoList(string $todo): void
        {
            $todolist = new Todolist($todo);
            $this->todoListRepository->save($todolist);
            echo "SUKES MENAMBAH TODOLSIT" . PHP_EOL;
        }

        public function removeTodoList(int $number): void
        {
            if ($this->todoListRepository->remove($number)) {
                echo "SUKSES MENGHAPUS TODOLIST" . PHP_EOL;
            } else {
                echo "GAGAL MENGHAPUS TODOLIST" . PHP_EOL;
            }

        }

    }

}