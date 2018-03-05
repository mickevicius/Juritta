<?php

    require_once('sql_functions.php'); echo "<br>";
    $id = $_POST['id'];
     $menuItem =  $_POST['menu_item']; // globalus masyvas


    updateMItem($id, $menuItem);
    echo "Objektas sukurtas sekmingai <br>";
