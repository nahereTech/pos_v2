<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="POS - Point of Sale ">
    <meta name="keywords"
        content="POS - Point of Sale">
    <!-- /meta tags -->
    <title>NaHere - POS</title>

    <!-- Site favicon -->

    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <!-- /site favicon -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
    <script src="assets/js/common.js?v=1.4"></script>


    <!-- Font Icon Styles -->
    <link rel="stylesheet" href="../pos/node_modules/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../pos/vendors/gaxon-icon/style.css">
    <link rel="stylesheet" href="csstest/style.css">
    <!-- /font icon Styles -->

    <!-- Perfect Scrollbar stylesheet -->
    <!-- <link rel="stylesheet" href="../pos/node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
     -->
    <link rel="stylesheet" href="../pos/node_modules/perfect-scrollbar/css/perfect-scrollbar.css">

    <!-- <link rel="stylesheet" href="../node_modules/bootstrap-input-spinner\index.html"> -->

    <!-- /perfect scrollbar stylesheet -->
    <script src="assets/js/jquery-ui"></script>
    <!-- <script src="jquery.twbsPagination.js"></script> -->

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Load Styles -->
    <link rel="stylesheet" href="../pos/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../pos/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.0/jquery.twbsPagination.min.js"></script> -->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

    <!-- <script src="jquery.disable-autofill.js"></script>
    <script>
    $('input[autofill="off"]').disableAutofill();
    </script> -->



    <link rel="stylesheet" href="../pos/assets/css/lite-style-1.min.css">

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
    <!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.6.0/css/font-awesome.css" rel="stylesheet"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css
