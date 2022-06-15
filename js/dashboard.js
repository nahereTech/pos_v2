var base_url = window.location.origin;

$(document).ready(function () {
    setTimeout(() => {
        // total_sales()
        // total_sold()
        // total_receipts()
        // total_sales_credit()
        // load_cus_for_filter("")
        // load_cashier_for_filter("")


        sales_year_grh();
        sales_by_emp();
        sales_by_items();
        customers_count_grh();
        card_credit_cash();
        sales_by_outlet();
    }, 1000);

});



function sales_by_outlet() {

    var company_id = localStorage.getItem('company_id');
    var store_id = localStorage.getItem('store_id');

    var listObj = document.getElementById(`select_item`);
    var select_store = document.getElementById(`select_item`);

    console.log(listObj);
    console.log($("#select_item").val())
    if ($("#select_item_cashier").val()) {
        // $("#slz_by_outlet").hide();

        // $("#sales_by_outlet").hide()
        var datalist = document.getElementById(listObj.getAttribute("list"));
        var fa = datalist.options.namedItem(listObj.value);
        console.log(fa)
        if(fa == null){
           $("#slz_by_outlet").show();
            return false;
        }

        var cus_id = fa.getAttribute('data-value');
        var cus = cus_id ? cus_id : localStorage.getItem("user_id")

    }
    if ($("#select_item").val()) {
        var datalist = document.getElementById(select_store.getAttribute("list"));
        var fa = datalist.options.namedItem(select_store.value);
        console.log(fa)
        if(fa == null){
           $("#slz_by_outlet").show();
            return false;
        }

        var store = fa.getAttribute('data-value');
        console.log('store', store)
        var stores = store
    }
    $("#slz_by_outlet_loader").show();

    var cash = cus
    var store_ = stores

    if ($("#user_perm_status").html() == "super_admin" || $("#monitor_status").html() == "monitor_role") {
        if (store_ != null || store_ != undefined) {
            store_ = store_
        }
        else  {
           store_ = ""
        }
    }
    else{

        if (store_ == null || store_ == undefined) {
        store_ = store_id
    }
    else if (localStorage.getItem('store_dash')) {
        store_ = localStorage.getItem('store_dash')
    }
    
    }

    // if(store_ == null || store_ == undefined){
    //         store_ = store_id
    // }

    // if(localStorage.getItem('store_dash')){
    //     store_= localStorage.getItem('store_dash')
    // }

            if(cash == null || cash == undefined){
                cash = localStorage.getItem('user_id')
            }


    // var warehouse_id=localStorage.getItem('warehouse_id');

    $.ajax({
        type: "GET",
        dataType: "json",
          headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
        url: base_url + "/api/pos/salesByOutlets",
        data: {
            "company_id": company_id,
            "store_id": store_,
            "date_range": $("#date_range").val(),
            "cashier_id":cash,

        },
        timeout: 60000,
        success: function (response) {
            if (response.status == '200') {
                console.log(response);
                if (response.data.length != 0) {
                    var list_of_values = [];
                    $(response.data).each(function (index, value) {
                        // alert(index)
                        // list_of_values.push(Number(value.amount));
                        list_of_values.push({
                            value: Number(value.sales),
                            name: value.store_name
                        });
                    });

                    console.log(list_of_values)

                    var myChart = echarts.init(document.getElementById('slz_by_outlet'));



                    // specify chart configuration item and data

                    option = {
                        tooltip: {
                            trigger: 'item',
                            formatter: '{a} <br/>{b}: {c} ({d}%)'
                        },
                        legend: {
                            top: '5%',
                            left: 'center',
                        },
                        series: [
                            {
                                name: 'Sales (₦)',
                                type: 'pie',
                                radius: ['40%', '70%'],
                                avoidLabelOverlap: false,
                                label: {
                                    show: false,
                                    position: 'center'
                                },
                                emphasis: {
                                    label: {
                                        show: true,
                                        fontSize: '40',
                                        fontWeight: 'bold'
                                    }
                                },
                                labelLine: {
                                    show: false
                                },
                                data: list_of_values
                            }]

                        // use configuration item and data specified to show chart
                    }
                    myChart.setOption(option);

                }
            }
            // if ($("#select_item").val()) {
            //     $("#sales_by_outlet").hide()

            // }
            // alert(store_)
            var numb = store_ == 0 && Number(store_) 
            if (numb !== 0) {

                $("#sales_by_outlet").hide()
                $("#slz_by_outlet").hide();
                localStorage.removeItem("store_dash")

            }
            else{
                $("#sales_by_outlet").show()
                $("#slz_by_outlet_loader").hide();
                $("#slz_by_outlet").show();
                localStorage.removeItem("store_dash")


            }

          


        },
        error: function (response) {
            // $("#ddsh_loading_1").hide();
            alert("error");
            // $('#employee_details_display').hide();
            // $('#employee_error_display').show();
        }
    })




    // option = {

    //     tooltip: {
    //         trigger: 'item',
    //         formatter: '{a} <br/>{b}: {c} ({d}%)'
    //     },
    //     legend: {
    //         top: '5%',
    //         left: 'center',
    //     },
    //     series: [
    //         {
    //             name: 'Sales (₦)',
    //             type: 'pie',
    //             radius: ['40%', '70%'],
    //             avoidLabelOverlap: false,
    //             label: {
    //                 show: false,
    //                 position: 'center'
    //             },
    //             emphasis: {
    //                 label: {
    //                     show: true,
    //                     fontSize: '40',
    //                     fontWeight: 'bold'
    //                 }
    //             },
    //             labelLine: {
    //                 show: false
    //             },
    //             data: [
    //                 { value: 600, name: 'Ilupeju' },
    //                 { value: 500, name: 'Victoria Island' },
    //                 { value: 300, name: 'Ajah' }
    //             ]
    //         }
    //     ]
    // };

    // myChart.setOption(option);

}

