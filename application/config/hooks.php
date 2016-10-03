<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/
$hook['display_override'] = array(
    'class'    => 'Display_override',
    'function' => 'star_all_fourletter_words',
    'filename' => 'display_override.php',
    'filepath' => 'hooks',
    );
/* End of file hooks.php */
/* Location: ./application/config/hooks.php */