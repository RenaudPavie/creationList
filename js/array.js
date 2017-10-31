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

		function keyPress(){
			if (event.keyCode == 13) {
				ajouterFruit();
			}
		}


document.getElementById('addFruit').addEventListener('click',ajouterFruit);
document.getElementById('newFruit').addEventListener('keypress',keyPress);