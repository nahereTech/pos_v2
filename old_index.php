<?php
include("_common/header.php");
?>

<!-- Site Content Wrapper -->
<div class="dt-content-wrapper">

    <!-- Site Content -->
    <div class="dt-content">

        <div class="dt-page__header">
            <h1 class="dt-page__title" style="padding:0px 10px"> Shop </h1>
        </div>

        <div class="row all_items">

            <!-- Grid Item -->
            <div class="col-xl-4 order-sm-2">

                <!-- Grid -->
                <div class="row">

                    <!-- Grid Item -->
                    <div class="col-12">

                        <!-- Card -->
                        <div class="" style="margin-left: 0px !important; margin-right:0px !important; 
                          border-radius:10px; max-height: 500px;
                         ">

                            <!-- Card Header -->
                            <!-- <div class="dt-card__header">

                                <div class="dt-card__heading">
                                    <h3 class="dt-card__title">Recent Activities</h3>
                                </div>


                            </div> -->
                            <!-- /card header -->
                            <div class="overflow-hidden" style="
                                /* max-height: 600px; */
                                /* width:90%; margin-left:auto; margin-right:auto;  */
                                        /* overflow-y: auto; */
                                        /* margin: 10px; */
                                        height:467px;
                                        background:white;
                                        border-radius:10px;
                                        box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.03);
                                    ">

                                <!-- Card Body -->
                                <div class="dt-card__body p-0" style="max-height: 600px;
                                 ">

                                    <!-- Tables -->
                                    <div class="table-responsive" style="height: 250px;
                                      overflow-y: auto;">
                                        <table class="table table-striped mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="text-uppercase w-2" width="2%" scope="col"></th>
                                                    <th class="text-uppercase w-30" width="30%" scope="col">Name</th>
                                                    <th class="text-uppercase w-30" style="text-align: center;"
                                                        width="30%" scope="col">Quantity</th>
                                                    <th class="text-uppercase w-30" width="30%" scope="col">Price</th>
                                                </tr>
                                            </thead>
                                            <tbody class="payment_table">
                                                <!-- <tr>
                                                <td style="width: 100%;">No Item has been selected</td>
                                                </tr> -->


                                                <!-- <tr>
                                                    <td><i class="icon icon-trash icon-fw icon-xl"></i></td>
                                                    <td>Chris</td>
                                                    <td>
                                                        <input type="number" value="5" min="0" max="1000" step="1" />
                                                    </td>
                                                    <td><a href="javascript:void(0)" class="btn-link">N10,000</a></td>
                                                </tr> -->

                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- <div
                                        style="background-color: #F5F5F5; border-radius: 10px;  padding: 20px; width: 90%; margin-right: auto; margin-left: auto;">
                                        <div class="d-flex flex-row bd-highlight"
                                            style="justify-content: space-between; padding:0px 25px;">
                                            <div class="p-2 dt-card__title">Discount</div>
                                            <div class="p-2 dt-card__title">N10,000</div>
                                        </div>
                                        <div class="d-flex flex-row bd-highlight"
                                            style="justify-content: space-between; padding:0px 25px;">
                                            <div class="p-2 dt-card__title">Sub Total</div>
                                            <div class="p-2 dt-card__title">N10,000</div>
                                        </div>
                                        <div class="d-flex flex-row bd-highlight "
                                            style="justify-content: space-between; padding:0px 25px;">
                                            <div class="p-2 dt-card__title">Tax</div>
                                            <div class="p-2 dt-card__title">N10,000</div>
                                        </div>
                                    </div> -->
                                    <div class="total" style="display:none; padding: 0px 20px; width: 90%; margin-right: auto; margin-left: auto;position: absolute;
                                     top: 300px;">
                                        <div class="d-flex flex-row bd-highlight"
                                            style=" justify-content: space-between; padding:0px 25px;">
                                            <div class="p-2 dt-card__title" style="font-weight: 500;">Total</div>
                                            <div class="p-2 dt-card__title all_total" style="font-weight: 400;"></div>
                                        </div>
                                    </div>
                                    <div class="pay dt-card__body" style="display: none; position: absolute;
                                    top: 350px;
                                    width: 90%;">
                                        <button type="button" class="switch_pay btn btn-block"
                                            style="background-color: #1DCE8E; color: white;">Pay</button>
                                    </div>
                                    <div class="dt-card__body not_selected"
                                        style="display: flex;justify-content: center;align-items: center;align-self: center;">
                                        <h3>No item has been selected</h3>
                                    </div>




                                </div>
                                <!-- /card body -->


                            </div>




                        </div>
                        <!-- /card -->

                    </div>
                    <!-- /grid item -->

                    <!-- Grid item -->


                    <!-- /grid item -->

                </div>
                <!-- /grid -->

            </div>
            <!-- /grid item -->

            <!-- Grid Item -->
            <div class="col-xl-8 order-sm-1">


                <div class="row shop_tab" style="margin-left: 0px !important; margin-right:0px !important; background: white; box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.03);
                 padding: 20px 10px; border-radius:10px; max-height: 500px;
                 overflow-y: auto;">
                    <div class="col-12" style="display: flex;justify-content: space-between; margin-bottom: 10px;">
                        <h4>All Products</h4>
                        <form class="search-box d-none d-lg-block" style="width: 200px; ">
                            <input class="form-control border-0 filter" placeholder="Search products..."
                                style="border: 1px solid #1DCE8E !important;">
                            <!-- <span class="search-icon text-light-gray"><i class="icon icon-search icon-lg"></i></span> -->
                        </form>
                    </div>

                    <div class="dt-loader products_loader " style="width:5%;display: block;position: relative;">
                        <svg class="circular" viewBox="25 25 50 50">
                            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2"
                                stroke-miterlimit="10"></circle>
                        </svg>
                    </div>












                    <!-- <div class="col-12">

                        <div class="dt-card">

                            <div class="row no-gutters">

                                <div class="col-md-3 col-sm-12">
                                    <div class="dt-card__body pr-sm-0">
                                        <h4 class="mb-2">Revenue Overview</h4>
                                        <ul class="dt-indicator mt-xl-5">
                                            <li class="dt-indicator-item">
                                                <h5 class="dt-indicator-title">Europe</h5>
                                                <div class="dt-indicator-item__info" data-fill="75" data-max="100"
                                                    data-percent="true">
                                                    <div class="dt-indicator-item__fill bg-info" style="width: 75%;">
                                                    </div>
                                                    <span class="dt-indicator-item__count ml-3">75% </span>
                                                </div>
                                            </li>
                                            <li class="dt-indicator-item">
                                                <h5 class="dt-indicator-title">North America</h5>
                                                <div class="dt-indicator-item__info" data-fill="85" data-max="100"
                                                    data-percent="true">
                                                    <div class="dt-indicator-item__fill bg-success" style="width: 85%;">
                                                    </div>
                                                    <span class="dt-indicator-item__count ml-3">85% </span>
                                                </div>
                                            </li>
                                            <li class="dt-indicator-item">
                                                <h5 class="dt-indicator-title">Japan, South Koria</h5>
                                                <div class="dt-indicator-item__info" data-fill="80" data-max="100"
                                                    data-percent="true">
                                                    <div class="dt-indicator-item__fill bg-yellow" style="width: 80%;">
                                                    </div>
                                                    <span class="dt-indicator-item__count ml-3">80% </span>
                                                </div>
                                            </li>
                                            <li class="dt-indicator-item">
                                                <h5 class="dt-indicator-title">Other</h5>
                                                <div class="dt-indicator-item__info" data-fill="38" data-max="100"
                                                    data-percent="true">
                                                    <div class="dt-indicator-item__fill bg-light" style="width: 38%;">
                                                    </div>
                                                    <span class="dt-indicator-item__count ml-3">38% </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div> -->






                    <!-- Grid -->
                    <!-- <div class="row all_items">

                                <div class=" col-xl-7">

                                    <div class="row" style="margin: 10px;
                                    max-height: 600px;
                                    overflow-y: auto;
                                    background-color: white; border-radius:10px

                                    ">
                                        <div class="col-md-4">

                                            <div class="card" style="width: 100%;">

                                                <img class="card-img-top"
                                                    src="https://assets.sainsburys-groceries.co.uk/gol/7828571/1/640x640.jpg"
                                                    style="width: 70%;
                                margin-left: auto;
                                margin-right: auto;" alt="Balancing">

                                                <div class="card-body" style="margin-top: 10px;
                                   padding: 0.1rem;">

                                                    <div style="display: grid; justify-content: center; "
                                                        class="card-text">
                                                        <span class="d-block"
                                                            style="margin-left: auto; margin-right: auto;">GROCERY</span>
                                                        <span
                                                            class="badge bg-light-green text-white text-uppercase mb-2">N670,500</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-4">

                                            <div class="card" style="width: 100%; ">

                                                <img class="card-img-top"
                                                    src="https://assets.sainsburys-groceries.co.uk/gol/7828571/1/640x640.jpg"
                                                    style="width: 70%;
                                                    margin-left: auto;
                                                    margin-right: auto;" alt="Balancing">

                                                <div class="card-body" style="margin-top: 10px;
                                                  padding: 0.1rem;">

                                                    <div style="display: grid; justify-content: center; "
                                                        class="card-text">
                                                        <span class="d-block"
                                                            style="margin-left: auto; margin-right: auto;">GROCERY</span>
                                                        <span
                                                            class="badge bg-light-green text-white text-uppercase mb-2">N670,500</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-4">


                                            <div class="card" style="width: 100%; ">

                                                <img class="card-img-top"
                                                    src="https://assets.sainsburys-groceries.co.uk/gol/7828571/1/640x640.jpg"
                                                    style="width: 70%;
                    margin-left: auto;
                    margin-right: auto;" alt="Balancing">

                                                <div class="card-body" style="margin-top: 10px;
                    padding: 0.1rem;">

                                                    <div style="display: grid; justify-content: center; "
                                                        class="card-text">
                                                        <span class="d-block"
                                                            style="margin-left: auto; margin-right: auto;">GROCERY</span>
                                                        <span
                                                            class="badge bg-light-green text-white text-uppercase mb-2">N670,500</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div> -->

                    <!-- 
                                        <div class="col-md-4">

                                            <div class="card" style="width: 100%; ">

                                                <img class="card-img-top"
                                                    src="https://assets.sainsburys-groceries.co.uk/gol/7828571/1/640x640.jpg"
                                                    style="width: 70%;
                    margin-left: auto;
                    margin-right: auto;" alt="Balancing">

                                                <div class="card-body" style="margin-top: 10px;
                    padding: 0.1rem;">

                                                    <div style="display: grid; justify-content: center; "
                                                        class="card-text">
                                                        <span class="d-block"
                                                            style="margin-left: auto; margin-right: auto;">GROCERY</span>
                                                        <span
                                                            class="badge bg-light-green text-white text-uppercase mb-2">N670,500</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-4">

                                            <div class="card" style="width: 100%; ">

                                                <img class="card-img-top"
                                                    src="https://www.meijer.com/content/dam/meijer/product/0073/75/3919/42/0073753919421_1_A1C1_0600.png"
                                                    style="width: 70%;
                    margin-left: auto;
                    margin-right: auto;" alt="Balancing">

                                                <div class="card-body" style="margin-top: 10px;
                    padding: 0.1rem;">

                                                    <div style="display: grid; justify-content: center; "
                                                        class="card-text">
                                                        <span class="d-block"
                                                            style="margin-left: auto; margin-right: auto;">GROCERY</span>
                                                        <span
                                                            class="badge bg-light-green text-white text-uppercase mb-2">N670,500</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-4">

                                            <div class="card" style="width: 100%;">
                                                <img class="card-img-top"
                                                    src="https://i5.walmartimages.com/asr/3e6d6d0b-1f16-428d-a22e-0754ec3f9a9f_1.7f2023d79c221d4cf60c55faf1e0e1a2.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF"
                                                    style="width: 70%;
                    margin-left: auto;
                    margin-right: auto;" alt="Balancing">

                                                <div class="card-body" style="margin-top: 10px;
                    padding: 0.1rem;">

                                                    <div style="display: grid; justify-content: center; "
                                                        class="card-text">
                                                        <span class="d-block"
                                                            style="margin-left: auto; margin-right: auto;">GROCERY</span>
                                                        <span
                                                            class="badge bg-light-green text-white text-uppercase mb-2">N670,500</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-4">

                                            <div class="card" style="width: 100%; ">

                                                <img class="card-img-top"
                                                    src="https://www.meijer.com/content/dam/meijer/product/0073/75/3919/42/0073753919421_1_A1C1_0600.png"
                                                    style="width: 70%;
                        margin-left: auto;
                        margin-right: auto;" alt="Balancing">

                                                <div class="card-body" style="margin-top: 10px;
                        padding: 0.1rem;">

                                                    <div style="display: grid; justify-content: center; "
                                                        class="card-text">
                                                        <span class="d-block"
                                                            style="margin-left: auto; margin-right: auto;">GROCERY</span>
                                                        <span
                                                            class="badge bg-light-green text-white text-uppercase mb-2">N670,500</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>


                                        <div class="col-md-4">

                                            <div class="card" style="width: 100%; ">

                                                <img class="card-img-top"
                                                    src="https://assets.sainsburys-groceries.co.uk/gol/7828571/1/640x640.jpg"
                                                    style="width: 70%;
                      margin-left: auto;
                      margin-right: auto;" alt="Balancing">

                                                <div class="card-body" style="margin-top: 10px;
                      padding: 0.1rem;">

                                                    <div style="display: grid; justify-content: center; "
                                                        class="card-text">
                                                        <span class="d-block"
                                                            style="margin-left: auto; margin-right: auto;">GROCERY</span>
                                                        <span
                                                            class="badge bg-light-green text-white text-uppercase mb-2">N670,500</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-4"> -->
                    <!-- <div class="card" style="width: 100%;">

                                                <img class="card-img-top"
                                                    src="https://assets.sainsburys-groceries.co.uk/gol/7828571/1/640x640.jpg"
                                                    style="width: 70%;
                      margin-left: auto;
                      margin-right: auto;" alt="Balancing">

                                                <div class="card-body" style="margin-top: 10px;
                      padding: 0.1rem;">

                                                    <div style="display: grid; justify-content: center; "
                                                        class="card-text">
                                                        <span class="d-block"
                                                            style="margin-left: auto; margin-right: auto;">GROCERY</span>
                                                        <span
                                                            class="badge bg-light-green text-white text-uppercase mb-2">N670,500</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>


                                        <div class="col-md-4">

                                            <div class="card" style="width: 100%;">

                                                <img class="card-img-top"
                                                    src="https://assets.sainsburys-groceries.co.uk/gol/7828571/1/640x640.jpg"
                                                    style="width: 70%;
                      margin-left: auto;
                      margin-right: auto;" alt="Balancing">

                                                <div class="card-body" style="margin-top: 10px;
                      padding: 0.1rem;">

                                                    <div style="display: grid; justify-content: center; "
                                                        class="card-text">
                                                        <span class="d-block"
                                                            style="margin-left: auto; margin-right: auto;">GROCERY</span>
                                                        <span
                                                            class="badge bg-light-green text-white text-uppercase mb-2">N670,500</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-4">

                                            <div class="card" style="width: 100%; ">

                                                <img class="card-img-top"
                                                    src="https://www.meijer.com/content/dam/meijer/product/0073/75/3919/42/0073753919421_1_A1C1_0600.png"
                                                    style="width: 70%;
                          margin-left: auto;
                          margin-right: auto;" alt="Balancing">

                                                <div class="card-body" style="margin-top: 10px;
                          padding: 0.1rem;">

                                                    <div style="display: grid; justify-content: center; "
                                                        class="card-text">
                                                        <span class="d-block"
                                                            style="margin-left: auto; margin-right: auto;">GROCERY</span>
                                                        <span
                                                            class="badge bg-light-green text-white text-uppercase mb-2">N670,500</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-4"> -->



                    <!-- /card -->

                </div>


                <!-- /grid item -->

            </div>

            <!-- /grid -->
            <div class="ps__rail-y" style="top: 0px; right: 0px; height: 1780px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 1729px;"></div>
            </div>

        </div>
        <!-- /grid item -->

        <!-- Grid Item -->

        <div class="container for_payment" style="display:none; background-color: white; margin:0px; max-width:100%">
            <div class="row">
                <div class="col-md-6">

                    <div style="padding: 30px;">

                        <span>Mode of Payment:</span>
                        <input type="radio" id="cash1" name="payment" value="cash">
                        <label for="age1">cash</label>
                        <input type="radio" id="card2" name="payment" value="debit card">
                        <label for="age2">debit card</label>


                    </div>



                    <!-- Card Body -->
                    <div class="dt-card__body">

                        <!-- Form -->
                        <form>

                            <!-- Form Group -->
                            <div class="form-group form-row" style="margin-bottom:10px">
                                <label for="normal-input-4" class="col-md-3 col-form-label text-sm-right"
                                    style="margin-left: -30px;">Cash tendered</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control cash tendered" id="normal-input-4"
                                        placeholder="Cash tendered">
                                </div>
                            </div>
                            <!-- /form group -->

                            <!-- Form Group -->
                            <div class="form-group form-row" style="margin-bottom:10px">
                                <label for="normal-input-4" class="col-md-3 col-form-label text-sm-right"
                                    style="margin-left: -30px;">Balance to customer</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control bal" id="normal-input-4"
                                        placeholder="Balance to customer">
                                </div>
                            </div>
                            <!-- /form group -->

                        </form>

                        <!-- Form Group -->
                        <div class="form-group form-row payment_row" style="margin-bottom:20px; margin-top:10px; margin-left:125px">
                            <!-- <label for="normal-input-4"  class="col-md-3 col-form-label text-sm-right" style="margin-left: -30px;">Balance to customer</label> -->
                            <div class="col-md-9" style="margin-bottom:20px; margin-top:10px;">
                                <button type="button" class="btn back mr-2 mb-2"
                                    style="background-color: #CECECE; ">Back</button>
                                <!-- <button type="button" class="btn mr-2 mb-2"
                                        style="background-color: #CECECE; ">Primary</button> -->
                                        <!-- data-toggle="modal"
                                    data-target="#form-modal"  -->
                                <button type="button" class="complete_receipt btn mr-2 mb-2" style="background-color: #1DCE8E; color:white">Complete
                                    Payment</button>
                            </div>
                            
                        </div>
                        <div class="dt-loader load_receipt" style="margin-left: auto;margin-right: auto;       width:5%">
                                    <svg class="circular" viewBox="25 25 50 50">
                                        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2"
                                            stroke-miterlimit="10"></circle>
                                    </svg>
                            </div>

                        <!-- /form group -->

                        <div class="col-md-4">
                        </div>
                        <div class="col-md-9">
                        </div>
                    </div>
                    <!-- /form -->

                    <!-- /card body -->

                </div>

                <div class="col-md-6">
                    <!-- Card Body -->

                    <div class="dt-card__body" style="margin-top: 80px;">

                        <!-- Form -->
                        <form>

                            <!-- Form Group -->
                            <div class="form-group form-row" style="margin-bottom:10px">
                                <label for="normal-input-4" class="col-md-3 col-form-label text-sm-right"
                                    style="margin-left: -30px;">Customer Phone</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control phone" id="normal-input-4"
                                        placeholder="Customer Phone">
                                </div>
                            </div>
                            <!-- /form group -->

                            <!-- Form Group -->
                            <div class="form-group form-row" style="margin-bottom:10px">
                                <label for="normal-input-4" class="col-md-3 col-form-label text-sm-right"
                                    style="margin-left: -30px;">Customer Name</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control cus_name" id="normal-input-4"
                                        placeholder="Customer Name">
                                </div>
                            </div>
                            <!-- /form group -->

                        </form>



                        <div class="col-md-4">
                        </div>
                        <div class="col-md-9">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- /grid -->
        <div class="modal fade show invoice_show" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="model-8"
            style="display: none;" aria-modal="true">
            <div class="modal-dialog modal-dialog-centered" role="document">

                <!-- Modal Content -->
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header" style="background-color: #1DCE8E; color:white">
                        <h3 class="modal-title" id="model-8" style="color:white">Confirm Receipt
                        </h3>
                        <button type="button" class="close hide_btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color:white">×</span>
                        </button>
                    </div>
                    <!-- /modal header -->

                    <!-- Modal Body -->
                    <div class="modal-body invoice" id="printTable">

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
                        <button type="button" class="btn print_tab btn-sm" style="background-color: #1DCE8E; color:white"
                            data-dismiss="modal">Print Receipt</button>
                    </div>
                    <!-- /modal footer -->

                </div>
                <!-- /modal content -->

            </div>
        </div>

    </div>
    <!-- /site content -->

    <!-- Footer -->
    <!-- <footer class="dt-footer">
        Copyright Company Name © 2019
      </footer> -->
    <!-- /footer -->

