<?php
/*
  Plugin Name: Erza Social Profile Widget
  Plugin URI: https://erza.com
  Description: Links to Author social media profile
  Author: Yusra Ahmed
  Author URI: https://yusraahmed.com
*/


class Erza_Social_Profile extends WP_Widget { 

    function __construct() {
        parent::__construct(
                'Erza_Social_Profile',
                __('Social Networks Profiles', 'translation_domain'),
               
        );
    }

    public function form($instance) {
        isset($instance['title']) ? $title = $instance['title'] : null;
        isset($instance['facebook']) ? $facebook = $instance['facebook'] : null;
        isset($instance['twitter']) ? $twitter = $instance['twitter'] : null;
        isset($instance['google']) ? $google = $instance['google'] : null;
        isset($instance['linkedin']) ? $linkedin = $instance['linkedin'] : null;
        isset($instance['instagram']) ? $instagram = $instance['instagram'] : null;
        isset($instance['pinterest']) ? $pinterest = $instance['pinterest'] : null;
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>


?>
