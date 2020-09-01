<div class="wrap" style="position: relative;">
	<div class="box-parent">
		<div class="box credit-box">
		<h3>Credit Card Application</h3>
		<?php 

			global $wpdb;
			$table = $wpdb->prefix . 'loancard_contact';
			$sql = "SELECT * FROM $table WHERE type='credit_card'";
                // $sql = "SELECT * FROM $table";
                $results = $wpdb->get_results($sql);
                if (count($results) > 0) {
                	echo "<span>".count($results)."</span>";
                }else{
                	echo '<span>No data!</span>';
                }
		 ?>
		 <a href="<?php echo admin_url('admin.php?page=card_application') ?>" class="button button-secondary">View Details</a>
	</div>
	<div class="box loan-box">
		<h3>Loan Application</h3>
		<?php 

			global $wpdb;
			$table = $wpdb->prefix . 'loancard_contact';
			$sql = "SELECT * FROM $table WHERE type='loan'";
                // $sql = "SELECT * FROM $table";
                $results = $wpdb->get_results($sql);
                if (count($results) > 0) {
                	echo "<span>".count($results)."</span>";
                }else{
                	echo '<span>No data!</span>';
                }
		 ?>
		<a href="<?php echo admin_url('admin.php?page=loan_application') ?>" class="button button-secondary">View Details</a>
	</div>
	</div>
</div>