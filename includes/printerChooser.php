<?php
include_once('printerType.php');




class ChoosePrinter{
	
	
	public $copies;

	
	public static function printOut(){
		
		if (isset($_POST['color'])){
			$copies = $_GET['copies'];
			header('Location:colorJet.php');
			
		}
		
		if (isset($_POST['bb'])){
			header('Location:laserJet.php');
			
		}
		
		else {
			echo "suug<br/>";
		}
		
		}
	
	}

$obj = new ChoosePrinter;
$obj->printOut();




?>