<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bolder
 *
 * @author Georgi
 */
class Bolder
{
    function index()
    {
        $this->CI =& get_instance();
        $output = $this->CI->output->get_output();
        
        $output = preg_replace_callback(
            '%(<p[^>]*>.*?</p>)%is'
          , function( $paragraphs )
            {
                return preg_replace(
                    '%( *?[A-Z].*? )%'
                  , '<strong>$1</strong>'
                  , $paragraphs[0] );
            }
          , $output );
        
        $this->CI->output->set_output($output);
        $this->CI->output->_display();
    }
}
