 <?php
 class User {
    	var $name;
		var $saldo = 100;
		
    	function __construct($userName,$saldo){
    		echo "En ny användare har skapats";
			$this->name = $userName;
    	}
		
		
		
		function set_name($new_name) {
			$this->name = $new_name;
			
		}
		function get_name() { 
     		return $this->name;  
 		} 
		
    }
 ?>