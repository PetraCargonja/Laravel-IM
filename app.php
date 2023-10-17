<?php

function dumpPost()
{
    var_dump(
        $_POST
    );
}

if (!empty($_POST)) {
    dumpPost();
    exit;
}