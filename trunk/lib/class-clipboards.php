<?php

class IVD_Clipboard
{
    public static $first_param = '';
    public static $second_param = '';
    public static $third_param = '';

    public function __construct()

    {
        add_action('init', array($this, 'IVD_include_plugin_scripts'));

        self::$first_param = sanitize_text_field(get_option('first_param'));
        self::$second_param = sanitize_text_field(get_option('second_param'));
        self::$third_param = sanitize_text_field(get_option('third_param'));
    }

    function IVD_include_plugin_scripts()
    {
        $array_params = [];
        $array_params['source'] = __('Source','clipboard');

        if(self::$first_param!=null) $array_params['first_param'] = self::$first_param;
        if(self::$second_param!=null) $array_params['second_param'] = self::$second_param;
        if(self::$third_param!=null) $array_params['third_param'] = self::$third_param;

        wp_enqueue_script('check_script', IVD_PLUGIN_URL_CLIPBOARD . 'js/check.js', array('jquery'), '', true);
        wp_localize_script('check_script', 'params', $array_params);
    }
}

