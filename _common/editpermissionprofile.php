

<style>
	.form-group{
      padding-left: 20vw;
	}
</style>
<!-- Site Content Wrapper -->
<div class="dt-content-wrapper">

    <!-- Site Content -->
    <div class="dt-content">

        <!-- <div class="dt-page__header">
            <h1 class="dt-page__title" style=""> Permissions </h1>
        </div> -->


        <div class="dt-page__header" style="display: flex; justify-content: space-between;">
            <h1 class="dt-page__title" style=""> Permissions </h1>
            <div style="display: flex;">
            <div class="input-group" style="float: right">
                        <a href="permissions"><button type="button" class="btn btn-danger">Back</button></a>
                    </div>

            </div>
        </div>

          <!-- <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group" style="float: right">
                        <a href="profilesandroles"><button type="button" class="btn btn-danger">Back</button></a>
                    </div>
                </div>
           </div> -->




        <div class="ant-row">

            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-24">
                <div class="ant-card ant-card-bordered">
                    <div class="ant-card-head">
                        <div class="ant-card-head-wrapper"><div class="ant-card-head-title title_name"></div></div>
                    </div>



    <div class="">
        <!-- <div class="page-title">
            <div class="title_left">
                <h3>Edit Profile</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group" style="float: right">
                        <a href="profilesandroles"><button type="button" class="btn btn-danger">Back</button></a>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="clearfix"></div>

        <div class="row">

            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <br>

                    <div class="x_content">



                        <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                            <!-- <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_item_name">Type <span>*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">

                  <select class="form-control col-md-7 col-xs-12 required" id="contact_type" disabled="disabled">
                    <option value="">-- Select --</option>
                    <option value="lead" selected="selected">Lead</option>
                  </select>

                </div>

              </div> -->

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="profile_name">Profile
                                    Name<span>*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <input type="text" id="profile_name" class="form-control add_item_required"
                                        name="profile_name" required="" disabled autocomplete="off">

                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="profile_desc">Profile
                                    Description<span>*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <textarea type="text" id="profile_desc" class="form-control add_item_required"
                                        name="profile_desc" disabled required="" autocomplete="off"></textarea>

                                </div>
                            </div>

                            <hr>


                            <span id="holds_roles">
                                <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;" id="roles_loader"></i>
                            </span>

                            <div class="ln_solid"></div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12 text-danger" id="error">

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success" id="update_profile"
                                        style="display: none">Update Profile</button>
                                    <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"
                                        id="item_loader"></i>
                                    <!-- <div id="add_user_loading" style="display:  none">Loading...</div> -->
                                </div>
                            </div>

                        </span>


                    </div>
                </div>
            </div>
        </div>
    </div>




       <div class="swal2-container for_edit swal2-top-end swal2-fade" style="overflow-y: auto; display:none">
        <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-toast swal2-show"
            tabindex="-1" role="alert" aria-live="polite" style="display: flex;">
            <div class="swal2-header">
                <ul class="swal2-progresssteps" style="display: none;"></ul>
                <div class="swal2-icon swal2-error" style="display: none;"><span class="swal2-x-mark"><span
                            class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span>
                </div>
                <div class="swal2-icon swal2-question" style="display: none;"><span class="swal2-icon-text">?</span>
                </div>
                <div class="swal2-icon swal2-warning" style="display: none;"><span class="swal2-icon-text">!</span>
                </div>
                <div class="swal2-icon swal2-info" style="display: none;"><span class="swal2-icon-text">i</span></div>
                <div class="swal2-icon swal2-success swal2-animate-success-icon" style="display: flex;">
                    <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                    <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
                    <div class="swal2-success-ring"></div>
                    <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                    <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                </div><img class="swal2-image" style="display: none;">
                <h2 class="swal2-title" id="swal2-title" style="display: flex;">Success</h2><button type="button"
                    class="swal2-close" style="display: none;">×</button>
            </div>
            <div class="swal2-content">
                <div id="swal2-content" style="display: none;"></div><input class="swal2-input"
                    style="display: none;"><input type="file" class="swal2-file" style="display: none;">
                <div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select
                    class="swal2-select" style="display: none;"></select>
                <div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox" class="swal2-checkbox"
                    style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea
                    class="swal2-textarea" style="display: none;"></textarea>
                <div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div>
            </div>
            <div class="swal2-actions" style="display: none;"><button type="button" class="swal2-confirm swal2-styled"
                    aria-label=""
                    style="display: none; border-left-color: rgb(3, 143, 222); border-right-color: rgb(3, 143, 222);">OK</button><button
                    type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: none;">Cancel</button>
            </div>
            <div class="swal2-footer" style="display: none;"></div>
        </div>
    </div>

    


                </div>

            </div>

        </div>








    </div>
    <!-- /site content -->

</div>



