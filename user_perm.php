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
                        <div class="ant-card-head-wrapper"><div class="ant-card-head-title">Ugochukwu Nwagba</div></div>
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
                                                            <th class="ant-table-cell" style="width: 40%">Role</th>
                                                            <th class="ant-table-cell" style="width: 45%">Permissions</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody class="ant-table-tbody">
                                                        <tr data-row-key="1" class="ant-table-row ant-table-row-level-0">
                                                            <td class="ant-table-cell ant-table-selection-column" valign="top">
                                                                <label class="ant-checkbox-wrapper">
                                                                    <span class="ant-checkbox"><input name="John Brown" type="checkbox" class="ant-checkbox-input" value="" /><span class="ant-checkbox-inner"></span></span>
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
                                                            
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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
<?php
include("_common/footer.php");
?>