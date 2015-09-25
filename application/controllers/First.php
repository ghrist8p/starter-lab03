<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of First
 *
 * @author Georgi
 */
class First extends Application
{
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        $source = $this->quotes->first();
        //add data from source into the data array
        $this->data += $source;
        
        $this->render();
    }
    
    function zzz()
    {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        $source = $this->quotes->get('1');
        //add data from source into the data array
        $this->data += $source;
        
        $this->render();
    }
    
}
