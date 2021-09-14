/* Flot plugin for automatically redrawing plots as the placeholder resizes.

Copyright (c) 2007-2014 IOLA and Ole Laursen.
Licensed under the MIT license.

It works by listening for changes on the placeholder div (through the jQuery
resize event plugin) - if the size changes, it will redraw the plot.

There are no options. If you need to disable the plugin for some plots, you
can just fix the size of their placeholders.
*/
/**
 * @module       jQuery resize event
 * @author       "Cowboy" Ben Alman
 * @see          http://benalman.com/projects/jquery-resize-plugin/
 * @license      MIT and GPL (http://benalman.com/about/license/)
 * @version      1.1
 */
!function(e,i,t){"$:nomunge";function s(t){o===!0&&(o=t||1);for(var l=a.length-1;l>=0;l--){var c=e(a[l]);if(c[0]==i||c.is(":visible")){var g=c.width(),d=c.height(),f=c.data(u);!f||g===f.w&&d===f.h||(c.trigger(h,[f.w=g,f.h=d]),o=t||!0)}else f=c.data(u),f.w=0,f.h=0}null!==r&&(o&&(null==t||1e3>t-o)?r=i.requestAnimationFrame(s):(r=setTimeout(s,n[p]),o=!1))}var r,a=[],n=e.resize=e.extend(e.resize,{}),o=!1,l="setTimeout",h="resize",u=h+"-special-event",p="pendingDelay",c="activeDelay",g="throttleWindow";n[p]=200,n[c]=20,n[g]=!0,e.event.special[h]={setup:function(){if(!n[g]&&this[l])return!1;var i=e(this);a.push(this),i.data(u,{w:i.width(),h:i.height()}),1===a.length&&(r=t,s())},teardown:function(){if(!n[g]&&this[l])return!1;for(var i=e(this),t=a.length-1;t>=0;t--)if(a[t]==this){a.splice(t,1);break}i.removeData(u),a.length||(o?cancelAnimationFrame(r):clearTimeout(r),r=null)},add:function(i){function s(i,s,a){var n=e(this),o=n.data(u)||{};o.w=s!==t?s:n.width(),o.h=a!==t?a:n.height(),r.apply(this,arguments)}if(!n[g]&&this[l])return!1;var r;return e.isFunction(i)?(r=i,s):(r=i.handler,void(i.handler=s))}},i.requestAnimationFrame||(i.requestAnimationFrame=function(){return i.webkitRequestAnimationFrame||i.mozRequestAnimationFrame||i.oRequestAnimationFrame||i.msRequestAnimationFrame||function(e,t){return i.setTimeout(function(){e((new Date).getTime())},n[c])}}()),i.cancelAnimationFrame||(i.cancelAnimationFrame=function(){return i.webkitCancelRequestAnimationFrame||i.mozCancelRequestAnimationFrame||i.oCancelRequestAnimationFrame||i.msCancelRequestAnimationFrame||clearTimeout}())}(jQuery,this),function(e){function i(e){function i(){var i=e.getPlaceholder();0!==i.width()&&0!==i.height()&&(e.resize(),e.setupGrid(),e.draw())}function t(e,t){e.getPlaceholder().resize(i)}function s(e,t){e.getPlaceholder().unbind("resize",i)}e.hooks.bindEvents.push(t),e.hooks.shutdown.push(s)}var t={};e.plot.plugins.push({init:i,options:t,name:"resize",version:"1.0"})}(jQuery);
