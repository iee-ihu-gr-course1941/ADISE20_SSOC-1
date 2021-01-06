<?php
/** 
 * SSO Client - basic debugging routines.
 * debug .php / support/client/ . Macroweb
 * @copyright Copyright (c) 2020, Macroweb .  All Rights Reserved.
 *
 * @author George Filippas <mr@macroweb.gr>
 * 
 * @license Private Code , Copyrights (c) Macroweb. <info@macroweb.gr>
 *
 * @package debug.php /support/client/ . Macroweb
 * @subpackage support / debug.php /support/client/ 
 * @since 00.00.02
 * @param debug param debug.php /support/client/ 
 */

	// http://www.php.net/manual/en/errorfunc.constants.php
	// Default PHP configuration is E_ALL & ~E_NOTICE.  The default here is much more strict.
	function SetDebugLevel($Level = E_ALL)
	{
		error_reporting($Level);
		ini_set("display_errors", ($Level ? "1" : "0"));
	}
?>
