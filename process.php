<?php
require_once "config.php";
require_once "functions.php";


$csv_object = array();
$csv_object[] = array('number' => 380919082171, 'duration' => 62);
$csv_object[] = array('number' => 380919082171, 'duration' => 15);
$csv_object[] = array('number' => 445577880087, 'duration' => 62);
$process_cdr_options = array(
    'local' => 9,
    'outbound' => 3,
    'is_detailed' => True
);

$db_ops = new DatabaseOps($local_config);
$db_ops->import_cdr($csv_object);

$rm = new RateMachine($db_ops);

$res = $rm->process_cdr();

var_dump($res);

?>