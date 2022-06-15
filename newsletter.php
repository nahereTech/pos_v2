<?php
include("_common/header.php");
?>

<style type="text/css">
	p{
		font-size: 14px;
        margin-bottom: 0px !important;
	}
    header, #main-sidebar{
        display: none;
    }
    footer{
        display: none !important;
    }
    .dt-main{
        display: none;
      margin: 0px !important;
        overflow-x: hidden !important;

    }
    .btn-success{
        border-color: #0374ff !important;
    }
    body{
    }
    h4{
        font-size: 20px;
    }

    @media only screen and (max-width: 600px){
    /*Big smartphones [426px -> 600px]*/
    .login_fms{
            width: 100% !important;
            margin-left: auto;
            margin-right: auto;
            border-radius: 8px;
            height: 40px;
    }
     .login_btn{
            width: 100% !important;
    margin-left: auto;
    box-shadow: 0 4px 8px rgb(0 0 0 / 19%);
    margin-right: auto;
    border-radius: 8px;
    }
    #category_dv{
        margin-top: 40px;
    }
    .cat_p{

        margin-bottom: 10px !important;

    }
    }

</style>



<!-- Site Content Wrapper -->
<div class="dt-content-wrapper" style="width: 100%;">

    <!-- Site Content -->
    <div class=" ">

        <!-- <div class="dt-page__header" style="display: flex; justify-content: space-between;">
            <h1 class="dt-page__title" style="padding:0px 10px">Help</h1>
            <div style="display: flex;">
           
            </div>
        </div> -->

    
        <div class="">
                <div class="ant-row dashboard-row">
                  <div class="ant-col gx-col-full ant-col-xs-24 ant-col-sm-12 ant-col-md-12 ant-col-lg-12 ant-col-xl-14">
                <div class="">
                	<div style="text-align: center; margin-top:4vh">
                		<div class="form-group" style="text-align: center;">
                            <!-- <label>Email</label> -->
                            <img src="" id="logo_imgg" style="max-width: 30px; width: 15% !important;"><br>
                        </div>
                		<h4 style="margin: 5px;">Welcome to NaHere POS</h4>
                	<p>Kindly help us set your account right for you</p>
                    <p style="font-size: 10px;">You are signing in as <span id="comp_mail"></span></p>

                	</div>
                	
                    <div class="ant-card-body" style="">
                        <div class="content">
                        <!-- <a class="logo-holder logo-holder--lg logo-holder--wide" style="margin-bottom: 40px" >
                        <div class="logo-text"  style="color: #04003D; height: auto; margin-top: 15px; background-color: ">
                            
                            <img src="" id="logo_imgg" style="max-width: 230px"><br>

                            <strong>Employee.ng</strong> 
                            <p class="caption text-center margin-bottom-30">Employee-focused ERP</p> 
                        </div>
                    </a>-->

                        

                        <div id="login_dv" style=" margin-top: 30px;">
                            <div class="form-group">
                                <!-- <label>Email</label> -->
                                <input style="width: 70% ;margin-left: auto; margin-right: auto;" type="text" class="form-control required login_fms" placeholder="Email" id="store_name" autocomplete="off" required>
                            </div>

                            <div class="form-group">
                                <!-- <label>Email</label> -->
                                <input style="width: 70% ;margin-left: auto; margin-right: auto;" type="text" class="form-control required login_fms" placeholder="Subject" id="store_location" autocomplete="off" required>
                            </div>

                            <div class="form-group">
                                <!-- <label>Email</label> -->
                                <textarea style="width: 70%; height: 300px; margin-left: auto; margin-right: auto;" type="text" class="form-control required login_fms" placeholder="Email Content" id="desc" autocomplete="off" required></textarea>
                            </div>
                            <div class="form-group">
                                <!-- <label>Email</label> -->
                                <input style="width: 70% ;margin-left: auto; margin-right: auto;" type="file" class="form-control required login_fms" placeholder="Store Location" id="store_location" autocomplete="off" required>
                            </div>
                          
                           
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-12" style="text-align: center;">
                                        <div id="error-msg" style="text-align: center; color: red;"></div>
                                        <button style="width: 70% ;margin-left: auto; margin-right: auto; background-color: #0374FF !important;" class="btn btn-success btn-block login_btn" style="border: 0px;" id="store_cont">Continue</button>
                                        <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none; color: grey; text-align: center;" id="loader_lgn"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <!-- <div class="col-2"></div> -->

                                    <!-- <div class="hidden-sm">
                                        <br>
                                    </div> -->
                                </div>
                            </div>

                          
                        </div>





                        <div id="forgot_dv" style="display: none;">
                            <div class="form-group">
                                <label>Email</label>
                                <input style="width: 50% !important;margin-left: auto; margin-right: auto;" type="text" class="form-control required_fp login_fms" placeholder="Email" id="f_email">
                            </div>

                            <div class="form-group margin-bottom-30">
                                <a href="#" id="back_to_login">Back to Login</a>
                                <div class="form-row"></div>
                            </div>
                            <div class="form-group margin-bottom-30">
                                <div class="form-row">
                                    <div class="col-2"></div>
                                    <div class="col-8" style="text-align: center;">
                                        <div id="error-msg" class="error-msg" style="text-align: center; color: red;"></div>
                                        <button class="btn btn-success btn-block login_btn" id="retrieve_password">Retrieve Password</button>
                                        <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none; color: grey; text-align: center;" id="loader_fp"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="insert_recovery_code_dv" style="display: none;">
                            We sent a password recovery code to your email. Please insert the code in the field below.<br>
                            <br>
                            <div class="form-group">
                                <label>Recovery Code</label>
                                <input type="text" class="form-control login_fms required_codcod" placeholder="Code" id="f_code">
                                <input type="hidden" class="form-control login_fms" id="hemail">
                            </div>

                            <div class="form-group margin-bottom-30">
                                <a href="#" id="recovery_code"> or Back to Login</a>
                                <div class="form-row"></div>
                            </div>
                            <div class="form-group margin-bottom-30">
                                <div class="form-row">
                                    <div class="col-2"></div>
                                    <div class="col-8" style="text-align: center;">
                                        <div id="error-msg" class="error-msg" style="text-align: center; color: red;"></div>
                                        <button class="btn btn-success btn-block" id="validate_recov_code" style="background-color: #04003d;">Proceed</button>
                                        <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none; color: grey; text-align: center;" id="loader_valcode"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="change_password_forms_dv" style="display: none;">
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="form-control login_fms required_upnw" placeholder="New Password" id="up_new_pass" autocomplete="new-password">
                            </div>

                            <div class="form-group">
                                <label>Repeat Password</label>
                                <input type="password" class="form-control login_fms required_upnw" placeholder="Repeat Password" id="r_up_new_pass" autocomplete="new-password">
                                <input type="text" class="form-control login_fms" value="" id="hehemail" style="display: none;">
                                <input type="text" class="form-control login_fms" value="" id="rccvvv_code" style="display: none;">
                            </div>

                            <div class="form-group margin-bottom-30">
                                <div class="form-row">
                                    <div class="col-2"></div>
                                    <div class="col-8" style="text-align: center;">
                                        <div id="error-msg" class="error-msg" style="text-align: center; color: red;"></div>
                                        <button class="btn btn-success btn-block" id="update_passwordnw" style="background-color: #04003d;">Update Password</button>
                                        <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none; color: grey; text-align: center;" id="loader_cpsw"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="done_forgot" style="display: none;">
                            Password has been successfully reset. You may now go to login.<br>
                            <br>

                            <div class="form-group margin-bottom-30">
                                <div class="form-row">
                                    <div class="col-2"></div>
                                    <div class="col-8" style="text-align: center;">
                                        <button class="btn btn-success btn-block" id="forgot_done_back_to_login" style="background-color: #04003d;">Back to Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="reg_done_dv" style="display: none;">
                            <h2>Registration is Successful</h2>
                            Please check your email to confirm your registration and proceed back to login<br>
                            <br>
                            <div class="form-group margin-bottom-30">
                                <div class="form-row">
                                    <div class="col-2"></div>
                                    <div class="col-8" style="text-align: center;">
                                        <div id="error-msg2" style="text-align: center; color: red;"></div>
                                        <button class="btn btn-success btn-block" id="back_tlf_succ" style="background-color: #04003d;">Back to Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="register_dv" style="display: none;">
                            <div class="form-group">
                                <!-- <label>Firstname</label> -->
                                <input type="text" class="form-control required3 login_fms" placeholder="Firstname" id="firstname" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <!-- <label>Firstname</label> -->
                                <input type="text" class="form-control required3 login_fms" placeholder="Lastname" id="lastname" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <!-- <label>Your Email</label> -->
                                <input type="text" class="form-control required3 login_fms" placeholder="Email" id="r_email" autocomplete="off">
                            </div>
                            <!-- <div class="form-group margin-bottom-20">
                                <label>Repeat Password</label>
                                <input type="phone" class="form-control login_fms" placeholder="Phone" id="phone" autocomplete="off">
                            </div> -->

                            <div class="form-group margin-bottom-20">
                                <input type="username" class="form-control login_fms required3" placeholder="Company or Personal Sub-domain" id="username" autocomplete="off">
                                &nbsp;https://nahere.employee.ng &nbsp; <a href="" style="font-size: 11px;">What is this?</a>
                            </div>

                            <div class="form-group margin-bottom-20">
                                <!-- <label>Choose Password</label> -->
                                <input type="password" class="form-control required3 login_fms" placeholder="Choose Your password" autocomplete="off" id="r_password">
                            </div>

                            <div class="form-group margin-bottom-30">
                                <a href="#" id="back_to_login2">Back to Login</a>
                                <div class="form-row">
                                    <!-- <div class="col-6">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" checked=""> <span class="custom-control-label">Remember me</span>
                                        </label>
                                    </div> -->
                                    <!-- <div class="col-6 text-right">
                                        
                                    </div> -->
                                </div>
                            </div>
                            <div class="form-group margin-bottom-30">
                                <div class="form-row">
                                    <div class="col-2"></div>
                                    <div class="col-8" style="text-align: center;">
                                        <div id="error-msg3" style="text-align: center; color: red;"></div>
                                        <button class="btn btn-success btn-block" id="register" style="background-color: #04003d;">Register</button>
                                        <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none; color: grey; text-align: center;" id="loader_lgn_r"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider"></div>
                        <!-- <div class="form-group text-center">
                            <div class="form-row">
                            

                                <div class="col-2"><a href="products" class="text-muted"></a></div>
                                <div class="col-8">
                                    <a href="http://nahere.com" class="text-muted" style="position: static;bottom: 30px;left: 40%;">
                                        ©
                                        2022 NaHere!
                                    </a>
                                </div>
                                <div class="col-2"><a href="terms" class="text-muted"></a></div>
                            </div>
                        </div> -->
                    </div>

                            
                    </div>
                </div>
            </div>

               <div class="ant-col-xs-24 ant-col-sm-12 ant-col-md-12 ant-col-lg-12 ant-col-xl-10">
                <div class="">
                    <div class="ant-card-body" style="padding:0px !important">
                          <div class="content d-none d-lg-block"  id="content" style="background-color: #04003d; background: url(https://www.internationaloliveoil.org/wp-content/uploads/2019/04/FICHERO19434.jpg) no-repeat; background-size: cover; ">
                    <!-- <div style="margin: 60px;  color: #e8edf4">
                    <div style="font-size: 40px;">Are You CV-Ready?</div><br>
                    <div style="font-size: 20px;">- Computer-guided CV Creation<br>- Bit-by-bit CV Updating<br>- Keep Your CV 100% Ready At All Times<br>- Improve Your CV on Regular Basis<br>- One-click CV Mailing<br>- Export Your CV</div>
                </div> -->

                    <!-- style="margin: 0px; background: url(../employeeng_logo.png) no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;" -->
                </div>
                            
                    </div>
                </div>
            </div>

            

          

          

                </div>


              


        </div>


      

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


