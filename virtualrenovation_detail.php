<?php $data["title"] = "virtual renovation detail"; ?>
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
        <h1 class="uk-h1 uk-text-center single__title">Virtual renovation</h1>
        <div class="home__txt uk-text-center item__20-15">DevotedEdit offers exceptional services - speed, control and quality for images.</div>
        <h2 class="uk-h2 uk-text-center item__40-20 virtualrenovation__title1">
            Turn an idea into reality with Virtual Renovation,
            <div>from just US$24</div>
        </h2>
        <div class="uk-flex-center item__44-20" uk-grid>
            <div class="uk-width-5-6@l">
                <div class="uk-child-width-1-2@l" uk-grid>
                    <?php for ($i=1;$i<=4;$i++): ?>
                    <div>
                        <div class="virtualrenovation__box">
                            <div class="virtualrenovation__box__txt1">TAKE THE UNKNOWN OUT OF RENOVATIONS</div>
                            <div class="virtualrenovation__box__txt2 item__6">Visualize what a design will look like before undertaking expensive renovations.</div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <div class="uk-child-width-1-2@m uk-grid-40-m item__120-60" uk-grid>
            <div>
                <div class="virtualrenovation__title">INTERNAL RENOVATIONS</div>
                <table class="virtualrenovation__table uk-table uk-table-divider uk-table-hover uk-table-small item__40-20">
                    <thead>
                    <tr>
                        <th class="uk-table-expand">Description</th>
                        <th class="uk-table-shrink">Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php for ($i=1;$i<=12;$i++): ?>
                    <tr>
                        <td>
                            <div>Replace Flooring (change the texture of the existing flooring)</div>
                        </td>
                        <td>
                            <div>US$24.00</div>
                        </td>
                    </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>
            </div>
            <div>
                <div class="virtualrenovation__title">External Renovations</div>
                <table class="virtualrenovation__table uk-table uk-table-divider uk-table-hover uk-table-small item__40-20">
                    <thead>
                    <tr>
                        <th class="uk-table-expand">Description</th>
                        <th class="uk-table-shrink">Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php for ($i=1;$i<=12;$i++): ?>
                        <tr>
                            <td>
                                <div>Replace Flooring (change the texture of the existing flooring)</div>
                            </td>
                            <td>
                                <div>US$24.00</div>
                            </td>
                        </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="uk-grid-8 uk-child-width-1-2@m item__80-40" uk-grid>
            <?php for ($i=1;$i<=6;$i++): ?>
                <div>
                    <div class="service__card uk-card uk-card-default uk-height-min-small" style="border: 1px solid #2B9ED6;">
                        <div class="uk-grid-collapse uk-grid-match" uk-grid>
                            <div class="uk-width-1-2@m uk-flex-last@m">
                                <div class="beforeAfter uk-position-relative">
                                    <div class="uk-height-1-1">
                                        <div class="uk-cover-container">
                                            <img src="images/img_before.png" uk-cover="">
                                            <canvas width="634" height="424"></canvas>
                                        </div>
                                        <span class="service__card__label uk-position-top-left uk-position-small">Before</span>
                                    </div>
                                    <div class="uk-height-1-1">
                                        <div class="uk-cover-container">
                                            <img src="images/img_after.png" uk-cover="">
                                            <canvas width="634" height="424"></canvas>
                                        </div>
                                        <span class="service__card__label uk-position-top-right uk-position-small">After</span>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <div class="service__card__box">
                                    <div class="uk-grid-8" uk-grid>
                                        <div>
                                            <div class="service__card__title"><a href="">Single photos</a></div>
                                        </div>
                                        <div>
                                            <div class="service__card__title price">US$1.60</div>
                                        </div>
                                    </div>
                                    <div class="service__card__txt item__20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <div class="uk-flex-center item__40-20" uk-grid>
            <div class="uk-width-auto">
                <div class="uk-width-2xlarge">
                    <div class="single__card2 uk-card uk-card-default">
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
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/faq.php"; ?>
<?php require "template-parts/layouts/footer.php"; ?>