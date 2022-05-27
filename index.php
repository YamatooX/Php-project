<?php

echo '

<!DOCTYPE html>    
<head>
<style>

html{
   font-size: large;
    background-image: url("images/background.jpg");
    background-size: cover; 
}

body{
    margin: 2vh;
    padding: 1vh;
    background-color: rgb(75, 75, 75, 0.7);
    height: 100%;
    width: auto%;
    position: relative;
}

p{
    color: aliceblue;
    font-size: 5vh;
    text-align: center;
    z-index: 1;
}
a:visited{
    color: white;
}

</style>

</head>
<html lang="en">
    <body>
        <p>Projekt zaliczeniowy z WPRG by Jarosław Bator</p></br>
        <p>Weź kartkę i zaznaczaj, gdzie już byłeś, jeśli rzeczywiście chcesz przejść grę</p></br>
        <p>Zwróć uwagę na swoje zdrowie psychiczne. Po każdym przejściu zmniejszy się o 1</p></br>
        <p>To jest labirynt składający się z ok 50 pomieszczeń.</p></br>
        <p><a href="resources/walkTrough.php?id=1"> Start </p>
    </body>
</html>
';
?>