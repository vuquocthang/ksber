<?php


if( isset($_GET['id'])) {
    echo md5($_GET['id']);
}

?>