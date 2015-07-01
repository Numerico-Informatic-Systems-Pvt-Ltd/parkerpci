<?php

/*
Plugin Name: Custom Widget
Plugin URI: http://inkthemes.com
Description: Building a Custom Wordpress Widget.
Author: InkThemes
Version: 1
Author URI: http://inkthemes.com
*/

class my_plugin extends WP_Widget {

	// constructor
	function my_plugin() {
	        parent::WP_Widget(false, $name = __('My Widget', 'wp_widget_plugin') );
    
	}

// widget form creation
function form($instance) {

// Check values
if( $instance) {
     $title = esc_attr($instance['title']);
     $textarea = $instance['textarea'];
} else {
     $title = '';
     $textarea = '';
}
?>

<p>
<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>


<p>
<label for="<?php echo $this->get_field_id('textarea'); ?>"><?php _e('Description:', 'wp_widget_plugin'); ?></label>
<textarea class="widefat" id="<?php echo $this->get_field_id('textarea'); ?>" name="<?php echo $this->get_field_name('textarea'); ?>" rows="7" cols="20" ><?php echo $textarea; ?></textarea>
</p>
<?php
}

	
function update($new_instance, $old_instance) {
      $instance = $old_instance;
      // Fields
      $instance['title'] = strip_tags($new_instance['title']);
      $instance['textarea'] = strip_tags($new_instance['textarea']);
     return $instance;
}
	

   // display widget
function widget($args, $instance) {
   extract( $args );
   
   // these are the widget options
   $title = apply_filters('widget_title', $instance['title']);
    $textarea = $instance['textarea'];
  $active = ''; 
  if(!empty($title)){
	  $active = 'active';
  }
  // Display the widget
   echo '<div class="item '.$active.'"><div class="container"><div class="span12"><div class="testimonial">';    
   echo $textarea;  
   echo '<div class="name">'.$title.'</div>';
   echo '</div>';
   echo '</div>';
   echo '</div>';
   echo '</div>';
   
}
}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("my_plugin");')); 
?>