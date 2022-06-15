<?php
include("_common/header.php");
?>

<style type="text/css">
       @media only screen and (max-width: 600px){
        .for_mob_dash{
            display: block !important;
        }
        .for_mob_dash input{
            margin-bottom: 10px;
        }
        button#filter{
            width: 100%;
        }
       }
</style>

<!-- Site Content Wrapper -->
<div class="dt-content-wrapper">

    <!-- Site Content -->
    <div class="dt-content" id="dashboard_admin">

        <div class="dt-page__header ad_min" style="display: flex; justify-content:space-between;">
            <h1 class="dt-page__title ">Dashboard </h1>
            <!-- <h1 class="dt-page__title store_nm"></h1> -->

        </div>


        <div class="ant-row">

            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-24">

                <div class="ant-card gx-card-widget  ant-card-bordered">
                    <!-- <div class="ant-card-head">
                            <div class="ant-card-head-wrapper"><div class="ant-card-head-title">Filter</div></div>
                        </div> -->
                    <div class="ant-card">
                        <!-- <div class="ant-card-head">
                            <div class="ant-card-head-wrapper"><div class="ant-card-head-title">Filter</div></div>
                        </div> -->
                        <div class="ant-card-body for_mob_dash" style="display: flex;">

                            <!-- <div class="col-sm-3 col-xs-12">
                            <label>Receipt Number</label>
                            <input type="text" class="ant-input" id="receipt_number">
                         </div> -->

                            <div class="col-sm-3 col-xs-12">
                                <label>Store</label>

                                <datalist id="options">

                                </datalist>

                                <input list="options" class="form-control required1" id="select_item"
                                    autocomplete="off">
                                <!-- <input type="text" class="ant-input" value=""> -->
                            </div>



                            <div class="col-sm-3 col-xs-12">
                                <label>Cashier</label>

                                <datalist id="options_cashier">

                                </datalist>

                                <input list="options_cashier" class="form-control required1" id="select_item_cashier"
                                    autocomplete="off">
                                <!-- <input type="text" class="ant-input" value=""> -->
                            </div>

                            <!-- <div class="col-sm-3 col-xs-12">
                            <label>Store</label>
                            <input type="text" class="ant-input" id="amount">
                                </div>  -->

                            <!-- <div class="col-sm-3 col-xs-12">
                                                <label>Date</label>
                                                <input type="text" class="ant-input" value="">
                                </div> -->

                            <div class="col-sm-3 col-xs-12" id="show_custom" style="display: ">
                                <label>Date Range</label>
                                <input type="text" class="form-control" id="date_range" autocomplete="off"
                                    onkeydown="return false;">
                            </div>



                            <!-- <div class="ant-picker gx-mb-3 gx-w-100 ant-picker-focused"><div class="ant-picker-input"><input placeholder="Select date" title="" size="12" autocomplete="off" value=""><span class="ant-picker-suffix"><span role="img" aria-label="calendar" class="anticon anticon-calendar"><svg viewBox="64 64 896 896" focusable="false" class="" data-icon="calendar" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M880 184H712v-64c0-4.4-3.6-8-8-8h-56c-4.4 0-8 3.6-8 8v64H384v-64c0-4.4-3.6-8-8-8h-56c-4.4 0-8 3.6-8 8v64H144c-17.7 0-32 14.3-32 32v664c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V216c0-17.7-14.3-32-32-32zm-40 656H184V460h656v380zM184 392V256h128v48c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8v-48h256v48c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8v-48h128v136H184z"></path></svg></span></span></div></div> -->



                            <button type="button" class="btn" id="filter"
                                style="margin-top: 25px; background-color:#1DCE8E; color:#fff">Go</button>

                        </div>


                    </div>
                </div>
            </div>

        </div>

        <!-- <div class="dt-loader-container" style="position: static;" style="display: none;">
            <div class="dt-loader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10">
                    </circle>
                </svg>
            </div>
        </div> -->


        <div class="ant-row dashboard-row">




            <div class="ant-col gx-col-full ant-col-xs-24 ant-col-sm-12 ant-col-md-12 ant-col-lg-12 ant-col-xl-6">
                <a href="#" data-toggle="tooltip" data-placement="top" title="This is the total amount sold within all available stores from start time to present">
                <div class="ant-card gx-card-widget ant-card-bordered">
                    <div class="ant-card-body">
                        <div class="gx-media gx-align-items-center gx-flex-nowrap">
                            <div class="gx-mr-lg-4 gx-mr-3">
                                <i class="icon icon-chart gx-fs-xlxl gx-text-grey gx-d-flex"></i>
                            </div>

                            <div class="dt-loader" id="total_sales">
                                <svg class="circular" viewBox="25 25 50 50">
                                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2"
                                        stroke-miterlimit="10">
                                    </circle>
                                </svg>
                            </div>
                            <div class="gx-media-body" id="total_sales_data">
                                <h1 class="gx-fs-xxxl gx-font-weight-medium gx-mb-1 total_sales"></h1>
                                <p class="gx-text-grey gx-mb-0" style="font-size: 18px">Total Sales</p>
                            </div>
                        </div>
                    </div>
                </div>
             </a>
            </div>

            <div class="ant-col gx-col-full ant-col-xs-24 ant-col-sm-12 ant-col-md-12 ant-col-lg-12 ant-col-xl-6">
                   <a href="#" data-toggle="tooltip" data-placement="top" title="Total number of items sold across all available stores">
                <div class="ant-card gx-card-widget ant-card-bordered">
                    <div class="ant-card-body">
                        <div class="gx-media gx-align-items-center gx-flex-nowrap">
                            <div class="gx-mr-lg-4 gx-mr-3"><i
                                    class="icon icon-shopping-cart gx-fs-xlxl gx-text-grey gx-d-flex"
                                    style="font-size: 45px;"></i></div>
                            <div class="dt-loader" id="total_sold">
                                <svg class="circular" viewBox="25 25 50 50">
                                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2"
                                        stroke-miterlimit="10">
                                    </circle>
                                </svg>
                            </div>
                            <div class="gx-media-body" id="total_sold_data">
                                <h1 class="gx-fs-xxxl gx-font-weight-medium gx-mb-1 total_sold"></h1>
                                <p class="gx-text-grey gx-mb-0" style="font-size: 18px">Items Sold</p>
                            </div>
                        </div>
                    </div>
                </div>
              </a>
            </div>

            <div class="ant-col gx-col-full ant-col-xs-24 ant-col-sm-12 ant-col-md-12 ant-col-lg-12 ant-col-xl-6">

                <a href="#" data-toggle="tooltip" data-placement="top" title="Total number of receipts generated">
                <div class="ant-card gx-card-widget ant-card-bordered">
                    <div class="ant-card-body">
                        <div class="gx-media gx-align-items-center gx-flex-nowrap">
                            <div class="gx-mr-lg-4 gx-mr-3"><i
                                    class="icon icon-orders gx-fs-xlxl gx-text-geekblue gx-d-flex"
                                    style="font-size: 45px;"></i></div>
                            <div class="dt-loader" id="receipts">
                                <svg class="circular" viewBox="25 25 50 50">
                                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2"
                                        stroke-miterlimit="10">
                                    </circle>
                                </svg>
                            </div>

                            <div class="gx-media-body" id="receipts_data">
                                <h1 class="gx-fs-xxxl gx-font-weight-medium gx-mb-1 total_receipts"></h1>
                                <p class="gx-text-grey gx-mb-0" style="font-size: 18px">Receipts</p>
                            </div>
                        </div>
                    </div>
                </div>
              </a>
            </div>

            <div class="ant-col gx-col-full ant-col-xs-24 ant-col-sm-12 ant-col-md-12 ant-col-lg-12 ant-col-xl-6">
                <a href="#" data-toggle="tooltip" data-placement="top" title=" This is the total amount of balance to paid for uncompleted transactions">
                <div class="ant-card gx-card-widget ant-card-bordered">
                    <div class="ant-card-body">
                        <div class="gx-media gx-align-items-center gx-flex-nowrap">
                            <div class="gx-mr-lg-4 gx-mr-3"><i
                                    class="icon icon-orders gx-fs-xlxl gx-text-geekblue gx-d-flex"
                                    style="font-size: 45px;"></i></div>
                            <div class="dt-loader" id="credit">
                                <svg class="circular" viewBox="25 25 50 50">
                                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2"
                                        stroke-miterlimit="10">
                                    </circle>
                                </svg>
                            </div>
                            <div class="gx-media-body" id="credit_data">
                                <h1 class="gx-fs-xxxl gx-font-weight-medium gx-mb-1 total_sales_credit"></h1>
                                <p class="gx-text-grey gx-mb-0" style="font-size: 18px">Credits</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            </div>

        </div>




        <div class="modal fade show dashboard-help" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="model-8"
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


        <div class="ant-row dashboard-row">

            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-12">

                <div class="ant-card gx-card-widget ant-card-bordered"
                    style="min-height:400px;max-width: 100%;overflow: auto;">
                    <div class="ant-card-head">
                        <div class="ant-card-head-wrapper">
                            <div class="ant-card-head-title">Sales Volume <br><span style="color: #C23531;"> (N/B: <span style="color: #C23531; text-transform: lowercase;"> Only monthly data is fetched for any data range search)</span></span></div>
                        </div>
                    </div>
                    <div class="dt-loader" id="main_transac_loader" style="position: absolute;
                    left: 50%;top: 0;">
                        <svg class="circular" viewBox="25 25 50 50">
                            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2"
                                stroke-miterlimit="10">
                            </circle>
                        </svg>
                    </div>
                    <div class="ant-card-body responsive-container" id="main_transac" style="width: 99%; height:400px;">

                    </div>


                </div>

            </div>

            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-12">

                <div class="ant-card gx-card-widget  ant-card-bordered"
                    style="min-height:400px;max-width: 100%;overflow: auto;">
                    <div class="ant-card-head">
                        <div class="ant-card-head-wrapper">
                            <div class="ant-card-head-title">Sales By Rep (Top 5)</div>
                        </div>
                    </div>
                    <div class="dt-loader" id="salez_by_rp_loader" style="position: absolute;
                    left: 50%;top: 0;">
                        <svg class="circular" viewBox="25 25 50 50">
                            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2"
                                stroke-miterlimit="10">
                            </circle>
                        </svg>
                    </div>
                    <div class="ant-card-body" id="salez_by_rp" style="width: 99%; height:400px;">

                    </div>
                </div>
            </div>

        </div>








        <div class="ant-row dashboard-row">




            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-12">

                <div class="ant-card gx-card-widget  ant-card-bordered"
                    style="min-height:400px;max-width: 100%;overflow: auto;">
                    <div class="ant-card-head">
                        <div class="ant-card-head-wrapper">
                            <div class="ant-card-head-title">Top Selling Products</div>
                        </div>
                    </div>
                    <div class="dt-loader" id="salez_by_itm_loader" style="position: absolute;
                    left: 50%;top: 0;">
                        <svg class="circular" viewBox="25 25 50 50">
                            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2"
                                stroke-miterlimit="10">
                            </circle>
                        </svg>
                    </div>

                    <div class="ant-card-body" id="salez_by_itm" style="width: 99%; height:400px;">

                    </div>
                </div>
            </div>

            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-12">

                <div class="ant-card gx-card-widget  ant-card-bordered" style="min-height:400px">
                    <div class="ant-card-head">
                        <div class="ant-card-head-wrapper">
                            <div class="ant-card-head-title">Customer Count <br><span style="color: #C23531;"> (N/B: <span style="color: #C23531; text-transform: lowercase;"> Only monthly data is fetched for any data range search)</span></span></div>
                        </div>
                    </div>
                    <div class="dt-loader" id="card_credit_cash_loader" style="position: absolute;
                    left: 50%;top: 0;">
                        <svg class="circular" viewBox="25 25 50 50">
                            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2"
                                stroke-miterlimit="10">
                            </circle>
                        </svg>
                    </div>
                    <div class="ant-card-body" id="card_credit_cash" style="width: 99%;height:400px;">

                    </div>
                </div>
            </div>

        </div>

        <!-- <div class="ant-row">

            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-24">
                
                    <div class="ant-card gx-card-widget  ant-card-bordered">
                        <div class="ant-card-head">
                            <div class="ant-card-head-wrapper"><div class="ant-card-head-title">Customer Count</div></div>
                        </div>
                        <div class="ant-card-body">
                            Hello
                        </div>
                    </div>
            </div>

        </div> -->


        <div class="ant-row dashboard-row">

            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-12">

                <div class="ant-card gx-card-widget  ant-card-bordered"
                    style="min-height:400px;max-width: 100%;overflow: auto;">
                    <div class="ant-card-head">
                        <div class="ant-card-head-wrapper">
                            <div class="ant-card-head-title">Cash/Card/Credit</div>
                        </div>
                    </div>
                    <div class="dt-loader" id="cd_cr_cash_loader" style="position: absolute;
                    left: 50%;top: 0;">
                        <svg class="circular" viewBox="25 25 50 50">
                            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2"
                                stroke-miterlimit="10">
                            </circle>
                        </svg>
                    </div>
                    <div class="ant-card-body" id="cd_cr_cash" style="width: 99%;height:400px;">

                    </div>
                </div>

            </div>

            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-12 sales_by_outlet"
                id="sales_by_outlet">

                <div class="ant-card gx-card-widget  ant-card-bordered"
                    style="min-height:400px;max-width: 100%;overflow: auto;">
                    <div class="ant-card-head">
                        <div class="ant-card-head-wrapper">
                            <div class="ant-card-head-title">Sales by Outlets</div>
                        </div>
                    </div>
                    <div class="dt-loader" id="slz_by_outlet_loader" style="position: absolute;
                    left: 50%;top: 0;">
                        <svg class="circular" viewBox="25 25 50 50">
                            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2"
                                stroke-miterlimit="10">
                            </circle>
                        </svg>
                    </div>
                    <div class="ant-card-body" id="slz_by_outlet" style="width: 99%;height:400px;">

                    </div>
                </div>

            </div>

        </div>




    </div>
    <!-- /site content -->

