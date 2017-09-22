﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <link rel="stylesheet" type="text/css" href="main.css">
	<title>Tourism Guide Of Bangladesh</title>
</head>



<style>


.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
    position: relative;
    min-height: 1px;
    padding-right: 5px;
    padding-left: 0px;
	padding-top: 5px;
}





</style>


















<body style="padding:0px; margin:0px; background-color:#fff;font-family:'Open Sans',sans-serif,arial,helvetica,verdana">



<nav class="navbar navbar-default" data-spy="affix" data-offset-top="197" >
  		<div class="container"  >
    <div class="navbar-header">
      <a class="navbar-brand" href="user.php">Tourism Guide</a>
    </div>
    <ul class="nav navbar-nav">
      <!--<li><a href="#">Places To Go</a></li>-->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Places To Go
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="udhaka.php">Dhaka</a></li>
          <li><a href="uchittagong.php">Chittagong</a></li>
          <li><a href="#">Khulna</a></li>
          <li><a href="#">Barisal</a></li>
          <li><a href="#">Rajshahi</a></li>
          <li><a href="#">Rangpur</a></li>
          <li><a href="#">Sylhet</a></li>

        </ul>
      </li>
      <li><a href="#">Plan Your Trip</a></li>
      <li><a href="ugallery.php">Gallary</a></li>
      <li><a href="umap.php">Map</a></li>
      <li><a href="#">forum</a></li>
      
    </ul>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> </a></li>-->
      
    <?php session_start();?>  
      

   
 <?php $username=$_SESSION['name']; ?> 
    
   
<ul class='nav navbar-nav'>
      <!--<li><a href='#''>logout</a></li>-->
      <li class='dropdown'>
        <a class='dropdown-toggle' data-toggle='dropdown' href='#''><?php echo $username; ?>
        <span class='caret'></span></a>
        <ul class='dropdown-menu'>
          <li><a href='#'>Request</a></li>
          <li><a href='#'>Edit Account</a></li>
          <li><a href='index.php'>Logout</a></li>

        </ul>
      </li>
      
    </ul>;

    
  

   
      
      
    
    <li><button  class="btn btn-default glyphicon glyphicon-search search_btn" data-toggle="modal" data-target="#search"></button></li>

      <!--<div id="literalLanguage" class="nav_location">
            <div class="dropdown-wrapper font_2">
                <label for="ddlLanguageSelector" class="accessibility">Select language:</label>
                    <select name="ddlLanguageSelector" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ddlLanguageSelector\&#39;,\&#39;\&#39;)&#39;, 0)" id="ddlLanguageSelector" class="select-image-dropdown">
                <option selected="selected" value="en">English</option>
                <option value="bn">Bangla</option>
                    </select>
            </div>
        </div>-->   
    
  </div>
  </ul>
  
  <!-- Large modal -->

  <div class="modal fade" id="search" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal_content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal_title">Search</h4>
        </div>
        <div class="modal-body">
          <form id="searchForm" method="post">
          		<fieldset>
          			<input id="s" type="text" />
          			<input type="submit" value="Submit" id="submitButton" />
          		</fieldset>

          </form>

          <div id="resultsDiv"></div>
        
        </div>
      </div>
    </div>
  </div>
  

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
                <h4 class="modal-title" id="myModalLabel">
                    Login/Registration - 
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                            <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                                <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email1" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Submit</button>
                                        <a href="javascript:;">Forgot your password?</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="Registration">
                                <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Name</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <select class="form-control">
                                                    <option>Mr.</option>
                                                    <option>Ms.</option>
                                                    <option>Mrs.</option>
                                                </select>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="mobile" placeholder="Mobile" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="button" class="btn btn-primary btn-sm">
                                            Save & Continue</button>
                                        <button type="button" class="btn btn-default btn-sm">
                                            Cancel</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div id="OR" class="hidden-xs">
                            OR</div>
                    </div>
                    <div class="col-md-4">
                        <div class="row text-center sign-with">
                            <div class="col-md-12">
                                <h3>
                                    Sign in with</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-group btn-group-justified">
                                    <a href="https://www.facebook.com/" class="btn btn-primary">Facebook</a> <a href="https://mail.google.com/" class="btn btn-danger">
                                        Google</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


	
	
</nav>

