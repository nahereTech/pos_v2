<?php
include("_common/header.php");
?>


<!-- Site Content Wrapper -->
<div class="dt-content-wrapper">

    <!-- Site Content -->
    <div class="dt-content ">

        <div class="dt-page__header" style="display: flex; justify-content: space-between;">
            <h1 class="dt-page__title" style="padding:0px 10px">History of Updates</h1>
            <div style="display: flex;">
                <form class="search-box d-none d-lg-block" style="width: 200px; ">
                    <input class="form-control border-0 filter_history" placeholder="Search history..."
                        style="border:2px solid #64c6fd !important">
                </form>
                <!-- <button type="button" class="btn add_unit btn-primary btn-lg"
                    style="height:35px; background-color: #038FDE;color:white; padding:5px 5px; font-size:15px; margin-left:10px; padding:7px"><span
                        role="img" aria-label="add item" class="anticon anticon-download"><svg viewBox="64 64 896 896"
                            focusable="false" class="" data-icon="download" width="1em" height="1em" fill="currentColor"
                            aria-hidden="true">
                            <path
                                d="M505.7 661a8 8 0 0012.6 0l112-141.7c4.1-5.2.4-12.9-6.3-12.9h-74.1V168c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v338.3H400c-6.7 0-10.4 7.7-6.3 12.9l112 141.8zM878 626h-60c-4.4 0-8 3.6-8 8v154H214V634c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v198c0 17.7 14.3 32 32 32h684c17.7 0 32-14.3 32-32V634c0-4.4-3.6-8-8-8z">
                            </path>
                        </svg></span><span>Add Customer</span></button> -->

            </div>
        </div>
        <!-- <div class="ant-row">

            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-24 item_table">

                <div class="ant-card">
               
                    <div class="ant-card-body" style="display: flex;">

                        <div class="col-sm-3 col-xs-12">
                            <label>Cashier Name</label>

                            <datalist id="options">

                            <option name="Laptop" value="Laptop" data-value="34"></option><option name="Biscuit" value="Biscuit" data-value="31"></option><option name="Chivita" value="Chivita" data-value="30"></option><option name="Note" value="Note" data-value="7"></option></datalist>

                            <input list="options" class="form-control required1" id="select_item_contact" autocomplete="off">
                        </div>

                        <div class="col-sm-3 col-xs-12">
                            <label>Phone Number</label>
                            <input type="text" class="ant-input" value="" id="minimum">
                        </div>
                        <div class="col-sm-3 col-xs-12">
                        <label>Number of Transactions</label>
                            <input type="text" class="ant-input" id="maximum" value=""  style="margin-top: 5px;">
                        </div>

                        <button type="button" class="btn" id="filter_contacts" style="margin-top: 25px; background-color:#038EDC; color:#fff">Go</button>

                    </div>


                </div>
            </div>

        </div> -->

        <!-- <div class="ant-row item_table">

            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-24 ">

                <div class="ant-card">

                    <div class="ant-card-body" style="display: flex;">

                        <div class="col-sm-3 col-xs-12">
                            <label>Name</label>
                            <input type="text" class="ant-input" value="">
                        </div>

                        <button type="button" class="btn" id="filter"
                            style="margin-top: 25px; background-color:#038EDC; color:#fff">Go</button>

                    </div>


                </div>
            </div>

        </div> -->


        <div class="ant-row item_table">

            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-24">


                <div class="ant-card ant-card-bordered">
                    <div class="ant-card-head">
                        <div class="ant-card-head-wrapper">
                            <div class="ant-card-head-title">History</div>
                        </div>
                    </div>
                    <div class="ant-card-body">
                        <div class="ant-table-wrapper gx-table-responsive">
                            <div class="ant-spin-nested-loading">
                                <div class="ant-spin-container">
                                    <div class="ant-table">
                                        <div class="ant-table-container">
                                            <div class="ant-table-content">
                                                <table style="table-layout: auto;">
                                                    <colgroup>
                                                        <col class="ant-table-selection-col" />
                                                    </colgroup>
                                                    <thead class="ant-table-thead">
                                                        <tr>
                                                            <th class="ant-table-cell ant-table-selection-column"
                                                                style="width: 5%">
                                                                S/N
                                                            </th>
                                                            <th class="ant-table-cell" style="width: 15%">Date
                                                            </th>
                                                            <th class="ant-table-cell" style="width: 15%">Time
                                                            </th>
                                                            <th class="ant-table-cell" style="width: 55%">Description
                                                            </th>
                                                            <th class="ant-table-cell" style="width: 15%">Done By</th>
                                                        </tr>
                                                    </thead>
                                                    
                                                    <!-- <thead class="ant-table-thead">
                                                        <tr>
                                                            <th class="ant-table-cell ant-table-selection-column" style="width: 5%">
                                                                <div class="ant-table-selection">
                                                                    <label class="ant-checkbox-wrapper">
                                                                        <span class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input" value="" /><span class="ant-checkbox-inner"></span></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                <tr role="row" style="text-align: center;">
                                    <th class="sorting_asc" tabindex="0" aria-controls="data-table" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending"
                                        style="width: 184px;">Product Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1"
                                        aria-label="Engine version: activate to sort column ascending"
                                        style="width: 158px;">Product Price</th>
                                    <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending" style="width: 124px;">
                                        Actions</th>
                                </tr>
                            </thead> -->

                                                    <tbody class="ant-table-tbody" id="cus_data" id="myUL">




                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="load_contacts" style="display:flex; justify-content: center; margin-top: 10px; ">
                                    <span class="ant-btn-loading-icon dt_loader_details"><span role="img" aria-label="loading" class="anticon anticon-loading"><svg viewBox="0 0 1024 1024" focusable="false" class="anticon-spin" data-icon="loading" width="2em" height="2em" fill="currentColor" aria-hidden="true"><path d="M988 548c-19.9 0-36-16.1-36-36 0-59.4-11.6-117-34.6-171.3a440.45 440.45 0 00-94.3-139.9 437.71 437.71 0 00-139.9-94.3C629 83.6 571.4 72 512 72c-19.9 0-36-16.1-36-36s16.1-36 36-36c69.1 0 136.2 13.5 199.3 40.3C772.3 66 827 103 874 150c47 47 83.9 101.8 109.7 162.7 26.7 63.1 40.2 130.2 40.2 199.3.1 19.9-16 36-35.9 36z"></path></svg></span></span>
                                    </div>

                                    <ul class="ant-pagination ant-table-pagination ant-table-pagination-right"
                                        unselectable="unselectable">
                                        <li title="Previous Page" class="ant-pagination-prev ant-pagination-disabled"
                                            aria-disabled="true">
                                            <a class="ant-pagination-item-link" disabled="">
                                                <span role="img" aria-label="left" class="anticon anticon-left">
                                                    <svg viewBox="64 64 896 896" focusable="false" class=""
                                                        data-icon="left" width="1em" height="1em" fill="currentColor"
                                                        aria-hidden="true">
                                                        <path
                                                            d="M724 218.3V141c0-6.7-7.7-10.4-12.9-6.3L260.3 486.8a31.86 31.86 0 000 50.3l450.8 352.1c5.3 4.1 12.9.4 12.9-6.3v-77.3c0-4.9-2.3-9.6-6.1-12.6l-360-281 360-281.1c3.8-3 6.1-7.7 6.1-12.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                        <li title="1"
                                            class="ant-pagination-item ant-pagination-item-1 ant-pagination-item-active"
                                            tabindex="0"><a>1</a></li>
                                        <li title="Next Page" class="ant-pagination-next ant-pagination-disabled"
                                            aria-disabled="true">
                                            <a class="ant-pagination-item-link" disabled="">
                                                <span role="img" aria-label="right" class="anticon anticon-right">
                                                    <svg viewBox="64 64 896 896" focusable="false" class=""
                                                        data-icon="right" width="1em" height="1em" fill="currentColor"
                                                        aria-hidden="true">
                                                        <path
                                                            d="M765.7 486.8L314.9 134.7A7.97 7.97 0 00302 141v77.3c0 4.9 2.3 9.6 6.1 12.6l360 281.1-360 281.1c-3.9 3-6.1 7.7-6.1 12.6V883c0 6.7 7.7 10.4 12.9 6.3l450.8-352.1a31.96 31.96 0 000-50.4z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- <div class="dt-card item_table">

            <div class="dt-card__body">

                <div class="table-responsive">

                    <div id="data-table_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="html5buttons"></div>

                        <table id="data-table" class="table table-striped table-bordered table-hover dataTable"
                            aria-describedby="data-table_info" role="grid">
                            <thead>
                                <tr role="row" style="text-align: center;">
                                    <th class="sorting_asc" tabindex="0" aria-controls="data-table" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending"
                                        style="width: 184px;">Product Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1"
                                        aria-label="Engine version: activate to sort column ascending"
                                        style="width: 158px;">Product Price</th>
                                    <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending" style="width: 124px;">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody id="tab_data" id="myUL">
                         


                            </tbody>
                         
                        </table>
                        
                    </div>

                </div>



            </div>

        </div> -->
    </div>

    <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-24 add_item_form"
        style="display: none; margin: 0px 20px;">

        <!-- Card -->
        <div class="dt-card">

            <!-- Card Header -->
            <div class="dt-card__header">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <!-- <h3 class="dt-card__title"></h3> -->
                </div>
                <!-- /card heading -->

            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class="dt-card__body">

                <!-- Form -->
                <form id="target" enctype="multipart/form-data">
                    <!-- /form group -->

                    <!-- Form Group -->
                    <div class="form-group form-row">
                        <label for="normal-input-4" class="col-md-2 col-sm-3 col-form-label text-sm-right">Customer
                            Name</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="text" id="cat_name" class="cat_name form-control required">
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label for="normal-input-4" class="col-md-2 col-sm-3 col-form-label text-sm-right">Phone Number
                        </label>
                        <div class="col-md-10 col-sm-9">
                            <textarea id="desc" class="cat_desc form-control required"></textarea>
                            <!-- <input type="text" id="product_price" class="form-control required"> -->
                        </div>
                    </div>

                    <!-- /form group -->

                    <!-- Form Group -->

                    <div class="dt-loader">
                        <svg class="circular" viewBox="25 25 50 50">
                            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2"
                                stroke-miterlimit="10"></circle>
                        </svg>
                    </div>

                    <button style="width: 83%; margin-left: auto;" type="button"
                        class="btn btn-primary send_cus btn-block">Send</button>
                </form>
                <!-- /form -->

            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->

    </div>

    <div class="swal2-container swal2-center create_product swal2-fade swal2-shown"
        style="display:none; overflow-y: auto;">
        <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show"
            tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
            <div class="swal2-header">
                <ul class="swal2-progresssteps" style="display: none;"></ul>
                <div class="swal2-icon swal2-error" style="display: none;"><span class="swal2-x-mark"><span
                            class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span>
                </div>
                <div class="swal2-icon swal2-question" style="display: none;"><span class="swal2-icon-text">?</span>
                </div>
                <div class="swal2-icon swal2-warning" style="display: none;"><span class="swal2-icon-text">!</span>
                </div>
                <div class="swal2-icon swal2-info" style="display: none;"><span class="swal2-icon-text">i</span></div>
                <div class="swal2-icon swal2-success swal2-animate-success-icon" style="display: flex;">
                    <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                    <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
                    <div class="swal2-success-ring"></div>
                    <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                    <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                </div><img class="swal2-image" style="display: none;">
                <h2 class="swal2-title" id="swal2-title" style="display: flex;">Success</h2><button type="button"
                    class="swal2-close" style="display: none;">×</button>
            </div>
            <div class="swal2-content">

                <div id="swal2-content" style="display: block;"></div>

                <input class="swal2-input" style="display: none;"><input type="file" class="swal2-file"
                    style="display: none;">
                <div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select
                    class="swal2-select" style="display: none;"></select>
                <div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox" class="swal2-checkbox"
                    style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea
                    class="swal2-textarea" style="display: none;"></textarea>
                <div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div>
            </div>
            <div class="swal2-actions" style="display: flex;">

                <button type="button" class="swal2-confirm swal2-styled" aria-label=""
                    style="border-left-color: rgb(3, 143, 222); border-right-color: rgb(3, 143, 222);">OK</button><button
                    type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: none;">Cancel</button>
            </div>
            <div class="swal2-footer" style="display: none;"></div>
        </div>
    </div>


    <div class="swal2-container for_edit swal2-top-end swal2-fade" style="overflow-y: auto; display:none">
        <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-toast swal2-show"
            tabindex="-1" role="alert" aria-live="polite" style="display: flex;">
            <div class="swal2-header">
                <ul class="swal2-progresssteps" style="display: none;"></ul>
                <div class="swal2-icon swal2-error" style="display: none;"><span class="swal2-x-mark"><span
                            class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span>
                </div>
                <div class="swal2-icon swal2-question" style="display: none;"><span class="swal2-icon-text">?</span>
                </div>
                <div class="swal2-icon swal2-warning" style="display: none;"><span class="swal2-icon-text">!</span>
                </div>
                <div class="swal2-icon swal2-info" style="display: none;"><span class="swal2-icon-text">i</span></div>
                <div class="swal2-icon swal2-success swal2-animate-success-icon" style="display: flex;">
                    <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                    <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
                    <div class="swal2-success-ring"></div>
                    <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                    <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                </div><img class="swal2-image" style="display: none;">
                <h2 class="swal2-title" id="swal2-title" style="display: flex;">Success</h2><button type="button"
                    class="swal2-close" style="display: none;">×</button>
            </div>
            <div class="swal2-content">
                <div id="swal2-content" style="display: none;"></div><input class="swal2-input"
                    style="display: none;"><input type="file" class="swal2-file" style="display: none;">
                <div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select
                    class="swal2-select" style="display: none;"></select>
                <div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox" class="swal2-checkbox"
                    style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea
                    class="swal2-textarea" style="display: none;"></textarea>
                <div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div>
            </div>
            <div class="swal2-actions" style="display: none;"><button type="button" class="swal2-confirm swal2-styled"
                    aria-label=""
                    style="display: none; border-left-color: rgb(3, 143, 222); border-right-color: rgb(3, 143, 222);">OK</button><button
                    type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: none;">Cancel</button>
            </div>
            <div class="swal2-footer" style="display: none;"></div>
        </div>
    </div>



    <div class="modal fade show" style="display: none;" id="edit_customer_history" tabindex="-1" role="dialog"
        aria-labelledby="model-8" aria-modal="true" style="display: block; padding-left: 17px;">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <!-- Modal Content -->
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header" style="background-color: #038FDE; color:white">
                    <h3 class="modal-title" id="model-8" style="color:white">Edit Customer Info</h3>
                    <button type="button" class="close hide_btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color:white">×</span>
                    </button>
                </div>
                <!-- /modal header -->

                <!-- Modal Body -->
                <div class="modal-body">
                    <!-- Form -->
                    <form id="edit_pro" enctype="multipart/form-data">
                        <!-- /form group -->

                        <!-- Form Group -->
                        <div class="form-group form-row" style="margin-bottom:10px;">
                            <label for="normal-input-4" class="col-form-label text-sm-right">Customer
                                Name</label>
                            <!-- <div class="form-control"> -->

                            <!-- <datalist id="options">

                                </datalist>

                                <input list="options" style="width: 95%; margin:0px 10px;" class="form-control required" id="select_item"
                                    autocomplete="off"> -->


                            <!-- <select style="width: 95%;  margin-left: auto;margin-right: auto;"
                                class="form-control required product_cat" id="cus"></select> -->
                            <input style="width: 95%;margin-bottom:0px; margin-left: auto;margin-right: auto;"
                                    type="text" id="cus_name" class="form-control required">
                        </div>
                        <div class="form-group form-row" style="margin-bottom:10px;">
                            <label for="normal-input-4" class="col-form-label text-sm-right">Customer
                                Phone</label>
                            <!-- <div class="form-control"> -->
                            <!-- <select style="width: 95%;  margin-left: auto;margin-right: auto;"
                                class="form-control required product_cat" id="cus_ph"></select> -->

                            <input style="width: 95%;  margin-left: auto;margin-right: auto;" type="text"
                                    id="cus_ph" class="form-control required">
                            <!-- </div> -->
                        </div>

                    </form>
                </div>
                <!-- /modal body -->

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <div class="dt-loader" style="margin-left: auto;margin-right: auto; width:8%">
                        <svg class="circular" viewBox="25 25 50 50">
                            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2"
                                stroke-miterlimit="10"></circle>
                        </svg>
                    </div>
                    <div class="edit_foot">
                        <button type="button" class="btn hide_btn btn-secondary btn-sm"
                            data-dismiss="modal">Close</button>
                        <button type="button" class="btn edit_btn save_edit btn-primary btn-sm"
                            data-dismiss="modal">Save changes</button>
                    </div>
                </div>
                <!-- /modal footer -->

            </div>
            <!-- /modal content -->

        </div>
    </div>


    <div class="modal fade show" style="display: none;" id="edit_customer_history" tabindex="-1" role="dialog"
        aria-labelledby="model-8" aria-modal="true" style="display: block; padding-left: 17px;">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <!-- Modal Content -->
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header" style="background-color: #038FDE; color:white">
                    <h3 class="modal-title" id="model-8" style="color:white">Edit Customer Info</h3>
                    <button type="button" class="close hide_btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color:white">×</span>
                    </button>
                </div>
                <!-- /modal header -->

                <!-- Modal Body -->
                <div class="modal-body">
                    <!-- Form -->
                    <form id="edit_pro" enctype="multipart/form-data">
                        <!-- /form group -->

                        <!-- Form Group -->
                        <div class="form-group form-row" style="margin-bottom:10px;">
                            <label for="normal-input-4" class="col-form-label text-sm-right">Customer
                                Name</label>
                            <!-- <div class="form-control"> -->

                            <!-- <datalist id="options">

                                </datalist>

                                <input list="options" style="width: 95%; margin:0px 10px;" class="form-control required" id="select_item"
                                    autocomplete="off"> -->


                            <input style="width: 95%;margin-bottom:0px; margin-left: auto;margin-right: auto;"
                                type="text" id="cus" class="form-control required">
                        </div>
                        <div class="form-group form-row" style="margin-bottom:10px;">
                            <label for="normal-input-4" class="col-form-label text-sm-right">Customer
                                Phone</label>

                            <input style="width: 95%;  margin-left: auto;margin-right: auto;" type="text" id="cus_ph"
                                class="form-control required">
                        </div>
                </div>

                </form>
            </div>
            <!-- /modal body -->

            <!-- Modal Footer -->
            <div class="modal-footer">
                <div class="dt-loader" style="margin-left: auto;margin-right: auto; width:8%">
                    <svg class="circular" viewBox="25 25 50 50">
                        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10">
                        </circle>
                    </svg>
                </div>
                <div class="edit_foot">
                    <button type="button" class="btn hide_btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn edit_btn save_edit btn-primary btn-sm" data-dismiss="modal">Save
                        changes</button>
                </div>
            </div>
            <!-- /modal footer -->

        </div>
        <!-- /modal content -->

    </div>
