<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Login extends CI_Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->data['title_bar'] = 'Login Page';
    }
    
    function index()
    {
        return $this->parser->parse('login/index',  $this->data);
    }
    
}
?>
