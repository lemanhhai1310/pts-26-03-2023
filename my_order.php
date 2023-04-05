<?php $data["title"] = "Dashboard My order"; ?>
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
                    <li class="uk-active"><a href="">My order</a></li>
                    <li><a href="">My account</a></li>
                </ul>
            </div>
            <div class="uk-width-expand">
                <div class="uk-padding-small my_order__boxContent">
                    <div class="uk-overflow-auto">
                        <table class="my_order__table uk-table uk-table-divider uk-table-middle uk-table-hover uk-table-small">
                            <thead>
                            <tr>
                                <th>Purchase date</th>
                                <th>Services</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Pay</th>
                                <th>Status</th>
                                <th>Delivered</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php for ($i=1;$i<=12;$i++): ?>
                                <tr>
                                    <td>13-2-2023</td>
                                    <td>Single photo</td>
                                    <td>15</td>
                                    <td>$1.2</td>
                                    <td>$18</td>
                                    <td>Processing</td>
                                    <td>
                                        <a href="" class="uk-button uk-button-default">(Edited photo link)</a>
                                    </td>
                                </tr>
                            <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="item__40-20">
                        <?php require "template-parts/layouts/pagination.php"; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>