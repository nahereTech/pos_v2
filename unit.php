<?php
include("_common/header.php");
?>


<!-- Site Content Wrapper -->
<div class="dt-content-wrapper">

    <!-- Site Content -->
    <div class="dt-content ">

        <div class="dt-page__header" style="display: flex; justify-content: space-between;">
            <h1 class="dt-page__title" style="padding:0px 10px">Units</h1>
            <div style="display: flex;">
                <form class="search-box d-none d-lg-block" style="width: 200px; ">
                    <input class="form-control border-0 filter_pro" placeholder="Search units..."
                        style="border:2px solid #64c6fd !important">
                </form>
                <button type="button" class="btn add_unit btn-primary btn-lg"
                    style="height:35px; display:flex; background-color: #038FDE;color:white; padding:5px 5px; font-size:15px; margin-left:10px; padding:7px"><span
                        role="img" aria-label="add item" class="anticon anticon-download" style="margin-right: 5px;margin-top: 1px;"><svg viewBox="64 64 896 896"
                            focusable="false" class="" data-icon="download" width="1em" height="1em" fill="currentColor"
                            aria-hidden="true">
                            <path
                                d="M505.7 661a8 8 0 0012.6 0l112-141.7c4.1-5.2.4-12.9-6.3-12.9h-74.1V168c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v338.3H400c-6.7 0-10.4 7.7-6.3 12.9l112 141.8zM878 626h-60c-4.4 0-8 3.6-8 8v154H214V634c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v198c0 17.7 14.3 32 32 32h684c17.7 0 32-14.3 32-32V634c0-4.4-3.6-8-8-8z">
                            </path>
                        </svg></span><span>Add unit</span></button>

            </div>
        </div>

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
                        <div class="ant-card-head-wrapper"><div class="ant-card-head-title">All Units</div></div>
                    </div>
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
                                                            <th class="ant-table-cell" style="width: 30%">Unit Name</th>
                                                            <th class="ant-table-cell" style="width: 40%">Unit Symbol
                                                            </th>
                                                            <th class="ant-table-cell" style="width: 35%">Action</th>
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

                                                    <tbody class="ant-table-tbody" id="unit_data" id="myUL">




                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    
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
                        <label for="normal-input-4" class="col-md-2 col-sm-3 col-form-label text-sm-right">Unit
                            Name</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="text" id="unit_name" class="form-control required">
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label for="normal-input-4" class="col-md-2 col-sm-3 col-form-label text-sm-right">Unit
                            Symbol</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="text" id="unit_symbol" class="form-control required">
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
                        class="btn btn-primary send_unit btn-block">Send</button>
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


    <div class="modal fade show" style="display: none;" id="edit_modal" tabindex="-1" role="dialog"
        aria-labelledby="model-8" aria-modal="true" style="display: block; padding-left: 17px;">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <!-- Modal Content -->
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header" style="background-color: #038FDE; color:white">
                    <h3 class="modal-title" id="model-8" style="color:white">Edit Product</h3>
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
                            <label for="normal-input-4" class="col-form-label text-sm-right">Product
                                Name</label>
                            <!-- <div class="form-control"> -->
                            <input style="width: 95%;margin-bottom:0px; margin-left: auto;margin-right: auto;"
                                type="text" id="product_edit_name" class="form-control required">
                            <!-- </div> -->
                        </div>
                        <div class="form-group form-row" style="margin-bottom:10px;">
                            <label for="normal-input-4" class="col-form-label text-sm-right">Product
                                Price</label>
                            <!-- <div class="form-control"> -->
                            <input style="width: 95%;  margin-left: auto;margin-right: auto;" type="text"
                                id="product_edit_price" class="form-control required">
                            <!-- </div> -->
                        </div>
                        <div class="form-group form-row" style="margin-bottom:10px;">
                            <label for="normal-input-4" class="col-form-label text-sm-right">Product
                                Image</label>
                            <!-- <div class="form-control"> -->
                            <input style="width: 95%; margin-bottom:0px; margin-left: auto;margin-right: auto;"
                                id="product_edit_image" style="padding-bottom: 35px;" type="file"
                                class="form-control required">
                            <!-- </div> -->
                        </div>
                        <!-- /form group -->

                        <!-- Form Group -->


                        <!-- 
                    <button style="width: 83%; margin-left: auto;" type="button"
                        class="btn btn-primary send_btn btn-block">Send</button> -->
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


    <div class="modal fade show" style="display: none;" id="edit_cus_history" tabindex="-1" role="dialog"
        aria-labelledby="model-8" aria-modal="true" style="display: block; padding-left: 17px;">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <!-- Modal Content -->
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header" style="background-color: #038FDE; color:white">
                    <h3 class="modal-title" id="model-8" style="color:white">Edit Unit</h3>
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
                            <label for="normal-input-4" class="col-form-label text-sm-right">Unit
                                Name</label>
                            <!-- <div class="form-control"> -->
                            <input style="width: 95%;margin-bottom:0px; margin-left: auto;margin-right: auto;"
                                type="text" id="unit_edit_name" class="form-control required">
                            <!-- </div> -->
                        </div>
                        <div class="form-group form-row" style="margin-bottom:10px;">
                            <label for="normal-input-4" class="col-form-label text-sm-right">Unit Symbol</label>
                            <!-- <div class="form-control"> -->
                            <input style="width: 95%;  margin-left: auto;margin-right: auto;" type="text"
                                id="unit_edit_symbol" class="form-control required">
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
                        <button type="button" class="btn edit_btn save_unit_edit btn-primary btn-sm"
                            data-dismiss="modal">Save changes</button>
                    </div>
                </div>
                <!-- /modal footer -->

            </div>
            <!-- /modal content -->

        </div>
    </div>

    </main>
   
    <script>