" rel="stylesheet">



    <!-- /load styles -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
    crossorigin="anonymous">
    </script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
    <!-- <script src="./src/bootstrap-input-spinner.js"></script> -->
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <script src="assets/admin_template/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <link href="assets/admin_template/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/admin_template/vendors/twbs-pagination-1.4.0/jquery.twbsPagination.js" type="text/javascript">
    </script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" media="print" href="../assets/css/print.css" />

    <script src="../pos/js/barcode.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
    <script src="../pos/assets/js/barcode.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsbarcode/3.11.3/JsBarcode.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scannerdetection/1.2.0/jquery.scannerdetection.min.js"></script>

    <!-- <link rel="stylesheet" href="./node_modules/prismjs/themes/prism-tomorrow.css"/> -->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@4.9.0/dist/echarts.min.js"></script>
    <script>
    window.onload = function() {
        var base_url = window.location.origin;


        function openNav() {
            document.getElementById(
                "myNav").style.width = "100%";
        }


        function closeNav() {
            document.getElementById(
                "myNav").style.height = "0%";
        }
    }
    </script>

    <style>
    /* select {
    -webkit-appearance: none;
    -moz-appearance: none;
    text-indent: 1px;
    text-overflow: '';
} */
    @media print {

        /* ... */
        .tabletitle {
            font-size: .5em !important;
            background: #EEE !important;
        }
    }

    *:focus {
        outline: none;
    }

    input:focus {
        outline: none;
    }

    .just_receipt td,
    .just-receipt th,
    .just_receipt tr {
        padding: 15px;
        margin-bottom: 20px;
    }

    .just-receipt tbody th {
        padding: 15px !important;
    }

    .dd {
        position: relative;
        left: -6%;
    }

    .dropzone {
        min-height: 100px;
    }



    .info-number:hover {
        display: block;
    }



    .abbrv::hover {
        display: none;
    }

    ul.msg_list li a .message {
        display: block !important;
        font-size: 11px;
        position: relative;
        left: 45px;
        text-align: left;
        padding: 0 5px;
    }

    li {
        text-decoration: none;
    }

    .dropdown-menu.msg_list span {
        white-space: normal;
        margin-right: 50px;
    }

    .sect,
    .batch {
        text-decoration: underline;
        cursor: pointer;
    }


    .nav.side-menu>li {
        background-color: #2A3F54 !important;
    }

    [data-tooltip]:hover::before {
        all: initial;
        font-family: Arial, Helvetica, sans-serif;
        display: inline-block;
        border-radius: 5px;
        padding: 10px;
        background-color: #1a1a1a;
        content: attr(data-tooltip);
        box-shadow: rgba(0, 0, 0, 0.19);
        color: #f9f9f9;
        position: absolute;
        bottom: 100%;
        width: 100px;
        left: 50%;
        transform: translate(-50%, 0);
        margin-bottom: 15px;
        text-align: center;
        font-size: 14px;
        padding: 15px;
    }

    [data-tooltip-bottom]:hover,
    [data-tooltip-left]:hover,
    [data-tooltip-right]:hover,
    [data-tooltip]:hover {
        position: relative;
        z-index: 10;

    }

    [data-tooltip-bottom]:hover::after,
    [data-tooltip-left]:hover::after,
    [data-tooltip-right]:hover::after,
    [data-tooltip]:hover::after {
        all: initial;
        display: inline-block;
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 10px solid #1a1a1a;
        position: absolute;
        bottom: 100%;
        content: '';
        left: 50%;
        transform: translate(-50%, 0);
        margin-bottom: 5px;
    }

    [data-tooltip-right]:hover::after {
        margin-bottom: 0;
        bottom: auto;
        transform: rotate(90deg) translate(0, -50%);
        left: 100%;
        top: 50%;
        margin-left: -5px;
        margin-top: -5px;
    }

    [data-tooltip-left]:hover::after {
        margin-bottom: 0;
        bottom: auto;
        transform: rotate(-90deg) translate(0, -50%);
        left: auto;
        right: 100%;
        top: 50%;
        margin-right: -5px;
        margin-top: -5px;
    }

    [data-tooltip-bottom]:hover::after {
        margin-bottom: 0;
        bottom: auto;
        transform: rotate(180deg) translate(-50%, 0);
        top: 100%;
        margin-left: -20px;
        margin-top: 5px;
    }

    [data-tooltip-bottom]:hover::before,
    [data-tooltip-left]:hover::before,
    [data-tooltip-right]:hover::before,
    [data-tooltip]:hover::before {
        all: initial;
        font-family: Arial, Helvetica, sans-serif;
        display: inline-block;
        border-radius: 5px;
        padding: 10px;
        background-color: #1a1a1a;
        box-shadow: rgba(0, 0, 0, 0.19);
        content: attr(data-tooltip);
        color: #f9f9f9;
        position: absolute;
        bottom: 100%;
        width: 100px;
        left: 50%;
        transform: translate(-50%, 0);
        margin-bottom: 15px;
        text-align: center;
        font-size: 14px;
    }

    [data-tooltip-right]:hover::before {
        margin-bottom: 0;
        bottom: auto;
        transform: translate(0, -50%);
        left: 100%;
        top: 50%;
        content: attr(data-tooltip-right);
        margin-left: 15px;
    }

    [data-tooltip-left]:hover::before {
        margin-bottom: 0;
        bottom: auto;
        transform: translate(0, -50%);
        left: auto;
        right: 100%;
        top: 50%;
        content: attr(data-tooltip-left);
        margin-right: 15px;
    }

    [data-tooltip-bottom]:hover::before {
        margin-bottom: 0;
        bottom: auto;
        top: 100%;
        content: attr(data-tooltip-bottom);
        margin-top: 15px;
    }

    .badg {
        text-align: center;
        background: red;
        width: 20px;
        height: 20px;
        margin: 0;
        border-radius: 100%;
        position: absolute;
        top: 5px;
        left: 23px;
        padding: 5px;
    }

    .for_paid {
        font-size: 20px;
        font-weight: bold;
    }

    .for_due {
        font-size: 20px;
        font-weight: bold !important;
    }

    .sub-t {
        font-size: 20px !important;
        font-weight: bold !important;
    }

    .content .content-overlay {
        background: rgb(0, 175, 239, .99);
        border-radius: 10px;
        position: absolute;
        z-index: 1;
        height: 70%;
        width: 100%;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        opacity: 0;
        -webkit-transition: all 0.4s ease-in-out 0s;
        -moz-transition: all 0.4s ease-in-out 0s;
        transition: all 0.4s ease-in-out 0s;
    }

    .content:hover .content-overlay {
        opacity: 1;
    }

    .content-image {
        width: 100%;
    }

    .content-details {
        font-family: 'Raleway';
        position: absolute;
        font-size: 26px;
        text-align: center;
        padding-left: 1em;
        padding-right: 1em;
        width: 100%;
        top: 50%;
        left: 50%;
        opacity: 0;
        z-index: 2;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-transition: all 0.3s ease-in-out 0s;
        -moz-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
    }

    .content:hover .content-details {
        top: 50%;
        left: 50%;
        opacity: 1;
    }

    .content-details h3 {
        color: #fff;
        /*font-weight: 500;*/
        letter-spacing: 0.15em;
        margin-bottom: 0.5em;
        text-transform: uppercase;
    }

    .content-details a {
        color: #fff;
        font-size: 1px;
    }

    ul {
        list-style-type: none;
    }

    li {
        list-style-type: none;
    }

    .content-details p {
        /*font-size: bold;*/
    }

    .fadeIn-top {
        top: 20%;
    }

    .app {
        /*font-family: 'Raleway', sans-serif;*/
        color: #393939;
        font-size: 24px;
        line-height: 44px;
        margin: 10px 0 0 0;
        padding: 20px 30px;
        font-weight: ;
        text-align: center;
        margin-top: 5%;
    }

    .fst_dd {
        z-index: 10;
        font-size: 16px;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        /*  position: relative;
  top: 100%;*/
        /*overflow-x: hidden;*/
    }

    .last {
        /*position: relative;
  right: 50%;*/

    }

    .first_ {
        width: 15%;
        font-size: 16px;
        margin-left: auto;
        margin-right: auto;
        /*font-weight: bold;*/
        margin-left: 10px;
    }

    .get_comp_list {
        /* display: flex;
  justify-content: center;*/
        /*width: 50%;*/
        /* margin-left: auto;
  margin-right: auto;*/
        position: relative;
        left: 10%;

        cursor: pointer;
        /*padding: 10px;*/
        width: 90%;
        color: white;
        font-size: 16px;
    }

    .message {
        position: relative;
        left: -10%;
        text-align: center;
        /*margin-top: 20px;*/
        font-size: 18px;

    }

    .image img {
        position: relative;
        left: 25%;
        width: 30%;
    }

    .abbrv {
        position: relative;
        left: -10%;
        font-size: 16px;
        text-align: center;
        font-weight: 0px;
    }

    .more {
        display: block;
    }

    .text-center {
        display: block;
    }


    .overlay {
        /*height:%; */
        width: 100%;
        /*position: fixed; 
            top: 0; 
            left: 0; */
        background-color: #fff;
        overflow-y: scroll;

        overflow-x: hidden;

        transition: 1.0s;
    }

    .overlay-content {
        display: flex;
        position: relative;
        top: 40%;
        /*left: 25%; */
        cursor: pointer;
        justify-content: center;
        align-items: center;
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
        top: -10px;
        right: 35px;
        /*font-size: 20px; */
    }

    .logo {
        /* position: absolute;
        top: 30px;
        left: 35px;
        font-size: 10px; */

    }

    @keyframes click-wave {
        0% {
            height: 40px;
            width: 40px;
            opacity: 0.35;
            position: relative;
        }

        100% {
            height: 50px;
            width: 50px;
            margin-left: -20px;
            margin-top: -20px;
            opacity: 0;
        }
    }

    .option-input_ {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
        position: relative;
        top: 13.33333px;
        right: 0;
        bottom: 0;
        left: 0;
        height: 20px;
        width: 20px;
        transition: all 0.15s ease-out 0s;
        background: #cbd1d8;
        border: none;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        margin-right: 0.5rem;
        outline: none;
        position: relative;
        z-index: 1000;
    }

    .option-input_:hover {
        background: #9faab7;
    }

    .option-input_:checked {
        background: #2A3F54;
    }

    .option-input_:checked::before {
        height: 20px;
        width: 20px;
        position: absolute;
        content: '✔';
        display: inline-block;
        font-size: 26.66667px;
        text-align: center;
        line-height: 20px;
    }

    .option-input_:checked::after {
        -webkit-animation: click-wave 0.65s;
        -moz-animation: click-wave 0.65s;
        animation: click-wave 0.65s;
        background: #40e0d0;
        content: '';
        display: block;
        position: relative;
        z-index: 100;
    }

    .option-input_.radio_ {
        border-radius: 50%;
    }

    .option-input_.radio_::after {
        border-radius: 50%;
    }


    /*@keyframes click-wave {
  0% {
    height: 30px;
    width: 30px;
    opacity: 0.35;
    position: relative;
  }
  100% {
    height: 100px;
    width: 100px;
    margin-left: -80px;
    margin-top: -80px;
    opacity: 0;
  }
}

.option-input {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  position: relative;
  top: 13.33333px;
  right: 0;
  bottom: 0;
  left: 0;
  height: 30px;
  width: 30px;
  transition: all 0.15s ease-out 0s;
  background: #cbd1d8;
  border: none;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  margin-right: 0.5rem;
  outline: none;
  position: relative;
  z-index: 1000;
}
.option-input:hover {
  background: #9faab7;
}
.option-input:checked {
  background: #2A3F54;
}
.option-input:checked::before {
  height: 30px;
  width: 30px;
  position: absolute;
  content: '✔';
  display: inline-block;
  font-size: 26.66667px;
  text-align: center;
  line-height: 30px;
}
.option-input:checked::after {
  -webkit-animation: click-wave 0.65s;
  -moz-animation: click-wave 0.65s;
  animation: click-wave 0.65s;
  background: #40e0d0;
  content: '';
  display: block;
  position: relative;
  z-index: 100;
}
.option-input.radio {
  border-radius: 50%;
}
.option-input.radio::after {
  border-radius: 50%;
}*/
    /*.ui-autocomplete-loading {
            background: white url("images/ui-anim_basic_16x16.gif") right center no-repeat;
          }*/

    .typeahead,
    .tt-query,
    .tt-hint {
        width: 350px;
        padding: 8px 12px;
        font-size: 12px;
        line-height: 20px;
        border: 2px solid #ccc;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        border-radius: 8px;
        outline: none;
    }

    .tt-query {
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    }

    .tt-dropdown-menu {
        width: 422px;
        margin-top: 12px;
        padding: 8px 0;
        background-color: #fff;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, 0.2);
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        border-radius: 8px;
        -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
        -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
        box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
    }

    .tt-suggestion.tt-cursor {
        color: #fff;
        background-color: #0097cf;
    }

    .tt-suggestion p {
        margin: 0;
    }

    .background {
        background-color: #fff;
    }

    .has-error {
        background-color: #f7cdcd;
    }

    .modal-header {
        padding: 9px 15px;
        border-bottom: 1px solid #eee;
        background-color: #0480be;
        -webkit-border-top-left-radius: 5px;
        -webkit-border-top-right-radius: 5px;
        -moz-border-radius-topleft: 5px;
        -moz-border-radius-topright: 5px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }

    .green {
        color: green;
    }

    .gray {
        color: gray;
    }

    #page_error_div {
        width: 50%;
        height: 100px;
        margin: 100px auto;
        margin-top: calc(100vh / 2 - 50px);
        text-align: center;
    }




    .container33 {
        width: 80px;
        height: 100px;
        margin: 100px auto;
        margin-top: calc(100vh / 2 - 50px);
    }

    .block33 {
        position: relative;
        box-sizing: border-box;
        float: left;
        margin: 0 10px 10px 0;
        width: 12px;
        height: 12px;
        border-radius: 3px;
        background: #FFF;
    }

    .block33:nth-child(4n+1) {
        animation: wave 2s ease .0s infinite;
    }

    .block33:nth-child(4n+2) {
        animation: wave 2s ease .2s infinite;
    }

    .block33:nth-child(4n+3) {
        animation: wave 2s ease .4s infinite;
    }

    .block33:nth-child(4n+4) {
        animation: wave 2s ease .6s infinite;
        margin-right: 0;
    }

    @keyframes wave {
        0% {
            top: 0;
            opacity: 1;
        }

        50% {
            top: 30px;
            opacity: .2;
        }

        100% {
            top: 0;
            opacity: 1;
        }
    }




    /*for sections*/
    div#navbar_div ul {
        padding: 0;
        margin: 0;
        list-style-type: none;
        position: relative;
    }

    div#navbar_div li {
        list-style-type: none;
        border-left: 2px solid #000;
        margin-left: 1em;
    }

    div#navbar_div li div {
        padding-left: 1em;
        position: relative;
    }

    div#navbar_div li div::before {
        content: '';
        position: absolute;
        top: 0;
        left: -2px;
        bottom: 50%;
        width: 0.75em;
        border: 2px solid #000;
        border-top: 0 none transparent;
        border-right: 0 none transparent;
    }

    div#navbar_div ul>li:last-child {
        border-left: 2px solid transparent;
    }

    /*end of for sections*/



    .costing_cnc {
        display: none;
    }

    /*.open{
          display: none;
        }*/
    .img_style {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        border: 4px solid white;

    }


    .user-post-profile {
        margin-right: -100px;
        /*box-shadow: rgba(0,0,0,0.19);*/
    }

















    .dropbtn {
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        /* display: none;
        position: absolute;
        top: 40px;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1; */
        position: absolute;
        top: 40px;
        background: #fff;
        margin-top: 0;
        border: 1px solid #D9DEE4;
        -webkit-box-shadow: none;
        right: 0;
        left: auto;
        width: 220px;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* .dropdown-content a:hover {background-color: #ddd;} */

    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    } */

    .dropdown-toggle:hover {
        background-color: transparent !important;
    }

    .bg-custom-1 {
        background-color: #85144b;
    }

    .bg-custom-2 {
        background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
    }

    .light_red {
        background-color: #e58620;
    }

    ::-webkit-scrollbar {
        width: 12px;
    }

    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
    }

    .hide_first {
        display: none !important;
    }

    .filter::placeholder {
        margin-left: 20px !important;
    }

    .table th,
    .table td {
        padding: 1.5rem;
        vertical-align: middle !important;
        border-top: 1px solid #e8e8e8;
    }

    .dropdow {
        position: relative;
        display: inline-block;
    }

    .dropdow-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        padding: 12px 16px;
        z-index: 1;
    }

    .dropdow:hover .dropdow-content {
        display: block;
    }

    #invoice-POS {
        box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
        padding: 2mm;
        margin: 0 auto;
        width: 16px;
        background: #FFF;

        /* ::selection {background: #f31544; color: #FFF;} */
        /* ::moz-selection {background: #f31544; color: #FFF;} */
    }

    .modal-backdrop.show {
        opacity: 0 !important;
    }

    .tableitem {
        font-size: 23px;
    }

    h1 {
        font-size: 1.5em;
        color: #222;
    }

    h2 {
        font-size: .9em;
    }

    h3 {
        font-size: 1.2em;
        font-weight: 300;
        line-height: 2em;
    }

    .has-error {
        background-color: #f7cdcd !important;
    }

    p {
        font-size: .7em;
        color: #666;
        line-height: 1.2em;
    }

    .dt-nav:hover {
        background-color: #0B447C !important;
    }

    .dt-nav__item:hover {
        background-color: #0B447C !important;
    }

    .dt-nav__link:hover {
        background-color: #0B447C !important;
    }

    #top,
    #mid,
    #bot {
        /* Targets all id with 'col-' */
        border-bottom: 1px solid #EEE;
    }

    .ant-layout,
    .ant-layout * {
        box-sizing: border-box;
    }

    .ant-layout-footer {
        flex: 0 0 auto;
        border-top: solid 1px #e8e8e8;
        padding: 14px 32px;
        color: #545454;
        font-size: 14px;
        background: #fffffe;
    }

    #top {
        min-height: 50px;
        margin-top: 10%;
    }

    #mid {
        min-height: 80px;
    }

    #bot {
        min-height: 50px;
    }

    #top .logo {
        height: 25px;
        width: 25px;
        background: url(https://nahere.com/nahere_logo_blue.png) no-repeat;
        background-size: 25px 25px;
    }

    .clientlogo {
        float: left;
        height: 30px;
        width: 30px;
        background: url(https://nahere.com/nahere_logo_blue.png) no-repeat;
        background-size: 25px 25px;
        /* border-radius: 50px; */
    }

    .info {
        display: block;
        margin-left: 0;
    }

    .title {
        float: right;
    }

    .title p {
        text-align: right;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    .tabletitle {
        font-size: .5em;
        background: #EEE;
    }

    .service {
        border-bottom: 1px solid #EEE;
    }

    .item {
        width: 24mm;
    }

    .itemtext {
        font-size: .5em;
    }

    #legalcopy {
        margin-top: 5mm;
    }



    .dropbtn {
        /* background-color: #3498DB; */
        color: white;
        padding: 5px;
        border-radius: 5px;
        font-size: 14px;
        border: none;
        cursor: pointer;
    }

    /* .dropbtn:hover,
    .dropbtn:focus {
        background-color: #2980B9;
    } */

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        color: #6c757d;
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* .dropdown a:hover {
        background-color: #ddd;
    } */

    .show {
        display: block;
    }

    .btn-minus strong {
        /* position: relative; 
        top: -5px;  */
        padding: 4px 8px !important;
        border-radius: 5px;
        color: white;
        padding: 0;
        height: 25px;
        width: 25px;
        background: #1DCE8E;
        /* color:#1DCE8E; */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.19);

    }

    .btn-plus strong {
        /* position: relative; 
        top: -5px;  */

        padding: 4px 8px !important;
        border-radius: 5px;

        color: white;
        padding: 0;
        height: 25px;
        width: 25px;
        background: #1DCE8E;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.19);


    }

    #add_nu {
        height: 25px !important;
        border-radius: 2px;
        width: 20px;
        padding: 0px;
        margin-top: 1px;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.19);

    }

    .btn-plus {
        height: 25px;
    }

    /* Dropdown content (hidden by default) */
    .stores-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .stores-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .stores-content a:hover {
        background-color: #ddd;
    }

    /* Show the dropdown menu on hover */
    .stores-dropdown:hover .stores-content {
        display: block;
    }

       @media only screen and (max-width: 600px){
         .for-mob, .dt-brand__logo-symbol {
            display: none !important;
         }
         #switch_stores_{
            font-size: 10px !important;
         }
         .dt-header__container{
            background-color: #0B447C;
         }
         i.icon.icon-xl.icon-menu.d-lg-none{
            color: white;
         }
         .row.fst_dd{
                margin-right: auto;
            margin-left: auto;
         }
        }
}

    /* .btn-plus strong{
        position: relative;
        top: -5px;
        padding: 0;

      } */
    </style>


