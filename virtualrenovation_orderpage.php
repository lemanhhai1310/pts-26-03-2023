<?php $data["title"] = "virtual renovation Order page"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section order__content">
    <div class="uk-container uk-container-large">
        <div class="virtualstaging__orderpage__itemLeft">
            <div class="uk-grid-small" uk-grid>
                <div class="uk-width-expand">
                    <div class="home__sendPhoto__titleSmall">what we need</div>
                    <h1 class="uk-h1 uk-margin home__sendPhoto__title">Upload a picture that outlines the area to be renovated (if any)</h1>
                    <div class="virtualstaging__orderpage__label item__40-20" style="line-height: 1.6">External Renovation <span>(For example)</span></div>
                    <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-grid-small uk-grid-20-l item__20" uk-grid>
                        <?php for ($i=1;$i<=3;$i++): ?>
                            <div>
                                <div class="virtualstaging__orderpage__coverImg uk-cover-container uk-border-rounded">
                                    <img src="images/noimage.jpg" alt="" uk-cover="">
                                    <canvas width="470" height="302"></canvas>
                                </div>
                                <div class="virtualstaging__orderpage__txt1 uk-text-center item__15">High Res Image</div>
                            </div>
                        <?php endfor; ?>
                    </div>

                    <div class="virtualstaging__orderpage__label item__44-20" style="line-height: 1.6">Internal Renovation <span>(For example)</span></div>
                    <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-grid-small uk-grid-20-l item__20" uk-grid>
                        <?php for ($i=1;$i<=3;$i++): ?>
                            <div>
                                <div class="virtualstaging__orderpage__coverImg uk-cover-container uk-border-rounded">
                                    <img src="images/noimage.jpg" alt="" uk-cover="">
                                    <canvas width="470" height="302"></canvas>
                                </div>
                                <div class="virtualstaging__orderpage__txt1 uk-text-center item__15">High Res Image</div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="uk-width-2-5@l"></div>
            </div>
        </div>
        <div class="virtualstaging__orderpage__itemLeft">
            <div class="uk-grid-24" uk-grid>
                <div class="uk-width-1-4@m">
                    <div class="virtualrenovation__item">
                        <div class="uk-cover-container home__sendPhoto__itemPhoto uk-border-rounded">
                            <img src="images/noimage.jpg" alt="" uk-cover="">
                            <canvas width="366" height="236"></canvas>
                            <a href="" class="uk-position-top-right uk-position-small uk-close" uk-close></a>
                        </div>
                    </div>
                    <div class="virtualrenovation__item">
                        <div class="uk-width" uk-form-custom>
                            <input type="file" aria-label="Custom controls">
                            <div class="uk-cover-container virtualrenovation__cover uk-border-rounded">
                                <div class="uk-position-cover uk-flex uk-flex-middle uk-text-center">
                                    <div class="uk-width">
                                        <div><img src="images/drag_dropIcon.png" alt=""></div>
                                        <div class="item__15 home__sendPhoto__placeholder__txt">Upload description photo</div>
                                    </div>
                                </div>
                                <canvas width="318" height="212"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-grid-24 uk-child-width-1-2@m" uk-grid>
                        <?php for ($i=1;$i<=2;$i++): ?>
                        <div>
                            <div class="virtualrenovation__title2">INTERNAL RENOVATIONS</div>
                            <div class="uk-form-stacked item__40-20">
                                <label class="uk-form-label virtualrenovation__label" for="form-stacked-text">Room name/Area</label>
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
                            <div class="item__40-20 uk-grid-small uk-child-width uk-grid" uk-grid>
                                <?php for ($j=1;$j<=12;$j++): ?>
                                    <label class="home__sendPhoto__checkboxLabel"><input class="uk-checkbox uk-margin-small-right" type="checkbox"> Replace Flooring <strong>US$24.00</strong></label>
                                <?php endfor; ?>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                    <textarea class="item__40-20 uk-flex-auto uk-textarea home__sendPhoto__textarea item__15" rows="5" placeholder="Please enter your notes and let us know your wishes" aria-label="Textarea"></textarea>
                </div>
            </div>
        </div>
        <div class="item__80-40">
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
        <div class="uk-grid-small item__80-40" uk-grid>
            <div class="uk-width-expand">

            </div>
            <div class="uk-width-2-5@l">
                <div class="home__sendPhoto__box uk-card uk-card-default uk-padding-small sidebar">
                    <div class="home__sendPhoto__legend">Your order</div>
                    <div class="item__40-20 virtualrenovation__sidebar__txt">Product: <span class="uk-margin-small-left">Renovations</span></div>
                    <div class="virtualrenovation__item1">
                        <div class="uk-height-max-medium uk-overflow-auto">
                            <?php for ($i=1;$i<=3;$i++): ?>
                            <div class="item__40-20">
                                <div class="virtualrenovation__sidebar__title">Family Room</div>
                                <ul class="virtualrenovation__sidebar__list uk-list uk-list-bullet uk-margin-remove-bottom">
                                    <li>Replace Flooring <strong>US$24.00</strong></li>
                                    <li>Replace Walls <strong>US$24.00</strong></li>
                                </ul>
                            </div>
                            <div class="item__40-20">
                                <div class="virtualrenovation__sidebar__title">Greate Room</div>
                                <ul class="virtualrenovation__sidebar__list uk-list uk-list-bullet uk-margin-remove-bottom">
                                    <li>Add Pool Only <strong>US$24.00</strong></li>
                                    <li>Add Pool Surrounds <strong>US$24.00</strong></li>
                                </ul>
                            </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="item__40-20 uk-form-stacked">
                        <label class="uk-form-label home__sendPhoto__labelTxt" for="form-stacked-text">Delivery time:</label>
                        <div class="uk-form-controls">
                            <div class="uk-margin uk-grid-small uk-child-width uk-grid" uk-grid>
                                <label class="single__card__radioLabel"><input class="uk-radio" type="radio" name="radio3" checked> Delivery time 24 hours</label>
                            </div>
                        </div>
                    </div>
                    <div class="item__20 single__card__boxTotal">
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
<?php require "template-parts/layouts/all_our_services.php"; ?>
<?php require "template-parts/layouts/footer.php"; ?>