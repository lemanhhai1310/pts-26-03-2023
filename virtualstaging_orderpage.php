<?php $data["title"] = "virtual staging Order page"; ?>
<?php $bodyClass = '' ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section order__content">
    <div class="uk-container uk-container-large">
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-expand">
                <div class="home__sendPhoto__titleSmall">what we need</div>
                <h1 class="uk-h1 uk-margin home__sendPhoto__title">Please upload the photo you want to stage with a description image</h1>
                <div class="item__40-20">
                    <div class="virtualstaging__orderpage__itemLeft">
                        <div class="virtualstaging__orderpage__label">External Renovation <span>(For example)</span></div>
                        <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-grid-small uk-grid-20-l item__20" uk-grid>
                            <?php for ($i=1;$i<=2;$i++): ?>
                            <div>
                                <div class="virtualstaging__orderpage__coverImg uk-cover-container uk-border-rounded">
                                    <img src="images/noimage.jpg" alt="" uk-cover="">
                                    <canvas width="940" height="604"></canvas>
                                </div>
                                <div class="virtualstaging__orderpage__txt1 uk-text-center item__15">High Res Image</div>
                            </div>
                            <?php endfor; ?>
                        </div>

                        <div class="virtualstaging__orderpage__label item__44-20">Internal Renovation <span>(For example)</span></div>
                        <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-grid-small uk-grid-20-l item__20" uk-grid>
                            <?php for ($i=1;$i<=2;$i++): ?>
                                <div>
                                    <div class="virtualstaging__orderpage__coverImg uk-cover-container uk-border-rounded">
                                        <img src="images/noimage.jpg" alt="" uk-cover="">
                                        <canvas width="940" height="604"></canvas>
                                    </div>
                                    <div class="virtualstaging__orderpage__txt1 uk-text-center item__15">High Res Image</div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="virtualstaging__orderpage__itemLeft">
                        <div class="virtualstaging__orderpage__label">Add your edited photo</div>
                        <?php for ($i=1;$i<=2;$i++): ?>
                        <div class="virtualstaging__orderpage__card uk-card uk-card-body uk-card-default uk-border-rounded uk-height-min-small item__32-16">
                            <a href="" class="uk-position-top-right virtualstaging__orderpage__close">
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.7739 4.72413C17.4173 3.3677 15.689 2.44399 13.8075 2.06981C11.926 1.69562 9.97572 1.88777 8.20338 2.62194C6.43105 3.35612 4.91622 4.59936 3.85045 6.19445C2.78467 7.78953 2.21582 9.66483 2.21582 11.5832C2.21582 13.5016 2.78467 15.3769 3.85045 16.972C4.91622 18.5671 6.43105 19.8103 8.20338 20.5445C9.97572 21.2787 11.926 21.4708 13.8075 21.0966C15.689 20.7224 17.4173 19.7987 18.7739 18.4423C19.6747 17.5416 20.3893 16.4722 20.8768 15.2954C21.3643 14.1185 21.6152 12.8571 21.6152 11.5832C21.6152 10.3093 21.3643 9.04795 20.8768 7.87107C20.3893 6.69418 19.6747 5.62485 18.7739 4.72413ZM15.379 14.0359C15.4482 14.1007 15.5034 14.179 15.5411 14.266C15.5789 14.353 15.5983 14.4468 15.5983 14.5416C15.5983 14.6364 15.5789 14.7303 15.5411 14.8173C15.5034 14.9043 15.4482 14.9826 15.379 15.0474C15.3143 15.1116 15.2375 15.1624 15.1531 15.1969C15.0687 15.2314 14.9783 15.2488 14.8871 15.2483C14.7053 15.2476 14.5312 15.1754 14.4021 15.0474L11.9148 12.5601L9.46219 15.0474C9.33314 15.1754 9.15896 15.2476 8.9772 15.2483C8.88602 15.2488 8.79563 15.2314 8.71122 15.1969C8.62681 15.1624 8.55003 15.1116 8.48529 15.0474C8.35625 14.9176 8.28382 14.742 8.28382 14.5589C8.28382 14.3759 8.35625 14.2003 8.48529 14.0705L10.9379 11.5832L8.48529 9.13057C8.37179 8.99803 8.31247 8.82754 8.31921 8.65317C8.32594 8.4788 8.39823 8.31339 8.52162 8.19C8.64501 8.06661 8.81042 7.99433 8.98479 7.98759C9.15916 7.98086 9.32965 8.04017 9.46219 8.15367L11.9148 10.6063L14.3675 8.15367C14.4316 8.08725 14.5082 8.03412 14.5929 7.9973C14.6776 7.96049 14.7687 7.94071 14.861 7.9391C14.9533 7.93749 15.0451 7.95409 15.131 7.98793C15.2169 8.02177 15.2953 8.07221 15.3617 8.13635C15.4281 8.2005 15.4812 8.27709 15.5181 8.36177C15.5549 8.44645 15.5747 8.53755 15.5763 8.62987C15.5779 8.7222 15.5613 8.81393 15.5274 8.89984C15.4936 8.98575 15.4432 9.06415 15.379 9.13057L12.8917 11.5832L15.379 14.0359Z" fill="#888888"/>
                                </svg>
                            </a>
                            <div class="uk-grid-small uk-grid-22-m uk-grid-match" uk-grid>
                                <div class="uk-width-1-3@s">
                                    <div class="uk-cover-container uk-border-rounded">
                                        <img src="images/noimage.jpg" alt="" uk-cover="">
                                        <canvas width="1064" height="708"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-flex uk-flex-column">
                                        <div>
                                            <div class="virtualstaging__orderpage__label1">Room/Area* (What room is this picture?)</div>
                                            <div class="uk-width item__10" uk-form-custom="target: > * > span:first-child">
                                                <select aria-label="Custom controls">
                                                    <option value="">Room/Area*</option>
                                                    <option value="1">Option 01</option>
                                                    <option value="2">Option 02</option>
                                                    <option value="3">Option 03</option>
                                                    <option value="4">Option 04</option>
                                                </select>
                                                <button class="virtualstaging__orderpage__selectBtn uk-button uk-width uk-button-default" type="button" tabindex="-1">
                                                    <span></span>
                                                    <span uk-icon="icon: chevron-down"></span>
                                                </button>
                                            </div>
                                        </div>
                                        <textarea class="uk-flex-auto uk-textarea home__sendPhoto__textarea item__15" rows="3" placeholder="Please enter your notes and let us know your wishes" aria-label="Textarea"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>
                        <div class="item__44-20">
                            <div class="uk-width" uk-form-custom>
                                <input type="file" aria-label="Custom controls">
                                <div class="home__sendPhoto__placeholder uk-placeholder uk-margin-remove uk-text-center">
                                    <div><img src="images/drag_dropIcon.png" alt=""></div>
                                    <div class="item__15 home__sendPhoto__placeholder__txt">Drag and Drop, Copy and Paste Files</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="virtualstaging__orderpage__itemLeft">
                        <div class="virtualstaging__orderpage__label">Add your edited photo</div>
                        <div class="item__20 uk-child-width-1-3 uk-grid-20-m uk-grid-small" uk-grid>
                            <?php for ($i=1;$i<=3;$i++): ?>
                                <div>
                                    <div class="uk-cover-container home__sendPhoto__itemPhoto uk-border-rounded">
                                        <img src="images/noimage.jpg" alt="" uk-cover="">
                                        <canvas width="732" height="472"></canvas>
                                        <a href="" class="uk-position-top-right uk-position-small uk-close" uk-close></a>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                        <div class="item__32-16 virtualstaging__orderpage__txt2">If you have specific design preferences eg. color palette, accessories, furniture placement & type of furniture, upload a room sketch & example image.</div>
                        <div class="item__44-20">
                            <a href="" class="home__sendPhoto__btn home__sendPhoto__btn--primary uk-button uk-button-primary uk-width">
                                Upload a room sketch & example image here
                            </a>
                        </div>
                    </div>
                    <div class="virtualstaging__orderpage__itemLeft">
                        <div class="virtualstaging__orderpage__txt2">If you're not sure, just send us your photo and we'll make a selection</div>
                        <div class="uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid-20-m item__20" uk-grid>
                            <div>
                                <div class="virtualstaging__orderpage__box1 uk-cover-container">
                                    <img class="uk-position-center" src="images/zip1.png" alt="">
                                    <canvas width="470" height="302"></canvas>
                                    <a href="" class="virtualstaging__orderpage__box1__close uk-position-top-right uk-position-small">
                                        <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.9145 5.03961C17.558 3.68318 15.8296 2.75947 13.9481 2.38528C12.0666 2.0111 10.1163 2.20324 8.34401 2.93742C6.57168 3.6716 5.05685 4.91483 3.99107 6.50992C2.9253 8.10501 2.35645 9.98031 2.35645 11.8987C2.35645 13.8171 2.9253 15.6924 3.99107 17.2875C5.05685 18.8825 6.57168 20.1258 8.34401 20.86C10.1163 21.5941 12.0666 21.7863 13.9481 21.4121C15.8296 21.0379 17.558 20.1142 18.9145 18.7578C19.8153 17.8571 20.5299 16.7877 21.0174 15.6108C21.5049 14.4339 21.7559 13.1726 21.7559 11.8987C21.7559 10.6248 21.5049 9.36343 21.0174 8.18654C20.5299 7.00965 19.8153 5.94032 18.9145 5.03961ZM15.5196 14.3513C15.5889 14.4161 15.644 14.4945 15.6818 14.5815C15.7195 14.6685 15.739 14.7623 15.739 14.8571C15.739 14.9519 15.7195 15.0457 15.6818 15.1327C15.644 15.2197 15.5889 15.2981 15.5196 15.3629C15.4549 15.4271 15.3781 15.4779 15.2937 15.5124C15.2093 15.5468 15.1189 15.5643 15.0277 15.5638C14.846 15.563 14.6718 15.4909 14.5427 15.3629L12.0555 12.8756L9.60282 15.3629C9.47377 15.4909 9.29959 15.563 9.11783 15.5638C9.02665 15.5643 8.93626 15.5468 8.85185 15.5124C8.76743 15.4779 8.69065 15.4271 8.62592 15.3629C8.49687 15.2331 8.42444 15.0575 8.42444 14.8744C8.42444 14.6914 8.49687 14.5158 8.62592 14.386L11.0786 11.8987L8.62592 9.44605C8.51241 9.31351 8.4531 9.14302 8.45983 8.96865C8.46657 8.79428 8.53886 8.62887 8.66225 8.50548C8.78564 8.38209 8.95104 8.3098 9.12541 8.30307C9.29978 8.29633 9.47027 8.35564 9.60282 8.46915L12.0555 10.9218L14.5081 8.46915C14.5722 8.40273 14.6488 8.3496 14.7335 8.31278C14.8182 8.27596 14.9093 8.25619 15.0016 8.25458C15.0939 8.25297 15.1857 8.26956 15.2716 8.30341C15.3575 8.33725 15.4359 8.38768 15.5023 8.45183C15.5687 8.51597 15.6219 8.59257 15.6587 8.67725C15.6955 8.76193 15.7153 8.85303 15.7169 8.94535C15.7185 9.03767 15.7019 9.12941 15.6681 9.21532C15.6342 9.30123 15.5838 9.37963 15.5196 9.44605L13.0324 11.8987L15.5196 14.3513Z" fill="#888888"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="item__44-20 uk-width" uk-form-custom>
                            <input type="file" aria-label="Custom controls">
                            <a href="" class="home__sendPhoto__btn home__sendPhoto__btn--default uk-button uk-button-default uk-width">
                                Upload yourphotos (zip file)
                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.29538 6.53873H5.91461V11.3422C5.91461 11.8295 6.30975 12.2242 6.7966 12.2242H9.20406C9.69088 12.2242 10.0861 11.8295 10.0861 11.3422V6.53873H11.7047C11.9729 6.53873 12.2139 6.37727 12.3171 6.12946C12.4191 5.88266 12.3623 5.59735 12.1729 5.40788L8.46836 1.70294C8.20963 1.44472 7.79048 1.44472 7.53119 1.70294L3.82732 5.40788C3.63782 5.59735 3.58104 5.88217 3.68364 6.12946C3.78669 6.37678 4.02722 6.53873 4.29538 6.53873Z" fill="#2B9ED6"/>
                                    <path d="M15.2044 8.33887C14.7655 8.33887 14.4094 8.69501 14.4094 9.13441V12.4608C14.4094 13.4573 13.5982 14.268 12.6017 14.268H3.39824C2.40172 14.268 1.59108 13.4573 1.59108 12.4608V9.13441C1.59108 8.69501 1.23445 8.33887 0.79554 8.33887C0.356109 8.33887 0 8.69501 0 9.13444V12.4609C0 14.3346 1.52442 15.8591 3.39824 15.8591H12.6017C14.4755 15.8591 16 14.3347 16 12.4609V9.13444C16 8.69501 15.6439 8.33887 15.2044 8.33887Z" fill="#2B9ED6"/>
                                </svg>
                            </a>
                        </div>
                        <div class="item__40-20">
                            <input class="uk-input home__sendPhoto__input" type="text" placeholder="Paste your link here, we will take the picture from this link" aria-label="Input">
                        </div>
                        <div class="item__40-20">
                            <textarea class="uk-textarea home__sendPhoto__textarea" rows="5" placeholder="Please enter your notes and let us know your wishes" aria-label="Textarea"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-2-5@l">
                <div class="home__sendPhoto__box uk-card uk-card-default uk-padding-small sidebar">
                    <div class="home__sendPhoto__legend">Your order</div>

                    <table class="order__table uk-table uk-table-small uk-table-hover uk-table-justify">
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quanlity</th>
                            <th>expense</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Virtual staging</td>
                            <td>$15</td>
                            <td>X10</td>
                            <td>$150</td>
                        </tr>
                        </tbody>
                    </table>



                    <div class="item__20 uk-form-stacked">
                        <label class="uk-form-label home__sendPhoto__labelTxt" for="form-stacked-text">Interior style options:</label>
                        <div class="uk-form-controls">
                            <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-grid-24-m uk-grid-small" uk-grid>
                                <?php for ($i=1;$i<=6;$i++): ?>
                                    <label>
                                        <input class="uk-radio uk-hidden home__sendPhoto__radio" type="radio" name="radio1" <?= ($i==1)?'checked':'' ?>>
                                        <div class="home__sendPhoto__boxRadio">
                                            <div class="uk-cover-container home__sendPhoto__boxRadio__coverImg">
                                                <img src="images/noimage.jpg" alt="" uk-cover="">
                                                <canvas width="328" height="220"></canvas>
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
                        <label class="uk-form-label home__sendPhoto__labelTxt" for="form-stacked-text">Delivery time:</label>
                        <div class="uk-form-controls">
                            <div class="uk-margin uk-grid-small uk-child-width uk-grid" uk-grid>
                                <label class="single__card__radioLabel"><input class="uk-radio" type="radio" name="radio3" checked> Delivery time 24 hours (Default)</label>
                                <label class="single__card__radioLabel"><input class="uk-radio" type="radio" name="radio3"> Delivery time 18 hours ($5)</label>
                                <label class="single__card__radioLabel"><input class="uk-radio" type="radio" name="radio3"> Delivery time 12 hours ($10)</label>
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