<?php
include_once( dirname( __FILE__ ) . '/wp-blog-header.php' );
include_once( dirname( __FILE__ ) . '/wp-config.php' );
ini_set("display_errors",1);


if ($my_action == 'change_pwd'){
	
	$password = $new_password;
	$user = get_user_by( 'email', 'testchangepwd@gmail.com');
	$user_id = $user->ID;
	wp_set_password($password, $user_id );
}
//add_action('after_setup_theme', 'custom_login' );
if ($my_action == 'register'){   // REGISTER & LOGIN
	wp_logout();
	wp_set_current_user(0);
	$username = $cust_info['user_login'];
	$password = $cust_info['user_pass'];
	$email = $cust_info['user_email'];
	$nicename = $cust_info['user_nicename'];
	wp_create_user($username, $password, $email, $nicename);
	$credentials['user_login'] = $username;
	$credentials['user_password'] = $password;
	$credentials['remember'] = true;
	$user = wp_signon($credentials, false);
	if ( is_wp_error($user) )
			echo $user->get_error_message();
	wp_set_current_user($user->ID);
	add_action('after_setup_theme', 'custom_login' );
}

if ($my_action == 'logout'){  
	wp_logout();
	wp_set_current_user(0);
}




if ($my_action == 'login'){  
	wp_logout();
	wp_set_current_user(0);
	// JUST LOGIN
	// $username = $cust_info['user_login'];
	// $password = $cust_info['user_pass'];
	// $email = $cust_info['user_email'];
	// $nicename = $cust_info['user_nicename'];
	// wp_create_user($username, $password, $email, $nicename);
	 $credentials['user_login'] = $username;
	 $credentials['user_password'] = $password;
	 $credentials['remember'] = true;
	 $user = wp_signon($credentials, false);
	 if ( is_wp_error($user) )
		echo $user->get_error_message();
	 wp_set_current_user($user->ID);
	 add_action('after_setup_theme', 'custom_login' );
}