function card_credit_cash() {

     
    var company_id = localStorage.getItem('company_id');
    var store_id = localStorage.getItem('store_id');


    var listObj = document.getElementById(`select_item_cashier`);
    var select_store = document.getElementById(`select_item`);

    console.log(listObj);
    console.log($("#select_item_cashier").val())
    if ($("#select_item_cashier").val()) {
        var datalist = document.getElementById(listObj.getAttribute("list"));
        var fa = datalist.options.namedItem(listObj.value);
        console.log(fa)
        if(fa == null){
            $("#cd_cr_cash").show();
            return false;
        }

        var cus_id = fa.getAttribute('data-value');
        var cus = cus_id ? cus_id : localStorage.getItem('user_id')
    }
    if ($("#select_item").val()) {
        var datalist = document.getElementById(select_store.getAttribute("list"));
        var fa = datalist.options.namedItem(select_store.value);
        console.log(fa)
        if(fa == null){
            $("#cd_cr_cash").show();
            return false;
        }

        var store = fa.getAttribute('data-value');
        console.log('store', store)
        var stores = store 
    }
    $("#cd_cr_cash_loader").show();

    var cash = cus

    var store_ = stores

    if ($("#user_perm_status").html() == "super_admin" || $("#monitor_status").html() == "monitor_role") {
        if (store_ != null || store_ != undefined) {
            store_ = store_
        }
        else  {
           store_ = ""
        }
    }
    else{

        if (store_ == null || store_ == undefined) {
        store_ = store_id
    }
    else if (localStorage.getItem('store_id')) {
        store_ = localStorage.getItem('store_id')
    }
    
    }

//     if(store_ == null || store_ == undefined){
//         store_ = store_id
// }

// if(localStorage.getItem('store_dash')){
//     store_= localStorage.getItem('store_dash')
// }

            if(cash == null || cash == undefined){
                cash = localStorage.getItem('user_id')
            }


            // if($("#user_perm_status").html() == "super_admin" || $("#user_perm_status").html() == "Admin"){
            //     store_= ""
            // }



    // var warehouse_id=localStorage.getItem('warehouse_id');

    $.ajax({
        type: "GET",
        dataType: "json",
          headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
        url: base_url + "/api/pos/totalCashCardCredit",
        data: {
            "company_id": company_id,
            "store_id": store_,
            "date_range": $("#date_range").val(),
            "cashier_id":cash,


        },
        timeout: 60000,
        success: function (response) {
            if (response.status == '200') {
                console.log(response);
                if (response.data.length != 0) {
                    var list_of_values = [];
                    $(response.data).each(function (index, value) {
                        // alert(index)
                        // list_of_values.push(Number(value.amount));
                        list_of_values.push({
                            value: Number(value.amount),
                            name: value.type
                        });
                    });

                    console.log(list_of_values)

                    var myChart = echarts.init(document.getElementById('cd_cr_cash'));


                    // specify chart configuration item and data

                    option = {
                        tooltip: {
                            trigger: 'item',
                            formatter: '{a} <br/>{b}: {c} ({d}%)'
                        },
                        legend: {
                            top: '5%',
                            left: 'center',
                        },
                        series: [
                            {
                                name: 'Sales (₦)',
                                type: 'pie',
                                radius: ['40%', '70%'],
                                avoidLabelOverlap: false,
                                label: {
                                    show: false,
                                    position: 'center'
                                },
                                emphasis: {
                                    label: {
                                        show: true,
                                        fontSize: '40',
                                        fontWeight: 'bold'
                                    }
                                },
                                labelLine: {
                                    show: false
                                },
                                data: list_of_values
                            }]

                        // use configuration item and data specified to show chart
                    }
                    myChart.setOption(option);

                }
            }

          $("#cd_cr_cash_loader").hide();
          $("#cd_cr_cash").show();


            
        },
        error: function (response) {
            // $("#ddsh_loading_1").hide();
            alert("error");
            // $('#employee_details_display').hide();
            // $('#employee_error_display').show();
        }
    })

    // var myChart = echarts.init(document.getElementById('cd_cr_cash'));

    // option = {
    //     tooltip: {
    //         trigger: 'item',
    //         formatter: '{a} <br/>{b}: {c} ({d}%)'
    //     },
    //     legend: {
    //         top: '5%',
    //         left: 'center',
    //     },
    //     series: [
    //         {
    //             name: 'Sales (₦)',
    //             type: 'pie',
    //             radius: ['40%', '70%'],
    //             avoidLabelOverlap: false,
    //             label: {
    //                 show: false,
    //                 position: 'center'
    //             },
    //             emphasis: {
    //                 label: {
    //                     show: true,
    //                     fontSize: '40',
    //                     fontWeight: 'bold'
    //                 }
    //             },
    //             labelLine: {
    //                 show: false
    //             },
    //             data: [
    //                 { value: 1048, name: 'Cash' },
    //                 { value: 735, name: 'Card' },
    //                 { value: 300, name: 'Credit' }
    //             ]
    //         }
    //     ]
    // };

    // myChart.setOption(option);
}


