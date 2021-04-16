<?php

require './MySqlDB.php';
$mySql = new MySqlDB();
$tevekenyseg= $_POST["tevekenyseg"];
$datum=$_POST["datum"];
$mySql->ujRekord("tevekenyseg", "(Tevekenyseg,Dátum)", "('$tevekenyseg','$datum')");

