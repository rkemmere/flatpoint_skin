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
 * @package redaxo4
 * @version svn:$Id$
 */

$error = '';
if ($error != '') {
  $REX['ADDON']['installmsg']['flatpoint_skin'] = $error;
} else {
  $REX['ADDON']['install']['flatpoint_skin'] = true;
}
