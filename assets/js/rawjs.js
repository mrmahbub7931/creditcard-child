window.addEventListener('load',function () {
	// appy form 
    var application = document.querySelector('#type_of_application');
    if (application) {
        application.addEventListener('change',function (e) {
            var credit_card = document.querySelector('.select_credit_card');
            var loan_type = document.querySelector('.type_of_loan_div');
            var loan_amount = document.querySelector('.loan_amount_div');
            

            e.target.value === 'credit_card' ? (credit_card.style.display = 'block') && (credit_card.classList.add('required')) : (credit_card.style.display = 'none') && (credit_card.classList.remove('required'));

            e.target.value === 'loan' ? (loan_type.style.display = 'block') && (loan_amount.style.display = 'block') : (loan_type.style.display = 'none') && (loan_amount.style.display = 'none');
            
        });
    }
    

});