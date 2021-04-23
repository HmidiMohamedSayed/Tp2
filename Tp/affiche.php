<?php
session_start();
foreach($_SESSION['list'] as $key=>$val){
    echo "username is $key password $val <br>";
}