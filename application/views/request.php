<div class="col-md-12">
          <div class="nav-tabs-custom">
             <ul class="nav nav-tabs">
				  <li class="active"><a href="<?php echo base_url();?>clinic/newRequest">New Request</a></li>
                  
                 </ul>
				</div>
                               
                <div class="box-header with-border">
                  <h5 class="box-title">Request</h5>
                </div>	
	
<div class="col-md-4">
                    
				<form  method="post" action="<?php echo base_url();?>clinic/saveRequest">
				
		       
                      <div id="">
                
                      <label>Patient's Name:  <span style="color:red">*</span></label> 
                        <input type="text" class="form-control" name="name" id="name" style="width:100%;" autocomplete="off" required>
    
					</div>
                       
		    
                    
					<div class="input-group date" data-provide="datepicker">
					<label>Preferred Appointment date:  <span style="color:red">*</span></label> 
                      <input name="requested_date"  type="text" id="reqdate"   class="form-control" value="" autocomplete="off" required>
                      <div class="input-group-addon">
                      <span class="glyphicon glyphicon-th"></span>
                     </div>
					 </div>
					 <div id="">
                      <label>Doctor:  <span style="color:red"></span></label> 
                        <select class="form-control" name="doctor" id="doctor" style="width:100%;">					
		               	</select>
					  <a href="#" target="blank">Add Doctor</a>
					</div>

					 <div id="">
                     	<div id="">
                      <label>Contact:  <span style="color:red">*</span></label> 
                        <input type="tel" class="form-control" name="mobile" id="contact" autocomplete="off" style="width:100%;" required>
    
					</div>
					</div>

					<div id="">
                     	<div id="">
                      <label>Email:  <span style="color:red">*</span></label> 
                        <input type="tel" class="form-control" name="email" id="email" autocomplete="off" style="width:100%;" required>
    
					</div>
					</div>
					 
					
					<div id="">
                      <label>Clinic:  <span style="color:red"></span></label> 
                        <select class="form-control select2" name="clinic" id="myselect" style="width:100%;">
                          							  <?php foreach ($clinics as $clinic) { ?>
							
														<option value="<?php echo $clinic->clinic; ?>"><?php echo $clinic->clinic; ?></option>
														<?php } ?>
		               							
		               	</select>
					  <a href="#" target="blank">Add New Clinic</a>
					</div>
					
					
			</div>
			<div class="col-md-4">
			       <div class="form-group">
    				<label for="">Services: <span style="color:red">*</span></label>
					
					<select multiple class="form-control form-control-lg" id="services" name="services[]" style="min-height:100px; overflow:auto;" required>
					<?php 
					$i=1;
					foreach ($services as $service) {
					 ?>
					<option class="btn btn-default btn-sm list-group-item" value="<?php echo $service->name;?>"><?php  echo $i++.'. '. $service->name;?></option>
					<?php } ?>
					
					</select>
					
					</div>
			       <div id="">
                      <label>Remarks:  <span style="color:red"></span></label>
				      <textarea class="form-control" name="remarks" id="remarks" name="editor1" rows="2" cols="80" placeholder="Description"  style="background:#ebf8a4;"></textarea>
		            </div>
					<div id="">
                      <label>Address:  <span style="color:red"></span></label>
				      <textarea class="form-control" name="address" id="address" name="editor1" rows="2" cols="80" placeholder="Description"  style="background:#ebf8a4;"></textarea>
		            </div>
		            
			     
			        
                        <div id="footer-buttons" style="clear:both; margin-top:20px; margin-bottom:4px;">
                     <button  class="btn btn-primary" type="submit"  ><span class="glyphicon glyphicon-arrow-right"></span>Save</button>
					 <button class="btn btn-danger"  type="reset" ><span class="glyphicon glyphicon-repeat"></span> Reset Form</button>
                     </form>
				   </div>	  
	
			</div>
			<div class="col-md-4">
			<?php  if(!empty($user_details)){ ?>
			 <div class="box box-info">
            	<div class="box-header with-border">
              <h3 class="box-title">New Clients App Login Info</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-borderless">
			  <thead>
			  <tr>
			  <th>Name</th>
			  <th>Username</th>
			  <th>Password</th>
			  </tr>
			  </thead>
			  <tbody>
			  <?php 
			
			 foreach ($user_details as $user){?>
			  <tr>
			  <td><?php echo $user->name; ?></td>
			  <td><?php echo $user->username; ?></td>
			  <td><?php echo 'login'; ?></td>
			  </tr>
			  	 
			 <?php }
				 
				
			   ?>
			  </tbody>
			  </table>
            </div>
            <!-- /.box-body -->
          </div>
			 <?php } ?>
		  

			</div>
			