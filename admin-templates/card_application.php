<div class="wrap">
    <?php settings_errors(); ?>
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1">All</a></li>
        <li><a href="#tab2">Done</a></li>
        <li><a href="#tab3">Pending</a></li>
        <li><a href="#tab4">Not Eligible</a></li>
    </ul>
    <div class="tab-content">
        <div id="tab1" class="tab-pane active">
            <?php 
                global $wpdb;
                $table = $wpdb->prefix.'loancard_contact';
                // var_dump($table);
                $sql = "SELECT * FROM $table WHERE type='credit_card' ORDER BY id DESC";
                // $sql = "SELECT * FROM $table";
                $results = $wpdb->get_results($sql) or die(mysql_error());
                // var_dump($results);
                
                if (isset($_REQUEST['view'])) :
                    $formID = sanitize_key( $_GET['id'] );?>
            <div class="wrap" style="position: relative;">
                <?php 
                    $sql = "SELECT * FROM $table WHERE id=$formID";
                    $single_form = $wpdb->get_results($sql) or die(mysql_error());
                    // echo "<pre>";
                    // var_dump($single_form);
                    if (count($single_form) > 0) : 
                ?>
                <table class="wp-table widefat fixed striped posts">
                    <thead>
                        <tr>
                            <th>
                                <a href="<?php echo admin_url('admin.php?page=card_application');?>" class=""><i class="dashicons dashicons-arrow-left-alt"></i>Go Back</a>
                            </th>
                            <th style="text-align: center;">
                                
                            </th>
                            <th style="text-align: right;">
                                
                            </th>
                        </tr>
                    </thead>
                </table>
                <table class="wp-table widefat fixed striped posts">
                    <form action="#" id="admin_single_contact_form" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
                    <?php foreach ($single_form as $data) : ?>
                        <input type="hidden" value="<?php echo $data->id; ?>" name="form_id" id="form_id">
                        <tr>
                            <td>Name: </td>
                            <td><?php echo $data->name ?></td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td><?php echo $data->email ?></td>
                        </tr>
                        <tr>
                            <td>Credit Card: </td>
                            <td><?php echo $data->credit_card ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth: </td>
                            <td><?php echo $data->date_of_birth ?></td>
                        </tr>
                        <tr>
                            <td>Phone: </td>
                            <td><?php echo $data->phone ?></td>
                        </tr>
                        <tr>
                            <td>Company: </td>
                            <td><?php echo $data->company_name ?></td>
                        </tr>
                        <tr>
                            <td>Designation: </td>
                            <td><?php echo $data->designation ?></td>
                        </tr>
                        <tr>
                            <td>Salary Paid By: </td>
                            <td><?php echo $data->salary_paid_system ?></td>
                        </tr>
                        <tr>
                            <td>Salary: </td>
                            <td><?php echo $data->salary ?></td>
                        </tr>
                        <tr>
                            <td>Existing Loan or Credit Card: </td>
                            <td><?php echo ($data->loan_or_card) ? 'Yes' : 'No' ?></td>
                        </tr>
                        <tr>
                            <td>Date of Appointment: </td>
                            <td><?php echo $data->date_of_appointment ?></td>
                        </tr>
                        <tr>
                            <td>Comments: </td>
                            <td><?php echo $data->message ?></td>
                        </tr>
                        <tr>
                            <td>Status: </td>
                            <td>
                                <select name="status" id="status">
                                    <option value="">---</option>
                                    <option value="done" <?php selected( $data->status,'done' )?>>Done</option>
                                    <option value="pending" <?php selected( $data->status,'pending' )?>>Pending</option>
                                    <option value="not_eligible" <?php selected( $data->status,'not_eligible' )?>>Not Eligible</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button class="button button-primary form_submit">Save</button></td>
                        </tr>
                    <?php endforeach; ?>
                </form>
                </table>
                <?php endif; ?>
            </div>
            <?php  else : ?>
                <div class="wrap" style="position: relative;">
                <table id="applicationTable" class="wp-table widefat fixed striped posts">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Credit Card</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach( $results as $key => $data ) :
                         ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $data->name ?></td>
                            <td><?php echo $data->email ?></td>
                            <td><?php echo $data->credit_card ?></td>
                            <td><?php echo $data->phone ?></td>
                            <td><?php if ($data->status === 'pending') {
                                echo "<span style='color: #ffa31a; font-weight: bold;'>Pending</span>";
                            }elseif($data->status === 'done'){
echo "<span style='color: #009900; font-weight: bold;'>Done</span>";
                            }elseif($data->status === 'not_eligible'){
echo "<span style='color: #ff0000; font-weight: bold;'>Not Eligible</span>";
                            }else{
                                echo "NULL";
                            }  ?></td>
                            <td><?php echo date('F d, Y | h:i:s', strtotime($data->time)) ?></td>
                            <td><a href="<?php echo admin_url('admin.php?page=card_application&view=results&id='.$data->id) ?>" class='button button-primary'>Details</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php endif; ?>
            
        </div>
        <!-- end tab2 -->
        <div id="tab2" class="tab-pane">
            <?php 
                $sql = "SELECT * FROM $table WHERE status='done' AND type='credit_card'";
                // $sql = "SELECT * FROM $table";
                $results = $wpdb->get_results($sql);
                if (count($results) <= 0) {
                    echo "Data not found!";
                }else{
                    ?>
<div class="wrap" style="position: relative;">
                <table id="doneTable" class="wp-table widefat fixed striped posts">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Credit Card</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach( $results as $key => $data ) :
                         ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $data->name ?></td>
                            <td><?php echo $data->email ?></td>
                            <td><?php echo $data->credit_card ?></td>
                            <td><?php echo $data->phone ?></td>
                            <td><?php if ($data->status === 'pending') {
                                echo "<span style='color: #ffa31a; font-weight: bold;'>Pending</span>";
                            }elseif($data->status === 'done'){
echo "<span style='color: #009900; font-weight: bold;'>Done</span>";
                            }elseif($data->status === 'not_eligible'){
echo "<span style='color: #ff0000; font-weight: bold;'>Not Eligible</span>";
                            }else{
                                echo "NULL";
                            }  ?></td>
                            <td><?php echo date('F d, Y | h:i:s', strtotime($data->time)) ?></td>
                            <td><a href="<?php echo admin_url('admin.php?page=card_application&view=results&id='.$data->id) ?>" class='button button-primary'>Details</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
                    <?php 
                }
             ?>
        </div>
        <!-- end tab2 -->
        
        <div id="tab3" class="tab-pane">
            <?php 
                $sql = "SELECT * FROM $table WHERE status='pending' AND type='credit_card'";
                // $sql = "SELECT * FROM $table";
                $results = $wpdb->get_results($sql);
                if (count($results) <= 0) {
                    echo "Data not found!";
                }else{
                    ?>
<div class="wrap" style="position: relative;">
                <table id="pendingTable" class="wp-table widefat fixed striped posts">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Credit Card</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach( $results as $key => $data ) :
                         ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $data->name ?></td>
                            <td><?php echo $data->email ?></td>
                            <td><?php echo $data->credit_card ?></td>
                            <td><?php echo $data->phone ?></td>
                            <td><?php if ($data->status === 'pending') {
                                echo "<span style='color: #ffa31a; font-weight: bold;'>Pending</span>";
                            }elseif($data->status === 'done'){
echo "<span style='color: #009900; font-weight: bold;'>Done</span>";
                            }elseif($data->status === 'not_eligible'){
echo "<span style='color: #ff0000; font-weight: bold;'>Not Eligible</span>";
                            }else{
                                echo "NULL";
                            }  ?></td>
                            <td><?php echo date('F d, Y | h:i:s', strtotime($data->time)) ?></td>
                            <td><a href="<?php echo admin_url('admin.php?page=card_application&view=results&id='.$data->id) ?>" class='button button-primary'>Details</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
                    <?php 
                }
             ?>
        </div>
        <!-- end tab3 -->
        <div id="tab4" class="tab-pane">
            <?php 
                $sql = "SELECT * FROM $table WHERE status='not_eligible' AND type='credit_card'";
                $results = $wpdb->get_results($sql);
                if (count($results) <= 0) {
                    echo "Data not found!";
                }else{
                    ?>
<div class="wrap" style="position: relative;">
                <table id="notEligibleTable" class="wp-table widefat fixed striped posts">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Credit Card</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach( $results as $key => $data ) :
                         ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $data->name ?></td>
                            <td><?php echo $data->email ?></td>
                            <td><?php echo $data->credit_card ?></td>
                            <td><?php echo $data->phone ?></td>
                            <td><?php if ($data->status === 'pending') {
                                echo "<span style='color: #ffa31a; font-weight: bold;'>Pending</span>";
                            }elseif($data->status === 'done'){
echo "<span style='color: #009900; font-weight: bold;'>Done</span>";
                            }elseif($data->status === 'not_eligible'){
echo "<span style='color: #ff0000; font-weight: bold;'>Not Eligible</span>";
                            }else{
                                echo "NULL";
                            }  ?></td>
                            <td><?php echo date('F d, Y | h:i:s', strtotime($data->time)) ?></td>
                            <td><a href="<?php echo admin_url('admin.php?page=card_application&view=results&id='.$data->id) ?>" class='button button-primary'>Details</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
                    <?php 
                }
             ?>
        </div>
        <!-- end tab4 -->

    </div>
    
</div>

<script type="text/javascript">
    var form = document.getElementById('admin_single_contact_form'),
        form_submit =  document.querySelector('.form_submit');
        if (form_submit) {
            form_submit.addEventListener("click",function (e) {
               e.preventDefault();
               var ajaxurl = form.dataset.url,
                    status_value = document.getElementById('status').value;
                    form_id = document.getElementById('form_id').value;
               jQuery.ajax({
                    url: ajaxurl,
                    type: 'post',
                    data: {
                        status_value: status_value,
                        form_id: form_id,
                        action: 'admin_form_save_status'
                    },
                    success: function(response) {
                        console.log(response);
                    }
               });
           });
        }

        jQuery(document).ready(function() {
            jQuery('#applicationTable').DataTable({
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
            jQuery('#notEligibleTable').DataTable({
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
            jQuery('#pendingTable').DataTable({
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
            jQuery('#doneTable').DataTable({
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