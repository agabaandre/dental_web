<div class="col-md-12" style=" background:white; border-radius: 5px;"> 
<div class="nav-tabs-custom"> 
    <ul class="nav nav-tabs">
				  <li class="btn btn-sm btn-default"><a href="<?php echo base_url();?>clinic/reports">Back</a></li>			  
               
				   </ul>
	</div>
<div class="col-md-12">
	<form action="" method="POST" style="width:;" class="form-inline">
  	<div id="">
                 <!-- <label>Surname : <span style="color:red"></span></label> 
                <input type="text" class="form-control" name="sname" placeholder="Surname">
				 <label>First Name : <span style="color:red"></span></label> 
                <input type="text" class="form-control"name="fname" placeholder="First Name">
				 <label>Other Name : <span style="color:red"></span></label> 
                <input type="text" class="form-control" name="oname" placeholder="Other Name"> -->
			
	</div>
	
					<p></p>
  <!-- <button   type="submit" class="btn btn btn-info" name="apply_limits"><span class="glyphicon glyphicon-ok"></span>Apply Limits</button> -->
<p></p>

</form>
</div>
<div class="col-md-12">
<script src="https://cdnjs.cloudflare.com/ajax/libs/TableExport/5.2.0/js/tableexport.min.js" integrity="sha512-XmZS54be9JGMZjf+zk61JZaLZyjTRgs41JLSmx5QlIP5F+sSGIyzD2eJyxD4K6kGGr7AsVhaitzZ2WTfzpsQzg==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/TableExport/5.2.0/css/tableexport.css" integrity="sha512-+m+NCQG6uttXsLjwxHTUdhov99LW3TSFEiM2LSFMwfOePszb2as348/96cCBG35mOK+3Gp4P0EQRWpKLZfGTnA==" crossorigin="anonymous" />
<div class="btn-group">
							<button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Table Data</button>
							<ul class="dropdown-menu " role="menu">
								<li class="divider"></li>
								<li><a href="#" onClick ="$('#mydata').tableExport({type:'excel',tableName:'Report_',escape:'false'});"> <i></i> XLS</a></li>
								<li><a href="#" onClick ="$('#mydata').tableExport({type:'doc',tableName:'Report_',escape:'false',pdfFontSize:'9',orientation: 'potratit'});"> <i></i>Word Document</a></li>
								
								
							</ul>
</div>	<script>
 function printDiv(mydata){
   
                var printContents =document.getElementById(mydata).innerHTML;
				var originalContents= document.body.innerHTML;
				document.body.innerHTML = printContents;
				
				window.print();
				document.body.innerHTML = originalContents;
				}
</script>
<button type="button"  class="btn btn-sm btn-default" onclick="printDiv('printableArea')">Web Print</button>
<hr style="border:1px solid rgb(140, 141, 137);"/>

<p style="font-weight:bold;"></p>


<div id="printableArea">                            
                <div class="box-header with-border">
                  <h5 class="box-title">Staff List</h5>
				  <p class="danger"></p>
                </div>
					<table id="mydata" class="table table-hover table-responsive table-bordered">
                    <thead>
                      <tr>
					   <th>No.</th>
					   <th>Name</th>
					   <th>Contact</th>
					   <th>Cadre</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $i=1;
                    foreach ($stafflist as $row) {
                      ?>
                
					 <tr>
					    <td><?php echo $i++; ?></td>
					    <td width><?php echo $row->name; ?>  </td>
					    <td><?php echo $row->mobile; ?> </td>
					    <td><?php echo $row->cadre; ?></td>
					   
					  
					   
                    </tr>
                    <?php } ?>
	
				    </tbody>
                    <tfoot>
					
					
                    </tfoot>
    </table>
   </div>
</div>
</div>

