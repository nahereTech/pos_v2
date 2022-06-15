<?php
include("_common/header.php");
?>

<!-- Site Content Wrapper -->
<div class="dt-content-wrapper">

    <!-- Site Content -->
    <div class="dt-content">

        <div class="dt-page__header">
            <h1 class="dt-page__title" style=""> Shop </h1>
        </div>


        <div class="ant-row">
            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-12 ant-col-xl-12">
                <div class="ant-card gx-card-widget ant-card-bordered">
                    <div class="ant-card-head">
                        <div class="ant-card-head-wrapper">
                            <div class="ant-card-head-title">
                                <h2 class="h4 gx-text-capitalize gx-mb-0">Popular Products</h2>
                            </div>
                            <!-- <div class="ant-card-extra">
                                <span class="gx-text-primary gx-fs-md gx-pointer gx-ml-auto gx-oth-plans-up">Other plans <i class="icon icon-long-arrow-right gx-fs-xxl gx-ml-2 gx-d-inline-flex gx-vertical-align-middle"></i></span>
                            </div> -->
                        </div>
                    </div>
                    <div class="ant-card-body">

                        <?php
                        for ($x = 0; $x <= 3; $x++) {
                        ?>
                          <div class="gx-media gx-featured-item">
                            <div class="gx-featured-thumb">
                                <img class="gx-rounded-lg gx-width-100" src="https://wieldy.g-axon.work/static/media/pexels-photo-home-3.911d8705.jpg" alt="..." style="width: 100px" />
                                <!-- <span class="ant-tag gx-rounded-xs gx-bg-orange gx-border-orange gx-text-white">Featured</span> -->
                            </div>
                            <div class="gx-media-body gx-featured-content">
                                <div class="gx-featured-content-left">
                                    <!-- <span class="ant-tag ant-tag-has-color gx-rounded-xs" style="background-color: rgb(6, 187, 138);">FOR SALE
                                    </span> -->
                                    <h3 class="gx-mb-2">Luxury family home at beach side</h3>
                                    <p class="gx-text-grey gx-mb-1">South Western Ave</p>
                                    <div class="ant-row-flex">
                                        <p class="gx-mr-3 gx-mb-1"><span class="gx-text-grey">Bedrooms:</span> 2</p>
                                        <p class="gx-mr-3 gx-mb-1"><span class="gx-text-grey">Baths:</span> 2</p>
                                        <p class="gx-mr-3 gx-mb-1"><span class="gx-text-grey">Area:</span> 1100 m2</p>
                                        <!-- <a class="gx-text-grey gx-text-underline gx-mb-2" href="#/"> + 2 more</a> -->
                                    </div>
                                    <!-- <div class="ant-row-flex">
                                        <p class="gx-text-grey gx-mb-1"><i class="icon icon-user gx-fs-xs gx-mr-2 gx-d-inline-flex gx-vertical-align-middle"></i>John Nash</p>
                                        <p class="gx-text-grey gx-ml-4 gx-mb-1"><i class="icon icon-datepicker gx-fs-xs gx-mr-2 gx-d-inline-flex gx-vertical-align-middle"></i>2 days ago</p>
                                    </div> -->
                                </div>
                                <!-- <div class="gx-featured-content-right">
                                    <div>
                                        <h2 class="gx-text-primary gx-mb-1 gx-font-weight-medium">₦670,500</h2>
                                        <p class="gx-text-grey gx-fs-sm">₦587/sqft</p>
                                    </div>
                                    <p class="gx-text-primary gx-text-truncate gx-mt-auto gx-mb-0 gx-pointer">Check in detail <i class="icon icon-long-arrow-right gx-fs-xxl gx-ml-2 gx-d-inline-flex gx-vertical-align-middle"></i></p>
                                </div> -->
                            </div>
                        </div>
                        <?php
                        }
                        ?>


                    </div>

                </div>
            </div>
            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-12 ant-col-xl-12">
                <div class="ant-card gx-card-widget ant-card-bordered">
                    <div class="ant-card-body">
                        <div class="gx-dealclose-header">
                            <!-- <div>
                                <h2 class="h4 gx-mb-2">927 Deals Closed</h2>
                                <p class="gx-text-grey">This year</p>
                            </div> -->
                            <!-- <div class="gx-dealclose-header-right">
                                <p class="gx-mb-2">
                                    <span class="gx-mb-0 ant-badge ant-badge-status ant-badge-not-a-wrapper"><span class="ant-badge-status-dot ant-badge-status-warning"></span><span class="ant-badge-status-text"></span></span>Queries
                                </p>
                                <p class="gx-ml-2 gx-mb-2">
                                    <span class="gx-mb-0 ant-badge ant-badge-status ant-badge-not-a-wrapper"><span class="ant-badge-status-dot ant-badge-status-processing"></span><span class="ant-badge-status-text"></span></span>Closed Deals
                                </p>
                            </div> -->
                        </div>


                        <div class="ant-table-wrapper gx-table-responsive">
                            <div class="ant-spin-nested-loading">
                                <div class="ant-spin-container">
                                    <div class="ant-table">
                                        <div class="ant-table-container">
                                            <div class="ant-table-content">
                                                <table style="table-layout: auto;">
                                                    <colgroup></colgroup>
                                                    <thead class="ant-table-thead">
                                                        <tr>
                                                            <th class="ant-table-cell" style="width: 65%">Name</th>
                                                            <th class="ant-table-cell" style="width: 15%">Quantity</th>
                                                            <th class="ant-table-cell" style="width: 15%">Price(₦)</th>
                                                            <th class="ant-table-cell" style="width: 5%"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="ant-table-tbody">



                                                        <?php
                                                        for ($x = 0; $x <= 2; $x++) {
                                                        ?>
                                                            <tr data-row-key="1" class="ant-table-row ant-table-row-level-0" style="font-size: 16px">
                                                                <td class="ant-table-cell"><span>John Brown</span></td>
                                                                                                                            
                                                                <td class="ant-table-cell">
                                                                    <div class="ant-input-number gx-mb-3"><div class="ant-input-number-handler-wrap"><span unselectable="unselectable" role="button" aria-label="Increase Value" class="ant-input-number-handler ant-input-number-handler-up"><span role="img" aria-label="up" class="anticon anticon-up ant-input-number-handler-up-inner"><svg viewBox="64 64 896 896" focusable="false" class="" data-icon="up" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M890.5 755.3L537.9 269.2c-12.8-17.6-39-17.6-51.7 0L133.5 755.3A8 8 0 00140 768h75c5.1 0 9.9-2.5 12.9-6.6L512 369.8l284.1 391.6c3 4.1 7.8 6.6 12.9 6.6h75c6.5 0 10.3-7.4 6.5-12.7z"></path></svg></span></span><span unselectable="unselectable" role="button" aria-label="Decrease Value" class="ant-input-number-handler ant-input-number-handler-down"><span role="img" aria-label="down" class="anticon anticon-down ant-input-number-handler-down-inner"><svg viewBox="64 64 896 896" focusable="false" class="" data-icon="down" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span></div><div class="ant-input-number-input-wrap"><input role="spinbutton" aria-valuemin="1" aria-valuemax="100000" aria-valuenow="6" class="ant-input-number-input" autocomplete="off" max="100000" min="1" step="1" value="6"></div></div>
                                                                </td>
                                                                <td class="ant-table-cell">6,000</td>
                                                                <td class="ant-table-cell">
                                                                    <i class="icon icon-trash icon-fw icon-xl"></i>
                                                                </td>
                                                            </tr>

                                                        <?php
                                                        }
                                                        ?>

                                                        <tr data-row-key="1" class="ant-table-row ant-table-row-level-0" style="font-size: 20px; background-color: #cfd1d4; color: black">
                                                            <td class="ant-table-cell" colspan="2">
                                                                <span >Sub-total</span>
                                                            </td>
                                                            <td class="ant-table-cell" colspan="2">₦6,000</td>
                                                        </tr>

                                                        <tr data-row-key="1" class="ant-table-row ant-table-row-level-0" style="font-size: 20px; background-color: #cfd1d4; color: black">
                                                            <td class="ant-table-cell" colspan="2">
                                                                <span >Discount</span>
                                                            </td>
                                                            <td class="ant-table-cell" colspan="2">₦6,000</td>
                                                        </tr>

                                                        <tr data-row-key="1" class="ant-table-row ant-table-row-level-0" style="font-size: 20px; background-color: #cfd1d4; color: black">
                                                            <td class="ant-table-cell" colspan="2">
                                                                <span >Pay</span>
                                                            </td>
                                                            <td class="ant-table-cell" colspan="2">₦6,000</td>
                                                        </tr>

                                                        <!-- <tr data-row-key="1" class="ant-table-row ant-table-row-level-0" style="font-size: 20px; background-color: ; ">
                                                            <td class="ant-table-cell" colspan="4">
                                                                <button type="button" class="ant-btn ant-btn-primary ant-btn-lg" style="width: 100%; font-size: 30px; padding: 10px"><span>Primary</span></button>
                                                            </td>
                                                        </tr> -->

                                                        

                                                    </tbody>
                                                </table>
                                                <br>
                                                <button type="button" class="ant-btn ant-btn-primary ant-btn-lg" style="width: 100%; font-size: 20px; padding: 0px"><span>Primary</span></button>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- <ul class="ant-pagination ant-table-pagination ant-table-pagination-right" unselectable="unselectable">
                                        <li title="Previous Page" class="ant-pagination-prev ant-pagination-disabled" aria-disabled="true">
                                            <a class="ant-pagination-item-link" disabled="">
                                                <span role="img" aria-label="left" class="anticon anticon-left">
                                                    <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="left" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                        <path d="M724 218.3V141c0-6.7-7.7-10.4-12.9-6.3L260.3 486.8a31.86 31.86 0 000 50.3l450.8 352.1c5.3 4.1 12.9.4 12.9-6.3v-77.3c0-4.9-2.3-9.6-6.1-12.6l-360-281 360-281.1c3.8-3 6.1-7.7 6.1-12.6z"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                        <li title="1" class="ant-pagination-item ant-pagination-item-1 ant-pagination-item-active" tabindex="0"><a>1</a></li>
                                        <li title="Next Page" class="ant-pagination-next ant-pagination-disabled" aria-disabled="true">
                                            <a class="ant-pagination-item-link" disabled="">
                                                <span role="img" aria-label="right" class="anticon anticon-right">
                                                    <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="right" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                        <path d="M765.7 486.8L314.9 134.7A7.97 7.97 0 00302 141v77.3c0 4.9 2.3 9.6 6.1 12.6l360 281.1-360 281.1c-3.9 3-6.1 7.7-6.1 12.6V883c0 6.7 7.7 10.4 12.9 6.3l450.8-352.1a31.96 31.96 0 000-50.4z"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>



                        <!-- <div id="undefined" class="recharts-responsive-container" style="width: 100%; height: 90px;">
                            <div></div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>



        <div class="ant-row">
            <div class="ant-col ant-col-24">
                <div class="ant-card gx-card ant-card-bordered">
                    <div class="ant-card-head">
                        <div class="ant-card-head-wrapper"><div class="ant-card-head-title">Horizontal Login Form</div></div>
                    </div>
                    <div class="ant-card-body">
                        <form id="basic" class="ant-form ant-form-horizontal gx-login-form gx-form-row0">
                            <div class="ant-row ant-form-item">
                                <div class="ant-col ant-form-item-control">
                                    <div class="ant-form-item-control-input">
                                        <div class="ant-form-item-control-input-content">
                                            <span class="ant-input-affix-wrapper">
                                                <span class="ant-input-prefix">
                                                    <span role="img" aria-label="user" class="anticon anticon-user" style="color: rgba(0, 0, 0, 0.25);">
                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="user" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M858.5 763.6a374 374 0 00-80.6-119.5 375.63 375.63 0 00-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 00-80.6 119.5A371.7 371.7 0 00136 901.8a8 8 0 008 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 008-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z"
                                                            ></path>
                                                        </svg>
                                                    </span>
                                                </span>
                                                <input placeholder="Email" type="text" id="basic_email" class="ant-input" value="demo@example.com" />
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ant-row ant-form-item">
                                <div class="ant-col ant-form-item-control">
                                    <div class="ant-form-item-control-input">
                                        <div class="ant-form-item-control-input-content">
                                            <span class="ant-input-affix-wrapper">
                                                <span class="ant-input-prefix">
                                                    <span role="img" aria-label="lock" class="anticon anticon-lock" style="color: rgba(0, 0, 0, 0.25);">
                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="lock" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M832 464h-68V240c0-70.7-57.3-128-128-128H388c-70.7 0-128 57.3-128 128v224h-68c-17.7 0-32 14.3-32 32v384c0 17.7 14.3 32 32 32h640c17.7 0 32-14.3 32-32V496c0-17.7-14.3-32-32-32zM332 240c0-30.9 25.1-56 56-56h248c30.9 0 56 25.1 56 56v224H332V240zm460 600H232V536h560v304zM484 701v53c0 4.4 3.6 8 8 8h40c4.4 0 8-3.6 8-8v-53a48.01 48.01 0 10-56 0z"
                                                            ></path>
                                                        </svg>
                                                    </span>
                                                </span>
                                                <input type="password" placeholder="Password" id="basic_password" class="ant-input" />
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ant-row ant-form-item">
                                <div class="ant-col ant-form-item-control">
                                    <div class="ant-form-item-control-input">
                                        <div class="ant-form-item-control-input-content">
                                            <span class="ant-input-affix-wrapper">
                                                <span class="ant-input-prefix">
                                                    <span role="img" aria-label="lock" class="anticon anticon-lock" style="color: rgba(0, 0, 0, 0.25);">
                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="lock" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M832 464h-68V240c0-70.7-57.3-128-128-128H388c-70.7 0-128 57.3-128 128v224h-68c-17.7 0-32 14.3-32 32v384c0 17.7 14.3 32 32 32h640c17.7 0 32-14.3 32-32V496c0-17.7-14.3-32-32-32zM332 240c0-30.9 25.1-56 56-56h248c30.9 0 56 25.1 56 56v224H332V240zm460 600H232V536h560v304zM484 701v53c0 4.4 3.6 8 8 8h40c4.4 0 8-3.6 8-8v-53a48.01 48.01 0 10-56 0z"
                                                            ></path>
                                                        </svg>
                                                    </span>
                                                </span>
                                                <input type="password" placeholder="Password" id="basic_password" class="ant-input" />
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ant-row ant-form-item">
                                <div class="ant-col ant-form-item-control">
                                    <div class="ant-form-item-control-input">
                                        <div class="ant-form-item-control-input-content">
                                            <span class="gx-d-block gx-mb-2">
                                                <label class="ant-checkbox-wrapper">
                                                    <span class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input" value="" /><span class="ant-checkbox-inner"></span></span><span>Remember me</span>
                                                </label>
                                                <span class="gx-link login-form-forgot">Forgot password</span>
                                            </span>
                                            <button type="submit" class="ant-btn login-form-button gx-mt-1 ant-btn-primary"><span>Log in</span></button><span class="gx-d-block gx-mt-2">Or <span class="gx-link">register now!</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>






        
    </div>
    <!-- /site content -->

</div>
<!-- /site content wrapper -->

</main>


<?php
include("_common/footer.php");
?>