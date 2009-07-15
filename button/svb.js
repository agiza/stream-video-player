// pass the window to the object
var RodrigoPolo = window.RodrigoPolo || {};
// set the function
(RodrigoPolo.Tag = function() {
	return {
		// set the function
		embed : function() {
			
			// check if it's string the url and if the function tb_show works, if not, return
			if (typeof this.configUrl !== 'string' || typeof tb_show !== 'function') {
				return;
			}
			
			// pepare the url
			var url = this.configUrl + ((this.configUrl.match(/\?/)) ? "&" : "?") + "TB_iframe=true";
			
			// call lightbox to show the embed
			tb_show('Stream Video Player Tag Generator', url , false);
		}
		
	};
	
}());
/*
	Generator specific script
*/
(RodrigoPolo.Tag.Generator = function(){
	// to validate and generate the tag
	var vt = function(id){
		var form = jQuery('#'+id).val();
		/*if(form==''){
			return '';
		}else{
			return ' '+tag+'='+form
		}*/
		return (form=='' || form == 'false')?'':' '+id+'='+form;
	}
	// to build tag
	var buildTag = function() {
		return '[stream'+
			vt('flv')+
			vt('width')+
			vt('height')+
			vt('img')+
			vt('bandwidth')+
			vt('mp4')+
			vt('hd')+
			vt('title')+
			vt('volume')+
			vt('skin')+
			vt('logo')+
			vt('autostart')+
			vt('embed')+
			' /]';
	};
	// to insert tag
	var insertTag = function() {
		
		var tag = buildTag() || "";
		var win = window.parent || window;
				
		if ( typeof win.tinyMCE !== 'undefined' && ( win.ed = win.tinyMCE.activeEditor ) && !win.ed.isHidden() ) {
			win.ed.focus();
			if (win.tinymce.isIE)
				win.ed.selection.moveToBookmark(win.tinymce.EditorManager.activeEditor.windowManager.bookmark);

			win.ed.execCommand('mceInsertContent', false, tag);
		} else {
			win.edInsertContent(win.edCanvas, tag);
		}
		
		// Close Lightbox
		win.tb_remove();
		
	};
	return {
		initialize : function() {
			if (typeof jQuery === 'undefined') {
				return;
			}
			jQuery("#generate").click(function(e) {
				e.preventDefault();
				insertTag();
			});
		}
	};
}());