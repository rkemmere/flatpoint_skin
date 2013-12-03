/**
 * jdlx_agk_patches :: be_style Plugin for Redaxo
 *
 * @version 0.5.1
 * @link https://github.com/jdlx/jdlx_agk_patches
 * @author http://rexdev.de
 * @package redaxo 4.3.x/4.4.x
 */

function newWindow(name,link,width,height,type)
{
        if (width==0) width=550;
        if (height==0) height=400;


        if (type == 'scrollbars')
        {
                extra = 'toolbar';
        }else if (type == 'empty')
        {
                extra = 'empty';
        }else
        {
                extra = type
                type = 'righthand'
        }

        if (type=="nav")
        {
                posx = parseInt(screen.width/2)-390;
                posy = parseInt(screen.height/2) - 24 - 290;
                width= 320;
                height=580;
        }else if (type=="content")
        {
                posx = parseInt(screen.width/2) - 390 + 330;
                posy = parseInt(screen.height/2) - 24 - 290;
                width= 470;
                height=580;
        }else if (type=="righthand")
        {
                posx = screen.width>1637 ? 972 : parseInt((screen.width-width));
                posy = 0;
                width= 700;
        }else
        {
                posx = parseInt((screen.width-width)/2);
                posy = parseInt((screen.height-height)/2) - 24;
        }

        winObjCounter++;
        winObj[winObjCounter]=new makeWinObj(name,link,posx,posy,width,height,extra);
}


function newPoolWindow(link)
{
    newWindow( 'rexmediapopup'+(winObjCounter+1), link, 665,screen.height,',status=yes,resizable=yes');
}

function newLinkMapWindow(link)
{
    newWindow( 'linkmappopup', link, 665,screen.height,',status=yes,resizable=yes');
}
