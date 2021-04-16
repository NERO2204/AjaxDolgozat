<?php

require './MySqlDB.php';

$mysqlDb=new MySqlDB();

$tevekenysegek=array();

$eredmeny=$mysqlDb->lekerdez("tevekenyseg");

if ($eredmeny->num_rows>0)
{
while($sor=$eredmeny->fetch_assoc())
{
    
    $tevekenysegek[]=$sor;
    
}
echo json_encode($tevekenysegek);
    
}
else
{
    echo 'nincs adat';
}
