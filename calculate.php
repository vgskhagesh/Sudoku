<?php
	
	
	/*
	for($i=0; $i<9; $i++){
		for($j=0; $j<9; $j++){
			echo $arr[$i][$j].' ';
		}
		echo '<br>';
	}
	*/
	
	
	class calculate{
		public $row=0;
		public $col=0;
		public $a = array();
		
		function __construct($arr){
			$this->a = $arr;
		}
		
		//public function check($this->row, $this->col){
		public function check(){
													//echo "check<br>";
			for($i=0;$i<9;$i++){
				for($j=0;$j<9;$j++){
					if($this->a[$i][$j]==0){
						$this->row=$i;
						$this->col=$j;
						return false;
					}
				}
			}
			return true;
		}
		
		
		
		//public function rowcheck($num, $this->col){
		public function rowcheck($num){
			for($i=0;$i<9;$i++){
				if($this->a[$i][$this->col]==$num){
					return false;
				}
			}
			return true;
		}
		
		
		
		
		//public function colcheck($num, $this->row){
		public function colcheck($num){
			for($j=0;$j<9;$j++){
				if($this->a[$this->row][$j]==$num){
					return false;
				}
			}
			return true;
		}
		
		
		
		public function boxcheck($num, $rowstart, $colstart){
			for($i=$rowstart;$i<3+$rowstart;$i++){
				for($j=$colstart;$j<3+$colstart;$j++){
					if($this->a[$i][$j]==$num){
						return false;
					}
				}
			}
			return true;
		}
		
		
		
		public function solve(){
			//if($this->check($this->row,$this->col)){
			if($this->check()){
															//echo "hello<br>";
				return true;
			}
			for($num=1;$num<10;$num++)
			{
				//if(  $this->rowcheck($num,$this->col)  &&  $this->colcheck($num,$this->row)  &&  $this->boxcheck($num,$this->row-$this->row%3,$this->col-$this->col%3)  )
				if(  $this->rowcheck($num)  &&  $this->colcheck($num)  &&  $this->boxcheck($num,$this->row-$this->row%3,$this->col-$this->col%3)  )
				{
																					//echo "checking<br>";
					$this->a[$this->row][$this->col]=$num;
					$rownew = $this->row;
					$colnew = $this->col;
					if($this->solve()){
																					//echo "solve-block<br>";
						return true;
					}
					$this->a[$rownew][$colnew]=0;
					$this->row = $rownew;
					$this->col = $colnew;
				}
			}
			return false;
		}
		
		
		public function set(){
			return $this->a;
		}
		
		
	}
	
	/*
	$arr=array(array(0,0,0,  1,0,0,  0,3,2),
                array(0,0,0,  2,0,0,  4,0,0),
                array(0,0,0,  0,6,0,  1,5,0),

                array(7,1,0,  3,0,0,  0,4,0),
                array(5,2,0,  0,0,0,  0,8,3),
                array(0,9,0,  0,0,2,  0,1,6),

                array(0,7,9,  0,8,0,  0,0,0),
                array(0,0,2,  0,0,4,  0,0,0),
                array(1,4,0,  0,0,9,  0,0,0));
				*/
	
	session_start();
	
	$val = 0;
	$arr = array();
	for($i=0; $i<9; $i++){
		for($j=0; $j<9; $j++){
			if(!$_GET['cell'.$val]==""){
				$arr[$i][$j]=$_GET['cell'.$val];
				$_SESSION['session'.$i.$j]=$_GET['cell'.$val];
			}
			else{
				$arr[$i][$j]=0;
				$_SESSION['session'.$i.$j]=0;
			}
			$val++;
		}
	}
	
	
	
	
	
	$obj = new calculate($arr);
    $obj->solve();
	$array = array();
	$array = $obj->set();
	for($i=0; $i<9; $i++){
		for($j=0; $j<9; $j++){
			$_SESSION['solution'.$i.$j]=$array[$i][$j];
		}
	}
	
	
	//http://localhost/practice/sudoku/khagesh/view.php
	
	
?>

<html>

<head>
<meta http-equiv="refresh" content="0; URL='view.php'" />
</head>

</html>