<?php

require_once "../Model/TodoList.php";
require_once "../view/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Eko");
addTodoList("Kurniawan");
addTodoList("Khannedy");
addTodoList("Budi");

showTodoList();

viewRemoveTodoList();

showTodoList();