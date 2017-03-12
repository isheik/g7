<?php
    define("PROJECT_DIR", "g7");

    $path_array = explode(DIRECTORY_SEPARATOR, getcwd());
    $depth = count($path_array) - array_search(PROJECT_DIR, $path_array) - 1;
    $add_to_path = "";
    for($i = 0; $i < $depth; $i++)
        $add_to_path .= "../";
?>
