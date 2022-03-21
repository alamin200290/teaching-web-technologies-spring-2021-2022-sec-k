<?php 

	
	//print_r($_REQUEST);

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['username'] == null){
			echo "username is empty....";
		}else{
			echo "success";
		}
	}else{
		echo "invalid request...";
	}

	//print("Hello world!...");
	//echo "hello World..."." Test...";

	$name = "alamin";
	$id = 123;
	$cgpa = 4.00;

	//$student = array(1, 'alamin', 3.4, 'alamin@aiub.edu');
	//$student = [1, 'alamin', 3.4, 'alamin@aiub.edu'];
	/*$students = [
					[1, 'alamin', 3.4, 'alamin@aiub.edu'],
					[2, 'xyz', 3.3, 'xyz@aiub.edu'],
					[3, 'abc', 3.2, 'abc@aiub.edu']
				];

	echo $students[2][3];*/

	/*$student = ['id'=>1, 'name'=>'alamin', 'cgpa'=>3.4, 'email'=>'alamin@aiub.edu'];

	$students = [
					's1'=>['id'=>1, 'name'=>'alamin', 'cgpa'=>3.4, 'email'=>'alamin@aiub.edu'],
					's2'=>['id'=>2, 'name'=>'xyz', 'cgpa'=>3.5, 'email'=>'xyz@aiub.edu'],
					's3'=>['id'=>3, 'name'=>'abc', 'cgpa'=>3.6, 'email'=>'abc@aiub.edu'],
					's4'=>['id'=>4, 'name'=>'pqr', 'cgpa'=>3.8, 'email'=>'pqr@aiub.edu']
				];	

	echo $students['s3']['name'];*/

	/*function sum($num1, $num2){

		echo $num1+ $num2;
	}

	sum(20,40);*/

	/*if(5 === '5'){
		echo "true";
	}else{
		echo "false";
	}*/

	/*for ($i=0; $i < ; $i++) { 
		
	}*/

	/*$students = [
					's1'=>['id'=>1, 'name'=>'alamin', 'cgpa'=>3.4, 'email'=>'alamin@aiub.edu'],
					's2'=>['id'=>2, 'name'=>'xyz', 'cgpa'=>3.5, 'email'=>'xyz@aiub.edu'],
					's3'=>['id'=>3, 'name'=>'abc', 'cgpa'=>3.6, 'email'=>'abc@aiub.edu'],
					's4'=>['id'=>4, 'name'=>'pqr', 'cgpa'=>3.8, 'email'=>'pqr@aiub.edu']
				];	

	foreach ($students as $s) {
		echo "<h1>".$s['name']."</h1>";
	}*/


?>