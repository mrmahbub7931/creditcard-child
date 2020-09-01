<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.\


// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'loancard';
  
    //
    // Create options
    CSF::createOptions( $prefix, array(
        'menu_title'      => 'Loan Details',
        'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
        'menu_slug'       => 'loancard-child-panel',
        'menu_icon'       =>  'dashicons-money-alt',
        'ajax_save'       => true,
        'show_reset_all'  => false,
        'framework_title' => 'Child Theme panel <small>by <a href="https://techmix.xyz/" rel="nofollow">techmix</a></small>',
    ) );
  
    
  

    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Personal loan page',
      'fields' => array(
        array(
          'id'    =>  'page_header',
          'type'  =>  'upload',
          'title' =>  'Page Banner'
        ),
        array(
          'id'        => 'loan_details_parent',
          'type'      => 'group',
          'title'     => 'Bank Details',
          'fields'    => array(
            array(
              'id'    => 'bank_name',
              'type'  => 'text',
              'title' => 'Bank Name'
            ),
            array(
              'id'    => 'bank_logo',
              'type'  => 'upload',
              'title' => 'Bank Logo'
            ),
            array(
              'id'    => 'interest_rate',
              'type'  => 'text',
              'title' => 'Bank Interest Rate'
            ),
            array(
              'id'    => 'processing_fee',
              'type'  => 'text',
              'title' => 'Bank Processing Fee'
            ),
            array(
              'id'    => 'loan_amount',
              'type'  => 'text',
              'title' => 'Bank Loan Amount'
            ),
            array(
              'id'    => 'loan_duration',
              'type'  => 'text',
              'title' => 'Max Loan Duration'
            ),
            array(
              'id'    => 'emi',
              'type'  => 'text',
              'title' => 'Monthly EMI'
            ),
            array(
              'id'    => 'rate',
              'type'  => 'text',
              'title' => 'Rate Varies'
            ),

            // Required Documents Fields
            // array(
            //   'type'    => 'heading',
            //   'content' => 'Required Documents Fields',
            // ),
            // array(
            //   'id'        => 'loan_remember_parent',
            //   'type'      => 'group',
            //   'title'     => 'Remember Section',
            //   'fields'    => array(
            //     array(
            //       'id'    => 'remember_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //     )
            // ),
            // array(
            //   'id'     => 'loan_watchout_parent',
            //   'type'   => 'group',
            //   'title'  => 'Watchout Section',
            //   'fields' => array(
            //     array(
            //       'id'    => 'watchout_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //   )
            // ),
            // array(
            //   'id'     => 'loan_essential_documents',
            //   'type'   => 'group',
            //   'title'  => 'Essential Documents',
            //   'fields' => array(
            //     array(
            //       'id'    => 'essential_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //   )
            // ),
            // array(
            //   'id'     => 'loan_guarantor_documents',
            //   'type'   => 'group',
            //   'title'  => 'Guarantor Documents',
            //   'fields' => array(
            //     array(
            //       'id'    => 'guarantor_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //   )
            // ),
            
            // array(
            //   'id'     => 'loan_reference_documents',
            //   'type'   => 'group',
            //   'title'  => 'Reference Documents',
            //   'fields' => array(
            //     array(
            //       'id'    => 'reference_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //   )
            // ),

            array(
              'type'    => 'heading',
              'content' => 'Quick Details Fields',
            ),
            array(
              'id'     => 'loan_fees_charge',
              'type'   => 'group',
              'title'  => 'Fees & Charges',
              'fields' => array(
                array(
                  'id'    => 'fees_list',
                  'type'  => 'text',
                  'title' => 'List'
                ),
              )
            ),
            array(
              'id'     => 'loan_features',
              'type'   => 'group',
              'title'  => 'Features',
              'fields' => array(
                array(
                  'id'    => 'features_list',
                  'type'  => 'text',
                  'title' => 'List'
                ),
              )
            ),
            array(
              'id'     => 'loan_eligibility',
              'type'   => 'group',
              'title'  => 'Eligibility',
              'fields' => array(
                array(
                  'id'    => 'eligibility_list',
                  'type'  => 'text',
                  'title' => 'List'
                ),
              )
            ),
            
          ),
        ),
        
      )
    ) );

    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Home loan page',
      'fields' => array(
        array(
          'id'    =>  'h_page_header',
          'type'  =>  'upload',
          'title' =>  'Page Banner'
        ),
        array(
          'id'        => 'home_loan_details',
          'type'      => 'group',
          'title'     => 'Bank Details',
          'fields'    => array(
            array(
              'id'    => 'bank_name',
              'type'  => 'text',
              'title' => 'Bank Name'
            ),
            array(
              'id'    => 'bank_logo',
              'type'  => 'upload',
              'title' => 'Bank Logo'
            ),
            array(
              'id'    => 'interest_rate',
              'type'  => 'text',
              'title' => 'Bank Interest Rate'
            ),
            array(
              'id'    => 'processing_fee',
              'type'  => 'text',
              'title' => 'Bank Processing Fee'
            ),
            array(
              'id'    => 'loan_amount',
              'type'  => 'text',
              'title' => 'Bank Loan Amount'
            ),
            array(
              'id'    => 'loan_duration',
              'type'  => 'text',
              'title' => 'Max Loan Duration'
            ),
            array(
              'id'    => 'emi',
              'type'  => 'text',
              'title' => 'Monthly EMI'
            ),
            array(
              'id'    => 'rate',
              'type'  => 'text',
              'title' => 'Rate Varies'
            ),

            // Required Documents Fields
            // array(
            //   'type'    => 'heading',
            //   'content' => 'Required Documents Fields',
            // ),
            // array(
            //   'id'        => 'loan_remember_parent',
            //   'type'      => 'group',
            //   'title'     => 'Remember Section',
            //   'fields'    => array(
            //     array(
            //       'id'    => 'remember_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //     )
            // ),
            // array(
            //   'id'     => 'loan_watchout_parent',
            //   'type'   => 'group',
            //   'title'  => 'Watchout Section',
            //   'fields' => array(
            //     array(
            //       'id'    => 'watchout_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //   )
            // ),
            // array(
            //   'id'     => 'loan_essential_documents',
            //   'type'   => 'group',
            //   'title'  => 'Essential Documents',
            //   'fields' => array(
            //     array(
            //       'id'    => 'essential_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //   )
            // ),
            // array(
            //   'id'     => 'loan_guarantor_documents',
            //   'type'   => 'group',
            //   'title'  => 'Guarantor Documents',
            //   'fields' => array(
            //     array(
            //       'id'    => 'guarantor_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //   )
            // ),
            
            // array(
            //   'id'     => 'loan_reference_documents',
            //   'type'   => 'group',
            //   'title'  => 'Reference Documents',
            //   'fields' => array(
            //     array(
            //       'id'    => 'reference_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //   )
            // ),

            array(
              'type'    => 'heading',
              'content' => 'Quick Details Fields',
            ),
            array(
              'id'     => 'loan_fees_charge',
              'type'   => 'group',
              'title'  => 'Fees & Charges',
              'fields' => array(
                array(
                  'id'    => 'fees_list',
                  'type'  => 'text',
                  'title' => 'List'
                ),
              )
            ),
            array(
              'id'     => 'loan_features',
              'type'   => 'group',
              'title'  => 'Features',
              'fields' => array(
                array(
                  'id'    => 'features_list',
                  'type'  => 'text',
                  'title' => 'List'
                ),
              )
            ),
            array(
              'id'     => 'loan_eligibility',
              'type'   => 'group',
              'title'  => 'Eligibility',
              'fields' => array(
                array(
                  'id'    => 'eligibility_list',
                  'type'  => 'text',
                  'title' => 'List'
                ),
              )
            ),
            
          ),
        ),
        
      )
    ) );
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Car loan page',
      'fields' => array(
        array(
          'id'    =>  'c_page_header',
          'type'  =>  'upload',
          'title' =>  'Page Banner'
        ),
        array(
          'id'        => 'car_loan_details',
          'type'      => 'group',
          'title'     => 'Bank Details',
          'fields'    => array(
            array(
              'id'    => 'bank_name',
              'type'  => 'text',
              'title' => 'Bank Name'
            ),
            array(
              'id'    => 'bank_logo',
              'type'  => 'upload',
              'title' => 'Bank Logo'
            ),
            array(
              'id'    => 'interest_rate',
              'type'  => 'text',
              'title' => 'Bank Interest Rate'
            ),
            array(
              'id'    => 'processing_fee',
              'type'  => 'text',
              'title' => 'Bank Processing Fee'
            ),
            array(
              'id'    => 'loan_amount',
              'type'  => 'text',
              'title' => 'Bank Loan Amount'
            ),
            array(
              'id'    => 'loan_duration',
              'type'  => 'text',
              'title' => 'Max Loan Duration'
            ),
            array(
              'id'    => 'emi',
              'type'  => 'text',
              'title' => 'Monthly EMI'
            ),
            array(
              'id'    => 'rate',
              'type'  => 'text',
              'title' => 'Rate Varies'
            ),

            // Required Documents Fields
            // array(
            //   'type'    => 'heading',
            //   'content' => 'Required Documents Fields',
            // ),
            // array(
            //   'id'        => 'loan_remember_parent',
            //   'type'      => 'group',
            //   'title'     => 'Remember Section',
            //   'fields'    => array(
            //     array(
            //       'id'    => 'remember_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //     )
            // ),
            // array(
            //   'id'     => 'loan_watchout_parent',
            //   'type'   => 'group',
            //   'title'  => 'Watchout Section',
            //   'fields' => array(
            //     array(
            //       'id'    => 'watchout_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //   )
            // ),
            // array(
            //   'id'     => 'loan_essential_documents',
            //   'type'   => 'group',
            //   'title'  => 'Essential Documents',
            //   'fields' => array(
            //     array(
            //       'id'    => 'essential_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //   )
            // ),
            // array(
            //   'id'     => 'loan_guarantor_documents',
            //   'type'   => 'group',
            //   'title'  => 'Guarantor Documents',
            //   'fields' => array(
            //     array(
            //       'id'    => 'guarantor_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //   )
            // ),
            
            // array(
            //   'id'     => 'loan_reference_documents',
            //   'type'   => 'group',
            //   'title'  => 'Reference Documents',
            //   'fields' => array(
            //     array(
            //       'id'    => 'reference_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //   )
            // ),

            array(
              'type'    => 'heading',
              'content' => 'Quick Details Fields',
            ),
            array(
              'id'     => 'loan_fees_charge',
              'type'   => 'group',
              'title'  => 'Fees & Charges',
              'fields' => array(
                array(
                  'id'    => 'fees_list',
                  'type'  => 'text',
                  'title' => 'List'
                ),
              )
            ),
            array(
              'id'     => 'loan_features',
              'type'   => 'group',
              'title'  => 'Features',
              'fields' => array(
                array(
                  'id'    => 'features_list',
                  'type'  => 'text',
                  'title' => 'List'
                ),
              )
            ),
            array(
              'id'     => 'loan_eligibility',
              'type'   => 'group',
              'title'  => 'Eligibility',
              'fields' => array(
                array(
                  'id'    => 'eligibility_list',
                  'type'  => 'text',
                  'title' => 'List'
                ),
              )
            ),
            
          ),
        ),
        
      )
    ) );
    
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Bike loan page',
      'fields' => array(
         array(
          'id'    =>  'b_page_header',
          'type'  =>  'upload',
          'title' =>  'Page Banner'
        ),
        array(
          'id'        => 'bike_loan_details',
          'type'      => 'group',
          'title'     => 'Bank Details',
          'fields'    => array(
            array(
              'id'    => 'bank_name',
              'type'  => 'text',
              'title' => 'Bank Name'
            ),
            array(
              'id'    => 'bank_logo',
              'type'  => 'upload',
              'title' => 'Bank Logo'
            ),
            array(
              'id'    => 'interest_rate',
              'type'  => 'text',
              'title' => 'Bank Interest Rate'
            ),
            array(
              'id'    => 'processing_fee',
              'type'  => 'text',
              'title' => 'Bank Processing Fee'
            ),
            array(
              'id'    => 'loan_amount',
              'type'  => 'text',
              'title' => 'Bank Loan Amount'
            ),
            array(
              'id'    => 'loan_duration',
              'type'  => 'text',
              'title' => 'Max Loan Duration'
            ),
            array(
              'id'    => 'emi',
              'type'  => 'text',
              'title' => 'Monthly EMI'
            ),
            array(
              'id'    => 'rate',
              'type'  => 'text',
              'title' => 'Rate Varies'
            ),

            // Required Documents Fields
            // array(
            //   'type'    => 'heading',
            //   'content' => 'Required Documents Fields',
            // ),
            // array(
            //   'id'        => 'loan_remember_parent',
            //   'type'      => 'group',
            //   'title'     => 'Remember Section',
            //   'fields'    => array(
            //     array(
            //       'id'    => 'remember_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //     )
            // ),
            // array(
            //   'id'     => 'loan_watchout_parent',
            //   'type'   => 'group',
            //   'title'  => 'Watchout Section',
            //   'fields' => array(
            //     array(
            //       'id'    => 'watchout_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //   )
            // ),
            // array(
            //   'id'     => 'loan_essential_documents',
            //   'type'   => 'group',
            //   'title'  => 'Essential Documents',
            //   'fields' => array(
            //     array(
            //       'id'    => 'essential_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //   )
            // ),
            // array(
            //   'id'     => 'loan_guarantor_documents',
            //   'type'   => 'group',
            //   'title'  => 'Guarantor Documents',
            //   'fields' => array(
            //     array(
            //       'id'    => 'guarantor_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //   )
            // ),
            
            // array(
            //   'id'     => 'loan_reference_documents',
            //   'type'   => 'group',
            //   'title'  => 'Reference Documents',
            //   'fields' => array(
            //     array(
            //       'id'    => 'reference_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //   )
            // ),

            array(
              'type'    => 'heading',
              'content' => 'Quick Details Fields',
            ),
            array(
              'id'     => 'loan_fees_charge',
              'type'   => 'group',
              'title'  => 'Fees & Charges',
              'fields' => array(
                array(
                  'id'    => 'fees_list',
                  'type'  => 'text',
                  'title' => 'List'
                ),
              )
            ),
            array(
              'id'     => 'loan_features',
              'type'   => 'group',
              'title'  => 'Features',
              'fields' => array(
                array(
                  'id'    => 'features_list',
                  'type'  => 'text',
                  'title' => 'List'
                ),
              )
            ),
            array(
              'id'     => 'loan_eligibility',
              'type'   => 'group',
              'title'  => 'Eligibility',
              'fields' => array(
                array(
                  'id'    => 'eligibility_list',
                  'type'  => 'text',
                  'title' => 'List'
                ),
              )
            ),
            
          ),
        ),
        
      )
    ) );
// Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'SME loan page',
      'fields' => array(
        array(
          'id'    =>  's_page_header',
          'type'  =>  'upload',
          'title' =>  'Page Banner'
        ),
        array(
          'id'        => 'sme_loan_details',
          'type'      => 'group',
          'title'     => 'Bank Details',
          'fields'    => array(
            array(
              'id'    => 'bank_name',
              'type'  => 'text',
              'title' => 'Bank Name'
            ),
            array(
              'id'    => 'bank_logo',
              'type'  => 'upload',
              'title' => 'Bank Logo'
            ),
            array(
              'id'    => 'interest_rate',
              'type'  => 'text',
              'title' => 'Bank Interest Rate'
            ),
            array(
              'id'    => 'processing_fee',
              'type'  => 'text',
              'title' => 'Bank Processing Fee'
            ),
            array(
              'id'    => 'loan_amount',
              'type'  => 'text',
              'title' => 'Bank Loan Amount'
            ),
            array(
              'id'    => 'loan_duration',
              'type'  => 'text',
              'title' => 'Max Loan Duration'
            ),
            array(
              'id'    => 'emi',
              'type'  => 'text',
              'title' => 'Monthly EMI'
            ),
            array(
              'id'    => 'rate',
              'type'  => 'text',
              'title' => 'Rate Varies'
            ),

            // Required Documents Fields
            // array(
            //   'type'    => 'heading',
            //   'content' => 'Required Documents Fields',
            // ),
            // array(
            //   'id'        => 'loan_remember_parent',
            //   'type'      => 'group',
            //   'title'     => 'Remember Section',
            //   'fields'    => array(
            //     array(
            //       'id'    => 'remember_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //     )
            // ),
            // array(
            //   'id'     => 'loan_watchout_parent',
            //   'type'   => 'group',
            //   'title'  => 'Watchout Section',
            //   'fields' => array(
            //     array(
            //       'id'    => 'watchout_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //   )
            // ),
            // array(
            //   'id'     => 'loan_essential_documents',
            //   'type'   => 'group',
            //   'title'  => 'Essential Documents',
            //   'fields' => array(
            //     array(
            //       'id'    => 'essential_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //   )
            // ),
            // array(
            //   'id'     => 'loan_guarantor_documents',
            //   'type'   => 'group',
            //   'title'  => 'Guarantor Documents',
            //   'fields' => array(
            //     array(
            //       'id'    => 'guarantor_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //   )
            // ),
            
            // array(
            //   'id'     => 'loan_reference_documents',
            //   'type'   => 'group',
            //   'title'  => 'Reference Documents',
            //   'fields' => array(
            //     array(
            //       'id'    => 'reference_list',
            //       'type'  => 'text',
            //       'title' => 'List'
            //     ),
            //   )
            // ),

            array(
              'type'    => 'heading',
              'content' => 'Quick Details Fields',
            ),
            array(
              'id'     => 'loan_fees_charge',
              'type'   => 'group',
              'title'  => 'Fees & Charges',
              'fields' => array(
                array(
                  'id'    => 'fees_list',
                  'type'  => 'text',
                  'title' => 'List'
                ),
              )
            ),
            array(
              'id'     => 'loan_features',
              'type'   => 'group',
              'title'  => 'Features',
              'fields' => array(
                array(
                  'id'    => 'features_list',
                  'type'  => 'text',
                  'title' => 'List'
                ),
              )
            ),
            array(
              'id'     => 'loan_eligibility',
              'type'   => 'group',
              'title'  => 'Eligibility',
              'fields' => array(
                array(
                  'id'    => 'eligibility_list',
                  'type'  => 'text',
                  'title' => 'List'
                ),
              )
            ),
            
          ),
        ),
        
      )
    ) );

    
    
  
  }
  


