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
							<h4 class="widget-title">Change Password</h4>
						</div>

						<form id="changePwdValidation" action=" <?php echo site_url('changepwd/checkOldPass'); ?>" method="post">
							<div class="widget-body">
								<div class="widget-main">
									<div class="row">
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="txtOldPwd">Old Password <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="Password" name="txtOldPwd" class="form-control" placeholder="Enter Old Password" required="required" id="txtOldPwd" />
											</div>
										</div>
										&nbsp;
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="txtNewPwd">New Password <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="Password" name="txtNewPwd" class="form-control" placeholder="Enter New Password" required="required" id="txtNewPwd" />
											</div>
										</div>
										&nbsp;
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="txtConfirmPwd">Confirm Password <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="Password" name="txtConfirmPwd" class="form-control" placeholder="Enter Confirm Password" required="required" id="txtConfirmPwd" />
											</div>
										</div>
										&nbsp;


										<div class="form-group">
											<label class="col-sm-3"></label>
											<div class="col-sm-9">
												<?php
												echo "<b style='color:red;'>" . $data . "</b>";
												?>
											</div>
										</div>


										<div class="form-group">
											<div class="col-xs-12 col-sm-12">
												<input type="submit" name="btnChangePwd" class="btn btn-primary pull-right">
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