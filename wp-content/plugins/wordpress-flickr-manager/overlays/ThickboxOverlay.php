<?php require_once(dirname(__FILE__) . '/../Overlay.php');// Thickbox Overlay Extensionclass ThickboxOverlay extends Overlay {    var $name = 'Thickbox';        function ThickboxOverlay($suppress = false) {		if(!$suppress) {			add_action('init', array(&$this, 'LoadScripts'));		}	}        function LoadScripts() {        if(!is_admin()) {            wp_enqueue_script('wfm-thickbox',plugins_url('/js/wfm-thickbox.js', dirname(__FILE__)), array('jquery'), '20110428');                        wp_enqueue_style('thickbox');            wp_enqueue_script('thickbox', false, array('wfm-thickbox'));        }    }}?>