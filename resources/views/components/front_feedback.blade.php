<div class="feedback feedback-call">
  <div class="feedback-content">
    <div class="feedback-wrap">
      <div class="feedback__title">
        Обратный звонок
      </div>
      <div class="feedback__text">
        Оставьте ваши контактные данные, и мы с вами свяжемся.
      </div>
      <div class="feedback-form">
        <div class="feedback-form__input">
          <input id="feedback-form__name" type="text" required placeholder="Имя">
        </div>
        <div class="feedback-form__input">
          <input id="feedback-form__tel" type="tel" class="form__tel" required placeholder="Телефон">
        </div>
        <button class="btn" onclick="message()">
          Отправить
        </button>
      </div>
      <div class="feedback__info">
        Нажимая кнопку «Отправить», вы подтверждаете свое согласие на обработку персональных данных
      </div>
    </div>

    <div class="feedback-done">
      <div class="feedback__img">
        <img src="img/done.svg" alt="ico">
      </div>
      <div class="feedback__title">
        Мы вам перезвоним
      </div>
      <div class="feedback__text">
        Спасибо, ваша заявка принята! Мы свяжемся с вами в ближайшее время.
      </div>
      <button class="btn feedback-close" onclick="closeMessage()">
        На главную
      </button>
    </div>
  </div>
</div>