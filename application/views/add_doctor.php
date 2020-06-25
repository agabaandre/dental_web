<!-- date picker ----------------------------------------------------->
<script>
$.fn.datepicker.defaults.format = "yyyy/mm/dd";
$('.datepicker').datepicker({
});
</script>	
<div class="col-md-12">
          <div class="nav-tabs-custom">
             <ul class="nav nav-tabs">
             <li class="active"><a href="<?php  echo base_url();?>clinic/addDoctor">Register New Employee</a></li>
				<li class=""><a href="<?php echo base_url();?>clinic/viewDoctor">Employee List</a></li>
                 </ul>
				</div>
                <div class="box-header with-border">
                  <h5 class="box-title">Register Doctor</h5>
                </div>
		    			
				<div class="col-md-4">
				<form name="" id="data_form" method="post" action="<?php echo base_url();?>index.php/Employee/insertEmployee">
					<div id="">
                      <label>WORK ID:  <span style="color:red"></span></label> 
                      <input class="form-control" name="work_id" id="work_id" value="" type="text">
					</div>
	
				<div id="">
					  <label>Full Name:  <span style="color:red">*</span></label>
                      <input class="form-control" name="name" id="name" value="" placeholder="Full Name"type="text" required>
				   </div>
				   <div id="">
                      <label>Email:  <span style="color:red"></span></label>
				      <input class="form-control" name="email" id="email" value="" placeholder="Email" type="tel"/>
			       </div>	
                   
				    <div id="">
                      <label>Mobile Contact:  <span style="color:red"></span></label>
				      <input class="form-control" name="contact" id="Contact" value="" placeholder="Contact" type="tel"/>
			       </div>	
</div>
<div class="col-md-4">

					
					<div id="">
                      <label>Cadre:  <span style="color:red">*</span></label>
                    <select name="Position" class="form-control select2" id="myselect">
							<?php 
							$jobdata=array("");
							foreach($jobdata as $list){
							  $i++; ?>
							  <option value="<?php echo $list['name']; ?>"><?php  echo $list['name']; ?>
							  </option>
							<?php } ?>
		           </select>
			       </div>
				   <div id="">
                      <label>Department: <span style="color:red">*</span></label> 
                       <select name="Department" class="form-control select2">
							<?php 
							 foreach($departmentdata as $list1){
							 ?>
							  <option value="<?php echo $list1['name']; ?>"><?php  echo $list1['name']; ?>
							  </option>
							 <?php } ?>
		           </select>
				   </div>
				   	   <div id="">
                      <label>District: <span style="color:red">*</span></label> 
                       <select name="district" class="form-control select2">
                            <?php 
							foreach($districtdata as $list1){
							?>
							  <option value="<?php echo $list1['name']; ?>"><?php  echo $list1['name']; ?>
							  </option>
		                    <?php } ?>
		           </select>
				   </div>
				   	   <div id="">
                      <label>Office /Facility: <span style="color:red">*</span></label> 
                       <select name="facility" class="form-control select2">
							<?php 
							foreach ($facilitydata as $list1){
						    ?>
							  <option value="<?php echo $list1['name']; ?>"><?php  echo $list1['name']; ?>
							  </option>
							<?php } ?>
		           </select>
				   </div>
</div>
<div class="col-md-12">
			       <div id="footer-buttons" style="clear:both; margin-top:20px; margin-bottom:4px;">
                     <button  class="btn btn-primary" type="submit" ><span class="glyphicon glyphicon-plus"></span>Save</button>
					 <button class="btn btn-danger"  type="reset" ><span class="glyphicon glyphicon-repeat"></span> Reset</button>
                     </form>
				   </div>	  
	    </div>
</div>
</div>
</div>