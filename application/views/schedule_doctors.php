
<div class="dashtwo-order-area" style="padding-top: 10px;">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Schedule Doctors</h2>
					<p style="text-align:left; font:14 px; margin-top:5px;font-weight:bold;">
					</p>
               		</div>

                <div class="col-md-12 panel-body" style="overflow-x: scroll;">
                	<form class="form" style="padding-bottom: 2em;" action="<?php echo base_url(); ?>index.php/Attendance/roster" method="post">
				    <div class="form-group">
					  <div class='input-group date datepicker'>
						<input type='text' class="form-control" />
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
						</div>
					</div>
					<div class="form-group">
    				<label for="exampleFormControlSelect2">Select Doctors</label>
					<select multiple class="form-control form-control-lg" id="select" style="min-height:200px; overflow:auto;">
					<option></option>
					
					</select>
					</div>
											
					<div class="control-group">
						<input type="submit" name="" value="Save Schedule" class="btn btn-success">
					</div>
							
							
				   </form>
				</div>