</div>
<!-- /site content wrapper -->

<script>
var base_url = window.location.origin;

$(document).ready(function() {
    setTimeout(() => {
        total_sales()
        total_sold()
        total_receipts()
        total_sales_credit()
        load_cus_for_filter("")
        load_cashier_for_filter("")

    }, 1000);

     

      $('[data-toggle="tooltip"]').tooltip();   

        // fetch_store_list()
        // fetch_user_module_roles()
        // total_sales()
        // total_sold()
        // total_receipts()
        // total_sales_credit()
        // load_cus_for_filter("")
        // load_cashier_for_filter("")


        function load_cus_for_filter(page) {
            if (page == "") {
                var page = 1;
            }
            var limit = 1000;

            var company_id = localStorage.getItem('company_id');


            var list_whs = `<option name="All Stores" value="All Stores" data-value="0" selected></option>`;
            $.ajax({

                type: "GET",
                dataType: "json",
                cache: false,
                headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
                url: base_url + "/api/pos/storeList",
                data: {
                    "company_id": company_id,
                "store_id": localStorage.getItem('store_id'),
                    
                    // "customer_id": "",
                    // "phone": "",
                    // "no_transactions": "",
                },

                success: function(response) {

                    var k = 1;
                    console.log(response.data)
                    $(response.data).each(function(i, v) {
                        list_whs +=
                            `<option name="${v.store_name}" value="${v.store_name}" data-value="${v.store_id}"></option>`;
                    })

                    $(`#options`).html(list_whs);
                },
                error: function() {
                    console.log(response);
                }

            });

        }



        function load_cashier_for_filter(page) {
            if (page == "") {
                var page = 1;
            }
            var limit = 1000;
            var store_id = localStorage.getItem('store_id');

            var company_id = localStorage.getItem('company_id');
            if ($("#user_perm_status").html() == "super_admin" || $("#monitor_status").html() == "monitor_role") {
              store_id = ""
            }
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
                    "store_id": store_id
                    // "customer_id": "",
                    // "phone": "",
                    // "no_transactions": "",
                },

                success: function(response) {

                    var k = 1;
                    console.log(response.data)
                    $(response.data).each(function(i, v) {
                        list_whs +=
                            `<option name='${v.cashier_name}' value='${v.cashier_name}' data-value=${v.cashier_id}></option>`;
                    })

                    $(`#options_cashier`).html(list_whs);
                },
                error: function() {
                    console.log(response);
                }

            });

        }


        function get_Item() {
            var listObj = document.getElementById("select_item");
            console.log(listObj);
            var datalist = document.getElementById(listObj.getAttribute("list"));
            console.log(datalist);

            var fa = datalist.options.namedItem(listObj.value);
            console.log(datalist.options.namedItem(listObj.getAttribute("data-value")))

            console.log(fa)
            console.log(fa.getAttribute("data"))
            if (fa.getAttribute("data")) {
                var sku = fa.getAttribute("data");
                $(`#holds_itms_id_${id}`).html(`SKU: ${sku}`);
                $(`#holds_itms_id_${id}`).show()
            } else {
                $(`#holds_itms_id_${id}`).hide()
            }
            // console.log(fa.html());

            var selected = fa.getAttribute('data-value');
            console.log(selected)

            // console.log($(`#select_item_items_${listid}`).val());
            // $("#myInput").val($('option[value='+this.value+']').data("text"))
            $(`#des_${id}`).val($("#select_item"));
        }

        $(document).on("click", "#filter", function() {
            if ($("#select_item_cashier").val()) {
                $("#sales_by_outlet").hide()

            }
            // if ($("#select_item").val() ) {
            //     $("#sales_by_outlet").hide()

            // }
            else {
                $("#sales_by_outlet").show()

            }
            $("#card_credit_cash").hide();
            total_sales()
            total_sold()
            total_receipts()
            total_sales_credit();
            $("#main_transac").hide();
            sales_year_grh();
            $("#salez_by_rp").hide();
            sales_by_emp();
            $("#salez_by_itm").hide();
            sales_by_items();
            $("#card_credit_cash").hide();
            customers_count_grh();
            $("#cd_cr_cash").hide();
            card_credit_cash();
            $("#slz_by_outlet").hide();
            sales_by_outlet();
        })


        function total_sales() {
            var company_id = localStorage.getItem('company_id');
            var store_id = localStorage.getItem('store_id');



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
                var cus = cus_id ? cus_id : localStorage.getItem('user_id');
            }
            if ($("#select_item").val()) {
                var datalist = document.getElementById(select_store.getAttribute("list"));
                var fa = datalist.options.namedItem(select_store.value);
                console.log(fa)
                if (fa == null) {
                    alert('Invalid Input');
                    return false;
                }

                var store = fa.getAttribute('data-value');
                console.log('store', store)
                var stores = store
            }

            $("#total_sales_data").hide();
            $("#total_sales").show();
            var cash = cus
            var store_ = stores

           
            if ($("#user_perm_status").html() == "super_admin" || $("#monitor_status").html() == "monitor_role") {
                if (store_ != null || store_ != undefined) {
                    store_ = store_
                }
                else  {
                   store_ = ""
                }
            }
            else{

                if (store_ == null || store_ == undefined) {
                store_ = store_id
            }
            else if (localStorage.getItem('store_dash')) {
                store_ = localStorage.getItem('store_dash')
            }
            
            }
            



            if (cash == null || cash == undefined) {
                cash = localStorage.getItem('user_id')
            }

            

            $.ajax({
                type: "GET",
                dataType: "json",
                headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
                url: base_url + "/api/pos/totalSales",
                data: {
                    "company_id": company_id,
                    "store_id": store_,
                    "date_range": $("#date_range").val(),
                    "cashier_id": cash,
                },
                timeout: 60000,
                success: function(response) {

                    $(".total_sales").html('₦' + numeral(parseFloat(response.amount)).format(
                        '0.0a'));;
                    // localStorage.setItem('all', response.amount.toLocaleString());
                    console.log(response);
                    $("#total_sales_data").show();
                    $("#total_sales").hide();
                },
                error: function(response) {
                    console.log(response);
                }
            });

        }

        function total_sold() {
            var company_id = localStorage.getItem('company_id');
            var store_id = localStorage.getItem('store_id');




            var listObj = document.getElementById(`select_item_cashier`);
            var select_store = document.getElementById(`select_item`);

            console.log(listObj);
            console.log($("#select_item_cashier").val())
            if ($("#select_item_cashier").val()) {
                var datalist = document.getElementById(listObj.getAttribute("list"));
                var fa = datalist.options.namedItem(listObj.value);
                console.log(fa)
                if (fa == null) {
                    return false;
                }

                var cus_id = fa.getAttribute('data-value');
                var cus = cus_id ? cus_id : localStorage.getItem('user_id');
            }
            if ($("#select_item").val()) {
                var datalist = document.getElementById(select_store.getAttribute("list"));
                var fa = datalist.options.namedItem(select_store.value);
                console.log(fa)
                if (fa == null) {
                    return false;
                }

                var store = fa.getAttribute('data-value');
                console.log('store', store)
                var stores = store
            }


            $("#total_sold_data").hide();
            $("#total_sold").show();

            var cash = cus
            var store_ = stores

            if ($("#user_perm_status").html() == "super_admin" || $("#monitor_status").html() == "monitor_role") {
                if (store_ != null || store_ != undefined) {
                    store_ = store_
                }
                else  {
                   store_ = ""
                }
            }
            else{

                if (store_ == null || store_ == undefined) {
                store_ = store_id
            }
            else if (localStorage.getItem('store_dash')) {
                store_ = localStorage.getItem('store_dash')
            }
            
            }

            // if (store_ == null || store_ == undefined) {
            //     store_ = store_id
            // }

            // if (localStorage.getItem('store_dash')) {
            //     store_ = localStorage.getItem('store_dash')
            // }



            if (cash == null || cash == undefined) {
                cash = localStorage.getItem('user_id')
            }


            $.ajax({
                type: "GET",
                dataType: "json",
                headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
                url: base_url + "/api/pos/totalItemsSold",
                data: {
                    "company_id": company_id,
                    "store_id": store_,
                    "date_range": $("#date_range").val(),
                    "cashier_id": cash,
                },
                timeout: 60000,
                success: function(response) {

                    $(".total_sold").html(`${response.total.toLocaleString()}`);
                    // localStorage.setItem('all', response.amount.toLocaleString());
                    console.log(response);
                    $("#total_sold").hide();
                    $("#total_sold_data").show();
                },
                error: function(response) {
                    console.log(response);
                }
            });

        }

        function total_receipts() {
            var company_id = localStorage.getItem('company_id');
            var store_id = localStorage.getItem('store_id');



            var listObj = document.getElementById(`select_item_cashier`);
            var select_store = document.getElementById(`select_item`);

            console.log(listObj);
            console.log($("#select_item_cashier").val())
            if ($("#select_item_cashier").val()) {
                var datalist = document.getElementById(listObj.getAttribute("list"));
                var fa = datalist.options.namedItem(listObj.value);
                console.log(fa)
                if (fa == null) {
                    return false;
                }

                var cus_id = fa.getAttribute('data-value');
                var cus = cus_id ? cus_id : localStorage.getItem('user_id');
            }
            if ($("#select_item").val()) {
                var datalist = document.getElementById(select_store.getAttribute("list"));
                var fa = datalist.options.namedItem(select_store.value);
                console.log(fa)
                if (fa == null) {
                    return false;
                }

                var store = fa.getAttribute('data-value');
                console.log('store', store)
                var stores = store
            }

            $("#receipts_data").hide();
            $("#receipts").show();
            var cash = cus
            var store_ = stores

            // if (store_ == null || store_ == undefined) {
            //     store_ = store_id
            // }

            // if (localStorage.getItem('store_dash')) {
            //     store_ = localStorage.getItem('store_dash')
            // }
            if ($("#user_perm_status").html() == "super_admin" || $("#monitor_status").html() == "monitor_role") {
                if (store_ != null || store_ != undefined) {
                    store_ = store_
                }
                else  {
                   store_ = ""
                }
            }
            else{

                if (store_ == null || store_ == undefined) {
                store_ = store_id
            }
            else if (localStorage.getItem('store_dash')) {
                store_ = localStorage.getItem('store_dash')
            }
            
            }



            if (cash == null || cash == undefined) {
                cash = localStorage.getItem('user_id')
            }


            $.ajax({
                type: "GET",
                dataType: "json",
                headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
                url: base_url + "/api/pos/totalRecieptCounts",
                data: {
                    "company_id": company_id,
                    "store_id": store_,
                    "date_range": $("#date_range").val(),
                    "cashier_id": cash,
                },
                timeout: 60000,
                success: function(response) {

                    $(".total_receipts").html(`${response.total.toLocaleString()}`);
                    // localStorage.setItem('all', response.amount.toLocaleString());
                    console.log(response);
                    $("#receipts_data").show();
                    $("#receipts").hide();
                },
                error: function(response) {
                    console.log(response);
                }
            });

        }

        function total_sales_credit() {
            var company_id = localStorage.getItem('company_id');
            var store_id = localStorage.getItem('store_id');




            var listObj = document.getElementById(`select_item_cashier`);
            var select_store = document.getElementById(`select_item`);

            console.log(listObj);
            console.log($("#select_item_cashier").val())
            if ($("#select_item_cashier").val()) {
                var datalist = document.getElementById(listObj.getAttribute("list"));
                var fa = datalist.options.namedItem(listObj.value);
                console.log(fa)

                if (fa == null) {
                    return false;
                }

                var cus_id = fa.getAttribute('data-value');
                var cus = cus_id ? cus_id : localStorage.getItem("user_id")
            }
            if ($("#select_item").val()) {
                var datalist = document.getElementById(select_store.getAttribute("list"));
                var fa = datalist.options.namedItem(select_store.value);
                console.log(fa)
                if (fa == null) {
                    return false;
                }

                var store = fa.getAttribute('data-value');
                console.log('store1', store)
                var stores = store
            }

            $("#credit_data").hide();
            $("#credit").show();
            var cash = cus
            var store_ = stores

            // if (store_ == null || store_ == undefined) {
            //     store_ = store_id
            // }

            // if (localStorage.getItem('store_dash')) {
            //     store_ = localStorage.getItem('store_dash')
            // }

            if ($("#user_perm_status").html() == "super_admin" || $("#monitor_status").html() == "monitor_role") {
                if (store_ != null || store_ != undefined) {
                    store_ = store_
                }
                else  {
                   store_ = ""
                }
            }
            else{

                if (store_ == null || store_ == undefined) {
                store_ = store_id
            }
            else if (localStorage.getItem('store_dash')) {
                store_ = localStorage.getItem('store_dash')
            }
            
            }



            if (cash == null || cash == undefined) {
                cash = localStorage.getItem('user_id')
            }


            $.ajax({
                type: "GET",
                dataType: "json",
                headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
                url: base_url + "/api/pos/totalSalesCredit",
                data: {
                    "company_id": company_id,
                    "store_id": store_,
                    "date_range": $("#date_range").val(),
                    "cashier_id": cash,
                },
                timeout: 60000,
                success: function(response) {

                    $(".total_sales_credit").html('₦' + numeral(parseFloat(response.amount)).format(
                        '0.0a'));

                    $("#credit_data").show();
                    $("#credit").hide();


                    // localStorage.setItem('all', response.amount.toLocaleString());
                    console.log(response);
                },
                error: function(response) {
                    console.log(response);
                }
            });

        }

    }


)
</script>

<?php
include("_common/footer.php");
?>
<script type="text/javascript" src="js/dashboard.js?v=85"></script>