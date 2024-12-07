<?php

if( isset( $_GET['Submit'] ) ) {
	$id = $_GET[ 'id'];

	$getid  = "SELECT first_name, last_name FROM users WHERE user_id = '$id';";
	$result = mysqli_query($GLOBALS["___mysqli_ston"],  $getid ); // Removed 'or die' to suppress mysql errors

	$num = @mysqli_num_rows( $result ); // The '@' character suppresses errors
	if( $num > 0 ) {
		$html .= '<pre>User ID exists in the database.</pre>';
	}
	else {
		header( $_SERVER\[ 'SERVER_PROTOCOL' \] . ' 404 Not Found' );

		$html .= '<pre>User ID is MISSING from the database.</pre>';
	}
	
	((is_null($___mysqli_res = mysqli_close($GLOBALS\["___mysqli_ston"\]))) ? false : $___mysqli_res);
}
?>