function customers_count_grh() {
    


    var company_id = localStorage.getItem('company_id');
    var store_id = localStorage.getItem('store_id');

    var listObj = document.getElementById(`select_item_cashier`);
    var select_store = document.getElementById(`select_item`);

    console.log(listObj);
    console.log($("#select_item_cashier").val())
    if ($("#select_item_cashier").val()) {
        var datalist = document.getElementById(listObj.getAttribute("list"));
        var fa = datalist.options.namedItem(listObj.value);
        console.log(fa)
        if(fa == null){
          $("#card_credit_cash").show()
            return false;
        }

        var cus_id = fa.getAttribute('data-value');
        var cus = cus_id ? cus_id : localStorage.getItem('user_id')
    }
    if ($("#select_item").val()) {
        var datalist = document.getElementById(select_store.getAttribute("list"));
        var fa = datalist.options.namedItem(select_store.value);
        console.log(fa)
        if(fa == null){
          $("#card_credit_cash").show()
            return false;
        }

        var store = fa.getAttribute('data-value');
        console.log('store', store)
        var stores = store
    }
    $("#card_credit_cash_loader").show();

    var cash = cus
    var store_ = stores

    if ($("#user_perm_status").html() == "super_admin" || $("#monitor_status").html() == "monitor_role") {
        if (store_ != null || store_ != undefined) {
            store_ = store_
        }
        else  {
           store_ = ""
        }
    }
    else{

        if (store_ == null || store_ == undefined) {
        store_ = store_id
    }
    else if (localStorage.getItem('store_dash')) {
        store_ = localStorage.getItem('store_dash')
    }
    
    }

//     if(store_ == null || store_ == undefined){
//         store_ = store_id
// }

// if(localStorage.getItem('store_dash')){
//     store_= localStorage.getItem('store_dash')
// }


            if(cash == null || cash == undefined){
                cash = localStorage.getItem('user_id')
            }


    // var warehouse_id=localStorage.getItem('warehouse_id');

    $.ajax({
        type: "GET",
        dataType: "json",
          headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
        url: base_url + "/api/pos/monthlyCustomerCounts",
        data: {
            "company_id": company_id,
            "store_id": store_,
            "date_range": $("#date_range").val(),
            "cashier_id":cash,

        },
        timeout: 60000,
        success: function (response) {
            if (response.status == '200') {
                console.log(response);
                if (response.data.list.length != 0) {
                    var list_of_months = [];
                    var list_of_values = [];
                    $(response.data.list).each(function (index, value) {
                        // alert(index)
                        list_of_months.push(value.month);
                        list_of_values.push(Number(value.count));
                    });

                    var myChart = echarts.init(document.getElementById('card_credit_cash'));

                    // specify chart configuration item and data
                    var option = {
                        title: {
                            text: ''
                        },
                        tooltip: {},
                        legend: {
                            data: ['Customers']
                        },
                        xAxis: {
                            data: list_of_months
                        },
                        yAxis: {},
                        series: [{
                            name: 'Customers',
                            type: 'bar',
                            data: list_of_values
                        }]
                    };

                    // use configuration item and data specified to show chart
                    myChart.setOption(option);
                }
            }
          $("#card_credit_cash").show()
          $("#card_credit_cash_loader").hide()


        },
        error: function (response) {
            // $("#ddsh_loading_1").hide();
            alert("error");
            // $('#employee_details_display').hide();
            // $('#employee_error_display').show();
        }
    })

}

