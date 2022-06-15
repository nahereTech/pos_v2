<?php
include("_common/header.php");
?>

<div class="dt-content-wrapper">
    <!-- Site Content -->
    <div class="dt-content">
        <div class="gx-page-heading">
            <h1 class="gx-page-title" style="padding-bottom: 15px;">Products</h1>
        </div>

        <div class="dt-card item_table">
            <!-- Card Body -->
            <div class="dt-card__body">
                <!-- Tables -->
                <div class="table-responsive">
                    <div id="data-table_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="html5buttons"></div>

                        <div class="dataTables_length" id="data-table_length" style="padding: 10px 0px;">
                            <!-- <label>Show
                                entries<select name="data-table_length" aria-controls="data-table"
                                    class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> 
                            </label> -->
                            <button type="button" class="btn add_item btn-primary btn-lg" style="background-color: #038fde; color: white; padding: 5px 5px; font-size: 15px; padding: 7px; margin-bottom: 7px">
                                <span role="img" aria-label="add item" class="anticon anticon-download">
                                    <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="download" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M505.7 661a8 8 0 0012.6 0l112-141.7c4.1-5.2.4-12.9-6.3-12.9h-74.1V168c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v338.3H400c-6.7 0-10.4 7.7-6.3 12.9l112 141.8zM878 626h-60c-4.4 0-8 3.6-8 8v154H214V634c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v198c0 17.7 14.3 32 32 32h684c17.7 0 32-14.3 32-32V634c0-4.4-3.6-8-8-8z"
                                        ></path>
                                    </svg>
                                </span>
                                <span>Add item</span>
                            </button>
                        </div>
                        <!-- <div id="data-table_filter" class="dataTables_filter">
                            <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="data-table" /></label>
                        </div> -->
                        <!-- <div class="dataTables_info" id="data-table_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div> -->
                        <table id="data-table" class="table table-striped table-bordered table-hover dataTable" aria-describedby="data-table_info" role="grid">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 184px;">
                                        Product Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 256px;">
                                        Product Options
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 238px;">Product Category</th>
                                    <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 158px;">Product Price</th>
                                    <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 124px;">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="gradeA even" role="row">
                                    <td class="sorting_1">Grocery</td>
                                    <td>Not Available</td>
                                    <td>Vegetables</td>
                                    <td>N19,000</td>
                                    <td>
                                        <div class="dropdown">
                                            <button onclick="myFunction()" class="dropbtn">Action</button>
                                            <div id="myDropdown" class="dropdown-content">
                                                <a href="#home">Option 1</a>
                                                <a href="#about">Option 2</a>
                                                <a href="#contact">Option 3</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="gradeA even" role="row">
                                    <td class="sorting_1">Grocery</td>
                                    <td>Not Available</td>
                                    <td>Vegetables</td>
                                    <td>N19,000</td>
                                    <td>
                                        <div class="dropdown">
                                            <button onclick="myFunction()" class="dropbtn">Action</button>
                                            <div id="myDropdown" class="dropdown-content">
                                                <a href="#home">Option 1</a>
                                                <a href="#about">Option 2</a>
                                                <a href="#contact">Option 3</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="gradeA even" role="row">
                                    <td class="sorting_1">Grocery</td>
                                    <td>Not Available</td>
                                    <td>Vegetables</td>
                                    <td>N19,000</td>
                                    <td>
                                        <div class="dropdown">
                                            <button onclick="myFunction()" class="dropbtn">Action</button>
                                            <div id="myDropdown" style="min-width: 100px;" class="dropdown-content">
                                                <a href="#home">Option 1</a>
                                                <a href="#about">Option 2</a>
                                                <a href="#contact">Option 3</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Rendering engine</th>
                                    <th rowspan="1" colspan="1">Browser</th>
                                    <th rowspan="1" colspan="1">Platform(s)</th>
                                    <th rowspan="1" colspan="1">Engine version</th>
                                    <th rowspan="1" colspan="1">CSS grade</th>
                                </tr>
                            </tfoot> -->
                        </table>




                        <div class="dataTables_paginate paging_simple_numbers" id="data-table_paginate" style="background-color: ; float: left">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="data-table_previous"><a href="#" aria-controls="data-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                <li class="paginate_button page-item active"><a href="#" aria-controls="data-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                <li class="paginate_button page-item"><a href="#" aria-controls="data-table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                <li class="paginate_button page-item"><a href="#" aria-controls="data-table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                <li class="paginate_button page-item"><a href="#" aria-controls="data-table" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                <li class="paginate_button page-item"><a href="#" aria-controls="data-table" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                <li class="paginate_button page-item"><a href="#" aria-controls="data-table" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                <li class="paginate_button page-item next" id="data-table_next"><a href="#" aria-controls="data-table" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /tables -->
            </div>
            <!-- /card body -->
        </div>

        <div class="dt-card add_item_form" style="display: ";>

            <!-- Card Body -->
            <div class="dt-card__body">
                <!-- Tables -->
                <div class="table-responsive">
                    <div id="data-table_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="html5buttons"></div>

                        <div class="dataTables_length" id="data-table_length" style="padding: 10px 0px;">
                            <!-- <label>Show
                                entries<select name="data-table_length" aria-controls="data-table"
                                    class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> 
                            </label> -->
                            <button type="button" class="ant-btn ant-btn-primary ant-btn-lg" ant-click-animating-without-extra-node="false">
                                <span role="img" aria-label="download" class="anticon anticon-download"><svg viewBox="64 64 896 896" focusable="false" class="" data-icon="download" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M505.7 661a8 8 0 0012.6 0l112-141.7c4.1-5.2.4-12.9-6.3-12.9h-74.1V168c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v338.3H400c-6.7 0-10.4 7.7-6.3 12.9l112 141.8zM878 626h-60c-4.4 0-8 3.6-8 8v154H214V634c0-4.4-3.6-8-8-8h-60c-4.4 0-8 3.6-8 8v198c0 17.7 14.3 32 32 32h684c17.7 0 32-14.3 32-32V634c0-4.4-3.6-8-8-8z"></path></svg></span><span>Download</span>
                            </button>
                        </div>
                        <!-- <div id="data-table_filter" class="dataTables_filter">
                            <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="data-table" /></label>
                        </div> -->
                        <!-- <div class="dataTables_info" id="data-table_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div> -->
                        <table id="data-table" class="table table-striped table-bordered table-hover dataTable" aria-describedby="data-table_info" role="grid">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 184px;">
                                        Product Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 256px;">
                                        Product Options
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 238px;">Product Category</th>
                                    <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 158px;">Product Price</th>
                                    <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 124px;">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="gradeA even" role="row">
                                    <td class="sorting_1">Grocery</td>
                                    <td>Not Available</td>
                                    <td>Vegetables</td>
                                    <td>N19,000</td>
                                    <td>
                                        <div class="dropdown">
                                            <button onclick="myFunction()" class="dropbtn">Action</button>
                                            <div id="myDropdown" class="dropdown-content">
                                                <a href="#home">Option 1</a>
                                                <a href="#about">Option 2</a>
                                                <a href="#contact">Option 3</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="gradeA even" role="row">
                                    <td class="sorting_1">Grocery</td>
                                    <td>Not Available</td>
                                    <td>Vegetables</td>
                                    <td>N19,000</td>
                                    <td>
                                        <div class="dropdown">
                                            <button onclick="myFunction()" class="dropbtn">Action</button>
                                            <div id="myDropdown" class="dropdown-content">
                                                <a href="#home">Option 1</a>
                                                <a href="#about">Option 2</a>
                                                <a href="#contact">Option 3</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="gradeA even" role="row">
                                    <td class="sorting_1">Grocery</td>
                                    <td>Not Available</td>
                                    <td>Vegetables</td>
                                    <td>N19,000</td>
                                    <td>
                                        <div class="dropdown">
                                            <button onclick="myFunction()" class="dropbtn">Action</button>
                                            <div id="myDropdown" style="min-width: 100px;" class="dropdown-content">
                                                <a href="#home">Option 1</a>
                                                <a href="#about">Option 2</a>
                                                <a href="#contact">Option 3</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Rendering engine</th>
                                    <th rowspan="1" colspan="1">Browser</th>
                                    <th rowspan="1" colspan="1">Platform(s)</th>
                                    <th rowspan="1" colspan="1">Engine version</th>
                                    <th rowspan="1" colspan="1">CSS grade</th>
                                </tr>
                            </tfoot> -->
                        </table>

                        

                        
                        <div class="dataTables_paginate paging_simple_numbers" id="data-table_paginate" style="background-color: ; float: left">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="data-table_previous"><a href="#" aria-controls="data-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                <li class="paginate_button page-item active"><a href="#" aria-controls="data-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                <li class="paginate_button page-item"><a href="#" aria-controls="data-table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                <li class="paginate_button page-item"><a href="#" aria-controls="data-table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                <li class="paginate_button page-item"><a href="#" aria-controls="data-table" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                <li class="paginate_button page-item"><a href="#" aria-controls="data-table" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                <li class="paginate_button page-item"><a href="#" aria-controls="data-table" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                <li class="paginate_button page-item next" id="data-table_next"><a href="#" aria-controls="data-table" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /tables -->
            </div>
            <!-- /card body -->
        </div>
    </div>

    <div class="col-12 add_item_form2" style="display: none;">
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
                <form>
                    <!-- /form group -->

                    <!-- Form Group -->
                    <div class="form-group form-row">
                        <label for="normal-input-4" class="col-md-2 col-sm-3 col-form-label text-sm-right">Product Name</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="email" class="form-control" id="normal-input-4" />
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label for="normal-input-4" class="col-md-2 col-sm-3 col-form-label text-sm-right">Product Category</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="email" class="form-control" id="normal-input-4" />
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label for="normal-input-4" class="col-md-2 col-sm-3 col-form-label text-sm-right">Product Price</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="email" class="form-control" id="normal-input-4" />
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label for="normal-input-4" class="col-md-2 col-sm-3 col-form-label text-sm-right">Product Image</label>
                        <div class="col-md-10 col-sm-9">
                            <input style="padding-bottom: 35px;" type="file" class="form-control" id="normal-input-4" />
                        </div>
                    </div>
                    <!-- /form group -->

                    <!-- Form Group -->

                    <button style="width: 50%; margin-left: auto; margin-right: auto;" type="button" class="btn btn-primary send_btn btn-block">Send</button>
                </form>
                <!-- /form -->
            </div>
            <!-- /card body -->
        </div>
        <!-- /card -->
    </div>

    <!-- </main> -->
</div>

<?php
include("_common/footer.php");
?>
