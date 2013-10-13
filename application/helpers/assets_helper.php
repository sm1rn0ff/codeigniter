<?php
    if(!defined('BASEPATH'))
        die('No direct script access allowed');

    if(!function_exists('css_url'))
    {
        function css_url($name)
        {
            return base_url() . 'assets/css/' . $name . '.css';
        }
    }

    if(!function_exists('js_url'))
    {
        function js_url($name)
        {
            return base_url() . 'assets/js' . $name . '.js';
        }
    }

    if(!function_exists('img_url'))
    {
        function img_url($name)
        {
            return base_url() . 'assets/img' . $name;
        }
    }

    if(!function_exits('img'))
    {
        function img($nom, $alt = '')
        {
            return '<img src="' . img_url($nom) . '"" alt="' . $alt . '"" />';
        }
    }