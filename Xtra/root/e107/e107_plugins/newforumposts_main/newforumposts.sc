// $Id: newforumposts.sc 11346 2010-02-17 18:56:14Z secretr $
// use $parm to restrict visibility based on matching part of the URL
if($parm && !strpos(e_SELF,$parm))
{
	return;
}
else
{
	include(e_PLUGIN."newforumposts_main/newforumposts_main.php");
}
