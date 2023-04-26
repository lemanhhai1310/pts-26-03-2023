<?php $data["title"] = "remmove item detail"; ?>
<?php $bodyClass = '' ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="home__slider uk-position-relative uk-light" uk-slider="draggable: false;autoplay: true">

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

        <ul class="uk-slider-items uk-child-width-1-1">
            <?php for ($i=1;$i<=10;$i++): ?>
                <li>
                    <div class="home__slider__card uk-card uk-background-default uk-border-rounded">
                        <div class="beforeAfter uk-position-relative">
                            <div class="uk-height-1-1">
                                <div class="uk-cover-container">
                                    <img src="images/Rectangle140239.png" uk-cover="">
                                    <canvas width="3840" height="1334"></canvas>
                                </div>
                                <span class="service__card__label uk-position-top-left uk-position-medium">Before</span>
                            </div>
                            <div class="uk-height-1-1">
                                <div class="uk-cover-container">
                                    <img src="images/img_after.png" uk-cover="">
                                    <canvas width="3840" height="1334"></canvas>
                                </div>
                                <span class="service__card__label uk-position-top-right uk-position-medium">After</span>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endfor; ?>
        </ul>

    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-position-bottom uk-position-medium uk-position-z-index"></ul>

</div>
<div class="uk-section">
    <div class="uk-container uk-container-large">
        <h1 class="uk-h1 uk-text-center single__title">Remove item</h1>
        <div class="home__txt uk-text-center item__20-15">DevotedEdit offers exceptional services - speed, control and quality for images.</div>
        <div class="uk-grid-8-l item__40-20" uk-grid>
            <div class="uk-width-expand">
                <div class="home__sendPhoto__titleSmall">FACT CHECK</div>
                <h1 class="uk-h1 uk-margin home__sendPhoto__title">Remove Item</h1>
                <div class="item__40-20 uk-grid-8 uk-child-width" uk-grid>
                    <?php for ($i=1;$i<=24;$i++): ?>
                    <div>
                        <div class="single__card1 uk-card uk-border-rounded">
                            <div class="uk-child-width-1-2@m uk-grid-collapse uk-grid-match" uk-grid>
                                <div class="uk-flex-last@m">
                                    <div class="beforeAfter uk-position-relative">
                                        <div class="uk-height-1-1">
                                            <div class="uk-cover-container">
                                                <img src="images/img_before.png" uk-cover="">
                                                <canvas width="766" height="510"></canvas>
                                            </div>
                                            <span class="service__card__label uk-position-top-left uk-position-small">Before</span>
                                        </div>
                                        <div class="uk-height-1-1">
                                            <div class="uk-cover-container">
                                                <img src="images/img_after.png" uk-cover="">
                                                <canvas width="766" height="510"></canvas>
                                            </div>
                                            <span class="service__card__label uk-position-top-right uk-position-small">After</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-card-body uk-padding-small">
                                        <div class="single__card1__title"><?= $i ?>. Remove small item</div>
                                        <div class="single__card1__txt item__20-15">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
                <div class="item__120-60 single__card2 uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="single__card2__title">Customer reviews</div>
                    </div>
                    <div class="uk-card-body">
                        <div class="uk-grid-small uk-grid-60-l uk-flex-middle" uk-grid>
                            <div class="uk-width-auto@s">
                                <div class="uk-text-center">
                                    <div class="single__card2__rate__number">4.8</div>
                                    <div class="item__10">
                                        <div class="single__card2__rate uk-position-relative uk-display-inline-block" style="font-size: 17px;">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <div class="uk-position-center-left uk-display-inline-block uk-text-nowrap uk-overflow-hidden" style="width: 66%">
                                                <i class="fa fa-star single__card2__rate__fa" aria-hidden="true"></i>
                                                <i class="fa fa-star single__card2__rate__fa" aria-hidden="true"></i>
                                                <i class="fa fa-star single__card2__rate__fa" aria-hidden="true"></i>
                                                <i class="fa fa-star single__card2__rate__fa" aria-hidden="true"></i>
                                                <i class="fa fa-star single__card2__rate__fa" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item__10 single__card2__rate__txtReview">(1262 Review)</div>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <div class="single__card2__rate__box1" uk-scrollspy="cls: scroolspy; delay: 500; repeat: true">
                                    <?php for($index=5;$index > 0;$index-=1) {
                                        $percent = rand(0,100); ?>
                                        <div class="item__20 uk-flex-middle uk-grid-10 uk-grid-20-m" uk-grid>
                                            <div class="uk-width-expand">
                                                <div class="single__card2__rate__process uk-position-relative uk-border-pill" style="--percent: <?= $percent ?>%"></div>
                                            </div>
                                            <div class="uk-width-auto">
                                                <div class="uk-position-relative" style="font-size: 17px;color: #cccccc;">
                                                    <?php for ($j=1;$j<=5;$j++): ?>
                                                        <i class="fa fa-star <?= ($j<=$index)?'single__card2__rate__fa':'' ?>" aria-hidden="true"></i>
                                                    <?php endfor; ?>
                                                    <div class="single__card2__rate__percent uk-position-center-right-out"><?= $percent ?>%</div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item__20 single__card2 uk-card uk-card-default">
                    <div class="uk-card-header">
                        <div class="single__card2__title">Customer comments</div>
                    </div>
                    <div class="uk-card-body">
                        <div>
                            <?php for ($i=1;$i<=5;$i++): ?>
                            <div class="single__card2__item">
                                <div class="uk-grid-small uk-grid-20-l" uk-grid>
                                    <div class="uk-width-auto">
                                        <div class="uk-cover-container uk-border-circle">
                                            <img src="images/noimage.jpg" alt="" uk-cover="">
                                            <canvas width="43" height="43"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="single__card2__comment__name">Selena</div>
                                        <div class="uk-flex-middle uk-grid-small uk-grid-20-l" uk-grid>
                                            <div>
                                                <div class="single__card2__rate uk-position-relative uk-display-inline-block" style="font-size: 13px;">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <div class="uk-position-center-left uk-display-inline-block uk-text-nowrap uk-overflow-hidden" style="width: 66%">
                                                        <i class="fa fa-star single__card2__rate__fa" aria-hidden="true"></i>
                                                        <i class="fa fa-star single__card2__rate__fa" aria-hidden="true"></i>
                                                        <i class="fa fa-star single__card2__rate__fa" aria-hidden="true"></i>
                                                        <i class="fa fa-star single__card2__rate__fa" aria-hidden="true"></i>
                                                        <i class="fa fa-star single__card2__rate__fa" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="single__card2__comment__time">1 week ago</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__10 single__card2__comment__txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </div>
                            </div>
                            <?php endfor; ?>
                        </div>
                        <div class="item__40-20">
                            <?php require "template-parts/layouts/pagination.php"; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-2-5@l">
                <div class="home__sendPhoto__box uk-card uk-card-default uk-padding-small sidebar">
                    <div class="home__sendPhoto__legend">select order information</div>
                    <div class="item__16 single__card__title">15$</div>
                    <div class="item__16 single__card__txtPrimary" style="color: #262626;line-height: 1.5;font-weight: 500;">Remove item from $1/ photo</div>
                    <div class="item__16 single__card__txtPrimary">($15 per photo,price charged for final output photo)</div>
                    <div class="uk-grid-20 uk-margin uk-flex-middle" uk-grid>
                        <div>
                            <div class="single__card__label">Quanlity:</div>
                        </div>
                        <div>
                            <div class="uk-position-relative single__form__count">
                                <a href="" class="single__form__icon single__form__icon--sub uk-position-center-left uk-position-small"></a>
                                <input class="single__form__input uk-input uk-form-width-medium uk-text-center" type="text" placeholder="" value="10" aria-label="Medium">
                                <a href="" class="single__form__icon single__form__icon--add uk-position-center-right uk-position-small"></a>
                            </div>
                        </div>
                    </div>

                    <div class="item__40-20 uk-form-stacked">
                        <label class="uk-form-label home__sendPhoto__labelTxt" for="form-stacked-text">Service options:</label>
                        <div class="uk-form-controls">
                            <div class="uk-margin uk-grid-small uk-child-width uk-grid" uk-grid>
                                <label class="single__card__radioLabel single__card__radioLabel--c1"><input class="uk-radio" type="radio" name="radio3" checked> Small item - $2 per photo <span>(Wires, photos, cups, small objects...)</span></label>
                                <label class="single__card__radioLabel single__card__radioLabel--c1"><input class="uk-radio" type="radio" name="radio3"> Large item - 5 per photo <span>(1 or 2 tables, chairs, TV...)</span></label>
                                <label class="single__card__radioLabel single__card__radioLabel--c1"><input class="uk-radio" type="radio" name="radio3"> Remove all furniture ( $15 per photo )</label>
                            </div>
                        </div>
                    </div>

                    <div class="item__40-20 uk-form-stacked">
                        <label class="uk-form-label home__sendPhoto__labelTxt" for="form-stacked-text">Delivery time:</label>
                        <div class="uk-form-controls">
                            <div class="uk-margin uk-grid-small uk-child-width uk-grid" uk-grid>
                                <label class="single__card__radioLabel"><input class="uk-radio" type="radio" name="radio4" checked> Delivery time 24 hours (Default)</label>
                                <label class="single__card__radioLabel"><input class="uk-radio" type="radio" name="radio4"> Delivery time 12 hours </label>
                            </div>
                        </div>
                    </div>

                    <div class="item__40-20 single__card__boxTotal" style="border-width: 1px;">
                        <div class="" uk-grid>
                            <div class="uk-width-expand">
                                <div class="single__card__boxTotal__txt">Total:</div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="single__card__boxTotal__price">$150</div>
                            </div>
                        </div>
                    </div>


                    <button class="home__sendPhoto__btn home__sendPhoto__btn--primary uk-button uk-button-primary uk-width item__40-20">
                        Continue
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.138 7.52861L10.4713 2.86195C10.3456 2.74051 10.1772 2.67331 10.0024 2.67483C9.82756 2.67635 9.66035 2.74646 9.53675 2.87007C9.41314 2.99367 9.34303 3.16088 9.34151 3.33568C9.33999 3.51048 9.40719 3.67888 9.52863 3.80461L13.0573 7.33328H1.33329C1.15648 7.33328 0.986912 7.40352 0.861888 7.52854C0.736864 7.65357 0.666626 7.82313 0.666626 7.99995C0.666626 8.17676 0.736864 8.34633 0.861888 8.47135C0.986912 8.59637 1.15648 8.66661 1.33329 8.66661H13.0573L9.52863 12.1953C9.46495 12.2568 9.41416 12.3303 9.37922 12.4117C9.34429 12.493 9.3259 12.5805 9.32513 12.669C9.32436 12.7575 9.34122 12.8453 9.37475 12.9272C9.40827 13.0092 9.45777 13.0836 9.52036 13.1462C9.58296 13.2088 9.65739 13.2583 9.73932 13.2918C9.82125 13.3253 9.90904 13.3422 9.99756 13.3414C10.0861 13.3407 10.1736 13.3223 10.2549 13.2873C10.3362 13.2524 10.4098 13.2016 10.4713 13.1379L15.138 8.47128C15.2629 8.34626 15.3332 8.17672 15.3332 7.99995C15.3332 7.82317 15.2629 7.65363 15.138 7.52861Z" fill="white"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/faq.php"; ?>
<?php require "template-parts/layouts/footer.php"; ?>