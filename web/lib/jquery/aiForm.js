$(document).ready(function() {

	$('#upToDate').datetimepicker({
		minView : "2",
        max: "2",
        minlength: "10",
		format: 'yyyy-mm-dd',
        todayBtn: true,
        todayHighlight: true,
        autoclose: true
	}).on('changeDate show', function(e) {
        // Revalidate the date when user change it
        $('#aiForm').bootstrapValidator('revalidateField', 'upToDate');
    });

	$('#companyAI').multiselect({
        enableFiltering: true,
        includeSelectAllOption: true,
        nonSelectedText: 'Company',
        buttonContainer: '<div class="dropdown-toggleJ"/>',
    });

	$('#aiForm').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
        	dealType: {
                validators: {
                        notEmpty: {
                        message: 'Please select a Deal Type'
                    }
                }
            },
            funderSel: {
                validators: {
                        notEmpty: {
                        message: 'Please select a Funder'
                    }
                }
            },

            companyAI: {
            	validators: {
                        notEmpty: {
                        message: 'Please select one or more companies'
                    }
                }
            },

            upToDate: {
            	validators: {
                        notEmpty: {
                        message: 'Please select the Up to Date'
                    },
                    date: {
                        format: 'YYYY-MM-DD',
                        message: 'Please select a valid Up to Date using the correct format (yyyy-mm-dd)'
                    }
                }
            }
        }
    });


});