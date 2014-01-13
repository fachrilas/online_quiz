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
define('TBL_USERS','user');
define('TBL_CHILDREN','children');
define('TBL_OPENENDEDQUESTION','open_ended_question');
define('TBL_ASSIGNQUIZ','assign_quiz');
define('TBL_QUESTIONRECORD','question_record');

/**
 * Admin User Type
 */
define('ADMIN_USER_TYPE','1');
define('END_USER_TYPE','2');
define('CHILDREN_TYPE','3');
define('TUTOR_TYPE','4');


/**
 * Options
 */
define('OPTION1','option1');
define('OPTION2','option2');
define('OPTION3','option3');
define('OPTION4','option4');


/**
 * Choice Option for optionso or Open Ended Question 
 */
define('OPTIONS','0');
define('OPENENDED','1');

/**
 * SECRET KEY FOR EMAIL 
 */

define ('KEY','meox');
/**
 * ERROR CODES 
 */
define ('SUCCESS_CODE','0');
define('ACCOUNT_NOT_ACTIVATED','-1');
define('INVALID_USERNAME_PASSWORD','-2');
define('ERROR_PASSWORD_NOT_MATCH','-3');
define('ERROR_USERNAME_ALREADY_EXIST','-4');
/**
 * General Constants
 */
define('SITE_TITLE','Online Assesment');
define('MAIN_TEMPLATE','template/template');
define('VIEW_NAME','main_content');
define('EMAIL_NOT_EXISTS','Eamil does not exists');
define('EMAIL_SENT','Check Your email for password reste guidelines');
define('PASS_UPDATED','Your password is updated successfully');




/**
 * Error Messages
 */
define('MSG_PASSWORD_NOT_MATCH','Password and confirm password do not match');
define('MSG_USER_ALREADY_EXISTS','This username already exists in our system');
define('MSG_USER_PASSWORD_INVALID','Username and/or password Invalid');


/**
 * Pages
 */
define('PAGE_HOME','home');
define('PAGE_PACKAGES','packages');
define('PAGE_KNOW_ALL','know_it_all');
define('PAGE_FAQ','faq');
define('PAGE_MY_ACCOUNT','my_account');
define('PAGE_SIGN_IN','sign_in');

/* End of file constants.php */
/* Location: ./application/config/constants.php */