<script type="text/javascript" language="javascript">
/* <![CDATA[ */
    function grin(tag) {
    	var myField;
    	tag = ' ' + tag + ' ';
        if (document.getElementById('comment') && document.getElementById('comment').type == 'textarea') {
    		myField = document.getElementById('comment');
    	} else {
    		return false;
    	}
    	if (document.selection) {
    		myField.focus();
    		sel = document.selection.createRange();
    		sel.text = tag;
    		myField.focus();
    	}
    	else if (myField.selectionStart || myField.selectionStart == '0') {
    		var startPos = myField.selectionStart;
    		var endPos = myField.selectionEnd;
    		var cursorPos = endPos;
    		myField.value = myField.value.substring(0, startPos)
    					  + tag
    					  + myField.value.substring(endPos, myField.value.length);
    		cursorPos += tag.length;
    		myField.focus();
    		myField.selectionStart = cursorPos;
    		myField.selectionEnd = cursorPos;
    	}
    	else {
    		myField.value += tag;
    		myField.focus();
    	}
    }
/* ]]> */
</script>

<div class="wp-smiley"><a href="javascript:grin(':!!!:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_exclamation.gif" alt="smiley1" width="18" height="16"/></a>
<a href="javascript:grin(':ymy:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_youmuyou.gif" alt="smiley2"  width="18" height="16"/></a>
<a href="javascript:grin(':sbq:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_sbq.gif" alt="smiley3"  width="18" height="16"/></a>
<a href="javascript:grin(':sx:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_shaoxiang.gif" alt="smiley4"  width="18" height="16"/></a>
<a href="javascript:grin(':gl:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_gl.gif" alt="smiley5"  width="18" height="16"/></a>
<a href="javascript:grin(':bgl:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_bgl.gif" alt="smiley6"  width="18" height="16"/></a>
<a href="javascript:grin(':kbz:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_kbz.gif" alt="smiley7"  width="18" height="16"/></a>
<a href="javascript:grin(':arrow:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_arrow.gif" alt="smiley8"  width="18" height="16"/></a>
<a href="javascript:grin(':lol:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_lol.gif" alt="smiley9"  width="18" height="16"/></a>
<a href="javascript:grin(':smile:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_smile.gif" alt="smiley10"  width="18" height="16"/></a>
<a href="javascript:grin(':gg:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_gg.gif" alt="smiley11"  width="18" height="16"/></a>
<a href="javascript:grin(':?:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_question.gif" alt="smiley12"  width="18" height="16"/></a>
<a href="javascript:grin(':razz:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_razz.gif" alt="smiley13"  width="18" height="16"/></a>
<a href="javascript:grin(':wink:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_wink.gif" alt="smiley14"  width="18" height="16"/></a>
<a href="javascript:grin(':idea:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_idea.gif" alt="smiley15"  width="18" height="16"/></a>
<a href="javascript:grin(':see:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_see.gif" alt="smiley16"  width="18" height="16"/></a>
<a href="javascript:grin(':evil:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_evil.gif" alt="smiley17"  width="18" height="16"/></a>
<a href="javascript:grin(':!:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_exclaim.gif" alt="smiley18"  width="18" height="16"/></a>
<a href="javascript:grin(':oops:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_redface.gif" alt="smiley19"  width="18" height="16"/></a>
<a href="javascript:grin(':grin:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_biggrin.gif" alt="smiley20"  width="18" height="16"/></a>
<a href="javascript:grin(':eek:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_surprised.gif" alt="smiley21"  width="18" height="16"/></a>
<a href="javascript:grin(':shock:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_eek.gif" alt="smiley22"  width="18" height="16"/></a>
<a href="javascript:grin(':???:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_confused.gif" alt="smiley23"  width="18" height="16"/></a>
<a href="javascript:grin(':cool:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_cool.gif" alt="smiley24"  width="18" height="16"/></a>
<a href="javascript:grin(':mad:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_mad.gif" alt="smiley25"  width="18" height="16"/></a>
<!-- DON NOT REMOVE THIS CopyRight Information!! By www.gongzi.org -->
<a href="javascript:grin(':twisted:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_twisted.gif" alt="smiley26"  width="18" height="16"/></a>
<a href="javascript:grin(':roll:')"><img src="<?php bloginfo('template_directory'); ?>/images/smilies/icon_rolleyes.gif" alt="smiley27"  width="18" height="16"/></a>

</div>