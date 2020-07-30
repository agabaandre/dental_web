<div class="col-md-12" style=" background:white; border-radius: 5px;">
<?php	$i=1;
	//print_r($facilitydata);
?>      <div class="nav-tabs-custom">
             <ul class="nav nav-tabs">
			      <li class="active"><a href="<?php echo base_url();?>Clinic/services">Manage Services</a></li>
			    
                 </ul>
				</div>
                <div class="box-header with-border">
                  <h5 class="box-title">Services</h5>
                </div>
</div>
									
 <hr style="border:1px solid rgb(140, 141, 137);"/>

 									<?php 
									if(isset($data['msg'])){
                                      echo'<div id="alert" class="alert alert-success alert-dismissable">
                                      <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                      <strong>'.$data['msg'].'</strong>
                                      </div>';
                                    }  ?>
  <div class="col-md-4">
      <p>Add Services</p>
	          <form method="post" action="<?php echo base_url();?>Clinic/saveServices" autocomplte="off">
	  	             <div id="">
					<label>Name: *</label>
                      <input class="form-control" name="name" id="title" value="" placeholder="Name" type="text" required>
				   </div>
                   <div id="">
					 <label>Image URL</label> 
                      <input class="form-control" name="img_url" id="" value="" placeholder="http:google.com/images/" type="text" >
					</div>
				   <div id="">
					  <label>Description: *</label>
                      <input type="text" class="form-control" name="description" id="" value="" placeholder="Description" type="text" required>
				   </div>
				     <div id="footer-buttons" style="clear:both; margin-top:20px; margin-bottom:4px;">
                     <button  class="btn btn-primary" type="submit" ><span class="add"></span>Save</button>
                     </form>
				   </div>
   </div>
<div class="col-md-8"> 
<div id="CollapsiblePanel1" class="CollapsiblePanel" style="margin:0 auto; overflow-x:hidden; overflow-y:auto;">
								
<div class="CollapsiblePanelTab" tabindex="0"><p>Services</p></div>
<div class="CollapsiblePanelContent"> 
      <table id="mydata" class="table table-bordered table-responsive">
                    <thead>
                      <tr>
					    <th style="width:2%;">No</th>
					   <th style="width:22%;">Name</th>
                        <th style="width:20%;">Image</th>
						<th style="width:20%;">Description</th>													
						<th style="width:10%;">Edit</th>
                      </tr>
                    </thead>
<tbody>       
<?php
    foreach($services as $row) {
    ?>
      <tr>  <td><?php echo $i++;?></td>
            <td><?php $id=$row->id;?><?php echo $row->name;?></td>
			<td><?php echo $row->img_url;?></td>
			<td><?php echo $facility=$row->description;?></td>
	        <td>
                <button data-toggle="modal" data-target="#<?php echo $modalid='my'.$uuid;?>" title="Update User" class="btn btn-sm btn-info"><i class="edit"></i>Edit</button>
                <div class="col-md-12 offset-2">
                <div class="modal fade" id="<?php echo $modalid;?>" tabindex="-1" role="dialog" data-backdrop="static">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
                                              <h4 class="modal-title"><center><i class=""></i>Edit User Details</center></h4>
                                          </div>
                                          <div class="modal-body">
	            <form method="post" action="<?php echo base_url();?>clinic/services">
	  	           <div id="">
					<label>Name: *</label>
                      <input class="form-control" name="name" id="title" value="<?php echo $row->name;?>" placeholder="Name" type="text" style="width:100%;" readonly>
				  </div>
                  <div id="">
					<label> Image URL<br/>
				     </label> 
                     <input class="form-control" name="img_url" id="" style="width:100%;" value="<?php echo $row->img_url;?>" type="text">
					 <input class="form-control" name="id"  value="<?php echo $id;?>" placeholder="" type="hidden">
				   </div>
				   
				    <div id="">
					  <label>Description:</label>
                      <input class="form-control" style="width:100%;" name="description" id="" value="<?php echo $row->description;?>" placeholder="" type="text">
				   </div>
				     <div id="footer-buttons" style="clear:both; margin-top:20px; margin-bottom:4px;">
                     <button  class="btn btn-primary" type="submit" ><span class="add"></span>Update User</button>
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
</div>
</div>
	