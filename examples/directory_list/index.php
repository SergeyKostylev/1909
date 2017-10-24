<?php

function getDirectoryList($path, $search = null)
{
    $files = scandir($path);
    $files = array_slice($files, 2);
    
    if (!is_null($search)) {
        $files = array_filter($files, function($item) use ($search) {
            return strpos($item, $search) !== false;
        });
    }
    
    return $files;
}

var_dump(getDirectoryList('..', 'functio'));