</div>
<!-- /site content wrapper -->

<!-- Theme Chooser -->
<!-- <div class="dt-customizer-toggle">
      <a href="javascript:void(0)" data-toggle="customizer"> <i class="icon icon-spin icon-setting"></i> </a>
    </div> -->
<!-- /theme chooser -->

<!-- Customizer Sidebar -->
<aside class="dt-customizer dt-drawer position-right">
    <div class="dt-customizer__inner">

        <!-- Customizer Header -->
        <div class="dt-customizer__header">

            <!-- Customizer Title -->
            <div class="dt-customizer__title">
                <h3 class="mb-0">Theme Settings</h3>
            </div>
            <!-- /customizer title -->

            <!-- Close Button -->
            <button type="button" class="close" data-toggle="customizer">
                <span aria-hidden="true">&times;</span>
            </button>
            <!-- /close button -->

        </div>
        <!-- /customizer header -->

        <!-- Customizer Body -->
        <div class="dt-customizer__body ps-custom-scrollbar">
            <!-- Customizer Body Inner  -->
            <div class="dt-customizer__body-inner">

                <!-- Section -->
                <section id="theme-chooser">
                    <h6 class="text-uppercase">Theme</h6>

                    <!-- Button Group -->
                    <div class="dt-customizer__btn-group btn-group btn-group-toggle btn-group mb-1"
                        data-toggle="buttons">
                        <label class="btn btn-outline-light"><input class="theme-option" type="radio" name="options"
                                id="theme-option-lite" value="lite">Lite</label>
                        <label class="btn btn-outline-light"><input class="theme-option" type="radio" name="options"
                                id="theme-option-semidark" value="semidark">Semi Dark</label>
                        <label class="btn btn-outline-light"><input class="theme-option" type="radio" name="options"
                                id="theme-option-dark" value="dark">Dark</label>
                    </div>
                    <!-- /button group -->

                </section>
                <!-- /section -->

                <!-- Section -->
                <section id="theme-style-chooser">
                    <h6 class="text-uppercase">Colors</h6>

                    <!-- List -->
                    <ul class="dt-list dt-list-sm dt-color-options">
                        <li class="dt-list__item">
                            <span class="dt-color-option" data-style="style-1"></span>
                        </li>
                        <li class="dt-list__item">
                            <span class="dt-color-option" data-style="style-2"></span>
                        </li>
                        <li class="dt-list__item">
                            <span class="dt-color-option" data-style="style-3"></span>
                        </li>
                        <li class="dt-list__item">
                            <span class="dt-color-option" data-style="style-4"></span>
                        </li>
                        <li class="dt-list__item">
                            <span class="dt-color-option" data-style="style-5"></span>
                        </li>
                        <li class="dt-list__item">
                            <span class="dt-color-option" data-style="style-6"></span>
                        </li>
                        <li class="dt-list__item">
                            <span class="dt-color-option" data-style="style-7"></span>
                        </li>
                        <li class="dt-list__item">
                            <span class="dt-color-option" data-style="style-8"></span>
                        </li>
                        <li class="dt-list__item">
                            <span class="dt-color-option" data-style="style-9"></span>
                        </li>
                        <li class="dt-list__item">
                            <span class="dt-color-option" data-style="style-10"></span>
                        </li>
                    </ul>
                    <!-- /list -->

                </section>
                <!-- /section -->

                <!-- Section -->
                <section>
                    <h6 class="text-uppercase">Nav Style</h6>

                    <!-- List -->
                    <ul class="dt-list">
                        <li class="dt-list__item">
                            <div class="choose-option">
                                <a href="http://wieldy.g-axon.work/html-bs4/default" target="_blank"
                                    class="choose-option__icon">
                                    <img src="assets/images/layouts/fixed.png" alt="Fixed Layout">
                                </a>
                            </div>
                        </li>
                        <li class="dt-list__item">
                            <div class="choose-option">
                                <a href="http://wieldy.g-axon.work/html-bs4/mini-sidebar" target="_blank"
                                    class="choose-option__icon">
                                    <img src="assets/images/layouts/mini-sidebar.png" alt="Mini Layout">
                                </a>
                            </div>
                        </li>
                        <li class="dt-list__item">
                            <div class="choose-option">
                                <a href="http://wieldy.g-axon.work/html-bs4/drawer" target="_blank"
                                    class="choose-option__icon">
                                    <img src="assets/images/layouts/drawer-nav.png" alt="Drawer Nav Layout">
                                </a>
                            </div>
                        </li>
                        <li class="dt-list__item">
                            <div class="choose-option">
                                <a href="http://wieldy.g-axon.work/html-bs4/back-office-mini" target="_blank"
                                    class="choose-option__icon">
                                    <img src="assets/images/layouts/no-header-mini-sidebar.png"
                                        alt="No Header Mini Sidebar Layout">
                                </a>
                            </div>
                        </li>
                        <li class="dt-list__item">
                            <div class="choose-option">
                                <a href="http://wieldy.g-axon.work/html-bs4/back-office" target="_blank"
                                    class="choose-option__icon">
                                    <img src="assets/images/layouts/vertical-no-header.png"
                                        alt="Vertical No Header Layout">
                                </a>
                            </div>
                        </li>
                        <li class="dt-list__item">
                            <div class="choose-option">
                                <a href="http://wieldy.g-axon.work/html-bs4/horizontal" target="_blank"
                                    class="choose-option__icon">
                                    <img src="assets/images/layouts/horizontal-default.png"
                                        alt="Horizontal Default Layout">
                                </a>
                            </div>
                        </li>
                        <li class="dt-list__item">
                            <div class="choose-option">
                                <a href="http://wieldy.g-axon.work/html-bs4/horizontal-dark" target="_blank"
                                    class="choose-option__icon">
                                    <img src="assets/images/layouts/horizontal-dark.png" alt="Horizontal Dark Layout">
                                </a>
                            </div>
                        </li>
                        <li class="dt-list__item">
                            <div class="choose-option">
                                <a href="http://wieldy.g-axon.work/html-bs4/horizontal-inside-nav" target="_blank"
                                    class="choose-option__icon">
                                    <img src="assets/images/layouts/horizontal-inside-nav.png"
                                        alt="Horizontal Inside Nav Layout">
                                </a>
                            </div>
                        </li>
                        <li class="dt-list__item">
                            <div class="choose-option">
                                <a href="http://wieldy.g-axon.work/html-bs4/horizontal-bottom-nav" target="_blank"
                                    class="choose-option__icon">
                                    <img src="assets/images/layouts/horizontal-bottom-nav.png"
                                        alt="Horizontal Bottom Nav Layout">
                                </a>
                            </div>
                        </li>
                        <li class="dt-list__item">
                            <div class="choose-option">
                                <a href="http://wieldy.g-axon.work/html-bs4/horizontal-top-nav" target="_blank"
                                    class="choose-option__icon">
                                    <img src="assets/images/layouts/horizontal-top-nav.png"
                                        alt="Horizontal Top Nav Layout">
                                </a>
                            </div>
                        </li>
                    </ul>
                    <!-- /list -->

                </section>
                <!-- /section -->

                <!-- Section -->
                <section id="layout-chooser">
                    <h6 class="text-uppercase">Layout</h6>

                    <!-- List -->
                    <ul class="dt-list dt-list-sm">
                        <li class="dt-list__item">
                            <div class="choose-option">
                                <a href="javascript:void(0)" class="choose-option__icon" data-layout="framed">
                                    <img src="assets/images/layouts/framed.png" alt="Framed">
                                </a>
                            </div>
                        </li>
                        <li class="dt-list__item">
                            <div class="choose-option">
                                <a href="javascript:void(0)" class="choose-option__icon" data-layout="full-width">
                                    <img src="assets/images/layouts/full-width.png" alt="Full Width">
                                </a>
                            </div>
                        </li>
                        <li class="dt-list__item">
                            <div class="choose-option">
                                <a href="javascript:void(0)" class="choose-option__icon" data-layout="boxed">
                                    <img src="assets/images/layouts/boxed.png" alt="Boxed">
                                </a>
                            </div>
                        </li>
                    </ul>
                    <!-- /list -->

                </section>
                <!-- /section -->

            </div>
            <!-- /customizer body inner -->
        </div>
        <!-- /customizer body -->

    </div>
</aside>
<!-- /customizer sidebar -->
</main>


<?php
include("_common/footer.php");
?>