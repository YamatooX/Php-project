<?php

function setHp()
{
    if (!isset($_SESSION['hp'])) {
        $_SESSION['hp'] = 100;
    } else {
        $_SESSION['hp']--;
    }
}

function YouDied($id)
{
    if ( $_SESSION['hp'] <= 0 || $id == 47 )
    {
        include("../Events/Over.html");
        session_destroy();
        exit;
    }
}

// #######################################################
//
//function Key($id)
//{
//    if($id == 18 && !isset($_SESSION["Key"]))
//       return $_SESSION["Key"];
//}

// #######################################################

function Ghost($id)
{
    if(!isset($_COOKIE['koc']) && ($id == 9 || $id == 17 || $id == 43 || $id == 19))
    {
        $_SESSION['hp'] -= 14;
    }
}

function Hospital($id)
{
    if($id == 4 || $id == 38 )
        $_SESSION['hp'] += 16;
}

function EntryDoor($id)
{
    if(isset($_COOKIE['Key']) && $id == 37)
    {
        include("../Events/Win.html");
        session_destroy();
        exit;
    }
}

function Taras($id)
{
    if(!isset($_COOKIE['koc']) && $id == 13)
    {
        include("../Events/Win.html");
        session_destroy();
        exit;
    }
}