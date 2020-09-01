<?php 

	# Template name: Home Loan Details
	get_header();
	$options = get_option('loancard');
 ?>


 	<div class="loan_filter_wrap">
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-lg-12">
 					
 				</div>
 			</div>
 		</div>
 	</div>
 	<!-- end loan_filter_wrap-->

 	<div class="loan_details_wrap">
 		<?php $page_header = $options['h_page_header']; ?>
 		<div class="page-banner" style="background-image: url(<?php echo esc_url($page_header); ?>);">
 			<div class="containenr">
 				<div class="row" style="margin: 0">
 					<div class="col-12 text-center">
 						<h1><?php wp_title(' '); ?></h1>
 						<a href="<?php echo home_url('/') ?>">Home </a><i>>></i><span><?php wp_title(' '); ?></span>
 					</div>
 				</div>
 			</div>
 		</div>
 		<div class="container-fluid">
 			<!-- <div class="row no-g" style="margin-right: 0;">
 				<div class="col-lg-12">
 					<div class="filter-result-headline">
 						<p>We Have Found 15 Personal Loan of Amount 5.00 Lac (BDT) for 5 Years</p>
 					</div>
 				</div>
 			</div> -->
 			<?php $home_loan_details = $options['home_loan_details'];
 			if (isset($home_loan_details) && is_array($home_loan_details)) :
 			$i = 0;
 			foreach ($home_loan_details as $single_value): ?>
 				
 			
 			<!-- end row -->
 			<div class="row single-loan-details no-gutters " style="margin-right: 0; align-items: center;">
				<div class="table-grid-1 col-md-1 col-lg-1 col-12">
					<div class="card  border-0  align-items-center">
						<div class="card-image mt-0 text-center">
							<img src="<?php echo esc_url($single_value['bank_logo']); ?>">
						</div>
					</div>
				</div>
				<div class="mr-0 col-md-9 col-lg-9 col-12 text-center">
					<div class="card border-0">
						<div class="row no-gutters loan_details_box_header" style="margin-right: 0;">
							<div class="col">
								<h4 class="loan_bank_name"><?php echo $single_value['bank_name']; ?></h4>
							</div>
						</div>
						<div class="row no-gutters loan_details_box" style="margin-right: 0;">
							<div class="col">
								<span>Interest Rate</span>
								<p><?php echo $single_value['interest_rate']; ?></p>
							</div>
							<div class="col d-none d-md-block d-lg-block">
								<span>Processing Fee</span>
								<p><?php echo $single_value['processing_fee']; ?></p>
							</div>
							<div class="col">
								<span>Loan Amount</span>
								<p><?php echo $single_value['loan_amount']; ?></p>
							</div>
							<div class="col">
								<span>Max Loan Duration</span>
								<p><?php echo $single_value['loan_duration']; ?></p>
							</div>
							<div class="col d-none d-md-block d-lg-block">
								<span>Monthly EMI</span>
								<p><?php echo $single_value['emi']; ?></p>
							</div>
						</div>
						<div class="row loan_details_box_footer" style="margin-right: 0;">
							<div class="col">
								<p><i></i><?php echo $single_value['rate']; ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="table-grid-1 col-md-2 col-lg-2 col-12">
					<div class="card">
						<button class="loan_btn apply_btn"><a href="<?php echo get_page_link(764)?>">Apply Now</a></button>
						<button class="loan_btn bg-color"   data-toggle="modal" data-target="#loanModalCenter-<?php echo $i;?>">Required Documents</button>