<script type="text/javascript">
	$(document).ready(function () {
        $(document).on('click', '#store_cont', function() {
            
            $("#loader_lgn").show()
            $("#store_cont").hide()
           onboarding()
        })

          $(document).on('click', '#cat_cont', function() {
            $("#loader_cat").show()
            $("#cat_cont").hide()

            onboarding_cat()
        })

        $(document).on('click', '#cont_unit', function() {
            $("#loader_lgn").show()
            $("#cont_unit").hide()

            onboarding_unit()
        })

      
		
  function onboarding() {
    let company_id = localStorage.getItem("company_id");

    $.ajax({
      type: "POST",
      dataType: "json",
        headers: {
                    'Authorization':localStorage.getItem('token'),
                },
      cache: false,
      url: base_url + "/api/pos/createStore",
      data: { store_name: $("#store_name").val(), store_address: $("#store_location").val(),
              store_description: $("#desc").val(), company_id: company_id
      },
      success: function (response) {
        if (response.status == "200") {
          console.log(response);


            $("#category_dv").css("transition", "all 0.4s ease-in-out")
            $("#category_dv").show()
            $("#login_dv").hide()

             $(".for_edit").show();

          setTimeout(() => {
            $(".for_edit").hide();
          }, 2000);

        } else if (response.status == "400") {
          $("#edit_modal").hide();
          $(".edit_error").show();
          $("#for_err").html(response.msg);

          setTimeout(() => {
            $(".edit_error").hide();
          }, 2000);

           $("#loader_lgn").hide()
            $("#store_cont").show()

          setTimeout(() => {
            $(".edit_error").hide();
          }, 2000);
        } else if (response.status == "401" || response.status == "400") {
          //user error message
          console.log(response);
          $("#edit_modal").hide();
          $(".edit_error").show();
          $("#for_err").html(response.msg);

          setTimeout(() => {
            $(".edit_error").hide();
          }, 2000);

           $("#loader_lgn").hide()
            $("#store_cont").show()
        }
      },
      error: function (response) {
        console.log(response);
      },
    });
  }


   function onboarding_cat() {
    let company_id = localStorage.getItem("company_id");

    $.ajax({
      type: "POST",
      dataType: "json",
        headers: {
                    'Authorization':localStorage.getItem('token'),
                },
      cache: false,
      url: base_url + "/api/pos/createCategory",
      data: { cat_name: $("#cat_name").val(), company_id: company_id, cat_description: ""
       },

      success: function (response) {
        if (response.status == "200") {
          console.log(response);

            $("#loader_cat").hide();
            $("#category_dv").hide();
            $("#unit_dv").show();
            $(".for_edit").show();

          setTimeout(() => {
            $(".for_edit").hide();
          }, 2000);

        } else if (response.status == "400") {
          // coder error message

          console.log(response);
          $("#edit_modal").hide();

           
          $("#loader_cat").hide();
          $("#cat_cont").show();
          $(".edit_error").show();
          $("#for_err").html(response.msg);

          setTimeout(() => {
            $(".edit_error").hide();
          }, 2000);
        } else if (response.status == "401") {
          //user error message

            $("#loader_cat").hide();
          $("#cat_cont").show();
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

   function onboarding_unit() {
    let company_id = localStorage.getItem("company_id");

    $.ajax({
      type: "POST",
      dataType: "json",
        headers: {
                    'Authorization':localStorage.getItem('token'),
                },
      cache: false,
      url: base_url + "/api/pos/createUnit",
      data: { unit_name: $("#unit_name").val(),
              unit_symbol: $("#unit_symbol").val(),
              company_id: company_id
       },

      success: function (response) {
        if (response.status == "200") {
          console.log(response);

          

          $(".for_edit").show();

          setTimeout(() => {
            $(".for_edit").hide();
          }, 2000);

          window.location.href= "/pos/help"

        } else if (response.status == "400") {
          // coder error message

          console.log(response);
          $("#edit_modal").hide();
          $(".edit_error").show();
          $("#for_err").html(response.msg);

          setTimeout(() => {
            $(".edit_error").hide();
          }, 2000);

            $("#loader_lgn").hide()
            $("#cont_unit").show()

        } else if (response.status == "401") {
          //user error message
          console.log(response);
          $("#edit_modal").hide();
          $(".edit_error").show();
          $("#for_err").html(response.msg);

          setTimeout(() => {
            $(".edit_error").hide();
          }, 2000);

            $("#loader_lgn").hide()
            $("#cont_unit").show()

        }
      },
      error: function (response) {
        console.log(response);
      },
    });
  }



        // $(document).on('click', '#cont', function() {
        //     $("#category_dv").css("transition", "all 0.4s ease-in-out")
        //     $("#category_dv").show()
        //     $("#login_dv").hide()
        // })


        
                is_this_a_company();
                $("#toggleEye").click(function () {
                    $(this).toggleClass("fa-eye fa-eye-slash");
                    var input = $($(this).attr("toggle"));
                    if (input.attr("type") == "password") {
                        input.attr("type", "text");
                    } else {
                        input.attr("type", "password");
                    }
                });
                // check_if_session_is_available();
            });
	        function is_this_a_company() {
                // var pathArray = window.location.href.split('/');
                // var username = pathArray[2].split('.')[0];

                var pathArray = window.location.href.split(".");
                var username = pathArray[0].replace(/http:\/\//, "");
                var username = username.replace(/https:\/\//, "");

                $.ajax({
                    type: "POST",
                    dataType: "json",
                    cache: false,
                    url: base_url + "/api/company/get_company_details",
                    data: {
                        comp_username: username,
                    },
                    success: function (response) {
                        console.log(response);

                        if (response.status == "200") {
                            if (response.data.bg_image == "") {
                                response.data.bg_image = "no_backg.png";
                            }

                            if (response.data.company_logo == "") {
                                response.data.company_logo = "default_comp_logo.png";
                            }

                            $("#content").css("background", "url(https://www.internationaloliveoil.org/wp-content/uploads/2019/04/FICHERO19434.jpg)");
                              $("#content").css("height", "100vh");
                              $("#content").css("width", "100%");
                              $("#content").css("background-position", "top");
                              $("#comp_mail").text(response.data.company_email);


                            $("#logo_imgg").attr("src", "https://nahere.empl-dev.site/files/images/company_images/sml_7cbbc409ec990f19c78c75bd1e06f215.png");
                              $("#logo_imgg").css("width", "17%");


                            $("#company_username").val(username);
                            $("#company_jo").val(response.data.company_id);

                            //fetch modules can access
                            // fetch_module_company_can_access(response.data.company_id);
                            // check_if_session_is_available();
                            // fetch_company_colors();
                        } else {
                            // $("#content").css("background", "url(/world/assets/images/kweue.jpeg)");
                            // $("#logo_imgg").attr("src", "/world/assets/images/darklogo.png" );

                            alert("Company Page Does not exist");
                        }
                    },
                    error: function (response) {
                        alert("Technical Error. Please try again.");
                    },
                });
            }
</script>




<?php
include("_common/footer.php");
?>