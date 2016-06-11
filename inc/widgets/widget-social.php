<?php

/**
 * Social  Widget
 * marketingblog Theme
 */
class marketingblog_lite_social_widget extends WP_Widget
{
	 function marketingblog_lite_social_widget(){

        $widget_ops = array('classname' => 'marketingblog-social','description' => esc_html__( "marketingblog Social Widget" ,'marketingblog-lite') );
		    parent::__construct('marketingblog-social', esc_html__('marketingblog Social Widget','marketingblog-lite'), $widget_ops);
    }

    function widget($args , $instance) {
    	extract($args);
        $title = isset($instance['title']) ? $instance['title'] : esc_html__('Follow us' , 'marketingblog-lite');

      echo $before_widget;
      echo $before_title;
      echo esc_html($title);
      echo $after_title;

		/**
		 * Widget Content
		 */
    ?>

    <!-- social icons -->
    <div class="social-icons sticky-sidebar-social">


    <?php marketingblog_lite_social(true); ?>


    </div><!-- end social icons -->


		<?php

		echo $after_widget;
    }


    function form($instance) {
      if(!isset($instance['title'])) $instance['title'] = esc_html__('Follow us' , 'marketingblog-lite');
    ?>

      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e('Title ','marketingblog-lite') ?></label>

      <input type="text" value="<?php echo esc_attr($instance['title']); ?>"
                          name="<?php echo $this->get_field_name('title'); ?>"
                          id="<?php $this->get_field_id('title'); ?>"
                          class="widefat" />
      </p>

    	<?php
    }

}

?>