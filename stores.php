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
                                                            
                                                            </th>
                                                            <th class="ant-table-cell" style="width: 20%"></th>
                                                            <th class="ant-table-cell" style="width: 40%">Stores</th>
                                                            <th class="ant-table-cell" style="width: 40%">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="ant-table-tbody permi_data" id="perm_data">
                                                        
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

<script>

$(document).ready(function() {


list_of_company_store()

function list_of_company_store(){
            var pathArray = window.location.pathname.split( '/' );
            var acct_user_id = $.urlParam('id');
            var company_id = localStorage.getItem('company_id');

            

            $("#loading").show();
            $("#warehouseData").html('');

            $.ajax({
                  
              type: "POST",
              dataType: "json",
              
                url: base_url + "/api/pos/storeList",

              data: { 
                    "store_id": localStorage.getItem("store_id"),
                "company_id": company_id},
              timeout: 60000,

              success: function(response) {
                  
                  console.log(response);
                  $('#loading').hide();
                  var strTable = "";
                  
                  if (response.status == '200'){
                    if(response.data.length == 1){
                    localStorage.setItem('store_id', response['data'][0]['store_id']);
                    localStorage.setItem('store_name', response['data'][0]['store_name']);
                    }


                      if(response.data.length > 0){

                          var k = 1;
                          $.each(response['data'], function (i, v) {
                              // strTable += '<td width="8%" valign="top"><div class="profile_pic"><img src="'+base_url+'/erp/assets/admin_template/production/images/img.jpg" alt="..." width="50"></div></td>';

                              function status(string) {
                                  return string.charAt(0).toUpperCase() + string.slice(1);
                              }
                              strTable += '<tr id="row_'+response['data'][i]['store_id']+'">';
                              
                              strTable += '<td width="75%" valign="top">'+status(response['data'][i]['store_name'])+'</td>';
                              
                              strTable += '<td valign="top">'

                             

                              strTable += '<a class="btn btn-success" href="/store/user_roles?id='+response['data'][i]['store_id']+'&user_id='+acct_user_id+'" ><span style="color:white">Enter Store</span></a></td>'; 

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


                     
                                 
                      $("#warehouseData").html(strTable);
                      $("#warehouseData").show();

                  }
                  // else if(response.status == '400'){
                      
                  //     $('#loading').hide();
                  //     strTable += '<tr>';
                  //     strTable += '<td colspan="2">No result</td>';
                  //     strTable += '</tr>';

                      
                  //    $("#permData").html(strTable);
                  //     $("#permData").show();
                      

                  // }else if(response.status == "401"){
                  //     //missing parameters
                  //     var strTable = "";
                  //     $('#loading').hide();
                  //     strTable += '<tr>';
                  //     strTable += '<td colspan="2">'+response.msg+'</td>';
                  //     strTable += '</tr>';

                      
                  //    $("#permData").html(strTable);
                  //     $("#permData").show();

                  // }


                  $("#loading").hide();
              
              },

              error: function(response){
                

                var strTable = "";
                $('#loading').hide();
                // alert(response.msg);
                strTable += '<tr>';
                strTable += '<td colspan="2"><strong class="text-danger">Connection error!</strong></td>';
                strTable += '</tr>';

                
               $("#permData").html(strTable);
                      $("#permData").show();
                $("#loading").hide();

              }        

          });
          }


    // list_of_stores()
    function list_of_stores(){

var company_id = localStorage.getItem('company_id');
var user_id = urlParams.get('id');

  var pathArray = window.location.pathname.split( '/' );
  var acct_user_id = $.urlParam('id');

$('.load_pro').hide();
$('#main_display').show(); 

$.ajax({
      
  type: "GET",
  dataType: "json",
  headers: {'Authorization':localStorage.getItem('token') },

  url: base_url + "/api/pos/storeList",
  data: {
    "store_id": localStorage.getItem("store_id"),
   "company_id" : company_id},
  timeout: 60000,

  success: function(response) {

    $('#page_loader').hide();
    $('#main_display').show();    

    console.log(response);

    var k = 1;
    var tr_line = "";
      
     if (response.status == '200'){
                    if(response.data.length == 1){
                    localStorage.setItem('store_id', response['data'][0]['store_id']);
                    localStorage.setItem('store_name', response['data'][0]['store_name']);
                    }


                      if(response.data.length > 0){

                          var k = 1;
                          $.each(response['data'], function (i, v) {
                              // strTable += '<td width="8%" valign="top"><div class="profile_pic"><img src="'+base_url+'/erp/assets/admin_template/production/images/img.jpg" alt="..." width="50"></div></td>';

                              function status(string) {
                                  return string.charAt(0).toUpperCase() + string.slice(1);
                              }
                              strTable += '<tr id="row_'+response['data'][i]['store_id']+'">';
                              
                              strTable += '<td width="75%" valign="top">'+status(response['data'][i]['store_name'])+'</td>';
                              
                              strTable += '<td valign="top">'

                             

                              strTable += '<a class="btn btn-success" href="/store/user_roles?id='+response['data'][i]['store_id']+'&user_id='+acct_user_id+'" ><span style="color:white">Enter Store</span></a></td>'; 

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


                     
                                 
                      $("#permData").html(strTable);
                      $("#permData").show();

    else if(response.status == '400'){
          
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



</script>
<?php
include("_common/footer.php");
?>