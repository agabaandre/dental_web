
<script>
$.fn.datepicker.defaults.format = "yyyy/mm/dd";
$('.datepicker').datepicker({
});
</script>	
<div class="col-md-12">
          <div class="nav-tabs-custom">
             <ul class="nav nav-tabs">
				  <li class="active"><a href="<?php echo base_url();?>clinic/newRequest">New Request</a></li>
                  
                 </ul>
				</div>
                               
                <div class="box-header with-border">
                  <h5 class="box-title">Request</h5>
                </div>
					
							
							
						
	
<div class="col-md-4">
                    
				<form  method="post" action="">
				
		       
                      <div id="">
                
                      <label>Name:  <span style="color:red">*</span></label> 
                        <input type="text" class="form-control" name="name" id="name" style="width:100%;" required>
    
					</div>
                       
		    
                    
					<div class="input-group date" data-provide="datepicker">
					<label>Appointment / Request date:  <span style="color:red">*</span></label> 
                      <input name="request_date"  type="text" id="test1"   class="form-control" value="" required>
                      <div class="input-group-addon">
                      <span class="glyphicon glyphicon-th"></span>
                     </div>
					 </div>

					 <div id="">
                     	<div id="">
                      <label>Contact:  <span style="color:red">*</span></label> 
                        <input type="tel" class="form-control" name="name" id="email" style="width:100%;" required>
    
					</div>
					</div>

					<div id="">
                     	<div id="">
                      <label>Email:  <span style="color:red">*</span></label> 
                        <input type="tel" class="form-control" name="email" id="email" style="width:100%;" required>
    
					</div>
					</div>
					 
					
					<div id="">
                      <label>Clinic:  <span style="color:red"></span></label> 
                        <select class="form-control select2" name="supervisor" id="supervisor myselect" style="width:100%;">
                          							  <?php foreach ($clinics as $clinic) { ?>
							
														<option value="<?php echo $clinic->clinic; ?>"><?php echo $clinic->clinic; ?></option>
														<?php } ?>
		               							
		               	</select>
					  <a href="#" target="blank">Add New Clinic</a>
					</div>
					
					<div id="">
                      <label>Doctor:  <span style="color:red"></span></label> 
                        <select class="form-control select2" name="supervisor" id="supervisor myselect" style="width:100%;">
                          							  <?php foreach ($doctors as $doctor) { ?>
							
														<option value="<?php echo $doctor->id; ?>"><?php echo $doctor->name; ?></option>
														<?php } ?>
		               							
		               	</select>
					  <a href="#" target="blank">Add Doctor</a>
					</div>
