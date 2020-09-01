<?php
/**
 * loancard custom post type
 *
 * @package loancard
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if (!function_exists('creditcard_contact_form_shortcode')) {

	add_shortcode( 'custom_contact_form', 'creditcard_contact_form_shortcode' );
	function creditcard_contact_form_shortcode()
	{
		ob_start();
			?>
			<div class="creditcard_form">
				<form id="contact" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>" enctype="multipart/form-data">
	    <div>
	        <h3>Start</h3>
	        <section>
	        	<div class="type_of_application" style="margin: 0 0 15px">
		        	<label for="type_of_application">Apply For: </label>
		        	<select name="type_of_application" id="type_of_application" class="required">
		        		<option value="">---</option>
		        		<option value="credit_card">Credit Card</option>
		        		<option value="loan">Loan</option>
		        	</select>
	        	</div>

	        	<div class="select_credit_card" style="margin: 0 0 10px;display: none;">
		        	<label for="credit_card">Select Credit Card</label>
		            <select name="credit_card" id="credit_card">
		            	<option value="">---</option>
		            	<option value="Visa Card">VISA</option>
		            	<option value="Master Card">MASTER</option>
		            	<option value="Amex Card">AMEX</option>
		            	<option value="Co-brand Card">CO-BRAND</option>
		            </select>
	        	</div>
	        	<div class="type_of_loan_div" style="display: none;">
		        	<label for="type_of_loan">Select Loan Type</label>
		            <select name="type_of_loan" id="type_of_loan">
		            	<option value="">---</option>
		            	<option value="Personal Loan">Personal Loan</option>
		            	<option value="Home Loan">Home Loan</option>
		            	<option value="Car Loan">Car Loan</option>
		            	<option value="Bike Loan">Bike Loan</option>
		            	<option value="SME Loan">SME Loan</option>
		            </select>
	        	</div>
	        </section>
	        <h3>Personal Information</h3>
	        <section>
	        	<div class="contact-d-flex">
	        		<div>
	        			<label for="name">Full name</label>
	            		<input id="name" name="name" type="text" class="required">
	        		</div>
	        		<div>
	        			<label for="date-of-birth">Date of Birth</label>
	            		<input id="date-of-birth" name="date-of-birth" placeholder="dd-mm-yyyy" type="text" class="required">
	        		</div>
	        	</div>
	            <div class="contact-d-flex">
	        		<div>
	        			<label for="number">Phone</label>
	            		<input id="number" name="number" type="number" class="required number">
	        		</div>
	        		<div>
	        			<label for="email">Email</label>
	            		<input id="email" name="email" type="text" class="required email">
	        		</div>
	        	</div>
	            
	            <label for="address">Address</label>
	            <textarea name="address" id="address" class="required" placeholder="address"></textarea>
	        </section>
	        <h3>Financial Information</h3>
	        <section>
	            <div class="contact-d-flex">
	        		<div>
	        			<label for="company_name">Company name</label>
	            		<input id="company_name" name="company_name" type="text" class="required">
	        		</div>
	        		<div>
	        			<label for="designation">Position or Designation</label>
	            		<input id="designation" name="designation" type="text" class="required">
	        		</div>
	        	</div>
	            <div class="contact-d-flex">
	        		<div>
	        			<label for="salary_paid_system">Salary Paid By</label>
	            		<select name="salary_paid_system" id="salary_paid_system">
	            			<option value="">---</option>
	            			<option value="Bank Account">Bank Account</option>
	            			<option value="Cheque">Cheque</option>
	            			<option value="Hand Cash">Hand Cash</option>
	            		</select>
	        		</div>
	        		<div>
	        			<label for="salary">Salary / Monthly Income</label>
	            		<input id="salary" name="salary" type="text" class="required" placeholder="&#2547;">
	        		</div>
	        	</div>
	        	<div class="contact-d-flex">
	        		<div style="display: none;" class="loan_amount_div">
	        			<label for="loan_amount">Expected Loan Amount</label>
	            		<input id="loan_amount" name="loan_amount" type="text" placeholder="&#2547;">
	        		</div>
	        		<div>
			        	DO YOU HAVE EXISTING LOAN or CREDIT CARD?<br>
			        	<input type="radio" value="1" name="loan_or_card" id="loan_or_card">
			        	<label for="loan_or_card">Yes</label>
			        	<input type="radio" value="0" name="loan_or_card" id="loan_or_card">
			        	<label for="loan_or_card">No</label>
	        		</div>
	        	</div>
	        </section>
	        <h3>Finish</h3>
	        <section>
	        	<label for="date_of_appointment">Date of Appointment</label>
	            <input id="date_of_appointment" name="date_of_appointment" placeholder="dd-mm-yyyy" type="text" class="required">
	        	<label for="message">Message</label>
	        	<textarea name="message" id="message" placeholder="message"></textarea>
	            <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
	            <label for="acceptTerms">I agree with the Terms and Conditions.</label>
	        </section>
	    </div>
	    <p class="success_message"></p>
	</form>
			</div>
			<?php 
			return ob_get_clean();
	}

}