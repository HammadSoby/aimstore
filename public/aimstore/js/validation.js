var FormValidationInline = function (){

    var handelFormValidation = function() {

        // main jquery Code..
	$(".form-validate-signup").validate({
            errorElement: 'span', //default input error message container
            errorClass: 'error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",

            rules: {
                name: "required",
                lastname: "required",
                fax:"required",
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 5
                },
                passwordc: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                url: {
                    required: true,
                    url: true
                },
                numbers: {
                    required: true,
                    digits: true
                }
            },

            messages: {
                name: "Please enter the First Name",
                lastname: "Please enter the Last Name",
                email: "Please enter Correct E-mail Address",
                password: "Please enter password",
                passwordc: "Please enter password",
                url: "Please enter valid URL",
                numbers: "Please enter Numbers only",
                fax: "Pleae enter fax number"
            },
            highlight: function (element) { // hightlight error inputs
                $(element)
                .closest('.form-group').addClass('has-error'); // set error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                .closest('.form-group').removeClass('has-error'); // set error class to the control group
            }
	});



    };

    return {
        init: function() {
            handelFormValidation();
        }

    };
}();    // Handel Form Validation

var FormValidationTooltip = function (){

    var handelFormValidation = function() {
        $("#formvalidationtooltip").validationEngine();
    };

    return {
        init: function() {
            handelFormValidation();
        }

    };
}();    // Handel Form Validation

