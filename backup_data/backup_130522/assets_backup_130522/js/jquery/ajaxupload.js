/*
    ColorBox Core Style:
    The following CSS is consistent between example themes and should not be altered.
*/
#colorbox, #cboxOverlay, #cboxWrapper{position:absolute; top:0; left:0; z-index:9999; overflow:hidden;}
#cboxOverlay{position:fixed; width:100%; height:100%;}
#cboxMiddleLeft, #cboxBottomLeft{clear:left;}
#cboxContent{position:relative;}
#cboxLoadedContent{overflow:auto;}
#cboxTitle{margin:0;}
#cboxLoadingOverlay, #cboxLoadingGraphic{position:absolute; top:0; left:0; width:100%; height:100%;}
#cboxPrevious, #cboxNext, #cboxClose, #cboxSlideshow{cursor:pointer;}
.cboxPhoto{float:left; margin:auto; border:0; display:block;}
.cboxIframe{width:100%; height:100%; display:block; border:0;}

/* 
    User Style:
    Change the following styles to modify the appearance of ColorBox.  They are
    ordered & tabbed in a way that represents the nesting of the generated HTML.
*/
#cboxOverlay{background:#000;}
#colorbox{}
    #cboxTopLeft{width:14px; height:14px; background:url(images/controls.png) no-repeat 0 0;}
    #cboxTopCenter{height:14px; background:url(images/border.png) repeat-x top left;}
    #cboxTopRight{width:14px; height:14px; background:url(images/controls.png) no-repeat -36px 0;}
    #cboxBottomLeft{width:14px; height:43px; background:url(images/controls.png) no-repeat 0 -32px;}
    #cboxBottomCenter{height:43px; background:url(images/border.png) repeat-x bottom left;}
    #cboxBottomRight{width:14px; height:43px; background:url(images/controls.png) no-repeat -36px -32px;}
    #cboxMiddleLeft{width:14px; background:url(images/controls.png) repeat-y -175px 0;}
    #cboxMiddleRight{width:14px; background:url(images/controls.png) repeat-y -211px 0;}
    #cboxContent{background:#fff; overflow:visible;}
        .cboxIframe{background:#fff;}
        #cboxError{padding:50px; border:1px solid #ccc;}
        #cboxLoadedContent{margin-bottom:5px;}
        #cboxLoadingOverlay{background:url(images/loading_background.png) no-repeat center center;}
        #cboxLoadingGraphic{background:url(images/loading.gif) no-repeat center center;}
        #cboxTitle{position:absolute; bottom:-25px; left:0; text-align:center; width:100%; font-weight:bold; color:#7C7C7C;}
        #cboxCurrent{position:absolute; bottom:-25px; left:58px; font-weight:bold; color:#7C7C7C;}
        
        #cboxPrevious, #cboxNext, #cboxClose, #cboxSlideshow{position:absolute; bottom:-29px; background:url(images/controls.png) no-repeat 0px 0px; width:23px; height:23px; text-indent:-9999px;}
        #cboxPrevious{left:0px; background-position: -51px -25px;}
        #cboxPrevious:hover{background-position:-51px 0px;}
        #cboxNext{left:27px; background-position:-75px -25px;}
        #cboxNext:hover{background-position:-75px 0px;}
        #cboxClose{right:0; background-position:-100px -25px;}
        #cboxClose:hover{background-position:-100px 0px;}
        
        .cboxSlideshow_on #cboxSlideshow{background-position:-125px 0px; right:27px;}
        .cboxSlideshow_on #cboxSlideshow:hover{background-position:-150px 0px;}
        .cboxSlideshow_off #cboxSlideshow{background-position:-150px -25px; right:27px;}
        .cboxSlideshow_off #cboxSlideshow:hover{background-position:-125px 0px;}