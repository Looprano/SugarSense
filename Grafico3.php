<?php
include('phpgraphlib.php');
$graph = new PHPGraphLib(650,250);
$data = array ("01"=>12, "02"=>16, "03"=>14, "04"=>17, "05"=>20, "06"=>21, "07"=>17, "08"=>18, "09"=>19, "10"=>22, "11"=>23,
    "12"=>25, "13"=>28, "14"=>26, "15"=>23, "16"=>21, "17"=>18, "18"=>19, "19"=>17, "20"=>21, "21"=>23, "22"=>25, "23"=>29,
    "24"=>31, "25"=>27, "26"=>14, "27"=>13, "28"=>15, "29"=>13, "30"=>10);
$graph->setTitle('Velocita\' media vento mese scorso(km/h)');
$graph->addData($data);
$graph->setBars(false);
$graph->setLine(true);
$graph->setXValuesHorizontal(true);
$graph->setDataPoints(true);
$graph->setRange(0, 50);
$graph->setDataPointColor('aqua');
$graph->setDataValues(true);
$graph->setDataValueColor('aqua');
$graph->createGraph();
?>