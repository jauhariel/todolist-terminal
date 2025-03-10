<?php

require_once "../view/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("tes");
addTodoList("tes2");
addTodoList("tes3");

viewAddTodoList();

showTodoList();