<form class="modal-form reg-form" id="regForm">
  <div class="modal-form__title">РЕГИСТРАЦИЯ</div>
  <div class="modal-form__input-row">
    <div class="modal-form__input-name modal-form__require">Имя</div>
    <input class="modal-form__input">
  </div>
  <div class="modal-form__input-row">
    <div class="modal-form__input-name modal-form__require">Эл. почта</div>
    <input class="modal-form__input">
  </div>
  <div class="modal-form__news-spam">
    <input class="modal-form__i-agree" id="spam" type="checkbox" hidden>
    <label class="modal-form__agree-label" for="spam">Да</label>
    <div class="modal-form__agree-text">Подписаться на новости и скидки</div>
  </div>
  <div class="modal-form__input-row">
    <div class="modal-form__input-name">Моб.тел.</div>
    <input class="modal-form__input">
  </div>
  <div class="modal-form__input-row select-outer">Пол<i class="fas fa-angle-down"></i>
    <select class="modal-form__input" name="sex">
      <option>Женский</option>
      <option>Мужской</option>
    </select>
  </div>
  <div class="modal-form__input-row">
    <div class="modal-form__input-name modal-form__require">Пароль</div>
    <input class="modal-form__input">
  </div>
  <div class="modal-form__input-row">
    <div class="modal-form__input-name modal-form__require">Подтвердите<br>пароль</div>
    <input class="modal-form__input">
  </div>
  <div class="modal-form__enter-reg-row">
    <button class="btn" id="registration">Зарегестрироваться</button>
    <button class="btn btn_white" id="regEnter">Вход</button>
  </div>
</form>