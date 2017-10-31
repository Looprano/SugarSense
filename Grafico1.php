<?php
include('phpgraphlib.php');
$graph = new PHPGraphLib(650,250);
$data = array("1/11" => 83.12, "2/11" => 87.54, "3/11" => 88.54, "4/11" => 80.33,
    "5/11" => 81.34, "6/11" => 79.31, "7/11" => 78.36, "8/11" => 85.27, "9/11" => 81.24,
    "10/11" => 77.21, "11/11" => 76.26, "12/11" => 86.34, "13/11" => 85.36,
    "14/11" => 89.28, "15/11" => 83.25);
$graph->addData($data);
$graph->setTitle('Umidita\' media (ultimi 15 giorni)');
$graph->setXValuesHorizontal(true);
$graph->setBars(false);
$graph->setLine(true);
$graph->setDataPoints(true);
$graph->setRange(0, 100);
$graph->setDataPointColor('maroon');
$graph->setDataValues(true);
$graph->setDataValueColor('maroon');
$graph->setGoalLine(.0025);
$graph->setGoalLineColor('red');
$graph->createGraph();
?>