<?php
include("_common/header.php");
?>

<style type="text/css">
       @media only screen and (max-width: 600px){
        .for_mob_filter{
            display: block !important;
        }
        .for_mob_filter input{
            margin-bottom: 10px;
        }
        button#filter{
            margin-top: 23px;
             margin-left: 0px !important; 
            background-color: #1DCE8E;
            color: #fff;
            width: 100%;
        }
        }
       }
</style>

<!-- Site Content Wrapper -->
<div class="dt-content-wrapper">

    <!-- Site Content -->
    <div class="dt-content">

        <div class="dt-page__header">
            <h1 class="dt-page__title" style=""> Sales History </h1>
            <div style="display: flex;">
                <!-- <form class="search-box d-none d-lg-block" style="width: 200px; ">
                    <input class="form-control border-0 filter_pro" placeholder="Search categories..."
                        style="border:2px solid #64c6fd !important">

                </form>
 -->


                <div class="dropdown open" id="export_file" style="">
                    <button class="btn export_file" id="download_pdf" type="button" style="background-color: #fa8c16;">
                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="download" width="1em"
                            height="1em" fill="currentColor" aria-hidden="true">
                            <path
                                d="M505.7 661a8 8 0 0012.6 0l112-141.7c4.1-5.2.4-12.9-6.3-12.9h-74.1V168c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v338.3H400c-6.7 0-10.4 7.7-6.3 12.9l112 141.8zM878 626h-60c-4.4 0-8 3.6-8 8v154H214V634c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v198c0 17.7 14.3 32 32 32h684c17.7 0 32-14.3 32-32V634c0-4.4-3.6-8-8-8z">
                            </path>
                        </svg><span>Export</span>
                    </button>
                    <!-- <button class="btn btn-secondary dropdown-toggle email_report" type="button" id="email_report">
                            <i class="fa fa-envelope"></i> Email
                        </button> -->
                    <!-- <ul class="dropdown-menu cv" aria-labelledby="dropdownMenuButton"
                        style="display:none; min-width: 100px;">
                        <li><a class="dropdown-item export_file" id="download_pdf" style="padding: 10px;"
                                download="">Export</a></li>
                        <li>
                        </li>
                        <li><a class="dropdown-item import_file" id="download_csv" style="padding: 10px;"
                                download="">Import</a></li>
                    </ul> -->
                </div>

            </div>
        </div>



        <div class="ant-row">

            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-24">

                <div class="ant-card">
                    <!-- <div class="ant-card-head">
                            <div class="ant-card-head-wrapper"><div class="ant-card-head-title">Filter</div></div>
                        </div> -->

                    <div class="ant-card-body for_mob_filter" style="display: flex;">
                        <form class="for_mob_filter" style="display: flex;flex-direction: row;grid-gap: 20px;">
                            <div>
                                <label>Transaction Number</label>
                                <input type="text" class="ant-input" id="receipt_number">
                            </div>

                            <div>
                                <label>Amount</label>
                                <input type="text" class="ant-input" id="amount">
                            </div>

                            <div>
                                <label>Cashier</label>

                                <datalist id="options_cashier">

                                </datalist>

                                <input list="options_cashier" class="form-control required1" id="select_item_cashier"
                                    autocomplete="off">
                            </div>

                            <!-- <div class="col-sm-3 col-xs-12">
                                        <label>Date</label>
                                        <input type="text" class="ant-input" value="">
                        </div> -->

                            <div style="display: ">
                                <label>Date Range</label>
                                <input type="search" class="ant-input" value="" id="date_range" autocomplete="false"
                                    readonly onfocus="this.removeAttribute('readonly');">
                            </div>

                            <!-- <input type="text" class="form-control" style="display: none;"> -->

                        </form>





                        <button type="button" class="btn" id="filter"
                            style="margin-top: 23px; margin-left: 10px; background-color:#1DCE8E; color:#fff">Go</button>

                    </div>


                </div>

            </div>

        </div>


        <div class="ant-row">

            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-24">


                <div class="ant-card ant-card-bordered">
                    <!-- <div class="ant-card-head">
                        <div class="ant-card-head-wrapper"><div class="ant-card-head-title">Selection Table</div></div>
                    </div> -->
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

                                                            <th class="ant-table-cell" style="width: 15%">Transaction
                                                                Number
                                                            </th>

                                                            <th class="ant-table-cell" style="width: 15%">Date
                                                            </th>

                                                            <th class="ant-table-cell" style="width: 15%">Customer Name
                                                            </th>
                                                            <!-- <th class="ant-table-cell" style="width: 20%">Cash Tendered
                                                            </th> -->
                                                            <th class="ant-table-cell" style="width: 15%">Payment Status
                                                            </th>
                                                            <th class="ant-table-cell" style="width: 15%">Sales Person
                                                            </th>
                                                            <th class="ant-table-cell" style="width: 15%">Total
                                                                Transaction</th>
                                                            <th class="ant-table-cell" style="width: 15%">Action</th>
                                                        </tr>
                                                    </thead>


                                                    <tbody class="ant-table-tbody" id="sales_history">


                                                    </tbody>


                                                </table>
                                                <div class="load_pro"
                                                    style="display:flex; justify-content: center; margin-top: 10px; ">
                                                    <span class="ant-btn-loading-icon dt_loader_details"><span
                                                            role="img" aria-label="loading"
                                                            class="anticon anticon-loading"><svg viewBox="0 0 1024 1024"
                                                                focusable="false" class="anticon-spin"
                                                                data-icon="loading" width="2em" height="2em"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path
                                                                    d="M988 548c-19.9 0-36-16.1-36-36 0-59.4-11.6-117-34.6-171.3a440.45 440.45 0 00-94.3-139.9 437.71 437.71 0 00-139.9-94.3C629 83.6 571.4 72 512 72c-19.9 0-36-16.1-36-36s16.1-36 36-36c69.1 0 136.2 13.5 199.3 40.3C772.3 66 827 103 874 150c47 47 83.9 101.8 109.7 162.7 26.7 63.1 40.2 130.2 40.2 199.3.1 19.9-16 36-35.9 36z">
                                                                </path>
                                                            </svg></span></span>
                                                </div>


                                                <div class="container nav-page">
                                                    <nav aria-label="Page navigation">
                                                        <ul class="pagination" id="pagination_dem"
                                                            style="margin-top: 10px; margin-left:30%"></ul>
                                                    </nav>
                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                    <!-- <ul class="ant-pagination ant-table-pagination ant-table-pagination-right"
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
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>



        <div class="modal fade show" style="display: none;" id="edit_customer_history" tabindex="-1" role="dialog"
            aria-labelledby="model-8" aria-modal="true"
            style="display: block; padding-left: 17px; background:rgba(0,0,0,0.5)">
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
                                <!-- <input style="width: 95%;margin-bottom:0px; margin-left: auto;margin-right: auto;"
                                    type="text" id="cus_name" class="form-control required"> -->
                            </div>
                            <div class="form-group form-row" style="margin-bottom:10px;">
                                <label for="normal-input-4" class="col-form-label text-sm-right">Customer
                                    Phone</label>
                                <!-- <div class="form-control"> -->
                                <!-- <select style="width: 95%;  margin-left: auto;margin-right: auto;"
                                    class="form-control required product_cat" id="cus_ph" disabled></select> -->

                                <!-- <input style="width: 95%;  margin-left: auto;margin-right: auto;" type="text"
                                    id="cus_ph" class="form-control required" disabled> -->
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
                            <button type="button" class="btn edit_btn save_edit_his btn-primary btn-sm"
                                data-dismiss="modal">Save changes</button>
                        </div>
                    </div>
                    <!-- /modal footer -->

                </div>
                <!-- /modal content -->

            </div>
        </div>

        <div class="modal fade show history_show" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="model-8"
            style="display: none;     max-height: 1000px;
            overflow: auto; background:rgba(0, 0, 0, 0.5)" aria-modal="true">
            <div class="modal-dialog modal-dialog-centered" role="document">

                <!-- Modal Content -->
                <div class="modal-content" style="width: 800px;">

                    <!-- Modal Header -->
                    <div class="modal-header" style="background-color: #1DCE8E; color:white">
                        <h3 class="modal-title" id="model-8" style="color:white">History
                        </h3>
                        <button type="button" class="close hide_btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color:white">×</span>
                        </button>
                    </div>
                    <!-- /modal header -->

                    <!-- Modal Body -->
                    <div class="modal-body invoice_history" style="width: 800px;">

                        <!--End Invoice-->

                        <!-- <form>
                          <div class="form-group" style="margin-bottom: 0px;">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input class="form-control" id="recipient-name" type="text">
                          </div>
                          <div class="form-group">
                            <label for="message-text" class="col-form-label">Phone Number:</label>
                            <input class="form-control" id="recipient-number" type="text">
                          </div>
                        </form> -->
                    </div>
                    <!-- /modal body -->

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" style="background-color: #FF7676; color:white" class="btn hide_btn btn-sm"
                            data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn print_tab btn-sm"
                            style="background-color: #1DCE8E; color:white" data-dismiss="modal"> Save & Print Receipt</button> -->
                    </div>
                    <!-- /modal footer -->

                </div>
                <!-- /modal content -->

            </div>
        </div>

        <div class="modal fade show invoice_show" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="model-8"
            style="display: none;  background:rgba(0, 0, 0, 0.5); max-height: 1000px;
            overflow: auto;" aria-modal="true">
            <div class="modal-dialog modal-dialog-centered" role="document">

                <!-- Modal Content -->
                <div class="modal-content" style="width: 700px;">

                    <!-- Modal Header -->
                    <div class="modal-header" style="background-color: #2065A8; color:white">
                        <h3 class="modal-title" id="model-8" style="color:white">Balance Details
                        </h3>
                        <button type="button" class="close hide_btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color:white">×</span>
                        </button>
                    </div>
                    <!-- /modal header -->

                    <!-- Modal Body -->
                    <div class="modal-body invoice" style="width: 700px;">

                        <!--End Invoice-->

                        <!-- <form>
                          <div class="form-group" style="margin-bottom: 0px;">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input class="form-control" id="recipient-name" type="text">
                          </div>
                          <div class="form-group">
                            <label for="message-text" class="col-form-label">Phone Number:</label>
                            <input class="form-control" id="recipient-number" type="text">
                          </div>
                        </form> -->
                    </div>
                    <!-- /modal body -->

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" style="background-color: #FF7676; color:white" class="btn hide_btn btn-sm"
                            data-dismiss="modal">Close</button>
                        <button type="button" class="btn print_tab_invoice btn-sm" id="print_tab_invoice"
                            style="background-color: #1DCE8E; color:white" data-dismiss="modal"> Print Invoice </button>
                    </div>
                    <!-- /modal footer -->

                </div>
                <!-- /modal content -->

            </div>
        </div>

        <div class="modal-body print_balance" id="printTable">

        </div>

        <div class="swal2-container swal2-top-end edit_error swal2-fade" style="display:none; overflow-y: auto;">
            <div aria-labelledby="swal2-title" aria-describedby="swal2-content"
                class="swal2-popup swal2-toast swal2-show" tabindex="-1" role="alert" aria-live="polite"
                style="display: flex;">
                <div class="swal2-header">
                    <ul class="swal2-progresssteps" style="display: none;"></ul>
                    <div class="swal2-icon swal2-error swal2-animate-error-icon" style="display: flex;"><span
                            class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span><span
                                class="swal2-x-mark-line-right"></span></span></div>
                    <div class="swal2-icon swal2-question" style="display: none;"><span class="swal2-icon-text">?</span>
                    </div>
                    <div class="swal2-icon swal2-warning" style="display: none;"><span class="swal2-icon-text">!</span>
                    </div>
                    <div class="swal2-icon swal2-info" style="display: none;"><span class="swal2-icon-text">i</span>
                    </div>
                    <div class="swal2-icon swal2-success" style="display: none;">
                        <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);">
                        </div>
                        <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
                        <div class="swal2-success-ring"></div>
                        <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                        <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);">
                        </div>
                    </div><img class="swal2-image" style="display: none;">
                    <h2 class="swal2-title" id="swal2-title for_err" style="display: flex;"></h2><button type="button"
                        class="swal2-close" style="display: none;">×</button>
                </div>
                <div class="swal2-content">
                    <div id="swal2-content" style="display: none;"></div><input class="swal2-input"
                        style="display: none;"><input type="file" class="swal2-file" style="display: none;">
                    <div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select
                        class="swal2-select" style="display: none;"></select>
                    <div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox"
                        class="swal2-checkbox" style="display: none;"><input type="checkbox"><span
                            class="swal2-label"></span></label><textarea class="swal2-textarea"
                        style="display: none;"></textarea>
                    <div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div>
                </div>
                <div class="swal2-actions" style="display: none;"><button type="button"
                        class="swal2-confirm swal2-styled" aria-label=""
                        style="display: none; border-left-color: rgb(3, 143, 222); border-right-color: rgb(3, 143, 222);">OK</button><button
                        type="button" class="swal2-cancel swal2-styled" aria-label=""
                        style="display: none;">Cancel</button>
                </div>
                <div class="swal2-footer" style="display: none;"></div>
            </div>
        </div>

        <div class="swal2-container for_edit swal2-top-end swal2-fade" style="overflow-y: auto; display:none">
            <div aria-labelledby="swal2-title" aria-describedby="swal2-content"
                class="swal2-popup swal2-toast swal2-show" tabindex="-1" role="alert" aria-live="polite"
                style="display: flex;">
                <div class="swal2-header">
                    <ul class="swal2-progresssteps" style="display: none;"></ul>
                    <div class="swal2-icon swal2-error" style="display: none;"><span class="swal2-x-mark"><span
                                class="swal2-x-mark-line-left"></span><span
                                class="swal2-x-mark-line-right"></span></span>
                    </div>
                    <div class="swal2-icon swal2-question" style="display: none;"><span class="swal2-icon-text">?</span>
                    </div>
                    <div class="swal2-icon swal2-warning" style="display: none;"><span class="swal2-icon-text">!</span>
                    </div>
                    <div class="swal2-icon swal2-info" style="display: none;"><span class="swal2-icon-text">i</span>
                    </div>
                    <div class="swal2-icon swal2-success swal2-animate-success-icon" style="display: flex;">
                        <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);">
                        </div>
                        <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
                        <div class="swal2-success-ring"></div>
                        <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                        <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);">
                        </div>
                    </div><img class="swal2-image" style="display: none;">
                    <h2 class="swal2-title" id="swal2-title" style="display: flex;">Success</h2><button type="button"
                        class="swal2-close" style="display: none;">×</button>
                </div>
                <div class="swal2-content">
                    <div id="swal2-content" style="display: none;"></div><input class="swal2-input"
                        style="display: none;"><input type="file" class="swal2-file" style="display: none;">
                    <div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select
                        class="swal2-select" style="display: none;"></select>
                    <div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox"
                        class="swal2-checkbox" style="display: none;"><input type="checkbox"><span
                            class="swal2-label"></span></label><textarea class="swal2-textarea"
                        style="display: none;"></textarea>
                    <div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div>
                </div>
                <div class="swal2-actions" style="display: none;"><button type="button"
                        class="swal2-confirm swal2-styled" aria-label=""
                        style="display: none; border-left-color: rgb(3, 143, 222); border-right-color: rgb(3, 143, 222);">OK</button><button
                        type="button" class="swal2-cancel swal2-styled" aria-label=""
                        style="display: none;">Cancel</button>
                </div>
                <div class="swal2-footer" style="display: none;"></div>
            </div>
        </div>


        <div class="modal fade show contact_show" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="model-8"
            style="display: none;     max-height: 1000px;
            overflow: auto; background:rgba(0, 0, 0, 0.5)" aria-modal="true">
            <div class="modal-dialog modal-dialog-centered" role="document">

                <!-- Modal Content -->
                <div class="modal-content" style="width: 600px;">

                    <!-- Modal Header -->
                    <div class="modal-header" style="background-color: #0480BE; color:white">
                        <h3 class="modal-title" id="model-8" style="color:white">Export
                        </h3>
                        <button type="button" class="close hide_btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color:white">×</span>
                        </button>
                    </div>
                    <!-- /modal header -->

                    <!-- Modal Body -->
                    <div class="modal-body invoice_history" style="width: 600px;">

                        <!--End Invoice-->
                        <div style="display:block">

                            <input type="radio" id="all_rec" name="rec" value="all">
                            <label for="periph2">All records</label><br>
                            <input type="radio" id="curr_pag" name="rec" value="current">
                            <label for="periph3"> Current page</label>
                            <br>
                            <br>


                            <div>
                                <h3 style="color:#fa8c16">Export As*</h3>

                                <input type="radio" id="pdf" name="export_as" value="pdf">
                                <label for="periph2">PDF</label><br>
                                <input type="radio" id="csv" name="export_as" value="csv">
                                <label for="periph3"> CSV</label><br>
                                <input type="radio" id="xls" name="export_as" value="xls">
                                <label for="periph3"> XLX (Microsoft Excel 1997-2004 Compatible)</label><br>
                                <input type="radio" id="xlsx" name="export_as" value="xlsx">
                                <label for="periph3"> XLXS (Microsoft Excel)</label>
                            </div>

                            <div>
                                <br>
                                <p style="font-size: 16px; margin-bottom: 5px;">Password to protect file</p>
                                <input class="ant-input" type="password" id="all_pass" />
                                <!-- <label for="periph2">All records</label><br> -->

                            </div>


                        </div>

                        <!-- <form>
                          <div class="form-group" style="margin-bottom: 0px;">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input class="form-control" id="recipient-name" type="text">
                          </div>
                          <div class="form-group">
                            <label for="message-text" class="col-form-label">Phone Number:</label>
                            <input class="form-control" id="recipient-number" type="text">
                          </div>
                        </form> -->
                    </div>
                    <!-- /modal body -->

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" style="background-color: #FF7676; color:white" class="btn hide_btn btn-sm"
                            data-dismiss="modal">Close</button>
                        <a class="btn print_tab exporting_file btn-sm" id="just_export"
                            style="background-color: #1DCE8E; color:white" data-dismiss="modal"> Export </a>
                        <a class="btn print_tab btn-sm" id="export_trigger"
                            style="display: none; background-color: #1DCE8E; color:white" data-dismiss="modal" download>
                            Export </a>
                    </div>
                    <!-- /modal footer -->

                </div>



            </div>
            <!-- /site content -->

        </div>


        <!-- /site content wrapper -->
        <script src="assets/admin_template/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>



        <script>
        var base_url = window.location.origin;
        $(document).ready(function() {

        // list_products("");



        // list_categories("");

        // list_all_product("");

        // list_shop_products("");

        // load_categories_for_pop();

        // fetch_user_module_roles()


        list_sales_history("");
        load_customers_for_pop();
        load_cashier_for_filter("")
        $(".load_pro").hide();

        $(document).on("click", "#filter", function() {
            list_sales_history("")
        })

        $(document).on("click", "#just_import", function(e) {
            e.preventDefault();
            import_file();
        });

        $("#print_tab_invoice").on("click", function() {
            printInvoice();
        });

        function printInvoice() {

            $(".for_edit").show();
            $(".dt-loader").hide();

            var cus_ = $('#cus option:selected').text()
            var cus = $("#cus_ph").val();
            var email = $("#cus_email").val();

            $('.save_edit_his').hide();
            $('.pay_outstanding').hide();

            $("#cus").replaceWith(`<span style="margin-bottom:10px">${cus_}</span>`);
            $("#cus_ph").replaceWith(`<span style="margin-bottom:10px">${cus}</span>`);
            $("#cus_email").replaceWith(`<span style="margin-bottom:10px">${email}</span>`);


            setTimeout(() => {
                $(".for_edit").hide();
                $("#cus_ph").val(cus);
                var divToPrint = document.querySelector(".invoice");
                newWin = window.open("");
                newWin.document.write(divToPrint.outerHTML);
                newWin.print();
                newWin.close();
                $(".invoice_show").hide();
                localStorage.removeItem('tran_cus')
                localStorage.removeItem('tran')
                // location.reload()
            }, 2000);

            $(".receipt_loading").hide();
            // $(".invoice_show").hide();


        }

        function import_file() {


            var company_id = localStorage.getItem('company_id');
            var overwrite_existing = $("input[name='overwrite']:checked").val();

            var fd = new FormData();
            var data_file = $('#import_excel_file').prop("files")[0];
            fd.append("company_id", company_id);
            fd.append("overwrite_existing", overwrite_existing ? overwrite_existing : 'no');
            fd.append("file", data_file);
            fd.append("store_id", localStorage.getItem('store_id'))

            console.log(data_file)

            $.ajax({

                type: "POST",
                dataType: 'json',
                 headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
                processData: false,
                contentType: false,
                // enctype: "multipart/form-data",
                cache: false,
                url: base_url + "/api/pos/importContacts",
                data: fd,
                success: function(response) {

                    var k = 1;
                    console.log(response.data)
                    console.log(response.d_link);
                    var url = response.d_link;
                    $(".for_edit").show();

                    setTimeout(() => {
                        $(".for_edit").hide();
                    }, 2000);
                    $('#export_trigger').attr("href", url);
                    $('#export_trigger').trigger("click");
                    document.getElementById('export_trigger').click();
                    setTimeout(() => {
                        $(".contact_show").hide()
                        location.reload()
                    }, 2000);
                },
                error: function() {

                    $("#for_err").html(`${response.msg}`);
                    $("#err_contact").remove();
                    $(`<h4 id="err_contact" style="padding:10px; margin:0px">Enter a valid email address</h4>`)
                        .insertAfter(".swal2-error");
                    $(".edit_error").show();

                    setTimeout(() => {
                        $(".edit_error").hide();
                        $("#err_contact").remove();
                    }, 5000);
                    console.log(response);
                }

            });

        }
        $(document).on("click", ".exporting_file", function() {
            export_file();
        })

        function export_file() {


            var company_id = localStorage.getItem('company_id');
            var password = $("#all_pass").val();
            var return_type = $("input[name='rec']:checked").val();
            var file_format = $("input[name='export_as']:checked").val();
            // console.log(password, pages, file_format)
            var items_list = []

            var listObj = document.getElementById(`select_item_contact`);
            console.log(listObj);
            console.log($("#select_item_contact").val())

            if ($("#select_item_contact").val()) {
                var datalist = document.getElementById(listObj.getAttribute("list"));
                var fa = datalist.options.namedItem(listObj.value);
                console.log(fa)

                var cus_id = fa.getAttribute('data-value');
                var cus = cus_id ? cus_id : localStorage.getItem('user_id')
            }

            $(".product_table").each(function() {
                // var id = $(this).attr("id").replace(/tab_/, "");
                var id_tab = $(this).attr('data');
                // console.log({id_tab.value})
                items_list.push({
                    "id": id_tab,
                });
            });
            console.log({
                "company_id": company_id,
                "customer_id": cus ? cus : "",
                "export_type": file_format,
                "password": password,
                "no_transactions": $("#maximum").val(),
                "phone": $("#minimum").val(),
                "return_type": return_type,
                "ID_list": items_list
            })

            // alert(password, pages, file_format)
            // return;

            // var list_whs = "";
            // var list = "";


            $.ajax({

                type: "GET",
                dataType: "json",
                headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
                url: base_url + "/api/pos/exportTransactions",
                data: {
                    company_id: company_id,
                    store_id: localStorage.getItem("store_id"),
                    export_type: file_format,
                    // password: password ? password : '',
                    return_type: return_type,
                    ID_lists: items_list,
                    store_id: localStorage.getItem('store_id'),
                    cashier_id: cus ? cus : localStorage.getItem('user_id')
                },

                success: function(response) {

                    var k = 1;
                    console.log(response.data)
                    console.log(response.d_link);
                    var url = response.d_link;
                    $('#export_trigger').attr("href", url);
                    $('#export_trigger').trigger("click");
                    document.getElementById('export_trigger').click();
                    setTimeout(() => {
                        $(".contact_show").hide()
                    }, 2000);

                },
                error: function() {
                    console.log(response);
                }

            });

        }


        function load_units_for_pop() {

            var company_id = localStorage.getItem('company_id');


            var list_whs = "<option></option>";
            $.ajax({

                type: "GET",
                dataType: "json",
                headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
                cache: false,
                url: base_url + "/api/pos/unitList",
                data: {
                    "store_id": localStorage.getItem("store_id"),


                    "company_id": company_id
                },

                success: function(response) {

                    var k = 1;
                    $.each(response.data, function(i, v) {

                        list_whs += '<option value="' + v.unit_id + '">' + v
                            .unit_name + '</option>';

                        k++;

                    });

                    $(".product_unit").append(list_whs);

                },
                error: function() {
                    console.log(response);
                }

            });

        }


        $(document).on("click", ".history_edit", function() {
            var name = $(this).attr("data-value");
            var cus_id = $(this).attr("data");
            var tra_id = $(this).attr("lang-value");
            var phone_number = $(this).attr("lang");

            // data=${v.customer_id} lang-value=${v.transaction_id}  data-value=${v.customer_name} lang=${v.customer_phone}
            // var id = $(this).attr("data");
            // localStorage.setItem("product_id", id);
            // var img = $(this).attr("data-img");
            $("#cus_name").val(name);
            $("#cus_phone").val(phone_number);
            // $("#cus_ph").val(phone_number);

            localStorage.setItem('cus_id', cus_id);
            localStorage.setItem('tra_id', tra_id);

            $("#edit_customer_history").show();
        });


        $(document).on("click", ".save_edit_his", function() {
            if ($("#cus").val() == null || $("#cus").val() == "null") {
                return
            } else {
                edit_history()
            }
        });

        // function onInput(id) {
        //     localStorage.setItem('items_id', id);
        //     get_Item(`select_item_items_${id}`);
        // }


        // $(document).on("oninput", ".for_cash", function() {

        // });

        $(document).on("oninput", "#select_item", function() {
            alert($(this).val())
            getItem()
        });

        function getItem() {
            // if ($('#select_item').val() == "") {
            //     $('#select_item').addClass('has-error');
            // } else {
            //     $('#select_item').removeClass('has-error');
            // }
            alert(listid)
            var listObj = document.getElementById(listid);
            console.log(listObj);
            var datalist = document.getElementById(listObj.getAttribute("list"));
            console.log(datalist);
            var fa = datalist.options.namedItem(listObj.value);
            console.log(fa)
            var selected = fa.getAttribute('data-value');
            console.log(selected);
        }

        $(document).on("change", ".product_cat", function() {
            fetch_details()
        });

        function fetch_details() {
            // alert('gg')
            // $('#cus_ph').html(`<option name=${phone} value=${id}>${phone}</option>`)
        }



        function load_customers_for_pop() {

            var company_id = localStorage.getItem('company_id');


            var list_whs = `<option value=null>---Select Option---</option>`;
            var list_whs_2 = "<option>---Select Option---</option>";
            $("#cus_ph").val("");

            $.ajax({

                type: "GET",
                dataType: "json",
                cache: false,
                 headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
                url: base_url + "/api/pos/customerList",
                data: {
                    "store_id": localStorage.getItem("store_id"),

                    "company_id": company_id
                },

                success: function(response) {

                    $.each(response['data'], function(i, v) {
                        list_whs +=
                            `<option name=${v.customer_name} value=${v.customer_id}>${v.customer_name}</option>`;
                    });

                    $.each(response['data'], function(i, v) {
                        list_whs_2 +=
                            `<option name=${v.customer_phone} value=${v.customer_phone}>${v.customer_phone}</option>`;
                    });

                    $("#cus").append(list_whs);
                    // $("#cus_ph").val(`${response['data']['0'].customer_phone}`);
                    $("#cus_ph").val(``);

                },
                error: function() {
                    console.log(response);
                }

            });

        }

        function edit_history() {
            let full_name = $("#cus option:selected").html();
            let company_id = localStorage.getItem("company_id");
            let phone = $("#cus_ph").val();
            let customer_id = localStorage.getItem("cus_id");
            //  $(".product_table").attr('data');
            // let customer_id = $("#cus").val();
            let trans_id = localStorage.getItem('tra_id');


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
                    "company_id": localStorage.getItem('company_id'),
                    "phone": phone,
                    "customer_id": customer_id,
                    "user_id": localStorage.getItem('user_id'),
                    "trans_id": trans_id,
                    "store_id": localStorage.getItem('store_id')
                },

                success: function(response) {
                    if (response.status == "200") {
                        console.log(response);

                        $("#edit_customer_history").hide();
                        $(".for_edit").show();

                        //   $(`#for_his_${localStorage.getItem("trans_id")}`).html(
                        //     $("#cus_phone").val()
                        //   );

                        $(`#for_history_${localStorage.getItem("cus_id")}`).html($(
                            "#cus option:selected").html());

                        $(".dt-loader").hide();
                        $(".edit_foot").show();

                        setTimeout(() => {
                            $(".for_edit").hide();
                        }, 2000);


                    } else if (response.status == "400") {

                        console.log(response);
                        $("#edit_modal").hide();
                        $(".edit_error").show();
                        $("#for_err").html(response.msg);

                        setTimeout(() => {
                            $(".edit_error").hide();
                        }, 2000);

                        $(".dt-loader").hide();
                        $(".edit_foot").show();
                    } else if (response.status == "401") {
                        //user error message
                        console.log(response);
                        $("#edit_modal").hide();
                        $(".edit_error").show();
                        $("#for_err").html(response.msg);

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


        $(document).on("click", ".history_details", function() {
            let trans_id = $(this).attr("data")
            $(`.dt_loader_details_${trans_id}`).show();

            show_details(trans_id)
        });

        $(document).on("click", ".history_log", function() {
            let trans_id = $(this).attr("data")
            $(`.dt_loader_details_${trans_id}`).show();
            show_history_details(trans_id)
        });

        $(document).on("click", ".history_details_dues", function() {
            let trans_id = $(this).attr("data");
            let customer_name = $(this).attr("lang");
            $(`.dt_loader_details_${trans_id}`).show();
            localStorage.setItem('row_id', trans_id)
            show_details_dues(trans_id, customer_name)
        });

        $(document).on("click", ".complete_balance", function() {
            $(".complete_balance").hide();
            $(".receipt_loading").show();
            $(".load_receipt").show();
            complete_balance_payment();
        });

        function complete_balance_payment() {
            var items_list = [];



            //for each invoice line item
            // $(".all_tabl").each(function() {
            //     var id = $(this).attr("id").replace(/all_tabl_/, "");
            //     console.log(id);
            //     var qty = $("#add_nu_" + id).val();
            //     var price = $("#tab_price_" + id).attr("data-value");

            //     items_list.push({
            //         product_id: id,
            //         product_qty: qty,
            //         product_price: price,
            //     });
            // });
            // Email : nahere@gmail.com</br>

            var amount_due = $('.amt_due').html().split('N')[1]
            var total_cash = `${$('.for_cash').val() == "" ? 0 : $('.for_cash').val()}`;
            var total_debit = `${$('.for_debit').val()  == "" ? 0 : $('.for_debit').val()}`;

            var all = total_cash + total_debit;
            if (all > amount_due) {

                $("#edit_modal").hide();
                $("#for_err").html("Amount paid has exceeded the total outstanding balance");
                $("#err_msg").remove();

                if (!($("#err_msg").length)) {
                    $(`<h4 id="err_msg" style="padding:10px; margin:0px">Amount paid has exceeded the total outstanding balance</h4>`)
                        .insertAfter(".swal2-error");
                }
                $(".edit_error").show();

                setTimeout(() => {
                    $(".edit_error").hide();
                    $("#err_msg").remove();
                }, 5000);

                $("#rcv_grn_loader").hide();
                $("#receive_grn").show();
                $(".receipt_loading").hide();
                $(".complete_balance").show();
                return;
            }

            if (all > amount_due) {
                console.log(total_cash)
                console.log(total_debit)
                console.log(amount_due)
                // alert('Amount to be paid cannot be greater than amount due')

                $("#edit_modal").hide();
                $("#for_err").html("Amount paid has exceeded the total outstanding balance");
                $("#err_msg").remove();

                if (!($("#err_msg").length)) {
                    $(`<h4 id="err_msg" style="padding:10px; margin:0px">Amount paid has exceeded the total outstanding balance</h4>`)
                        .insertAfter(".swal2-error");
                }

                $(".edit_error").show();

                setTimeout(() => {
                    $(".edit_error").hide();
                    $("#err_msg").remove();
                }, 5000);

                $("#rcv_grn_loader").hide();
                $("#receive_grn").show();
                $(".receipt_loading").hide();
                $(".complete_balance").show();
                return;
                // return;
            }



            $.ajax({
                type: "POST",
                dataType: "json",
                url: base_url + "/api/pos/addDues",
                 headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
                data: {
                    "user_id": localStorage.getItem("user_id"),
                    "company_id": localStorage.getItem("company_id"),
                    "cash_tendered": total_cash,
                    "row_id": localStorage.getItem('row_id'),
                    "store_id": localStorage.getItem('store_id'),
                    "cash_card_tendered": total_debit
                },
                timeout: 60000,
                success: function(response) {
                    console.log(response);



                    if (response.status == "200") {
                        console.log("totalss", Number(response.data.payment_details.balance_to_pay) -
                            Number(Number(total_cash) + Number(total_debit)))

                        $(".print_balance").append(
                            `<div id="invoice-POS" style="width: 100%; text-align:"center">

                            <center id="top">
                                <div class="logo"></div>
                                <div class="info">
                                    <h2>${response.data.company_details.company_name}</h2>
                                </div>
                                
                            <div id="mid" style="text-align: center;">
                                <div class="info">
                                    <h2>Contact Info</h2>
                                    <p>
                                        Address : ${response.data.company_details.company_address}</br>
                                        Company Phone : ${response.data.company_details.company_phone}</br>
                                    </p>
                                </div>
                            </div>
                                <!--End Info-->
                            </center>
                            <!--End InvoiceTop-->


                            <div id="mid" style="text-align: center;">
                                <div class="info">
                                    <h2>Customer Info</h2>
                                    <div style="display: flex;
                                    width: 100%;
                                    margin-left: auto;
                                    margin-right: auto;
                                    justify-content: center;">
                                        <span style="align-self:center; margin: 0px 10px;" class="bal_name">Name : 
                                        ${response.data.customer_details.customer_name}</span><br>
                                         <span style="align-self:center">Phone : ${response.data.customer_details.customer_phone}</span><br>
                                    </div>
                                </div>
                                <div style="
                                    width: 100%;
                                    margin-left: auto;
                                    margin-right: auto;
                                    justify-content: center;">
                                        <span style="align-self:center; margin: 0px 10px;">Email : ${response.data.customer_details.customer_email}
                                        </span><br>
                            </div>
                            </div>

                            


                            <div id="bot" style="text-align: center; marg">

                                <div id="table" >
                                    <table class="bal_tab" style="width: 100%;
                                    margin-left: auto;
                                    margin-right: auto;">

                                    <tr class="tabletitle" style="text-align: center">
                                    <td class="item" style="width: 0px; text-align: center">
                                        <h2>Item</h2>
                                    </td>
                                    <td class="Hours" style: "text-align: center">
                                        <h2>Qty</h2>
                                    </td>
                                    <td class="Rate" style:"text-align: center">
                                        <h2>Sub Total</h2>
                                    </td>
                                </tr>
                                    </table>
                                </div>
                                <div id="legalcopy">
                                <p class="legal cas"></p>
                                    <p class="legal"><strong>Thank you for your patronage!</strong>
                                    </p>
                                </div>

                            </div>
                        </div>`
                        )
                        console.log(response.data);

                        // $('.rec_tab').prepend(``);

                        var list_whs = "";
                        $(response.data.product_details).each(function(i, v) {
                            list_whs += `<tr class="service" style="text-align: center">
                    <td class="tableitem">
                        <p class="itemtext">${v.product_name}</p>
                    </td>
                    <td class="tableitem">
                        <p class="itemtext">${v.product_qty}</p>
                    </td>
                    <td class="tableitem">
                        <p class="itemtext">${v.product_price}</p>
                    </td>
                    </tr>`;
                        });


                        list_whs += `<tr class="tabletitle" style="text-align: center; border-bottom: 1px solid white;">
                    <td></td>
                    <td class="Rate">
                    <h2 style="margin:10px; font-size:12px; font-weight:450;">Total Amount Paid (Cash)</h2>
                    </td>
                    <td class="payment">
                    <h2 style="margin:10px; font-size:12px; font-weight:450;">N${response.data.payment_details.cash_paid}</h2>
                    </td>
                    
                    </tr>`;
                        list_whs += `<tr class="tabletitle" style="text-align: center; border-bottom: 1px solid white;">
                    <td></td>
                    <td class="Rate">
                    <h2 style="margin:10px; font-size:12px; font-weight:450;">Total Amount Paid (Card)</h2>
                    </td>
                    <td class="payment">
                    <h2 style="margin:10px; font-size:12px; font-weight:450;">N${response.data.payment_details.card_paid}</h2>
                    </td>
                    
                    </tr>`;
                        list_whs += `<tr class="tabletitle" style="text-align: center; border-bottom: 1px solid white;">
                    <td></td>
                    <td class="Rate">
                    <h2 style="margin:10px; font-size:12px; font-weight:450;">Amount Due</h2>
                    </td>
                    <td class="payment">
                    <h2 style="margin:10px; font-size:12px; font-weight:450;">N${Number(response.data.payment_details.balance_to_pay) - Number(Number(total_cash) + Number(total_debit))}</h2>
                    </td>
                    
                    </tr>`;


                        $('.cas').html(`<strong>Sold By: ${response.data.sales.cashier}</strong>`)
                        // list_whs += `<tr class="tabletitle" style="text-align: center; border-bottom: 1px solid white;">
                        // <td></td>
                        // <td class="Rate">
                        // <h2 style="margin:10px; font-size:12px; font-weight:450;">Total Amount Paid (Card)</h2>
                        // </td>
                        // <td class="payment">
                        // <h2 style="margin:10px; font-size:12px; font-weight:450;">N${response.data.transaction_list.card_paid}</h2>
                        // </td>

                        // </tr>`;
                        // list_whs += `<tr class="tabletitle" style="text-align: center; border-bottom: 1px solid white;">
                        // <td></td>
                        // <td class="Rate">
                        // <h2 style="margin:10px; font-size:12px; font-weight:450;">Total Amount Due</h2>
                        // </td>
                        // <td class="payment">
                        // <h2 style="margin:10px; font-size:12px; font-weight:450; color:red">N${response.data.transaction_list.balance_to_pay}</h2>
                        // </td>
                        // </tr>`;

                        $(".bal_tab").append(list_whs);
                        $(".swal2-success").show();



                        setTimeout(() => {
                            //   $(".for_edit").hide();
                            var divToPrint = document.querySelector(".print_balance");
                            newWin = window.open("");
                            newWin.document.write(divToPrint.outerHTML);
                            newWin.print();
                            newWin.close();
                            location.reload()
                        }, 2000);

                        // var divToPrint = document.querySelector(".print_balance");
                        // newWin = window.open("");
                        // newWin.document.write(divToPrint.outerHTML);
                        // newWin.print();
                        // newWin.close();

                        localStorage.removeItem('row_id')

                    }

                    if (response.status == "400") {

                        $("#edit_modal").hide();
                        $("#for_err").html("Amount paid has exceeded the total outstanding balance");
                        $("#err_msg").remove();

                        if (!($("#err_msg").length)) {
                            $(`<h4 id="err_msg" style="padding:10px; margin:0px">Amount paid has exceeded the total outstanding balance</h4>`)
                                .insertAfter(".swal2-error");
                        }

                        $(".edit_error").show();

                        setTimeout(() => {
                            $(".edit_error").hide();
                            $("#err_msg").remove();
                        }, 5000);

                        $("#rcv_grn_loader").hide();
                        $("#receive_grn").show();
                        $(".receipt_loading").hide();
                        $(".complete_balance").show();
                    }

                },
                error: function(objAJAXRequest, strError) {
                    console.log(strError);
                    console.log(objAJAXRequest);

                    $("#rcv_grn_loader").hide();
                    $("#receive_grn").show();
                    localStorage.removeItem('row_id')
                },
            });
        }



        function show_details_dues(trans_id, customer_name) {
            var store_id = localStorage.getItem('store_id');


            $.ajax({
                type: "GET",
                dataType: "json",
                url: base_url + "/api/pos/transactionDetails",
                 headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
                data: {
                    company_id: localStorage.getItem("company_id"),
                    row_id: trans_id,
                    store_id: store_id,
                },
                timeout: 60000,

                success: function(response) {
                    console.log(response);

                    if (response.status == "200") {
                        $('.load_receipt').hide();
                        $('.payment_row').show();
                        // <h2 style="display: flex;text-align: right; font-size:12px;float: right;">Reciept No:${response.data.transaction_list.reciept_no}</h2>
                        // Email : nahere@gmail.com</br>

                        // $(".invoice").html(
                        //     `<div id="invoice-POS" style="width: 100%; text-align:"center">

                        //             <center id="top">
                        //                 <div class="logo"></div>

                        //                 <div class="info">
                        //                     <h2>${response.data.company_details.company_name}</h2>
                        //                     <p>
                        //                         Address : ${response.data.company_details.company_address}</br>
                        //                         Phone : ${response.data.company_details.company_phone}</br>
                        //                     </p>
                        //                 </div>
                        //                 <!--End Info-->
                        //             </center>
                        //             <!--End InvoiceTop-->

                        //             <div id="mid" style="text-align: center;">
                        //                 <div class="info">
                        //                     <h2>Customer Info</h2>
                        //                     <div style="display: flex;
                        //                     width: 100%;
                        //                     margin-left: auto;
                        //                     margin-right: auto;
                        //                     justify-content: center;">
                        //                         <span style="align-self:center; margin: 0px 10px;" class="bal_name">Name : 
                        //                         ${response.data.customer_details.customer_name}</span></br>
                        //                          <span style="align-self:center">Phone :${response.data.customer_details.customer_phone}</span></br>
                        //                     </div>
                        //                 </div>
                        //             </div>

                        //             <div style="
                        //                     width: 100%;
                        //                     margin-left: auto;
                        //                     margin-right: auto;
                        //                     justify-content: center;">
                        //                         <span style="align-self:center; margin: 0px 10px;">Email : ${response.data.customer_details.customer_email}
                        //                         </span><br>
                        //             </div>

                        //             <div id="mid" style="text-align: center; min-height:0px !important;">
                        //                 <div class="info">
                        //                     <p style="font-size:12px; margin-top:10px">
                        //                        Cashier Name: ${response.data.cashier_detail.fullname}</br>
                        //                     </p>
                        //                 </div>
                        //             </div>

                        //             <div id="bot" style="text-align: center; marg">

                        //                 <div id="table" >
                        //                     <table class="rec_tab" style="width: 100%;
                        //                     margin-left: auto;
                        //                     margin-right: auto;">

                        //                     <tr class="tabletitle" style="text-align: center">
                        //                     <td class="item" style="width: 0px; text-align: center">
                        //                         <h2>Item</h2>
                        //                     </td>
                        //                     <td class="Hours" style: "text-align: center">
                        //                         <h2>Qty</h2>
                        //                     </td>
                        //                     <td class="Rate" style:"text-align: center">
                        //                         <h2>Outstanding</h2>
                        //                     </td>
                        //                 </tr>

                        //                     </table>
                        //                 </div>

                        //     <div style=" width: 90%; margin-left:20px">
                        //                         <h2 style="font-size: 15px; font-weight:500; margin-top:20px;">Pay Outstanding</h2>
                        //                         <div style="display: flex; justify-content:space-between; width:100%;">
                        //                             <button type="button" class="ant-btn ant-btn-sm" style="background-color:#1DCE8E;color:white" ant-click-animating-without-extra-node="false"><span>Cash</span></button>
                        //                             <div style="display: flex; width: 25%;"><span style="font-size: 15px; align-self: center;">₦</span><input type="number" class="for_cash" value="" style="height: 25px;
                        //                                 margin-right: 5%;
                        //                                 border: none;
                        //                                 margin-top: 7px;
                        //                                 width: 100%;
                        //                                 border-bottom: 1px solid #d9d9d9;">
                        //                             </div>
                        //                         </div>

                        //                         <div style="display: flex; justify-content:space-between; width:100%;">
                        //                             <button type="button" class="ant-btn ant-btn-sm" style="background-color:#1DCE8E;color:white" ant-click-animating-without-extra-node="false"><span>Debit
                        //                                     Card</span></button>
                        //                             <div style="display: flex; width: 25%;"><span style="font-size: 15px; align-self: center;">₦</span><input type="number" class="for_debit" value="" style="height: 25px;
                        //                                 margin-right: 5%;
                        //                                 border: none;
                        //                                 margin-top: 7px;
                        //                                 width: 100%;
                        //                                 border-bottom: 1px solid #d9d9d9;">
                        //                             </div>
                        //                         </div>


                        //                         <button type="button" class="ant-btn ant-btn-lg complete_balance" style="width: 100%; font-size: 20px; margin-top:10px; padding: 0px; background-color:#1DCE8E;color:white"><span>Make Payment</span></button>
                        //                         <button type="button" style="display:none; width: 100%; font-size: 20px; margin-left:20px; padding: 0px; background-color:#1DCE8E;color:white" class="ant-btn  ant-btn-loading receipt_loading"><span class="ant-btn-loading-icon" style=""><span role="img" aria-label="loading" class="anticon anticon-loading"><svg viewBox="0 0 1024 1024" focusable="false" class="anticon-spin" data-icon="loading" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M988 548c-19.9 0-36-16.1-36-36 0-59.4-11.6-117-34.6-171.3a440.45 440.45 0 00-94.3-139.9 437.71 437.71 0 00-139.9-94.3C629 83.6 571.4 72 512 72c-19.9 0-36-16.1-36-36s16.1-36 36-36c69.1 0 136.2 13.5 199.3 40.3C772.3 66 827 103 874 150c47 47 83.9 101.8 109.7 162.7 26.7 63.1 40.2 130.2 40.2 199.3.1 19.9-16 36-35.9 36z"></path></svg></span></span><span>Loading</span></button>



                        //                     </div>

                        // //     <div id="legalcopy">
                        // //         </p>
                        // //     </div>

                        // // </div>
                        //         </div>`
                        // );

                        //                 <div style="display: flex;color: white; width: 100%; height: 150px;">

                        //     <div style="background-color:  #BCDFF5; width: 40%">

                        //     </div>



                        //     <div style="background-color: #BCDFF5; width: 60%; overflow:auto">
                        //     <div class="container" >
                        //     <div class="row">
                        //         <div class="col-md-6">
                        //         <p style="color: black;padding: 5px; line-height: 0.5em; font-size:20px">Amount Paid (cash)</p>
                        //         </div>
                        //         <div class="col-md-6">
                        //         <p style="color: black;padding: 5px;line-height: 0.5em; font-weight:500; font-size:20px;">₦${format_to_money(response.data.transaction_list.cash_paid)}<p>
                        //         </div>
                        //         </div>
                        //     </div>
                        //     <div class="row">
                        //         <div class="col-md-6">
                        //         <p style="color: black;padding: 5px; line-height: 0.5em; font-size:20px; padding-left: 20px;">Amount Paid (card)</p>
                        //         </div>
                        //         <div class="col-md-6">
                        //         <p style="color: black;padding: 5px; font-weight:500; font-size:20px; line-height: 0.5em;"> ₦${format_to_money(response.data.transaction_list.card_paid)}<p>
                        //         </div>
                        //     </div>
                        //         <div class="row">
                        //         <div class="col-md-6">
                        //         <p style="color: black;padding: 5px; line-height: 0.5em; padding-left: 20px; font-size:20px">Total Amount Due</p>
                        //         </div>
                        //         <div class="col-md-6">
                        //         <p class="amt_due"style="color: black; padding: 5px; line-height: 0.5em; font-weight:500; font-size:20px;"> ₦${format_to_money(response.data.transaction_list.balance_to_pay)}<p></div>
                        //     </div>
                        //         </div>
                        //     <div class="row">
                        //     <div class="col-md-6">
                        //     <p style="color: black;padding: 5px; line-height: 0.5em; font-weight:600; padding-left: 20px; font-size:20px">Total</p>
                        //     </div>
                        //     <div class="col-md-6">   
                        //     <h2 style="color: black;padding: 5px; line-height: 0.5em; font-weight:500; font-size:20px; ">₦${format_to_money(Number(response.data.transaction_list.total_transaction))}</h2>
                        //     </div>
                        //     </div>
                        //     </div>
                        // </div>

                              // <select style="width: 95%; margin-bottom: 10px; margin-left: auto;margin-right: auto;"
                              //       class="form-control required product_cat" data=${customer_name} id="cus"></select>  

                        $(".invoice").html(
                            `<style type="text/css">
        @media print {
            body {
              -webkit-print-color-adjust: exact;
          }
          .tabletitle{
            border-bottom: 2px solid black !important;
            background: #EEE !important;
          }
          tr{
            border-bottom: 2px solid black !important;
          }
          .service{
            border-bottom: 2px solid black !important;
          }
          .  just_receipt tr {

          }
        }
    </style>

  <div class="" style="box-shadow: 0 4px 8px rgb(0 0 0 / 19%); margin-left: auto;
    margin-right: auto;">
        <div
            style="display: flex;color: white; padding: 20px; justify-content: space-between; background-color: #2065A8; height: 210px;">
            <div>
                <img src="${response.data.company_details.company_logo}" />
                <h4 style="color:white">Invoice</h4>
            </div>
            <div style="text-align: right;">
                <h4 style="color:white">${response.data.company_details.company_name}</h4>
                <p style="color:white">Business Name</p>
                <p style="color:white">Address: ${response.data.company_details.company_address}</p>
                <p style="color:white">Country</p>
                <p style="color:white">Phone : ${response.data.company_details.company_phone}</p>
            </div>
        </div>


        <div style="display: flex; padding: 20px; justify-content: space-between; height: 210px;">
            <div>
               
            <h2 style="font-size: 16px;font-weight: 700; margin-bottom: 10px;">Bill to:</h2>
             <input style="width: 95%; margin-bottom: 10px;  margin-left: auto;margin-right: auto;" type="text" id="cus_name" value="${response.data.customer_details.customer_name}" data="${response.data.customer_details.customer_id}" class="form-control required" disabled>
      
               
               
                <h2 style="font-size: 16px;font-weight: 700; margin-bottom:10px;">Phone:</h2>
                <input style="width: 95%; margin-bottom: 10px;  margin-left: auto;margin-right: auto;" type="text"
                                    id="cus_phone" value="${response.data.customer_details.customer_phone}" class="form-control required" disabled>


                <h2 style="font-size: 16px;font-weight: 700; margin-bottom:10px">Email:</h2>

                <input style="width: 95%; margin-bottom: 10px; margin-left: auto;margin-right: auto;" type="text"
                                    id="cus_email" value="${response.data.customer_details.customer_email}" class="form-control" disabled>

                    <button type="button" style="position: relative;top: 10px;left: 5px; display:none; width: 177px;" class="btn edit_btn save_edit_his btn-primary btn-sm" data-dismiss="modal" >Save changes</button>

            </div>
            <div style="text-align: right;">
                <h2 style="font-size: 16px;font-weight: 700;">INVOICE #</h2>
                <h4>NaHere Limited</h4>
                <h2 style="font-size: 16px;font-weight: 700;">DATE<span></span></h2>
                <h4>${response.data.transaction_list.transaction_date.split(' ')[0]}</h4>
               
            </div>
        </div>
        <!-- /.row -->
        <hr style="margin-bottom: 120px !important;position: relative;top: 100px;" />

        <div>

            <table class="just_receipt" style="
                width: 100%;
                padding: 10px;
                margin-left: auto;
                margin-right: auto;">
                <tr style="">
                    <th style="font-size: 14px;font-weight: 700; width:32.5%; padding-left:15px">ITEMS</th>
                    <th style="font-size: 14px;font-weight: 700; width:32.5%;  position:relative; left:10px;">QUANTITY</th>
                    <th style="font-size: 14px;font-weight: 700; width:.5%; text-align: end; position: relative; left: -15px;">SUBTOTAL</th>

                </tr>
               



            </table>

            ${ response.data.sundry_fees ?

            `<table class="sundry" style="
                width: 100%;
                padding: 10px;
                margin-left: auto;
                margin-right: auto;">
                <tbody><tr style="">
                    <th style="font-size: 14px;font-weight: 700; width:32.5%; padding-left:15px"></th>
                    <th style="font-size: 14px;font-weight: 700;width: 32.5%;">VAT </th>
                    <th style="font-size: 14px;font-weight: 700; width:5%; text-align: end; position: relative; left: -15px;">VAT AMOUNT</th>

                </tr>
               


              </table>` : ''
            }
        </div>
    <div style="background-color: #BCDFF5;">
        <div style=" padding:10px; margin-left:31%">
        <div class="container" >
            <div class="row">
                <div class="col-md-6">
                <p style="color: black;padding: 5px; line-height: 0.5em; text-align: start; font-size:20px">Amount Paid (cash)</p>
                </div>
                <div class="col-md-6">
                <p style="color: black;padding: 5px;line-height: 0.5em; text-align: end;  font-weight:500; font-size:20px;">₦${format_to_money(response.data.transaction_list.cash_paid)}<p>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-6">
                <p style="color: black;padding: 5px; line-height: 0.5em; text-align: start;font-size:20px; ">Amount Paid (card)</p>
                </div>
                <div class="col-md-6">
                <p style="color: black;padding: 5px; font-weight:500; font-size:20px; text-align: end;line-height: 0.5em;"> ₦${format_to_money(response.data.transaction_list.card_paid)}<p>
                </div>
            </div>
                <div class="row">
                <div class="col-md-6">
                <p style="color: black;padding: 5px; line-height: 0.5em;text-align: start;  font-size:20px">Total Amount Due</p>
                </div>
                <div class="col-md-6">
                <p class="amt_due"style="color: black; padding: 5px; line-height: 0.5em; text-align: end;font-weight:500; font-size:20px;"> ₦${format_to_money(response.data.transaction_list.balance_to_pay)}<p></div>
            </div>
           
                
            <div class="row">
            <div class="col-md-6">
            <p style="color: black;padding: 5px; line-height: 0.5em; font-weight:600; text-align: start; font-size:20px">Total</p>
            </div>
            <div class="col-md-6">   
            <p style="color: black;padding: 5px; line-height: 0.5em; text-align: end;  font-weight:500; font-size:20px;">₦${format_to_money(Number(response.data.transaction_list.total_transaction))}</p>
            </div>
            </div>
            </div>
        </div>
        </div>
</div>
            
  









${Number(response.data.transaction_list.balance_to_pay) > 0 ?

        `<div class="pay_outstanding" style=" width: 90%; margin-left:20px">
           <h2 style="font-size: 15px; font-weight:500; margin-top:20px;">Pay Outstanding</h2>
            <div style="display: flex; justify-content:space-between; width:100%;">
                <button type="button" class="ant-btn ant-btn-sm" style="background-color:#2065A8;color:white" ant-click-animating-without-extra-node="false"><span>Cash</span></button>
                    <div style="display: flex; width: 25%;"><span style="font-size: 15px; align-self: center;">₦</span><input type="number" class="for_cash" value="" style="height: 25px;
                         margin-right: 5%;border: none;margin-top: 7px;width: 100%;border-bottom: 1px solid #d9d9d9;">
                    </div>
                                                    </div>

                                                    <div style="display: flex; justify-content:space-between; width:100%;">
                                                        <button type="button" class="ant-btn ant-btn-sm" style="background-color:#2065A8;color:white" ant-click-animating-without-extra-node="false"><span>Debit
                                                                Card</span></button>
                                                        <div style="display: flex; width: 25%;"><span style="font-size: 15px; align-self: center;">₦</span><input type="number" class="for_debit" value="" style="height: 25px;
                                                            margin-right: 5%;
                                                            border: none;
                                                            margin-top: 7px;
                                                            width: 100%;
                                                            border-bottom: 1px solid #d9d9d9;">
                                                        </div>
                                                    </div>


                                                    <button type="button" class="ant-btn ant-btn-lg complete_balance" style="width: 100%; font-size: 20px; margin-top:10px; padding: 0px; background-color:#2065A8; color:white"><span>Make Payment</span></button>
                                                    <button type="button" style="display:none; width: 100%; font-size: 20px; margin-left:20px; padding: 0px; background-color:#2065A8;color:white" class="ant-btn  ant-btn-loading receipt_loading"><span class="ant-btn-loading-icon" style=""><span role="img" aria-label="loading" class="anticon anticon-loading"><svg viewBox="0 0 1024 1024" focusable="false" class="anticon-spin" data-icon="loading" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M988 548c-19.9 0-36-16.1-36-36 0-59.4-11.6-117-34.6-171.3a440.45 440.45 0 00-94.3-139.9 437.71 437.71 0 00-139.9-94.3C629 83.6 571.4 72 512 72c-19.9 0-36-16.1-36-36s16.1-36 36-36c69.1 0 136.2 13.5 199.3 40.3C772.3 66 827 103 874 150c47 47 83.9 101.8 109.7 162.7 26.7 63.1 40.2 130.2 40.2 199.3.1 19.9-16 36-35.9 36z"></path></svg></span></span><span>Loading</span></button>



                         </div>` : ""




}






                                                


        <div style=" width: 100%; display: flex;
        justify-content: center;margin: 50px 0px 50px 0px;">
            <p style="margin-bottom: 50px;">Powered By <span><img style="width: 8%; " src="https://empl-dev.site/nahere_logo_blue.png" /> </span> NaHere Limited<p><br>
            <!-- <p>8/10 Ilupeju Bypass, Ilupeju, Lagos</p> -->
        </div>
    </div>`
                        )

                        console.log(response.data);

                        // $('.rec_tab').prepend(``);

                        var list_whs = "";
                        $(response.data.transaction_list.cart_list).each(function(i, v) {
                            list_whs += `<tr >
                     <td class="tableitem">${v.product_name}</td>
                     <td class="tableitem" style="position:relative; left:0px">${v.product_qty}</td>
                     <td class="tableitem" style="text-align: start;">₦${format_to_money(v.product_price)}</td>
                 </tr>`;
                        });


                        var list_vat = "";
                        `${ response.data.sundry_fees &&
                        $(response.data.sundry_fees).each(function(i, v) {
                            list_vat += `<tr >
                     <td></td>
                     <td class="tableitem" style="
                     margin-left: 20px !important;">${v.name}</td>
                     <td class="tableitem" style="padding: 10px; text-align:start">₦${format_to_money(v.fee)}</td>
                 </tr>`;
                        })
                    }`


                        $(".sundry").append(list_vat);


                        // list_whs += `<tr class="tabletitle" style="text-align: center; border-bottom: 1px solid white;">
                        //   <td></td>
                        //   <td class="Rate">
                        //       <h2 style="margin:10px; font-size:12px; font-weight:450;">Total Amount Paid (Cash)</h2>
                        //   </td>
                        //   <td class="payment">
                        //       <h2 style="margin:10px; font-size:12px; font-weight:450;">N${response.data.transaction_list.cash_paid}</h2>
                        //   </td>

                        // </tr>`;
                        // list_whs += `<tr class="tabletitle" style="text-align: center; border-bottom: 1px solid white;">
                        //   <td></td>
                        //   <td class="Rate">
                        //       <h2 style="margin:10px; font-size:12px; font-weight:450;">Total Amount Paid (Card)</h2>
                        //   </td>
                        //   <td class="payment">
                        //       <h2 style="margin:10px; font-size:12px; font-weight:450;">N${response.data.transaction_list.card_paid}</h2>
                        //   </td>

                        // </tr>`;
                        // list_whs += `<tr class="tabletitle" style="text-align: center; border-bottom: 1px solid white;">
                        //   <td></td>
                        //   <td class="Rate">
                        //       <h2 style="margin:10px; font-size:12px; font-weight:450;">Total Amount Due</h2>
                        //   </td>
                        //   <td class="payment">
                        //       <h2 id="amount_due" style="margin:10px; font-size:12px; font-weight:450; color:red">N${response.data.transaction_list.balance_to_pay}</h2>
                        //   </td>

                        // </tr>`;



                        ;

                        $(".just_receipt").append(list_whs);

                        $(`.dt_loader_details_${trans_id}`).hide();


                        $(".invoice_show").show();
                        load_customers_for_pop();
                    } else if (response.status == "400") {
                        $("#msg_r").html(response.msg);
                        $("#rcv_grn_loader").hide();
                        $("#receive_grn").show();
                    } else {
                        $("#msg_r").html(response.msg);
                        $("#rcv_grn_loader").hide();
                        $("#receive_grn").show();
                    }
                },

                error: function(objAJAXRequest, strError) {
                    console.log(strError);
                    console.log(objAJAXRequest);

                    $("#rcv_grn_loader").hide();
                    $("#receive_grn").show();
                },
            });
        }

        $(document).on("change", ".product_cat", function() {
            // send_category();
            let cus_id = $(this).val();
            let cus_name = $(this).attr('data');

            $(".save_edit_his").attr("disabled", "disabled")
            customers_details(cus_id, cus_name)
        })


        // $('.product_cat').on("change", function() {
        // alert('here')
        // let cus_id = $(this).val();
        // $(".save_edit_his").attr("disabled", "disabled")
        // customers_details(cus_id)
        // });


        function customers_details(cus_id, cus_name) {
            // alert(cus_name)

            var company_id = localStorage.getItem('company_id');


            var list_whs = "";
            var list_whs_2 = "";

            $.ajax({

                type: "GET",
                dataType: "json",
                cache: false,
                url: base_url + "/api/pos/customerDetails",
                data: {
                    "customer_id": cus_id,
                    "store_id": localStorage.getItem("store_id"),

                    "company_id": company_id
                },

                success: function(response) {

                    $("#cus_ph").val(response.data.phone);
                    $("#cus_email").val(response.data.email);
                    $(".save_edit_his").removeAttr("disabled")


                },
                error: function() {
                    console.log(response);
                    alert(response.msg)
                    location.reload()
                }

            });

        }


        function show_details(trans_id) {
            var store_id = localStorage.getItem('store_id');


            $.ajax({
                type: "GET",
                dataType: "json",
                url: base_url + "/api/pos/transactionDetails",
                 headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
                data: {
                    company_id: localStorage.getItem("company_id"),
                    row_id: trans_id,
                    store_id: store_id,

                },
                timeout: 60000,

                success: function(response) {
                    console.log(response);

                    if (response.status == "200") {
                        // $('.load_receipt').hide();
                        // $('.payment_row').show();
                        // Email : ${response.data.company_details.company_address}</br>

                        $(".invoice").html(
                            `<div id="invoice-POS" style="width: 100%; text-align:"center">
                        <h2 style="display: flex;text-align: right; font-size:12px;float: right;">Reciept No:${response.data.transaction_list.reciept_no}</h2>

                            <center id="top">
                                <div class="logo"></div>

                                <div class="info">
                                    <h2>${response.data.company_details.company_name}</h2>
                                    <p>
                                        Address : ${response.data.company_details.company_address}</br>
                                        Phone : ${response.data.company_details.phone_number}</br>
                                    </p>
                                </div>
                                <!--End Info-->
                            </center>
                            <!--End InvoiceTop-->

                            <div id="mid" style="text-align: center;">
                                <div class="info">
                                    <h2>Customer Info</h2>
                                    <div style="display: flex;
                                    width: 100%;
                                    margin-left: auto;
                                    margin-right: auto;
                                    justify-content: center;">
                                        <span style="align-self:center; margin: 0px 10px;">Name : 
                                        ${response.data.customer_details.customer_name}</span></br>
                                         <span style="align-self:center">Phone :${response.data.customer_details.customer_phone}</span></br>
                                    </div>

                                    <div style="
                                    width: 100%;
                                    margin-left: auto;
                                    margin-right: auto;
                                    justify-content: center;">
                                        <span style="align-self:center; margin: 0px 10px;">Email : 
                                        ${response.data.customer_details.customer_email}</span></br>
                                    </div>
                                </div>
                            </div>

                            <div id="mid" style="text-align: center; min-height:0px !important;">
                                <div class="info">
                                    <p style="font-size:12px; margin-top:10px">
                                       Cashier Name: ${response.data.cashier_detail.fullname}</br>
                                    </p>
                                </div>
                            </div>

                            <div id="bot" style="text-align: center; marg">

                                <div id="table" >
                                    <table class="rec_tab" style="width: 100%;
                                    margin-left: auto;
                                    margin-right: auto;">

                                    <tr class="tabletitle" style="text-align: center">
                                    <td class="item" style="width: 0px; text-align: center">
                                        <h2>Item</h2>
                                    </td>
                                    <td class="Hours" style: "text-align: center">
                                        <h2>Qty</h2>
                                    </td>
                                    <td class="Rate" style:"text-align: center">
                                        <h2>Sub Total</h2>
                                    </td>
                                </tr>
                                  
                                    </table>
                                </div>

                                <div id="legalcopy">
                                    </p>
                                </div>

                            </div>
                        </div>`
                        );

                        console.log(response.data);

                        // $('.rec_tab').prepend(``);

                        var list_whs = "";
                        $(response.data.transaction_list.cart_list).each(function(i, v) {
                            list_whs += ` <tr class="service" style="text-align: center">
                     <td class="tableitem">
                         <p class="itemtext">${v.product_name}</p>
                     </td>
                     <td class="tableitem">
                         <p class="itemtext">${v.product_qty}</p>
                     </td>
                     <td class="tableitem">
                         <p class="itemtext">${format_to_money(v.product_price)}</p>
                     </td>
                    </tr>`;
                        });


                        list_whs += `<tr class="tabletitle" style="text-align: center; border-bottom: 1px solid white;">
                  <td></td>
                  <td class="Rate">
                      <h2 style="margin:10px; font-size:12px; font-weight:450;">Total Amount Paid (Cash)</h2>
                  </td>
                  <td class="payment">
                      <h2 style="margin:10px; font-size:12px; font-weight:450;">N${format_to_money(response.data.transaction_list.cash_paid)}</h2>
                  </td>
                  
                </tr>`;
                        list_whs += `<tr class="tabletitle" style="text-align: center; border-bottom: 1px solid white;">
                  <td></td>
                  <td class="Rate">
                      <h2 style="margin:10px; font-size:12px; font-weight:450;">Total Amount Paid (Card)</h2>
                  </td>
                  <td class="payment">
                      <h2 style="margin:10px; font-size:12px; font-weight:450;">N${format_to_money(response.data.transaction_list.card_paid)}</h2>
                  </td>
                  
                </tr>`;
                        list_whs += `<tr class="tabletitle" style="text-align: center; border-bottom: 1px solid white;">
                  <td></td>
                  <td class="Rate">
                      <h2 style="margin:10px; font-size:12px; font-weight:450;">Total Amount Due</h2>
                  </td>
                  <td class="payment">
                      <h2 style="margin:10px; font-size:12px; font-weight:450;">N${format_to_money(response.data.transaction_list.balance_to_pay)}</h2>
                  </td>
                  
                </tr>`;

                        list_whs += `<tr class="tabletitle" style="text-align: center; border-bottom: 1px solid white;">
                  <td></td>
                  <td class="Rate">
                      <h2 style="margin:10px; font-size:12px; font-weight:450;">Total</h2>
                  </td>
                  <td class="payment">
                      <h2 style="margin:10px; font-size:12px; font-weight:450;">N${format_to_money(response.data.transaction_list.total_transaction)}</h2>
                  </td>
                  
                </tr>`;

                        $(".rec_tab").append(list_whs);
                        $(`.dt_loader_details_${trans_id}`).hide();


                        $(".invoice_show").show();
                    } else if (response.status == "400") {
                        $("#msg_r").html(response.msg);
                        $("#rcv_grn_loader").hide();
                        $("#receive_grn").show();
                    } else {
                        $("#msg_r").html(response.msg);
                        $("#rcv_grn_loader").hide();
                        $("#receive_grn").show();
                    }
                },

                error: function(objAJAXRequest, strError) {
                    console.log(strError);
                    console.log(objAJAXRequest);

                    $("#rcv_grn_loader").hide();
                    $("#receive_grn").show();
                },
            });
        }

        function show_history_details(trans_id) {
            var store_id = localStorage.getItem('store_id');


            $.ajax({
                type: "GET",
                dataType: "json",
                 headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
                url: base_url + "/api/pos/paymentList",
                data: {
                    company_id: localStorage.getItem("company_id"),
                    trans_id: trans_id,
                    store_id: store_id,

                },
                timeout: 60000,

                success: function(response) {
                    console.log(response);

                    if (response.status == "200") {
                        // $('.load_receipt').hide();
                        // $('.payment_row').show();
                        // <h2 style="display: flex;text-align: right; font-size:12px;float: right;">Reciept No:${response.data.transaction_list.reciept_no}</h2>
                        // <center id="top">
                        //             <div class="logo"></div>

                        //             <div class="info">
                        //                 <h2>${response.data.company_details.company_name}</h2>
                        //                 <p>
                        //                     Address : ${response.data.company_details.company_address}</br>
                        //                     Email : nahere@gmail.com</br>
                        //                     Phone : ${response.data.company_details.phone_number}</br>
                        //                 </p>
                        //             </div>
                        //             <!--End Info-->
                        //         </center>
                        //         <!--End InvoiceTop-->

                        // <div id="mid" style="text-align: center;">
                        //     <div class="info">
                        //         <h2>Customer Info</h2>
                        //         <div style="display: flex;
                        //         width: 100%;
                        //         margin-left: auto;
                        //         margin-right: auto;
                        //         justify-content: center;">
                        //             <span style="align-self:center; margin: 0px 10px;">Name : 
                        //             ${response.data.customer_details.customer_name}</span></br>
                        //              <span style="align-self:center">Phone :${response.data.customer_details.customer_phone}</span></br>
                        //         </div>
                        //     </div>
                        // </div>

                        $(".invoice_history").html(
                            `<div id="invoice-POS" style="width: 100%; text-align:"center">

                        <div id="mid" style="text-align: center;">
                                <div class="info">
                                    <h2>Customer Info</h2>
                                    <div style="display: flex;
                                    width: 100%;
                                    margin-left: auto;
                                    margin-right: auto;
                                    justify-content: center;">
                                        <span style="align-self:center; margin: 0px 10px;">Name : 
                                        ${response.data.customer_details.customer_name}</span></br>
                                         <span style="align-self:center">Phone :${response.data.customer_details.customer_phone}</span></br>
                                    </div>
                                    <div style="
                                    width: 100%;
                                    margin-left: auto;
                                    margin-right: auto;
                                    justify-content: center;">
                                        <span style="align-self:center; margin: 0px 10px;">Email : 
                                        ${response.data.customer_details.customer_email}</span></br>
                                    </div>
                                </div>
                            </div>

                            <div id="mid" style="text-align: center; min-height:0px !important;">
                                <div class="info">
                                    <p style="font-size:12px; margin-top:10px">
                                       Cashier Name: ${response.data.cashier_details.cashier_name}</br>
                                    </p>
                                </div>
                            </div>

                            <div id="bot" style="text-align: center; marg">

                                <div id="table" >
                                    <table class="rec_tab" style="width: 100%;
                                    margin-left: auto;
                                    margin-right: auto;">

                                    <tr class="tabletitle" style="text-align: center; height:40px">
                                    <td class="item" style="width: 0px; text-align: center">
                                    <span style="font-size:13px">S/N</span>
                                    </td>
                                    <td class="Hours" style: "text-align: center">
                                        <span style="font-size:13px">Receipt No</span>
                                    </td>
                                    <td class="Hours" style: "text-align: center">
                                    <span style="font-size:13px">Date </span>
                                    </td>
                                    <td class="Hours" style: "text-align: center">
                                    <span style="font-size:13px">Amount Paid(Cash) </span>
                                    </td>
                                    <td class="Hours" style: "text-align: center">
                                    <span style="font-size:13px">Amount Paid(Card) </span>
                                    </td>
                                    
                                    <td class="Hours" style: "text-align: center">
                                    <span style="font-size:13px">Amount Due(N)</span>
                                    </td>
                                </tr>
                                  
                                    </table>
                                </div>

                                <div id="legalcopy">
                                    </p>
                                </div>

                            </div>
                        </div>`
                        );

                        console.log(response.data);

                        // $('.rec_tab').prepend(``);

                        var list_whs = "";
                        $(response.data.reciept_details).each(function(i, v) {
                            list_whs += ` <tr class="service" style="text-align: center">
                        <td class="tableitem">
                         <p class="itemtext">${v.sn}</p>
                     </td>
                     <td class="tableitem">
                         <p class="itemtext">${v.reciept_no}</p>
                     </td>
                     <td class="tableitem">
                         <p class="itemtext">${format_a_date(v.date_paid.split(' ')[0])}</p>
                     </td>
                     <td class="tableitem">
                         <p class="itemtext">${format_to_money(v.cash_paid)}</p>
                     </td>
                     <td class="tableitem">
                         <p class="itemtext">${format_to_money(v.card_paid)}</p>
                     </td>
                     
   
                     <td class="tableitem">
                         <p class="itemtext">${format_to_money(v.balance_to_pay)}</p>
                     </td>

                    
                    </tr>`;
                        });


                        list_whs += `<tr class="tabletitle" style="text-align: center; border-bottom: 1px solid white;">
                    <td></td>
                    <td colspan="3"></td>
                  <td class="Rate" >
                      <h2 style="margin:10px; font-size:12px; font-weight:450;">Total Cost</h2>
                  </td>
                  <td class="payment">
                      <h2 style="margin:10px; font-size:12px; font-weight:450;">N${format_to_money(response.data.invoice_details.total)}</h2>
                  </td>
                  
                </tr>`;
                        list_whs += `<tr class="tabletitle" style="text-align: center; border-bottom: 1px solid white;">
                    <td></td>
                  
                    <td colspan="3"></td>
                  <td class="Rate">
                      <h2 style="margin:10px; font-size:12px; font-weight:450;">Total Amount Paid</h2>
                  </td>
                  <td class="payment">
                      <h2 style="margin:10px; font-size:12px; font-weight:450;">N${format_to_money(response.data.invoice_details.total_paid)}</h2>
                  </td>
                  
                </tr>`;
                        list_whs += `<tr class="tabletitle" style="text-align: center; border-bottom: 1px solid white;">
                    <td></td>
                    <td colspan="3"></td>
                  <td class="Rate">
                      <h2 style="margin:10px; font-size:12px; font-weight:450;">Total Amount Due</h2>
                  </td>
                  <td class="payment">
                      <h2 style="margin:10px; font-size:12px; font-weight:450;">N${format_to_money(response.data.invoice_details.balance_to_pay)}</h2>
                  </td>
                  
                </tr>`;

                        list_whs += `<tr class="tabletitle" style="text-align: center; border-bottom: 1px solid white;">
                  
                    <td></td>
                    <td colspan="3"></td>
                  <td class="Rate">
                      <h2 style="margin:10px; font-size:12px; font-weight:450;">Transaction Status</h2>
                  </td>
                  <td class="payment">
                      <h2 style="margin:10px; font-size:12px; font-weight:450;">${response.data.invoice_details.status}</h2>
                  </td>
                  
                </tr>`;

                        $(".rec_tab").append(list_whs);
                        $(`.dt_loader_details_${trans_id}`).hide();


                        $(".history_show").show();
                    } else if (response.status == "400") {
                        $("#msg_r").html(response.msg);
                        $("#rcv_grn_loader").hide();
                        $("#receive_grn").show();
                    } else {
                        $("#msg_r").html(response.msg);
                        $("#rcv_grn_loader").hide();
                        $("#receive_grn").show();
                    }
                },

                error: function(objAJAXRequest, strError) {
                    console.log(strError);
                    console.log(objAJAXRequest);

                    $("#rcv_grn_loader").hide();
                    $("#receive_grn").show();
                },
            });
        }

        function load_cashier_for_filter(page) {
            if (page == "") {
                var page = 1;
            }
            var limit = 1000000;

            var company_id = localStorage.getItem('company_id');


            var list_whs = "";
            $.ajax({

                type: "GET",
                dataType: "json",
                cache: false,
                 headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
                url: base_url + "/api/pos/cashierList",
                data: {
                    "company_id": company_id,
                    "store_id": localStorage.getItem('store_id')
                    // "customer_id": "",
                    // "phone": "",
                    // "no_transactions": "",
                },

                success: function(response) {

                    var k = 1;
                    console.log(response.data)
                    $(response.data).each(function(i, v) {
                        list_whs +=
                            `<option name=${v.cashier_name} value=${v.cashier_name} data-value=${v.cashier_id}></option>`;
                    })

                    $(`#options_cashier`).html(list_whs);
                },
                error: function() {
                    console.log(response);
                }

            });

        }



        function list_sales_history(page) {
            let company_id = localStorage.getItem("company_id");
            let store_id = localStorage.getItem("store_id");
            // let cashier_id = localStorage.getItem("cashier_id");

            // let date_range = localStorage.getItem("company_id");




            var listObj = document.getElementById(`select_item_cashier`);
            var select_store = document.getElementById(`select_item`);

            console.log(listObj);
            console.log($("#select_item_cashier").val())
            if ($("#select_item_cashier").val()) {
                var datalist = document.getElementById(listObj.getAttribute("list"));
                var fa = datalist.options.namedItem(listObj.value);
                console.log(fa)
                if (fa == null) {
                    alert('Invalid Input');
                    return false;
                }

                var cus_id = fa.getAttribute('data-value');
                var cashier_id = cus_id ? cus_id : ""

            }


            if (page == "") {
                var page = 1;
            }
            var limit = 10;

            $("#sales_history").hide();
            $(".load_pro").show();

            $.ajax({
                type: "GET",
                dataType: "json",
                cache: false,
                 headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
                url: base_url + "/api/pos/transactionList",
                data: {
                    "company_id": company_id,
                    "store_id": localStorage.getItem('store_id'),
                    "date_range": $("#date_range").val(),
                    "amount": $("#amount").val(),
                    "trans_no": $("#receipt_number").val(),
                    "cashier_id": cashier_id,
                    "limit": limit,
                    "page": page
                },

                success: function(response) {
                    if (response.status == "200") {
                        console.log(response.data);
                        if (response.data.transaction_list.length > 0) {
                            var k = 1;
                            var list_whs = "";



                            $.each(response.data.transaction_list, function(i, v) {
                                list_whs += `
             <tr data-row-key="1" class="ant-table-row ant-table-row-level-0 gradeA product_table even_${v.customer_id}" role="row" style="text-align:center" data-value="${v.product_name}"
             data="${v.customer_id}" >
  
             <td class="ant-table-cell" style="text-align:left" id="for_sn_${v.customer_id}">${v.sn}</td>
             <td class="ant-table-cell" style="text-align:left" id="for_his_${v.customer_id}">${v.trans_no}</td>
             <td class="ant-table-cell" style="text-align:left" id="for_date_${v.customer_id}">${format_a_date(v.transaction_date.split(' ')[0])}</td>

              <td class="ant-table-cell for_history" style="text-align:left" id="for_history_${v.customer_id}" data="${v.customer_id}">${v.customer_name}</td>
              <td style="text-align:left;"><span class="gx-badge gx-text-white ${v.payment_status == "uncompleted" ? 'light_red' : 'gx-bg-green'}">${v.payment_status}</span></td>
              <td class="ant-table-cell" style="text-align:left;" id="for_his_sales_${v.customer_id}">${v.sales_person}</td>
              <td class="ant-table-cell" style="text-align:left" id="for_his_total_${v.customer_id}">${format_to_money(v.total_transaction)}</td>
              <td class="ant-table-cell" style="text-align:left; display:flex;">
              <span class="gx-badge gx-text-white history_details_dues" lang="${v.customer_name}" id="history_details_dues_${v.row_id}" data=${v.row_id} style="display:none; background-color: #e58620; cursor:pointer">Details</span>
              <span class="gx-badge gx-text-white history_log" id="history_log_${v.customer_id}" data=${v.row_id} style="display:none; background-color: #6c757d; cursor:pointer">History</span>
              <span class="ant-btn-loading-icon dt_loader_details_${v.customer_id}" style="display:none"><span role="img" aria-label="loading" class="anticon anticon-loading"><svg viewBox="0 0 1024 1024" focusable="false" class="anticon-spin" data-icon="loading" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M988 548c-19.9 0-36-16.1-36-36 0-59.4-11.6-117-34.6-171.3a440.45 440.45 0 00-94.3-139.9 437.71 437.71 0 00-139.9-94.3C629 83.6 571.4 72 512 72c-19.9 0-36-16.1-36-36s16.1-36 36-36c69.1 0 136.2 13.5 199.3 40.3C772.3 66 827 103 874 150c47 47 83.9 101.8 109.7 162.7 26.7 63.1 40.2 130.2 40.2 199.3.1 19.9-16 36-35.9 36z"></path></svg></span></span>
            </td>
           </tr>`;
                                k++;
                            });
                            // <span class="gx-badge gx-text-white history_edit" id="history_edit_${v.customer_id}" data="${v.customer_id}" lang-value="${v.transaction_id}"  data-value="${v.customer_name}" lang="${v.customer_phone}" style="background-color: #038EDC; cursor:pointer" data-value=${v.customer_name}>Edit</span>
                            //   ${v.payment_status == "uncompleted" ? `<span class="gx-badge gx-text-white history_details_dues" id="history_details_dues_${v.row_id}" data=${v.row_id} style="background-color: #e58620; cursor:pointer">Details</span>` : ''}
                            // <span class="gx-badge gx-text-white history_details" id="history_details_${v.customer_id}" data=${v.row_id} style="background-color: #1DCE8E; cursor:pointer">Details</span>


                            $("#sales_history").html(list_whs);
                            $(".load_pro").hide()
                            $("#sales_history").show()

                        } else {
                            $("#sales_history").html(
                                `<tr data-row-key="1" class="ant-table-row ant-table-row-level-0 gradeA product_table " role="row" style="text-align:center"
            ><td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left">No Record</td><td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left"></td></tr>`
                            );
                            $(".load_pro").hide()
                            $("#sales_history").show()

                        }
                        $('#pagination_dem').twbsPagination({
                            totalPages: Math.ceil(response.total_rows / limit),
                            visiblePages: 10,
                            onPageClick: function(event, page) {
                                list_sales_history(page);
                            }
                        });
                    } else if (response.status == "400") {
                        // coder error message
                        $("#sales_history").html(
                            `<tr data-row-key="1" class="ant-table-row ant-table-row-level-0 gradeA product_table " role="row" style="text-align:center"
                         ><td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left">No Record</td><td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left"></td>
                         <td class="ant-table-cell" style="text-align:left"></td></tr>`
                        );
                        $(".load_pro").hide()
                        $("#sales_history").show()

                        console.log(response);
                    } else if (response.status == "401") {
                        //user error message
                        console.log(response);
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
        <script src="jquery.disable-autofill.js"></script>
        <script>
        </script>
        <script type="text/javascript" src="js/pos"></script>


        <?php
include("_common/footer.php");
?>