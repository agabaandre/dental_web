
$.fn.datepicker.defaults.format = "yyyy-mm-dd";
$('.datepicker').datepicker({
});

$(document).ready(function() {
    var some_id = $('#auto');
    some_id.prop('type', 'text');
    some_id.removeAttr('autocomplete');
});