<div class="modal fade" id="loanModalCenter-<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="loanModalCenterTitle<?php echo $i;?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loanModalLongTitle">Required Documents</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modal-body-flex">
        	<div class="left-side">
        		<div class="left-side-single-box">
	        		<h3 class="modal-body-header bg-secondary">Remember</h3>
	        			
	        		<?php //if (isset($single_value['loan_remember_parent'])) : var_dump($single_value['loan_remember_parent']);  ?>
	        			
	        		
	        		<!-- <ul>
	        			<?php// foreach ($single_value['loan_remember_parent'] as $loan_remember): foreach ($loan_remember as $remember_value) : ?>
	        				
	        				<li><i></i><?php //echo $remember_value; ?></li>
	        			<?php //endforeach;endforeach ?>
	        		</ul> -->
	        		<?php //endif; ?>

	        		<ul>
	        			<li>Loan processing will start only after submitting all the documents to the bank you have applied for.</li>

						<li>If any further document is required please submit it as early as possible otherwise loan processing will not start.</li>

					<li>In case you submit any fake/false documents , you will be blacklisted by the bank for lifetime.</li>
	        		</ul>
        		</div>
        		<div class="left-side-single-box">
	        		<h3 class="modal-body-header bg-warning">Watchout</h3>
	        		<?php //if (isset($single_value['loan_watchout_parent'])) :   ?>
	        			
	        		
	        		<!-- <ul>
	        			<?php //foreach ($single_value['loan_watchout_parent'] as $loan_watchout): foreach ($loan_watchout as $watchout_value) : ?>
	        				
	        				<li><i></i><?php // echo $watchout_value; ?></li>
	        			<?php // endforeach;endforeach ?>
	        		</ul> -->
	        		<?php // endif; ?>
	        		<ul>
	        			<li>Do not submit any fake/false document.</li>
	        			<li>Each and every document should be up-to-date.</li>
	        		</ul>
        		</div>
        		
        	</div>
        	<div class="right-side">
        		<div class="right-side-single-box">
	        		<h3 class="modal-body-header bg-secondary">Essential Documents</h3>
	        		<?php if (isset($single_value['loan_essential_documents'])): ?>
		        		<ul>
		        			<?php foreach ($single_value['loan_essential_documents'] as $essential_docs) :  ?>
		        				<li><?php echo $essential_docs['essential_list'] ?></li>
		        			<?php endforeach ?>
		        			
		        		</ul>
	        		<?php endif; ?>
	        		<ul>
	        			<li>Lab Print Photo 4 Copy</li>
	        			<li>NID/ Passport Clear Copy</li>
	        			<li>Visiting Card</li>
	        			<li>Minimum 12 Months Bank Statement</li>
	        			<li>Utility Bill Copy (Update)</li>
	        			<li>TIN Certificate Needed Above 5 Lac</li>
	        			<li>Trade License All Page Photo Copy</li>
	        			<li>Partnership Deed Copy (Partnership Company)</li>
	        			<li>Memorandum of Articles Copy (Limited Company)</li>
	        			<li>Schedule-X Copy (Limited Company)</li>
	        			<li>Form-XII Copy (Limited Company)</li>
	        			<li>Incorporation Certificate Copy (Limited Company)</li>
	        		</ul>
        		</div>
        		<div class="right-side-single-box">
	        		<h3 class="modal-body-header bg-secondary">Guarantor Documents</h3>
	        		<?php //if (isset($single_value['loan_guarantor_documents'])): ?>
		        		<!-- <ul>
		        			<?php //foreach ($single_value['loan_guarantor_documents'] as $essential_docs) :  ?>
		        				<li><?php// echo $essential_docs['guarantor_list'] ?></li>
		        			<?php //endforeach ?>
		        			
		        		</ul> -->
	        		<?php //endif; ?>
	        		<ul>
	        			<li>Lab Print Photo 2 Copy</li>
	        			<li>NID/ Passport Clear Copy</li>
	        			<li>Personal Information (Address, Mobile Number)</li>
	        		</ul>
        		</div>
        		<div class="right-side-single-box">
	        		<h3 class="modal-body-header bg-secondary">Reference Documents</h3>
	        		<!-- <?php //if (isset($single_value['loan_reference_documents'])): ?>
		        		<ul>
		        			<?php //foreach ($single_value['loan_reference_documents'] as $essential_docs) :  ?>
		        				<li><?php //echo $essential_docs['reference_list'] ?></li>
		        			<?php //endforeach ?>
		        			
		        		</ul>
	        		<?php //endif; ?> -->
	        		<ul>
	        			<li>Personal Information (Address, Mobile Number)</li>
	        		</ul>
        		</div>
        		
        	</div>
      </div>
    </div>
  </div>
</div>
						<button class="loan_btn bg-transferent border-none" data-toggle="collapse" href="#loanQuickDetails-<?php echo $i;?>" role="button" aria-expanded="false" aria-controls="loanQuickDetails-<?php echo $i;?>"><span>Quick Details</span></button>
					</div>
				</div>
 			</div>

 			<!-- end row -->


 			<div class="row no-gutters mb-3 quick_details_box" style="margin-right: 0;">
 				<div class="col">
 					<div class="collapse" id="loanQuickDetails-<?php echo $i;?>">
					  <div class="card card-body">
					 	<div class="row no-gutters" style="margin-right: 0;">
					 		<div class="col-12 col-md-4 col-lg-4">
					 			<div class="single_quick_details_box">
					 				<h3>Fees & Charges</h3>
					 				<?php if (isset($single_value['loan_fees_charge'])): ?>
						        		<ul>
						        			<?php foreach ($single_value['loan_fees_charge'] as $fees_docs) :  ?>
						        				<li><?php echo $fees_docs['fees_list'] ?></li>
						        			<?php endforeach ?>
						        			
						        		</ul>
					        		<?php endif; ?>
					 			</div>	
					 		</div>
					 		<div class="col-12 col-md-4 col-lg-4">
					 			<div class="single_quick_details_box">
					 				<h3>Features</h3>
					 				<?php if (isset($single_value['loan_features'])): ?>
						        		<ul>
						        			<?php foreach ($single_value['loan_features'] as $features_docs) :  ?>
						        				<li><?php echo $features_docs['features_list'] ?></li>
						        			<?php endforeach ?>
						        			
						        		</ul>
					        		<?php endif; ?>
					 			</div>	
					 		</div>
					 		<div class="col-12 col-md-4 col-lg-4">
					 			<div class="single_quick_details_box">
					 				<h3>Eligibility</h3>
					 				<?php if (isset($single_value['loan_eligibility'])): ?>
						        		<ul>
						        			<?php foreach ($single_value['loan_eligibility'] as $eligibility_docs) :  ?>
						        				<li><?php echo $eligibility_docs['eligibility_list'] ?></li>
						        			<?php endforeach ?>
						        			
						        		</ul>
					        		<?php endif; ?>
					 			</div>	
					 		</div>
					 		
					 	</div>
					  </div>
					</div>
 				</div>
 			</div>
 			<!-- end row -->
 			<?php $i++; endforeach;else: echo"<div class='alert alert-danger' role='alert'>This page is under construction</div>";endif; ?>
 		</div>
 	</div>
 	<!-- end loan_details_wrap-->

 	

 <?php get_footer(); ?>