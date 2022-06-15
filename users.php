<?php
include("_common/header.php");
?>

<!-- Site Content Wrapper -->
<div class="dt-content-wrapper">

    <!-- Site Content -->
    <div class="dt-content">

        <div class="dt-page__header" style="display: flex; justify-content: space-between;">
            <h1 class="dt-page__title" style="padding:0px 10px">Users</h1>
            <div style="display: flex;">
                <form class="search-box d-none d-lg-block" style="width: 200px; ">
                    <input class="form-control border-0 filter_pro" placeholder="Search user..."
                        style="border:2px solid #64c6fd !important">
                </form>
                <button type="button" class="btn add_user btn-primary btn-lg"
                    style="display:flex; height:35px; background-color: #038FDE;color:white; padding:5px 5px; font-size:15px; margin-left:10px; padding:7px"><span
                        style="margin-right: 5px;margin-top: 1px;" role="img" aria-label="add item"
                        class="anticon anticon-download"><svg viewBox="64 64 896 896" focusable="false" class=""
                            data-icon="download" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                            <path
                                d="M505.7 661a8 8 0 0012.6 0l112-141.7c4.1-5.2.4-12.9-6.3-12.9h-74.1V168c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v338.3H400c-6.7 0-10.4 7.7-6.3 12.9l112 141.8zM878 626h-60c-4.4 0-8 3.6-8 8v154H214V634c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v198c0 17.7 14.3 32 32 32h684c17.7 0 32-14.3 32-32V634c0-4.4-3.6-8-8-8z">
                            </path>
                        </svg></span><span>Add User</span></button>

                <div class="dropdown open" id="export_file" style="">
                    <button class="btn export_file" type="button" style="background-color: #fa8c16;">
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
                    <ul class="dropdown-menu cv" aria-labelledby="dropdownMenuButton"
                        style="display:none; min-width: 100px;">
                        <li><a class="dropdown-item export_file" id="download_pdf" style="padding: 10px;"
                                download="">Export</a></li>
                        <li>
                        </li>
                        <li><a class="dropdown-item import_file" id="download_csv" style="padding: 10px;"
                                download="">Import</a></li>
                    </ul>
                </div>

            </div>
        </div>


        <div class="ant-row">

            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-24 user_tab">


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
                                                                style="width: 10%">
                                                                <div class="ant-table-selection">
                                                                    <label class="ant-checkbox-wrapper">
                                                                        <span class="ant-checkbox"><input
                                                                                type="checkbox"
                                                                                class="ant-checkbox-input"
                                                                                value="" /><span
                                                                                class="ant-checkbox-inner"></span></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <th class="ant-table-cell" style="width: 30%">Name</th>
                                                            <th class="ant-table-cell" style="width: 30%">Email</th>

                                                            <th class="ant-table-cell" style="width: 30%">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="ant-table-tbody list_users" id="list_users">

                                                        <!--

                                                        <tr data-row-key="1" class="ant-table-row ant-table-row-level-0">
                                                            <td class="ant-table-cell ant-table-selection-column">
                                                                <label class="ant-checkbox-wrapper">
                                                                    <span class="ant-checkbox"><input name="John Brown" type="checkbox" class="ant-checkbox-input" value="" /><span class="ant-checkbox-inner"></span></span>
                                                                </label>
                                                            </td>
                                                            <td class="ant-table-cell"><span class="gx-link">John Brown</span></td>

                                                            <td class="ant-table-cell"><span class="gx-link">John Brown</span></td>

                                                            <td class="ant-table-cell" style="text-align:left; display:flex;">
                                                            <span>
                                                            <i class="fas fa-lock" style="font-weight: 600;
                                                                font-size: 16px;
                                                                padding-right: 10px;"></i>
                                                            </span>
                                                            <span class="gx-badge gx-text-white history_edit" id="history_edit_25" data="25" lang-value="25" data-value="sarah" lang="09023456879" style="background-color: #d43f3a; cursor:pointer">Delete User</span>

                                                            <span class="gx-badge gx-text-white history_details" id="history_details_25" data="25" style="background-color: #f0ad4e; cursor:pointer">Suspend User</span>

                                                            <span class="ant-btn-loading-icon dt_loader_details_25" style="display:none"><span role="img" aria-label="loading" class="anticon anticon-loading"><svg viewBox="0 0 1024 1024" focusable="false" class="anticon-spin" data-icon="loading" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M988 548c-19.9 0-36-16.1-36-36 0-59.4-11.6-117-34.6-171.3a440.45 440.45 0 00-94.3-139.9 437.71 437.71 0 00-139.9-94.3C629 83.6 571.4 72 512 72c-19.9 0-36-16.1-36-36s16.1-36 36-36c69.1 0 136.2 13.5 199.3 40.3C772.3 66 827 103 874 150c47 47 83.9 101.8 109.7 162.7 26.7 63.1 40.2 130.2 40.2 199.3.1 19.9-16 36-35.9 36z"></path></svg></span></span>
                                                            </td>
                                                        </tr>

                                                        -->


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="load_pro"
                                        style="display:flex; justify-content: center; margin-top: 10px; ">
                                        <span class="ant-btn-loading-icon dt_loader_details"><span role="img"
                                                aria-label="loading" class="anticon anticon-loading"><svg
                                                    viewBox="0 0 1024 1024" focusable="false" class="anticon-spin"
                                                    data-icon="loading" width="2em" height="2em" fill="currentColor"
                                                    aria-hidden="true">
                                                    <path
                                                        d="M988 548c-19.9 0-36-16.1-36-36 0-59.4-11.6-117-34.6-171.3a440.45 440.45 0 00-94.3-139.9 437.71 437.71 0 00-139.9-94.3C629 83.6 571.4 72 512 72c-19.9 0-36-16.1-36-36s16.1-36 36-36c69.1 0 136.2 13.5 199.3 40.3C772.3 66 827 103 874 150c47 47 83.9 101.8 109.7 162.7 26.7 63.1 40.2 130.2 40.2 199.3.1 19.9-16 36-35.9 36z">
                                                    </path>
                                                </svg></span></span>
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



            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-24 add_user_form"
                style="display: none;">

                <!-- Card -->
                <div class="dt-card" style="width: 800px;">

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
                                <label for="normal-input-4" class="col-md-2 col-sm-3 col-form-label text-sm-right">User
                                    Email</label>
                                <div class="col-md-10 col-sm-9">
                                    <input type="text" id="user_email" class="cat_name form-control required">
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
                                class="btn btn-primary send_user btn-block">Send</button>
                        </form>
                        <!-- /form -->

                    </div>
                    <!-- /card body -->

                </div>
                <!-- /card -->


            </div>

        </div>


        <div class="swal2-container swal2-center create_product swal2-fade swal2-shown"
            style="display:none; overflow-y: auto;">
            <div aria-labelledby="swal2-title" aria-describedby="swal2-content"
                class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive"
                aria-modal="true" style="display: flex;">
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

                    <div id="swal2-content" style="display: block;"></div>

                    <input class="swal2-input" style="display: none;"><input type="file" class="swal2-file"
                        style="display: none;">
                    <div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select
                        class="swal2-select" style="display: none;"></select>
                    <div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox"
                        class="swal2-checkbox" style="display: none;"><input type="checkbox"><span
                            class="swal2-label"></span></label><textarea class="swal2-textarea"
                        style="display: none;"></textarea>
                    <div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div>
                </div>
                <div class="swal2-actions" style="display: flex;">

                    <button type="button" class="swal2-confirm swal2-styled" aria-label=""
                        style="border-left-color: rgb(3, 143, 222); border-right-color: rgb(3, 143, 222);">OK</button><button
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
                <!-- /modal content -->

            </div>
        </div>


    </div>
    <!-- /site content -->