</div>



<div class="swal2-container swal2-top-end edit_error swal2-fade" style="display:none; overflow-y: auto;">
    <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-toast swal2-show"
        tabindex="-1" role="alert" aria-live="polite" style="display: flex;">
        <div class="swal2-header">
            <ul class="swal2-progresssteps" style="display: none;"></ul>
            <div class="swal2-icon swal2-error swal2-animate-error-icon" style="display: flex;"><span
                    class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span><span
                        class="swal2-x-mark-line-right"></span></span></div>
            <div class="swal2-icon swal2-question" style="display: none;"><span class="swal2-icon-text">?</span>
            </div>
            <div class="swal2-icon swal2-warning" style="display: none;"><span class="swal2-icon-text">!</span>
            </div>
            <div class="swal2-icon swal2-info" style="display: none;"><span class="swal2-icon-text">i</span></div>
            <div class="swal2-icon swal2-success" style="display: none;">
                <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
                <div class="swal2-success-ring"></div>
                <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
            </div><img class="swal2-image" style="display: none;">
            <h2 class="swal2-title" id="swal2-title for_err" style="display: flex;"></h2><button type="button"
                class="swal2-close" style="display: none;">×</button>
        </div>
        <div class="swal2-content">
            <div id="swal2-content" style="display: none;"></div><input class="swal2-input"
                style="display: none;"><input type="file" class="swal2-file" style="display: none;">
            <div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select
                class="swal2-select" style="display: none;"></select>
            <div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox" class="swal2-checkbox"
                style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea
                class="swal2-textarea" style="display: none;"></textarea>
            <div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div>
        </div>
        <div class="swal2-actions" style="display: none;"><button type="button" class="swal2-confirm swal2-styled"
                aria-label=""
                style="display: none; border-left-color: rgb(3, 143, 222); border-right-color: rgb(3, 143, 222);">OK</button><button
                type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: none;">Cancel</button>
        </div>
        <div class="swal2-footer" style="display: none;"></div>
    </div>
