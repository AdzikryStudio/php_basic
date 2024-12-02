<?php
//--PENGULANGAN--
/*for
while
do.. while
foreach : pengulangan khusus array 
*/

//FOR
/*for($i = 0; $i < 10; $i++ ) {
    echo "halo dunia <br>";
}
    */

 //WHILE
 /*$i = 0;
    while ($i < 10) {
        echo "halo dunia <br>";
$i++;
    }
*/

//DO WHILE
/*$i = 0;
    do {
        echo "halo dunia <br>";
    $i++;
    } while( $i < 5 );
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pertemuan 3</title>
    <link rel="stylesheet" href="style3.css"/>
</head>
<body class="ph">
    <h1>Latihan 1</h1>

    <table border="1" cellpadding="10"  cellspacing="0">
    <?php
        for ( $i = 1; $i <= 5; $i++ ) : ?>
        <?php if( $i % 2 == 1 ) : ?>
        <tr class="warna-baris">
            <?php else : ?>
             <tr class="warna-bari">
                <?php endif; ?>
            <?php
         for ( $j = 1; $j <= 5; $j++ ) : ?>
         <td><?= "$i, $j"; ?> </td> 
         <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>
</body>
</html>