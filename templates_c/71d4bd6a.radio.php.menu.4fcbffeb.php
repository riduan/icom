<?function ILPHP____templates_c_71d4bd6a_radio_php_menu_4fcbffeb_php(&$ILPHP){?><div class="menu-radio-tabs side-menu-tabs">
 <?$ILPHP->while_i=0;while($ILPHP->i = $ILPHP->channels->fetch_assoc()){$ILPHP->while_i++;?><a class="tab <?if($ILPHP->i['online']){;?>green <? } ;if($ILPHP->while_i == 1){;?>first<?}elseif($ILPHP->while_i == $ILPHP->channels->num_rows){;?>last<?}else{;?>middle<? } ?>" href="/<?=LANG;?>/radio/<?=htmlspecialchars($ILPHP->i['channel']);?>/" rel="nofollow" target="_blank" onclick="window.open('/<?=LANG;?>/radio/<?=htmlspecialchars($ILPHP->i['channel']);?>/','_i_radio__','width=365,height=500,status=no,scrollbars=yes,resizable=yes,location=no');return false;" data-dd="ildd.menuRadio" data-radio="&lt;div class=&quot;menu-radio-links&quot;&gt;&lt;a href=&quot;/<?=LANG;?>/radio/<?=htmlspecialchars(htmlspecialchars($ILPHP->i['channel']));?>/playlist/pls/&quot; target=&quot;_blank&quot;&gt;&lt;img src=&quot;<?=STATIC_CONTENT_DOMAIN;?>/img/p.gif&quot; class=&quot;p menu-radio-icon-winamp&quot; alt=&quot;WinAMP&quot;&gt;&lt;/a&gt;&lt;a href=&quot;/<?=LANG;?>/radio/<?=htmlspecialchars(htmlspecialchars($ILPHP->i['channel']));?>/playlist/pls/&quot; target=&quot;_blank&quot;&gt;&lt;img src=&quot;<?=STATIC_CONTENT_DOMAIN;?>/img/p.gif&quot; class=&quot;p menu-radio-icon-vlc&quot; alt=&quot;VLC&quot;&gt;&lt;/a&gt;&lt;a href=&quot;/<?=LANG;?>/radio/<?=htmlspecialchars(htmlspecialchars($ILPHP->i['channel']));?>/playlist/wmp/&quot; target=&quot;_blank&quot;&gt;&lt;img src=&quot;<?=STATIC_CONTENT_DOMAIN;?>/img/p.gif&quot; class=&quot;p menu-radio-icon-wmp&quot; alt=&quot;WMP&quot;&gt;&lt;/a&gt;&lt;/div&gt;">#<?=$ILPHP->while_i;?></a><? } ?>
</div>
<div class="clear" style="height:5px;"></div>
<?}?>