</div>
<!-- /site content wrapper -->

<!-- <script type="text/javascript" src="js/dashboard.js?v=70"></script> -->
<script>
$(document).ready(function() {
    $(document).on("click", ".add_user", function() {
        $(".user_tab").toggle()
        $(".add_user_form").toggle()
    })

    list_users("")


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
            var cus = cus_id ? cus_id : ""
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
            },
            url: base_url + "/api/pos/exportUsers",
            data: {
                company_id: company_id,
                store_id: localStorage.getItem("store_id"),

                export_type: file_format,
                password: password ? password : '',
                return_type: return_type,
                ID_lists: items_list
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

    $(document).on("click", ".send_user", function() {
        send_user();
    })

    function send_user() {
        let email = $("#user_email").val();


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


        $(".send_user").hide();
        $(".dt-loader").show();


        $.ajax({
            type: "POST",
            dataType: "json",
            headers: {
                        'Authorization':localStorage.getItem('token'),
            },
            url: base_url + "/api/pos/add_module_user",
            data: {
                "module_id": 15,
                    "store_id": localStorage.getItem("store_id"),

                "company_id": localStorage.getItem('company_id'),
                "email": $("#user_email").val()
            },

            success: function(response) {
                if (response.status == "200") {
                    console.log(response);

                    $(".create_product").show();
                } else if (response.status == "400") {
                    console.log(response);
                    alert(response.msg);
                    // $("#edit_modal").hide();
                    $("#for_err").html(response.msg);
                    $("#err_msg").remove();
                    if (!($("#err_msg").length)) {
                        $(`<h4 id="err_msg" style="padding:10px; margin:0px">${response.msg}</h4>`)
                            .insertAfter(".swal2-error");
                    }

                    $(".edit_error").show();
                  

                    setTimeout(() => {
                        $(".edit_error").hide();
                        $("#err_msg").remove();
                    }, 5000);

                      $(".dt-loader").hide();
                      $(".send_user").show();


                } else if (response.status == "401") {
                    //user error message
                    console.log(response);
                    alert(response.msg);

                    // $("#edit_modal").hide();
                    $("#for_err").html(response.msg);
                    $("#err_msg").remove();
                    if (!($("#err_msg").length)) {
                        $(`<h4 id="err_msg" style="padding:10px; margin:0px">${response.msg}</h4>`)
                            .insertAfter(".swal2-error");
                    }

                    $(".edit_error").show();

                    setTimeout(() => {
                        $(".edit_error").hide();
                        $("#err_msg").remove();
                        location.reload()

                    }, 5000);

                      $(".dt-loader").hide();
                      $(".send_user").show();
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

    $(document).on("click", ".unsus_user", function() {
        var id = $(this).attr("data");
        // var r = confirm("Are you sure you want to delete this user?");
        unsuspend_user(id);

        // if (r == true) {
        // }
    });


    function unsuspend_user(id) {
        let company_id = localStorage.getItem("company_id");

        $.ajax({
            type: "POST",
            dataType: "json",
              headers: {
                        'Authorization':localStorage.getItem('token'),
            },
            cache: false,
            url: base_url + "/api/user/unSuspend",
            data: {
                company_id: company_id,
                store_id: localStorage.getItem("store_id"),

                module_id: 15,
                user_id: id
            },

            success: function(response) {
                if (response.status == "200") {
                    console.log(response);

                    $("#edit_modal").hide();
                    $("#edit_modal").hide();
                    $(`#unsus_user_${id}`).remove();
                    $(`<span class="gx-badge gx-text-white sus_user" id="sus_user_${id}" data="${id}" style="background-color: #f0ad4e; cursor:pointer">Suspend User</span>`)
                        .insertAfter(`#del_user_${id}`);


                    $(".for_edit").show();

                    setTimeout(() => {
                        $(".for_edit").hide();
                    }, 2000);

                    // location.reload();
                } else if (response.status == "400") {
                    // coder error message

                    console.log(response);
                    $("#edit_modal").hide();
                    $(".edit_error").show();
                    $("#for_err").html(response.msg);

                    setTimeout(() => {
                        $(".edit_error").hide();
                    }, 2000);
                } else if (response.status == "401") {
                    //user error message
                    console.log(response);
                    $("#edit_modal").hide();
                    $(".edit_error").show();
                    $("#for_err").html(response.msg);

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

    $(document).on("click", ".sus_user", function() {
        var id = $(this).attr("data");
        // var r = confirm("Are you sure you want to delete this user?");
        suspend_user(id);

        // if (r == true) {
        // }
    });


    function suspend_user(id) {
        let company_id = localStorage.getItem("company_id");

        $.ajax({
            type: "POST",
            dataType: "json",
            cache: false,
              headers: {
                        'Authorization':localStorage.getItem('token'),
            },
            url: base_url + "/api/user/suspend",
            data: {
                company_id: company_id,
                store_id: localStorage.getItem("store_id"),

                module_id: 15,
                user_id: id
            },

            success: function(response) {
                if (response.status == "200") {
                    console.log(response);

                    $("#edit_modal").hide();
                    $("#edit_modal").hide();
                    $(`#sus_user_${id}`).css('background-color', 'gray');
                    $(`#sus_user_${id}`).remove()
                    $(`<span class="gx-badge gx-text-white unsus_user" id="unsus_user_${id}" data="${id}" style="background-color: gray; cursor:pointer">Unsuspend</span>`)
                        .insertAfter(`#del_user_${id}`);


                    $(".for_edit").show();

                    setTimeout(() => {
                        $(".for_edit").hide();
                    }, 2000);

                    // location.reload();
                } else if (response.status == "400") {
                    // coder error message

                    console.log(response);
                    $("#edit_modal").hide();
                    $(".edit_error").show();
                    $("#for_err").html(response.msg);

                    setTimeout(() => {
                        $(".edit_error").hide();
                    }, 2000);
                } else if (response.status == "401") {
                    //user error message
                    console.log(response);
                    $("#edit_modal").hide();
                    $(".edit_error").show();
                    $("#for_err").html(response.msg);

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

    $(document).on("click", ".del_user", function() {
        var id = $(this).attr("data");
        var r = confirm("Are you sure you want to delete this user?");
        if (r == true) {
            delete_user(id);
        }
    });


    function delete_user(id) {
        let company_id = localStorage.getItem("company_id");

        $.ajax({
            type: "POST",
            dataType: "json",
              headers: {
                        'Authorization':localStorage.getItem('token'),
            },
            cache: false,
            url: base_url + "/api/user/remove_user_from_this_module",
            data: {
                company_id: company_id,
                store_id: localStorage.getItem("store_id"),

                module_id: 15,
                user_id: id
            },

            success: function(response) {
                if (response.status == "200") {
                    console.log(response);

                    $("#edit_modal").hide();
                    $("#edit_modal").hide();
                    $(`.even_${id}`).remove();

                    $(".for_edit").show();

                    setTimeout(() => {
                        $(".for_edit").hide();
                    }, 2000);

                    // location.reload();
                } else if (response.status == "400") {
                    // coder error message

                    console.log(response);
                    $("#edit_modal").hide();
                    $(".edit_error").show();
                    $("#for_err").html(response.msg);

                    setTimeout(() => {
                        $(".edit_error").hide();
                    }, 2000);
                } else if (response.status == "401") {
                    //user error message
                    console.log(response);
                    $("#edit_modal").hide();
                    $(".edit_error").show();
                    $("#for_err").html(response.msg);

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

    function list_users(page) {
        let company_id = localStorage.getItem("company_id");

        // let date_range = localStorage.getItem("company_id");
        $("#list_users").hide();
        $(".load_pro").show();

        if (page == "") {
            var page = 1;
        }
        var limit = 20;


        var listObj = document.getElementById(`select_item_contact`);
        console.log(listObj);
        console.log($("#select_item_contact").val())
        if ($("#select_item_contact").val()) {
            var datalist = document.getElementById(listObj.getAttribute("list"));
            var fa = datalist.options.namedItem(listObj.value);
            console.log(fa)

            var cus_id = fa.getAttribute('data-value');
            var cus = cus_id ? cus_id : ""
        }

        $.ajax({
            type: "POST",
            dataType: "json",
            cache: false,
              headers: {
                        'Authorization':localStorage.getItem('token'),
                       
            },
            url: base_url + "/api/user/fetch_list_of_module_invitees",
            data: {
                "company_id": company_id,
                    "store_id": localStorage.getItem("store_id"),

                "module_id": 15,
                "limit": limit,
                "page": page
            },
            success: function(response) {
                if (response.status == "200") {
                    console.log(response.data);
                    if (response.data.length > 0) {
                        var k = 1;
                        var list_whs = "";


                        $.each(response.data, function(i, v) {
                            list_whs += `
             <tr data-row-key="1" class="ant-table-row ant-table-row-level-0 gradeA product_table even_${v.row_id}" role="row" style="text-align:center" data-value="${v.email}"
             data="${v.row_id}" >

             <td class="ant-table-cell ant-table-selection-column">
                  <label class="ant-checkbox-wrapper">
                      <span class="ant-checkbox"><input name="John Brown" type="checkbox" class="ant-checkbox-input" value="" /><span class="ant-checkbox-inner"></span></span>
                  </label>
              </td>
  
              <td class="ant-table-cell" style="text-align:left" id="for_user_${v.user_id}">${v.firstname} ${v.lastname}</td>

              <td class="ant-table-cell" style="text-align:left" id="for_email_${v.user_id}">${v.email}</td>

              <td class="ant-table-cell" style="text-align:left; display:flex;">
                   <span>
                     <a href="stores?id=${v.user_id}">
                                                            <i class="fas fa-lock" style="font-weight: 600;
                                                                font-size: 16px;
                                                                padding-right: 10px;color:gray"></i>
                                                            </a>
                                                            </span>
                                                            ${ v.is_admin == "no" ?
                                                            `<span class="gx-badge gx-text-white del_user" id="del_user_${v.user_id}" data="${v.user_id}"  style="background-color: #d43f3a; cursor:pointer">Delete User</span>

                                                            ${v.status == "suspended" ?  `<span class="gx-badge gx-text-white unsus_user" id="unsus_user_${v.user_id}" data="${v.user_id}" style="background-color: gray; cursor:pointer">Unsuspend</span>` : 
                                                            `<span class="gx-badge gx-text-white sus_user" id="sus_user_${v.user_id}" data="${v.user_id}" style="background-color: #f0ad4e; cursor:pointer">Suspend User</span>` }`
                                                            : ''
                                                              }
                                                            
                                                            <span class="ant-btn-loading-icon dt_loader_details_25" style="display:none"><span role="img" aria-label="loading" class="anticon anticon-loading"><svg viewBox="0 0 1024 1024" focusable="false" class="anticon-spin" data-icon="loading" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M988 548c-19.9 0-36-16.1-36-36 0-59.4-11.6-117-34.6-171.3a440.45 440.45 0 00-94.3-139.9 437.71 437.71 0 00-139.9-94.3C629 83.6 571.4 72 512 72c-19.9 0-36-16.1-36-36s16.1-36 36-36c69.1 0 136.2 13.5 199.3 40.3C772.3 66 827 103 874 150c47 47 83.9 101.8 109.7 162.7 26.7 63.1 40.2 130.2 40.2 199.3.1 19.9-16 36-35.9 36z"></path></svg></span></span>
                                                            </td>

           </tr>`;


                            k++;
                        });

                        $("#list_users").html(list_whs);
                        $(".load_pro").hide()
                        $("#list_users").show()

                    } else {
                        $("#list_users").html(
                            `<tr data-row-key="1" class="ant-table-row ant-table-row-level-0 gradeA product_table " role="row" style="text-align:center"
                         ><td class="ant-table-cell" style="text-align:left"></td>
                         <td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left">No Record</td><td class="ant-table-cell" style="text-align:left"></td></tr>`
                        );
                        $(".load_pro").hide()
                        $("#list_users").show()

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
                    $("#list_users").html(
                        `<tr data-row-key="1" class="ant-table-row ant-table-row-level-0 gradeA product_table " role="row" style="text-align:center"
                         ><td class="ant-table-cell" style="text-align:left"></td>
                        <td class="ant-table-cell" style="text-align:left">${response.msg}</td><td class="ant-table-cell" style="text-align:left"></td></tr>`
                    );
                    $(".load_pro").hide()
                    $("#list_users").show()

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
// })
</script>
<?php
include("_common/footer.php");
?>