
$.fn.datepicker.defaults.format = "yyyy-mm-dd";
$('.datepicker').datepicker({
    
});


$('#alert').fadeTo(2000, 500).slideUp(500, function(){
    $('#alert').slideUp(500);
});

$(document).ready(function(){
  $("#reqdate").change(function(){
    var reqdate = $("#reqdate").val();
    var baseurl = $("#baseurl").val();

    if(reqdate!=""){
   // console.log(baseurl);
    $.ajax({
      url: baseurl+"clinic/availableDoctors",
      method: "post",
      data: "date=" + reqdate
      
     }).done(function(availables){
     console.log(availables);
     
     availables = JSON.parse(availables);
     $("#doctor").empty();
     availables.forEach(function(availables) {

       $("#doctor").append('<option value="'+availables.id+'">'+availables.name+'</option>');
      
       
     })

    })

  }})

});

// $('#data_form').submit(function(e){
// 	e.preventDefault();

// 	var method =$(this).attr('method');
// 	var path =$(this).attr('action');
// 	var form_data=$(this).serialize();
// 	console.log(form_data);
// 	//$('.msg').html('<center><img src="assets/images/processing.gif"></center>');
//     $.ajax({
//     method:method,
//     data:form_data,
//     url:path,
//     success : function(res){
// 	console.log(res);
// 	setTimeout(function(){
// 	//$('.msg').html(res);
	
	
// 	// $('#modal_id').modal('show'); //shows modal
	
	
		
// 	},1000);
	
// }


// });//close $.ajax amd the param array

// //auto show modalmodal



// });//close submit and its function



