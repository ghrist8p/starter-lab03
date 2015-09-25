<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Guess
 *
 * @author Georgi
 */
class Guess extends Application
{
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        $source = $this->quotes->get('4');
        //add data from source into the data array
        $this->data += $source;
        
        $this->render();
    }
}
