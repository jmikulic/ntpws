<?php
    $nrA = $_GET["nrA"];
    $nrB = $_GET["nrB"];
    $nrC = (3 * $nrA - $nrB) / 2;
?>
<html>
    <body>
        Rezultat operacije je: <?php echo  $nrC?>
    </body>
</html>