var base_url = window.location.origin;

$(document).ready(function() {


    list_units("");

    


    
  $(document).on("click", ".send_unit", function () {
    $(".send_unit").hide();
    send_unit();
  })

  

  function send_unit() {
    let unit_name = $("#unit_name").val();
    let unit_symbol = $("#unit_symbol").val();
    let company_id = localStorage.getItem("company_id");

    var blank;

    $(".required").each(function () {
      var the_val = $.trim($(this).val());

      if (the_val == "") {
        blank = "yes";

        $(this).addClass("has-error");
      } else {
        blank;

        $(this).removeClass("has-error");
      }
    });


    $(".create_store").hide();
    $(".dt-loader").show();

    
    $.ajax({
      type: "POST",
      dataType: "json",
      headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
      cache: false,
      url: base_url + "/api/pos/createUnit",
      data: {"unit_name" : unit_name, "unit_symbol":unit_symbol,"company_id" : company_id},

      success: function (response) {
        if (response.status == "200") {
          console.log(response);

          $(".create_product").show();
        } else if (response.status == "400") {
          console.log(response);
          alert(response.msg)
          $(".dt-loader").hide();
          $(".send_unit").show();

       
        } else if (response.status == "401") {
          //user error message
          console.log(response);
          alert(response.msg)

          $(".dt-loader").hide();
          $(".send_unit").show();
        }
      },
      error: function (response) {
        console.log(response);

      },
    });
  }

//   $(document).on("click", ".send_store", function () {
//     send_category();
//   })

  $(document).on("click", ".save_unit_edit", function () {
      edit_unit()
    });

  $(document).on("click", ".unit_delete", function () {
    var id = $(this).attr("data");
    var r = confirm("Are you sure you want to delete this unit?");
    if (r == true) {
      delete_unit(id);
    }
  });

  
  function delete_unit(id) {
    let company_id = localStorage.getItem("company_id");

    $.ajax({
      type: "DELETE",
      dataType: "json",
      headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
      cache: false,
      url: base_url + "/api/pos/removeUnit",
      data: { company_id: company_id, unit_id: id },

      success: function (response) {
        if (response.status == "200") {
          console.log(response);

          $(`.st_${id}`).remove();

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
      error: function (response) {
        console.log(response);
      },
    });
  }

  
  function edit_unit() {
    let unit_name = $("#unit_edit_name").val();
    let unit_symbol = $("#unit_edit_symbol").val();
    let company_id = localStorage.getItem("company_id");

    // var blank;

    // $(".required").each(function () {
    //   var the_val = $.trim($(this).val());

    //   if (the_val == "") {
    //     blank = "yes";

    //     $(this).addClass("has-error");
    //     return;
    //   } else {
    //     blank;

    //     $(this).removeClass("has-error");
    //   }
    // });

    $(".edit_foot").hide();
    $(".dt-loader").show();

    $.ajax({
      type: "POST",
      dataType: "json",
      headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
      cache: false,
      url: base_url + "/api/pos/editUnit",
      data: {"unit_name" : unit_name, "unit_id":localStorage.getItem("unit_id"), "unit_symbol":unit_symbol,"company_id" : company_id},

      success: function (response) {
        if (response.status == "200") {
          console.log(response);

          $("#edit_cus_history").hide();
          $(".for_edit").show();

          $(`#for_unit_${localStorage.getItem("unit_id")}`).html(
            $("#unit_edit_name").val()
          );

          $(`#for_symbol_${localStorage.getItem("unit_id")}`).html(
            $("#unit_edit_symbol").val()
          );
          localStorage.removeItem("unit_id");

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
          localStorage.removeItem("unit_id");

          setTimeout(() => {
            $(".edit_error").hide();
          }, 2000);
        } else if (response.status == "401") {
          //user error message
          console.log(response);
          $("#edit_modal").hide();
          $(".edit_error").show();
          $("#for_err").html(response.msg);
          localStorage.removeItem("unit_id");


          setTimeout(() => {
            $(".edit_error").hide();
          }, 2000);
        }
      },
      error: function (response) {
        console.log(response);
      },
    });
  }

  $(document).on("click", ".unit_edit", function () {
    var name = $(this).attr("data-value");
    var symbol= $(this).attr("lang");
    var desc= $(this).attr("dat");
    var id = $(this).attr("data");
    localStorage.setItem("unit_id", id);
    $("#unit_edit_name").val(name);
    $("#unit_edit_symbol").val(symbol);

    $("#edit_cus_history").show();
  });

  

function list_units(page) {
  let company_id = localStorage.getItem("company_id");
  if (page == "") {
    var page = 1;
  }
  var limit = 20;

  $.ajax({
    type: "GET",
    dataType: "json",
    headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
    cache: false,
    url: base_url + "/api/pos/unitList",
    data: { company_id: company_id},
     // limit: limit, page: page 

    success: function (response) {
      if (response.status == "200") {
        console.log(response.data);
        if (response.data.length) {
          var k = 1;
          var list_wh = "";

          $.each(response.data, function (i, v) {
            list_wh += `
           <tr data-row-key="1" class="ant-table-row ant-table-row-level-0 product_table st_${v.unit_id}" role="row" style="text-align:center" data-value="${v.unit_name}"
           data="${v.unit_id}" data-string="${v.unit_name}">

           <td class="ant-table-cell" style="text-align:left" id="for_unit_${v.unit_id}">${v.sn}</td>
            <td class="ant-table-cell" style="text-align:left" id="for_unit_${v.unit_id}">${v.unit_name}</td>
            <td class="ant-table-cell" style="text-align:left" id="for_sym_${v.unit_id}">${v.unit_symbol}</td>

            <td class="ant-table-cell" style="text-align:left; display:flex;">
              <span class="gx-badge gx-text-white unit_edit" id="unit_edit_${v.unit_id}" lang="${v.unit_symbol}" data-value="${v.unit_name}" data=${v.unit_id} style="background-color: #038EDC; cursor:pointer" data-value=${v.store_name}>Edit</span>
              <span class="gx-badge gx-text-white unit_delete" id="unit_delete_${v.unit_id}" data=${v.unit_id} style="background-color: #fa8c16; cursor:pointer">Delete</span>
            </td>
            
         </tr>`;

            k++;
          });

          $("#unit_data").append(list_wh);
        }  
        else {
          $("#unit_data").append(`<tr data-row-key="1" class="ant-table-row ant-table-row-level-0 gradeA product_table " role="row" style="text-align:center"
          ><td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left">No Record</td><td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left"></td></tr>`);
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
         $("#unit_data").append(`<tr data-row-key="1" class="ant-table-row ant-table-row-level-0 gradeA product_table " role="row" style="text-align:center"
          ><td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left">No Record</td><td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left"></td></tr>`);
        console.log(response);
      } else if (response.status == "401") {
        //user error message
        console.log(response);
      }
    },
    error: function (response) {
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