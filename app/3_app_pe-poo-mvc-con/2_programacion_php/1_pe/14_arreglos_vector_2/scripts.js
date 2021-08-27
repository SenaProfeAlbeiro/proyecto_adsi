form  = document.getElementById('calcula');

form.addEventListener('submit', function (event) {
	num2  = document.getElementById('num2').value;	
	menu  = document.getElementsByName('menu');
	for(i=0; i<menu.length; i++){
		if (menu[i].checked) {
			let op = i;			
			while (num2 == 0 && op == 3) {				
				num2 = prompt('División imposible por 0, digita otro número');
				document.getElementById('num2').value = num2;
			}			
		}
	}	
});
