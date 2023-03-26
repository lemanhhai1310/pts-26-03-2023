<?php $data["title"] = "Home-Page"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
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
                            <div class="item__40-20 uk-grid-small uk-child-width-1-2 uk-grid">
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