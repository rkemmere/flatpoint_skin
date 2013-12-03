<?php

/**
 * REDAXO Theme Flatpoint - adaptierter agk_skin
 * 
 * @author Design agk
 * @author ralph.zumkeller[at]yakamara[dot]de Ralph Zumkeller
 * @author <a href="http://www.yakamara.de">www.yakamara.de</a>
 *
 * @author Umsetzung agk
 * @author thomas[dot]blum[at]redaxo[dot]de Thomas Blum
 * @author <a href="http://www.blumbeet.com">www.blumbeet.com</a>
 *
 * @author Umsetzung Flatpoint
 * @author office[at]dw-k[dot]net Ronny Kemmereit
 * @author <a href="http://www.dw-k.net">www.dw-k.net</a>
 *
 * Codemirror by : http://codemirror.net/
 * Marijn Haverbeke <marijnh@gmail.com>
 
 * @package redaxo4
 * @version svn:$Id$
 */

$mypage = 'flatpoint_skin';
$subpage = '';

$REX['ADDON']['version'][$mypage] = '4.5';
$REX['ADDON']['author'][$mypage] = 'Ronny Kemmereit';
$REX['ADDON']['supportpage'][$mypage] = 'www.redaxo.org/de/forum';

if($REX["REDAXO"]) {

  $I18N->appendFile(dirname(__FILE__) .'/lang/');

  function rex_be_style_flatpoint_skin_css_body($params)
  {
    $params["subject"]["class"][] = "be-style-flatpoint-skin";
    return $params["subject"];
  }
  
  // INCLUDE ASSETS
	////////////////////////////////////////////////////////////////////////////////
	$css_files = array($mypage.'.css');
	if($subpage!=''){
	  $css_files[] = $mypage.'.'.$subpage.'.css';
	}
	$header = '
	
	<!-- '.$mypage.' -->
	';
	foreach($css_files as $file){
	  if(file_exists($REX['FRONTEND_PATH'].'/files/addons/be_style/plugins/flatpoint_skin/'.$file)){
	    $header .= '  <link rel="stylesheet" href="'.$REX['HTDOCS_PATH'].'files/addons/be_style/plugins/'.$mypage.'/'.$file.'">';
	  }
	}
	$header .= '  <script src="'.$REX['HTDOCS_PATH'].'files/addons/be_style/plugins/'.$mypage.'/overrides.js" type="text/javascript"></script>
	<!-- end '.$mypage.' -->
	';
	
	$header_include = 'return $params["subject"].\''.$header.'\';';
	rex_register_extension('PAGE_HEADER', create_function('$params',$header_include));
	


  rex_register_extension('PAGE_BODY_ATTR', 'rex_be_style_flatpoint_skin_css_body');

}





