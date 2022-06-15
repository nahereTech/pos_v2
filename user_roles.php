<?php
include("_common/header.php");
?>

<!-- Site Content Wrapper -->
<div class="dt-content-wrapper">

    <!-- Site Content -->
    <div class="dt-content">

        <div class="dt-page__header">
            <h1 class="dt-page__title" style=""> Permissions </h1>
        </div>


        <div class="ant-row">

            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-24">
                <div class="ant-card ant-card-bordered">
                    <div class="ant-card-head">
                        <div class="ant-card-head-wrapper"><div class="ant-card-head-title title_name"></div></div>
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
                                                            <th class="ant-table-cell ant-table-selection-column" style="width: 5%">
                                                                <!-- <div class="ant-table-selection">
                                                                    <label class="ant-checkbox-wrapper">
                                                                        <span class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input" value="" /><span class="ant-checkbox-inner"></span></span>
                                                                    </label>
                                                                </div> -->
                                                            </th>
                                                            <th class="ant-table-cell" style="width: 30%">Stores</th>
                                                            <th class="ant-table-cell" style="width: 30%">Roles</th>
                                                            <th class="ant-table-cell" style="width: 40%">Activities</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="ant-table-tbody" id="perm_data">
                                                        <!-- <tr data-row-key="1" class="ant-table-row ant-table-row-level-0">
                                                            <td class="ant-table-cell ant-table-selection-column" valign="top">
                                                                <label class="ant-checkbox-wrapper">
                                                                <input type="checkbox" name="chk_prfl" class="chk_prfl" id="chk_prfl_2" lang="5-15-20-19" dir="chkw_91" checked="">
                                                                </label>
                                                            </td>
                                                            <td class="ant-table-cell" valign="top"><span class="gx-link">Administrator</span></td>
                                                            <td class="ant-table-cell">
                                                                Settings<br>Add Users<br>Create Stores<br>Create Units<br>View Dashboard
                                                            </td>
                                                            
                                                        </tr>
                                                        
                                                        <tr data-row-key="4" class="ant-table-row ant-table-row-level-0">
                                                            <td class="ant-table-cell ant-table-selection-column">
                                                                <label class="ant-checkbox-wrapper ant-checkbox-wrapper-disabled">
                                                                    <span class="ant-checkbox ant-checkbox-disabled">
                                                                        <input name="Disabled User" type="checkbox" disabled="" class="ant-checkbox-input" value="" /><span class="ant-checkbox-inner"></span>
                                                                    </span>
                                                                </label>
                                                            </td>
                                                            <td class="ant-table-cell"><span class="gx-link">Cashier</span></td>
                                                            <td class="ant-table-cell">
                                                                Sales<br>Sales History
                                                            </td>
                                                            
                                                        </tr>

                                                        <tr data-row-key="4" class="ant-table-row ant-table-row-level-0">
                                                            <td class="ant-table-cell ant-table-selection-column">
                                                                <label class="ant-checkbox-wrapper ant-checkbox-wrapper-disabled">
                                                                    <span class="ant-checkbox ant-checkbox-disabled">
                                                                        <input name="Disabled User" type="checkbox" disabled="" class="ant-checkbox-input" value="" /><span class="ant-checkbox-inner"></span>
                                                                    </span>
                                                                </label>
                                                            </td>
                                                            <td class="ant-table-cell"><span class="gx-link">Monitor</span></td>
                                                            <td class="ant-table-cell">View Dashboard</td>
                                                            
                                                        </tr> -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="load_pro" style="display:flex; justify-content: center; margin-top: 10px; ">
                                        <span class="ant-btn-loading-icon dt_loader_details"><span role="img" aria-label="loading" class="anticon anticon-loading"><svg viewBox="0 0 1024 1024" focusable="false" class="anticon-spin" data-icon="loading" width="2em" height="2em" fill="currentColor" aria-hidden="true">
                                                    <path d="M988 548c-19.9 0-36-16.1-36-36 0-59.4-11.6-117-34.6-171.3a440.45 440.45 0 00-94.3-139.9 437.71 437.71 0 00-139.9-94.3C629 83.6 571.4 72 512 72c-19.9 0-36-16.1-36-36s16.1-36 36-36c69.1 0 136.2 13.5 199.3 40.3C772.3 66 827 103 874 150c47 47 83.9 101.8 109.7 162.7 26.7 63.1 40.2 130.2 40.2 199.3.1 19.9-16 36-35.9 36z">
                                                    </path>
                                                </svg></span></span>
                                    </div>

                                    
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>




    </div>
    <!-- /site content -->

