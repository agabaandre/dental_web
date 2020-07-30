<div class="col-md-12" style=" background:white; border-radius: 5px;">
<?php 
include("db_connector/mysqli_conn.php");
?>
          <div class="nav-tabs-custom">
             <ul class="nav nav-tabs">
             <li class="active"><a href="<?php echo base_url();?>clinic/getUsers">Manage Users</a></li>
			      <li class=""><a href="<?php echo base_url();?>clinic/userLogs">User Logs</a></li>
            </ul>
				</div>
                <div class="box-header with-border">
                  <h5 class="box-title">Manage User Logs</h5>
                </div>
</div>
<div class="col-md-12"> 
<div id="CollapsiblePanel1" class="CollapsiblePanel" style="margin:0 auto; overflow-x:hidden; overflow-y:auto;">
  <div class="CollapsiblePanelTab" tabindex="0"><p>View System Logs</p></div>
<div class="CollapsiblePanelContent"> 
      <table id="mydata" class="table table-bordered table-responsive">
                    <thead>
                      <tr>
					    <th style="width:2%;">User</th>
					   <th style="width:78%;">Actions</th>
              <th style="width:20%;">Time and Date</th>
                      </tr>
                    </thead>
<tbody>       
  <?php foreach($userlogs as $row){
    ?>
      <tr> 
        <td><?php echo $row['uuid'];?></td>
			<td><?php echo $row['actions'];?></td>
			<td><?php echo $row['time'];?></td>
	  </tr>
    <?php }
	?>
	 </tbody>
        <tfoot>
      </tfoot>
    </table>
	</div>
</div>
</div>
	