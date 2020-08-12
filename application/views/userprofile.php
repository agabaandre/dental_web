     <h4>
        Patient Profile
      </h4>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
        <?php //print_r($profile); ?>
              <img class="profile-user-img img-responsive img-circle" src="https://img.favpng.com/25/13/19/samsung-galaxy-a8-a8-user-login-telephone-avatar-png-favpng-dqKEPfX7hPbc6SMVUCteANKwj.jpg" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $profile[0]->name;?></h3>

              <p class="text-muted text-center"><?php echo $profile[0]->email;?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Contact</b> <a class="pull-right"><?php echo $profile[0]->mobile;?></a>
                </li>
                <li class="list-group-item">
                  <b>Address</b> <a class="pull-right"><?php echo $profile[0]->address;?></a>
                </li>
                <li class="list-group-item">
                <a href="mailto:<?php echo $profile[0]->email;?>" class="btn btn-primary btn-block"><b>Email</b></a>
                </li>
              </ul>

              <a href="tel:<?php echo $profile[0]->mobile;?>" class="btn btn-primary btn-block"><b>Call</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Number of Requests</strong>

              <p class="text-muted">
               <?php echo $requests[0]->requestno; ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> <?php echo $profile[0]->address;?></strong>

              <p class="text-muted"></p>

              <hr>

              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Diagnosis/Treatment (Latest 50)</a></li>
              <!-- <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li> -->
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
              <?php //print_r($diagnosis); ?>

              <?php foreach ($diagnosis as $row) { ?>
                  
              
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="https://e7.pngegg.com/pngimages/508/232/png-clipart-physician-medicine-urology-health-care-your-doctor-health-service-medical-diagnosis.png" alt="image">
                        <span class="username">
                          <a href="#"><?php echo $row->doctor;?></a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Diagnosis on <?php echo $row->date_diagnosed; ?></span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                   <?php echo $row->diagnosis; ?>
                  </p>
                  <ul class="list-inline">
                   
                  </ul>


                </div>
                <!-- /.post -->

                    
              
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="https://cdn.imgbin.com/23/9/19/imgbin-physical-therapy-physician-illustration-doctor-treatment-7XpK7BcQQ7hbJJe0YLwwybetG.jpg" alt="image">
                        <span class="username">
                          <a href="#"><?php echo $row->doctor;?> </a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Treatment on - <?php echo $row->date_diagnosed; ?></span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                   <?php echo $row->treatment; ?>
                  </p>
                  <ul class="list-inline">
                   
                  </ul>
                  <hr/>


                </div>
                <!-- /.post -->
                <?php } ?>

               
              </div>
              <!-- /.tab-pane -->
             
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
   
      <!-- /.row -->