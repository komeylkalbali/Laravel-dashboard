<?php

function activeClass($name = [] , $class = 'active'){
    return (\Request::is($name)) ? $class : '';
}







 ?>
