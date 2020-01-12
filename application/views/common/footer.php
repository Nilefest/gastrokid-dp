<!-- MODAL WIN -->
<!-- Кнопка вызова модального окна должна иметь такие "data-togle" и "data-target" Пример:
<input type="button" class="header__contact-us-btn" data-toggle="modal" data-target="#modal-contact-us" value="Замовити консультацiю"> -->

<form method="post" action="" class="modal modal-contact-us fade" id="modal-contact-us" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-stg__wrap">
            <div class="modal-gfg__close-btn-wrap">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-stg__title text-center">
                    Замовити консультацію
                </h5>
            </div>
            <div class="modal-body">
                <div class="row modal-stg__group-items">
                    <div class="col-12">
                        <label for="modal__name" class="modal-stg__label">Ваше ім’я</label>
                    </div>
                    <div class="col-12">
                        <input id="modal__name" type="text" required placeholder="Наприклад: Микита" class="modal-stg__input modal__input_name">
                    </div>
                </div>
                <div class="row modal-stg__group-items">
                    <div class="col-12">
                        <label for="modal__tel" class="modal-stg__label">Номер телефона</label>
                    </div>
                    <div class="col-12">
                        <input id="modal__tel" type="number" required placeholder="+38**********" maxlength="13" class="modal-stg__input modal__input_tel">
                    </div>
                </div>
                <div class="row modal-stg__group-items">
                    <div class="col-12">
                        <label for="modal__surname" class="modal-stg__label">Ваше питання</label>
                    </div>
                    <div class="col-12">
                        <textarea name="" id="modal__text" type="text" placeholder="Напишіть ваше питання, повідомлення для нас або залиште поле порожнім, якщо ви хочете записатися на консультацію" class="modal-stg__textarea modal__textarea_text"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <input type="submit" class="modal-stg__btn modal-stg__btn_send" value="Відправити">
            </div>
        </div>
    </div>
</form>
<!-- MODAL WIN end -->

<!-- BUTTON to UP -->
<a href="#" class="scrollup">Наверх</a>
<!-- BUTTON to UP end -->



<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column">
                <div class="footer__name d-flex flex-column flex-sm-row">
                    <img src="/application/public/img/main/Pediatric-logo.png" alt="">
                    <h5 class="footer__name-clinic">
                        Дитяче гастроентерологічне відділення Дніпропетровскої МКЛ №9
                    </h5>
                </div>
                <p class="footer__text">
                    Бажаєте записатися на прийом до вахівця або у вас залишились деякі питання? Зв'яжіться з нами доручним для вас способом
                </p>
                <h6 class="footer__subtitle">
                    По телефону
                </h6>
                <a href="tel:+380957789314" class="footer__tell">+38(095)778-93-14</a>
                <h6 class="footer__subtitle">
                    За адресою
                </h6>
                <p class="footer__adress">
                    Проспект Мануйлівський, 29 А , м.Дніпро
                </p>
                <p class="footer__our-grafic">
                    Ми працюємо з 8:00 до 16-00 з понеділка по п'ятницю
                </p>
            </div>
            <div class="col-lg-6">
                <div id="footer__map" class="footer__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2644.140259496507!2d35.045796815661326!3d48.49220237925327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe2870f2b3faf%3A0xa352f1f694a9a764!2z0L_RgNC-0YHQvy4g0JzQsNC90YPQudC70L7QstGB0LrQuNC5LCAyOdCQLCDQlNC90LjQv9GA0L4sINCU0L3QtdC_0YDQvtC_0LXRgtGA0L7QstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA0OTAwMA!5e0!3m2!1sru!2sua!4v1556937002680!5m2!1sru!2sua" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="footer__copiright">
                    Сopyright © 2019 Всі права захищені |
                    <? if($user): ?>
                    <a style="color:#ccc" href="/login?logout">Ласкаво просимо, <?=$user;?>!</a>
                    <? endif; ?>
                    <? if(!$user): ?>
                    <a style="color:#ccc" href="/login">Увійти</a>
                    <? endif; ?>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Custom JS -->
<script src="/application/public/js/jquery-3.3.1.min.js"></script>
<script src="/application/public/js/main.js"></script>
<script src="/application/public/js/modal.js"></script>
<script src="/application/public/js/scroll_top.js"></script>
<?php foreach($js as $script):?>
<script src="/application/public/js/<?php echo $script;?>.js" type="text/javascript" charset="utf-8"></script>
<?php endforeach; ?>
</body>

</html>
