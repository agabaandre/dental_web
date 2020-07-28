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
					   <th style="width:15%;">Name</th>
                       <th style="width:10%;">Patient's Contact</th>
					   <th style="width:15%;">Time</th>
                        <th style="width:10%;">Start Date</th>
						<th style="width:10%;">End Date</th>							
                        <th style="width:15%;">Doctor</th>
						<?php ?><th style="width:10%;">Status</th>
						<th style="width:20%;">Set Time/Message</th> <?php ?>
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
                    <li><a href="" data-toggle="modal" data-target="#<?php echo $modalid='my'.$id;?>" title="Set Appointment Time"><i class="glyphicon glyphicon-list"></i>Set Time</a></li>
                    <li><a href="" data-toggle="modal" data-target="#<?php echo $chat='request'.$id;?>" title="Messaage Client"><i class="glyphicon glyphicon-upload"></i>Message</a></li>
                 </ul>
					</div>
			<!--modal Update -->
			<div class="col-md-12 offset-2">
					<div class="modal model-md fade" id="<?php echo $modalid;?>" tabindex="-1" role="dialog" data-backdrop="static">
													<div class="modal-dialog modal-sm modal-dialog-centered">
													<div class="modal-content">
														<div class="modal-header">
															<button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
															<h4 class="modal-title" style="text-align:center;"><i class=""></i>Set Appointment Date</h4>
														</div>
														<div class="modal-body">
				<form name="" id="data_form" method="post" action="<?php echo base_url();?>clinic/updateAppointment">
					<div id="">
					<input type='hidden' value='<?php echo $id; ?>' name='id'>
					<input type='hidden' value="1" name='status'>
                      <label>Date:  <span style="color:red"></span></label> 
                      <input class="form-control" name="start_date" id="reqdate" value="<?php echo $row->start_date; ?>" type="text" placeholder="" style="width:100%;" data-provide="datepicker" autocomplete="off">
					</div>
	
				<div id="">
                      <label>Time:  <span style="color:red"></span></label>
				      <input class="form-control timepicker" name="Time" id="timepicker" value="<?php echo $row->Time; ?>" placeholder="" type="" style="width:100%;" >
				</div>	
				<div id="">
				<label>Doctor:  <span style="color:red"></span></label> 
                 <select class="form-control" name="doctor" style="width:100%;" required>	
					 <?php 
						 foreach ($doctors as $doctor) { 	
				    ?>
                    <option value="<?php echo $doctor->id; ?>" <?php if ($row->doctor==$doctor->name){ echo 'selected'; } ?>><?php echo $doctor->name; ?></option>
					<?php
					}
					?>				
		          </select>	
				</div>
			       <div id="footer-buttons" style="clear:both; margin-top:20px; margin-bottom:4px;">
                     <button  class="btn btn-primary" type="submit" ><span class="glyphicon glyphicon-plus"></span>Save</button>
					 <button class="btn btn-danger"  type="reset" ><span class="glyphicon glyphicon-repeat"></span> Reset</button>
                     
				   </div>	
				   </form>  
				
				</div>
                </div>
                </div>
             </div>
		  <!---end modal-->

		  <?php $messages=$this->requestHandler->getMessages($requestid); 
	  
		  
		 ?>

		  <!--modal Chat-->
			<div class="col-md-12 offset-2" style="">
					<div class="modal model-md fade" id="<?php echo $chat;?>" tabindex="-1" role="dialog" data-backdrop="static">
													<div class="modal-dialog modal-sm modal-dialog-centered" style="margin-right:50px; margin-top:200px;">
													<div class="modal-content">
														<div class="modal-header">
															<button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
															<h4 class="modal-title" style="text-align:center;"><i class=""></i><?php echo $row->patient; ?></h4>
														</div>
														<div class="modal-body">
															
														<div class="box box-danger direct-chat direct-chat-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Chat</h3>

              <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="" class="badge bg-red" data-original-title="3 New Messages">3</span>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-original-title="Contacts">
                  <i class="fa fa-comments"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<?php  //print_r($messages['message']->body); ?>
              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages">
                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-left"><?php $messages['message']->name; ?></span>
                    <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    Is this template really for free? That's unbelievable!
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-right">Sarah Bullock</span>
                    <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    You better believe it!
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->
              </div>
              <!--/.direct-chat-messages-->

              <!-- Contacts are loaded here -->
              <div class="direct-chat-contacts">
                <ul class="contacts-list">
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg" alt="User Image">

                      <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date pull-right">2/28/2015</small>
                            </span>
                        <span class="contacts-list-msg">How have you been? I was...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                </ul>
                <!-- /.contatcts-list -->
              </div>
              <!-- /.direct-chat-pane -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <form action="#" method="post">
                <div class="input-group">
                  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-danger btn-flat">Send</button>
                      </span>
                </div>
              </form>
            </div>
            <!-- /.box-footer-->
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
