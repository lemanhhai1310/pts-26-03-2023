<?php $data["title"] = "Contact"; ?>
<?php $bodyClass = '' ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-light uk-position-relative uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/bg_contact.png" uk-img>
    <div class="uk-overlay uk-overlay-primary uk-position-cover"></div>
    <div class="uk-section uk-position-relative">
        <div class="uk-container uk-container-large">
            <h1 class="uk-h1 gallery__title">Contact Us</h1>
            <ul class="uk-list contact__listAddress">
                <li><strong>Address:</strong> Số 48, tổ 5, bằng b, hoàng liệt hoàng mai, hà nội</li>
                <li><strong>Email:</strong> admin@devotededit.net</li>
                <li><strong>Hotline:</strong> 0339871448</li>
            </ul>
        </div>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container uk-container-large">
        <div class="uk-child-width-1-2@m" uk-grid>
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
            <div>
                <div class="contact__card uk-form-stacked uk-card uk-card-default uk-card-body uk-height-min-large">
                    <div class="uk-grid-20 uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_442_8606)">
                                    <path d="M22.4281 19.3281C22.4281 20.6687 21.3406 21.7555 20 21.7555C18.6594 21.7555 17.5719 20.6687 17.5719 19.3281C17.5719 17.9875 18.6594 16.9 20 16.9C21.3406 16.9 22.4281 17.9867 22.4281 19.3281ZM13.5055 16.9C12.1641 16.9 11.0773 17.9867 11.0773 19.3281C11.0773 20.6695 12.1641 21.7555 13.5055 21.7555C14.8469 21.7555 15.9328 20.6687 15.9328 19.3281C15.9328 17.9875 14.8461 16.9 13.5055 16.9ZM26.4945 16.9C25.1539 16.9 24.0672 17.9867 24.0672 19.3281C24.0672 20.6695 25.1539 21.7555 26.4945 21.7555C27.8352 21.7555 28.9227 20.6687 28.9227 19.3281C28.9227 17.9875 27.8359 16.9 26.4945 16.9ZM40 11.7188V28.2812C40 34.7531 34.7531 40 28.2812 40H11.7188C5.24688 40 0 34.7531 0 28.2812V11.7188C0 5.24688 5.24688 0 11.7188 0H28.2812C34.7531 0 40 5.24688 40 11.7188ZM34.8438 19.3281C34.8438 12.6914 28.1977 7.31094 20 7.31094C11.8023 7.31094 5.15625 12.6914 5.15625 19.3281C5.15625 22.1273 6.33906 24.7039 8.32187 26.7469L6.71875 31.543C6.49141 32.2219 7.13672 32.8688 7.81641 32.6445L14.4148 30.4641C16.1391 31.0312 18.0242 31.3453 20 31.3453C28.1977 31.3453 34.8438 25.9648 34.8438 19.3281Z" fill="url(#paint0_linear_442_8606)"/>
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_442_8606" x1="3.43203" y1="3.43203" x2="36.568" y2="36.568" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#6EBEFF"/>
                                        <stop offset="1" stop-color="#0056AB"/>
                                    </linearGradient>
                                    <clipPath id="clip0_442_8606">
                                        <rect width="40" height="40" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="uk-width-expand">
                            <div class="home__txt">Write us some information about your project and we will respond within 24 hours</div>
                        </div>
                    </div>
                    <div class="uk-text-center item__40-20 contact__card__title">GET IN TOUCH</div>
                    <div class="item__40-20">
                        <label class="uk-form-label virtualrenovation__label" for="form-stacked-text">Name*</label>
                        <div class="uk-form-controls">
                            <input class="uk-input home__sendPhoto__input" type="text" placeholder="Enter your name" aria-label="Input">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label virtualrenovation__label" for="form-stacked-text">Email*</label>
                        <div class="uk-form-controls">
                            <input class="uk-input home__sendPhoto__input" type="text" placeholder="Enter email" aria-label="Input">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label virtualrenovation__label" for="form-stacked-text">Phone number*</label>
                        <div class="uk-form-controls">
                            <input class="uk-input home__sendPhoto__input" type="text" placeholder="Enter phone number" aria-label="Input">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label virtualrenovation__label" for="form-stacked-text">Service needed*</label>
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
                    <div class="uk-margin">
                        <label class="uk-form-label virtualrenovation__label" for="form-stacked-text">Your Notes</label>
                        <div class="uk-form-controls">
                            <textarea class="uk-flex-auto uk-textarea home__sendPhoto__textarea item__15" rows="5" placeholder="Please enter your notes and let us know your wishes" aria-label="Textarea"></textarea>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <input class="uk-input home__sendPhoto__input" type="text" placeholder="Paste your link here, we will take the picture from this link" aria-label="Input">
                    </div>
                    <button class="home__sendPhoto__btn home__sendPhoto__btn--primary uk-button uk-button-primary uk-width item__40-20">
                        Send information
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.138 7.52861L10.4713 2.86195C10.3456 2.74051 10.1772 2.67331 10.0024 2.67483C9.82756 2.67635 9.66035 2.74646 9.53675 2.87007C9.41314 2.99367 9.34303 3.16088 9.34151 3.33568C9.33999 3.51048 9.40719 3.67888 9.52863 3.80461L13.0573 7.33328H1.33329C1.15648 7.33328 0.986912 7.40352 0.861888 7.52854C0.736864 7.65357 0.666626 7.82313 0.666626 7.99995C0.666626 8.17676 0.736864 8.34633 0.861888 8.47135C0.986912 8.59637 1.15648 8.66661 1.33329 8.66661H13.0573L9.52863 12.1953C9.46495 12.2568 9.41416 12.3303 9.37922 12.4117C9.34429 12.493 9.3259 12.5805 9.32513 12.669C9.32436 12.7575 9.34122 12.8453 9.37475 12.9272C9.40827 13.0092 9.45777 13.0836 9.52036 13.1462C9.58296 13.2088 9.65739 13.2583 9.73932 13.2918C9.82125 13.3253 9.90904 13.3422 9.99756 13.3414C10.0861 13.3407 10.1736 13.3223 10.2549 13.2873C10.3362 13.2524 10.4098 13.2016 10.4713 13.1379L15.138 8.47128C15.2629 8.34626 15.3332 8.17672 15.3332 7.99995C15.3332 7.82317 15.2629 7.65363 15.138 7.52861Z" fill="white"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>