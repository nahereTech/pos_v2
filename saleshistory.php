<?php
include("_common/header.php");
?>

<!-- Site Content Wrapper -->
<div class="dt-content-wrapper">

    <!-- Site Content -->
    <div class="dt-content">

        <div class="dt-page__header">
            <h1 class="dt-page__title" style=""> Sales History </h1>
        </div>


        <div class="ant-row">

            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-24">
                
                    
                <div class="ant-card ant-card-bordered">
                    <!-- <div class="ant-card-head">
                        <div class="ant-card-head-wrapper"><div class="ant-card-head-title">Selection Table</div></div>
                    </div> -->
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
                                                                <div class="ant-table-selection">
                                                                    <label class="ant-checkbox-wrapper">
                                                                        <span class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input" value="" /><span class="ant-checkbox-inner"></span></span>
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <th class="ant-table-cell" style="width: 50%">Name</th>
                                                            
                                                            <th class="ant-table-cell" style="width: 25%">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="ant-table-tbody">


                                                        <?php
                                                        for ($x = 0; $x <= 9; $x++) {
                                                        ?>

                                                        <tr data-row-key="1" class="ant-table-row ant-table-row-level-0">
                                                            <td class="ant-table-cell ant-table-selection-column">
                                                                <label class="ant-checkbox-wrapper">
                                                                    <span class="ant-checkbox"><input name="John Brown" type="checkbox" class="ant-checkbox-input" value="" /><span class="ant-checkbox-inner"></span></span>
                                                                </label>
                                                            </td>
                                                            <td class="ant-table-cell"><span class="gx-link">John Brown</span></td>
                                                            <td class="ant-table-cell">New York No. 1 Lake Park</td>
                                                        </tr>

                                                        <?php
                                                        }
                                                        ?>

                                                                                                                
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="ant-pagination ant-table-pagination ant-table-pagination-right" unselectable="unselectable">
                                        <li title="Previous Page" class="ant-pagination-prev ant-pagination-disabled" aria-disabled="true">
                                            <a class="ant-pagination-item-link" disabled="">
                                                <span role="img" aria-label="left" class="anticon anticon-left">
                                                    <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="left" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M724 218.3V141c0-6.7-7.7-10.4-12.9-6.3L260.3 486.8a31.86 31.86 0 000 50.3l450.8 352.1c5.3 4.1 12.9.4 12.9-6.3v-77.3c0-4.9-2.3-9.6-6.1-12.6l-360-281 360-281.1c3.8-3 6.1-7.7 6.1-12.6z"
                                                        ></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                        <li title="1" class="ant-pagination-item ant-pagination-item-1 ant-pagination-item-active" tabindex="0"><a>1</a></li>
                                        <li title="Next Page" class="ant-pagination-next ant-pagination-disabled" aria-disabled="true">
                                            <a class="ant-pagination-item-link" disabled="">
                                                <span role="img" aria-label="right" class="anticon anticon-right">
                                                    <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="right" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M765.7 486.8L314.9 134.7A7.97 7.97 0 00302 141v77.3c0 4.9 2.3 9.6 6.1 12.6l360 281.1-360 281.1c-3.9 3-6.1 7.7-6.1 12.6V883c0 6.7 7.7 10.4 12.9 6.3l450.8-352.1a31.96 31.96 0 000-50.4z"
                                                        ></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
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
<?php
include("_common/footer.php");
?>