function sales_by_items() {
    // $("#salez_by_itm").hide()
   
    var company_id = localStorage.getItem('company_id');
    var store_id = localStorage.getItem('store_id');

    var listObj = document.getElementById(`select_item_cashier`);
            var select_store = document.getElementById(`select_item`);

            console.log(listObj);
            console.log($("#select_item_cashier").val())
            if ($("#select_item_cashier").val()) {
                var datalist = document.getElementById(listObj.getAttribute("list"));
                var fa = datalist.options.namedItem(listObj.value);
                console.log(fa)
                if(fa == null){
                    $("#salez_by_itm").show()
                    return false;
                }

                
            var cus_id = fa.getAttribute('data-value');
            var cus = cus_id ? cus_id : localStorage.getItem('user_id')

            }
            if ($("#select_item").val()) {
                var datalist = document.getElementById(select_store.getAttribute("list"));
                var fa = datalist.options.namedItem(select_store.value);
                console.log(fa)
                if(fa == null){
                    $("#salez_by_itm").show()
                    return false;
                }

                var store = fa.getAttribute('data-value');
                console.log('store', store)
                var stores = store
            }
            $("#salez_by_itm_loader").show()
            var cash = cus
            var store_ = stores

            if ($("#user_perm_status").html() == "super_admin" || $("#monitor_status").html() == "monitor_role") {
                if (store_ != null || store_ != undefined) {
                    store_ = store_
                }
                else  {
                   store_ = ""
                }
            }
            else{

                if (store_ == null || store_ == undefined) {
                store_ = store_id
            }
            else if (localStorage.getItem('store_dash')) {
                store_ = localStorage.getItem('store_dash')
            }
            
            }

            if(cash == null || cash == undefined){
                cash = localStorage.getItem('user_id')
            }


    // var warehouse_id=localStorage.getItem('warehouse_id');

    $.ajax({
        type: "GET",
        dataType: "json",
          headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
        url: base_url + "/api/pos/topSellingProducts",
        data: {
            "company_id": company_id,
            "store_id": store_,
            "date_range": $("#date_range").val(),
            "cashier_id":cash,

        },
        timeout: 60000,
        success: function (response) {
            if (response.status == '200') {
                console.log(response);
                if (response.data.length != 0) {
                    var list_of_values = [];
                    $(response.data).each(function (index, value) {
                        // alert(index)
                        // list_of_values.push(Number(value.amount));
                        list_of_values.push({
                            value: Number(value.qty_sold),
                            name: value.product_name
                        });
                    });

                    console.log(list_of_values)

                    var myChart = echarts.init(document.getElementById('salez_by_itm'));


                    // specify chart configuration item and data

                    option = {
                        tooltip: {
                            trigger: 'item',
                            formatter: '{a} <br/>{b}: {c} ({d}%)'
                        },
                        legend: {
                            top: '5%',
                            left: 'center',
                        },
                        series: [
                            {
                                name: 'Sales (₦)',
                                type: 'pie',
                                radius: ['40%', '70%'],
                                avoidLabelOverlap: false,
                                label: {
                                    show: false,
                                    position: 'center'
                                },
                                emphasis: {
                                    label: {
                                        show: true,
                                        fontSize: '40',
                                        fontWeight: 'bold'
                                    }
                                },
                                labelLine: {
                                    show: false
                                },
                                data: list_of_values
                            }]

                        // use configuration item and data specified to show chart
                    }
                    myChart.setOption(option);

                }
            }else{

                if (response.data.length != 0) {
                    var list_of_values = [];
                    $(response.data).each(function (index, value) {
                        // alert(index)
                        // list_of_values.push(Number(value.amount));
                        list_of_values.push({
                            value: Number(value.qty_sold),
                            name: value.product_name
                        });
                    });

                    console.log(list_of_values)

                    var myChart = echarts.init(document.getElementById('salez_by_itm'));


                    // specify chart configuration item and data

                    option = {
                        tooltip: {
                            trigger: 'item',
                            formatter: '{a} <br/>{b}: {c} ({d}%)'
                        },
                        legend: {
                            top: '5%',
                            left: 'center',
                        },
                        series: [
                            {
                                name: 'Sales (₦)',
                                type: 'pie',
                                radius: ['40%', '70%'],
                                avoidLabelOverlap: false,
                                label: {
                                    show: false,
                                    position: 'center'
                                },
                                emphasis: {
                                    label: {
                                        show: true,
                                        fontSize: '40',
                                        fontWeight: 'bold'
                                    }
                                },
                                labelLine: {
                                    show: false
                                },
                                data: list_of_values
                            }]

                        // use configuration item and data specified to show chart
                    }
                    myChart.setOption(option);

                }

            }
            // $("#salez_by_itm").show()
         $("#salez_by_itm_loader").hide()
         $("#salez_by_itm").show()
        },
        error: function (response) {
            // $("#ddsh_loading_1").hide();
            alert("error");
            // $('#employee_details_display').hide();
            // $('#employee_error_display').show();
        }
    })
}


