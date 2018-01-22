//<? $Id: admin_sel_lan.sc 11346 2010-02-17 18:56:14Z secretr $
if (ADMIN && $pref['multilanguage'])
{
	$language = ($pref['sitelanguage'] == e_LANGUAGE) ? ADLAN_133 : e_LANGUAGE;
	return ' <strong>'.ADLAN_132.'</strong> '.$language;
}
