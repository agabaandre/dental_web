<script>
$.fn.datepicker.defaults.format = "yyyy/mm/dd";
$('.datepicker').datepicker({
});
</script>	
<div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
             <li class="active"><a href="#">Billing</a></li>
			</ul>
		   </div>
		</div>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/wickedpicker.min.css">
<div class="col-md-12"> 
<div class="box-header with-border">
                  <h5 class="box-title">Appoitmnents List</h5>
</div>
      <table id="mydata" class="table table-bordered table-responsive">
                    <thead>
                      <tr>
					    <th style="width:2%;">No</th>
					   <th style="width:15%;">Name</th>
                       <th style="width:10%;">Patient's Contact</th>
					   <th style="width:15%;">Time</th>
                        <th style="width:10%;">Start Date</th>
						<th style="width:10%;">End Date</th>							
                        <th style="width:15%;">Doctor</th>
						<?php ?><th style="width:10%;">Status</th>
						<th style="width:20%;">Bill</th> <?php ?>
                      </tr>
                    </thead>
<tbody>       
<?php 
$this->load->model("Request", "requestHandler");
	$c=1;
	
	
	
    foreach($appointments as $row) {
    ?>
	  <tr>  <td><?php echo $c++; ?></td>
	  		<td><?php echo $row->patient;?></td>
              <td><?php echo $row->mobile;?></td>
			  <td><?php echo $row->time;?></td>
            <td><?php $id=$row->id; $requestid=$row->request_id; ?><?php echo $name=$row->start_date;?></td>
			<td><?php echo  $row->end_date;?></td>
			<td><?php echo $row->doctor;?></td>
	        <td>
	           <?php
                       //Flag Raiser
				 $status=$row->status;
					  if ($status==0){ ?>
						  <form action='<?php echo base_url();?>clinic/updateAppointment' method='post'>
						  <input type='hidden' value="1" name='status'>
						  <input type='hidden' value='<?php echo $id; ?> ' name='id'>
						  <button type='submit'  class='btn btn-sm btn-info' ><span class='glyphicon glyphicon-circle-ok'></span>New Appt</button>
						 </form>
					<?php  } 
					 elseif ($status==1){ ?>
						<form action='<?php echo base_url();?>clinic/updateAppointment' method='post'>
						  <input type='hidden' value="2" name='status'>
						  <input type='hidden' value='<?php echo $id; ?>' name='id'>
						 <button type='submit'  class='btn btn-sm btn-warning' ><span class='glyphicon glyphicon-ok-circle'></span>Confirmed</button>
						 </form> 
					<?php  
					}
					else { ?>
					    <form action='<?php echo base_url();?>clinic/updateAppointment' method='post'>
						  <input type='hidden' value="0" name='status'>
						  <input type='hidden' value='<?php echo $id; ?>' name='id'>
						 <button type='submit'  class='btn btn-sm btn-success' ><span class='glyphicon glyphicon-ok'></span>Finalised</button>
						 </form> 


					<?php }
					  ?>
					  
			</td>
			<td> 
			<div class="btn-group">
                  <button type="button" class="btn btn-default btn-link">Act</button>
                  <button type="button" class="btn btn-link btn-flat dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="" data-toggle="modal" data-target="#<?php echo $modalid='my'.$id;?>" title="Set Appointment Time"><i class="glyphicon glyphicon-list"></i>Post Bill</a></li>
                    <li><a href="" data-toggle="modal" data-target="#<?php echo $chat='request'.$id;?>" title="Messaage Client"><i class="glyphicon glyphicon-upload"></i>Print Bill</a></li>
                 </ul>
			</div>
			<!--modal Update -->
			<div class="col-md-12 offset-2">
					<div class="modal model-md fade" id="<?php echo $modalid;?>" tabindex="-1" role="dialog" data-backdrop="static">
													<div class="modal-dialog  modal-dialog-centered">
													<div class="modal-content">
														<div class="modal-header">
															<button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
															<h4 class="modal-title" style="text-align:center;"><i class=""></i>Bill</h4>
														</div>
														<div class="modal-body">
                <button  class="btn btn-primary" id="add_bill" ><span class="glyphicon glyphicon-plus"></span>New Bill Item</button>
				<form name="" id="data_form" method="post" action="<?php echo base_url();?>clinic/billing">
                <div class="form-group">
					<div class="col-md-6">Description</div><div class="col-md-6">Amount</div>
                    <div class="col-md-6"><input type="text" class="form-control" name="bill[]"  autocomplete="off" style="width:100%;" required></div><div class="col-md-6"><input type="text" class="form-control" name="bill[]"  autocomplete="off" style="width:100%;" required></div>'
				<p id="bill_item"></p>
				</div>
                </div>
                <div class="modal-footer">
			       <div id="footer-buttons" style="clear:both; margin-top:20px; margin-bottom:4px;">
                     <button  class="btn btn-primary" type="submit" ><span class="glyphicon glyphicon-plus"></span>Save</button>
					 <button class="btn btn-danger"  type="reset" ><span class="glyphicon glyphicon-repeat"></span> Reset</button>
                     
				   </div>	
                   </div>
				   </form>  
				
				</div>
                </div>
                </div>
			 </div>
				</div>
				
		 
			

          <!---end Chat-->

			
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


<script>
	$(function(){
	$("#addClass").click(function (e) {
		e.preventDefault();
		$('#qnimate').addClass('popup-box-on');
	});          
	$("#removeClass").click(function () {
		$('#qnimate').removeClass('popup-box-on');
	});
});
</script>
