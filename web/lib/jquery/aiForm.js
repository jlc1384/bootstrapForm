$(document).ready(function() {

	$('#upToDate').datetimepicker({
		minView : 2,
		format: 'yyyy-mm-dd', 
	    onClose: function() {
	        $('#upToDate').valid();
	    }
	});

	$('#companyAI').multiselect({
        enableFiltering: true,
        includeSelectAllOption: true,
        nonSelectedText: 'Company'
    });

});