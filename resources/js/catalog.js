// const colors = document.querySelector('#color');
// const brands = document.querySelector('#brand');
// const sizes = document.querySelector('#size');


// [colors, brands, sizes].forEach(element => {
// 	element.addEventListener('change', )
// })

// const getData = requestParams;

// colors.addEventListener('change', function (e) {
// 	if (selectedValue) {
// 		// console.log(products.filter(product => product.color_id == selectedValue));

// 		// fetch('/catalog/api', {
// 		// 	qs: Object.assign(requestParams, {color: selectedValue})
// 		// })
// 		// .then(response => response.json())
// 		// .then(data => {console.log(data)})

// 		// $.ajax({
// 		// 	url: '/catalog/api',
// 		// 	data: Object.assign(requestParams, {color: selectedValue}),
// 		// 	success (data) {
// 		// 		console.log(data);
// 		// 	}
// 		// })

// 		let requestString = '';

// 		if ('color' in requestParams) {
// 			requestString += window.location.search.replace(/color=\d+/, `color=${selectedValue}`);
// 		} else {
// 			requestString = `${window.location.search}&color=${selectedValue}`;
// 		}

// 		window.location.search = requestString;

// 	} else {
// 		window.location.search = window.location.search.replace(/\&color=\d+/, ``);
// 	}
// })

const selects = ['color', 'brand', 'size'];

document.addEventListener('change', function (e) {
	if (selects.includes(e.target.id)) {
		filterProducts(e);
	}
})

function filterProducts(e) {
	// debugger;
	const element = e.target;
	const criteria = element.id;
	const selectedValue = element.value;
	const re = new RegExp(`[\&|\?]${criteria}=[\\d|\\w]+`)
	if (selectedValue) {

		let requestString = '';

		if (criteria in requestParams) {
			requestString += window.location.search.replace(re, `\&${criteria}=${selectedValue}`);
		} else {
			requestString = `${window.location.search}&${criteria}=${selectedValue}`;
		}

		window.location.search = requestString;

	} else {
		window.location.search = window.location.search.replace(re, ``);
	}
}


