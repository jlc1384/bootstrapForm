<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Auto Increase Check</title>
		<link rel="stylesheet" href="web/lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="web/lib/bootstrap-3.3.7-dist/node_modules/bootstrap-select/dist/css/bootstrap-select.min.css" type="text/css" />
		<link rel="stylesheet" href="web/lib/bootstrap-3.3.7-dist/css/bootstrap-datetimepicker.min.css" type="text/css" />
		<link rel="stylesheet" href="web/lib/bootstrap-3.3.7-dist/css/ai.css" type="text/css" />
		<link rel="stylesheet" href="web/lib/bootstrap-3.3.7-dist/css/bootstrap-multiselect.css" type="text/css" />
		<link rel="stylesheet" href="web/lib/bootstrap-3.3.7-dist/css/bootstrapValidator.min.css" type="text/css" />
		<link rel="shortcut icon" type="image/png" href="bootstrap-3.3.7-dist/img/indIcon.png"/>
	</head>
	<body>
	 	<div class="container">
		    <div class="signup-form-container">
				<form role="form" id="aiForm" name="aiForm" autocomplete="off">
					<div class="form-header">
						<h3 class="form-title"><i class="fa fa-user"></i>Auto Increase Check</h3>
	 				</div>
			         
					<div class="form-body">
				          
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-th-large"></span>
								</div>
								<select name="dealType" id="dealType" class="bootstrap-select selectpicker" data-live-search="true" data-width="500px" placeholder="Deal Type">
									<option value="">Select Deal Type</option>
									<option value="de1">Base Contract</option>
									<option value="de2">Add-On Contract</option>
								</select>
							</div>
							<span class="help-block" id="error"></span>
						</div>
				        
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-list-alt"></span>
								</div>
								<select name="funderSel" id="funderSel" class="bootstrap-select selectpicker" data-live-search="true" data-width="500px" placeholder="Funder">
									<option value="">Select Funder</option>
									<option value="1">Funder 1</option>
									<option value="2">Funder 2</option>
									<option value="3">Funder 3</option>
									<option value="4">Funder 4</option>
								</select>
							</div> 
							<span class="help-block" id="error"></span>                     
						</div>
				
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-th-list"></span>
								</div>
								<select class="input-group-addon" name="companyAI" id="companyAI" data-width="500px" multiple placeholder="Company">
									<option value="1">Company 1</option>
									<option value="2">Company 2</option>
									<option value="3">Company 3</option>
									<option value="4">Company 4</option>
									<option value="5">Company 5</option>
									<option value="6">Company 6</option>
								</select>
							</div>
							<span class="help-block" id="error"></span>
						</div>
				
						<div class="row">
							<div class="form-group col-lg-6">
				                <div class='input-group date datepickerclass'>
				                	<span class="input-group-addon">
				                        <span class="glyphicon glyphicon-calendar"></span>
				                    </span>

									<input type="text" class="form-control" name="upToDate" id="upToDate" placeholder="Up to Date *" data-fv-date="true" data-fv-date-format="YYYY-MM-DD" data-fv-date-message="Please fill out a valid date" />

				                </div>
			        		</div>
							
							<div class="form-group col-lg-6">
								<div class="grcheckbox">
							        <div class="grcheckbox-default">
							            <input type="checkbox" name="inclAllContr" id="inclAllContr" checked/>
							            <label for="inclAllContr">Include all Contracts (Not consider quarter dates) </label>
							        </div>
							    </div>
							</div>
						</div>

						<div class="form-footer">
						     <button type="submit" class="btn btn-success">
						     	<span class="glyphicon glyphicon-ok"></span> Accept
						     </button>
						     <button type="submit" class="btn btn-danger">
						     	<span class="glyphicon glyphicon-remove"></span> Cancel
						     </button>
						</div>
					</div>
				</form>
				</div>
 			</div>
		    
		<script src="web/lib/jquery/jquery-3.2.1.min.js"></script>
		<script src="web/lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
		<script src="web/lib/bootstrap-3.3.7-dist/node_modules/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
		<script src="web/lib/bootstrap-3.3.7-dist/js/bootstrap-datetimepicker.min.js"></script>
		<script src="web/lib/bootstrap-3.3.7-dist/js/bootstrap-multiselect.js"></script>
		<script src="web/lib/bootstrap-3.3.7-dist/js/bootstrapValidator.min.js"></script>
		<script src="web/lib/jquery/aiForm.js"></script>
	</body>
</html>