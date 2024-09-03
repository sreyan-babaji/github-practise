<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP AND  HTML</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <style>
	
    </style>
</head>
<body>

   <?php
   
   	  if(isset($_POST['result'])){
		  
		$input1=$_POST['input1'];
        $operation=$_POST['operation'];
        $input2=$_POST['input2'];
		
		
		if($input1 == ''){$input1_error = 'plese enter input 1 value';}
		if($operation == ''){$operation_error = 'plese select operation type';}
		if($input2 == ''){$input2_error = 'plese enter input 2 value';}
		
		
		if($input1 != '' and $operation != '' and $input2 != ''){
			
			
		}
		
	  }
   
   ?>
  <div class='container'>
    <h1 class='m-4 align-center color-primary'> Gonit kortam  </h1>
        <form class="m-3" method='POST' >
          <?php 
		  /*
          if(isset($input1) and $input1==""){echo 'plese enter your number';} 
          if(isset($input1) and $input1>100){echo 'besi oise';}
          if(isset($input2) and $input2>100){echo 'besi oise';}
		  */
        ?>
		
		
		  <?php if(isset($input1) and $input1 == ''){ echo "<p class ='text-danger'> please enter nubmer </p>";} ?>
          <input class="form-control m-2" type="input" name='input1' value='<?php if(isset($input1)){echo $input1;} ?>' placeholder="input number">
          <select class='form-select m-2' name='operation'>
            <option selected value=''> Kita korbai </option>
            <option value='Plus'> Plus </option>
            <option value='Minus'> Minus </option>
            <option value='multiply'> multiply </option>
            <option value='divided'> divided </option>
          </select>
          <input class="form-control m-2" type="input" placeholder="input2" name='input2' aria-label="Search">
          <button class="btn btn-outline-success m-2" name='result' type="submit">submit</button>
        </form>

      <?php
	  

	  

	  
	  
	  /*
      if(isset($_POST['result'])){
        $input1=$_POST['input1'];
        $operation=$_POST['operation'];
        $input2=$_POST['input2'];

          if($input1==''){
            echo 'please enter input1';
          }
         else if($input2==''){
            echo'please enter input2';
          }
         else if($operation=='empty'){
            echo 'please enter an operation';
          }
		 else{
          if($operation=='Plus'){
            $result=  $input1+$input2;
          }
          if($operation=='Minus'){
            $result=  $input1-$input2;
          }
          if($operation=='multiply'){
            $result=  $input1*$input2;
          }
          if($operation=='divided'){
            $result=  $input1/$input2;
          }
        }
      }
	  */
      ?>
   
	  
	  
  </div>

  <script src="asset/js/bootstrap.min.js"></script>
</body>
</html>