</main>
<footer style="
background-color: #fff;
    color: #545454;
    padding: 1.2rem 3.2rem;
    display: -ms-flexbox;
    display: flex;
    justify-content: flex-end;
    -ms-flex-align: center;
    align-items: center;
    min-height: 60px;
    max-height: 60px;
    margin-top: auto;
    border-top: solid 1px #e8e8e8;">
    <span style="float: right;"> © 2022 NaHere</span>
</footer>
</div>

<style type="text/css">
    .overlay {
        height: 0%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #fff;
        overflow-y: hidden;
        transition: 1.0s;
    }

    .overlay-content {
        position: relative;
        top: 25%;
        width: 100%;
        text-align: center;
    }

    .overlay a {
        padding: 10px;
        text-decoration: none;
        font-size: 40px;
        color: black;
        display: block;
        transition: 0.3s;
    }

    .overlay a:hover,
    .overlay a:focus {
        color: black;
    }

    .overlay .rmbtn {
        position: absolute;
        top: 10px;
        right: 35px;
        font-size: 70px;
    }
</style>

<script type="text/javascript">
    var base_url = window.location.origin;

    function openNav() {
        document.getElementById(
            "myNav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById(
            "myNav").style.width = "0%";
    }

    function openNav() {
        document.getElementById(
            "myNav").style.height = "100%";
    }

    function closeNav() {
        document.getElementById(
            "myNav").style.height = "0%";
    }
</script>




<script src="../pos/node_modules/jquery/dist/jquery.min.js"></script>
<script src="../pos/node_modules/moment/moment.js"></script>
<script src="../pos/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- Perfect Scrollbar jQuery -->
<script src="../pos/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<!-- /perfect scrollbar jQuery -->

<!-- masonry script -->
<script src="../pos/node_modules/masonry-layout/dist/masonry.pkgd.min.js"></script>
<script src="../pos/node_modules/sweetalert2/dist/sweetalert2.js"></script>

<!-- Custom JavaScript -->
<script src="../pos/node_modules/chart.js/dist/Chart.min.js"></script>
<script src="../pos/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="../pos/assets/js/script.js"></script>
<script src="js/sales_history.js"></script>
<script src="../pos/assets/js/custom/charts/dashboard-listing.js"></script>



<script src="../pos/node_modules/jquery/dist/jquery.min.js"></script>
<script src="../pos/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="src/bootstrap-input-spinner.js"></script>
<script src="assets/admin_template/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="../pos/node_modules/prismjs/prism.js"></script>

<script src="assets/admin_template/vendors/twbs-pagination-1.4.0/jquery.twbsPagination.js" type="text/javascript">
</script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.0/jquery.twbsPagination.min.js"></script> -->

<script>
  $(document).on('click', '.help', function() {
    window.location.href= base_url + "/pos/help"
  });
