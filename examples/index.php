<?php
require_once('../SVGGraph.php');

$settings = array(
  'break_on_null' => true,
  'break_minimum' => 3
);

$values = array(
  array('Dough' => 30, 'Ray' => 50, 'Me' => NULL, 'So' => 25, 'Far' => NULL, 'Lard' => 35),
  array('Dough' => 50, 'Ray' => NULL, 'Me' => NULL, 'So' => NULL, 'Far' => 45, 'Lard' => NULL, 'bees' => NULL, 'arse' => 78)
);

$graph = new SVGGraph(1200, 600, $settings);

$graph->Values($values);
$graph->Render('MultiLineGraph');

?>