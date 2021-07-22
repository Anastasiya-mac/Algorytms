<?php

namespace Explorer;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Explorer/', '', $className);
    require_once __DIR__ . $className . '.php';
});


echo "Все файлы директории <br>\n";
$viewAllFiles = (new Explorer)->AllFiles();
echo "Поиск файла по директории " . $viewAllFiles;
$viewFile = (new Explorer)->searchForDir("idndex.php");