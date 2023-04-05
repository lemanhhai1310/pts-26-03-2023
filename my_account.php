<?php $data["title"] = "Dashboard My Account"; ?>
<?php $bodyClass = '' ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section">
    <div class="uk-container uk-container-large">
        <div class="uk-flex-middle uk-flex my_order__txtFilter">
            Filter
            <svg class="uk-margin-small-left" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.43759 18.4375C8.27183 18.4375 8.11285 18.3717 7.99564 18.2544C7.87843 18.1372 7.81259 17.9783 7.81259 17.8125V11.8031L2.01884 5.43125C1.79076 5.17992 1.64055 4.8678 1.58641 4.53276C1.53228 4.19772 1.57655 3.85417 1.71387 3.54381C1.85118 3.23345 2.07563 2.96961 2.35997 2.78432C2.64432 2.59904 2.97633 2.50027 3.31571 2.5H16.6845C17.0238 2.50027 17.3559 2.59904 17.6402 2.78432C17.9245 2.96961 18.149 3.23345 18.2863 3.54381C18.4236 3.85417 18.4679 4.19772 18.4138 4.53276C18.3596 4.8678 18.2094 5.17992 17.9813 5.43125L12.1876 11.8031V15.3125C12.1875 15.4061 12.1664 15.4985 12.1259 15.5829C12.0853 15.6673 12.0263 15.7415 11.9532 15.8L8.82821 18.3C8.71741 18.3889 8.57964 18.4374 8.43759 18.4375ZM3.31571 3.75C3.21845 3.75024 3.12335 3.77867 3.04192 3.83184C2.96048 3.88501 2.8962 3.96064 2.85685 4.04958C2.81751 4.13852 2.80478 4.23696 2.82022 4.33298C2.83566 4.42901 2.87859 4.5185 2.94384 4.59062L8.90009 11.1531C9.00213 11.2653 9.05989 11.4108 9.06259 11.5625V16.5125L10.9376 15V11.5625C10.9372 11.4065 10.9952 11.256 11.1001 11.1406L17.0563 4.57812C17.1177 4.50567 17.1573 4.41734 17.1706 4.32334C17.1838 4.22933 17.1703 4.13348 17.1314 4.04688C17.0925 3.96027 17.0299 3.88643 16.9508 3.8339C16.8717 3.78136 16.7794 3.75228 16.6845 3.75H3.31571Z" fill="#262626"/>
            </svg>
        </div>
        <div class="item__20 uk-grid-24-m uk-grid-small uk-child-width-1-2 uk-child-width-1-5@m" uk-grid>
            <div>
                <input class="uk-input my_order__input" type="text" placeholder="Job Title">
            </div>
            <div>
                <input class="uk-input my_order__input" type="text" placeholder="Job Reference">
            </div>
            <div>
                <div class="uk-inline uk-width">
                    <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: calendar"></a>
                    <input class="uk-input my_order__input" type="text" placeholder="Star Date" aria-label="Clickable icon">
                </div>
            </div>
            <div>
                <div class="uk-inline uk-width">
                    <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: calendar"></a>
                    <input class="uk-input my_order__input" type="text" placeholder="End Date" aria-label="Clickable icon">
                </div>
            </div>
            <div class="uk-width-1-5@m uk-width">
                <button type="button" class="uk-button my_order__btn uk-button-primary uk-width">Search</button>
            </div>
        </div>
        <div class="item__40-20 uk-grid-20" uk-grid>
            <div class="uk-width-auto@m">
                <ul class="uk-nav my_order__nav">
                    <li><a href="my_order.php">My order</a></li>
                    <li class="uk-active"><a href="my_account.php">My account</a></li>
                </ul>
            </div>
            <div class="uk-width-expand">
                <div class="uk-padding-small my_order__boxContent">
                    <div class="uk-grid-small uk-grid-40-m uk-child-width uk-form-stacked" uk-grid>
                        <div>
                            <div class="uk-grid-small uk-grid-40-m" uk-grid>
                                <div class="uk-width-1-2 uk-width-1-3@s">
                                    <label class="uk-form-label virtualrenovation__label" for="form-stacked-text">User name</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input home__sendPhoto__input" id="form-stacked-text" type="text" placeholder="Some text...">
                                    </div>
                                </div>
                                <div class="uk-width-1-2 uk-width-1-3@s">
                                    <label class="uk-form-label virtualrenovation__label" for="form-stacked-text">Emal</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input home__sendPhoto__input" id="form-stacked-text" type="text" placeholder="Some text...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-grid-small uk-grid-40-m uk-flex-bottom" uk-grid>
                                <div class="uk-width-1-3@s">
                                    <label class="uk-form-label virtualrenovation__label" for="form-stacked-text">Phone number</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input home__sendPhoto__input" id="form-stacked-text" type="text" placeholder="Some text...">
                                    </div>
                                </div>
                                <div class="uk-width-1-2 uk-width-1-3@s">
                                    <label class="uk-form-label virtualrenovation__label" for="form-stacked-text">Password</label>
                                    <div class="uk-form-controls">
                                        <div class="uk-inline uk-width">
                                            <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: eye"></a>
                                            <input class="uk-input home__sendPhoto__input" type="text" aria-label="Clickable icon">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-1-2 uk-width-auto@s">
                                    <button uk-toggle="target: #modal-changePass" class="my_account__btn uk-button uk-button-default uk-flex uk-flex-middle">
                                        <svg class="uk-margin-small-right" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1367_5509)">
                                                <path d="M8.36264 6.35999V7.16443C8.36264 7.41992 8.41367 7.63428 8.51438 7.80127C8.65329 8.03174 8.88132 8.16382 9.14023 8.16382C9.39389 8.16382 9.64597 8.04028 9.88938 7.79688L12.5464 5.13989C13.1297 4.55652 13.1297 3.6073 12.5464 3.02393L9.88938 0.366943C9.64597 0.123413 9.39389 0 9.14023 0C8.75315 0 8.36264 0.309082 8.36264 0.99939V1.72998C4.59043 1.95276 1.46763 4.84766 1.00351 8.63782C0.977513 8.84949 1.09787 9.05212 1.29624 9.13062C1.35239 9.15283 1.41086 9.16357 1.4686 9.16357C1.61484 9.16357 1.75669 9.09509 1.84702 8.97168C3.09189 7.27075 5.09067 6.25525 7.1937 6.25525C7.58335 6.25525 7.97519 6.29041 8.36264 6.35999Z" fill="#E70000"/>
                                                <path d="M14.6954 6.86892C14.497 6.7903 14.2707 6.85573 14.1446 7.02797C12.8998 8.72878 10.901 9.74428 8.79802 9.74428C8.40837 9.74428 8.01653 9.70913 7.62907 9.63955V8.8351C7.62907 8.14479 7.23845 7.83571 6.85149 7.83571C6.59782 7.83571 6.34575 7.95925 6.10222 8.20278L3.44524 10.8596C2.86198 11.443 2.86198 12.3922 3.44536 12.9757L6.10222 15.6326C6.34575 15.8761 6.59782 15.9995 6.85149 15.9995C7.23845 15.9995 7.62907 15.6904 7.62907 15.0001V14.2695C11.4014 14.0468 14.5241 11.1519 14.9882 7.36184C15.0142 7.15004 14.8938 6.94741 14.6954 6.86892Z" fill="#E70000"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1367_5509">
                                                    <rect width="16" height="16" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        Change Password
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-auto@m">
                            <button class="my_account__btn uk-button uk-button-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- This is the modal -->
<div id="modal-changePass" uk-modal>
    <div class="uk-modal-dialog my_account__modal__dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-modal-title my_account__modal__title">CHANGE PASSWORD</h2>
        <form class="uk-form-stacked">
            <div class="uk-margin">
                <label class="uk-form-label virtualrenovation__label" for="form-stacked-text">New Password</label>
                <div class="uk-form-controls">
                    <input class="uk-input home__sendPhoto__input" id="form-stacked-text" type="text" placeholder="">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label virtualrenovation__label" for="form-stacked-text">Confirm Password</label>
                <div class="uk-form-controls">
                    <input class="uk-input home__sendPhoto__input" id="form-stacked-text" type="text" placeholder="">
                </div>
            </div>
            <div class="uk-margin-top">
                <button class="my_account__btn uk-button uk-button-primary uk-width">Save</button>
            </div>
        </form>
    </div>
</div>
<script>
    // UIkit.modal('#modal-changePass').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>