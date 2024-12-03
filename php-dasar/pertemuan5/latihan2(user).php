<?php
//PENGULANGAN PADA ARRAY
// for / foreach
$angka = [3, 2, 15, 20, 11, 48, 98, 22,99,37,39,939];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERTEMUAN 5</title>
    <link rel="stylesheet" href="style5.css"/>
</head>
<body>
    <h1>for</h1>
    <?php for ( $i = 0; $i < count($angka); $i++ ) { ?>
    <div class="div"><?php echo $angka[$i]; ?> </div>
    <?php } ?>

        <div class="clear"></div>

        <h1>foreach</h1>
        <?php foreach( $angka as $ang ) { ?>
            <div class="div" ><?php echo $ang; ?> </div>
            <?php } ?>

            <div class="clear"></div>

            <h1>sintaks simple</h1>
            <?php foreach( $angka as $ang ) : ?>
                <div class="div"><?= $ang; ?></div>
                <?php endforeach; ?>

</body>
</html>