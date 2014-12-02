//Perfect Scrollbar Plugin
(function(e){"use strict";if(typeof define==="function"&&define.amd){define(["jquery"],e)}else if(typeof exports==="object"){e(require("jquery"))}else{e(jQuery)}})(function(e){"use strict";function t(e){if(typeof e==="string"){return parseInt(e,10)}else{return~~e}}var n={wheelSpeed:1,wheelPropagation:false,minScrollbarLength:null,maxScrollbarLength:null,useBothWheelAxes:false,useKeyboard:true,suppressScrollX:false,suppressScrollY:false,scrollXMarginOffset:0,scrollYMarginOffset:0,includePadding:false};var r=0;var i=function(){var e=r++;return function(t){var n=".perfect-scrollbar-"+e;if(typeof t==="undefined"){return n}else{return t+n}}};e.fn.perfectScrollbar=function(r,s){return this.each(function(){function D(e,n){var r=e+n;var i=f-k;if(r<0){L=0}else if(r>i){L=i}else{L=r}var s=t(L*(c-f)/(f-k));u.scrollTop(s)}function P(e,n){var r=e+n;var i=a-y;if(r<0){b=0}else if(r>i){b=i}else{b=r}var s=t(b*(l-a)/(a-y));u.scrollLeft(s)}function H(e){if(o.minScrollbarLength){e=Math.max(e,o.minScrollbarLength)}if(o.maxScrollbarLength){e=Math.min(e,o.maxScrollbarLength)}return e}function B(){var e={width:a,display:g?"inherit":"none"};if(h){e.left=u.scrollLeft()+a-l}else{e.left=u.scrollLeft()}if(E){e.bottom=w-u.scrollTop()}else{e.top=S+u.scrollTop()}v.css(e);var t={top:u.scrollTop(),height:f,display:C?"inherit":"none"};if(O){if(h){t.right=l-u.scrollLeft()-A-N.outerWidth()}else{t.right=A-u.scrollLeft()}}else{if(h){t.left=u.scrollLeft()+a*2-l-M-N.outerWidth()}else{t.left=M+u.scrollLeft()}}T.css(t);m.css({left:b,width:y-x});N.css({top:L,height:k-_})}function j(){u.removeClass("ps-active-x");u.removeClass("ps-active-y");a=o.includePadding?u.innerWidth():u.width();f=o.includePadding?u.innerHeight():u.height();l=u.prop("scrollWidth");c=u.prop("scrollHeight");if(!o.suppressScrollX&&a+o.scrollXMarginOffset<l){g=true;y=H(t(a*a/l));b=t(u.scrollLeft()*(a-y)/(l-a))}else{g=false;y=0;b=0;u.scrollLeft(0)}if(!o.suppressScrollY&&f+o.scrollYMarginOffset<c){C=true;k=H(t(f*f/c));L=t(u.scrollTop()*(f-k)/(c-f))}else{C=false;k=0;L=0;u.scrollTop(0)}if(b>=a-y){b=a-y}if(L>=f-k){L=f-k}B();if(g){u.addClass("ps-active-x")}if(C){u.addClass("ps-active-y")}}function F(){var t;var n;var r=false;m.bind(p("mousedown"),function(e){n=e.pageX;t=m.position().left;v.addClass("in-scrolling");r=true;e.stopPropagation();e.preventDefault()});e(d).bind(p("mousemove"),function(e){if(r){P(t,e.pageX-n);j();e.stopPropagation();e.preventDefault()}});e(d).bind(p("mouseup"),function(e){if(r){r=false;v.removeClass("in-scrolling")}});t=n=null}function I(){var t;var n;var r=false;N.bind(p("mousedown"),function(e){n=e.pageY;t=N.position().top;r=true;T.addClass("in-scrolling");e.stopPropagation();e.preventDefault()});e(d).bind(p("mousemove"),function(e){if(r){D(t,e.pageY-n);j();e.stopPropagation();e.preventDefault()}});e(d).bind(p("mouseup"),function(e){if(r){r=false;T.removeClass("in-scrolling")}});t=n=null}function q(e,t){var n=u.scrollTop();if(e===0){if(!C){return false}if(n===0&&t>0||n>=c-f&&t<0){return!o.wheelPropagation}}var r=u.scrollLeft();if(t===0){if(!g){return false}if(r===0&&e<0||r>=l-a&&e>0){return!o.wheelPropagation}}return true}function R(){function t(e){var t=e.originalEvent.deltaX;var n=-1*e.originalEvent.deltaY;if(typeof t==="undefined"||typeof n==="undefined"){t=-1*e.originalEvent.wheelDeltaX/6;n=e.originalEvent.wheelDeltaY/6}if(e.originalEvent.deltaMode&&e.originalEvent.deltaMode===1){t*=10;n*=10}if(t!==t&&n!==n){t=0;n=e.originalEvent.wheelDelta}return[t,n]}function n(n){var r=t(n);var i=r[0];var s=r[1];e=false;if(!o.useBothWheelAxes){u.scrollTop(u.scrollTop()-s*o.wheelSpeed);u.scrollLeft(u.scrollLeft()+i*o.wheelSpeed)}else if(C&&!g){if(s){u.scrollTop(u.scrollTop()-s*o.wheelSpeed)}else{u.scrollTop(u.scrollTop()+i*o.wheelSpeed)}e=true}else if(g&&!C){if(i){u.scrollLeft(u.scrollLeft()+i*o.wheelSpeed)}else{u.scrollLeft(u.scrollLeft()-s*o.wheelSpeed)}e=true}j();e=e||q(i,s);if(e){n.stopPropagation();n.preventDefault()}}var e=false;if(typeof window.onwheel!=="undefined"){u.bind(p("wheel"),n)}else if(typeof window.onmousewheel!=="undefined"){u.bind(p("mousewheel"),n)}}function U(){var t=false;u.bind(p("mouseenter"),function(e){t=true});u.bind(p("mouseleave"),function(e){t=false});var n=false;e(d).bind(p("keydown"),function(r){if(r.isDefaultPrevented&&r.isDefaultPrevented()){return}if(!t){return}var i=document.activeElement?document.activeElement:d.activeElement;while(i.shadowRoot){i=i.shadowRoot.activeElement}if(e(i).is(":input,[contenteditable]")){return}var s=0;var o=0;switch(r.which){case 37:s=-30;break;case 38:o=30;break;case 39:s=30;break;case 40:o=-30;break;case 33:o=90;break;case 32:case 34:o=-90;break;case 35:if(r.ctrlKey){o=-c}else{o=-f}break;case 36:if(r.ctrlKey){o=u.scrollTop()}else{o=f}break;default:return}u.scrollTop(u.scrollTop()-o);u.scrollLeft(u.scrollLeft()+s);n=q(s,o);if(n){r.preventDefault()}})}function z(){function e(e){e.stopPropagation()}N.bind(p("click"),e);T.bind(p("click"),function(e){var n=t(k/2);var r=e.pageY-T.offset().top-n;var i=f-k;var s=r/i;if(s<0){s=0}else if(s>1){s=1}u.scrollTop((c-f)*s)});m.bind(p("click"),e);v.bind(p("click"),function(e){var n=t(y/2);var r=e.pageX-v.offset().left-n;var i=a-y;var s=r/i;if(s<0){s=0}else if(s>1){s=1}u.scrollLeft((l-a)*s)})}function W(){function t(){var e=window.getSelection?window.getSelection():document.getSlection?document.getSlection():{rangeCount:0};if(e.rangeCount===0){return null}else{return e.getRangeAt(0).commonAncestorContainer}}function i(){if(!n){n=setInterval(function(){u.scrollTop(u.scrollTop()+r.top);u.scrollLeft(u.scrollLeft()+r.left);j()},50)}}function s(){if(n){clearInterval(n);n=null}v.removeClass("in-scrolling");T.removeClass("in-scrolling")}var n=null;var r={top:0,left:0};var o=false;e(d).bind(p("selectionchange"),function(n){if(e.contains(u[0],t())){o=true}else{o=false;s()}});e(window).bind(p("mouseup"),function(e){if(o){o=false;s()}});e(window).bind(p("mousemove"),function(e){if(o){var t={x:e.pageX,y:e.pageY};var n=u.offset();var a={left:n.left,right:n.left+u.outerWidth(),top:n.top,bottom:n.top+u.outerHeight()};if(t.x<a.left+3){r.left=-5;v.addClass("in-scrolling")}else if(t.x>a.right-3){r.left=5;v.addClass("in-scrolling")}else{r.left=0}if(t.y<a.top+3){if(a.top+3-t.y<5){r.top=-5}else{r.top=-20}T.addClass("in-scrolling")}else if(t.y>a.bottom-3){if(t.y-a.bottom+3<5){r.top=5}else{r.top=20}T.addClass("in-scrolling")}else{r.top=0}if(r.top===0&&r.left===0){s()}else{i()}}})}function X(t,n){function r(e,t){u.scrollTop(u.scrollTop()-t);u.scrollLeft(u.scrollLeft()-e);j()}function c(e){f=true}function h(e){f=false}function d(e){if(e.originalEvent.targetTouches){return e.originalEvent.targetTouches[0]}else{return e.originalEvent}}function v(e){var t=e.originalEvent;if(t.targetTouches&&t.targetTouches.length===1){return true}if(t.pointerType&&t.pointerType!=="mouse"){return true}return false}function m(e){if(v(e)){l=true;var t=d(e);i.pageX=t.pageX;i.pageY=t.pageY;s=(new Date).getTime();if(a!==null){clearInterval(a)}e.stopPropagation()}}function g(e){if(!f&&l&&v(e)){var t=d(e);var n={pageX:t.pageX,pageY:t.pageY};var u=n.pageX-i.pageX;var a=n.pageY-i.pageY;r(u,a);i=n;var c=(new Date).getTime();var h=c-s;if(h>0){o.x=u/h;o.y=a/h;s=c}e.stopPropagation();e.preventDefault()}}function y(e){if(!f&&l){l=false;clearInterval(a);a=setInterval(function(){if(Math.abs(o.x)<.01&&Math.abs(o.y)<.01){clearInterval(a);return}r(o.x*30,o.y*30);o.x*=.8;o.y*=.8},10)}}var i={};var s=0;var o={};var a=null;var f=false;var l=false;if(t){e(window).bind(p("touchstart"),c);e(window).bind(p("touchend"),h);u.bind(p("touchstart"),m);u.bind(p("touchmove"),g);u.bind(p("touchend"),y)}if(n){if(window.PointerEvent){e(window).bind(p("pointerdown"),c);e(window).bind(p("pointerup"),h);u.bind(p("pointerdown"),m);u.bind(p("pointermove"),g);u.bind(p("pointerup"),y)}else if(window.MSPointerEvent){e(window).bind(p("MSPointerDown"),c);e(window).bind(p("MSPointerUp"),h);u.bind(p("MSPointerDown"),m);u.bind(p("MSPointerMove"),g);u.bind(p("MSPointerUp"),y)}}}function V(){u.bind(p("scroll"),function(e){j()})}function J(){u.unbind(p());e(window).unbind(p());e(d).unbind(p());u.data("perfect-scrollbar",null);u.data("perfect-scrollbar-update",null);u.data("perfect-scrollbar-destroy",null);m.remove();N.remove();v.remove();T.remove();v=T=m=N=g=C=a=f=l=c=y=b=w=E=S=k=L=A=O=M=h=p=null}function G(){j();V();F();I();z();W();R();if(K||Q){X(K,Q)}if(o.useKeyboard){U()}u.data("perfect-scrollbar",u);u.data("perfect-scrollbar-update",j);u.data("perfect-scrollbar-destroy",J)}var o=e.extend(true,{},n);var u=e(this);if(typeof r==="object"){e.extend(true,o,r)}else{s=r}if(s==="update"){if(u.data("perfect-scrollbar-update")){u.data("perfect-scrollbar-update")()}return u}else if(s==="destroy"){if(u.data("perfect-scrollbar-destroy")){u.data("perfect-scrollbar-destroy")()}return u}if(u.data("perfect-scrollbar")){return u.data("perfect-scrollbar")}u.addClass("ps-container");var a;var f;var l;var c;var h=u.css("direction")==="rtl";var p=i();var d=this.ownerDocument||document;var v=e("<div class='ps-scrollbar-x-rail'>").appendTo(u);var m=e("<div class='ps-scrollbar-x'>").appendTo(v);var g;var y;var b;var w=t(v.css("bottom"));var E=w===w;var S=E?null:t(v.css("top"));var x=t(v.css("borderLeftWidth"))+t(v.css("borderRightWidth"));var T=e("<div class='ps-scrollbar-y-rail'>").appendTo(u);var N=e("<div class='ps-scrollbar-y'>").appendTo(T);var C;var k;var L;var A=t(T.css("right"));var O=A===A;var M=O?null:t(T.css("left"));var _=t(T.css("borderTopWidth"))+t(T.css("borderBottomWidth"));var K="ontouchstart"in window||window.DocumentTouch&&document instanceof window.DocumentTouch;var Q=window.navigator.msMaxTouchPoints!==null;G();return u})}})

