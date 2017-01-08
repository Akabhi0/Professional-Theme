<?php
/*	FACEBOOK LOGIN BASIC - PHP SDK V4.0
 *	file 			- index.php
 * 	Developer 		- Vineet Kumar
 *	Website			- 
 *	Date 			- 7th jan 2016
 *	license			- GNU General Public License version 2 or later
*/

/* INCLUSION OF LIBRARY FILEs*/
	require_once( 'lib/Facebook/FacebookSession.php');
	require_once( 'lib/Facebook/FacebookRequest.php' );
	require_once( 'lib/Facebook/FacebookResponse.php' );
	require_once( 'lib/Facebook/FacebookSDKException.php' );
	require_once( 'lib/Facebook/FacebookRequestException.php' );
	require_once( 'lib/Facebook/FacebookRedirectLoginHelper.php');
	require_once( 'lib/Facebook/FacebookAuthorizationException.php' );
	require_once( 'lib/Facebook/GraphObject.php' );
	require_once( 'lib/Facebook/GraphUser.php' );
	require_once( 'lib/Facebook/GraphSessionInfo.php' );
	require_once( 'lib/Facebook/Entities/AccessToken.php');
	require_once( 'lib/Facebook/HttpClients/FacebookCurl.php' );
	require_once( 'lib/Facebook/HttpClients/FacebookHttpable.php');
	require_once( 'lib/Facebook/HttpClients/FacebookCurlHttpClient.php');

/* USE NAMESPACES */
	
	use Facebook\FacebookSession;
	use Facebook\FacebookRedirectLoginHelper;
	use Facebook\FacebookRequest;
	use Facebook\FacebookResponse;
	use Facebook\FacebookSDKException;
	use Facebook\FacebookRequestException;
	use Facebook\FacebookAuthorizationException;
	use Facebook\GraphObject;
	use Facebook\GraphUser;
	use Facebook\GraphSessionInfo;
	use Facebook\FacebookHttpable;
	use Facebook\FacebookCurlHttpClient;
	use Facebook\FacebookCurl;

/*PROCESS*/
	
	//1.Stat Session
	 session_start();
	//2.Use app id,secret and redirect url
	 $app_id = '1402320716453934';
	 $app_secret = 'e7189cc11d216df3c300f38148866bc4';
	 $redirect_url='http://localhost/oop-php/index.php/';
	 
	 //3.Initialize application, create helper object and get fb sess
	 FacebookSession::setDefaultApplication($app_id,$app_secret);
	 $helper = new FacebookRedirectLoginHelper($redirect_url);
	 $sess = $helper->getSessionFromRedirect();

	//4. if fb sess exists echo name 
	 	if(isset($sess)){
	 	//create request object,execute and capture response
		$request = new FacebookRequest($sess, 'GET', '/me');
		// from response get graph object
		$response = $request->execute();
		$graph = $response->getGraphObject(GraphUser::className());
		// use graph object methods to get user details
		$name= $graph->getName();
		echo "hi $name";
	}else{
		//else echo login
		echo '<a href='.$helper->getLoginUrl().'>Login with facebook</a>';
	}
	?>
	
    <form id="form" action="index.php" method="get">
	    <input type="submit" name="submit" value="logout"/>
		<?php
		  if(isset($_GET['submit'])){
			  session_start();
              header("location:index.php");
              session_destroy();
		  }
		?>
    </form>	
	
	
	
	