<!-- #region Jssor Slider Begin -->
<!-- Generator: Jssor Slider Maker -->
<!-- Source: http://www.jssor.com -->
<!-- This is deep minimized code which works independently. -->
<script type="text/javascript">
(function(f,g,c,h,e,k,i){/*! Jssor */
new(function(){});var d={Id:function(a){return-c.cos(a*c.PI)/2+.5},m:function(a){return a},he:function(a){return-a*(a-2)},n:function(a){return a*a*a},Kd:function(a){return(a-=1)*a*a+1}};var b=new function(){var j=this,xb=/\S+/g,F=1,wb=2,cb=3,bb=4,fb=5,G,r=0,l=0,s=0,Y=0,A=0,I=navigator,kb=I.appName,o=I.userAgent,p=parseFloat;function Fb(){if(!G){G={De:"ontouchstart"in f||"createTouch"in g};var a;if(I.pointerEnabled||(a=I.msPointerEnabled))G.nd=a?"msTouchAction":"touchAction"}return G}function v(i){if(!r){r=-1;if(kb=="Microsoft Internet Explorer"&&!!f.attachEvent&&!!f.ActiveXObject){var e=o.indexOf("MSIE");r=F;s=p(o.substring(e+5,o.indexOf(";",e)));/*@cc_on Y=@_jscript_version@*/;l=g.documentMode||s}else if(kb=="Netscape"&&!!f.addEventListener){var d=o.indexOf("Firefox"),b=o.indexOf("Safari"),h=o.indexOf("Chrome"),c=o.indexOf("AppleWebKit");if(d>=0){r=wb;l=p(o.substring(d+8))}else if(b>=0){var j=o.substring(0,b).lastIndexOf("/");r=h>=0?bb:cb;l=p(o.substring(j+1,b))}else{var a=/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o);if(a){r=F;l=s=p(a[1])}}if(c>=0)A=p(o.substring(c+12))}else{var a=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);if(a){r=fb;l=p(a[2])}}}return i==r}function q(){return v(F)}function vb(){return q()&&(l<6||g.compatMode=="BackCompat")}function ab(){return v(cb)}function eb(){return v(fb)}function rb(){return ab()&&A>534&&A<535}function J(){v();return A>537||l>42||r==F&&l>=11}function tb(){return q()&&l<9}function sb(a){var b,c;return function(f){if(!b){b=e;var d=a.substr(0,1).toUpperCase()+a.substr(1);n([a].concat(["WebKit","ms","Moz","O","webkit"]),function(g,e){var b=a;if(e)b=g+d;if(f.style[b]!=i)return c=b})}return c}}function qb(b){var a;return function(c){a=a||sb(b)(c)||b;return a}}var K=qb("transform");function jb(a){return{}.toString.call(a)}var gb={};n(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){gb["[object "+a+"]"]=a.toLowerCase()});function n(b,d){var a,c;if(jb(b)=="[object Array]"){for(a=0;a<b.length;a++)if(c=d(b[a],a,b))return c}else for(a in b)if(c=d(b[a],a,b))return c}function D(a){return a==h?String(a):gb[jb(a)]||"object"}function hb(a){for(var b in a)return e}function B(a){try{return D(a)=="object"&&!a.nodeType&&a!=a.window&&(!a.constructor||{}.hasOwnProperty.call(a.constructor.prototype,"isPrototypeOf"))}catch(b){}}function u(a,b){return{x:a,y:b}}function nb(b,a){setTimeout(b,a||0)}function H(b,d,c){var a=!b||b=="inherit"?"":b;n(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.index+b[0].length+1,a.length-1);a=d+e}});a=c+(!a.indexOf(" ")?"":" ")+a;return a}function pb(b,a){if(l<9)b.style.filter=a}j.kf=Fb;j.pd=q;j.gf=ab;j.td=eb;j.Ye=J;j.cc=tb;sb("transform");j.Hd=function(){return l};j.He=function(){v();return A};j.V=nb;function V(a){a.constructor===V.caller&&a.Cd&&a.Cd.apply(a,V.caller.arguments)}j.Cd=V;j.Hb=function(a){if(j.Ee(a))a=g.getElementById(a);return a};function t(a){return a||f.event}j.Ad=t;j.kc=function(b){b=t(b);var a=b.target||b.srcElement||g;if(a.nodeType==3)a=j.zd(a);return a};j.yd=function(a){a=t(a);return{x:a.pageX||a.clientX||0,y:a.pageY||a.clientY||0}};function w(c,d,a){if(a!==i)c.style[d]=a==i?"":a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&f.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,h);b&&(a=b.getPropertyValue(d)||b[d])}return a}}function X(b,c,a,d){if(a!==i){if(a==h)a="";else d&&(a+="px");w(b,c,a)}else return p(w(b,c))}function m(c,a){var d=a?X:w,b;if(a&4)b=qb(c);return function(e,f){return d(e,b?b(e):c,f,a&2)}}function Ab(b){if(q()&&s<9){var a=/opacity=([^)]*)/.exec(b.style.filter||"");return a?p(a[1])/100:1}else return p(b.style.opacity||"1")}function Cb(b,a,f){if(q()&&s<9){var h=b.style.filter||"",i=new RegExp(/[\s]*alpha\([^\)]*\)/g),e=c.round(100*a),d="";if(e<100||f)d="alpha(opacity="+e+") ";var g=H(h,[i],d);pb(b,g)}else b.style.opacity=a==1?"":c.round(a*100)/100}var L={X:["rotate"],bb:["rotateX"],ib:["rotateY"],Zb:["skewX"],bc:["skewY"]};if(!J())L=C(L,{I:["scaleX",2],J:["scaleY",2],W:["translateZ",1]});function M(d,a){var c="";if(a){if(q()&&l&&l<10){delete a.bb;delete a.ib;delete a.W}b.k(a,function(d,b){var a=L[b];if(a){var e=a[1]||0;if(N[b]!=d)c+=" "+a[0]+"("+d+(["deg","px",""])[e]+")"}});if(J()){if(a.vb||a.qb||a.W!=i)c+=" translate3d("+(a.vb||0)+"px,"+(a.qb||0)+"px,"+(a.W||0)+"px)";if(a.I==i)a.I=1;if(a.J==i)a.J=1;if(a.I!=1||a.J!=1)c+=" scale3d("+a.I+", "+a.J+", 1)"}}d.style[K(d)]=c}j.Jc=m("transformOrigin",4);j.Le=m("backfaceVisibility",4);j.Ce=m("transformStyle",4);j.Ze=m("perspective",6);j.Pe=m("perspectiveOrigin",4);j.Ue=function(a,b){if(q()&&s<9||s<10&&vb())a.style.zoom=b==1?"":b;else{var c=K(a),f="scale("+b+")",e=a.style[c],g=new RegExp(/[\s]*scale\(.*?\)/g),d=H(e,[g],f);a.style[c]=d}};j.ic=function(b,a){return function(c){c=t(c);var e=c.type,d=c.relatedTarget||(e=="mouseout"?c.toElement:c.fromElement);(!d||d!==a&&!j.Ne(a,d))&&b(c)}};j.i=function(a,d,b,c){a=j.Hb(a);if(a.addEventListener){d=="mousewheel"&&a.addEventListener("DOMMouseScroll",b,c);a.addEventListener(d,b,c)}else if(a.attachEvent){a.attachEvent("on"+d,b);c&&a.setCapture&&a.setCapture()}};j.T=function(a,c,d,b){a=j.Hb(a);if(a.removeEventListener){c=="mousewheel"&&a.removeEventListener("DOMMouseScroll",d,b);a.removeEventListener(c,d,b)}else if(a.detachEvent){a.detachEvent("on"+c,d);b&&a.releaseCapture&&a.releaseCapture()}};j.Wb=function(a){a=t(a);a.preventDefault&&a.preventDefault();a.cancel=e;a.returnValue=k};j.ff=function(a){a=t(a);a.stopPropagation&&a.stopPropagation();a.cancelBubble=e};j.Y=function(d,c){var a=[].slice.call(arguments,2),b=function(){var b=a.concat([].slice.call(arguments,0));return c.apply(d,b)};return b};j.Qb=function(d,c){for(var b=[],a=d.firstChild;a;a=a.nextSibling)(c||a.nodeType==1)&&b.push(a);return b};function ib(a,c,e,b){b=b||"u";for(a=a?a.firstChild:h;a;a=a.nextSibling)if(a.nodeType==1){if(S(a,b)==c)return a;if(!e){var d=ib(a,c,e,b);if(d)return d}}}j.L=ib;function Q(a,d,f,b){b=b||"u";var c=[];for(a=a?a.firstChild:h;a;a=a.nextSibling)if(a.nodeType==1){S(a,b)==d&&c.push(a);if(!f){var e=Q(a,d,f,b);if(e.length)c=c.concat(e)}}return c}function db(a,c,d){for(a=a?a.firstChild:h;a;a=a.nextSibling)if(a.nodeType==1){if(a.tagName==c)return a;if(!d){var b=db(a,c,d);if(b)return b}}}j.We=db;function ub(a,c,e){var b=[];for(a=a?a.firstChild:h;a;a=a.nextSibling)if(a.nodeType==1){(!c||a.tagName==c)&&b.push(a);if(!e){var d=ub(a,c,e);if(d.length)b=b.concat(d)}}return b}j.Ve=ub;j.Me=function(b,a){return b.getElementsByTagName(a)};function C(){var e=arguments,d,c,b,a,g=1&e[0],f=1+g;d=e[f-1]||{};for(;f<e.length;f++)if(c=e[f])for(b in c){a=c[b];if(a!==i){a=c[b];var h=d[b];d[b]=g&&(B(h)||B(a))?C(g,{},h,a):a}}return d}j.K=C;function W(f,g){var d={},c,a,b;for(c in f){a=f[c];b=g[c];if(a!==b){var e;if(B(a)&&B(b)){a=W(a,b);e=!hb(a)}!e&&(d[c]=a)}}return d}j.Uc=function(a){return D(a)=="function"};j.Ee=function(a){return D(a)=="string"};j.Tc=function(a){return!isNaN(p(a))&&isFinite(a)};j.k=n;j.fe=B;function P(a){return g.createElement(a)}j.xb=function(){return P("DIV")};j.ed=function(){};function T(b,c,a){if(a==i)return b.getAttribute(c);b.setAttribute(c,a)}function S(a,b){return T(a,b)||T(a,"data-"+b)}j.O=T;j.q=S;function y(b,a){if(a==i)return b.className;b.className=a}j.Sc=y;function mb(b){var a={};n(b,function(b){if(b!=i)a[b]=b});return a}function ob(b,a){return b.match(a||xb)}function O(b,a){return mb(ob(b||"",a))}j.qf=ob;function Z(b,c){var a="";n(c,function(c){a&&(a+=b);a+=c});return a}function E(a,c,b){y(a,Z(" ",C(W(O(y(a)),O(c)),O(b))))}j.zd=function(a){return a.parentNode};j.ab=function(a){j.kb(a,"none")};j.M=function(a,b){j.kb(a,b?"none":"")};j.lf=function(b,a){b.removeAttribute(a)};j.ef=function(){return q()&&l<10};j.df=function(d,a){if(a)d.style.clip="rect("+c.round(a.g||a.H||0)+"px "+c.round(a.z)+"px "+c.round(a.B)+"px "+c.round(a.f||a.E||0)+"px)";else if(a!==i){var g=d.style.cssText,f=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],e=H(g,f,"");b.Ub(d,e)}};j.cb=function(){return+new Date};j.P=function(b,a){b.appendChild(a)};j.Vb=function(b,a,c){(c||a.parentNode).insertBefore(b,a)};j.Xb=function(b,a){a=a||b.parentNode;a&&a.removeChild(b)};j.Ud=function(a,b){n(a,function(a){j.Xb(a,b)})};j.dd=function(a){j.Ud(j.Qb(a,e),a)};j.Td=function(a,b){var c=j.zd(a);b&1&&j.R(a,(j.s(c)-j.s(a))/2);b&2&&j.S(a,(j.v(c)-j.v(a))/2)};j.Be=function(b,a){return parseInt(b,a||10)};j.Nd=p;j.Ne=function(b,a){var c=g.body;while(a&&b!==a&&c!==a)try{a=a.parentNode}catch(d){return k}return b===a};function U(d,c,b){var a=d.cloneNode(!c);!b&&j.lf(a,"id");return a}j.jb=U;j.Cb=function(d,f){var a=new Image;function b(e,d){j.T(a,"load",b);j.T(a,"abort",c);j.T(a,"error",c);f&&f(a,d)}function c(a){b(a,e)}if(eb()&&l<11.6||!d)b(!d);else{j.i(a,"load",b);j.i(a,"abort",c);j.i(a,"error",c);a.src=d}};j.Pd=function(d,a,e){var c=d.length+1;function b(b){c--;if(a&&b&&b.src==a.src)a=b;!c&&e&&e(a)}n(d,function(a){j.Cb(a.src,b)});b()};j.ae=function(a,g,i,h){if(h)a=U(a);var c=Q(a,g);if(!c.length)c=b.Me(a,g);for(var f=c.length-1;f>-1;f--){var d=c[f],e=U(i);y(e,y(d));b.Ub(e,d.style.cssText);b.Vb(e,d);b.Xb(d)}return a};function Db(a){var l=this,p="",r=["av","pv","ds","dn"],e=[],q,k=0,f=0,d=0;function h(){E(a,q,e[d||k||f&2||f]);b.lb(a,"pointer-events",d?"none":"")}function c(){k=0;h();j.T(g,"mouseup",c);j.T(g,"touchend",c);j.T(g,"touchcancel",c)}function o(a){if(d)j.Wb(a);else{k=4;h();j.i(g,"mouseup",c);j.i(g,"touchend",c);j.i(g,"touchcancel",c)}}l.ne=function(a){if(a===i)return f;f=a&2||a&1;h()};l.Nb=function(a){if(a===i)return!d;d=a?0:3;h()};l.rb=a=j.Hb(a);var m=b.qf(y(a));if(m)p=m.shift();n(r,function(a){e.push(p+a)});q=Z(" ",e);e.unshift("");j.i(a,"mousedown",o);j.i(a,"touchstart",o)}j.rc=function(a){return new Db(a)};j.lb=w;j.ub=m("overflow");j.S=m("top",2);j.R=m("left",2);j.s=m("width",2);j.v=m("height",2);j.tc=m("marginLeft",2);j.oc=m("marginTop",2);j.F=m("position");j.kb=m("display");j.Q=m("zIndex",1);j.Ib=function(b,a,c){if(a!=i)Cb(b,a,c);else return Ab(b)};j.Ub=function(a,b){if(b!=i)a.style.cssText=b;else return a.style.cssText};j.xe=function(b,a){if(a===i){a=w(b,"backgroundImage")||"";var c=/\burl\s*\(\s*["']?([^"'\r\n,]+)["']?\s*\)/gi.exec(a)||[];return c[1]}w(b,"backgroundImage",a?"url('"+a+"')":"")};var R={a:j.Ib,g:j.S,f:j.R,eb:j.s,gb:j.v,Kb:j.F,Kf:j.kb,U:j.Q};function x(f,l){var e=tb(),b=J(),d=rb(),g=K(f);function k(b,d,a){var e=b.wb(u(-d/2,-a/2)),f=b.wb(u(d/2,-a/2)),g=b.wb(u(d/2,a/2)),h=b.wb(u(-d/2,a/2));b.wb(u(300,300));return u(c.min(e.x,f.x,g.x,h.x)+d/2,c.min(e.y,f.y,g.y,h.y)+a/2)}function a(d,a){a=a||{};var n=a.W||0,p=(a.bb||0)%360,q=(a.ib||0)%360,u=(a.X||0)%360,l=a.I,m=a.J,f=a.Jf;if(l==i)l=1;if(m==i)m=1;if(f==i)f=1;if(e){n=0;p=0;q=0;f=0}var c=new zb(a.vb,a.qb,n);c.bb(p);c.ib(q);c.ve(u);c.ue(a.Zb,a.bc);c.Fc(l,m,f);if(b){c.yb(a.E,a.H);d.style[g]=c.be()}else if(!Y||Y<9){var o="",h={x:0,y:0};if(a.hb)h=k(c,a.hb,a.zb);j.oc(d,h.y);j.tc(d,h.x);o=c.te();var s=d.style.filter,t=new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),r=H(s,[t],o);pb(d,r)}}x=function(e,c){c=c||{};var g=c.E,k=c.H,f;n(R,function(a,b){f=c[b];f!==i&&a(e,f)});j.df(e,c.c);if(!b){g!=i&&j.R(e,(c.gd||0)+g);k!=i&&j.S(e,(c.Vc||0)+k)}if(c.re)if(d)nb(j.Y(h,M,e,c));else a(e,c)};j.Ab=M;if(d)j.Ab=x;if(e)j.Ab=a;else if(!b)a=M;j.N=x;x(f,l)}j.Ab=x;j.N=x;function zb(j,k,o){var d=this,b=[1,0,0,0,0,1,0,0,0,0,1,0,j||0,k||0,o||0,1],i=c.sin,g=c.cos,l=c.tan;function f(a){return a*c.PI/180}function n(a,b){return{x:a,y:b}}function m(c,e,l,m,o,r,t,u,w,z,A,C,E,b,f,k,a,g,i,n,p,q,s,v,x,y,B,D,F,d,h,j){return[c*a+e*p+l*x+m*F,c*g+e*q+l*y+m*d,c*i+e*s+l*B+m*h,c*n+e*v+l*D+m*j,o*a+r*p+t*x+u*F,o*g+r*q+t*y+u*d,o*i+r*s+t*B+u*h,o*n+r*v+t*D+u*j,w*a+z*p+A*x+C*F,w*g+z*q+A*y+C*d,w*i+z*s+A*B+C*h,w*n+z*v+A*D+C*j,E*a+b*p+f*x+k*F,E*g+b*q+f*y+k*d,E*i+b*s+f*B+k*h,E*n+b*v+f*D+k*j]}function e(c,a){return m.apply(h,(a||b).concat(c))}d.Fc=function(a,c,d){if(a!=1||c!=1||d!=1)b=e([a,0,0,0,0,c,0,0,0,0,d,0,0,0,0,1])};d.yb=function(a,c,d){b[12]+=a||0;b[13]+=c||0;b[14]+=d||0};d.bb=function(c){if(c){a=f(c);var d=g(a),h=i(a);b=e([1,0,0,0,0,d,h,0,0,-h,d,0,0,0,0,1])}};d.ib=function(c){if(c){a=f(c);var d=g(a),h=i(a);b=e([d,0,-h,0,0,1,0,0,h,0,d,0,0,0,0,1])}};d.ve=function(c){if(c){a=f(c);var d=g(a),h=i(a);b=e([d,h,0,0,-h,d,0,0,0,0,1,0,0,0,0,1])}};d.ue=function(a,c){if(a||c){j=f(a);k=f(c);b=e([1,l(k),0,0,l(j),1,0,0,0,0,1,0,0,0,0,1])}};d.wb=function(c){var a=e(b,[1,0,0,0,0,1,0,0,0,0,1,0,c.x,c.y,0,1]);return n(a[12],a[13])};d.be=function(){return"matrix3d("+b.join(",")+")"};d.te=function(){return"progid:DXImageTransform.Microsoft.Matrix(M11="+b[0]+", M12="+b[4]+", M21="+b[1]+", M22="+b[5]+", SizingMethod='auto expand')"}}new function(){var a=this;function b(d,g){for(var j=d[0].length,i=d.length,h=g[0].length,f=[],c=0;c<i;c++)for(var k=f[c]=[],b=0;b<h;b++){for(var e=0,a=0;a<j;a++)e+=d[c][a]*g[a][b];k[b]=e}return f}a.I=function(b,c){return a.Mc(b,c,0)};a.J=function(b,c){return a.Mc(b,0,c)};a.Mc=function(a,c,d){return b(a,[[c,0],[0,d]])};a.wb=function(d,c){var a=b(d,[[c.x],[c.y]]);return u(a[0][0],a[1][0])}};var N={gd:0,Vc:0,E:0,H:0,G:1,I:1,J:1,X:0,bb:0,ib:0,vb:0,qb:0,W:0,Zb:0,bc:0};j.Kc=function(c,d){var a=c||{};if(c)if(b.Uc(c))a={ob:a};else if(b.Uc(c.c))a.c={ob:c.c};a.ob=a.ob||d;if(a.c)a.c.ob=a.c.ob||d;return a};j.Xc=function(l,m,x,q,z,A,n){var a=m;if(l){a={};for(var g in m){var B=A[g]||1,w=z[g]||[0,1],f=(x-w[0])/w[1];f=c.min(c.max(f,0),1);f=f*B;var u=c.floor(f);if(f!=u)f-=u;var j=q.ob||d.m,k,C=l[g],o=m[g];if(b.Tc(o)){j=q[g]||j;var y=j(f);k=C+o*y}else{k=b.K({Yb:{}},l[g]);var v=q[g]||{};b.k(o.Yb||o,function(d,a){j=v[a]||v.ob||j;var c=j(f),b=d*c;k.Yb[a]=b;k[a]+=b})}a[g]=k}var t=b.k(m,function(b,a){return N[a]!=i});t&&b.k(N,function(c,b){if(a[b]==i&&l[b]!==i)a[b]=l[b]});if(t){if(a.G)a.I=a.J=a.G;a.hb=n.hb;a.zb=n.zb;a.re=e}}if(m.c&&n.yb){var p=a.c.Yb,s=(p.g||0)+(p.B||0),r=(p.f||0)+(p.z||0);a.f=(a.f||0)+r;a.g=(a.g||0)+s;a.c.f-=r;a.c.z-=r;a.c.g-=s;a.c.B-=s}if(a.c&&b.ef()&&!a.c.g&&!a.c.f&&!a.c.H&&!a.c.E&&a.c.z==n.hb&&a.c.B==n.zb)a.c=h;return a}};function m(){var a=this,d=[];function i(a,b){d.push({vc:a,Bc:b})}function h(a,c){b.k(d,function(b,e){b.vc==a&&b.Bc===c&&d.splice(e,1)})}a.Fb=a.addEventListener=i;a.removeEventListener=h;a.p=function(a){var c=[].slice.call(arguments,1);b.k(d,function(b){b.vc==a&&b.Bc.apply(f,c)})}}var l=function(B,F,i,K,N,M){B=B||0;var a=this,q,n,o,u,D=0,H,I,G,E,A=0,j=0,m=0,z,l,d,g,p,y,w=[],x;function P(a){d+=a;g+=a;l+=a;j+=a;m+=a;A+=a}function t(o){var f=o;if(p)if(!y&&(f>=g||f<d)||y&&f>=d)f=((f-d)%p+p)%p+d;if(!z||u||j!=f){var h=c.min(f,g);h=c.max(h,d);if(!z||u||h!=m){if(M){var k=(h-l)/(F||1);if(i.Pc)k=1-k;var n=b.Xc(N,M,k,H,G,I,i);if(x)b.k(n,function(b,a){x[a]&&x[a](K,b)});else b.N(K,n)}a.Ic(m-l,h-l);var r=m,q=m=h;b.k(w,function(b,c){var a=!z&&y||f<=j?w[w.length-c-1]:b;a.nb(m-A)});j=f;z=e;a.Sb(r,q)}}}function C(a,b,e){b&&a.Rb(g);if(!e){d=c.min(d,a.ad()+A);g=c.max(g,a.Ac()+A)}w.push(a)}var r=f.requestAnimationFrame||f.webkitRequestAnimationFrame||f.mozRequestAnimationFrame||f.msRequestAnimationFrame;if(b.gf()&&b.Hd()<7)r=h;r=r||function(a){b.V(a,i.mb)};function J(){if(q){var d=b.cb(),e=c.min(d-D,i.Rc),a=j+e*o;D=d;if(a*o>=n*o)a=n;t(a);if(!u&&a*o>=n*o)L(E);else r(J)}}function s(f,h,i){if(!q){q=e;u=i;E=h;f=c.max(f,d);f=c.min(f,g);n=f;o=n<j?-1:1;a.Oc();D=b.cb();r(J)}}function L(b){if(q){u=q=E=k;a.Wc();b&&b()}}a.Yc=function(a,b,c){s(a?j+a:g,b,c)};a.Zc=s;a.sb=L;a.de=function(a){s(a)};a.pb=function(){return j};a.Nc=function(){return n};a.Mb=function(){return m};a.nb=t;a.yb=function(a){t(j+a)};a.Lc=function(){return q};a.Oe=function(a){p=a};a.Rb=P;a.hd=function(a,b){C(a,0,b)};a.lc=function(a){C(a,1)};a.ad=function(){return d};a.Ac=function(){return g};a.Sb=a.Oc=a.Wc=a.Ic=b.ed;a.jc=b.cb();i=b.K({mb:16,Rc:50},i);p=i.mc;y=i.ee;x=i.je;d=l=B;g=B+F;I=i.Qc||{};G=i.D||{};H=b.Kc(i.j)};var o=new function(){var h=this;function g(b,a,c){c.push(a);b[a]=b[a]||[];b[a].push(c)}h.Vd=function(d){for(var e=[],a,b=0;b<d.A;b++)for(a=0;a<d.o;a++)g(e,c.ceil(1e5*c.random())%13,[b,a]);return e}},r=function(n,s,q,u,z){var f=this,v,g,a,y=0,x=u.of,r,i=8;function t(a){if(a.g)a.H=a.g;if(a.f)a.E=a.f;b.k(a,function(a){b.fe(a)&&t(a)})}function j(g,f){var a={mb:f,l:1,V:0,o:1,A:1,a:0,G:0,c:0,yb:k,u:k,Pc:k,rf:o.Vd,C:{fb:0,db:0},j:d.Id,Qc:{},ac:[],D:{}};b.K(a,g);t(a);a.j=b.Kc(a.j,d.Id);a.xf=c.ceil(a.l/a.mb);a.cf=function(c,b){c/=a.o;b/=a.A;var f=c+"x"+b;if(!a.ac[f]){a.ac[f]={eb:c,gb:b};for(var d=0;d<a.o;d++)for(var e=0;e<a.A;e++)a.ac[f][e+","+d]={g:e*b,z:d*c+c,B:e*b+b,f:d*c}}return a.ac[f]};if(a.hc){a.hc=j(a.hc,f);a.u=e}return a}function p(B,i,a,w,o,m){var z=this,u,v={},j={},n=[],f,d,s,q=a.C.fb||0,r=a.C.db||0,g=a.cf(o,m),p=C(a),D=p.length-1,t=a.l+a.V*D,x=w+t,l=a.u,y;x+=50;function C(a){var b=a.rf(a);return a.Pc?b.reverse():b}z.fd=x;z.Ob=function(d){d-=w;var e=d<t;if(e||y){y=e;if(!l)d=t-d;var f=c.ceil(d/a.mb);b.k(j,function(a,e){var d=c.max(f,a.Qe);d=c.min(d,a.length-1);if(a.bd!=d){if(!a.bd&&!l)b.M(n[e]);else d==a.Fe&&l&&b.ab(n[e]);a.bd=d;b.N(n[e],a[d])}})}};i=b.jb(i);b.Ab(i,h);if(b.cc()){var E=!i["no-image"],A=b.Ve(i);b.k(A,function(a){(E||a["jssor-slider"])&&b.Ib(a,b.Ib(a),e)})}b.k(p,function(h,i){b.k(h,function(G){var K=G[0],J=G[1],t=K+","+J,n=k,p=k,x=k;if(q&&J%2){if(q&3)n=!n;if(q&12)p=!p;if(q&16)x=!x}if(r&&K%2){if(r&3)n=!n;if(r&12)p=!p;if(r&16)x=!x}a.g=a.g||a.c&4;a.B=a.B||a.c&8;a.f=a.f||a.c&1;a.z=a.z||a.c&2;var E=p?a.B:a.g,B=p?a.g:a.B,D=n?a.z:a.f,C=n?a.f:a.z;a.c=E||B||D||C;s={};d={H:0,E:0,a:1,eb:o,gb:m};f=b.K({},d);u=b.K({},g[t]);if(a.a)d.a=2-a.a;if(a.U){d.U=a.U;f.U=0}var I=a.o*a.A>1||a.c;if(a.G||a.X){var H=e;if(b.cc())if(a.o*a.A>1)H=k;else I=k;if(H){d.G=a.G?a.G-1:1;f.G=1;if(b.cc()||b.td())d.G=c.min(d.G,2);var N=a.X||0;d.X=N*360*(x?-1:1);f.X=0}}if(I){var h=u.Yb={};if(a.c){var w=a.If||1;if(E&&B){h.g=g.gb/2*w;h.B=-h.g}else if(E)h.B=-g.gb*w;else if(B)h.g=g.gb*w;if(D&&C){h.f=g.eb/2*w;h.z=-h.f}else if(D)h.z=-g.eb*w;else if(C)h.f=g.eb*w}s.c=u;f.c=g[t]}var L=n?1:-1,M=p?1:-1;if(a.x)d.E+=o*a.x*L;if(a.y)d.H+=m*a.y*M;b.k(d,function(a,c){if(b.Tc(a))if(a!=f[c])s[c]=a-f[c]});v[t]=l?f:d;var F=a.xf,A=c.round(i*a.V/a.mb);j[t]=new Array(A);j[t].Qe=A;j[t].Fe=A+F-1;for(var z=0;z<=F;z++){var y=b.Xc(f,s,z/F,a.j,a.D,a.Qc,{yb:a.yb,hb:o,zb:m});y.U=y.U||1;j[t].push(y)}})});p.reverse();b.k(p,function(a){b.k(a,function(c){var f=c[0],e=c[1],d=f+","+e,a=i;if(e||f)a=b.jb(i);b.N(a,v[d]);b.ub(a,"hidden");b.F(a,"absolute");B.nf(a);n[d]=a;b.M(a,!l)})})}function w(){var b=this,c=0;l.call(b,0,v);b.Sb=function(d,b){if(b-c>i){c=b;a&&a.Ob(b);g&&g.Ob(b)}};b.cd=r}f.mf=function(){var a=0,b=u.Bb,d=b.length;if(x)a=y++%d;else a=c.floor(c.random()*d);b[a]&&(b[a].tb=a);return b[a]};f.Zd=function(w,x,k,l,b){r=b;b=j(b,i);var h=l.id,e=k.id;h["no-image"]=!l.Tb;e["no-image"]=!k.Tb;var m=h,o=e,u=b,d=b.hc||j({},i);if(!b.u){m=e;o=h}var t=d.Rb||0;g=new p(n,o,d,c.max(t-d.mb,0),s,q);a=new p(n,m,u,c.max(d.mb-t,0),s,q);g.Ob(0);a.Ob(0);v=c.max(g.fd,a.fd);f.tb=w};f.Lb=function(){n.Lb();g=h;a=h};f.Ge=function(){var b=h;if(a)b=new w;return b};if(b.cc()||b.td()||z&&b.He()<537)i=16;m.call(f);l.call(f,-1e7,1e7)},j=function(p,fc){var o=this;function Bc(){var a=this;l.call(a,-1e8,2e8);a.Ke=function(){var b=a.Mb(),d=c.floor(b),f=t(d),e=b-c.floor(b);return{tb:f,Te:d,Kb:e}};a.Sb=function(b,a){var d=c.floor(a);if(d!=a&&a>b)d++;Tb(d,e);o.p(j.Je,t(a),t(b),a,b)}}function Ac(){var a=this;l.call(a,0,0,{mc:r});b.k(A,function(b){D&1&&b.Oe(r);a.lc(b);b.Rb(kb/bc)})}function zc(){var a=this,b=Ub.rb;l.call(a,-1,2,{j:d.m,je:{Kb:Zb},mc:r},b,{Kb:1},{Kb:-2});a.ec=b}function mc(n,m){var b=this,d,f,g,i,c;l.call(b,-1e8,2e8,{Rc:100});b.Oc=function(){O=e;R=h;o.p(j.jf,t(w.pb()),w.pb())};b.Wc=function(){O=k;i=k;var a=w.Ke();o.p(j.Ie,t(w.pb()),w.pb());!a.Kb&&Dc(a.Te,s)};b.Sb=function(j,h){var b;if(i)b=c;else{b=f;if(g){var e=h/g;b=a.Re(e)*(f-d)+d}}w.nb(b)};b.Pb=function(a,e,c,h){d=a;f=e;g=c;w.nb(a);b.nb(0);b.Zc(c,h)};b.zf=function(a){i=e;c=a;b.Yc(a,h,e)};b.Xe=function(a){c=a};w=new Bc;w.hd(n);w.hd(m)}function oc(){var c=this,a=Xb();b.Q(a,0);b.lb(a,"pointerEvents","none");c.rb=a;c.nf=function(c){b.P(a,c);b.M(a)};c.Lb=function(){b.ab(a);b.dd(a)}}function xc(n,f){var d=this,q,N,v,i,y=[],x,C,W,H,S,F,g,w,p;l.call(d,-u,u+1,{});function E(a){q&&q.Bd();T(n,a,0);F=e;q=new J.Z(n,J,b.Nd(b.q(n,"idle"))||lc,!I);q.nb(0)}function Z(){q.jc<J.jc&&E()}function O(p,r,n){if(!H){H=e;if(i&&n){var g=n.width,c=n.height,m=g,l=c;if(g&&c&&a.Eb){if(a.Eb&3&&(!(a.Eb&4)||g>L||c>K)){var h=k,q=L/K*c/g;if(a.Eb&1)h=q>1;else if(a.Eb&2)h=q<1;m=h?g*K/c:L;l=h?K:c*L/g}b.s(i,m);b.v(i,l);b.S(i,(K-l)/2);b.R(i,(L-m)/2)}b.F(i,"absolute");o.p(j.bf,f)}}b.ab(r);p&&p(d)}function Y(b,c,e,g){if(g==R&&s==f&&I)if(!Cc){var a=t(b);B.Zd(a,f,c,d,e);c.af();U.Rb(a-U.ad()-1);U.nb(a);z.Pb(b,b,0)}}function bb(b){if(b==R&&s==f){if(!g){var a=h;if(B)if(B.tb==f)a=B.Ge();else B.Lb();Z();g=new vc(n,f,a,q);g.Ld(p)}!g.Lc()&&g.gc()}}function G(e,i,l){if(e==f){if(e!=i)A[i]&&A[i].Ed();else!l&&g&&g.wf();p&&p.Nb();var m=R=b.cb();d.Cb(b.Y(h,bb,m))}else{var k=c.min(f,e),j=c.max(f,e),o=c.min(j-k,k+r-j),n=u+a.vf-1;(!S||o<=n)&&d.Cb()}}function db(){if(s==f&&g){g.sb();p&&p.uf();p&&p.tf();g.Md()}}function eb(){s==f&&g&&g.sb()}function ab(a){!P&&o.p(j.sf,f,a)}function Q(){p=w.pInstance;g&&g.Ld(p)}d.Cb=function(c,a){a=a||v;if(y.length&&!H){b.M(a);if(!W){W=e;o.p(j.yf,f);b.k(y,function(a){if(!b.O(a,"src")){a.src=b.q(a,"src2")||"";b.kb(a,a["display-origin"])}})}b.Pd(y,i,b.Y(h,O,c,a))}else O(c,a)};d.pf=function(){var j=f;if(a.vd<0)j-=r;var e=j+a.vd*tc;if(D&2)e=t(e);if(!(D&1)&&!ib)e=c.max(0,c.min(e,r-u));if(e!=f){if(B){var g=B.mf(r);if(g){var k=R=b.cb(),i=A[t(e)];return i.Cb(b.Y(h,Y,e,i,g,k),v)}}cb(e)}else if(a.Db){d.Ed();G(f,f)}};d.wc=function(){G(f,f,e)};d.Ed=function(){p&&p.uf();p&&p.tf();d.xd();g&&g.hf();g=h;E()};d.af=function(){b.ab(n)};d.xd=function(){b.M(n)};d.Se=function(){p&&p.Nb()};function T(a,c,d){if(b.O(a,"jssor-slider"))return;if(!F){if(a.tagName=="IMG"){y.push(a);if(!b.O(a,"src")){S=e;a["display-origin"]=b.kb(a);b.ab(a)}}var f=b.xe(a);if(f){var g=new Image;b.q(g,"src2",f);y.push(g)}if(d){b.Q(a,(b.Q(a)||0)+1);b.oc(a,b.oc(a)||0);b.tc(a,b.tc(a)||0);b.Ab(a,{W:0})}}var h=b.Qb(a);b.k(h,function(f){var h=f.tagName,j=b.q(f,"u");if(j=="player"&&!w){w=f;if(w.pInstance)Q();else b.i(w,"dataavailable",Q)}if(j=="caption"){if(c){b.Jc(f,b.q(f,"to"));b.Le(f,b.q(f,"bf"));b.q(f,"3d")&&b.Ce(f,"preserve-3d")}else if(!b.pd()){var g=b.jb(f,k,e);b.Vb(g,f,a);b.Xb(f,a);f=g;c=e}}else if(!F&&!d&&!i){if(h=="A"){if(b.q(f,"u")=="image")i=b.We(f,"IMG");else i=b.L(f,"image",e);if(i){x=f;b.kb(x,"block");b.N(x,V);C=b.jb(x,e);b.F(x,"relative");b.Ib(C,0);b.lb(C,"backgroundColor","#000")}}else if(h=="IMG"&&b.q(f,"u")=="image")i=f;if(i){i.border=0;b.N(i,V)}}T(f,c,d+1)})}d.Ic=function(c,b){var a=u-b;Zb(N,a)};d.tb=f;m.call(d);b.Ze(n,b.q(n,"p"));b.Pe(n,b.q(n,"po"));var M=b.L(n,"thumb",e);if(M){d.Ae=b.jb(M);b.ab(M)}b.M(n);v=b.jb(gb);b.Q(v,1e3);b.i(n,"click",ab);E(e);d.Tb=i;d.wd=C;d.id=n;d.ec=N=n;b.P(N,v);o.Fb(203,G);o.Fb(28,eb);o.Fb(24,db)}function vc(y,f,p,q){var a=this,m=0,u=0,g,h,d,c,i,t,r,n=A[f];l.call(a,0,0);function v(){b.dd(N);cc&&i&&n.wd&&b.P(N,n.wd);b.M(N,!i&&n.Tb)}function w(){a.gc()}function x(b){r=b;a.sb();a.gc()}a.gc=function(){var b=a.Mb();if(!C&&!O&&!r&&s==f){if(!b){if(g&&!i){i=e;a.Md(e);o.p(j.Yd,f,m,u,g,c)}v()}var k,p=j.Fd;if(b!=c)if(b==d)k=c;else if(b==h)k=d;else if(!b)k=h;else k=a.Nc();o.p(p,f,b,m,h,d,c);var l=I&&(!E||F);if(b==c)(d!=c&&!(E&12)||l)&&n.pf();else(l||b!=d)&&a.Zc(k,w)}};a.wf=function(){d==c&&d==a.Mb()&&a.nb(h)};a.hf=function(){B&&B.tb==f&&B.Lb();var b=a.Mb();b<c&&o.p(j.Fd,f,-b-1,m,h,d,c)};a.Md=function(a){p&&b.ub(lb,a&&p.cd.Hf?"":"hidden")};a.Ic=function(b,a){if(i&&a>=g){i=k;v();n.xd();B.Lb();o.p(j.Xd,f,m,u,g,c)}o.p(j.Wd,f,a,m,h,d,c)};a.Ld=function(a){if(a&&!t){t=a;a.Fb($JssorPlayer$.oe,x)}};p&&a.lc(p);g=a.Ac();a.lc(q);h=g+q.Jd;c=a.Ac();d=I?g+q.ud:c}function Kb(a,c,d){b.R(a,c);b.S(a,d)}function Zb(c,b){var a=x>0?x:fb,d=zb*b*(a&1),e=Ab*b*(a>>1&1);Kb(c,d,e)}function Pb(){qb=O;Ib=z.Nc();G=w.pb()}function gc(){Pb();if(C||!F&&E&12){z.sb();o.p(j.Qd)}}function ec(f){if(!C&&(F||!(E&12))&&!z.Lc()){var d=w.pb(),b=c.ceil(G);if(f&&c.abs(H)>=a.qd){b=c.ceil(d);b+=jb}if(!(D&1))b=c.min(r-u,c.max(b,0));var e=c.abs(b-d);e=1-c.pow(1-e,5);if(!P&&qb)z.de(Ib);else if(d==b){tb.Se();tb.wc()}else z.Pb(d,b,e*Vb)}}function Hb(a){!b.q(b.kc(a),"nodrag")&&b.Wb(a)}function rc(a){Yb(a,1)}function Yb(a,c){a=b.Ad(a);var i=b.kc(a);if(!M&&!b.q(i,"nodrag")&&sc()&&(!c||a.touches.length==1)){C=e;yb=k;R=h;b.i(g,c?"touchmove":"mousemove",Bb);b.cb();P=0;gc();if(!qb)x=0;if(c){var f=a.touches[0];ub=f.clientX;vb=f.clientY}else{var d=b.yd(a);ub=d.x;vb=d.y}H=0;hb=0;jb=0;o.p(j.Sd,t(G),G,a)}}function Bb(d){if(C){d=b.Ad(d);var f;if(d.type!="mousemove"){var l=d.touches[0];f={x:l.clientX,y:l.clientY}}else f=b.yd(d);if(f){var j=f.x-ub,k=f.y-vb;if(c.floor(G)!=G)x=x||fb&M;if((j||k)&&!x){if(M==3)if(c.abs(k)>c.abs(j))x=2;else x=1;else x=M;if(ob&&x==1&&c.abs(k)-c.abs(j)>3)yb=e}if(x){var a=k,i=Ab;if(x==1){a=j;i=zb}if(!(D&1)){if(a>0){var g=i*s,h=a-g;if(h>0)a=g+c.sqrt(h)*5}if(a<0){var g=i*(r-u-s),h=-a-g;if(h>0)a=-g-c.sqrt(h)*5}}if(H-hb<-2)jb=0;else if(H-hb>2)jb=-1;hb=H;H=a;sb=G-H/i/(Y||1);if(H&&x&&!yb){b.Wb(d);if(!O)z.zf(sb);else z.Xe(sb)}}}}}function bb(){qc();if(C){C=k;b.cb();b.T(g,"mousemove",Bb);b.T(g,"touchmove",Bb);P=H;z.sb();var a=w.pb();o.p(j.Rd,t(a),a,t(G),G);E&12&&Pb();ec(e)}}function jc(c){if(P){b.ff(c);var a=b.kc(c);while(a&&v!==a){a.tagName=="A"&&b.Wb(c);try{a=a.parentNode}catch(d){break}}}}function Jb(a){A[s];s=t(a);tb=A[s];Tb(a);return s}function Dc(a,b){x=0;Jb(a);o.p(j.Od,t(a),b)}function Tb(a,c){wb=a;b.k(S,function(b){b.pc(t(a),a,c)})}function sc(){var b=j.sd||0,a=X;if(ob)a&1&&(a&=1);j.sd|=a;return M=a&~b}function qc(){if(M){j.sd&=~X;M=0}}function Xb(){var a=b.xb();b.N(a,V);b.F(a,"absolute");return a}function t(a){return(a%r+r)%r}function kc(b,d){if(d)if(!D){b=c.min(c.max(b+wb,0),r-u);d=k}else if(D&2){b=t(b+wb);d=k}cb(b,a.yc,d)}function xb(){b.k(S,function(a){a.qc(a.dc.Gf<=F)})}function hc(){if(!F){F=1;xb();if(!C){E&12&&ec();E&3&&A[s]&&A[s].wc()}}}function Ec(){if(F){F=0;xb();C||!(E&12)||gc()}}function ic(){V={eb:L,gb:K,g:0,f:0};b.k(T,function(a){b.N(a,V);b.F(a,"absolute");b.ub(a,"hidden");b.ab(a)});b.N(gb,V)}function ab(b,a){cb(b,a,e)}function cb(g,f,l){if(Rb&&(!C&&(F||!(E&12))||a.rd)){O=e;C=k;z.sb();if(f==i)f=Vb;var d=Cb.Mb(),b=g;if(l){b=d+g;if(g>0)b=c.ceil(b);else b=c.floor(b)}if(D&2)b=t(b);if(!(D&1))b=c.max(0,c.min(b,r-u));var j=(b-d)%r;b=d+j;var h=d==b?0:f*c.abs(j);h=c.min(h,f*u*1.5);z.Pb(d,b,h||1)}}o.ce=cb;o.Yc=function(){if(!I){I=e;A[s]&&A[s].wc()}};o.we=function(){return P};function W(){return b.s(y||p)}function nb(){return b.v(y||p)}o.hb=W;o.zb=nb;function Eb(c,d){if(c==i)return b.s(p);if(!y){var a=b.xb(g);b.Sc(a,b.Sc(p));b.Ub(a,b.Ub(p));b.kb(a,"block");b.F(a,"relative");b.S(a,0);b.R(a,0);b.ub(a,"visible");y=b.xb(g);b.F(y,"absolute");b.S(y,0);b.R(y,0);b.s(y,b.s(p));b.v(y,b.v(p));b.Jc(y,"0 0");b.P(y,a);var h=b.Qb(p);b.P(p,y);b.lb(p,"backgroundImage","");b.k(h,function(c){b.P(b.q(c,"noscale")?p:a,c);b.q(c,"autocenter")&&Lb.push(c)})}Y=c/(d?b.v:b.s)(y);b.Ue(y,Y);var f=d?Y*W():c,e=d?c:Y*nb();b.s(p,f);b.v(p,e);b.k(Lb,function(a){var c=b.Be(b.q(a,"autocenter"));b.Td(a,c)})}o.se=Eb;o.jd=function(a){var d=c.ceil(t(kb/bc)),b=t(a-s+d);if(b>u){if(a-s>r/2)a-=r;else if(a-s<=-r/2)a+=r}else a=s+b-d;return a};m.call(o);o.rb=p=b.Hb(p);var a=b.K({Eb:0,vf:1,Gc:1,Ec:0,Dc:k,Db:1,Jb:e,rd:e,vd:1,kd:3e3,ld:1,yc:500,Re:d.he,qd:20,md:0,o:1,zc:0,qe:1,Hc:1,od:1},fc);a.Jb=a.Jb&&b.Ye();if(a.pe!=i)a.kd=a.pe;if(a.ze!=i)a.zc=a.ze;var fb=a.Hc&3,tc=(a.Hc&4)/-4||1,mb=a.ye,J=b.K({Z:q,Jb:a.Jb},a.Ff);J.Bb=J.Bb||J.Bf;var Fb=a.Af,Z=a.me,eb=a.le,Q=!a.qe,y,v=b.L(p,"slides",Q),gb=b.L(p,"loading",Q)||b.xb(g),Nb=b.L(p,"navigator",Q),dc=b.L(p,"arrowleft",Q),ac=b.L(p,"arrowright",Q),Mb=b.L(p,"thumbnavigator",Q),pc=b.s(v),nc=b.v(v),V,T=[],uc=b.Qb(v);b.k(uc,function(a){a.tagName=="DIV"&&!b.q(a,"u")&&T.push(a);b.Q(a,(b.Q(a)||0)+1)});var s=-1,wb,tb,r=T.length,L=a.ke||pc,K=a.ie||nc,Wb=a.md,zb=L+Wb,Ab=K+Wb,bc=fb&1?zb:Ab,u=c.min(a.o,r),lb,x,M,yb,S=[],Qb,Sb,Ob,cc,Cc,I,E=a.ld,lc=a.kd,Vb=a.yc,rb,ib,kb,Rb=u<r,D=Rb?a.Db:0,X,P,F=1,O,C,R,ub=0,vb=0,H,hb,jb,Cb,w,U,z,Ub=new oc,Y,Lb=[];if(r){if(a.Jb)Kb=function(a,c,d){b.Ab(a,{vb:c,qb:d})};I=a.Dc;o.dc=fc;ic();b.O(p,"jssor-slider",e);b.Q(v,b.Q(v)||0);b.F(v,"absolute");lb=b.jb(v,e);b.Vb(lb,v);if(mb){cc=mb.Ef;rb=mb.Z;ib=u==1&&r>1&&rb&&(!b.pd()||b.Hd()>=8)}kb=ib||u>=r||!(D&1)?0:a.zc;X=(u>1||kb?fb:-1)&a.od;var Gb=v,A=[],B,N,Db=b.kf(),ob=Db.De,G,qb,Ib,sb;Db.nd&&b.lb(Gb,Db.nd,([h,"pan-y","pan-x","none"])[X]||"");U=new zc;if(ib)B=new rb(Ub,L,K,mb,ob);b.P(lb,U.ec);b.ub(v,"hidden");N=Xb();b.lb(N,"backgroundColor","#000");b.Ib(N,0);b.Vb(N,Gb.firstChild,Gb);for(var db=0;db<T.length;db++){var wc=T[db],yc=new xc(wc,db);A.push(yc)}b.ab(gb);Cb=new Ac;z=new mc(Cb,U);b.i(v,"click",jc,e);b.i(p,"mouseout",b.ic(hc,p));b.i(p,"mouseover",b.ic(Ec,p));if(X){b.i(v,"mousedown",Yb);b.i(v,"touchstart",rc);b.i(v,"dragstart",Hb);b.i(v,"selectstart",Hb);b.i(g,"mouseup",bb);b.i(g,"touchend",bb);b.i(g,"touchcancel",bb);b.i(f,"blur",bb)}E&=ob?10:5;if(Nb&&Fb){Qb=new Fb.Z(Nb,Fb,W(),nb());S.push(Qb)}if(Z&&dc&&ac){Z.Db=D;Z.o=u;Sb=new Z.Z(dc,ac,Z,W(),nb());S.push(Sb)}if(Mb&&eb){eb.Ec=a.Ec;Ob=new eb.Z(Mb,eb);S.push(Ob)}b.k(S,function(a){a.xc(r,A,gb);a.Fb(n.sc,kc)});b.lb(p,"visibility","visible");Eb(W());xb();a.Gc&&b.i(g,"keydown",function(b){if(b.keyCode==37)ab(-a.Gc);else b.keyCode==39&&ab(a.Gc)});var pb=a.Ec;if(!(D&1))pb=c.max(0,c.min(pb,r-u));z.Pb(pb,pb,0)}};j.sf=21;j.Sd=22;j.Rd=23;j.jf=24;j.Ie=25;j.yf=26;j.bf=27;j.Qd=28;j.Je=202;j.Od=203;j.Yd=206;j.Xd=207;j.Wd=208;j.Fd=209;var n={sc:1};var s=function(a,g,i){var c=this;m.call(c);var r,d,f,j;b.s(a);b.v(a);var p,o;function l(a){c.p(n.sc,a,e)}function t(c){b.M(a,c);b.M(g,c)}function s(){p.Nb(i.Db||d>0);o.Nb(i.Db||d<r-i.o)}c.pc=function(b,a,c){if(c)d=a;else{d=b;s()}};c.qc=t;var q;c.xc=function(c){r=c;d=0;if(!q){b.i(a,"click",b.Y(h,l,-j));b.i(g,"click",b.Y(h,l,j));p=b.rc(a);o=b.rc(g);q=e}};c.dc=f=b.K({ge:1},i);j=f.ge;if(f.Fc==k){b.O(a,"noscale",e);b.O(g,"noscale",e)}if(f.Gb){b.O(a,"autocenter",f.Gb);b.O(g,"autocenter",f.Gb)}},p=function(g,B){var i=this,z,p,a,v=[],x,w,d,q,r,u,t,o,s,f,l;m.call(i);g=b.Hb(g);function A(o,f){var g=this,c,m,k;function q(){m.ne(p==f)}function j(e){if(e||!s.we()){var a=d-f%d,b=s.jd((f+a)/d-1),c=b*d+d-a;i.p(n.sc,c)}}g.tb=f;g.Dd=q;k=o.Ae||o.Tb||b.xb();g.ec=c=b.ae(l,"thumbnailtemplate",k,e);m=b.rc(c);a.uc&1&&b.i(c,"click",b.Y(h,j,0));a.uc&2&&b.i(c,"mouseover",b.ic(b.Y(h,j,1),c))}i.pc=function(b,e,f){var a=p;p=b;a!=-1&&v[a].Dd();v[b].Dd();!f&&s.ce(s.jd(c.floor(e/d)))};i.qc=function(a){b.M(g,a)};var y;i.xc=function(D,C){if(!y){z=D;c.ceil(z/d);p=-1;o=c.min(o,C.length);var h=a.fc&1,m=u+(u+q)*(d-1)*(1-h),l=t+(t+r)*(d-1)*h,B=m+(m+q)*(o-1)*h,n=l+(l+r)*(o-1)*(1-h);b.F(f,"absolute");b.ub(f,"hidden");a.Gb&1&&b.R(f,(x-B)/2);a.Gb&2&&b.S(f,(w-n)/2);b.s(f,B);b.v(f,n);var i=[];b.k(C,function(l,g){var j=new A(l,g),e=j.ec,a=c.floor(g/d),k=g%d;b.R(e,(u+q)*k*(1-h));b.S(e,(t+r)*k*h);if(!i[a]){i[a]=b.xb();b.P(f,i[a])}b.P(i[a],e);v.push(j)});var E=b.K({Dc:k,rd:k,ke:m,ie:l,md:q*h+r*(1-h),qd:12,yc:200,ld:1,Hc:a.fc,od:a.Df||a.Cf?0:a.fc},a);s=new j(g,E);y=e}};i.dc=a=b.K({nc:0,Cc:0,o:1,fc:1,Gb:3,uc:1},B);x=b.s(g);w=b.v(g);f=b.L(g,"slides",e);l=b.L(f,"prototype");u=b.s(l);t=b.v(l);b.Xb(l,f);d=a.A||1;q=a.nc;r=a.Cc;o=a.o;a.Fc==k&&b.O(g,"noscale",e)};function q(e,d,c){var a=this;l.call(a,0,c);a.Bd=b.ed;a.Jd=0;a.ud=c}jssor_1_slider_init=function(){var h=[{l:1200,x:.3,D:{f:[.3,.7]},j:{f:d.n,a:d.m},a:2},{l:1200,x:-.3,u:e,j:{f:d.n,a:d.m},a:2},{l:1200,x:-.3,D:{f:[.3,.7]},j:{f:d.n,a:d.m},a:2},{l:1200,x:.3,u:e,j:{f:d.n,a:d.m},a:2},{l:1200,y:.3,D:{g:[.3,.7]},j:{g:d.n,a:d.m},a:2},{l:1200,y:-.3,u:e,j:{g:d.n,a:d.m},a:2},{l:1200,y:-.3,D:{g:[.3,.7]},j:{g:d.n,a:d.m},a:2},{l:1200,y:.3,u:e,j:{g:d.n,a:d.m},a:2},{l:1200,x:.3,o:2,D:{f:[.3,.7]},C:{fb:3},j:{f:d.n,a:d.m},a:2},{l:1200,x:.3,o:2,u:e,C:{fb:3},j:{f:d.n,a:d.m},a:2},{l:1200,y:.3,A:2,D:{g:[.3,.7]},C:{db:12},j:{g:d.n,a:d.m},a:2},{l:1200,y:.3,A:2,u:e,C:{db:12},j:{g:d.n,a:d.m},a:2},{l:1200,y:.3,o:2,D:{g:[.3,.7]},C:{fb:12},j:{g:d.n,a:d.m},a:2},{l:1200,y:-.3,o:2,u:e,C:{fb:12},j:{g:d.n,a:d.m},a:2},{l:1200,x:.3,A:2,D:{f:[.3,.7]},C:{db:3},j:{f:d.n,a:d.m},a:2},{l:1200,x:-.3,A:2,u:e,C:{db:3},j:{f:d.n,a:d.m},a:2},{l:1200,x:.3,y:.3,o:2,A:2,D:{f:[.3,.7],g:[.3,.7]},C:{fb:3,db:12},j:{f:d.n,g:d.n,a:d.m},a:2},{l:1200,x:.3,y:.3,o:2,A:2,D:{f:[.3,.7],g:[.3,.7]},u:e,C:{fb:3,db:12},j:{f:d.n,g:d.n,a:d.m},a:2},{l:1200,V:20,c:3,j:{c:d.n,a:d.m},a:2},{l:1200,V:20,c:3,u:e,j:{c:d.Kd,a:d.m},a:2},{l:1200,V:20,c:12,j:{c:d.n,a:d.m},a:2},{l:1200,V:20,c:12,u:e,j:{c:d.Kd,a:d.m},a:2}],i={Dc:e,ye:{Z:r,Bb:h,of:1},me:{Z:s},le:{Z:p,o:10,nc:8,Cc:8,zc:360}},g=new j("jssor_1",i);function a(){var b=g.rb.parentNode.clientWidth;if(b){b=c.min(b,800);g.se(b)}else f.setTimeout(a,30)}a();b.i(f,"load",a);b.i(f,"resize",a);b.i(f,"orientationchange",a)}})(window,document,Math,null,true,false)
</script>
<style>
.jssora05l,.jssora05r{display:block;position:absolute;width:40px;height:40px;cursor:pointer;background:url('img/a17.png') no-repeat;overflow:hidden}.jssora05l{background-position:-10px -40px}.jssora05r{background-position:-70px -40px}.jssora05l:hover{background-position:-130px -40px}.jssora05r:hover{background-position:-190px -40px}.jssora05l.jssora05ldn{background-position:-250px -40px}.jssora05r.jssora05rdn{background-position:-310px -40px}.jssora05l.jssora05lds{background-position:-10px -40px;opacity:.3;pointer-events:none}.jssora05r.jssora05rds{background-position:-70px -40px;opacity:.3;pointer-events:none}.jssort01 .p{position:absolute;top:0;left:0;width:72px;height:72px}.jssort01 .t{position:absolute;top:0;left:0;width:100%;height:100%;border:none}.jssort01 .w{position:absolute;top:0;left:0;width:100%;height:100%}.jssort01 .c{position:absolute;top:0;left:0;width:68px;height:68px;border:#000 2px solid;box-sizing:content-box;background:url('img/t01.png') -800px -800px no-repeat;_background:none}.jssort01 .pav .c{top:2px;_top:0;left:2px;_left:0;width:68px;height:68px;border:#000 0 solid;_border:#fff 2px solid;background-position:50% 50%}.jssort01 .p:hover .c{top:0;left:0;width:70px;height:70px;border:#fff 1px solid;background-position:50% 50%}.jssort01 .p.pdn .c{background-position:50% 50%;width:68px;height:68px;border:#000 2px solid}* html .jssort01 .c,* html .jssort01 .pdn .c,* html .jssort01 .pav .c{width:72px;height:72px}
</style>

<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:800px;height:456px;overflow:hidden;visibility:hidden;background-color:#24262e;">
<!-- Loading Screen -->
<div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
<div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
</div>
<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:800px;height:356px;overflow:hidden;">
<a data-u="any" href="http://www.jssor.com" style="display:none">Image Gallery</a>
<div>
<img data-u="image" src="img/01.jpg" />
<img data-u="thumb" src="img/thumb-01.jpg" />
</div>
<div>
<img data-u="image" src="img/02.jpg" />
<img data-u="thumb" src="img/thumb-02.jpg" />
</div>
<div>
<img data-u="image" src="img/03.jpg" />
<img data-u="thumb" src="img/thumb-03.jpg" />
</div>
<div>
<img data-u="image" src="img/04.jpg" />
<img data-u="thumb" src="img/thumb-04.jpg" />
</div>
<div>
<img data-u="image" src="img/05.jpg" />
<img data-u="thumb" src="img/thumb-05.jpg" />
</div>
<div>
<img data-u="image" src="img/06.jpg" />
<img data-u="thumb" src="img/thumb-06.jpg" />
</div>
<div>
<img data-u="image" src="img/07.jpg" />
<img data-u="thumb" src="img/thumb-07.jpg" />
</div>
<div>
<img data-u="image" src="img/08.jpg" />
<img data-u="thumb" src="img/thumb-08.jpg" />
</div>
<div>
<img data-u="image" src="img/09.jpg" />
<img data-u="thumb" src="img/thumb-09.jpg" />
</div>
<div>
<img data-u="image" src="img/10.jpg" />
<img data-u="thumb" src="img/thumb-10.jpg" />
</div>
<div>
<img data-u="image" src="img/11.jpg" />
<img data-u="thumb" src="img/thumb-11.jpg" />
</div>
<div>
<img data-u="image" src="img/12.jpg" />
<img data-u="thumb" src="img/thumb-12.jpg" />
</div>
</div>
<!-- Thumbnail Navigator -->
<div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
<!-- Thumbnail Item Skin Begin -->
<div data-u="slides" style="cursor: default;">
<div data-u="prototype" class="p">
<div class="w">
<div data-u="thumbnailtemplate" class="t"></div>
</div>
<div class="c"></div>
</div>
</div>
<!-- Thumbnail Item Skin End -->
</div>
<!-- Arrow Navigator -->
<span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
<span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
</div>











<div class="container">
  
  
    <h2>Video Gallery </h2>
    <div class="row">
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/cfllIbJ2RMw" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/-9nk2ABpK90" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/eBN1loSPJco" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/5umDyBu7fLw" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
    </div>
    
    <div class="row">
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/wvKtKMZwBmY" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/bUfL3BpPurw" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/HIo2rJ5Dh18" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="420" height="315" src="https://www.youtube.com/embed/Jm0oJeg4_Po" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
    </div>
    
    
    
    <div class="row">
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/3Fh09xma0tY" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/43AKdt9oYE0"frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/4Cr20zd9TJc" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/NgUYRwRb2Lo" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
    </div>
    
    <div class="row">
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/_LGH_xeqKYg" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/uQNGaTE2yOo" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="//www.youtube.com/embed/kNMYx66tYP8" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
      <div class="col-sm-3 nopadding">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="215" src="https://www.youtube.com/embed/O9FbbfY5k8A" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      
    </div>
    















<div class="container">
    <section style="height:	15px;"></section>
	<div class="row" style="text-align:center;">
	</div>
    <!----------- Footer ------------>
    <footer class="footer-bs">
        <div class="row">
        	<div class="col-md-3 footer-brand animated fadeInLeft">
            	<h2>Logo</h2>
                <p>Suspendisse hendrerit tellus laoreet luctus pharetra. Aliquam porttitor vitae orci nec ultricies. Curabitur vehicula, libero eget faucibus faucibus, purus erat eleifend enim, porta pellentesque ex mi ut sem.</p>
                <p>© 2017 All rights reserved</p>
            </div>
        	<div class="col-md-4 footer-nav animated fadeInUp">
            	<h4>Menu —</h4>
            	<div class="col-md-6">
                    <ul class="pages">
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Nature</a></li>
                        <li><a href="#">Explores</a></li>
                        <li><a href="#">Science</a></li>
                        <li><a href="#">Advice</a></li>
                    </ul>
                </div>
            	<div class="col-md-6">
                    <ul class="list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        	<div class="col-md-2 footer-social animated fadeInDown">
            	<h4>Follow Us</h4>
            	<ul>
                	<li><a href="#">Facebook</a></li>
                	<li><a href="#">Twitter</a></li>
                	<li><a href="#">Instagram</a></li>
                	<li><a href="#">RSS</a></li>
                </ul>
            </div>
        	<div class="col-md-3 footer-ns animated fadeInRight">
            	<h4>Newsletter</h4>
                <p>A rover wearing a fuzzy suit doesn’t alarm the real penguins</p>
                <p>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                      </span>
                    </div><!-- /input-group -->
                 </p>
            </div>
        </div>
    </footer>

</div>
	












<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>



<script type="text/javascript">jssor_1_slider_init();</script>
<!-- #endregion Jssor Slider End -->
</body>
</html>
