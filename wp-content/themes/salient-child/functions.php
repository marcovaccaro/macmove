<?php
#-----------------------------------------------------------------#

# default Salient child function.php

#-----------------------------------------------------------------#
add_action( 'wp_enqueue_scripts', 'salient_child_enqueue_styles');
function salient_child_enqueue_styles() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array('font-awesome'));

    if ( is_rtl() )
   		wp_enqueue_style(  'salient-rtl',  get_template_directory_uri(). '/rtl.css', array(), '1', 'screen' );
}


#pale
#-----------------------------------------------------------------#

# only display certain nectar elements for admin (echoed in admin-header.php)

#-----------------------------------------------------------------#

if ( ! current_user_can( 'manage_options' ) )
{
define('COND_STYLE_SALIENT_ELEMENTS','
<style type="text/css">
#nectar-metabox-page-header,
#toplevel_page_vc-welcome,
#nectar-metabox-page-header,
#screen-meta-links,
#user-1
{display:none!important; visibility:hidden!important}
/*#user-1 {height:55px}*/
</style>
');
}
else
{
define('COND_STYLE_SALIENT_ELEMENTS','');
}

#pale
# before Adminimize plugin

#-----------------------------------------------------------------#

# only display the admin bar for users with administrative privileges (echoed in header.php)

#-----------------------------------------------------------------#

/*if ( ! current_user_can( 'manage_options' ) )
{    show_admin_bar( false );}*/

/*if ( ! current_user_can( 'manage_options' ) )
{
define('COND_STYLE','
<style type="text/css">
#wp-admin-bar-construction-mode,
#wp-admin-bar-wp-logo,
#wp-admin-bar-site-name,
#wp-admin-bar-search,
#wp-admin-bar-user-info
{display:none; visibility:hidden;}
</style>
');
}
else
{
define('COND_STYLE','');
}
*/


#-----------------------------------------------------------------#

# Allow Maraschi to edit Users

#-----------------------------------------------------------------#
/*
	$Maraschi = get_role( 'editor' );
  $Maraschi->add_cap( 'list_users' );    //Allows access to Administration Panel options
  $Maraschi->add_cap( 'edit_users' );    //Allows editing other users' profiles.
  $Maraschi->add_cap( 'delete_users' );  //Allows deleting users from the blog
  $Maraschi->add_cap( 'create_users' );  //Allows creating new users
  $Maraschi->add_cap( 'remove_users' );  //
  $Maraschi->add_cap( 'add_users' );     //Replaced in 4.4 with promote_users
  $Maraschi->add_cap( 'promote_users' ); //Enables the "Change role to..." dropdown in the admin user list.
*/
  #-----------------------------------------------------------------#

  # deny Maraschi to...

  #-----------------------------------------------------------------#
/*
  $Maraschi->remove_cap( 'manage_links' );    //Deny access to Administration Panel options for links
*/
  #-----------------------------------------------------------------#

  # Allow subscribers to see Private posts and pages

  #-----------------------------------------------------------------#
/*
	$subRole = get_role( 'subscriber' );
	$subRole->add_cap( 'read_private_posts' );
	$subRole->add_cap( 'read_private_pages' );
*/
  #-----------------------------------------------------------------#

  # Deny subscribers to access to Administration Panel

  #-----------------------------------------------------------------#
/*
  $subRole->remove_cap( 'read' );
*/

?>
