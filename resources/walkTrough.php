<?php

include('DatabaseConn.php');
include('EventHandler.php');

session_start();
setHp();

    $id = htmlspecialchars($_GET['id']);
    $_SESSION["id"] = $id;
//   To nie działa => $_SESSION["Koc"] = Koc($id); <= jak ogarnąć zboranie itemów?
// ######### Event "Listeners" #########

        YouDied($id);
        Ghost($id);

        Hospital($id);
        EntryDoor($id);

// #######################################
    $connections = selectConnectionsFromDataBase($id);
    $plot = selectPlotFromDataBase($id);

#################### *** Header *** ####################

echo '
    <!DOCTYPE html>
    <html>
        <head>
            <link href="style.css" rel="stylesheet" type="text/css">
        </head>
        <body>
            <article id="plot">
                <p>Pomieszczenie numer: ' . $id . '</p>
                <p>'. $plot .'</p>
            </article>
            <br>
            <p padding="2vh" margin="1vh"> Zdrowie psychiczne =' . $_SESSION['hp'] . '</p>
        </body>
    </html>';

#################### *** Middle *** ####################

    echo
        '   <body>            
                <div id="breakline"></div>
            </body>
        </html>';

#################### *** Choices *** ####################

    echo '
        <footer>
        <p>Dokąd iść?</p>';

    for($i = 0; $i < count($connections); $i++)
    {
        $s = $connections[$i];
        echo '
            <ul>
                <li><a href="./walkTrough.php?id=' . $SESSION['id'] = $s . '">' . $i+1 . '. Do pomieszczenia nr. ' . $s . '</a> </li>
            </ul>
            ';
    }

    echo '</footer>';

