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
                      <input class="form-control" name="work_id" id="work_id" value="" type="text" placeholder="ID">
					</div>
	
				<div id="">
					  <label>Full Name:  <span style="color:red">*</span></label>
                      <input class="form-control" name="name" id="name" value="" placeholder="Full Name"type="text" required>
				</div>
				<div id="">
                      <label>Email:  <span style="color:red"></span></label>
				      <input class="form-control" name="email" id="email" value="" placeholder="Email" type="email"/>
			    </div>	
                   
				<div id="">
                      <label>Mobile Contact:  <span style="color:red">*</span></label>
				      <input class="form-control" name="contact" id="Contact" value="" placeholder="Contact" type="tel" required>
			     </div>	
					
				<div id="">
                      <label>Cadre:  <span style="color:red">*</span></label>
                    <select name="cadre" class="form-control select2" id="myselect" required>
						<option disabled selected>Select Cadre </option>
							<?php 
							$jobdata=array("Dental Surgeon"=>"Dental Surgeon","Public Health Dental Officer"=>"Public Health Dental Officer",
							"Oral Maxillofacial Surgeon"=>"Oral Maxillofacial Surgeon","Paediatric Dentist"=>"Paediatric Dentist",
							"Orthodontist"=>"Orthodontist","Periodontologist"=>"Periodontologist","Dental Assistant"=>"Dental Assistant");
							foreach($jobdata as $key => $value){
							  $i++; ?>
							  <option value="<?php echo $key; ?>"><?php  echo $value; ?>
							  </option>
							<?php } ?>
		           </select>
				</div>
				   <input type="hidden" value="1" name="flag">
</div>
			

<div class="col-md-12">
			       <div id="footer-buttons" style="clear:both; margin-top:20px; margin-bottom:4px;">
                     <button  class="btn btn-primary" type="submit" ><span class="glyphicon glyphicon-plus"></span>Save</button>
					 <button class="btn btn-danger"  type="reset" ><span class="glyphicon glyphicon-repeat"></span> Reset</button>
                     </form>
				   </div>	  
</div>