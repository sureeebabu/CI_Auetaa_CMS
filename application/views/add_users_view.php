<?php
defined('BASEPATH') or exit('No direct script access allowed');
include('header.php');
?>

<div class="main-content">
	<div class="main-content-inner">

		<div class="page-content">

			<div class="row">
				<div class="col-xs-2"></div>
				<div class="col-xs-7">

					<div class="widget-box">
						<div class="widget-header widget-header-flat">
							<h4 class="widget-title"><?php echo $mode ?> User Details</h4>
							<a href="<?php echo base_url('user/index'); ?>" class="btn btn-primary   pull-right">List Users</a>
						</div>

						<?php
						$dataMode = "";
						if ($mode == "Add New ") {
							$dataMode = "insertUserData";
						} elseif ($mode == "Edit") {
							$dataMode = "updateUserData/" . $userID;
						}
						//echo "some = " .$dataMode;
						?>


						<form id="usersValidation" action=" <?php echo site_url('user/' . $dataMode); ?>" method="post">
							<div class="widget-body">
								<div class="widget-main">
									<div class="row">
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Enter Name <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" name="txtUserName" required="required" id="txtUserName" class="form-control" placeholder="Enter User Name" value="<?php if ($mode == "Edit") {
																																															echo $r->userName ? $r->userName : "";
																																														} ?>" />
											</div>
										</div>
										&nbsp;
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email <span class="required">*</span></label>

											<div class="col-sm-9">
												<input type="email" name="txtUserEmail" required="required" class="form-control" id="txtUserEmail" placeholder="Enter User Email" value="<?php if ($mode == "Edit") {
																																																echo $r->userEmail ? $r->userEmail : "";
																																															} ?>" class="col-xs-10 col-sm-5" />
											</div>
										</div>
										&nbsp;
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Password <span class="required">*</span></label>

											<div class="col-sm-9">
												<input type="Password" <?php if ($mode == "Edit") echo "disabled"; ?> required="required" name="txtUserPassword" class="form-control" id="txtUserPassword" value="<?php if ($mode == "Edit") {
																																																						echo $r->userPassword ? $r->userPassword : "";
																																																					} ?>" placeholder="Enter Password" class="col-xs-10 col-sm-5" />
											</div>
										</div>
										&nbsp;
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Mobile No</label>

											<div class="col-sm-9">
												<input type="text" name="txtUserMobNo" id="txtUserMobNo" class="form-control" placeholder="Enter Mobile No" maxlength="10" value="<?php if ($mode == "Edit") {
																																														echo $r->userMobileNo ? $r->userMobileNo : "";
																																													} ?>" class="col-xs-10 col-sm-5" />
											</div>
										</div>
										&nbsp;
										<!-- 	<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">User Image</label>

				<div class="col-sm-9">
					<input type="file" id="id-input-file-2" />
				</div>
			</div>
			&nbsp; -->
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Active</label>

											<div class="col-sm-9">
												<label class="inline">
													<input id="chkIsActive" name="chkIsActive" type="checkbox" class="ace ace-switch ace-switch-5" checked="<?php if ($mode == "Edit") {
																																								echo $r->userIsActive ? $r->userIsActive : "";
																																							} ?>" />
													<span class="lbl middle"></span>
												</label>

											</div>
										</div>
										&nbsp;
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-1">User Role</label>
											<div class="col-sm-9">
												<select name='ddlUserRole' class="form-group" required="required" style="width: 250px;">
													<option value="	">-- Select User Role --</option>
													<option value='Admin' <?php if ($mode == "Edit") {
																				if ($r->userRole == 'Admin') echo 'selected = "selected"';
																			} ?>>Admin</option>
													<option value='User' <?php if ($mode == "Edit") {
																				if ($r->userRole == 'User') echo 'selected = "selected"';
																			} ?>>User</option>
												</select>
											</div>
										</div>
										&nbsp;
										<div class="form-group">
											<div class="col-sm-12">
												<input type="submit" name="btnAddEditUser" class="btn btn-primary pull-right">
											</div>
										</div>
									</div>

								</div>
							</div>
						</form>
					</div>
				</div><!-- /.col -->
				<div class="col-xs-3">&nbsp;</div>
			</div>

		</div>


	</div>
</div>

<?php
include('footer.php');
?>