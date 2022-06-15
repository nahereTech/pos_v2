<?php
include("_common/header.php");
?>

<style>

       @media only screen and (max-width: 600px){
.for_mobile_modal{
            margin-left: 0px !important;
        }
       /* .for_mob_filter input{
            margin-bottom: 10px;
        }
        button.go_btn{
            margin-top: 23px;
             margin-left: 0px !important; 
            background-color: #1DCE8E;
            color: #fff;
            width: 100%;
        }
        }*/
       }
</style>

<!-- Site Content Wrapper -->
<div class="dt-content-wrapper">

    <!-- Site Content -->
    <div class="dt-content" id="shop_role">

        <div class="dt-page__header">
            <h1 class="dt-page__title" style=""> Shop </h1>
        </div>


        <div class="row" id="homepage" style="display: none">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br>
                        <div class="bs-example" data-example-id="simple-jumbotron">
                            <div class="jumbotron">
                                <div style="font-size: 30px; font-weight: bold">Hello, <span
                                        class="hi_user_name"></span>!</div>
                                        <p style="font-size: 16px;">Welcome to NaHere Point of Sales Software (POS).
                                </p>
                               
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="row" id="no_permission_dv" style="display: none">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br>
                        <div class="bs-example" data-example-id="simple-jumbotron">
                            <div class="jumbotron">
                                <div style="font-size: 30px; font-weight: bold">Hello, <span
                                        class="hi_user_name"></span>!</div>
                                <p style="font-size: 16px;">Welcome to NaHere Point of Sales Software (POS). <font
                                        color="red">The POS
                                        admin needs to give you a role before you can perform any activities on the app.
                                    </font>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="row" id="admins_no_permission_dv" style="display: none">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br>
                        <div class="bs-example" data-example-id="simple-jumbotron">
                            <div class="jumbotron" style="display:none;">
                                <div style="font-size: 30px; font-weight: bold">Hello, <span
                                        class="hi_user_name"></span>!</div>
                                <p style="font-size: 16px;">You are admin and need to completely set up your account
                                    before accessing more
                                    features on this POS.</p>
                                <ul style="font-size: 18px">

                                    <li>
                                        <a href="all_stores"><u>
                                                Create a Store</u>
                                            <span style="color: #339156">
                                                <i class="fa " aria-hidden="true" id="crt_whs"></i>
                                            </span>
                                        </a>
                                    </li>


                                    <li>
                                        <a href="users"><u>
                                                Assign Roles to Yourself or Others</u>
                                            <span style="color: #d96452">
                                                <i class="fa " aria-hidden="true" id="assgn_roles"></i>
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

        <div class="ant-row verified" id="verified">

            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-16">

                <div class="ant-card gx-card-widget ant-card-bordered">
                    <div class="ant-card-body">
                        <div class="gx-dealclose-header" style="display: flex; justify-content:space-between">
                            <div>
                                <h4>All Products</h4>

                            </div>
                            <div>

                                <div>

                                    <h2 class="h4 gx-mb-2">
                                        <form class="search-box d-lg-block" style="width: 200px; ">
                                            <input class="form-control border-0 filter" placeholder="Search products..."
                                                style="border: 1px solid #1DCE8E !important;">
                                            <!-- <span class="search-icon text-light-gray"><i class="icon icon-search icon-lg"></i></span> -->
                                        </form>

                                        <!-- <div class="ant-col ant-form-item-control">
                                            <div class="ant-form-item-control-input">
                                                <div class="ant-form-item-control-input-content"><span
                                                        class="ant-input-affix-wrapper"><span
                                                            class="ant-input-prefix"><span role="img" aria-label="user"
                                                                class="anticon anticon-user"
                                                                style="color: rgba(0, 0, 0, 0.25);"><svg
                                                                    viewBox="64 64 896 896" focusable="false" class=""
                                                                    data-icon="user" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true">
                                                                    <path
                                                                        d="M858.5 763.6a374 374 0 00-80.6-119.5 375.63 375.63 0 00-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 00-80.6 119.5A371.7 371.7 0 00136 901.8a8 8 0 008 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 008-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z">
                                                                    </path>
                                                                </svg></span></span><input placeholder="Search Items"
                                                            type="text" id="basic_email" class="ant-input"
                                                            value=""></span>
                                                </div>
                                            </div>
                                        </div> -->
                                    </h2>
                                </div>



                            </div>

                            <!-- <div> -->
                            <!-- <button type="button" class="ant-btn ant-btn-lg" style="background-color: #ed7b80; color:#fff"><span role="img"
                                            aria-label="download" class="anticon anticon-download">
                                      
                                            <svg
                                                viewBox="64 64 896 896" focusable="false" class="" data-icon="download"
                                                width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                              <path d="M 32 3 C 24.2 3 17 6 11.5 11.5 C 6 17 3 24.3 3 32 C 3 39.7 6 47 11.5 52.5 C 17 58 24.3 61 32 61 C 39.7 61 47 58 52.5 52.5 C 58 47 61 39.8 61 32 C 61 24.2 58 17 52.5 11.5 C 47 6 39.8 3 32 3 z M 32 6 C 39 6 45.500391 8.6996094 50.400391 13.599609 C 55.300391 18.499609 58 25 58 32 C 58 39 55.300391 45.500391 50.400391 50.400391 C 45.500391 55.300391 39 58 32 58 C 25 58 18.499609 55.300391 13.599609 50.400391 C 8.6996094 45.500391 6 39 6 32 C 6 25 8.6996094 18.499609 13.599609 13.599609 C 18.499609 8.6996094 25 6 32 6 z M 25.289062 23.681641 A 1.5026503 1.5026503 0 0 0 24.234375 26.257812 L 29.875 31.941406 L 24.140625 37.632812 A 1.5026503 1.5026503 0 1 0 26.257812 39.765625 L 31.992188 34.074219 L 37.632812 39.757812 A 1.5026503 1.5026503 0 1 0 39.765625 37.640625 L 34.125 31.957031 L 39.757812 26.367188 A 1.5026503 1.5026503 0 1 0 37.640625 24.234375 L 32.007812 29.824219 L 26.367188 24.140625 A 1.5026503 1.5026503 0 0 0 25.289062 23.681641 z"></path>
                                            </svg>
                                        </span><span>Cancel</span></button> -->
                            <!-- </div> -->


                        </div>



                        <div class="br" style="display: none; margin-top:10px"></div>
                        <div class="ant-table-wrapper gx-table-responsive">
                            <div class="ant-spin-nested-loading">
                                <div class="ant-spin-container">
                                    <div class="ant-table">
                                        <div class="ant-table-container">
                                            <div class="ant-table-content">
                                                <table style="table-layout: auto;">
                                                    <colgroup></colgroup>
                                                    <thead class="ant-table-thead for_head" style="display: none;">
                                                        <tr>
                                                            <th class="ant-table-cell"
                                                                style="background-color: #1DCE8E; color:white; width:10%;">
                                                                Image</th>
                                                            <th class="ant-table-cell"
                                                                style="background-color: #1DCE8E; color:white; width:35%;">
                                                                Item Name</th>

                                                            <th class="ant-table-cell"
                                                                style="background-color: #1DCE8E; color:white; width: 15%">
                                                                Price(₦)</th>
                                                            <th class="ant-table-cell"
                                                                style=" background-color: #1DCE8E; color:white; width: 30%">
                                                                Actions</th>
                                                            <!-- <th class="ant-table-cell"
                                                                style="background-color: #1DCE8E; color:white; width: 5%">
                                                            </th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody class="ant-table-tbody" id="shop_table">

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
                <div class="ant-card gx-card-widget ant-card-bordered">
                    <div class="ant-card-body">
                        <div class="gx-dealclose-header">
                            <div>
                                <h2 class="h4 gx-mb-2">
                                    <!-- <div class="ant-col ant-form-item-control">
                                        <div class="ant-form-item-control-input">
                                            <div class="ant-form-item-control-input-content"><span
                                                    class="ant-input-affix-wrapper"><span class="ant-input-prefix"><span
                                                            role="img" aria-label="user" class="anticon anticon-user"
                                                            style="color: rgba(0, 0, 0, 0.25);"><svg
                                                                viewBox="64 64 896 896" focusable="false" class=""
                                                                data-icon="user" width="1em" height="1em"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path
                                                                    d="M858.5 763.6a374 374 0 00-80.6-119.5 375.63 375.63 0 00-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 00-80.6 119.5A371.7 371.7 0 00136 901.8a8 8 0 008 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 008-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z">
                                                                </path>
                                                            </svg></span></span><input placeholder="Search Items"
                                                        type="text" id="basic_email" class="ant-input" value=""></span>
                                            </div>
                                        </div>
                                    </div> -->
                                </h2>
                                <!-- <p class="gx-text-grey">This year</p> -->
                            </div>
                            <!-- <div class="gx-dealclose-header-right">
                                <p class="gx-mb-2">
                                    <span class="gx-mb-0 ant-badge ant-badge-status ant-badge-not-a-wrapper"><span class="ant-badge-status-dot ant-badge-status-warning"></span><span class="ant-badge-status-text"></span></span>Queries
                                </p>
                                <p class="gx-ml-2 gx-mb-2">
                                    <span class="gx-mb-0 ant-badge ant-badge-status ant-badge-not-a-wrapper"><span class="ant-badge-status-dot ant-badge-status-processing"></span><span class="ant-badge-status-text"></span></span>Closed Deals
                                </p>
                            </div> -->

                            <!-- <span class="search-icon text-light-gray"><i class="icon icon-search icon-lg"></i></span> -->
                            </form>
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
                                                            <th class="ant-table-cell"
                                                                style="background-color: #1DCE8E; color:white; width:65%;">
                                                                Item</th>
                                                            <th class="ant-table-cell"
                                                                style=" background-color: #1DCE8E; color:white; width: 15%">
                                                                Quantity</th>
                                                            <th class="ant-table-cell"
                                                                style="background-color: #1DCE8E; color:white; width: 15%">
                                                                Price(₦)</th>
                                                            <th class="ant-table-cell"
                                                                style="background-color: #1DCE8E; color:white; width: 5%">
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="ant-table-tbody" id="selected_item">


                                                        <!-- 
                                                        
                                                        <tr data-row-key="1" class="ant-table-row ant-table-row-level-0"
                                                            style="font-size: 16px">
                                                            <td class="ant-table-cell" style="display: flex;">
                                                                <div>
                                                                    <img class="gx-rounded-lg gx-width-100"
                                                                        src="https://wieldy.g-axon.work/static/media/pexels-photo-home-3.911d8705.jpg"
                                                                        alt="..." style="width: 70px; height:50px;">
                                                                </div>
                                                                <div style="margin-left: 20px;
                                                            margin-top: 5px;">
                                                                    </span><span>Chivita <br> SKU-102920</span>
                                                                </div>


                                                            </td>

                                                            <td class="ant-table-cell">
                                                                <div class="ant-input-number">
                                                                    <div class="ant-input-number-handler-wrap"><span
                                                                            role="button" aria-label="Increase Value"
                                                                            class="ant-input-number-handler ant-input-number-handler-up btn-plus plus_ "
                                                                            id="plus_30" data="30"><span role="img"
                                                                                aria-label="up"
                                                                                class="anticon anticon-up ant-input-number-handler-up-inner"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" class=""
                                                                                    data-icon="up" width="1em"
                                                                                    height="1em" fill="currentColor"
                                                                                    aria-hidden="true">
                                                                                    <path
                                                                                        d="M890.5 755.3L537.9 269.2c-12.8-17.6-39-17.6-51.7 0L133.5 755.3A8 8 0 00140 768h75c5.1 0 9.9-2.5 12.9-6.6L512 369.8l284.1 391.6c3 4.1 7.8 6.6 12.9 6.6h75c6.5 0 10.3-7.4 6.5-12.7z">
                                                                                    </path>
                                                                                </svg></span></span><span
                                                                            unselectable="unselectable" role="button"
                                                                            aria-label="Decrease Value"
                                                                            class="ant-input-number-handler ant-input-number-handler-down minus_"
                                                                            data="30" id="minus_30"><span role="img"
                                                                                aria-label="down"
                                                                                class="anticon anticon-down ant-input-number-handler-down-inner"><svg
                                                                                    viewBox="64 64 896 896"
                                                                                    focusable="false" class=""
                                                                                    data-icon="down" width="1em"
                                                                                    height="1em" fill="currentColor"
                                                                                    aria-hidden="true">
                                                                                    <path
                                                                                        d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z">
                                                                                    </path>
                                                                                </svg></span></span></div>
                                                                    <div class="ant-input-number-input-wrap"><input
                                                                            role="spinbutton" aria-valuemin="1"
                                                                            aria-valuemax="100000" data="30"
                                                                            aria-valuenow="6" autocomplete="off"
                                                                            max="100000" min="1" step="1" value="1"
                                                                            id="add_nu_30"
                                                                            class="form-control ant-input-number-input trans_input">
                                                                    </div>
                                                                </div>
                                                       
                                                            </td>
                                                            <td class="ant-table-cell">6,000</td>
                                                            <td class="del_tab" id="del_tab_31"><i
                                                                    class="icon icon-trash icon-fw icon-xl"
                                                                    style="color:#dd2a36"></i></td>
                                                           
                                                        </tr>

                                                        
                                                        }
                                                        ?> -->



                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>



                        <!-- <div id="undefined" class="recharts-responsive-container" style="width: 100%; height: 90px;">
                            <div></div>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-8">
                <div class="ant-card gx-card-widget ant-card-bordered">
                    <div class="ant-card-body">
                        <div class="gx-dealclose-header">

                        </div>


                        <div class="ant-table-wrapper gx-table-responsive">
                            <div class="ant-spin-nested-loading">
                                <div class="ant-spin-container">
                                    <div class="ant-table" style="overflow: none !important;">
                                        <div class="ant-table-container">
                                            <div class="ant-table-content">
                                                <table style="table-layout: auto;">
                                                    <!-- <colgroup></colgroup>
                                                    <thead class="ant-table-thead">
                                                        <tr>
                                                            <th class="ant-table-cell" style="width: 65%">Name</th>
                                                            <th class="ant-table-cell" style="width: 15%">Quantity</th>
                                                            <th class="ant-table-cell" style="width: 15%">Price(₦)</th>
                                                            <th class="ant-table-cell" style="width: 5%"></th>
                                                        </tr>
                                                    </thead> -->
                                                    <tbody class="ant-table-tbody">

                                                        <tr data-row-key="1"
                                                            class="ant-table-row ant-table-row-level-0">
                                                            <td class="ant-table-cell" colspan="2"
                                                                style="font-size: 15px;">
                                                                <span>Sub-total</span>
                                                            </td>
                                                            <td class="ant-table-cell all_total sub-t" colspan="2"
                                                                style="text-align: right;">₦0.00</td>
                                                        </tr>

                                                        <tr data-row-key="1" id="for_disc"
                                                            class="ant-table-row ant-table-row-level-0"
                                                            style="font-size: 15px;">
                                                            <td class="ant-table-cell" colspan="2">
                                                                <span><i id="add_vat" class="fa fa-plus"
                                                                        aria-hidden="true"></i></span>
                                                                <span class="">VAT</span>
                                                            </td>
                                                            <td class="ant-table-cell all_disc sub-t" colspan="2"
                                                                style="text-align: right;">₦0.00</td>
                                                        </tr>

                                                        <tr data-row-key="1" class="ant-table-row ant-table-row-level-0"
                                                            style="font-size: 15px;">
                                                            <td class="ant-table-cell" colspan="2">
                                                                <span
                                                                    style="color:#dd2a36; font-weight: bold">TOTAL</span>
                                                            </td>
                                                            <td class="ant-table-cell all_total sub-t" colspan="2"
                                                                style="text-align: right;">₦0.00</td>
                                                        </tr>

                                                        <!-- <tr data-row-key="1" class="ant-table-row ant-table-row-level-0" style="font-size: 20px; background-color: ; ">
                                                            <td class="ant-table-cell" colspan="4">
                                                                <button type="button" class="ant-btn ant-btn-primary ant-btn-lg" style="width: 100%; font-size: 30px; padding: 10px"><span>Primary</span></button>
                                                            </td>
                                                        </tr> -->



                                                    </tbody>
                                                </table>
                                                <div
                                                    style="display:flex; justify-content: space-between; border-bottom: 1px solid #e8e8e8;margin-bottom:10px">
                                                    <div style="border-right: 1px solid #e8e8e8; width: 50%;">
                                                        <h2
                                                            style="margin-top: 10px; margin-left:15px; font-size:15px; font-weight:500">
                                                            PAID</h2>
                                                        <h4 class="for_paid" style="max-width:90%; overflow:auto; text-align: center;">₦0.00</h4>
                                                    </div>
                                                    <div style="width: 50%;">
                                                        <h2
                                                            style="margin-top: 10px; margin-left:15px; font-size:15px; font-weight:500">
                                                            DUE</h2>
                                                        <h4 class="for_due"
                                                            style="max-width:90%; overflow:auto; text-align: center; color:#dd2a36; font-weight:500">
                                                            ₦0.00</h4>
                                                    </div>
                                                </div>
                                                <br>
                                                <div style=" width: 90%; margin-left:20px">
                                                    <h2 style="font-size: 15px; font-weight:500;">ADD PAYMENT</h2>
                                                    <div
                                                        style="display: flex;width:100%; border:2px solid #1DCE8E; border-radius:10px; height:35px; margin-bottom:10px">
                                                        <span style="background-color: #1DCE8E;border-radius: 10px 0 0px 10px;
                                                        
                                                            display: grid;place-content: center;
                                                            border-radius: 10px 0 0px 10px;
                                                            width: 200px;">
                                                            <h4
                                                                style="margin:0px; background-color: #1DCE8E;color:white;">
                                                                Cash</h4>
                                                            <!-- <button type="button" class="ant-btn ant-btn-sm"
                                                            style="background-color:#1DCE8E;color:white;     /* padding: 0; */
                                                            border-radius: 5px;
                                                            margin: 0px;
                                                            background-color: #1DCE8E;
                                                            color: white;
                                                            width: 100px;"
                                                            ant-click-animating-without-extra-node="false"><span>Cash</span></button> -->
                                                        </span>
                                                        <div style="display: flex; margin-left:10px"><span
                                                                style="font-size: 15px; align-self: center;">₦</span><input
                                                                type="text" class="for_cash" value="" style="
                                                                margin-right: 5%;
                                                                border: none;
                                                                width: 100%;
                                                                border-bottom: 1px solid #d9d9d9;"
                                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                        </div>
                                                    </div>

                                                    <div
                                                        style="display: flex;width:100%; border:2px solid #1DCE8E; border-radius:10px; height:35px; margin-bottom:10px">

                                                        <span style="background-color: #1DCE8E;border-radius: 10px 0 0px 10px;
                                                        
                                                        display: grid;place-content: center;
                                                        border-radius: 10px 0 0px 10px;
                                                        width: 200px;">
                                                            <h4
                                                                style="margin:0px; background-color: #1DCE8E;color:white;">
                                                                Debit Card</h4>

                                                        </span>
                                                        <!-- <button type="button" class="ant-btn ant-btn-sm"
                                                            style="background-color:#1DCE8E;color:white"
                                                            ant-click-animating-without-extra-node="false"><span>Debit
                                                                Card</span></button> -->
                                                        <div style="display: flex; margin-left:10px"><span
                                                                style="font-size: 15px; align-self: center;">₦</span><input
                                                                type="text" class="for_debit" value="" style="
                                                                margin-right: 5%;
                                                                border: none;
                                                                width: 100%;
                                                                border-bottom: 1px solid #d9d9d9;"
                                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                        </div>
                                                    </div>

                                                    <!-- <div
                                                        style="display: flex; justify-content:space-between; width:100%;">
                                                        <button type="button" class="ant-btn ant-btn-sm"
                                                            style="background-color:#1DCE8E;color:white"
                                                            ant-click-animating-without-extra-node="false"><span>Promo
                                                                codes</span></button>
                                                        <div style="display: flex; width: 25%;"><span
                                                                style="font-size: 15px; align-self: center;">₦</span><input
                                                                type="text" class="" value="" style="height: 25px;
                                                            margin-right: 5%;
                                                            border: none;
                                                            margin-top: 7px;
                                                            width: 100%;
                                                            border-bottom: 1px solid #d9d9d9;">
                                                        </div>
                                                    </div> -->

                                                    <!-- <button type="button" class="ant-btn ant-btn-lg"
                                                    style="width: 50%; padding: 0px; background-color:#1DCE8E;color:white"><span>GIFT CARD</span>
                                                </button> -->

                                                </div>

                                                <button type="button" class="ant-btn ant-btn-lg complete_receipt"
                                                    style="width: 90%; font-size: 20px; margin-left:20px; padding: 0px; background-color:#1DCE8E;color:white"><span>End
                                                        Sale</span></button>

                                                <button type="button"
                                                    style="display:none; width: 90%; font-size: 20px; margin-left:20px; padding: 0px; background-color:#1DCE8E;color:white"
                                                    class="ant-btn  ant-btn-loading receipt_loading"><span>Loading...</span></button>
                                                <!-- <span
                                                        class="ant-btn-loading-icon" style=""><span role="img"
                                                            aria-label="loading" class="anticon anticon-loading"><svg
                                                                viewBox="0 0 1024 1024" focusable="false"
                                                                class="anticon-spin" data-icon="loading" width="1em"
                                                                height="1em" fill="currentColor" aria-hidden="true">
                                                                <path
                                                                    d="M988 548c-19.9 0-36-16.1-36-36 0-59.4-11.6-117-34.6-171.3a440.45 440.45 0 00-94.3-139.9 437.71 437.71 0 00-139.9-94.3C629 83.6 571.4 72 512 72c-19.9 0-36-16.1-36-36s16.1-36 36-36c69.1 0 136.2 13.5 199.3 40.3C772.3 66 827 103 874 150c47 47 83.9 101.8 109.7 162.7 26.7 63.1 40.2 130.2 40.2 199.3.1 19.9-16 36-35.9 36z">
                                                                </path>
                                                            </svg></span></span> -->

                                            </div>
                                        </div>
                                    </div>

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


        <!-- /grid -->
        <div class="modal fade show invoice_show" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="model-8"
            style="display: none; max-height:900px;  overflow:auto" aria-modal="true">
            <div class="modal-dialog modal-dialog-centered for_mobile_modal" role="document" style="margin-left: 500px;">

                <!-- Modal Content -->
                <div class="modal-content" style="width: 700px;">

                    <!-- Modal Header -->
                    <div class="modal-header" style=" color:white">
                        <h3 class="modal-title" id="model-8" style="color:white">Confirm Receipt
                        </h3>
                        <button type="button" class="close hide_btn end_tran" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color:white">×</span>
                        </button>
                    </div>
                    <!-- /modal header -->

                    <!-- Modal Body -->
                    <div class="modal-body invoice" id="printTable" style="width:700px">

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
                        <button type="button" style="background-color: #FF7676; color:white"
                            class="btn end_tran hide_btn btn-sm" data-dismiss="modal">Close</button>
                        <input type="submit" value="Save & Print Receipt" class="btn print_tab btn-sm"
                            style="background-color: #1DCE8E; color:white" />
                    </div>
                    <!-- /modal footer -->
                </div>
                <!-- /modal content -->
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



        <div class="ant-row" style="display: none">
            <div class="ant-col ant-col-24">
                <div class="ant-card gx-card ant-card-bordered">
                    <div class="ant-card-head">
                        <div class="ant-card-head-wrapper">
                            <div class="ant-card-head-title">Horizontal Login Form</div>
                        </div>
                    </div>
                    <div class="ant-card-body">
                        <form id="basic" class="ant-form ant-form-horizontal gx-login-form gx-form-row0">
                            <div class="ant-row ant-form-item">
                                <div class="ant-col ant-form-item-control">
                                    <div class="ant-form-item-control-input">
                                        <div class="ant-form-item-control-input-content">
                                            <span class="ant-input-affix-wrapper">
                                                <span class="ant-input-prefix">
                                                    <span role="img" aria-label="user" class="anticon anticon-user"
                                                        style="color: rgba(0, 0, 0, 0.25);">
                                                        <svg viewBox="64 64 896 896" focusable="false" class=""
                                                            data-icon="user" width="1em" height="1em"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M858.5 763.6a374 374 0 00-80.6-119.5 375.63 375.63 0 00-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 00-80.6 119.5A371.7 371.7 0 00136 901.8a8 8 0 008 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 008-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </span>
                                                <input placeholder="Email" type="text" id="basic_email"
                                                    class="ant-input" value="demo@example.com" />
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
                                                    <span role="img" aria-label="lock" class="anticon anticon-lock"
                                                        style="color: rgba(0, 0, 0, 0.25);">
                                                        <svg viewBox="64 64 896 896" focusable="false" class=""
                                                            data-icon="lock" width="1em" height="1em"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M832 464h-68V240c0-70.7-57.3-128-128-128H388c-70.7 0-128 57.3-128 128v224h-68c-17.7 0-32 14.3-32 32v384c0 17.7 14.3 32 32 32h640c17.7 0 32-14.3 32-32V496c0-17.7-14.3-32-32-32zM332 240c0-30.9 25.1-56 56-56h248c30.9 0 56 25.1 56 56v224H332V240zm460 600H232V536h560v304zM484 701v53c0 4.4 3.6 8 8 8h40c4.4 0 8-3.6 8-8v-53a48.01 48.01 0 10-56 0z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </span>
                                                <input type="password" placeholder="Password" id="basic_password"
                                                    class="ant-input" />
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
                                                    <span role="img" aria-label="lock" class="anticon anticon-lock"
                                                        style="color: rgba(0, 0, 0, 0.25);">
                                                        <svg viewBox="64 64 896 896" focusable="false" class=""
                                                            data-icon="lock" width="1em" height="1em"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M832 464h-68V240c0-70.7-57.3-128-128-128H388c-70.7 0-128 57.3-128 128v224h-68c-17.7 0-32 14.3-32 32v384c0 17.7 14.3 32 32 32h640c17.7 0 32-14.3 32-32V496c0-17.7-14.3-32-32-32zM332 240c0-30.9 25.1-56 56-56h248c30.9 0 56 25.1 56 56v224H332V240zm460 600H232V536h560v304zM484 701v53c0 4.4 3.6 8 8 8h40c4.4 0 8-3.6 8-8v-53a48.01 48.01 0 10-56 0z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </span>
                                                <input type="password" placeholder="Password" id="basic_password"
                                                    class="ant-input" />
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
                                                    <span class="ant-checkbox"><input type="checkbox"
                                                            class="ant-checkbox-input" value="" /><span
                                                            class="ant-checkbox-inner"></span></span><span>Remember
                                                        me</span>
                                                </label>
                                                <span class="gx-link login-form-forgot">Forgot password</span>
                                            </span>
                                            <button type="submit"
                                                class="ant-btn login-form-button gx-mt-1 ant-btn-primary"><span>Log
                                                    in</span></button><span class="gx-d-block gx-mt-2">Or <span
                                                    class="gx-link">register now!</span></span>
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
<!-- <script type="text/javascript" src="js/pos"></script> -->

<script>
$(document).ready(function() {


    list_categories("");

    list_shop_products("");

    load_categories_for_pop();
})
</script>

<?php
include("_common/footer.php");
?>