</div>
<div class="col-md-4 offset-2">
					<div id="">
                      <label>Training Ground:  <span style="color:red"></span></label> 
					  
                        <select class="form-control select2" name="training_ground" id="training_ground myselect" style="width:100%;">
                          							  <option value="20">Afere primary School							  </option>
		               							  <option value="27">Akella Health Centre							  </option>
		               							  <option value="33">Aling Pageorge Padochi Parish							  </option>
		               							  <option value="14">Andhambe Village							  </option>
		               							  <option value="21">Angal Parish Hall							  </option>
		               							  <option value="4">Angal Secondary School - Nebbi							  </option>
		               							  <option value="8">Bishop Cypriano Kihangire Secondary School							  </option>
		               							  <option value="22">Bujumba Subcounty Hall							  </option>
		               							  <option value="3">GAF Apartments							  </option>
		               							  <option value="40">Jupaiwata Village panyango sub county							  </option>
		               							  <option value="12">Jupangali Trading Centre							  </option>
		               							  <option value="42">Jupanyangi Village Packwach sub county							  </option>
		               							  <option value="11">Kampala International University							  </option>
		               							  <option value="7">Kyambogo University							  </option>
		               							  <option value="10">Lugogo							  </option>
		               							  <option value="24">Luzira Secondary School							  </option>
		               							  <option value="15">Makerere university							  </option>
		               							  <option value="18">Makindye Secondary School 							  </option>
		               							  <option value="2">MEMPROW Head Office							  </option>
		               							  <option value="17">Nebbi Secondary School							  </option>
		               							  <option value="9">Nebbi Subcounty Headquarters							  </option>
		               							  <option value="5">Nebbi Town Secondary School							  </option>
		               							  <option value="35">NECOSOC HALL Nebbi							  </option>
		               							  <option value="23">Nyaravur Sub-county Hall							  </option>
		               							  <option value="16">Oturtang Girls Primary School							  </option>
		               							  <option value="31">Packwach District Headquarters							  </option>
		               							  <option value="25">Packwach Subcounty Hall							  </option>
		               							  <option value="30">Packwach Town Council Hall							  </option>
		               							  <option value="37">Paidha Cultural Center							  </option>
		               							  <option value="19">Paidha Secondary School							  </option>
		               							  <option value="13">Paidha Town Council Hall							  </option>
		               							  <option value="28">Pakia Parish - Nyamwendo							  </option>
		               							  <option value="26">Panyango Subcounty Hall							  </option>
		               							  <option value="41">Panyigoro Health center Packwach sub county							  </option>
		               							  <option value="29">Paroketu Primary School							  </option>
		               							  <option value="6">Parombo Secondary School							  </option>
		               							  <option value="38">PAROMBO SUB COUNTY HALL							  </option>
		               							  <option value="34">Pokweru Health Centre							  </option>
		               							  <option value="32">Purona Primary School							  </option>
		               							  <option value="36">Sir Jose Hotel							  </option>
		               							  <option value="39">Zenot - Parombo							  </option>
		               				      </select>
					  <a href="?action=grounds" target="blank">Add New Training Ground</a>
					</div>
				   
			        <div id="">
                      <label>Location:  <span style="color:red"></span></label>
				      <select class="form-control select2" name="location" id="location myselect" style="width:100%;">
                          							  <option value="">ABIM							  </option>
		               							  <option value="">ADJUMANI							  </option>
		               							  <option value="">AGAGO							  </option>
		               							  <option value="">ALEBTONG							  </option>
		               							  <option value="">AMOLATAR							  </option>
		               							  <option value="">AMUDAT							  </option>
		               							  <option value="">AMURIA							  </option>
		               							  <option value="">AMURU							  </option>
		               							  <option value="">APAC							  </option>
		               							  <option value="">ARUA							  </option>
		               							  <option value="">BUDAKA							  </option>
		               							  <option value="">BUDUDA							  </option>
		               							  <option value="">BUGIRI							  </option>
		               							  <option value="">BUHWEJU							  </option>
		               							  <option value="">BUIKWE							  </option>
		               							  <option value="">BUKEDEA							  </option>
		               							  <option value="">BUKOMANSIMBI							  </option>
		               							  <option value="">BUKWO							  </option>
		               							  <option value="">BULAMBULI							  </option>
		               							  <option value="">BULIISA							  </option>
		               							  <option value="">BUNDIBUGYO							  </option>
		               							  <option value="">BUSHENYI							  </option>
		               							  <option value="">BUSIA							  </option>
		               							  <option value="">BUTALEJA							  </option>
		               							  <option value="">BUTAMBALA							  </option>
		               							  <option value="">BUVUMA							  </option>
		               							  <option value="">BUYENDE							  </option>
		               							  <option value="">DOKOLO							  </option>
		               							  <option value="">GOMBA							  </option>
		               							  <option value="">GULU							  </option>
		               							  <option value="">HOIMA							  </option>
		               							  <option value="">IBANDA							  </option>
		               							  <option value="">IGANGA							  </option>
		               							  <option value="">ISINGIRO							  </option>
		               							  <option value="">JINJA							  </option>
		               							  <option value="">KAABONG							  </option>
		               							  <option value="">KABALE							  </option>
		               							  <option value="">KABAROLE							  </option>
		               							  <option value="">KABERAMAIDO							  </option>
		               							  <option value="">KAGADI							  </option>
		               							  <option value="">KAKUMIRO							  </option>
		               							  <option value="">KALANGALA							  </option>
		               							  <option value="">KALIRO							  </option>
		               							  <option value="">KALUNGU							  </option>
		               							  <option value="">KAMPALA							  </option>
		               							  <option value="">KAMULI							  </option>
		               							  <option value="">KAMWENGE							  </option>
		               							  <option value="">KANUNGU							  </option>
		               							  <option value="">KAPCHORWA							  </option>
		               							  <option value="">KASESE							  </option>
		               							  <option value="">KATAKWI							  </option>
		               							  <option value="">KAYUNGA							  </option>
		               							  <option value="">KIBAALE							  </option>
		               							  <option value="">KIBOGA							  </option>
		               							  <option value="">KIBUKU							  </option>
		               							  <option value="">KIRUHURA							  </option>
		               							  <option value="">KIRYANDONGO							  </option>
		               							  <option value="">KISORO							  </option>
		               							  <option value="">KITGUM							  </option>
		               							  <option value="">KOBOKO							  </option>
		               							  <option value="">KOLE							  </option>
		               							  <option value="">KOTIDO							  </option>
		               							  <option value="">KUMI							  </option>
		               							  <option value="">KWEEN							  </option>
		               							  <option value="">KYANKWANZI							  </option>
		               							  <option value="">KYEGEGWA							  </option>
		               							  <option value="">KYENJOJO							  </option>
		               							  <option value="">LAMWO							  </option>
		               							  <option value="">LIRA							  </option>
		               							  <option value="">LUUKA							  </option>
		               							  <option value="">LUWERO							  </option>
		               							  <option value="">LWENGO							  </option>
		               							  <option value="">LYANTONDE							  </option>
		               							  <option value="">MANAFWA							  </option>
		               							  <option value="">MARACHA							  </option>
		               							  <option value="">MASAKA							  </option>
		               							  <option value="">MASINDI							  </option>
		               							  <option value="">MAYUGE							  </option>
		               							  <option value="">MBALE							  </option>
		               							  <option value="">MBARARA							  </option>
		               							  <option value="">MITOOMA							  </option>
		               							  <option value="">MITYANA							  </option>
		               							  <option value="">MOROTO							  </option>
		               							  <option value="">MOYO							  </option>
		               							  <option value="">MPIGI							  </option>
		               							  <option value="">MUBENDE							  </option>
		               							  <option value="">MUKONO							  </option>
		               							  <option value="">MUN							  </option>
		               							  <option value="">NAKAPIRIPIRIT							  </option>
		               							  <option value="">NAKASEKE							  </option>
		               							  <option value="">NAKASONGOLA							  </option>
		               							  <option value="">NAMAYINGO							  </option>
		               							  <option value="">NAMUTUMBA							  </option>
		               							  <option value="">NAPAK							  </option>
		               							  <option value="">NEBBI							  </option>
		               							  <option value="">NGORA							  </option>
		               							  <option value="">NTOROKO							  </option>
		               							  <option value="">NTUNGAMO							  </option>
		               							  <option value="">NWOYA							  </option>
		               							  <option value="">OMORO							  </option>
		               							  <option value="">OTUKE							  </option>
		               							  <option value="">OYAM							  </option>
		               							  <option value="">PACKWACH							  </option>
		               							  <option value="">Packwach Town Council Hall							  </option>
		               							  <option value="">PADER							  </option>
		               							  <option value="">PALLISA							  </option>
		               							  <option value="">PAROMBO SUB COUNTY HALL							  </option>
		               							  <option value="">RAKAI							  </option>
		               							  <option value="">RUBANDA							  </option>
		               							  <option value="">RUBIRIZI							  </option>
		               							  <option value="">RUKUNGIRI							  </option>
		               							  <option value="">SERERE							  </option>
		               							  <option value="">SHEEMA							  </option>
		               							  <option value="">SIRONKO							  </option>
		               							  <option value="">SOROTI							  </option>
		               							  <option value="">SSEMBABULE							  </option>
		               							  <option value="">TORORO							  </option>
		               							  <option value="">WAKISO							  </option>
		               							  <option value="">YUMBE							  </option>
		               							  <option value="">ZOMBO							  </option>
		               				      </select>
					   <a href="?action=manage_locations" target="blank">Add New Location / District</a>
			       </div>
			     
			        <div id="">
                      <label>Notes (Other Donors and Additional Information related to this activity:  <span style="color:red"></span></label>
				      <textarea class="form-control" name="notes" id="editor1" name="editor1" rows="10" cols="80" placeholder="Description"  style="background:#ebf8a4;"></textarea>
		            </div>
                 				
                 <input name="start_activity"  type="hidden" id=""   class="form-control" value="start_activity" >

			       <div id="footer-buttons" style="clear:both; margin-top:20px; margin-bottom:4px;">
                     <button  class="btn btn-primary" name="name" type="submit"  ><span class="glyphicon glyphicon-arrow-right"></span>Begin Activity</button>
					 <button class="btn btn-danger"  type="reset" ><span class="glyphicon glyphicon-repeat"></span> Reset Form</button>
                     </form>
				   </div>	  
	
</div>
<div class="col-md-4">
</div>