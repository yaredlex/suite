/**
 * Лучший визуальный редактор TinyMCE 3.5.8 RU
 * Файл настроек
 * author		Лёха Орин <ya.redlex@yandex.ru>
 * copyright		Copyright (c) 2013, Лёха Орин
 * license		http://cogear.ru/license.html
 * link		http://cogear.ru/repo
 */
	tinyMCE.init({
       // General options
	   language : "ru",
     mode : "textareas",
     theme : "advanced",
     forced_root_block : false,
  	 force_br_newlines : true,
		 force_p_newlines : false,
		 plugins : "style,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
	        // Theme options
         theme_advanced_buttons3 : "bold,italic,underline,|,bullist,numlist,|,justifyleft,justifycenter,justifyright,justifyfull,outdent,indent,|,blockquote,forecolor,backcolor,strikethrough,charmap,|,link,unlink,anchor,|,sub,sup,visualchars,|,undo,redo,|,code",  
        theme_advanced_buttons2 : "formatselect,styleselect,fontselect,fontsizeselect,cut,copy,paste,pastetext,pasteword,|,image,emotions,iespell,media,insertdate,inserttime,advhr,search,replace",
        theme_advanced_buttons1 : "tablecontrols,|,hr,removeformat,visualaid,ltr,rtl,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,nonbreaking,cleanup,template",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,
        // Example content CSS (should be your site CSS)
        content_css : "../../../cache/assets/styles.css",
        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "js/template_list.js",
        external_link_list_url : "js/link_list.js",
        external_image_list_url : "js/image_list.js",
        media_external_list_url : "js/media_list.js",
        // Replace values for the template plugin
        template_replace_values : {
                username : "Some User",
                staffid : "991234"
        }
});
