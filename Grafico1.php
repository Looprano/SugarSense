<?php
include('phpgraphlib.php');
$graph = new PHPGraphLib(650,200);
$data = array("1" => 83.12, "2" => 87.54, "3" => 88.54, "4" => 80.33,
    "5" => 81.34, "6" => 79.31, "7" => 78.36, "8" => 85.27, "9" => 81.24,
    "10" => 77.21, "11" => 76.26, "12" => 86.34, "13" => 85.36,
    "14" => 89.28, "15" => 83.25);
$graph->addData($data);
$graph->setTitle('Umidita\' media');
$graph->setBars(false);
$graph->setLine(true);
$graph->setDataPoints(true);
$graph->setDataPointColor('maroon');
$graph->setDataValues(true);
$graph->setDataValueColor('maroon');
$graph->setGoalLine(.0025);
$graph->setGoalLineColor('red');
$graph->createGraph();
?>