<?php

session_start();

if(!isset($_SESSION['contador'])) 
{
    $_SESSION['conatdor'] = 0;
}