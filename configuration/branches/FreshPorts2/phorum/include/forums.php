<?PHP
// DO NOT EDIT THIS FILE.  USE THE ADMIN

// initialize database variables
  $dbName='fpfeedbackup';
  $dbUser='phorum';
  $dbPass='thingsstuff';
  $dbServer='localhost';

// create database classes
  if ( defined( "_DB_LAYER" ) && $dbName!=''){
    $DB = new db();
    $DB->open($dbName, $dbServer, $dbUser, $dbPass);
    $q = new query($DB); //dummy query for generic operations
  }

// master information
  $Password='FreshPorts957';
  $DefaultDisplay='60';
  $DefaultEmail='';
  $PhorumMailCode='';
  $UseCookies='1';
  $SortForums='1';
  $ActiveForums='1';

  $forum_url='http://freshports.unixathome.org/phorum';
  $admin_url='https://admin.freshports.org/phorum/_icq';
  $uploadDir='';
  $uploadUrl='';
  $ext='php';
  $forum_page='index';
  $list_page='list';
  $search_page='search';
  $read_page='read';
  $post_page='post';
  $violation_page='violation';
  $down_page='down';
  $default_lang='lang/english.php';
  $default_table_width='100%';
  $default_table_header_color='#AD0040';
  $default_table_header_font_color='#FFFFFF';
  $default_table_body_color_1='#FFFFFF';
  $default_table_body_font_color_1='#000000';
  $default_table_body_color_2='#FFFFFF';
  $default_table_body_font_color_2='#000000';
  $default_nav_color='#FFFFFF';
  $default_nav_font_color='#000000';

?>
