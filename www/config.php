<?php 

// Change this to your connection info.
$DATABASE_HOST = 'db-server';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'abc';
$DATABASE_NAME = 'eman';

// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
