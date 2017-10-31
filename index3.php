<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="text" id="newFruit">
	<input type="button" value="Add fruit" onclick="ajouterFruit()">
	<ul id="fruitList"></ul>


<button onclick="debug()">Debug</button>


	<script>
		var fruits = [];
		

		function delette(pos) {
			fruits.splice(pos,1);
			showList();
		}


		function ajouterFruit() {
			var valeur = document.getElementById('newFruit').value;
			fruits.push(valeur);		
			showList();
			debug();

		}
		function showList() {
			document.getElementById('newFruit').value='';
			document.getElementById('fruitList').innerHTML='';
				for (i = 0; i < fruits.length ; i++){
					var button = '<button onclick="delette('+i+')">Supprimer</button>';
					document.getElementById("fruitList").innerHTML +='<li>'+fruits[i]+button+'</li>';	
				}
		}	
		

		function debug() {
			console.log(fruits)
		}

	</script>

</body>
</html>
