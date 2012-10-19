<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Item_category extends MX_Controller {
 
   public function index(  )
   {
      $this->load->view('item_category');
   }
}
?>
