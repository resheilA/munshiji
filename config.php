<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Australia/Sydney" );  // http://www.php.net/manual/en/timezones.php
define( "DB_DSN", "mysql:host=localhost;dbname=portalw_munshiji" );
define( "DB_USERNAME", "portalw_munshiji" );
define( "DB_PASSWORD", "j7)8SOc;3+A[" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates/admin" );
define( "TEMPLATE_PATH_INDEX","templates");
define("CATEGORY_IMAGE_PATH" , "Profilepics/Courses");
define("USER_IMAGE_PATH" , "Profilepics/Users");
define( "IMG_TYPE_FULLSIZE", "fullsize" );
define( "IMG_TYPE_THUMB", "thumb" );
define( "CATEGORY_THUMB_WIDTH", 120 );
define( "JPEG_QUALITY", 85 );
define("DELETE_COURSE","deletethiscourse");
define("DELETE_LESSON","deletethislesson");
define("ADD_ADMIN","addanadmin");
define("EDIT_USER","edittheuser");
define("EDIT_USER_PASSWORD","editthepassword");
define("BAN_USER","bantheuser");
define("DELETE_USER","deletetheuser");
define("ADD_ORDER","addanorder");
define("EDIT_ORDER","editanorder");
define("DELETE_ORDER","deleteanorder");
require( CLASS_PATH . "/courses.php" );
require( CLASS_PATH . "/lessons.php" );
require( CLASS_PATH . "/comments.php" );
require( CLASS_PATH . "/admins.php" );
require( CLASS_PATH . "/orders.php" );
function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>