</head>

<body class="dt-sidebar--fixed dt-header--fixed dt-sidebar--folded">

    <!-- Loader -->
    <div class="dt-loader-container">
        <div class="dt-loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10">
                </circle>
            </svg>
        </div>
    </div>
    <!-- /loader -->

    <div class="modal fade show" id="modal_choose_company" tabindex="-1" role="dialog" aria-labelledby="model-8"
        aria-modal="true" style="display: none;
        position: fixed;
        top: -600px;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 2500;
        display: none;
        height:100pc;
        overflow: hidden;
        -webkit-overflow-scrolling: touch;
        background: rgba(0,0,0,0.5) !important;
        outline: 0;">

        <div class="modal-dialog modal-dialog-centered" role="document">

            <!-- Modal Content -->
            <div class="modal-content">



                <!-- Modal Header -->
                <div class="modal-header" style="color:white">
                    <h3 class="modal-title mdl_hdn" id="model-8" style="color:white"></h3>
                    <button type="button" class="close hide_btn store_modal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color:white">×</span>
                    </button>
                </div>
                <!-- /modal header -->

                <!-- Modal Body -->
                <div class="modal-body">
                    <h4 id="list_comp_tables">Team Member Added Successfully!</h4>
                    <span id="list_comp_tables2"></span>
                </div>
                <!-- /modal body -->

                <!-- Modal Footer -->
                <!-- <div class="modal-footer">
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
                </div> -->
                <!-- /modal footer -->

            </div>
            <!-- /modal content -->

        </div>
    </div>




    <div class="modal fade show" style="display: none; background: rgba(0,0,0,0.5)" id="switch" tabindex="-1"
        role="dialog" aria-labelledby="model-8" aria-modal="true" style="display: block; padding-left: 17px;">
        <div class="modal-dialog modal-dialog-centered" role="document">

            <!-- Modal Content -->
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header" style="background-color: #038FDE; color:white">
                    <h3 class="modal-title" id="model-8" style="color:white">Switch Stores</h3>
                    <button type="button" class="close hide_btn store_modal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color:white">×</span>
                    </button>
                </div>
                <!-- /modal header -->

                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="ant-table" style="max-height: 500px;
    overflow: auto;">
                        <div class="ant-table-container">
                            <div class="ant-table-content">
                                <table style="table-layout: auto;">
                                    <colgroup>
                                        <col class="ant-table-selection-col" />
                                    </colgroup>
                                    <thead class="ant-table-thead switch_header" style="display: none;">
                                        <tr>

                                            <th class="ant-table-cell" style="width: 30%">Store Name
                                            </th>

                                            <th class="ant-table-cell" style="width: 30%">Store Address
                                            </th>

                                            <th class="ant-table-cell" style="width: 15%">Action
                                            </th>

                                        </tr>
                                    </thead>

                                    <tbody class="ant-table-tbody" id="add_stores">
                                        <tr>
                                            <div class="switching"
                                                style="display:flex; justify-content: center; margin-top: 10px;padding:20px ">
                                                <span class="ant-btn-loading-icon dt_loader_details"><span role="img"
                                                        aria-label="loading" class="anticon anticon-loading"><svg
                                                            viewBox="0 0 1024 1024" focusable="false"
                                                            class="anticon-spin" data-icon="loading" width="2em"
                                                            height="2em" fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M988 548c-19.9 0-36-16.1-36-36 0-59.4-11.6-117-34.6-171.3a440.45 440.45 0 00-94.3-139.9 437.71 437.71 0 00-139.9-94.3C629 83.6 571.4 72 512 72c-19.9 0-36-16.1-36-36s16.1-36 36-36c69.1 0 136.2 13.5 199.3 40.3C772.3 66 827 103 874 150c47 47 83.9 101.8 109.7 162.7 26.7 63.1 40.2 130.2 40.2 199.3.1 19.9-16 36-35.9 36z">
                                                            </path>
                                                        </svg></span></span>
                                            </div>
                                        </tr>


                                    </tbody>


                                </table>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /modal body -->

                <!-- Modal Footer -->
                <!-- <div class="modal-footer">
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
                </div> -->
                <!-- /modal footer -->

            </div>
            <!-- /modal content -->

        </div>
    </div>


    <div class="col-md-12">
        <div id="myNav" class="overlay" style="z-index: 2000">
            <!-- <a href="javascript:void(0)" class="rmbtn" onclick="closeNav()" style="color: #09B1F0; font-size: 40px"> × </a>  -->
            <span style="cursor: pointer;" class="rmbtn" onclick="closeNav()" style="color: #09B1F0; font-size: 40px"> ×
            </span>
            <a href="" class="logo" onclick="closeNav()" style="font-size: 16px">
                <img src="../files/images/general_images/nahere_logo_blue.png" alt="alternative" style="width: 28px">
                <span> NaHere!</span>
            </a>
            <div>
            </div>

            <span id="does_user_have_profile" style="display:none;"></span>
            <span id="does_user_have_roles" style="display:none;"></span>
            

            

            <div class="container" style="height: 100vh; width:100vw;">
                <h2 class="app">Applications</h2>
                <!-- <h4 style="text-align: center; color: black;">Connected applications </h4> -->
                <a href="/user/myapps" style="text-align: center; font-weight: 0px; font-size: 14px;">Add
                    More Apps <i class="fa fa-angle-right"></i></a>
                <span class="set_as_default" style="cursor: pointer">
                    <a style="text-align: center; font-weight: 0px; font-size: 11px;">Set default app</a>
                </span>
                <!-- <p>Set default app</p> -->
                <div class="row fst_dd" style="margin-top: 3%;">

                </div>

            </div>

            <div class="container" style="">
                <div class="col-md-12">
                    <li>
                        <!-- <a href="/user/myapps">Add More Apps<i class="fa fa-angle-right"></i></a> -->
                    </li>
                </div>
            </div>
        </div>
    </div>

    <!-- Root -->
    <div class="dt-root">
        <!-- Header -->
        <header class="dt-header" style="z-index: 10 !important;">

            <!-- Header container -->
            <div class="dt-header__container">

                <!-- Brand -->
                <div class="dt-brand">

                    <!-- Brand tool -->
                    <div class="dt-brand__tool" data-toggle="main-sidebar">
                        <i class="icon icon-xl icon-menu-fold d-none d-lg-inline-block"></i>
                        <i class="icon icon-xl icon-menu d-lg-none"></i>
                        <span id="user_perm_status" style="display: none"></span>
                        <span id="monitor_status" style="display: none"></span>
                        <span id="package_status" style="display: none"></span>


                    </div>
                    <!-- /brand tool -->

                    <!-- Brand logo -->
                    <span class="dt-brand__logo">
                        <a class="dt-brand__logo-link active" href="#">
                            <!-- <img class="dt-brand__logo-img d-none d-lg-inline-block"
                                src="https://via.placeholder.com/90x18" alt="Wieldy"> -->
                            <span class="dt-side-nav__text" style="color:#fa8c16; margin-top:5px">Point of Sale</span>
                            <img class="dt-brand__logo-symbol d-lg-none" src="https://via.placeholder.com/35x18"
                                alt="Wieldy">
                        </a>
                    </span>
                    <!-- /brand logo -->

                </div>
                <!-- <div class="dt-brand">

                    <div class="dt-brand__tool" data-toggle="main-sidebar">
                        <i class="icon icon-xl icon-menu-fold d-none d-lg-inline-block"></i>
                        <i class="icon icon-xl icon-menu d-lg-none"></i>
                    </div>

                    <span class="dt-side-nav__item" style="margin-left: -20px;">
                        <span class="dt-side-nav__link" title="Widgets">
                            <span class="dt-side-nav__text">Point of Sales</span> </span>
                    </span>
                  

                </div> -->
                <!-- /brand -->




                <!-- Header toolbar-->
                <div class="dt-header__toolbar " style="background-color: #0b447c;">

                    <!-- Search box -->
                    <!-- <form class="search-box d-none d-lg-block">
                        <input class="form-control border-0 filter" placeholder="Search in app...">
                        <span class="search-icon text-light-gray"><i class="icon icon-search icon-lg"></i></span>
                    </form> -->
                    <!-- /search box -->

                    <!-- Header Menu Wrapper -->
                    <div class="dt-nav-wrapper">
                        <!-- Header Menu -->
                        <ul class="dt-nav d-lg-none d-sm-none for-mob">
                            <li class="dt-nav__item dt-notification-search dropdown">

                                <!-- Dropdown Link -->
                                <a href="#" class="dt-nav__link no-arrow" aria-haspopup="true" aria-expanded="false"> <i
                                        class="icon icon-search-new icon-fw icon-lg"></i> </a>
                                <!-- /dropdown link -->

                                <!-- Dropdown Option -->
                                <div class="dropdown-menu">

                                    <!-- Search Box -->
                                    <form class="search-box right-side-icon">
                                        <input class="form-control form-control-lg" type="search"
                                            placeholder="Search in app...">
                                        <button type="submit" class="search-icon"><i
                                                class="icon icon-search icon-lg"></i></button>
                                    </form>
                                    <!-- /search box -->

                                </div>
                                <!-- /dropdown option -->

                            </li>
                        </ul>
                        <!-- /header menu -->

                        <!-- Header Menu -->
                        <ul class="dt-nav d-lg-none d-sm-none for-mob">
                            <li class="dt-nav__item dt-notification dropdown">

                                <!-- Dropdown Link -->
                                <a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"> <i
                                        class="icon icon-notification icon-fw dt-icon-alert"></i>
                                </a>
                                <!-- /dropdown link -->

                                <!-- Dropdown Option -->
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                                    <!-- Dropdown Menu Header -->
                                    <div class="dropdown-menu-header">
                                        <h4 class="title">Notifications (9)</h4>

                                        <div class="ml-auto action-area">
                                            <a href="javascript:void(0)">Mark All Read</a> <a class="ml-2"
                                                href="javascript:void(0)">
                                                <i class="icon icon-setting icon-lg text-light-gray"></i> </a>
                                        </div>
                                    </div>
                                    <!-- /dropdown menu header -->

                                    <!-- Dropdown Menu Body -->
                                    <div class="dropdown-menu-body ps-custom-scrollbar">

                                        <div class="h-auto">
                                            <!-- Media -->
                                            <a href="javascript:void(0)" class="media">

                                                <!-- Avatar -->
                                                <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150"
                                                    alt="User">
                                                <!-- avatar -->

                                                <!-- Media Body -->
                                                <span class="media-body">
                                                    <span class="message">
                                                        <span class="user-name">Stella Johnson</span> and <span
                                                            class="user-name">Chris Harris</span>
                                                        have birthdays today. Help them celebrate!
                                                    </span>
                                                    <span class="meta-date">8 hours ago</span>
                                                </span>
                                                <!-- /media body -->

                                            </a>
                                            <!-- /media -->

                                            <!-- Media -->
                                            <a href="javascript:void(0)" class="media">

                                                <!-- Avatar -->
                                                <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150"
                                                    alt="User">
                                                <!-- avatar -->

                                                <!-- Media Body -->
                                                <span class="media-body">
                                                    <span class="message">
                                                        <span class="user-name">Jonathan Madano</span> commented on your
                                                        post.
                                                    </span>
                                                    <span class="meta-date">9 hours ago</span>
                                                </span>
                                                <!-- /media body -->

                                            </a>
                                            <!-- /media -->

                                            <!-- Media -->
                                            <a href="javascript:void(0)" class="media">

                                                <!-- Avatar -->
                                                <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150"
                                                    alt="User">
                                                <!-- avatar -->

                                                <!-- Media Body -->
                                                <span class="media-body">
                                                    <span class="message">
                                                        <span class="user-name">Chelsea Brown</span> sent a video
                                                        recomendation.
                                                    </span>
                                                    <span class="meta-date">
                                                        <i class="icon icon-menu-right text-primary icon-fw mr-1"></i>
                                                        13 hours ago
                                                    </span>
                                                </span>
                                                <!-- /media body -->

                                            </a>
                                            <!-- /media -->

                                            <!-- Media -->
                                            <a href="javascript:void(0)" class="media">

                                                <!-- Avatar -->
                                                <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150"
                                                    alt="User">
                                                <!-- avatar -->

                                                <!-- Media Body -->
                                                <span class="media-body">
                                                    <span class="message">
                                                        <span class="user-name">Alex Dolgove</span> and <span
                                                            class="user-name">Chris Harris</span>
                                                        like your post.
                                                    </span>
                                                    <span class="meta-date">
                                                        <i class="icon icon-like text-light-blue icon-fw mr-1"></i>
                                                        yesterday at 9:30
                                                    </span>
                                                </span>
                                                <!-- /media body -->

                                            </a>
                                            <!-- /media -->
                                        </div>

                                    </div>
                                    <!-- /dropdown menu body -->

                                    <!-- Dropdown Menu Footer -->
                                    <div class="dropdown-menu-footer">
                                        <a href="javascript:void(0)" class="card-link"> See All <i
                                                class="icon icon-arrow-right icon-fw"></i>
                                        </a>
                                    </div>
                                    <!-- /dropdown menu footer -->
                                </div>
                                <!-- /dropdown option -->

                            </li>

                            <li class="dt-nav__item dt-notification dropdown">

                                <!-- Dropdown Link -->
                                <a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"> <i
                                        class="icon icon-chat-new icon-fw"></i> </a>
                                <!-- /dropdown link -->

                                <!-- Dropdown Option -->
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                                    <!-- Dropdown Menu Header -->
                                    <div class="dropdown-menu-header">
                                        <h4 class="title">Messages (6)</h4>

                                        <div class="ml-auto action-area">
                                            <a href="javascript:void(0)">Mark All Read</a> <a class="ml-2"
                                                href="javascript:void(0)">
                                                <i class="icon icon-setting icon-lg text-light-gray"></i></a>
                                        </div>
                                    </div>
                                    <!-- /dropdown menu header -->

                                    <!-- Dropdown Menu Body -->
                                    <div class="dropdown-menu-body ps-custom-scrollbar">

                                        <div class="h-auto">

                                            <!-- Media -->
                                            <a href="javascript:void(0)" class="media">

                                                <!-- Avatar -->
                                                <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150"
                                                    alt="User">
                                                <!-- avatar -->

                                                <!-- Media Body -->
                                                <span class="media-body text-truncate">
                                                    <span class="user-name mb-1">Chris Mathew</span>
                                                    <span class="message text-light-gray text-truncate">Okay.. I will be
                                                        waiting for your...</span>
                                                </span>
                                                <!-- /media body -->

                                                <span class="action-area h-100 min-w-80 text-right">
                                                    <span class="meta-date mb-1">8 hours ago</span>
                                                    <!-- Toggle Button -->
                                                    <span class="toggle-button" data-toggle="tooltip"
                                                        data-placement="left" title="Mark as read">
                                                        <span class="show"><i
                                                                class="icon icon-circle-o icon-fw f-10 text-light-gray"></i></span>
                                                        <span class="hide"><i
                                                                class="icon icon-circle icon-fw f-10 text-light-gray"></i></span>
                                                    </span>
                                                    <!-- /toggle button -->
                                                </span>
                                            </a>
                                            <!-- /media -->

                                            <!-- Media -->
                                            <a href="javascript:void(0)" class="media">

                                                <!-- Avatar -->
                                                <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150"
                                                    alt="User">
                                                <!-- avatar -->

                                                <!-- Media Body -->
                                                <span class="media-body text-truncate">
                                                    <span class="user-name mb-1">Alia Joseph</span>
                                                    <span class="message text-light-gray text-truncate">
                                                        Alia Joseph just joined Messenger! Be the first to send a
                                                        welcome message or sticker.
                                                    </span>
                                                </span>
                                                <!-- /media body -->

                                                <span class="action-area h-100 min-w-80 text-right">
                                                    <span class="meta-date mb-1">9 hours ago</span>
                                                    <!-- Toggle Button -->
                                                    <span class="toggle-button" data-toggle="tooltip"
                                                        data-placement="left" title="Mark as read">
                                                        <span class="show"><i
                                                                class="icon icon-circle-o icon-fw f-10 text-light-gray"></i></span>
                                                        <span class="hide"><i
                                                                class="icon icon-circle icon-fw f-10 text-light-gray"></i></span>
                                                    </span>
                                                    <!-- /toggle button -->
                                                </span>
                                            </a>
                                            <!-- /media -->

                                            <!-- Media -->
                                            <a href="javascript:void(0)" class="media">

                                                <!-- Avatar -->
                                                <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150"
                                                    alt="User">
                                                <!-- avatar -->

                                                <!-- Media Body -->
                                                <span class="media-body text-truncate">
                                                    <span class="user-name mb-1">Joshua Brian</span>
                                                    <span class="message text-light-gray text-truncate">
                                                        Alex will explain you how to keep the HTML structure and all
                                                        that.
                                                    </span>
                                                </span>
                                                <!-- /media body -->

                                                <span class="action-area h-100 min-w-80 text-right">
                                                    <span class="meta-date mb-1">12 hours ago</span>
                                                    <!-- Toggle Button -->
                                                    <span class="toggle-button" data-toggle="tooltip"
                                                        data-placement="left" title="Mark as read">
                                                        <span class="show"><i
                                                                class="icon icon-circle-o icon-fw f-10 text-light-gray"></i></span>
                                                        <span class="hide"><i
                                                                class="icon icon-circle icon-fw f-10 text-light-gray"></i></span>
                                                    </span>
                                                    <!-- /toggle button -->
                                                </span>
                                            </a>
                                            <!-- /media -->

                                            <!-- Media -->
                                            <a href="javascript:void(0)" class="media">

                                                <!-- Avatar -->
                                                <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150"
                                                    alt="User">
                                                <!-- avatar -->

                                                <!-- Media Body -->
                                                <span class="media-body text-truncate">
                                                    <span class="user-name mb-1">Domnic Brown</span>
                                                    <span class="message text-light-gray text-truncate">Okay.. I will be
                                                        waiting for your...</span>
                                                </span>
                                                <!-- /media body -->

                                                <span class="action-area h-100 min-w-80 text-right">
                                                    <span class="meta-date mb-1">yesterday</span>
                                                    <!-- Toggle Button -->
                                                    <span class="toggle-button" data-toggle="tooltip"
                                                        data-placement="left" title="Mark as read">
                                                        <span class="show"><i
                                                                class="icon icon-circle-o icon-fw f-10 text-light-gray"></i></span>
                                                        <span class="hide"><i
                                                                class="icon icon-circle icon-fw f-10 text-light-gray"></i></span>
                                                    </span>
                                                    <!-- /toggle button -->
                                                </span>
                                            </a>
                                            <!-- /media -->

                                        </div>

                                    </div>
                                    <!-- /dropdown menu body -->

                                    <!-- Dropdown Menu Footer -->
                                    <div class="dropdown-menu-footer">
                                        <a href="javascript:void(0)" class="card-link"> See All <i
                                                class="icon icon-arrow-right icon-fw"></i>
                                        </a>
                                    </div>
                                    <!-- /dropdown menu footer -->
                                </div>
                                <!-- /dropdown option -->

                            </li>
                        </ul>
                        <!-- /header menu -->

                        <!-- Header Menu -->
                        <!-- <ul class="dt-nav">
                            <li class="dt-nav__item dropdown">

                                <a href="#" class="dt-nav__link dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="flag-icon flag-icon-us flag-icon-lg"></i><span
                                        style="color: white;">English</span> </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="flag-icon flag-icon-us mr-2"></i><span>English</span> </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="flag-icon flag-icon-cn mr-2"></i><span>Chinese</span> </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="flag-icon flag-icon-es mr-2"></i><span>Spanish</span> </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="flag-icon flag-icon-fr mr-2"></i><span>French</span> </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="flag-icon flag-icon-it mr-2"></i><span>Italian</span> </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="flag-icon flag-icon-sa mr-2"></i><span>Arabic</span> </a>
                                </div>

                            </li>
                        </ul> -->
                        <!-- /header menu -->

                        <!-- Header Menu -->


                        <!-- <ul class="navbar-nav">
       
                        </ul> -->
                        <!-- <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false" onclick="openNav()">
                                        <i class="fa fa-th fa-3x"></i>

                                    </a>

                                </li> -->

                        <select id="switch_stores_" class="enter_switch_store" style="border: none;
                            padding: 10px;
                            background: transparent;
                            color: white;
                            font-size: 20px;">

                            <!-- <option id="enter_ware_44" dir="entername_Isolo Warehouse" value="44">Isolo Warehouse
                            </option>
                            <option id="enter_ware_45" dir="entername_obanikoro ESTATE" value="45">obanikoro ESTATE
                            </option> -->
                        </select>

                        <!-- <span class="dropbtn stores-dropdown dropdown-toggle" data-toggle="dropdown"
                            aria-expanded="false" style="align-content: center;
                                display: flex;
                                align-self: center;
                                color: white;
                                padding-right: 20px;
                                position: relative;
                                top: 7px;">

                            <h4 style="font-size: 20px;
                                color: white;
                                margin: 0;
                                position: relative;
                                top: -8px;">All Stores</h4> -->

                        <!-- <span class="dropbtn">
                                <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg"
                                   >
                            </span> -->
                        <!-- <div class="stores-content">
                                <a href="#">Link 1</a>
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a> -->
                        <!-- <li style="background-color: "><a
                                        onclick="window.location.href = base_url+'/user/myprofile'"><i
                                            class="fa fa-pencil pull-right"></i><b id="user_name">Seye Taiwo</b></a>
                                </li>

                                <li><a onclick="window.location.href = base_url+'/user/change_password'">Change
                                        Password</a></li>

                                <li><a
                                        onclick="function hi(){ localStorage.clear(); window.location.href = base_url}; hi();"><i
                                            class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a> -->
                        <!-- </div> -->
                        <!-- </span> -->
                        <div class="dropdown head_store" style="align-content: center;
                            display: flex;
                            align-self: center;">
                            <!-- <button class="dropbtn">Dropdown</button> -->

                            <span class="dropbtn dropdown-toggle info-number" data-toggle="dropdown"
                                aria-expanded="false" onclick="openNav()">
                                <i class="fa fa-th fa-3x" style="font-size: 15px;"></i>

                            </span>
                            <!-- <div class="dropdown-content">
                                            <a href="#">Link 2</a>
                                            <a href="#">Link 2</a>
                                            <a href="#">Link 3</a>
                                        </div> -->
                        </div>


                        <div class="dropdown" style="align-content: center;
                            display: flex;
                            align-self: center;">
                            <!-- <button class="dropbtn">Dropdown</button> -->

                            <span class="dropbtn user-profile dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false" id="username">
                                <img src="" alt="" id="profile_img" width="29" height="29" class="rounded-circle">

                                <!-- <span class="dropbtn">
                                <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg"
                                   >
                            </span> -->
                                <div class="dropdown-content">
                                    <li style="background-color: "><a
                                            onclick="window.location.href = base_url+'/user/myprofile'"><i
                                                class="fa fa-pencil pull-right"></i><b id="user_name"></b></a></li>

                                    <li><a onclick="window.location.href = base_url+'/user/change_password'">Change
                                            Password</a></li>

                                    <li><a
                                            onclick="function hi(){ localStorage.clear(); window.location.href = base_url}; hi();"><i
                                                class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    <!-- <a href="#">Link 1</a>
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a> -->
                                </div>
                        </div>
                        <!-- <ul class="dt-nav navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg"
                                        width="40" height="40" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Dashboard</a>
                                    <a class="dropdown-item" href="#">Edit Profile</a>
                                    <a class="dropdown-item" href="#">Log Out</a>
                                </div>
                            </li>

                        </ul> -->
                        <!-- /header menu -->

                    </div>
                    <!-- Header Menu Wrapper -->

                </div>
                <!-- /header toolbar -->

            </div>
            <!-- /header container -->

        </header>
        <!-- /header -->

        <!-- Site Main -->
        <main class="dt-main">
            <!-- Sidebar -->
            <aside id="main-sidebar" class="dt-sidebar">
                <div class="dt-sidebar__container">

                    <!-- Sidebar Notification -->
                    <!-- <div class="dt-sidebar__notification  d-none d-lg-block"> -->
                    <!-- <div class="dropdown mb-6" id="user-menu-dropdown">

                            <a href="#" class="dropdown-toggle dt-avatar-wrapper text-body" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img class="dt-avatar" src="https://via.placeholder.com/150x150" alt="Domnic Harris">
                                <span class="dt-avatar-info">
                                    <span class="dt-avatar-name">NaHere Account</span>
                                </span> </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div
                                    class="dt-avatar-wrapper flex-nowrap p-6 mt--5 bg-gradient-purple text-white rounded-top">
                                    <img class="dt-avatar" src="https://via.placeholder.com/150x150"
                                        alt="Domnic Harris">
                                    <span class="dt-avatar-info">
                                        <span class="dt-avatar-name">NaHere Account</span>
                                        <span class="f-12">Administrator</span>
                                    </span>
                                </div>
                                <a class="dropdown-item" href="javascript:void(0)"> <i
                                        class="icon icon-user-o icon-fw mr-2 mr-sm-1"></i>Account
                                </a> <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="icon icon-setting icon-fw mr-2 mr-sm-1"></i>Setting </a>
                                <a class="dropdown-item" href="page-login.html"> <i
                                        class="icon icon-edit icon-fw mr-2 mr-sm-1"></i>Logout
                                </a>
                            </div>

                        </div> -->
                    <!-- /dropdown -->


                    <!-- <ul class="dt-list dt-list-xl">
                            <li class="dt-list__item pl-5 pr-5">
                                <a href="javascript:void(0)" class="dt-list__link"><i
                                        class="icon icon-search-new icon-xl"></i></a>
                            </li>
                            <li class="dt-list__item pl-5 pr-5">
                                <a href="javascript:void(0)" class="dt-list__link"><i
                                        class="icon icon-notification icon-xl"></i></a>
                            </li>
                            <li class="dt-list__item pl-5 pr-5">
                                <a href="javascript:void(0)" class="dt-list__link"><i
                                        class="icon icon-chat-new icon-xl"></i></a>
                            </li>
                        </ul> -->
                    <!-- </div> -->
                    <!-- /sidebar notification -->

                    <!-- Sidebar Navigation -->
                    <ul class="dt-side-nav">

                        <!-- Menu Header -->
                        <!-- <li class="dt-side-nav__item dt-side-nav__header">
                            <span class="dt-side-nav__text">main</span>
                        </li> -->
                        <!-- /menu header -->

                        <!-- Menu Item -->

                        <li class="dt-side-nav__item" id="dashboard" style="display: none;">
                            <a href="dashboard" class="dt-side-nav__link" title="Admin Dashboard"> <i
                                    class="icon icon-chart-area icon-fw icon-xl"></i>
                                <span class="dt-side-nav__text">Dashboard</span> </a>
                        </li>

                        <!-- <li class="dt-side-nav__item">
                            <a href="dashboardrep" class="dt-side-nav__link" title="Reps Dashboard"> <i
                                    class="icon icon-chart-area icon-fw icon-xl"></i>
                                <span class="dt-side-nav__text">Reps Dashboard</span> </a>
                        </li> -->


                        <li class="dt-side-nav__item open" id="shop" style="display: none;">
                            <a href="/pos" class="dt-side-nav__link" title="Shop">
                                <i class="icon icon-dashboard icon-fw icon-xl"></i>
                                <span class="dt-side-nav__text">Shop</span> </a>

                            <!-- Sub-menu -->
                            <!-- <ul class="dt-side-nav__sub-menu">
                                <li class="dt-side-nav__item">
                                    <a href="page-blank.html?menu=dashboard-crypto" class="dt-side-nav__link"
                                        title="Crypto"> <i class="icon icon-crypto icon-fw icon-sm"></i>
                                        <span class="dt-side-nav__text">Crypto</span> </a>
                                </li>
                                <li class="dt-side-nav__item">
                                    <a href="page-blank.html?menu=dashboard-crm" class="dt-side-nav__link" title="CRM">
                                        <i class="icon icon-crm icon-fw icon-sm"></i>
                                        <span class="dt-side-nav__text">Crm</span> </a>
                                </li>

                                <li class="dt-side-nav__item">
                                    <a href="index.html" class="dt-side-nav__link" title="Listing">
                                        <i class="icon icon-listing-dbrd icon-fw icon-sm"></i> <span
                                            class="dt-side-nav__text">Listing</span> </a>
                                </li>

                            </ul> -->
                            <!-- /sub-menu -->

                        </li>
                        <li class="dt-side-nav__item" id="sales_history_pos" style="display: none;">
                            <a href="sales_history" class="dt-side-nav__link" title="Reps Dashboard"> <i
                                    class="icon icon-timepicker icon-fw icon-xl"></i>
                                <span class="dt-side-nav__text">Sales History</span> </a>
                        </li>
                        <li class="dt-side-nav__item" id="products" style="display: none;">
                            <a href="products" class="dt-side-nav__link" title="Products"> <i
                                    class="icon icon-widgets icon-fw icon-xl"></i>
                                <span class="dt-side-nav__text">Products</span> </a>
                        </li>

                        <li class="dt-side-nav__item" id="contacts" style="display: none;">
                            <a href="contact" class="dt-side-nav__link" title="Contacts"> <i
                                    class="icon-add-circle icon-fw icon-xl"></i>
                                <span class="dt-side-nav__text">Contacts</span> </a>
                        </li>

                        <li class="dt-side-nav__item" id="switch_stores" style="display: none; cursor: pointer;">
                            <span class="dt-side-nav__link switch_stores" title="Switch Store">
                                <i class="icon icon-crm icon-fw icon-xl"></i>
                                <span class="dt-side-nav__text">Switch Store</span>
                            </span>
                        </li>

                        <li class="dt-side-nav__item" id="pos_settings" style="display: none;">
                            <a href="#" class="dt-side-nav__link" title="Settings"> <i
                                    class="icon icon-apps icon-fw icon-xl"></i>
                                <span class="dt-side-nav__text">Settings</span> </a>
                            <ul class="dt-side-nav__sub-menu">
                                <li class="dt-side-nav__item">
                                    <a href="users" class="dt-side-nav__link" title="Users"> <i
                                            class="icon icon-crypto icon-fw icon-sm"></i>
                                        <span class="dt-side-nav__text">Users</span> </a>
                                </li>

                                <li class="dt-side-nav__item">
                                    <a href="permissions" class="dt-side-nav__link" title="Stores">
                                        <i class="icon icon-crm icon-fw icon-sm"></i>
                                        <span class="dt-side-nav__text">Permissions</span> </a>
                                </li>

                                <li class="dt-side-nav__item">
                                    <a href="all_stores" class="dt-side-nav__link" title="Stores">
                                        <i class="icon icon-crm icon-fw icon-sm"></i>
                                        <span class="dt-side-nav__text">Stores</span> </a>
                                </li>


                                <li class="dt-side-nav__item">
                                    <a href="all_categories" class="dt-side-nav__link" title="Categories">
                                        <i class="icon icon-crm icon-fw icon-sm"></i>
                                        <span class="dt-side-nav__text">Categories</span> </a>
                                </li>

                                <li class="dt-side-nav__item">
                                    <a href="unit" class="dt-side-nav__link" title="Unit">
                                        <i class="icon icon-listing-dbrd icon-fw icon-sm"></i> <span
                                            class="dt-side-nav__text">Unit</span> </a>
                                </li>

                                <li class="dt-side-nav__item">
                                    <a href="backup" class="dt-side-nav__link" title="Backup">
                                        <i class="icon icon-listing-dbrd icon-fw icon-sm"></i> <span
                                            class="dt-side-nav__text">Backup</span> </a>
                                </li>

                                <li class="dt-side-nav__item">
                                    <a href="restore" class="dt-side-nav__link" title="Restore">
                                        <i class="icon icon-listing-dbrd icon-fw icon-sm"></i> <span
                                            class="dt-side-nav__text">Restore</span> </a>
                                </li>

                                <li class="dt-side-nav__item">
                                    <a href="history" class="dt-side-nav__link" title="History of Updates">
                                        <i class="icon icon-crm icon-fw icon-sm"></i>
                                        <span class="dt-side-nav__text">History of Updates</span> </a>
                                </li>


                                

                             



                            </ul>
                        </li>
                        <li class="dt-side-nav__item help" id="hel" style="display: ; cursor: pointer;">
                                <span class="dt-side-nav__link help" title="Help">
                                <i class="icon icon-alert icon-fw icon-xl"></i>
                                <span class="dt-side-nav__text">Help</span>
                                </span>
                                </li>


                </div>




            </aside>