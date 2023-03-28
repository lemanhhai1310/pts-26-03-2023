<?php $data["title"] = "Home-Page"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-position-relative uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/Rectangle2.png" uk-img>
    <div class="uk-overlay uk-overlay-primary uk-position-cover"></div>
    <div class="uk-section uk-position-relative">
        <div class="uk-container uk-container-large">
            <div class="uk-light">
                <h3 class="uk-h3 uk-text-center">Make your photos more beautiful and professional at unbeatable prices</h3>
                <div class="uk-text-center item__20-10">DevotedEdit offers exceptional services - speed, control and quality for images.</div>
            </div>
            <div class="item__40-20 uk-light home__slider" uk-slider="draggable: false;autoplay: true">

                <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

                    <div class="uk-slider-container">
                        <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@m uk-grid-8" uk-grid>
                            <?php for ($i=1;$i<=10;$i++): ?>
                                <li>
                                    <div class="home__slider__card uk-card uk-background-default uk-border-rounded">
                                        <div class="beforeAfter uk-position-relative">
                                            <div class="uk-height-1-1">
                                                <div class="uk-cover-container">
                                                    <img src="images/img_before.png" uk-cover="">
                                                    <canvas width="668" height="445"></canvas>
                                                </div>
                                                <span class="service__card__label uk-position-top-left uk-position-small">Before</span>
                                            </div>
                                            <div class="uk-height-1-1">
                                                <div class="uk-cover-container">
                                                    <img src="images/img_after.png" uk-cover="">
                                                    <canvas width="668" height="445"></canvas>
                                                </div>
                                                <span class="service__card__label uk-position-top-right uk-position-small">After</span>
                                            </div>
                                        </div>
                                        <div class="uk-padding-small home__slider__body">
                                            <div class="uk-grid-10" uk-grid>
                                                <div>
                                                    <div class="home__slider__txt">Image enhancement</div>
                                                </div>
                                                <div>
                                                    <div class="home__slider__price">US$1.60</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>

                    <div class="uk-hidden@s uk-light">
                        <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>

                    <div class="uk-visible@s">
                        <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>


                </div>

                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

            </div>
        </div>
    </div>
</div>
<div class="uk-section">
    <div class="uk-container uk-container-large">
        <h2 class="uk-h2 home__title uk-text-center">
            Professional Photo Editing, Virtual Staging, Floor Plan Redraws, & Renders at Unbeatable Prices
        </h2>
        <div class="item__40-20 uk-child-width-expand@l uk-child-width-1-2 uk-grid-small uk-grid-20-l" uk-grid>
            <?php for ($i=1;$i<=8;$i++): ?>
            <div>
                <div class="uk-cover-container">
                    <img src="images/noimage.jpg" alt="" uk-cover="">
                    <canvas width="300" height="200"></canvas>
                </div>
                <div class="item__20-10 uk-text-center home__txt">Lorem Ipsum is simply dummy text of the printing </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/all_our_services.php"; ?>
