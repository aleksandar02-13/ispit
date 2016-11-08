<?php
class Db{
	private static $_instance=null;
	private $_dbo;
	
	private function __construct(){		
		$this->_dbo=new mysqli("localhost","root","","aca");	
	}
	public static function getInstance(){
		if(!isset(self::$_instance)){
			self::$_instance= new Db();
		}
		return self::$_instance;			
	}
	
	public function get($table,$cols=array()){
		$_cols="";
		$counter=1;
		if(count($cols)>0){
			foreach($cols as $col){
				$_cols.=$col;
				if(count($cols)>$counter){
					$_cols.=", ";
				}
				$counter++;
			}
			$sql="SELECT {$_cols} FROM {$table};";
			echo($sql);
		}
		return false;
	}
	
	public function radi(){
	echo "radi";
	}
}