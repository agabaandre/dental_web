<footer class="main-footer" style="color:white;background-color:#222d32; font-size:10px; margin-bottom:0px;" >
      <strong>Copyright &copy; St. Marys Dental Clinic  <?php echo date("Y")." "; ?> <a href="http://timelead.com" target="blank"> </a> TEL: 0702787688</strong> All rights reserved <version style="float:right;">Developed by TimeLead Enterprises</version>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
      <!-- <script src="../../bower_components/moment/min/moment.min.js"></script> -->
      <script src="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
      <script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
      <script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
      <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/dist/js/notify.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
      <!-- <script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script> -->
      <script src="<?php echo base_url(); ?>assets/js/dental.js"></script>
</footer>
<?php
if (isset($message)){
if($message=="Successful"){
      ?>
      <script>
     $.notify("Succesful", "success", { showAnimation: 'slideDown',
       showDuration: 40000,
       hideAnimation: 'slideUp'});
      </script>
      <?php 
       } else { ?>
       <script>
       $.notify("Failed", "warn");
       </script>
   <?php   }
   }
?>
