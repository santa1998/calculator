<html>
	<head>
		<title>CalculatorProject</title>
		<style>
			div{
				margin-top: 10%;
				margin-left: 40%;
				border: 1px solid black;
				width: 200px;
			}
			#sum{
				width: 180px;
				margin-top: 10px;
				margin-bottom: 10px;
				margin-left: 10px;
				margin-right: 10px;
				padding-top: 30px;
			}
			.button{
				margin-left: 20px;
				margin-bottom: 10px;
				padding-left: 20px;
				display: inline;
			}
			.operations{
				margin-left: 20px;
				margin-bottom: 10px;
				width: 160px;
				display: inline;
			}
		</style>
	</head>
	<body>
		<div class="calculator">
			<form action="" method="POST">
				<div id="sum"></div>
				<input value="1" type="button" class="button" onclick="document.getElementById('sum').innerHTML = 1;"/>
				<input value="2" type="button" class="button" onclick="document.getElementById('sum').innerHTML = 2;"/> 
				<input value="3" type="button" class="button" onclick="document.getElementById('sum').innerHTML = 3;"/> 
				<input value="4" type="button" class="button" onclick="document.getElementById('sum').innerHTML = 4;"/> 
				<input value="5" type="button" class="button" onclick="document.getElementById('sum').innerHTML = 5;"/> 
				<input value="6" type="button" class="button" onclick="document.getElementById('sum').innerHTML = 6;"/> 
				<input value="7" type="button" class="button" onclick="document.getElementById('sum').innerHTML = 7;"/> 
				<input value="8" type="button" class="button" onclick="document.getElementById('sum').innerHTML = 8;"/> 
				<input value="9" type="button" class="button" onclick="document.getElementById('sum').innerHTML = 9;"/>
				<input value="+" type="button" class="operations" onclick="document.getElementById('sum').innerHTML = '+';"/>
				<input value="-" type="button" class="operations" onclick="document.getElementById('sum').innerHTML = '-';"/>
				<input value="x" type="button" class=operations onclick="document.getElementById('sum').innerHTML = 'x';"/>
				<input value="/" type="button" class="operations" onclick="document.getElementById('sum').innerHTML = '/';"/>
				<input value="=" type="button" class="operations" style="background-color: blue;"/>
			</form>
		</div>
		<script>
		</script>
	</body>
</html>