const load = async () => {


function fetch_roles_user_can_access(){

    var company_id = localStorage.getItem('company_id');
    var user_id = localStorage.getItem('user_id');
    var module_id = $('#page_app_id').html();

    $.ajax({
        
        type: 'GET',
        dataType: 'json',
        headers: {
            Authorization: localStorage.getItem('token')
        },
        url: base_url + '/api/accesscontrol/fetch_all_roles_user_has_access_to',
        data: {
            company_id: company_id,
            user_id: user_id,
            module_id: 15
        },
        timeout: 60000,

        success: function(response) {

            if (response.status == '200') {
                  if(response.data){
                     var helod = response.data;

                var rolzz = "";

                $.each(response.data, function(i, v) {
                    rolzz += "-"+v.role_id+"-"; 
                });
                }

               

                // console.log(rolzz);

                $('#does_user_have_roles').html(rolzz);
                // user_page_access()

            } else if (response.status == '400') {

                $('#does_user_have_roles').html('no');

                   $("#no_permission_dv").hide();
                        $('#verified').hide();
                        $("#admins_no_permission_dv").show()
                        $("#shop_role").show()


            } else if (response.status == '401') {

                $('#does_user_have_roles').html('no');
                   $("#no_permission_dv").hide();
                        $('#verified').hide();
                        $("#admins_no_permission_dv").show()
                        $("#shop_role").show()


            }
        },

        error: function(response) {

        },
    });
}



        function can_user_access_this_module() {
            $("#no_permission_dv").hide();
            $("#admins_no_permission_dv").hide();
            $(".dt-main").hide();

            //accesscontrol/check_if_user_has_access_to_a_module
            $.ajax({

                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },
                url: base_url + "/api/accesscontrol/check_if_user_has_access_to_a_module",
                data: {
                    company_id: localStorage.getItem('company_id'),
                    user_id: localStorage.getItem('user_id'),
                    module_id: 15
                },
                timeout: 60000,

                success: function(response) {

                    if (response.status == '200') {

                        $("#whole_body").fadeIn();
                        $(".right_col").css("min-height", $(window).height() - 51);
                        $(".container33").hide();

                        var user_permission_status = response.user_status;
                        //store this on the page
                        $("#user_perm_status").html(user_permission_status);
                        if(response.user_status == "super_admin"){
                            localStorage.setItem('only_admin', true)
                        }
                        // group_modules_users_can_access();
                        fetch_user_module_roles()

                        if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status")
                            .html() ==
                            "Admin") {
                            $("#pos_settings").show();
                            $("#contacts").show();
                            $("#products").show();
                        }

                       check_package()


                       // if(response.stage !== 3 && window.location.pathname !== "/pos/onboarding"){
                       //      window.location.href ="/pos/onboarding"
                       //  }else if(response.stage == 3 && window.location.pathname == "/pos/onboarding"){
                       //      window.location.href ="/pos/help"
                       //  }


                    } else {
                        $("#no_permission_dv").hide();

                        $("#admins_no_permission_dv").show();

                        $("#no_permission_dv").hide();
                        $("#verified").hide();

                        var pathname = window.location.pathname;
                        console.log({
                            pathname
                        })

                        localStorage.removeItem('token')

                        location.href = base_url


                        // if (pathname !== "/pos/") {
                        //     // localStorage.removeItem('token')
                        //     location.href = base_url
                        // }

                        // alert('error')

                        // $("#page_error_div").html(
                        //     "<i class='fa fa-exclamation-triangle' aria-hidden='true'></i>&nbsp;&nbsp;You do not have access to this company's Warehouse Management System. <a href='../feeds' style='color: white'><u>Back to Feeds</u></a>"
                        // );
                        // $(".container33").hide();
                        // $("#page_error_div").show();

                    }

                },

                error: function(response) {

                    // alert("You do not have access to this module");
                    $("#page_error_div").html(
                        '<i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i>&nbsp;&nbsp; Connection Error. Please refresh page.'
                    );
                    $(".container33").hide();
                    $("#page_error_div").show();
                    // window.location.href = site_url+"/feeds";

                }

            });
        }


          var myVar2 = setInterval(function () {
        if ($("#does_user_have_roles").html() != "") {
            //stop the loop
            myStopFunction();
            // user_page_acces();
            var role_list = $("#does_user_have_roles").html();
 
                if (role_list) {
                    // list_of_profiles();
                    user_page_access();
                }

            //does user have access to this module
            // user_page_access();
        } else {
            console.log("No profile");
               $("#no_permission_dv").hide();
               $('#verified').hide();
               $("#admins_no_permission_dv").show()
               $("#shop_role").show()


        }
    }, 1000);



    function myStopFunction() {
        clearInterval(myVar2);
    }




    function user_page_access() {
    var role_list = $("#does_user_have_roles").html();
    var an_admin;
    var user_roles = [];
    var user_roles_2 = [];
    $("#shop_role").show();



              var role_list = $("#does_user_have_roles").html();
                            var an_admin;
                            var user_roles = [];
                            var user_roles_2 = [];

                                $("#contacts").hide();
                                $("#products").hide();
                                $("#shop").show();


                                if (role_list.indexOf("-143-") >= 0 && !(localStorage.getItem('store_id'))){
                                 $("#no_permission_dv").hide();
                                $("#admins_no_permission_dv").show();
                                $("#verified").hide();
                                $("#shop_role").show();

                                return;

                                }


                             if (role_list.indexOf("-143-") >= 0 ) {


                               $("#no_permission_dv").hide();
                                $("#admins_no_permission_dv").hide();
                                $("#verified").show();
                                $(".add_item").show();
                                $(".add_unit").show();


                                var only_admin = localStorage.setItem("only_admin", 143)
                                var pathname = window.location.pathname;
                                

                                var chk_perm = role_list.indexOf("-15-") >= 0;
                                var url = pathname == "/pos/"

                                // if (!chk_perm && url) {
                                //     location.href = `./dashboard`
                                //     return;
                                // } else {
                                //     $("#verified").show()
                                // }
                                $("#pos_settings").show();
                                $("#contacts").show();
                                $("#products").show();
                                $("#shop").show();
                                $("#sales_history_pos").show();
                                $("#shop").show();
                                $("#dashboard").show();
                                if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status")
                                .html() ==
                                "Admin") {
                                $("#pos_settings").show();
                                $("#contacts").show();
                                $("#products").show();
                                $("#dashboard").show();
                                $("#sales_history_pos").show();

                                

                            }


                               }




                             if (role_list.indexOf("-36-") >= 0 || role_list.indexOf("-37-") >= 0) {
                            //Cashier
                                $("#no_permission_dv").hide();

                                $("#admins_no_permission_dv").hide();

                                $("#shop_role").show()
                                $("#verified").show()
                                $(".verified").show()

                                var pathname = window.location.pathname;
                                console.log({
                                    pathname
                                })
                                $("#sales_history_pos").show();
                                $("#dashboard").show();

                                $("#shop").show();
                                if (pathname == "/pos/" || pathname == "/pos/sales_history") {
                                    $("#dashboard_admin").hide();
                                    $("#admins_no_permission_dv").hide();
                                    $(".verified").show()
                                    $("#sales_history_pos").show();
                                    $("#shop").show();
                                } else if (pathname == "/pos/index.php") {
                                    $("#dashboard_admin").hide()
                                    // $("#sales_history_pos").show();
                                    $("#shop").show();
                                } else {
                                    if (!($("#user_perm_status").html() == "super_admin") && !(role_list.indexOf("-143-") >= 0)) {
                                        // localStorage.removeItem('token')
                                        // $("#dashboard_admin").show()

                                        location.href = "./dashboard"
                                        return;
                                    } else {
                                        $("#dashboard_admin").show()
                                    }
                                }
                                if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status")
                                .html() ==
                                "Admin") {
                                $("#pos_settings").show();
                                $("#contacts").show();
                                $("#products").show();
                                $("#dashboard").show();
                               }
                            }

                            if (role_list.indexOf("-35-") >= 0) {
                               $("#no_permission_dv").hide();

                                $("#dashboard").show();

                             }

                             if (role_list.indexOf("-38-") >= 0) {
                               $("#no_permission_dv").hide();

                                $("#dashboard").show();

                             }


                             // if (role_list.indexOf("-38-") >= 0) {

                             //    $("#dashboard").show();

                             // }

                          

                             if (role_list.indexOf("-135-") >= 0) {
                               $("#no_permission_dv").hide();

                                $(".add_unit").show();

                             }

                             if (role_list.indexOf("-136-") >= 0) {
                               $("#no_permission_dv").hide();

                                $("#contacts").show();

                             }
                             if (role_list.indexOf("-137-") >= 0) {
                               $("#no_permission_dv").hide();

                                $(".history_edit").show();

                             }

                             // if (role_list.indexOf("-140-") >= 0) {
                             //   $("#no_permission_dv").hide();

                             //    $(".history_details_dues").show();

                             // }

                             if (role_list.indexOf("-140-") >= 0) {
                               $("#no_permission_dv").hide();

                                $(".history_details_dues").show();
                                $(".history_log").show();

                             }

                             if (role_list.indexOf("-141-") >= 0) {
                               $("#no_permission_dv").hide();

                                $("#sales_history_pos").show();
                                $("#dashboard").show();

                             }

                             if (role_list.indexOf("-142-") >= 0) {
                               $("#no_permission_dv").hide();

                                $("#shop").show();
                                $("#verified").show();

                             }

                             if (role_list.indexOf("-144-") >= 0) {
                               $("#no_permission_dv").hide();
                               // $("#homepage").show();
                               $("#dt-page__title").text("home")
                             }                             
                             

        
                             if (role_list.indexOf("-36-") >= 0 || role_list.indexOf("-37-") >= 0) {

                                $("#monitor_status").html("monitor_role");
                                $("#no_permission_dv").hide();
                                $("#admins_no_permission_dv").hide()
                                $("#pos_settings").hide();
                                $("#contacts").hide();
                                $("#products").hide();
                                $("#sales_history_pos").hide();
                                // $("#shop").show();

                                $("#verified").hide()

                                $("#dashboard_admin").show();
                                $("#dashboard").show();
                                if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status")
                                .html() ==
                                "Admin") {
                                $("#pos_settings").show();
                                $("#contacts").show();
                                $("#products").show();
                                $("#dashboard").show();


                            }
   }

                      if (role_list.indexOf("-130-") >= 0) {
                               $("#no_permission_dv").hide();

                                $(".add_item").show();

                             }

                             if (role_list.indexOf("-131-") >= 0) {
                               $("#no_permission_dv").hide();

                                $(".product_edit").show();

                             }

                             if (role_list.indexOf("-132-") >= 0) {
                               $("#no_permission_dv").hide();

                                $(".product_delete").show();
                                $("#products").show();


                             }

                             if (role_list.indexOf("-133-") >= 0) {
                               $("#no_permission_dv").hide();

                                $(".view_product").show();
                                $("#products").show();


                             }

                             if (role_list.indexOf("-134-") >= 0) {
                               $("#no_permission_dv").hide();

                                $(".view_product").show();
                                $("#products").show();
                                

                             }
}

        function check_package() {
            $.ajax({

                type: "GET",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: base_url + "/api/company/packageDetails",
                data: {
                    company_id: localStorage.getItem('company_id'),
                    module_id: 15
                },
                timeout: 60000,

                success: function(response) {

                    if (response.status == '200') {

                        $("#whole_body").fadeIn();
                        $(".right_col").css("min-height", $(window).height() - 51);
                        $(".container33").hide();

                        var package_status = response.data.package_details.features.barcode_allowed;
                        $("#package_status").html(package_status);
                        if(package_status != "yes"){
                            $("#bar_div").hide()
                        }

                        fetch_roles_user_can_access()


                        // if(response.user_status == "super_admin"){
                        //     localStorage.setItem('only_admin', true)
                        // }
                    }

                },

                error: function(response) {

                    // alert("You do not have access to this module");
                    $("#page_error_div").html(
                        '<i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i>&nbsp;&nbsp; Connection Error. Please refresh page.'
                    );
                    $(".container33").hide();
                    $("#page_error_div").show();
                    // window.location.href = site_url+"/feeds";

                }

            });
        }



        const fetch_user_module_roles = async () => {
            // $("#dashboard_admin").hide();
            $("#no_permission_dv").hide();
            $("#shop_role").hide()




            try {
                  var role_list = $("#does_user_have_roles").html();
                  if (role_list.indexOf("-143-") >= 0 ) {



                  }else{
                   $(".verified").css("display", "none !important")

                  }
                var company_id = localStorage.getItem('company_id');

                var store_id = localStorage.getItem('store_id');
                if (store_id == null || store_id == undefined) {
                    // alert('store_id')
                    // location.href = base_url;
                }
                var module_id = 15;
                localStorage.setItem('module_key', module_id);

                console.log(store_id);


                if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status").html() ==
                    "Admin") {
                    $("#pos_settings").show();
                }

                var response = await $.ajax({
                    type: "GET",
                    dataType: "json",
                    headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                    },
                    url: base_url + "/api/pos/get_user_profile_in_pos",
                    data: {
                        "company_id": company_id,
                        "user_id": localStorage.getItem('user_id'),
                        "store_id": localStorage.getItem('store_id')
                    },
                    timeout: 60000,
                })

                var an_admin;
                var user_roles = [];
                var user_roles_2 = [];
                if (response.msg == 'No permission found') {
                    $(".verified").hide()
                    // $("#verified").css("display", "none !important")
                    // $("#no_permission_dv").fadeIn(400);
                    $("#shop_role").fadeIn(400);
                    // alert('here')
                    // $(".verified").fadeOut(200).promise().done(function() {
                    //     $("#no_permission_dv").fadeIn(400);
                    //     $("#shop_role").fadeIn(400);
                    // });
                    return;
                }
                $.each(response['data']['profile_details'], function(i, v) {
                    console.log(v.id)
                    user_roles.push(Number(v.id))


                })






                if (response.status == '200') {
                    if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status")
                            .html() ==
                            "Admin") {
                            $("#pos_settings").show();
                        }

                        if(response.show_onboarding == "yes"){

                      if(response.stage !== 3 && window.location.pathname !== "/pos/onboarding"){
                            window.location.href ="/pos/onboarding"
                        }else if(response.stage == 3 && window.location.pathname == "/pos/onboarding"){
                            window.location.href ="/pos/help"
                        }

                      

                        if(response.stage == 0 && window.location.pathname !== "/pos/onboarding"){
                            window.location.href ="/pos/onboarding"
                            $("#login_dv").show();

                        }

                        if(response.stage == 0 ){

                            $("#login_dv").show();
                            $(".dt-main").show();


                        }

                        if(response.stage == 1){
                            $("#login_dv").hide();

                            $("#category_dv").show();
                            $(".dt-main").show();


                        }
                        if(response.stage == 2){
                            $("#login_dv").hide();

                            $("#unit_dv").show();
                            $(".dt-main").show();


                        }
                        if(response.stage == 3){

                            // $("login_dv").show()

                        }

                            $(".dt-main").show();
                            return;

                        }else{
                            $(".dt-main").show();

                        }


                    if (response.msg == 'No permission found') {

                    } else {
                        console.log(Array.from((response['data']['profile_details'])))

                        if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status")
                            .html() ==
                            "Admin") {
                            $("#pos_settings").show();
                        }

                        localStorage.setItem("user_pos_role", user_roles.filter(a => a !== 0)
                            .filter(a => a !== 1))


                        var k = 1;

                        var arr = [];

                        $.each(response['data']['profile_details'], function(i, v) {
                            arr.push(Number(v.id))
                        })
                        $.each(response['data']['profile_details'], function(i, v) {

                            // arr.push(v)


                   

                                if (role_list.indexOf("-94-") >= 0 ) {
                                 $(".dt-main").show();
 
                                $("#error_display").hide();
                                $(".home_dv").show();
                                $("#contacts").show(); // show contact page
                                $(".vendor_info").show();
                                $(".dsh_dvs").hide();
                                $("#main_display_loader_page").hide();
                                $("#main_display").show();

                             }




                            // if (v.id == 27) {
                            //     $("#no_permission_dv").hide();
                            //     $("#admins_no_permission_dv").hide();
                            //     $("#verified").hide()
                            //     console.log({
                            //         arr
                            //     })

                            //     var only_admin = localStorage.setItem("only_admin", v.id)
                            //     var pathname = window.location.pathname;
                            //     // if (!(arr.includes(28)) && pathname == "/pos/" || pathname ==
                            //     //     "/pos/index.php") {
                            //     //     location.href = `./dashboard`
                            //     // } else {
                            //     //     $("#verified").show()
                            //     // }
                            //     $("#pos_settings").show();
                            //     $("#contacts").show();
                            //     $("#verified").show();
                                

                            //     $("#products").show();
                            //     $("#sales_history_pos").show();
                            //     // $("#shop").show();
                            //     $("#dashboard").show();
                            //     if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status")
                            //     .html() ==
                            //     "Admin") {
                            //     $("#pos_settings").show();
                            //     $("#contacts").show();
                            //     $("#products").show();
                            //     $("#dashboard").show();
                            //     $("#verified").show();


                            // }
                            // }

                            // if (v.id == 28) { //Cashier
                            //     $("#no_permission_dv").hide();

                            //     $("#admins_no_permission_dv").hide();

                            //     $("#shop_role").show()
                            //     $("#verified").show()
                            //     $(".verified").show()

                            //     var pathname = window.location.pathname;
                            //     console.log({
                            //         pathname
                            //     })
                            //     $("#sales_history_pos").show();
                            //     $("#shop").show();
                            //     if (pathname == "/pos/" || pathname == "/pos/sales_history") {
                            //         $("#dashboard_admin").hide();
                            //         $("#admins_no_permission_dv").hide();
                            //         $(".verified").show()
                            //         $("#sales_history_pos").show();
                            //         $("#shop").show();
                            //     } else if (pathname == "/pos/index.php") {
                            //         $("#dashboard_admin").hide()
                            //         $("#sales_history_pos").show();
                            //         $("#shop").show();
                            //     } else {
                            //         if (!($("#user_perm_status").html() == "super_admin") && !((arr.includes(27)) || (arr.includes(29)))) {
                            //             // localStorage.removeItem('token')
                            //             $("#dashboard_admin").show()

                            //             // location.href = "./dashboard"
                            //             // return;
                            //         } else {
                            //             $("#dashboard_admin").show()
                            //         }
                            //     }
                            //     if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status")
                            //     .html() ==
                            //     "Admin") {
                            //     $("#pos_settings").show();
                            //     $("#contacts").show();
                            //     $("#products").show();
                            //     $("#dashboard").show();
                            //    }
                            // }

                            // if (v.id == 29) { //Monitor
                            //     $("#monitor_status").html("monitor_role");
                            //     $("#no_permission_dv").hide();
                            //     $("#admins_no_permission_dv").hide()
                            //     $("#pos_settings").hide();
                            //     $("#contacts").hide();
                            //     $("#products").hide();
                            //     $("#sales_history_pos").hide();
                            //     // $("#shop").show();

                            //     $("#verified").hide()

                            //     $("#dashboard_admin").show();
                            //     $("#dashboard").show();
                            //     if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status")
                            //     .html() ==
                            //     "Admin") {
                            //     $("#pos_settings").show();
                            //     $("#contacts").show();
                            //     $("#products").show();
                            //     $("#dashboard").show();


                            // }

                                var pathname = window.location.pathname;
                                if (pathname !== "/pos/dashboard") {

                                    if (!($("#user_perm_status").html() == "super_admin") && !((arr.includes(27)) || (arr.includes(28)))) {
                                        // localStorage.removeItem('token')
                                        console.log({
                                            arr
                                        })

                                        // location.href = `./dashboard`
                                        // location.href = base_url
                                        // return;
                                    }
                                }



                            



                            k++;


                        });

                        
                    }



                    // $("#does_user_have_profile").html('yes_profile');

                } else if (response.status == '400') {

                    alert('No Profile')
                    location.href = base_url
                    // $("#does_user_have_profile").html('no_profile');

                } else if (response.status == "401") {
                    // alert('No Profile')
                    location.href = base_url



                    // $("#does_user_have_profile").html('no_profile');

                }




            } catch (err) {
                console.log(err)

            }
        }


        async function fetch_store_list() {



            var company_id = localStorage.getItem('company_id');
            var user_id = localStorage.getItem('user_id');



            $.ajax({

                type: "GET",
                dataType: "json",
                headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                    },
                url: base_url + "/api/pos/myDefaultStore",
                data: {
                    "user_id": user_id,
                    "company_id": company_id,

                },
                timeout: 60000,


                success: function(response) {

                    if (response.status == '200') {


                        var store_id = response.data.default_store;
                        var store_name = response.data.default_store_name;

                        if (localStorage.getItem('store_id') == null || localStorage.getItem(
                                'store_id') == undefined) {
                            localStorage.setItem('store_id', store_id);
                            localStorage.setItem('store_name', store_name);
                        }

                        // if (localStorage.getItem('store_name') == undefined || localStorage.getItem(
                        //         'store_name') == null) {
                        //     localStorage.setItem('store_name', store_name);
                        // }

                        var store_nam = localStorage.getItem('store_name');




                        $(".dt-page__header").css({
                            "display": "flex",
                            "justify-content": "space-between"
                        })
                        // $(".dt-page_ad_min").append(
                        //     `<h1 class="dt-page__title store_nm">${store_nam}</h1>`)
                        // $(".head_store").text(localStorage.getItem('store_name'))
                        // $(`<h1 style="align-content: center;display: flex;align-self: center;margin: 0px;
                        // color: white;
                        // padding-right: 20px;">${store_nam}</h1>`).insertBefore(".head_store");
                        // $(".ad_min").text(localStorage.getItem('store_name'))

                        fetch_user_module_roles()




                        if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status")
                            .html() ==
                            "Admin") {



                            $("#assgn_roles").addClass("fa-times"); //mark roles as x

                            //now check if other setups are ready
                            // alert('check')
                            // $.ajax({

                            //     type: "GET",
                            //     dataType: "json",
                            //     url: base_url + "/api/pos/isSetupDone",
                            //     data: {
                            //         "company_id": localStorage.getItem('company_id')
                            //     },
                            //     timeout: 60000,

                            //     success: function(response) {
                            //         console.log(response);
                            //         if (response.status == '200') {
                            //             $('#verified').hide();
                            //             $("#no_permission_dv").hide();
                            //             // alert('here')

                            //             // $(".dsh_dvs").fadeOut(200).promise().done(
                            //             //     function() {
                            //             //         $("#admins_no_permission_dv")
                            //             //             .fadeIn(400);
                            //             //     });



                            //             if (response.data.store == "yes") {
                            //                 $("#crt_whs").addClass("fa-check");
                            //             } else {
                            //                 $("#crt_whs").addClass("fa-times");
                            //             }

                            //             if (response.data.user_name == "yes") {
                            //                 $("#updt_comp_dtl").addClass("fa-check");
                            //             } else {
                            //                 $("#updt_comp_dtl").addClass("fa-times");
                            //             }

                            //             // fetch_user_module_roles()

                            //         } else {

                            //             var pathname = window.location.pathname;
                            //             console.log({
                            //                 pathname
                            //             })

                            //             if (pathname !== "/pos/") {
                            //                 // alert('ad')
                            //                 // localStorage.removeItem('token')
                            //                 location.href = base_url
                            //             }

                            //             $('#verified').show();

                            //             $("#no_permission_dv").hide();

                            //             $("#verified").fadeOut(200).promise().done(
                            //                 function() {
                            //                     $("#admins_no_permission_dv")
                            //                         .fadeIn(400);
                            //             });

                            //         }
                            //     },
                            //     error: function(response) {

                            //     }
                            // });





                            // $(".dsh_dvs").fadeOut(200).promise().done(function() {
                            //     $("#admins_no_permission_dv").fadeIn(400);
                            // });

                        } else {
                            // fetch_user_module_roles()
                            $("#verified").hide()
                            $("#shop_role").show()
                            $("#admins_no_permission_dv").hide()
                            $("#no_permission_dv").show();

                            $("#verified").fadeOut(50).promise().done(
                                function() {
                                    $("#no_permission_dv").fadeIn(400);
                                });

                        }

                        return;



                    } else {

                        // alert($("#user_perm_status").html())
                        $("#no_permission_dv").hide();
                        $('#verified').hide();
                        $("#admins_no_permission_dv").show()
                        $("#shop_role").show()




                        if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status")
                            .html() ==
                            "Admin") {

                            $("#verified").hide()


                            $("#no_permission_dv").hide();

                            $("#admins_no_permission_dv").show()

                            $("#verified").fadeOut(200).promise().done(
                                function() {
                                    $("#admins_no_permission_dv")
                                        .fadeIn(400);
                                });


                            $("#assgn_roles").addClass("fa-times"); //mark roles as x

                            return;


                            //now check if other setups are ready
                            // alert('check')
                            // $.ajax({

                            //     type: "GET",
                            //     dataType: "json",
                            //     url: base_url + "/api/pos/isSetupDone",
                            //     data: {
                            //         "company_id": localStorage.getItem('company_id')
                            //     },
                            //     timeout: 60000,

                            //     success: function(response) {
                            //         console.log(response);
                            //         if (response.status == '200') {
                            //             // $('.verified').show();
                            //             $("#no_permission_dv").hide();

                            //             $(".dsh_dvs").fadeOut(200).promise().done(
                            //                 function() {
                            //                     $("#admins_no_permission_dv")
                            //                         .fadeIn(400);
                            //                 });



                            //             if (response.data.store == "yes") {
                            //                 $("#crt_whs").addClass("fa-check");
                            //             } else {
                            //                 $("#crt_whs").addClass("fa-times");
                            //             }

                            //             if (response.data.user_name == "yes") {
                            //                 $("#updt_comp_dtl").addClass("fa-check");
                            //             } else {
                            //                 $("#updt_comp_dtl").addClass("fa-times");
                            //             }

                            //             // fetch_user_module_roles()

                            //         } else {

                            //             var pathname = window.location.pathname;
                            //             console.log({
                            //                 pathname
                            //             })

                            //             if (pathname !== "/pos/") {
                            //                 // alert('ad')
                            //                 // localStorage.removeItem('token')
                            //                 location.href = base_url
                            //             }



                            //             $(".dsh_dvs").fadeOut(200).promise().done(
                            //                 function() {
                            //                     $("#admins_no_permission_dv")
                            //                         .fadeIn(400);
                            //                 });

                            //         }
                            //     },
                            //     error: function(response) {

                            //     }
                            // });





                            // $(".dsh_dvs").fadeOut(200).promise().done(function() {
                            //     $("#admins_no_permission_dv").fadeIn(400);
                            // });

                        }

                    }

                },
                error: function(response) {

                }
            })





            $.ajax({

                type: "GET",
                dataType: "json",
                headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                    },
                url: base_url + "/api/pos/list_store_user_connected",
                data: {
                    "company_id": company_id,
                    "user_id": user_id
                },
                timeout: 60000,

                success: function(response) {

                    console.log(response)

                    if (response.status == '200') {
                        $("#no_permission_dv").hide();
                        // alert(200)



                        var store_id;
                        var store_name;

                        if (localStorage.getItem("store_id") == undefined) {
                            localStorage.setItem("store_id", response['data'][0]['store_id']);
                            localStorage.setItem("store_name", response['data'][0]['store_name']);
                        }

                        localStorage.setItem("stores", response.data.length);
                        console.log(response.data.length);
                        // alert('hr')
                        // $('.verified').show();




                        var kup = 0;
                        $.each(response['data'], function(i, v) {

                            store_id = response['data'][i]['store_id'];
                            store_name = response['data'][i]['store_name'];

                            kup++;

                        });

                        // fetch_user_module_roles();

                        if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status")
                            .html() ==
                            "Admin") {

                            // $("#assgn_roles").addClass("fa-times"); //mark roles as x

                            // //now check if other setups are ready
                            // // alert('check')
                            // $.ajax({

                            //     type: "GET",
                            //     dataType: "json",
                            //     url: base_url + "/api/pos/isSetupDone",
                            //     data: {
                            //         "company_id": localStorage.getItem('company_id')
                            //     },
                            //     timeout: 60000,

                            //     success: function(response) {
                            //         console.log(response);
                            //         if (response.status == '200') {
                            //             // $('.verified').show();
                            //             // $("#no_permission_dv").hide();

                            //             $(".dsh_dvs").fadeOut(200).promise().done(
                            //                 function() {
                            //                     $("#admins_no_permission_dv")
                            //                         .fadeIn(400);
                            //                 });

                            //             if (response.data.store == "yes") {
                            //                 $("#crt_whs").addClass("fa-check");
                            //             } else {
                            //                 $("#crt_whs").addClass("fa-times");
                            //             }

                            //             if (response.data.user_name == "yes") {
                            //                 $("#updt_comp_dtl").addClass("fa-check");
                            //             } else {
                            //                 $("#updt_comp_dtl").addClass("fa-times");
                            //             }

                            //             // fetch_user_module_roles()

                            //         } else {

                            //             var pathname = window.location.pathname;
                            //             console.log({
                            //                 pathname
                            //             })

                            //             if (pathname !== "/pos/") {
                            //                 // alert('ad')
                            //                 // localStorage.removeItem('token')
                            //                 location.href = base_url
                            //             }

                            //             $(".dsh_dvs").fadeOut(200).promise().done(
                            //                 function() {
                            //                     $("#admins_no_permission_dv")
                            //                         .fadeIn(400);
                            //                 });

                            //         }
                            //     },
                            //     error: function(response) {

                            //     }
                            // });

                            // $(".dsh_dvs").fadeOut(200).promise().done(function() {
                            //     $("#admins_no_permission_dv").fadeIn(400);
                            // });

                        }

                        if (kup > 1) {
                            $('#switch_stores').show();
                        } else {
                            $('#switch_stores').hide();
                        }


                    } else {

                          $("#no_permission_dv").hide();
                        $('#verified').hide();
                        $("#admins_no_permission_dv").show()
                        $("#shop_role").show()



                        // fetch_user_module_roles();

                        if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status")
                            .html() ==
                            "Admin") {
                            $("#no_permission_dv").hide();





                            // $("#assgn_roles").addClass("fa-times"); //mark roles as x

                            // //now check if other setups are ready
                            // // alert('check')
                            // $.ajax({

                            //     type: "GET",
                            //     dataType: "json",
                            //     url: base_url + "/api/pos/isSetupDone",
                            //     data: {
                            //         "company_id": localStorage.getItem('company_id')
                            //     },
                            //     timeout: 60000,

                            //     success: function(response) {
                            //         console.log(response);
                            //         if (response.status == '200') {
                            //             // $('.verified').show();
                            //             $("#no_permission_dv").hide();

                            //             $(".dsh_dvs").fadeOut(200).promise().done(
                            //                 function() {
                            //                     $("#admins_no_permission_dv")
                            //                         .fadeIn(400);
                            //                 });



                            //             if (response.data.store == "yes") {
                            //                 $("#crt_whs").addClass("fa-check");
                            //             } else {
                            //                 $("#crt_whs").addClass("fa-times");
                            //             }

                            //             if (response.data.user_name == "yes") {
                            //                 $("#updt_comp_dtl").addClass("fa-check");
                            //             } else {
                            //                 $("#updt_comp_dtl").addClass("fa-times");
                            //             }

                            //             // fetch_user_module_roles()

                            //         } else {

                            //             var pathname = window.location.pathname;
                            //             console.log({
                            //                 pathname
                            //             })

                            //             if (pathname !== "/pos/") {
                            //                 // alert('ad')
                            //                 // localStorage.removeItem('token')
                            //                 location.href = base_url
                            //             }



                            //             $(".dsh_dvs").fadeOut(200).promise().done(
                            //                 function() {
                            //                     $("#admins_no_permission_dv")
                            //                         .fadeIn(400);
                            //                 });

                            //         }
                            //     },
                            //     error: function(response) {

                            //     }
                            // });





                            // $(".dsh_dvs").fadeOut(200).promise().done(function() {
                            //     $("#admins_no_permission_dv").fadeIn(400);
                            // });

                        } else {

                              $("#no_permission_dv").hide();
                        $('#verified').hide();
                        $("#admins_no_permission_dv").show()
                        $("#shop_role").show()


                            // $(".verified").hide()
                            var pathname = window.location.pathname;
                            console.log({
                                pathname
                            })

                            if (pathname !== "/pos/") {
                                // localStorage.removeItem('token')
                                location.href = base_url
                            } else {
                                $("#admins_no_permission_dv").hide();

                                $(".verified").fadeOut(200).promise().done(function() {
                                    $("#no_permission_dv").fadeIn(400);
                                });

                            }



                        }

                        // else if (response.status == '400' || response.status == '401') {
                        // var pathname = window.location.pathname;
                        // console.log({
                        //     pathname
                        // })

                        // if (pathname !== "/pos/" || pathname !== "/pos") {
                        //     // localStorage.removeItem('token')
                        //     location.href = base_url
                        // }




                    }



                },
                // objAJAXRequest, strError
                error: function(response) {



                    $("#page_error_div").html(
                        '<i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i>&nbsp;&nbsp; Connection Error. Please try again.'
                    );
                    $(".container33").hide();
                    $("#page_error_div").show();
                    $("#whole_body").hide();

                }

            });
        }
        can_user_access_this_module()
        fetch_store_list()
        // await fetch_roles_user_can_access()










        // await fetch_user_module_roles()
        // function fetch_user_module_roles() {

        // var company_id = localStorage.getItem('company_id');
        // // var urlParams = new URLSearchParams(window.location.search).get('id');
        // // var user_id = urlParams ? urlParams : localStorage.getItem('user_id');
        // var store_id = localStorage.getItem('store_id');
        // var module_id = 15;
        // localStorage.setItem('module_key', module_id);
        // // alert(urlParams)
        // // if(urlParams){
        // //   user_id = urlParams.get('id');
        // // }else{
        // //   user_id = localStorage.getItem('user_id');
        // // }
        // // alert(user_id)
        // console.log(store_id);
        // // $("#settings_tab").show();


        // if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status").html() == "Admin") {
        //     $("#pos_settings").show();
        // }

        // $.ajax({

        //     type: "GET",
        //     dataType: "json",
        //     url: base_url + "/api/pos/get_user_profile_in_pos",
        //     data: {
        //         "company_id": company_id,
        //         "user_id": localStorage.getItem('user_id'),
        //         "store_id": localStorage.getItem('store_id')
        //     },
        //     timeout: 60000,

        //     success: function(response) {

        //         console.log(response);

        //         var an_admin;
        //         var user_roles = [];
        //         var user_roles_2 = [];
        //         $.each(response['data']['profile_details'], function(i, v) {
        //             console.log(v.id)
        //             user_roles.push(Number(v.id))

        //         })


        //         if (response.status == '200') {
        //             console.log(Array.from((response['data']['profile_details'])))
        //             // var role = localStorage.setItem("user_role", user_roles)

        //             if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status").html() ==
        //                 "Admin") {
        //                 $("#pos_settings").show();
        //             }

        //             localStorage.setItem("user_pos_role", user_roles.filter(a => a !== 0)
        //                 .filter(a => a !== 1))
        //             // $("#qty_adjustment").hide();
        //             // $("#transfer").hide();
        //             // $("#total_overdue_po").show();
        //             // $("#total_overdue_inv").show();
        //             // $("#best_selling_items").show();
        //             // $("#lowest_selling_items").show();


        //             // console.log(user_roles.filter(a => a !== 0))

        //             var k = 1;
        //             $.each(response['data']['profile_details'], function(i, v) {

        //                 if (v.id == 27) {
        //                     $("#pos_settings").show();
        //                     $("#contacts").show();
        //                     $("#products").show();
        //                     $("#sales_history_pos").show();
        //                     $("#shop").show();
        //                     $("#dashboard").show();





        //                 }

        //                 if (v.id == 28) { //Cashier

        //                     var pathname = window.location.pathname;
        //                         if(pathname == "/pos" ||pathname == "/pos/sales_history"){
        //                         // return;
        //                            $("#sales_history_pos").show();
        //                            $("#shop").show();
        //                       }else{

        //                         location.href = "https://empl-dev.site"
        //                         return;
        //                       }

        //                     // $("#sales_history_pos").show();

        //                     // // $("#pos_settings").show();

        //                     // $("#shop").show();

        //                     // user_roles_2.push(2);
        //                     // var roles = localStorage.getItem("user_role");
        //                     // var arr = ['2', '4']
        //                     // var users = roles.split(',')

        //                     // users.map((a, i) => {
        //                     //     if (a.includes(arr[i])) {
        //                     //         $("#expenses_revenue").show();
        //                     //         $("#expenses_graph").hide();
        //                     //         $("#revenue_graph").hide();
        //                     //     }
        //                     // })

        //                     // if(Array.from(Number(roles)).includes(2 & 4)){
        //                     //    alert(roles)
        //                     // }

        //                 }

        //                 if (v.id == 29) { //Monitor

        //                     $("#dashboard").show();






        //                     // user_roles_2.push(26);






        //                     // if (localStorage.getItem('warehouse_id') != "") {
        //                     //     $("#whsections").attr("href", "whsections?i=" + localStorage
        //                     //         .getItem('warehouse_id'));
        //                     //     $("#whsections").show(); //
        //                     // }



        //                 }



        //                 k++;
        //             });



        //             // $("#does_user_have_profile").html('yes_profile');


        //         } else if (response.status == '400') {

        //             alert('No Profile')

        //             //
        //             // $("#does_user_have_profile").html('no_profile');

        //         } else if (response.status == "401") {
        //             alert('No Profile')


        //             // $("#does_user_have_profile").html('no_profile');

        //         }

        //     },

        //     error: function(response) {

        //     }

        // });
        // }



        // fetch_user_module_roles()

        // function fetch_user_module_roles() {
        //     return new Promise(function(resolve, reject) {

        //     var company_id = localStorage.getItem('company_id');
        //     // var urlParams = new URLSearchParams(window.location.search).get('id');
        //     // var user_id = urlParams ? urlParams : localStorage.getItem('user_id');
        //     var store_id = localStorage.getItem('store_id');
        //     var module_id = 15;
        //     localStorage.setItem('module_key', module_id);
        //     // alert(urlParams)
        //     // if(urlParams){
        //     //   user_id = urlParams.get('id');
        //     // }else{
        //     //   user_id = localStorage.getItem('user_id');
        //     // }
        //     // alert(user_id)
        //     console.log(store_id);
        //     // $("#settings_tab").show();


        //     if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status").html() == "Admin") {
        //         $("#pos_settings").show();
        //     }

        //     $.ajax({

        //         type: "GET",
        //         dataType: "json",
        //         url: base_url + "/api/pos/get_user_profile_in_pos",
        //         data: {
        //             "company_id": company_id,
        //             "user_id": localStorage.getItem('user_id'),
        //             "store_id": localStorage.getItem('store_id')
        //         },
        //         timeout: 60000,

        //         success: function(response) {

        //             console.log(response);

        //             var an_admin;
        //             var user_roles = [];
        //             var user_roles_2 = [];
        //             $.each(response['data']['profile_details'], function(i, v) {
        //                 console.log(v.id)
        //                 user_roles.push(Number(v.id))

        //             })


        //             if (response.status == '200') {
        //                 console.log(Array.from((response['data']['profile_details'])))
        //                 // var role = localStorage.setItem("user_role", user_roles)

        //                 if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status").html() ==
        //                     "Admin") {
        //                     $("#pos_settings").show();
        //                 }

        //                 localStorage.setItem("user_pos_role", user_roles.filter(a => a !== 0)
        //                     .filter(a => a !== 1))
        //                 // $("#qty_adjustment").hide();
        //                 // $("#transfer").hide();
        //                 // $("#total_overdue_po").show();
        //                 // $("#total_overdue_inv").show();
        //                 // $("#best_selling_items").show();
        //                 // $("#lowest_selling_items").show();


        //                 // console.log(user_roles.filter(a => a !== 0))

        //                 var k = 1;
        //                 $.each(response['data']['profile_details'], function(i, v) {

        //                     if (v.id == 27) {
        //                         $("#pos_settings").show();
        //                         $("#contacts").show();
        //                         $("#products").show();
        //                         $("#sales_history_pos").show();
        //                         $("#shop").show();
        //                         $("#dashboard").show();





        //                     }

        //                     if (v.id == 28) { //Cashier

        //                         var pathname = window.location.pathname;
        //                             if(pathname == "/pos" ||pathname == "/pos/sales_history"){
        //                             // return;
        //                                $("#sales_history_pos").show();
        //                                $("#shop").show();
        //                           }else{

        //                             location.href = "https://empl-dev.site"
        //                             return;
        //                           }

        //                         // $("#sales_history_pos").show();

        //                         // // $("#pos_settings").show();

        //                         // $("#shop").show();

        //                         // user_roles_2.push(2);
        //                         // var roles = localStorage.getItem("user_role");
        //                         // var arr = ['2', '4']
        //                         // var users = roles.split(',')

        //                         // users.map((a, i) => {
        //                         //     if (a.includes(arr[i])) {
        //                         //         $("#expenses_revenue").show();
        //                         //         $("#expenses_graph").hide();
        //                         //         $("#revenue_graph").hide();
        //                         //     }
        //                         // })

        //                         // if(Array.from(Number(roles)).includes(2 & 4)){
        //                         //    alert(roles)
        //                         // }

        //                     }

        //                     if (v.id == 29) { //Monitor

        //                         $("#dashboard").show();






        //                         // user_roles_2.push(26);






        //                         // if (localStorage.getItem('warehouse_id') != "") {
        //                         //     $("#whsections").attr("href", "whsections?i=" + localStorage
        //                         //         .getItem('warehouse_id'));
        //                         //     $("#whsections").show(); //
        //                         // }



        //                     }



        //                     k++;
        //                 });



        //                 // $("#does_user_have_profile").html('yes_profile');


        //             } else if (response.status == '400') {

        //                 alert('No Profile')

        //                 //
        //                 // $("#does_user_have_profile").html('no_profile');

        //             } else if (response.status == "401") {
        //                 alert('No Profile')


        //                 // $("#does_user_have_profile").html('no_profile');

        //             }

        //         },

        //         error: function(response) {

        //         }

        //     });
        // })
        // }




        $('input#date_range').daterangepicker({
            autoUpdateInput: false
        });

        $('input#date_range').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('YYYY/MM/DD') + ' - ' + picker.endDate.format(
                'YYYY/MM/DD'));

        });

    }
    load()
