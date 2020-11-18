<!doctype html>
<html>

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

	<div class="container">
      
     <h1>HTML Sudoku Board</h1>
	 <form action="calculate.php" method="get">
      <table id="grid">

        <tr>
          <td><input id="cell-0"  type="number" name="cell0"></td>
          <td><input id="cell-1"  type="number" name="cell1"></td>
          <td><input id="cell-2"  type="number" name="cell2"></td>
          
          <td><input id="cell-3"  type="number" name="cell3"></td>
          <td><input id="cell-4"  type="number" name="cell4"></td>
          <td><input id="cell-5"  type="number" name="cell5"></td>
          
          <td><input id="cell-6"  type="number" name="cell6"></td>
          <td><input id="cell-7"  type="number" name="cell7"></td>
          <td><input id="cell-8"  type="number" name="cell8"></td>
        </tr>

        <tr>
          <td><input id="cell-9"  type="number" name="cell9"></td>
          <td><input id="cell-10" type="number" name="cell10"></td>
          <td><input id="cell-11" type="number" name="cell11"></td>
          
          <td><input id="cell-12" type="number" name="cell12"></td>
          <td><input id="cell-13" type="number" name="cell13"></td>
          <td><input id="cell-14" type="number" name="cell14"></td>
          
          <td><input id="cell-15" type="number" name="cell15"></td>
          <td><input id="cell-16" type="number" name="cell16"></td>
          <td><input id="cell-17" type="number" name="cell17"></td>
        </tr>

        <tr>          
          <td><input id="cell-18" type="number" name="cell18"></td>
          <td><input id="cell-19" type="number" name="cell19"></td>
          <td><input id="cell-20" type="number" name="cell20"></td>
          
          <td><input id="cell-21" type="number" name="cell21"></td>
          <td><input id="cell-22" type="number" name="cell22"></td>
          <td><input id="cell-23" type="number" name="cell23"></td>
          
          <td><input id="cell-24" type="number" name="cell24"></td>
          <td><input id="cell-25" type="number" name="cell25"></td>
          <td><input id="cell-26" type="number" name="cell26"></td>
        </tr>

        <tr>          
          <td><input id="cell-27" type="number" name="cell27"></td>
          <td><input id="cell-28" type="number" name="cell28"></td>
          <td><input id="cell-29" type="number" name="cell29"></td>
          
          <td><input id="cell-30" type="number" name="cell30"></td>
          <td><input id="cell-31" type="number" name="cell31"></td>
          <td><input id="cell-32" type="number" name="cell32"></td>
          
          <td><input id="cell-33" type="number" name="cell33"></td>
          <td><input id="cell-34" type="number" name="cell34"></td>
          <td><input id="cell-35" type="number" name="cell35"></td>
        </tr>

        <tr>          
          <td><input id="cell-36" type="number" name="cell36"></td>
          <td><input id="cell-37" type="number" name="cell37"></td>
          <td><input id="cell-38" type="number" name="cell38"></td>
          
          <td><input id="cell-39" type="number" name="cell39"></td>
          <td><input id="cell-40" type="number" name="cell40"></td>
          <td><input id="cell-41" type="number" name="cell41"></td>
          
          <td><input id="cell-42" type="number" name="cell42"></td>
          <td><input id="cell-43" type="number" name="cell43"></td>
          <td><input id="cell-44" type="number" name="cell44"></td>
        </tr>

        <tr>          
          <td><input id="cell-45" type="number" name="cell45"></td>
          <td><input id="cell-46" type="number" name="cell46"></td>
          <td><input id="cell-47" type="number" name="cell47"></td>
          
          <td><input id="cell-48" type="number" name="cell48"></td>
          <td><input id="cell-49" type="number" name="cell49"></td>
          <td><input id="cell-50" type="number" name="cell50"></td>
          
          <td><input id="cell-51" type="number" name="cell51"></td>
          <td><input id="cell-52" type="number" name="cell52"></td>
          <td><input id="cell-53" type="number" name="cell53"></td>
        </tr>

        <tr>          
          <td><input id="cell-54" type="number" name="cell54"></td>
          <td><input id="cell-55" type="number" name="cell55"></td>
          <td><input id="cell-56" type="number" name="cell56"></td>
          
          <td><input id="cell-57" type="number" name="cell57"></td>
          <td><input id="cell-58" type="number" name="cell58"></td>
          <td><input id="cell-59" type="number" name="cell59"></td>
          
          <td><input id="cell-60" type="number" name="cell60"></td>
          <td><input id="cell-61" type="number" name="cell61"></td>
          <td><input id="cell-62" type="number" name="cell62"></td>
        </tr>

        <tr>          
          <td><input id="cell-63" type="number" name="cell63"></td>
          <td><input id="cell-64" type="number" name="cell64"></td>
          <td><input id="cell-65" type="number" name="cell65"></td>
          
          <td><input id="cell-66" type="number" name="cell66"></td>
          <td><input id="cell-67" type="number" name="cell67"></td>
          <td><input id="cell-68" type="number" name="cell68"></td>
          
          <td><input id="cell-69" type="number" name="cell69"></td>
          <td><input id="cell-70" type="number" name="cell70"></td>
          <td><input id="cell-71" type="number" name="cell71"></td>
        </tr>

        <tr>          
          <td><input id="cell-72" type="number" name="cell72"></td>
          <td><input id="cell-73" type="number" name="cell73"></td>
          <td><input id="cell-74" type="number" name="cell74"></td>
          
          <td><input id="cell-75" type="number" name="cell75"></td>
          <td><input id="cell-76" type="number" name="cell76"></td>
          <td><input id="cell-77" type="number" name="cell77"></td>
          
          <td><input id="cell-78" type="number" name="cell78"></td>
          <td><input id="cell-79" type="number" name="cell79"></td>
          <td><input id="cell-80" type="number" name="cell80"></td>
        </tr>

      </table>
	<b><input type="submit" value="Solve" style="border: 2px solid #000000;
			background-color: #C0C0C0;width:100px;height:50px;color:#00000"></b>
	</form>
    </div>

</body>

</html>