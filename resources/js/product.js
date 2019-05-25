$( document ).ready(function() {

	let storageData = []; //сюда будем вытаскивать данные из хранилища и писать этот массив в хранилище

	if(localStorage.getItem('data') !== null) //проверяем есть ли что-то в хранилище
	{
		storageData = JSON.parse(localStorage['data']); //забираем данные из хранилища

		$.ajax({
			url: '/api/product',
			data: {
				products: storageData
			},
			success (data) {
				// console.log(products);
				showProducts(data.products);
			},
			error () {
				console.error('ERROR!!', arguments);
			}
		});

		if(storageData.length === 6)
		{
			storageData.shift();
		}

		if (!storageData.includes(myData.product)) {
			storageData.push(myData.product);
		}
	}
	else
	{
		$('.tovar-block__recently-title').hide(); //скрываем надпись "недавно просмотренные товары"
		storageData.push(myData.product);
	}

	localStorage['data'] = JSON.stringify(storageData);
});


function showProducts(products) {
	$('.tovar-block__recently-title').show(); //показываем надпись "недавно просмотренные товары"

		for(let i = 0; i < products.length; i++)
		{
			const product = products[i];

			$(`<div class="tovar-block__recently-item tovar-item">
      	<div class="tovar-item__img">
      		<img src="${product.image}">
        	<button class="tovar-item__favorite"></button>
        	<a class="tovar-item__zoom-it" href="${product.image}" data-fancybox>Увеличить</a>
      	</div>
      	<div class="tovar-item__title">${product.name}"${product.brand.name}" №${product.articule}</div>
      	<div class="tovar-item__prive-row">
          <div class="tovar-item__old-price">${product.price} руб.</div>
          <div class="tovar-item__new-price">${product.price} руб.</div>
      	</div>
      	<div class="tover-item__size-row">Размерный ряд: ${product.size}</div>
      </div>`).appendTo('.tovar-block__recently');
		}
}

document.querySelector('#addProduct').addEventListener('click', function () {
	localStorage.newProduct = JSON.stringify({
		color: document.querySelector('.tovar-block__color-item-inner').dataset.color,
		size: document.querySelector('.tovar-block__size').value,
		id: myData.product,
	});
})