
<?php


  acf_form(array(
          'post_id'		=> 'new_post',
          'post_content' => false,
            'post_title' => true,
          'new_post'		=> array(
            'post_type'		=> 'post',
            'post_status'		=> 'draft'
          ),
          'submit_value'		=> __("Add Your Work", 'acf'),

        ));

?>
