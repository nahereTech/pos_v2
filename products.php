<?php
include("_common/header.php");
?>


<style type="text/css">
.product_bar {
    background-color: #038EDC;
    color: white;
}
       @media only screen and (max-width: 600px){
        .for_mob_filter{
            display: block !important;
        }
        .for_mob_filter input{
            margin-bottom: 10px;
        }
        button#filter_products{
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
    <div class="dt-content ">

        <div class="dt-page__header" style="display: flex; justify-content: space-between;">
            <h1 class="dt-page__title" style="padding:0px 10px">Products</h1>
            <div style="display: flex;">
                <!-- <form class="search-box d-none d-lg-block" style="width: 200px; ">
                    <input class="form-control border-0 filter_pro" placeholder="Search products..."
                        style="border:2px solid #64c6fd !important">
                </form> -->
                <button type="button" class="btn add_item btn-primary btn-lg"
                    style="display: none; height:35px; background-color: #038FDE;color:white; padding:5px 5px; font-size:15px; margin-left:10px; padding:7px"><span
                        style="margin-right: 5px;margin-top: 1px;" role="img" aria-label="add item"
                        class="anticon anticon-download"><svg viewBox="64 64 896 896" focusable="false" class=""
                            data-icon="download" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                            <path
                                d="M505.7 661a8 8 0 0012.6 0l112-141.7c4.1-5.2.4-12.9-6.3-12.9h-74.1V168c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v338.3H400c-6.7 0-10.4 7.7-6.3 12.9l112 141.8zM878 626h-60c-4.4 0-8 3.6-8 8v154H214V634c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v198c0 17.7 14.3 32 32 32h684c17.7 0 32-14.3 32-32V634c0-4.4-3.6-8-8-8z">
                            </path>
                        </svg></span><span>Add item</span></button>

                <div class="dropdown open" id="export_file" style="">
                    <button class="btn import_export" type="button" style="background-color: #fa8c16;">
                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="download" width="1em"
                            height="1em" fill="currentColor" aria-hidden="true">
                            <path
                                d="M505.7 661a8 8 0 0012.6 0l112-141.7c4.1-5.2.4-12.9-6.3-12.9h-74.1V168c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v338.3H400c-6.7 0-10.4 7.7-6.3 12.9l112 141.8zM878 626h-60c-4.4 0-8 3.6-8 8v154H214V634c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v198c0 17.7 14.3 32 32 32h684c17.7 0 32-14.3 32-32V634c0-4.4-3.6-8-8-8z">
                            </path>
                        </svg><span>Import/Export</span>
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
                <!-- <button type="button" class="btn add_item btn-primary btn-lg"
                    style="display:flex; height:35px; background-color: #038FDE;color:white; padding:5px 5px; font-size:15px; margin-left:10px; padding:7px"><span
                        style="margin-right: 5px;margin-top: 1px;" role="img" aria-label="add item"
                        class="anticon anticon-download"><svg viewBox="64 64 896 896" focusable="false" class=""
                            data-icon="download" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                            <path
                                d="M505.7 661a8 8 0 0012.6 0l112-141.7c4.1-5.2.4-12.9-6.3-12.9h-74.1V168c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v338.3H400c-6.7 0-10.4 7.7-6.3 12.9l112 141.8zM878 626h-60c-4.4 0-8 3.6-8 8v154H214V634c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v198c0 17.7 14.3 32 32 32h684c17.7 0 32-14.3 32-32V634c0-4.4-3.6-8-8-8z">
                            </path>
                        </svg></span><span>Cateory Format</span></button> -->
            </div>
        </div>

        <div class="ant-row">

            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-24 item_table">

                <div class="ant-card">
                    <!-- <div class="ant-card-head">
                <div class="ant-card-head-wrapper"><div class="ant-card-head-title">Filter</div></div>
            </div> -->
                    <div class="ant-card-body" style="display: flex;">
                    <form class="for_mob_filter" style="display: flex;flex-direction: row;grid-gap: 20px;">
                        <div>
                            <label>Product Name</label>

                            <datalist id="options">

                            </datalist>

                            <input list="options" class="form-control required1" id="select_item" autocomplete="off">
                            <!-- <input type="text" class="ant-input" value=""> -->
                        </div>

                        <div >
                            <label>Price Range</label>
                            <input type="text" class="ant-input" id="minimum" placeholder="Minimum">
                        </div>
                        
                        <div >
                            <label>Maximum</label>
                            <input type="text" class="ant-input" id="maximum" placeholder="Maximum">
                        </div>
                        <button type="button" class="btn" id="filter_products"
                            style="margin-top: 23px; margin-left: 10px; background-color:#038EDC; color:#fff">Go</button>
                    </form>

                        

                    </div>


                </div>
            </div>

        </div>


        <div class="ant-row item_table">

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
                                                            <th class="ant-table-cell" style="width: 30%">Product Name
                                                            </th>
                                                            <th class="ant-table-cell" style="width: 40%">Product Price
                                                                (<span>&#8358;</span>)
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

                                                    <tbody class="ant-table-tbody" id="tab_data" id="myUL">




                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="load_products"
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

                                    <div class="container nav-page">
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination" id="pagination_products"
                                                style="margin-top: 10px; margin-left:30%"></ul>
                                        </nav>
                                    </div>

                                    <div class="for_err" style="display: none;">
                                        <p class="connection" style="font-size: 14px;
                                        display: flex;
                                        justify-content: center;
                                        margin-top: 10px;"></p>
                                    </div>

                                    <!-- <ul class="ant-pagination ant-table-pagination ant-table-pagination-right" unselectable="unselectable">
                                        <li title="Previous Page" class="ant-pagination-prev ant-pagination-disabled" aria-disabled="true">
                                            <a class="ant-pagination-item-link" disabled="">
                                                <span role="img" aria-label="left" class="anticon anticon-left">
                                                    <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="left" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                        <path d="M724 218.3V141c0-6.7-7.7-10.4-12.9-6.3L260.3 486.8a31.86 31.86 0 000 50.3l450.8 352.1c5.3 4.1 12.9.4 12.9-6.3v-77.3c0-4.9-2.3-9.6-6.1-12.6l-360-281 360-281.1c3.8-3 6.1-7.7 6.1-12.6z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                        <li title="1" class="ant-pagination-item ant-pagination-item-1 ant-pagination-item-active" tabindex="0"><a>1</a></li>
                                        <li title="Next Page" class="ant-pagination-next ant-pagination-disabled" aria-disabled="true">
                                            <a class="ant-pagination-item-link" disabled="">
                                                <span role="img" aria-label="right" class="anticon anticon-right">
                                                    <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="right" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                        <path d="M765.7 486.8L314.9 134.7A7.97 7.97 0 00302 141v77.3c0 4.9 2.3 9.6 6.1 12.6l360 281.1-360 281.1c-3.9 3-6.1 7.7-6.1 12.6V883c0 6.7 7.7 10.4 12.9 6.3l450.8-352.1a31.96 31.96 0 000-50.4z">
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
        <div class="dt-card" style="width:800px">

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
                <form id="target" autocomplete="off" enctype="multipart/form-data">
                    <!-- /form group -->

                    <!-- Form Group -->
                    <div class="form-group form-row">
                        <label for="normal-input-4" class="col-md-2 col-sm-3 col-form-label text-sm-right">Product
                            Name</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="text" id="product_name" class="form-control required5" required>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label for="normal-input-4" class="col-md-2 col-sm-3 col-form-label text-sm-right">Product
                            Price (<span>&#8358;</span>)</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="text" id="product_price" class="form-control required5"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                required>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label for="normal-input-4" class="col-md-2 col-sm-3 col-form-label text-sm-right">Product
                            SKU</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="text" id="product_sku" class="form-control required5" required>
                        </div>
                    </div>

                    <div class="form-group form-row" id="bar_div">
                        <label for="normal-input-4" class="col-md-2 col-sm-3 col-form-label text-sm-right">Product
                            Barcode</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="text" id="product_barcod" class="form-control">
                            <span>
                                <button class="btn btn-info" id="populate_barcode">Generate Barcode</button>
                                <span class="ant-btn-loading-icon dt_barcode_details"
                                    style="margin-top: -20px; display:none"><span role="img" aria-label="loading"
                                        class="anticon anticon-loading"><svg viewBox="0 0 1024 1024" focusable="false"
                                            class="anticon-spin" data-icon="loading" width="2em" height="2em"
                                            fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M988 548c-19.9 0-36-16.1-36-36 0-59.4-11.6-117-34.6-171.3a440.45 440.45 0 00-94.3-139.9 437.71 437.71 0 00-139.9-94.3C629 83.6 571.4 72 512 72c-19.9 0-36-16.1-36-36s16.1-36 36-36c69.1 0 136.2 13.5 199.3 40.3C772.3 66 827 103 874 150c47 47 83.9 101.8 109.7 162.7 26.7 63.1 40.2 130.2 40.2 199.3.1 19.9-16 36-35.9 36z">
                                            </path>
                                        </svg></span></span>
                            </span>
                            <!-- <svg id="barcode"></svg> -->
                            <!-- <canvas id="barcode"></canvas> -->
                            <img id="barcode" />
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label for="normal-input-4" class="col-md-2 col-sm-3 col-form-label text-sm-right">Product
                            Category</label>
                        <div class="col-md-10 col-sm-9">
                            <select class="form-control required5 product_cat" id="wzh_zz_lzt" required></select>
                        </div>
                    </div>


                    <div class="form-group form-row">
                        <label for="normal-input-4" class="col-md-2 col-sm-3 col-form-label text-sm-right">Product
                            Unit</label>
                        <div class="col-md-10 col-sm-9">
                            <select class="form-control required5 product_unit" id="product_unit" required></select>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label for="normal-input-4" class="col-md-2 col-sm-3 col-form-label text-sm-right">Product
                            Image</label>
                        <div class="col-md-10 col-sm-9">
                            <input id="product_image" style="padding-bottom: 35px;" type="file" class="form-control"
                                onchange="previewFile()">
                        </div><br>
                        <div class="preview-wrapper" style="display:none;margin-left:120px;">
                            <img src="" class="preview just-preview" style="margin-top: 20px" height="200" alt="Image preview...">
                            <p class="remove_img" style="margin-top:10px; cursor:pointer; color: red;text-align: center;font-size: 16px;">Remove</p>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label for="normal-input-4" class="col-md-2 col-sm-3 col-form-label text-sm-right">Product
                            Description</label>
                        <div class="col-md-10 col-sm-9">
                            <textarea id="product_description" class="form-control required5" required></textarea>
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

                    <button id="send_btn" style="width: 83%; margin-left: auto;" type="submit"
                        class="btn btn-primary send_btn btn-block">Send</button>
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


    <div class="modal fade show" style="display: none;" id="view_modal" tabindex="-1" role="dialog"
        aria-labelledby="model-8" aria-modal="true" style="display: block; padding-left: 17px;">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <!-- Modal Content -->
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header" style="background-color: #038FDE; color:white">
                    <h3 class="modal-title edit_prods" id="model-8" style="color:white">View Product</h3>
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
                                type="text" id="product_view_name" class="form-control required" disabled>
                            <!-- </div> -->
                        </div>
                        <div class="form-group form-row" style="margin-bottom:10px;">
                            <label for="normal-input-4" class="col-form-label text-sm-right">Product
                                Price</label>
                            <!-- <div class="form-control"> -->
                            <input style="width: 95%;  margin-left: auto;margin-right: auto;" type="text"
                                id="product_view_price" class="form-control required" disabled>
                            <!-- </div> -->
                        </div>
                        <div class="form-group form-row" style="margin-bottom:10px; display:none">
                            <label for="normal-input-4" class="col-form-label text-sm-right">Product
                                Barcode</label>
                            <!-- <div class="form-control"> -->
                            <input style="width: 95%;  margin-left: auto;margin-right: auto;" type="text"
                                id="product_view_barcode" class="form-control required" disabled>
                            <!-- </div> -->
                        </div>
                        <div class="form-group form-row" style="margin-bottom:10px;">
                            <label for="normal-input-4" class="col-form-label text-sm-right">Product
                                Unit</label>
                            <!-- <div class="form-control"> -->
                            <input style="width: 95%;  margin-left: auto;margin-right: auto;" type="text"
                            class="form-control required5 product_unit" id="product_unit_view" disabled>
                            <!-- <select style="width: 95%;  margin-left: auto;margin-right: auto;"
                                class="form-control required5 product_unit" id="product_unit_view" disabled></select> -->
                            <!-- </div> -->
                        </div>

                        <div class="form-group form-row" style="margin-bottom:10px;">
                            <label for="normal-input-4" class="col-form-label text-sm-right">Product
                                Description</label>
                            <!-- <div class="form-control"> -->
                            <textarea style="width: 95%;  margin-left: auto;margin-right: auto;"
                                id="product_description_view" class="form-control required5 product_description"
                                disabled></textarea>

                            <!-- </div> -->
                        </div>

                        <div class="form-group form-row" style="margin-bottom:10px;">
                            <label for="normal-input-4" class="col-form-label text-sm-right">Product
                                Image</label>
                            <!-- <div class="form-control"> -->
                            <input style="width: 95%; margin-bottom:0px; margin-left: auto;margin-right: auto;"
                                id="product_view_image" style="padding-bottom: 35px;" type="file" class="form-control"
                                onchange="previewEditFile()">
                            <br>
                            <div class="preview-view-wrapper">
                                <img src="" class="preview-view" height="200" alt="Image preview..." style="width: 150px;
                                height: 150px;
                                border-radius: 20px;
                                margin-left: 10px;
                                margin-top: 20px;">
                            </div>
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
                        <!-- <button type="button" class="btn edit_btn save_edit btn-primary btn-sm"
                            data-dismiss="modal">Save changes</button> -->
                    </div>
                </div>
                <!-- /modal footer -->

            </div>
            <!-- /modal content -->

        </div>
    </div>


    <div class="modal fade show" style="display: none;" id="edit_modal" tabindex="-1" role="dialog"
        aria-labelledby="model-8" aria-modal="true" style="display: block; padding-left: 17px;">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <!-- Modal Content -->
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header" style="background-color: #038FDE; color:white">
                    <h3 class="modal-title edit_prods" id="model-8" style="color:white">Edit Products</h3>
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
                        <div class="form-group form-row" style="margin-bottom:10px; display:none">
                            <label for="normal-input-4" class="col-form-label text-sm-right">Product
                                Barcode</label>
                            <!-- <div class="form-control"> -->
                            <input style="width: 95%;  margin-left: auto;margin-right: auto;" type="text"
                                id="product_edit_barcode" class="form-control required">
                            <!-- </div> -->
                        </div>
                        <div class="form-group form-row" style="margin-bottom:10px;">
                            <label for="normal-input-4" class="col-form-label text-sm-right">Product
                                Unit</label>
                            <!-- <div class="form-control"> -->
                            <select style="width: 95%;  margin-left: auto;margin-right: auto;"
                                class="form-control required5 product_unit" id="product_unit_edit" required></select>
                            <!-- </div> -->
                        </div>

                        <div class="form-group form-row" style="margin-bottom:10px;">
                            <label for="normal-input-4" class="col-form-label text-sm-right">Product
                                Description</label>
                            <!-- <div class="form-control"> -->
                            <textarea style="width: 95%;  margin-left: auto;margin-right: auto;"
                                id="product_description_edit" class="form-control required5 product_description"
                                required></textarea>

                            <!-- </div> -->
                        </div>

                        <div class="form-group form-row" style="margin-bottom:10px;">
                            <label for="normal-input-4" class="col-form-label text-sm-right">Product
                                Image</label>
                            <!-- <div class="form-control"> -->
                            <input style="width: 95%; margin-bottom:0px; margin-left: auto;margin-right: auto;"
                                id="product_edit_image" style="padding-bottom: 35px;" type="file" class="form-control"
                                onchange="previewEditFile()">
                            <br>
                            <div class="preview-edit-wrapper">
                                <img src="" class="preview-edit" height="200" alt="Image preview..." style="width: 150px;
                                height: 150px;
                                border-radius: 20px;
                                margin-left: 10px;
                                margin-top: 20px;">
                            </div>
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


    <div class="modal fade show product_show" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="model-8"
        style="display: none;     max-height: 1000px;
            overflow: auto; background:rgba(0, 0, 0, 0.5)" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <!-- Modal Content -->
            <div class="modal-content" style="width: 600px;">

                <!-- Modal Header -->
                <div class="modal-header" style="background-color: #1DCE8E; color:white">
                    <h3 class="modal-title" id="model-8" style="color:white">Product
                    </h3>
                    <button type="button" class="close hide_btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color:white">×</span>
                    </button>
                </div>
                <!-- /modal header -->

                <!-- Modal Body -->
                <div class="modal-body invoice_history" style="width: 600px;">

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



    <div class="modal fade show contact_import_show" id="form-modal" tabindex="-1" role="dialog"
        aria-labelledby="model-8" style="display: none;     max-height: 1000px;
            overflow: auto; background:rgba(0, 0, 0, 0.5)" aria-modal="true">
        <div class="modal-content" style="width: 600px;margin-left: auto;margin-right: auto;
        margin-top: 25vh;
        place-content: center;">

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

                    <div>
                        <span id="select_ct">
                            <h5  style="color:#5FB7E9; font-size:16px; cursor:pointer">View Categories</h5><span>
                    </div>

                    <span style="font-size: 16px;"><a
                            href="https://empl-dev.site//files/tr/tr_attached/sample/sample_product_schema.xlsx"
                            style="color:#5FB7E9" id="sample_csv" class="sample_csv" download>Sample csv
                            file</a> or <a
                            href="https://empl-dev.site//files/tr/tr_attached/sample/sample_product_schema.xlsx"
                            style="color:#5FB7E9" id="sample_xls" class="sample_xls" download>Sample xls
                            file</a></span>
                    <br>
                   

                    <h4>NOTE: File must be in PDF,CSV,XLS or XLXS format</h4>

                    <div class="modal-footer">
                        <button type="button" style="background-color: #FF7676; color:white" class="btn hide_btn btn-sm"
                            data-dismiss="modal">Close</button>
                        <button class="btn btn-sm" type="submit" id="just_import"
                            style="background-color: #1DCE8E; color:white" data-dismiss="modal"> Import </button>
                    </div>

                </form>

            </div>

        </div>


    </div>


    <div class="modal fade show sample_show" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="model-8"
        style="display: none;     max-height: 1000px;
            overflow: auto; background:rgba(0, 0, 0, 0.5)" aria-modal="true">
        <div class="modal-content" style="width: 600px;margin-left: auto;margin-right: auto;
        margin-top: 25vh;
        place-content: center;">

            <div class="modal-header" style="background-color: #0480BE; color:white">
                <h3 class="modal-title" id="model-8" style="color:white">Categories
                </h3>
                <button type="button" class="close hide_btn back_export" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:white">×</span>
                </button>
            </div>

            <div class="modal-body invoice_history" style="width: 600px;">
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
                                                            style="width: 30%; text-align: ">
                                                            S/N
                                                        </th>
                                                        <th class="ant-table-cell" style="width: 100%">Category Name
                                                        </th>
                                                    </tr>
                                                </thead>


                                                <!-- <tbody class="ant-table-tbody" id="cat_data" id="myUL">




                                                </tbody> -->
                                            </table>
                                            <div class="load_pro"
                                                style="display:flex; justify-content: center; margin-top: 10px; ">
                                                <span class="ant-btn-loading-icon dt_loader_details"><span role="img"
                                                        aria-label="loading" class="anticon anticon-loading"><svg
                                                            viewBox="0 0 1024 1024" focusable="false"
                                                            class="anticon-spin" data-icon="loading" width="2em"
                                                            height="2em" fill="currentColor" aria-hidden="true">
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

    </main>

    <script>
    var base_url = window.location.origin;


    $(document).ready(function() {

        list_products("");

        // list_categories("");

        list_all_product("");

        list_shop_products("");

        // load_categories_for_pop();

        load_units_for_pop();

        $(document).on("click", ".back_export", function(e) {
            $(".sample_show").hide();
            $(".contact_import_show").show();
        })


        $(document).on("click", "#select_ct", function(e) {
            // import_file();
            list_categories()
        })


        function list_categories(page) {
            let company_id = localStorage.getItem("company_id");
            if (page == "") {
                var page = 1;
            }
            var limit = 10;

            $(".load_pro").show();
            $("#cat_data").hide();

            $.ajax({
                type: "GET",
                dataType: "json",
                cache: false,
                  headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
                url: base_url + "/api/pos/categoryList",
                data: {
                    store_id: localStorage.getItem('store_id'),

                    company_id: company_id
                },
                // limit: limit, page: page 

                success: function(response) {
                    if (response.status == "200") {
                        console.log(response.data);
                        if (response.data.length) {
                            var k = 1;
                            var list_whs = "";

                            $.each(response.data, function(i, v) {
                                list_whs += `
                                <tr data-row-key="1" class="ant-table-row ant-table-row-level-0 gradeA product_table even_${v.cat_id}" role="row" style="text-align:center" data-value="${v.product_name}"
                                data="${v.cat_id}" data-string="${v.cat_name}">

                                    <td class="ant-table-cell" style="text-align:left" id="for_cat_id_${v.cat_id}">${v.sn}</td>
                                    <td class="ant-table-cell" style="text-align:left" id="for_cat_${v.cat_id}">${v.cat_name}</td>
                                </td>
                                </tr>`;

                                k++;
                            });
                            $("#cat_data").html(list_whs);
                            $(".load_pro").hide();
                            $("#cat_data").show();
                            $(".contact_import_show").hide();
                            $(".sample_show").show();



                        }
                        $('#pagination_category').twbsPagination({
                            totalPages: Math.ceil(response.total_rows / limit),
                            visiblePages: 10,
                            onPageClick: function(event, page) {
                                list_categories(page);
                            }
                        });

                    } else {
                        //   $("#cat_data").append(`<tr data-row-key="1" class="ant-table-row ant-table-row-level-0 gradeA product_table " role="row" style="text-align:center"
                        //   ><td class="ant-table-cell" style="text-align:left">No Record</td><td class="ant-table-cell" style="text-align:left"></td></tr>`);
                        // $("#cat_data").show();
                    }
                    //   $('#pagination').twbsPagination({
                    //     totalPages: Math.ceil(response.total_rows / limit),
                    //     visiblePages: 10,
                    //     onPageClick: function(event, page) {
                    //       submit_product(page);
                    //     }
                    // });
                    if (response.status == "400") {
                        // coder error message
                        $(".load_pro").hide();

                        $("#cat_data").append(
                            `<tr data-row-key="1" class="ant-table-row ant-table-row-level-0 gradeA product_table1" role="row" style="text-align:center"
          ><td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left">No Record</td><td class="ant-table-cell" style="text-align:left"></td></tr>`
                        );
                        console.log(response);
                        $("#cat_data").show();

                    }
                    if (response.status == "401") {
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
            fd.append("store_id", localStorage.getItem("store_id"))
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
                url: base_url + "/api/pos/importProducts",
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
                        // 'Content-Type':'application/json'
            },
                url: base_url + "/api/pos/exportProducts",
                data: {
                store_id: localStorage.getItem('store_id'),

                    company_id: company_id,
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
                   "store_id": localStorage.getItem('store_id'),

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

        // console.log('all is well');
        //         JsBarcode("#barcode", "1234", {
        //   format: "pharmacode",
        //   lineColor: "#0aa",
        //   width:4,
        //   height:40,
        //   displayValue: false
        // });

        // $(".product_barc").on("click", function () {
        $(document).on("click", ".product_barc", function() {
            var barcode = $(this).attr("data");

            printBarcode(barcode);
        });

        function printBarcode(barcode) {
            if (barcode) {
                JsBarcode("#barcode", barcode);
                // JsBarcode("#barcode")
                //         .options({
                //             font: "OCRB"
                //         }) // Will affect all barcodes
                //         //   .EAN13("1234567890128", {fontSize: 18, textMargin: 0})
                //         //   .blank(20) 
                //         .EAN8(Number(barcode), {
                //             height: 85,
                //             flat: true,
                //             textPosition: "bottom",
                //             width: 4,
                //             fontSize: 16,
                //             marginTop: 15
                //         })
                //         .render();
                setTimeout(() => {
                    var divToPrint = document.querySelector("#barcode");
                    newWin = window.open("");
                    newWin.document.write(divToPrint.outerHTML);
                    newWin.print();
                    newWin.close();
                    location.reload()

                }, 2000);

            }

        }
        var bar;

        if (bar) {
            JsBarcode("#barcode")
                .options({
                    font: "OCRB"
                }) // Will affect all barcodes
                //   .EAN13("1234567890128", {fontSize: 18, textMargin: 0})
                //   .blank(20) 
                .EAN13(bar, {
                    height: 85,
                    flat: true,
                    textPosition: "bottom",
                    width: 4,
                    fontSize: 16,
                    marginTop: 15
                })
                .render();
        }

        $(window).scannerDetection();
        $(window).bind('scannerDetectionComplete', function(e, data) {
                console.log('complete ' + data.string);
                $("#product_barcod").val(data.string);
                $('#populate_barcode').hide();

            })
            .bind('scannerDetectionError', function(e, data) {
                console.log('detection error ' + data.string);
            })
            .bind('scannerDetectionReceive', function(e, data) {
                console.log('Recieve');
                console.log(data.evt.which);
            })



        $(document).on("click", "#populate_barcode", function() {
            $(".dt_barcode_details").show();

            var list_whs = "";
            $.ajax({

                type: "GET",
                dataType: "json",
                headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
                cache: false,
                url: base_url + "/api/pos/generateBarcode",
                data: {
                    store_id: localStorage.getItem('store_id'),

                    company_id: localStorage.getItem('company_id')
                },


                success: function(response) {
                    $('#populate_barcod').show();
                    // $('#populate_barcode').on('click', function() {
                    // var code = getRandomArbitrary();
                    var Input = $('#product_barcod');
                    // console.log(code);
                    Input.val(response.data.barcode);
                    $("#populate_barcode").hide();
                    $(".dt_barcode_details").hide();



                },
                error: function() {
                    console.log(response);
                }

            });

            // if ($('#item_barcode').val() != "") {
            //     $('#populate_barcod').hide();
            // } else {


            // });
            // }
        })

        function getRandomArbitrary() {
            return Math.floor(10000000 + Math.random() * 90000000)
        }

        load_products_for_filter("")
        $(".load_products").hide();

        function load_products_for_filter(page) {
            if (page == "") {
                var page = 1;
            }
            var limit = 20;

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
                url: base_url + "/api/pos/listProducts",
                data: {
                    store_id: localStorage.getItem('store_id'),

                    company_id: company_id,
                    product_id: "",
                    price_range: "",
                    limit: 10000,
                    page: page
                },


                success: function(response) {

                    var k = 1;
                    console.log(response.data)
                    $(response.data).each(function(i, v) {
                        console.log('chk',
                            `<option name=${v.product_name} value=${v.product_name} data-value=${v.product_id}></option>`
                        )
                        list_whs +=
                            `<option name='${v.product_name}' value='${v.product_name}' data-value=${v.product_id}></option>`;
                    })

                    $(`#options`).append(list_whs);
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
    })
    </script>



    <?php
    include("_common/footer.php");
    ?>