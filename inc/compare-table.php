<?php
/**
 * loancard custom post type
 *
 * @package loancard
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if (!function_exists('creaditcard_compare_table_shortcode')) {

	add_shortcode( 'table_sorting', 'creaditcard_compare_table_shortcode' );
	function creaditcard_compare_table_shortcode()
	{
		ob_start();
	?>
<div class="table-wrapper" style="overflow-x: auto;">
	
	<table id="compareTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Issuer</th>
                <th>Card Network</th>
                <th>Card Name</th>
                <th>Interest Free Period</th>
                <th>Annual Fee</th>
                <th>Interest Rate</th>
                <th>Cash Adv Fee</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	<?php 
        		$compares_data = [
        			[
        				'issuer' => 'Eastern Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Corporate Platinum',
	        			'period' => '45 Days',
	        			'annual_fee' => '৳1000',
	        			'interest_rate' => '27%',
	        			'cash_adv_fee' => '2% - 3%'
	        		],
	        		[
	        			'issuer' => 'Eastern Bank Ltd.',
	        			'card_network' => 'Diners Club',
	        			'card_name' => 'International',
	        			'period' => '45 Days',
	        			'annual_fee' => '৳999',
	        			'interest_rate' => '27%',
	        			'cash_adv_fee' => '2% - 3%'
	        		],
	        		[
	        			'issuer' => 'Eastern Bank Ltd.',
	        			'card_network' => 'MasterCard',
	        			'card_name' => 'Titanium',
	        			'period' => '45 Days',
	        			'annual_fee' => '৳4000',
	        			'interest_rate' => '27%',
	        			'cash_adv_fee' => '2% - 3%'
	        		],
	        		[
	        			'issuer' => 'Eastern Bank Ltd.',
	        			'card_network' => 'MasterCard',
	        			'card_name' => 'World',
	        			'period' => '45 Days',
	        			'annual_fee' => '৳5000',
	        			'interest_rate' => '27%',
	        			'cash_adv_fee' => '2% - 3%'
	        		],
	        		[
	        			'issuer' => 'Eastern Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Platinum',
	        			'period' => '45 Days',
	        			'annual_fee' => '৳5000',
	        			'interest_rate' => '27%',
	        			'cash_adv_fee' => '2% - 3%'
	        		],
	        		[
	        			'issuer' => 'Eastern Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Classic',
	        			'period' => '45 Days',
	        			'annual_fee' => '৳1500',
	        			'interest_rate' => '27%',
	        			'cash_adv_fee' => '2% - 3%'
	        		],
	        		[
	        			'issuer' => 'Eastern Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Gold',
	        			'period' => '45 Days',
	        			'annual_fee' => '৳2500',
	        			'interest_rate' => '27%',
	        			'cash_adv_fee' => '2% - 3%'
	        		],
	        		[
	        			'issuer' => 'Eastern Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Signature Lite',
	        			'period' => '45 Days',
	        			'annual_fee' => '৳7500',
	        			'interest_rate' => '27%',
	        			'cash_adv_fee' => '2% - 3%'
	        		],
	        		[
	        			'issuer' => 'Eastern Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Signature Acci-shield',
	        			'period' => '45 Days',
	        			'annual_fee' => '৳12000',
	        			'interest_rate' => '27%',
	        			'cash_adv_fee' => '2% - 3%'
	        		],
	        		[
	        			'issuer' => 'Eastern Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Women Platinum',
	        			'period' => '45 Days',
	        			'annual_fee' => '৳999',
	        			'interest_rate' => '27%',
	        			'cash_adv_fee' => '2% - 3%'
	        		],
	        		[
	        			'issuer' => 'Eastern Bank Ltd.',
	        			'card_network' => 'Diners Club',
	        			'card_name' => 'Vroom Co-branded',
	        			'period' => '45 Days',
	        			'annual_fee' => '৳999',
	        			'interest_rate' => '27%',
	        			'cash_adv_fee' => '2% - 3%'
	        		],
	        		[
	        			'issuer' => 'Eastern Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Air Force Platinum',
	        			'period' => '45 Days',
	        			'annual_fee' => '৳4000',
	        			'interest_rate' => '27%',
	        			'cash_adv_fee' => '2% - 3%'
	        		],
	        		[
	        			'issuer' => 'Eastern Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Army Platinum',
	        			'period' => '45 Days',
	        			'annual_fee' => '৳4000',
	        			'interest_rate' => '27%',
	        			'cash_adv_fee' => '2% - 3%'
	        		],
	        		[
	        			'issuer' => 'Eastern Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Navy Platinum',
	        			'period' => '45 Days',
	        			'annual_fee' => '৳4000',
	        			'interest_rate' => '27%',
	        			'cash_adv_fee' => '2% - 3%'
	        		],
	        		[
	        			'issuer' => 'Eastern Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Meena Bazar Co-branded',
	        			'period' => '45 Days',
	        			'annual_fee' => '৳5,000',
	        			'interest_rate' => '27%',
	        			'cash_adv_fee' => '2% - 3%'
	        		],
	        		[
	        			'issuer' => 'Eastern Bank Ltd.',
	        			'card_network' => 'MasterCard',
	        			'card_name' => 'Shwapno Co-branded',
	        			'period' => '45 Days',
	        			'annual_fee' => '৳4000',
	        			'interest_rate' => '27%',
	        			'cash_adv_fee' => '2% - 3%'
	        		],
	        		[
	        			'issuer' => 'Eastern Bank Ltd.',
	        			'card_network' => 'MasterCard',
	        			'card_name' => 'BASIS Co-branded',
	        			'period' => '45 Days',
	        			'annual_fee' => '৳4000',
	        			'interest_rate' => '27%',
	        			'cash_adv_fee' => '2% - 3%'
	        		],
	        		[
	        			'issuer' => 'Bank Asia Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Platinum',
	        			'period' => '45 Days',
	        			'annual_fee' => '৳3000',
	        			'interest_rate' => '24%',
	        			'cash_adv_fee' => '2% - 3%'
	        		],
					[
	        			'issuer' => 'Mutual Trust Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Signature',
	        			'period' => '50 Days',
	        			'annual_fee' => '৳10,000',
	        			'interest_rate' => '24%',
	        			'cash_adv_fee' => '2.5%'
	        		],
					[
	        			'issuer' => 'Mutual Trust Bank Ltd.',
	        			'card_network' => 'MasterCard',
	        			'card_name' => 'World',
	        			'period' => '50 Days',
	        			'annual_fee' => '৳10,000',
	        			'interest_rate' => '24%',
	        			'cash_adv_fee' => '2.5%'
	        		],
	        		[
	        			'issuer' => 'Mutual Trust Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Platinum',
	        			'period' => 'Days',
	        			'annual_fee' => '৳3,000',
	        			'interest_rate' => '25%',
	        			'cash_adv_fee' => '2.5%'
	        		],
	        		[
	        			'issuer' => 'Mutual Trust Bank Ltd.',
	        			'card_network' => 'UnionPay',
	        			'card_name' => 'Platinum',
	        			'period' => 'Days',
	        			'annual_fee' => '৳3,000',
	        			'interest_rate' => '25%',
	        			'cash_adv_fee' => '2.5%'
	        		],
	        		[
	        			'issuer' => 'Mutual Trust Bank Ltd.',
	        			'card_network' => 'MasterCard',
	        			'card_name' => 'Titanium',
	        			'period' => 'Days',
	        			'annual_fee' => '৳3,000',
	        			'interest_rate' => '25%',
	        			'cash_adv_fee' => '2.5%'
	        		],
	        		[
	        			'issuer' => 'Mutual Trust Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Gold',
	        			'period' => 'Days',
	        			'annual_fee' => '৳2,000',
	        			'interest_rate' => '26.5%',
	        			'cash_adv_fee' => '2.5%'
	        		],
	        		[
	        			'issuer' => 'Mutual Trust Bank Ltd.',
	        			'card_network' => 'MasterCard',
	        			'card_name' => 'Gold',
	        			'period' => 'Days',
	        			'annual_fee' => '৳2,000',
	        			'interest_rate' => '26.5%',
	        			'cash_adv_fee' => '2.5%'
	        		],
	        		[
	        			'issuer' => 'Mutual Trust Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Gold (Local)',
	        			'period' => 'Days',
	        			'annual_fee' => '৳1,800',
	        			'interest_rate' => '26.5%',
	        			'cash_adv_fee' => '2.5%'
	        		],
	        		[
	        			'issuer' => 'Mutual Trust Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Classic',
	        			'period' => 'Days',
	        			'annual_fee' => '৳2,000',
	        			'interest_rate' => '26.5%',
	        			'cash_adv_fee' => '2.5%'
	        		],
	        		[
	        			'issuer' => 'Mutual Trust Bank Ltd.',
	        			'card_network' => 'MasterCard',
	        			'card_name' => 'Classic',
	        			'period' => 'Days',
	        			'annual_fee' => '৳1,000',
	        			'interest_rate' => '26.5%',
	        			'cash_adv_fee' => '2.5%'
	        		],
	        		[
	        			'issuer' => 'Mutual Trust Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Apex Rewards Platinum',
	        			'period' => 'Days',
	        			'annual_fee' => '৳3,800',
	        			'interest_rate' => '25%',
	        			'cash_adv_fee' => '2.5%'
	        		],
	        		[
	        			'issuer' => 'Mutual Trust Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Baridhara CCL Signature',
	        			'period' => 'Days',
	        			'annual_fee' => '৳10,000',
	        			'interest_rate' => '24%',
	        			'cash_adv_fee' => '2.5%'
	        		],
	        		[
	        			'issuer' => 'Mutual Trust Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Cadet College Club Signature',
	        			'period' => '50 Days',
	        			'annual_fee' => '৳10,000',
	        			'interest_rate' => '24%',
	        			'cash_adv_fee' => '2.5%'
	        		],
	        		[
	        			'issuer' => 'Mutual Trust Bank Ltd.',
	        			'card_network' => 'MasterCard',
	        			'card_name' => 'Cadet College Club World',
	        			'period' => '50 Days',
	        			'annual_fee' => '৳10,000',
	        			'interest_rate' => '24%',
	        			'cash_adv_fee' => '2.5%'
	        		],
	        		[
	        			'issuer' => 'Mutual Trust Bank Ltd.',
	        			'card_network' => 'MasterCard',
	        			'card_name' => 'Chittagong Club World',
	        			'period' => 'Days',
	        			'annual_fee' => '৳10,000',
	        			'interest_rate' => '24%',
	        			'cash_adv_fee' => '2.5%'
	        		],
	        		[
	        			'issuer' => 'Mutual Trust Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Sylhet Club Limited Signature',
	        			'period' => '50 Days',
	        			'annual_fee' => '৳10,000',
	        			'interest_rate' => '24%',
	        			'cash_adv_fee' => '2.5%'
	        		],
	        		[
	        			'issuer' => 'Mutual Trust Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Sylhet Station Club Signature',
	        			'period' => '50 Days',
	        			'annual_fee' => '৳10,000',
	        			'interest_rate' => '24%',
	        			'cash_adv_fee' => '2.5%'
	        		],
	        		[
	        			'issuer' => 'Mutual Trust Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'University of Dhaka Signature',
	        			'period' => '50 Days',
	        			'annual_fee' => '৳10,000',
	        			'interest_rate' => '24%',
	        			'cash_adv_fee' => '2.5%'
	        		],
	        		[
	        			'issuer' => 'Mutual Trust Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Infinite',
	        			'period' => 'Days',
	        			'annual_fee' => '৳25,000',
	        			'interest_rate' => '27%',
	        			'cash_adv_fee' => '3%'
	        		],
	        		[
	        			'issuer' => 'BRAC Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Signature',
	        			'period' => 'Days',
	        			'annual_fee' => '৳10,000',
	        			'interest_rate' => '27%',
	        			'cash_adv_fee' => '2.5%'
	        		],
	        		[
	        			'issuer' => 'BRAC Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Platinum',
	        			'period' => 'Days',
	        			'annual_fee' => '৳5,000',
	        			'interest_rate' => '27%',
	        			'cash_adv_fee' => '2.5%'
	        		],
	        		[
	        			'issuer' => 'BRAC Bank Ltd.',
	        			'card_network' => 'MasterCard',
	        			'card_name' => 'Gold',
	        			'period' => 'Days',
	        			'annual_fee' => '৳3,000',
	        			'interest_rate' => '27%',
	        			'cash_adv_fee' => '2.5%'
	        		],
	        		[
	        			'issuer' => 'BRAC Bank Ltd.',
	        			'card_network' => 'Visa',
	        			'card_name' => 'Classic',
	        			'period' => 'Days',
	        			'annual_fee' => '৳1,500',
	        			'interest_rate' => '27%',
	        			'cash_adv_fee' => '2.5%'
	        		],



        		];
        	foreach ($compares_data as $compare_data) : ?>
            <tr>
                <td><?php echo $compare_data['issuer'] ?></td>
                <td><?php echo $compare_data['card_network'] ?></td>
                <td><?php echo $compare_data['card_name'] ?></td>
                <td><?php echo $compare_data['period'] ?></td>
                <td><?php echo $compare_data['annual_fee'] ?></td>
                <td><?php echo $compare_data['interest_rate'] ?></td>
                <td><?php echo $compare_data['cash_adv_fee'] ?></td>
                <td><a href="<?php echo get_page_link( 764 ) ?>">Apply Now</a></td>
            </tr>
        	<?php endforeach ?>
        </tbody>
        <tfoot>
            <!-- <tr>
                <th>Issuer</th>
                <th>Card Network</th>
                <th>Card Name</th>
                <th>Interest Free Period</th>
                <th>Annual Fee</th>
                <th>Interest Rate</th>
                <th>Cash Adv Fee</th>
            </tr> -->
        </tfoot>
    </table>
</div>
	
	<?php 

	return ob_get_clean();
	}
}

add_action('wp_footer','creditcard_child_footer_scripts');

	function creditcard_child_footer_scripts()
	{
		?>
			<script>
				jQuery(document).ready(function() {
					jQuery('#compareTable').DataTable({
						pageLength: 10,
						ordering: true,
						paging: true,
						responsive: true,
						searching: false,
						lengthChange: false,
						searchPanes:{
            				hideCount: true,
        				},
        				info: false
					});
				} );
			</script>
		<?php 
	}