<div class="col-md-12" style=" background:white; border-radius: 5px;">
          <div class="nav-tabs-custom">
             <ul class="nav nav-tabs">
                 </ul>
		  </div>                              
               <div class="box-header with-border">
                 <h5 class="box-title"><strong><?php  echo $heading; ?></strong></h5>
                </div>
        <div class="col-md-12">
           <?php
            //print_r($dashdata);
           ?>
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $dashdata[0]['monthly_requests'][0]->monthly_requests; ?></h3>

              <p>Monthly Requests</p>
            </div>
            <div class="icon">
              <i class="fa fa-envelope"></i>
            </div>
            <a href="#" class="small-box-footer">Follow up <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            <h3><?php echo $dashdata[0]['monthly_appointments'][0]->monthly_appointments ;?></h3>
              <p>Comfirmed Appoitments</p>
            </div>
            <div class="icon">
              <i class="fa fa-clock"></i>
            </div>
            <a href="#" class="small-box-footer">Follow up <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            <h3><?php echo $dashdata[0]['doctors'][0]->doctors ?></h3>
          

              <p>Doctors on Duty</p>
            </div>
            <div class="icon">
              <i class="fa fa-calendar"></i>
            </div>
            <a href="#" class="small-box-footer">Follow Up<i class="fa fa-arrow-circle-right"></i></a>
          </div>
          </div>
          <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
            <h3><?php echo $dashdata[0]['patients'][0]->patients ?></h3>
          
              <p>Total Patients</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          </div>
       
    
      <!-- /.row -->
      <!-- Main row -->

      <div class="row">
               
		
				
				
                <div class="col-md-12">
                               <div id='calendar'></div>
                </div>	
                      
                
                 
       
                 </table>
              
               
               
               
               
               
       
               </div>
    </div>
</div>
        </div>
