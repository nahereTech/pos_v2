<?php
include("_common/header.php");
?>


<!-- Site Content Wrapper -->
<div class="dt-content-wrapper">

    <!-- Site Content -->
    <div class="dt-content ">

        <div class="dt-page__header" style="display: flex; justify-content: space-between;">
            <h1 class="dt-page__title" id="categ" style="padding:0px 10px">Categories</h1>
            <div style="display: flex;">
                <form class="search-box d-none d-lg-block" style="width: 200px; ">
                    <input class="form-control border-0 filter_pro" placeholder="Search categories..."
                        style="border:2px solid #64c6fd !important">
                </form>
                
                <button type="button" class="btn add_cat btn-primary btn-lg"
                    style="display:flex; height:35px; background-color: #038FDE;color:white; padding:5px 5px; font-size:15px; margin-left:10px; padding:7px"><span
                        style="margin-right: 5px;margin-top: 1px;" role="img" aria-label="add item"
                        class="anticon anticon-download"><svg viewBox="64 64 896 896" focusable="false" class=""
                            data-icon="download" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                            <path
                                d="M505.7 661a8 8 0 0012.6 0l112-141.7c4.1-5.2.4-12.9-6.3-12.9h-74.1V168c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v338.3H400c-6.7 0-10.4 7.7-6.3 12.9l112 141.8zM878 626h-60c-4.4 0-8 3.6-8 8v154H214V634c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v198c0 17.7 14.3 32 32 32h684c17.7 0 32-14.3 32-32V634c0-4.4-3.6-8-8-8z">
                            </path>
                        </svg></span><span>Add Category</span></button>

                        <div class="dropdown open" id="export_file" style="">
                    <button class="btn import_file" type="button" style="background-color: #fa8c16;">
                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="download" width="1em"
                            height="1em" fill="currentColor" aria-hidden="true">
                            <path
                                d="M505.7 661a8 8 0 0012.6 0l112-141.7c4.1-5.2.4-12.9-6.3-12.9h-74.1V168c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v338.3H400c-6.7 0-10.4 7.7-6.3 12.9l112 141.8zM878 626h-60c-4.4 0-8 3.6-8 8v154H214V634c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v198c0 17.7 14.3 32 32 32h684c17.7 0 32-14.3 32-32V634c0-4.4-3.6-8-8-8z">
                            </path>
                        </svg><span>Import</span>
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
                            <div class="ant-card-head-title">All Categories</div>
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
                                                            <th class="ant-table-cell" style="width: 30%">Category Name
                                                            </th>
                                                            <th class="ant-table-cell" style="width: 35%">Action</th>
                                                        </tr>
                                                    </thead>


                                                    <tbody class="ant-table-tbody" id="cat_data" id="myUL">




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
                                                        <ul class="pagination" id="pagination_category"
                                                            style="margin-top: 10px; margin-left:30%"></ul>
                                                    </nav>
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
                        <label for="normal-input-4" class="col-md-2 col-sm-3 col-form-label text-sm-right">Category
                            Name</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="text" id="cat_name" class="cat_name form-control required">
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label for="normal-input-4" class="col-md-2 col-sm-3 col-form-label text-sm-right">Description
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
                        class="btn btn-primary send_cat btn-block">Send</button>
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




    <div class="modal fade show" style="display: none;" id="edit_cat_modal" tabindex="-1" role="dialog"
        aria-labelledby="model-8" aria-modal="true" style="display: block; padding-left: 17px;">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <!-- Modal Content -->
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header" style="background-color: #038FDE; color:white">
                    <h3 class="modal-title" id="model-8" style="color:white">Edit Category</h3>
                    <button type="button" class="close hide_btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color:white">×</span>
                    </button>
                </div>
                <!-- /modal header -->

                <!-- Modal Body -->
                <div class="modal-body">
                    <!-- Form -->
                    <form id="edit_cat">
                        <!-- /form group -->

                        <!-- Form Group -->
                        <div class="form-group form-row" style="margin-bottom:10px;">
                            <label for="normal-input-4" class="col-form-label text-sm-right">Category
                                Name</label>
                            <!-- <div class="form-control"> -->
                            <input style="width: 95%;margin-bottom:0px; margin-left: auto;margin-right: auto;"
                                type="text" id="cat_edit_name" class="form-control required">
                            <!-- </div> -->
                        </div>
                        <div class="form-group form-row" style="margin-bottom:10px;">
                            <label for="normal-input-4" class="col-form-label text-sm-right">Category Description
                            </label>
                            <!-- <div class="form-control"> -->
                            <input style="width: 95%;  margin-left: auto;margin-right: auto;" type="text"
                                id="cat_edit_desc" class="form-control required">
                            <!-- </div> -->
                        </div>

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
                        <button type="button" class="btn edit_btn edit_cat btn-primary btn-sm" data-dismiss="modal">Save
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

    <div class="modal fade show contact_import_show" id="form-modal" tabindex="-1" role="dialog"
        aria-labelledby="model-8" style="display: none;     max-height: 1000px;
            overflow: auto; background:rgba(0, 0, 0, 0.5)" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content" style="width: 600px;">

                <div class="modal-header" style="background-color: #0480BE; color:white">
                    <h3 class="modal-title" id="model-8" style="color:white">Import
                    </h3>
                    <button type="button" class="close hide_btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color:white">×</span>
                    </button>
                </div>

                <div class="modal-body invoice_history" style="width: 600px;">


                    <br>
                    <form id="target" autocomplete="off" enctype="multipart/form-data" method="post">

                        <p style="font-size: 16px; margin-bottom: 5px;">File to upload</p>
                        <input class="form-control" type="file" id="import_excel_file" />

                        <br>
                        <br>


                        <div>
                            <!-- <h3 style="color:#fa8c16">Export As*</h3> -->
                            <input type="radio" id="overwrite" name="overwrite" value="yes">
                            <label for="periph2">Overwrite</label><br>
                        </div>

                        <span style="font-size: 16px;"><a
                                href="https://empl-dev.site//files/tr/tr_attached/sample/sample_category_schema.xlsx"
                                style="color:#5FB7E9" id="sample_csv" class="sample_csv" download>Sample csv
                                file</a> or <a
                                href="https://empl-dev.site//files/tr/tr_attached/sample/sample_category_schema.xlsx"
                                style="color:#5FB7E9" id="sample_xls" class="sample_xls" download>Sample xls
                                file</a></span>

                        <br>

                        <h4>NOTE: File must be in PDF,CSV,XLS or XLXS format</h4>

                        <div class="modal-footer">
                            <button type="button" style="background-color: #FF7676; color:white"
                                class="btn hide_btn btn-sm" data-dismiss="modal">Close</button>
                            <button class="btn btn-sm" type="submit" id="just_import"
                                style="background-color: #1DCE8E; color:white" data-dismiss="modal"> Import
                            </button>
                        </div>

                    </form>

                </div>

            </div>


        </div>


        <!-- <div class="modal-footer">
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
    </div> -->



    </div>

    </main>





    <script>
    $(document).ready(function() {

        // list_products("");

        // list_categories("");

        list_all_product("");
        list_shop_products("");

        load_categories_for_pop();

        $(document).on("click", "#just_import", function(e) {
        e.preventDefault();
        import_file();
    })

    function import_file() {


        var company_id = localStorage.getItem('company_id');
        var overwrite_existing = $("input[name='overwrite']:checked").val();

        var fd = new FormData();
        var data_file = $('#import_excel_file').prop("files")[0];
        fd.append("company_id", company_id);
        fd.append("overwrite_existing", overwrite_existing ? overwrite_existing : 'no');
        fd.append("file", data_file);
        console.log(data_file)

        $.ajax({

            type: "POST",
            dataType: 'json',
            processData: false,
            contentType: false,
            // enctype: "multipart/form-data",
            cache: false,
            url: base_url + "/api/pos/importCategories",
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
    })
    </script>

    <?php
include("_common/footer.php");
?>