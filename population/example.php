<?php

    require('dbpopulator.class.php');
    
    $db = new DBPopulator();
    
    $db->setDb('localhost', 'root', 'root');
    
    // You can either use 'database.table' or 'database.*'
//    $db->populate('labdb.mytable');
    $db->populate('labdb.*');
    
    // And you can also use any combination of these methods, using an array
//    $db->populate(array('mydb.table', 'another_db.*'));
    
    // It's possible to define the number of inserted data
//    $db->populate('mydb.mytable', 20);
    
    // And you can generate a file with the insert statements
//    $db->populate('mydb.mytable', NULL, 'dummy_inserts.sql');