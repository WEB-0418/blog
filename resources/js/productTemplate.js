export default function getProductHTML (product) {

return `
    <div class="basket__tovar-item">
      <div class="basket__tovar-desc">
        <div class="basket__tovar-img"><img src="${product.thumb}">
          <button class="basket__favorite"></button>
        </div>
        <div class="basket__desc-text">
          <ul class="basket__desc-items basket__in-stock">
            <li class="basket__desc-item">${product.name} № ${product.articule}</li>
            <li class="basket__desc-item">Цвет: ${product.color.name}</li>
            <li class="basket__desc-item">Размер: ${product.size}</li>
          </ul>
        </div>
      </div>
      <div class="basket__price">
        <div class="basket__old-price">${product.price}$</div>
      </div>
      <div class="basket__countblock">
        <div class="basket__countblock-inner">
          <div class="basket__counter minus">-</div>
          <input class="basket__input-counter" value="${product.count}" data-price="${product.price}" data-productId=${product.id}>
          <div class="basket__counter plus">+</div>
        </div>
      </div>
      <div class="basket__total">
        <input class="basket__total-input" value="${product.price}$" readonly>
      </div>
    </div>
    `;
}