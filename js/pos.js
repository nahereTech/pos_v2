
// $.when(fetch_user_module_roles()).done(function() {
$(document).ready(function () {
  // window.location.href = base_url;


var store_id = localStorage.getItem("store_id")
var base_url = window.location.origin;

//   const fetch_user_module_roles = async () => {

//         try {
//             var company_id = localStorage.getItem('company_id');
            
//             var store_id = localStorage.getItem('store_id');
//             if(!store_id){
//                 // location.href =base_url;
//                 return
//             }
//             var module_id = 15;
//             localStorage.setItem('module_key', module_id);
        
//             console.log(store_id);


//             if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status").html() == "Admin") {
//                 $("#pos_settings").show();
//             }

//             let response = await $.ajax({
//                 type: "GET",
//                 dataType: "json",
//                 url: base_url + "/api/pos/get_user_profile_in_pos",
//                 data: {
//                     "company_id": company_id,
//                     "user_id": localStorage.getItem('user_id'),
//                     "store_id": localStorage.getItem('store_id')
//                 },
//                 timeout: 60000,
//             })
                
//             var an_admin;
//             var user_roles = [];
//             var user_roles_2 = [];
//             $.each(response['data']['profile_details'], function(i, v) {
//                 console.log(v.id)
//                 user_roles.push(Number(v.id))

//             })


//             if (response.status == '200') {
//                 console.log(Array.from((response['data']['profile_details'])))

//                 if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status").html() ==
//                     "Admin") {
//                     $("#pos_settings").show();
//                 }

//                 localStorage.setItem("user_pos_role", user_roles.filter(a => a !== 0)
//                     .filter(a => a !== 1))
               

//                 var k = 1;
//                 $.each(response['data']['profile_details'], function(i, v) {

//                     if (v.id == 27) {
//                     var only_admin = localStorage.setItem("only_admin", v.id)
//                     var pathname = window.location.pathname;

//                     if(pathname == "/pos/"){
//                         location.href = `./dashboard`

//                             //    $("#shop").show();
//                           }
//                         $("#pos_settings").show();
//                         $("#contacts").show();
//                         $("#products").show();
//                         $("#sales_history_pos").show();
//                         // $("#shop").show();

//                         $("#dashboard").show();
//                     }

//                     if (v.id == 28) { //Cashier

//                         var pathname = window.location.pathname;
//                         console.log({pathname})
//                         $("#sales_history_pos").show();
//                                $("#shop").show();

//                             if(pathname == "/pos/" ||pathname == "/pos/sales_history"){
//                                $("#sales_history_pos").show();
//                                $("#shop").show();
//                           }else{
//                             if(response['data']['profile_details'].length == 1){
//                             // location.href = base_url
//                             // return;
//                           }
//                     }
//                 }

//                     if (v.id == 29) { //Monitor
//                         $("#dashboard").show();
//                         var pathname = window.location.pathname;
//                            if(response['data']['profile_details'].length == 1 && pathname == "/pos/"){
//                             location.href = `./dashboard`
//                         $("#dashboard").show();

//                           }
//                           else{
//                            var admin = localStorage.getItem("only_admin")
//                             if(admin !=27 && response['data']['profile_details'].length == 1){
//                                 // location.href = base_url
//                                 // return;
//                             }
                            
//                           }


//                     }



//                     k++;
//                 });



//                 // $("#does_user_have_profile").html('yes_profile');


//             } else if (response.status == '400') {

//                 // alert('No Profile')
//                 location.href =base_url


//                 //
//                 // $("#does_user_have_profile").html('no_profile');

//             } else if (response.status == "401") {
//                 // alert('No Profile')
//                 location.href = base_url



//                 // $("#does_user_have_profile").html('no_profile');

//             }

            


//         } catch (err) {
//             console.log(err)

//         }
//     }
    
// fetch_user_module_roles()

group_modules_users_can_access()

ListOfStoresUSerHasAccessTo()

// can_user_access_this_module();

// fetch_store_list()


list_categories("");

list_all_product("");
list_shop_products("");

load_categories_for_pop();




  // list_products("");


  // // list_products("");

  // list_categories("");

  // list_all_product("");

  // list_shop_products("");

  // load_categories_for_pop();

  // function remove_vats(id) {
  //   // body...
  //   alert('here')
  //   $(`#all_vat_${id}`).remove();
  // }

  $(document).on('click', '.export_file', function() {
    // alert('here')
    // $(".dropdown-usermenu").css("display", "block !important")
    $(".cv").hide();
    $(".contact_show").show();

  });

  $(document).on('click', '.import_file', function() {
    // alert('here')
    // $(".dropdown-usermenu").css("display", "block !important")
    $(".cv").hide();
    $(".contact_import_show").show();
    // $(".cv").toggle();

  });

  $(document).on('click', '.create_backup', function() {
    // alert('here')
    // $(".dropdown-usermenu").css("display", "block !important")
    $(".cv").hide();
    $(".contact_import_show").show();
    // $(".cv").toggle();

  });


  $(document).on('click', '.import_export', function() {
    // alert('here')
    // $(".dropdown-usermenu").css("display", "block !important")
    $(".cv").toggle();
  });

  $(document).on('click', '#help', function() {
    window.location.href= '/help'
  });


$(document).on('click', '#add_vat', function() {
        var rnd_id = Math.floor(Math.random() * 14564300451);


$("#for_disc").before(`<tr data-row-key="1" id="all_vat_${rnd_id}" class="all_vats ant-table-row ant-table-row-level-0"
            style="font-size: 15px;">
                <td class="ant-table-cell" colspan="2">
                    <span style="display: flex;"> <span><i id="remove_vat_${rnd_id}" dir="${rnd_id}" style="color:#dd2a36;" class="remove_vats fa fa-times" aria-hidden="true"></i></span><span style="margin-left:10px">
                    <input type="text" class="for_vat_discount" id="for_vat_discount_${rnd_id}" placeholder="VAT Name" style="margin-right: 5%; width:100%; border: none;"/>
                    </span></span>
                </td>
                <td style="display: flex;" class="ant-table-cell" colspan="2"
                    style="text-align: right;">₦<input type="number" class="for_vat_discount_amount" id="for_vat_discount_amount_${rnd_id}" value="" style="width:100%; margin-right: 5%;border: none;border-bottom: 1px solid #d9d9d9;" ></td>
                </tr>`)
})

       $(document).on('click', '.remove_vats', function() {
        var id = $(this).attr("dir")
        var all_id = $(this).attr("id")
        console.log({all_id})
        var disc = $(`.all_disc`).html()
        var tt = $(`#for_vat_discount_amount_${id}`).val()
        console.log(Number($(`#${all_id}`).val()))
        console.log(disc)

        console.log(Number(tt))


        var k = disc.slice(1)
        var f = k.split('.')[0]
        var total = Number(f.split(',').join(""))
        console.log(total)


        var ans = total - Number(tt)
        console.log(ans)
        console.log(total)
        console.log(all_id)

        $(`.all_disc`).html(`₦${format_to_money(ans)}`);


        $(`#all_vat_${id}`).remove();

              console.log("here");
        var debit = 0.00;
        if($('.for_debit').val()){
          debit = Number($('.for_debit').val())
        }
        var cash = 0.00;

        if($('.for_cash').val()){
          cash = Number($('.for_cash').val())
        }

        var cards = cash + debit

        var total = $('.all_total').html().replace(/[',']/g,'')
        console.log(total)
        var all = total.slice(1,total.length);
        console.log(Number(all))
        console.log(Number(cards))

        var disc = $(`.all_disc`).html()
        var k = disc.slice(1)
        var f = k.split('.')[0]
        var total = Number(f.split(',').join(""))
        console.log(total)

        var anss = Number(all) + total
     


        $('.for_due').html(`₦${format_to_money((Number(anss) - Number(cards)))}`);
        $('.for_paid').html(`₦${format_to_money(Number(cards))}`);





       })

  

  $('.range_inputs').append("<button class='clearField btn btn-sm btn-default' id='clearField' type='button'>Clear Field</button>");
  $("#clearField").click(function(){
    $('#date_range').val("").datepicker("update");
  });
       $(document).on('click', '.get_comp_list', function() {
            $('#list_comp_tables').html(
                        `<span style="position:relative; left:200px"><i class="fa fa-spinner fa-spin fa-fw fa-3x"></i></span>`);
                    $("#modal_choose_company").show();

            // var id = $(this).attr("id").replace(/themodli_/,'');
            // var compn_and_d = $(this).attr("dir").split("-");
            // var module_name = compn_and_d[0];

            // $("#list_comp_tables").html($("#comp_todi_"+id).html());
            // $(".mdl_hdn").html("Which company's "+module_name+"?");
            // $("#modal_choose_company").modal("show");
            // $("#modal_choose_company").modal("show");
            var id = $(this).attr("id").replace(/themodli_/, '');
            var landing = $(this).attr("data");
            var compn_and_d = $(this).attr("dir").split("-");
            localStorage.setItem('module-id', id);
            localStorage.setItem('landing_page', landing);
            var module_name = compn_and_d[0];
            localStorage.setItem('module-name', module_name);

            if(Number(id) == 15){
               list_active_companies_pos(id, landing);
              $(".mdl_hdn").html("Which company's " + module_name + "?");
            }else{
            list_active_companies(id, landing);
            // $("#list_comp_tables").html($("#comp_todi_"+id).html());
            $(".mdl_hdn").html("Which company's " + module_name + "?");
            // $("#modal_choose_company").modal("show");
            }

        });

        $(document).on('click', '.set_coy', function() {


            var compn_and_d = $(this).attr("dir").split("-");
            var company_id = compn_and_d[1];
            var md_landing_page = compn_and_d[2];
            var comp_id = localStorage.getItem('company_id');
            if( comp_id ){
            localStorage.setItem('company_id', company_id);

            }
            localStorage.setItem('landing_page', md_landing_page);
          
            localStorage.removeItem('store_id');
            localStorage.removeItem('store_name');

            window.location.href = "../" + md_landing_page;

        });

    });