</div>

</main>


<script>
var base_url = window.location.origin;

$(document).ready(function() {


    list_sales_history("")
    // load_cus_for_filter("")

    $(document).on("click", ".send_cus", function() {
        send_category();
    })

    $(document).on("click", ".history_edit", function() {
        var name = $(this).attr("data-value");
        var phone_number = $(this).attr("lang");
        var id = $(this).attr("data");


        // data=${v.customer_id} lang-value=${v.transaction_id}  data-value=${v.customer_name} lang=${v.customer_phone}
        localStorage.setItem("cust", id);
        // var img = $(this).attr("data-img");
        $("#cus_name").val(name);
        $("#cus_ph").val(phone_number);
        $("#edit_customer_history").show();
    });

    $(document).on("click", ".save_edit", function() {
        edit_history()
    });


    function edit_history() {
        let full_name = $("#cus_name").val();
        let company_id = localStorage.getItem("company_id");
        let phone = $("#cus_ph").val();
        let customer_id = localStorage.getItem("cust");

        var blank;

        $(".required").each(function() {
            var the_val = $.trim($(this).val());

            if (the_val == "") {
                blank = "yes";

                $(this).addClass("has-error");
            } else {
                blank;

                $(this).removeClass("has-error");
            }
        });


        $(".edit_foot").hide();
        $(".dt-loader").show();


        $.ajax({
            type: "POST",
            dataType: "json",
            cache: false,
              headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
            url: base_url + "/api/pos/editCustomer",
            data: {
                "fullname": full_name,
                "company_id": company_id,
                "phone": phone,
                "user_id":localStorage.getItem('user_id'),
                "customer_id": customer_id,
            },

            success: function(response) {
                if (response.status == "200") {
                    console.log(response);

                    $("#edit_customer_history").hide();
                    $(".for_edit").show();


                    $(`#for_name_${localStorage.getItem("cust")}`).html(
                        full_name
                    );

                    $(`#for_phone_${localStorage.getItem("cust")}`).html(
                        phone
                    );

                    $(".dt-loader").hide();
                    $(".edit_foot").show();
                    localStorage.removeItem("cust");

                    setTimeout(() => {
                        $(".for_edit").hide();
                    }, 2000);

                } else if (response.status == "400") {

                    console.log(response);
                    $("#edit_modal").hide();
                    $(".edit_error").show();
                    $("#for_err").html(response.msg);
                    localStorage.removeItem("cust");

                    $(".dt-loader").hide();
                    $(".edit_foot").show();

                    setTimeout(() => {
                        $(".edit_error").hide();
                    }, 2000);
                } else if (response.status == "401") {
                    //user error message
                    console.log(response);
                    $("#edit_modal").hide();
                    $(".edit_error").show();
                    $("#for_err").html(response.msg);
                    localStorage.removeItem("cust");

                    $(".dt-loader").hide();
                    $(".edit_foot").show();


                    setTimeout(() => {
                        $(".edit_error").hide();
                    }, 2000);
                }
            },
            error: function(response) {
                console.log(response);
            },
        });
    }
    $(document).on("click", "#filter_contacts", function() {
        list_sales_history("")
    })

    // function load_cus_for_filter(page) {
    //     if (page == "") {
    //   var page = 1;
    // }
    // var limit = 1000;

    //     var company_id = localStorage.getItem('company_id');


    //     var list_whs = "";
    //     $.ajax({

    //         type: "GET",
    //         dataType: "json",
    //         cache: false,
    //         url: base_url + "/api/pos/changeHistories",
    //         data: {
    //             "company_id": company_id,
    //             "store_id": localStorage.getItem("store_id"),
    //         },

    //         success: function(response) {

    //             var k = 1;
    //             console.log(response.data)
    //             $(response.data).each(function(i, v) {
    //                 list_whs +=
    //                     `<option name=${v.customer_name} value=${v.customer_name} data-value=${v.customer_id}></option>`;
    //             })

    //             $(`#options`).html(list_whs);
    //         },
    //         error: function() {
    //             console.log(response);
    //         }

    //     });

    // }

    function send_category() {
        let category_name = $("#cat_name").val();
        let company_id = localStorage.getItem("company_id");
        let category_desc = $("#desc").val();

        var blank;

        $(".required").each(function() {
            var the_val = $.trim($(this).val());

            if (the_val == "") {
                blank = "yes";

                $(this).addClass("has-error");
            } else {
                blank;

                $(this).removeClass("has-error");
            }
        });


        $(".send_cat").hide();
        $(".dt-loader").show();


        $.ajax({
            type: "POST",
            dataType: "json",
            cache: false,
              headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
            url: base_url + "/api/pos/createCustomer",
            data: {
                "fullname": category_name,
                "phone": category_desc,
                "store_id": localStorage.getItem('store_id'),
                
                "company_id": company_id
            },

            success: function(response) {
                if (response.status == "200") {
                    console.log(response);

                    $(".create_product").show();
                } else if (response.status == "400") {
                    console.log(response);
                    //   $(".dt-loader").hide();
                    //   $(".send_cat").show();


                } else if (response.status == "401") {
                    //user error message
                    console.log(response);
                    //   $(".dt-loader").hide();
                    //   $(".send_cat").show();
                }
            },
            error: function(response) {
                console.log(response);

            },
        });
    }

    $(document).on("click", ".history_details", function() {
        let trans_id = $(this).attr("data")
        $(`.dt_loader_details_${trans_id}`).show();

        show_details(trans_id)
    });
  

    function list_sales_history(page) {
        let company_id = localStorage.getItem("company_id");
        let store_id = localStorage.getItem("store_id");
        let cashier_id = localStorage.getItem("cashier_id");
        // let date_range = localStorage.getItem("company_id");
        $("#cus_data").hide();
        $('.load_contacts').show()

        if (page == "") {
            var page = 1;
        }
        var limit = 20;

        
        var listObj = document.getElementById(`select_item_contact`);
        console.log(listObj);
        console.log($("#select_item_contact").val())
        if($("#select_item_contact").val()){
        var datalist = document.getElementById(listObj.getAttribute("list"));
        var fa = datalist.options.namedItem(listObj.value);
        console.log(fa)

        var cus_id = fa.getAttribute('data-value');
        var cus = cus_id ? cus_id : ""
        }

        $.ajax({
            type: "GET",
            dataType: "json",
            cache: false,
              headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
            url: base_url + "/api/pos/changeHistories",
            data: {
                "company_id": company_id,
                "store_id": localStorage.getItem("store_id"),
            },
            success: function(response) {
                if (response.status == "200") {
                    console.log(response.data);
                    if (response.data.length > 0) {
                        var k = 1;
                        var list_whs = "";

                        $.each(response.data, function(i, v) {
                            list_whs += `
             <tr data-row-key="1" class="ant-table-row ant-table-row-level-0 gradeA product_table even_${v.row_id}" role="row" style="text-align:center" data-value="${v.product_name}"
             data="${v.role_id}" data-string="${format_a_date(v.created_at.split(' ')[0])}">
  
              <td class="ant-table-cell" style="text-align:left" id="for_sn_${v.row_id}">${v.sn}</td>
              
              <td class="ant-table-cell" style="text-align:left" id="for_history_${v.row_id}">${format_a_date(v.created_at.split(' ')[0])}</td>
              <td class="ant-table-cell" style="text-align:left" id="for_time_${v.row_id}">${v.created_at.split(' ')[1]}</td>
              <td class="ant-table-cell" style="text-align:left;" id="for_desc_${v.row_id}">${v.description}</td>
              <td class="ant-table-cell" style="text-align:left;" id="for_done_${v.row_id}">${v.done_by}</td>

             
           </tr>`;
             k++;
            });
            // <td class="ant-table-cell" style="text-align:left; display:flex;">
            //   <span class="gx-badge gx-text-white history_edit" id="history_edit_${v.customer_id}" data=${v.customer_id}  data-value="${v.customer_name}" lang=${v.customer_phone} style="background-color: #038EDC; cursor:pointer" data-value=${v.customer_name}>Edit</span>
            //   <span class="gx-badge gx-text-white history_details" id="history_details_${v.customer_id}" data=${v.customer_id} style="background-color: #1DCE8E; cursor:pointer">Details</span>

            //   <span class="ant-btn-loading-icon dt_loader_details_${v.transaction_id}" style="display:none"><span role="img" aria-label="loading" class="anticon anticon-loading"><svg viewBox="0 0 1024 1024" focusable="false" class="anticon-spin" data-icon="loading" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M988 548c-19.9 0-36-16.1-36-36 0-59.4-11.6-117-34.6-171.3a440.45 440.45 0 00-94.3-139.9 437.71 437.71 0 00-139.9-94.3C629 83.6 571.4 72 512 72c-19.9 0-36-16.1-36-36s16.1-36 36-36c69.1 0 136.2 13.5 199.3 40.3C772.3 66 827 103 874 150c47 47 83.9 101.8 109.7 162.7 26.7 63.1 40.2 130.2 40.2 199.3.1 19.9-16 36-35.9 36z"></path></svg></span></span>
            // </td>
                        $("#cus_data").html(list_whs);
                        $('.load_contacts').hide();
                        $("#cus_data").show();

                    } else {
                        $("#cus_data").append(
                            `<tr data-row-key="1" class="ant-table-row ant-table-row-level-0 gradeA product_table " role="row" style="text-align:center"
                          ><td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left">No Record</td><td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left"></td></tr>`
                        );
                    }
                    //   $('#pagination').twbsPagination({
                    //     totalPages: Math.ceil(response.total_rows / limit),
                    //     visiblePages: 10,
                    //     onPageClick: function(event, page) {
                    //       submit_product(page);
                    //     }
                    // });
                } else if (response.status == "400") {
                    // coder error message
                    $("#cus_data").html(
                        `<tr data-row-key="1" class="ant-table-row ant-table-row-level-0 gradeA product_table " role="row" style="text-align:center"
            ><td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left">No Record</td><td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left"></td></tr>`
                    );
                    console.log(response);
                    $('.load_contacts').hide();
                    $("#cus_data").show();
                } else if (response.status == "401") {
                    //user error message
                    console.log(response);
                    $('.load_contacts').hide();
                    $("#cus_data").show();
                }
            },
            error: function(response) {
                console.log(response);

                // $('#submit_code').show();
                // $('#load2').hide();
                // $('#error-code').show();
                // $('#error-code').html("Connection Error.");
            },
        });
    }
});
</script>



<?php
include("_common/footer.php");
?>