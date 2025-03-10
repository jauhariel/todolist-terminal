<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";
function viewRemoveTodoList()
{
    echo "Menghapus Todolist" . PHP_EOL;

    $nomor = input("Nomor (x untuk batal)");

    if ($nomor == "x") {
        echo "Batal menghapus todo" . PHP_EOL;
    } else {
        $success = removeTodoList($nomor);

        if ($success) {
            echo "Sukses menghapus todo nomor $nomor" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $nomor" . PHP_EOL;
        }
    }
}