function sales_by_emp() {
    // $("#salez_by_rp").hide();


    var company_id = localStorage.getItem('company_id');
    var store_id = localStorage.getItem('store_id');

    var listObj = document.getElementById(`select_item_cashier`);
            var select_store = document.getElementById(`select_item`);

            console.log(listObj);
            console.log($("#select_item_cashier").val())
            if ($("#select_item_cashier").val()) {
                var datalist = document.getElementById(listObj.getAttribute("list"));
                var fa = datalist.options.namedItem(listObj.value);
                console.log(fa)
                if(fa == null){
                    $("#salez_by_rp").show();
                    return false;
                }

                

                var cus_id = fa.getAttribute('data-value');
                var cus = cus_id ? cus_id : localStorage.getItem('user_id');
            }
            if ($("#select_item").val()) {
                var datalist = document.getElementById(select_store.getAttribute("list"));
                var fa = datalist.options.namedItem(select_store.value);
                console.log(fa)
                if(fa == null){
                    $("#salez_by_rp").show();
                    return false;
                }

                var store = fa.getAttribute('data-value');
                console.log('store', store)
                var stores = store 
            }
            $("#salez_by_rp_loader").show()

            var cash = cus
            var store_ = stores

            if ($("#user_perm_status").html() == "super_admin" || $("#monitor_status").html() == "monitor_role") {
                if (store_ != null || store_ != undefined) {
                    store_ = store_
                }
                else  {
                   store_ = ""
                }
            }
            else{

                if (store_ == null || store_ == undefined) {
                store_ = store_id
            }
            else if (localStorage.getItem('store_dash')) {
                store_ = localStorage.getItem('store_dash')
            }
            
            }

            
        //     if(store_ == null || store_ == undefined){
        //         store_ = store_id
        // }
    
        // if(localStorage.getItem('store_dash')){
        //     store_= localStorage.getItem('store_dash')
        // }
    

            if(cash == null || cash == undefined){
                cash = localStorage.getItem('user_id')
            }


    // var warehouse_id=localStorage.getItem('warehouse_id');

    $.ajax({
        type: "GET",
        dataType: "json",
          headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
        url: base_url + "/api/pos/topSalesRep",
        data: {
            "company_id": company_id,
            "store_id": store_,
            "date_range": $("#date_range").val(),
            "cashier_id":cash,

        },
        timeout: 60000,
        success: function (response) {
            if (response.status == '200') {
                console.log(response);
                if (response.data.length != 0) {
                    var list_of_values = [];
                    $(response.data).each(function (index, value) {
                        // alert(index)
                        // list_of_values.push(Number(value.amount));
                        list_of_values.push({
                            value: Number(value.totalSales),
                            name: value.cashier_name
                        });
                    });

                    console.log(list_of_values)

                    var myChart = echarts.init(document.getElementById('salez_by_rp'));

                    // specify chart configuration item and data

                    option = {
                        tooltip: {
                            trigger: 'item',
                            formatter: '{a} <br/>{b}: {c} ({d}%)'
                        },
                        legend: {
                            top: '5%',
                            left: 'center',
                        },
                        series: [
                            {
                                name: 'Sales (₦)',
                                type: 'pie',
                                radius: ['40%', '70%'],
                                avoidLabelOverlap: false,
                                label: {
                                    show: false,
                                    position: 'center'
                                },
                                emphasis: {
                                    label: {
                                        show: true,
                                        fontSize: '40',
                                        fontWeight: 'bold'
                                    }
                                },
                                labelLine: {
                                    show: false
                                },
                                data: list_of_values
                            }]

                        // use configuration item and data specified to show chart
                    }
                    myChart.setOption(option);

                }
            }else{

                if (response.data.length != 0) {
                    var list_of_values = [];
                    $(response.data).each(function (index, value) {
                        // alert(index)
                        // list_of_values.push(Number(value.amount));
                        list_of_values.push({
                            value: Number(value.totalSales),
                            name: value.cashier_name
                        });
                    });

                    console.log(list_of_values)

                    var myChart = echarts.init(document.getElementById('salez_by_rp'));

                    // specify chart configuration item and data

                    option = {
                        tooltip: {
                            trigger: 'item',
                            formatter: '{a} <br/>{b}: {c} ({d}%)'
                        },
                        legend: {
                            top: '5%',
                            left: 'center',
                        },
                        series: [
                            {
                                name: 'Sales (₦)',
                                type: 'pie',
                                radius: ['40%', '70%'],
                                avoidLabelOverlap: false,
                                label: {
                                    show: false,
                                    position: 'center'
                                },
                                emphasis: {
                                    label: {
                                        show: true,
                                        fontSize: '40',
                                        fontWeight: 'bold'
                                    }
                                },
                                labelLine: {
                                    show: false
                                },
                                data: list_of_values
                            }]

                        // use configuration item and data specified to show chart
                    }
                    myChart.setOption(option);

                }

            }

            $("#salez_by_rp_loader").hide();
            $("#salez_by_rp").show();


        },
        error: function (response) {
            // $("#ddsh_loading_1").hide();
            alert("error");
            // $('#employee_details_display').hide();
            // $('#employee_error_display').show();
        }
    })
}

