import getProductHTML from './productTemplate';


let busketProducts = [];

if (localStorage.busket) {
	busketProducts = JSON.parse(localStorage.busket);
}

if ('newProduct' in localStorage && localStorage.newProduct) {
	const newProduct = JSON.parse(localStorage.newProduct);

	busketProducts.push(newProduct);
	localStorage.busket = JSON.stringify(busketProducts);

	localStorage.newProduct = '';
}

if (busketProducts.length) {
	$.ajax({
		url: '/api/product/busket',
		data: {
			products: busketProducts
		},
		success ({products}) {
			console.log(products);
			const content = products
				.map(product => {
					const localProduct = busketProducts.find(p => p.id === product.id);
					if (localProduct) {
						product.count = localProduct.count;
					}
					return product;
				})
				.reduce(
					(html, product) => `${html}${getProductHTML(product)}`,
					''
				);
			console.log(content);
			$('#products').append(content);
			$(document).trigger('readyForCounter');
		},
		error () {

		}
	})
}

// document.querySelector('#createOrder').addEventListener('click', function () {
// 	$.ajax({
// 		url: '/api/order',
// 		data: {
// 			products: JSON.parse(localStorage.busket),
// 		},
// 		success () {

// 		},
// 		error () {

// 		}
// 	})
// })


document.querySelector('.basket__form').addEventListener('submit', function (e) {
	e.preventDefault();

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
});


