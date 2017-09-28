<?php

require 'TimeTravel.php';

$marty = new \Wcs\TimeTravel('1985-12-31 08:10:20', '1986-02-20 09:20:10');

?>

<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<div class="container">
    <?php

    echo '<pre>';
    var_dump($marty->getTravelInfo());
    echo '<br>';
    var_dump($marty->findDate(1000000000));
    echo '<br>';
    var_dump($marty->backToFutureStepByStep('P1M1W1D'));
    echo '</pre>';

    ?>
</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script></body>
</html>

