<?php
function getAllReservation(){
    $connec = new PDO('mysql:dbname=reservation','root','0000');
    $request = $connec->prepare('SELECT * FROM reservation');
    $request->execute();
    return $request->fetchAll();
};

