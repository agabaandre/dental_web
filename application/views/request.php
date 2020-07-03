
<script>

</script>	
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
                    
				<form  method="post" action="">
				
		       
                      <div id="">
                
                      <label>Name:  <span style="color:red">*</span></label> 
                        <input type="text" class="form-control" name="name" id="name" style="width:100%;" required>
    
					</div>
                       
		    
                    
					<div class="input-group date" data-provide="datepicker">
					<label>Appointment / Request date:  <span style="color:red">*</span></label> 
                      <input name="request_date"  type="text" id="test1"   class="form-control" value="" required>
                      <div class="input-group-addon">
                      <span class="glyphicon glyphicon-th"></span>
                     </div>
					 </div>

					 <div id="">
                     	<div id="">
                      <label>Contact:  <span style="color:red">*</span></label> 
                        <input type="tel" class="form-control" name="name" id="email" style="width:100%;" required>
    
					</div>
					</div>

					<div id="">
                     	<div id="">
                      <label>Email:  <span style="color:red">*</span></label> 
                        <input type="tel" class="form-control" name="email" id="email" style="width:100%;" required>
    
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
					
					<div id="">
                      <label>Doctor:  <span style="color:red"></span></label> 
                        <select class="form-control select2" name="doctor" id="select" style="width:100%;">
                          							  <?php foreach ($doctors as $doctor) { ?>
							
														<option value="<?php echo $doctor->id; ?>"><?php echo $doctor->name; ?></option>
														<?php } ?>
		               							
		               	</select>
					  <a href="#" target="blank">Add Doctor</a>
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
					<option class="" value="<?php echo $service->name;?>"><?php  echo $i++.'. '. $service->name;?></option>
					<?php } ?>
					
					</select>
					</div>
			       <div id="">
                      <label>Remarks:  <span style="color:red"></span></label>
				      <textarea class="form-control" name="notes" id="editor1" name="editor1" rows="4" cols="80" placeholder="Description"  style="background:#ebf8a4;"></textarea>
		            </div>
					<div id="">
                      <label>Address:  <span style="color:red"></span></label>
				      <textarea class="form-control" name="notes" id="editor1" name="editor1" rows="4" cols="80" placeholder="Description"  style="background:#ebf8a4;"></textarea>
		            </div>
		            
			     
			        
                        <div id="footer-buttons" style="clear:both; margin-top:20px; margin-bottom:4px;">
                     <button  class="btn btn-primary" name="name" type="submit"  ><span class="glyphicon glyphicon-arrow-right"></span>Begin Activity</button>
					 <button class="btn btn-danger"  type="reset" ><span class="glyphicon glyphicon-repeat"></span> Reset Form</button>
                     </form>
				   </div>	  
	
			</div>
			<div class="col-md-4">
			</div>