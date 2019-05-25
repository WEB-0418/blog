if ('newProduct' in localStorage && localStorage.newProduct) {
	const newProduct = JSON.parse(localStorage.newProduct);

	let busketProducts = [];

	if (localStorage.busket) {
		busketProducts = JSON.parse(localStorage.busket);
	}
	busketProducts.push(newProduct);
	localStorage.busket = JSON.stringify(busketProducts);

	$.ajax({
		url: '/api/product/busket',
		data: {
			products: busketProducts
		},
		success (data) {
			console.log(data);
		},
		error () {

		}
	})

	localStorage.newProduct = '';
}


document.querySelector('#createOrder').addEventListener('click', function () {
	$.ajax({
		url: '/api/order',
		data: {
			products: JSON.parse(localStorage.busket),
		},
		success () {

		},
		error () {

		}
	})
})




