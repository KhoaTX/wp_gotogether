jQuery(document).ready(function(e){var a,n,t,r,l,i,s,h,d=qTranslateConfig.js.get_qtx(),o=function(e,a){switch(qTranslateConfig.url_mode.toString()){case"1":e.search?e.search+="&lang="+a:e.search="?lang="+a;break;case"2":var n=qTranslateConfig.home_url_path,t=e.pathname;"/"!=t[0]&&(t="/"+t);var r=t.indexOf(n);r>=0&&(e.pathname=qTranslateConfig.homeinfo_path+a+t.substring(r+n.length-1));break;case"3":e.host=a+"."+e.host;break;case"4":e.host=qTranslateConfig.domains[a]}},c=function(d){if(!a){var c=document.getElementById("view-post-btn");if(!c||!c.children.length)return;if(a=c.children[0],"A"!=a.tagName)return;n=a.href,t=qtranxj_ce("a",{}),r=n.search(/\?/)>0}t.href=n,o(t,d),a.href=t.href;var g=document.getElementById("preview-action");if(g&&g.children.length&&(g.children[0].href=t.href),1!=qTranslateConfig.url_mode){if(!l){var f=document.getElementById("sample-permalink");f&&f.offsetHeight>0&&f.childNodes.length&&(l=f.childNodes[0],i=l.nodeValue)}l&&(t.href=i,o(t,d),l.nodeValue=t.href)}else h||(e("#sample-permalink").append('<span id="sample-permalink-lang-query"></span>'),h=e("#sample-permalink-lang-query")),h&&h.text((n.search(/\?/)<0?"/?lang=":"&lang=")+d);s||(s=document.getElementById("wp-admin-bar-view")),s&&s.children.length&&(s.children[0].href=a.href)},g=jQuery("#title"),f=jQuery("#title-prompt-text"),m=function(){var e=g.attr("value");e?f.addClass("screen-reader-text"):f.removeClass("screen-reader-text")};d.addCustomContentHooks(),c(d.getActiveLanguage()),d.addLanguageSwitchAfterListener(c),f&&g&&d.addLanguageSwitchAfterListener(m)});