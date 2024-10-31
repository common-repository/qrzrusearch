<?php
/*
Plugin Name: QRZ.RU Search Widget
Version: 1.0.2
Plugin URI: https://launchpad.net/qrzrusearch
Description: This widget provides a form to lookup amateur radio call signs from the QRZ.RU site. QRZ.RU provides information about Russian amateur radio operators.
Author: Alex L.
Author URI: https://launchpad.net/~alexal
*/

function widget_qrzrusearch_init()
{
  load_plugin_textdomain('qrzrusearch');
  if ( !function_exists('register_sidebar_widget') )
    return;
    
  function widget_qrzrusearch($args) {
    extract($args);
    ?>
      <?php echo $before_widget; ?>
      <?php echo $before_title
        . __('QRZ.RU Callbook Search','qrzrusearch')
        . $after_title; ?>
        <form method="get" action="http://qrz.ru/callsign.phtml" style="display:inline" target="_blank" >
     <input type="text" name="callsign" size="8" title="Enter ham call sign here" />
<input type="submit" value="<?php _e('Search','qrzrusearch')?>" /></form>
        <?php echo $after_widget; ?>
  <?php
      }


  register_sidebar_widget('QRZ.RU Callbook Search', 'widget_qrzrusearch');
}

add_action('plugins_loaded', 'widget_qrzrusearch_init');
?>