<?php

$this->create('uvcalc_online_index', '/')->action(
    function($params){
        require __DIR__ . '/../index.php';
    }
);

?>
