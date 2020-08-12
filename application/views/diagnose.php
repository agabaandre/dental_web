<script>
$.fn.datepicker.defaults.format = "yyyy/mm/dd";
$('.datepicker').datepicker({
});
 </script>	
<div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
             <li class="active"><a href="#">Examine</a></li>
			</ul>
		   </div>
		</div>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/wickedpicker.min.css">
<div class="col-md-12"> 
<div class="box-header with-border">
                  <h5 class="box-title">Clients</h5>
</div>
      <table id="mydata" class="table table-bordered table-responsive">
                    <thead>
                      <tr>
					    <th style="width:2%;">No</th>
					   <th style="width:15%;">Name</th>
                       <th style="width:15%;">Patient's Contact</th>
					   <th style="width:15%;">Time</th>
                        <th style="width:10%;">Date</th>							
                        <th style="width:20%;">Doctor</th>
						
						<th style="width:25%;">Examination /Treatment</th> <?php ?>
                      </tr>
                    </thead>
<tbody>       
<?php 
$this->load->model("Request", "requestHandler");
	$c=1;
	
	
	
    foreach($appointments as $row) {
    ?>
	  <tr>  <td><?php echo $c++; ?></td>
	  		<td><a href="<?php echo base_url()?>clinic/userprofile/<?php echo  $row->mobile;?>" target="_top"><?php echo $name=$patient=$row->patient;?></a></td>
              <td><?php echo $mobile=$row->mobile;?></td>
			  <td><?php echo $row->time;?></td>
            <td><?php $id=$row->id; $requestid=$row->request_id; ?><?php echo $start_date=$row->start_date;?></td>
		
			<td><?php echo $row->doctor;?></td>
	        
			<td style="text-align:center;"> 

			
				<a href="" data-toggle="modal" data-target="#<?php echo $modalid='my'.$id;?>" class="btn btn-sm btn-default" title="Post"><i class="fa fa-paper-plane"></i>Assess</a>
				<a href="<?php echo base_url();?>Clinic/print_diagnosis/<?php echo $id;?>" class="btn btn-sm btn-default" target="_blank" title="Print Bill"><i class="fa fa-print"></i>Print</a>
				
			
		
			<!--modal Update -->
			<div class="col-md-12 offset-2">
					<div class="modal model-md fade" id="<?php echo $modalid;?>" tabindex="-1" role="dialog" data-backdrop="static">
													<div class="modal-dialog  modal-dialog-centered">
													<div class="modal-content">
														<div class="modal-header">
															<button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
															<h4 class="modal-title" style="text-align:center;"><i class=""></i>Treatment and Examination For: <?php echo " ". $patient; ?></h4>
														</div>
														<div class="modal-body">
                <form name="" id="data_form" method="post" action="<?php echo base_url();?>clinic/diagnosis">
				<div class="col-md-12">
				<?php $this->load->model("Request", "requestHandler"); 
				
				$diagnosis=$this->requestHandler->get_diagnosis($id);
				//print_r($diagnosis);
				?>
                <div id="">
                      <label>Examination:  <span style="color:red"></span></label>
				      <textarea class="form-control editor" name="diagnosis"  name="assessment" rows="2" cols="80"  style="background:#ebf8a4; width:99%; height:200px;"><?php echo $diagnosis[0]->diagnosis; ?></textarea>
		            </div>
					<div id="">
                      <label>Treatment:  <span style="color:red"></span></label>
				      <textarea class="form-control editor" name="treatment"  name="treatment" rows="2" cols="80"   style="background:#ebf8a4; width:99%; height:200px;"><?php echo $diagnosis[0]->treatment; ?></textarea>
		            </div>
                      
                    <input type="hidden" name="appointment_id" value="<?php echo $id; ?>">
					<input type="hidden" name="patient" value="<?php echo $mobile; ?>">
					</div>
				</div>
                <div class="modal-footer">

				
			       <div class="footer-buttons" style=" margin-top:40px; margin-bottom:4px;">
                     <button  class="btn btn-primary" type="submit" ><span class="glyphicon glyphicon-plus"></span>Save</button>
					 <button class="btn btn-danger"  type="reset" id="reset" ><span class="glyphicon glyphicon-repeat"></span> Reset</button>
                     
				   </div>	
                   </div>
				   </form>  
				
				</div>
                </div>
                </div>
			 </div>


			
			</td>
			
	
	 </tr>
    <?php	
    }
    ?>
	 </tbody>
        <tfoot>
      </tfoot>
    </table>
	</div>



