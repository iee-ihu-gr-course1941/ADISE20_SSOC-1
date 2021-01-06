<?php
/** 
 * SSO Client index
 * install .php / client/ . Macroweb
 * @copyright Copyright (c) 2021 George Filippas .   All Rights Reserved.
 *
 * @author George Filippas <mr@macroweb.gr>
 * 
 * @license Private Code , Copyrights (c) 2021 Macroweb. <info@macroweb.gr>
 *
 * @package install.php /client/ . Macroweb
 * @subpackage install / install.php /client/ 
 * @since 00.00.02
 * @param install param install.php /client/ 
 */

	if (!defined("SSO_CLIENT_ROOT_PATH"))
	{
		echo "The configuration file must be loaded first.";
		exit();
	}

	require_once SSO_CLIENT_ROOT_PATH . "/" . SSO_CLIENT_SUPPORT_PATH . "/sso_functions.php";
	require_once SSO_CLIENT_ROOT_PATH . "/" . SSO_CLIENT_SUPPORT_PATH . "/sso_random.php";
	require_once SSO_CLIENT_ROOT_PATH . "/" . SSO_CLIENT_SUPPORT_PATH . "/sso_blowfish.php";
	require_once SSO_CLIENT_ROOT_PATH . "/" . SSO_CLIENT_SUPPORT_PATH . "/sso_aes.php";
?>