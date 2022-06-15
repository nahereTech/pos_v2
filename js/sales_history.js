// var base_url = window.location.origin;

// $( document ).ready(function() {


//  list_sales_history("")

//   function list_sales_history(page) {
//     let company_id = localStorage.getItem("company_id");
//     let store_id = localStorage.getItem("store_id");
//     let cashier_id = localStorage.getItem("cashier_id");
//     // let date_range = localStorage.getItem("company_id");

//     if (page == "") {
//       var page = 1;
//     }
//     var limit = 20;
  
//     $.ajax({
//       type: "GET",
//       dataType: "json",
//       cache: false,
//       url: base_url + "/api/pos/transactionList",
//       data: { "company_id": company_id, "store_id": "", "date_range": "", "cashier_id": "",
//        "limit": limit, "page": page 
//     },
  
//       success: function (response) {
//         if (response.status == "200") {
//           console.log(response.data);
//           if (response.data.transaction_list.length > 0) {
//             var k = 1;
//             var list_whs = "";
  
//             $.each(response.data.transaction_list, function (i, v) {
//               list_whs += `
//              <tr data-row-key="1" class="ant-table-row ant-table-row-level-0 gradeA product_table even_${v.role_id}" role="row" style="text-align:center" data-value="${v.product_name}"
//              data="${v.role_id}" >
  
//               <td class="ant-table-cell ant-table-selection-column">
//                   <label class="ant-checkbox-wrapper">
//                       <span class="ant-checkbox"><input name="John Brown" type="checkbox" class="ant-checkbox-input" value="" /><span class="ant-checkbox-inner"></span></span>
//                   </label>
//               </td>
//               <td class="ant-table-cell" style="text-align:left" id="for_his_${v.role_id}">${v.customer_name}</td>
//               <td class="ant-table-cell" style="text-align:left" id="for_his_${v.role_id}">${v.cash_tendered}</td>
//               <td><a><span class="label label-success">${v.payment_status}</span></a></td>
//               <td class="ant-table-cell" style="text-align:left" id="for_his_${v.role_id}">${v.sales_person}</td>
//               <td class="ant-table-cell" style="text-align:left" id="for_his_${v.role_id}">${v.total_transaction}</td>
//               <td class="ant-table-cell" style="text-align:left">
//               <div class="dropdown" style="display:flex; margin: -10px 0px">
//               <button type="button" class="btn delete_cat" id="product_delete_${v.cat_id}" data=${v.cat_id}  style="margin-top: 10px; background-color:#038EDC; color:#fff">Details</button>
//               <button type="button" class="btn cat_edit" id="cat_edit_${v.role_id}" data=${v.role_id} style="margin-top: 10px; background-color:#038EDC; color:#fff">Edit</button>
//               </div>
         
//             </td>
//            </tr>`;
  
//               k++;
//             });
  
//             $("#sales_history").append(list_whs);
//           }  else {
//             $("#sales_history").append(`<tr data-row-key="1" class="ant-table-row ant-table-row-level-0 gradeA product_table " role="row" style="text-align:center"
//             ><td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left">No Record</td><td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left"></td></tr>`);
//           }
//           //   $('#pagination').twbsPagination({
//           //     totalPages: Math.ceil(response.total_rows / limit),
//           //     visiblePages: 10,
//           //     onPageClick: function(event, page) {
//           //       submit_product(page);
//           //     }
//           // });
//         } else if (response.status == "400") {
//           // coder error message
//            $("#sales_history").append(`<tr data-row-key="1" class="ant-table-row ant-table-row-level-0 gradeA product_table " role="row" style="text-align:center"
//             ><td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left">No Record</td><td class="ant-table-cell" style="text-align:left"></td><td class="ant-table-cell" style="text-align:left"></td></tr>`);
//           console.log(response);
//         } else if (response.status == "401") {
//           //user error message
//           console.log(response);
//         }
//       },
//       error: function (response) {
//         console.log(response);
  
//         // $('#submit_code').show();
//         // $('#load2').hide();
//         // $('#error-code').show();
//         // $('#error-code').html("Connection Error.");
//       },
//     });
//   }
// });