<?php
require_once('../SVGGraph.php');

$settings = array();

$values = array(
  array('Dough' => 30, 'Ray' => 50, 'Me' => 40, 'So' => 25, 'Far' => 45, 'Lard' => 35)
);

$graph = new SVGGraph(1200, 600, $settings);

$graph->Values($values);
$graph->Render('LineGraph');

?>