<?php 
	session_start();
	$where=array(
		"id_marka"=>1,
		"id_model"=>0,
		"cena"=>543,
		"id_status"=>0
	);
	echo "<pre>".print_r($where,true)."</pre><br><br>";
	
	foreach($where as $k=>$v)
	{
		if($v==0)
			unset($where[$k]);
	}
	echo "<pre>".print_r($where,true)."</pre><br><br>";
	
	
	foreach($where as $k=>$v)
	{
		$where[$k]=$k."=".$v;
	}
	echo "<pre>".print_r($where,true)."</pre><br><br>";
	$string=implode(" AND ",$where);
	echo $string;
	echo "<hr/>";	
     	
		
		
	echo update('users',array('username'=>2,'email'=>'aleksa@gmail.com'),array('id_user'=>5),"and");
	function update($table,$set,$where,$operator="AND"){
		$sql="";
		$_set="";
		$_where="";
		$new_where=array();
		$x=1;
		if(count($set)>0 && count($where)>0 && $table!=""){
			
			foreach($set as $key=>$value){
				$_set.="{$key}={$value}";
				if($x<count($set)){
					$_set.=", ";
				}
				$x++;
			}
			foreach($where as $key=>$value){
				if(count($where)>1){
					$new_where[]="{$key}=?";
				}
				else
					$_where="{$key}=?";
			}
			if(count($new_where)>0){
				$_where=implode( " ". strtoupper($operator) ." " ,$new_where);
				}
				
			
			
			$sql="UPDATE {$table} SET {$_set} WHERE {$_where}";
			return $sql;
		}
		else
			return false;
	}



	
		
		
	
		
		
		
		
		
		
	
	