<html>
<head>
	<title>JS Example</title>
	<style type="text/css">
		#d1{
			position: relative;
			width: 100px;
			height: 100px;
			border-radius: 50px;
			background: green;
		}
	</style>
</head>
<body>
	<h1>JS EXample</h1>

	Username: <input id="name" type="text" name="name" onkeyup="f1()" >
	<input type="button" name="" value="click" onclick="move()">
	<p id="msg"></p>

	<div id="d1">
		
	</div>

	<script>
		//name = "alamin";
		//var name = "alamin";
		let name = "alamin";
		let student = [1, 'alamin', 'alamin@aiub.edu'];
		console.log(name);
		//alert(name);
		//document.write(name);

		
		function f1(){
			let username = document.getElementById('name').value;

			if(username == ""){
				document.getElementById('msg').innerHTML = "Null value..";
			}else{
				document.getElementsByTagName('h1')[0].innerHTML = username;
				document.getElementById('msg').innerHTML = "";
			}
		}


		function move(){
			let current = document.getElementById('d1').style.left;
			let num ="";

			if(current != 0){
				num = parseInt(current.replace('px', ''));
				num += 10;
				document.getElementById('d1').style.left = num+"px";
				setTimeout(move, 500);
			}else{
				document.getElementById('d1').style.left = "10px";
				setTimeout(move, 500);
			}
		}

	</script>

</body>
</html>