jQuery(document).ready(function(){var e=qTranslateConfig.js.get_qtx(),t=function(t){e.addContentHooksByClass("edit-menu-item-title",t),e.addContentHooksByClass("edit-menu-item-attr-title",t),e.addContentHooksByClass("[edit-menu-item-description",t),e.addDisplayHooksByClass("menu-item-title",t),e.addDisplayHooksByTagInClass("link-to-original","A",t)},n=function(e){for(var n=/id="menu-item-(\d+)"/gi;matches=n.exec(e);){var o="menu-item-"+matches[1],i=document.getElementById(o);i&&t(i)}};if(wpNavMenu){var o=wpNavMenu.addMenuItemToBottom;"function"==typeof o&&(wpNavMenu.addMenuItemToBottom=function(e,t){o(e,t),n(e)}),"function"==typeof wp_addMenuItemToTop&&(wpNavMenu.addMenuItemToTop=function(e){wp_addMenuItemToTop(e),n(e)})}var i=function(){wpNavMenu&&("function"==typeof wpNavMenu.refreshKeyboardAccessibility&&wpNavMenu.refreshKeyboardAccessibility(),"function"==typeof wpNavMenu.refreshAdvancedAccessibility&&wpNavMenu.refreshAdvancedAccessibility())};i(),e.addLanguageSwitchAfterListener(i)});