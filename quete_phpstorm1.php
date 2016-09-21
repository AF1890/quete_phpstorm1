<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 21/09/16
 * Time: 15:22
 */


$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];


foreach ($students as $prenom => $age) {
    echo $prenom . " " . $age . "</br>";
}

echo "</br>" . "Moyenne " . array_sum($students)/count($students);

phpinfo();

?>