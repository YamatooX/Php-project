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
        setcookie('Key', "Ala", time()-3600);
        setcookie('Blanket', "Ala", time()-3600);
        session_destroy();
        exit;
    }
}

// #######################################################

function EntryKey($id)
{
    if($id == 42 && !isset($_COOKIE['Key']))
        setcookie('Key', time(), time()+ 60 * 60);

    if(isset($_COOKIE['Key']))
        echo ('<p> Masz Klucz </p>');
}

function Blanket($id)
{
    if($id == 18 && !isset($_COOKIE['Blanket']))
        setcookie('Blanket', time(), time()+ 60 * 60);

    if(isset($_COOKIE['Blanket']))
        echo ('<p> Masz prześcieradło </p>');
}

######################## ITEMS ########################

function Ghost($id)
{
    if(!isset($_COOKIE['Blanket']) && ($id == 9 || $id == 17 || $id == 43 || $id == 19))
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
        setcookie('Key', "Ala", time()-3600);
        setcookie('Blanket', "Ala", time()-3600);
        session_destroy();
        exit;
    }
}

function Taras($id)
{
    if(isset($_COOKIE['Blanket']) && $id == 13)
    {
        include("../Events/Win.html");
        setcookie('Key', "Ala", time()-3600);
        setcookie('Blanket', "Ala", time()-3600);
        session_destroy();
        exit;
    }
}