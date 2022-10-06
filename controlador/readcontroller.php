<?php 

require('../modelo/read.PHP');

$objRead = new reading;
$objRead->readCon();
$consult=$objRead->read();
