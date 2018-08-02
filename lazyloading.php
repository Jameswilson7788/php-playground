<?php
function autoload($class) {
    $paths = explode(PATH_SEPARATOR, get_include_path());
    $flags = PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE;
    $file = strtolower(
        str_replace("\\", DIRECTORY_SEPARATOR, 
        trim($class,'\\'))).
        ".php";
}