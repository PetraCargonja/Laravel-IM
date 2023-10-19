<?php

setcookie('color', 'red', time() + 3600, secure: true);

var_dump(
    $_COOKIE
);