<div class="col-md-12" style=" background:white; border-radius: 5px;">
          <div class="nav-tabs-custom">
             <ul class="nav nav-tabs">
                 </ul>
		  </div>                              
               <div class="box-header with-border">
                 <h5 class="box-title"><strong><?php  echo $heading; ?></strong></h5>
                </div>
        <div class="col-md-12">
           <?php $widgets=$data['widgets'];
                // print_r($widgets);
                 $employees=$data['employees'];
           ?>
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $widgets['staff']; ?></h3>

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
            <h3><?php echo $widgets['schedules']; ?></h3>
              <p>Monthly Approved Request</p>
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
            <h3><?php echo $widgets['duty']; ?></h3>

              <p>Cancelled Requests</p>
            </div>
            <div class="icon">
              <i class="fa fa-calendar"></i>
            </div>
            <a href="#" class="small-box-footer">Follow Up<i class="fa fa-arrow-circle-right"></i></a>
          </div>
          </div>
          <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            <h3><?php echo $widgets['duty']; ?></h3>

              <p>Doctors</p>
            </div>
            <div class="icon">
              <i class="fa fa-calendar"></i>
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
