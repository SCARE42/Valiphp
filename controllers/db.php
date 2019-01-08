<?php
function getAllReservation(){
    require("db.config");
    $connec = new PDO('mysql:dbname='$DB["name"],$DB["username"],$DB["password"]);
    $request = $connec->prepare('SELECT * FROM reservation');
    $request->execute();
    return $request->fetchAll();
};

