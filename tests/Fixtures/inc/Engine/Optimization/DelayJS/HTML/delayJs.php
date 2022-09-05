<?php

$html = '<html>
<head>
	<script src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js"></script>
	<script src="http://example.org/wp-includes/js/jquery/jquery.min.js?ver=3.5.1"></script>
	<script src="http://example.org/wp-content/plugins/wp-smush/assets/js/smush-lazy-load.min.js"></script>
	<script src="http://example.org/wp-content/plugins/wp-smush/assets/js/smush-lazy-load-native.min.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/lazysizes-pre.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/lazysizes.min.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/lazysizes-post.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer-cloud/includes/lazysizes.min.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/load_webp.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/load_webp.min.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/load-webp.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/load-webp.min.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/check-webp.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/check-webp.min.js"></script>
	<script src="http://example.org/wp-content/plugins/autoptimize/classes/external/js/lazysizes.min.js"></script>
	<script src="http://example.org/wp-content/themes/avada/assets/js/library/lazysizes.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.js">< / script>
	<script src="https://tests.local/wp-includes/js/wp-embed.min.js?ver=5.7" id="wp-embed-js"></script>
	<script src="http://example.org/wp-content/plugins/sitepress-multilingual-cms/dist/js/browser-redirect/app.js"></script>
	<script type="text/javascript" async="async" data-noptimize="1" data-cfasync="false" src="//scripts.mediavine.com/tags/test.js"></script>
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"http://example.org/#website","url":"http://example.org/"]}</script>
	<script class=\'jdgm-settings-script\'>window.jdgmSettings={"pagination":5,"badge_no_review_text":"0 reviews","badge_n_reviews_text":"{{ n }} Review/Reviews","badge_star_color":"#ffde00","hide_badge_preview_if_no_reviews":true,"widget_title":"Echte klantreviews","widget_open_form_text":"Scrhijf jouw review","widget_close_form_text":"Cancel","widget_refresh_page_text":"Ververs pagina","widget_summary_text":"Gebaseerd op {{ number_of_reviews }} review/reviews","widget_no_review_text":"Nog geen reviews","widget_name_field_text":"Naam","widget_verified_name_field_text":"Geverifieerde naam (public)","widget_name_placeholder_text":"Voer je naam in (public)","widget_required_field_error_text":"Dit veld is verplicht","widget_email_field_text":"E-mail","widget_verified_email_field_text":"Geverifieerd e-mailadres (privé, kan niet worden bewerkt)","widget_email_placeholder_text":"Voer je e-mailadres in (privé)","widget_email_field_error_text":"Gelieve een geldig e-mailadres in te geven.","widget_rating_field_text":"Review","widget_review_title_field_text":"Review Titel","widget_review_title_placeholder_text":"Geef je review een titel","widget_review_body_field_text":"Review","widget_review_body_placeholder_text":"Geef jouw mening","widget_pictures_field_text":"Foto\'s of video (optie)","widget_submit_review_text":"Verstuur review","widget_submit_verified_review_text":"Verstuur review","widget_submit_success_msg_with_auto_publish":"Bedankt voor je review! Als je je pagina ververst kun je jouw vers geschreven review teruglezen. Je kunt \'m zelfs delen via social media.","widget_submit_success_msg_no_auto_publish":"Bedankt voor je review! Je review word eerst beoordeeld. Je kunt \'m later ook delen via social media.","widget_show_default_reviews_out_of_total_text":"{{ n_reviews_shown }} wordt weergegeven bij {{ n_reviews }} beoordelingen.","widget_show_all_link_text":"Toon alles","widget_show_less_link_text":"Laat minder zien","widget_author_said_text":"{{ reviewer_name }} zei:","widget_days_text":"{{ n }} dagen geleden","widget_weeks_text":"{{ n }} week/weken geleden","widget_months_text":"{{ n }} maanden/maanden geleden","widget_years_text":"{{ n }} jaar/jaar geleden","widget_yesterday_text":"Gisteren","widget_today_text":"Vandaag","widget_replied_text":"Reactie van {{ shop_name }}:","widget_read_more_text":"Lees meer","widget_reviewer_name_as_initial":"last_initial","widget_rating_filter_see_all_text":"Alle beoordelingen bekijken","widget_sorting_most_recent_text":"Meest recent","widget_sorting_highest_rating_text":"Hoogste beoordeling","widget_sorting_lowest_rating_text":"Laagste beoordeling","widget_sorting_with_pictures_text":"Alleen foto\'s","widget_sorting_most_helpful_text":"Meest behulpzaam","widget_open_question_form_text":"Stel een vraag","widget_reviews_subtab_text":"Review","widget_questions_subtab_text":"Vragen","widget_question_label_text":"Vragen","widget_answer_label_text":"Antwoorden","widget_question_placeholder_text":"Schrijf je vraag","widget_submit_question_text":"Verstuur je vraag","widget_question_submit_success_text":"Bedankt voor je vraag! We zullen u op de hoogte stellen en uw vraag zal worden gepubliceerd zodra deze is beantwoord.","widget_star_color":"#ffd600","verified_badge_text":"Geverifieerd ","verified_badge_placement":"left-of-reviewer-name","widget_review_max_height":4,"widget_social_share":true,"widget_thumb":true,"widget_review_location_show":true,"widget_location_format":"country_iso_code","all_reviews_include_out_of_store_products":true,"all_reviews_out_of_store_text":"(uit winkel)","all_reviews_product_name_prefix_text":"over","enable_review_pictures":true,"enable_question_anwser":true,"review_date_format":"dd/mm/yyyy","default_sort_method":"most-helpful","widget_product_reviews_subtab_text":"Product recensies","widget_shop_reviews_subtab_text":"Winkel beoordelingen","show_product_url_for_grouped_product":true,"widget_sorting_pictures_first_text":"Foto\'s eerst","show_pictures_on_all_rev_page_mobile":true,"show_pictures_on_all_rev_page_desktop":true,"floating_tab_button_name":"★ Judge.me beoordelingen","floating_tab_title":"Laat klanten voor ons spreken","all_reviews_text_badge_text":"Klanten beoordelen ons {{ shop.metafields.judgeme.all_reviews_rating | round: 1 }}/5 gebaseerd op {{ shop.metafields.judgeme.all_reviews_count }} - recensies.","featured_carousel_title":"Laat klanten voor ons spreken","featured_carousel_count_text":"van {{ n }} recensies","featured_carousel_autoslide_interval":0,"featured_carousel_image_size":300,"featured_carousel_arrow_color":"#575757","picture_reminder_submit_button":"Upload afbeeldingen","enable_review_videos":true,"mute_video_by_default":true,"widget_sorting_videos_first_text":"Video\'s eerst","widget_review_pending_text":"In afwachting","social_share_options_order":"Facebook,Twitter,Pinterest,LinkedIn","preview_badge_show_question_text":true,"preview_badge_no_question_text":"0 Productvragen","preview_badge_n_question_text":"{{ number_of_questions }} vraag/vragen","qa_badge_show_icon":true,"widget_add_search_bar":true,"widget_search_bar_placeholder":"Doorzoek reviews","widget_sorting_verified_only_text":"Alleen geverifieerd","featured_carousel_theme":"aligned","featured_carousel_full_star_background":"#ffd600","all_reviews_page_load_more_text":"Laad meer recensies","widget_public_name_text":"openbaar weergegeven als","widget_reviewer_anonymous":"Anoniem","medals_widget_title":"Judge.me Review-medailles","platform":"woocommerce","branding_url":"https://judge.me/reviews","branding_text":"Via Judge.me","locale":"nl","reply_name":"Grill Bill Kamado BBQ","footer":true,"autopublish":true,"review_dates":true,"enable_custom_form":true};</script>
	<script>var et_site_url=\'http://example.org\';var et_post_id=\'2\';function et_core_page_resource_fallback(a,b){"undefined"===typeof b&&(b=a.sheet.cssRules&&0===a.sheet.cssRules.length);b&&(a.onerror=null,a.onload=null,a.href?a.href=et_site_url+"/?et_core_page_resource="+a.id+et_post_id:a.src&&(a.src=et_site_url+"/?et_core_page_resource="+a.id+et_post_id))}
	</script>
	<script>var lepopup_customjs_handlers={};var lepopup_cookie_value="1624338829";var lepopup_events_data={};var lepopup_content_id="23638";</script>
	<script>
		// Store some global theme options used in JS
		if ( window.$us === undefined ) {
			window.$us = {};
		}
		$us.canvasOptions = ( $us.canvasOptions || {} );
		$us.canvasOptions.disableEffectsWidth = 900;
		$us.canvasOptions.columnsStackingWidth = 768;
		$us.canvasOptions.backToTopDisplay = 100;
		$us.canvasOptions.scrollDuration = 1000;

		$us.langOptions = ( $us.langOptions || {} );
		$us.langOptions.magnificPopup = ( $us.langOptions.magnificPopup || {} );
		$us.langOptions.magnificPopup.tPrev = \'Previous (Left arrow key)\';
		$us.langOptions.magnificPopup.tNext = \'Next (Right arrow key)\';
		$us.langOptions.magnificPopup.tCounter = \'%curr% of %total%\';

		$us.navOptions = ( $us.navOptions || {} );
		$us.navOptions.mobileWidth = 900;
		$us.navOptions.togglable = true;
		$us.ajaxLoadJs = true;
		$us.templateDirectoryUri = \'/wp-content/themes/Impreza\';
	</script>
	<script>if ( window.$us === undefined ) window.$us = {};</script>
	<script>fusionNavIsCollapsed</script>
	<script>var eio_lazy_vars = {"exactdn_domain":"evp4mrv2nwt.exactdn.com","skip_autoscale":"0","threshold":"0"};</script>
	<script>document.body.classList.remove("no-js")</script>
	<script type="text/javascript">
		window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/tests.local\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7.1"}};
		!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
	</script>
	<script type="text/javascript">
		(function($) {
				var analytics_code = "<!-- Global site tag (gtag.js) - Google Analytics -->\n<script async src=\"https:\/\/www.googletagmanager.com\/gtag\/js?id=XXX\"><\/script>\n<script>\n  window.dataLayer = window.dataLayer || [];\n  function gtag(){dataLayer.push(arguments);}\n  gtag(\'js\', new Date());\n\n  gtag(\'config\', \'XXX\');\n<\/script>".replace(/\"/g, \'"\' );
		})( jQuery );
	</script>
	<script>function cpLoadCSS(e,t,n){"use strict";var i=window.document.createElement("link"),o=t||window.document.getElementsByTagName("script")[0];return i.rel="stylesheet",i.href=e,i.media="only x",o.parentNode.insertBefore(i,o),setTimeout(function(){i.media=n||"all"}),i}</script>
	<script>document.addEventListener(\'DOMContentLoaded\', function(event) {  if( typeof cpLoadCSS !== \'undefined\' ) { cpLoadCSS(\'https://example.org/wp-content/plugins/convertpro/assets/modules/css/cp-popup.min.css?ver=1.7.0\', 0, \'all\'); } }); </script>
	<script type="text/javascript">this.initCubePortfolio =  this.initCubePortfolio || []; this.initCubePortfolio.push({id: 23, options: {"filters":"#cbpw-filters23","loadMore":"","loadMoreAction":"click","search":"","layoutMode":"grid","sortToPreventGaps":true,"drag":true,"auto":false,"autoTimeout":5000,"autoPauseOnHover":true,"showNavigation":true,"showPagination":true,"rewindNav":true,"scrollByPage":false,"defaultFilter":"*","filterDeeplinking":false,"animationType":"fadeOut","gridAdjustment":"responsive","mediaQueries":[{"width":1400,"cols":3},{"width":1170,"cols":3},{"width":1024,"cols":3},{"width":960,"cols":3},{"width":778,"cols":3},{"width":640,"cols":2},{"width":480,"cols":2}],"gapHorizontal":0,"gapVertical":0,"caption":"zoom","displayType":"fadeIn","displayTypeSpeed":400,"lightboxDelegate":".cbp-lightbox","lightboxGallery":true,"lightboxTitleSrc":"data-title","lightboxCounter":"<div class=\"cbp-popup-lightbox-counter\">{{current}} of {{total}}</div>","singlePageDelegate":".cbp-singlePage","singlePageDeeplinking":true,"singlePageStickyNavigation":true,"singlePageCounter":"<div class=\"cbp-popup-singlePage-counter\">{{current}} of {{total}}</div>","singlePageAnimation":"middle","singlePageInlineDelegate":".cbp-singlePageInline","singlePageInlineDeeplinking":false,"singlePageInlinePosition":"top","singlePageInlineInFocus":true,"plugins":{},"cols":3,"coverRatio":""}});</script>
	<script data-cfasync="false" type="text/javascript">var Arrive=function(d,e,w){"use strict";if(d.MutationObserver&&"undefined"!=typeof HTMLElement){var a,t,r=0,c=(a=HTMLElement.prototype.matches||HTMLElement.prototype.webkitMatchesSelector||HTMLElement.prototype.mozMatchesSelector||HTMLElement.prototype.msMatchesSelector,{matchesSelector:function(e,t){return e instanceof HTMLElement&&a.call(e,t)},addMethod:function(e,t,a){var r=e[t];e[t]=function(){return a.length==arguments.length?a.apply(this,arguments):"function"==typeof r?r.apply(this,arguments):void 0}},callCallbacks:function(e,t){t&&t.options.onceOnly&&1==t.firedElems.length&&(e=[e[0]]);for(var a,r=0;a=e[r];r++)a&&a.callback&&a.callback.call(a.elem,a.elem);t&&t.options.onceOnly&&1==t.firedElems.length&&t.me.unbindEventWithSelectorAndCallback.call(t.target,t.selector,t.callback)},checkChildNodesRecursively:function(e,t,a,r){for(var i,n=0;i=e[n];n++)a(i,t,r)&&r.push({callback:t.callback,elem:i}),0<i.childNodes.length&&c.checkChildNodesRecursively(i.childNodes,t,a,r)},mergeArrays:function(e,t){var a,r={};for(a in e)e.hasOwnProperty(a)&&(r[a]=e[a]);for(a in t)t.hasOwnProperty(a)&&(r[a]=t[a]);return r},toElementsArray:function(e){return void 0===e||"number"==typeof e.length&&e!==d||(e=[e]),e}}),u=((t=function(){this._eventsBucket=[],this._beforeAdding=null,this._beforeRemoving=null}).prototype.addEvent=function(e,t,a,r){var i={target:e,selector:t,options:a,callback:r,firedElems:[]};return this._beforeAdding&&this._beforeAdding(i),this._eventsBucket.push(i),i},t.prototype.removeEvent=function(e){for(var t,a=this._eventsBucket.length-1;t=this._eventsBucket[a];a--)if(e(t)){this._beforeRemoving&&this._beforeRemoving(t);var r=this._eventsBucket.splice(a,1);r&&r.length&&(r[0].callback=null)}},t.prototype.beforeAdding=function(e){this._beforeAdding=e},t.prototype.beforeRemoving=function(e){this._beforeRemoving=e},t),l=function(i,n){var l=new u,o=this,s={fireOnAttributesModification:!1};return l.beforeAdding(function(t){var e,a=t.target;a!==d.document&&a!==d||(a=document.getElementsByTagName("html")[0]),e=new MutationObserver(function(e){n.call(this,e,t)});var r=i(t.options);e.observe(a,r),t.observer=e,t.me=o}),l.beforeRemoving(function(e){e.observer.disconnect()}),this.bindEvent=function(e,t,a){t=c.mergeArrays(s,t);for(var r=c.toElementsArray(this),i=0;i<r.length;i++)l.addEvent(r[i],e,t,a)},this.unbindEvent=function(){var a=c.toElementsArray(this);l.removeEvent(function(e){for(var t=0;t<a.length;t++)if(this===w||e.target===a[t])return!0;return!1})},this.unbindEventWithSelectorOrCallback=function(a){var e,r=c.toElementsArray(this),i=a;e="function"==typeof a?function(e){for(var t=0;t<r.length;t++)if((this===w||e.target===r[t])&&e.callback===i)return!0;return!1}:function(e){for(var t=0;t<r.length;t++)if((this===w||e.target===r[t])&&e.selector===a)return!0;return!1},l.removeEvent(e)},this.unbindEventWithSelectorAndCallback=function(a,r){var i=c.toElementsArray(this);l.removeEvent(function(e){for(var t=0;t<i.length;t++)if((this===w||e.target===i[t])&&e.selector===a&&e.callback===r)return!0;return!1})},this},i=new function(){var s={fireOnAttributesModification:!1,onceOnly:!1,existing:!1};function n(e,t,a){return!(!c.matchesSelector(e,t.selector)||(e._id===w&&(e._id=r++),-1!=t.firedElems.indexOf(e._id))||(t.firedElems.push(e._id),0))}var d=(i=new l(function(e){var t={attributes:!1,childList:!0,subtree:!0};return e.fireOnAttributesModification&&(t.attributes=!0),t},function(e,i){e.forEach(function(e){var t=e.addedNodes,a=e.target,r=[];null!==t&&0<t.length?c.checkChildNodesRecursively(t,i,n,r):"attributes"===e.type&&n(a,i)&&r.push({callback:i.callback,elem:a}),c.callCallbacks(r,i)})})).bindEvent;return i.bindEvent=function(e,t,a){t=void 0===a?(a=t,s):c.mergeArrays(s,t);var r=c.toElementsArray(this);if(t.existing){for(var i=[],n=0;n<r.length;n++)for(var l=r[n].querySelectorAll(e),o=0;o<l.length;o++)i.push({callback:a,elem:l[o]});if(t.onceOnly&&i.length)return a.call(i[0].elem,i[0].elem);setTimeout(c.callCallbacks,1,i)}d.call(this,e,t,a)},i},o=new function(){var r={};function i(e,t){return c.matchesSelector(e,t.selector)}var n=(o=new l(function(){return{childList:!0,subtree:!0}},function(e,r){e.forEach(function(e){var t=e.removedNodes,a=[];null!==t&&0<t.length&&c.checkChildNodesRecursively(t,r,i,a),c.callCallbacks(a,r)})})).bindEvent;return o.bindEvent=function(e,t,a){t=void 0===a?(a=t,r):c.mergeArrays(r,t),n.call(this,e,t,a)},o};e&&g(e.fn),g(HTMLElement.prototype),g(NodeList.prototype),g(HTMLCollection.prototype),g(HTMLDocument.prototype),g(Window.prototype);var n={};return s(i,n,"unbindAllArrive"),s(o,n,"unbindAllLeave"),n}function s(e,t,a){c.addMethod(t,a,e.unbindEvent),c.addMethod(t,a,e.unbindEventWithSelectorOrCallback),c.addMethod(t,a,e.unbindEventWithSelectorAndCallback)}function g(e){e.arrive=i.bindEvent,s(i,e,"unbindArrive"),e.leave=o.bindEvent,s(o,e,"unbindLeave")}}(window,"undefined"==typeof jQuery?null:jQuery,void 0),ewww_webp_supported=!1;function check_webp_feature(e,t){if(ewww_webp_supported)t(ewww_webp_supported);else{var a=new Image;a.onload=function(){ewww_webp_supported=0<a.width&&0<a.height,t(ewww_webp_supported)},a.onerror=function(){t(!1)},a.src="data:image/webp;base64,"+{alpha:"UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA==",animation:"UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA"}[e]}}function ewwwLoadImages(e){var n="data-";function t(e,t){for(var a=["accesskey","align","alt","border","class","contenteditable","contextmenu","crossorigin","dir","draggable","dropzone","height","hidden","hspace","id","ismap","lang","longdesc","sizes","spellcheck","style","tabindex","title","translate","usemap","vspace","width","data-animation","data-attachment-id","data-auto-height","data-caption","data-comments-opened","data-delay","data-event-trigger","data-flex_fx","data-height","data-hide-on-end","data-highlight-color","data-highlight-border-color","data-highlight-border-opacity","data-highlight-border-width","data-highlight-opacity","data-image-meta","data-image-title","data-image-description","data-interval","data-large_image_width","data-large_image_height","data-lazy","data-lazy-type","data-mode","data-name","data-no-lazy","data-orig-size","data-partial","data-per-view","data-permalink","data-pin-description","data-pin-id","data-pin-media","data-pin-url","data-rel","data-ride","data-shadow","data-shadow-direction","data-slide","data-slide-to","data-target","data-vc-zoom","data-width","data-wrap"],r=0,i=a.length;r<i;r++)ewwwAttr(t,a[r],e.getAttribute(n+a[r]));return t}if(e){for(var a=document.querySelectorAll(".batch-image img, .image-wrapper a, .ngg-pro-masonry-item a, .ngg-galleria-offscreen-seo-wrapper a"),r=0,i=a.length;r<i;r++)ewwwAttr(a[r],"data-src",a[r].getAttribute("data-webp")),ewwwAttr(a[r],"data-thumbnail",a[r].getAttribute("data-webp-thumbnail"));for(r=0,i=(o=document.querySelectorAll(".rev_slider ul li")).length;r<i;r++){ewwwAttr(o[r],"data-thumb",o[r].getAttribute("data-webp-thumb"));for(var l=1;l<11;)ewwwAttr(o[r],"data-param"+l,o[r].getAttribute("data-webp-param"+l)),l++}var o;for(r=0,i=(o=document.querySelectorAll(".rev_slider img")).length;r<i;r++)ewwwAttr(o[r],"data-lazyload",o[r].getAttribute("data-webp-lazyload"));var s=document.querySelectorAll("div.woocommerce-product-gallery__image");for(r=0,i=s.length;r<i;r++)ewwwAttr(s[r],"data-thumb",s[r].getAttribute("data-webp-thumb"))}var d=document.querySelectorAll("video");for(r=0,i=d.length;r<i;r++)ewwwAttr(d[r],"poster",e?d[r].getAttribute("data-poster-webp"):d[r].getAttribute("data-poster-image"));var w=document.querySelectorAll("img.ewww_webp_lazy_load");for(r=0,i=w.length;r<i;r++){if(e){ewwwAttr(w[r],"data-lazy-srcset",w[r].getAttribute("data-lazy-srcset-webp")),ewwwAttr(w[r],"data-srcset",w[r].getAttribute("data-srcset-webp")),ewwwAttr(w[r],"data-lazy-src",w[r].getAttribute("data-lazy-src-webp")),ewwwAttr(w[r],"data-src",w[r].getAttribute("data-src-webp")),ewwwAttr(w[r],"data-orig-file",w[r].getAttribute("data-webp-orig-file")),ewwwAttr(w[r],"data-medium-file",w[r].getAttribute("data-webp-medium-file")),ewwwAttr(w[r],"data-large-file",w[r].getAttribute("data-webp-large-file"));var c=w[r].getAttribute("srcset");null!=c&&!1!==c&&c.includes("R0lGOD")&&ewwwAttr(w[r],"src",w[r].getAttribute("data-lazy-src-webp"))}w[r].className=w[r].className.replace(/\bewww_webp_lazy_load\b/,"")}var u=document.querySelectorAll(".ewww_webp");for(r=0,i=u.length;r<i;r++){var g=document.createElement("img");e?(ewwwAttr(g,"src",u[r].getAttribute("data-webp")),ewwwAttr(g,"srcset",u[r].getAttribute("data-srcset-webp")),ewwwAttr(g,"data-orig-file",u[r].getAttribute("data-orig-file")),ewwwAttr(g,"data-orig-file",u[r].getAttribute("data-webp-orig-file")),ewwwAttr(g,"data-medium-file",u[r].getAttribute("data-medium-file")),ewwwAttr(g,"data-medium-file",u[r].getAttribute("data-webp-medium-file")),ewwwAttr(g,"data-large-file",u[r].getAttribute("data-large-file")),ewwwAttr(g,"data-large-file",u[r].getAttribute("data-webp-large-file")),ewwwAttr(g,"data-large_image",u[r].getAttribute("data-large_image")),ewwwAttr(g,"data-large_image",u[r].getAttribute("data-webp-large_image")),ewwwAttr(g,"data-src",u[r].getAttribute("data-src")),ewwwAttr(g,"data-src",u[r].getAttribute("data-webp-src"))):(ewwwAttr(g,"src",u[r].getAttribute("data-img")),ewwwAttr(g,"srcset",u[r].getAttribute("data-srcset-img")),ewwwAttr(g,"data-orig-file",u[r].getAttribute("data-orig-file")),ewwwAttr(g,"data-medium-file",u[r].getAttribute("data-medium-file")),ewwwAttr(g,"data-large-file",u[r].getAttribute("data-large-file")),ewwwAttr(g,"data-large_image",u[r].getAttribute("data-large_image")),ewwwAttr(g,"data-src",u[r].getAttribute("data-src"))),g=t(u[r],g),u[r].parentNode.insertBefore(g,u[r].nextSibling),u[r].className=u[r].className.replace(/\bewww_webp\b/,"")}window.jQuery&&jQuery.fn.isotope&&jQuery.fn.imagesLoaded&&(jQuery(".fusion-posts-container-infinite").imagesLoaded(function(){jQuery(".fusion-posts-container-infinite").hasClass("isotope")&&jQuery(".fusion-posts-container-infinite").isotope()}),jQuery(".fusion-portfolio:not(.fusion-recent-works) .fusion-portfolio-wrapper").imagesLoaded(function(){jQuery(".fusion-portfolio:not(.fusion-recent-works) .fusion-portfolio-wrapper").isotope()}))}function ewwwWebPInit(e){ewwwLoadImages(e),ewwwNggLoadGalleries(e),document.arrive(".ewww_webp",function(){ewwwLoadImages(e)}),document.arrive(".ewww_webp_lazy_load",function(){ewwwLoadImages(e)}),document.arrive("videos",function(){ewwwLoadImages(e)}),"loading"==document.readyState?document.addEventListener("DOMContentLoaded",ewwwJSONParserInit):("undefined"!=typeof galleries&&ewwwNggParseGalleries(e),ewwwWooParseVariations(e))}function ewwwAttr(e,t,a){null!=a&&!1!==a&&e.setAttribute(t,a)}function ewwwJSONParserInit(){"undefined"!=typeof galleries&&check_webp_feature("alpha",ewwwNggParseGalleries),check_webp_feature("alpha",ewwwWooParseVariations)}function ewwwWooParseVariations(e){if(e)for(var t=document.querySelectorAll("form.variations_form"),a=0,r=t.length;a<r;a++){var i=t[a].getAttribute("data-product_variations"),n=!1;try{for(var l in i=JSON.parse(i))void 0!==i[l]&&void 0!==i[l].image&&(void 0!==i[l].image.src_webp&&(i[l].image.src=i[l].image.src_webp,n=!0),void 0!==i[l].image.srcset_webp&&(i[l].image.srcset=i[l].image.srcset_webp,n=!0),void 0!==i[l].image.full_src_webp&&(i[l].image.full_src=i[l].image.full_src_webp,n=!0),void 0!==i[l].image.gallery_thumbnail_src_webp&&(i[l].image.gallery_thumbnail_src=i[l].image.gallery_thumbnail_src_webp,n=!0),void 0!==i[l].image.thumb_src_webp&&(i[l].image.thumb_src=i[l].image.thumb_src_webp,n=!0));n&&ewwwAttr(t[a],"data-product_variations",JSON.stringify(i))}catch(e){}}}function ewwwNggParseGalleries(e){if(e)for(var t in galleries){var a=galleries[t];galleries[t].images_list=ewwwNggParseImageList(a.images_list)}}function ewwwNggLoadGalleries(e){e&&document.addEventListener("ngg.galleria.themeadded",function(e,t){window.ngg_galleria._create_backup=window.ngg_galleria.create,window.ngg_galleria.create=function(e,t){var a=$(e).data("id");return galleries["gallery_"+a].images_list=ewwwNggParseImageList(galleries["gallery_"+a].images_list),window.ngg_galleria._create_backup(e,t)}})}function ewwwNggParseImageList(e){for(var t in e){var a=e[t];if(void 0!==a["image-webp"]&&(e[t].image=a["image-webp"],delete e[t]["image-webp"]),void 0!==a["thumb-webp"]&&(e[t].thumb=a["thumb-webp"],delete e[t]["thumb-webp"]),void 0!==a.full_image_webp&&(e[t].full_image=a.full_image_webp,delete e[t].full_image_webp),void 0!==a.srcsets)for(var r in a.srcsets)nggSrcset=a.srcsets[r],void 0!==a.srcsets[r+"-webp"]&&(e[t].srcsets[r]=a.srcsets[r+"-webp"],delete e[t].srcsets[r+"-webp"]);if(void 0!==a.full_srcsets)for(var i in a.full_srcsets)nggFSrcset=a.full_srcsets[i],void 0!==a.full_srcsets[i+"-webp"]&&(e[t].full_srcsets[i]=a.full_srcsets[i+"-webp"],delete e[t].full_srcsets[i+"-webp"])}return e}check_webp_feature("alpha",ewwwWebPInit);</script>
	<script>document.addEventListener("DOMContentLoaded",function(){var lazyLoadInstance=new LazyLoad({elements_selector:"[loading=lazy],.perfmatters-lazy",thresholds:"200% 0px",callback_loaded:function(element){if(element.tagName==="IFRAME"){if(element.classList.contains("loaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}});});function perfmattersLazyLoadYouTube(e){var iframe=document.createElement("iframe");var params="ID?autoplay=1";params+=0===e.dataset.query.length?"":"&"+e.dataset.query;iframe.setAttribute("src",params.replace("ID",e.dataset.src));iframe.setAttribute("frameborder","0");iframe.setAttribute("allowfullscreen","1");iframe.setAttribute("allow","accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture");e.replaceChild(iframe,e.firstChild)}</script>
</head>
<body>
<script>
	// Billing
	var billing_address =\' #billing_address_1\';
	var billing_city =\'\';
	var billing_state =\' #billing_city\';
	var billing_zip_code =\'\';
	var billing_country =\'\';
	var billing_county =\'\';
	var billing_additional_field =\'\';
	var country_restriction =\'HK\';
</script>
<script>var rbs_gallery_60d183e796fbf = {"version":"3.0.7","id":27381,"class":"id27381","roboGalleryDelay":1000,"mainContainer":"#robo_gallery_main_block_rbs_gallery_60d183e796fbf","loadingContainer":"#rbs_gallery_60d183e796fbf-block-loader","loadingContainerObj":"rbs_gallery_60d183e796fbf-block-loader","columnWidth":"auto","columns":3,"resolutions":[{"columnWidth":"auto","columns":3,"maxWidth":960},{"columnWidth":"auto","columns":2,"maxWidth":650},{"columnWidth":300,"maxWidth":450}],"descBox":true,"descBoxClass":"rbs_desc_panel_light","lightboxOptions":{"gallery":{"enabled":true,"tCounter":"%curr% of %total%"}},"facebook":true,"twitter":true,"pinterest":true,"overlayEffect":"direction-aware-fade","boxesToLoadStart":6,"boxesToLoad":6,"lazyLoad":1,"waitUntilThumbLoads":1,"LoadingWord":"Loading Videos...","loadMoreWord":"Loading More Videos","noMoreEntriesWord":"No More Videos","horizontalSpaceBetweenBoxes":15,"verticalSpaceBetweenBoxes":15,"noHoverOnMobile":"false","wrapContainer":"#robo-gallery-wrap-rbs_gallery_60d183e796fbf"};</script>
<script type="text/javascript">
window.fluent_form_ff_form_instance_1_1 = {"id":"1","settings":{"layout":{"labelPlacement":"top","helpMessagePlacement":"with_label","errorMessagePlacement":"inline","asteriskPlacement":"asterisk-right"},"id":"39","restrictions":{"denyEmptySubmission":{"enabled":false}}},"form_instance":"ff_form_instance_1_1","form_id_selector":"fluentform_1","rules":{"first_name[first_name]":{"required":{"value":false,"message":"This field is required"}},"first_name[middle_name]":{"required":{"value":false,"message":"This field is required"}},"first_name[last_name]":{"required":{"value":false,"message":"This field is required"}},"email":{"required":{"value":true,"message":"This field is required"},"email":{"value":true,"message":"This field must contain a valid email"}},"biggest_challenge":{"required":{"value":false,"message":"This field is required"}}}};
</script>
<script type="text/javascript">
	var et_animation_data = [{"class":"et_pb_cta_0","style":"slideLeft","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"50%","starting_opacity":"0%","speed_curve":"ease-in-out"}];
</script>
<script>var formDisplay=1;var nfForms=nfForms||[];var form=[];form.id="1";form.settings={"title":"Contact Me","key":"","created_at":"2021-06-10 13:02:47","default_label_pos":"above","conditions":[],"objectType":"Form Setting","editActive":"","show_title":"1","clear_complete":"1","hide_complete":"1","wrapper_class":"","element_class":"","add_submit":"1","logged_in":"","not_logged_in_msg":"","sub_limit_number":"","sub_limit_msg":"","calculations":[],"formContentData":[{"order":"0","cells":[{"order":"0","fields":["name"],"width":"100"}]},{"order":"1","cells":[{"order":"0","fields":["email"],"width":"100"}]},{"order":"2","cells":[{"order":"0","fields":["message"],"width":"100"}]},{"order":"3","cells":[{"order":"0","fields":["submit"],"width":"100"}]}],"container_styles_background-color":"","container_styles_border":"","container_styles_border-style":"","container_styles_border-color":"","container_styles_color":"","container_styles_height":"","container_styles_width":"","container_styles_font-size":"","container_styles_margin":"","container_styles_padding":"","container_styles_display":"","container_styles_float":"","container_styles_show_advanced_css":"0","container_styles_advanced":"","title_styles_background-color":"","title_styles_border":"","title_styles_border-style":"","title_styles_border-color":"","title_styles_color":"","title_styles_height":"","title_styles_width":"","title_styles_font-size":"","title_styles_margin":"","title_styles_padding":"","title_styles_display":"","title_styles_float":"","title_styles_show_advanced_css":"0","title_styles_advanced":"","row_styles_background-color":"","row_styles_border":"","row_styles_border-style":"","row_styles_border-color":"","row_styles_color":"","row_styles_height":"","row_styles_width":"","row_styles_font-size":"","row_styles_margin":"","row_styles_padding":"","row_styles_display":"","row_styles_show_advanced_css":"0","row_styles_advanced":"","row-odd_styles_background-color":"","row-odd_styles_border":"","row-odd_styles_border-style":"","row-odd_styles_border-color":"","row-odd_styles_color":"","row-odd_styles_height":"","row-odd_styles_width":"","row-odd_styles_font-size":"","row-odd_styles_margin":"","row-odd_styles_padding":"","row-odd_styles_display":"","row-odd_styles_show_advanced_css":"0","row-odd_styles_advanced":"","success-msg_styles_background-color":"","success-msg_styles_border":"","success-msg_styles_border-style":"","success-msg_styles_border-color":"","success-msg_styles_color":"","success-msg_styles_height":"","success-msg_styles_width":"","success-msg_styles_font-size":"","success-msg_styles_margin":"","success-msg_styles_padding":"","success-msg_styles_display":"","success-msg_styles_show_advanced_css":"0","success-msg_styles_advanced":"","error_msg_styles_background-color":"","error_msg_styles_border":"","error_msg_styles_border-style":"","error_msg_styles_border-color":"","error_msg_styles_color":"","error_msg_styles_height":"","error_msg_styles_width":"","error_msg_styles_font-size":"","error_msg_styles_margin":"","error_msg_styles_padding":"","error_msg_styles_display":"","error_msg_styles_show_advanced_css":"0","error_msg_styles_advanced":"","ninjaForms":"Ninja Forms","changeEmailErrorMsg":"Please enter a valid email address!","changeDateErrorMsg":"Please enter a valid date!","confirmFieldErrorMsg":"These fields must match!","fieldNumberNumMinError":"Number Min Error","fieldNumberNumMaxError":"Number Max Error","fieldNumberIncrementBy":"Please increment by ","fieldTextareaRTEInsertLink":"Insert Link","fieldTextareaRTEInsertMedia":"Insert Media","fieldTextareaRTESelectAFile":"Select a file","formErrorsCorrectErrors":"Please correct errors before submitting this form.","formHoneypot":"If you are a human seeing this field, please leave it empty.","validateRequiredField":"This is a required field.","honeypotHoneypotError":"Honeypot Error","fileUploadOldCodeFileUploadInProgress":"File Upload in Progress.","fileUploadOldCodeFileUpload":"FILE UPLOAD","currencySymbol":false,"fieldsMarkedRequired":"Fields marked with an <span class=\"ninja-forms-req-symbol\">*<\/span> are required","thousands_sep":",","decimal_point":".","siteLocale":"en_US","dateFormat":"m\/d\/Y","startOfWeek":"0","of":"of","previousMonth":"Previous Month","nextMonth":"Next Month","months":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthsShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"weekdays":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"weekdaysShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"weekdaysMin":["Su","Mo","Tu","We","Th","Fr","Sa"],"embed_form":"","currency_symbol":"","beforeForm":"","beforeFields":"","afterFields":"","afterForm":""};form.fields=[{"label":"Name","key":"name","parent_id":1,"type":"textbox","created_at":"2021-06-10 13:02:47","label_pos":"above","required":1,"order":1,"placeholder":"","default":"","wrapper_class":"","element_class":"","objectType":"Field","objectDomain":"fields","editActive":"","container_class":"","input_limit":"","input_limit_type":"characters","input_limit_msg":"Character(s) left","manual_key":"","disable_input":"","admin_label":"","help_text":"","desc_text":"","disable_browser_autocomplete":"","mask":"","custom_mask":"","wrap_styles_background-color":"","wrap_styles_border":"","wrap_styles_border-style":"","wrap_styles_border-color":"","wrap_styles_color":"","wrap_styles_height":"","wrap_styles_width":"","wrap_styles_font-size":"","wrap_styles_margin":"","wrap_styles_padding":"","wrap_styles_display":"","wrap_styles_float":"","wrap_styles_show_advanced_css":0,"wrap_styles_advanced":"","label_styles_background-color":"","label_styles_border":"","label_styles_border-style":"","label_styles_border-color":"","label_styles_color":"","label_styles_height":"","label_styles_width":"","label_styles_font-size":"","label_styles_margin":"","label_styles_padding":"","label_styles_display":"","label_styles_float":"","label_styles_show_advanced_css":0,"label_styles_advanced":"","element_styles_background-color":"","element_styles_border":"","element_styles_border-style":"","element_styles_border-color":"","element_styles_color":"","element_styles_height":"","element_styles_width":"","element_styles_font-size":"","element_styles_margin":"","element_styles_padding":"","element_styles_display":"","element_styles_float":"","element_styles_show_advanced_css":0,"element_styles_advanced":"","cellcid":"c3277","id":1,"beforeField":"","afterField":"","value":"","parentType":"textbox","element_templates":["textbox","input"],"old_classname":"","wrap_template":"wrap"},{"label":"Email","key":"email","parent_id":1,"type":"email","created_at":"2021-06-10 13:02:47","label_pos":"above","required":1,"order":2,"placeholder":"","default":"","wrapper_class":"","element_class":"","objectType":"Field","objectDomain":"fields","editActive":"","container_class":"","admin_label":"","help_text":"","desc_text":"","wrap_styles_background-color":"","wrap_styles_border":"","wrap_styles_border-style":"","wrap_styles_border-color":"","wrap_styles_color":"","wrap_styles_height":"","wrap_styles_width":"","wrap_styles_font-size":"","wrap_styles_margin":"","wrap_styles_padding":"","wrap_styles_display":"","wrap_styles_float":"","wrap_styles_show_advanced_css":0,"wrap_styles_advanced":"","label_styles_background-color":"","label_styles_border":"","label_styles_border-style":"","label_styles_border-color":"","label_styles_color":"","label_styles_height":"","label_styles_width":"","label_styles_font-size":"","label_styles_margin":"","label_styles_padding":"","label_styles_display":"","label_styles_float":"","label_styles_show_advanced_css":0,"label_styles_advanced":"","element_styles_background-color":"","element_styles_border":"","element_styles_border-style":"","element_styles_border-color":"","element_styles_color":"","element_styles_height":"","element_styles_width":"","element_styles_font-size":"","element_styles_margin":"","element_styles_padding":"","element_styles_display":"","element_styles_float":"","element_styles_show_advanced_css":0,"element_styles_advanced":"","cellcid":"c3281","id":2,"beforeField":"","afterField":"","value":"","parentType":"email","element_templates":["email","input"],"old_classname":"","wrap_template":"wrap"},{"label":"Message","key":"message","parent_id":1,"type":"textarea","created_at":"2021-06-10 13:02:47","label_pos":"above","required":1,"order":3,"placeholder":"","default":"","wrapper_class":"","element_class":"","objectType":"Field","objectDomain":"fields","editActive":"","container_class":"","input_limit":"","input_limit_type":"characters","input_limit_msg":"Character(s) left","manual_key":"","disable_input":"","admin_label":"","help_text":"","desc_text":"","disable_browser_autocomplete":"","textarea_rte":"","disable_rte_mobile":"","textarea_media":"","wrap_styles_background-color":"","wrap_styles_border":"","wrap_styles_border-style":"","wrap_styles_border-color":"","wrap_styles_color":"","wrap_styles_height":"","wrap_styles_width":"","wrap_styles_font-size":"","wrap_styles_margin":"","wrap_styles_padding":"","wrap_styles_display":"","wrap_styles_float":"","wrap_styles_show_advanced_css":0,"wrap_styles_advanced":"","label_styles_background-color":"","label_styles_border":"","label_styles_border-style":"","label_styles_border-color":"","label_styles_color":"","label_styles_height":"","label_styles_width":"","label_styles_font-size":"","label_styles_margin":"","label_styles_padding":"","label_styles_display":"","label_styles_float":"","label_styles_show_advanced_css":0,"label_styles_advanced":"","element_styles_background-color":"","element_styles_border":"","element_styles_border-style":"","element_styles_border-color":"","element_styles_color":"","element_styles_height":"","element_styles_width":"","element_styles_font-size":"","element_styles_margin":"","element_styles_padding":"","element_styles_display":"","element_styles_float":"","element_styles_show_advanced_css":0,"element_styles_advanced":"","cellcid":"c3284","id":3,"beforeField":"","afterField":"","value":"","parentType":"textarea","element_templates":["textarea","input"],"old_classname":"","wrap_template":"wrap"},{"label":"Submit","key":"submit","parent_id":1,"type":"submit","created_at":"2021-06-10 13:02:47","processing_label":"Processing","order":5,"objectType":"Field","objectDomain":"fields","editActive":"","container_class":"","element_class":"","wrap_styles_background-color":"","wrap_styles_border":"","wrap_styles_border-style":"","wrap_styles_border-color":"","wrap_styles_color":"","wrap_styles_height":"","wrap_styles_width":"","wrap_styles_font-size":"","wrap_styles_margin":"","wrap_styles_padding":"","wrap_styles_display":"","wrap_styles_float":"","wrap_styles_show_advanced_css":0,"wrap_styles_advanced":"","label_styles_background-color":"","label_styles_border":"","label_styles_border-style":"","label_styles_border-color":"","label_styles_color":"","label_styles_height":"","label_styles_width":"","label_styles_font-size":"","label_styles_margin":"","label_styles_padding":"","label_styles_display":"","label_styles_float":"","label_styles_show_advanced_css":0,"label_styles_advanced":"","element_styles_background-color":"","element_styles_border":"","element_styles_border-style":"","element_styles_border-color":"","element_styles_color":"","element_styles_height":"","element_styles_width":"","element_styles_font-size":"","element_styles_margin":"","element_styles_padding":"","element_styles_display":"","element_styles_float":"","element_styles_show_advanced_css":0,"element_styles_advanced":"","submit_element_hover_styles_background-color":"","submit_element_hover_styles_border":"","submit_element_hover_styles_border-style":"","submit_element_hover_styles_border-color":"","submit_element_hover_styles_color":"","submit_element_hover_styles_height":"","submit_element_hover_styles_width":"","submit_element_hover_styles_font-size":"","submit_element_hover_styles_margin":"","submit_element_hover_styles_padding":"","submit_element_hover_styles_display":"","submit_element_hover_styles_float":"","submit_element_hover_styles_show_advanced_css":0,"submit_element_hover_styles_advanced":"","cellcid":"c3287","id":4,"beforeField":"","afterField":"","value":"","label_pos":"above","parentType":"textbox","element_templates":["submit","button","input"],"old_classname":"","wrap_template":"wrap-no-label"}];nfForms.push(form);</script>
<script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script>
<script>var screenReaderText = {"expand":"expand child menu","collapse":"collapse child menu"};</script>
<script src="http://example.org/wp-includes/js/comment-reply.min.js?ver=5.7" id="comment-reply-js"></script>
<script type="module" src="http://example.org/wp-content/plugins/module/test.js"></script>
<script id="astra-theme-js-js-extra">var astra = {"break_point:"921","isRtl:""};</script>
<script type="text/javascript">
    /* <![CDATA[ */
    var wpforms_settings = {
        val_required: "This field is required.",
        val_url: "Please enter a valid URL.",
        val_email: "Please enter a valid email address.",
        val_email_suggestion: "Did you mean {suggestion}?",
        val_email_suggestion_title: "Click to accept this suggestion.",
        val_email_restricted: "This email address is not allowed.",
        val_number: "Please enter a valid number.",
        val_number_positive: "Please enter a valid positive number.",
        val_confirm: "Field values do not match.",
        val_fileextension: "File type is not allowed.",
        val_filesize: "File exceeds max size allowed. File was not uploaded.",
        val_time12h: "Please enter time in 12-hour AM\/PM format (eg 8:45 AM).",
        val_time24h: "Please enter time in 24-hour format (eg 22:45).",
        val_requiredpayment: "Payment is required.",
        val_creditcard: "Please enter a valid credit card number.",
        val_post_max_size: "The total size of the selected files {totalSize} Mb exceeds the allowed limit {maxSize} Mb.",
        val_checklimit: "You have exceeded the number of allowed selections: {#}.",
        val_limit_characters: "{count} of {limit} max characters.",
        val_limit_words: "{count} of {limit} max words.",
        val_recaptcha_fail_msg: "Google reCAPTCHA verification failed, please try again later.",
        val_empty_blanks: "Please fill out all blanks.",
        post_max_size: "104857600",
        uuid_cookie: "",
        locale: "en",
        wpforms_plugin_url: "https:\/\/domain.com\/wp-content\/plugins\/wpforms-lite\/",
        gdpr: "",
        ajaxurl: "https:\/\/domain.com\/wp-admin\/admin-ajax.php",
        mailcheck_enabled: "1",
        mailcheck_domains: [],
        mailcheck_toplevel_domains: ["dev"],
        is_ssl: "1",
    };
    /* ]]> */
</script>
<script type="invalid-type">alert("invalid-type");</script>
<script type="module123">alert("invalid-type");</script>
<script type="text/javascript">alert("text/javascript");</script>
<script type="text/x-javascript">alert("text/x-javascript");</script>
<script type="text/ecmascript">alert("text/ecmascript");</script>
<script type="text/jscript">alert("text/jscript");</script>
<script type="application/javascript">alert("application/javascript");</script>
<script type="application/x-javascript">alert("application/x-javascript");</script>
<script type="application/ecmascript">alert("application/ecmascript");</script>
<script type="module">alert("module");</script>
<script src=\'https://stats.wp.com/e-202124.js\' defer></script>
<script>
	_stq = window._stq || [];
	_stq.push([ \'view\', {v:\'ext\',j:\'1:9.8.1\',blog:\'11111111\',post:\'39721\',tz:\'-5\',srv:\'example.com\'} ]);
	_stq.push([ \'clickTrackerInit\', \'11111111\', \'39721\' ]);
</script>
<script>window.ninja_table_instance_0={table_id:"1067",title:"MYGA Rates National - Sheet1.csv (Imported From Table Press)",caption:"",columns:[{name:"companyname",key:"companyname",title:"Company Name",breakpoints:"",type:"text",visible:!0,classes:["ninja_column_0","ninja_clmn_nm_companyname"],filterable:!0,sortable:!1,original:{key:"companyname",name:"Company Name",breakpoints:"",data_type:"text",dateFormat:"",enable_html_content:"false",header_html_content:"",contentAlign:"left",textAlign:"left",maxWidthUnit:"px",unsortable:"yes"}}]};</script>
<script data-cfasync="false" data-pagespeed-no-defer type="text/javascript">//<![CDATA[
	var gtm4wp_datalayer_name = "dataLayer";
	var dataLayer = dataLayer || [];
	var gtm4wp_use_sku_instead        = 1;
	var gtm4wp_id_prefix              = \'\';
	var gtm4wp_remarketing            = false;
	var gtm4wp_eec                    = 1;
	var gtm4wp_classicec              = 1;
	var gtm4wp_currency               = \'USD\';
	var gtm4wp_product_per_impression = 10;
	var gtm4wp_needs_shipping_address = false;
	var gtm4wp_business_vertical      = \'retail\';
	var gtm4wp_business_vertical_id   = \'id\';

	var gtm4wp_scrollerscript_debugmode         = false;
	var gtm4wp_scrollerscript_callbacktime      = 100;
	var gtm4wp_scrollerscript_readerlocation    = 150;
	var gtm4wp_scrollerscript_contentelementid  = "content";
	var gtm4wp_scrollerscript_scannertime       = 60;
//]]>
</script>
<script data-cfasync="false" data-pagespeed-no-defer type="text/javascript">//<![CDATA[
	var dataLayer_content = {"visitorDoNotTrack":1,"pagePostType":"product","pagePostType2":"single-product","pagePostAuthor":"remy","productRatingCounts":[],"productAverageRating":0,"productReviewCount":0,"productType":"simple","productIsVariable":0,"event":"gtm4wp.changeDetailViewEEC","ecommerce":{"currencyCode":"CAD","detail":{"products":[{"id":1762,"name":"Beanie","sku":1762,"category":"Accessories","price":18,"stocklevel":null}]}}};
	dataLayer.push( dataLayer_content );//]]>
</script>
<script>
	var corner_video = \'left\';

	function handlePixMessage (e) {
	// Reference to element for data display
	let regexServed = /served-by.pixfuture.com/g;
	let regexDFP = /.googlesyndication.com/g;

	if ( e.origin.match(regexServed) != null || e.origin.match(regexDFP) != null) {
	e.source.postMessage(\' {"pixHashes":true} \', e.origin);
	}
	}
	window.addEventListener("message", handlePixMessage, false);
	var _pixHashes = \'{"pixHashes":true}\';
</script>
<script src="http://cdn.pixfuture.com/hb_v2.js"></script>
<script src="http://cdn.pixfuture.com/pbix.js"></script>
<script src="http://served-by.pixfuture.com/www/delivery/ads.js"></script>
<script src="http://served-by.pixfuture.com/www/delivery/headerbid_sticky_refresh.js"></script>
<script src="http://serv-vdo.pixfuture.com/vpaid/ads.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous">
</script>
<script type="text/javascript" src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js"></script>
<script src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js" type="text/javascript"></script>
<script type = "" src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js"></script>
<script src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js" type = ""></script>
<script type="" src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js"></script>
<script type src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js"></script>
<script src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js" type></script>
<script src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js" type ></script>
<script>
function wprRemoveCPCSS() {
	let preload_stylesheets = document.querySelectorAll( \'link[data-rocket-async="style"][rel="preload"]\' );
	if ( preload_stylesheets && preload_stylesheets.length > 0 ) {
		for ( let stylesheet_index = 0;stylesheet_index < preload_stylesheets.length;stylesheet_index++ ){
			let media = preload_stylesheets[stylesheet_index].getAttribute(\'media\') || \'all\';
			if( window.matchMedia(media).matches ){
				setTimeout( wprRemoveCPCSS, 200 );
				return;
			}
		}
	}

	const elem = document.getElementById( \'rocket-critical-css\' );
	if ( elem && \'remove\' in elem ) {
		elem.remove();
	}
}

if ( window.addEventListener ) {
	window.addEventListener( \'load\', wprRemoveCPCSS );
} else if ( window.attachEvent ) {
	window.attachEvent( \'onload\', wprRemoveCPCSS );
}
</script>
<script>
window.wsf_form_json_config = {};
</script>
<script id="print-helloworld" type="application/jscript">
	console.log("Hello world application/jscript!");
</script>
<script id="print-helloworld" type="text/javascript">
	console.log("Hello world application/jscript!");
</script>
</body>
</html>';

$delay_html_upgrade = '<html>
<head>
	<script src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js"></script>
	<script src="http://example.org/wp-includes/js/jquery/jquery.min.js?ver=3.5.1"></script>
	<script src="http://example.org/wp-content/plugins/wp-smush/assets/js/smush-lazy-load.min.js"></script>
	<script src="http://example.org/wp-content/plugins/wp-smush/assets/js/smush-lazy-load-native.min.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/lazysizes-pre.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/lazysizes.min.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/lazysizes-post.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer-cloud/includes/lazysizes.min.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/load_webp.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/load_webp.min.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/load-webp.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/load-webp.min.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/check-webp.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/check-webp.min.js"></script>
	<script src="http://example.org/wp-content/plugins/autoptimize/classes/external/js/lazysizes.min.js"></script>
	<script src="http://example.org/wp-content/themes/avada/assets/js/library/lazysizes.js"></script>
	<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.js">< / script>
	<script src="https://tests.local/wp-includes/js/wp-embed.min.js?ver=5.7" id="wp-embed-js"></script>
	<script src="http://example.org/wp-content/plugins/sitepress-multilingual-cms/dist/js/browser-redirect/app.js"></script>
	<script type="text/javascript" async="async" data-noptimize="1" data-cfasync="false" src="//scripts.mediavine.com/tags/test.js"></script>
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"http://example.org/#website","url":"http://example.org/"]}</script>
	<script class=\'jdgm-settings-script\'>window.jdgmSettings={"pagination":5,"badge_no_review_text":"0 reviews","badge_n_reviews_text":"{{ n }} Review/Reviews","badge_star_color":"#ffde00","hide_badge_preview_if_no_reviews":true,"widget_title":"Echte klantreviews","widget_open_form_text":"Scrhijf jouw review","widget_close_form_text":"Cancel","widget_refresh_page_text":"Ververs pagina","widget_summary_text":"Gebaseerd op {{ number_of_reviews }} review/reviews","widget_no_review_text":"Nog geen reviews","widget_name_field_text":"Naam","widget_verified_name_field_text":"Geverifieerde naam (public)","widget_name_placeholder_text":"Voer je naam in (public)","widget_required_field_error_text":"Dit veld is verplicht","widget_email_field_text":"E-mail","widget_verified_email_field_text":"Geverifieerd e-mailadres (privé, kan niet worden bewerkt)","widget_email_placeholder_text":"Voer je e-mailadres in (privé)","widget_email_field_error_text":"Gelieve een geldig e-mailadres in te geven.","widget_rating_field_text":"Review","widget_review_title_field_text":"Review Titel","widget_review_title_placeholder_text":"Geef je review een titel","widget_review_body_field_text":"Review","widget_review_body_placeholder_text":"Geef jouw mening","widget_pictures_field_text":"Foto\'s of video (optie)","widget_submit_review_text":"Verstuur review","widget_submit_verified_review_text":"Verstuur review","widget_submit_success_msg_with_auto_publish":"Bedankt voor je review! Als je je pagina ververst kun je jouw vers geschreven review teruglezen. Je kunt \'m zelfs delen via social media.","widget_submit_success_msg_no_auto_publish":"Bedankt voor je review! Je review word eerst beoordeeld. Je kunt \'m later ook delen via social media.","widget_show_default_reviews_out_of_total_text":"{{ n_reviews_shown }} wordt weergegeven bij {{ n_reviews }} beoordelingen.","widget_show_all_link_text":"Toon alles","widget_show_less_link_text":"Laat minder zien","widget_author_said_text":"{{ reviewer_name }} zei:","widget_days_text":"{{ n }} dagen geleden","widget_weeks_text":"{{ n }} week/weken geleden","widget_months_text":"{{ n }} maanden/maanden geleden","widget_years_text":"{{ n }} jaar/jaar geleden","widget_yesterday_text":"Gisteren","widget_today_text":"Vandaag","widget_replied_text":"Reactie van {{ shop_name }}:","widget_read_more_text":"Lees meer","widget_reviewer_name_as_initial":"last_initial","widget_rating_filter_see_all_text":"Alle beoordelingen bekijken","widget_sorting_most_recent_text":"Meest recent","widget_sorting_highest_rating_text":"Hoogste beoordeling","widget_sorting_lowest_rating_text":"Laagste beoordeling","widget_sorting_with_pictures_text":"Alleen foto\'s","widget_sorting_most_helpful_text":"Meest behulpzaam","widget_open_question_form_text":"Stel een vraag","widget_reviews_subtab_text":"Review","widget_questions_subtab_text":"Vragen","widget_question_label_text":"Vragen","widget_answer_label_text":"Antwoorden","widget_question_placeholder_text":"Schrijf je vraag","widget_submit_question_text":"Verstuur je vraag","widget_question_submit_success_text":"Bedankt voor je vraag! We zullen u op de hoogte stellen en uw vraag zal worden gepubliceerd zodra deze is beantwoord.","widget_star_color":"#ffd600","verified_badge_text":"Geverifieerd ","verified_badge_placement":"left-of-reviewer-name","widget_review_max_height":4,"widget_social_share":true,"widget_thumb":true,"widget_review_location_show":true,"widget_location_format":"country_iso_code","all_reviews_include_out_of_store_products":true,"all_reviews_out_of_store_text":"(uit winkel)","all_reviews_product_name_prefix_text":"over","enable_review_pictures":true,"enable_question_anwser":true,"review_date_format":"dd/mm/yyyy","default_sort_method":"most-helpful","widget_product_reviews_subtab_text":"Product recensies","widget_shop_reviews_subtab_text":"Winkel beoordelingen","show_product_url_for_grouped_product":true,"widget_sorting_pictures_first_text":"Foto\'s eerst","show_pictures_on_all_rev_page_mobile":true,"show_pictures_on_all_rev_page_desktop":true,"floating_tab_button_name":"★ Judge.me beoordelingen","floating_tab_title":"Laat klanten voor ons spreken","all_reviews_text_badge_text":"Klanten beoordelen ons {{ shop.metafields.judgeme.all_reviews_rating | round: 1 }}/5 gebaseerd op {{ shop.metafields.judgeme.all_reviews_count }} - recensies.","featured_carousel_title":"Laat klanten voor ons spreken","featured_carousel_count_text":"van {{ n }} recensies","featured_carousel_autoslide_interval":0,"featured_carousel_image_size":300,"featured_carousel_arrow_color":"#575757","picture_reminder_submit_button":"Upload afbeeldingen","enable_review_videos":true,"mute_video_by_default":true,"widget_sorting_videos_first_text":"Video\'s eerst","widget_review_pending_text":"In afwachting","social_share_options_order":"Facebook,Twitter,Pinterest,LinkedIn","preview_badge_show_question_text":true,"preview_badge_no_question_text":"0 Productvragen","preview_badge_n_question_text":"{{ number_of_questions }} vraag/vragen","qa_badge_show_icon":true,"widget_add_search_bar":true,"widget_search_bar_placeholder":"Doorzoek reviews","widget_sorting_verified_only_text":"Alleen geverifieerd","featured_carousel_theme":"aligned","featured_carousel_full_star_background":"#ffd600","all_reviews_page_load_more_text":"Laad meer recensies","widget_public_name_text":"openbaar weergegeven als","widget_reviewer_anonymous":"Anoniem","medals_widget_title":"Judge.me Review-medailles","platform":"woocommerce","branding_url":"https://judge.me/reviews","branding_text":"Via Judge.me","locale":"nl","reply_name":"Grill Bill Kamado BBQ","footer":true,"autopublish":true,"review_dates":true,"enable_custom_form":true};</script>
	<script>var et_site_url=\'http://example.org\';var et_post_id=\'2\';function et_core_page_resource_fallback(a,b){"undefined"===typeof b&&(b=a.sheet.cssRules&&0===a.sheet.cssRules.length);b&&(a.onerror=null,a.onload=null,a.href?a.href=et_site_url+"/?et_core_page_resource="+a.id+et_post_id:a.src&&(a.src=et_site_url+"/?et_core_page_resource="+a.id+et_post_id))}
	</script>
	<script>var lepopup_customjs_handlers={};var lepopup_cookie_value="1624338829";var lepopup_events_data={};var lepopup_content_id="23638";</script>
	<script>
		// Store some global theme options used in JS
		if ( window.$us === undefined ) {
			window.$us = {};
		}
		$us.canvasOptions = ( $us.canvasOptions || {} );
		$us.canvasOptions.disableEffectsWidth = 900;
		$us.canvasOptions.columnsStackingWidth = 768;
		$us.canvasOptions.backToTopDisplay = 100;
		$us.canvasOptions.scrollDuration = 1000;

		$us.langOptions = ( $us.langOptions || {} );
		$us.langOptions.magnificPopup = ( $us.langOptions.magnificPopup || {} );
		$us.langOptions.magnificPopup.tPrev = \'Previous (Left arrow key)\';
		$us.langOptions.magnificPopup.tNext = \'Next (Right arrow key)\';
		$us.langOptions.magnificPopup.tCounter = \'%curr% of %total%\';

		$us.navOptions = ( $us.navOptions || {} );
		$us.navOptions.mobileWidth = 900;
		$us.navOptions.togglable = true;
		$us.ajaxLoadJs = true;
		$us.templateDirectoryUri = \'/wp-content/themes/Impreza\';
	</script>
	<script>if ( window.$us === undefined ) window.$us = {};</script>
	<script>fusionNavIsCollapsed</script>
	<script>var eio_lazy_vars = {"exactdn_domain":"evp4mrv2nwt.exactdn.com","skip_autoscale":"0","threshold":"0"};</script>
	<script>document.body.classList.remove("no-js")</script>
	<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
		window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/tests.local\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7.1"}};
		!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
	</script>
	<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
		(function($) {
				var analytics_code = "<!-- Global site tag (gtag.js) - Google Analytics -->\n<script async src=\"https:\/\/www.googletagmanager.com\/gtag\/js?id=XXX\"><\/script>\n<script>\n  window.dataLayer = window.dataLayer || [];\n  function gtag(){dataLayer.push(arguments);}\n  gtag(\'js\', new Date());\n\n  gtag(\'config\', \'XXX\');\n<\/script>".replace(/\"/g, \'"\' );
		})( jQuery );
	</script>
	<script>function cpLoadCSS(e,t,n){"use strict";var i=window.document.createElement("link"),o=t||window.document.getElementsByTagName("script")[0];return i.rel="stylesheet",i.href=e,i.media="only x",o.parentNode.insertBefore(i,o),setTimeout(function(){i.media=n||"all"}),i}</script>
	<script>document.addEventListener(\'DOMContentLoaded\', function(event) {  if( typeof cpLoadCSS !== \'undefined\' ) { cpLoadCSS(\'https://example.org/wp-content/plugins/convertpro/assets/modules/css/cp-popup.min.css?ver=1.7.0\', 0, \'all\'); } }); </script>
	<script type="text/javascript">this.initCubePortfolio =  this.initCubePortfolio || []; this.initCubePortfolio.push({id: 23, options: {"filters":"#cbpw-filters23","loadMore":"","loadMoreAction":"click","search":"","layoutMode":"grid","sortToPreventGaps":true,"drag":true,"auto":false,"autoTimeout":5000,"autoPauseOnHover":true,"showNavigation":true,"showPagination":true,"rewindNav":true,"scrollByPage":false,"defaultFilter":"*","filterDeeplinking":false,"animationType":"fadeOut","gridAdjustment":"responsive","mediaQueries":[{"width":1400,"cols":3},{"width":1170,"cols":3},{"width":1024,"cols":3},{"width":960,"cols":3},{"width":778,"cols":3},{"width":640,"cols":2},{"width":480,"cols":2}],"gapHorizontal":0,"gapVertical":0,"caption":"zoom","displayType":"fadeIn","displayTypeSpeed":400,"lightboxDelegate":".cbp-lightbox","lightboxGallery":true,"lightboxTitleSrc":"data-title","lightboxCounter":"<div class=\"cbp-popup-lightbox-counter\">{{current}} of {{total}}</div>","singlePageDelegate":".cbp-singlePage","singlePageDeeplinking":true,"singlePageStickyNavigation":true,"singlePageCounter":"<div class=\"cbp-popup-singlePage-counter\">{{current}} of {{total}}</div>","singlePageAnimation":"middle","singlePageInlineDelegate":".cbp-singlePageInline","singlePageInlineDeeplinking":false,"singlePageInlinePosition":"top","singlePageInlineInFocus":true,"plugins":{},"cols":3,"coverRatio":""}});</script>
	<script data-cfasync="false" type="text/javascript">var Arrive=function(d,e,w){"use strict";if(d.MutationObserver&&"undefined"!=typeof HTMLElement){var a,t,r=0,c=(a=HTMLElement.prototype.matches||HTMLElement.prototype.webkitMatchesSelector||HTMLElement.prototype.mozMatchesSelector||HTMLElement.prototype.msMatchesSelector,{matchesSelector:function(e,t){return e instanceof HTMLElement&&a.call(e,t)},addMethod:function(e,t,a){var r=e[t];e[t]=function(){return a.length==arguments.length?a.apply(this,arguments):"function"==typeof r?r.apply(this,arguments):void 0}},callCallbacks:function(e,t){t&&t.options.onceOnly&&1==t.firedElems.length&&(e=[e[0]]);for(var a,r=0;a=e[r];r++)a&&a.callback&&a.callback.call(a.elem,a.elem);t&&t.options.onceOnly&&1==t.firedElems.length&&t.me.unbindEventWithSelectorAndCallback.call(t.target,t.selector,t.callback)},checkChildNodesRecursively:function(e,t,a,r){for(var i,n=0;i=e[n];n++)a(i,t,r)&&r.push({callback:t.callback,elem:i}),0<i.childNodes.length&&c.checkChildNodesRecursively(i.childNodes,t,a,r)},mergeArrays:function(e,t){var a,r={};for(a in e)e.hasOwnProperty(a)&&(r[a]=e[a]);for(a in t)t.hasOwnProperty(a)&&(r[a]=t[a]);return r},toElementsArray:function(e){return void 0===e||"number"==typeof e.length&&e!==d||(e=[e]),e}}),u=((t=function(){this._eventsBucket=[],this._beforeAdding=null,this._beforeRemoving=null}).prototype.addEvent=function(e,t,a,r){var i={target:e,selector:t,options:a,callback:r,firedElems:[]};return this._beforeAdding&&this._beforeAdding(i),this._eventsBucket.push(i),i},t.prototype.removeEvent=function(e){for(var t,a=this._eventsBucket.length-1;t=this._eventsBucket[a];a--)if(e(t)){this._beforeRemoving&&this._beforeRemoving(t);var r=this._eventsBucket.splice(a,1);r&&r.length&&(r[0].callback=null)}},t.prototype.beforeAdding=function(e){this._beforeAdding=e},t.prototype.beforeRemoving=function(e){this._beforeRemoving=e},t),l=function(i,n){var l=new u,o=this,s={fireOnAttributesModification:!1};return l.beforeAdding(function(t){var e,a=t.target;a!==d.document&&a!==d||(a=document.getElementsByTagName("html")[0]),e=new MutationObserver(function(e){n.call(this,e,t)});var r=i(t.options);e.observe(a,r),t.observer=e,t.me=o}),l.beforeRemoving(function(e){e.observer.disconnect()}),this.bindEvent=function(e,t,a){t=c.mergeArrays(s,t);for(var r=c.toElementsArray(this),i=0;i<r.length;i++)l.addEvent(r[i],e,t,a)},this.unbindEvent=function(){var a=c.toElementsArray(this);l.removeEvent(function(e){for(var t=0;t<a.length;t++)if(this===w||e.target===a[t])return!0;return!1})},this.unbindEventWithSelectorOrCallback=function(a){var e,r=c.toElementsArray(this),i=a;e="function"==typeof a?function(e){for(var t=0;t<r.length;t++)if((this===w||e.target===r[t])&&e.callback===i)return!0;return!1}:function(e){for(var t=0;t<r.length;t++)if((this===w||e.target===r[t])&&e.selector===a)return!0;return!1},l.removeEvent(e)},this.unbindEventWithSelectorAndCallback=function(a,r){var i=c.toElementsArray(this);l.removeEvent(function(e){for(var t=0;t<i.length;t++)if((this===w||e.target===i[t])&&e.selector===a&&e.callback===r)return!0;return!1})},this},i=new function(){var s={fireOnAttributesModification:!1,onceOnly:!1,existing:!1};function n(e,t,a){return!(!c.matchesSelector(e,t.selector)||(e._id===w&&(e._id=r++),-1!=t.firedElems.indexOf(e._id))||(t.firedElems.push(e._id),0))}var d=(i=new l(function(e){var t={attributes:!1,childList:!0,subtree:!0};return e.fireOnAttributesModification&&(t.attributes=!0),t},function(e,i){e.forEach(function(e){var t=e.addedNodes,a=e.target,r=[];null!==t&&0<t.length?c.checkChildNodesRecursively(t,i,n,r):"attributes"===e.type&&n(a,i)&&r.push({callback:i.callback,elem:a}),c.callCallbacks(r,i)})})).bindEvent;return i.bindEvent=function(e,t,a){t=void 0===a?(a=t,s):c.mergeArrays(s,t);var r=c.toElementsArray(this);if(t.existing){for(var i=[],n=0;n<r.length;n++)for(var l=r[n].querySelectorAll(e),o=0;o<l.length;o++)i.push({callback:a,elem:l[o]});if(t.onceOnly&&i.length)return a.call(i[0].elem,i[0].elem);setTimeout(c.callCallbacks,1,i)}d.call(this,e,t,a)},i},o=new function(){var r={};function i(e,t){return c.matchesSelector(e,t.selector)}var n=(o=new l(function(){return{childList:!0,subtree:!0}},function(e,r){e.forEach(function(e){var t=e.removedNodes,a=[];null!==t&&0<t.length&&c.checkChildNodesRecursively(t,r,i,a),c.callCallbacks(a,r)})})).bindEvent;return o.bindEvent=function(e,t,a){t=void 0===a?(a=t,r):c.mergeArrays(r,t),n.call(this,e,t,a)},o};e&&g(e.fn),g(HTMLElement.prototype),g(NodeList.prototype),g(HTMLCollection.prototype),g(HTMLDocument.prototype),g(Window.prototype);var n={};return s(i,n,"unbindAllArrive"),s(o,n,"unbindAllLeave"),n}function s(e,t,a){c.addMethod(t,a,e.unbindEvent),c.addMethod(t,a,e.unbindEventWithSelectorOrCallback),c.addMethod(t,a,e.unbindEventWithSelectorAndCallback)}function g(e){e.arrive=i.bindEvent,s(i,e,"unbindArrive"),e.leave=o.bindEvent,s(o,e,"unbindLeave")}}(window,"undefined"==typeof jQuery?null:jQuery,void 0),ewww_webp_supported=!1;function check_webp_feature(e,t){if(ewww_webp_supported)t(ewww_webp_supported);else{var a=new Image;a.onload=function(){ewww_webp_supported=0<a.width&&0<a.height,t(ewww_webp_supported)},a.onerror=function(){t(!1)},a.src="data:image/webp;base64,"+{alpha:"UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA==",animation:"UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA"}[e]}}function ewwwLoadImages(e){var n="data-";function t(e,t){for(var a=["accesskey","align","alt","border","class","contenteditable","contextmenu","crossorigin","dir","draggable","dropzone","height","hidden","hspace","id","ismap","lang","longdesc","sizes","spellcheck","style","tabindex","title","translate","usemap","vspace","width","data-animation","data-attachment-id","data-auto-height","data-caption","data-comments-opened","data-delay","data-event-trigger","data-flex_fx","data-height","data-hide-on-end","data-highlight-color","data-highlight-border-color","data-highlight-border-opacity","data-highlight-border-width","data-highlight-opacity","data-image-meta","data-image-title","data-image-description","data-interval","data-large_image_width","data-large_image_height","data-lazy","data-lazy-type","data-mode","data-name","data-no-lazy","data-orig-size","data-partial","data-per-view","data-permalink","data-pin-description","data-pin-id","data-pin-media","data-pin-url","data-rel","data-ride","data-shadow","data-shadow-direction","data-slide","data-slide-to","data-target","data-vc-zoom","data-width","data-wrap"],r=0,i=a.length;r<i;r++)ewwwAttr(t,a[r],e.getAttribute(n+a[r]));return t}if(e){for(var a=document.querySelectorAll(".batch-image img, .image-wrapper a, .ngg-pro-masonry-item a, .ngg-galleria-offscreen-seo-wrapper a"),r=0,i=a.length;r<i;r++)ewwwAttr(a[r],"data-src",a[r].getAttribute("data-webp")),ewwwAttr(a[r],"data-thumbnail",a[r].getAttribute("data-webp-thumbnail"));for(r=0,i=(o=document.querySelectorAll(".rev_slider ul li")).length;r<i;r++){ewwwAttr(o[r],"data-thumb",o[r].getAttribute("data-webp-thumb"));for(var l=1;l<11;)ewwwAttr(o[r],"data-param"+l,o[r].getAttribute("data-webp-param"+l)),l++}var o;for(r=0,i=(o=document.querySelectorAll(".rev_slider img")).length;r<i;r++)ewwwAttr(o[r],"data-lazyload",o[r].getAttribute("data-webp-lazyload"));var s=document.querySelectorAll("div.woocommerce-product-gallery__image");for(r=0,i=s.length;r<i;r++)ewwwAttr(s[r],"data-thumb",s[r].getAttribute("data-webp-thumb"))}var d=document.querySelectorAll("video");for(r=0,i=d.length;r<i;r++)ewwwAttr(d[r],"poster",e?d[r].getAttribute("data-poster-webp"):d[r].getAttribute("data-poster-image"));var w=document.querySelectorAll("img.ewww_webp_lazy_load");for(r=0,i=w.length;r<i;r++){if(e){ewwwAttr(w[r],"data-lazy-srcset",w[r].getAttribute("data-lazy-srcset-webp")),ewwwAttr(w[r],"data-srcset",w[r].getAttribute("data-srcset-webp")),ewwwAttr(w[r],"data-lazy-src",w[r].getAttribute("data-lazy-src-webp")),ewwwAttr(w[r],"data-src",w[r].getAttribute("data-src-webp")),ewwwAttr(w[r],"data-orig-file",w[r].getAttribute("data-webp-orig-file")),ewwwAttr(w[r],"data-medium-file",w[r].getAttribute("data-webp-medium-file")),ewwwAttr(w[r],"data-large-file",w[r].getAttribute("data-webp-large-file"));var c=w[r].getAttribute("srcset");null!=c&&!1!==c&&c.includes("R0lGOD")&&ewwwAttr(w[r],"src",w[r].getAttribute("data-lazy-src-webp"))}w[r].className=w[r].className.replace(/\bewww_webp_lazy_load\b/,"")}var u=document.querySelectorAll(".ewww_webp");for(r=0,i=u.length;r<i;r++){var g=document.createElement("img");e?(ewwwAttr(g,"src",u[r].getAttribute("data-webp")),ewwwAttr(g,"srcset",u[r].getAttribute("data-srcset-webp")),ewwwAttr(g,"data-orig-file",u[r].getAttribute("data-orig-file")),ewwwAttr(g,"data-orig-file",u[r].getAttribute("data-webp-orig-file")),ewwwAttr(g,"data-medium-file",u[r].getAttribute("data-medium-file")),ewwwAttr(g,"data-medium-file",u[r].getAttribute("data-webp-medium-file")),ewwwAttr(g,"data-large-file",u[r].getAttribute("data-large-file")),ewwwAttr(g,"data-large-file",u[r].getAttribute("data-webp-large-file")),ewwwAttr(g,"data-large_image",u[r].getAttribute("data-large_image")),ewwwAttr(g,"data-large_image",u[r].getAttribute("data-webp-large_image")),ewwwAttr(g,"data-src",u[r].getAttribute("data-src")),ewwwAttr(g,"data-src",u[r].getAttribute("data-webp-src"))):(ewwwAttr(g,"src",u[r].getAttribute("data-img")),ewwwAttr(g,"srcset",u[r].getAttribute("data-srcset-img")),ewwwAttr(g,"data-orig-file",u[r].getAttribute("data-orig-file")),ewwwAttr(g,"data-medium-file",u[r].getAttribute("data-medium-file")),ewwwAttr(g,"data-large-file",u[r].getAttribute("data-large-file")),ewwwAttr(g,"data-large_image",u[r].getAttribute("data-large_image")),ewwwAttr(g,"data-src",u[r].getAttribute("data-src"))),g=t(u[r],g),u[r].parentNode.insertBefore(g,u[r].nextSibling),u[r].className=u[r].className.replace(/\bewww_webp\b/,"")}window.jQuery&&jQuery.fn.isotope&&jQuery.fn.imagesLoaded&&(jQuery(".fusion-posts-container-infinite").imagesLoaded(function(){jQuery(".fusion-posts-container-infinite").hasClass("isotope")&&jQuery(".fusion-posts-container-infinite").isotope()}),jQuery(".fusion-portfolio:not(.fusion-recent-works) .fusion-portfolio-wrapper").imagesLoaded(function(){jQuery(".fusion-portfolio:not(.fusion-recent-works) .fusion-portfolio-wrapper").isotope()}))}function ewwwWebPInit(e){ewwwLoadImages(e),ewwwNggLoadGalleries(e),document.arrive(".ewww_webp",function(){ewwwLoadImages(e)}),document.arrive(".ewww_webp_lazy_load",function(){ewwwLoadImages(e)}),document.arrive("videos",function(){ewwwLoadImages(e)}),"loading"==document.readyState?document.addEventListener("DOMContentLoaded",ewwwJSONParserInit):("undefined"!=typeof galleries&&ewwwNggParseGalleries(e),ewwwWooParseVariations(e))}function ewwwAttr(e,t,a){null!=a&&!1!==a&&e.setAttribute(t,a)}function ewwwJSONParserInit(){"undefined"!=typeof galleries&&check_webp_feature("alpha",ewwwNggParseGalleries),check_webp_feature("alpha",ewwwWooParseVariations)}function ewwwWooParseVariations(e){if(e)for(var t=document.querySelectorAll("form.variations_form"),a=0,r=t.length;a<r;a++){var i=t[a].getAttribute("data-product_variations"),n=!1;try{for(var l in i=JSON.parse(i))void 0!==i[l]&&void 0!==i[l].image&&(void 0!==i[l].image.src_webp&&(i[l].image.src=i[l].image.src_webp,n=!0),void 0!==i[l].image.srcset_webp&&(i[l].image.srcset=i[l].image.srcset_webp,n=!0),void 0!==i[l].image.full_src_webp&&(i[l].image.full_src=i[l].image.full_src_webp,n=!0),void 0!==i[l].image.gallery_thumbnail_src_webp&&(i[l].image.gallery_thumbnail_src=i[l].image.gallery_thumbnail_src_webp,n=!0),void 0!==i[l].image.thumb_src_webp&&(i[l].image.thumb_src=i[l].image.thumb_src_webp,n=!0));n&&ewwwAttr(t[a],"data-product_variations",JSON.stringify(i))}catch(e){}}}function ewwwNggParseGalleries(e){if(e)for(var t in galleries){var a=galleries[t];galleries[t].images_list=ewwwNggParseImageList(a.images_list)}}function ewwwNggLoadGalleries(e){e&&document.addEventListener("ngg.galleria.themeadded",function(e,t){window.ngg_galleria._create_backup=window.ngg_galleria.create,window.ngg_galleria.create=function(e,t){var a=$(e).data("id");return galleries["gallery_"+a].images_list=ewwwNggParseImageList(galleries["gallery_"+a].images_list),window.ngg_galleria._create_backup(e,t)}})}function ewwwNggParseImageList(e){for(var t in e){var a=e[t];if(void 0!==a["image-webp"]&&(e[t].image=a["image-webp"],delete e[t]["image-webp"]),void 0!==a["thumb-webp"]&&(e[t].thumb=a["thumb-webp"],delete e[t]["thumb-webp"]),void 0!==a.full_image_webp&&(e[t].full_image=a.full_image_webp,delete e[t].full_image_webp),void 0!==a.srcsets)for(var r in a.srcsets)nggSrcset=a.srcsets[r],void 0!==a.srcsets[r+"-webp"]&&(e[t].srcsets[r]=a.srcsets[r+"-webp"],delete e[t].srcsets[r+"-webp"]);if(void 0!==a.full_srcsets)for(var i in a.full_srcsets)nggFSrcset=a.full_srcsets[i],void 0!==a.full_srcsets[i+"-webp"]&&(e[t].full_srcsets[i]=a.full_srcsets[i+"-webp"],delete e[t].full_srcsets[i+"-webp"])}return e}check_webp_feature("alpha",ewwwWebPInit);</script>
	<script>document.addEventListener("DOMContentLoaded",function(){var lazyLoadInstance=new LazyLoad({elements_selector:"[loading=lazy],.perfmatters-lazy",thresholds:"200% 0px",callback_loaded:function(element){if(element.tagName==="IFRAME"){if(element.classList.contains("loaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}});});function perfmattersLazyLoadYouTube(e){var iframe=document.createElement("iframe");var params="ID?autoplay=1";params+=0===e.dataset.query.length?"":"&"+e.dataset.query;iframe.setAttribute("src",params.replace("ID",e.dataset.src));iframe.setAttribute("frameborder","0");iframe.setAttribute("allowfullscreen","1");iframe.setAttribute("allow","accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture");e.replaceChild(iframe,e.firstChild)}</script>
</head>
<body>
<script>
	// Billing
	var billing_address =\' #billing_address_1\';
	var billing_city =\'\';
	var billing_state =\' #billing_city\';
	var billing_zip_code =\'\';
	var billing_country =\'\';
	var billing_county =\'\';
	var billing_additional_field =\'\';
	var country_restriction =\'HK\';
</script>
<script>var rbs_gallery_60d183e796fbf = {"version":"3.0.7","id":27381,"class":"id27381","roboGalleryDelay":1000,"mainContainer":"#robo_gallery_main_block_rbs_gallery_60d183e796fbf","loadingContainer":"#rbs_gallery_60d183e796fbf-block-loader","loadingContainerObj":"rbs_gallery_60d183e796fbf-block-loader","columnWidth":"auto","columns":3,"resolutions":[{"columnWidth":"auto","columns":3,"maxWidth":960},{"columnWidth":"auto","columns":2,"maxWidth":650},{"columnWidth":300,"maxWidth":450}],"descBox":true,"descBoxClass":"rbs_desc_panel_light","lightboxOptions":{"gallery":{"enabled":true,"tCounter":"%curr% of %total%"}},"facebook":true,"twitter":true,"pinterest":true,"overlayEffect":"direction-aware-fade","boxesToLoadStart":6,"boxesToLoad":6,"lazyLoad":1,"waitUntilThumbLoads":1,"LoadingWord":"Loading Videos...","loadMoreWord":"Loading More Videos","noMoreEntriesWord":"No More Videos","horizontalSpaceBetweenBoxes":15,"verticalSpaceBetweenBoxes":15,"noHoverOnMobile":"false","wrapContainer":"#robo-gallery-wrap-rbs_gallery_60d183e796fbf"};</script>
<script type="text/javascript">
window.fluent_form_ff_form_instance_1_1 = {"id":"1","settings":{"layout":{"labelPlacement":"top","helpMessagePlacement":"with_label","errorMessagePlacement":"inline","asteriskPlacement":"asterisk-right"},"id":"39","restrictions":{"denyEmptySubmission":{"enabled":false}}},"form_instance":"ff_form_instance_1_1","form_id_selector":"fluentform_1","rules":{"first_name[first_name]":{"required":{"value":false,"message":"This field is required"}},"first_name[middle_name]":{"required":{"value":false,"message":"This field is required"}},"first_name[last_name]":{"required":{"value":false,"message":"This field is required"}},"email":{"required":{"value":true,"message":"This field is required"},"email":{"value":true,"message":"This field must contain a valid email"}},"biggest_challenge":{"required":{"value":false,"message":"This field is required"}}}};
</script>
<script type="text/javascript">
	var et_animation_data = [{"class":"et_pb_cta_0","style":"slideLeft","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"50%","starting_opacity":"0%","speed_curve":"ease-in-out"}];
</script>
<script>var formDisplay=1;var nfForms=nfForms||[];var form=[];form.id="1";form.settings={"title":"Contact Me","key":"","created_at":"2021-06-10 13:02:47","default_label_pos":"above","conditions":[],"objectType":"Form Setting","editActive":"","show_title":"1","clear_complete":"1","hide_complete":"1","wrapper_class":"","element_class":"","add_submit":"1","logged_in":"","not_logged_in_msg":"","sub_limit_number":"","sub_limit_msg":"","calculations":[],"formContentData":[{"order":"0","cells":[{"order":"0","fields":["name"],"width":"100"}]},{"order":"1","cells":[{"order":"0","fields":["email"],"width":"100"}]},{"order":"2","cells":[{"order":"0","fields":["message"],"width":"100"}]},{"order":"3","cells":[{"order":"0","fields":["submit"],"width":"100"}]}],"container_styles_background-color":"","container_styles_border":"","container_styles_border-style":"","container_styles_border-color":"","container_styles_color":"","container_styles_height":"","container_styles_width":"","container_styles_font-size":"","container_styles_margin":"","container_styles_padding":"","container_styles_display":"","container_styles_float":"","container_styles_show_advanced_css":"0","container_styles_advanced":"","title_styles_background-color":"","title_styles_border":"","title_styles_border-style":"","title_styles_border-color":"","title_styles_color":"","title_styles_height":"","title_styles_width":"","title_styles_font-size":"","title_styles_margin":"","title_styles_padding":"","title_styles_display":"","title_styles_float":"","title_styles_show_advanced_css":"0","title_styles_advanced":"","row_styles_background-color":"","row_styles_border":"","row_styles_border-style":"","row_styles_border-color":"","row_styles_color":"","row_styles_height":"","row_styles_width":"","row_styles_font-size":"","row_styles_margin":"","row_styles_padding":"","row_styles_display":"","row_styles_show_advanced_css":"0","row_styles_advanced":"","row-odd_styles_background-color":"","row-odd_styles_border":"","row-odd_styles_border-style":"","row-odd_styles_border-color":"","row-odd_styles_color":"","row-odd_styles_height":"","row-odd_styles_width":"","row-odd_styles_font-size":"","row-odd_styles_margin":"","row-odd_styles_padding":"","row-odd_styles_display":"","row-odd_styles_show_advanced_css":"0","row-odd_styles_advanced":"","success-msg_styles_background-color":"","success-msg_styles_border":"","success-msg_styles_border-style":"","success-msg_styles_border-color":"","success-msg_styles_color":"","success-msg_styles_height":"","success-msg_styles_width":"","success-msg_styles_font-size":"","success-msg_styles_margin":"","success-msg_styles_padding":"","success-msg_styles_display":"","success-msg_styles_show_advanced_css":"0","success-msg_styles_advanced":"","error_msg_styles_background-color":"","error_msg_styles_border":"","error_msg_styles_border-style":"","error_msg_styles_border-color":"","error_msg_styles_color":"","error_msg_styles_height":"","error_msg_styles_width":"","error_msg_styles_font-size":"","error_msg_styles_margin":"","error_msg_styles_padding":"","error_msg_styles_display":"","error_msg_styles_show_advanced_css":"0","error_msg_styles_advanced":"","ninjaForms":"Ninja Forms","changeEmailErrorMsg":"Please enter a valid email address!","changeDateErrorMsg":"Please enter a valid date!","confirmFieldErrorMsg":"These fields must match!","fieldNumberNumMinError":"Number Min Error","fieldNumberNumMaxError":"Number Max Error","fieldNumberIncrementBy":"Please increment by ","fieldTextareaRTEInsertLink":"Insert Link","fieldTextareaRTEInsertMedia":"Insert Media","fieldTextareaRTESelectAFile":"Select a file","formErrorsCorrectErrors":"Please correct errors before submitting this form.","formHoneypot":"If you are a human seeing this field, please leave it empty.","validateRequiredField":"This is a required field.","honeypotHoneypotError":"Honeypot Error","fileUploadOldCodeFileUploadInProgress":"File Upload in Progress.","fileUploadOldCodeFileUpload":"FILE UPLOAD","currencySymbol":false,"fieldsMarkedRequired":"Fields marked with an <span class=\"ninja-forms-req-symbol\">*<\/span> are required","thousands_sep":",","decimal_point":".","siteLocale":"en_US","dateFormat":"m\/d\/Y","startOfWeek":"0","of":"of","previousMonth":"Previous Month","nextMonth":"Next Month","months":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthsShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"weekdays":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"weekdaysShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"weekdaysMin":["Su","Mo","Tu","We","Th","Fr","Sa"],"embed_form":"","currency_symbol":"","beforeForm":"","beforeFields":"","afterFields":"","afterForm":""};form.fields=[{"label":"Name","key":"name","parent_id":1,"type":"textbox","created_at":"2021-06-10 13:02:47","label_pos":"above","required":1,"order":1,"placeholder":"","default":"","wrapper_class":"","element_class":"","objectType":"Field","objectDomain":"fields","editActive":"","container_class":"","input_limit":"","input_limit_type":"characters","input_limit_msg":"Character(s) left","manual_key":"","disable_input":"","admin_label":"","help_text":"","desc_text":"","disable_browser_autocomplete":"","mask":"","custom_mask":"","wrap_styles_background-color":"","wrap_styles_border":"","wrap_styles_border-style":"","wrap_styles_border-color":"","wrap_styles_color":"","wrap_styles_height":"","wrap_styles_width":"","wrap_styles_font-size":"","wrap_styles_margin":"","wrap_styles_padding":"","wrap_styles_display":"","wrap_styles_float":"","wrap_styles_show_advanced_css":0,"wrap_styles_advanced":"","label_styles_background-color":"","label_styles_border":"","label_styles_border-style":"","label_styles_border-color":"","label_styles_color":"","label_styles_height":"","label_styles_width":"","label_styles_font-size":"","label_styles_margin":"","label_styles_padding":"","label_styles_display":"","label_styles_float":"","label_styles_show_advanced_css":0,"label_styles_advanced":"","element_styles_background-color":"","element_styles_border":"","element_styles_border-style":"","element_styles_border-color":"","element_styles_color":"","element_styles_height":"","element_styles_width":"","element_styles_font-size":"","element_styles_margin":"","element_styles_padding":"","element_styles_display":"","element_styles_float":"","element_styles_show_advanced_css":0,"element_styles_advanced":"","cellcid":"c3277","id":1,"beforeField":"","afterField":"","value":"","parentType":"textbox","element_templates":["textbox","input"],"old_classname":"","wrap_template":"wrap"},{"label":"Email","key":"email","parent_id":1,"type":"email","created_at":"2021-06-10 13:02:47","label_pos":"above","required":1,"order":2,"placeholder":"","default":"","wrapper_class":"","element_class":"","objectType":"Field","objectDomain":"fields","editActive":"","container_class":"","admin_label":"","help_text":"","desc_text":"","wrap_styles_background-color":"","wrap_styles_border":"","wrap_styles_border-style":"","wrap_styles_border-color":"","wrap_styles_color":"","wrap_styles_height":"","wrap_styles_width":"","wrap_styles_font-size":"","wrap_styles_margin":"","wrap_styles_padding":"","wrap_styles_display":"","wrap_styles_float":"","wrap_styles_show_advanced_css":0,"wrap_styles_advanced":"","label_styles_background-color":"","label_styles_border":"","label_styles_border-style":"","label_styles_border-color":"","label_styles_color":"","label_styles_height":"","label_styles_width":"","label_styles_font-size":"","label_styles_margin":"","label_styles_padding":"","label_styles_display":"","label_styles_float":"","label_styles_show_advanced_css":0,"label_styles_advanced":"","element_styles_background-color":"","element_styles_border":"","element_styles_border-style":"","element_styles_border-color":"","element_styles_color":"","element_styles_height":"","element_styles_width":"","element_styles_font-size":"","element_styles_margin":"","element_styles_padding":"","element_styles_display":"","element_styles_float":"","element_styles_show_advanced_css":0,"element_styles_advanced":"","cellcid":"c3281","id":2,"beforeField":"","afterField":"","value":"","parentType":"email","element_templates":["email","input"],"old_classname":"","wrap_template":"wrap"},{"label":"Message","key":"message","parent_id":1,"type":"textarea","created_at":"2021-06-10 13:02:47","label_pos":"above","required":1,"order":3,"placeholder":"","default":"","wrapper_class":"","element_class":"","objectType":"Field","objectDomain":"fields","editActive":"","container_class":"","input_limit":"","input_limit_type":"characters","input_limit_msg":"Character(s) left","manual_key":"","disable_input":"","admin_label":"","help_text":"","desc_text":"","disable_browser_autocomplete":"","textarea_rte":"","disable_rte_mobile":"","textarea_media":"","wrap_styles_background-color":"","wrap_styles_border":"","wrap_styles_border-style":"","wrap_styles_border-color":"","wrap_styles_color":"","wrap_styles_height":"","wrap_styles_width":"","wrap_styles_font-size":"","wrap_styles_margin":"","wrap_styles_padding":"","wrap_styles_display":"","wrap_styles_float":"","wrap_styles_show_advanced_css":0,"wrap_styles_advanced":"","label_styles_background-color":"","label_styles_border":"","label_styles_border-style":"","label_styles_border-color":"","label_styles_color":"","label_styles_height":"","label_styles_width":"","label_styles_font-size":"","label_styles_margin":"","label_styles_padding":"","label_styles_display":"","label_styles_float":"","label_styles_show_advanced_css":0,"label_styles_advanced":"","element_styles_background-color":"","element_styles_border":"","element_styles_border-style":"","element_styles_border-color":"","element_styles_color":"","element_styles_height":"","element_styles_width":"","element_styles_font-size":"","element_styles_margin":"","element_styles_padding":"","element_styles_display":"","element_styles_float":"","element_styles_show_advanced_css":0,"element_styles_advanced":"","cellcid":"c3284","id":3,"beforeField":"","afterField":"","value":"","parentType":"textarea","element_templates":["textarea","input"],"old_classname":"","wrap_template":"wrap"},{"label":"Submit","key":"submit","parent_id":1,"type":"submit","created_at":"2021-06-10 13:02:47","processing_label":"Processing","order":5,"objectType":"Field","objectDomain":"fields","editActive":"","container_class":"","element_class":"","wrap_styles_background-color":"","wrap_styles_border":"","wrap_styles_border-style":"","wrap_styles_border-color":"","wrap_styles_color":"","wrap_styles_height":"","wrap_styles_width":"","wrap_styles_font-size":"","wrap_styles_margin":"","wrap_styles_padding":"","wrap_styles_display":"","wrap_styles_float":"","wrap_styles_show_advanced_css":0,"wrap_styles_advanced":"","label_styles_background-color":"","label_styles_border":"","label_styles_border-style":"","label_styles_border-color":"","label_styles_color":"","label_styles_height":"","label_styles_width":"","label_styles_font-size":"","label_styles_margin":"","label_styles_padding":"","label_styles_display":"","label_styles_float":"","label_styles_show_advanced_css":0,"label_styles_advanced":"","element_styles_background-color":"","element_styles_border":"","element_styles_border-style":"","element_styles_border-color":"","element_styles_color":"","element_styles_height":"","element_styles_width":"","element_styles_font-size":"","element_styles_margin":"","element_styles_padding":"","element_styles_display":"","element_styles_float":"","element_styles_show_advanced_css":0,"element_styles_advanced":"","submit_element_hover_styles_background-color":"","submit_element_hover_styles_border":"","submit_element_hover_styles_border-style":"","submit_element_hover_styles_border-color":"","submit_element_hover_styles_color":"","submit_element_hover_styles_height":"","submit_element_hover_styles_width":"","submit_element_hover_styles_font-size":"","submit_element_hover_styles_margin":"","submit_element_hover_styles_padding":"","submit_element_hover_styles_display":"","submit_element_hover_styles_float":"","submit_element_hover_styles_show_advanced_css":0,"submit_element_hover_styles_advanced":"","cellcid":"c3287","id":4,"beforeField":"","afterField":"","value":"","label_pos":"above","parentType":"textbox","element_templates":["submit","button","input"],"old_classname":"","wrap_template":"wrap-no-label"}];nfForms.push(form);</script>
<script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script>
<script type="rocketlazyloadscript">var screenReaderText = {"expand":"expand child menu","collapse":"collapse child menu"};</script>
<script src="http://example.org/wp-includes/js/comment-reply.min.js?ver=5.7" id="comment-reply-js"></script>
<script type="module" src="http://example.org/wp-content/plugins/module/test.js"></script>
<script id="astra-theme-js-js-extra">var astra = {"break_point:"921","isRtl:""};</script>
<script type="text/javascript">
    /* <![CDATA[ */
    var wpforms_settings = {
        val_required: "This field is required.",
        val_url: "Please enter a valid URL.",
        val_email: "Please enter a valid email address.",
        val_email_suggestion: "Did you mean {suggestion}?",
        val_email_suggestion_title: "Click to accept this suggestion.",
        val_email_restricted: "This email address is not allowed.",
        val_number: "Please enter a valid number.",
        val_number_positive: "Please enter a valid positive number.",
        val_confirm: "Field values do not match.",
        val_fileextension: "File type is not allowed.",
        val_filesize: "File exceeds max size allowed. File was not uploaded.",
        val_time12h: "Please enter time in 12-hour AM\/PM format (eg 8:45 AM).",
        val_time24h: "Please enter time in 24-hour format (eg 22:45).",
        val_requiredpayment: "Payment is required.",
        val_creditcard: "Please enter a valid credit card number.",
        val_post_max_size: "The total size of the selected files {totalSize} Mb exceeds the allowed limit {maxSize} Mb.",
        val_checklimit: "You have exceeded the number of allowed selections: {#}.",
        val_limit_characters: "{count} of {limit} max characters.",
        val_limit_words: "{count} of {limit} max words.",
        val_recaptcha_fail_msg: "Google reCAPTCHA verification failed, please try again later.",
        val_empty_blanks: "Please fill out all blanks.",
        post_max_size: "104857600",
        uuid_cookie: "",
        locale: "en",
        wpforms_plugin_url: "https:\/\/domain.com\/wp-content\/plugins\/wpforms-lite\/",
        gdpr: "",
        ajaxurl: "https:\/\/domain.com\/wp-admin\/admin-ajax.php",
        mailcheck_enabled: "1",
        mailcheck_domains: [],
        mailcheck_toplevel_domains: ["dev"],
        is_ssl: "1",
    };
    /* ]]> */
</script>
<script type="invalid-type">alert("invalid-type");</script>
<script type="module123">alert("invalid-type");</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">alert("text/javascript");</script>
<script type="rocketlazyloadscript" data-rocket-type="text/x-javascript">alert("text/x-javascript");</script>
<script type="rocketlazyloadscript" data-rocket-type="text/ecmascript">alert("text/ecmascript");</script>
<script type="rocketlazyloadscript" data-rocket-type="text/jscript">alert("text/jscript");</script>
<script type="rocketlazyloadscript" data-rocket-type="application/javascript">alert("application/javascript");</script>
<script type="rocketlazyloadscript" data-rocket-type="application/x-javascript">alert("application/x-javascript");</script>
<script type="rocketlazyloadscript" data-rocket-type="application/ecmascript">alert("application/ecmascript");</script>
<script type="rocketlazyloadscript" data-rocket-type="module">alert("module");</script>
<script src=\'https://stats.wp.com/e-202124.js\' defer></script>
<script>
	_stq = window._stq || [];
	_stq.push([ \'view\', {v:\'ext\',j:\'1:9.8.1\',blog:\'11111111\',post:\'39721\',tz:\'-5\',srv:\'example.com\'} ]);
	_stq.push([ \'clickTrackerInit\', \'11111111\', \'39721\' ]);
</script>
<script>window.ninja_table_instance_0={table_id:"1067",title:"MYGA Rates National - Sheet1.csv (Imported From Table Press)",caption:"",columns:[{name:"companyname",key:"companyname",title:"Company Name",breakpoints:"",type:"text",visible:!0,classes:["ninja_column_0","ninja_clmn_nm_companyname"],filterable:!0,sortable:!1,original:{key:"companyname",name:"Company Name",breakpoints:"",data_type:"text",dateFormat:"",enable_html_content:"false",header_html_content:"",contentAlign:"left",textAlign:"left",maxWidthUnit:"px",unsortable:"yes"}}]};</script>
<script data-cfasync="false" data-pagespeed-no-defer type="text/javascript">//<![CDATA[
	var gtm4wp_datalayer_name = "dataLayer";
	var dataLayer = dataLayer || [];
	var gtm4wp_use_sku_instead        = 1;
	var gtm4wp_id_prefix              = \'\';
	var gtm4wp_remarketing            = false;
	var gtm4wp_eec                    = 1;
	var gtm4wp_classicec              = 1;
	var gtm4wp_currency               = \'USD\';
	var gtm4wp_product_per_impression = 10;
	var gtm4wp_needs_shipping_address = false;
	var gtm4wp_business_vertical      = \'retail\';
	var gtm4wp_business_vertical_id   = \'id\';

	var gtm4wp_scrollerscript_debugmode         = false;
	var gtm4wp_scrollerscript_callbacktime      = 100;
	var gtm4wp_scrollerscript_readerlocation    = 150;
	var gtm4wp_scrollerscript_contentelementid  = "content";
	var gtm4wp_scrollerscript_scannertime       = 60;
//]]>
</script>
<script data-cfasync="false" data-pagespeed-no-defer type="text/javascript">//<![CDATA[
	var dataLayer_content = {"visitorDoNotTrack":1,"pagePostType":"product","pagePostType2":"single-product","pagePostAuthor":"remy","productRatingCounts":[],"productAverageRating":0,"productReviewCount":0,"productType":"simple","productIsVariable":0,"event":"gtm4wp.changeDetailViewEEC","ecommerce":{"currencyCode":"CAD","detail":{"products":[{"id":1762,"name":"Beanie","sku":1762,"category":"Accessories","price":18,"stocklevel":null}]}}};
	dataLayer.push( dataLayer_content );//]]>
</script>
<script>
	var corner_video = \'left\';

	function handlePixMessage (e) {
	// Reference to element for data display
	let regexServed = /served-by.pixfuture.com/g;
	let regexDFP = /.googlesyndication.com/g;

	if ( e.origin.match(regexServed) != null || e.origin.match(regexDFP) != null) {
	e.source.postMessage(\' {"pixHashes":true} \', e.origin);
	}
	}
	window.addEventListener("message", handlePixMessage, false);
	var _pixHashes = \'{"pixHashes":true}\';
</script>
<script src="http://cdn.pixfuture.com/hb_v2.js"></script>
<script src="http://cdn.pixfuture.com/pbix.js"></script>
<script src="http://served-by.pixfuture.com/www/delivery/ads.js"></script>
<script src="http://served-by.pixfuture.com/www/delivery/headerbid_sticky_refresh.js"></script>
<script src="http://serv-vdo.pixfuture.com/vpaid/ads.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous">
</script>
<script type="text/javascript" src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js"></script>
<script src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js" type="text/javascript"></script>
<script type = "" src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js"></script>
<script src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js" type = ""></script>
<script type="" src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js"></script>
<script type src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js"></script>
<script src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js" type></script>
<script src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js" type ></script>
<script>
function wprRemoveCPCSS() {
	let preload_stylesheets = document.querySelectorAll( \'link[data-rocket-async="style"][rel="preload"]\' );
	if ( preload_stylesheets && preload_stylesheets.length > 0 ) {
		for ( let stylesheet_index = 0;stylesheet_index < preload_stylesheets.length;stylesheet_index++ ){
			let media = preload_stylesheets[stylesheet_index].getAttribute(\'media\') || \'all\';
			if( window.matchMedia(media).matches ){
				setTimeout( wprRemoveCPCSS, 200 );
				return;
			}
		}
	}

	const elem = document.getElementById( \'rocket-critical-css\' );
	if ( elem && \'remove\' in elem ) {
		elem.remove();
	}
}

if ( window.addEventListener ) {
	window.addEventListener( \'load\', wprRemoveCPCSS );
} else if ( window.attachEvent ) {
	window.attachEvent( \'onload\', wprRemoveCPCSS );
}
</script>
<script>
window.wsf_form_json_config = {};
</script>
<script id="print-helloworld" type="application/jscript">
	console.log("Hello world application/jscript!");
</script>
<script type="rocketlazyloadscript" id="print-helloworld" data-rocket-type="text/javascript">
	console.log("Hello world application/jscript!");
</script>
</body>
</html>';

$delay_html = '<html>
<head>
	<script type="rocketlazyloadscript" data-rocket-src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js"></script>
	<script type="rocketlazyloadscript" data-rocket-src="http://example.org/wp-includes/js/jquery/jquery.min.js?ver=3.5.1"></script>
	<script src="http://example.org/wp-content/plugins/wp-smush/assets/js/smush-lazy-load.min.js"></script>
	<script src="http://example.org/wp-content/plugins/wp-smush/assets/js/smush-lazy-load-native.min.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/lazysizes-pre.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/lazysizes.min.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/lazysizes-post.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer-cloud/includes/lazysizes.min.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/load_webp.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/load_webp.min.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/load-webp.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/load-webp.min.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/check-webp.js"></script>
	<script src="http://example.org/wp-content/plugins/ewww-image-optimizer/includes/check-webp.min.js"></script>
	<script src="http://example.org/wp-content/plugins/autoptimize/classes/external/js/lazysizes.min.js"></script>
	<script src="http://example.org/wp-content/themes/avada/assets/js/library/lazysizes.js"></script>
	<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.js">< / script>
	<script src="https://tests.local/wp-includes/js/wp-embed.min.js?ver=5.7" id="wp-embed-js"></script>
	<script src="http://example.org/wp-content/plugins/sitepress-multilingual-cms/dist/js/browser-redirect/app.js"></script>
	<script type="text/javascript" async="async" data-noptimize="1" data-cfasync="false" src="//scripts.mediavine.com/tags/test.js"></script>
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"http://example.org/#website","url":"http://example.org/"]}</script>
	<script class=\'jdgm-settings-script\'>window.jdgmSettings={"pagination":5,"badge_no_review_text":"0 reviews","badge_n_reviews_text":"{{ n }} Review/Reviews","badge_star_color":"#ffde00","hide_badge_preview_if_no_reviews":true,"widget_title":"Echte klantreviews","widget_open_form_text":"Scrhijf jouw review","widget_close_form_text":"Cancel","widget_refresh_page_text":"Ververs pagina","widget_summary_text":"Gebaseerd op {{ number_of_reviews }} review/reviews","widget_no_review_text":"Nog geen reviews","widget_name_field_text":"Naam","widget_verified_name_field_text":"Geverifieerde naam (public)","widget_name_placeholder_text":"Voer je naam in (public)","widget_required_field_error_text":"Dit veld is verplicht","widget_email_field_text":"E-mail","widget_verified_email_field_text":"Geverifieerd e-mailadres (privé, kan niet worden bewerkt)","widget_email_placeholder_text":"Voer je e-mailadres in (privé)","widget_email_field_error_text":"Gelieve een geldig e-mailadres in te geven.","widget_rating_field_text":"Review","widget_review_title_field_text":"Review Titel","widget_review_title_placeholder_text":"Geef je review een titel","widget_review_body_field_text":"Review","widget_review_body_placeholder_text":"Geef jouw mening","widget_pictures_field_text":"Foto\'s of video (optie)","widget_submit_review_text":"Verstuur review","widget_submit_verified_review_text":"Verstuur review","widget_submit_success_msg_with_auto_publish":"Bedankt voor je review! Als je je pagina ververst kun je jouw vers geschreven review teruglezen. Je kunt \'m zelfs delen via social media.","widget_submit_success_msg_no_auto_publish":"Bedankt voor je review! Je review word eerst beoordeeld. Je kunt \'m later ook delen via social media.","widget_show_default_reviews_out_of_total_text":"{{ n_reviews_shown }} wordt weergegeven bij {{ n_reviews }} beoordelingen.","widget_show_all_link_text":"Toon alles","widget_show_less_link_text":"Laat minder zien","widget_author_said_text":"{{ reviewer_name }} zei:","widget_days_text":"{{ n }} dagen geleden","widget_weeks_text":"{{ n }} week/weken geleden","widget_months_text":"{{ n }} maanden/maanden geleden","widget_years_text":"{{ n }} jaar/jaar geleden","widget_yesterday_text":"Gisteren","widget_today_text":"Vandaag","widget_replied_text":"Reactie van {{ shop_name }}:","widget_read_more_text":"Lees meer","widget_reviewer_name_as_initial":"last_initial","widget_rating_filter_see_all_text":"Alle beoordelingen bekijken","widget_sorting_most_recent_text":"Meest recent","widget_sorting_highest_rating_text":"Hoogste beoordeling","widget_sorting_lowest_rating_text":"Laagste beoordeling","widget_sorting_with_pictures_text":"Alleen foto\'s","widget_sorting_most_helpful_text":"Meest behulpzaam","widget_open_question_form_text":"Stel een vraag","widget_reviews_subtab_text":"Review","widget_questions_subtab_text":"Vragen","widget_question_label_text":"Vragen","widget_answer_label_text":"Antwoorden","widget_question_placeholder_text":"Schrijf je vraag","widget_submit_question_text":"Verstuur je vraag","widget_question_submit_success_text":"Bedankt voor je vraag! We zullen u op de hoogte stellen en uw vraag zal worden gepubliceerd zodra deze is beantwoord.","widget_star_color":"#ffd600","verified_badge_text":"Geverifieerd ","verified_badge_placement":"left-of-reviewer-name","widget_review_max_height":4,"widget_social_share":true,"widget_thumb":true,"widget_review_location_show":true,"widget_location_format":"country_iso_code","all_reviews_include_out_of_store_products":true,"all_reviews_out_of_store_text":"(uit winkel)","all_reviews_product_name_prefix_text":"over","enable_review_pictures":true,"enable_question_anwser":true,"review_date_format":"dd/mm/yyyy","default_sort_method":"most-helpful","widget_product_reviews_subtab_text":"Product recensies","widget_shop_reviews_subtab_text":"Winkel beoordelingen","show_product_url_for_grouped_product":true,"widget_sorting_pictures_first_text":"Foto\'s eerst","show_pictures_on_all_rev_page_mobile":true,"show_pictures_on_all_rev_page_desktop":true,"floating_tab_button_name":"★ Judge.me beoordelingen","floating_tab_title":"Laat klanten voor ons spreken","all_reviews_text_badge_text":"Klanten beoordelen ons {{ shop.metafields.judgeme.all_reviews_rating | round: 1 }}/5 gebaseerd op {{ shop.metafields.judgeme.all_reviews_count }} - recensies.","featured_carousel_title":"Laat klanten voor ons spreken","featured_carousel_count_text":"van {{ n }} recensies","featured_carousel_autoslide_interval":0,"featured_carousel_image_size":300,"featured_carousel_arrow_color":"#575757","picture_reminder_submit_button":"Upload afbeeldingen","enable_review_videos":true,"mute_video_by_default":true,"widget_sorting_videos_first_text":"Video\'s eerst","widget_review_pending_text":"In afwachting","social_share_options_order":"Facebook,Twitter,Pinterest,LinkedIn","preview_badge_show_question_text":true,"preview_badge_no_question_text":"0 Productvragen","preview_badge_n_question_text":"{{ number_of_questions }} vraag/vragen","qa_badge_show_icon":true,"widget_add_search_bar":true,"widget_search_bar_placeholder":"Doorzoek reviews","widget_sorting_verified_only_text":"Alleen geverifieerd","featured_carousel_theme":"aligned","featured_carousel_full_star_background":"#ffd600","all_reviews_page_load_more_text":"Laad meer recensies","widget_public_name_text":"openbaar weergegeven als","widget_reviewer_anonymous":"Anoniem","medals_widget_title":"Judge.me Review-medailles","platform":"woocommerce","branding_url":"https://judge.me/reviews","branding_text":"Via Judge.me","locale":"nl","reply_name":"Grill Bill Kamado BBQ","footer":true,"autopublish":true,"review_dates":true,"enable_custom_form":true};</script>
	<script>var et_site_url=\'http://example.org\';var et_post_id=\'2\';function et_core_page_resource_fallback(a,b){"undefined"===typeof b&&(b=a.sheet.cssRules&&0===a.sheet.cssRules.length);b&&(a.onerror=null,a.onload=null,a.href?a.href=et_site_url+"/?et_core_page_resource="+a.id+et_post_id:a.src&&(a.src=et_site_url+"/?et_core_page_resource="+a.id+et_post_id))}
	</script>
	<script>var lepopup_customjs_handlers={};var lepopup_cookie_value="1624338829";var lepopup_events_data={};var lepopup_content_id="23638";</script>
	<script>
		// Store some global theme options used in JS
		if ( window.$us === undefined ) {
			window.$us = {};
		}
		$us.canvasOptions = ( $us.canvasOptions || {} );
		$us.canvasOptions.disableEffectsWidth = 900;
		$us.canvasOptions.columnsStackingWidth = 768;
		$us.canvasOptions.backToTopDisplay = 100;
		$us.canvasOptions.scrollDuration = 1000;

		$us.langOptions = ( $us.langOptions || {} );
		$us.langOptions.magnificPopup = ( $us.langOptions.magnificPopup || {} );
		$us.langOptions.magnificPopup.tPrev = \'Previous (Left arrow key)\';
		$us.langOptions.magnificPopup.tNext = \'Next (Right arrow key)\';
		$us.langOptions.magnificPopup.tCounter = \'%curr% of %total%\';

		$us.navOptions = ( $us.navOptions || {} );
		$us.navOptions.mobileWidth = 900;
		$us.navOptions.togglable = true;
		$us.ajaxLoadJs = true;
		$us.templateDirectoryUri = \'/wp-content/themes/Impreza\';
	</script>
	<script>if ( window.$us === undefined ) window.$us = {};</script>
	<script>fusionNavIsCollapsed</script>
	<script>var eio_lazy_vars = {"exactdn_domain":"evp4mrv2nwt.exactdn.com","skip_autoscale":"0","threshold":"0"};</script>
	<script>document.body.classList.remove("no-js")</script>
	<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
		window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/tests.local\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7.1"}};
		!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
	</script>
	<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
		(function($) {
				var analytics_code = "<!-- Global site tag (gtag.js) - Google Analytics -->\n<script async src=\"https:\/\/www.googletagmanager.com\/gtag\/js?id=XXX\"><\/script>\n<script>\n  window.dataLayer = window.dataLayer || [];\n  function gtag(){dataLayer.push(arguments);}\n  gtag(\'js\', new Date());\n\n  gtag(\'config\', \'XXX\');\n<\/script>".replace(/\"/g, \'"\' );
		})( jQuery );
	</script>
	<script>function cpLoadCSS(e,t,n){"use strict";var i=window.document.createElement("link"),o=t||window.document.getElementsByTagName("script")[0];return i.rel="stylesheet",i.href=e,i.media="only x",o.parentNode.insertBefore(i,o),setTimeout(function(){i.media=n||"all"}),i}</script>
	<script>document.addEventListener(\'DOMContentLoaded\', function(event) {  if( typeof cpLoadCSS !== \'undefined\' ) { cpLoadCSS(\'https://example.org/wp-content/plugins/convertpro/assets/modules/css/cp-popup.min.css?ver=1.7.0\', 0, \'all\'); } }); </script>
	<script type="text/javascript">this.initCubePortfolio =  this.initCubePortfolio || []; this.initCubePortfolio.push({id: 23, options: {"filters":"#cbpw-filters23","loadMore":"","loadMoreAction":"click","search":"","layoutMode":"grid","sortToPreventGaps":true,"drag":true,"auto":false,"autoTimeout":5000,"autoPauseOnHover":true,"showNavigation":true,"showPagination":true,"rewindNav":true,"scrollByPage":false,"defaultFilter":"*","filterDeeplinking":false,"animationType":"fadeOut","gridAdjustment":"responsive","mediaQueries":[{"width":1400,"cols":3},{"width":1170,"cols":3},{"width":1024,"cols":3},{"width":960,"cols":3},{"width":778,"cols":3},{"width":640,"cols":2},{"width":480,"cols":2}],"gapHorizontal":0,"gapVertical":0,"caption":"zoom","displayType":"fadeIn","displayTypeSpeed":400,"lightboxDelegate":".cbp-lightbox","lightboxGallery":true,"lightboxTitleSrc":"data-title","lightboxCounter":"<div class=\"cbp-popup-lightbox-counter\">{{current}} of {{total}}</div>","singlePageDelegate":".cbp-singlePage","singlePageDeeplinking":true,"singlePageStickyNavigation":true,"singlePageCounter":"<div class=\"cbp-popup-singlePage-counter\">{{current}} of {{total}}</div>","singlePageAnimation":"middle","singlePageInlineDelegate":".cbp-singlePageInline","singlePageInlineDeeplinking":false,"singlePageInlinePosition":"top","singlePageInlineInFocus":true,"plugins":{},"cols":3,"coverRatio":""}});</script>
	<script data-cfasync="false" type="text/javascript">var Arrive=function(d,e,w){"use strict";if(d.MutationObserver&&"undefined"!=typeof HTMLElement){var a,t,r=0,c=(a=HTMLElement.prototype.matches||HTMLElement.prototype.webkitMatchesSelector||HTMLElement.prototype.mozMatchesSelector||HTMLElement.prototype.msMatchesSelector,{matchesSelector:function(e,t){return e instanceof HTMLElement&&a.call(e,t)},addMethod:function(e,t,a){var r=e[t];e[t]=function(){return a.length==arguments.length?a.apply(this,arguments):"function"==typeof r?r.apply(this,arguments):void 0}},callCallbacks:function(e,t){t&&t.options.onceOnly&&1==t.firedElems.length&&(e=[e[0]]);for(var a,r=0;a=e[r];r++)a&&a.callback&&a.callback.call(a.elem,a.elem);t&&t.options.onceOnly&&1==t.firedElems.length&&t.me.unbindEventWithSelectorAndCallback.call(t.target,t.selector,t.callback)},checkChildNodesRecursively:function(e,t,a,r){for(var i,n=0;i=e[n];n++)a(i,t,r)&&r.push({callback:t.callback,elem:i}),0<i.childNodes.length&&c.checkChildNodesRecursively(i.childNodes,t,a,r)},mergeArrays:function(e,t){var a,r={};for(a in e)e.hasOwnProperty(a)&&(r[a]=e[a]);for(a in t)t.hasOwnProperty(a)&&(r[a]=t[a]);return r},toElementsArray:function(e){return void 0===e||"number"==typeof e.length&&e!==d||(e=[e]),e}}),u=((t=function(){this._eventsBucket=[],this._beforeAdding=null,this._beforeRemoving=null}).prototype.addEvent=function(e,t,a,r){var i={target:e,selector:t,options:a,callback:r,firedElems:[]};return this._beforeAdding&&this._beforeAdding(i),this._eventsBucket.push(i),i},t.prototype.removeEvent=function(e){for(var t,a=this._eventsBucket.length-1;t=this._eventsBucket[a];a--)if(e(t)){this._beforeRemoving&&this._beforeRemoving(t);var r=this._eventsBucket.splice(a,1);r&&r.length&&(r[0].callback=null)}},t.prototype.beforeAdding=function(e){this._beforeAdding=e},t.prototype.beforeRemoving=function(e){this._beforeRemoving=e},t),l=function(i,n){var l=new u,o=this,s={fireOnAttributesModification:!1};return l.beforeAdding(function(t){var e,a=t.target;a!==d.document&&a!==d||(a=document.getElementsByTagName("html")[0]),e=new MutationObserver(function(e){n.call(this,e,t)});var r=i(t.options);e.observe(a,r),t.observer=e,t.me=o}),l.beforeRemoving(function(e){e.observer.disconnect()}),this.bindEvent=function(e,t,a){t=c.mergeArrays(s,t);for(var r=c.toElementsArray(this),i=0;i<r.length;i++)l.addEvent(r[i],e,t,a)},this.unbindEvent=function(){var a=c.toElementsArray(this);l.removeEvent(function(e){for(var t=0;t<a.length;t++)if(this===w||e.target===a[t])return!0;return!1})},this.unbindEventWithSelectorOrCallback=function(a){var e,r=c.toElementsArray(this),i=a;e="function"==typeof a?function(e){for(var t=0;t<r.length;t++)if((this===w||e.target===r[t])&&e.callback===i)return!0;return!1}:function(e){for(var t=0;t<r.length;t++)if((this===w||e.target===r[t])&&e.selector===a)return!0;return!1},l.removeEvent(e)},this.unbindEventWithSelectorAndCallback=function(a,r){var i=c.toElementsArray(this);l.removeEvent(function(e){for(var t=0;t<i.length;t++)if((this===w||e.target===i[t])&&e.selector===a&&e.callback===r)return!0;return!1})},this},i=new function(){var s={fireOnAttributesModification:!1,onceOnly:!1,existing:!1};function n(e,t,a){return!(!c.matchesSelector(e,t.selector)||(e._id===w&&(e._id=r++),-1!=t.firedElems.indexOf(e._id))||(t.firedElems.push(e._id),0))}var d=(i=new l(function(e){var t={attributes:!1,childList:!0,subtree:!0};return e.fireOnAttributesModification&&(t.attributes=!0),t},function(e,i){e.forEach(function(e){var t=e.addedNodes,a=e.target,r=[];null!==t&&0<t.length?c.checkChildNodesRecursively(t,i,n,r):"attributes"===e.type&&n(a,i)&&r.push({callback:i.callback,elem:a}),c.callCallbacks(r,i)})})).bindEvent;return i.bindEvent=function(e,t,a){t=void 0===a?(a=t,s):c.mergeArrays(s,t);var r=c.toElementsArray(this);if(t.existing){for(var i=[],n=0;n<r.length;n++)for(var l=r[n].querySelectorAll(e),o=0;o<l.length;o++)i.push({callback:a,elem:l[o]});if(t.onceOnly&&i.length)return a.call(i[0].elem,i[0].elem);setTimeout(c.callCallbacks,1,i)}d.call(this,e,t,a)},i},o=new function(){var r={};function i(e,t){return c.matchesSelector(e,t.selector)}var n=(o=new l(function(){return{childList:!0,subtree:!0}},function(e,r){e.forEach(function(e){var t=e.removedNodes,a=[];null!==t&&0<t.length&&c.checkChildNodesRecursively(t,r,i,a),c.callCallbacks(a,r)})})).bindEvent;return o.bindEvent=function(e,t,a){t=void 0===a?(a=t,r):c.mergeArrays(r,t),n.call(this,e,t,a)},o};e&&g(e.fn),g(HTMLElement.prototype),g(NodeList.prototype),g(HTMLCollection.prototype),g(HTMLDocument.prototype),g(Window.prototype);var n={};return s(i,n,"unbindAllArrive"),s(o,n,"unbindAllLeave"),n}function s(e,t,a){c.addMethod(t,a,e.unbindEvent),c.addMethod(t,a,e.unbindEventWithSelectorOrCallback),c.addMethod(t,a,e.unbindEventWithSelectorAndCallback)}function g(e){e.arrive=i.bindEvent,s(i,e,"unbindArrive"),e.leave=o.bindEvent,s(o,e,"unbindLeave")}}(window,"undefined"==typeof jQuery?null:jQuery,void 0),ewww_webp_supported=!1;function check_webp_feature(e,t){if(ewww_webp_supported)t(ewww_webp_supported);else{var a=new Image;a.onload=function(){ewww_webp_supported=0<a.width&&0<a.height,t(ewww_webp_supported)},a.onerror=function(){t(!1)},a.src="data:image/webp;base64,"+{alpha:"UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA==",animation:"UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA"}[e]}}function ewwwLoadImages(e){var n="data-";function t(e,t){for(var a=["accesskey","align","alt","border","class","contenteditable","contextmenu","crossorigin","dir","draggable","dropzone","height","hidden","hspace","id","ismap","lang","longdesc","sizes","spellcheck","style","tabindex","title","translate","usemap","vspace","width","data-animation","data-attachment-id","data-auto-height","data-caption","data-comments-opened","data-delay","data-event-trigger","data-flex_fx","data-height","data-hide-on-end","data-highlight-color","data-highlight-border-color","data-highlight-border-opacity","data-highlight-border-width","data-highlight-opacity","data-image-meta","data-image-title","data-image-description","data-interval","data-large_image_width","data-large_image_height","data-lazy","data-lazy-type","data-mode","data-name","data-no-lazy","data-orig-size","data-partial","data-per-view","data-permalink","data-pin-description","data-pin-id","data-pin-media","data-pin-url","data-rel","data-ride","data-shadow","data-shadow-direction","data-slide","data-slide-to","data-target","data-vc-zoom","data-width","data-wrap"],r=0,i=a.length;r<i;r++)ewwwAttr(t,a[r],e.getAttribute(n+a[r]));return t}if(e){for(var a=document.querySelectorAll(".batch-image img, .image-wrapper a, .ngg-pro-masonry-item a, .ngg-galleria-offscreen-seo-wrapper a"),r=0,i=a.length;r<i;r++)ewwwAttr(a[r],"data-src",a[r].getAttribute("data-webp")),ewwwAttr(a[r],"data-thumbnail",a[r].getAttribute("data-webp-thumbnail"));for(r=0,i=(o=document.querySelectorAll(".rev_slider ul li")).length;r<i;r++){ewwwAttr(o[r],"data-thumb",o[r].getAttribute("data-webp-thumb"));for(var l=1;l<11;)ewwwAttr(o[r],"data-param"+l,o[r].getAttribute("data-webp-param"+l)),l++}var o;for(r=0,i=(o=document.querySelectorAll(".rev_slider img")).length;r<i;r++)ewwwAttr(o[r],"data-lazyload",o[r].getAttribute("data-webp-lazyload"));var s=document.querySelectorAll("div.woocommerce-product-gallery__image");for(r=0,i=s.length;r<i;r++)ewwwAttr(s[r],"data-thumb",s[r].getAttribute("data-webp-thumb"))}var d=document.querySelectorAll("video");for(r=0,i=d.length;r<i;r++)ewwwAttr(d[r],"poster",e?d[r].getAttribute("data-poster-webp"):d[r].getAttribute("data-poster-image"));var w=document.querySelectorAll("img.ewww_webp_lazy_load");for(r=0,i=w.length;r<i;r++){if(e){ewwwAttr(w[r],"data-lazy-srcset",w[r].getAttribute("data-lazy-srcset-webp")),ewwwAttr(w[r],"data-srcset",w[r].getAttribute("data-srcset-webp")),ewwwAttr(w[r],"data-lazy-src",w[r].getAttribute("data-lazy-src-webp")),ewwwAttr(w[r],"data-src",w[r].getAttribute("data-src-webp")),ewwwAttr(w[r],"data-orig-file",w[r].getAttribute("data-webp-orig-file")),ewwwAttr(w[r],"data-medium-file",w[r].getAttribute("data-webp-medium-file")),ewwwAttr(w[r],"data-large-file",w[r].getAttribute("data-webp-large-file"));var c=w[r].getAttribute("srcset");null!=c&&!1!==c&&c.includes("R0lGOD")&&ewwwAttr(w[r],"src",w[r].getAttribute("data-lazy-src-webp"))}w[r].className=w[r].className.replace(/\bewww_webp_lazy_load\b/,"")}var u=document.querySelectorAll(".ewww_webp");for(r=0,i=u.length;r<i;r++){var g=document.createElement("img");e?(ewwwAttr(g,"src",u[r].getAttribute("data-webp")),ewwwAttr(g,"srcset",u[r].getAttribute("data-srcset-webp")),ewwwAttr(g,"data-orig-file",u[r].getAttribute("data-orig-file")),ewwwAttr(g,"data-orig-file",u[r].getAttribute("data-webp-orig-file")),ewwwAttr(g,"data-medium-file",u[r].getAttribute("data-medium-file")),ewwwAttr(g,"data-medium-file",u[r].getAttribute("data-webp-medium-file")),ewwwAttr(g,"data-large-file",u[r].getAttribute("data-large-file")),ewwwAttr(g,"data-large-file",u[r].getAttribute("data-webp-large-file")),ewwwAttr(g,"data-large_image",u[r].getAttribute("data-large_image")),ewwwAttr(g,"data-large_image",u[r].getAttribute("data-webp-large_image")),ewwwAttr(g,"data-src",u[r].getAttribute("data-src")),ewwwAttr(g,"data-src",u[r].getAttribute("data-webp-src"))):(ewwwAttr(g,"src",u[r].getAttribute("data-img")),ewwwAttr(g,"srcset",u[r].getAttribute("data-srcset-img")),ewwwAttr(g,"data-orig-file",u[r].getAttribute("data-orig-file")),ewwwAttr(g,"data-medium-file",u[r].getAttribute("data-medium-file")),ewwwAttr(g,"data-large-file",u[r].getAttribute("data-large-file")),ewwwAttr(g,"data-large_image",u[r].getAttribute("data-large_image")),ewwwAttr(g,"data-src",u[r].getAttribute("data-src"))),g=t(u[r],g),u[r].parentNode.insertBefore(g,u[r].nextSibling),u[r].className=u[r].className.replace(/\bewww_webp\b/,"")}window.jQuery&&jQuery.fn.isotope&&jQuery.fn.imagesLoaded&&(jQuery(".fusion-posts-container-infinite").imagesLoaded(function(){jQuery(".fusion-posts-container-infinite").hasClass("isotope")&&jQuery(".fusion-posts-container-infinite").isotope()}),jQuery(".fusion-portfolio:not(.fusion-recent-works) .fusion-portfolio-wrapper").imagesLoaded(function(){jQuery(".fusion-portfolio:not(.fusion-recent-works) .fusion-portfolio-wrapper").isotope()}))}function ewwwWebPInit(e){ewwwLoadImages(e),ewwwNggLoadGalleries(e),document.arrive(".ewww_webp",function(){ewwwLoadImages(e)}),document.arrive(".ewww_webp_lazy_load",function(){ewwwLoadImages(e)}),document.arrive("videos",function(){ewwwLoadImages(e)}),"loading"==document.readyState?document.addEventListener("DOMContentLoaded",ewwwJSONParserInit):("undefined"!=typeof galleries&&ewwwNggParseGalleries(e),ewwwWooParseVariations(e))}function ewwwAttr(e,t,a){null!=a&&!1!==a&&e.setAttribute(t,a)}function ewwwJSONParserInit(){"undefined"!=typeof galleries&&check_webp_feature("alpha",ewwwNggParseGalleries),check_webp_feature("alpha",ewwwWooParseVariations)}function ewwwWooParseVariations(e){if(e)for(var t=document.querySelectorAll("form.variations_form"),a=0,r=t.length;a<r;a++){var i=t[a].getAttribute("data-product_variations"),n=!1;try{for(var l in i=JSON.parse(i))void 0!==i[l]&&void 0!==i[l].image&&(void 0!==i[l].image.src_webp&&(i[l].image.src=i[l].image.src_webp,n=!0),void 0!==i[l].image.srcset_webp&&(i[l].image.srcset=i[l].image.srcset_webp,n=!0),void 0!==i[l].image.full_src_webp&&(i[l].image.full_src=i[l].image.full_src_webp,n=!0),void 0!==i[l].image.gallery_thumbnail_src_webp&&(i[l].image.gallery_thumbnail_src=i[l].image.gallery_thumbnail_src_webp,n=!0),void 0!==i[l].image.thumb_src_webp&&(i[l].image.thumb_src=i[l].image.thumb_src_webp,n=!0));n&&ewwwAttr(t[a],"data-product_variations",JSON.stringify(i))}catch(e){}}}function ewwwNggParseGalleries(e){if(e)for(var t in galleries){var a=galleries[t];galleries[t].images_list=ewwwNggParseImageList(a.images_list)}}function ewwwNggLoadGalleries(e){e&&document.addEventListener("ngg.galleria.themeadded",function(e,t){window.ngg_galleria._create_backup=window.ngg_galleria.create,window.ngg_galleria.create=function(e,t){var a=$(e).data("id");return galleries["gallery_"+a].images_list=ewwwNggParseImageList(galleries["gallery_"+a].images_list),window.ngg_galleria._create_backup(e,t)}})}function ewwwNggParseImageList(e){for(var t in e){var a=e[t];if(void 0!==a["image-webp"]&&(e[t].image=a["image-webp"],delete e[t]["image-webp"]),void 0!==a["thumb-webp"]&&(e[t].thumb=a["thumb-webp"],delete e[t]["thumb-webp"]),void 0!==a.full_image_webp&&(e[t].full_image=a.full_image_webp,delete e[t].full_image_webp),void 0!==a.srcsets)for(var r in a.srcsets)nggSrcset=a.srcsets[r],void 0!==a.srcsets[r+"-webp"]&&(e[t].srcsets[r]=a.srcsets[r+"-webp"],delete e[t].srcsets[r+"-webp"]);if(void 0!==a.full_srcsets)for(var i in a.full_srcsets)nggFSrcset=a.full_srcsets[i],void 0!==a.full_srcsets[i+"-webp"]&&(e[t].full_srcsets[i]=a.full_srcsets[i+"-webp"],delete e[t].full_srcsets[i+"-webp"])}return e}check_webp_feature("alpha",ewwwWebPInit);</script>
	<script>document.addEventListener("DOMContentLoaded",function(){var lazyLoadInstance=new LazyLoad({elements_selector:"[loading=lazy],.perfmatters-lazy",thresholds:"200% 0px",callback_loaded:function(element){if(element.tagName==="IFRAME"){if(element.classList.contains("loaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}});});function perfmattersLazyLoadYouTube(e){var iframe=document.createElement("iframe");var params="ID?autoplay=1";params+=0===e.dataset.query.length?"":"&"+e.dataset.query;iframe.setAttribute("src",params.replace("ID",e.dataset.src));iframe.setAttribute("frameborder","0");iframe.setAttribute("allowfullscreen","1");iframe.setAttribute("allow","accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture");e.replaceChild(iframe,e.firstChild)}</script>
</head>
<body>
<script>
	// Billing
	var billing_address =\' #billing_address_1\';
	var billing_city =\'\';
	var billing_state =\' #billing_city\';
	var billing_zip_code =\'\';
	var billing_country =\'\';
	var billing_county =\'\';
	var billing_additional_field =\'\';
	var country_restriction =\'HK\';
</script>
<script>var rbs_gallery_60d183e796fbf = {"version":"3.0.7","id":27381,"class":"id27381","roboGalleryDelay":1000,"mainContainer":"#robo_gallery_main_block_rbs_gallery_60d183e796fbf","loadingContainer":"#rbs_gallery_60d183e796fbf-block-loader","loadingContainerObj":"rbs_gallery_60d183e796fbf-block-loader","columnWidth":"auto","columns":3,"resolutions":[{"columnWidth":"auto","columns":3,"maxWidth":960},{"columnWidth":"auto","columns":2,"maxWidth":650},{"columnWidth":300,"maxWidth":450}],"descBox":true,"descBoxClass":"rbs_desc_panel_light","lightboxOptions":{"gallery":{"enabled":true,"tCounter":"%curr% of %total%"}},"facebook":true,"twitter":true,"pinterest":true,"overlayEffect":"direction-aware-fade","boxesToLoadStart":6,"boxesToLoad":6,"lazyLoad":1,"waitUntilThumbLoads":1,"LoadingWord":"Loading Videos...","loadMoreWord":"Loading More Videos","noMoreEntriesWord":"No More Videos","horizontalSpaceBetweenBoxes":15,"verticalSpaceBetweenBoxes":15,"noHoverOnMobile":"false","wrapContainer":"#robo-gallery-wrap-rbs_gallery_60d183e796fbf"};</script>
<script type="text/javascript">
window.fluent_form_ff_form_instance_1_1 = {"id":"1","settings":{"layout":{"labelPlacement":"top","helpMessagePlacement":"with_label","errorMessagePlacement":"inline","asteriskPlacement":"asterisk-right"},"id":"39","restrictions":{"denyEmptySubmission":{"enabled":false}}},"form_instance":"ff_form_instance_1_1","form_id_selector":"fluentform_1","rules":{"first_name[first_name]":{"required":{"value":false,"message":"This field is required"}},"first_name[middle_name]":{"required":{"value":false,"message":"This field is required"}},"first_name[last_name]":{"required":{"value":false,"message":"This field is required"}},"email":{"required":{"value":true,"message":"This field is required"},"email":{"value":true,"message":"This field must contain a valid email"}},"biggest_challenge":{"required":{"value":false,"message":"This field is required"}}}};
</script>
<script type="text/javascript">
	var et_animation_data = [{"class":"et_pb_cta_0","style":"slideLeft","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"50%","starting_opacity":"0%","speed_curve":"ease-in-out"}];
</script>
<script>var formDisplay=1;var nfForms=nfForms||[];var form=[];form.id="1";form.settings={"title":"Contact Me","key":"","created_at":"2021-06-10 13:02:47","default_label_pos":"above","conditions":[],"objectType":"Form Setting","editActive":"","show_title":"1","clear_complete":"1","hide_complete":"1","wrapper_class":"","element_class":"","add_submit":"1","logged_in":"","not_logged_in_msg":"","sub_limit_number":"","sub_limit_msg":"","calculations":[],"formContentData":[{"order":"0","cells":[{"order":"0","fields":["name"],"width":"100"}]},{"order":"1","cells":[{"order":"0","fields":["email"],"width":"100"}]},{"order":"2","cells":[{"order":"0","fields":["message"],"width":"100"}]},{"order":"3","cells":[{"order":"0","fields":["submit"],"width":"100"}]}],"container_styles_background-color":"","container_styles_border":"","container_styles_border-style":"","container_styles_border-color":"","container_styles_color":"","container_styles_height":"","container_styles_width":"","container_styles_font-size":"","container_styles_margin":"","container_styles_padding":"","container_styles_display":"","container_styles_float":"","container_styles_show_advanced_css":"0","container_styles_advanced":"","title_styles_background-color":"","title_styles_border":"","title_styles_border-style":"","title_styles_border-color":"","title_styles_color":"","title_styles_height":"","title_styles_width":"","title_styles_font-size":"","title_styles_margin":"","title_styles_padding":"","title_styles_display":"","title_styles_float":"","title_styles_show_advanced_css":"0","title_styles_advanced":"","row_styles_background-color":"","row_styles_border":"","row_styles_border-style":"","row_styles_border-color":"","row_styles_color":"","row_styles_height":"","row_styles_width":"","row_styles_font-size":"","row_styles_margin":"","row_styles_padding":"","row_styles_display":"","row_styles_show_advanced_css":"0","row_styles_advanced":"","row-odd_styles_background-color":"","row-odd_styles_border":"","row-odd_styles_border-style":"","row-odd_styles_border-color":"","row-odd_styles_color":"","row-odd_styles_height":"","row-odd_styles_width":"","row-odd_styles_font-size":"","row-odd_styles_margin":"","row-odd_styles_padding":"","row-odd_styles_display":"","row-odd_styles_show_advanced_css":"0","row-odd_styles_advanced":"","success-msg_styles_background-color":"","success-msg_styles_border":"","success-msg_styles_border-style":"","success-msg_styles_border-color":"","success-msg_styles_color":"","success-msg_styles_height":"","success-msg_styles_width":"","success-msg_styles_font-size":"","success-msg_styles_margin":"","success-msg_styles_padding":"","success-msg_styles_display":"","success-msg_styles_show_advanced_css":"0","success-msg_styles_advanced":"","error_msg_styles_background-color":"","error_msg_styles_border":"","error_msg_styles_border-style":"","error_msg_styles_border-color":"","error_msg_styles_color":"","error_msg_styles_height":"","error_msg_styles_width":"","error_msg_styles_font-size":"","error_msg_styles_margin":"","error_msg_styles_padding":"","error_msg_styles_display":"","error_msg_styles_show_advanced_css":"0","error_msg_styles_advanced":"","ninjaForms":"Ninja Forms","changeEmailErrorMsg":"Please enter a valid email address!","changeDateErrorMsg":"Please enter a valid date!","confirmFieldErrorMsg":"These fields must match!","fieldNumberNumMinError":"Number Min Error","fieldNumberNumMaxError":"Number Max Error","fieldNumberIncrementBy":"Please increment by ","fieldTextareaRTEInsertLink":"Insert Link","fieldTextareaRTEInsertMedia":"Insert Media","fieldTextareaRTESelectAFile":"Select a file","formErrorsCorrectErrors":"Please correct errors before submitting this form.","formHoneypot":"If you are a human seeing this field, please leave it empty.","validateRequiredField":"This is a required field.","honeypotHoneypotError":"Honeypot Error","fileUploadOldCodeFileUploadInProgress":"File Upload in Progress.","fileUploadOldCodeFileUpload":"FILE UPLOAD","currencySymbol":false,"fieldsMarkedRequired":"Fields marked with an <span class=\"ninja-forms-req-symbol\">*<\/span> are required","thousands_sep":",","decimal_point":".","siteLocale":"en_US","dateFormat":"m\/d\/Y","startOfWeek":"0","of":"of","previousMonth":"Previous Month","nextMonth":"Next Month","months":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthsShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"weekdays":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"weekdaysShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"weekdaysMin":["Su","Mo","Tu","We","Th","Fr","Sa"],"embed_form":"","currency_symbol":"","beforeForm":"","beforeFields":"","afterFields":"","afterForm":""};form.fields=[{"label":"Name","key":"name","parent_id":1,"type":"textbox","created_at":"2021-06-10 13:02:47","label_pos":"above","required":1,"order":1,"placeholder":"","default":"","wrapper_class":"","element_class":"","objectType":"Field","objectDomain":"fields","editActive":"","container_class":"","input_limit":"","input_limit_type":"characters","input_limit_msg":"Character(s) left","manual_key":"","disable_input":"","admin_label":"","help_text":"","desc_text":"","disable_browser_autocomplete":"","mask":"","custom_mask":"","wrap_styles_background-color":"","wrap_styles_border":"","wrap_styles_border-style":"","wrap_styles_border-color":"","wrap_styles_color":"","wrap_styles_height":"","wrap_styles_width":"","wrap_styles_font-size":"","wrap_styles_margin":"","wrap_styles_padding":"","wrap_styles_display":"","wrap_styles_float":"","wrap_styles_show_advanced_css":0,"wrap_styles_advanced":"","label_styles_background-color":"","label_styles_border":"","label_styles_border-style":"","label_styles_border-color":"","label_styles_color":"","label_styles_height":"","label_styles_width":"","label_styles_font-size":"","label_styles_margin":"","label_styles_padding":"","label_styles_display":"","label_styles_float":"","label_styles_show_advanced_css":0,"label_styles_advanced":"","element_styles_background-color":"","element_styles_border":"","element_styles_border-style":"","element_styles_border-color":"","element_styles_color":"","element_styles_height":"","element_styles_width":"","element_styles_font-size":"","element_styles_margin":"","element_styles_padding":"","element_styles_display":"","element_styles_float":"","element_styles_show_advanced_css":0,"element_styles_advanced":"","cellcid":"c3277","id":1,"beforeField":"","afterField":"","value":"","parentType":"textbox","element_templates":["textbox","input"],"old_classname":"","wrap_template":"wrap"},{"label":"Email","key":"email","parent_id":1,"type":"email","created_at":"2021-06-10 13:02:47","label_pos":"above","required":1,"order":2,"placeholder":"","default":"","wrapper_class":"","element_class":"","objectType":"Field","objectDomain":"fields","editActive":"","container_class":"","admin_label":"","help_text":"","desc_text":"","wrap_styles_background-color":"","wrap_styles_border":"","wrap_styles_border-style":"","wrap_styles_border-color":"","wrap_styles_color":"","wrap_styles_height":"","wrap_styles_width":"","wrap_styles_font-size":"","wrap_styles_margin":"","wrap_styles_padding":"","wrap_styles_display":"","wrap_styles_float":"","wrap_styles_show_advanced_css":0,"wrap_styles_advanced":"","label_styles_background-color":"","label_styles_border":"","label_styles_border-style":"","label_styles_border-color":"","label_styles_color":"","label_styles_height":"","label_styles_width":"","label_styles_font-size":"","label_styles_margin":"","label_styles_padding":"","label_styles_display":"","label_styles_float":"","label_styles_show_advanced_css":0,"label_styles_advanced":"","element_styles_background-color":"","element_styles_border":"","element_styles_border-style":"","element_styles_border-color":"","element_styles_color":"","element_styles_height":"","element_styles_width":"","element_styles_font-size":"","element_styles_margin":"","element_styles_padding":"","element_styles_display":"","element_styles_float":"","element_styles_show_advanced_css":0,"element_styles_advanced":"","cellcid":"c3281","id":2,"beforeField":"","afterField":"","value":"","parentType":"email","element_templates":["email","input"],"old_classname":"","wrap_template":"wrap"},{"label":"Message","key":"message","parent_id":1,"type":"textarea","created_at":"2021-06-10 13:02:47","label_pos":"above","required":1,"order":3,"placeholder":"","default":"","wrapper_class":"","element_class":"","objectType":"Field","objectDomain":"fields","editActive":"","container_class":"","input_limit":"","input_limit_type":"characters","input_limit_msg":"Character(s) left","manual_key":"","disable_input":"","admin_label":"","help_text":"","desc_text":"","disable_browser_autocomplete":"","textarea_rte":"","disable_rte_mobile":"","textarea_media":"","wrap_styles_background-color":"","wrap_styles_border":"","wrap_styles_border-style":"","wrap_styles_border-color":"","wrap_styles_color":"","wrap_styles_height":"","wrap_styles_width":"","wrap_styles_font-size":"","wrap_styles_margin":"","wrap_styles_padding":"","wrap_styles_display":"","wrap_styles_float":"","wrap_styles_show_advanced_css":0,"wrap_styles_advanced":"","label_styles_background-color":"","label_styles_border":"","label_styles_border-style":"","label_styles_border-color":"","label_styles_color":"","label_styles_height":"","label_styles_width":"","label_styles_font-size":"","label_styles_margin":"","label_styles_padding":"","label_styles_display":"","label_styles_float":"","label_styles_show_advanced_css":0,"label_styles_advanced":"","element_styles_background-color":"","element_styles_border":"","element_styles_border-style":"","element_styles_border-color":"","element_styles_color":"","element_styles_height":"","element_styles_width":"","element_styles_font-size":"","element_styles_margin":"","element_styles_padding":"","element_styles_display":"","element_styles_float":"","element_styles_show_advanced_css":0,"element_styles_advanced":"","cellcid":"c3284","id":3,"beforeField":"","afterField":"","value":"","parentType":"textarea","element_templates":["textarea","input"],"old_classname":"","wrap_template":"wrap"},{"label":"Submit","key":"submit","parent_id":1,"type":"submit","created_at":"2021-06-10 13:02:47","processing_label":"Processing","order":5,"objectType":"Field","objectDomain":"fields","editActive":"","container_class":"","element_class":"","wrap_styles_background-color":"","wrap_styles_border":"","wrap_styles_border-style":"","wrap_styles_border-color":"","wrap_styles_color":"","wrap_styles_height":"","wrap_styles_width":"","wrap_styles_font-size":"","wrap_styles_margin":"","wrap_styles_padding":"","wrap_styles_display":"","wrap_styles_float":"","wrap_styles_show_advanced_css":0,"wrap_styles_advanced":"","label_styles_background-color":"","label_styles_border":"","label_styles_border-style":"","label_styles_border-color":"","label_styles_color":"","label_styles_height":"","label_styles_width":"","label_styles_font-size":"","label_styles_margin":"","label_styles_padding":"","label_styles_display":"","label_styles_float":"","label_styles_show_advanced_css":0,"label_styles_advanced":"","element_styles_background-color":"","element_styles_border":"","element_styles_border-style":"","element_styles_border-color":"","element_styles_color":"","element_styles_height":"","element_styles_width":"","element_styles_font-size":"","element_styles_margin":"","element_styles_padding":"","element_styles_display":"","element_styles_float":"","element_styles_show_advanced_css":0,"element_styles_advanced":"","submit_element_hover_styles_background-color":"","submit_element_hover_styles_border":"","submit_element_hover_styles_border-style":"","submit_element_hover_styles_border-color":"","submit_element_hover_styles_color":"","submit_element_hover_styles_height":"","submit_element_hover_styles_width":"","submit_element_hover_styles_font-size":"","submit_element_hover_styles_margin":"","submit_element_hover_styles_padding":"","submit_element_hover_styles_display":"","submit_element_hover_styles_float":"","submit_element_hover_styles_show_advanced_css":0,"submit_element_hover_styles_advanced":"","cellcid":"c3287","id":4,"beforeField":"","afterField":"","value":"","label_pos":"above","parentType":"textbox","element_templates":["submit","button","input"],"old_classname":"","wrap_template":"wrap-no-label"}];nfForms.push(form);</script>
<script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script>
<script type="rocketlazyloadscript">var screenReaderText = {"expand":"expand child menu","collapse":"collapse child menu"};</script>
<script src="http://example.org/wp-includes/js/comment-reply.min.js?ver=5.7" id="comment-reply-js"></script>
<script type="rocketlazyloadscript" data-rocket-type="module" data-rocket-src="http://example.org/wp-content/plugins/module/test.js"></script>
<script id="astra-theme-js-js-extra">var astra = {"break_point:"921","isRtl:""};</script>
<script type="text/javascript">
    /* <![CDATA[ */
    var wpforms_settings = {
        val_required: "This field is required.",
        val_url: "Please enter a valid URL.",
        val_email: "Please enter a valid email address.",
        val_email_suggestion: "Did you mean {suggestion}?",
        val_email_suggestion_title: "Click to accept this suggestion.",
        val_email_restricted: "This email address is not allowed.",
        val_number: "Please enter a valid number.",
        val_number_positive: "Please enter a valid positive number.",
        val_confirm: "Field values do not match.",
        val_fileextension: "File type is not allowed.",
        val_filesize: "File exceeds max size allowed. File was not uploaded.",
        val_time12h: "Please enter time in 12-hour AM\/PM format (eg 8:45 AM).",
        val_time24h: "Please enter time in 24-hour format (eg 22:45).",
        val_requiredpayment: "Payment is required.",
        val_creditcard: "Please enter a valid credit card number.",
        val_post_max_size: "The total size of the selected files {totalSize} Mb exceeds the allowed limit {maxSize} Mb.",
        val_checklimit: "You have exceeded the number of allowed selections: {#}.",
        val_limit_characters: "{count} of {limit} max characters.",
        val_limit_words: "{count} of {limit} max words.",
        val_recaptcha_fail_msg: "Google reCAPTCHA verification failed, please try again later.",
        val_empty_blanks: "Please fill out all blanks.",
        post_max_size: "104857600",
        uuid_cookie: "",
        locale: "en",
        wpforms_plugin_url: "https:\/\/domain.com\/wp-content\/plugins\/wpforms-lite\/",
        gdpr: "",
        ajaxurl: "https:\/\/domain.com\/wp-admin\/admin-ajax.php",
        mailcheck_enabled: "1",
        mailcheck_domains: [],
        mailcheck_toplevel_domains: ["dev"],
        is_ssl: "1",
    };
    /* ]]> */
</script>
<script type="invalid-type">alert("invalid-type");</script>
<script type="module123">alert("invalid-type");</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">alert("text/javascript");</script>
<script type="rocketlazyloadscript" data-rocket-type="text/x-javascript">alert("text/x-javascript");</script>
<script type="rocketlazyloadscript" data-rocket-type="text/ecmascript">alert("text/ecmascript");</script>
<script type="rocketlazyloadscript" data-rocket-type="text/jscript">alert("text/jscript");</script>
<script type="rocketlazyloadscript" data-rocket-type="application/javascript">alert("application/javascript");</script>
<script type="rocketlazyloadscript" data-rocket-type="application/x-javascript">alert("application/x-javascript");</script>
<script type="rocketlazyloadscript" data-rocket-type="application/ecmascript">alert("application/ecmascript");</script>
<script type="rocketlazyloadscript" data-rocket-type="module">alert("module");</script>
<script src=\'https://stats.wp.com/e-202124.js\' defer></script>
<script>
	_stq = window._stq || [];
	_stq.push([ \'view\', {v:\'ext\',j:\'1:9.8.1\',blog:\'11111111\',post:\'39721\',tz:\'-5\',srv:\'example.com\'} ]);
	_stq.push([ \'clickTrackerInit\', \'11111111\', \'39721\' ]);
</script>
<script>window.ninja_table_instance_0={table_id:"1067",title:"MYGA Rates National - Sheet1.csv (Imported From Table Press)",caption:"",columns:[{name:"companyname",key:"companyname",title:"Company Name",breakpoints:"",type:"text",visible:!0,classes:["ninja_column_0","ninja_clmn_nm_companyname"],filterable:!0,sortable:!1,original:{key:"companyname",name:"Company Name",breakpoints:"",data_type:"text",dateFormat:"",enable_html_content:"false",header_html_content:"",contentAlign:"left",textAlign:"left",maxWidthUnit:"px",unsortable:"yes"}}]};</script>
<script data-cfasync="false" data-pagespeed-no-defer type="text/javascript">//<![CDATA[
	var gtm4wp_datalayer_name = "dataLayer";
	var dataLayer = dataLayer || [];
	var gtm4wp_use_sku_instead        = 1;
	var gtm4wp_id_prefix              = \'\';
	var gtm4wp_remarketing            = false;
	var gtm4wp_eec                    = 1;
	var gtm4wp_classicec              = 1;
	var gtm4wp_currency               = \'USD\';
	var gtm4wp_product_per_impression = 10;
	var gtm4wp_needs_shipping_address = false;
	var gtm4wp_business_vertical      = \'retail\';
	var gtm4wp_business_vertical_id   = \'id\';

	var gtm4wp_scrollerscript_debugmode         = false;
	var gtm4wp_scrollerscript_callbacktime      = 100;
	var gtm4wp_scrollerscript_readerlocation    = 150;
	var gtm4wp_scrollerscript_contentelementid  = "content";
	var gtm4wp_scrollerscript_scannertime       = 60;
//]]>
</script>
<script data-cfasync="false" data-pagespeed-no-defer type="text/javascript">//<![CDATA[
	var dataLayer_content = {"visitorDoNotTrack":1,"pagePostType":"product","pagePostType2":"single-product","pagePostAuthor":"remy","productRatingCounts":[],"productAverageRating":0,"productReviewCount":0,"productType":"simple","productIsVariable":0,"event":"gtm4wp.changeDetailViewEEC","ecommerce":{"currencyCode":"CAD","detail":{"products":[{"id":1762,"name":"Beanie","sku":1762,"category":"Accessories","price":18,"stocklevel":null}]}}};
	dataLayer.push( dataLayer_content );//]]>
</script>
<script>
	var corner_video = \'left\';

	function handlePixMessage (e) {
	// Reference to element for data display
	let regexServed = /served-by.pixfuture.com/g;
	let regexDFP = /.googlesyndication.com/g;

	if ( e.origin.match(regexServed) != null || e.origin.match(regexDFP) != null) {
	e.source.postMessage(\' {"pixHashes":true} \', e.origin);
	}
	}
	window.addEventListener("message", handlePixMessage, false);
	var _pixHashes = \'{"pixHashes":true}\';
</script>
<script src="http://cdn.pixfuture.com/hb_v2.js"></script>
<script src="http://cdn.pixfuture.com/pbix.js"></script>
<script src="http://served-by.pixfuture.com/www/delivery/ads.js"></script>
<script src="http://served-by.pixfuture.com/www/delivery/headerbid_sticky_refresh.js"></script>
<script src="http://serv-vdo.pixfuture.com/vpaid/ads.js"></script>
<script type="rocketlazyloadscript" data-rocket-src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous">
</script>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js"></script>
<script type="rocketlazyloadscript" data-rocket-src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js" data-rocket-type="text/javascript"></script>
<script type="rocketlazyloadscript" data-rocket-src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js"></script>
<script type="rocketlazyloadscript" data-rocket-src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js" ></script>
<script type="rocketlazyloadscript" data-rocket-src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js"></script>
<script type="rocketlazyloadscript" data-rocket-src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js"></script>
<script type="rocketlazyloadscript" data-rocket-src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js" ></script>
<script type="rocketlazyloadscript" data-rocket-src="http://example.org/wp-content/plugins/my-custom-plugin-types/assets/js/name_script.min.js" ></script>
<script>
function wprRemoveCPCSS() {
	let preload_stylesheets = document.querySelectorAll( \'link[data-rocket-async="style"][rel="preload"]\' );
	if ( preload_stylesheets && preload_stylesheets.length > 0 ) {
		for ( let stylesheet_index = 0;stylesheet_index < preload_stylesheets.length;stylesheet_index++ ){
			let media = preload_stylesheets[stylesheet_index].getAttribute(\'media\') || \'all\';
			if( window.matchMedia(media).matches ){
				setTimeout( wprRemoveCPCSS, 200 );
				return;
			}
		}
	}

	const elem = document.getElementById( \'rocket-critical-css\' );
	if ( elem && \'remove\' in elem ) {
		elem.remove();
	}
}

if ( window.addEventListener ) {
	window.addEventListener( \'load\', wprRemoveCPCSS );
} else if ( window.attachEvent ) {
	window.attachEvent( \'onload\', wprRemoveCPCSS );
}
</script>
<script>
window.wsf_form_json_config = {};
</script>
<script id="print-helloworld" type="application/jscript">
	console.log("Hello world application/jscript!");
</script>
<script type="rocketlazyloadscript" id="print-helloworld" data-rocket-type="text/javascript">
	console.log("Hello world application/jscript!");
</script>
</body>
</html>';

return [
	'test_data' => [
		'testShouldNotDelayJSWhenBypass' => [
			'config'   => [
				'bypass'               => true,
				'donotoptimize'        => false,
				'post-excluded'        => false,
				'delay_js'             => 1,
				'delay_js_exclusions'  => [],
			],
			'html'     => $html,
			'expected' => $html,
		],

		'testShouldDoNothingWhenDoNotOptimizeEnabled' => [
			'config'   => [
				'bypass'               => false,
				'donotoptimize'        => true,
				'post-excluded'        => false,
				'delay_js'             => 1,
				'delay_js_exclusions'  => [],
			],
			'html'     => $html,
			'expected' => $html,
		],

		'testShouldDoNothingWhenPostExcluded' => [
			'config'   => [
				'bypass'               => false,
				'donotoptimize'        => false,
				'post-excluded'        => true,
				'delay_js'             => 1,
				'delay_js_exclusions'  => [],
			],
			'html'     => $html,
			'expected' => $html,
		],

		'testShouldDoNothingWhenDelaySettingDisabled' => [
			'config'   => [
				'bypass'               => false,
				'donotoptimize'        => false,
				'post-excluded'        => false,
				'delay_js'             => 0,
				'delay_js_exclusions'  => [],
			],
			'html'     => $html,
			'expected' => $html,
		],

		'testShouldDelayJSWithUpgradeExclusions' => [
			'config'   => [
				'bypass'               => false,
				'donotoptimize'        => false,
				'post-excluded'        => false,
				'delay_js'             => 1,
				'delay_js_exclusions'  => [
					'(?:/wp-content|/wp-includes/)(.*)',
					'/jquery-?[0-9.]*(.min|.slim|.slim.min)?.js',
					'js-(before|after)',
				],
			],
			'html'     => $html,
			'expected' => $delay_html_upgrade,
		],

		'testShouldDelayJS' => [
			'config'   => [
				'bypass'               => false,
				'donotoptimize'        => false,
				'post-excluded'        => false,
				'delay_js'             => 1,
				'delay_js_exclusions'  => [
					'/wp-includes/js/comment-reply.min.js?ver=5.7',
					'js-(after|extra)',
				],
			],
			'html'     => $html,
			'expected' => $delay_html,
		],
	]
];