function sales_year_grh() {



    var company_id = localStorage.getItem('company_id');
    var store_id = localStorage.getItem('store_id');

    // var warehouse_id=localStorage.getItem('warehouse_id');
    var listObj = document.getElementById(`select_item_cashier`);
            var select_store = document.getElementById(`select_item`);

            console.log(listObj);
            console.log($("#select_item_cashier").val())
            if ($("#select_item_cashier").val()) {
                var datalist = document.getElementById(listObj.getAttribute("list"));
                var fa = datalist.options.namedItem(listObj.value);
                console.log(fa)
                if(fa == null){
                    $("#main_transac").show()
                    return false;
                }
                var cus_id = fa.getAttribute('data-value');
                var cus = cus_id ? cus_id : localStorage.getItem("user_id")
            }
            if ($("#select_item").val()) {
                var datalist = document.getElementById(select_store.getAttribute("list"));
                var fa = datalist.options.namedItem(select_store.value);
                console.log(fa)
                if(fa == null){
                 $("#main_transac").show()
                    return false;
                }

                var store = fa.getAttribute('data-value');
                console.log('store', store)
                var stores = store 
            }
    $("#main_transac_loader").show()

         var cash = cus
         var store_ = stores


    //      if(store_ == null || store_ == undefined){
    //         store_ = store_id
    // }

    // if(localStorage.getItem('store_dash')){
    //     store_= localStorage.getItem('store_dash')
    // }

            if ($("#user_perm_status").html() == "super_admin" || $("#monitor_status").html() == "monitor_role") {
                if (store_ != null || store_ != undefined) {
                    store_ = store_
                }
                else  {
                   store_ = ""
                }
            }
            else{

                if (store_ == null || store_ == undefined) {
                store_ = store_id
            }
            else if (localStorage.getItem('store_dash')) {
                store_ = localStorage.getItem('store_dash')
            }
            
            }


            if(cash == null || cash == undefined){
                cash = localStorage.getItem('user_id')
            }


    $.ajax({
        type: "GET",
        dataType: "json",
          headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
            },
        url: base_url + "/api/pos/monthlySalesRpt",
        data: {
            "company_id": company_id,
            "store_id": store_,
            "date_range": $("#date_range").val(),
            "cashier_id":cash,
        },
        timeout: 60000,
        success: function (response) {
            if (response.status == '200') {
                console.log(response);
                if (response.data.list.length != 0) {
                    var list_of_months = [];
                    var list_of_values = [];
                    $(response.data.list).each(function (index, value) {
                        // alert(index)
                        list_of_months.push(value.month);
                        list_of_values.push(Number(value.amount));
                    });

                    var myChart = echarts.init(document.getElementById('main_transac'));


                    // specify chart configuration item and data
                    var option = {
                        title: {
                            text: ''
                        },
                        tooltip: {},
                        legend: {
                            data: ['Sales (₦)']

                        },
                        xAxis: {
                            data: list_of_months
                        },
                        yAxis: {},
                        series: [{
                            name: 'Sales (₦)',
                            type: 'bar',
                            data: list_of_values
                        }]
                    };

                    // use configuration item and data specified to show chart
                    myChart.setOption(option);
                   
                }
               
            }
              $("#main_transac_loader").hide()
              $("#main_transac").show()

        },
        error: function (response) {
            // $("#ddsh_loading_1").hide();
            alert("error");
            // $('#employee_details_display').hide();
            // $('#employee_error_display').show();
        }
    })


}