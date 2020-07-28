<script>
$.fn.datepicker.defaults.format = "yyyy/mm/dd";
$('.datepicker').datepicker({
});
</script>	
<div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
             <li class="active"><a href="#">New Appointment</a></li>
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
					   <th style="width:22%;">Name</th>
                       <th style="width:10%;">Patient's Contact</th>
					   <th style="width:10%;">Time</th>
                        <th style="width:20%;">Start Date</th>
						<th style="width:20%;">End Date</th>							
                        <th style="width:10%;">Doctor</th>
						<?php ?><th style="width:10%;">Status</th>
						<th style="width:10%;">Edit</th> <?php ?>
                      </tr>
                    </thead>
<tbody>       
<?php 
	$c=1;
    foreach($appointments as $row) {
    ?>
	  <tr>  <td><?php echo $c++; ?></td>
	  		<td><?php echo $row->patient;?></td>
              <td><?php echo $row->mobile;?></td>
			  <td><?php echo $row->Time;?></td>
            <td><?php $id=$row->id;?><?php echo $name=$row->start_date;?></td>
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
						  <button type='submit'  class='btn btn-sm btn-warning' ><span class='glyphicon glyphicon-circle-remove'></span>New</button>
						 </form>
					<?php  } 
					  else { ?>
						<form action='<?php echo base_url();?>clinic/updateAppointment' method='post'>
						  <input type='hidden' value="0" name='status'>
						  <input type='hidden' value='<?php echo $id; ?>' name='id'>
						 <button type='submit'  class='btn btn-sm btn-success' ><span class='glyphicon glyphicon-ok'></span>Confirmed</button>
						 </form> 
					<?php  }
					  ?>
			</td>
			<td> 
					<button data-toggle="modal" data-target="#<?php echo $modalid='my'.$id;?>" title="Update User" class="btn btn-sm btn-info"><i class="edit"></i>Set Time</button>
					<div class="col-md-12 offset-2">
					<div class="modal model-md fade" id="<?php echo $modalid;?>" tabindex="-1" role="dialog" data-backdrop="static">
													<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
															<h4 class="modal-title" style="text-align:center;"><i class=""></i>Set Appointment Date</h4>
														</div>
														<div class="modal-body">
				<form name="" id="data_form" method="post" action="<?php echo base_url();?>clinic/updateAppointment">
					<div id="">
					<input type='hidden' value='<?php echo $id; ?>' name='id'>
                      <label>Date:  <span style="color:red"></span></label> 
                      <input class="form-control" name="start_date" id="work_id" value="<?php echo $row->start_date; ?>" type="text" placeholder="" style="width:100%;" data-provide="datepicker" autocomplete="off">
					</div>
	
				<div id="">
                      <label>Time:  <span style="color:red"></span></label>
				      <input class="form-control timepicker" name="Time" id="timepicker" value="<?php echo $row->Time; ?>" placeholder="" type="" style="width:100%;" >
			    </div>	
			       <div id="footer-buttons" style="clear:both; margin-top:20px; margin-bottom:4px;">
                     <button  class="btn btn-primary" type="submit" ><span class="glyphicon glyphicon-plus"></span>Save</button>
					 <button class="btn btn-danger"  type="reset" ><span class="glyphicon glyphicon-repeat"></span> Reset</button>
                     </form>
				   </div>	  
				
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
</div>
