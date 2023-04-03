<?php $data["title"] = "Blog"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section">
    <div class="uk-container uk-container-large">
        <div class="uk-flex-center" uk-grid>
            <div class="uk-width-4-5@m">
                <h1 class="uk-h1 uk-text-center gallery__title">Blog</h1>
                <div class="uk-text-center item__40-20 gallery_detail__desc">DevotedEdit.com’s team and other experts offer their best advice, insights, and how-to's. All to help you improve the presentation of your property marketing.</div>
            </div>
        </div>
        <div class="uk-grid-20-m item__60-30" uk-grid>
            <div class="uk-width-expand">
                <div class="uk-position-relative blog__search">
                    <input class="uk-input blog__search__input" type="text" placeholder="Article Search">
                    <button class="uk-button blog__search__btn uk-button-primary uk-position-center-right uk-position-small" uk-icon="icon: search"></button>
                </div>
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
                    <button class="video__order__boxRight__select blog__search__btn1 uk-button uk-width uk-button-default" type="button" tabindex="-1">
                        <span></span>
                        <span class="uk-position-center-right uk-position-small" uk-icon="icon: chevron-down"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="uk-child-width-1-3@m uk-grid-20-m" uk-grid>
            <?php for ($i=1;$i<=9;$i++): ?>
            <div>
                <div class="blog__card uk-card uk-card-default uk-border-rounded">
                    <div class="uk-cover-container blog__card__coverImg">
                        <img src="https://picsum.photos/434/236/?random=<?= $i ?>" alt="" uk-cover="">
                        <canvas width="434" height="236"></canvas>
                        <div class="blog__card__date uk-flex-inline uk-flex-middle uk-position-top-left">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.38397 2.08261C4.94859 2.08261 4.59559 2.43561 4.59559 2.87099V4.44773H3.80722C2.93647 4.44773 2.23047 5.15364 2.23047 6.02448V6.81286C2.23047 7.24824 2.58346 7.60123 3.01884 7.60123H17.2096C17.6449 7.60123 17.998 7.24824 17.998 6.81286V6.02448C17.998 5.15364 17.292 4.44773 16.4212 4.44773H15.6328V2.87099C15.6328 2.43561 15.2798 2.08261 14.8445 2.08261C14.4091 2.08261 14.0561 2.43561 14.0561 2.87099V4.44773H10.9026V2.87099C10.9026 2.43561 10.5496 2.08261 10.1142 2.08261C9.67887 2.08261 9.32584 2.43561 9.32584 2.87099V4.44773H6.17234V2.87099C6.17234 2.43561 5.81935 2.08261 5.38397 2.08261ZM2.23047 9.17798C2.23047 8.74264 2.58346 8.3896 3.01884 8.3896H17.2096C17.6449 8.3896 17.998 8.74264 17.998 9.17798V15.485C17.998 16.3558 17.292 17.0617 16.4212 17.0617H3.80722C2.93647 17.0617 2.23047 16.3558 2.23047 15.485V9.17798Z" fill="white"/>
                            </svg>
                            22 November 2022
                        </div>
                    </div>
                    <div class="uk-card-body uk-padding-small blog__card__body">
                        <div class="blog__card__title"><a href="">It is a long established fact that a reader will be distracted by the readable content</a></div>
                        <div class="blog__card__desc item__20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        <div class="item__40-20"><a href="" class="blog__card__link">Read more</a></div>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
        <div class="item__80-40">
            <?php require "template-parts/layouts/pagination.php"; ?>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>