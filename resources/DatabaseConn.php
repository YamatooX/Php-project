<?php

function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "Jarek";
    $dbpass = "12345";
    $db = "ponymaze";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function CloseCon($conn)
{
    $conn -> close();
}

function selectConnectionsFromDataBase($id)
{
    $base = OpenCon();
    $q= "Select connections from nodes where id=$id";

    $result = mysqli_query($base, $q);

    $ArrayToExplode = array();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result))
                $ArrayToExplode = $row["connections"];
        }
        $ArrayAfterExploding = explode(" ", $ArrayToExplode);
        return $ArrayAfterExploding;
}

function selectPlotFromDataBase($id)
{
    $base = OpenCon();
    $q = "Select plot from plot where id=$id";

    $result = mysqli_query($base, $q);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result))
            $m = $row["plot"];
    }
    return $m;
}