function list_active_companies_pos(id, landing) {
        var user_id = localStorage.getItem('user_id');
        var module_id = localStorage.getItem('module-id');
        var module_name = localStorage.getItem('module-name');


        $.ajax({

            type: "GET",
            dataType: "json",
              headers: {
                        'Authorization':localStorage.getItem('token'),
                        'Content-Type':'application/json'
            },
            url: base_url + "/api/pos/my_connections",
            data: {
                "store_id": store_id,
                "module_id": id
            },
            timeout: 60000,


            success: function(response) {

                if (response.status == '200') {
                    var list_mds = "";
                    console.log(response.data);
                    if (response.data.length == 1) {
                        // var compn_and_d = $(this).attr("dir").split("-");
                        $.each(response.data, function(i, v) {
                            var company_id = v.company_id;
                            // var md_landing_page = v.landing;
                            if(!(localStorage.getItem('company_id'))){
                                localStorage.setItem('company_id', company_id);
                            }
                            // localStorage.setItem('landing_page', md_landing_page);
                            // alert(localStorage.getItem('company_id'));
                            // localStorage.setItem('company_name', company_name);
                            // var list_mds = "";
                            list_mds += `<span id="comp_todi_${module_id}" >`;
                            $.each(response.data, function(i, v) {
                                list_mds +=
                                    `<li class="" style="display:"><a class="set_coy" dir="${module_name}-${v.company_id}-${landing}" style="cursor: pointer" >${v.company_name}</a></li>`;
                            });

                        })
                        // window.location.href = "../pos";
                    } else {
                        var list_mds = "";
                        list_mds += `<span id="comp_todi_${module_id}" >`;
                        $.each(response.data, function(i, v) {
                            list_mds +=
                                `<li class="" style="display:"><a class="set_coy" dir="${module_name}-${v.company_id}-${landing}" style="cursor: pointer" >${v.company_name}</a></li>`;
                        });
                    }

                }
                console.log(list_mds);
                if (list_mds == undefined) {
                    $('#list_comp_tables').html(
                        `<span>You have no active subscription for ${landing} module</span>`);
                    $("#modal_choose_company").modal("show");
                    return;
                }
                $('#list_comp_tables').html(list_mds);
                $("#modal_choose_company").show();

            },
            error: function(response) {

            }
        })

    }



    function list_active_companies(id, landing, company_name) {
        var user_id = localStorage.getItem('user_id');
        var module_id = localStorage.getItem('module-id');
        var module_name = localStorage.getItem('module-name');


        $.ajax({

            type: "GET",
            dataType: "json",
              headers: {
                        'Authorization':localStorage.getItem('token'),
                        'Content-Type':'application/json'
            },
            url: base_url + "/api/wms/my_connections",
            data: {
                // "user_id": user_id,
                "store_id": store_id,

                "module_id": id
            },
            timeout: 60000,


            success: function(response) {

                if (response.status == '200') {

                    console.log(response.data);
                    if (response.data.length == 1) {
                        console.log(response.data[0].company_id)
                        var company_id = response.data[0].company_id;
                        var md_landing_page = landing
                        // localStorage.setItem('company_id', company_id);
                        if(!(localStorage.getItem('company_id'))){
                                localStorage.setItem('company_id', company_id);
                            }

                        window.location.href = "../" + md_landing_page;
                        return
                    }
                    var list_mds = "";
                    list_mds += `<span id="comp_todi_${module_id}" >`;
                    $.each(response.data, function(i, v) {
                        list_mds +=
                            `<li class="" style="display:"><a class="set_coy" dir="${module_name}-${v.company_id}-${landing}" style="cursor: pointer" >${v.company_name}</a></li>`;
                    });

                }
                console.log(list_mds);
                if (list_mds == undefined) {
                    $('#list_comp_tables').html(
                        `<span>You have no active subscription for ${landing} module</span>`);
                    $("#modal_choose_company").modal("show");
                }
                $('#list_comp_tables').html(list_mds);
                $("#modal_choose_company").modal("show");

            },
            error: function(response) {

            }
        })

    }


    // function list_active_companies(id, landing) {
    //     var user_id = localStorage.getItem('user_id');
    //     var module_id = localStorage.getItem('module-id');
    //     var module_name = localStorage.getItem('module-name');


    //     $.ajax({

            // type: "GET",
            // dataType: "json",
            // url: base_url + "/api/wms/my_connections",
            // data: {
            //     "user_id": user_id,
            //     "module_id": id
            // },
            // timeout: 60000,


    //         success: function(response) {

    //             if (response.status == '200') {

    //                 console.log(response.data);
    //                    var landing =localStorage.getItem('landing_page');

    //                 if (response.data.length == 1) {
    //                     // var compn_and_d = $(this).attr("dir").split("-");
    //                     $.each(response.data, function(i, v) {
    //                         var company_id = response.data.company_id;
    //                         var md_landing_page = response.data.landing;
    //                         localStorage.setItem('company_id', company_id);
    //                         localStorage.setItem('landing_page', md_landing_page);

    //                         // alert(localStorage.getItem('company_id'));
    //                         // localStorage.setItem('company_name', company_name);
    //                         return;

    //                     })
    //                     // window.location.href = "../" + landing;
    //                 } else {
    //                     var list_mds = "";
    //                     list_mds += `<span id="comp_todi_${module_id}" >`;
    //                     $.each(response.data, function(i, v) {
    //                         list_mds +=
    //                             `<li class="" style="display:"><a class="set_coy" dir="${module_name}-${v.company_id}-${landing}" style="cursor: pointer" >${v.company_name}</a></li>`;
    //                     });
    //                 }

    //             }
    //             console.log(list_mds);
    //             if (list_mds == undefined) {
    //                 $('#list_comp_tables').html(
    //                     `<span>You have no active subscription for ${landing} module</span>`);
    //                 $("#modal_choose_company").show();
    //                 return;
    //             }
    //             $('#list_comp_tables').html(list_mds);
    //             $("#modal_choose_company").show();

    //         },
    //         error: function(response) {

    //         }
    //     })

    // }



    function group_modules_users_can_access() {

        // return;

        var user_id = localStorage.getItem('user_id');
        var company_id = localStorage.getItem('company_id');

        var pathArray = window.location.href.split('/');
        var username = pathArray[2].split('.')[0];

        $.ajax({

            type: "GET",
            dataType: "json",
              headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
            url: base_url + "/api/user/group_modules_users_can_access",
            data: {
                "user_id": user_id,
                "store_id": localStorage.getItem('store_id'),

                "company_id": company_id,
                "token": localStorage.getItem('token')
            },
            timeout: 60000,

            success: function(response) {

                console.log(response);

                $('#user_name').html(localStorage.getItem('firstname') + ' ' + localStorage.getItem(
                    'lastname'));
                $('#hi_user_name').html(localStorage.getItem('firstname'));
                $('.hi_user_name').html(localStorage.getItem('firstname'));

                if (response.status == '200') {
                    // $(".fst_dd").append(list_mds+'<li><div class="text-center"><a href="/user/myapps"><strong>Add More Apps </strong><i class="fa fa-angle-right"></i></a></div></li>');
                    for_default = `<option value='2'>Workgroup</option>`;

                    $.each(response.data, function(i, v) {
                        console.log(v)
                        if (v.module_full_name) {
                            console.log(v.module_full_name)
                            for_default +=
                                `<option value='${v.module_id}'>${v.module_full_name}</option>`
                        }
                    })

                    if (response.total_rows != 0) {

                        var k = 1;
                        var list_mds = "";
                        list_mds +=
                            `<div class="col-md-2" data-tooltip="Workgroup">
                               <li class="dd">   <a style="position: relative;
                               right: 20%;" href="../workgroup" class="get_comp_list" id="themodli_"  data="feeds"><span class="image"><img src="../files/images/icons/feeds_icon.png" alt="" style="position:relative; left:33%;"></span>     <span>        <div class="abbrv" ><span class="" style="position:relative; left:10%;">Workgroup</div></span></span>   </a></li></div>`;
                        $.each(response.data, function(i, v) {
                            console.log(v)


                            if (v.access_count == 1) {

                                var link_lk = 'class="get_comp_list"';
                                var set_coy_class = "";

                            } else {

                                var link_lk = 'class="get_comp_list"';
                                var set_coy_class = "";

                            }




                            // if(v.module_id != 19){ //remove this particular module from the list

                            // list_mds += '<li>   <a '+link_lk+' id="themodli_'+v.module_id+'"  dir="'+v.module_abbrv+"-"+v.company_id+"-"+v.company_name+'" class="'+set_coy_class+'" >   <span class="image"><img src="../files/images/icons/'+v.module_little_icon+'" alt=""></span>     <span>        <span><b>'+v.module_abbrv+'</b></span> </span>       <span class="message">'+v.module_full_name+'</span>                      </a>          </li>';



                            // list_mds += '<span id="comp_todi_'+v.module_id+'" style="display: none">';
                            // $.each(v.more_comp_list, function (i2, v2){
                            //     list_mds += '<li class="" style="display:"><a class="set_coy"   dir="'+v.module_abbrv+"-"+v2.id+"-"+v2.landing_page+'" style="cursor: pointer" >'+v2.comp_name+'</a></li>';
                            // });
                            // list_mds += '</span>';

                            // list_mds += '<li>   <a '+link_lk+' id="themodli_'+v.module_id+'"  dir="'+v.module_abbrv+"-"+v.company_id+"-"+v.company_name+'" class="'+set_coy_class+'" data="'+v.module_landing_page+'">   <span class="image"><img src="../files/images/icons/'+v.module_little_icon+'" alt=""></span>     <span>        <span><b>'+v.module_abbrv+'</b></span> </span>       <span class="message">'+v.module_full_name+'</span>                      </a>          </li>';




                            // list_mds += '<span><div class="col-md-3 first_"  style="font-size:10px" data-tooltip="'+v.module_full_name+'"> <div class="">  <li>   <a '+link_lk+'  class="'+set_coy_class+'" data="'+v.module_landing_page+'">   <span class="image"><img src="../files/images/icons/'+v.module_little_icon+'" alt=""></span>     <span>        <div class="abbrv" ><span class="hide_hover">'+v.module_abbrv+'</span></div> </span>       <div class="message"></div>                      </a>          </li></div></div></span>';


                            list_mds +=
                                '<div class="col-md-2"  style="font-size:10px" data-tooltip="' +
                                v.module_full_name + '"> <div class="">  <li>   <a ' + link_lk +
                                ' id="themodli_' + v.module_id + '" dir="' + v.module_abbrv + "-" +
                                v.company_id + "-" + v.company_name + '"  class="' + set_coy_class +
                                '" data="' + v.module_landing_page +
                                '">   <span class="image"><img src="../files/images/icons/' + v
                                .module_little_icon +
                                '" alt=""></span>     <span>        <div class="abbrv" ><span class="">' +
                                v.module_abbrv +
                                '</span></div>      <div class="message"></div>                      </a>          </li></div></div></span>';





                            // list_mds +=
                            //     '<span><div class="col-md-3 first_"  style="font-size:10px" data-tooltip="' +
                            //     v.module_full_name + '"> <div class="">  <li>   <a ' + link_lk +
                            //     ' id="themodli_' + v.module_id + '" dir="' + v.module_abbrv + "-" +
                            //     v.company_id + "-" + v.company_name + '"  class="' + set_coy_class +
                            //     '" data="' + v.module_landing_page +
                            //     '">   <span class="image"><img src="../files/images/icons/' + v
                            //     .module_little_icon +
                            //     '" alt=""></span>     <span>        <div class="abbrv" ><span class="hide_hover">' +
                            //     v.module_abbrv +
                            //     '</span></div> </span>       <div class="message"></div>                      </a>          </li></div></div></span>';





                            //         <a id="feed_tg" href="../feeds">
                            // <span class="tooltiptext">'+v.module_full_name+'</span>
                            //                     <span class="image"><img src="../files/images/icons/feeds_icon.png" alt=""></span>
                            //                     <span>
                            //   <span><b>Feeds</b></span>

                            //                     </span>
                            //                     <span class="message">
                            //   Notifications Feeds
                            // </span>
                            //                 </a>


                            // list_mds += '<span id="comp_todi_'+v.module_id+'" style="display: none">';
                            // $.each(v.more_comp_list, function (i2, v2){
                            //   list_mds += '<li class="" style="display:"><a class="set_coy"   dir="'+v.module_abbrv+"-"+v2.id+"-"+v2.landing_page+'" style="cursor: pointer" >'+v2.comp_name+'</a></li>';

                            // });
                            // list_mds += '</span>';


                            k++;

                        });




                        $(".fst_dd").append(list_mds);
                        console.log(for_default)




                        // $( list_mds ).insertAfter( ".fst_dd" );

                    } else {


                    }

                       // $('#whole_body').show();
                    $(".set_").append(for_default);


                    fetch_company_colors();

                } else {

                    fetch_company_colors();

                }

            },
            error: function(response) {

                fetch_company_colors();
            }
        });

    }



    function fetch_company_colors() {



        var company_id = localStorage.getItem('company_id');

        $.ajax({

            type: "POST",
            dataType: "json",
              headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
            url: base_url + "/api/company/get_company_colours",
            data: {
                "store_id": localStorage.getItem('store_id'),

                "company_id": company_id
            },
            timeout: 60000,

            success: function(response) {

                console.log(response);

                if (response.status == '200') {

                    var color = '#2A3F54';
                    if (response.data.middle_left_bar == '' || response.data.middle_left_bar == null) {
                        response.data.middle_left_bar = color;
                    }

                    if (response.data.body_color == '' || response.data.body_color == null) {
                        response.data.body_color = color;
                    }

                    if (response.data.bottom_left_bar == '' || response.data.bottom_left_bar == null) {
                        response.data.bottom_left_bar = color;
                    }

                    if (response.data.top_left_bar == '' || response.data.top_left_bar == null) {
                        response.data.top_left_bar = color;
                    }

                    $('.left_col').css('background', response.data.middle_left_bar);
                    $('body').css('background', response.data.body_color);
                    // $('a').css('background', response.data.body_color);
                    $('.sidebar-footer').css('background', response.data.bottom_left_bar);
                    $('.sidebar-footer a').css('background', response.data.bottom_left_bar);
                    $('.site_title').css('background', response.data.top_left_bar);
                    $('table.jambo_table thead').css('background', response.data.body_color);
                    $('ul.side-menu li a').children().css('background-color', response.data.body_color);





                }

                $('#user_name').html(localStorage.getItem('firstname') + ' ' + localStorage.getItem(
                    'lastname'));

                if (localStorage.getItem('profile_photo') == "" || localStorage.getItem('profile_photo') ==
                    null || localStorage.getItem('profile_photo') == undefined) {

                    $('#profile_img').attr('src',
                        '/files/images/user_profile_images/sml_default_picture.png');

                } else {

                    $('#profile_img').attr('src', '/files/images/user_profile_images/sml_' + localStorage
                        .getItem('profile_photo'));

                }

                // fetch_warehouse_list();
                // fetch_store_list()

            },
            // objAJAXRequest, strError
            error: function(response) {
              fetch_store_list()

                // fetch_warehouse_list();
                // alert('Error fetching customization!');

            }

        });
    }



    $("#edit_modal").hide();
    $("#edit_modal").css("display", "none !important");


    //  function fetch_store_list() {

    //     var company_id = localStorage.getItem('company_id');
    //     var user_id = localStorage.getItem('user_id');


    //     $.ajax({

    //         type: "GET",
    //         dataType: "json",
    //         url: base_url + "/api/pos/list_store_user_connected",
    //         data: {
    //             "company_id": company_id,
    //             "user_id": user_id
    //         },
    //         timeout: 60000,

    //         success: function(response) {

    //             console.log(response)

    //             if (response.status == '200') {

    //                 var store_id;
    //                 var store_name;

    //                 if (localStorage.getItem("store_id") == undefined) {
    //                     localStorage.setItem("store_id", response['data'][0]['store_id']);
    //                     localStorage.setItem("store_name", response['data'][0]['store_name']);
    //                 }

    //                 localStorage.setItem("stores", response.data.length);
    //                 console.log(response.data.length);
    //                 // fetch_user_module_roles()
    //                         // $('.verified').show();


    //                  var kup = 0;
    //                     $.each(response['data'], function(i, v) {

    //                         store_id = response['data'][i]['store_id'];
    //                         store_name = response['data'][i]['store_name'];

    //                         kup++;

    //                     });

    //                     if (kup > 1) {
    //                         $('#switch_stores').show();
    //                     } else {
    //                         $('#switch_stores').hide();
    //                     }

    //                   }
    //                    else if (response.status == '400' || response.status == '401') {
    //                       var pathname = window.location.pathname;
    //                       console.log({
    //                           pathname
    //                       })

    //                       if (pathname !== "/pos/") {
    //                         // alert('ee')
    //                           // localStorage.removeItem('token')
    //                           // location.href = base_url
    //                       }
    //                   }
    //                   else {



    //                     // fetch_user_module_roles();

    //                 if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status").html() ==
    //                     "Admin") {




    //                     $("#assgn_roles").addClass("fa-times"); //mark roles as x

    //                     //now check if other setups are ready
    //                     $.ajax({

    //                         type: "GET",
    //                         dataType: "json",
    //                         url: base_url + "/api/pos/isSetupDone",
    //                         data: {
    //                             "company_id": localStorage.getItem('company_id')
    //                         },
    //                         timeout: 60000,

    //                         success: function(response) {
    //                             console.log(response);
    //                             if (response.status == '200') {
    //                         // $('.verified').show();
    //                         $("#no_permission_dv").hide();

    //                         $(".dsh_dvs").fadeOut(200).promise().done(function() {
    //                                   $("#admins_no_permission_dv").fadeIn(400);
    //                                });

    //                         // $('.verified').show();


    //                                 if (response.data.store == "yes") {
    //                                     $("#crt_whs").addClass("fa-check");
    //                                 } else {
    //                                     $("#crt_whs").addClass("fa-times");
    //                                 }

    //                                 if (response.data.user_name == "yes") {
    //                                     $("#updt_comp_dtl").addClass("fa-check");
    //                                 } else {
    //                                     $("#updt_comp_dtl").addClass("fa-times");
    //                                 }

    //                             } else {

    //                                $(".dsh_dvs").fadeOut(200).promise().done(function() {
    //                                   $("#admins_no_permission_dv").fadeIn(400);
    //                                });

    //                             }
    //                         },
    //                         error: function(response) {

    //                         }
    //                     });





    //                     // $(".dsh_dvs").fadeOut(200).promise().done(function() {
    //                     //     $("#admins_no_permission_dv").fadeIn(400);
    //                     // });

    //                 } else {

    //                       $("#admins_no_permission_dv").hide();


    //                     $(".dsh_dvs").fadeOut(200).promise().done(function() {
    //                         $("#no_permission_dv").fadeIn(400);
    //                     });

    //                 }




    //             }

            

    //         },
    //         // objAJAXRequest, strError
    //         error: function(response) {

    //             $("#page_error_div").html(
    //                 '<i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i>&nbsp;&nbsp; Connection Error. Please try again.'
    //             );
    //             $(".container33").hide();
    //             $("#page_error_div").show();
    //             $("#whole_body").hide();

    //         }

    //     });
    // }

    var vat = []

  $(document).on("keyup", ".for_vat_discount_amount", function (event) {

    

    var valu =$(this).val();
    console.log({valu})
      var fin = 0


    $(".for_vat_discount_amount").each(function () {
      var id = $(this).attr("id").replace(/for_vat_discount_amount_/, "");
      console.log(id);


      var dd = $(this).val()

      fin = Number($("#for_vat_discount_amount_" + id).val()) + fin
      console.log({fin})

       var total = $('.all_total').html().replace(/[',']/g,'')
      console.log(total)
       var debit = 0.00;
    if($('.for_debit').val()){
      debit = Number($('.for_debit').val())
    }
    var cash = 0.00;

    if($('.for_cash').val()){
      cash = Number($('.for_cash').val())
    }

    var cards = cash + debit
      var all = total.slice(1,total.length);
      console.log(Number(all))
      console.log(Number(cards))
      // $('.for_paid').html(`₦${format_to_money(Number(cards))}`);
      // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);

        var disc = $(`.all_disc`).html()
        var k = disc.slice(1)
        var f = k.split('.')[0]
        var total = Number(f.split(',').join(""))
        console.log(total)

        var anss = Number(all) + fin
     


    $('.for_due').html(`₦${format_to_money((Number(anss) - Number(cards)))}`);

      // var item_unit = $("#holds_itms_unit_" + id).html();
      // var price = $("#for_vat_discount_amount_" + id).val();
      // console.log(Number(price));
      // var all = []
      // all.push(Number(price))

      // console.log(all)
      // console.log(Number(price))
      // var ans = (Number(all[0]) + Number(price))
      // console.log({ans})

      // console.log(price.slice(1, price.length));
      // var row_price = price.slice(1, price.length);


      // vat.push(price);
    });
    // console.log(vat)
    // var total = vat.reduce((a, b) => a + b);
    // console.log(total);

    $(".all_disc").html(`&#x20A6;${format_to_money(fin)}`);
  });


    function can_user_access_this_module() {
        //accesscontrol/check_if_user_has_access_to_a_module
        $.ajax({

            type: "POST",
            dataType: "json",
            headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
            url: base_url + "/api/accesscontrol/check_if_user_has_access_to_a_module",
            data: {
                company_id: localStorage.getItem('company_id'),
                user_id: localStorage.getItem('user_id'),
                store_id: localStorage.getItem('store_id'),

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
                    // group_modules_users_can_access();

                } else {

                  var pathname = window.location.pathname;
                  console.log({pathname})

                if (pathname !== "/pos/") {
                    // localStorage.removeItem('token')
                    location.href = base_url
                }

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


//     function fetch_user_module_roles() {

//         var base_url = window.location.origin;


//         var company_id = localStorage.getItem('company_id');
//         // var urlParams = new URLSearchParams(window.location.search).get('id');
//         // var user_id = urlParams ? urlParams : localStorage.getItem('user_id');
//         var store_id = localStorage.getItem('store_id');
//         var module_id = 15;
//         localStorage.setItem('module_key', module_id);
//         // alert(urlParams)
//         // if(urlParams){
//         //   user_id = urlParams.get('id');
//         // }else{
//         //   user_id = localStorage.getItem('user_id');
//         // }
//         // alert(user_id)
//         console.log(store_id);
//         // $("#settings_tab").show();


//         if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status").html() == "Admin") {
//             // window.location.href = "../pos/users"
//             $("#pos_settings").show();
//         }

//         $.ajax({

//             type: "GET",
//             dataType: "json",
//             url: base_url + "/api/pos/get_user_profile_in_pos",
//             data: {
//                 "company_id": company_id,
//                 "user_id": localStorage.getItem('user_id'),
//                 "store_id": localStorage.getItem('store_id')
//             },
//             timeout: 60000,

//             success: function(response) {

//                 console.log(response);

//                 var an_admin;
//                 var user_roles = [];
//                 var user_roles_2 = [];
//                 $.each(response['data']['profile_details'], function(i, v) {
//                     console.log(v.id)
//                     user_roles.push(Number(v.id))

//                 })


//     if (response.status == '200') {
//         console.log(Array.from((response['data']['profile_details'])))

//         if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status").html() ==
//             "Admin") {
//             $("#pos_settings").show();
//         }

//         localStorage.setItem("user_pos_role", user_roles.filter(a => a !== 0)
//             .filter(a => a !== 1))
       

//         var k = 1;
//         $.each(response['data']['profile_details'], function(i, v) {

//             if (v.id == 27) {
//             var only_admin = localStorage.setItem("only_admin", v.id)
//             var pathname = window.location.pathname;

//             if(pathname == "/pos/"){
//                 location.href = `./dashboard`

//                     //    $("#shop").show();
//                   }
//                 $("#pos_settings").show();
//                 $("#contacts").show();
//                 $("#products").show();
//                 $("#sales_history_pos").show();
//                 // $("#shop").show();

//                 $("#dashboard").show();
//             }

//             if (v.id == 28) { //Cashier

//                 var pathname = window.location.pathname;
//                 console.log({pathname})
//                 $("#sales_history_pos").show();
//                        $("#shop").show();

//                     if(pathname == "/pos/" ||pathname == "/pos/sales_history"){
//                        $("#sales_history_pos").show();
//                        $("#shop").show();
//                   }else{
//                     if(response['data']['profile_details'].length == 1){
//                     // location.href = base_url
//                     // return;
//                   }
//             }
//         }

//             if (v.id == 29) { //Monitor
//                 $("#dashboard").show();
//                 var pathname = window.location.pathname;
//                    if(response['data']['profile_details'].length == 1 && pathname == "/pos/"){
//                     location.href = `./dashboard`
//                 $("#dashboard").show();

//                   }
//                   else{
//                    var admin = localStorage.getItem("only_admin")
//                     if(admin !=27 && response['data']['profile_details'].length == 1){
//                         // location.href = base_url
//                         // return;
//                     }
                    
//                   }


//             }



//             k++;
//         });



//         // $("#does_user_have_profile").html('yes_profile');


//     } else if (response.status == '400') {

//         // alert('No Profile')
//         location.href =base_url


//         //
//         // $("#does_user_have_profile").html('no_profile');

//     } else if (response.status == "401") {
//         // alert('No Profile')
//         location.href = base_url



//         // $("#does_user_have_profile").html('no_profile');

//     }

    
// },
//  error: function(response) {

//             }

//           })
//       }





  $(document).on("click", ".plus_", function () {
    var id = $(this).attr("data");
    var value = Number($(`#add_nu_${id}`).val());
    var ans = value + 1;
    console.log(value);
    $(`#add_nu_${id}`).val(value + 1);
    var qty = $(`#add_nu_${id}`).val(value + 1);
    var price = $(`#tab_price_${id}`).attr("data-value").replace(/[',']/g,'');
    console.log(Number(price));
    console.log(Number(price) * ans);
    $(`#tab_price_${id}`).html(`${format_to_money((Number(price) * ans))}`);
    // $(".all_total").html(`&#x20A6;${total}` + `${(Number(price) * ans)}`);

    // $(`#tab_price_${id}`).attr('data-value', `${(Number(price) * ans).toFixed(2)}`);

    var items_list = [];

    $(".tab_price").each(function () {
      var id = $(this).attr("id").replace(/tab_price_/, "");
      console.log(id);

      // var item_unit = $("#holds_itms_unit_" + id).html();
      var price = $("#tab_price_" + id).html().replace(/[',']/g,'');
      console.log(price);
      // console.log(price.slice(1, price.length));
      // var row_price = price.slice(1, price.length);

      // items_list.push(Number(row_price));
      items_list.push(Number(price));

    });

    // check when working on figures

    var total = items_list.reduce((a, b) => a + b);
    console.log(total);
    $(".all_total").html(`&#x20A6;${format_to_money(total)}`);

    // console.log("here");
    // var debit = 0.00;
    // if($('.for_debit').val()){
    //   debit = Number($('.for_debit').val())
    // }
    // var cash = 0.00;

    // if($('.for_cash').val()){
    //   cash = Number($('.for_cash').val())
    // }

    // var cards = cash + debit

    // var total = $('.all_total').html();
    // console.log(total)
    // var all = total.slice(1,total.length);
    // console.log(Number(all))
    // console.log(Number(cards))
    // $('.for_paid').html(`₦${Number(cards).toFixed(2)}`);
    // // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
    // $('.for_due').html(`₦${(Number(all).toFixed(2) - Number(cards).toFixed(2)).toFixed(2)}`);

     console.log("here");
    var debit = 0.00;
    if($('.for_debit').val()){
      debit = Number($('.for_debit').val())
    }
    var cash = 0.00;

    if($('.for_cash').val()){
      cash = Number($('.for_cash').val())
    }

    var cards = cash + debit

    var total = $('.all_total').html().replace(/[',']/g,'')
    console.log(total)
    var all = total.slice(1,total.length);
    console.log(Number(all))
    console.log(Number(cards))
    $('.for_paid').html(`₦${format_to_money(Number(cards))}`);
    // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
    $('.for_due').html(`₦${format_to_money((Number(all) - Number(cards)))}`);
    
  });

  $(document).on("click", ".minus_", function () {
    var id = $(this).attr("data");
    if (Number($(`#add_nu_${id}`).val()) == 1) {
      return;
      $(`#tab_${id}`).remove();
    }
    var value = Number($(`#add_nu_${id}`).val());
    var ans = value - 1;
    console.log(value);
    $(`#add_nu_${id}`).val(value - 1);

    // var qty = $(`#add_nu_${id}`).val(value - 1);
    var qty = Number($(`#add_nu_${id}`).val());
    console.log("qty", qty);

    var price = $(`#tab_price_${id}`).attr("data-value").replace(/[',']/g,'');
    console.log(Number(price) * qty);
    $(`#tab_price_${id}`).html(`${format_to_money((Number(price) * qty))}`);
    // $(`#tab_price_${id}`).attr('data-value', `${(Number(price) * qty).toFixed(2)}`);

    console.log($(".payment_table").children("tr"));

    if ($(".payment_table").children("tr").length == 0) {
      $(".not_selected").show();

      $(".pay").hide();
      $(".total").hide();
    }

    // if($(`.payment_table #tab_${id}`).length < 1){
    //   $('.not_selected').show();

    //   $('.pay').hide();
    //   $('.total').hide();

    // }

    var items_list = [];

    $(".tab_price").each(function () {
      var id = $(this).attr("id").replace(/tab_price_/, "");
      console.log(id);

      // var item_unit = $("#holds_itms_unit_" + id).html();
      var price = $("#tab_price_" + id).html().replace(/[',']/g,'');
      console.log(price);
      // console.log(price.slice(1, price.length));
      // var row_price = price.slice(1, price.length);

      // items_list.push(Number(row_price));
      items_list.push(Number(price));
    });

    var total = items_list.reduce((a, b) => a + b);
    console.log(total);
    $(".all_total").html(`&#x20A6;${total}`);

     console.log("here");
    var debit = 0.00;
    if($('.for_debit').val()){
      debit = Number($('.for_debit').val())
    }
    var cash = 0.00;

    if($('.for_cash').val()){
      cash = Number($('.for_cash').val())
    }

    var cards = cash + debit

    var total = $('.all_total').html().replace(/[',']/g,'')
    console.log(total)
    var all = total.slice(1,total.length);
    console.log(Number(all))
    console.log(Number(cards))
    $('.for_paid').html(`₦${format_to_money(Number(cards))}`);
    // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
    $('.for_due').html(`₦${format_to_money((Number(all) - Number(cards)))}`);


    // console.log("here");
    // var debit = 0.00;
    // if($('.for_debit').val()){
    //   debit = Number($('.for_debit').val())
    // }
    // var cash = 0.00;

    // if($('.for_cash').val()){
    //   cash = Number($('.for_cash').val())
    // }

    // var cards = cash + debit

    // var total = $('.all_total').html();
    // console.log(total)
    // var all = total.slice(1,total.length);
    // console.log(Number(all))
    // console.log(Number(cards))
    // $('.for_paid').html(`₦${Number(cards).toFixed(2)}`);
    // // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
    // $('.for_due').html(`₦${(Number(all).toFixed(2) - Number(cards).toFixed(2)).toFixed(2)}`);
  });






  $(document).on("keyup", ".trans_input", function (event) {
    var keycode = event.keyCode ? event.keyCode : event.which;
    if (keycode == "37" || keycode == "39") {
      return;
    }
    console.log("here");
    var id = $(this).attr("data");
    this.value.replace(/[^0-9\.]/g, "");
    if (Number($(`#add_nu_${id}`).val()) == 0) {
      $(`#tab_${id}`).remove();
    }
    var value = Number($(`#add_nu_${id}`).val());
    console.log(value);
    var qty = $(`#add_nu_${id}`).val(value);
    console.log(qty);
    var price = $(`#tab_price_${id}`).attr("data-value");
    console.log(Number(price) * value);
    $(`#tab_price_${id}`).html(`&#8358;${(Number(price) * value).toFixed(2)}`);
    // $(`#tab_price_${id}`).attr('data-value', `${(Number(price) * value).toFixed(2)}`);

    // var items_list = [];

    // $(".tab").each(function () {
    //   var id = $(this).attr("id").replace(/tab_/, "");
    //   console.log(id);

    //   // var item_unit = $("#holds_itms_unit_" + id).html();
    //   var price = $("#tab_price_" + id).html();
    //   console.log(price);
    //   console.log(price.slice(1, price.length));
    //   var row_price = price.slice(1, price.length);

    //   items_list.push(Number(row_price));
    // });

        var items_list = [];

    $(".tab_price").each(function () {
      var id = $(this).attr("id").replace(/tab_price_/, "");
      console.log(id);

      // var item_unit = $("#holds_itms_unit_" + id).html();
      var price = $("#tab_price_" + id).html().replace(/[',']/g,'');
      console.log(price);
      // console.log(price.slice(1, price.length));
      // var row_price = price.slice(1, price.length);

      // items_list.push(Number(row_price));
      items_list.push(Number(price.slice(1,price.length)));
      
    });

    console.log(items_list)

    var total = items_list.reduce((a, b) => a + b);
    console.log(total);
    // $(".all_total").html(`&#x20A6;${total}`);
    $(".all_total").html(`&#x20A6;${format_to_money(total)}`);
    

    // var total = items_list.reduce((a, b) => a + b);
    // console.log(total);
    // $(".all_total").html(`&#x20A6;${total}`);




    //  console.log("here");
    // var debit = 0.00;
    // if($('.for_debit').val()){
    //   debit = Number($('.for_debit').val())
    // }
    // var cash = 0.00;

    // if($('.for_cash').val()){
    //   cash = Number($('.for_cash').val())
    // }

    // var cards = cash + debit

    // var total = $('.all_total').html().replace(/[',']/g,'')
    // console.log(total)
    // var all = total.slice(1,total.length);
    // console.log(Number(all))
    // console.log(Number(cards))
    // $('.for_paid').html(`₦${format_to_money(Number(cards))}`);
    // // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
    // $('.for_due').html(`₦${format_to_money((Number(all) - Number(cards)))}`);

  });

  // $(document).on('click', '.plus_', function() {
  //   var id = $(this).attr('id');

  // });

   $(document).on("click", ".del_tab", function () {
    var id = $(this).attr("id").replace(/del_tab_/, "");

    var value = Number($(`#add_nu_${id}`).val());
    var ans = value - 1;
    console.log(value);
    $(`#add_nu_${id}`).val(value - 1);


    var qty = Number($(`#add_nu_${id}`).val());
    console.log("qty", qty);

    var price = $(`#tab_price_${id}`).attr("data-value");

    console.log(Number(price) * qty);
    var total = $(`.all_total`).html().replace(/[',']/g,'');
    var tt = total.slice(1, total.length);
    var row_price = $(`#tab_price_${id}`).html().replace(/[',']/g,'');
    // var row = row_price.slice(1, row_price.length);

    console.log(total);
    console.log(row_price);

    $(`.all_total`).html(`₦${format_to_money((Number(tt) - Number(row_price)))}`);

    // $(`#tab_price_${id}`).remove();

    $(`#all_tabl_${id}`).remove();



    // console.log("here");
    // var debit = 0.00;
    // if($('.for_debit').val()){
    //   debit = Number($('.for_debit').val())
    // }
    // var cash = 0.00;

    // if($('.for_cash').val()){
    //   cash = Number($('.for_cash').val())
    // }

    // var cards = cash + debit

    // var total = $('.all_total').html();
    // console.log(total)
    // var all = total.slice(1,total.length);
    // console.log(Number(all))
    // console.log(Number(cards))
    // $('.for_paid').html(`₦${Number(cards).toFixed(2)}`);
    // // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
    // $('.for_due').html(`₦${(Number(all).toFixed(2) - Number(cards).toFixed(2)).toFixed(2)}`);

    console.log("here");
    var debit = 0.00;
    if($('.for_debit').val()){
      debit = Number($('.for_debit').val())
    }
    var cash = 0.00;

    if($('.for_cash').val()){
      cash = Number($('.for_cash').val())
    }

    var cards = cash + debit

    var total = $('.all_total').html().replace(/[',']/g,'')
    console.log(total)
    var all = total.slice(1,total.length);
    console.log(Number(all))
    console.log(Number(cards))

        var disc = $(`.all_disc`).html()
        var k = disc.slice(1)
        var f = k.split('.')[0]
        var total = Number(f.split(',').join(""))
        console.log(total)

        var anss = Number(all) + total
     


    $('.for_due').html(`₦${format_to_money((Number(anss) - Number(cards)))}`);


    $('.for_paid').html(`₦${format_to_money(Number(cards))}`);
    // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
    // $('.for_due').html(`₦${format_to_money((Number(all) - Number(cards)))}`);





    if ($(".payment_table").children("tr").length == 0) {
      $(".not_selected").show();

      $(".pay").hide();
      $(".total").hide();
    }
  });

  $(document).on("click", ".remove_vat", function () {
    var id = $(this).attr("id").replace(/remove_vat_/, "");

    var value = Number($(`#add_nu_${id}`).val());
    var ans = value - 1;
    console.log(value);
    $(`#add_nu_${id}`).val(value - 1);


    var qty = Number($(`#add_nu_${id}`).val());
    console.log("qty", qty);

    var price = $(`#tab_price_${id}`).attr("data-value");

    console.log(Number(price) * qty);
    var total = $(`.all_total`).html().replace(/[',']/g,'');
    var tt = total.slice(1, total.length);
    var row_price = $(`#tab_price_${id}`).html().replace(/[',']/g,'');
    // var row = row_price.slice(1, row_price.length);

    console.log(total);
    console.log(row_price);

    $(`.all_total`).html(`₦${format_to_money((Number(tt) - Number(row_price)))}`);

    // $(`#tab_price_${id}`).remove();

    $(`#all_tabl_${id}`).remove();



    // console.log("here");
    // var debit = 0.00;
    // if($('.for_debit').val()){
    //   debit = Number($('.for_debit').val())
    // }
    // var cash = 0.00;

    // if($('.for_cash').val()){
    //   cash = Number($('.for_cash').val())
    // }

    // var cards = cash + debit

    // var total = $('.all_total').html();
    // console.log(total)
    // var all = total.slice(1,total.length);
    // console.log(Number(all))
    // console.log(Number(cards))
    // $('.for_paid').html(`₦${Number(cards).toFixed(2)}`);
    // // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
    // $('.for_due').html(`₦${(Number(all).toFixed(2) - Number(cards).toFixed(2)).toFixed(2)}`);

    console.log("here");
    var debit = 0.00;
    if($('.for_debit').val()){
      debit = Number($('.for_debit').val())
    }
    var cash = 0.00;

    if($('.for_cash').val()){
      cash = Number($('.for_cash').val())
    }

    var cards = cash + debit

    var total = $('.all_total').html().replace(/[',']/g,'')
    console.log(total)
    var all = total.slice(1,total.length);
    console.log(Number(all))
    console.log(Number(cards))
    $('.for_paid').html(`₦${format_to_money(Number(cards))}`);
    // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
    $('.for_due').html(`₦${format_to_money((Number(all) - Number(cards)))}`);





    if ($(".payment_table").children("tr").length == 0) {
      $(".not_selected").show();

      $(".pay").hide();
      $(".total").hide();
    }
  });

  
  // $(document).on("click", ".del_tab", function () {
  //   var id = $(this).attr("id").replace(/del_tab_/, "");
  //   $(`#all_tabl_${id}`).hide();
  // })

  // $(document).on("click", ".del_tab", function () {
  //   var id = $(this).attr("id").replace(/del_tab_/, "");
  //   $(".for_head").hide();
  //   $(`#all_table_${id}`).hide();
  // })

  $(document).on("click", ".select_bar", function () {
    var product_id = $(this).attr("id").replace(/select_bar_/, "");
    var product_name = $(this).attr("data-table")
    var product_price = $(this).attr("data");
    var product_image = $(this).attr("lang");

    $(`.for_head`).hide();
    // $(`#all_table_${product_id}`).hide();

                        
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

    // console.log("here");
    // var debit = 0.00;
    // if($('.for_debit').val()){
    //   debit = Number($('.for_debit').val())
    // }
    // var cash = 0.00;

    // if($('.for_cash').val()){
    //   cash = Number($('.for_cash').val())
    // }

    // var cards = cash + debit

    // var total = $('.all_total').html();
    // console.log(total)
    // var all = total.slice(1,total.length);
    // console.log(Number(all))
    // console.log(Number(cards))
    // $('.for_paid').html(`₦${Number(cards)}`);
    // // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
    // $('.for_due').html(`₦${(Number(all) - Number(cards))}`);

    console.log("here");
    var debit = 0.00;
    if($('.for_debit').val()){
      debit = Number($('.for_debit').val())
    }
    var cash = 0.00;

    if($('.for_cash').val()){
      cash = Number($('.for_cash').val())
    }

    var cards = cash + debit

    var total = $('.all_total').html().replace(/[',']/g,'')
    console.log(total)
    var all = total.slice(1,total.length);
    console.log(Number(all))
    console.log(Number(cards))
    $('.for_paid').html(`₦${format_to_money(Number(cards))}`);
    // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
    $('.for_due').html(`₦${format_to_money((Number(all) - Number(cards)))}`);
  })

  $(document).on("click", ".product_edit", function () {
    var name = $(this).attr("data-value");
    var data = $(this).attr("data-img");
    var price = $(this).attr("lang");
    var id = $(this).attr("data");
    localStorage.setItem("product_id", id);
    var img = $(this).attr("data-img");
    $("#product_edit_name").val(name);
    $("#product_edit_price").val(price);
    $("#product_edit_price").val(price);
    $(".preview-edit").attr("src",`${data}`);

    // if (img) {
    //   $("#edit_pro").html(`<img style="width:30%;border-bottom-left-radius: calc(1rem - 0px);
    //   border-bottom-right-radius: calc(1rem - 0px);" class="card-img-top" src="https://via.placeholder.com/640x420" alt="Hand"></img>`);
    // }
    // $("#product_edit_image").val(img);
    $("#edit_modal").show();
  });

    $(document).on("click", ".cat_edit", function () {
    var name = $(this).attr("data-value");
    var price = $(this).attr("lang");
    var id = $(this).attr("data");
    localStorage.setItem("cat_id", id);
    var img = $(this).attr("data-img");
    $("#cat_edit_name").val(name);
    $("#cat_edit_desc").val(price);
    alert('here')
  
    $("#edit_cat_modal").show();
    // $(".edit_cat_mod").show();
    });

    $(document).on("click", ".edit_cat", function () {
      edit_cat()
    });


  

  $(document).on("click", ".filter_shop", function () {
    $(".not_selected").hide();

    $(".pay").show();
    $(".total").show();

    var name = $(this).attr("data-value");
    var id = $(this).attr("data");
    var price = $(this).attr("lang");

    for_table(name, price, id);
  });

  $(document).on("click", ".complete_receipt", function () {
    
    complete_payment();
  });

  $(document).on("keyup", ".for_cash", function () {
    // console.log("here");
    // var debit = 0.00;
    // if($('.for_debit').val()){
    //   debit = Number($('.for_debit').val())
    // }
    // var cash = 0.00;

    // if($('.for_cash').val()){
    //   cash = Number($('.for_cash').val())
    // }

    // var cards = cash + debit

    // var total = $('.all_total').html();
    // console.log(total)
    // var all = total.slice(1,total.length);
    // console.log(Number(all))
    // console.log(Number(cards))
    // $('.for_paid').html(`₦${Number(cards).toFixed(2)}`);
    // // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
    // $('.for_due').html(`₦${(Number(all).toFixed(2) - Number(cards).toFixed(2)).toFixed(2)}`);

        console.log("here");
        var debit = 0.00;
        if($('.for_debit').val()){
          debit = Number($('.for_debit').val())
        }
        var cash = 0.00;

        if($('.for_cash').val()){
          cash = Number($('.for_cash').val())
        }

        var cards = cash + debit

        var total = $('.all_total').html().replace(/[',']/g,'')
        console.log(total)
        var all = total.slice(1,total.length);
        console.log(Number(all))
        console.log(Number(cards))


        var disc = $(`.all_disc`).html()
        var k = disc.slice(1)
        var f = k.split('.')[0]
        var total = Number(f.split(',').join(""))
        console.log(total)

        var anss = Number(all) + total
     


        $('.for_due').html(`₦${format_to_money((Number(anss) - Number(cards)))}`);
    $('.for_paid').html(`₦${format_to_money(Number(cards))}`);
    // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
    // $('.for_due').html(`₦${format_to_money((Number(all) - Number(cards)))}`);

  }); 

  $(document).on("keyup", ".for_debit", function () {
    // console.log("here");
    // var debit = 0.00;
    // if($('.for_debit').val()){
    //   debit = Number($('.for_debit').val())
    // }
    // var cash = 0.00;

    // if($('.for_cash').val()){
    //   cash = Number($('.for_cash').val())
    // }

    // var cards = cash + debit

    // var total = $('.all_total').html();
    // console.log(total)
    // var all = total.slice(1,total.length);
    // console.log(Number(all))
    // console.log(Number(cards))
    // $('.for_paid').html(`₦${Number(cards).toFixed(2)}`);
    // // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
    // $('.for_due').html(`₦${(Number(all).toFixed(2) - Number(cards).toFixed(2)).toFixed(2)}`);

    console.log("here");
    var debit = 0.00;
    if($('.for_debit').val()){
      debit = Number($('.for_debit').val())
    }
    var cash = 0.00;

    if($('.for_cash').val()){
      cash = Number($('.for_cash').val())
    }

    var cards = cash + debit

    var total = $('.all_total').html().replace(/[',']/g,'')
    console.log(total)
    var all = total.slice(1,total.length);
    console.log(Number(all))
    console.log(Number(cards))


        var disc = $(`.all_disc`).html()
        var k = disc.slice(1)
        var f = k.split('.')[0]
        var total = Number(f.split(',').join(""))
        console.log(total)

        var anss = Number(all) + total
     


      $('.for_due').html(`₦${format_to_money((Number(anss) - Number(cards)))}`);
    $('.for_paid').html(`₦${format_to_money(Number(cards))}`);
    // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
    // $('.for_due').html(`₦${format_to_money((Number(all) - Number(cards)))}`);

  }); 

  $(document).on("keyup", ".btn-minus", function () {
    console.log("here");
    // if($(`.payment_table`).length < 1){
    //   $('.not_selected').show();

    //   $('.pay').hide();
    //   $('.total').hide();

    // }

    console.log($(".payment_table").children("tr"));

    if ($(".payment_table").children("tr").length > 0) {
      alert("here");
      // do something
    }
  });


  $(document).on("click", ".select_it", function () {
    var id = $(this).attr("id").replace(/select_it_/, "");
    var product_id = $(this).attr("id").replace(/select_it_/, "");
    var product_name = $(this).attr("data-table")
    var product_price = $(this).attr("data");
    var product_image = $(this).attr("lang");

    $(`.for_head`).hide();
    $(`#all_table_${id}`).hide();

    if($(`#all_tabl_${id}`).length){
      var new_qty = Number($(`#add_nu_${id}`).val()) + 1
      $(`#add_nu_${id}`).val(new_qty)
      console.log(Number($(`#tab_price_${id}`).html()) * new_qty)
      // $(`#tab_price_${product_id}`).val(Number($(`#tab_price_${product_id}`).val()) * new_qty)



      // $(`#tab_price_${product_id}`).html(`&#8358;${(Number($(`#tab_price_${product_id}`).html()) * new_qty).toFixed(2)}`);

    // var keycode = event.keyCode ? event.keyCode : event.which;
    // if (keycode == "37" || keycode == "39") {
    //   return;
    // }
    // console.log("here");
    // var id = $(this).attr("data");
    // this.value.replace(/[^0-9\.]/g, "");

    // if (Number($(`#add_nu_${id}`).val()) == 0) {
    //   $(`#tab_${id}`).remove();
    // }
    var value = Number($(`#add_nu_${id}`).val());
    console.log(value);
    var qty = $(`#add_nu_${id}`).val(value);
    console.log(qty);
    var price = $(`#tab_price_${id}`).attr("data-value");
    console.log(Number(price) * value);
    $(`#tab_price_${id}`).html(`${format_to_money((Number(price) * value).toFixed(2))}`);
    // $(`#tab_price_${id}`).attr('data-value', `${(Number(price) * value).toFixed(2)}`);

    var items_list = [];

     $(".tab_price").each(function () {
      var id = $(this).attr("id").replace(/tab_price_/, "");
      console.log(id);


      // var item_unit = $("#holds_itms_unit_" + id).html();
      var price = Number($("#tab_price_" + id).html().replace(/[',']/g, ''));
      console.log({price});
      // console.log(price.slice(1, price.length));
      // var row_price = price.slice(1, price.length);
      // items_list.push(Number(row_price));
      items_list.push(Number(price));
    });
    var total = items_list.reduce((a, b) => a + b);
    console.log({total});
    $(".all_total").html(`&#x20A6;${format_to_money(total)}`);
    $(".filter").val('')
    

    }else{
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
    <td class="ant-table-cell tab_price" id="tab_price_${product_id}" data-value="${product_price}">${format_to_money(product_price)}</td>
    <td class="del_tab" id="del_tab_${product_id}"><i
            class="icon icon-trash icon-fw icon-xl"
            style="color:#dd2a36"></i></td>
    </tr>`)

    $(".filter").val('')

    }

   

    // console.log("here");
    // var debit = 0.00;
    // if($('.for_debit').val()){
    //   debit = Number($('.for_debit').val())
    // }
    // // replace(/[',']/g,""))
    // var cash = 0.00;

    // if($('.for_cash').val()){
    //   cash = Number($('.for_cash').val())
    // }

    // var cards = cash + debit

    // var total = $('.all_total').html();
    // console.log(total)
    // var all = total.slice(1,total.length);
    // console.log(Number(all))
    // console.log(Number(cards))

    // $('.for_paid').html(`₦${format_to_money(Number(cards))}`);
    // // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
    // $('.for_due').html(`₦${format_to_money((Number(all) - Number(cards)))}`);

    
        console.log("here");
        var debit = 0.00;
        if($('.for_debit').val()){
          debit = Number($('.for_debit').val())
        }
        var cash = 0.00;

        if($('.for_cash').val()){
          cash = Number($('.for_cash').val())
        }

        var cards = cash + debit

        var total = $('.all_total').html().replace(/[',']/g,'')
        console.log(total)
        var all = total.slice(1,total.length);
        console.log(Number(all))
        console.log(Number(cards))


        var disc = $(`.all_disc`).html()
        var k = disc.slice(1)
        var f = k.split('.')[0]
        var total = Number(f.split(',').join(""))
        console.log(total)

        var anss = Number(all) + total
     


      $('.for_due').html(`₦${format_to_money((Number(anss) - Number(cards)))}`);
    $('.for_paid').html(`₦${format_to_money(Number(cards))}`);
    // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
    // $('.for_due').html(`₦${format_to_money((Number(all) - Number(cards)))}`);
  })

  $(document).on("click", ".product_edit", function () {
    var name = $(this).attr("data-value");
    var data = $(this).attr("data-img");
    var price = $(this).attr("lang");
    var id = $(this).attr("data");
    var bar = $(this).attr("data-bar");
    // data-string=${v.product_unit} data-icon=${v.product_description}
    var product_unit = $(this).attr("data-string");
    var product_description = $(this).attr("data-icon");

    localStorage.setItem("product_id", id);
    var img = $(this).attr("data-img");
    $("#product_edit_name").val(name);
    $("#product_edit_price").val(price);
    $("#product_edit_barcode").val(bar);

    // $("#product_edit_price").val(price);
    // $("#product_edit_price").val(price);

    $(`option[value='${product_unit}']`).attr('selected','selected');

    // $("#product_unit_edit").val(product_unit);
    $("#product_description_edit").val(product_description);

    $(".preview-edit").attr("src",`${data}`);

    // if (img) {
    //   $("#edit_pro").html(`<img style="width:30%;border-bottom-left-radius: calc(1rem - 0px);
    //   border-bottom-right-radius: calc(1rem - 0px);" class="card-img-top" src="https://via.placeholder.com/640x420" alt="Hand"></img>`);
    // }
    // $("#product_edit_image").val(img);
    $("#edit_modal").show();
  });

    $(document).on("click", ".cat_edit", function () {
    var name = $(this).attr("data-value");
    var price = $(this).attr("lang");
    var id = $(this).attr("data");
    localStorage.setItem("cat_id", id);
    var img = $(this).attr("data-img");
    $("#cat_edit_name").val(name);
    $("#cat_edit_desc").val(price);
    alert('here')
  
    $("#edit_cat_modal").show();
    // $(".edit_cat_mod").show();
    });

    $(document).on("click", ".edit_cat", function () {
      edit_cat()
    });


  

  $(document).on("click", ".filter_shop", function () {
    $(".not_selected").hide();

    $(".pay").show();
    $(".total").show();

    var name = $(this).attr("data-value");
    var id = $(this).attr("data");
    var price = $(this).attr("lang");

    for_table(name, price, id);
  });

  // $(document).on("click", ".complete_receipt", function () {
  //   $(".complete_receipt").hide();
  //   $(".receipt_loading").show();

  //   $(".load_receipt").show();
  //   complete_payment();
  // });

  $(document).on("keyup", ".for_cash", function () {
    // console.log("here");
    // var debit = 0.00;
    // if($('.for_debit').val()){
    //   debit = Number($('.for_debit').val())
    // }
    // var cash = 0.00;

    // if($('.for_cash').val()){
    //   cash = Number($('.for_cash').val())
    // }

    // var cards = cash + debit

    // var total = $('.all_total').html();
    // console.log(total)
    // var all = total.slice(1,total.length);
    // console.log(Number(all))
    // console.log(Number(cards))
    // $('.for_paid').html(`₦${Number(cards).toFixed(2)}`);
    // // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
    // $('.for_due').html(`₦${(Number(all).toFixed(2) - Number(cards).toFixed(2)).toFixed(2)}`);

     console.log("here");
        var debit = 0.00;
        if($('.for_debit').val()){
          debit = Number($('.for_debit').val())
        }
        var cash = 0.00;

        if($('.for_cash').val()){
          cash = Number($('.for_cash').val())
        }

        var cards = cash + debit

        var total = $('.all_total').html().replace(/[',']/g,'')
        console.log(total)
        var all = total.slice(1,total.length);
        console.log(Number(all))
        console.log(Number(cards))


        var disc = $(`.all_disc`).html()
        var k = disc.slice(1)
        var f = k.split('.')[0]
        var total = Number(f.split(',').join(""))
        console.log(total)

        var anss = Number(all) + total
     


      $('.for_due').html(`₦${format_to_money((Number(anss) - Number(cards)))}`);
    $('.for_paid').html(`₦${format_to_money(Number(cards))}`);
    // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
    // $('.for_due').html(`₦${format_to_money((Number(all) - Number(cards)))}`);

  }); 

  $(document).on("keyup", ".for_debit", function () {
    // console.log("here");
    // var debit = 0.00;
    // if($('.for_debit').val()){
    //   debit = Number($('.for_debit').val())
    // }
    // var cash = 0.00;

    // if($('.for_cash').val()){
    //   cash = Number($('.for_cash').val())
    // }

    // var cards = cash + debit

    // var total = $('.all_total').html();
    // console.log(total)
    // var all = total.slice(1,total.length);
    // console.log(Number(all))
    // console.log(Number(cards))
    // $('.for_paid').html(`₦${Number(cards).toFixed(2)}`);
    // // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
    // $('.for_due').html(`₦${(Number(all).toFixed(2) - Number(cards).toFixed(2)).toFixed(2)}`);


     console.log("here");
        var debit = 0.00;
        if($('.for_debit').val()){
          debit = Number($('.for_debit').val())
        }
        var cash = 0.00;

        if($('.for_cash').val()){
          cash = Number($('.for_cash').val())
        }

        var cards = cash + debit

        var total = $('.all_total').html().replace(/[',']/g,'')
        console.log(total)
        var all = total.slice(1,total.length);
        console.log(Number(all))
        console.log(Number(cards))


        var disc = $(`.all_disc`).html()
        var k = disc.slice(1)
        var f = k.split('.')[0]
        var total = Number(f.split(',').join(""))
        console.log(total)

        var anss = Number(all) + total
     


      $('.for_due').html(`₦${format_to_money((Number(anss) - Number(cards)))}`);
    $('.for_paid').html(`₦${format_to_money(Number(cards))}`);
    // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
    // $('.for_due').html(`₦${format_to_money((Number(all) - Number(cards)))}`);

  }); 
 $(document).on("keyup", "#product_barcod", function () {
  if($("#product_barcod").val() == ""){
    $("#populate_barcode").show();
  }else{
    $("#populate_barcode").hide();

  }
   
  });
  $(document).on("keyup", ".btn-minus", function () {
    console.log("here");
    // if($(`.payment_table`).length < 1){
    //   $('.not_selected').show();

    //   $('.pay').hide();
    //   $('.total').hide();

    // }

    console.log($(".payment_table").children("tr"));

    if ($(".payment_table").children("tr").length > 0) {
      alert("here");
      // do something
    }
  });

  // function for_table(name, price, id) {
  //   // $("#tbIntervalos").find("td").attr("id", horaInicial);
  //   console.log($(`.payment_table #tab_${id}`));
  //   if ($(`.payment_table #tab_${id}`).length > 0) {
  //     var id = $(this).attr("data");
  //     var value = Number($(`#add_nu_${id}`).val());
  //     var ans = value + 1;
  //     console.log(value);
  //     $(`#add_nu_${id}`).val(value + 1);
  //     return;
  //   }

  //   // <td>

  //   //     <input type="number" value="5" min="0" max="1000" step="1" style="display: none;">
  //   //     <div class="input-group" style="height:15px"><div class="input-group-prepend"><button style="min-width: 2.5rem;   padding: 4px 8px;border-radius: 5px;
  //   //     position: relative;top: -10px;" class="btn minus_ btn-decrement btn-minus" type="button" data="${id}" id="minus_${id}"><strong>−</strong></button></div><input type="text" data="${id}" inputmode="decimal" style="height:25px; margin-top:-5px; border-radius:10px; box-shadow: 0 4px 8px rgba(0,0,0,0.19); padding:5px; text-align: center" id="add_nu_${id}" class="form-control trans_input" placeholder="" value="1"><span style="margin-top: auto;margin-bottom: auto;display: flex;align-self: center; position: relative;top: -10px;"> </span><div class="input-group-append"><button style="min-width: 2.5rem;   padding: 4px 8px;border-radius: 5px;
  //   //     position: relative;top: -6px;" class="btn plus_ btn-increment btn-plus" type="button"  id="plus_${id}" data="${id}"><strong >+</strong></button></div></div>
  //   // </td>

  //   $(".payment_table").append(`
  //     <tr id="tab_${id}" class="tab">
  //     <td class="del_tab" id="del_tab_${id}"><i class="icon icon-trash icon-fw icon-xl"></i></td>
  //     <td class="tab_name" id="tab_name_${id}">${name}</td>
  //     <td>
  //         <div class="ant-input-number"><div class="ant-input-number-handler-wrap"><span  role="button" aria-label="Increase Value" class="ant-input-number-handler ant-input-number-handler-up btn-plus plus_ " id="plus_${id}" data="${id}"><span role="img" aria-label="up" class="anticon anticon-up ant-input-number-handler-up-inner"><svg viewBox="64 64 896 896" focusable="false" class="" data-icon="up" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M890.5 755.3L537.9 269.2c-12.8-17.6-39-17.6-51.7 0L133.5 755.3A8 8 0 00140 768h75c5.1 0 9.9-2.5 12.9-6.6L512 369.8l284.1 391.6c3 4.1 7.8 6.6 12.9 6.6h75c6.5 0 10.3-7.4 6.5-12.7z"></path></svg></span></span><span unselectable="unselectable" role="button" aria-label="Decrease Value" class="ant-input-number-handler ant-input-number-handler-down minus_" data="${id}" id="minus_${id}"><span role="img" aria-label="down" class="anticon anticon-down ant-input-number-handler-down-inner"><svg viewBox="64 64 896 896" focusable="false" class="" data-icon="down" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span></span></div><div class="ant-input-number-input-wrap"><input role="spinbutton" aria-valuemin="1" aria-valuemax="100000" data="${id}"  aria-valuenow="6"  autocomplete="off" max="100000" min="1" step="1" value="1" id="add_nu_${id}" class="form-control ant-input-number-input trans_input" ></div></div>
  //         /td>
      
  //     <td class="tab_price" id="tab_price_${id}" data-value="${price}">&#x20A6;${price}</td>
  //     </tr>`);

  //   var items_list = [];

  //   $(".tab").each(function () {
  //     var id = $(this).attr("id").replace(/tab_/, "");
  //     console.log(id);
  //     // var item_unit = $("#holds_itms_unit_" + id).html();
  //     var price = $("#tab_price_" + id).html();
  //     console.log(price);
  //     console.log(price.slice(1, price.length));
  //     var row_price = price.slice(1, price.length);
  //     items_list.push(Number(row_price));
  //   });

  //   var total = items_list.reduce((a, b) => a + b);
  //   console.log(total);
  //   $(".all_total").html(`&#x20A6;${total}`);
  // }


  
  function for_table(name, price, id) {
    // $("#tbIntervalos").find("td").attr("id", horaInicial);
    console.log($(`.payment_table #tab_${id}`));
    if ($(`.payment_table #tab_${id}`).length > 0) {
      var id = $(this).attr("data");
      var value = Number($(`#add_nu_${id}`).val());
      var ans = value + 1;
      console.log(value);
      $(`#add_nu_${id}`).val(value + 1);
      return;
    }

    var items_list = [];

    $(".tab_price").each(function () {
      var id = $(this).attr("id").replace(/tab_price_/, "");
      console.log(id);
      // var item_unit = $("#holds_itms_unit_" + id).html();
      var price = Number($("#tab_price_" + id).html().replace(/[',']/g,''));

      console.log({price});
      // console.log(price.slice(1, price.length));
      // var row_price = price.slice(1, price.length);
      // items_list.push(Number(row_price));
      items_list.push(Number(price));

    });

    var total = items_list.reduce((a, b) => a + b);
    console.log(total);
    $(".all_total").html(`&#x20A6;${format_to_money(total)}`);

    console.log("here");
    var debit = 0.00;
    if($('.for_debit').val()){
      debit = Number($('.for_debit').val())
    }
    var cash = 0.00;

    if($('.for_cash').val()){
      cash = Number($('.for_cash').val())
    }

    var cards = cash + debit

    var total = $('.all_total').html().replace(/[',']/g,'')
    console.log(total)
    var all = total.slice(1,total.length);
    console.log(Number(all))
    console.log(Number(cards))
    $('.for_paid').html(`₦${format_to_money(Number(cards))}`);
    // var due = Number(inp).toFixed(2) - Number(all).toFixed(2);
    $('.for_due').html(`₦${format_to_money((Number(all) - Number(cards)))}`);
  }

  function complete_payment() {
    var items_list = [];
    var vat_list = [];


    //for each invoice line item
     var all_cash = $(".for_cash").val();
     var all_debit = $(".for_debit").val();

     if(all_cash.length < 1 && all_debit.length < 1){
      var con = confirm("Are you sure you want to end this transaction without making payment?")
      if(con == false){
        return;
      }
     }
    var due = $(".for_due").text();
    var total_due = due.slice(1,due.length)
    var amount_due = Number(total_due.split(',').join(""))

    if(amount_due < 0 ){
        $("#edit_modal").hide();
                    $("#for_err").html("Amount paid has exceeded the total cost of items");
                    $("#err_msg").remove();
                     if( !($("#err_msg").length) )         
                    {
                    $( `<h4 id="err_msg" style="padding:10px; margin:0px">Amount paid has exceeded the total cost of items</h4>` ).insertAfter( ".swal2-error" );

                    }

                    $(".edit_error").show();

                    setTimeout(() => {
                        $(".edit_error").hide();
                        $("#err_msg").remove();
                    }, 5000);
      $("#rcv_grn_loader").hide();
      $("#receive_grn").show();
      return;
    }
    $(".complete_receipt").hide();
    $(".receipt_loading").show();

    $(".load_receipt").show();

    $(".all_vats").each(function () {
      var id = $(this).attr("id").replace(/all_vat_/, "");
      console.log(id);
      var name = $("#for_vat_discount_" + id).val();
      var price = $("#for_vat_discount_amount_" + id).val();

      vat_list.push({
        name: name,
        amount: price,
      });
    });

    // alert('here')

    console.log(vat_list)
  
    $(".all_tabl").each(function () {
      var id = $(this).attr("id").replace(/all_tabl_/, "");
      console.log(id);
      var qty = $("#add_nu_" + id).val();
      var price = $("#tab_price_" + id).attr("data-value");

      items_list.push({
        product_id: id,
        product_qty: qty,
        product_price: price,
      });
    });
       // <h2 style="font-size: 16px;font-weight: 700;">INVOICE DUE DATE<span></span></h2>
                // <h4>12/12/2020</h4>

    var total_cash = `${$('.for_cash').val() == "" ? 0 : $('.for_cash').val()}`;
    var total_debit = `${$('.for_debit').val()  == "" ? 0 : $('.for_debit').val()}`;

    $.ajax({
      type: "POST",
      dataType: "json",
        headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
      url: base_url + "/api/pos/createTransaction",
      data: {
        user_id: localStorage.getItem("user_id"),
        store_id: localStorage.getItem('store_id'),

        company_id: localStorage.getItem("company_id"),
        products: items_list,
        cash_tendered: $(".cash_tenderd").val(),
        customer_phone: $(".phone").val(),
        customer_name: $(".cus_name").val(),
        cash_tendered: total_cash,
        sundry_fees: vat_list,
        store_id: localStorage.getItem('store_id'),
        cash_card_tendered: total_debit
      },
      timeout: 60000,

      success: function (response) {
        console.log(response);

        if (response.status == "200") {
          // $('.load_receipt').hide();
          // $('.payment_row').show();
             // Email : nahere@gmail.com</br>

             $(".invoice").html(
               `<style type="text/css">
        @media print {
            body {
              -webkit-print-color-adjust: exact;
          }
          .tabletitle{
            border-bottom: 2px solid black !important;
            background: #EEE !important;
          }
          tr{
            border-bottom: 2px solid black !important;
          }
          .service{
            border-bottom: 2px solid black !important;
          }
          .  just_receipt tr {

          }
        }
    </style>

  <div class="" style="box-shadow: 0 4px 8px rgb(0 0 0 / 19%); margin-left: auto;
    margin-right: auto;">
        <div
            style="display: flex;color: white; padding: 20px; justify-content: space-between; background-color: #2065A8; height: 210px;">
            <div>
                <img src="${response.data.company_details.company_logo}" />
                <h4 style="color:white">Invoice</h4>
            </div>
            <div style="text-align: right;">
                <h4 style="color:white">${response.data.company_details.company_name}</h4>
                <p style="color:white">Business Name</p>
                <p style="color:white">Address: ${response.data.company_details.company_address}</p>
                <p style="color:white">Country</p>
                <p style="color:white">Phone : ${response.data.company_details.company_phone}</p>
            </div>
        </div>


        <div style="display: flex; padding: 20px; justify-content: space-between; height: 210px;">
            <div>
                <h2 style="font-size: 16px;font-weight: 700; margin-bottom:0px">Bill to:</h2>
                <input type="text" id="cus_name" class="cus_name" style="height: 25px;margin-right: 5%;
                                        border: none;
                                        margin-top: 7px;
                                        width: 150%;
                                        margin-bottom:10px;

                                        border-bottom: 1px solid #d9d9d9;" />
                <h2 style="font-size: 16px;font-weight: 700; margin-bottom:0px;">Phone:</h2>

                <input type="number" id="cus_phone" class="cus_phone" style="height: 25px;
                                            margin-right: 5%;
                                        border: none;
                                        margin-top: 7px;
                                        width: 150%;
                                        margin-bottom:10px;
                                        border-bottom: 1px solid #d9d9d9;"/>
                <h2 style="font-size: 16px;font-weight: 700; margin-bottom:0px">Email:</h2>
                <input type="email" size="30" id="cus_email" class="cus_email" style="height: 25px;
                                        margin-right: 5%;
                                        border: none;
                                        margin-bottom:10px;

                                        margin-top: 7px;
                                        width: 150%;
                                        border-bottom: 1px solid #d9d9d9;"/>
            </div>
            <div style="text-align: right;">
                <h2 style="font-size: 16px;font-weight: 700;">INVOICE #</h2>
                <h4>NaHere Limited</h4>
                <h2 style="font-size: 16px;font-weight: 700;">DATE<span></span></h2>
                <h4>${(response.data.sales.transaction_date).split(" ")[0]}</h4>
             
            </div>
        </div>
        <!-- /.row -->
        <hr />

        <div>

            <table class="just_receipt" style="
                width: 100%;
                padding: 10px;
                margin-left: auto;
                margin-right: auto;>
                <tr style="">
                    <th style="font-size: 14px;font-weight: 700; width:32.5%; padding-left:15px">ITEMS</th>
                    <th style="font-size: 14px;font-weight: 700; width:32.5%; padding-left:15px">QUANTITY</th>
                    <th style="font-size: 14px;font-weight: 700; width:.5%; padding-left:15px; text-align:end; position:relative; left: -15px">SUBTOTAL</th>

                </tr>
               



            </table>


        </div>
            ${ response.data.sundry_fees ?

          `<table class="just_vat" style="
                          width: 100%;
                          padding: 10px;
                          margin-left: auto;
                          margin-right: auto;">
                          <tbody><tr style="">
                              <th style="font-size: 14px;font-weight: 700; width:32.5%; padding-left:15px"></th>
                              <th style="font-size: 14px;font-weight: 700;width: 32.5%;">VAT NAME</th>
                              <th style="font-size: 14px;font-weight: 700; width:15%; position:relative; left: 25px;">VAT AMOUNT</th>
          
                          </tr>
                         
          
          
                        </table>`:''
            }

             <div style="background-color: #BCDFF5;">
        <div style=" padding:10px; margin-left:31%">
        <div class="container" >
            <div class="row">
                <div class="col-md-6">
                <p style="color: black;padding: 5px; line-height: 0.5em; text-align: start; font-size:20px">Amount Paid (cash)</p>
                </div>
                <div class="col-md-6">
                <p style="color: black;padding: 5px;line-height: 0.5em; text-align: end;  font-weight:500; font-size:20px; position: relative; left:20px;">₦${format_to_money(response.data.payment_details.cash_paid)}<p>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-6">
                <p style="color: black;padding: 5px; line-height: 0.5em; text-align: start;font-size:20px; ">Amount Paid (card)</p>
                </div>
                <div class="col-md-6">
                <p style="color: black;padding: 5px; font-weight:500; font-size:20px; text-align: end;line-height: 0.5em; position: relative; left:20px;"> ₦${format_to_money(response.data.payment_details.card_paid)}<p>
                </div>
            </div>
                <div class="row">
                <div class="col-md-6">
                <p style="color: black;padding: 5px; line-height: 0.5em;text-align: start;  font-size:20px">Total Amount Due</p>
                </div>
                <div class="col-md-6">
                <p class="amt_due"style="color: black; padding: 5px; line-height: 0.5em; text-align: end;font-weight:500; font-size:20px; position: relative; left:20px;"> ₦${format_to_money(response.data.payment_details.balance_to_pay)}<p></div>
            </div>
           
                
            <div class="row">
            <div class="col-md-6">
            <p style="color: black;padding: 5px; line-height: 0.5em; font-weight:600; text-align: start; font-size:20px">Total</p>
            </div>
            <div class="col-md-6">   
            <p style="color: black;padding: 5px; line-height: 0.5em; text-align: end;  font-weight:500; font-size:20px; position: relative; left:20px;">₦${format_to_money(Number(response.data.sales.total_sales))}</p>
            </div>
            </div>
            </div>
        </div>
        </div>
</div>




        <div style=" width: 100%; display: flex;
        justify-content: center;margin: 50px 0px 50px 0px;">
            <p style="margin-bottom: 50px;">Powered By <span><img style="width: 8%; " src="https://empl-dev.site/nahere_logo_blue.png" /> </span> NaHere Limited<p><br>
            <!-- <p>8/10 Ilupeju Bypass, Ilupeju, Lagos</p> -->
        </div>
    </div>`



  )


        // <div
        //     style="display: flex;color: white; justify-content: space-between; width: 100%; height: 150px;">
        //     <div style="background-color: #BCDFF5; width: 60%;  ">
        //     <div style="display:flex; justify-content:space-between; margin-bottom:0px !important">
        //     <p style="color: black;padding: 10px 10px 0px 10px; font-size:20px">Total Amount Paid (cash)</p>
        //         <p style="color: black;padding: 10px 10px 0px 10px; font-weight:600; font-size:20px"> N${format_to_money(response.data.payment_details.cash_paid)}<p>
        //     </div>

        //     <div style="display:flex; justify-content:space-between; margin-bottom:0px !important">
        //     <p style="color: black;padding: 10px 10px 0px 10px; font-size:20px">Total Amount Paid (card)</p>
        //         <p style="color: black;padding: 10px 10px 0px 10px; font-weight:600; font-size:20px"> N${format_to_money(response.data.payment_details.card_paid)}<p>
        //     </div>

        //     <div style="display:flex; justify-content:space-between; margin-bottom:0px !important" >
        //     <p style="color: black;padding: 10px 10px 0px 10px; font-size:20px">Total Amount Due</p>
        //         <p style="color: black;padding: 10px 10px 0px 10px; font-weight:600; font-size:20px"> N${format_to_money(response.data.payment_details.balance_to_pay)}<p>
        //     </div>
                
        //     </div>
        //     <div style="background-color: #2065A8; width: 40%;">
        //         <div style="text-align: right; ">
        //             <h4 style="padding: 10px 10px 0px 10px; color:white">Total</h4>
        //             <h2 style="padding:0px 10px; font-weight:600; color:white">${format_to_money(Number(response.data.sales.total_sales))}</h2>
        //         </div>
        //     </div>
        // </div>

 // <tr>
 //                    <td>Alfreds Futterkiste</td>
 //                    <td>Maria Anders</td>
 //                    <td>Germany</td>
 //                </tr>
 //                <tr>
 //                    <td>Centro comercial Moctezuma</td>
 //                    <td>Francisco Chang</td>
 //                    <td>Mexico</td>
 //                </tr>
 //                <tr>
 //                    <td>Ernst Handel</td>
 //                    <td>Roland Mendel</td>
 //                    <td>Austria</td>
 //                </tr>


          var list_whs = "";
          $(response.data.product_details).each(function (i, v) {
            list_whs += ` <tr >
                     <td>${v.product_name}</td>
                     <td class="tableitem">${v.product_qty}</td>
                     <td class="tableitem" style="text-align:end">${format_to_money(v.product_price)}</td>
                 </tr>`;
          });

           var list_vats = "";
            `${ response.data.sundry_fees ?

          $(response.data.sundry_fees).each(function (i, v) {
            list_vats += ` <tr >
                     <td></td>
                     <td class="tableitem" style="
                     margin-left: 20px !important;">${v.name}</td>
                     <td class="tableitem" style="padding: 10px; text-align:end">${format_to_money(v.fee)}</td>
                 </tr>`;
          }) : ''
        }`

          localStorage.setItem('tran', `${response.data.sales.transaction_id}`)
          localStorage.setItem('tran_cus', `${response.data.customer_details.customer_id}`)
          $(".just_receipt").append(list_whs);
          $(".just_vat").append(list_vats);
    //       $(".invoice").append(
    //         `<style type="text/css">
    //     @media print {
    //         body {
    //           -webkit-print-color-adjust: exact;
    //       }
    //       .tabletitle{
    //         border-bottom: 2px solid black !important;
    //         background: #EEE !important;
    //       }
    //       tr{
    //         border-bottom: 2px solid black !important;
    //       }
    //       .service{
    //         border-bottom: 2px solid black !important;
    //       }
    //     }
    // </style>
    //         <div id="invoice-POS" style="width: 100%; text-align:"center">

    //                         <center id="top">
    //                             <div class="logo"></div>
    //                             <div class="info">
    //                                 <h2>${response.data.company_details.company_name}</h2>
    //                             </div>
    //                             <!--End Info-->
    //                         </center>
    //                         <!--End InvoiceTop-->

    //                         <div id="mid" style="text-align: center;">
    //                             <div class="info" id="jst_tst">
    //                                 <h2>Customer Info</h2>
    //                                 <div style="display: flex;
    //                                 width: 100%;
    //                                 margin-left: auto;
    //                                 margin-right: auto;
    //                                 justify-content: center;">
    //                                     <span style="align-self:center">Name : </span><input type="text" id="cus_name" class="cus_name" style="height: 25px;
    //                                     margin-right: 5%;
    //                                     border: none;
    //                                     margin-top: 7px;
    //                                     width: 30%;
    //                                     border-bottom: 1px solid #d9d9d9;"></br>
    //                                     <span style="align-self:center">Phone : </span><input type="text" id="cus_phone" class="cus_name" style="height: 25px;
    //                                     margin-right: 5%;
    //                                     border: none;
    //                                     margin-top: 7px;
    //                                     width: 30%;
    //                                     border-bottom: 1px solid #d9d9d9;"></br>
    //                                 </div>



    //                                 <div style="
    //                                 width: 100%;
    //                                 margin-bottom: 20px;
    //                               ">
                                        // <span style="align-self:center">Email : </span><input type="email" id="cus_email" class="cus_email" style="height: 25px;
                                        // margin-right: 5%;
                                        // border: none;
                                        // margin-top: 7px;
                                        // width: 75%;
                                        // border-bottom: 1px solid #d9d9d9;">
    //                                 </div>





    //                             </div>
    //                         </div>

    //                         <div id="mid" style="text-align: center;">
    //                             <div class="info">
    //                                 <h2>Contact Info</h2>
    //                                 <p>
    //                                     Address : ${response.data.company_details.company_address}</br>
                                     
    //                                     Phone : ${response.data.company_details.company_phone}</br>
    //                                 </p>
    //                             </div>
    //                         </div>

    //                         <div id="bot" style="text-align: center; marg">

    //                             <div id="table" >
    //                                 <table class="rec_tab" style="width: 100%;
    //                                 margin-left: auto;
    //                                 margin-right: auto;">

    //                                 <tr class="tabletitle" style="text-align: center">
    //                                 <td class="item" style="width: 0px; text-align: center">
    //                                     <h2>Item</h2>
    //                                 </td>
    //                                 <td class="Hours" style: "text-align: center">
    //                                     <h2>Qty</h2>
    //                                 </td>
    //                                 <td class="Rate" style:"text-align: center">
    //                                     <h2>Sub Total</h2>
    //                                 </td>
    //                             </tr>
                                  



                                        

                                       

    //                                 </table>
    //                             </div>

    //                             <div id="legalcopy">
    //                                 <p class="legal"><strong>Thank you for your patronage!</strong>
    //                                 </p>
    //                             </div>

    //                         </div>
    //                     </div>`
    //       );

          // console.log(response.data);

          // $('.rec_tab').prepend(``);

      //     var list_whs = "";
      //     $(response.data.product_details).each(function (i, v) {
      //       list_whs += ` <tr class="service" style="text-align: center">
      //                <td class="tableitem">
      //                    <p class="itemtext">${v.product_name}</p>
      //                </td>
      //                <td class="tableitem">
      //                    <p class="itemtext">${v.product_qty}</p>
      //                </td>
      //                <td class="tableitem">
      //                    <p class="itemtext">${format_to_money(v.product_price)}</p>
      //                </td>
      //            </tr>`;
      //     });

      // list_whs += `<tr class="tabletitle" style="text-align: center; border-bottom: 1px solid white;">
      //               <td></td>
      //               <td class="Rate">
      //               <h2 style="margin:10px; font-size:12px; font-weight:450;">Total Amount Paid (Cash)</h2>
      //               </td>
      //               <td class="payment">
      //               <h2 style="margin:10px; font-size:12px; font-weight:450;">N${format_to_money(response.data.payment_details.cash_paid)}</h2>
      //               </td>
                    
      //               </tr>`;
      //               list_whs += `<tr class="tabletitle" style="text-align: center; border-bottom: 1px solid white;">
      //               <td></td>
      //               <td class="Rate">
      //               <h2 style="margin:10px; font-size:12px; font-weight:450;">Total Amount Paid (Card)</h2>
      //               </td>
      //               <td class="payment">
      //               <h2 style="margin:10px; font-size:12px; font-weight:450;">N${format_to_money(response.data.payment_details.card_paid)}</h2>
      //               </td>
                    
      //               </tr>`;
      //               list_whs += `<tr class="tabletitle" style="text-align: center; border-bottom: 1px solid white;">
      //               <td></td>
      //               <td class="Rate">
      //               <h2 style="margin:10px; font-size:12px; font-weight:450;">Amount Due</h2>
      //               </td>
      //               <td class="payment">
      //               <h2 style="margin:10px; font-size:12px; font-weight:450;">N${format_to_money(response.data.payment_details.balance_to_pay)}</h2>
      //               </td>
                    
      //               </tr>`;

          $(".rec_tab").append(list_whs);
          localStorage.setItem('tran', `${response.data.sales.transaction_id}`)
          localStorage.setItem('tran_cus', `${response.data.customer_details.customer_id}`)

          $(".invoice_show").show();
          $(".end_tran").show();
          $("#shop_table").hide();
          $("#selected_item").empty();
          // $("").remove();
          $(".all_total").html(`₦0.00`);
          $(".for_paid").html(`₦0.00`);
          $(".for_due").html(`₦0.00`);
          $(".for_cash").val("");
          $(".for_debit").val("");
        } else if (response.status == "400" || response.status == "401") {
          $("#msg_r").html(response.msg);
          $("#rcv_grn_loader").hide();
          $("#receive_grn").show();
           $("#for_err").html(response.msg);
                    $("#err_msg").remove();
                     if( !($("#err_msg").length) )         
                    {
                    $( `<h4 id="err_msg" style="padding:10px; margin:0px">${response.msg}</h4>` ).insertAfter( ".swal2-error" );

                    }

                    $(".edit_error").show();

                    setTimeout(() => {
                        $(".edit_error").hide();
                        $("#err_msg").remove();
                    }, 5000);
        } else {
          $("#msg_r").html(response.msg);
          $("#rcv_grn_loader").hide();
          $("#receive_grn").show();
        }
      },

      error: function (objAJAXRequest, strError) {
        console.log(strError);
        console.log(objAJAXRequest);

        $("#rcv_grn_loader").hide();
        $("#receive_grn").show();
      },
    });
  }

  // function complete_payment() {
    // var items_list = [];

    // //for each invoice line item
    // $(".tab").each(function () {
    //   var id = $(this).attr("id").replace(/tab_/, "");
    //   console.log(id);

    //   // var item_unit = $("#holds_itms_unit_" + id).html();
    //   // var id = $("#tab_" + id).attr('data');
    //   var qty = $("#add_nu_" + id).val();
    //   var price = $("#tab_price_" + id).attr("data-value");

    //   items_list.push({
    //     product_id: id,
    //     product_qty: qty,
    //     product_price: price,
    //   });
    // });

  //   $.ajax({
  //     type: "POST",
  //     dataType: "json",
  //     url: base_url + "/api/pos/createTransaction",
  //     data: {
  //       user_id: localStorage.getItem("user_id"),
  //       company_id: localStorage.getItem("company_id"),
  //       products: items_list,
  //       cash_tendered: $(".cash_tenderd").val(),
  //       customer_phone: $(".phone").val(),
  //       customer_name: $(".cus_name").val(),
  //       payment_method: $("input:radio[name=option]:checked").val(),
  //     },
  //     timeout: 60000,

  //     success: function (response) {
  //       console.log(response);

  //       if (response.status == "200") {
  //         // $('.load_receipt').hide();
  //         // $('.payment_row').show();
  //         $(".invoice").append(
  //           `<div id="invoice-POS" style="width: 100%; text-align:"center">

  //                           <center id="top">
  //                               <div class="logo"></div>
  //                               <div class="info">
  //                                   <h2>${response.data.company_details.company_name}</h2>
  //                               </div>
  //                               <!--End Info-->
  //                           </center>
  //                           <!--End InvoiceTop-->

  //                           <div id="mid" style="text-align: center;">
  //                               <div class="info">
  //                                   <h2>Contact Info</h2>
  //                                   <p>
  //                                       Address : ${response.data.company_details.company_address}</br>
  //                                       Email : nahere@gmail.com</br>
  //                                       Phone : ${response.data.company_details.phone_number}</br>
  //                                   </p>
  //                               </div>
  //                           </div>

  //                           <div id="bot" style="text-align: center; marg">

  //                               <div id="table" >
  //                                   <table class="rec_tab" style="width: 100%;
  //                                   margin-left: auto;
  //                                   margin-right: auto;">

  //                                   <tr class="tabletitle" style="text-align: center">
  //                                   <td class="item" style="width: 0px; text-align: center">
  //                                       <h2>Item</h2>
  //                                   </td>
  //                                   <td class="Hours" style: "text-align: center">
  //                                       <h2>Qty</h2>
  //                                   </td>
  //                                   <td class="Rate" style:"text-align: center">
  //                                       <h2>Sub Total</h2>
  //                                   </td>
  //                               </tr>
                                  



                                        

                                       

  //                                   </table>
  //                               </div>

  //                               <div id="legalcopy">
  //                                   <p class="legal"><strong>Thank you for your business!</strong>
  //                                   </p>
  //                               </div>

  //                           </div>
  //                       </div>`
  //         );

  //         console.log(response.data);

  //         // $('.rec_tab').prepend(``);

  //         var list_whs = "";
  //         $(response.data.product_details).each(function (i, v) {
  //           list_whs += ` <tr class="service" style="text-align: center">
  //                    <td class="tableitem">
  //                        <p class="itemtext">${v.product_name}</p>
  //                    </td>
  //                    <td class="tableitem">
  //                        <p class="itemtext">${v.product_qty}</p>
  //                    </td>
  //                    <td class="tableitem">
  //                        <p class="itemtext">${v.product_price}</p>
  //                    </td>
  //                </tr>`;
  //         });

  //         list_whs += `<tr class="tabletitle" style="text-align: center">
  //                 <td></td>
  //                 <td class="Rate">
  //                     <h2>Total</h2>
  //                 </td>
  //                 <td class="payment">
  //                     <h2>N${response.data.sales.total_sales}</h2>
  //                 </td>
  //               </tr>`;

  //         $(".rec_tab").append(list_whs);
  //         $(".invoice_show").show();
  //       } else if (response.status == "400") {
  //         $("#msg_r").html(response.msg);
  //         $("#rcv_grn_loader").hide();
  //         $("#receive_grn").show();
  //       } else {
  //         $("#msg_r").html(response.msg);
  //         $("#rcv_grn_loader").hide();
  //         $("#receive_grn").show();
  //       }
  //     },

  //     error: function (objAJAXRequest, strError) {
  //       console.log(strError);
  //       console.log(objAJAXRequest);

  //       $("#rcv_grn_loader").hide();
  //       $("#receive_grn").show();
  //     },
  //   });
  // }




  
  function printData() {

    // alert('here')


    if( $('#cus_name').val() == "" && $('#cus_phone').val() == "" &&  $('#cus_email').val() == ""){
        // $("#edit_customer_history").hide();
              $(".for_edit").show();
              $(".dt-loader").hide();
             

                // $("#cus_name").val(`${response.data.customer_details.fullname}`)
                //      $("#cus_phone").val(`${response.data.customer_details.phone}`)

                   // $("#cus_name").replaceWith(`<span style="padding-left:15px">Guest</span>`);
                   // $("#cus_phone").replaceWith(`<span></span>`);


              setTimeout(() => {
                  $(".for_edit").hide();
                     var divToPrint = document.querySelector(".invoice");
                      newWin = window.open("");
                      newWin.document.write(divToPrint.outerHTML);
                      newWin.print();
                      newWin.close();

                       localStorage.removeItem('tran_cus')
                       localStorage.removeItem('tran')
                      // location.reload()
              }, 2000);

               $(".receipt_loading").hide();
               $(".complete_receipt").show();

    }


    console.log($('#cus_email').val())
    console.log($('#cus_name').val())
    console.log($('#cus_phone').val())
    console.log(($('#cus_name').val()) && ($('#cus_email').val() == "" && $('#cus_phone').val() == ""))

    if( ($('#cus_name').val()) && ($('#cus_email').val() == "" && $('#cus_phone').val() == "")){
    $("#edit_modal").hide();
        $("#for_err").html("Enter a valid phone number or email address");
        $("#err_msg").remove();

            $(`<h4 id="err_msg" style="padding:10px; margin:0px">Enter a valid phone number or email address</h4>`)
                .insertAfter(".swal2-error");
        $(".edit_error").show();

        setTimeout(() => {
            $(".edit_error").hide();
            $("#err_msg").remove();
        }, 5000);
        return;
    }   

    else if($('#cus_email').val() || $('#cus_phone').val()){
        var validRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

       // var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
       // if($("#cus_email").val()){
       //  alert('here3')
       if($('#cus_email').val() ){
        if(!($("#cus_email").val().match(validRegex))){
          $("#edit_modal").hide();
          $("#for_err").html("Enter a valid email address");
          $("#err_msg").remove();

              $(`<h4 id="err_msg" style="padding:10px; margin:0px">Enter a valid email address</h4>`)
                  .insertAfter(".swal2-error");
          $(".edit_error").show();

          setTimeout(() => {
              $(".edit_error").hide();
              $("#err_msg").remove();
          }, 5000);
          return;
        }
      }
      // else{



    $.ajax({
      type: "POST",
      dataType: "json",
      cache: false,
        headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
      url: base_url + "/api/pos/editCustomer",
      data: {
          fullname: $('#cus_name').val(),
          company_id: localStorage.getItem('company_id'),
          phone: $('#cus_phone').val(),
          customer_id: localStorage.getItem('tran_cus'),
          email: $('#cus_email').val(),
          user_id:localStorage.getItem('user_id'),
          store_id: localStorage.getItem('store_id'),
          trans_id: localStorage.getItem('tran')
      },

      success: function(response) {
          if (response.status == "200") {
            // alert(localStorage.getItem('tran'))
              console.log(response);

              // $("#edit_customer_history").hide();
              $(".for_edit").show();
              $(".dt-loader").hide();
            

                     $("#cus_name").val(`${response.data.customer_details.fullname}`)
                     $("#cus_phone").val(`${response.data.customer_details.phone}`)
                     $("#cus_email").val(`${response.data.customer_details.email}`);


                  // $(`#jst_tst`).append((`${response.data.customer_details.fullname}`))
                   $("#cus_name").replaceWith(`<span style="margin-bottom:10px">${response.data.customer_details.fullname}</span>`);
                   $("#cus_phone").replaceWith(`<span style="margin-bottom:10px">${response.data.customer_details.phone}</span>`);
                   $("#cus_email").replaceWith(`<span style="margin-bottom:10px">${response.data.customer_details.email}</span>`);




              setTimeout(() => {
                  $(".for_edit").hide();

                     var divToPrint = document.querySelector(".invoice");
                      newWin = window.open("");
                      newWin.document.write(divToPrint.outerHTML);
                      newWin.print();
                      newWin.close();
                      // location.reload()
                        localStorage.removeItem('tran_cus')
              localStorage.removeItem('tran')
                        $("#invoice-POS").remove();
               $(".invoice_show").hide();     
              }, 2000);

               $(".receipt_loading").hide();
               $(".complete_receipt").show();
             


            

          } else if (response.status == "400") {

              console.log(response);
              // $("#edit_modal").hide();
              $(".edit_error").show();
              $("#for_err").html(response.msg);
              localStorage.removeItem('tran_cus')
              localStorage.removeItem('tran')

              $(".dt-loader").hide();
              $(".edit_foot").show();

              setTimeout(() => {
                  $(".edit_error").hide();

              }, 2000);
               $(".receipt_loading").hide();
               $(".complete_receipt").show();
               


          } else if (response.status == "401") {
              //user error message
              console.log(response);
              $("#edit_modal").hide();
              $(".edit_error").show();
              $("#for_err").html(response.msg);
              localStorage.removeItem('tran_cus')
              localStorage.removeItem('tran')

              $(".dt-loader").hide();
              $(".edit_foot").show();

              setTimeout(() => {
                  $(".edit_error").hide();
              }, 2000);
          }
           $(".receipt_loading").hide();
               $(".complete_receipt").show();
      },
      error: function(response) {
          console.log(response);
      },
  });
  // }
 } else{

    console.log(response);
              $("#edit_modal").hide();
              $(".edit_error").show();
              $("#for_err").html("Enter a valid email address or phone number");
              localStorage.removeItem('tran_cus')
              localStorage.removeItem('tran')

              $(".dt-loader").hide();
              $(".edit_foot").show();

              setTimeout(() => {
                  $(".edit_error").hide();
              }, 2000);
          }

 }

  //   if( $('#cus_name').val() == "" && $('#cus_phone').val() == "" &&  $('#cus_email').val() == ""){
  //       // $("#edit_customer_history").hide();
  //             $(".for_edit").show();
  //             $(".dt-loader").hide();
             

  //               // $("#cus_name").val(`${response.data.customer_details.fullname}`)
  //               //      $("#cus_phone").val(`${response.data.customer_details.phone}`)

  //                  // $("#cus_name").replaceWith(`<span style="padding-left:15px">Guest</span>`);
  //                  // $("#cus_phone").replaceWith(`<span></span>`);


  //             setTimeout(() => {
  //                 $(".for_edit").hide();
  //                    var divToPrint = document.querySelector(".invoice");
  //                     newWin = window.open("");
  //                     newWin.document.write(divToPrint.outerHTML);
  //                     newWin.print();
  //                     newWin.close();

  //                      localStorage.removeItem('tran_cus')
  //                      localStorage.removeItem('tran')
  //                     // location.reload()
  //             }, 2000);

  //              $(".receipt_loading").hide();
  //              $(".complete_receipt").show();

  //   }else if(){
  //     // var email = 
  //     // /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
  //     var validRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

  //      // var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  //      if($("#cus_email").val().length > 0){
  //       if(!($("#cus_email").val().match(validRegex))){
  //         $("#edit_modal").hide();
  //         $("#for_err").html("Enter a valid email address");
  //         $("#err_msg").remove();

  //             $(`<h4 id="err_msg" style="padding:10px; margin:0px">Enter a valid email address</h4>`)
  //                 .insertAfter(".swal2-error");
  //         $(".edit_error").show();

  //         setTimeout(() => {
  //             $(".edit_error").hide();
  //             $("#err_msg").remove();
  //         }, 5000);
  //         return;
  //       }
  //     }
  //     else{

  //   $.ajax({
  //     type: "POST",
  //     dataType: "json",
  //     cache: false,
  //     url: base_url + "/api/pos/editCustomer",
  //     data: {
  //         fullname: $('#cus_name').val(),
  //         company_id: localStorage.getItem('company_id'),
  //         phone: $('#cus_phone').val(),
  //         customer_id: localStorage.getItem('tran_cus'),
  //         email: $('#cus_email').val(),

  //         user_id:localStorage.getItem('user_id'),
  //         store_id: localStorage.getItem('store_id'),
  //         trans_id: localStorage.getItem('tran')
  //     },

  //     success: function(response) {
  //         if (response.status == "200") {
  //           // alert(localStorage.getItem('tran'))
  //             console.log(response);

  //             // $("#edit_customer_history").hide();
  //             $(".for_edit").show();
  //             $(".dt-loader").hide();
            

  //                    $("#cus_name").val(`${response.data.customer_details.fullname}`)
  //                    $("#cus_phone").val(`${response.data.customer_details.phone}`)
  //                    $("#cus_email").val(`${response.data.customer_details.email}`);


  //                 // $(`#jst_tst`).append((`${response.data.customer_details.fullname}`))
  //                  $("#cus_name").replaceWith(`<span style="margin-bottom:10px">${response.data.customer_details.fullname}</span>`);
  //                  $("#cus_phone").replaceWith(`<span style="margin-bottom:10px">${response.data.customer_details.phone}</span>`);
  //                  $("#cus_email").replaceWith(`<span style="margin-bottom:10px">${response.data.customer_details.email}</span>`);




  //             setTimeout(() => {
  //                 $(".for_edit").hide();

  //                    var divToPrint = document.querySelector(".invoice");
  //                     newWin = window.open("");
  //                     newWin.document.write(divToPrint.outerHTML);
  //                     newWin.print();
  //                     newWin.close();
  //                     // location.reload()
  //                       localStorage.removeItem('tran_cus')
  //             localStorage.removeItem('tran')
  //                       $("#invoice-POS").remove();
  //              $(".invoice_show").hide();     
  //             }, 2000);

  //              $(".receipt_loading").hide();
  //              $(".complete_receipt").show();
             


            

  //         } else if (response.status == "400") {

  //             console.log(response);
  //             // $("#edit_modal").hide();
  //             $(".edit_error").show();
  //             $("#for_err").html(response.msg);
  //             localStorage.removeItem('tran_cus')
  //             localStorage.removeItem('tran')

  //             $(".dt-loader").hide();
  //             $(".edit_foot").show();

  //             setTimeout(() => {
  //                 $(".edit_error").hide();

  //             }, 2000);
  //              $(".receipt_loading").hide();
  //              $(".complete_receipt").show();
               


  //         } else if (response.status == "401") {
  //             //user error message
  //             console.log(response);
  //             $("#edit_modal").hide();
  //             $(".edit_error").show();
  //             $("#for_err").html(response.msg);
  //             localStorage.removeItem('tran_cus')
  //             localStorage.removeItem('tran')

  //             $(".dt-loader").hide();
  //             $(".edit_foot").show();

  //             setTimeout(() => {
  //                 $(".edit_error").hide();
  //             }, 2000);
  //         }
  //          $(".receipt_loading").hide();
  //              $(".complete_receipt").show();
  //     },
  //     error: function(response) {
  //         console.log(response);
  //     },
  // });
  // }
  //  }

    // var divToPrint = document.querySelector(".invoice");
    // newWin = window.open("");
    // newWin.document.write(divToPrint.outerHTML);
    // newWin.print();
    // newWin.close();


  $(".print_tab").on("click", function () {
    printData();
  });



  // $(".print_tab").on("click", function () {
  //   printData();
  // });

  $(document).on("click", ".save_edit", function () {
    save_edit();
  });

  // $(document).on("click", ".edit_cat", function () {
  //   edit_cat();
  // });

  $(document).on("click", ".edit_delete", function () {
    var id = $(this).attr("data");
    var r = confirm("Are you sure you want to delete this product?");
    if (r == true) {
      delete_product(id);
    }
  });

  $(document).on("click", ".product_delete", function () {
    var id = $(this).attr("data");
    var r = confirm("Are you sure you want to delete this product?");
    if (r == true) {
      delete_pro(id);
    }
  });

   $(document).on("click", ".delete_cat", function () {
    var id = $(this).attr("data");
    var r = confirm("Are you sure you want to delete this category?");
    if (r == true) {
      delete_cat(id);
    }
  });

  $(document).on("click", ".hide_btn", function () {
    $("#edit_modal").hide();
    $("#edit_cat_modal").hide();
    $("#edit_cus_history").hide();
    $("#edit_customer_history").hide();
    $("#modal_choose_company").hide();
    $(".history_show").hide();
    $(".product_show").hide();
    $(".invoice_show").hide();
    $(".receipt_loading").hide();
    $(".complete_receipt").show();
    $(".contact_show").hide();
    $(".contact_import_show").hide();
    $("#view_modal").hide();
    // location.reload()
  });
  $(document).on("click", ".end_tran", function () {
    // $(this).remove()
     $(".receipt_loading").hide();
      $(".complete_receipt").show();
        $("#invoice-POS").remove();

    // location.reload()
  });

  $(document).on("click", ".store_modal", function () {
    $("#switch").hide()
  });

      $(document).on('click', '.switch_stores', function() {
            // $('.dt-loader-container').show();
            $('#add_stores').html('');
            $('#switch').show();
            getListOfStoresUSerHasAccessTo();

        });

        $(document).on('change', '.enter_switch_store', function() {
            
            var store_id = $(this).val();
            var store_name = $(this).attr("dir");

            if(store_id == 0 || store_id == "0"){
                localStorage.setItem('store_dash', store_id);
                // localStorage.setItem('store_name', store_name);
                $(`#enter_store_${store_id}`).attr("selected", true)
                $("#filter").trigger("click");
                // window.location.href = base_url + "/pos";

            }else{
              localStorage.setItem('store_dash', store_id);
              // localStorage.setItem('store_name', store_name);
              $("#filter").trigger("click");
              // alert("Set to this - " + localStorage.getItem('warehouse_name'));
              // window.location.href = base_url + "/pos";

            }
            // alert(warehouse_id);
            

        });


        $(document).on('click', '.enter_ware', function() {

            var company_id = localStorage.getItem('company_id');
            var user_id = localStorage.getItem('user_id');
            var store = localStorage.getItem('store_id');
            var for_this = $(this)

          



          $.ajax({

            type: "POST",
            dataType: "json",
              headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
            url: base_url + "/api/pos/setDefaultStore",
            data: { company_id: company_id, store_id: store, user_id: user_id },

            timeout: 60000,

            success: function(response) {

            var store_id = for_this.attr("id").replace(/enter_/, '');
            var store_name = for_this.attr("dir").replace(/entername_/, '');
            localStorage.setItem('store_id', store_id);
            localStorage.setItem('store_name', store_name);
            window.location.href = base_url + "/pos";

                // if (response.status == '200') {
                //     console.log(response);
                //     $('.dt-loader-container').hide();
                //     var str = "";

                //     var pathname = window.location.pathname;
                //     if (pathname == "/pos/dashboard"){

                //     var list = `<option id="enter_store_${0}" value="${0}" dir="All Stores" style="color: gray;font-size: 14px;">All Stores </option> `
                    
                //     }else{

                //     var list =""

                //     }
                //     // alert(response.data.length)
                //     if (Object.keys(response.data).length > 0) {

                //         $.each(response['data'], function(i, v) {
                //           if(localStorage.getItem("store_name") == `${v.store_name}`){
                //            list += `<option style="color: gray;font-size: 14px;" selected dir="${v.store_name}" id="enter_store_${v.store_id}" value="${v.store_id}">${v.store_name} </i></option> `
                //           }else{
                //            list += `<option style="color: gray;font-size: 14px;"  dir="${v.store_name}" id="enter_store_${v.store_id}" value="${v.store_id}">${v.store_name} </i></option> `

                //           }


                //         })

                //         // $('#switch_tab').show();
                //         $('#switch_stores_').html(list);
                      

                //     }


                // } else {
                //     $('#loading_dlv').hide();
                //     $('#warehouse_dlv').html('');
                //     $('#warehouse_dlv').html('Technical error!');
                // }

            },
            // objAJAXRequest, strError
            error: function(response) {
                // $('#loading_dlv').hide();
                // $('#warehouse_dlv').html('');
                // // alert('Error fetching warehouses!');
                // $('#warehouse_dlv').html('Error fetching List!');

            }

        });

           

        });


    function ListOfStoresUSerHasAccessTo() {
      $('.switch_header').hide();
      $('.switching').show();
      // <span>&#x25BC;</span>
        var company_id = localStorage.getItem('company_id');
        var user_id = localStorage.getItem('user_id');
        var urlParams = new URLSearchParams(window.location.search).get('id')

        // if(!urlParams){
        //        window.location.href = "/pos";
        //   }


        $.ajax({

            type: "GET",
            dataType: "json",
              headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
            url: base_url + "/api/pos/storeList",
            data: { company_id: company_id, 
                store_id: localStorage.getItem('store_id')
            },

            timeout: 60000,

            success: function(response) {

                if (response.status == '200') {
                    console.log(response);
                    $('.dt-loader-container').hide();
                    var str = "";

                    var pathname = window.location.pathname;
                    if (pathname == "/pos/dashboard"){

                    var list = `<option id="enter_store_${0}" value="${0}" dir="All Stores" style="color: gray;font-size: 14px;">All Stores </option> `
                    
                    }else if (pathname == "/pos/stores"){
                  var strTable = "";
                  var pathArray = window.location.pathname.split( '/' );
                  var company_id = localStorage.getItem('company_id');

                    if(response.data.length > 0){

                          var k = 1;
                          $.each(response['data'], function (i, v) {
                              // strTable += '<td width="8%" valign="top"><div class="profile_pic"><img src="'+base_url+'/erp/assets/admin_template/production/images/img.jpg" alt="..." width="50"></div></td>';

                              function status(string) {
                                  return string.charAt(0).toUpperCase() + string.slice(1);
                              }

                              strTable += '<tr id="row_'+response['data'][i]['store_id']+'">';

                              strTable += '<td></td>';

                              
                              strTable += '<td width="75%" valign="top">'+status(response['data'][i]['store_name'])+'</td>';
                              
                              strTable += '<td valign="top">'

                             

                              strTable += '<a class="btn btn-success" href="/pos/user_perms?id='+response['data'][i]['store_id']+'&user_id='+urlParams+'" ><span style="color:white">Enter Store</span></a></td>'; 

                              // strTable += '<a href="whsections?id='+response['data'][i]['warehouse_id']+'"  class="btn btn-danger btn-xs"><i  class="fa fa-hourglass-half"  data-toggle="tooltip" data-placement="top" title="Activity History"></i>sections</a></td>';
                              
                              strTable += '</tr>';

                              strTable += '<tr style="display: none;" id="loader_row_'+response['data'][i]['store_id']+'">';
                              strTable += '<td colspan="2"><i class="fa fa-spinner fa-spin fa-fw fa-2x"  id="loading"></i>';
                              strTable +=  '</td>';
                              strTable += '</tr>';


                              k++;
                               
                          });

                      }else{

                          strTable = '<tr><td colspan="2">No record.</td></tr>';

                      }

                      $("#perm_data").html(strTable);
                      $("#perm_data").show();

                    }
                    // alert(response.data.length)
                    if (Object.keys(response.data).length > 0) {

                        $.each(response['data'], function(i, v) {
                          if(localStorage.getItem("store_name") == `${v.store_name}`){
                           list += `<option style="color: gray;font-size: 14px;" selected dir="${v.store_name}" id="enter_store_${v.store_id}" value="${v.store_id}">${v.store_name} </i></option> `
                          }else{
                           list += `<option style="color: gray;font-size: 14px;"  dir="${v.store_name}" id="enter_store_${v.store_id}" value="${v.store_id}">${v.store_name} </i></option> `

                          }


                        })

                        if (pathname == "/pos/dashboard"){
                         $('#switch_stores_').html(list);
                        }else{
                         var store_name = localStorage.getItem('store_name');
                         var store_id = localStorage.getItem('store_id');

                         $('#switch_stores_').html(`<option style="color: gray;font-size: 14px;"  dir="${store_name}" id="enter_store_${store_id}" value="${store_id}">${store_name} </i></option>`);
                        }

                        // $('#switch_tab').show();
                      

                    }


                } else {
                    $('#loading_dlv').hide();
                    $('#warehouse_dlv').html('');
                    $('#warehouse_dlv').html('Technical error!');
                }

            },
            // objAJAXRequest, strError
            error: function(response) {
                $('#loading_dlv').hide();
                $('#warehouse_dlv').html('');
                // alert('Error fetching warehouses!');
                $('#warehouse_dlv').html('Error fetching List!');

            }

        });
    }



    function getListOfStoresUSerHasAccessTo() {
      $('.switch_header').hide();
      $('.switching').show();
        var company_id = localStorage.getItem('company_id');
        var user_id = localStorage.getItem('user_id');


        $.ajax({

            type: "GET",
            dataType: "json",
              headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
            url: base_url + "/api/pos/storeList",
            data: { company_id: company_id,
                store_id: localStorage.getItem('store_id')
            },

            timeout: 60000,

            success: function(response) {

                if (response.status == '200') {
                    console.log(response);
                    $('.dt-loader-container').hide();
                    var str = "";
                    var list = ""
                    // alert(response.data.length)
                    if (Object.keys(response.data).length > 0) {

                        $.each(response['data'], function(i, v) {

                            str += '<tr class="service" >';
                            str += '<td style="padding: 0px 16px !important">' + response['data'][i]['store_name'] + '</td>';
                            str += '<td style="padding: 0px 16px !important">' + response['data'][i]['store_address'] + '</td>';
                            str +=
                                '<td ><button style="position: relative !important; padding-top: 5px !important;top: 8px !important;" name="enter_ware" class="enter_ware btn btn-primary btn-sm" id="enter_' +
                                response['data'][i]['store_id'] + '" dir="entername_' +
                                response['data'][i]['store_name'] +
                                '" data-dismiss="modal">Enter</button></td>';
                            str += '</tr>';


                           list += `<option id="enter_store_${v.store_id}" value="${v.store_id}">${v.store_name}</option> `

                        })

                        // $('#switch_tab').show();
                        $('#add_stores').html(str);
                        $('.switching').hide();
                        $('.switch_header').show();
                        $('#switch').show();

                    }

                } else {
                    $('#loading_dlv').hide();
                    $('#warehouse_dlv').html('');
                    $('#warehouse_dlv').html('Technical error!');
                }

            },
            // objAJAXRequest, strError
            error: function(response) {
                $('#loading_dlv').hide();
                $('#warehouse_dlv').html('');
                // alert('Error fetching warehouses!');
                $('#warehouse_dlv').html('Error fetching List!');

            }

        });
    }

  // <div class="col-md-3 filter_shop" data-string="${v.product_name}">

  // <div class="card" style="width: 100%; ">

  //     <img class="card-img-top"
  //         src=${v.product_image}
  //         style="width: 70%;
  //         margin-left: auto;
  //         margin-right: auto;" alt="Balancing">

  //     <div class="card-body" style="margin-top: 10px;
  //         padding: 0.1rem;">

  //         <div style="display: grid; justify-content: center; " class="card-text">
  //             <span class="d-block this_name" style="margin-left: auto; margin-right: auto; text-align:center">${v.product_name}</span>
  //             <span class="badge bg-light-green text-white text-uppercase mb-2" >${v.product_price}</span>
  //         </div>

  //     </div>

  // </div>

  
  function list_all_product(page) {
    let company_id = localStorage.getItem("company_id");
    if (page == "") {
      var page = 1;
    }
    var limit = 0;

    $.ajax({
      type: "GET",
      dataType: "json",
        headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
      cache: false,
      url: base_url + "/api/pos/listProducts",
      data: { company_id: company_id, 
                store_id: localStorage.getItem('store_id'),
       product_id:"", price_range:"", limit: limit, page: page },

      success: function (response) {
        if (response.status == "200") {
          console.log(response.data);
          if (response.total_rows > 0) {
            var k = 1;
            var list_whs = "";
            $.each(response.data, function (i, v) {
              list_whs += `
              <tr data-row-key="1" class="ant-table-row ant-table-row-level-0 filter_shop" id="all_table_${v.product_id}"
              style="font-size: 16px; display:none" data-value="${v.product_name}"
              lang="${v.product_price}" data="${v.product_id}" barcode="${v.product_barcode}" data-string="${v.product_name}">
              <td class="ant-table-cell" style="padding:0px">
                  <div>
                      <img class="gx-rounded-lg gx-width-100"
                          src=${v.product_sml_image ? v.product_sml_image : v.product_image}
                          alt="..." style="width: 70px; height:50px;">
                  </div>
              </td>

              <td class="ant-table-cell" style="padding:0px">
                  <div style="margin-left: 20px;
              margin-top: 5px;">
                      </span><span>${v.product_name}</span>
                  </div>
              </td>

              
              <td class="ant-table-cell">${format_to_money(v.product_price)}</td>


              <td class="ant-table-cell" style="position: relative;">
              <button type="button" id="select_it_${v.product_id}" data-table="${v.product_name}" lang="${v.product_sml_image ? v.product_sml_image : v.product_image}" data="${v.product_price}" class="ant-btn ant-btn-sm select_it" style="background-color:#1DCE8E; color:white; postition:relative; top:10px; width:90%;
    padding: 15px;" ant-click-animating-without-extra-node="false"><span style="position: relative; top: -12px;">Select</span></button>
              <button type="button" id="select_it_${v.product_id}" data-table="${v.product_name}" lang="${v.product_sml_image ? v.product_sml_image : v.product_image}}" data="${v.product_price}" class="ant-btn ant-btn-sm select_bar" style="display:none; background-color:#1DCE8E; color:white; postition:relative; top:10px;" ant-click-animating-without-extra-node="false"><span>Select</span></button>
             
              

              </td>
            
              </tr>`

              k++;
            });
            // <button type="button" class="ant-btn ant-btn-sm del_tab" style="background-color:#DC3154; postition:relative; top:10px; color:white" id="del_tab_${v.product_id}
            //   " "ant-click-animating-without-extra-node="false"><span>Cancel</span></button>
            // $('#pagination_products').twbsPagination({
            //             totalPages: Math.ceil(response.total_rows / limit),
            //             visiblePages: 10,
            //             onPageClick: function(event, page) {
            //                 list_all_product(page);
            //             }
            //         });

            $(".products_loader").hide();
            $(".load_products").hide();

            


            $("#shop_table").append(list_whs);
          }
        } else if (response.status == "400") {
          // coder error message
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


  
  // function list_all_product(page) {
  //   let company_id = localStorage.getItem("company_id");
  //   if (page == "") {
  //     var page = 1;
  //   }
  //   var limit = 20;

  //   $.ajax({
  //     type: "GET",
  //     dataType: "json",
  //     cache: false,
  //     url: base_url + "/api/pos/listProducts",
  //     data: { company_id: company_id, limit: limit, page: page },

  //     success: function (response) {
  //       if (response.status == "200") {
  //         console.log(response.data);
  //         if (response.total_rows > 0) {
  //           var k = 1;
  //           var list_whs = "";
  //           $.each(response.data, function (i, v) {
              // list_whs += `
              // <tr data-row-key="1" class="ant-table-row ant-table-row-level-0" id="all_table_${v.product_id}"
              // style="font-size: 16px" data-value="${v.product_name}"
              // lang="${v.product_price}" data="${v.product_id}" data-string="${v.product_name}">
              // <td class="ant-table-cell" style="display: flex;">
              //     <div>
              //         <img class="gx-rounded-lg gx-width-100"
              //             src=${v.product_image}
              //             alt="..." style="width: 70px; height:50px;">
              //     </div>
              //     <div style="margin-left: 20px;
              // margin-top: 5px;">
              //         </span><span>${v.product_name}</span>
              //     </div>


              // </td>

              // <td class="ant-table-cell">
              //     <div class="ant-input-number">
              //         <div class="ant-input-number-handler-wrap"><span
              //                 role="button" aria-label="Increase Value"
              //                 class="ant-input-number-handler ant-input-number-handler-up btn-plus plus_ "
              //                 id="plus_${v.product_id}" data="${v.product_id}"><span role="img"
              //                     aria-label="up"
              //                     class="anticon anticon-up ant-input-number-handler-up-inner"><svg
              //                         viewBox="64 64 896 896"
              //                         focusable="false" class=""
              //                         data-icon="up" width="1em"
              //                         height="1em" fill="currentColor"
              //                         aria-hidden="true">
              //                         <path
              //                             d="M890.5 755.3L537.9 269.2c-12.8-17.6-39-17.6-51.7 0L133.5 755.3A8 8 0 00140 768h75c5.1 0 9.9-2.5 12.9-6.6L512 369.8l284.1 391.6c3 4.1 7.8 6.6 12.9 6.6h75c6.5 0 10.3-7.4 6.5-12.7z">
              //                         </path>
              //                     </svg></span></span><span
              //                 unselectable="unselectable" role="button"
              //                 aria-label="Decrease Value"
              //                 class="ant-input-number-handler ant-input-number-handler-down minus_"
              //                 data="${v.product_id}" id="minus_${v.product_id}"><span role="img"
              //                     aria-label="down"
              //                     class="anticon anticon-down ant-input-number-handler-down-inner"><svg
              //                         viewBox="64 64 896 896"
              //                         focusable="false" class=""
              //                         data-icon="down" width="1em"
              //                         height="1em" fill="currentColor"
              //                         aria-hidden="true">
              //                         <path
              //                             d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z">
              //                         </path>
              //                     </svg></span></span></div>
              //         <div class="ant-input-number-input-wrap"><input
              //                 role="spinbutton" aria-valuemin="1"
              //                 aria-valuemax="100000" data="${v.product_id}"
              //                 aria-valuenow="6" autocomplete="off"
              //                 max="100000" min="1" step="1" value="1"
              //                 id="add_nu_${v.product_id}"
              //                 class="form-control ant-input-number-input trans_input">
              //         </div>
              //     </div>
         
              // </td>
              // <td class="ant-table-cell">${v.product_price}</td>
              // <td class="del_tab" id="del_tab_${v.product_id}"><i
              //         class="icon icon-trash icon-fw icon-xl"
              //         style="color:#dd2a36"></i></td>
              // </tr>`




  //             k++;
  //           });

  //           $(".products_loader").hide();

  //           $("#shop_table").append(list_whs);
  //         }
  //       } else if (response.status == "400") {
  //         // coder error message
  //         console.log(response);
  //       } else if (response.status == "401") {
  //         //user error message
  //         console.log(response);
  //       }
  //     },
  //     error: function (response) {
  //       console.log(response);

  //       // $('#submit_code').show();
  //       // $('#load2').hide();
  //       // $('#error-code').show();
  //       // $('#error-code').html("Connection Error.");
  //     },
  //   });
  // }

  $.urlParam = function(name){

    var results = new RegExp('[\?&]' + name + '=([^]*)').exec(window.location.href);
    if (results==null){
       return null;
    }
    else{
       return results[1] || 0;
    }
}


  function list_shop_products(page) {
    let company_id = localStorage.getItem("company_id");
    if (page == "") {
      var page = 1;
    }
    var limit = "";

    $.ajax({
      type: "GET",
      dataType: "json",
        headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
      cache: false,
      url: base_url + "/api/pos/listProducts",
      data: { company_id: company_id, product_id:"", 
                store_id: localStorage.getItem('store_id'),
       price_range:"", limit: limit, page: page },

      success: function (response) {
        if (response.status == "200") {
          console.log(response.data);
          if (response.total_rows > 0) {
            var k = 1;
            var list_whs = "";
            $.each(response.data, function (i, v) {
              list_whs += `

                <div class="col-xl-4 col-md-4 col-sm-6 col-12 filter_shop" data-value="${v.product_name}"
                lang="${v.product_price}" data="${v.product_id}" data-string="${v.product_name}" 
                style="cursor:pointer;">

                <!-- Card -->
                <div class="card dt-card__full-height dt-card__product-vertical">

                    <!-- Card top image -->
                    <img class="card-img-top"
                        src=${v.product_sml_image ? v.product_sml_image : v.product_image}
                        alt="Alarm Clock" style="width: 100%; height:200px">
                    <!-- /card top image -->


                    <div class="card-body">

                        <!-- Card Title-->
                        <h2 class="card-title" style="text-align:center">${v.product_name}</h2>
                        <!-- Card Title-->

                        <!-- <div class="d-flex">
                            <h4 class="mb-2 mr-3">$699</h4>
                            <h5 class="mb-2 mr-3 text-light-gray"><del>$990</del></h5>
                            <h5 class="mb-2 mr-3 text-success">29 % off</h5>
                        </div> -->





                    </div>

                    <div class="card-footer">
                        <!-- <button class="btn btn-outline-light text-muted btn-sm mb-4">Add to card</button> -->
                        <button class="btn btn-sm ml-1 mb-4" style="background-color:#1dce8e; color:white; width:100%; margin-left:auto; margin-right:auto">&#x20A6;${v.product_price}</button>
                    </div>

                </div>

            </div>
     
            </div>`;

              k++;
            });

            $(".products_loader").hide();

            $(".shop_tab").append(list_whs);
          }
        } else if (response.status == "400") {
          // coder error message
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

  $(".swal2-confirm").click(function () {
    $(".swal2-container").hide();
    location.reload();

    // $(".item_table").toggle();
    // $(".add_item").show();
    // $(".add_item_form").toggle();
    // $(".dt-page__title").html('Products');
    // $(".dt-page__title").css('margin-left', '0px');
  });

  // Handler for .ready() called.
  //  $(".send_btn").click(function() {

  //     $(".item_table").toggle();
  //     $(".add_item").show();
  //     $(".add_item_form").toggle();
  //     $(".dt-page__title").html('Products');
  //     $(".dt-page__title").css('margin-left', '0px');

  // });

//   $("#send_btn").submit(function(event) { 
// event.preventDefault();
// if($('#product_name').val() !=="" && $('#product_price').val() !=="" && $('#product_cat').val() !==""){
//       submit_product();
// }
// return false;
// })

  $(".send_btn").click(function (e) {
    e.preventDefault();
    if($('#product_name').val() !=="" && $('#product_price').val() !=="" && $('#product_cat').val() !==""){
    e.preventDefault();
      submit_product(e);
    }

  });

    function previewFile() {
    const preview = document.querySelector('.preview');
    const file = document.querySelector('input[type=file]').files[0];
    const reader = new FileReader();

    reader.addEventListener("load", function () {
      // convert image file to base64 string
      preview.src = reader.result;
    }, false);

    $(".preview-wrapper").show()

    if (file) {
      reader.readAsDataURL(file);
    }
  }

  function submit_product(e) {
    e.preventDefault();
    let product_name = $("#product_name").val();
    let company_id = localStorage.getItem("company_id");
    let product_price = $("#product_price").val();
    let product_barcode = "";
    let product_sku = $("#product_sku").val();
    let product_image = $(".preview").attr('src').split('base64,')[1];

    if(!product_image){
      product_image = ""
    }


    // var blank;

    // $(".required5").each(function () {
    //   var the_val = $.trim($(this).val());
    //   console.log('1', the_val)

    //   if (the_val == "") {
    //     blank = "yes";

    //     $(this).addClass("has-error");

        
    //   } else {
    //     blank = "no";

    //     $(this).removeClass("has-error");
    //   }
    // });

    // if (blank = "yes") {
    //   // console.log('2', the_val)
    //   console.log(blank)

    //   alert('empty fields')

    //   return;

    // }

    $(".send_btn").hide();
    $(".dt-loader").show();

    // let product_name = $("#product_name").val();
    // let company_id = localStorage.getItem('company_id');
    // let product_price = $("#product_price").val();
    // let product_barcode = "";
    // let product_sku = "";
    // let product_image = $("#product_image").val();

    // var fd = new FormData();
    // var files = `${$("#product_image")[0].files[0] == undefined ? "": $("#product_image")[0].files[0]}`;
  
    // fd.append("product_name", $("#product_name").val());
    // fd.append("company_id", localStorage.getItem("company_id"));
    // fd.append("product_price", $("#product_price").val());
    // fd.append("product_category", $("#wzh_zz_lzt").val());
    // fd.append("product_barcode", "");
    // fd.append("product_sku", $("#product_sku").val());
    // fd.append("product_image", files);

    $.ajax({
      type: "POST",
      dataType: "json",
      // processData: false,
      // contentType: false,
        headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
      cache: false,
      // enctype: "multipart/form-data",
      url: base_url + "/api/pos/createProduct",
      data: { company_id: company_id, product_name: product_name, product_price: product_price, product_category: $("#wzh_zz_lzt").val(),
                store_id: localStorage.getItem('store_id'),product_barcode: $("#product_barcod").val(), product_sku: "", platform: "web", product_image: product_image, product_description: $("#product_description").val(), product_unit: $("#product_unit").val()},
      // data: fd,

      success: function (response) {
        if (response.status == "200") {
          console.log(response);

          $(".create_product").show();
          // $(".item_table").toggle();
          // $(".add_item").show();
          // $(".add_item_form").toggle();
          // $(".dt-page__title").html('Products');
          // $(".dt-page__title").css('margin-left', '0px');
        } else if (response.status == "400") {
          // coder error message
          console.log(response);
          $(".dt-loader").hide();
          $(".send_btn").show();
           $("#for_err").html(response.msg);
                    $("#err_msg").remove();
                     if( !($("#err_msg").length) )         
                    {
                    $( `<h4 id="err_msg" style="padding:10px; margin:0px">${response.msg}</h4>` ).insertAfter( ".swal2-error" );

                    }

                    $(".edit_error").show();

                    setTimeout(() => {
                        $(".edit_error").hide();
                        $("#err_msg").remove();
                    }, 5000);

          // $('#submit_code').show();
          // $('#load2').hide();
          // $('#error-code').show();
          // $('#error-code').html('Technical Error');
        } else if (response.status == "401") {
          //user error message
          console.log(response);
        $("#for_err").html(response.msg);
                    $("#err_msg").remove();
                     if( !($("#err_msg").length) )         
                    {
                    $( `<h4 id="err_msg" style="padding:10px; margin:0px">${response.msg}</h4>` ).insertAfter( ".swal2-error" );

                    }

                    $(".edit_error").show();

                    setTimeout(() => {
                        $(".edit_error").hide();
                        $("#err_msg").remove();
                    }, 5000);
          $(".dt-loader").hide();
          $(".send_btn").show();

        }
      },
      error: function (response) {
        console.log(response);
        alert('Connection Error')

        // $('#submit_code').show();
        // $('#load2').hide();
        // $('#error-code').show();
        // $('#error-code').html("Connection Error.");
      },
    });
  }


  // $(".send_cat").click(function () {
  // });

  $(document).on("click", ".send_cat", function () {
    send_category();
  })

   $(document).on("click", ".remove_img", function () {
    $(".just-preview").attr("src", "");
    $(".preview-wrapper").hide();
    $("#product_image").val(null);
    
  })

  function send_category() {
    let category_name = $("#cat_name").val();
    let company_id = localStorage.getItem("company_id");
    let category_desc = $("#desc").val();

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


    $(".send_cat").hide();
    $(".dt-loader").show();

    
    $.ajax({
      type: "POST",
      dataType: "json",
      cache: false,
        headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
      url: base_url + "/api/pos/createCategory",
      data: { 
                store_id: localStorage.getItem('store_id'),
        cat_name : category_name, cat_description : category_desc, company_id : company_id},

      success: function (response) {
        if (response.status == "200") {
          console.log(response);

          $(".create_product").show();
        } else if (response.status == "400") {
          console.log(response);
           $("#for_err").html(response.msg);
                    $("#err_msg").remove();
                     if( !($("#err_msg").length) )         
                    {
                    $( `<h4 id="err_msg" style="padding:10px; margin:0px">${response.msg}</h4>` ).insertAfter( ".swal2-error" );

                    }

                    $(".edit_error").show();

                    setTimeout(() => {
                        $(".edit_error").hide();
                        $("#err_msg").remove();
                    }, 5000);
          $(".dt-loader").hide();
          $(".send_cat").show();

       
        } else if (response.status == "401") {
          //user error message
          console.log(response);
          $("#edit_modal").hide();
                    $("#for_err").html(response.msg);
                    $("#err_msg").remove();
                     if( !($("#err_msg").length) )         
                    {
                    $( `<h4 id="err_msg" style="padding:10px; margin:0px">${response.msg}</h4>` ).insertAfter( ".swal2-error" );

                    }

                    $(".edit_error").show();

                    setTimeout(() => {
                        $(".edit_error").hide();
                        $("#err_msg").remove();
                    }, 5000);

          $(".dt-loader").hide();
          $(".send_cat").show();
        }
      },
      error: function (response) {
        console.log(response);

      },
    });
  }




  function load_categories_for_pop() {

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
        url: base_url + "/api/pos/categoryList",
        data: {
                "store_id": localStorage.getItem('store_id'),
            "company_id": company_id
        },

        success: function(response) {

            var k = 1;
            if(response.data){
            $.each(response.data, function(i, v) {

                list_whs += '<option value="' + v.cat_id + '">' + v
                    .cat_name + '</option>';

                k++;

            });

            $("#wzh_zz_lzt").append(list_whs);
          }

        },
        error: function() {
            console.log(response);
        }

    });

}

  function edit_cat() {
   let category_name = $("#cat_edit_name").val();
   let company_id = localStorage.getItem("company_id");
   let cat_id = localStorage.getItem("cat_id");
   let category_desc = $("#cat_edit_desc").val();

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
      url: base_url + "/api/pos/editCategory",
      data: {cat_name : category_name, cat_description : category_desc, cat_id: cat_id, company_id : company_id,
            store_id: localStorage.getItem('store_id')},

      success: function (response) {
        if (response.status == "200") {
          console.log(response);

          $("#edit_cat_modal").hide();
          $(".for_edit").show();

          $(`#for_cat_${localStorage.getItem("cat_id")}`).html(
            $("#cat_edit_name").val()
          );

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

     function previewEditFile() {
    const preview = document.querySelector('.preview-edit');
    const file = document.querySelector('#product_edit_image').files[0];
    const reader = new FileReader();
    console.log('file', file)

    reader.addEventListener("load", function () {
      // convert image file to base64 string
      preview.src = reader.result;
      $(".preview-edit").attr("src", reader.result)
    }, false);

    $(".preview-edit-wrapper").show()

    if (file) {
      reader.readAsDataURL(file);
    }
  }

  function save_edit() {
    let product_name = $("#product_edit_name").val();
    let product_id = localStorage.getItem("product_id");
    let company_id = localStorage.getItem("company_id");
    let product_price = $("#product_edit_price").val();
    let product_barcode = $("#product_edit_barcode").val();;
    let product_sku = "";
    let product_image = $(".preview-edit").attr('src').split('base64,')[1];




    $(".edit_foot").hide();
    $(".dt-loader").show();

    // var files;

    // if ($("#product_edit_image")[0].files[0]) {
    //   files = $("#product_edit_image")[0].files[0];
    // } else {
    //   files = "";
    // }

    // var fd = new FormData();
    // var files = `${$('#product_edit_image')[0].files[0]}` == undefined ? "" : `${$('#product_edit_image')[0].files[0]}`;
    // fd.append("product_name", $("#product_edit_name").val());
    // fd.append("company_id", localStorage.getItem("company_id"));
    // fd.append("product_price", $("#product_edit_price").val());
    // fd.append("product_barcode", "");
    // fd.append("product_sku", "");
    // fd.append("product_id", localStorage.getItem("product_id"));
    // fd.append("product_image", files);

        $.ajax({
      type: "POST",
      dataType: "json",
        headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
      // processData: false,
      // contentType: false,
      cache: false,
      // enctype: "multipart/form-data",
      url: base_url + "/api/pos/editProduct",
      data: { product_id: localStorage.getItem("product_id"), 
                store_id: localStorage.getItem('store_id'),
       company_id: company_id, product_name: $("#product_edit_name").val(), product_price: $("#product_edit_price").val(),
       product_barcode: product_barcode, product_sku: "", product_image: product_image, product_description: $("#product_description_edit").val(), product_unit: $("#product_unit_edit").val() },

    // $.ajax({
    //   type: "POST",
    //   dataType: "json",
    //   processData: false,
    //   contentType: false,
    //   cache: false,
    //   enctype: "multipart/form-data",
    //   url: base_url + "/api/pos/editProduct",
    //   data: fd,

      success: function (response) {
        if (response.status == "200") {
          console.log(response);

          $("#edit_modal").hide();
          $(".for_edit").show();

          $(`#for_name_${localStorage.getItem("product_id")}`).html(
            $("#product_edit_name").val()
          );
          $(`#for_price_${localStorage.getItem("product_id")}`).html(
            $("#product_edit_price").val()
          );

          setTimeout(() => {
            $(".for_edit").hide();
          }, 2000);

          location.reload();
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

  function delete_product(product_id) {
    let company_id = localStorage.getItem("company_id");

    $.ajax({
      type: "POST",
      dataType: "json",
        headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
      cache: false,
      url: base_url + "/api/pos/removeProduct",
      data: { company_id: company_id, product_id: product_id,
                store_id: localStorage.getItem('store_id'),
       },

      success: function (response) {
        if (response.status == "200") {
          console.log(response);

          $("#edit_modal").hide();
          $(`.even_${product_id}`).remove();

          $(".for_edit").show();

          setTimeout(() => {
            $(".for_edit").hide();
          }, 2000);

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


  function delete_pro(cat_id) {
    let company_id = localStorage.getItem("company_id");

    $.ajax({
      type: "POST",
      dataType: "json",
        headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
      cache: false,
      url: base_url + "/api/pos/removeProduct",
      data: { company_id: company_id, product_id: cat_id,
                store_id: localStorage.getItem('store_id'),
       },

      success: function (response) {
        if (response.status == "200") {
          console.log(response);

          $("#edit_modal").hide();
          $("#edit_modal").hide();
          $(`.even_${cat_id}`).remove();

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


  function delete_cat(cat_id) {
    let company_id = localStorage.getItem("company_id");

    $.ajax({
      type: "POST",
      dataType: "json",
        headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
      cache: false,
      url: base_url + "/api/pos/removeCategory",
      data: { company_id: company_id, cat_id: cat_id,
                store_id: localStorage.getItem('store_id'),
       },

      success: function (response) {
        if (response.status == "200") {
          console.log(response);

          $("#edit_modal").hide();
          $("#edit_modal").hide();
          $(`.even_${cat_id}`).remove();

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

  // <div class="btn-group mr-2 mb-2" role="group" aria-label="Button group with nested dropdown">
  // <div class="btn-group" role="group">
  //   <button id="btnGroupDrop${v.product_id} " type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  //     Actions
  //   </button>
  //   <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 36px, 0px);">
  //     <a id="product_details_${v.product_id} "  data=${v.product_id}  class="product_details dropdown-item">Details</a>
  //     <a id="product_edit_${v.product_id} " class="product_edit dropdown-item" data=${v.product_id}  data-value="${v.product_name}"
  //      lang="${v.product_price}" data-img="${v.product_image}" class="product_edit dropdown-item" >Edit</a>
  //     <a id="product_delete_${v.product_id} " data-toggle="modal" data-target="#edit_modal" class="edit_delete dropdown-item" data=${v.product_id} } >Delete</a>
  //   </div>
  // </div>
  // </div>

   $(document).on("click", "#filter_products", function() {
        $("#tab_data").hide();
        $(".load_products").show();
        list_products_filter("")
    })

  function list_products_filter(page) {
    let company_id = localStorage.getItem("company_id");
    if (page == "") {
      var page = 1;
    }
    var limit = 10000;

      var min = $("#minimum").val();
      var max = $("#maximum").val();

       console.log(min, max, 'total')


        var listObj = document.getElementById(`select_item`);
        console.log(listObj);
        if($("#select_item").val()){
        var datalist = document.getElementById(listObj.getAttribute("list"));
        var fa = datalist.options.namedItem(listObj.value);
        console.log(fa)

        var product_id = fa.getAttribute('data-value');
        var product = product_id ? product_id : ""
        // alert(item_id)
      }
        var range;
        if(min && max){
          range = `${min}-${max}`
        }
        else if (min && !max || !min && max){
          alert('Input minimum or maximum value')
          return;
        }

    $.ajax({
      type: "GET",
      dataType: "json",
        headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
      cache: false,
      url: base_url + "/api/pos/listProducts",
      data: { company_id: company_id, product_id: product,
                store_id: localStorage.getItem('store_id'),
       price_range:range, limit: limit, page: page },

      success: function (response) {
        if (response.status == "200") {
          console.log(response.data);
          if (response.total_rows > 0) {
            var k = 1;
            var list_whs = "";
       
            $.each(response.data, function (i, v) {
              list_whs += `
             <tr data-row-key="1" class="ant-table-row ant-table-row-level-0 gradeA product_table even_${v.product_id}" role="row" style="text-align:center" data-value="${v.product_name}"
             lang="${v.product_price}" data="${v.product_id}" data-string="${v.product_name}">

              <td class="ant-table-cell ant-table-selection-column">
                  <label class="ant-checkbox-wrapper">
                      <span class="ant-checkbox"><input name="John Brown" type="checkbox" class="ant-checkbox-input" value="" /><span class="ant-checkbox-inner"></span></span>
                  </label>
              </td>
              <td class="ant-table-cell" style="text-align:left" id="for_name_${v.product_id}">${v.product_name}</td>
              <td class="ant-table-cell" style="text-align:left" id="for_price_${v.product_id}">${format_to_money(v.product_price)}</td>
              <td class="ant-table-cell" style="text-align:left">

              <div class="dropdown" style="display:flex; margin: -10px 0px">
            <button type="button" class="btn product_edit" data-string=${v.product_unit} name=${v.product_barcode} data-icon=${v.product_description} id="product_edit_${v.product_id}" data=${v.product_id}  data-value="${v.product_name}"  lang="${v.product_price}" data-img="${v.product_sml_image ? v.product_sml_image : v.product_image}" style="margin-top: 5px; background-color:#038EDC; color:#fff">Edit</button>
            <button type="button" class="btn product_delete" id="product_delete_${v.product_id}" class="edit_delete" data=${v.product_id} margin-top: 5px; background-color:#038EDC; color:#fff">Delete</button>
          
            </div>
       
            </div></td>
           </tr>`;

              k++;
            });


              // <div class="dropdow" style="margin: -10px 0px">
              // <span><button id="btnGroupDrop${v.product_id}" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              // Details</span>
              // <div class="dropdow-content">
              //         <a id="product_edit_${v.product_id}" style="background:#038fde; margin-bottom: 10px;" class="product_edit dropdown-item" data=${v.product_id}  data-value="${v.product_name}"
              //          lang="${v.product_price}" data-img="${v.product_image}" class="product_edit dropdown-item" >Edit</a>
              //         <a id="product_delete_${v.product_id}" style="background:#038fde; margin-bottom: 10px;" data-toggle="modal" data-target="#edit_modal" class="edit_delete dropdown-item" data=${v.product_id} } >Delete</a>
              // </div>

            $("#tab_data").html(list_whs);
            $(".load_products").hide();
            $("#tab_data").show();

          } else {
            $("#tab_data").html(`<td class="ant-table-cell" style="text-align:left">No Record</td>`);
            $(".load_products").hide();
            $("#tab_data").show();
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
            $("#tab_data").html(`<td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left">No Record</td>
              <td class="ant-table-cell" style="text-align:left"></td>`);
            $(".load_products").hide();
            $("#tab_data").show();
          console.log(response);
        } else if (response.status == "401") {
          //user error message
              $("#tab_data").html(`<td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left">Connection Error!</td>
              <td class="ant-table-cell" style="text-align:left"></td>`);
          console.log(response);
          $(".load_products").hide();
            $("#tab_data").show();
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



        $(document).on("click", ".view_product", function() {
            var name = $(this).attr("data-value");
            var data = $(this).attr("data-img");
            var price = $(this).attr("lang");
            var id = $(this).attr("data");
            var unit = $(this).attr("data-string");




            // $('.edit_prods').text('edit_prods');
            // data-string=${v.product_unit} data-icon=${v.product_description}
            var product_unit = $(this).attr("data-string");
            var product_description = $(this).attr("data-icon");

            localStorage.setItem("product_id", id);
            var img = $(this).attr("data-img");
            $("#product_view_name").val(name);
            $("#product_view_price").val(price);
            $("#product_unit_view").val(unit);
            // $(`option[value='${product_unit}']`).attr('selected', 'selected');
            $("#product_description_edit").val(product_description);
            $("#product_view_image").hide()
            $(".preview-view").attr("src", `${data}`);
            $("#view_modal").show();
            show_details(trans_id)

// $(".invoice_history").html(
//   `<div class="" style="width: 50%; box-shadow: 0 4px 8px rgb(0 0 0 / 19%); margin-left: auto;
//     margin-right: auto;">
//         <div
//             style="display: flex;color: white; padding: 20px; justify-content: space-between; background-color: #2065A8; height: 210px;">
//             <div>
//                 <img src="https://empl-dev.site/white_white_resized.png" />
//                 <h4>Invoice</h4>
//             </div>
//             <div style="text-align: right;">
//                 <h4>NaHere Limited</h4>
//                 <p>Business Name</p>
//                 <p>City</p>
//                 <p>Country</p>
//                 <p>Phone number</p>
//             </div>
//         </div>


//         <div style="display: flex; padding: 20px; justify-content: space-between; height: 210px;">
//             <div>
//                 <h2 style="font-size: 16px;font-weight: 700;">Bill to:</h2>
//                 <h4>NaHere Limited</h4>
//                 <h2 style="font-size: 16px;font-weight: 700;">Address:<span></span></h2>
//                 <h4>City<span></span></h4>
//                 <h2 style="font-size: 16px;font-weight: 700;">Country:<span></span></h2>
//                 <h4>Postal:<span></span></h4>
//             </div>
//             <div style="text-align: right;">
//                 <h2 style="font-size: 16px;font-weight: 700;">INVOICE #</h2>
//                 <h4>NaHere Limited</h4>
//                 <h2 style="font-size: 16px;font-weight: 700;">DATE<span></span></h2>
//                 <h4>12/12/2020</h4>
//                 <h2 style="font-size: 16px;font-weight: 700;">INVOICE DUE DATE<span></span></h2>
//                 <h4>12/12/2020</h4>
//             </div>
//         </div>
//         <!-- /.row -->
//         <hr />

//         <div>

//             <table style="
//                 width: 100%;
//                 padding: 10px;
//                 margin-left: auto;
//                 margin-right: auto;">
//                 <tr style="">
//                     <th style="font-size: 14px;font-weight: 700;">ITEMS</th>
//                     <th style="font-size: 14px;font-weight: 700;">DESCRIPTION</th>
//                     <th style="font-size: 14px;font-weight: 700;">QUANTITY</th>
//                     <th style="font-size: 14px;font-weight: 700;">PRICE</th>

//                 </tr>
//                 <tr>
//                     <td>Alfreds Futterkiste</td>
//                     <td>Maria Anders</td>
//                     <td>Germany</td>
//                 </tr>
//                 <tr>
//                     <td>Centro comercial Moctezuma</td>
//                     <td>Francisco Chang</td>
//                     <td>Mexico</td>
//                 </tr>
//                 <tr>
//                     <td>Ernst Handel</td>
//                     <td>Roland Mendel</td>
//                     <td>Austria</td>
//                 </tr>

//             </table>
//         </div>
//         <div
//             style="display: flex;color: white; justify-content: space-between; width: 100%; height: 150px;">
//             <div style="background-color: #BCDFF5; width: 60%;">
//                 <h4 style="color: black;     padding: 10px 10px 0px 10px;">Invoice</h4>
//                 <p style="padding:0px 10px; color: black;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
//             </div>
//             <div style="background-color: #2065A8; width: 40%;">
//                 <div style="text-align: right; ">
//                     <h4 style="padding: 10px 10px 0px 10px;">Total</h4>
//                     <h2 style="padding:0px 10px; font-weight:600">N10,000,000</h2>
//                 </div>
//             </div>
//         </div>


//         <div style=" width: 100%; display: flex;
//         justify-content: center;margin: 50px 0px 50px 0px;">
//             <p style="margin-bottom: 50px;">Powered By <span><img style="width: 8%; " src="https://empl-dev.site/nahere_logo_blue.png" /> </span> NaHere Limited<p><br>
//             <!-- <p>8/10 Ilupeju Bypass, Ilupeju, Lagos</p> -->
//         </div>
//     </div>`



//   )


            // $(".invoice_history").html(
            //         `<div id="invoice-POS" style="width: 100%; text-align:"center">

            //             <div id="mid" style="text-align: center;">
            //                     <div class="info">
            //                         <h2>${name}</h2>
            //                         <div style="display: flex;
            //                         width: 100%;
            //                         margin-left: auto;
            //                         margin:20px;
            //                         margin-right: auto;
            //                         justify-content: center;">
            //                             <span style="align-self:center; margin: 0px 10px;">Product Name : 
            //                             ${name}</span></br>
            //                              <span style="align-self:center">Price :${price}</span></br>
            //                         </div>
            //                     </div>
            //                 </div>

            //                 <div id="mid" style="text-align: center; min-height:0px !important;">
            //                     <div class="info">
            //                         <div style="display: flex;
            //                         width: 100%;
            //                         margin:20px;

            //                         margin-left: auto;
            //                         margin-right: auto;
            //                         justify-content: center;">
            //                             <span style="align-self:center; margin: 0px 10px;">
            //                           Product Unit: ${product_unit}</span></br>
            //                         </div>
                                    
            //                     </div>
            //                 </div>


            //                 <div id="mid" style="text-align: center; min-height:0px !important;">
            //                     <div class="info">
            //                         <div style="display: flex;
            //                         width: 100%;
            //                         margin:20px;
            //                         margin-left: auto;
            //                         margin-right: auto;
            //                         justify-content: center;">
            //                             <span style="align-self:center; margin: 0px 10px;">
            //                           Product Description: ${product_description}</span></br>
            //                     </div>
            //                     </div>
            //                 </div>


            //                 <div id="mid" style="text-align: center; min-height:0px !important;">
            //                     <div class="info">
            //                         <div style="display: flex;
            //                         width: 100%;
            //                         margin:20px;
            //                         margin-left: auto;
            //                         margin-right: auto;
            //                         justify-content: center;">
            //                             <span style="align-self:center; margin: 0px 10px;">
            //                           Product Image: <br><img src="${img}" /></span></br>
            //                         </div>
            //                     </div>
            //                 </div>

              
            //             </div>`
                // );

            $(".product_show").show();

        });

  function list_products(page) {
    let company_id = localStorage.getItem("company_id");
    $("#tab_data").hide();
        $(".load_products").show();
    if (page == "") {
      var page = 1;
    }
    var limit = 10;


    $.ajax({
      type: "GET",
      dataType: "json",
        headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
      cache: false,
      url: base_url + "/api/pos/listProducts",
      data: { company_id: company_id, 
                store_id: localStorage.getItem('store_id'),
       product_id:"", price_range:"", limit: limit, page: page },

      success: function (response) {
        if (response.status == "200") {
          console.log(response.data);
          if (response.total_rows > 0) {
            var k = 1;
            var list_whs = "";
       
            $.each(response.data, function (i, v) {
              list_whs += `
             <tr data-row-key="1" class="ant-table-row ant-table-row-level-0 gradeA product_table even_${v.product_id}" role="row" style="text-align:center" data-value="${v.product_name}"
             lang="${v.product_price}" data="${v.product_id}" data-string="${v.product_name}">

              <td class="ant-table-cell" style="text-align:left" id="for_sn_${v.product_id}">${v.sn}</td>
              <td class="ant-table-cell" style="text-align:left" id="for_name_${v.product_id}">${v.product_name}</td>
              <td class="ant-table-cell" style="text-align:left" id="for_price_${v.product_id}">${format_to_money(v.product_price)}</td>
             
              <td class="ant-table-cell" style="text-align:left;">
             <span id="product_view_${v.product_id}" class="gx-badge gx-text-white view_product" data-string="${v.product_unit}" data-icon="${v.product_description}"  data="${v.product_id}"  data-value="${v.product_name}"  lang="${v.product_price}" data-img="${v.product_image}" style=" display:none; background-color: #038EDC; cursor:pointer">Details</span>
             <span id="product_edit_${v.product_id}" class="gx-badge gx-text-white product_edit" data-bar=${v.product_barcode} data-string="${v.product_unit_id}" data-icon="${v.product_description}"  data="${v.product_id}"  data-value="${v.product_name}"  lang="${v.product_price}" data-img="${v.product_sml_image ? v.product_sml_image : v.product_image}" style="display:none; background-color: #038EDC; cursor:pointer">Edit</span>
             <span class="gx-badge gx-text-white product_delete" id="product_edit_${v.product_id}" data=${v.product_id}  data-value="${v.product_name}"  lang="${v.product_price}" data-img="${v.product_sml_image ? v.product_sml_image : v.product_image}" style="display:none; background-color: #e58620; cursor:pointer">Delete</span>
              ${$("#package_status").html() == "yes" && v.product_barcode ?`<span class="gx-badge gx-text-white product_barc" id="product_bar_${v.product_id}" class="product_bar" data="${v.product_barcode}"style="background-color: #1DCE8E;  cursor:pointer">Print Barcode</span>` : ''}

            </td>

            </div>
           </tr>`;

              k++;
            });
 // <div class="dropdown" style="display:flex; margin: -10px 0px">
            
 //            <button type="button" class="btn product_edit" id="product_edit_${v.product_id}" data=${v.product_id}  data-value="${v.product_name}"  lang="${v.product_price}" data-img="${v.product_image}" style="margin-top: 5px; background-color:#038EDC; color:#fff">Edit</button>
 //            <button type="button" class="btn product_delete" id="product_delete_${v.product_id}" class="edit_delete" data=${v.product_id}  style="margin-top: 5px; background-color:#038EDC; color:#fff">Delete</button>
 //            ${v.product_barcode ? `<button type="button" class="btn product_barc" id="product_bar_${v.product_id}" class="product_bar" data="${v.product_barcode}"  style="margin-top: 5px; background-color:#038EDC; color:#fff">Print Barcode</button>` : "" }


            
 //            </div>
       
              // <div class="dropdow" style="margin: -10px 0px">
              // <span><button id="btnGroupDrop${v.product_id}" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              // Details</span>
              // <div class="dropdow-content">
              //         <a id="product_edit_${v.product_id}" style="background:#038fde; margin-bottom: 10px;" class="product_edit dropdown-item" data=${v.product_id}  data-value="${v.product_name}"
              //          lang="${v.product_price}" data-img="${v.product_image}" class="product_edit dropdown-item" >Edit</a>
              //         <a id="product_delete_${v.product_id}" style="background:#038fde; margin-bottom: 10px;" data-toggle="modal" data-target="#edit_modal" class="edit_delete dropdown-item" data=${v.product_id} } >Delete</a>
              // </div>

               $('#pagination_products').twbsPagination({
              totalPages: Math.ceil(response.total_rows / limit),
              visiblePages: 10,
              onPageClick: function(event, page) {
                list_products(page);
              }
          });
             
            $("#tab_data").html(list_whs);
            $(".load_products").hide();
              $("#tab_data").show();
          } else {
            $(".connection").html('No Record')
            $(".load_products").hide();

            $(".for_err").show()
            // $("#tab_data").html(`<td class="ant-table-cell" style="text-align:left">No Record</td>`);
          }
           
        } else if (response.status == "400") {
          // coder error message
          $(".connection").html('No Record')
            $(".load_products").hide();

          $(".for_err").show()
              // $("#tab_data").html(`<td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left">Connection Error!</td>
              // <td class="ant-table-cell" style="text-align:left"></td>`);
        } else if (response.status == "401") {
          //user error message
          $(".connection").html('Connection Error')
            $(".load_products").hide();

          $(".for_err").show()
              // $("#tab_data").html(`<td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left">Connection Error!</td>
              // <td class="ant-table-cell" style="text-align:left"></td>`);
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
      headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
    cache: false,
    url: base_url + "/api/pos/categoryList",
    data: { company_id: company_id, 
          store_id: localStorage.getItem('store_id')
    },
     // limit: limit, page: page 

    success: function (response) {
      if (response.status == "200") {
        console.log(response.data);
        if (response.data.length) {
          var k = 1;
          var list_whs = "";

          $.each(response.data, function (i, v) {
            list_whs += `
           <tr data-row-key="1" class="ant-table-row ant-table-row-level-0 gradeA product_table even_${v.cat_id}" role="row" style="text-align:center" data-value="${v.product_name}"
           data="${v.cat_id}" data-string="${v.cat_name}">

            <td class="ant-table-cell" style="text-align:left" id="for_cat_id_${v.cat_id}">${v.sn}</td>
            <td class="ant-table-cell" style="text-align:left" id="for_cat_${v.cat_id}">${v.cat_name}</td>
            <td class="ant-table-cell" style="text-align:left">
            <div class="dropdown" style="display:flex; margin: -10px 0px">
            <button type="button" class="btn cat_edit" id="cat_edit_${v.cat_id}" data=${v.cat_id}  data-value="${v.cat_name}" style="margin-top: 10px; background-color:#038EDC; color:#fff">Edit</button>
            <button type="button" class="btn delete_cat" id="product_delete_${v.cat_id}" data=${v.cat_id}  style="margin-top: 10px; background-color:#038EDC; color:#fff">Delete</button>
            </div>
       
          </td>
         </tr>`;

            k++;
          });
          $("#cat_data").html(list_whs);
          $(".load_pro").hide();
          $("#cat_data").show();
                    }
                    $('#pagination_category').twbsPagination({
                        totalPages: Math.ceil(response.total_rows / limit),
                        visiblePages: 10,
                        onPageClick: function(event, page) {
                            list_categories(page);
                        }
                    });

        }  
        else {
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

         $("#cat_data").append(`<tr data-row-key="1" class="ant-table-row ant-table-row-level-0 gradeA product_table " role="row" style="text-align:center"
          ><td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left">No Record</td><td class="ant-table-cell" style="text-align:left"></td></tr>`);
        console.log(response);
        $("#cat_data").show();

      } if (response.status == "401") {
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
// });


// });

// });
