// console.log('funcionando');
// ejemplo mostrando resultados en cosola, (opcional).

var form = document.getElementById('form');

form.addEventListener('submit', function(e){
	e.preventDefault();
	// console.log('Me diste un click');

	var data = new FormData(form);

	// console.log('data');
	console.log(data.get('Email'));
	// console.log(data.get('Publ_Promo'));
	// console.log(data.get('Publ_BF'));
	// console.log(data.get('Publ_Feria'));
	// console.log(data.get('Comment'));

	fetch('php/info_form.php', {
		method: 'POST', 
		body: data
	})

	.then( res => res.json())
	.then( data => {
		console.log(data)
	});
});
// Terminar archivo de javascript
