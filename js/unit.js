var base_url = window.location.origin;

$( document ).ready(function() {


  list_shop_products("")


function list_shop_products(page){

  let company_id = localStorage.getItem('company_id');
  if (page == "") {
    var page = 1;
  }
   var limit = 20;


  $.ajax({

    type: "GET",
    dataType: "json",
    cache: false,
    url: base_url+"/api/pos/listProducts",
    data: {"company_id": company_id, "limit": limit, "page":page},
  
    success: function(response) {

      if (response.status == '200') {
        console.log(response.data)
        if(response.total_rows > 0){

          var k = 1;
          var list_whs;
          $.each(response.data, function(i, v) {

              list_whs += `<div class="col-md-3">

              <div class="card" style="width: 100%; ">
  
                  <img class="card-img-top"
                      src="https://www.meijer.com/content/dam/meijer/product/0073/75/3919/42/0073753919421_1_A1C1_0600.png"
                      style="width: 70%;
                      margin-left: auto;
                      margin-right: auto;" alt="Balancing">
  
                  <div class="card-body" style="margin-top: 10px;
                      padding: 0.1rem;">
  
                      <div style="display: grid; justify-content: center; " class="card-text">
                          <span class="d-block" style="margin-left: auto; margin-right: auto;">${v.product_name}</span>
                          <span class="badge bg-light-green text-white text-uppercase mb-2">N${v.product_price}</span>
                      </div>
  
                  </div>
  
              </div>
          </div>` ;

              k++;

          });

          $("#tab_data").append(list_whs);

          
        

        }

      //   $('#pagination').twbsPagination({
      //     totalPages: Math.ceil(response.total_rows / limit),
      //     visiblePages: 10,
      //     onPageClick: function(event, page) {
      //       submit_product(page);
      //     }
      // });


      }else if(response.status == '400'){ // coder error message
        console.log(response)
      
   

      }else if(response.status == '401'){ //user error message
        console.log(response)


      }

    },
    error: function(response){
      console.log(response)


      // $('#submit_code').show();
      // $('#load2').hide();
      // $('#error-code').show();
      // $('#error-code').html("Connection Error.");

    }

  });
}



$(document).on("click", ".send_cat", function () {
    send_unit();
  })

  function send_unit() {
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
      url: base_url + "/api/pos/createCategory",
      data: {"cat_name" : category_name, "cat_description" : category_desc, "company_id" : company_id},

      success: function (response) {
        if (response.status == "200") {
          console.log(response);

          $(".create_product").show();
        } else if (response.status == "400") {
          console.log(response);
          $(".dt-loader").hide();
          $(".send_cat").show();

       
        } else if (response.status == "401") {
          //user error message
          console.log(response);
          $(".dt-loader").hide();
          $(".send_cat").show();
        }
      },
      error: function (response) {
        console.log(response);

      },
    });
  }

  });