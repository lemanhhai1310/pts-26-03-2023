<?php $data["title"] = "Gallery Detail"; ?>
<?php $bodyClass = '' ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section-small">
    <div class="uk-container uk-container-large">
        <nav aria-label="Breadcrumb">
            <ul class="uk-breadcrumb breadcrumb">
                <li><a href="#">Gallery</a></li>
                <li><span>Virtual Staging</span></li>
            </ul>
        </nav>
        <div class="uk-flex-middle" uk-grid>
            <div class="uk-width-expand">
                <h1 class="uk-h1 gallery_detail__title">VIRTUAL STAGING</h1>
                <div class="gallery_detail__desc item__20">Our team can add furniture to real estate photography to show potential buyers just how versatile the space is.</div>
            </div>
            <div class="uk-width-1-4@m">
                <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                    <select aria-label="Custom controls">
                        <option value="">All Tags</option>
                        <option value="1">Option 01</option>
                        <option value="2">Option 02</option>
                        <option value="3">Option 03</option>
                        <option value="4">Option 04</option>
                    </select>
                    <button class="video__order__boxRight__select uk-button uk-width uk-button-default" type="button" tabindex="-1">
                        <span></span>
                        <span class="uk-position-center-right uk-position-small" uk-icon="icon: chevron-down"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="uk-child-width-1-2@m uk-grid-20-m" uk-grid>
            <?php for ($i=1;$i<=12;$i++): ?>
            <div>
                <div class="beforeAfter uk-position-relative">
                    <div class="uk-height-1-1">
                        <div class="uk-cover-container">
                            <img src="https://picsum.photos/662/441/?random=<?= $i ?>" uk-cover="">
                            <canvas width="1324" height="882"></canvas>
                        </div>
                        <span class="service__card__label uk-position-top-left uk-position-small">Before</span>
                    </div>
                    <div class="uk-height-1-1">
                        <div class="uk-cover-container">
                            <img src="https://picsum.photos/662/441/?random=<?= $i*12 ?>" uk-cover="">
                            <canvas width="1324" height="882"></canvas>
                        </div>
                        <span class="service__card__label uk-position-top-right uk-position-small">After</span>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
        <div class="item__40-20">
            <?php require "template-parts/layouts/pagination.php"; ?>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>