<?php
class printJob{
	private $sendFile;	
	public function __constructor(){
		$this->sendfile = $sendFile;
	}
	
	
	
	public function setFile(){
		$this->sendFile = $_POST['submit'];
			if(isset($this->sendFile)) {
				if ($_FILES["file"]["error"] > 0){
				  echo "Error: " . $_FILES["file"]["error"] . "<br />";
				  }
			else
			  {
			  echo "Ladda: " . $_FILES["file"]["name"] . "<br />";
			  echo "Typ: " . $_FILES["file"]["type"] . "<br />";
			  echo "Storlek: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
			  echo "Lagrad i: " . $_FILES["file"]["tmp_name"];
			  }
			echo "<h4 style='color:red;'>Din fil har laddats upp<h4>";
	}			
	}
	public function getStart(){
		return $this->sendFile;
	}	
}


?>