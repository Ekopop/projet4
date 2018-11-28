tinymce.init({
    mode : "exact",
    selector : "#content",
    theme : "advanced",
    heme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
    theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
    theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
    theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
    // emplacement de la toolbar
    theme_advanced_toolbar_location : "top",
    // alignement de la toolbar
    theme_advanced_toolbar_align : "left",
    // positionnement de la barre de statut
    theme_advanced_statusbar_location : "bottom",
    // permet de redimensionner la zone de texte
    theme_advanced_resizing : true,
    
    // taille disponible
    theme_advanced_font_sizes: "10px,11px,12px,13px,14px,15px,16px,17px,18px,19px,20px,21px,22px,23px,24px,25px",
    // couleur disponible dans la palette de couleur
    theme_advanced_text_colors : "33FFFF, 007fff, ff7f00",
    // balise html disponible
    theme_advanced_blockformats : "h1, h2,h3,h4,h5,h6",
    // class disponible
    theme_advanced_styles : "Tableau=textTab;TableauSansCadre=textTabSansCadre;",
    // possibilité de définir les class et leurs styles directement avec le code suivant
});
