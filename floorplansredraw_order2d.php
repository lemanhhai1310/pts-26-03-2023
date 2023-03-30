<?php $data["title"] = "Floor plans redraw Order page 2D"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section">
    <div class="uk-container uk-container-large">
        <div class="uk-text-center home__sendPhoto__titleSmall">option of you</div>
        <h1 class="uk-h1 uk-text-center floorplansredraw__title">Let's redraw your floorplan</h1>
        <div class="item__80-40 floorplansredraw__label">Floor plan type*</div>
        <div class="item__20 floorplansredraw__txt">Our Agency Template we can do </div>
        <div class="item__20 uk-child-width-1-2 uk-child-width-1-6@m uk-grid-20-m uk-grid-small" uk-grid>
            <?php for ($i=1;$i<=6;$i++): ?>
                <label>
                    <input class="uk-radio uk-hidden home__sendPhoto__radio" type="radio" name="radio1" <?= ($i==1)?'checked':'' ?>>
                    <div class="home__sendPhoto__boxRadio">
                        <div class="uk-cover-container home__sendPhoto__boxRadio__coverImg">
                            <img src="images/noimage.jpg" alt="" uk-cover="">
                            <canvas width="205" height="132"></canvas>
                        </div>
                    </div>
                </label>
            <?php endfor; ?>
        </div>

        <div class="item__40-20 floorplansredraw__label">Standard Templates</div>
        <div class="item__20 uk-child-width-1-2 uk-child-width-1-6@m uk-grid-20-m uk-grid-small" uk-grid>
            <?php for ($i=1;$i<=6;$i++): ?>
                <label>
                    <input class="uk-radio uk-hidden home__sendPhoto__radio" type="radio" name="radio2" <?= ($i==1)?'checked':'' ?>>
                    <div class="home__sendPhoto__boxRadio">
                        <div class="uk-cover-container home__sendPhoto__boxRadio__coverImg">
                            <img src="images/noimage.jpg" alt="" uk-cover="">
                            <canvas width="205" height="132"></canvas>
                        </div>
                        <div class="home__sendPhoto__boxRadio__txt item__8 uk-flex uk-flex-center uk-flex-middle uk-grid-10" style="font-size: 16px !important;" uk-grid>
                            <div class="uk-width-expand uk-text-center">
                                Floor plan only 2D
                                back and white
                            </div>
                            <div class="uk-width-auto">
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
                    </div>
                </label>
            <?php endfor; ?>
        </div>
        <div class="item__140-70 uk-grid-40-l uk-grid-small uk-grid-match" uk-grid>
            <div class="uk-width-1-3@l">
                <div class="uk-cover-container home__sendPhoto__itemPhoto uk-border-rounded">
                    <img src="images/noimage.jpg" alt="" uk-cover="">
                    <canvas width="462" height="308"></canvas>
                    <a href="" class="uk-position-top-right uk-position-small uk-close" uk-close></a>
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="uk-child-width-1-2@m uk-child-width-1-3@l uk-grid-small uk-grid-40-l" uk-grid>
                    <div>
                        <div class="uk-form-stacked">
                            <label class="uk-form-label virtualrenovation__label" for="form-stacked-text">Story/level*</label>
                            <div class="uk-form-controls">
                                <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                                    <select aria-label="Custom controls">
                                        <option value="">Please select...</option>
                                        <option value="1">Option 01</option>
                                        <option value="2">Option 02</option>
                                        <option value="3">Option 03</option>
                                        <option value="4">Option 04</option>
                                    </select>
                                    <button class="virtualrenovation__select uk-width uk-button uk-button-default" type="button" tabindex="-1">
                                        <span></span>
                                        <span class="uk-position-center-right uk-position-small" uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-form-stacked">
                            <label class="uk-form-label virtualrenovation__label" for="form-stacked-text">Include Funiture*</label>
                            <div class="uk-form-controls">
                                <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                                    <select aria-label="Custom controls">
                                        <option value="">Please select...</option>
                                        <option value="1">Option 01</option>
                                        <option value="2">Option 02</option>
                                        <option value="3">Option 03</option>
                                        <option value="4">Option 04</option>
                                    </select>
                                    <button class="virtualrenovation__select uk-width uk-button uk-button-default" type="button" tabindex="-1">
                                        <span></span>
                                        <span class="uk-position-center-right uk-position-small" uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-form-stacked">
                            <label class="uk-form-label virtualrenovation__label" for="form-stacked-text">Template orientiaton*</label>
                            <div class="uk-form-controls">
                                <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                                    <select aria-label="Custom controls">
                                        <option value="">Please select...</option>
                                        <option value="1">Option 01</option>
                                        <option value="2">Option 02</option>
                                        <option value="3">Option 03</option>
                                        <option value="4">Option 04</option>
                                    </select>
                                    <button class="virtualrenovation__select uk-width uk-button uk-button-default" type="button" tabindex="-1">
                                        <span></span>
                                        <span class="uk-position-center-right uk-position-small" uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-form-stacked">
                            <label class="uk-form-label virtualrenovation__label" for="form-stacked-text">Floor Plan Dimensions*</label>
                            <div class="uk-form-controls">
                                <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                                    <select aria-label="Custom controls">
                                        <option value="">Please select...</option>
                                        <option value="1">Option 01</option>
                                        <option value="2">Option 02</option>
                                        <option value="3">Option 03</option>
                                        <option value="4">Option 04</option>
                                    </select>
                                    <button class="virtualrenovation__select uk-width uk-button uk-button-default" type="button" tabindex="-1">
                                        <span></span>
                                        <span class="uk-position-center-right uk-position-small" uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-form-stacked">
                            <label class="uk-form-label virtualrenovation__label" for="form-stacked-text">Out File Type*</label>
                            <div class="uk-form-controls">
                                <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                                    <select aria-label="Custom controls">
                                        <option value="">Please select...</option>
                                        <option value="1">Option 01</option>
                                        <option value="2">Option 02</option>
                                        <option value="3">Option 03</option>
                                        <option value="4">Option 04</option>
                                    </select>
                                    <button class="virtualrenovation__select uk-width uk-button uk-button-default" type="button" tabindex="-1">
                                        <span></span>
                                        <span class="uk-position-center-right uk-position-small" uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-form-stacked">
                            <label class="uk-form-label virtualrenovation__label" for="form-stacked-text">Disclaimer *</label>
                            <div class="uk-form-controls">
                                <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                                    <select aria-label="Custom controls">
                                        <option value="">Please select...</option>
                                        <option value="1">Option 01</option>
                                        <option value="2">Option 02</option>
                                        <option value="3">Option 03</option>
                                        <option value="4">Option 04</option>
                                    </select>
                                    <button class="virtualrenovation__select uk-width uk-button uk-button-default" type="button" tabindex="-1">
                                        <span></span>
                                        <span class="uk-position-center-right uk-position-small" uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-form-stacked">
                            <label class="uk-form-label virtualrenovation__label" for="form-stacked-text">Room name*</label>
                            <div class="uk-form-controls">
                                <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                                    <select aria-label="Custom controls">
                                        <option value="">Please select...</option>
                                        <option value="1">Option 01</option>
                                        <option value="2">Option 02</option>
                                        <option value="3">Option 03</option>
                                        <option value="4">Option 04</option>
                                    </select>
                                    <button class="virtualrenovation__select uk-width uk-button uk-button-default" type="button" tabindex="-1">
                                        <span></span>
                                        <span class="uk-position-center-right uk-position-small" uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-form-stacked">
                            <label class="uk-form-label virtualrenovation__label" for="form-stacked-text">Display North on your plan*</label>
                            <div class="uk-form-controls">
                                <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                                    <select aria-label="Custom controls">
                                        <option value="">Please select...</option>
                                        <option value="1">Option 01</option>
                                        <option value="2">Option 02</option>
                                        <option value="3">Option 03</option>
                                        <option value="4">Option 04</option>
                                    </select>
                                    <button class="virtualrenovation__select uk-width uk-button uk-button-default" type="button" tabindex="-1">
                                        <span></span>
                                        <span class="uk-position-center-right uk-position-small" uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-form-stacked">
                            <label class="uk-form-label virtualrenovation__label" for="form-stacked-text">Dispaly Street/Building address*</label>
                            <div class="uk-form-controls">
                                <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                                    <select aria-label="Custom controls">
                                        <option value="">Please select...</option>
                                        <option value="1">Option 01</option>
                                        <option value="2">Option 02</option>
                                        <option value="3">Option 03</option>
                                        <option value="4">Option 04</option>
                                    </select>
                                    <button class="virtualrenovation__select uk-width uk-button uk-button-default" type="button" tabindex="-1">
                                        <span></span>
                                        <span class="uk-position-center-right uk-position-small" uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width">
                <textarea class="item__40-20 uk-flex-auto uk-textarea home__sendPhoto__textarea item__15" rows="8" placeholder="Please enter your notes and let us know your wishes" aria-label="Textarea"></textarea>
            </div>
        </div>
        <div class="item__40-20">
            <div uk-grid>
                <div class="uk-width-1-3@m">
                    <a href="" class="item__40-20 home__sendPhoto__btn uk-flex-inline home__sendPhoto__btn--default uk-button uk-button-default uk-width">
                        Upload more photos
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.29538 6.53873H5.91461V11.3422C5.91461 11.8295 6.30975 12.2242 6.7966 12.2242H9.20406C9.69088 12.2242 10.0861 11.8295 10.0861 11.3422V6.53873H11.7047C11.9729 6.53873 12.2139 6.37727 12.3171 6.12946C12.4191 5.88266 12.3623 5.59735 12.1729 5.40788L8.46836 1.70294C8.20963 1.44472 7.79048 1.44472 7.53119 1.70294L3.82732 5.40788C3.63782 5.59735 3.58104 5.88217 3.68364 6.12946C3.78669 6.37678 4.02722 6.53873 4.29538 6.53873Z" fill="#2B9ED6"/>
                            <path d="M15.2044 8.33887C14.7655 8.33887 14.4094 8.69501 14.4094 9.13441V12.4608C14.4094 13.4573 13.5982 14.268 12.6017 14.268H3.39824C2.40172 14.268 1.59108 13.4573 1.59108 12.4608V9.13441C1.59108 8.69501 1.23445 8.33887 0.79554 8.33887C0.356109 8.33887 0 8.69501 0 9.13444V12.4609C0 14.3346 1.52442 15.8591 3.39824 15.8591H12.6017C14.4755 15.8591 16 14.3347 16 12.4609V9.13444C16 8.69501 15.6439 8.33887 15.2044 8.33887Z" fill="#2B9ED6"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="item__40-20 uk-flex-right@l" uk-grid>
            <div class="uk-width-2-5@l">
                <div class="home__sendPhoto__box uk-card uk-card-default uk-padding-small sidebar">
                    <div class="home__sendPhoto__legend">Order Summary</div>
                    <div class="uk-flex-middle item__40-20" uk-grid>
                        <div class="uk-width-expand">
                            <div class="floorplansredraw__name">2D Basic FP for 1 photos</div>
                        </div>
                        <div class="uk-width-auto">
                            <div class="floorplansredraw__price">$24</div>
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
                        Pay with Paypal
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/faq.php"; ?>
<?php require "template-parts/layouts/footer.php"; ?>