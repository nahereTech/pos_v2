$(document).ready(function() {

    //this time interval check if the user roles have been fetched before running anything on this page
    // var myVar2 = setInterval(

    // function(){

    //     if($("#does_user_have_roles").html() != ""){

    //         myStopFunction();

    //         user_page_access();
            
            
    //       }else{
    //         console.log("No profile");
    //       }
           
    //     },
    // 1000
    // );

    // function myStopFunction() {
    //     clearInterval(myVar2);
    // }

 $("#main_display_loader_page").hide();
 $("#main_display").show();
 $("#ldnuy").hide();
	list_of_profiles('');
	$(document).on('click', '.del_profile', function () {

        var id = $(this).attr("id").replace(/del_profile_/, '');

        if (confirm("Are you sure you want to delete")) {
            delete_profile(id);
        }else{
            return false;
        }
    
    });
});

// function user_page_access(){

//   var role_list = $("#does_user_have_roles").html();
//   if (role_list.indexOf("-53-") >= 0) {
    
//     //Settings
//     $("#main_display_loader_page").hide();
//     $("#main_display").show();
//     list_of_profiles('');

//   }else{
//     $("#loader_mssg").html("You do not have access to this page");
//     $("#ldnuy").hide();
//     // $("#modal_no_access").modal('show');

//   }

// }

function delete_profile(id){

	var company_id = localStorage.getItem('company_id');

    $.ajax({

        type: "POST",
        dataType: "json",
        url: base_url+"/api/accesscontrol/delete_profile",
        headers: {
            'Authorization':localStorage.getItem('token'),
        },
        data: { 
        	"profile_id": id,
        	"company_id": company_id,
            "store_id": localStorage.getItem('store_id'),

        },
        timeout: 60000, // sets timeout to one minute

        error: function (response) {
            alert("Error Deleting");
        },

        success: function (response) {

            if (response.data.status == '200') {
                $('#row_'+id).remove();
            } else {
                alert("Error deleting post");
            }

        }

    });
}

function list_of_profiles(page){

	var company_id = localStorage.getItem('company_id');
    if (page == "") {
        var page = 1;
    }
    var limit = 10;

    var module_id = 15;

    $("#loading").show();
    $("#incomingData").html('');

    $("html, body").animate({ scrollTop: 0 }, "slow");

    
    $.ajax({

        type: "GET",
        dataType: "json",
        headers: {
            'Authorization':localStorage.getItem('token'),
        },
        url: base_url+"/api/accesscontrol/get_company_profile_in_module",
        data: {
            "company_id": company_id,
            "module_id": module_id,
            "store_id": localStorage.getItem('store_id'),
            "page": page,
            "limit": limit
        },
        timeout: 60000,

        success: function(response) {

            var strTable = "";

            if (response.status == '200') {

                if (response.data.length > 0) {

                    var k = 1;
                    $.each(response.data, function(i, v) {

                    	if(v.is_editable == "yes"){
                    		var editmatr = `<a href="editpermissionprofile?id=`+v.profile_id+`"><span class="gx-badge gx-text-white history_details_dues" style="background-color: rgb(229, 134, 32); cursor: pointer;">Edit</span></a>&nbsp;&nbsp; <a class="delete_employee" style="cursor: pointer;" id="emp_` +v.id +`"><span class="gx-badge gx-text-white del_profile" id="del_profile_`+v.profile_id+`" style="background-color: indianred; cursor: pointer;">Delete</span></a>`;
                    	}else{
                    		var editmatr = "";
                    	}


                        strTable += '<tr id="row_' + v.profile_id + '">';                       
                        strTable += '<td>' + k + '</td>';
                        strTable += '<td><b>' + v.profile_name + '</b><br><i>'+v.profile_description+'</i></td>';
                        strTable += '<td>'+editmatr+'</td>';


                        k++;

                    });

                } else {

                    strTable = '<tr><td colspan="5">' + response.data.msg + '</td></tr>';

                }

                // $('#pagination').twbsPagination({
                //     totalPages: Math.ceil(response.data.total_rows / limit),
                //     visiblePages: 10,
                //     onPageClick: function(event, page) {
                //         list_of_clients(page);
                //     }
                // });

                $("#incomingData").html(strTable);
                $("#incomingData").show();
                $('#loading').hide();

            } else if (response.data <= 0) {

            	$('#loading').hide();

                strTable = '<tr><td colspan="3">' + response.data.msg + '</td></tr>';

                $("#incomingData").html(strTable);
                $("#incomingData").show();

            } else if (response.status == '400') {

            	var strTable = "";
                $('#loading').hide();
                // alert(response.msg);
                strTable += '<tr>';
                strTable += '<td colspan="3">' + response.data.msg + '</td>';
                strTable += '</tr>';

                $("#incomingData").html(strTable);
                $("#incomingData").show();

            }

        },

        error: function(response) {
        	var strTable = "";
            $('#loading').hide();
            // alert(response.msg);
            strTable += '<tr>';
            strTable += '<td colspan="3"><strong class="text-danger">Connection error</strong></td>';
            strTable += '</tr>';

            $("#incomingData").html(strTable);
            $("#incomingData").show();

        }

    });
}