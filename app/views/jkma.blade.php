@extends('layouts.base')

@section('body')

<div class="container">
	
	<h1>YOLO SWAG 420</h1>
	<p>Wigger.</p>
	
	<?php



function helloworld() {
	echo 'hello world<br>';
}

function shittyloop($count, $yolo) {
	for ($i = 0; $i < $count; $i++) {
		echo '['.$i.']:'.$yolo;
	}
}


helloworld();
//shittyloop(50, "hurrdurrr");
//shittyloop(100, "YOLO");
//shittyloop(100, "OLOY");

$period = '3M';
if (isset($_GET["period"])) {
  $period = $_GET["period"];
}
if (isset($_GET["ticker"])) {
  $ticker = $_GET["ticker"];
  echo "<img src=\"http://www.google.com/finance/getchart?q=$ticker&p=$period\" />";
}

	
	?>
</div> <!-- /container -->
<script src="js/bootstrap.min.js"></script>
@stop

