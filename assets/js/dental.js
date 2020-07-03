
$.fn.datepicker.defaults.format = "yyyy-mm-dd";
$('.datepicker').datepicker({
    
});

$('#alert').fadeTo(2000, 500).slideUp(500, function(){
    $('#alert').slideUp(500);
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

$('#data_form').submit(function(e){
  $('#adddoctor').modal('show'); 
	
},2000);


