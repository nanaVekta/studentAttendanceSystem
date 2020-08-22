<?php
require_once 'src/QrCode.php';

header('Content-Type: image/png');

$qr = new Endroid\QrCode\QrCode();

if(isset($_POST['text']) && !empty($_POST['text'])){
    $qr->setText($_POST['text']);
    $qr-> setSize(200);
    $qr->render();
}
else{
    echo 'Please input something';
}
