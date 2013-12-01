<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ','rb');
define('FOPEN_READ_WRITE','r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE','wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE','w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE','ab');
define('FOPEN_READ_WRITE_CREATE','a+b');
define('FOPEN_WRITE_CREATE_STRICT','xb');
define('FOPEN_READ_WRITE_CREATE_STRICT','x+b');


/**
 * Tables
 */

define('TBL_QUESTIONS','quiz_questions');
define('TBL_OPTIONS','quiz_options');

/**
 * Admin User Type
 */
define('ADMIN_USER_TYPE','1');
define('END_USER_TYPE','2');


/**
 * Options
 */
define('OPTION1','option1');
define('OPTION2','option2');
define('OPTION3','option3');
define('OPTION4','option4');
/**
 * ERROR CODES 
 */
define('ACCOUNT_NOT_ACTIVATED','-1');
define('INVALID_USERNAME_PASSWORD','-2');
/**
 * General Constants
 */
define('SITE_TITLE','Online Assesment');
define('MAIN_TEMPLATE','template/template');
define('VIEW_NAME','main_content');
/* End of file constants.php */
/* Location: ./application/config/constants.php */