</script>



<!-- <script>

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
</script> -->

<script>
    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
    function myFunction() {
        alert('window')
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>
<script src="../pos/js/pos.js"></script>
<script src="../pos/assets/js/barcode.js"></script>


<script>
    $("input[type='number']").inputSpinner()
    $(".buttons-only").inputSpinner({
        buttonsOnly: true
    })
</script>
<script>
    var $inputChangeClass = $("#inputChangeClass")
    var $classInput = $("#classInput")
    $classInput.on("input", function() {
        $inputChangeClass.prop("class", this.value)
    })
</script>
<script>
    var $inputDisabled = $("#inputDisabled")
    var $disabledSwitch = $("#disabledSwitch")
    $disabledSwitch.on("change", function() {
        $inputDisabled.prop("disabled", $(this).prop("checked"))
    })
</script>
<!--suppress JSUnusedLocalSymbols -->
<script>
    var $changedInput = $("#changedInput")
    var $valueOnInput = $("#valueOnInput")
    var $valueOnChange = $("#valueOnChange")
    $changedInput.on("input", function(event) {
        $valueOnInput.html($changedInput.val())
    })
    $changedInput.on("change", function(event) {
        $valueOnChange.html($changedInput.val())
    })
</script>
<!--suppress JSUnusedLocalSymbols -->
<script>
    var $minInput = $("#minInput")
    var $maxInput = $("#maxInput")
    var $stepInput = $("#stepInput")
    var $dataDecimalsInput = $("#dataDecimalsInput")
    var $minMaxTester = $("#minMaxTester")
    $minInput.on("change", function(event) {
        $minMaxTester.attr("min", $minInput.val())
    })
    $maxInput.on("change", function(event) {
        $minMaxTester.attr("max", $maxInput.val())
    })
    $stepInput.on("change", function(event) {
        $minMaxTester.attr("step", $stepInput.val())
    })
    $dataDecimalsInput.on("change", function(event) {
        $minMaxTester.attr("data-decimals", $dataDecimalsInput.val())
    })
</script>
<!--suppress JSUnusedLocalSymbols -->
<script>
    var $inputNet = $("#inputNet")
    var $inputGross = $("#inputGross")
    $inputNet.on("change", function(event) {
        $inputGross.val($inputNet.val() * 1.19)
    })
    $inputGross.on("change", function(event) {
        $inputNet.val($inputGross.val() / 1.19)
    })
    $inputGross.val($inputNet.val() * 1.19)
</script>
<script>
    var $inputLoop = $("#inputLoop")
    $inputLoop.on("change", function(event) {
        var value = $inputLoop.val()
        value = (value < 0) ? 360 + parseInt(value, 10) : value % 360
        $inputLoop.val(value)
    })
</script>
<script>
    $("#templateButtonsRight").inputSpinner({
        template: '<div class="input-group ${groupClass}">' +
            '<div class="input-group-prepend"></div>' +
            '<input type="text" inputmode="decimal" style="text-align: ${textAlign}" class="form-control"/>' +
            '<div class="input-group-append">' +
            '<button style="min-width: ${buttonsWidth}" class="btn btn-decrement ${buttonsClass}" type="button">${decrementButton}</button>' +
            '<button style="min-width: ${buttonsWidth}" class="btn btn-increment ${buttonsClass}" type="button">${incrementButton}</button>' +
            '</div></div>'
    })
</script>
<script>
    var $buttonDestroy = $("#buttonDestroy")
    var $buttonCreate = $("#buttonCreate")
    var $inputDestroyCreate = $("#inputDestroyCreate")
    $buttonDestroy.click(function() {
        $inputDestroyCreate.inputSpinner("destroy")
        $buttonDestroy.attr("disabled", true)
        $buttonCreate.attr("disabled", false)
    })
    $buttonCreate.click(function() {
        $inputDestroyCreate.inputSpinner()
        $buttonDestroy.attr("disabled", false)
        $buttonCreate.attr("disabled", true)
    })
</script>
<script>
    $(document).ready(function() {
        $(".add_item").click(function() {

            $(".item_table").toggle();

            $(".add_item_form").toggle();
            $(".dt-page__title").html('Add Item');
            $(".add_item").hide();

            //   $(".dt-page__title").css('margin-left', '60px');


            $(".dt-content item_table").show();



            $(".add_item_form").css({
                // 'margin-top': '50px',
                // 'width' : '90%',
                // 'margin-left' : 'auto',
                // 'margin-right' : 'auto'
            });

        });

        $(".add_stores").click(function() {

            $(".item_table").toggle();

            $(".add_item_form").toggle();
            $(".dt-page__title").html('Add Store');
            $(".add_item").hide();

            //   $(".dt-page__title").css('margin-left', '60px');


            $(".dt-content item_table").show();



            $(".add_item_form").css({
                // 'margin-top': '50px',
                // 'width' : '90%',
                // 'margin-left' : 'auto',
                // 'margin-right' : 'auto'
            });

        });




        $(".add_cat").click(function() {

            $(".item_table").toggle();

            $(".add_item_form").toggle();

            // if($(".dt-page__title").html() == "Add Catogory"){
            //     $(".dt-page__title").html('Category');
            // }else{
            //     $(".dt-page__title").html('Add Category');
            // }


            $(".add_item").hide();

            $(".dt-content item_table").show();



            $(".add_item_form").css({
                // 'margin-top': '50px',
                // 'width' : '90%',
                // 'margin-left' : 'auto',
                // 'margin-right' : 'auto'
            });

        });

        $(".add_unit").click(function() {

            $(".item_table").toggle();

            $(".add_item_form").toggle();
            $(".dt-page__title").html('Add Unit');
            // $("#categ").html('Add Category');

            $(".add_item").hide();

            //   $(".dt-page__title").css('margin-left', '60px');


            $(".dt-content item_table").show();



            $(".add_item_form").css({
                // 'margin-top': '50px',
                // 'width' : '90%',
                // 'margin-left' : 'auto',
                // 'margin-right' : 'auto'
            });

        });


        // $(".dt-nav__link").click(function(){
        //     $('.dropdown-menu-right').toggleClass('show')
        // })


        // $(".send_btn").click(function() {

        //     $(".item_table").toggle();
        //     $(".add_item").show();
        //     $(".add_item_form").toggle();
        //     $(".dt-page__title").html('Products');
        //     $(".dt-page__title").css('margin-left', '0px');



        // });

        $(".switch_pay").click(function() {

            $(".all_items").toggle();
            $(".for_payment").toggle();


        });


        $(".back").click(function() {

            $(".all_items").toggle();
            $(".for_payment").toggle();


        });

    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script>
    $(".filter").on("keyup", function() {
        var input = $(this).val().toUpperCase();

        if (!($(this).val())) {
            $(".br").hide();

            $(".for_head").hide();
            $("#shop_table").hide();

        } else {


            $(".filter_shop").each(function() {

                if ($(this).data("string").toUpperCase().indexOf(input) < 0) {
                    $(".br").show();
                    $(".for_head").show();
                    //   $("#shop_table").html(`<tr data-row-key="1" class="ant-table-row ant-table-row-level-0 filter_shop" id="all_table_31" style="font-size: 16px;" data-value="Biscuit" lang="1000.00" data="31" data-string="Biscuit">
                    //           <td class="ant-table-cell" style="display: flex;">

                    //               <div style="margin-left: 20px;
                    //                 margin-top: 5px;">
                    //                   <span>No Item Available</span>
                    //               </div>
                    //           </td>
                    //           </tr>`)
                    $(this).hide();

                } else {
                    $(".br").show();
                    $("#shop_table").show();
                    $(".for_head").hide();
                    $(this).show();
                }



            })
        }

    });

    // $(".filter").on("keyup", function() {
    //   var input = $(this).val().toUpperCase();

    //   $(".filter_shop").each(function() {
    //     if ($(this).data("string").toUpperCase().indexOf(input) < 0) {
    //       $(this).hide();
    //     } else {
    //       $(this).show();
    //     }
    //   })
    // });

    $(".filter_pro").on("keyup", function() {
        var input = $(this).val().toUpperCase();
        console.log(input)

        $(".product_table").each(function() {
            if ($(this).data("string").toUpperCase().indexOf(input) < 0) {
                $(this).hide();
            } else {
                $(this).show();
            }
        })
    });

    $(".filter_history").on("keyup", function() {
        var input = $(this).val().toUpperCase();
        console.log(input)

        $(".product_table").each(function() {
            console.log('teest', $('.product_table').data("string"))
            if ($(this).data("string").toUpperCase().indexOf(input) < 0) {
                $(this).hide();
            } else {
                $(this).show();
            }
        })
    });
</script>
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="assets/admin_template/vendors/twbs-pagination-1.4.0/jquery.twbsPagination.js" type="text/javascript">
</script>

<script src="../pos/assets/js/barcode.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jsbarcode/3.11.3/JsBarcode.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/scannerdetection/1.2.0/jquery.scannerdetection.min.js"></script>

<script>
    $(window).scannerDetection();
    $(window).bind('scannerDetectionComplete', function(e, data) {
            console.log('complete ' + data.string);
            // $("#product_barcod").val(data.string);
            // $('#populate_barcode').hide();

            $(".filter_shop").each(function() {

                if ($(this).attr("barcode") == data.string) {
                    var product_id = $(this).attr("data")
                    console.log($(this).attr("barcode"))
                    console.log(data.string)
                    console.log('check', product_id)
                    $(`#all_table_${product_id}`).show();
                    // $(".br").show();
                    // $(".for_head").show();
                    // $(this).hide();

                    // document.querySelector('.select_bar').click()

                    // $('.select_bar').trigger( "click" )



                    // var product_id = $(this).attr("id").replace(/select_it_/, "");
                    var product_name = $(`#select_it_${product_id}`).attr("data-table");
                    var product_price = $(`#select_it_${product_id}`).attr("data");
                    var product_image = $(`#select_it_${product_id}`).attr("lang");

                    $(`.for_head`).hide();
                    $(`#all_table_${product_id}`).hide();


                    $("#selected_item").append(
                        `<tr data-row-key="1" class="ant-table-row ant-table-row-level-0 all_tabl" id="all_tabl_${product_id}"
    style="font-size: 16px" data-value="${product_name}"
    lang="${product_price}" data="${product_id}" data-string="${product_name}">
    <td class="ant-table-cell" style="display: flex;">
        <div>
            <img class="gx-rounded-lg gx-width-100"
                src=${product_image}
                alt="..." style="width: 70px; height:50px;">
        </div>
        <div style="margin-left: 20px;
    margin-top: 5px;">
            </span><span>${product_name}</span>
        </div>


    </td>

    <td class="ant-table-cell">
        <div class="ant-input-number">
            <div class="ant-input-number-handler-wrap"><span
                    role="button" aria-label="Increase Value"
                    class="ant-input-number-handler ant-input-number-handler-up btn-plus plus_ "
                    id="plus_${product_id}" data="${product_id}"><span role="img"
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
                    data="${product_id}" id="minus_${product_id}"><span role="img"
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
                    aria-valuemax="100000" data="${product_id}"
                    aria-valuenow="6" autocomplete="off"
                    max="100000" min="1" step="1" value="1"
                    id="add_nu_${product_id}"
                    class="form-control ant-input-number-input trans_input">
            </div>
        </div>

    </td>
    <td class="ant-table-cell tab_price" id="tab_price_${product_id}" data-value="${product_price}">${product_price}</td>
    <td class="del_tab" id="del_tab_${product_id}"><i
            class="icon icon-trash icon-fw icon-xl"
            style="color:#dd2a36"></i></td>
    </tr>`)

                    console.log("here");
                    var debit = 0.00;
                    if ($('.for_debit').val()) {
                        debit = Number($('.for_debit').val())
                    }
                    var cash = 0.00;

                    if ($('.for_cash').val()) {
                        cash = Number($('.for_cash').val())
                    }

                    var cards = cash + debit

                    var total = $('.all_total').html();
                    console.log(total)
                    var all = total.slice(1, total.length);
                    console.log(Number(all))
                    console.log(Number(cards))
                    $('.for_paid').html(`₦${Number(cards).toFixed(2)}`);
                    // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
                    $('.for_due').html(`₦${(Number(all).toFixed(2) - Number(cards).toFixed(2)).toFixed(2)}`);

                    var name = $(`#all_table_${product_id}`).attr("data-value");
                    var id = $(`#all_table_${product_id}`).attr("data");
                    var price = $(`#all_table_${product_id}`).attr("lang");

                    for_table(name, price, id);

                } else {
                    // alert('Item not found')
                    // $(".br").show();
                    // $("#shop_table").show();
                    // $(".for_head").hide();
                    // $(this).show();
                }



            })

        })
        .bind('scannerDetectionError', function(e, data) {
            console.log('detection error ' + data.string);
        })
        .bind('scannerDetectionReceive', function(e, data) {
            console.log('Recieve');
            console.log(data.evt.which);
        })
</script>


</body>

</html>