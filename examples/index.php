<?php
require_once('../SVGGraph.php');

$settings = array(
  'break_on_null' => true
);

$values = array(
  array('Dough' => 30, 'Ray' => 50, 'Me' => NULL, 'So' => 25, 'Far' => 45, 'Lard' => 35),
  array('Dough' => 50, 'Ray' => NULL, 'Me' => 20, 'So' => 15, 'Far' => 45, 'Lard' => 65)
);

$graph = new SVGGraph(1200, 600, $settings);

$graph->Values($values);
$graph->Render('MultiLineGraph');

?>