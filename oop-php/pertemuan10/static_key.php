<?php

class example {
    public static $number = 1;

    public function halo() {
            return "halo". self::$number++ . "kali. <br>";
    }
}

$obj  = new example;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";
$obj2  = new example;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();




// class exStatic{
//     public static $nubmer = 1;

//     public static function halo(){
//         return "halo". self::$nubmer++ . "kali";
//     }
// }

// echo exStatic::$nubmer;
// echo "<br>";
// echo exStatic::halo();
// echo "<hr>";
// echo exStatic::halo();
// echo "<hr>";
