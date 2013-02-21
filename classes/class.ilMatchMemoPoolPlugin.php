<?php

include_once("./Services/Repository/classes/class.ilRepositoryObjectPlugin.php");
 
/**
* MatchMemoPool repository object plugin
*
* @author Helmut Schottmüller <ilias@aurealis.de>
* @version $Id$
*
*/
class ilMatchMemoPoolPlugin extends ilRepositoryObjectPlugin
{
	function getPluginName()
	{
		return "MatchMemoPool";
	}
}
?>
