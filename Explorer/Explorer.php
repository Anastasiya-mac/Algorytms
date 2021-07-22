<?php

namespace Explorer;

use DirectoryIterator;
use ArrayObject;

class Explorer
{
    public $name;
    public $obj;

    public function allFiles() {
        foreach (new DirectoryIterator('/opt/lampp/htdocs/myFolder/Explorer') as $fileInfo) {
            if($fileInfo->isDot()) continue;
            $name = $fileInfo->getFilename();
            echo $fileInfo->getFilename() . "<br>\n";
        }
    }

    public function searchForDir(string $nameOfFile) {
        $listOfFiles = array();
        foreach (new DirectoryIterator('/opt/lampp/htdocs/myFolder/Explorer') as $fileInfo) {
            if($fileInfo->isDot()) continue;
            $name = $fileInfo->getFilename();
            array_push($listOfFiles, $name);

        }
        $obj = new ArrayObject($listOfFiles);
        $iter = $obj->getIterator();
    
        while($iter->valid())
        {
            if ($iter->current() == $nameOfFile)
            {
                echo $nameOfFile . "  файл найден" . "<br>\n";
                return 0;
            }
            $iter->next();
        }

        echo $nameOfFile . "  файл НЕ найден" . "<br>\n";
        return 0;

    }

}
