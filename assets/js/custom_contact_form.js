var form = jQuery("#contact");
form.validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
    rules: {
        confirm: {
            equalTo: "#password"
        }
    }
});
form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        event.preventDefault();
        var credit_card, type_of_loan,loan_amount;
        var type_of_application = form.find("#type_of_application").val(),
            name = form.find("#name").val(),
            email = form.find("#email").val();

            if(!form.find("#credit_card").val()) {
              credit_card = "---";
            }else {
               credit_card = form.find("#credit_card").val();
            }
            if (!form.find("#type_of_loan").val()) {
                type_of_loan = "---";
            }else{
                type_of_loan = form.find("#type_of_loan").val();
            }
            if (!form.find("#loan_amount").val()) {
                loan_amount = "---";
            }else{
                loan_amount = form.find("#loan_amount").val();
            }

            var date_of_birth = form.find("#date-of-birth").val(),
            phone = form.find("#number").val(),
            address = form.find("#address").val(),
            company_name = form.find("#company_name").val(),
            designation = form.find("#designation").val(),
            salary_paid_system = form.find("#salary_paid_system").val(),
            salary = form.find("#salary").val(),
            loan_or_card = form.find("#loan_or_card:checked").val(),
            date_of_appointment = form.find("#date_of_appointment").val(),
            message = form.find("#message").val(),
            ajaxurl = form.data('url');


        
        jQuery.ajax({
            url: ajaxurl,
            type: "post",
            data: {
                action: "custom_contact_form",
                type_of_application: type_of_application,
                name: name,
                email: email,
                credit_card: credit_card,
                type_of_loan: type_of_loan,
                loan_amount: loan_amount,
                date_of_birth: date_of_birth,
                phone: phone,
                address: address,
                company_name: company_name,
                designation: designation,
                salary_paid_system: salary_paid_system,
                salary: salary,
                loan_or_card: loan_or_card,
                date_of_appointment: date_of_appointment,
                message: message
            },
            success: function (response) {
                form.find('.success_message').html("Your Application is Submitted Successfully!. One of our representative will contact you soon.");
                form.find('.success_message').css({'color':'#4CAF50'});
                jQuery("#contact")[0].reset();
                
            }
        });
    }
});