<div class="uk-section home__block uk-background-norepeat uk-background-bottom-center">
    <div class="uk-container uk-container-large">
        <h2 class="uk-h2 home__title uk-text-center">
            Prestige customers
        </h2>
        <div class="home__txt uk-text-center item__20-10">Always brings professionalism and is trusted by leading companies around the world</div>
    </div>
    <div class="item__60-30">
        <div class="slider__container">
            <div class="slider__container__wrapper c1">
                <div class="uk-grid-32-m uk-grid-16 uk-flex-nowrap uk-flex-middle" style="width: max-content" uk-grid>
                    <?php
                    $data1 = array(
                        'images/brand/image3.png',
                        'images/brand/image4.png',
                        'images/brand/image5.png',
                        'images/brand/image6.png',
                        'images/brand/image7.png',
                        'images/brand/image8.png',
                        'images/brand/image9.png',
                        'images/brand/image10.png',
                        'images/brand/image11.png',
                        'images/brand/image12.png',
                        'images/brand/image13.png',
                        'images/brand/image14.png',
                        'images/brand/image73.png',
                        'images/brand/image74.png',
                        'images/brand/image75.png',
                        'images/brand/image76.png',
                    );
                    foreach ($data1 as $value): ?>
                        <div>
                            <img src="<?= $value ?>" alt="">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="slider__container item__32-16">
            <div class="slider__container__wrapper c2">
                <div class="uk-grid-32-m uk-grid-16 uk-flex-nowrap uk-flex-middle" style="width: max-content" uk-grid>
                    <?php
                    $data2 = array(
                        'images/brand/image3.png',
                        'images/brand/image4.png',
                        'images/brand/image5.png',
                        'images/brand/image6.png',
                        'images/brand/image7.png',
                        'images/brand/image8.png',
                        'images/brand/image9.png',
                        'images/brand/image10.png',
                        'images/brand/image11.png',
                        'images/brand/image12.png',
                        'images/brand/image13.png',
                        'images/brand/image14.png',
                        'images/brand/image73.png',
                        'images/brand/image74.png',
                        'images/brand/image75.png',
                        'images/brand/image76.png',
                    );
                    rsort($data2);
                    foreach ($data2 as $value): ?>
                        <div>
                            <img src="<?= $value ?>" alt="">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-container uk-container-large item__80-40">
        <div class="uk-grid-40-l uk-child-width-1-2@l uk-flex-bottom" uk-grid>
            <div>
                <img src="images/Group9.png" alt="">
            </div>
            <div uk-scrollspy="target: .home__block__card; cls: uk-animation-slide-right-medium; delay: 500; repeat: true">
                <h2 class="uk-h2 home__title">
                    How we work?
                </h2>
                <div class="home__txt item__40-20">work professionally and bring the best quality products.</div>
                <?php
                $data = array(
                    array(
                        'img' => 'images/add-image1.png',
                        'txt' => '1. Send us 1 test image & your editing requirements. We will get back to you with the result and the price quote within 24 hours.',
                    ),
                    array(
                        'img' => 'images/add-to-cart1.png',
                        'txt' => '2. If you are satisfied with the result and agreed on the price offered per image, you can now start sending us your orders via email.',
                    ),
                    array(
                        'img' => 'images/upload1.png',
                        'txt' => '3. Upload your photos for editing through GoogleDrive, WeTransfer or Dropbox, send us the link and we will work with it accordingly.',
                    ),
                    array(
                        'img' => 'images/laptop1.png',
                        'txt' => '4. Send your payment. Get the photo orders back within 24 hours and begin using them right away. We also offer free revision.',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <div class="home__block__card uk-card uk-card-default uk-padding-small item__20">
                    <div class="uk-flex-middle uk-grid-small uk-grid-30-m" uk-grid>
                        <div class="uk-width-auto">
                            <img src="<?= $v['img'] ?>" alt="">
                        </div>
                        <div class="uk-width-expand">
                            <div class="home__block__card__txt"><?= $v['txt'] ?></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<div class="home__block1 uk-section-small uk-background-norepeat uk-background-bottom-right" data-src="images/Maskgroup.png" uk-img>
    <div class="uk-container uk-container-large">
        <div class="uk-grid-119-l uk-flex-middle" uk-grid>
            <div class="uk-width-auto@s">
                <img src="images/Frame23.png" alt="">
            </div>
            <div class="uk-width-expand">
                <h2 class="uk-h2 home__title" style="color: #8500EE;">
                    We are trusted by <br class="uk-visible@l"> the best
                </h2>
                <div class="home__txt item__20">Agents and many famous brands have trusted and used Luxuryphoto to enhance the quality of their images and products in the most professional way.</div>
            </div>
        </div>
    </div>
</div>
<div class="home__block2 uk-section">
    <div class="uk-container uk-container-large">
        <h2 class="uk-h2 home__title uk-text-center">
            WHAT CLIENTS SAY ABOUT US
        </h2>
        <div class="home__txt uk-text-center item__20-10">Always brings professionalism and is trusted by leading companies around the world</div>
        <div class="item__40-20" uk-slider="draggable: false">

            <div class="uk-position-relative">

                <div class="uk-slider-container">
                    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-small uk-grid-20-l" uk-grid>
                        <?php for ($i=1;$i<=6;$i++): ?>
                        <li>
                            <div class="beforeAfter uk-position-relative">
                                <div class="uk-height-1-1">
                                    <div class="uk-cover-container">
                                        <img src="images/img_before.png" uk-cover="">
                                        <canvas width="434" height="260"></canvas>
                                    </div>
                                    <span class="service__card__label uk-position-top-left uk-position-small">Before</span>
                                </div>
                                <div class="uk-height-1-1">
                                    <div class="uk-cover-container">
                                        <img src="images/img_after.png" uk-cover="">
                                        <canvas width="434" height="260"></canvas>
                                    </div>
                                    <span class="service__card__label uk-position-top-right uk-position-small">After</span>
                                </div>
                            </div>
                            <div class="uk-grid-12 item__20-15" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="uk-cover-container">
                                        <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                        <canvas width="120" height="120"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="home__block2__title">Michel Martn - Photographer</div>
                                    <div class="home__block2__txt item__8">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</div>
                                </div>
                            </div>
                        </li>
                        <?php endfor; ?>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

            </div>

        </div>
    </div>
</div>
<div class="uk-position-relative uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/bg1.png" uk-img>
    <div class="uk-overlay uk-overlay-primary uk-position-cover"></div>
    <div class="uk-position-relative uk-section-small uk-position-z-index">
        <div class="uk-container uk-container-large">
            <div class="home__sendPhoto__card uk-card uk-background-default uk-card-body uk-border-rounded">
                <div class="uk-grid-80-l uk-child-width-1-2@l" uk-grid>
                    <div>
                        <div class="home__sendPhoto__titleSmall">Get 3 photo editing service for Free</div>
                        <h1 class="uk-h1 uk-margin home__sendPhoto__title">Send us your photo in one of the following ways</h1>
                        <div class="item__40-20">
                            <div class="uk-width" uk-form-custom>
                                <input type="file" aria-label="Custom controls">
                                <div class="home__sendPhoto__placeholder uk-placeholder uk-margin-remove uk-text-center">
                                    <div><img src="images/drag_dropIcon.png" alt=""></div>
                                    <div class="item__15 home__sendPhoto__placeholder__txt">Drag and Drop, Copy and Paste Files</div>
                                </div>
                            </div>
                        </div>
                        <div class="item__40-20 uk-child-width-1-3 uk-grid-20-m uk-grid-small" uk-grid>
                            <?php for ($i=1;$i<=3;$i++): ?>
                            <div>
                                <div class="uk-cover-container home__sendPhoto__itemPhoto uk-border-rounded">
                                    <img src="images/noimage.jpg" alt="" uk-cover="">
                                    <canvas width="183" height="118"></canvas>
                                    <a href="" class="uk-position-top-right uk-position-small uk-close" uk-close></a>
                                </div>
                            </div>
                            <?php endfor; ?>
                        </div>
                        <a href="" class="item__40-20 home__sendPhoto__btn home__sendPhoto__btn--default uk-button uk-button-default uk-width">
                            Upload more photos
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.29538 6.53873H5.91461V11.3422C5.91461 11.8295 6.30975 12.2242 6.7966 12.2242H9.20406C9.69088 12.2242 10.0861 11.8295 10.0861 11.3422V6.53873H11.7047C11.9729 6.53873 12.2139 6.37727 12.3171 6.12946C12.4191 5.88266 12.3623 5.59735 12.1729 5.40788L8.46836 1.70294C8.20963 1.44472 7.79048 1.44472 7.53119 1.70294L3.82732 5.40788C3.63782 5.59735 3.58104 5.88217 3.68364 6.12946C3.78669 6.37678 4.02722 6.53873 4.29538 6.53873Z" fill="#2B9ED6"/>
                                <path d="M15.2044 8.33887C14.7655 8.33887 14.4094 8.69501 14.4094 9.13441V12.4608C14.4094 13.4573 13.5982 14.268 12.6017 14.268H3.39824C2.40172 14.268 1.59108 13.4573 1.59108 12.4608V9.13441C1.59108 8.69501 1.23445 8.33887 0.79554 8.33887C0.356109 8.33887 0 8.69501 0 9.13444V12.4609C0 14.3346 1.52442 15.8591 3.39824 15.8591H12.6017C14.4755 15.8591 16 14.3347 16 12.4609V9.13444C16 8.69501 15.6439 8.33887 15.2044 8.33887Z" fill="#2B9ED6"/>
                            </svg>
                        </a>
                        <div class="item__40-20">
                            <a href="" class="home__sendPhoto__btn home__sendPhoto__btn--primary uk-button uk-button-primary uk-width">
                                Upload photos to Dropbox
                            </a>
                            <small class="home__sendPhoto__txtSmall">(Upload photos to Our Dropbox No need register account)</small>
                        </div>
                        <div class="item__40-20">
                            <input class="uk-input home__sendPhoto__input" type="text" placeholder="Paste your link here, we will take the picture from this link" aria-label="Input">
                        </div>
                        <div class="item__40-20">
                            <textarea class="uk-textarea home__sendPhoto__textarea" rows="5" placeholder="Please enter your notes and let us know your wishes" aria-label="Textarea"></textarea>
                        </div>
                    </div>
                    <div>
                        <div class="home__sendPhoto__box uk-card uk-card-default uk-padding-small">
                            <div class="home__sendPhoto__legend">Option of you</div>
                            <div class="item__40-20 uk-grid-small uk-child-width-1-2 uk-grid" uk-grid>
                                <?php
                                $data = array('Add fire','Grass repari','TV Screen','Sky replacement','TV Black');
                                foreach ($data as $k=>$v): ?>
                                    <label class="home__sendPhoto__checkboxLabel"><input class="uk-checkbox" type="checkbox"> <?= $v ?></label>
                                <?php endforeach; ?>
                            </div>
                            <div class="uk-flex-middle item__40-20 uk-grid-small" uk-grid>
                                <div>
                                    <div class="home__sendPhoto__labelTxt">File size Limit:</div>
                                </div>
                                <div>
                                    <div uk-form-custom="target: > * > span:first-child">
                                        <select aria-label="Custom controls">
                                            <option value="">Please select...</option>
                                            <option value="1">Option 01</option>
                                            <option value="2">Option 02</option>
                                            <option value="3">Option 03</option>
                                            <option value="4">Option 04</option>
                                        </select>
                                        <button class="home__sendPhoto__btnSelect uk-button uk-button-default" type="button" tabindex="-1">
                                            <span></span>
                                            <span uk-icon="icon: chevron-down"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="item__40-20 uk-form-stacked">
                                <label class="uk-form-label home__sendPhoto__labelTxt" for="form-stacked-text">Window view:</label>
                                <div class="uk-form-controls">
                                    <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-grid-24-m uk-grid-small" uk-grid>
                                        <?php for ($i=1;$i<=5;$i++): ?>
                                        <label>
                                            <input class="uk-radio uk-hidden home__sendPhoto__radio" type="radio" name="radio1" <?= ($i==1)?'checked':'' ?>>
                                            <div class="home__sendPhoto__boxRadio">
                                                <div class="uk-cover-container home__sendPhoto__boxRadio__coverImg">
                                                    <img src="images/noimage.jpg" alt="" uk-cover="">
                                                    <canvas width="164" height="110"></canvas>
                                                </div>
                                                <div class="home__sendPhoto__boxRadio__txt item__8 uk-flex uk-flex-center uk-flex-middle">
                                                    Strong view
                                                    <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_593_33192)">
                                                            <path d="M8.52888 11.7765C9.94401 11.7765 11.0912 10.6293 11.0912 9.21418C11.0912 7.79905 9.94401 6.65186 8.52888 6.65186C7.11374 6.65186 5.96655 7.79905 5.96655 9.21418C5.96655 10.6293 7.11374 11.7765 8.52888 11.7765Z" fill="black"/>
                                                            <path d="M16.5953 8.50413C14.6257 6.12405 11.6443 3.83301 8.52878 3.83301C5.41267 3.83301 2.43054 6.12565 0.462261 8.50413C0.121792 8.91538 0.121792 9.5124 0.462261 9.92365C0.95711 10.5216 1.99453 11.676 3.38011 12.6846C6.86964 15.2248 10.1802 15.2305 13.6775 12.6846C15.063 11.676 16.1005 10.5216 16.5953 9.92365C16.9348 9.5132 16.9365 8.91672 16.5953 8.50413ZM8.52878 5.62664C10.5069 5.62664 12.116 7.23578 12.116 9.21389C12.116 11.192 10.5069 12.8011 8.52878 12.8011C6.55067 12.8011 4.94152 11.192 4.94152 9.21389C4.94152 7.23578 6.55067 5.62664 8.52878 5.62664Z" fill="black"/>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_593_33192">
                                                                <rect width="16.6437" height="16.6437" fill="white" transform="translate(0.206909 0.890625)"/>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                            </div>
                                        </label>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="item__40-20 uk-form-stacked">
                                <label class="uk-form-label home__sendPhoto__labelTxt" for="form-stacked-text">Sky color options:</label>
                                <div class="uk-form-controls">
                                    <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-grid-24-m uk-grid-small" uk-grid>
                                        <?php for ($i=1;$i<=6;$i++): ?>
                                            <label>
                                                <input class="uk-radio uk-hidden home__sendPhoto__radio" type="radio" name="radio2" <?= ($i==1)?'checked':'' ?>>
                                                <div class="home__sendPhoto__boxRadio">
                                                    <div class="home__sendPhoto__boxRadio__coverImg uk-cover-container">
                                                        <img src="images/noimage.jpg" alt="" uk-cover="">
                                                        <canvas width="164" height="110"></canvas>
                                                    </div>
                                                    <div class="home__sendPhoto__boxRadio__txt item__8 uk-flex uk-flex-center uk-flex-middle">
                                                        sky color 1
                                                        <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_593_33192)">
                                                                <path d="M8.52888 11.7765C9.94401 11.7765 11.0912 10.6293 11.0912 9.21418C11.0912 7.79905 9.94401 6.65186 8.52888 6.65186C7.11374 6.65186 5.96655 7.79905 5.96655 9.21418C5.96655 10.6293 7.11374 11.7765 8.52888 11.7765Z" fill="black"/>
                                                                <path d="M16.5953 8.50413C14.6257 6.12405 11.6443 3.83301 8.52878 3.83301C5.41267 3.83301 2.43054 6.12565 0.462261 8.50413C0.121792 8.91538 0.121792 9.5124 0.462261 9.92365C0.95711 10.5216 1.99453 11.676 3.38011 12.6846C6.86964 15.2248 10.1802 15.2305 13.6775 12.6846C15.063 11.676 16.1005 10.5216 16.5953 9.92365C16.9348 9.5132 16.9365 8.91672 16.5953 8.50413ZM8.52878 5.62664C10.5069 5.62664 12.116 7.23578 12.116 9.21389C12.116 11.192 10.5069 12.8011 8.52878 12.8011C6.55067 12.8011 4.94152 11.192 4.94152 9.21389C4.94152 7.23578 6.55067 5.62664 8.52878 5.62664Z" fill="black"/>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_593_33192">
                                                                    <rect width="16.6437" height="16.6437" fill="white" transform="translate(0.206909 0.890625)"/>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </label>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="item__40-20">
                                <div class="uk-margin">
                                    <input class="uk-input home__sendPhoto__input" type="text" placeholder="Your name*" aria-label="Input">
                                </div>
                                <div class="uk-margin">
                                    <input class="uk-input home__sendPhoto__input" type="text" placeholder="Email Address*" aria-label="Input">
                                </div>
                            </div>
                            <button class="home__sendPhoto__btn home__sendPhoto__btn--primary uk-button uk-button-primary uk-width item__40-20">
                                Send now
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.138 7.52861L10.4713 2.86195C10.3456 2.74051 10.1772 2.67331 10.0024 2.67483C9.82756 2.67635 9.66035 2.74646 9.53675 2.87007C9.41314 2.99367 9.34303 3.16088 9.34151 3.33568C9.33999 3.51048 9.40719 3.67888 9.52863 3.80461L13.0573 7.33328H1.33329C1.15648 7.33328 0.986912 7.40352 0.861888 7.52854C0.736864 7.65357 0.666626 7.82313 0.666626 7.99995C0.666626 8.17676 0.736864 8.34633 0.861888 8.47135C0.986912 8.59637 1.15648 8.66661 1.33329 8.66661H13.0573L9.52863 12.1953C9.46495 12.2568 9.41416 12.3303 9.37922 12.4117C9.34429 12.493 9.3259 12.5805 9.32513 12.669C9.32436 12.7575 9.34122 12.8453 9.37475 12.9272C9.40827 13.0092 9.45777 13.0836 9.52036 13.1462C9.58296 13.2088 9.65739 13.2583 9.73932 13.2918C9.82125 13.3253 9.90904 13.3422 9.99756 13.3414C10.0861 13.3407 10.1736 13.3223 10.2549 13.2873C10.3362 13.2524 10.4098 13.2016 10.4713 13.1379L15.138 8.47128C15.2629 8.34626 15.3332 8.17672 15.3332 7.99995C15.3332 7.82317 15.2629 7.65363 15.138 7.52861Z" fill="white"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>