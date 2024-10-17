<?php

date_default_timezone_set("Europe/Bratislava"); /* mohol by si mi ukazat ako to prestavit tak aby vzdy ked
 zapnem php server tak by som mal aktualny bratislavsky cas a nie UNIXovy :( , skusal som to neslo mi to */

function pozdrav() {
    echo "Ahoj"; 
    echo "<br>";
}

function aktualnyCas() {
    return date("Y-m-d H:i:s");
}

function meska() {
    $aktualnyCas = date("H:i:s");
    return $aktualnyCas > "08:00:00";
}

function zapisSubor($subor, $logZaznam) {
    $aktualnaHodina = date("H");
    if ($aktualnaHodina >= 20 && $aktualnaHodina < 24) {
        die("Nedá sa daný príchod zapísať.");
    }
    file_put_contents($subor, $logZaznam . "\n", FILE_APPEND);
}

function ukazSubor($subor) {
    if (file_exists($subor)) {
        echo nl2br(file_get_contents($subor)); // toto by si mi mohol vysvetliť lebo toto som zobral z chatu
    } else {
        echo "Žiadne logy ešte nie sú k dispozícii.";
    }
}

$subor = 'log.txt';
$aktualnyDatumCas = aktualnyCas();
$meskanie = meska() ? "meskanie: true" : "meskanie: false";
$logZaznam = $aktualnyDatumCas . " " . $meskanie;

pozdrav(); 
zapisSubor($subor, $logZaznam); 
ukazSubor($subor);