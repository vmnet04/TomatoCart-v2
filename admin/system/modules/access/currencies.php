<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * TomatoCart
 *
 * An open source application ecommerce framework
 *
 * @package   TomatoCart
 * @author    TomatoCart Dev Team
 * @copyright Copyright (c) 2011, TomatoCart, Inc.
 * @license   http://www.gnu.org/licenses/gpl-3.0.html
 * @link    http://tomatocart.com
 * @since   Version 0.5
 * @filesource 
 */ 

  class TOC_Access_Currencies extends TOC_Access {
    public function __construct()
    {
      parent::__construct();
      
      $this->_module = 'currencies';
      $this->_group = 'definitions';
      $this->_icon = 'currencies.png';
      $this->_sort_order = 200;
      
      $this->_title = lang('access_currencies_title');
    }
  }
  
/* End of file currencies.php */
/* Location: ./system/modules/access/currencies.php */