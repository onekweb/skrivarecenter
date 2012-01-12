<?php
include_once('printerChooser.php');
 

class ColorJet extends ChoosePrinter{
	
		public $copies;
		public function printColor(){
			echo "färgutskrift";
			
		}
		public function collectPayment(){
			$copies = $_GET['copies'];
			echo $copies;
		}
		
	}
$colorPrint = new ColorJet;
$colorPrint->printColor();
$colorPrint->collectPayment();

?>