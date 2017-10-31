<?php
include('phpgraphlib.php');
$graph = new PHPGraphLib(650,250);
$data = array('Lunedi'=>23, 'Martedi'=>45, 'Mercoledi'=>20, 'Giovedi'=>32, 'Venerdi'=>14, 'Sabato'=>27, 'Domenica'=>32);
$data2 = array('Lunedi'=>15, 'Martedi'=>23, 'Mercoledi'=>23,'Giovedi'=>12, 'Venerdi'=>17, 'Sabato'=>25, 'Domenica'=>29);
$data3 = array('Lunedi'=>43, 'Martedi'=>23, 'Mercoledi'=>34, 'Giovedi'=>16, 'Venerdi'=>20, 'Sabato'=>29, 'Domenica'=>35);
$data4 = array('Lunedi'=>23, 'Martedi'=>34, 'Mercoledi'=>23, 'Giovedi'=>9, 'Venerdi'=>8, 'Sabato'=>18, 'Domenica'=>23);
$graph->addData($data, $data2, $data3, $data4);
$graph->setTitle("Temperatura Massima Settimanale (C°)");
$graph->setTitleLocation("left");
$graph->setGradient('teal', '#0000FF');
$graph->setXValuesHorizontal(true);
$graph->setXAxisTextColor ('navy');
$graph->setLegend(true);
$graph->setLegendTitle('Sensore 1', 'Sensore 2', 'Sensore 3', 'Sensore 4');
$graph->createGraph();