$(window).on('scroll', function() {
    if($(window).scrollTop() > 0) {
        $('nav').css({
            boxShadow: '0 0 10px rgba(44,44,44,.3)'
        });
    } else {
        $('nav').css({
            boxShadow: '0 0 10px transparent'
        });
    }
});

$(window).on('load resize', function() {
    $('aside').perfectScrollbar({
        includePadding: true
    });
    //NAV
    //$('nav').width($(window).width());
    
    //GALLERY
    $('.gallery-image').each(function() {
        $(this).height(3/4*$(this).width());
    });
});

$(document).ready(function() {
    //SIDEBAR
    $('.side-toggle').click(function() {
        $('main, aside').toggleClass('hide');
    });
    $('.nav li.second a').click(function() {
        $(this).parent().find('.nav-second').toggleClass('nav-show', 200);
        $(this).toggleClass('selected');
        $('.nav li.second a').not(this).removeClass('selected');
        $('.nav li.second a').not(this).parent().find('.nav-second').removeClass('nav-show', 200);
    });
    
    //FORM
    $('.input-file input:text, .input-file h4').click(function() {
        $(this).parent().find('input:file').click();
        $(this).parent().find('input:file').change(function() {
            var isi = $(this).val();
            $(this).parent().find('input:text').val(isi);
        });
    });
    $('.input-file-exist > h4').click(function() {
        $(this).parent().parent().removeClass('file-exist');
        $(this).parent().parent().find('input[type="text"]').click();
    });
    $('.datepicker').datepicker();
    $('.spinner').spinner();
    
    //PANEL
    $('.panel-close').click(function() {
        $(this).parent().parent().parent().hide('fade', 200);
    });
    $('.panel-minimize').click(function() {
        $(this).parent().parent().parent().toggleClass('panel-minimized');
    });
    
    //BUTTON
    $('html').click(function() {
        $('.dropdown-toggle + ul').hide();
        $('.simple-confirm').hide();
        
    });
    $('.dropdown-toggle').click(function(event) {
        $(this).next('ul.dropdown-menu').toggle();
        event.stopPropagation();
        $('.dropdown-toggle').not(this).next('ul.dropdown-menu').hide();
    });
    
    //ALERT
    $('.alert p i.fa').click(function() {
        $(this).parent().parent().hide('fade',200);
    });
    
    //POPUP
    $('.button-confirm').each(function() {
        var target = $(this).attr('href');
        $(this).removeAttr('href');
        var simpleConfirm = $("<div class='simple-confirm'><p>Are you sure?</p><a href='"+target+"' class='button button-red button-icon'><i class='fa fa-check'></i></a><a class='button button-red button-icon'><i class='fa fa-times'></i></a></div>");
        simpleConfirm.appendTo(this);
    });
    $('.button-confirm').click(function(event) {
        $('.button-confirm').not(this).find('.simple-confirm').hide();
        $(this).find('.simple-confirm').toggle();
        event.stopPropagation();
    });
    
    //TOOLTIP
    $('.tipt').tooltip({
        tooltipClass: 'tipt',
        position: { my: 'center bottom', at: 'center top-6' }
    });
    $('.tipr').tooltip({
        tooltipClass: 'tipr',
        position: { my: 'left center', at: 'right+6 center' }
    });
    $('.tipb').tooltip({
        tooltipClass: 'tipb',
        position: { my: 'center top', at: 'center bottom+6' }
    });
    $('.tipl').tooltip({
        tooltipClass: 'tipl',
        position: { my: 'right center', at: 'left-6 center' }
    });
    
    //FORM VALIDATION
    $('.form-error').tooltip({
        tooltipClass: 'form-error',
        position: { my: 'left top', at: 'left bottom+6' }
    });
    $('input.form-error').keypress(function() {
        $(this).removeAttr('title');
        $(this).tooltip('destroy');
        $(this).removeClass('form-error');
    });
    
    //KHUSUS DEMO
    $('a.open-code').click(function() {
        var target= $(this).attr('data-target');
        $(this).parent().find('pre.show-code code').text($('.'+target).html());
        $(this).parent().find('pre.show-code').toggle();
    });
    
    //DATATABLES
    $('.datatable').DataTable({
        'aoColumnDefs': [{
            'bSortable': false,
            'aTargets': ['nosort']
        }]
    });
    $('.datatable-nosort').DataTable({
        ordering: false
    });
});