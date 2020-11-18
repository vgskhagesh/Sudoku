<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>HTML Sudoku Board</title>
    
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    
    <style type="text/css">
    
      html, body {
        background-color: #FAFAFA
      }
      table {
        border: 2px solid #000000;
      }
      td {
        border: 1px solid #000000;
        text-align: center;
        vertical-align: middle;  
      }
      input {
        color: #000000;
        padding: 0;
        border: 0;
        text-align: center;
        width: 48px;
        height: 48px;
        font-size: 24px;
        background-color: #FFFFFF;
        outline: none;
      }
	  input#khagesh {
        color: #000000;
        padding: 0px;
        border: 3px;
        text-align: center;
        width: 440px;
        height: 50px;
        font-size: 24px;
        background-color: #FFFFFF;
        outline: none;
      }
      input:disabled {
        background-color: #EEEEEE;
      }
      #cell-0,  #cell-1,  #cell-2  { border-top:    2px solid #000000; }
      #cell-2,  #cell-11, #cell-20 { border-right:  2px solid #000000; }
      #cell-18, #cell-19, #cell-20 { border-bottom: 2px solid #000000; }
      #cell-0,  #cell-9,  #cell-18 { border-left:   2px solid #000000; }
      #cell-3,  #cell-4,  #cell-5  { border-top:    2px solid #000000; }
      #cell-5,  #cell-14, #cell-23 { border-right:  2px solid #000000; }
      #cell-21, #cell-22, #cell-23 { border-bottom: 2px solid #000000; }
      #cell-3,  #cell-12, #cell-21 { border-left:   2px solid #000000; }
      #cell-6,  #cell-7,  #cell-8  { border-top:    2px solid #000000; }
      #cell-8,  #cell-17, #cell-26 { border-right:  2px solid #000000; }
      #cell-24, #cell-25, #cell-26 { border-bottom: 2px solid #000000; }
      #cell-6,  #cell-15, #cell-24 { border-left:   2px solid #000000; }
      #cell-27, #cell-28, #cell-29 { border-top:    2px solid #000000; }
      #cell-29, #cell-38, #cell-47 { border-right:  2px solid #000000; }
      #cell-45, #cell-46, #cell-47 { border-bottom: 2px solid #000000; }
      #cell-27, #cell-36, #cell-45 { border-left:   2px solid #000000; }
      #cell-30, #cell-31, #cell-32 { border-top:    2px solid #000000; }
      #cell-32, #cell-41, #cell-50 { border-right:  2px solid #000000; }
      #cell-48, #cell-49, #cell-50 { border-bottom: 2px solid #000000; }
      #cell-30, #cell-39, #cell-48 { border-left:   2px solid #000000; }
      #cell-33, #cell-34, #cell-35 { border-top:    2px solid #000000; }
      #cell-35, #cell-44, #cell-53 { border-right:  2px solid #000000; }
      #cell-51, #cell-52, #cell-53 { border-bottom: 2px solid #000000; }
      #cell-33, #cell-42, #cell-51 { border-left:   2px solid #000000; }
      #cell-54, #cell-55, #cell-56 { border-top:    2px solid #000000; }
      #cell-56, #cell-65, #cell-74 { border-right:  2px solid #000000; }
      #cell-72, #cell-73, #cell-74 { border-bottom: 2px solid #000000; }
      #cell-54, #cell-63, #cell-72 { border-left:   2px solid #000000; }
      #cell-57, #cell-58, #cell-59 { border-top:    2px solid #000000; }
      #cell-59, #cell-68, #cell-77 { border-right:  2px solid #000000; }
      #cell-75, #cell-76, #cell-77 { border-bottom: 2px solid #000000; }
      #cell-57, #cell-66, #cell-75 { border-left:   2px solid #000000; }
      #cell-60, #cell-61, #cell-62 { border-top:    2px solid #000000; }
      #cell-62, #cell-71, #cell-80 { border-right:  2px solid #000000; }
      #cell-78, #cell-79, #cell-80 { border-bottom: 2px solid #000000; }
      #cell-60, #cell-69, #cell-78 { border-left:   2px solid #000000; }
    </style>
  </head>
  <body>



    <div class="container" style="float:center">
      
      <h1>HTML Sudoku Board</h1>

      <table id="grid">
				<?php 
					require 'session.php';
					$i=0;
					$count=0;
				?>

        <tr>
			<?php
				
				for($j=0; $j<9; $j++){
					if(!$session[$i][$j]==0){
						echo '<td><b><input id="cell-'.$count.'"  type="number" value="'.$session[$i][$j].'" disabled></b></td>';
					}
					else{
						echo '<td><input id="cell-'.$count.'"  type="number" value="'.$solution[$i][$j].'"></td>';
					}
					$count++;
				}
				$i++;
				
			?>
        </tr>

        <tr>
          <?php
				
				for($j=0; $j<9; $j++){
					if(!$session[$i][$j]==0){
						echo '<td><b><input id="cell-'.$count.'"  type="number" value="'.$session[$i][$j].'" disabled></b></td>';
					}
					else{
						echo '<td><input id="cell-'.$count.'"  type="number" value="'.$solution[$i][$j].'"></td>';
					}
					$count++;
				}
				$i++;
				
			?>
        </tr>

        <tr>          
          <?php
				
				for($j=0; $j<9; $j++){
					if(!$session[$i][$j]==0){
						echo '<td><b><input id="cell-'.$count.'"  type="number" value="'.$session[$i][$j].'" disabled></b></td>';
					}
					else{
						echo '<td><input id="cell-'.$count.'"  type="number" value="'.$solution[$i][$j].'"></td>';
					}
					$count++;
				}
				$i++;
				
			?>
        </tr>

        <tr>          
          <?php
				
				for($j=0; $j<9; $j++){
					if(!$session[$i][$j]==0){
						echo '<td><b><input id="cell-'.$count.'"  type="number" value="'.$session[$i][$j].'" disabled></b></td>';
					}
					else{
						echo '<td><input id="cell-'.$count.'"  type="number" value="'.$solution[$i][$j].'"></td>';
					}
					$count++;
				}
				$i++;
				
			?>
        </tr>

        <tr>          
          <?php
				
				for($j=0; $j<9; $j++){
					if(!$session[$i][$j]==0){
						echo '<td><b><input id="cell-'.$count.'"  type="number" value="'.$session[$i][$j].'" disabled></b></td>';
					}
					else{
						echo '<td><input id="cell-'.$count.'"  type="number" value="'.$solution[$i][$j].'"></td>';
					}
					$count++;
				}
				$i++;
				
			?>
        </tr>

        <tr>          
          <?php
				
				for($j=0; $j<9; $j++){
					if(!$session[$i][$j]==0){
						echo '<td><b><input id="cell-'.$count.'"  type="number" value="'.$session[$i][$j].'" disabled></b></td>';
					}
					else{
						echo '<td><input id="cell-'.$count.'"  type="number" value="'.$solution[$i][$j].'"></td>';
					}
					$count++;
				}
				$i++;
				
			?>
        </tr>

        <tr>          
          <?php
				
				for($j=0; $j<9; $j++){
					if(!$session[$i][$j]==0){
						echo '<td><b><input id="cell-'.$count.'"  type="number" value="'.$session[$i][$j].'" disabled></b></td>';
					}
					else{
						echo '<td><input id="cell-'.$count.'"  type="number" value="'.$solution[$i][$j].'"></td>';
					}
					$count++;
				}
				$i++;
				
			?>
        </tr>

        <tr>          
          <?php
				
				for($j=0; $j<9; $j++){
					if(!$session[$i][$j]==0){
						echo '<td><b><input id="cell-'.$count.'"  type="number" value="'.$session[$i][$j].'" disabled></b></td>';
					}
					else{
						echo '<td><input id="cell-'.$count.'"  type="number" value="'.$solution[$i][$j].'"></td>';
					}
					$count++;
				}
				$i++;
				
			?>
        </tr>

        <tr>          
          <?php
				
				for($j=0; $j<9; $j++){
					if(!$session[$i][$j]==0){
						echo '<td><b><input id="cell-'.$count.'"  type="number" value="'.$session[$i][$j].'" disabled></b></td>';
					}
					else{
						echo '<td><input id="cell-'.$count.'"  type="number" value="'.$solution[$i][$j].'"></td>';
					}
					$count++;
				}
				$i++;
				
			?>
        </tr>

      </table>

    </div>
	
	
	
	<div class="container" style="float:center">
	
	<form action="start.php" method="get">
		<b><i><input id="khagesh" type="submit" value="Re-Start" style="width=50px; height=20px; color; border: 2px solid #000000; background-color: #C0C0C0"></i></b>
	
	</div>

  </body>
</html>