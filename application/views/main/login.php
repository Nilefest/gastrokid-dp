<?=$header;?>

<section class="entered" id="entered">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-8 col-md-7 col-lg-5 col-xl-4">
                <form method="post" action="" id="enter" class="enter">
                    <div class="row">
                        <div class="col-3 col-sm-5">
                            <p class="enter__input-name">Логін:</p>
                        </div>
                        <div class="col-8 col-sm-7">
                            <input name="login_<?=date('Ymdh');?>" type="text" class="enter__for-writen" placeholder="Ваш логін" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 col-sm-5">
                            <p class="enter__input-name">Пароль:</p>
                        </div>
                        <div class="col-8 col-sm-7">
                            <input name="password_<?=date('Ymdh');?>" type="password" class="enter__for-writen" placeholder="Ваш пароль" required>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-10 col-sm-8 col-md-6 col-xl-5">
                            <input name="sub_login_<?=date('Ymdh');?>" type="submit" class="enter__submit" value="Увійти">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?=$footer;?>
