<?php echo $header; ?>

<section class="rate" id="raate">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="rate__title">
                    Відгуки та оцінки відділення
                </h2>
            </div>
            <div class="col-12">

                <form action="" class="rate__main-block" method="post">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="rate__subtitle">
                                Поставте оцінку відділенню за 10-ти бальною шкалою
                            </h3>
                        </div>
                        <div class="col-12">
                            <p class="rate__under-title">
                                (оцінка “10” є найвищою оцінкою)
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="rate__points-1-10">
                                <div class="rate__point-wrap">
                                    <input class="rate__point-input" type="radio" id="rate__point-1" name="rate-points" value="1">
                                    <label class="rate__point-dot" for="rate__point-1"></label>
                                    <label for="rate__point-1" class="rate__point-numb">1</label>
                                </div>
                                <div class="rate__point-wrap">
                                    <input class="rate__point-input" type="radio" id="rate__point-2" name="rate-points" value="2">
                                    <label class="rate__point-dot" for="rate__point-2"></label>
                                    <label for="rate__point-2" class="rate__point-numb">2</label>
                                </div>
                                <div class="rate__point-wrap">
                                    <input class="rate__point-input" type="radio" id="rate__point-3" name="rate-points" value="3">
                                    <label class="rate__point-dot" for="rate__point-3"></label>
                                    <label for="rate__point-3" class="rate__point-numb">3</label>
                                </div>
                                <div class="rate__point-wrap">
                                    <input class="rate__point-input" type="radio" id="rate__point-4" name="rate-points" value="4">
                                    <label class="rate__point-dot" for="rate__point-4"></label>
                                    <label for="rate__point-4" class="rate__point-numb">4</label>
                                </div>
                                <div class="rate__point-wrap">
                                    <input class="rate__point-input" type="radio" id="rate__point-5" name="rate-points" value="5">
                                    <label class="rate__point-dot" for="rate__point-5"></label>
                                    <label for="rate__point-5" class="rate__point-numb">5</label>
                                </div>
                                <div class="rate__point-wrap">
                                    <input class="rate__point-input" type="radio" id="rate__point-6" name="rate-points" value="6">
                                    <label class="rate__point-dot" for="rate__point-6"></label>
                                    <label for="rate__point-6" class="rate__point-numb">6</label>
                                </div>
                                <div class="rate__point-wrap">
                                    <input class="rate__point-input" type="radio" id="rate__point-7" name="rate-points" value="7">
                                    <label class="rate__point-dot" for="rate__point-7"></label>
                                    <label for="rate__point-7" class="rate__point-numb">7</label>
                                </div>
                                <div class="rate__point-wrap">
                                    <input class="rate__point-input" type="radio" id="rate__point-8" name="rate-points" value="8">
                                    <label class="rate__point-dot" for="rate__point-8"></label>
                                    <label for="rate__point-8" class="rate__point-numb">8</label>
                                </div>
                                <div class="rate__point-wrap">
                                    <input class="rate__point-input" type="radio" id="rate__point-9" name="rate-points" value="9">
                                    <label class="rate__point-dot" for="rate__point-9"></label>
                                    <label for="rate__point-9" class="rate__point-numb">9</label>
                                </div>
                                <div class="rate__point-wrap">
                                    <input class="rate__point-input" checked type="radio" id="rate__point-10" name="rate-points" value="10">
                                    <label class="rate__point-dot" for="rate__point-10"></label>
                                    <label for="rate__point-10" class="rate__point-numb">10</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex">
                        <div class="col-lg-6">
                            <div class="rate__your-data d-flex flex-column">
                                <input name="rev_name" type="text" class="rate__your-name" placeholder="Введіть своє ім'я">
                                <input name="rev_num" id="rate__your-contact" type="tel" class="rate__your-contact" placeholder="+380........" required pattern="^\+380\d{2}\d{7}$" maxlength="13">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="rate__your-review d-flex flex-column">
                                <textarea name="rev_mess" id="" class="rate__review-textarea" placeholder="Напишіть свій відгук про фахівця"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex">
                            <input name="rev_new" type="submit" class="rate__send-review" value="Додати відгук">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="review" id="review">
    <div class="container">
        <? foreach($reviews as $rev_n => $review): ?>
        <div class="review__one-review">
            <div class="row d-flex">
                <div class="col-12">
                    <div class="review__rate d-flex justify-content-start d-md-none">
                        <div class="review__all-stars d-flex align-items-center">
                            <? for($m = 0; $m < 10; $m += 2): ?>
                            <? if($m >= $review['mark']): ?>
                            <i class="far fa-star review__rate-star review__rate-star_empty"></i>
                            <? endif; ?>
                            <? if($m + 1 == $review['mark']): ?>
                            <i class="fas fa-star-half-alt review__rate-star review__rate-star_half"></i>
                            <? endif; ?>
                            <? if($m + 1 < $review['mark']): ?>
                            <i class="fas fa-star review__rate-star review__rate-star_full"></i>
                            <? endif; ?>
                            <? endfor; ?>
                        </div>
                        <span class="review__rate-numb"><?=$review['mark'];?></span>
                    </div>
                </div>
                <div class="offset-xl-1 col-md-9 col-xl-8">
                    <div class="review__data d-flex flex-column">
                        <p class="review__name"><?=$review['name'];?></p>
                        <p class="review__date"><?=date('d.m.Y', $review['date']);?></p>
                        <p class="review__opinions"><?=$review['mess'];?></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex flex-column justify-content-between">
                    <div class="review__rate d-none d-md-flex justify-content-start">
                        <div class="review__all-stars d-flex align-items-center">
                            <? for($m = 0; $m < 10; $m += 2): ?>
                            <? if($m >= $review['mark']): ?>
                            <i class="far fa-star review__rate-star review__rate-star_empty"></i>
                            <? endif; ?>
                            <? if($m + 1 == $review['mark']): ?>
                            <i class="fas fa-star-half-alt review__rate-star review__rate-star_half"></i>
                            <? endif; ?>
                            <? if($m + 1 < $review['mark']): ?>
                            <i class="fas fa-star review__rate-star review__rate-star_full"></i>
                            <? endif; ?>
                            <? endfor; ?>
                        </div>
                        <span class="review__rate-numb"><?=$review['mark'];?></span>
                    </div>
                    <? if($user): ?>
                    <!-- Форма должна появлятся только у администратора -->
                    <form action="" class="review__for-admin d-flex justify-content-between flex-md-column" method="post">
                        <input type="hidden" class="rev_id" name="rev_id" value="<?=$review['id'];?>">
                        <div class="review__publish-block d-flex justify-content-end">
                            <input name="rev_public" id="review-publish-<?=$rev_n;?>" type="checkbox" <?=($review['is_pub'] == '0' ? '' : 'checked');?> class="rev_public review__publish-check">
                            <label for="review-publish-<?=$rev_n;?>" class="review__publish-dot"></label>
                            <label for="review-publish-<?=$rev_n;?>" class="rev_public_label review__publish-word">Опублікувати</label>
                            <!--<label for="review-publish-<?=$rev_n;?>" class="rev_public_label review__publish-word"><?=($review['is_pub'] == '0' ? 'Опублікувати' : 'Приховати');?></label><!-- -->
                        </div>
                        <div class="review__delete-block d-flex justify-content-end">
                            <input name="rev_rem" type="button" class="rev_rem review__delete-btn" value="Видалити">
                        </div>
                    </form>
                    <? endif; ?>
                </div>
            </div>
        </div>
        <? endforeach; ?>
    </div>
</section>

<?=$footer;?>
<? if($user): ?>
<script>
    $('.rev_public').click(function() {
        let parent_block = $(this).closest('form');
        let id = parent_block.find('.rev_id').val();
        let is_pub = parent_block.find('.rev_public').prop("checked") * 1;
        $.ajax({
            type: "POST",
            data: {
                rev_pub: 1,
                rev_is_pub: is_pub,
                rev_id: id
            },
            success: function(data) {
                /*if (is_pub == 1) {
                    parent_block.find('.rev_public_label').html('Приховати');
                } else {
                    parent_block.find('.rev_public_label').html('Опублікувати');
                }/**/
                return data;
            }
        });
    });

    $('.rev_rem').click(function() {
        let parent_block = $(this).closest('.review__one-review');
        let id = parent_block.find('.rev_id').val();
        $.ajax({
            type: "POST",
            data: {
                rev_rem: 1,
                rev_id: id
            },
            success: function(data) {
                parent_block.remove();
                return data;
            }
        });
    });
<? endif; ?>
</script>
