<DOCTYPE html>
	<html>
		<head>
			<meta charset = "utf-8">
			<title>Calculator!</title>
		</head>
		<body>
			<p> Enter an arithmetic operation for two numbers: </p>
				<input type = "text" id = "NumInput" placeholder = "3 * 5" >
				<input type = "submit" value = "submit" onclick = calculation()>
				<input type = "button" value = RESET onclick = resetAll()>
			<p id = "test">
			</p>
			<script>
				function calculation(){
					var inputVal = document.getElementById("NumInput").value;
					var answer = eval(inputVal);
					document.getElementById("NumInput").value = answer;
					//alert(eval(inputVal));
				}
				
				function resetAll(){
					document.getElementById("NumInput").value = ""4;
					
					/*if (typeof isEmpty !=== "undefined"){
					//if (true){
						document.getElementById("NumInput").value = "";
					}
					*/
				}
				
			</script>
		</body>
	</html>