</div>
<!-- /site content wrapper -->

<script type="text/javascript" src="js/dashboard.js?v=70"></script>
<script>

$(document).ready(function() {
    const queryString = window.location.search;
console.log(queryString);
    const urlParams = new URLSearchParams(queryString);
    if(!(urlParams.get('id'))){
        // alert('unathorized')
        window.location.href= window.location.origin + "/pos"
        return 
    }else{

    list_of_module_roles()

    function list_of_module_roles(){

var company_id = localStorage.getItem('company_id');
var user_id = urlParams.get('id');

$('.load_pro').hide();
$('#main_display').show(); 

$.ajax({
      
  type: "GET",
  dataType: "json",
  headers: {'Authorization':localStorage.getItem('token') },

  url: base_url + "/api/pos/fetch_permissions_settings",
  data: { "module_id" : 15 , "company_id" : company_id , 
                    "store_id": localStorage.getItem("store_id"),
   "user_id" : user_id},
  timeout: 60000,

  success: function(response) {

    $('#page_loader').hide();
    $('#main_display').show();    

    console.log(response);

    var k = 1;
    var tr_line = "";
      
    if (response.status == '200'){

      $('.title_name').html('<span>'+response.fullname+'\'s </span>Roles')
      
      //for each warehouse
      var store_id;
      $.each(response.data, function (i, v) {

        // if(v.warehouse_access == "yes"){
        //   var checkit = "checked";
        //   var disable_checkboxrole = "disabled=disabled";
        // }else{
        //   var checkit = "";
        //   var disable_checkboxrole = "disabled=disabled";
        // }
        // console.log(response['data'][i]['role_details'][i]['role_id']);
        store_id = v.store_id

        tr_line += '<tr id="role_tr_'+store_id+'">';
        tr_line += '<td class="ant-table-cell" valign="top">'+k+'<!--<input type="checkbox" name="chk_ware" class="chk_ware" id="chw_'+store_id+'">--></td>';

        tr_line += '<td class="ant-table-cell" valign="top"><span class="gx-link">'+response.data[i]['store_name']+'</span></td>';
        
        //column that shows list of profiles
        var group_roles = "";
        tr_line += '<td class="ant-table-cell" valign="top">';
        $.each(response.data[i]['profile_details'], function (i, v) {

            if(v.has_access == "yes"){
              var checkrole = "checked";
            }else if(v.has_access == "no"){
              var checkrole = "";
            }


            if(v.name == "Admin"){
              var disable_checkbox = "disabled=disabled";
            }else{
              var disable_checkbox = "";
            }
                    
            tr_line += '<input type="checkbox" name="chk_prfl" class="chk_prfl" id="chk_prfl_'+v.profile_id+'" lang="'+v.roles_id+'" dir="chkw_'+store_id+'" '+checkrole+' '+disable_checkbox+'>&nbsp;'+v.name+'<br>';

            //for marking roles
            if(checkrole == "checked"){
              group_roles += v.roles_id+"-";
            }
            

        });
        tr_line += '</td>';

        var uhuh = group_roles.slice(0, -1);
        group_roles = ""; //empty this each time a new warehouse row is ran through
        
        
        var strArray = uhuh.split("-");
        tr_line += '<td class="ant-table-cell" valign="top">';
        $.each(response.data[i]['role_details'], function (i, v) {

            if(strArray.includes(v.role_id)){
              var checkrole = "checked";
            }else{
              var checkrole = "";
            }
                            
            tr_line += '<input type="checkbox" name="chk_role" disabled="disabled" class="chk_role" id="chkb_'+v.role_id+'" dir="chkw_'+store_id+'" '+checkrole+'>&nbsp;'+v.role_name+' &nbsp; - &nbsp;'+v.comment+'<br>';

        }); 
        tr_line += '</td>';


      

        tr_line += '</tr>';

        tr_line += '<tr id="loading_chng_'+store_id+'" style="display: none"><td colspan="4"><i class="fa fa-spinner fa-spin fa-fw fa-2x" style="display: ;" ></i></td></tr>';

        k++;                   
        
      });

      $("#perm_data").html(tr_line);
    $('#page_loader').hide();

      $("#loading").hide();
    $('.load_pro').hide();


    }else if(response.status == '400'){
          
        // $("#permData").html('<tr id="loading"><td colspan="3">Error fetching data. Please refresh page</td></tr>');

          $('#employee_data_display').show();
          $('#main_display').hide();
    $('#page_loader').hide();
    $('.load_pro').hide();



    }else if(response.status == "401"){
        
        // $("#permData").html('<tr id="loading"><td colspan="3">Error fetching data. Please refresh page</td></tr>');
        $("#error_txt_spc").html("You need to create a store first before accessing this page.");
        $('#employee_data_display').show();
        $('#main_display').hide();
    $('#page_loader').hide();

    }

    $("#loading").hide();
    $('#page_loader').hide();
    $('.load_pro').hide();




  },

  error: function(response){
    
    $('#page_loader').hide();
    $('#main_display').show();

    // $("#permData").html('<tr id="loading"><td colspan="3">Error fetching data. Please refresh page</td></tr>');

    $("#loading").hide();
    $('.load_pro').hide();



  }        

});
}


$(document).on('click', '.chk_prfl', function(e){
                // var ans = confirm("Are you sure you want to give the user this profile?");
                var profile_id = $(this).attr("id").replace(/chk_prfl_/,'');
                var store_id = $(this).attr("dir").replace(/chkw_/,'');
                var roles_list = $(this).attr("lang");

                // if(ans == true){

                    if($(this).prop('checked') == true){
                        // alert('Checks');
                        var a_r_action = "add";
                        
                     }else if($(this).prop('checked') == false) {
                        // alert('unChecks');
                        var a_r_action = "remove";
                      
                     }

                    // bulk_add_remove_role(profile_id, warehouse_id, a_r_action, roles_list);
                    add_or_remove_profile(profile_id, store_id, a_r_action, roles_list);
                    
                    
                    
                // }else if(ans == false){
                //   // alert(roles_list);
                //   e.preventDefault();
                //   return false;
                // }

              });

function add_or_remove_profile(profile_id, store_id, a_r_action, roles_list){

var company_id = localStorage.getItem('company_id');
var user_id = $.urlParam('id');
var roles_list_array = roles_list.split("-");

$("#loading_chng_"+store_id).show();
$("#role_tr_"+store_id).hide();

$.ajax({
      
  type: "POST",
  dataType: "json",
  headers: {'Authorization':localStorage.getItem('token') },
  
  url: base_url + "/api/pos/add_or_remove_permission_profile",
  data: { module_id : 15 , company_id : company_id , user_id : user_id , profile_id : profile_id , store_id : store_id, add_or_remove : a_r_action },
  timeout: 60000,

  success: function(response) {

    if (response.status == '200'){

      // if it is to add roles
      if(a_r_action == "add"){
        
        $(roles_list_array).each(function(i,v){
          $("#chkb_"+v).attr("checked", true);
        });
        location.reload()

        // if(localStorage.getItem('warehouse_id') == ""){

        //   localStorage.setItem('warehouse_id', warehouse_id);

        // }


      }else{ // if it is to remove role

        $(roles_list_array).each(function(i,v){
          $("#chkb_"+v).attr("checked", false);
        });
        location.reload()
      }

      $("#loading_chng_"+warehouse_id).hide();
      $("#role_tr_"+warehouse_id).show();


    }else if(response.status == '400'){

        // if(a_r_action == "add"){
        //   $('#chkb_'+profile_id).attr('checked', false); // Checks it
        // }else{
        //   $('#chkb_'+profile_id).attr('checked', true); // UnChecks it
        // }
        
        $("#loading_chng_"+warehouse_id).hide();
        $("#role_tr_"+warehouse_id).show();

        alert("error updating permission");

    }

  },

  error: function(response){

    // if(a_r_action == "add"){
    //   $('#chkb_'+profile_id).attr('checked', false); // Checks it
    // }else{
    //   $('#chkb_'+profile_id).attr('checked', true); // UnChecks it
    // }

    alert("Error Updating role");
    $("#loading_chng_"+warehouse_id).hide();
    $("#role_tr_"+warehouse_id).show();

  }         

});
}



$.urlParam = function(name){

  var results = new RegExp('[\?&]' + name + '=([^]*)').exec(window.location.href);
  if (results==null){
     return null;
  }
  else{
     return results[1] || 0;
  }
}
    }
})
</script>
<?php
include("_common/footer.php");
?>