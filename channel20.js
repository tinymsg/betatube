




/*
     FILE ARCHIVED ON 0:14:14 Aug 12, 2010 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 20:59:23 Mar 14, 2022.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
(function(){function h(a){throw a;}
var k=true,m=null,n=false,r,t=this,u=function(a,b,c){a=a.split(".");c=c||t;!(a[0]in c)&&c.execScript&&c.execScript("var "+a[0]);for(var d;a.length&&(d=a.shift());)if(!a.length&&b!==undefined)c[d]=b;else c=c[d]?c[d]:c[d]={}},aa=function(a,b){for(var c=a.split("."),d=b||t,e;e=c.shift();)if(d[e])d=d[e];else return m;return d},ba=function(){},ca=function(a){var b=typeof a;if(b=="object")if(a){if(a instanceof Array||!(a instanceof Object)&&Object.prototype.toString.call(a)=="[object Array]"||typeof a.length==
"number"&&typeof a.splice!="undefined"&&typeof a.propertyIsEnumerable!="undefined"&&!a.propertyIsEnumerable("splice"))return"array";if(!(a instanceof Object)&&(Object.prototype.toString.call(a)=="[object Function]"||typeof a.call!="undefined"&&typeof a.propertyIsEnumerable!="undefined"&&!a.propertyIsEnumerable("call")))return"function"}else return"null";else if(b=="function"&&typeof a.call=="undefined")return"object";return b},da=function(a){return ca(a)=="array"},ea=function(a){var b=ca(a);return b==
"array"||b=="object"&&typeof a.length=="number"},v=function(a){return typeof a=="string"},fa=function(a){return ca(a)=="function"},ga=function(a){a=ca(a);return a=="object"||a=="array"||a=="function"},ja=function(a){return Object.prototype.hasOwnProperty.call(a,ha)?a[ha]:a[ha]=++ia},ha="closure_uid_"+Math.floor(Math.random()*2147483648).toString(36),ia=0,ka=function(a,b){var c=b||t;if(arguments.length>2){var d=Array.prototype.slice.call(arguments,2);return function(){var e=Array.prototype.slice.call(arguments);
Array.prototype.unshift.apply(e,d);return a.apply(c,e)}}else return function(){return a.apply(c,arguments)}},la=Date.now||function(){return+new Date},x=function(a,b){function c(){}c.prototype=b.prototype;a.g=b.prototype;a.prototype=new c};Function.prototype.bind=function(a){if(arguments.length>1){var b=Array.prototype.slice.call(arguments,1);b.unshift(this,a);return ka.apply(m,b)}else return ka(this,a)};var ma=function(a){this.stack=Error().stack||"";if(a)this.message=String(a)};x(ma,Error);ma.prototype.name="CustomError";var na=function(a){for(var b=1;b<arguments.length;b++){var c=String(arguments[b]).replace(/\$/g,"$$$$");a=a.replace(/\%s/,c)}return a},oa=function(a){return a.replace(/^[\s\xa0]+|[\s\xa0]+$/g,"")},ua=function(a,b){if(b)return a.replace(pa,"&amp;").replace(qa,"&lt;").replace(ra,"&gt;").replace(sa,"&quot;");else{if(!ta.test(a))return a;if(a.indexOf("&")!=-1)a=a.replace(pa,"&amp;");if(a.indexOf("<")!=-1)a=a.replace(qa,"&lt;");if(a.indexOf(">")!=-1)a=a.replace(ra,"&gt;");if(a.indexOf('"')!=-1)a=a.replace(sa,
"&quot;");return a}},pa=/&/g,qa=/</g,ra=/>/g,sa=/\"/g,ta=/[&<>\"]/,y=function(a,b,c){a=c!==undefined?a.toFixed(c):String(a);c=a.indexOf(".");if(c==-1)c=a.length;return Array(Math.max(0,b-c)+1).join("0")+a},wa=function(a,b){for(var c=0,d=oa(String(a)).split("."),e=oa(String(b)).split("."),f=Math.max(d.length,e.length),g=0;c==0&&g<f;g++){var i=d[g]||"",j=e[g]||"",l=RegExp("(\\d*)(\\D*)","g"),q=RegExp("(\\d*)(\\D*)","g");do{var o=l.exec(i)||["","",""],p=q.exec(j)||["","",""];if(o[0].length==0&&p[0].length==
0)break;c=va(o[1].length==0?0:parseInt(o[1],10),p[1].length==0?0:parseInt(p[1],10))||va(o[2].length==0,p[2].length==0)||va(o[2],p[2])}while(c==0)}return c},va=function(a,b){if(a<b)return-1;else if(a>b)return 1;return 0};var xa=function(a,b){b.unshift(a);ma.call(this,na.apply(m,b));b.shift();this.le=a};x(xa,ma);xa.prototype.name="AssertionError";var ya=function(a,b){if(!a){var c=Array.prototype.slice.call(arguments,2),d="Assertion failed";if(b){d+=": "+b;var e=c}h(new xa(""+d,e||[]))}};var z=Array.prototype,za=z.indexOf?function(a,b,c){ya(a.length!=m);return z.indexOf.call(a,b,c)}:function(a,b,c){c=c==m?0:c<0?Math.max(0,a.length+c):c;if(v(a)){if(!v(b)||b.length!=1)return-1;return a.indexOf(b,c)}for(c=c;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1},Aa=z.forEach?function(a,b,c){ya(a.length!=m);z.forEach.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=v(a)?a.split(""):a,f=0;f<d;f++)f in e&&b.call(c,e[f],f,a)},Ba=function(a,b){var c=za(a,b),d;if(d=c>=0){ya(a.length!=m);z.splice.call(a,
c,1).length==1}return d},Ca=function(){return z.concat.apply(z,arguments)},Da=function(a){if(da(a))return Ca(a);else{for(var b=[],c=0,d=a.length;c<d;c++)b[c]=a[c];return b}},Fa=function(a){ya(a.length!=m);return z.splice.apply(a,Ea(arguments,1))},Ea=function(a,b,c){ya(a.length!=m);return arguments.length<=2?z.slice.call(a,b):z.slice.call(a,b,c)};var Ga,Ha=function(a){return(a=a.className)&&typeof a.split=="function"?a.split(/\s+/):[]},Ia=function(a){var b=Ha(a),c;c=Ea(arguments,1);for(var d=0,e=0;e<c.length;e++)if(!(za(b,c[e])>=0)){b.push(c[e]);d++}c=d==c.length;a.className=b.join(" ");return c},Ja=function(a){var b=Ha(a),c;c=Ea(arguments,1);for(var d=0,e=0;e<b.length;e++)if(za(c,b[e])>=0){Fa(b,e--,1);d++}c=d==c.length;a.className=b.join(" ");return c};var A=function(a,b){this.x=a!==undefined?a:0;this.y=b!==undefined?b:0};A.prototype.w=function(){return new A(this.x,this.y)};A.prototype.toString=function(){return"("+this.x+", "+this.y+")"};var Ka=function(a,b){return new A(a.x-b.x,a.y-b.y)};var B=function(a,b){this.width=a;this.height=b};B.prototype.w=function(){return new B(this.width,this.height)};B.prototype.toString=function(){return"("+this.width+" x "+this.height+")"};B.prototype.floor=function(){this.width=Math.floor(this.width);this.height=Math.floor(this.height);return this};B.prototype.round=function(){this.width=Math.round(this.width);this.height=Math.round(this.height);return this};var La=function(a,b,c){for(var d in a)b.call(c,a[d],d,a)},Ma=function(a,b,c){for(var d in a)if(b.call(c,a[d],d,a))return d},Na=function(a,b){var c;if(c=b in a)delete a[b];return c},Oa=function(a,b,c){if(b in a)return a[b];return c},Pa=["constructor","hasOwnProperty","isPrototypeOf","propertyIsEnumerable","toLocaleString","toString","valueOf"],Qa=function(a){for(var b,c,d=1;d<arguments.length;d++){c=arguments[d];for(b in c)a[b]=c[b];for(var e=0;e<Pa.length;e++){b=Pa[e];if(Object.prototype.hasOwnProperty.call(c,
b))a[b]=c[b]}}};var Ra,Sa,Ta,Ua,Va,Wa,Xa=function(){return t.navigator?t.navigator.userAgent:m},Ya=function(){return t.navigator};Va=Ua=Ta=Sa=Ra=n;var Za;if(Za=Xa()){var $a=Ya();Ra=Za.indexOf("Opera")==0;Sa=!Ra&&Za.indexOf("MSIE")!=-1;Ua=(Ta=!Ra&&Za.indexOf("WebKit")!=-1)&&Za.indexOf("Mobile")!=-1;Va=!Ra&&!Ta&&$a.product=="Gecko"}var ab=Ra,C=Sa,bb=Va,D=Ta,cb=Ua,db=Ya();Wa=(db&&db.platform||"").indexOf("Mac")!=-1;var eb=!!Ya()&&(Ya().appVersion||"").indexOf("X11")!=-1,fb="",gb;
if(ab&&t.opera){var hb=t.opera.version;fb=typeof hb=="function"?hb():hb}else{if(bb)gb=/rv\:([^\);]+)(\)|;)/;else if(C)gb=/MSIE\s+([^\);]+)(\)|;)/;else if(D)gb=/WebKit\/(\S+)/;if(gb){var ib=gb.exec(Xa());fb=ib?ib[1]:""}}var jb=fb,kb={},E=function(a){return kb[a]||(kb[a]=wa(jb,a)>=0)};var I=function(a){return a?new F(G(a)):Ga||(Ga=new F)},lb=function(a){return v(a)?document.getElementById(a):a},J=lb,nb=function(a,b,c){c=c||document;a=a&&a!="*"?a.toUpperCase():"";if(c.querySelectorAll&&c.querySelector&&(!D||mb(document)||E("528"))&&(a||b))b=c.querySelectorAll(a+(b?"."+b:""));else if(b&&c.getElementsByClassName){c=c.getElementsByClassName(b);if(a){for(var d={},e=0,f=0,g;g=c[f];f++)if(a==g.nodeName)d[e++]=g;d.length=e;b=d}else b=c}else{c=c.getElementsByTagName(a||"*");if(b){d={};
for(f=e=0;g=c[f];f++){a=g.className;if(typeof a.split=="function"&&za(a.split(/\s+/),b)>=0)d[e++]=g}d.length=e;b=d}else b=c}return b},K=nb,pb=function(a,b){La(b,function(c,d){if(d=="style")a.style.cssText=c;else if(d=="class")a.className=c;else if(d=="for")a.htmlFor=c;else if(d in ob)a.setAttribute(ob[d],c);else a[d]=c})},ob={cellpadding:"cellPadding",cellspacing:"cellSpacing",colspan:"colSpan",rowspan:"rowSpan",valign:"vAlign",height:"height",width:"width",usemap:"useMap",frameborder:"frameBorder",
type:"type"},rb=function(a,b,c,d){function e(g){if(g)b.appendChild(v(g)?a.createTextNode(g):g)}for(d=d;d<c.length;d++){var f=c[d];ea(f)&&!(ga(f)&&f.nodeType>0)?Aa(qb(f)?Da(f):f,e):e(f)}},mb=function(a){return a.compatMode=="CSS1Compat"},L=function(a){return a&&a.parentNode?a.parentNode.removeChild(a):m},sb=function(a,b){for(;a&&a.nodeType!=1;)a=b?a.nextSibling:a.previousSibling;return a},tb=function(a,b){if(a.contains&&b.nodeType==1)return a==b||a.contains(b);if(typeof a.compareDocumentPosition!=
"undefined")return a==b||Boolean(a.compareDocumentPosition(b)&16);for(;b&&a!=b;)b=b.parentNode;return b==a},G=function(a){return a.nodeType==9?a:a.ownerDocument||a.document},ub=function(a,b){if("textContent"in a)a.textContent=b;else if(a.firstChild&&a.firstChild.nodeType==3){for(;a.lastChild!=a.firstChild;)a.removeChild(a.lastChild);a.firstChild.data=b}else{for(var c;c=a.firstChild;)a.removeChild(c);a.appendChild(G(a).createTextNode(b))}},qb=function(a){if(a&&typeof a.length=="number")if(ga(a))return typeof a.item==
"function"||typeof a.item=="string";else if(fa(a))return typeof a.item=="function";return n},F=function(a){this.d=a||t.document||document};F.prototype.Bb=I;var vb=function(a){return a.d};F.prototype.i=function(a){return v(a)?this.d.getElementById(a):a};
F.prototype.s=function(){var a=this.d,b=arguments,c=b[0],d=b[1];if(C&&d&&(d.name||d.type)){c=["<",c];d.name&&c.push(' name="',ua(d.name),'"');if(d.type){c.push(' type="',ua(d.type),'"');var e={};Qa(e,d);d=e;delete d.type}c.push(">");c=c.join("")}c=a.createElement(c);if(d)if(v(d))c.className=d;else da(d)?Ia.apply(m,[c].concat(d)):pb(c,d);b.length>2&&rb(a,c,b,2);return c};F.prototype.createElement=function(a){return this.d.createElement(a)};F.prototype.createTextNode=function(a){return this.d.createTextNode(a)};
var wb=function(a){a=!D&&mb(a.d)?a.d.documentElement:a.d.body;return new A(a.scrollLeft,a.scrollTop)};F.prototype.appendChild=function(a,b){a.appendChild(b)};F.prototype.removeNode=L;F.prototype.contains=tb;var xb=function(a,b,c){a.push(encodeURIComponent(b)+"="+encodeURIComponent(c))},yb=function(a){var b=a.type;if(b===undefined)return m;switch(b.toLowerCase()){case "checkbox":case "radio":return a.checked?a.value:m;case "select-one":b=a.selectedIndex;return b>=0?a.options[b].value:m;case "select-multiple":b=[];for(var c,d=0;c=a.options[d];d++)c.selected&&b.push(c.value);return b.length?b:m;default:return a.value!==undefined?a.value:m}};var zb=function(a){if(a=a||aa("window.event")){this.type=a.type;var b=a.target||a.srcElement;if(b&&b.nodeType==3)b=b.parentNode;this.target=b;if(b=a.relatedTarget)try{b=b.nodeName&&b}catch(c){b=m}else if(this.type=="mouseover")b=a.fromElement;else if(this.type=="mouseout")b=a.toElement;this.relatedTarget=b;this.clientX=a.clientX!==undefined?a.clientX:a.pageX;this.clientY=a.clientY!==undefined?a.clientY:a.pageY;this.keyCode=a.keyCode||0;this.charCode=a.charCode||(this.type=="keypress"?this.keyCode:
0);this.t=a}};r=zb.prototype;r.type="";r.target=m;r.relatedTarget=m;r.keyCode=0;r.charCode=0;r.t=m;r.clientX=0;r.clientY=0;r.preventDefault=function(){this.t.returnValue=n;this.t.preventDefault&&this.t.preventDefault()};r.stopPropagation=function(){this.t.cancelBubble=n;this.t.stopPropagation&&this.t.stopPropagation()};var Ab={},Bb=0,Cb=function(a,b,c){return Ma(Ab,function(d){return d[0]==a&&d[1]==b&&d[2]==c})},Db=function(a,b,c){if(!a||!(a.addEventListener||a.attachEvent))return"";var d=Cb(a,b,c);if(d)return d;d=++Bb+"";var e=function(f){return c.call(a,new zb(f))};Ab[d]=[a,b,c,e];a.addEventListener?a.addEventListener(b,e,n):a.attachEvent("on"+b,e);return d},Eb=function(a,b,c){if(a=Cb(a,b,c))if(a in Ab){var d=Ab[a];b=d[0];c=d[1];d=d[3];b.removeEventListener?b.removeEventListener(c,d,n):b.detachEvent("on"+c,d);
delete Ab[a]}},Fb=function(a){a=a||window.event;a=a.target||a.srcElement;if(a.nodeType==3)a=a.parentNode;return a},Gb=function(a){a=a||window.event;a.returnValue=n;a.preventDefault&&a.preventDefault();return n};u("yt.config_",window.yt&&window.yt.config_||{},void 0);u("yt.globals_",window.yt&&window.yt.globals_||{},void 0);var Hb=window.yt&&window.yt.msgs_||{};u("yt.msgs_",Hb,void 0);u("yt.timeouts_",window.yt&&window.yt.timeouts_||[],void 0);u("yt.intervals_",window.yt&&window.yt.intervals_||[],void 0);var Ib=function(a,b,c){b=b||{};if(a=a in Hb?Hb[a]:c)for(var d in b)a=a.replace(RegExp("\\$"+d,"gi"),b[d]);return a};eval("/*@cc_on!@*/false");var Jb={};
(function(){function a(e){var f=e.getElementsByTagName("img");if(f.length){f=f[0];if(!f.complete){e.style.display="none";Db(f,"load",function(){e.style.display=""})}}}function b(e,f,g){this.u={ab:this.ab.bind(this),bb:this.bb.bind(this),$a:this.$a.bind(this),Za:this.Za.bind(this),Ya:this.Ya.bind(this),db:this.db.bind(this),cb:this.cb.bind(this)};this.Td=document.body.dir=="rtl";this.ne=e;this.Lc=f;this.$=J("playnav-arranger-"+e);this.zb=[];this.tc={};this.uc=n;this.je=this.he=this.o=m;this.va={x:0,
y:0};this.la={x:0,y:0};this.position=m;playnav.selectVideo(m);this.vd(g);this.ra=J("playnav-body");e=K("div","pinned",this.ra);f=0;for(g=e.length;f<g;f++)e[f].style.display="none";this.tb=b.xa(this.ra);this.mb=J(playnav.getCurrentScrollboxId());this.$.style.display="block";this.vb=K("select","count-selector",this.$)[0];this.vb.value="6";this.m=[];this.vc=K("div","featured",this.$)[0];this.hc(6,1);this.Db=n;this.Ia=new c(0,this);this.m[5].ha=this.Ia;playnav.setupScrollableItems(this.Ec.bind(this));
Db(document.body,"mousemove",this.u.ab);Db(document.body,"mouseup",this.u.bb);Db(document.body,"mousedown",this.u.$a);window.setTimeout(this.Kb.bind(this),0);this.me=[];this.ub=n;window.setTimeout(function(){playnav.resizeScrollbox(this.mb)}.bind(this),50)}function c(e,f){this.Jc=e;this.parent=f;this.j=$ce("div",{c:"handle dropzone"});this.Ha=$ce("div",{c:"target"},[$ce("div",{c:"number"},$ctn(this.Jc)),this.j]);this.za=$ce("div",{c:"target-holder"},this.Ha);Db(this.j,"mouseover",this.parent.u.Za);
Db(this.j,"mouseout",this.parent.u.Ya);this.j.T=this;return this}function d(e,f){e.T=this;this.parent=f;this.f=e;this.j=$ce("div",{c:"handle"});this.j.T=this;Db(this.j,"mouseover",this.parent.u.db);Db(this.j,"mouseout",this.parent.u.cb);this.Hb();this.f.appendChild(this.j)}b.prototype.qd=function(){function e(){var f=b.xa(this.$);if(this.position){if(f.x!=this.position.x||f.y!=this.position.y){this.Kb();this.tb=b.xa(this.ra);this.position=f}}else this.position=f;this.ub=n}if(!this.ub){this.ub=k;window.setTimeout(e.bind(this),
100)}};b.prototype.W=function(e){if(this.$){if(e&&this.Db)if(!confirm(Ib("CONFIRM_UNSAVED_CHANGES_ARRANGER")))return n;this.$.style.display="none";e=0;for(var f=this.m.length;e<f;e++)this.m[e].W();this.Ia.W();playnav.setupScrollableItems(this.be.bind(this));playnav.setupScrollableItems(m);Eb(document.body,"mousemove",this.u.ab);Eb(document.body,"mouseup",this.u.bb);Eb(document.body,"mousedown",this.u.$a);var g=K("div","pinned",this.ra);e=0;for(f=g.length;e<f;e++)g[e].style.display="";playnav.resizeScrollbox(this.mb);
this.Lc&&this.Lc();return k}};b.rd=$ce("div",{style:"clear:both"});b.prototype.hc=function(e,f){for(var g=m,i=0;i<e;i++){var j=new c(f+i,this);if(g)g.ha=j;g=j;this.vc.appendChild(j.za);this.m.push(j)}this.vc.appendChild(b.rd.cloneNode(n))};b.prototype.yc=function(){if(this.m.length==6){this.hc(6,7);this.m[5].ha=this.m[6];this.m[11].ha=this.Ia}this.vb.value="12";playnav.resizeScrollbox(this.mb);this.Kb()};b.prototype.$d=function(){if(this.m.length==12){for(var e=0;e<6;e++)this.m.pop().W();this.m[5].ha=
this.Ia}this.vb.value="6";playnav.resizeScrollbox(this.mb)};b.prototype.Tc=function(){K("div","loading",this.$)[0].style.display="block"};b.prototype.$c=function(){K("div","loading",this.$)[0].style.display="none"};b.prototype.xd=function(){for(var e=0,f=this.m.length;e<f;e++)if(!this.m[e].ca())return this.m[e]};c.v=m;c.prototype.W=function(){Eb(this.j,"mouseover",this.parent.u.Za);Eb(this.j,"mouseout",this.parent.u.Ya);L(this.j);L(this.za)};b.prototype.Kb=function(){for(var e=this.m,f=0,g=e.length;f<
g;f++)this.Jd(e[f].j)};b.prototype.Jd=function(e){var f=b.xa(e.T.Ha);e.style.width=e.offsetWidth+"px";e.style.height=e.offsetHeight+"px";e.style.top=f.y+"px";if(this.Td)e.style.right=document.body.offsetWidth-f.ee+"px";else e.style.left=f.x+"px";document.body.appendChild(e)};c.prototype.ca=function(){return!!this.f};c.prototype.Ga=function(){c.Ka();c.v=this;_addclass(this.za,"focused")};c.prototype.Mb=function(){c.Tb();c.Ea=this};c.Ka=function(){var e=c.v;if(e){_removeclass(e.za,"focused");c.v=m}};
c.Tb=function(){c.Ea=m};c.prototype.fill=function(e,f){this.aa=e;var g=f||this.aa.wd();this.aa.kb();this.f=g;_addclass(this.za,"draggable");_addclass(this.Ha,"target-filled");this.Ha.appendChild(g);_addclass(this.j,"dropzone-filled");this.aa.Vd(this)};c.prototype.empty=function(){var e=this.f;L(this.f);this.f=m;_removeclass(this.za,"draggable");_removeclass(this.Ha,"target-filled");this.aa.ad();this.aa=m;_removeclass(this.j,"dropzone-filled");return e};c.prototype.Fc=function(e,f){var g=this.aa,i=
m;if(g)i=this.empty();e&&this.fill(e,f);g&&this.ha&&this.ha.Fc(g,i)};c.prototype.gc=function(e){var f=this.aa;if(e){if(f){var g=this.empty();e.fill(f,g)}}else f&&this.empty();this.ha&&this.ha.gc(this)};c.prototype.Xa=function(){if(this.ca()){var e=playnav.getCurPlaylistName()=="playlists"?"encryptedPlaylistId":"encryptedVideoId";if((e=K("div",e,this.f))&&e.length>0)return e[0].innerHTML;return m}};d.v=m;d.J=m;d.prototype.W=function(){this.f.T=m;Eb(this.j,"mouseover",this.parent.u.db);Eb(this.j,"mouseout",
this.parent.u.cb);this.fb&&this.ad();L(this.j);delete this.j;_removeclass(this.f,"draggable");_removeclass(this.f,"in-featured")};d.prototype.Xa=function(){var e=playnav.getCurPlaylistName()=="playlists"?"encryptedPlaylistId":"encryptedVideoId";if((e=K("div",e,this.f))&&e.length>0)return e[0].innerHTML;return m};d.prototype.Ga=function(){d.v=this;_addclass(this.f,"focused")};d.prototype.Mb=function(){d.Ea=this};d.Ka=function(){var e=d.v;if(e){_removeclass(e.f,"focused");d.v=m}};d.Tb=function(){d.Ea=
m};d.prototype.wc=function(){var e=this.f.cloneNode(k),f=$ce("div",{c:"dragging"},e);a(f);_addclass(f,"inner-box-colors");f.f=e;return f};d.prototype.wd=function(){var e=this.j;L(this.j);var f=this.f.cloneNode(k);a(f);this.f.appendChild(e);return f};d.prototype.Hb=function(){_addclass(this.f,"draggable");this.draggable=k};d.prototype.kb=function(){_removeclass(this.f,"draggable");this.draggable=n};d.prototype.Vd=function(e){this.fb=e;this.kb();_addclass(this.f,"in-featured");this.Kc=$ce("div",{c:"number"},
$ctn(e.Jc));this.nd=K("div","content",this.f)[0];this.nd.appendChild(this.Kc)};d.prototype.ad=function(){this.fb=m;this.Hb();_removeclass(this.f,"in-featured");L(this.Kc)};b.prototype.Ec=function(e){e=K("div","playnav-item",e);for(var f=[],g=0,i=e.length;g<i;g++)if(!_hasclass(e[g],"pinned-item")){var j=new d(e[g],this);f.push(j);this.zb.push(j)}this.fc();return f};b.prototype.be=function(e){e=K("div","playnav-item",e);for(var f=0,g=e.length;f<g;f++){var i=e[f];i&&i.T&&i.T.W()}};b.xa=function(e){for(var f=
{x:0,y:0},g=e;g;g=g.offsetParent){f.x+=g.offsetLeft-(g==document.body?0:g.scrollLeft);f.y+=g.offsetTop-(g==document.body?0:g.scrollTop)}f.ee=f.x+e.offsetWidth;f.qe=f.y+e.offsetHeight;return f};b.prototype.ab=function(e){var f=e,g={x:0,y:0};f=f||window.event;if(f.pageX||f.pageY)g={x:f.pageX,y:f.pageY};else if(f.clientX||f.clientY)g={x:f.clientX+document.body.scrollLeft+document.documentElement.scrollLeft,y:f.clientY+document.body.scrollTop+document.documentElement.scrollTop};this.la=g;if(this.o){this.Ub();
return Gb(e)}else this.qd()};b.prototype.bb=function(){if(d.J&&c.v){var e=this.xd();e.fill(d.J);this.Db=k;e!=c.v&&!c.v.ca()&&c.Ka();this.Ia.ca()&&this.Ia.empty()}if(this.o){L(this.o);this.o=m;d.Ka();if(d.J){d.J.fb||d.J.Hb();d.J=m}d.Ea&&d.Ea.Ga()}};b.prototype.Za=function(e){e=Fb(e).T;if(this.o){e.ca()&&e.Fc();e.Ga();_addclass(this.o,"generictheme")}else e.ca()&&e.Ga();e.Mb()};b.prototype.Ya=function(e){e=Fb(e).T;if(this.o){_removeclass(this.o,"generictheme");e.ca()||e.gc()}c.Ka()};b.prototype.db=
function(e){e=Fb(e).T;e.Mb();this.o||e.Ga()};b.prototype.cb=function(){d.Tb();this.o||d.Ka()};b.prototype.Ub=function(){this.o.style.left=this.la.x-this.tb.x-this.va.x+"px";this.o.style.top=this.la.y-this.tb.y-this.va.y+"px"};b.prototype.$a=function(e){switch(Fb(e).tagName.toLowerCase()){case "select":case "option":case "input":return k}if(d.v){var f=d.v;if(!f.draggable)return Gb(e);var g=b.xa(f.f);d.J=f;f.kb();this.o=f.wc();this.ra.appendChild(this.o);this.va.x=this.la.x-g.x;this.va.y=this.la.y-
g.y;this.Ub();return Gb(e)}else if(c.v){f=c.v;g=b.xa(f.Ha);d.J=f.aa;d.J.Ga();f.empty();this.o=d.J.wc();_addclass(this.o,"generictheme");d.J.kb();this.ra.appendChild(this.o);this.va.x=this.la.x-g.x;this.va.y=this.la.y-g.y;this.Ub();return Gb(e)}else if(c.Ea)return Gb(e)};b.prototype.save=function(e){e||this.Tc();var f=[],g=[],i=Iter(this.m).collect(function(j){if(j.ca())return j.Xa()}.bind(this));if(playnav.getCurPlaylistName()=="playlists")g=i;else f=i;f={playlist_name:playnav.getCurPlaylistName(),
video_id_list:f,playlist_id_list:g};if(!e){get_channel_backend().call_box_method(playnav.getBoxInfo(),f,"save_arranged_items",this.Ud.bind(this));playnav.getCurPlaylistName()=="uploads"&&playnav.sort("default")}return f};b.prototype.Ud=function(){this.$c();this.W();playnav.invalidateTab("all");playnav.invalidateTab(playnav.getCurPlaylistName());playnav.selectTab(playnav.getCurPlaylistName())};b.prototype.cancel=function(){this.W(n)};b.prototype.vd=function(e){this.Tc();var f=e||{playlist_name:playnav.getCurPlaylistName()};
get_channel_backend().call_box_method(playnav.getBoxInfo(),f,"get_arranged_items",this.yd.bind(this));if(e)this.Db=k};b.prototype.yd=function(e){var f=$ce("div");f.innerHTML=e;e=this.Ec(f);e.length>this.m.length&&this.yc();for(f=0;f<e.length;f++){var g=e[f];this.tc[g.Xa()]=g;this.m[f].fill(e[f])}this.uc=k;this.$c();this.fc()};b.prototype.fc=function(){if(this.uc)for(;this.zb.length;){var e=this.zb.pop(),f=this.tc[e.Xa()];if(f)if(f=f.fb){f.empty();f.fill(e)}}};b.prototype.ce=function(e){var f=this.m.length;
e=parseInt(e,10);if(e<f)this.$d();else e>f&&this.yc()};b.prototype.destruct=b.prototype.W;b.prototype.save=b.prototype.save;b.prototype.cancel=b.prototype.cancel;b.prototype.updateItemCount=b.prototype.ce;Jb=b})();var M={Wb:["BC","AD"],cd:["Before Christ","Anno Domini"],fd:["J","F","M","A","M","J","J","A","S","O","N","D"],hd:["J","F","M","A","M","J","J","A","S","O","N","D"],pa:["January","February","March","April","May","June","July","August","September","October","November","December"],gd:["January","February","March","April","May","June","July","August","September","October","November","December"],Yb:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],kd:["Jan","Feb","Mar","Apr","May",
"Jun","Jul","Aug","Sep","Oct","Nov","Dec"],$b:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],md:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],pb:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],ld:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],ge:["S","M","T","W","T","F","S"],jd:["S","M","T","W","T","F","S"],Zb:["Q1","Q2","Q3","Q4"],Xb:["1st quarter","2nd quarter","3rd quarter","4th quarter"],Vb:["AM","PM"],La:["EEEE, MMMM d, y","MMMM d, y","MMM d, y",
"M/d/yy"],Va:["h:mm:ss a zzzz","h:mm:ss a z","h:mm:ss a","h:mm a"],fe:{Md:"M/d",MMMMd:"MMMM d",MMMd:"MMM d"},dd:6,ac:[5,6],ed:2};var Kb=function(){},Lb=function(a){if(typeof a=="number"){var b=new Kb;b.Pb=a;var c;c=a;if(c==0)c="Etc/GMT";else{var d=["Etc/GMT",c<0?"-":"+"];c=Math.abs(c);d.push(Math.floor(c/60)%100);c%=60;c!=0&&d.push(":",y(c,2));c=d.join("")}b.Zc=c;a=a;if(a==0)a="UTC";else{c=["UTC",a<0?"+":"-"];a=Math.abs(a);c.push(Math.floor(a/60)%100);a%=60;a!=0&&c.push(":",a);a=c.join("")}b.Rb=[a,a];b.nb=[];return b}b=new Kb;b.Zc=a.id;b.Pb=-a.std_offset;b.Rb=a.names;b.nb=a.transitions;return b},Mb=function(a,b){for(var c=
Date.UTC(b.getUTCFullYear(),b.getUTCMonth(),b.getUTCDate(),b.getUTCHours(),b.getUTCMinutes())/36E5,d=0;d<a.nb.length&&c>=a.nb[d];)d+=2;return d==0?0:a.nb[d-1]};var Nb=function(a){ya(a!==undefined,"Pattern must be defined");this.e=[];typeof a=="number"?this.Wa(a):this.Ma(a)},Ob=[/^\'(?:[^\']|\'\')*\'/,/^(?:G+|y+|M+|k+|S+|E+|a+|h+|K+|H+|c+|L+|Q+|d+|m+|s+|v+|z+|Z+)/,/^[^\'GyMkSEahKHcLQdmsvzZ]+/];Nb.prototype.Ma=function(a){for(;a;)for(var b=0;b<Ob.length;++b){var c=a.match(Ob[b]);if(c){c=c[0];a=a.substring(c.length);if(b==0)if(c=="''")c="'";else{c=c.substring(1,c.length-1);c=c.replace(/\'\'/,"'")}this.e.push({text:c,type:b});break}}};
Nb.prototype.Wa=function(a){if(a<4)a=M.La[a];else if(a<8)a=M.Va[a-4];else if(a<12)a=M.La[a-8]+" "+M.Va[a-8];else{this.Wa(10);return}this.Ma(a)};
var Pb=function(a,b,c,d,e,f){a=b.length;switch(b.charAt(0)){case "G":c=d.getFullYear()>0?1:0;return a>=4?M.cd[c]:M.Wb[c];case "y":c=d.getFullYear();if(c<0)c=-c;return a==2?y(c%100,2):String(c);case "M":a:{c=d.getMonth();switch(a){case 5:a=M.fd[c];break a;case 4:a=M.pa[c];break a;case 3:a=M.Yb[c];break a;default:a=y(c+1,a);break a}}return a;case "k":return y(e.getHours()||24,a);case "S":return(e.getTime()%1E3/1E3).toFixed(Math.min(3,a)).substr(2)+(a>3?y(0,a-3):"");case "E":c=d.getDay();return a>=4?
M.$b[c]:M.pb[c];case "a":a=e.getHours();return M.Vb[a>=12&&a<24?1:0];case "h":return y(e.getHours()%12||12,a);case "K":return y(e.getHours()%12,a);case "H":return y(e.getHours(),a);case "c":a:{c=d.getDay();switch(a){case 5:a=M.jd[c];break a;case 4:a=M.md[c];break a;case 3:a=M.ld[c];break a;default:a=y(c,1);break a}}return a;case "L":a:{c=d.getMonth();switch(a){case 5:a=M.hd[c];break a;case 4:a=M.gd[c];break a;case 3:a=M.kd[c];break a;default:a=y(c+1,a);break a}}return a;case "Q":c=Math.floor(d.getMonth()/
3);return a<4?M.Zb[c]:M.Xb[c];case "d":return y(d.getDate(),a);case "m":return y(e.getMinutes(),a);case "s":return y(e.getSeconds(),a);case "v":a=(a=f)||Lb(c.getTimezoneOffset());return a.Zc;case "z":b=(b=f)||Lb(c.getTimezoneOffset());return a<4?b.Rb[Mb(b,c)>0?2:0]:b.Rb[Mb(b,c)>0?3:1];case "Z":b=(b=f)||Lb(c.getTimezoneOffset());if(a<4){a=-(b.Pb-Mb(b,c));c=[a<0?"-":"+"];a=Math.abs(a);c.push(y(Math.floor(a/60)%100,2),y(a%60,2));a=c.join("")}else{a=b.Pb-Mb(b,c);c=["GMT"];c.push(a<=0?"+":"-");a=Math.abs(a);
c.push(y(Math.floor(a/60)%100,2),":",y(a%60,2));a=c.join("")}return a;default:return""}};var Qb=function(a){this.e=[];typeof a=="number"?this.Wa(a):this.Ma(a)};
Qb.prototype.Ma=function(a){for(var b=n,c="",d=0;d<a.length;d++){var e=a.charAt(d);if(e==" "){if(c.length>0){this.e.push({text:c,U:0,qa:n});c=""}for(this.e.push({text:" ",U:0,qa:n});d<a.length-1&&a.charAt(d+1)==" ";)d++}else if(b)if(e=="'")if(d+1<a.length&&a.charAt(d+1)=="'"){c+="'";d++}else b=n;else c+=e;else if("GyMdkHmsSEDahKzZvQ".indexOf(e)>=0){if(c.length>0){this.e.push({text:c,U:0,qa:n});c=""}var f;f=a.charAt(d);for(var g=d+1;g<a.length&&a.charAt(g)==f;)g++;f=g-d;this.e.push({text:e,U:f,qa:n});
d+=f-1}else if(e=="'")if(d+1<a.length&&a.charAt(d+1)=="'"){c+="'";d++}else b=k;else c+=e}c.length>0&&this.e.push({text:c,U:0,qa:n});a=n;for(b=0;b<this.e.length;b++)if(Rb(this,this.e[b])){if(!a&&b+1<this.e.length&&Rb(this,this.e[b+1])){a=k;this.e[b].qa=k}}else a=n};Qb.prototype.Wa=function(a){if(a>11)a=10;this.Ma(a<4?M.La[a]:a<8?M.Va[a-4]:M.La[a-8]+" "+M.Va[a-8])};
var Rb=function(a,b){if(b.U<=0)return n;var c="MydhHmsSDkK".indexOf(b.text.charAt(0));return c>0||c==0&&b.U<3},Sb=function(a,b,c){if(a=b.substring(c[0]).match(/^\s+/))c[0]+=a[0].length},Vb=function(a,b,c,d,e,f){Sb(a,b,c);var g=c[0],i=d.text.charAt(0),j=-1;if(Rb(a,d))if(e>0){if(g+e>b.length)return n;j=Tb(a,b.substring(0,g+e),c)}else j=Tb(a,b,c);switch(i){case "G":f.rc=Ub(a,b,c,M.Wb);return k;case "M":a:{d=j;if(d<0){d=Ub(a,b,c,M.pa);if(d<0)d=Ub(a,b,c,M.Yb);if(d<0){f=n;break a}f.Da=d}else f.Da=d-1;f=
k}return f;case "E":d=Ub(a,b,c,M.$b);if(d<0)d=Ub(a,b,c,M.pb);if(d<0)f=n;else{f.wb=d;f=k}return f;case "a":f.bc=Ub(a,b,c,M.Vb);return k;case "y":a:{j=j;var l;if(j<0){l=b.charAt(c[0]);if(l!="+"&&l!="-"){f=n;break a}c[0]++;j=Tb(a,b,c);if(j<0){f=n;break a}if(l=="-")j=-j}if(!l&&c[0]-g==2&&d.U==2){a=j;b=(new Date).getFullYear()-80;c=b%100;f.od=a==c;a+=Math.floor(b/100)*100+(a<c?100:0);f.Y=a}else f.Y=j;f=k}return f;case "Q":d=j;if(d<0){d=Ub(a,b,c,M.Xb);if(d<0)d=Ub(a,b,c,M.Zb);if(d<0)f=n;else{f.Da=d*3;f.sa=
1;f=k}}else f=n;return f;case "d":f.sa=j;return k;case "S":a=c[0]-g;f.Jb=a<3?j*Math.pow(10,3-a):Math.round(j/Math.pow(10,a-3));return k;case "h":if(j==12)j=0;case "K":case "H":case "k":f.l=j;return k;case "m":f.p=j;return k;case "s":f.q=j;return k;case "z":case "Z":case "v":if(b.indexOf("GMT",c[0])==c[0])c[0]+=3;b:if(c[0]>=b.length){f.Sb=0;f=k}else{d=1;switch(b.charAt(c[0])){case "-":d=-1;case "+":c[0]++}g=c[0];j=Tb(a,b,c);if(j==0&&c[0]==g)f=n;else{if(c[0]<b.length&&b.charAt(c[0])==":"){l=j*60;c[0]++;
g=c[0];j=Tb(a,b,c);if(j==0&&c[0]==g){f=n;break b}l+=j}else{l=j;if(l<24&&c[0]-g<=2)l*=60;else l=l%100+l/100*60}l*=d;f.Sb=-l;f=k}}return f;default:return n}},Tb=function(a,b,c){a=b.substring(c[0]).match(/^\d+/);if(!a)return-1;c[0]+=a[0].length;return parseInt(a[0],10)},Ub=function(a,b,c,d){a=0;var e=-1;b=b.substring(c[0]).toLowerCase();for(var f=0;f<d.length;f++){var g=d[f].length;if(g>a&&b.indexOf(d[f].toLowerCase())==0){e=f;a=g}}if(e>=0)c[0]+=a;return e},Wb=function(){};var Xb=function(a,b){switch(b){case 1:return a%4==0&&(a%100!=0||a%400==0)?29:28;case 5:case 8:case 10:case 3:return 30}return 31},N=function(a,b,c,d,e,f){if(v(a)){this.H=a=="y"?b:0;this.G=a=="m"?b:0;this.B=a=="d"?b:0;this.l=a=="h"?b:0;this.p=a=="n"?b:0;this.q=a=="s"?b:0}else{this.H=a||0;this.G=b||0;this.B=c||0;this.l=d||0;this.p=e||0;this.q=f||0}};
N.prototype.Ua=function(a){var b=Math.min(this.H,this.G,this.B,this.l,this.p,this.q),c=Math.max(this.H,this.G,this.B,this.l,this.p,this.q);if(b<0&&c>0)return m;if(!a&&b==0&&c==0)return"PT0S";c=[];b<0&&c.push("-");c.push("P");if(this.H||a)c.push(Math.abs(this.H)+"Y");if(this.G||a)c.push(Math.abs(this.G)+"M");if(this.B||a)c.push(Math.abs(this.B)+"D");if(this.l||this.p||this.q||a){c.push("T");if(this.l||a)c.push(Math.abs(this.l)+"H");if(this.p||a)c.push(Math.abs(this.p)+"M");if(this.q||a)c.push(Math.abs(this.q)+
"S")}return c.join("")};N.prototype.equals=function(a){return a.H==this.H&&a.G==this.G&&a.B==this.B&&a.l==this.l&&a.p==this.p&&a.q==this.q};N.prototype.w=function(){return new N(this.H,this.G,this.B,this.l,this.p,this.q)};N.prototype.add=function(a){this.H+=a.H;this.G+=a.G;this.B+=a.B;this.l+=a.l;this.p+=a.p;this.q+=a.q};
var O=function(a,b,c){if(typeof a=="number"){this.a=new Date(a,b||0,c||1);Yb(this,c||1)}else if(ga(a)){this.a=new Date(a.getFullYear(),a.getMonth(),a.getDate());Yb(this,a.getDate())}else{this.a=new Date;this.a.setHours(0);this.a.setMinutes(0);this.a.setSeconds(0);this.a.setMilliseconds(0)}};r=O.prototype;r.X=0;r.wa=3;r.w=function(){var a=new O(this.a);a.X=this.X;a.wa=this.wa;return a};r.getFullYear=function(){return this.a.getFullYear()};r.getYear=function(){return this.getFullYear()};
r.getMonth=function(){return this.a.getMonth()};r.getDate=function(){return this.a.getDate()};r.getTime=function(){return this.a.getTime()};r.getDay=function(){return this.a.getDay()};r.getUTCFullYear=function(){return this.a.getUTCFullYear()};r.getUTCMonth=function(){return this.a.getUTCMonth()};r.getUTCDate=function(){return this.a.getUTCDate()};r.getUTCHours=function(){return this.a.getUTCHours()};r.getUTCMinutes=function(){return this.a.getUTCMinutes()};r.getTimezoneOffset=function(){return this.a.getTimezoneOffset()};
var Zb=function(a){a=a.getTimezoneOffset();if(a==0)a="Z";else{var b=Math.abs(a)/60,c=Math.floor(b);b=(b-c)*60;a=(a>0?"-":"+")+y(c,2)+":"+y(b,2)}return a};r=O.prototype;r.set=function(a){this.a=new Date(a.getFullYear(),a.getMonth(),a.getDate())};r.setFullYear=function(a){this.a.setFullYear(a)};r.setMonth=function(a){this.a.setMonth(a)};r.setDate=function(a){this.a.setDate(a)};r.setTime=function(a){this.a.setTime(a)};
r.add=function(a){if(a.H||a.G){var b=this.getMonth()+a.G+a.H*12,c=this.getYear()+Math.floor(b/12);b%=12;if(b<0)b+=12;var d=Math.min(Xb(c,b),this.getDate());this.setDate(1);this.setFullYear(c);this.setMonth(b);this.setDate(d)}if(a.B){b=new Date(this.getYear(),this.getMonth(),this.getDate(),12);a=new Date(b.getTime()+a.B*864E5);this.setDate(1);this.setFullYear(a.getFullYear());this.setMonth(a.getMonth());this.setDate(a.getDate());Yb(this,a.getDate())}};
r.Ua=function(a,b){return[this.getFullYear(),y(this.getMonth()+1,2),y(this.getDate(),2)].join(a?"-":"")+(b?Zb(this):"")};r.equals=function(a){return this.getYear()==a.getYear()&&this.getMonth()==a.getMonth()&&this.getDate()==a.getDate()};r.toString=function(){return this.Ua()};var Yb=function(a,b){if(a.getDate()!=b){var c=a.getDate()<b?1:-1;a.a.setUTCHours(a.a.getUTCHours()+c)}};O.prototype.valueOf=function(){return this.a.valueOf()};
var $b=function(a,b,c,d,e,f,g){this.a=typeof a=="number"?new Date(a,b||0,c||1,d||0,e||0,f||0,g||0):new Date(a?a.getTime():la())};x($b,O);r=$b.prototype;r.getHours=function(){return this.a.getHours()};r.getMinutes=function(){return this.a.getMinutes()};r.getSeconds=function(){return this.a.getSeconds()};r.getUTCHours=function(){return this.a.getUTCHours()};r.getUTCMinutes=function(){return this.a.getUTCMinutes()};r.setHours=function(a){this.a.setHours(a)};r.setMinutes=function(a){this.a.setMinutes(a)};
r.setSeconds=function(a){this.a.setSeconds(a)};r.setMilliseconds=function(a){this.a.setMilliseconds(a)};r.setUTCHours=function(a){this.a.setUTCHours(a)};r.add=function(a){O.prototype.add.call(this,a);a.l&&this.setHours(this.a.getHours()+a.l);a.p&&this.setMinutes(this.a.getMinutes()+a.p);a.q&&this.setSeconds(this.a.getSeconds()+a.q)};
r.Ua=function(a,b){var c=O.prototype.Ua.call(this,a);if(a)return c+" "+y(this.getHours(),2)+":"+y(this.getMinutes(),2)+":"+y(this.getSeconds(),2)+(b?Zb(this):"");return c+"T"+y(this.getHours(),2)+y(this.getMinutes(),2)+y(this.getSeconds(),2)+(b?Zb(this):"")};r.equals=function(a){return this.getTime()==a.getTime()};r.toString=function(){return this.Ua()};r.w=function(){var a=new $b(this.a);a.X=this.X;a.wa=this.wa;return a};var ac=function(){};ac.prototype.oc=n;ac.prototype.C=function(){if(!this.oc){this.oc=k;this.h()}};ac.prototype.h=function(){};var bc,cc=function(a,b){this.type=a;this.currentTarget=this.target=b};x(cc,ac);r=cc.prototype;r.h=function(){delete this.type;delete this.target;delete this.currentTarget};r.na=n;r.Ta=k;r.stopPropagation=function(){this.na=k};r.preventDefault=function(){this.Ta=n};var P=function(a,b){this.Gc=b;this.ja=[];if(a>this.Gc)h(Error("[goog.structs.SimplePool] Initial cannot be greater than max"));for(var c=0;c<a;c++)this.ja.push(this.V?this.V():{})};x(P,ac);P.prototype.V=m;P.prototype.nc=m;var dc=function(a){if(a.ja.length)return a.ja.pop();return a.V?a.V():{}},fc=function(a,b){a.ja.length<a.Gc?a.ja.push(b):ec(a,b)},ec=function(a,b){if(a.nc)a.nc(b);else if(ga(b))if(fa(b.C))b.C();else for(var c in b)delete b[c]};
P.prototype.h=function(){P.g.h.call(this);for(var a=this.ja;a.length;)ec(this,a.pop());delete this.ja};var gc=[];var Q=function(a,b){a&&this.Ra(a,b)};x(Q,cc);r=Q.prototype;r.target=m;r.relatedTarget=m;r.offsetX=0;r.offsetY=0;r.clientX=0;r.clientY=0;r.screenX=0;r.screenY=0;r.button=0;r.keyCode=0;r.charCode=0;r.ctrlKey=n;r.altKey=n;r.shiftKey=n;r.metaKey=n;r.Pd=n;r.t=m;
r.Ra=function(a,b){var c=this.type=a.type;this.target=a.target||a.srcElement;this.currentTarget=b;var d=a.relatedTarget;if(d){if(bb)try{d=d.nodeName&&d}catch(e){d=m}}else if(c=="mouseover")d=a.fromElement;else if(c=="mouseout")d=a.toElement;this.relatedTarget=d;this.offsetX=a.offsetX!==undefined?a.offsetX:a.layerX;this.offsetY=a.offsetY!==undefined?a.offsetY:a.layerY;this.clientX=a.clientX!==undefined?a.clientX:a.pageX;this.clientY=a.clientY!==undefined?a.clientY:a.pageY;this.screenX=a.screenX||0;
this.screenY=a.screenY||0;this.button=a.button;this.keyCode=a.keyCode||0;this.charCode=a.charCode||(c=="keypress"?a.keyCode:0);this.ctrlKey=a.ctrlKey;this.altKey=a.altKey;this.shiftKey=a.shiftKey;this.metaKey=a.metaKey;this.Pd=Wa?a.metaKey:a.ctrlKey;this.t=a;delete this.Ta;delete this.na};r.stopPropagation=function(){Q.g.stopPropagation.call(this);if(this.t.stopPropagation)this.t.stopPropagation();else this.t.cancelBubble=k};var hc=C&&!E("8");
Q.prototype.preventDefault=function(){Q.g.preventDefault.call(this);var a=this.t;if(a.preventDefault)a.preventDefault();else{a.returnValue=n;if(hc)try{if(a.ctrlKey||a.keyCode>=112&&a.keyCode<=123)a.keyCode=-1}catch(b){}}};Q.prototype.h=function(){Q.g.h.call(this);this.relatedTarget=this.currentTarget=this.target=this.t=m};var ic;var jc=(ic="ScriptEngine"in t&&t.ScriptEngine()=="JScript")?t.ScriptEngineMajorVersion()+"."+t.ScriptEngineMinorVersion()+"."+t.ScriptEngineBuildVersion():"0";var kc=function(){},lc=0;r=kc.prototype;r.key=0;r.Fa=n;r.dc=n;r.Ra=function(a,b,c,d,e,f){if(fa(a))this.Cc=k;else if(a&&a.handleEvent&&fa(a.handleEvent))this.Cc=n;else h(Error("Invalid listener argument"));this.Ba=a;this.Qc=b;this.src=c;this.type=d;this.capture=!!e;this.eb=f;this.dc=n;this.key=++lc;this.Fa=n};r.handleEvent=function(a){if(this.Cc)return this.Ba.call(this.eb||this.src,a);return this.Ba.handleEvent.call(this.Ba,a)};var mc,nc,oc,pc,qc,rc,sc,tc,uc,vc,wc;
(function(){function a(){return{N:0,L:0}}function b(){return[]}function c(){var p=function(s){return g.call(p.src,p.key,s)};return p}function d(){return new kc}function e(){return new Q}var f=ic&&!(wa(jc,"5.7")>=0),g;rc=function(p){g=p};if(f){mc=function(){return dc(i)};nc=function(p){fc(i,p)};oc=function(){return dc(j)};pc=function(p){fc(j,p)};qc=function(){return dc(l)};sc=function(){fc(l,c())};tc=function(){return dc(q)};uc=function(p){fc(q,p)};vc=function(){return dc(o)};wc=function(p){fc(o,p)};
var i=new P(0,600);i.V=a;var j=new P(0,600);j.V=b;var l=new P(0,600);l.V=c;var q=new P(0,600);q.V=d;var o=new P(0,600);o.V=e}else{mc=a;nc=ba;oc=b;pc=ba;qc=c;sc=ba;tc=d;uc=ba;vc=e;wc=ba}})();var xc={},R={},S={},yc={},zc=function(a,b,c,d,e){if(b)if(da(b)){for(var f=0;f<b.length;f++)zc(a,b[f],c,d,e);return m}else{d=!!d;var g=R;b in g||(g[b]=mc());g=g[b];if(!(d in g)){g[d]=mc();g.N++}g=g[d];var i=ja(a),j;g.L++;if(g[i]){j=g[i];for(f=0;f<j.length;f++){g=j[f];if(g.Ba==c&&g.eb==e){if(g.Fa)break;return j[f].key}}}else{j=g[i]=oc();g.N++}f=qc();f.src=a;g=tc();g.Ra(c,f,a,b,d,e);c=g.key;f.key=c;j.push(g);xc[c]=g;S[i]||(S[i]=oc());S[i].push(g);if(a.addEventListener){if(a==t||!a.ic)a.addEventListener(b,
f,d)}else a.attachEvent(Ac(b),f);return c}else h(Error("Invalid event type"))},Bc=function(a,b,c,d,e){if(da(b)){for(var f=0;f<b.length;f++)Bc(a,b[f],c,d,e);return m}d=!!d;a=Cc(a,b,d);if(!a)return n;for(f=0;f<a.length;f++)if(a[f].Ba==c&&a[f].capture==d&&a[f].eb==e)return T(a[f].key);return n},T=function(a){if(!xc[a])return n;var b=xc[a];if(b.Fa)return n;var c=b.src,d=b.type,e=b.Qc,f=b.capture;if(c.removeEventListener){if(c==t||!c.ic)c.removeEventListener(d,e,f)}else c.detachEvent&&c.detachEvent(Ac(d),
e);c=ja(c);e=R[d][f][c];if(S[c]){var g=S[c];Ba(g,b);g.length==0&&delete S[c]}b.Fa=k;e.Hc=k;Dc(d,f,c,e);delete xc[a];return k},Dc=function(a,b,c,d){if(!d.jb)if(d.Hc){for(var e=0,f=0;e<d.length;e++)if(d[e].Fa){var g=d[e].Qc;g.src=m;sc(g);uc(d[e])}else{if(e!=f)d[f]=d[e];f++}d.length=f;d.Hc=n;if(f==0){pc(d);delete R[a][b][c];R[a][b].N--;if(R[a][b].N==0){nc(R[a][b]);delete R[a][b];R[a].N--}if(R[a].N==0){nc(R[a]);delete R[a]}}}},Ec=function(a,b,c){var d=0,e=a==m,f=b==m,g=c==m;c=!!c;if(e)La(S,function(j){for(var l=
j.length-1;l>=0;l--){var q=j[l];if((f||b==q.type)&&(g||c==q.capture)){T(q.key);d++}}});else{a=ja(a);if(S[a]){a=S[a];for(e=a.length-1;e>=0;e--){var i=a[e];if((f||b==i.type)&&(g||c==i.capture)){T(i.key);d++}}}}return d},Cc=function(a,b,c){var d=R;if(b in d){d=d[b];if(c in d){d=d[c];a=ja(a);if(d[a])return d[a]}}return m},Ac=function(a){if(a in yc)return yc[a];return yc[a]="on"+a},Gc=function(a,b,c,d,e){var f=1;b=ja(b);if(a[b]){a.L--;a=a[b];if(a.jb)a.jb++;else a.jb=1;try{for(var g=a.length,i=0;i<g;i++){var j=
a[i];if(j&&!j.Fa)f&=Fc(j,e)!==n}}finally{a.jb--;Dc(c,d,b,a)}}return Boolean(f)},Fc=function(a,b){var c=a.handleEvent(b);a.dc&&T(a.key);return c},Hc=function(a,b){if(!xc[a])return k;var c=xc[a],d=c.type,e=R;if(!(d in e))return k;e=e[d];var f,g;if(bc===undefined)bc=C&&!t.addEventListener;if(bc){f=b||aa("window.event");var i=k in e,j=n in e;if(i){if(f.keyCode<0||f.returnValue!=undefined)return k;a:{var l=n;if(f.keyCode==0)try{f.keyCode=-1;break a}catch(q){l=k}if(l||f.returnValue==undefined)f.returnValue=
k}}l=vc();l.Ra(f,this);f=k;try{if(i){for(var o=oc(),p=l.currentTarget;p;p=p.parentNode)o.push(p);g=e[k];g.L=g.N;for(var s=o.length-1;!l.na&&s>=0&&g.L;s--){l.currentTarget=o[s];f&=Gc(g,o[s],d,k,l)}if(j){g=e[n];g.L=g.N;for(s=0;!l.na&&s<o.length&&g.L;s++){l.currentTarget=o[s];f&=Gc(g,o[s],d,n,l)}}}else f=Fc(c,l)}finally{if(o){o.length=0;pc(o)}l.C();wc(l)}return f}d=new Q(b,this);try{f=Fc(c,d)}finally{d.C()}return f};rc(Hc);gc[gc.length]=function(a){Hc=a(Hc);rc(Hc)};var Ic=function(a){this.D=a};x(Ic,ac);
var Jc=new P(0,100),U=function(a,b,c,d,e,f){if(da(c))for(var g=0;g<c.length;g++)U(a,b,c[g],d,e,f);else{b=zc(b,c,d||a,e||n,f||a.D||a);if(a.F)a.F[b]=k;else if(a.ea){a.F=dc(Jc);a.F[a.ea]=k;a.ea=m;a.F[b]=k}else a.ea=b}return a},Kc=function(a,b,c,d,e,f){if(a.ea||a.F)if(da(c))for(var g=0;g<c.length;g++)Kc(a,b,c[g],d,e,f);else{a:{d=d||a;f=f||a.D||a;e=!!(e||n);if(b=Cc(b,c,e))for(c=0;c<b.length;c++)if(b[c].Ba==d&&b[c].capture==e&&b[c].eb==f){b=b[c];break a}b=m}if(b){b=b.key;T(b);if(a.F)Na(a.F,b);else if(a.ea==
b)a.ea=m}}return a},Lc=function(a){if(a.F){for(var b in a.F){T(b);delete a.F[b]}fc(Jc,a.F);a.F=m}else a.ea&&T(a.ea)};Ic.prototype.h=function(){Ic.g.h.call(this);Lc(this)};Ic.prototype.handleEvent=function(){h(Error("EventHandler.handleEvent not implemented"))};var Mc=function(){};x(Mc,ac);r=Mc.prototype;r.ic=k;r.lb=m;r.Nb=function(a){this.lb=a};r.addEventListener=function(a,b,c,d){zc(this,a,b,c,d)};r.removeEventListener=function(a,b,c,d){Bc(this,a,b,c,d)};
r.dispatchEvent=function(a){a=a;if(v(a))a=new cc(a,this);else if(a instanceof cc)a.target=a.target||this;else{var b=a;a=new cc(a.type,this);Qa(a,b)}b=1;var c,d=a.type,e=R;if(d in e){e=e[d];d=k in e;var f;if(d){c=[];for(f=this;f;f=f.lb)c.push(f);f=e[k];f.L=f.N;for(var g=c.length-1;!a.na&&g>=0&&f.L;g--){a.currentTarget=c[g];b&=Gc(f,c[g],a.type,k,a)&&a.Ta!=n}}if(n in e){f=e[n];f.L=f.N;if(d)for(g=0;!a.na&&g<c.length&&f.L;g++){a.currentTarget=c[g];b&=Gc(f,c[g],a.type,n,a)&&a.Ta!=n}else for(c=this;!a.na&&
c&&f.L;c=c.lb){a.currentTarget=c;b&=Gc(f,c,a.type,n,a)&&a.Ta!=n}}a=Boolean(b)}else a=k;return a};r.h=function(){Mc.g.h.call(this);Ec(this);this.lb=m};var Nc=function(a,b,c,d){this.top=a;this.right=b;this.bottom=c;this.left=d};Nc.prototype.w=function(){return new Nc(this.top,this.right,this.bottom,this.left)};Nc.prototype.toString=function(){return"("+this.top+"t, "+this.right+"r, "+this.bottom+"b, "+this.left+"l)"};Nc.prototype.contains=function(a){a=!this||!a?n:a instanceof Nc?a.left>=this.left&&a.right<=this.right&&a.top>=this.top&&a.bottom<=this.bottom:a.x>=this.left&&a.x<=this.right&&a.y>=this.top&&a.y<=this.bottom;return a};var Oc=function(a,b,c,d){this.left=a;this.top=b;this.width=c;this.height=d};Oc.prototype.w=function(){return new Oc(this.left,this.top,this.width,this.height)};Oc.prototype.toString=function(){return"("+this.left+", "+this.top+" - "+this.width+"w x "+this.height+"h)"};
Oc.prototype.contains=function(a){return a instanceof Oc?this.left<=a.left&&this.left+this.width>=a.left+a.width&&this.top<=a.top&&this.top+this.height>=a.top+a.height:a.x>=this.left&&a.x<=this.left+this.width&&a.y>=this.top&&a.y<=this.top+this.height};var Pc=function(a,b){var c=G(a);if(c.defaultView&&c.defaultView.getComputedStyle)if(c=c.defaultView.getComputedStyle(a,""))return c[b];return m},Qc=function(a,b){return Pc(a,b)||(a.currentStyle?a.currentStyle[b]:m)||a.style[b]},Rc=function(a){var b=a.getBoundingClientRect();if(C){a=a.ownerDocument;b.left-=a.documentElement.clientLeft+a.body.clientLeft;b.top-=a.documentElement.clientTop+a.body.clientTop}return b},Sc=function(a){if(C)return a.offsetParent;var b=G(a),c=Qc(a,"position"),d=c=="fixed"||
c=="absolute";for(a=a.parentNode;a&&a!=b;a=a.parentNode){c=Qc(a,"position");d=d&&c=="static"&&a!=b.documentElement&&a!=b.body;if(!d&&(a.scrollWidth>a.clientWidth||a.scrollHeight>a.clientHeight||c=="fixed"||c=="absolute"))return a}return m},Tc=function(a){var b,c=G(a),d=Qc(a,"position"),e=bb&&c.getBoxObjectFor&&!a.getBoundingClientRect&&d=="absolute"&&(b=c.getBoxObjectFor(a))&&(b.screenX<0||b.screenY<0),f=new A(0,0),g;b=c?c.nodeType==9?c:G(c):document;if(g=C){g=I(b);g=!mb(g.d)}g=g?b.body:b.documentElement;
if(a==g)return f;if(a.getBoundingClientRect){b=Rc(a);a=wb(I(c));f.x=b.left+a.x;f.y=b.top+a.y}else if(c.getBoxObjectFor&&!e){b=c.getBoxObjectFor(a);a=c.getBoxObjectFor(g);f.x=b.screenX-a.screenX;f.y=b.screenY-a.screenY}else{e=a;do{f.x+=e.offsetLeft;f.y+=e.offsetTop;if(e!=a){f.x+=e.clientLeft||0;f.y+=e.clientTop||0}if(D&&Qc(e,"position")=="fixed"){f.x+=c.body.scrollLeft;f.y+=c.body.scrollTop;break}e=e.offsetParent}while(e&&e!=a);if(ab||D&&d=="absolute")f.y-=c.body.offsetTop;for(e=a;(e=Sc(e))&&e!=c.body&&
e!=g;){f.x-=e.scrollLeft;if(!ab||e.tagName!="TR")f.y-=e.scrollTop}}return f},Uc=function(a,b){if(typeof a=="number")a=(b?Math.round(a):a)+"px";return a},Vc=function(a){var b=ab&&!E("10");if(Qc(a,"display")!="none")return b?new B(a.offsetWidth||a.clientWidth,a.offsetHeight||a.clientHeight):new B(a.offsetWidth,a.offsetHeight);var c=a.style,d=c.display,e=c.visibility,f=c.position;c.visibility="hidden";c.position="absolute";c.display="inline";if(b){b=a.offsetWidth||a.clientWidth;a=a.offsetHeight||a.clientHeight}else{b=
a.offsetWidth;a=a.offsetHeight}c.display=d;c.position=f;c.visibility=e;return new B(b,a)},V=function(a,b){a.style.display=b?"":"none"},Wc=function(a){return"rtl"==Qc(a,"direction")};var Xc=function(){};(function(a){a.xc=function(){return a.Hd||(a.Hd=new a)}})(Xc);Xc.prototype.Kd=0;Xc.xc();var W=function(a){this.Na=a||I();this.Sd=Yc};x(W,Mc);W.prototype.Gd=Xc.xc();var Yc=m;r=W.prototype;r.Qa=m;r.z=n;r.b=m;r.Sd=m;r.Id=m;r.R=m;r.r=m;r.M=m;r.bd=n;var Zc=function(a){return a.Qa||(a.Qa=":"+(a.Gd.Kd++).toString(36))};W.prototype.i=function(){return this.b};
var X=function(a){return a.ya||(a.ya=new Ic(a))},ad=function(a,b){if(a==b)h(Error("Unable to set parent component"));if(b&&a.R&&a.Qa&&(a.R.M&&a.Qa?Oa(a.R.M,a.Qa)||m:m)&&a.R!=b)h(Error("Unable to set parent component"));a.R=b;W.g.Nb.call(a,b)};W.prototype.Nb=function(a){if(this.R&&this.R!=a)h(Error("Method not supported"));W.g.Nb.call(this,a)};W.prototype.Bb=function(){return this.Na};W.prototype.s=function(){this.b=this.Na.createElement("div")};
var bd=function(a,b){if(a.z)h(Error("Component already rendered"));else if(b&&a.ec(b)){a.bd=k;if(!a.Na||a.Na.d!=G(b))a.Na=I(b);a.ta(b);a.O()}else h(Error("Invalid element to decorate"))};r=W.prototype;r.ec=function(){return k};r.ta=function(a){this.b=a};r.O=function(){this.z=k;this.r&&Aa(this.r,function(a){!a.z&&a.i()&&a.O()},void 0)};r.ba=function(){this.r&&Aa(this.r,function(a){a.z&&a.ba()},void 0);this.ya&&Lc(this.ya);this.z=n};
r.h=function(){W.g.h.call(this);this.z&&this.ba();if(this.ya){this.ya.C();delete this.ya}this.r&&Aa(this.r,function(a){a.C()},void 0);!this.bd&&this.b&&L(this.b);this.R=this.Id=this.b=this.M=this.r=m};r.removeChild=function(a,b){if(a){var c=v(a)?a:Zc(a);a=this.M&&c?Oa(this.M,c)||m:m;if(c&&a){Na(this.M,c);Ba(this.r,a);if(b){a.ba();a.b&&L(a.b)}ad(a,m)}}if(!a)h(Error("Child is not in parent component"));return a};var cd=function(){};cd.prototype.oa=function(){};var dd=function(a,b){this.element=a;this.sd=b};x(dd,cd);
dd.prototype.oa=function(a,b,c){var d=this.element,e=this.sd,f,g=a.offsetParent;if(g){var i=g.tagName=="HTML"||g.tagName=="BODY";if(!i||Qc(g,"position")!="static"){f=Tc(g);i||(f=Ka(f,new A(g.scrollLeft,g.scrollTop)))}}g=Tc(d);i=Vc(d);g=new Oc(g.x,g.y,i.width,i.height);i=new Nc(0,Infinity,Infinity,0);for(var j=I(d),l=j.d.body,q=!D&&mb(j.d)?j.d.documentElement:j.d.body,o,p=d;p=Sc(p);)if((!C||p.clientWidth!=0)&&(!D||p.clientHeight!=0||p!=l)&&(p.scrollWidth!=p.clientWidth||p.scrollHeight!=p.clientHeight)&&
Qc(p,"overflow")!="visible"){var s=Tc(p),w;w=p;if(bb&&!E("1.9")){var H=parseFloat(Pc(w,"borderLeftWidth"));if(Wc(w)){var Hd=w.offsetWidth-w.clientWidth-H-parseFloat(Pc(w,"borderRightWidth"));H+=Hd}w=new A(H,parseFloat(Pc(w,"borderTopWidth")))}else w=new A(w.clientLeft,w.clientTop);s.x+=w.x;s.y+=w.y;i.top=Math.max(i.top,s.y);i.right=Math.min(i.right,s.x+p.clientWidth);i.bottom=Math.min(i.bottom,s.y+p.clientHeight);i.left=Math.max(i.left,s.x);o=o||p!=q}l=q.scrollLeft;q=q.scrollTop;if(D){i.left+=l;i.top+=
q}else{i.left=Math.max(i.left,l);i.top=Math.max(i.top,q)}if(!o||D){i.right+=l;i.bottom+=q}o=j.d.parentWindow||j.d.defaultView||window;j=o.document;if(D&&!E("500")&&!cb){if(typeof o.innerHeight=="undefined")o=window;j=o.innerHeight;p=o.document.documentElement.scrollHeight;if(o==o.top)if(p<j)j-=15;o=new B(o.innerWidth,j)}else{o=mb(j);if(ab&&!E("9.50"))o=n;o=o?j.documentElement:j.body;o=new B(o.clientWidth,o.clientHeight)}i.right=Math.min(i.right,l+o.width);i.bottom=Math.min(i.bottom,q+o.height);if(i=
i.top>=0&&i.left>=0&&i.bottom>i.top&&i.right>i.left?i:m){l=new Oc(i.left,i.top,i.right-i.left,i.bottom-i.top);i=Math.max(g.left,l.left);o=Math.min(g.left+g.width,l.left+l.width);if(i<=o){j=Math.max(g.top,l.top);l=Math.min(g.top+g.height,l.top+l.height);if(j<=l){g.left=i;g.top=j;g.width=o-i;g.height=l-j}}}i=I(d);j=I(a);if(i.d!=j.d){o=i.d.body;j=j.d.parentWindow||j.d.defaultView;l=new A(0,0);q=G(o)?G(o).parentWindow||G(o).defaultView:window;p=o;do{if(q==j)s=Tc(p);else{H=p;s=new A;if(H.nodeType==1)if(H.getBoundingClientRect){w=
Rc(H);s.x=w.left;s.y=w.top}else{w=wb(I(H));H=Tc(H);s.x=H.x-w.x;s.y=H.y-w.y}else{s.x=H.clientX;s.y=H.clientY}s=s}s=s;l.x+=s.x;l.y+=s.y}while(q&&q!=j&&(p=q.frameElement)&&(q=q.parent));j=l;j=Ka(j,Tc(o));if(C&&!mb(i.d))j=Ka(j,wb(i));g.left+=j.x;g.top+=j.y}d=(e&4&&Wc(d)?e^2:e)&-5;d=new A(d&2?g.left+g.width:g.left,d&1?g.top+g.height:g.top);if(f)d=Ka(d,f);f=d;f=f.w();d=(b&4&&Wc(a)?b^2:b)&-5;b=Vc(a);if(c||d!=0){if(d&2)f.x-=b.width+(c?c.right:0);else if(c)f.x+=c.left;if(d&1)f.y-=b.height+(c?c.bottom:0);else if(c)f.y+=
c.top}d=f;f=bb&&(Wa||eb)&&E("1.9");if(d instanceof A){c=d.x;d=d.y}else{c=d;d=void 0}a.style.left=Uc(c,f);a.style.top=Uc(d,f);c=b==b?k:!b||!b?n:b.width==b.width&&b.height==b.height;if(!c){c=b;var $c;if(c instanceof B){$c=c.height;c=c.width}else h(Error("missing height argument"));a.style.width=Uc(c,k);a.style.height=Uc($c,k)}};var ed=function(a,b){if(bb){a.setAttribute("role",b);a.oe=b}};var gd=function(a,b,c,d,e){if(!C&&!(D&&E("525")))return k;if(Wa&&e)return fd(a);if(e&&!d)return n;if(!c&&(b==17||b==18))return n;if(C&&d&&b==a)return n;switch(a){case 13:return k;case 27:return!D}return fd(a)},fd=function(a){if(a>=48&&a<=57)return k;if(a>=96&&a<=106)return k;if(a>=65&&a<=90)return k;if(D&&a==0)return k;switch(a){case 32:case 63:case 107:case 109:case 110:case 111:case 186:case 189:case 187:case 188:case 190:case 191:case 192:case 222:case 219:case 220:case 221:return k;default:return n}};var hd=function(a,b){a&&this.sb(a,b)};x(hd,Mc);r=hd.prototype;r.b=m;r.gb=m;r.Eb=m;r.hb=m;r.fa=-1;r.da=-1;
var id={"3":13,"12":144,"63232":38,"63233":40,"63234":37,"63235":39,"63236":112,"63237":113,"63238":114,"63239":115,"63240":116,"63241":117,"63242":118,"63243":119,"63244":120,"63245":121,"63246":122,"63247":123,"63248":44,"63272":46,"63273":36,"63275":35,"63276":33,"63277":34,"63289":144,"63302":45},jd={Up:38,Down:40,Left:37,Right:39,Enter:13,F1:112,F2:113,F3:114,F4:115,F5:116,F6:117,F7:118,F8:119,F9:120,F10:121,F11:122,F12:123,"U+007F":46,Home:36,End:35,PageUp:33,PageDown:34,Insert:45},kd={61:187,
59:186},ld=C||D&&E("525");r=hd.prototype;r.Bd=function(a){if(D&&(this.fa==17&&!a.ctrlKey||this.fa==18&&!a.altKey))this.da=this.fa=-1;if(ld&&!gd(a.keyCode,this.fa,a.shiftKey,a.ctrlKey,a.altKey))this.handleEvent(a);else this.da=bb&&a.keyCode in kd?kd[a.keyCode]:a.keyCode};r.Cd=function(){this.da=this.fa=-1};
r.handleEvent=function(a){var b=a.t,c,d;if(C&&a.type=="keypress"){c=this.da;d=c!=13&&c!=27?b.keyCode:0}else if(D&&a.type=="keypress"){c=this.da;d=b.charCode>=0&&b.charCode<63232&&fd(c)?b.charCode:0}else if(ab){c=this.da;d=fd(c)?b.keyCode:0}else{c=b.keyCode||this.da;d=b.charCode||0;if(Wa&&d==63&&!c)c=191}var e=c,f=b.keyIdentifier;if(c)if(c>=63232&&c in id)e=id[c];else{if(c==25&&a.shiftKey)e=9}else if(f&&f in jd)e=jd[f];a=e==this.fa;this.fa=e;b=new md(e,d,a,b);try{this.dispatchEvent(b)}finally{b.C()}};
r.i=function(){return this.b};r.sb=function(a,b){this.hb&&this.detach();this.b=a;this.gb=zc(this.b,"keypress",this,b);this.Eb=zc(this.b,"keydown",this.Bd,b,this);this.hb=zc(this.b,"keyup",this.Cd,b,this)};r.detach=function(){if(this.gb){T(this.gb);T(this.Eb);T(this.hb);this.hb=this.Eb=this.gb=m}this.b=m;this.da=this.fa=-1};r.h=function(){hd.g.h.call(this);this.detach()};var md=function(a,b,c,d){d&&this.Ra(d,void 0);this.type="key";this.keyCode=a;this.charCode=b;this.repeat=c};x(md,Q);var Y=function(a,b){W.call(this);this.S=b||M;this.de=this.S.pb;this.a=new O(a);this.a.wa=this.S.ed;this.a.X=this.S.dd;this.n=this.a.w();this.n.setDate(1);this.ob=["","","","","","",""];this.ob[this.S.ac[0]]="goog-date-picker-wkend-start";this.ob[this.S.ac[1]]="goog-date-picker-wkend-end";this.Aa={}};x(Y,W);r=Y.prototype;r.Uc=k;r.Yd=k;r.ud=k;r.Ob=k;r.Xc=k;r.rb=k;r.Wc=k;r.ae=n;r.mc=m;var nd=0;r=Y.prototype;r.Pc=function(){this.n.add(new N("m",-1));od(this)};
r.Ic=function(){this.n.add(new N("m",1));od(this)};r.Rd=function(){this.n.add(new N("y",-1));od(this)};r.Ld=function(){this.n.add(new N("y",1));od(this)};r.Sc=function(){this.setDate(new O)};r.Rc=function(){this.rb&&this.setDate(m)};r.getDate=function(){return this.a};
r.setDate=function(a){var b=a!=this.a&&!(a&&this.a&&a.getFullYear()==this.a.getFullYear()&&a.getMonth()==this.a.getMonth()&&a.getDate()==this.a.getDate());this.a=a&&new O(a);if(a){this.n.set(this.a);this.n.setDate(1)}od(this);this.dispatchEvent(new pd("select",this,this.a));b&&this.dispatchEvent(new pd("change",this,this.a))};
r.ta=function(a){Y.g.ta.call(this,a);a.className="goog-date-picker";var b=I(a),c=b.createElement("table"),d=b.createElement("thead"),e=b.createElement("tbody"),f=b.createElement("tfoot");ed(e,"grid");e.tabIndex="0";this.Qb=e;this.Yc=f;var g=b.s("tr","goog-date-picker-head");if(this.yb=g){for(var i=this.yb;i.firstChild;)i.removeChild(i.firstChild);var j=I(i),l;if(this.ae){l=j.createElement("td");l.colSpan=this.Ob?1:2;Z(this,l,"\u00ab",this.Pc);i.appendChild(l);l=j.createElement("td");l.colSpan=this.Ob?
6:5;l.className="goog-date-picker-monthyear";i.appendChild(l);this.xb=l;l=j.createElement("td");Z(this,l,"\u00bb",this.Ic);i.appendChild(l)}else{var q=this.S.La[0].toLowerCase();l=j.createElement("td");l.colSpan=5;Z(this,l,"\u00ab",this.Pc);this.ia=Z(this,l,"",this.Xd,"goog-date-picker-month");Z(this,l,"\u00bb",this.Ic);j=j.createElement("td");j.colSpan=3;Z(this,j,"\u00ab",this.Rd);this.Oa=Z(this,j,"",this.Zd,"goog-date-picker-year");Z(this,j,"\u00bb",this.Ld);if(q.indexOf("y")<q.indexOf("m")){i.appendChild(j);
i.appendChild(l)}else{i.appendChild(l);i.appendChild(j)}}}d.appendChild(g);this.K=[];for(j=0;j<7;j++){g=b.createElement("tr");this.K[j]=[];for(l=0;l<8;l++){i=b.createElement(l==0||j==0?"th":"td");if((l==0||j==0)&&l!=j){i.className=l==0?"goog-date-picker-week":"goog-date-picker-wday";ed(i,l==0?"rowheader":"columnheader")}g.appendChild(i);this.K[j][l]=i}e.appendChild(g)}g=b.s("tr","goog-date-picker-foot");i=b.s("td",{colSpan:2,className:"goog-date-picker-today-cont"});this.qc=Z(this,i,"Today",this.Sc);
g.appendChild(i);i=b.s("td",{colSpan:4});g.appendChild(i);i=b.createElement("td");i.colSpan=2;i.className="goog-date-picker-none-cont";this.pc=Z(this,i,"None",this.Rc);g.appendChild(i);f.appendChild(g);V(this.qc,this.Wc);V(this.pc,this.rb);V(this.Yc,this.Wc||this.rb);c.cellSpacing="0";c.cellPadding="0";c.appendChild(d);c.appendChild(e);c.appendChild(f);a.appendChild(c);if(this.i()){if(this.Xc)for(b=0;b<7;b++)ub(this.K[0][b+1],this.de[((b+this.n.X+7)%7+1)%7]);V(this.K[0][0].parentNode,this.Xc)}od(this);
a.tabIndex=0};r.s=function(){Y.g.s.call(this);this.ta(this.i())};r.O=function(){Y.g.O.call(this);var a=X(this);U(a,this.Qb,"click",this.zd);U(a,qd(this,this.i()),"key",this.Ad)};r.ba=function(){Y.g.ba.call(this);this.ua();for(var a in this.Aa)this.Aa[a].C();this.Aa={}};r.h=function(){Y.g.h.call(this);this.pc=this.qc=this.Oa=this.xb=this.ia=this.yb=this.Yc=this.Qb=this.K=m};
r.zd=function(a){if(a.target.tagName=="TD"){var b,c=-2,d=-2;for(b=a.target;b;b=b.previousSibling,c++);for(b=a.target.parentNode;b;b=b.previousSibling,d++);this.setDate(this.P[d][c].w())}};
r.Ad=function(a){var b,c;switch(a.keyCode){case 33:a.preventDefault();b=-1;break;case 34:a.preventDefault();b=1;break;case 37:a.preventDefault();c=-1;break;case 39:a.preventDefault();c=1;break;case 38:a.preventDefault();c=-7;break;case 40:a.preventDefault();c=7;break;case 36:a.preventDefault();this.Sc();case 46:a.preventDefault();this.Rc();default:return}if(this.a){a=this.a.w();a.add(new N(0,b,c))}else{a=this.n.w();a.setDate(1)}this.setDate(a)};
r.Xd=function(a){a.stopPropagation();a=[];for(var b=0;b<12;b++)a.push(this.S.pa[b]);rd(this,this.ia,a,this.Dd,this.S.pa[this.n.getMonth()])};r.Zd=function(a){a.stopPropagation();a=[];for(var b=this.n.getFullYear()-5,c=0;c<11;c++)a.push(String(b+c));rd(this,this.Oa,a,this.Ed,String(this.n.getFullYear()))};r.Dd=function(a){a=a;for(var b=-1;a;a=sb(a.previousSibling,n),b++);this.n.setMonth(b);od(this);this.ia.focus&&this.ia.focus()};
r.Ed=function(a){if(a.firstChild.nodeType==3){this.n.setFullYear(Number(a.firstChild.nodeValue));od(this)}this.Oa.focus()};
var rd=function(a,b,c,d,e){a.ua();var f=I(b),g=f.s("div","goog-date-picker-menu");a.Ca=m;for(var i=f.createElement("ul"),j=0;j<c.length;j++){var l=f.s("li",m,c[j]);if(c[j]==e)a.Ca=l;i.appendChild(l)}g.appendChild(i);g.style.left=b.offsetLeft+b.parentNode.offsetLeft+"px";g.style.top=b.offsetTop+"px";g.style.width=b.clientWidth+"px";a.ia.parentNode.appendChild(g);a.ga=g;if(!a.Ca)a.Ca=i.firstChild;a.Ca.className="goog-date-picker-menu-selected";a.Ib=d;b=X(a);U(b,a.ga,"click",a.zc);U(b,qd(a,a.ga),"key",
a.Ac);U(b,f.d,"click",a.ua);g.tabIndex=0;g.focus()};Y.prototype.zc=function(a){a.stopPropagation();this.ua();this.Ib&&this.Ib(a.target)};
Y.prototype.Ac=function(a){a.stopPropagation();var b,c=this.Ca;switch(a.keyCode){case 35:a.preventDefault();b=c.parentNode.lastChild;break;case 36:a.preventDefault();b=c.parentNode.firstChild;break;case 38:a.preventDefault();b=c.previousSibling;break;case 40:a.preventDefault();b=c.nextSibling;break;case 13:case 9:case 0:a.preventDefault();this.ua();this.Ib(c);break}if(b&&b!=c){c.className="";b.className="goog-date-picker-menu-selected";this.Ca=b}};
Y.prototype.ua=function(){if(this.ga){var a=I(this.ga),b=X(this);Kc(b,this.ga,"click",this.zc);Kc(b,qd(this,this.ga),"key",this.Ac);Kc(b,a.d,"click",this.ua);a.removeNode(this.ga);delete this.ga}};
var Z=function(a,b,c,d,e){var f=["goog-date-picker-btn"];e&&f.push(e);e=I(b);var g=e.createElement("button");g.className=f.join(" ");g.appendChild(e.createTextNode(c));b.appendChild(g);U(X(a),g,"click",d);return g},od=function(a){if(a.i()){var b=a.n.w();b.setDate(1);a.xb&&ub(a.xb,a.S.pa[b.getMonth()]+(" "+b.getFullYear()));a.ia&&ub(a.ia,a.S.pa[b.getMonth()]);a.Oa&&ub(a.Oa,String(b.getFullYear()));var c=((b.getDay()+6)%7-b.X+7)%7,d=Xb(b.getFullYear(),b.getMonth());b.add(new N("m",-1));b.setDate(Xb(b.getFullYear(),
b.getMonth())-(c-1));a.Uc&&!a.ud&&d+c<33&&b.add(new N("d",-7));c=new N("d",1);a.P=[];for(d=0;d<6;d++){a.P[d]=[];for(var e=0;e<7;e++){a.P[d][e]=b.w();b.add(c)}}if(a.i()){b=a.n.getMonth();e=new O;c=e.getFullYear();d=e.getMonth();e=e.getDate();for(var f=0;f<6;f++){if(a.Ob){var g=a.K[f+1][0],i=a.P[f][0].getDate();i=new Date(a.P[f][0].getFullYear(),a.P[f][0].getMonth(),i);var j=a.P[f][0].wa||3,l=a.P[f][0].X||0,q=((i.getDay()+6)%7-l+7)%7;j=(j-l+7)%7;i=i.valueOf()+(j-q)*864E5;q=(new Date((new Date(i)).getFullYear(),
0,1)).valueOf();ub(g,Math.floor(Math.round((i-q)/864E5)/7)+1);a.K[f+1][0].className="goog-date-picker-week"}else{ub(a.K[f+1][0],"");a.K[f+1][0].className=""}for(g=0;g<7;g++){i=a.P[f][g];q=a.K[f+1][g+1];if(!q.id)q.id="goog-dp-"+nd++;ed(q,"gridcell");j=["goog-date-picker-date"];if(a.Yd||i.getMonth()==b){i.getMonth()!=b&&j.push("goog-date-picker-other-month");l=(g+a.n.X+7)%7;a.ob[l]&&j.push(a.ob[l]);i.getDate()==e&&i.getMonth()==d&&i.getFullYear()==c&&j.push("goog-date-picker-today");if(a.a&&i.getDate()==
a.a.getDate()&&i.getMonth()==a.a.getMonth()&&i.getFullYear()==a.a.getFullYear()){j.push("goog-date-picker-selected");bb&&a.Qb.setAttribute("aria-activedescendant",q.id)}if(a.mc)(l=a.mc(i))&&j.push(l);ub(q,i.getDate())}else ub(q,"");q.className=j.join(" ")}if(f>=4)V(a.K[f+1][0].parentNode,a.P[f][0].getMonth()==b||a.Uc)}}}},qd=function(a,b){var c=ja(b);c in a.Aa||(a.Aa[c]=new hd(b));return a.Aa[c]},pd=function(a,b,c){cc.call(this,a,b);this.jc=c};x(pd,cc);var sd=t.window;var td=function(a,b){this.D=new Ic(this);var c=a||m;if(this.ka)h(Error("Can not change this state of the popup while showing."));this.b=c;if(b)this.Ja=b};x(td,Mc);r=td.prototype;r.b=m;r.pd=k;r.cc=m;r.ka=n;r.Wd=n;r.Gb=-1;r.Dc=-1;r.Fd=n;r.td=k;r.Ja="toggle_display";r.i=function(){return this.b};
r.setVisible=function(a){if(a){if(!this.ka)if(this.dispatchEvent("beforeshow")){if(!this.b)h(Error("Caller must call setElement before trying to show the popup"));this.oa();a=G(this.b);this.Fd&&U(this.D,a,"keydown",this.Nd,k);if(this.pd){U(this.D,a,"mousedown",this.Nc,k);if(C){for(var b=a.activeElement;b&&b.nodeName=="IFRAME";){try{var c=D?b.document||b.contentWindow.document:b.contentDocument||b.contentWindow.document}catch(d){break}a=c;b=a.activeElement}U(this.D,a,"mousedown",this.Nc,k);U(this.D,
a,"deactivate",this.Mc)}else U(this.D,a,"blur",this.Mc)}if(this.Ja=="toggle_display"){this.b.style.visibility="visible";V(this.b,k)}else this.Ja=="move_offscreen"&&this.oa();this.ka=k;this.Gb=la();this.Dc=-1;this.dispatchEvent("show")}}else ud(this)};r.oa=ba;
var ud=function(a,b){if(!a.ka||!a.dispatchEvent({type:"beforehide",target:b}))return n;a.D&&Lc(a.D);if(a.Ja=="toggle_display")if(a.Wd){var c=a.Bc;if(fa(c)){if(a)c=ka(c,a)}else if(c&&typeof c.handleEvent=="function")c=ka(c.handleEvent,c);else h(Error("Invalid listener argument"));sd.setTimeout(c,0)}else a.Bc();else if(a.Ja=="move_offscreen"){a.b.style.left="-200px";a.b.style.top="-200px"}a.ka=n;a.Dc=la();a.dispatchEvent({type:"hide",target:b});return k};r=td.prototype;
r.Bc=function(){this.b.style.visibility="hidden";V(this.b,n)};r.Nc=function(a){a=a.target;if(!tb(this.b,a)&&(!this.cc||tb(this.cc,a))&&!(la()-this.Gb<150))ud(this,a)};r.Nd=function(a){if(a.keyCode==27)if(ud(this,a.target)){a.preventDefault();a.stopPropagation()}};r.Mc=function(a){if(this.td){var b=G(this.b);if(C||ab){if((a=b.activeElement)&&tb(this.b,a))return}else if(a.target!=b)return;la()-this.Gb<150||ud(this)}};r.h=function(){td.g.h.call(this);this.D.C();delete this.b;delete this.D};var vd=function(a,b){this.Qd=4;this.Lb=b||undefined;td.call(this,a)};x(vd,td);vd.prototype.setPosition=function(a){this.Lb=a||undefined;this.ka&&this.oa()};vd.prototype.oa=function(){if(this.Lb){var a=!this.ka&&this.Ja!="move_offscreen",b=this.i();if(a){b.style.visibility="hidden";V(b,k)}this.Lb.oa(b,this.Qd,this.ke);a&&V(b,n)}};var wd=function(a,b){W.call(this,b);this.I=a||new Y};x(wd,W);r=wd.prototype;r.I=m;r.ma=m;r.ib=m;r.qb=k;r.s=function(){wd.g.s.call(this);this.i().className="goog-popupdatepicker";this.ma=new vd(this.i())};r.O=function(){wd.g.O.call(this);if(!this.I.z){var a=this.i();a.style.visibility="hidden";V(a,n);bd(this.I,a)}U(X(this),this.I,"change",this.Sa)};r.h=function(){wd.g.h.call(this);if(this.ma){this.ma.C();this.ma=m}this.I.C();this.ib=this.I=m};r.ec=function(){return n};r.getDate=function(){return this.I.getDate()};
r.setDate=function(a){this.I.setDate(a)};r.sb=function(a){U(X(this),a,"mousedown",this.Vc)};r.detach=function(a){Kc(X(this),a,"mousedown",this.Vc)};r.Vc=function(a){this.ib=a=a.currentTarget;this.ma.setPosition(new dd(a,5));Kc(X(this),this.I,"change",this.Sa);this.I.setDate(m);this.dispatchEvent("show");U(X(this),this.I,"change",this.Sa);this.ma.setVisible(k);this.qb&&this.i().focus()};r.Cb=function(){this.ma.setVisible(n);this.qb&&this.ib&&this.ib.focus()};r.Sa=function(a){this.Cb();this.dispatchEvent(a)};var xd=function(a,b,c,d){W.call(this,d);this.kc=a;this.lc=b;a=this.k=new wd(c,d);b=this.r?this.r.length:0;if(a.z&&!this.z)h(Error("Component already rendered"));if(b<0||b>(this.r?this.r.length:0))h(Error("Child component index out of bounds"));if(!this.M||!this.r){this.M={};this.r=[]}if(a.R==this){this.M[Zc(a)]=a;Ba(this.r,a)}else{c=this.M;d=Zc(a);if(d in c)h(Error('The object already contains the key "'+d+'"'));c[d]=a}ad(a,this);Fa(this.r,b,0,a);if(a.z&&this.z&&a.R==this){c=this.b;c.insertBefore(a.i(),
c.childNodes[b]||m)}else this.z&&!a.z&&a.b&&a.O();this.k.qb=n};x(xd,W);r=xd.prototype;r.kc=m;r.lc=m;r.k=m;r.Oc=m;r.getDate=function(){var a=yd(this),b=this.k.getDate();if(a&&b)a.equals(b)||this.k.setDate(a);else this.k.setDate(m);return a};r.setDate=function(a){this.k.setDate(a)};
var yd=function(a){var b;b=a.i();b=b.Fb?b.Fb.ie():b.value;var c=oa(b);if(c){b=new $b;a:{var d=a.lc,e=new Wb;a=[0];for(var f=-1,g=0,i=0,j=0;j<d.e.length;j++)if(d.e[j].U>0){if(f<0&&d.e[j].qa){f=j;i=g=0}if(f>=0){var l=d.e[j].U;if(j==f){l-=i;i++;if(l==0){a=0;break a}}if(!Vb(d,c,a,d.e[j],l,e)){j=f-1;a[0]=g}}else{f=-1;if(!Vb(d,c,a,d.e[j],0,e)){a=0;break a}}}else{f=-1;if(d.e[j].text.charAt(0)==" "){l=a[0];Sb(d,c,a);if(a[0]>l)continue}else if(c.indexOf(d.e[j].text,a[0])==a[0]){a[0]+=d.e[j].text.length;continue}a=
0;break a}b:{if(e.rc!=undefined&&e.Y!=undefined&&e.rc==0&&e.Y>0)e.Y=-(e.Y-1);e.Y!=undefined&&b.setFullYear(e.Y);c=b.getDate();b.setDate(1);e.Da!=undefined&&b.setMonth(e.Da);e.sa!=undefined?b.setDate(e.sa):b.setDate(c);if(e.l==undefined)e.l=b.getHours();if(e.bc!=undefined&&e.bc>0)if(e.l<12)e.l+=12;b.setHours(e.l);e.p!=undefined&&b.setMinutes(e.p);e.q!=undefined&&b.setSeconds(e.q);e.Jb!=undefined&&b.setMilliseconds(e.Jb);if(e.Y!=undefined&&e.Y!=b.getFullYear()||e.Da!=undefined&&e.Da!=b.getMonth()||
e.sa!=undefined&&e.sa!=b.getDate()||e.l>=24||e.p>=60||e.q>=60||e.Jb>=1E3)e=n;else{if(e.Sb!=undefined){c=b.getTimezoneOffset();b.setTime(b.getTime()+(e.Sb-c)*60*1E3)}if(e.od){c=new Date;c.setFullYear(c.getFullYear()-80);b.getTime()<c.getTime()&&b.setFullYear(c.getFullYear()+100)}if(e.wb!=undefined)if(e.sa==undefined){e=(7+e.wb-b.getDay())%7;if(e>3)e-=7;c=b.getMonth();b.setDate(b.getDate()+e);if(b.getMonth()!=c)b.setDate(b.getDate()+(e>0?-7:7))}else if(e.wb!=b.getDay()){e=n;break b}e=k}}a=e?a[0]-0:
0}if(a>0)return b}return m};r=xd.prototype;r.s=function(){this.b=this.Bb().s("input",{type:"text"});this.k.s()};r.O=function(){xd.g.O.call(this);var a=this.i();(this.Oc||vb(this.Bb()).body).appendChild(this.k.i());this.k.O();this.k.sb(a);this.k.setDate(yd(this));a=X(this);U(a,this.k,"change",this.Sa);U(a,this.k,"show",this.Od)};r.ba=function(){xd.g.ba.call(this);this.k.detach(this.i());this.k.ba();L(this.k.i())};r.ta=function(a){xd.g.ta.call(this,a);this.k.s()};
r.h=function(){xd.g.h.call(this);this.k.C();this.Oc=this.k=m};r.Cb=function(){this.k.Cb()};r.Od=function(){this.setDate(yd(this))};r.Sa=function(a){var b;if(a.jc){b=this.kc;a=a.jc;for(var c=[],d=0;d<b.e.length;++d){var e=b.e[d].text;1==b.e[d].type?c.push(Pb(b,e,a,a,a,void 0)):c.push(e)}b=c.join("")}else b="";b=b;a=this.i();if(a.Fb)a.Fb.pe(b);else a.value=b};var zd=function(){};r=zd.prototype;r.A=m;r.Ab=m;r.Q={};r.Pa=[];r.sc=0;
var Bd=function(a,b){return function(c){if(c){var d=new GMarker(c);GEvent.addListener(d,"click",function(){d.openInfoWindowHtml('<div class="user_event_marker" style="width:256px;margin-right:14px">'+b.innerHTML+"</div>")});a.Q[b.id]=d;a.A&&a.A.addOverlay(d)}if(!a.A){a.sc+=1;a.sc==a.Pa.length&&Ad(a)}}},Cd=function(a,b){a.Ab.getLatLng(K("span","geocoder_address",b)[0].innerHTML,Bd(a,b))},Dd=function(a){var b=new GLatLngBounds;for(var c in a.Q)a.Q[c]&&b.extend(a.Q[c].getLatLng());a.A.setCenter(b.getCenter(),
13);a.A.setZoom(Math.min(13,a.A.getBoundsZoomLevel(b)))},Ad=function(a){a.A=new GMap2(J("user_event_map_canvas"));Dd(a);a.A.addControl(new GSmallZoomControl3D);a.A.addControl(new GMenuMapTypeControl);a.A.addControl(new GScaleControl);for(var b in a.Q)a.A.addOverlay(a.Q[b])},Ed=new Nb("MM'/'dd'/'yyyy"),Fd=new Qb("MM'/'dd'/'yyyy"),Gd=n,$=m,Id=function(a){a=K("input","edit_date",a);for(var b=0;b<a.length;b++){var c=a[b];bd(new xd(Ed,Fd),c)}},Kd=function(a){var b=J("edit_form_user_events");if(a){Jd();
b.Z=b.innerHTML;Ia(J("user_events"),"edit_mode")}else{Ja(J("user_events"),"edit_mode");if(b.Z)b.innerHTML=b.Z}},Ld=function(a){var b=J("create_event");if(a){Jd();b.Z=b.innerHTML;Ia(J("user_events"),"event_add_mode")}else{Ja(J("user_events"),"event_add_mode");if(b.Z){b.innerHTML=b.Z;Id(b)}}},Md=function(a,b){var c=J("event_"+a);if(b){Jd();c.Z=c.innerHTML;Ia(c,"editing_event")}else{Ja(c,"editing_event");if(c.Z){c.innerHTML=c.Z;Id(c)}}},Jd=function(){Kd(n);Ld(n);for(var a=K("div","user_event_single",
J("user_event_info")),b=0;b<a.length;b++)Md(a[b].id,n)},Nd=function(a){for(var b={},c=0;c<a.elements.length;c++){var d=a.elements[c];b[d.name]=d.value}return b},Od=function(a,b,c){var d=get_channel_backend(),e=get_channel_box_info("user_events");d.call_box_method(e,b,a,function(f){if(f.success){var g=J("user_event_info");g.innerHTML=f.html;Id(g);c&&c(f);display_message("user_events-messages","#d0ffd8",Ib("SUCCESS"))}else f.errors&&display_message("user_events-messages","#F99",f.errors.join("<br>"))})};u("goog.dom.$",J,void 0);u("goog.dom.$$",K,void 0);u("goog.dom.removeNode",L,void 0);u("goog.dom.classes.add",Ia,void 0);u("goog.dom.classes.remove",Ja,void 0);
u("goog.dom.forms.getFormDataString",function(a){for(var b=[],c=a.elements,d,e=0;d=c[e];e++)if(!(d.disabled||d.tagName.toLowerCase()=="fieldset")){var f=d.name;switch(d.type.toLowerCase()){case "file":case "submit":case "reset":case "button":break;case "select-multiple":d=yb(d);if(d!=m)for(var g,i=0;g=d[i];i++)xb(b,f,g);break;default:g=yb(d);g!=m&&xb(b,f,g)}}c=a.getElementsByTagName("input");for(e=0;d=c[e];e++)if(d.form==a&&d.type.toLowerCase()=="image"){f=d.name;xb(b,f,d.value);xb(b,f+".x","0");
xb(b,f+".y","0")}return b.join("&")},void 0);u("Arranger",Jb,void 0);
u("initEventDates",function(){var a=J("user_event_map_container")!=m;if(a&&!Gd){Gd=k;a=document.createElement("script");a.type="text/javascript";a.src="/web/20100812001414/http://maps.google.com/maps?file=api&v=2&sensor=false&key=ABQIAAAAYMcxl3UidHj1TfgZY5wwAxSHXJsp5oogWH5jZodYSc2VMsh-GBRPvc9p8ICx6LDtcul957CGKg5HKQ&async=2&callback=initEventDates";document.getElementsByTagName("head")[0].appendChild(a)}else{Id();if(a){a=$=new zd;if(GBrowserIsCompatible()){Ja(J("user_event_map_container"),"user_event_map_loading");a.Ab=
new GClientGeocoder;if(a.Ab){var b=J("user_event_info");a.Pa=K("div","user_event_single",b);if(a.Pa.length)for(b=0;b<a.Pa.length;b++)Cd(a,a.Pa[b]);else Ad(a)}}}}},void 0);u("yt.www.channel.EventDates.editEvent",function(a){Md(a,k)},void 0);u("yt.www.channel.EventDates.cancelEdit",function(a){Md(a,n)},void 0);u("yt.www.channel.EventDates.toggleAdd",function(){var a;a=J("user_events");a=za(Ha(a),"event_add_mode")>=0;Ld(!a)},void 0);u("yt.www.channel.EventDates.cancelAdd",function(){Ld(n)},void 0);
u("yt.www.channel.EventDates.toggleBoxEdit",function(){var a;a=J("user_events");a=za(Ha(a),"edit_mode")>=0;Kd(!a)},void 0);u("yt.www.channel.EventDates.cancelBoxEdit",function(){Kd(n)},void 0);u("yt.www.channel.EventDates.createEvent",function(){var a=Nd(J("create_event_form"));Od("create_event",a,function(b){Ja(J("user_events"),"event_add_mode");if($){b=J("show_event_"+b.event_id);Cd($,K("div","user_event_single",b)[0]);Dd($)}})},void 0);
u("yt.www.channel.EventDates.updateEvent",function(a){var b=Nd(J("edit_event_form_"+a));b.event_id=a;Od("update_event",b,function(){if($){var c=J("show_event_"+a),d=$;c=K("div","user_event_single",c)[0];d.A.removeOverlay(d.Q[a]);d.Q[a]=m;Cd(d,c);Dd($)}})},void 0);u("yt.www.channel.EventDates.deleteEvent",function(a){Od("delete_event",{event_id:a},function(){if($){var b=$;b.A.removeOverlay(b.Q[a]);b.Q[a]=m;Dd($)}})},void 0);
u("yt.www.watch.actions.setImage",function(){var a=lb("watch-main-area")?lb("watch-main-area"):lb("watch-actions-area");a=nb("img","watch-check-grn-circle",a);for(var b=0,c=a.length;b<c;b++)a[b].style.backgroundImage='url("/web/20100812001414/http://s.ytimg.com/yt/img/check-grn-circle-vfl91176.png")'},void 0);})();





/*
     FILE ARCHIVED ON 0:14:05 Aug 12, 2010 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 20:47:59 Mar 14, 2022.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
bind=function(fn,self,var_args){
var boundArgs=fn.boundArgs_;
if(arguments.length>2){
var args=Array.prototype.slice.call(arguments,2);
if(boundArgs){
args.unshift.apply(args,boundArgs);
}
boundArgs=args;
}
self=fn.boundSelf_||self;
fn=fn.boundFn_||fn;
var newfn;
if(boundArgs){
newfn=function(){
var args=Array.prototype.slice.call(arguments);
args.unshift.apply(args,boundArgs);
return fn.apply(self,args);
}
}else{
newfn=function(){
return fn.apply(self,arguments);
}
}
newfn.boundArgs_=boundArgs;
newfn.boundSelf_=self;
newfn.boundFn_=fn;
return newfn;
};
Function.prototype.bind=function(self,var_args){
if(arguments.length>1){
var args=Array.prototype.slice.call(arguments,1);
args.unshift(this,self);
return bind.apply(null,args);
}else{
return bind(this,self);
}
};
Function.prototype.inherits=function(parentCtor){
inherits(this,parentCtor);
};
inherits=function(childCtor,parentCtor){
function tempCtor(){};
tempCtor.prototype=parentCtor.prototype;
childCtor.superClass_=parentCtor.prototype;
childCtor.prototype=new tempCtor();
childCtor.prototype.constructor=childCtor;
};
var goog=window.goog?window.goog:{};
window.goog=goog;
goog.typeOf=function(value){
var s=typeof value;
if(s=='object'){
if(value){
if(typeof value.length=='number'&&
typeof value.splice=='function'&&
typeof value.propertyIsEnumerable=='function'&&
!value.propertyIsEnumerable('length')){
return 'array';
}
}else{
return 'null';
}
}
return s;
};
function htmlEscape(str){
var result=str;
result=result.replace(/&/g,'&amp;');
result=result.replace(/</g,'&lt;');
result=result.replace(/>/g,'&gt;');
return result;
}
(function(){
var Thread={};
window.Thread=Thread;
var queue=[];
var timeout=null;
var tasks_length=0;
var named_tasks={};
var start_time=0;
var done_callback=null;
function start(){
timeout=window.setTimeout(process,0);
start_time=0;
};
var MAX_TIME_PER_CYCLE=100;
function process(){
if(!start_time){
start_time=(new Date()).getTime();
}
timeout=null;
if(queue.length==0){
tasks_length=0;
if(done_callback){
done_callback();
}
return;
}
var task=queue.shift();
if(task.name){
if(named_tasks[task.name]){
task=named_tasks[task.name];
named_tasks[task.name]=null;
}else{
return process();
}
}
try{
task.func.apply(task.obj?task.obj:task.func,task.args);
}catch(e){
start();
throw e;
return;
}
if((new Date()).getTime()-start_time<MAX_TIME_PER_CYCLE){
return process();
}
start();
};
Thread.queue=function(func,args,obj,opt_name){
tasks_length++;
var task={'func':func,'args':args,'obj':obj,'name':opt_name};
queue.push(task);
if(opt_name){
named_tasks[opt_name]=task;
}
if(!timeout){
start();
}
};
Thread.busy=function(){
return queue.length>0;
};
Thread.bind=function(func,opt_name){
var out_func=function(){
var t=this;
var args=[];
for(var i=0;i<arguments.length;i++){
args.push(arguments[i]);
}
Thread.queue(func,args,t,opt_name);
}
return out_func;
};
Thread.progress=function(){
return tasks_length?1-(queue.length/ tasks_length):0;
};
Thread.tasks_remaining=function(){
return queue.length;
};
Thread.set_done_callback=function(callback){
done_callback=callback;
};
})();
function Iter(obj){
var str=Object.prototype.toString.apply(obj);
if(str==='[object Array]'||str==='[object NodeList]'||
obj instanceof Array){
return new ArrayIterator(obj);
}
return new IteratorBase(obj);
}
function IteratorBase(obj){
this.obj=obj;
}
IteratorBase.prototype.each=function(callback){
for(var i in this.obj){
if(this.obj.hasOwnProperty(i)){
callback(this.obj[i],i);
}
}
};
IteratorBase.prototype.merge=function(obj){
for(var i in obj){
if(obj.hasOwnProperty(i)){
this.obj[i]=obj[i];
}
}
};
IteratorBase.prototype.collect=function(callback){
var results=[];
this.each(function(v,i){
var r=callback(v,i);
r!=undefined&&r!=null&&results.push(r);
});
return results;
};
function ArrayIterator(obj){
IteratorBase.call(this,obj);
}
ArrayIterator.prototype=new IteratorBase();
ArrayIterator.prototype.constructor=ArrayIterator;
ArrayIterator.prototype.each=function(callback){
var len=this.obj.length;
for(var i=0;i<len;++i){
callback(this.obj[i],i);
}
};
(function(){
window.updateEllipses=function(opt_el){
if(navigator.userAgent.indexOf('Firefox')==-1){
return;
}
if(!(opt_el.getElementsByTagName)){
opt_el=null;
}
var els=goog.dom.getElementsByTagNameAndClass('div','ellipsis',opt_el);
for(var i=els.length-1;i>=0;i--){
setupEllipsis(els[i]);
}
};
function setupEllipsis(el){
if(!el.__span){
var dots=document.createElement('div');
dots.appendChild(document.createTextNode('...'));
dots.style.display='none';
el.appendChild(dots);
if(el.className){
dots.className=el.className.replace('ellipsis','ellipsis-dots');
}
var ds=dots.style;
el.__dotstyle=ds;
el.__span=el.getElementsByTagName('span')[0]||el.getElementsByTagName('a')[0];
el.addEventListener("overflow",function(e){handleEllipsis(el)},false);
el.addEventListener("underflow",function(e){handleEllipsis(el)},false);
}
handleEllipsis(el);
};
function handleEllipsis(el){
window.setTimeout(function(){
if(el.clientWidth==0)return;
el.__dotstyle.display=
(el.__span.scrollWidth>=el.clientWidth)?'block':'none';
},5);
}
function getStyle(el,styleProp){
var y=null;
if(el.currentStyle){
y=el.currentStyle[styleProp];
}else if(window.getComputedStyle){
var computed=document.defaultView.getComputedStyle(el,'');
var hyphen=toHyphen(styleProp);
if(computed&&computed.getPropertyValue(hyphen)){
y=computed.getPropertyValue(hyphen);
}
}
return y;
}
function toHyphen(property){
if(property.indexOf('-')>-1){
return property;
}
var converted='';
var len=property.length;
for(var i=0;i<len;i++){
if(property.charAt(i)==property.charAt(i).toUpperCase()){
converted=converted+'-'+property.charAt(i).toLowerCase();
}else{
converted=converted+property.charAt(i);
}
}
return converted;
}
window.initEllipsis=function(){
var sTextOverFlow=getStyle(document.body,'textOverflow');
if(typeof(sTextOverFlow)=='string'||!document.getBoxObjectFor){
return;
}
window.setTimeout(window.updateEllipses,5);
}
yt.pubsub.subscribe('init',window.initEllipsis);
})();
(function(){
var YT_cache=function(opt_max_age){
this.cache_=new Object();
this.timestamp_=new Object();
if(!opt_max_age||opt_max_age<0){
opt_max_age=-1
}
this.expiration_diff_=opt_max_age;
}
window.YT_cache=YT_cache;
YT_cache.prototype.put=function(key,value){
if(key==undefined||value==undefined){
return null;
}
this.cache_[key]=value;
this.timestamp_[key]=new Date();
}
YT_cache.prototype.get=function(key,opt_default_value){
if(this.contains(key)){
return this.cache_[key];
}else{
return opt_default_value;
}
}
YT_cache.prototype.invalidate=function(){
this.cache_=new Object();
};
YT_cache.prototype.contains=function(key){
var contains_key=(this.cache_[key]!=null&&this.cache_[key]!=undefined);
return contains_key&&!this.isExpired(key);
}
YT_cache.prototype.isExpired=function(key){
var currDate=new Date();
if(this.expiration_diff_!=-1&&currDate-this.timestamp_[key]>this.expiration_diff_){
return true;
}
return false;
}
})();
(function(){
var AjaxQueue=function(url,opt_session_param,opt_get){
this.messages_=[];
this.logging_info_=[];
this.url_=url;
this.post_=!opt_get;
this.session_param_=opt_session_param;
this.last_delivery_=(new Date()).getTime();
this.response_handlers_={};
this.outstanding_delivery_=null;
this.idle_send_messages_timeout_=null;
this.delivery_timeout_=null;
this.error_handler_=null;
this.add_unload_handler();
};
window.AjaxQueue=AjaxQueue;
var MAX_DELAY_BEFORE_DELIVERY=15000;
var MAX_UNSENT_MESSAGES=10;
var MAGIC_PREFIX="while(1);";
AjaxQueue.prototype.add_unload_handler=function(){
var old_unload=function(){};
if(window.onunload){
old_unload=window.onunload;
}
var aq=this;
window.onunload=function(){
if(aq.messages_&&aq.messages_.length>0){
aq.deliver_messages();
}
old_unload();
};
};
AjaxQueue.prototype.should_send_messages_=function(){
var time_to_go=(new Date()).getTime()-this.last_delivery_>MAX_DELAY_BEFORE_DELIVERY;
var too_many=this.messages_.length>MAX_UNSENT_MESSAGES;
return time_to_go||too_many;
};
AjaxQueue.prototype.set_timeout_=function(){
if(this.should_send_messages_()){
this.deliver_messages();
}else{
this.idle_send_messages_timeout_=window.setTimeout(function(){this.set_timeout_();}.bind(this),5000);
}
};
AjaxQueue.prototype.send_message=function(message,type,opt_critical,opt_logging_info){
var real_message={'type':type,'request':message};
this.messages_.push(real_message);
if(opt_logging_info){
this.logging_info_.push(opt_logging_info)
}
if(opt_critical||this.should_send_messages_()){
this.deliver_messages();
}else if(!this.idle_send_messages_timeout_){
this.set_timeout_();
}
};
AjaxQueue.prototype.quick_send=function(message,type,callback,opt_logging_info){
var real_message={'type':type,'request':message};
var successCallback=function(response){
var responseText=response.responseText.substring(MAGIC_PREFIX.length);
if(this.check_redirect_or_reload(responseText)){
return;
}
var responses;
try{
responses=goog.json.unsafeParse(responseText);
}catch(e){
this.report_error(status,yt.getMsg('BAD_RESPONSE'));
return;
}
for(var i=0;i<responses.length;i++){
var response=responses[i];
if(response.type==type){
callback(response);
}
}
}.bind(this);
var error_callback=function(response){
this.report_error(status,yt.getMsg('UNABLE_TO_CONTACT_SERVER'));
}.bind(this);
this.contact_server([real_message],successCallback,error_callback,opt_logging_info?[opt_logging_info]:null);
};
AjaxQueue.prototype.register_handler=function(type,handler){
this.response_handlers_[type]=handler;
};
AjaxQueue.prototype.register_error_handler=function(handler){
this.error_handler_=handler;
};
AjaxQueue.prototype.report_error=function(http_code,error_message){
if(this.error_handler_){
this.error_handler_(http_code,error_message);
}else{
alert(error_message);
}
};
AjaxQueue.prototype.handle_message_responses_=function(responses){
if(!responses)return;
for(var i in responses){
var response=responses[i];
if(response.type&&this.response_handlers_[response.type]){
this.response_handlers_[response.type](response);
}
}
};
var REDIRECT_COMMAND="LOGIN_REDIRECT:";
var RELOAD_COMMAND="RELOAD_PAGE:";
AjaxQueue.prototype.redirect_login=function(url){
url="/login?next="+encodeURIComponent(url);
window.location.href=url;
};
AjaxQueue.prototype.reload_page=function(url){
var href=window.location.href;
if(href.indexOf(url)!=href.length-url.length){
window.location.href=url;
}else{
window.location.reload(true);
}
};
AjaxQueue.prototype.check_redirect_or_reload=function(responseText){
if(responseText.indexOf(REDIRECT_COMMAND)==0){
this.redirect_login(responseText.substring(REDIRECT_COMMAND.length));
return true;
}
if(responseText.indexOf(RELOAD_COMMAND)==0){
this.reload_page(responseText.substring(RELOAD_COMMAND.length));
return true;
}
return false;
}
AjaxQueue.prototype.deliver_messages=function(){
if(this.outstanding_delivery_){
this.redelivery_=true;
return;
}
this.redelivery_=false;
if(this.idle_send_messages_timeout_){
window.clearTimeout(this.idle_send_messages_timeout_);
this.idle_send_messages_timeout_=null;
}
var callback=function(response){
var responseText=response.responseText.substring(MAGIC_PREFIX.length);
if(this.check_redirect_or_reload(responseText)){
return;
}
var responses;
try{
responses=goog.json.unsafeParse(responseText);
}catch(e){
this.report_error(status,yt.getMsg('BAD_RESPONSE'));
return;
}
this.handle_message_responses_(responses);
if(this.redelivery_){
window.setTimeout(function(){
this.deliver_messages();}.bind(this),10);
}
this.outstanding_delivery_=null;
this.last_delivery_=(new Date()).getTime();
}.bind(this);
var error_callback=function(response){
if(this.outstanding_delivery_){
this.messages_=this.outstanding_delivery_.concat(this.messages_);
}
this.report_error(status,yt.getMsg('UNABLE_TO_CONTACT_SERVER'));
this.outstanding_delivery_=null;
this.last_delivery_=(new Date()).getTime();
}.bind(this);
this.contact_server(this.messages_,callback,error_callback,this.logging_info_);
this.outstanding_delivery_=this.messages_;
this.messages_=[];
this.logging_info_=[];
};
AjaxQueue.prototype.contact_server=function(messages,callback,error_callback,opt_logging_info){
var message_param="messages="+encodeURIComponent(goog.json.serialize(messages));
var url=this.url_;
if(opt_logging_info&&opt_logging_info.length>0){
url+='&'+opt_logging_info.join('&');
}
if(this.post_){
if(this.session_param_){
yt.net.ajax.sendRequest(url,{postBody:this.session_param_+"&"+message_param,onComplete:callback,onException:error_callback});
}else{
yt.net.ajax.sendRequest(url,{postBody:message_param,onComplete:callback,onException:error_callback});
}
}else{
yt.net.ajax.sendRequest(url+"&"+message_param,{method:"GET",onComplete:callback,onException:error_callback});
}
};
})();
(function(){
window.goog=window.goog?window.goog:{};
var goog=window.goog;
goog.json={};
goog.json.isValid_=function(s){
if(s==''){
return false;
}
s=s.replace(/"(\\.|[^"\\])*"/g,'');
return s==''||!/[^,:{}\[\]0-9.\-+Eaeflnr-u \n\r\t]/.test(s);
};
goog.json.parse=function(s){
s=String(s);
if(typeof s.parseJSON=='function'){
return s.parseJSON();
}
if(goog.json.isValid_(s)){
try{
return eval('('+s+')');
}catch(ex){
}
}
throw Error('Invalid JSON string: '+s);
};
goog.json.unsafeParse=function(s){
return eval('('+s+')');
};
goog.json.serializer_=null;
goog.json.serialize=function(object){
if(!goog.json.serializer_){
goog.json.serializer_=new goog.json.Serializer;
}
return goog.json.serializer_.serialize(object);
};
goog.json.Serializer=function(){
};
goog.json.Serializer.prototype.serialize=function(object){
if(object!=null&&typeof object.toJSONString=='function'){
return object.toJSONString();
}
var sb=[];
this.serialize_(object,sb);
return sb.join('');
};
goog.json.Serializer.prototype.serialize_=function(object,sb){
switch(goog.typeOf(object)){
case 'string':
this.serializeString_(object,sb);
break;
case 'number':
this.serializeNumber_(object,sb);
break;
case 'boolean':
sb.push(object);
break;
case 'undefined':
sb.push('null');
break;
case 'null':
sb.push('null');
break;
case 'array':
this.serializeArray_(object,sb);
break;
case 'object':
this.serializeObject_(object,sb);
break;
default:
throw Error('Unknown type: '+typeof object);
}
};
goog.json.Serializer.charToJsonCharCache_={
'\"':'\\"',
'\\': '\\\\',
'/':'\\/',
'\b':'\\b',
'\f':'\\f',
'\n':'\\n',
'\r':'\\r',
'\t':'\\t',
'\x0B':'\\u000b'
};
goog.json.Serializer.prototype.serializeString_=function(s,sb){
sb.push('"',s.replace(/[\\\"\x00-\x1f\x80-\uffff]/g,function(c){
if(c in goog.json.Serializer.charToJsonCharCache_){
return goog.json.Serializer.charToJsonCharCache_[c];
}
var cc=c.charCodeAt(0);
var rv='\\u';
if(cc<16){
rv+='000';
}else if(cc<256){
rv+='00';
}else if(cc<4096){
rv+='0';
}
return goog.json.Serializer.charToJsonCharCache_[c]=rv+cc.toString(16);
}),'"');
};
goog.json.Serializer.prototype.serializeNumber_=function(n,sb){
sb.push(isFinite(n)&&!isNaN(n)?n:'null');
};
goog.json.Serializer.prototype.serializeArray_=function(arr,sb){
var l=arr.length;
sb.push('[');
var sep='';
for(var i=0;i<l;i++){
sb.push(sep)
this.serialize_(arr[i],sb);
sep=',';
}
sb.push(']');
};
goog.json.Serializer.prototype.serializeObject_=function(obj,sb){
sb.push('{');
var sep='';
for(var key in obj){
sb.push(sep);
this.serializeString_(key,sb);
sb.push(':');
this.serialize_(obj[key],sb);
sep=',';
}
sb.push('}');
};
})();
window.History={};
(function(){
var self=this.History;
var iframeURL="/blank.html?";
var once=true;
self.initialize=function(){
if(!isIE_)return;
firstLoad_=false;
fireOnNewListener_=PageLoaded();
};
self.addListener=function(callback){
listener_=callback;
if(fireOnNewListener_){
FireHistoryEvent(currentLocation_);
fireOnNewListener_=false;
}
};
self.add=function(newLocation,historyData){
var addImpl=function(){
if(currentWaitTime_>0)currentWaitTime_-=waitTime_;
newLocation=RemoveHash(newLocation);
var idCheck=_gel(newLocation);
if(idCheck==undefined||idCheck==null){
self.historyStorage_.put(newLocation,historyData);
ignoreLocationChange_=true;
ieAtomicLocationChange_=true;
currentLocation_=newLocation;
window.location.hash=newLocation||'#';
if(isIE_)iframe_.src=iframeURL+newLocation;
ieAtomicLocationChange_=false;
}
};
window.setTimeout(addImpl,currentWaitTime_);
currentWaitTime_+=waitTime_;
};
self.isFirstLoad=function(){
return firstLoad_==true;
};
var SECRET_DATA_KEY='_secret_data';
self.setSecretData=function(data){
self.historyStorage_.put(SECRET_DATA_KEY,data);
};
self.getSecretData=function(){
return self.historyStorage_.get(SECRET_DATA_KEY);
};
function GetCurrentLocation(){
return RemoveHash(window.location.hash);
};
var currentLocation_=null;
var listener_=null;
var iframe_=null;
var ignoreLocationChange_=null;
var waitTime_=200;
var currentWaitTime_=0;
var fireOnNewListener_=null;
var firstLoad_=null;
var ieAtomicLocationChange_=null;
var isIE_;
function Create(){
isIE_=document.all&&
navigator.userAgent.toLowerCase().indexOf('msie')!=-1;
var initialHash=GetCurrentLocation();
currentLocation_=initialHash;
simpleBindEvent(window,"unload",function(){
firstLoad_=null;
});
if(!isIE_){
if(!(ignoreLocationChange_=!PageLoaded()))
fireOnNewListener_=true;
}else{
document.write(
"<iframe style='border:0px;width:1px;"+
"height:1px;position:absolute;bottom:0px;"+
"right:0px;visibility:visible' "+
"name=HistoryFrame id=HistoryFrame "+
"src=\""+iframeURL+encodeURIComponent(initialHash)+"\"></iframe>");
waitTime_=1000;
ignoreLocationChange_=true;
iframe_=_gel("HistoryFrame");
}
setInterval(function(){self.CheckLocation();},500);
};
function PageLoaded(){
var result=true;
var FLAG="History_pageLoaded";
if(!self.historyStorage_.hasKey(FLAG)){
self.historyStorage_.put(FLAG,true);
firstLoad_=true;
result=false;
}
return result;
};
function FireHistoryEvent(newHash){
var historyData=self.historyStorage_.get(newHash);
listener_.call(null,newHash,historyData);
};
self.CheckLocation=function(){
if(!isIE_&&ignoreLocationChange_==true){
ignoreLocationChange_=false;
return;
}
if(!isIE_&&ieAtomicLocationChange_==true){
return;
}
var hash=GetCurrentLocation();
if(hash==currentLocation_)return;
ieAtomicLocationChange_=true;
if(isIE_){
var doc=iframe_.contentDocument||iframe_.contentWindow.document;
var frHash=new String(doc.location.search);
var qAt0=frHash.charAt(0)=="?";
if(frHash.length==1&&qAt0)
frHash="";
else if(frHash.length>=2&&qAt0)
frHash=frHash.substring(1);
if(frHash!=hash){
iframe_.src=iframeURL+hash;
}else{
return;
}
}
currentLocation_=hash;
ieAtomicLocationChange_=false;
FireHistoryEvent(hash);
};
function RemoveHash(hashValue){
var result=hashValue;
if(hashValue==null||hashValue==undefined)
result="";
else{
var c0h=hashValue.charAt(0)=="#";
if(hashValue==""||(hashValue.length==1&&c0h))
result="";
else if(hashValue.length>1&&c0h)
result=hashValue.substring(1);
}
return result;
};
self.iframeLoaded=function(newLocation){
if(ignoreLocationChange_==true){
ignoreLocationChange_=false;
return;
}
var hash=new String(newLocation.search);
if(hash.charAt(0)=="?"&&hash.length>0)
hash=hash.substring(1);
window.location.hash=hash;
FireHistoryEvent(hash);
};
(function(){
var hsSelf={};
self.historyStorage_=hsSelf;
var storageHash_={};
var hashLoaded_=false;
hsSelf.put=function(key,value){
if(hsSelf.isValidKey(key)){
storageHash_[key]=value;
SaveHashTable();
}
};
hsSelf.get=function(key){
var result=null;
if(hsSelf.isValidKey(key)){
LoadHashTable();
var value=storageHash_[key];
if(value!=undefined)result=value;
}
return result;
};
hsSelf.hasKey=function(key){
var result=false;
if(hsSelf.isValidKey(key)){
LoadHashTable();
if(typeof storageHash_[key]!="undefined")result=true;
}
return result;
};
hsSelf.isValidKey=function(key){
return typeof key=="string";
};
var storageField_=null;
hsSelf.init=function(){
if(hsSelf.initialized_)return;
var fieldName="historyStorageField";
storageField_=_gel(fieldName);
if(!storageField_){
var styleValue=" style='position:absolute;top:-10000px;'";
document.write(
"<form id=historyStorageForm method=GET"+styleValue+
"><textarea id="+fieldName+" name="+fieldName+
styleValue+" left=-1000px></textarea></form>");
storageField_=_gel(fieldName);
}
hsSelf.initialized_=true;
};
function LoadHashTable(){
if(!hashLoaded_){
hsSelf.init();
var serializedHashTable=storageField_.value;
if(serializedHashTable!=""&&
serializedHashTable!=null){
storageHash_=eval('('+serializedHashTable+')');
}
hashLoaded_=true;
}
};
hsSelf.stringify=function(arg){
var c,i,l,s='',v;
switch(typeof arg){
case 'object':
if(arg){
if(arg instanceof Array||
(typeof arg.join=="function"&&
typeof arg.reverse=="function")){
for(i=0;i<arg.length;++i){
v=hsSelf.stringify(arg[i]);
if(s){
s+=',';
}
s+=v;
}
return '['+s+']';
}else if(typeof arg.toString!='undefined'){
for(i in arg){
v=arg[i];
if(typeof v!='undefined'&&typeof v!='function'){
v=hsSelf.stringify(v);
if(s){
s+=',';
}
s+=hsSelf.stringify(i)+':'+v;
}
}
return '{'+s+'}';
}
}
return 'null';
case 'number':
return isFinite(arg)?String(arg):'null';
case 'string':
l=arg.length;
s='"';
for(i=0;i<l;i+=1){
c=arg.charAt(i);
if(c>=' '){
if(c=='\\' || c == '"') {
s+='\\';
}
s+=c;
}else{
switch(c){
case '\b':
s+='\\b';
break;
case '\f':
s+='\\f';
break;
case '\n':
s+='\\n';
break;
case '\r':
s+='\\r';
break;
case '\t':
s+='\\t';
break;
default:
c=c.charCodeAt();
s+='\\u00'+Math.floor(c/ 16).toString(16)+
(c%16).toString(16);
break;
}
}
}
return s+'"';
case 'boolean':
return String(arg);
default:
return 'null';
}
};
function SaveHashTable(){
LoadHashTable();
storageField_.value=hsSelf.stringify(storageHash_);
};
})();
self.getStorage=function(){
return self.historyStorage_;
};
Create();
function simpleBindEvent(element,event,listener){
var onevent='on'+event;
if(element.addEventListener){
element.addEventListener(event,listener,false);
}else if(element.attachEvent){
element.attachEvent(onevent,listener);
}else{
var old=element[onevent];
element[onevent]=function(){
var rv1=old.apply(this,arguments);
var rv2=listener.apply(this,arguments);
return rv1==undefined?rv2:
(rv2==undefined?rv1:rv2&&rv1);
}
}
};
})();
function $(id){
return document.getElementById(id);
}
function $ce(name,attributes,children){
var att,el=document.createElement(name);
if(attributes){
Iter(attributes).each(function(attValue,attName){
switch(attName){
case 'id':
el.id=attValue;
break;
case 'c':
el.className=attValue;
break;
default:
el.setAttribute(attName,attValue);
break;
}
});
}
if(typeof children=='string'){
el.innerHTML=children;
}else if(children instanceof Array){
Iter(children).each(function(node){
el.appendChild(node);
});
}else if(children){
el.appendChild(children);
}
return el;
}
function $ctn(text){
return document.createTextNode(text);
}
function $children(node){
var c=[];
for(var i=0;i<node.childNodes.length;i++){
c.push(node.childNodes[i]);
}
return c;
}
function removeChildren(node){
if(node)while(node.firstChild){
node.removeChild(node.firstChild);
}
}
function buildDom(html){
var d=document.createElement('div');
d.innerHTML=html;
return d;
}
function $id(){
var counter=0;
$id=function(){
return++counter;
};
return counter;
};
function $listen(el,event,handler){
if(window.addEventListener){
el.addEventListener(event,handler,false);
}else if(window.attachEvent){
el.attachEvent('on'+event,handler);
}
}
function $find(node,text){
if(node.nodeValue&&node.nodeValue.indexOf(text)!=-1){
return node;
}
var cur=node.firstChild;
while(cur){
var tmp;
if(tmp=$find(cur,text))return tmp;
cur=cur.nextSibling;
}
}
(function(){
var callbacks=[];
var monitoring=false;
var oldLocation=null;
function resetLocation(){
oldLocation=window.location.hash;
}
function checkLocation(){
if(oldLocation==null){
resetLocation();
}
var newLocation=window.location.hash;
if(oldLocation!=newLocation){
Iter(callbacks).each(function(f){
f(oldLocation,newLocation);
});
oldLocation=newLocation;
}
};
var timerStarted=false;
function timerLoop(){
timerStarted=true;
checkLocation();
setTimeout(timerLoop,100);
}
function monitorLocation(callback){
if(callback){
callbacks.push(callback);
}
if(!timerStarted){
timerLoop();
}
}
window.monitorLocation=monitorLocation;
window.checkLocation=checkLocation;
window.resetLocation=resetLocation;
})();
(function(){
var ANIMATION_SLICE_MS=10;
var animations=[];
var timerId;
var sorted;
function animationSorter(a,b){
if(a.startTime==b.startTime){
return a.property?0:1;
}
return(a.startTime-b.startTime);
}
function defragmentAnimations(){
var old=animations;
animations=[];
for(var i=0;i<old.length;++i){
if(old[i]!=null){
animations.push(old[i]);
}
}
}
function animate(){
sorted=false;
if(timerId){
window.clearTimeout(timerId);
timerId=null;
}
timerId=window.setTimeout(animationLoop,0);
}
function animateNow(){
sorted=false;
if(timerId){
window.clearTimeout(timerId);
timerId=null;
}
animationLoop();
}
function animationLoop(){
var now=(new Date()).valueOf();
var active=false;
var defrag=false;
if(!sorted){
animations.sort(animationSorter);
sorted=true;
}
for(var i=0;i<animations.length;++i){
var ani=animations[i];
try{
if(ani.startTime>now){
break;
}
if(ani.endTime<=now){
if(ani.property){
ani.object[ani.property]=ani.interpolator?ani.interpolator(
ani.startValue,
ani.targetValue,
1,
ani.timeline
):ani.targetValue;
}else if(typeof(ani.targetValue)=='function'){
ani.targetValue(ani.object,now);
}
animations[i]=null;
defrag=true;
continue;
}
var duration=ani.endTime-ani.startTime;
if(ani.property){
ani.object[ani.property]=ani.interpolator(
ani.startValue,
ani.targetValue,
(now-ani.startTime)/ duration,
ani.timeline
);
active=true;
}
}catch(e){
animations[i]=null;
defrag=true;
}
}
if(defrag){
defragmentAnimations();
}
if(active){
timerId=window.setTimeout(animationLoop,ANIMATION_SLICE_MS);
}else if(animations.length>0){
timerId=window.setTimeout(animationLoop,animations[0].startTime-now);
}
}
function animateProperty(
element,object,property,startValue,targetValue,delay,duration,
interpolator,timeline,opt_restore,opt_hold){
var startTime=(new Date()).valueOf()+delay*1000;
var endTime=startTime+duration*1000;
var animationProperties={
element:element,
object:object,
property:property,
startValue:startValue,
targetValue:targetValue,
startTime:startTime,
endTime:endTime,
interpolator:((typeof interpolator=='function')?
interpolator:interpolators[interpolator]),
timeline:timelines[timeline]
};
animations.push(animationProperties);
if(opt_restore){
opt_hold=opt_hold||0;
animations.push({
element:element,
object:object,
property:property,
startValue:null,
targetValue:object[property],
startTime:opt_hold*1000+endTime+1,
endTime:opt_hold*1000+endTime+1
});
}
animate();
return animationProperties;
};
function animatePropertyDiscrete(element,object,property,values,delay,duration,opt_restore,opt_hold){
function interpolator(start,end,position,timeline){
var pos=timeline(start,end,position);
return values[Math.round(pos*(values.length-1))];
}
animateProperty(element,object,property,0,1,delay,duration,
interpolator,'linear',opt_restore,opt_hold);
}
function delaySetProperty(element,object,property,targetValue,delay,opt_restore,opt_hold){
animateProperty(element,object,property,targetValue,
targetValue,delay,0,null,null,opt_restore,opt_hold);
}
function pad2(str){
if(str.length<2){
return '0'+str;
}
return str;
}
function scheduleAction(element,object,callback,delay,opt_callback_cleanup,opt_hold){
animateProperty(element,object,null,null,callback,delay,0);
if(opt_hold){
var runTime=(new Date()).valueOf()+delay*1000;
var cleanupTime=runTime+opt_hold*1000;
animations.push({
element:element,
object:object,
targetValue:opt_callback_cleanup,
startTime:cleanupTime,
endTime:cleanupTime
});
}
animate();
}
function repeatAction(element,object,callback,delay,interval,times){
var nextTime=(new Date()).valueOf()+delay*1000;
var i=0;
(function eachTime(object,now){
if(i>0){
callback(i-1,now<nextTime);
}
if(i<times){
animations.push({
element:element,
object:object,
startTime:nextTime,
endTime:nextTime,
targetValue:eachTime
});
nextTime=nextTime+interval*1000;
animate();
}
i++;
})();
}
function isAncestorOrSelf(old,young){
try{
var cur=young;
do{
if(cur==old){
return true;
}
}while(cur=cur.parentNode);
return false;
}catch(e){
return false;
}
}
function endAllAnimations(){
var now=(new Date()).valueOf();
for(var i=0;i<animations.length;++i){
var cur=animations[i];
cur.startTime=now-1;
cur.endTime=now;
}
animateNow();
}
function endAnimations(element){
animateNow();
var now=(new Date()).valueOf();
for(var i=0;i<animations.length;++i){
var cur=animations[i];
if(isAncestorOrSelf(element,cur.element)){
cur.startTime=now;
cur.endTime=now;
}
}
animateNow();
}
function parseRgb(rgb){
if(rgb.indexOf('rgb')==0){
segs=rgb.split(/[^0-9]+/);
return '#'+
pad2(parseInt(segs[1]).toString(16))+
pad2(parseInt(segs[2]).toString(16))+
pad2(parseInt(segs[3]).toString(16));
}else if(rgb.length==4){
return '#'+
rgb.charAt(1)+'0'+rgb.charAt(2)+'0'+rgb.charAt(3)+'0';
}else{
return rgb;
}
}
function parsePx(px){
if(!px)return 0;
if(typeof(px)=='number')return px;
return parseInt(px.replace('px',''));
}
var timelines={
linear:function(v0,v1,pos){
return v0*(1-pos)+v1*pos;
},
decelerate:function(v0,v1,pos){
pos=1-(pos-1)*(pos-1);
return v0*(1-pos)+v1*pos;
},
sine:function(v0,v1,pos){
var rads=Math.PI/2;
var scomp=Math.sin(pos*rads);
var ccomp=1-Math.sin(rads+pos*rads);
var pos=ccomp*(1-pos)+scomp*pos;
return v0*(1-pos)+v1*pos;
}
};
var interpolators={
rgb3:function(color0,color1,position,timeline){
var i,result='',digit0,digit1,newvalue,newdigit;
for(i=1;i<4;++i){
digit0=parseInt(color0.charAt(i),16);
digit1=parseInt(color1.charAt(i),16);
newvalue=Math.round(timeline(digit0*16,digit1*16,position));
result+=pad2(newvalue.toString(16));
}
return '#'+result;
},
rgb6:function(color0,color1,position,timeline){
var i,result='',digit0,digit1,newvalue,newdigit;
for(i=0;i<3;++i){
digit0=parseInt(color0.substr(i*2+1,2),16);
digit1=parseInt(color1.substr(i*2+1,2),16);
newvalue=Math.round(timeline(digit0,digit1,position));
result+=pad2(newvalue.toString(16));
}
return '#'+result;
},
number:function(num0,num1,position,timeline){
return timeline(num0,num1,position);
},
integer:function(num0,num1,position,timeline){
return Math.round(timeline(num0,num1,position));
},
px:function(px0,px1,position,timeline){
return Math.round(timeline(parsePx(px0),parsePx(px1),position))+'px';
},
filter:function(num0,num1,position,timeline){
return 'alpha(opacity='+timeline(num0*100,num1*100,position)+')';
}
};
window.scheduleAction=scheduleAction;
window.repeatAction=repeatAction;
window.animateProperty=animateProperty;
window.animatePropertyDiscrete=animatePropertyDiscrete;
window.endAnimations=endAnimations;
window.endAllAnimations=endAllAnimations;
window.delaySetProperty=delaySetProperty;
window.parseRgb=parseRgb;
window.parsePx=parsePx;
window.animateProperty.interpolators=interpolators;
window.animateProperty.timelines=timelines;
})();
function ani(){}
ani.DEFAULT_MESSAGE_DELAY=10;
ani.DEFAULT_MESSAGE_FADEOUT=2;
ani.DEFAULT_MESSAGE_SLIDE=0.5;
ani.USE_OPACITY=0;
ani.USE_FILTER=1;
ani.TRANSPARENCY_METHOD=null;
function poller(interval,limit,callback){
if(limit>0){
try{
callback();
}catch(e){
setTimeout(function(){
poller(interval,limit-interval,callback);
},interval);
}
}
}
ani.isIE=!!eval('/*@cc_on!@*/false');
if(ani.isIE){
ani.TRANSPARENCY_METHOD=ani.USE_FILTER;
}else{
ani.TRANSPARENCY_METHOD=ani.USE_OPACITY;
}
ani.fade=function(el,start,end,delay,duration,opt_restore,opt_restore_delay){
if(ani.TRANSPARENCY_METHOD==ani.USE_OPACITY){
animateProperty(el,el.style,'opacity',start,end,delay,duration,
'number','linear',opt_restore,opt_restore_delay);
}else if(ani.TRANSPARENCY_METHOD==ani.USE_FILTER){
animateProperty(el,el.style,'filter',start,end,delay,duration,
'filter','linear',opt_restore,opt_restore_delay);
}
}
ani.fadeDuringSlideUp=function(el,delay,duration){
ani.wrap(el,function(wrapper){
endAnimations(wrapper);
animateProperty(wrapper,wrapper.style,'height',wrapper.offsetHeight+'px',
'1px',delay,duration,'px','sine',true);
animateProperty(wrapper,wrapper.style,'opacity','1.0','0.0',delay,duration,
'number','sine',true);
animateProperty(wrapper,wrapper.style,'filter','1.0','0.0',delay,duration,
'filter','sine',true);
delaySetProperty(el,el.style,'display','none',delay+duration);
},delay,duration);
};
ani.fadeAndSlideUp=function(el,delay,fadeDuration,slideDuration){
var wrapper=ani.insertWrapper(el);
wrapper.style.height=wrapper.offsetHeight+10+'px';
wrapper.style.overflow='hidden';
wrapper.style.position='relative';
animateProperty(wrapper,wrapper.style,'height',wrapper.offsetHeight+'px',
wrapper.offsetHeight+'px',delay,fadeDuration,'px','linear');
ani.fade(wrapper,'1.0','0.0',delay,fadeDuration);
animateProperty(wrapper,wrapper.style,'height',wrapper.offsetHeight+'px',
'1px',delay+fadeDuration,slideDuration,'px','sine');
delaySetProperty(el,el.style,'display','none',delay+fadeDuration+
slideDuration);
scheduleAction(wrapper,wrapper,ani.removeWrapper,delay+fadeDuration+
slideDuration+1);
};
ani.slideDownAndFadeIn=function(el,delay,fadeDuration,slideDuration){
ani.wrap(el,function(wrapper){
wrapper.style.visibility="hidden";
var height=ani.getDimensions(wrapper).height;
animateProperty(wrapper,wrapper.style,'height','1px',height+'px',
delay,slideDuration,'px','sine');
animateProperty(wrapper,wrapper.style,'height',height+'px',
height+'px',delay+slideDuration,fadeDuration,'px','linear');
ani.fade(wrapper,0,1,delay+slideDuration,fadeDuration);
wrapper.style.height="1px";
delaySetProperty(wrapper,wrapper.style,'visibility','visible',delay+slideDuration);
scheduleAction(wrapper,wrapper,ani.exciseNode,delay+fadeDuration+slideDuration);
},delay,-1,10);
};
ani.ajaxSlideOpen=function(el,delay,duration,opt_start_height,opt_end_height){
var height=ani.getDimensions(el).height;
if(!opt_end_height){
opt_end_height=height;
}
if(!opt_start_height){
opt_start_height=1;
}
if(el.animation_property_margin){
var prop=el.animation_property_margin;
prop.startTime=(new Date()).valueOf();
prop.endTime=(new Date()).valueOf()+duration*1000;
prop.startValue=el.wrapper.style.marginTop;
prop.targetValue=(opt_end_height-height)+'px';
prop.timeline=window.animateProperty.timelines.decelerate;
var prop_h=el.animation_property_height;
prop_h.startTime=(new Date()).valueOf();
prop_h.endTime=(new Date()).valueOf()+duration*1000;
prop_h.startValue=el.style.height;
prop_h.targetValue=opt_end_height+'px';
prop_h.timeline=window.animateProperty.timelines.decelerate;
}else{
ani.wrap(el,function(wrapper){
wrapper.style.height=opt_start_height+'px';
el.wrapper=wrapper;
el.animation_property_margin=animateProperty(el,el.style,
'marginTop',(opt_start_height-height)+'px',(opt_end_height-height)+'px',delay,
duration,'px','sine');
el.animation_property_height=animateProperty(wrapper,wrapper.style,
'height',opt_start_height+'px',opt_end_height+'px',delay,
duration,'px','sine');
delaySetProperty(el,el,'animation_property_margin',null,delay+duration);
delaySetProperty(el,el.style,'marginTop','0',delay+duration);
delaySetProperty(el,el.style,'display','block',delay);
},delay,duration,0);
}
};
ani.ajaxSlideSideways=function(el,delay,duration,opt_only_reveal,opt_start_width,opt_end_width){
var width=ani.getDimensions(el).width;
if(!opt_end_width){
opt_end_width=width;
}
if(!opt_start_width){
opt_start_width=1;
}
if(el.animation_property_margin){
var prop=el.animation_property_margin;
prop.startTime=(new Date()).valueOf();
prop.endTime=(new Date()).valueOf()+duration*1000;
prop.startValue=el.wrapper.style.marginTop;
prop.targetValue=(opt_end_width-width)+'px';
prop.timeline=window.animateProperty.timelines.decelerate;
var prop_h=el.animation_property_width;
prop_h.startTime=(new Date()).valueOf();
prop_h.endTime=(new Date()).valueOf()+duration*1000;
prop_h.startValue=el.style.width;
prop_h.targetValue=opt_end_width+'px';
prop_h.timeline=window.animateProperty.timelines.decelerate;
}else{
ani.wrap(el,function(wrapper){
wrapper.style.width=opt_start_width+'px';
el.wrapper=wrapper;
if(!opt_only_reveal){
el.animation_property_margin=animateProperty(el,el.style,
'marginLeft',(opt_start_width-width)+'px',(opt_end_width-width)+'px',delay,duration,'px','sine');
}
el.animation_property_width=animateProperty(wrapper,wrapper.style,
'width',opt_start_width+'px',opt_end_width+'px',delay,duration,'px','sine');
delaySetProperty(el,el,'animation_property_margin',null,delay+duration);
delaySetProperty(el,el.style,'marginLeft','0',delay+duration);
delaySetProperty(el,el.style,'display','block',delay);
},delay,duration,0);
}
};
ani.slideClosedBySpeed=function(el,pxPerSecond,callback){
var duration=el.offsetHeight/ pxPerSecond;
ani.wrap(el,function(wrapper){
var start_height=wrapper.offsetHeight;
animateProperty(el,el.style,
'marginTop','0px',(1-start_height)+'px',0,
duration,'px','linear',true,0);
animateProperty(wrapper,wrapper.style,'height',start_height+'px','1px',
0,duration,'px','linear');
},0,duration);
scheduleAction(el,el,callback,duration);
};
ani.measureHeight=function(el){
var oldPosition=el.style.position;
el.style.position='absolute';
el.style.visibility='hidden';
el.style.display='block';
var height=el.offsetHeight;
el.style.display='none';
el.style.visibility='visible';
el.style.position=oldPosition;
return height;
}
ani.slideOpenBySpeed=function(el,pxPerSecond,callback){
var end_height=ani.measureHeight(el);
var duration=end_height/ pxPerSecond;
ani.wrap(el,function(wrapper){
wrapper.style.height='0px';
el.style.display='block';
animateProperty(el,el.style,
'marginTop',-end_height+'px','0px',0,duration,
'px','linear',true,0);
animateProperty(wrapper,wrapper.style,
'height','0px',end_height+'px',0,duration,
'px','linear');
},0,duration);
if(callback)scheduleAction(el,el,callback,duration);
};
ani.slideClosed=function(el,delay,duration){
ani.wrap(el,function(wrapper){
var start_height=wrapper.offsetHeight;
animateProperty(el,el.style,
'marginTop','0px',(1-start_height)+'px',delay,
duration,'px','sine',true);
animateProperty(wrapper,wrapper.style,'height',start_height+'px','1px',
delay,duration,'px','sine');
delaySetProperty(el,el.style,'display','none',delay+duration,true);
scheduleAction(wrapper,wrapper,function(div){
div.parentNode.removeChild(div);},delay+duration);
},delay,-1,0);
};
ani.wrap=function(el,callback,delay,duration,opt_extra_height){
var wrapper=ani.insertWrapper(el);
opt_extra_height=opt_extra_height||0;
wrapper.style.height=wrapper.offsetHeight+opt_extra_height+'px';
wrapper.style.overflow='hidden';
wrapper.style.position='relative';
callback(wrapper);
function teardown(el){
ani.removeWrapper(wrapper);
}
if(duration>0){
scheduleAction(el,el,null,delay,teardown,duration);
}
};
ani.insertWrapper=function(el){
var wrapper=document.createElement('div');
wrapper.style.margin='0px';
wrapper.style.padding='0px';
el.parentNode.insertBefore(wrapper,el);
el.parentNode.removeChild(el);
wrapper.appendChild(el);
return wrapper;
};
ani.removeWrapper=function(wrapper){
var el=wrapper.firstChild;
wrapper.removeChild(el);
wrapper.parentNode.insertBefore(el,wrapper);
wrapper.parentNode.removeChild(wrapper);
};
ani.exciseNode=function(el){
var par=el.parentNode;
var node=el.firstChild;
while(node=el.firstChild){
el.removeChild(node);
par.insertBefore(node,el);
}
par.removeChild(el);
}
ani.getPosition=function(target){
var left=0;
var top=0;
do{
left+=target.offsetLeft;
top+=target.offsetTop;
}while(target=target.offsetParent);
return{x:left,y:top};
}
ani.getDimensions=function(el){
var dimensions={};
ani.wrap(el,function(wrapper){
dimensions.width=wrapper.offsetWidth;
dimensions.height=wrapper.offsetHeight;
dimensions.top=wrapper.offsetTop;
dimensions.left=wrapper.offsetLeft;
ani.exciseNode(wrapper);
});
return dimensions;
};
ani.hideAndFloatClone=function(el,opt_duration){
var clone;
ani.wrap(el,function(wrapper){
clone=wrapper.cloneNode(true);
clone.style.left=wrapper.offsetLeft+"px";
clone.style.top=wrapper.offsetTop+"px";
clone.style.width=wrapper.offsetWidth+'px';
clone.style.height=wrapper.offsetHeight+'px';
ani.exciseNode(wrapper);
});
clone.firstChild.id=el.id+"-clone";
clone.style.position="absolute";
el.style.visibility="hidden";
el.offsetParent.insertBefore(clone,el.offsetParent.firstChild);
clone.style.zIndex=el.style.zIndex?el.style.zIndex+1:"100";
clone.style.clear="both";
if(opt_duration){
function teardown(el){
el.style.visibility="visible";
setTimeout(function(){removeNode(clone);},0);
}
scheduleAction(el,el,null,0,teardown,opt_duration);
}
return clone;
};
ani.slideTo=function(el,start_top,start_left,end_top,end_left,duration,opt_use_clone){
var ani_obj=opt_use_clone?ani.hideAndFloatClone(el,duration):el;
ani_obj.style.visibility="visible";
animateProperty(ani_obj,ani_obj.style,'top',start_top,end_top,0,duration,
'px','decelerate');
animateProperty(ani_obj,ani_obj.style,'left',start_left,end_left,0,duration,
'px','decelerate');
};
ani.swapDivs=function(a,b,duration){
var a_clone=ani.hideAndFloatClone(a,duration+0.25);
var b_clone=ani.hideAndFloatClone(b,duration+0.25);
ani.fade(a_clone,1,0.5,0,duration/ 4);
ani.fade(b_clone,1,0.5,0,duration/ 4);
ani.fade(a_clone,0.5,1,3*duration/ 4,duration/ 4);
ani.fade(b_clone,0.5,1,3*duration/ 4,duration/ 4);
var b_next=b.nextSibling;
a.parentNode.insertBefore(b,a.nextSibling);
b.parentNode.insertBefore(a,b_next);
var a_dim=ani.getDimensions(a);
var b_dim=ani.getDimensions(b);
if(a.offsetTop!=b.offsetTop){
animateProperty(a_clone,a_clone.style,'top',a_clone.style.top,a_dim.top+'px',0,duration,'px','sine');
animateProperty(b_clone,b_clone.style,'top',b_clone.style.top,b_dim.top+'px',0,duration,'px','sine');
}
if(a.offsetLeft!=b.offsetLeft){
animateProperty(a_clone,a_clone.style,'left',a_clone.style.left,a_dim.left+'px',0,duration,'px','sine');
animateProperty(b_clone,b_clone.style,'left',b_clone.style.left,b_dim.left+'px',0,duration,'px','sine');
}
};
ani.crossfadeReveal=function(hide,show,reveal,speed,opt_height,opt_oncompleteCallback){
var w=hide.offsetWidth;
var h=hide.offsetHeight;
hide.style.position='absolute';
hide.style.width=w+'px';
hide.style.height=h+'px';
var origHeight=h;
hide._origHeight=origHeight;
var duration;
var targetHeight;
function animateWrapper(wrapper){
reveal.style.display='block';
targetHeight=opt_height?opt_height:ani.getDimensions(reveal).height;
duration=Math.min((Math.abs(targetHeight-origHeight))/ speed,2.0);
ani.fade(hide,'1.0','0.0',0,duration);
if(show){
ani.fade(show,'0.0','1.0',0,duration);
}
wrapper.style.overflow='hidden';
wrapper.style.height=origHeight;
animateProperty(wrapper,wrapper.style,'height',origHeight+'px',targetHeight+'px',0,duration,'px','decelerate');
scheduleAction(wrapper,wrapper,ani.exciseNode,duration);
if(opt_oncompleteCallback){
scheduleAction(reveal,reveal,opt_oncompleteCallback,duration);
}
}
ani.wrap(reveal,animateWrapper,0,-1);
return{height:targetHeight,duration:duration};
};
ani.crossfadeRevealUndo=function(hide,show,reveal,speed,opt_height,opt_oncompleteCallback){
var duration;
var origHeight;
var targetHeight;
function animateWrapper(wrapper){
origHeight=hide._origHeight;
targetHeight=opt_height?opt_height:ani.getDimensions(reveal).height;
wrapper.style.overflow='hidden';
wrapper.style.height=targetHeight;
duration=Math.min((Math.abs(targetHeight-origHeight))/ speed,2.0);
ani.fade(hide,'0.0','1.0',0,duration);
if(show){
ani.fade(show,'1.0','0.0',0,duration);
}
delaySetProperty(reveal,reveal.style,'display','none',duration-0.1);
delaySetProperty(hide,hide.style,'position','static',duration);
animateProperty(wrapper,wrapper.style,'height',targetHeight+'px',origHeight+'px',0,duration,'px','decelerate');
scheduleAction(wrapper,wrapper,ani.exciseNode,duration);
if(opt_oncompleteCallback){
scheduleAction(reveal,reveal,opt_oncompleteCallback,duration);
}
}
ani.wrap(reveal,animateWrapper,0,-1);
return{height:targetHeight,duration:duration};
};
function removeNode(el){
el=_gel(el);
if(el&&el.parentNode)el.parentNode.removeChild(el);
}
ani.fadeAndMakeUnclickable=function(el,opt_opacity,opt_background){
var opacity=opt_opacity||0.3;
var background=opt_background||'white';
var pos=ani.getPosition(el);
var curtain=document.createElement('iframe');
curtain.frameBorder="0";
curtain.scrolling="no";
curtain.style.position="absolute";
var border_size=el.clientLeft||0;
curtain.style.top=(pos.y-border_size)+"px";
curtain.style.left=(pos.x-border_size)+"px";
curtain.style.width=(el.offsetWidth+border_size*2)+"px";
curtain.style.height=(el.offsetHeight+border_size*2)+"px";
curtain.style.background=background;
curtain.style.opacity=opacity;
curtain.style.filter="alpha(opacity="+Math.round(opacity*100)+")";
curtain.style.zIndex=el.style.zIndex?el.style.zIndex+1:101;
curtain.style.border="0";
curtain.style.margin="0";
curtain.style.overflow="hidden";
return curtain;
};
ani.scrollUntilVisible=function(el,opt_duration){
if(!opt_duration){
opt_duration=0.75;
}
var top=ani.getPosition(el).y;
var bottom=top+ani.getDimensions(el).height;
var docEl=document.body.scrollTop>=document.documentElement.scrollTop?
document.body:document.documentElement;
var browserHeight=window.innerHeight?window.innerHeight:docEl.clientHeight;
if(self.pageYOffset){
var scrollTop=Math.max(self.pageYOffset,docEl.scrollTop);
}else{
var scrollTop=docEl.scrollTop;
}
var scrollBottom=scrollTop+browserHeight;
var targetTop=-1;
var FRIENDLY_PADDING=10;
if(top<scrollTop){
targetTop=top-FRIENDLY_PADDING;
}else if(bottom>scrollBottom){
targetTop=bottom-browserHeight+FRIENDLY_PADDING;
}
if(targetTop>0){
animateProperty(docEl,docEl,'scrollTop',scrollTop,targetTop,0,opt_duration,'number','decelerate');
return true;
}
return false;
};
var ZIPPY_ANIMATION_DURATION=0.05;
var ZIPPY_ANIMATION_OFFSETS=[
'0 0','-13px 0','-26px 0','-39px 0','-52px 0','-65px 0','-78px 0'
];
var ZIPPY_ANIMATION_OFFSETS_REVERSED=
ZIPPY_ANIMATION_OFFSETS.slice().reverse();
function animateZippyOpen(element){
animatePropertyDiscrete(
element,element.style,'backgroundPosition',ZIPPY_ANIMATION_OFFSETS,0,
ZIPPY_ANIMATION_DURATION);
}
function animateZippyClosed(element){
animatePropertyDiscrete(
element,element.style,'backgroundPosition',
ZIPPY_ANIMATION_OFFSETS_REVERSED,0,ZIPPY_ANIMATION_DURATION);
}
(function(){
var ChannelBackend=function(user,group,bored){
if(group){
this.aq_=new AjaxQueue("/groups_new?action_ajax=1&name="+group,window.session_info);
}else if(bored){
this.aq_=new AjaxQueue("/bored?action_ajax=1&cat="+window.cat+"&q="+window.bored_q+"&sort_order="+window.sort_order,window.session_info);
}else{
this.aq_=new AjaxQueue("/profile_ajax?action_ajax=1&user="+user+"&new=1",window.ajax_session_info);
}
};
ChannelBackend.prototype.call_box_method=function(box_info,params,method,callback,opt_logging){
var request=box_info;
request.method=method;
request.params=params;
var unpack_callback=function(response){callback(response.data)};
var logging='box_method='+method+"&box_name="+box_info.name+(opt_logging||"");
this.aq_.quick_send(request,'box_method',unpack_callback,logging);
};
ChannelBackend.singleton_=null;
ChannelBackend.get=function(){
if(!ChannelBackend.singleton_){
ChannelBackend.singleton_=new ChannelBackend(window.username,window.groupname,window.bored);
}
return ChannelBackend.singleton_;
};
function get_box_info(box_id){
return window.boxes[box_id];
}
function get_page(box_id,start,num,view_all_mode,opt_sort,opt_query){
var box_info=get_box_info(box_id);
var backend=ChannelBackend.get();
var el=_gel(box_id+"-body");
draw_loading_div(el);
var params={'start':start,'num':num,'view_all_mode':view_all_mode};
if(opt_sort){
params.sort=opt_sort;
}
if(opt_query){
params.query=opt_query;
}
var callback=function(html){
channel_replace_div(el,html);
};
backend.call_box_method(box_info,params,'draw_page_internal',callback);
}
var subscribeAllTimer;
function subscribe_all(token){
if(isLoggedIn){
window.clearTimeout(subscribeAllTimer);
var callback=function(result){
var subscribeMsgNode=_gel('subscribeMessage');
subscribeMsgNode.innerHTML=yt.net.ajax.getNodeValue(yt.net.ajax.getRootNode(result),'html_content');
subscribeMsgNode.style.display='block';
subscribeAllTimer=window.setTimeout("_hidediv('subscribeMessage')",5000);
};
var usernames="";
var subscribeAllForm=_gel("subscribeAllForm");
for(var i=0;i<subscribeAllForm.length;++i){
if(subscribeAllForm.elements[i].checked){
usernames+=subscribeAllForm.elements[i].value+" ";
}
}
if(usernames.length>0){
var subscribeAllDiv=_gel('subscribeAllDiv');
subscribeAllDiv.style.display='none';
yt.net.ajax.sendRequest('/ajax_subscriptions?subscribe_to_users='+usernames,{postBody:'session_token='+token,onComplete:callback});
}
}else{
subscribeMsgNode=_gel('subscribeLoginInvite');
subscribeMsgNode.style.display='block';
yt.analytics.urchinTracker('/Events/VideoWatch/Subscription/'+username+'/Loggedout');
}
}
function delete_feed_item(box_id,xp,at,pi,tu){
var delete_callback=function(response){
if(response&&response.success){
channel_replace_div(_gel(box_id+'-body'),response.html);
_show_success_or_error_message('feed_success','feed_success_custom',response.message);
}else{
_show_target_and_hide_spinny('feed_table','feed_loading');
_show_success_or_error_message('feed_error','feed_error_custom',response.message);
}
};
return _edit_feed_item(box_id,xp,at,pi,tu,'delete',delete_callback);
}
function undelete_feed_item(box_id,xp,at,pi,tu){
var undelete_callback=function(response){
if(response&&response.success){
channel_replace_div(_gel(box_id+'-body'),response.html);
}else{
_show_target_and_hide_spinny('feed_table','feed_loading');
_show_success_or_error_message('feed_error','feed_error_custom',response.message);
}
};
return _edit_feed_item(box_id,xp,at,pi,tu,'undelete',undelete_callback);
}
function _edit_feed_item(box_id,xp,at,pi,tu,action,callback){
var box_info=get_box_info(box_id);
box_info.x_position=xp;
var backend=ChannelBackend.get();
_hide_target_and_show_spinny('feed_table','feed_loading');
endAllAnimations();
_hidediv('feed_success');
_hidediv('feed_success_custom');
_hidediv('feed_error');
_hidediv('feed_error_custom');
backend.call_box_method(box_info,{'at':at,'pi':pi,'tu':tu,'action':action},
'edit_feed_item',callback);
return false;
}
function post_feed_bulletin_handler(box_id,opt_callback){
if(_gel(box_id)){
return function(response){
if(response&&response.success){
channel_replace_div(_gel(box_id+'-body'),response.html);
_show_success_or_error_message('feed_success','feed_success_custom',response.message);
}else if(response){
_show_target_and_hide_spinny('feed_table','feed_loading');
_show_success_or_error_message('feed_error','feed_error_custom',response.message);
}else{
_show_target_and_hide_spinny('feed_table','feed_loading');
_show_success_or_error_message('feed_error');
}
if(opt_callback){
opt_callback(response);
}
};
}else{
return opt_callback;
}
}
function post_feed_bulletin(box_id,form,opt_callback){
var box_info={'name':box_id,'x_position':0,'do_not_render':true};
if(_gel(box_id)){
box_info=get_box_info(box_id);
_hide_target_and_show_spinny('feed_table','feed_loading');
endAllAnimations();
_hidediv('feed_success');
_hidediv('feed_success_custom');
_hidediv('feed_error');
_hidediv('feed_error_custom');
}
var video_url=form.bulletin_video_input.value;
if(video_url==form.bulletin_video_default.value){
video_url='';
}
var params={
'bulletin':form.bulletin_input.value,
'video_url':video_url
};
ChannelBackend.get().call_box_method(box_info,params,'post_feed_bulletin',
post_feed_bulletin_handler(box_id,opt_callback));
return false;
}
function preview_feed_bulletin(url,opt_callback){
var box_info={'name':'user_recent_activity','x_position':0};
var params={'video_url':url};
ChannelBackend.get().call_box_method(box_info,params,'preview_feed_bulletin',opt_callback);
}
var deactive_bulletin_promo_called=false;
function deactive_bulletin_promo(){
if(!deactive_bulletin_promo_called&&_gel('bulletin_promo_message')){
ChannelBackend.get().aq_.send_message({},'deactive_bulletin_promo',true);
deactive_bulletin_promo_called=true;
}
}
function feed_bulletin_onblur(input_id,default_id,opt_force_reset){
var form=_gel('feed_bulletin').getElementsByTagName('form')[0];
if(form[input_id].value==''||opt_force_reset){
form[input_id].value=form[default_id].value;
}
}
function feed_bulletin_onfocus(input_id,default_id){
var form=_gel('feed_bulletin').getElementsByTagName('form')[0];
if(form[input_id].value==form[default_id].value){
form[input_id].value='';
}
_gel('post_button_input').disabled=false;
_gel('other_post_button_input').disabled=false;
}
function reset_feed_bulletin_attachment(input_id,input_row_id,attach_link_id,default_id){
_showdiv(attach_link_id);
_hidediv(input_row_id);
var form=_gel('feed_bulletin').getElementsByTagName('form')[0];
form[input_id].value=form[default_id].value;
}
var deactivate_some_promo_already_called={};
function dismiss_and_deactivate_promo(promo_name){
if(!(promo_name in deactivate_some_promo_already_called)&&_gel(promo_name+'_promo_message')){
ChannelBackend.get().aq_.send_message({},'deactivate_'+promo_name+'_promo',true);
deactivate_some_promo_already_called[promo_name]=true;
}
}
function _show_success_or_error_message(div_name,opt_custom_div_name,opt_custom_message){
if(opt_custom_div_name&&opt_custom_message){
var div=_gel(opt_custom_div_name);
div.innerHTML=opt_custom_message;
}else{
var div=_gel(div_name);
}
_showdiv(div);
ani.fadeAndSlideUp(div,ani.DEFAULT_MESSAGE_DELAY,
ani.DEFAULT_MESSAGE_FADEOUT,ani.DEFAULT_MESSAGE_SLIDE);
}
function _show_target_and_hide_spinny(target_name,spinny_name){
var target=_gel(target_name);
var spinny=_gel(spinny_name);
_showdiv(target);
target.style.display="";
_hidediv(spinny);
}
function _hide_target_and_show_spinny(target_name,spinny_name){
var target=_gel(target_name);
var spinny=_gel(spinny_name);
var original_height=target.parentNode.offsetHeight;
_showdiv(spinny);
_showdiv(target);
target.style.display="";
spinny.style.paddingTop="0px";
spinny.style.paddingBottom="0px";
var spinny_padding=Math.ceil((original_height-spinny.offsetHeight)/ 2)+"px";
spinny.style.paddingTop=spinny_padding;
spinny.style.paddingBottom=spinny_padding;
_hidediv(target);
}
function draw_loading_div(el){
var loading_div=document.createElement('div');
loading_div.className="box-bg box-fg inner-box loading-div";
loading_div.innerHTML="<table cellspacing=0 cellpadding=0 width='"+el.offsetWidth+"' height='"+el.offsetHeight+"'><tr><td align=center valign=middle><img src='/web/20100812001405/http://s.ytimg.com/yt/img/icn_loading_animated-vfl24663.gif'></td></tr></table>";
if(navigator.userAgent.indexOf("MSIE 6")!=-1){
el.innerHTML="<div style='display:none'>"+el.innerHTML+"</div>";
}
el.appendChild(loading_div);
}
function encode_checkbox_values(form){
var checked_ids=[];
var form_size=form.elements.length;
for(i=0;i<form_size;i++){
element=form[i];
if(element.checked){
checked_ids.push(element.value);
}
};
return{'item_ids':checked_ids};
}
function approve_comments(box_id,form,view_all_mode){
var box_info=get_box_info(box_id);
var backend=ChannelBackend.get();
var callback=function(json_resp){
if(json_resp.success){
channel_replace_div(_gel(box_id),json_resp.html);
}
};
var params=encode_checkbox_values(form);
params['view_all_mode']=view_all_mode;
backend.call_box_method(box_info,params,'approve_comments',callback);
}
function approve_comment(box_id,comment_id){
var box_info=get_box_info(box_id);
var backend=ChannelBackend.get();
var callback=function(json_resp){
if(json_resp.success){
channel_replace_div(_gel(box_id),json_resp.html);
}
};
var params={'item_ids':[comment_id]};
params['view_all_mode']="False";
backend.call_box_method(box_info,params,'approve_comments',callback);
}
function remove_comments(box_id,form,view_all_mode){
var box_info=get_box_info(box_id);
var backend=ChannelBackend.get();
var callback=function(json_resp){
if(json_resp.success){
channel_replace_div(_gel(box_id),json_resp.html);
}
};
var params=encode_checkbox_values(form);
params['view_all_mode']=view_all_mode;
backend.call_box_method(box_info,params,'remove_comments',callback);
}
function remove_comment(box_id,comment_id){
var box_info=get_box_info(box_id);
var backend=ChannelBackend.get();
var callback=function(json_resp){
if(json_resp.success){
channel_replace_div(_gel(box_id),json_resp.html);
}
};
var params={'item_ids':[comment_id]};
params['view_all_mode']="False";
backend.call_box_method(box_info,params,'remove_comments',callback);
}
function add_comment(box_id,comment,view_all_mode,items_per_page,opt_challenge,opt_response){
var comment_entry_submit_button=_gel('comment_entry_submit_button');
var box_info=get_box_info(box_id);
var backend=ChannelBackend.get();
var table=_gel('profile_comments_table');
var div_containing_table=table.parentNode;
var box_div=div_containing_table.parentNode;
var comment_entry_box=_gel('comment_entry_box');
var callback=function(json_response){
if(json_response['success']){
comment_entry_submit_button.disabled=false;
ani.scrollUntilVisible(box_div.parentNode,0.75);
_gel('add_comment_link').style.display='block';
comment_entry_box.style.display='none';
if(!json_response['moderate']&&table.rows.length==items_per_page){
table.deleteRow(table.rows.length-1);
}
var new_row=document.createElement('div');
new_row.innerHTML=json_response['new_row'];
div_containing_table.insertBefore(new_row,table);
ani.ajaxSlideOpen(new_row,0.75,0.5);
}else{
if(json_response['errors']){
alert(json_response['errors']);
}
if(json_response['captcha_required']){
comment_entry_box.innerHTML=json_response['captcha_html'];
_gel('comment').value=comment;
_gel('view_all_mode').value=view_all_mode;
_gel('items_per_page').value=items_per_page;
}else{
get_page(box_id,0,items_per_page,view_all_mode);
}
}
};
if(comment){
comment_entry_submit_button.disabled=true;
comment_entry_submit_button.value=yt.getMsg('POSTING_COMMENT');
var params={'comment':comment,'view_all_mode':view_all_mode};
if(opt_challenge){
params['challenge']=opt_challenge;
params['response']=opt_response;
}
backend.call_box_method(box_info,params,'add_comment',callback);
}
}
function report_spam(box_id,encrypted_comment_id){
var box_info=get_box_info(box_id);
var backend=ChannelBackend.get();
var callback=function(json_response){
if(json_response['success']){
_gel(encrypted_comment_id+'-mark_spam_link').style.display='none';
_gel(encrypted_comment_id+'-marked_as_spam_text').style.display='inline';
}else{
if(json_response['errors']){
alert(json_response['errors']);
}
}
};
if(encrypted_comment_id){
backend.call_box_method(box_info,{'encrypted_comment_id':encrypted_comment_id},'report_spam',callback);
}else{
callback({'success':true});
}
}
function display_message(id,color,message){
var message_box=_gel(id);
if(!message_box){
message_box=_gel('global-messages');
}
message_box.style.backgroundColor=color;
message_box.style.padding='1em';
message_box.style.margin='1em';
message_box.style.textAlign='center';
message_box.innerHTML=message;
message_box.style.display='';
ani.fadeAndSlideUp(message_box,ani.DEFAULT_MESSAGE_DELAY,
ani.DEFAULT_MESSAGE_FADEOUT,ani.DEFAULT_MESSAGE_SLIDE);
}
function add_friend(username){
var box_info=get_box_info('user_profile');
var backend=ChannelBackend.get();
var callback=function(json_resp){
if(json_resp.requested){
display_message("user_profile-messages",CHANNEL_SUCCESS_COLOR,json_resp.message);
_showdiv('aProfileInvitedFriend');
_hidediv('aProfileAddFriend');
}else if(json_resp.success){
display_message("user_profile-messages",CHANNEL_SUCCESS_COLOR,json_resp.message);
_showdiv('aProfileRemoveFriend');
_hidediv('aProfileAddFriend');
}else{
display_message("user_profile-messages",CHANNEL_ERROR_COLOR,json_resp.message);
}
};
params={'username':username};
backend.call_box_method(box_info,params,'add_friend',callback);
}
function remove_friend(username){
var box_info=get_box_info('user_profile');
var backend=ChannelBackend.get();
var callback=function(json_resp){
if(json_resp.success){
display_message("user_profile-messages",CHANNEL_SUCCESS_COLOR,json_resp.message);
_showdiv('aProfileAddFriend');
_hidediv('aProfileRemoveFriend');
}else{
display_message("user_profile-messages",CHANNEL_ERROR_COLOR,json_resp.message);
}
};
params={'username':username};
backend.call_box_method(box_info,params,'remove_friend',callback);
}
window.get_page=get_page;
window.draw_loading_div=draw_loading_div;
window.approve_comments=approve_comments;
window.approve_comment=approve_comment;
window.remove_comments=remove_comments;
window.remove_comment=remove_comment;
window.add_comment=add_comment;
window.report_spam=report_spam;
window.subscribe_all=subscribe_all;
window.delete_feed_item=delete_feed_item;
window.feed_bulletin_onblur=feed_bulletin_onblur;
window.feed_bulletin_onfocus=feed_bulletin_onfocus;
window.post_feed_bulletin=post_feed_bulletin;
window.preview_feed_bulletin=preview_feed_bulletin;
window.deactive_bulletin_promo=deactive_bulletin_promo;
window.reset_feed_bulletin_attachment=reset_feed_bulletin_attachment;
window.dismiss_and_deactivate_promo=dismiss_and_deactivate_promo
window.get_channel_backend=ChannelBackend.get;
window.get_channel_box_info=get_box_info;
window.display_message=display_message;
window.add_friend=add_friend;
window.remove_friend=remove_friend;
})();
function replace_div(el,new_html){
if(el.outerHTML){
el.outerHTML=new_html;
return el;
}
var next_sibling=el.nextSibling;
var parent_node=el.parentNode;
parent_node.removeChild(el);
var replacement=document.createElement('div');
replacement.innerHTML=new_html;
var node=null;
if(replacement.firstChild){
node=replacement.firstChild;
if(next_sibling){
parent_node.insertBefore(node,next_sibling);
}else{
parent_node.appendChild(node);
}
}
return node;
}
function channel_replace_div(el,new_html){
if(window.channel_new_ui&&el.id.match(/-body$/)){
el.innerHTML=new_html;
}else{
replace_div(el,new_html);
}
run_scripts_in_el(el.id);
}
function safeGetElementsByTagName(el,name){
name=name.toLowerCase();
if(el.getElementsByTagName){
return el.getElementsByTagName(name);
}
var childNodes=el.childNodes;
output=new Array();
for(var i=0;i<childNodes.length;i++){
var child=childNodes[i];
if(child.tagName&&child.tagName.toLowerCase()==name){
output.push(child);
}else if(child.childNodes){
output=output.concat(safeGetElementsByTagName(child,name));
}
}
return output;
}
function run_scripts_in_el(el){
el=_gel(el);
var scripts=safeGetElementsByTagName(el,'script');
for(var i=0;i<scripts.length;i++){
window.script_executed=false;
var script_content=scripts[i].innerHTML+";\nwindow.script_executed=true;";
var new_script=document.createElement('script');
new_script.type='text/javascript';
new_script.text=script_content;
document.getElementsByTagName('head')[0].appendChild(new_script);
if(!window.script_executed){
eval(script_content);
}
}
var styles=safeGetElementsByTagName(el,'style');
for(var i=0;i<styles.length;i++){
document.getElementsByTagName('head')[0].appendChild(styles[i]);
}
}
function simpleCallback(xhr,callback,domEl){
if(xhr.responseXML==null){
callback(yt.getMsg('ERROR_WHILE_PROCESSING'),domEl);
return;
}
var root_node=yt.net.ajax.getRootNode(xhr);
var return_code=yt.net.ajax.getNodeValue(root_node,'return_code');
if(return_code==0){
var success_message=yt.net.ajax.getNodeValue(root_node,'success_message');
if(success_message!=null){
callback(success_message,domEl);
}
}else{
var error_msg=yt.net.ajax.getNodeValue(root_node,'error_message');
if(error_msg==null||error_msg.length==0){
error_msg=yt.getMsg('UNKOWN_ERROR');
}
callback(error_msg,domEl)
}
redirect_val=yt.net.ajax.getNodeValue(root_node,'redirect_on_success');
if(redirect_val!=null){
window.location=redirect_val;
}
}
function postSimpleXR(url,data,callback,domEl){
yt.net.ajax.sendRequest(url,{
postBody:data,
onComplete:function(xmlHttpReq){
simpleCallback(xmlHttpReq,callback,domEl);
}
});
}
function showConfMsg(msg,domEl){
if(domEl&&domEl.parentNode){
domEl.parentNode.style.backgroundColor='#fff';
domEl.parentNode.innerHTML=msg;
}
}
function displayAndSelectEmbedCode(){
_gel('embed_input_div').style.display='';
_gel('embed_display').style.display='none';
_gel('embed_input').focus();
_gel('embed_input').select();
}
function handleSubscribe(){
var subscribe_buttons=goog.dom.getElementsByTagNameAndClass('div','subscribe-div',_gel('channel-body'));
var unsubscribe_buttons=goog.dom.getElementsByTagNameAndClass('div','unsubscribe-div',_gel('channel-body'));
for(var i=0;i<subscribe_buttons.length;++i){
yt.style.toggle(subscribe_buttons[i]);
}
for(var i=0;i<unsubscribe_buttons.length;++i){
yt.style.toggle(unsubscribe_buttons[i]);
}
}
var CHANNEL_SUCCESS_COLOR="#d0ffd8";
var CHANNEL_ERROR_COLOR="#F99";
(function(){
var current_channel_edit_tab=null;
var current_theme_name_backup=null;
var current_tab_modified=false;
function channel_edit_tab(tab_name,opt_cancel){
if(!window.scripts_are_loaded){
return false;
}
var current_tab_contents=_gel("tab_contents_"+current_channel_edit_tab);
if(current_tab_contents){
if(current_tab_modified){
if(!opt_cancel&&!confirm(yt.getMsg('CONFIRM_NAVIGATE_AWAY')+'\n\n'+yt.getMsg('CONFIRM_UNSAVED_CHANGES'))){
return;
}
}
if(current_channel_edit_tab=='colors'){
window.theme_map=copy_object(theme_obj_backups);
if(current_theme_name_backup){
set_theme_obj(current_theme_name_backup);
}
if(current_tab_modified){
current_tab_modified=false;
}
if(current_theme_name_backup)window.current_theme_name=current_theme_name_backup;
}
if(current_tab_modified){
current_tab_contents.innerHTML=current_tab_contents.__backup;
current_tab_modified=false;
}
if(current_channel_edit_tab=='bulletin'){
deactive_bulletin_promo();
}
if(current_channel_edit_tab=='layout'){
var layout_status=get_layout_status(_gel('channel_layout'));
for(var box_name in layout_status){
if(layout_status[box_name]){
if(!_gel(box_name)){
add_box(box_name);
}
}else{
if(_gel(box_name)){
remove_box(box_name);
}
}
}
}
current_subtab_modified=false;
current_tab_contents.style.display='none';
}
if(current_channel_edit_tab){
_removeclass(_gel("channel_tab_"+current_channel_edit_tab),'channel_settings_tab_active');
}
if(current_channel_edit_tab==tab_name||tab_name=='close'){
current_channel_edit_tab=null;
_gel('channel_edit_close').style.display='none';
return;
}
var tab_contents=_gel('tab_contents_'+tab_name);
if(tab_contents){
tab_contents.style.display='';
tab_contents.__backup=tab_contents.innerHTML;
}
if(tab_name){
_addclass(_gel("channel_tab_"+tab_name),'channel_settings_tab_active');
if(tab_name=='branding_options'){
branding_options_subtab('banners');
}
}
force_IE_redraw();
current_channel_edit_tab=tab_name;
_gel('channel_edit_close').style.display='';
return true;
}
window.channel_edit_tab=channel_edit_tab;
var current_subtab_name;
var current_subtab_modified=false;
function branding_options_subtab(subtab_name,opt_cancel){
if(!window.scripts_are_loaded){
return false;
}
var current_subtab_contents=_gel("subtab_contents_"+current_subtab_name);
if(current_subtab_contents){
if(current_subtab_modified){
if(!opt_cancel&&!confirm(yt.getMsg('CONFIRM_NAVIGATE_AWAY')+'\n\n'+yt.getMsg('CONFIRM_UNSAVED_CHANGES'))){
return;
}
}
current_subtab_contents.style.display='none';
_removeclass(_gel("branding_options_subtab_"+current_subtab_name),'branding_options_subtab_active');
current_tab_modified=false;
current_subtab_modified=false;
}
var subtab_contents=_gel('subtab_contents_'+subtab_name);
if(subtab_contents){
subtab_contents.style.display='';
_addclass(_gel("branding_options_subtab_"+subtab_name),'branding_options_subtab_active');
}
current_subtab_name=subtab_name;
}
window.branding_options_subtab=branding_options_subtab;
function force_IE_redraw(){
window.setTimeout(function(){
_addclass(_gel("channel-body"),'dummy');
_removeclass(_gel("channel-body"),'dummy');
},0);
}
var stylesheet=null;
function update_theme_css(name,value,opt_prefix){
current_tab_modified=true;
get_theme_css();
}
function hide_all_children(el){
var child_nodes=el.childNodes;
for(var i=0;i<child_nodes.length;i++){
var node=child_nodes[i];
if(node&&node.style){
node.style.display="none";
}
}
}
var last_option_div=null;
function set_theme_obj(theme_name,opt_first_time){
if(window.deleting_theme){return;}
if(window.current_theme_name){
var t=[_gel('delete_'+window.current_theme_name),_gel('delete_'+theme_name)];
if(t[0]){t[0].style.display='inline';}
if(t[1]){t[1].style.display='none';}
}
var theme_obj=window.theme_map[theme_name];
window.current_theme_obj=theme_obj;
if(window.current_theme_name&&_gel(window.current_theme_name)){
_removeclass(_gel(window.current_theme_name),'theme_selected');
}
_addclass(_gel(theme_name),'theme_selected');
window.current_theme_name=theme_name;
update_theme_inputs(theme_obj);
current_palette=theme_obj.palettes['default'];
_gel('theme_display_name').innerHTML=htmlEscape(theme_obj.display_name||theme_name);
_gel('theme_edit_name').value=theme_obj.display_name||theme_name;
if(theme_obj.builtin){
_gel('theme_display_name').style.display='inline';
_gel('theme_edit_name').style.display='none';
}else{
_gel('theme_display_name').style.display='none';
_gel('theme_edit_name').style.display='inline';
try{
_gel('theme_edit_name').focus();
}catch(e){
}
}
if(!opt_first_time){
update_theme_css();
}
}
window.set_theme_obj=set_theme_obj;
function setDropdownTo(dropdownId,value,isLowerCaseCompare){
var dropdownEl=_gel(dropdownId);
if(isLowerCaseCompare){
value=value.toLowerCase();
}
for(var i=0,len=dropdownEl.length;i<len;i++){
var optionValue=dropdownEl.options[i].value;
if(isLowerCaseCompare)optionValue=optionValue.toLowerCase();
if(optionValue&&value==optionValue){
dropdownEl.selectedIndex=i;
break;
}
}
}
function update_theme_inputs(theme_obj){
setDropdownTo('font',theme_obj.font,true);
setDropdownTo('wrapper_opacity',theme_obj.wrapper_opacity);
var colors=['background_color','wrapper_color','wrapper_text_color','wrapper_link_color'];
for(var i=0;i<colors.length;i++){
var color=colors[i];
var value=theme_obj[color];
_gel(color+'-preview').style.backgroundColor=value;
_gel(color).value=value;
}
_gel('background_image').value=theme_obj['background_image'];
try{
if(theme_obj['background_image']){
window.frames['background_frame'].hide_file_picker();
}else{
window.frames['background_frame'].show_file_picker();
}
}catch(e){
}
_gel('background_repeat').value=theme_obj['background_repeat'];
_gel('background_repeat_check').checked=theme_obj['background_repeat']=='repeat';
set_palette('default',false);
}
function set_palette(name,opt_set_css){
var palette=window.current_theme_obj.palettes[name];
current_palette=palette;
setDropdownTo('box_opacity',palette.box_opacity);
var colors=['box_background_color','link_color','title_text_color','body_text_color'];
for(var i=0;i<colors.length;i++){
var color=colors[i];
_gel(color+"-preview").style.backgroundColor=palette[color];
_gel(color).value=palette[color];
if(opt_set_css){
update_theme_css(color,palette[color]);
}
}
}
window.set_palette=set_palette;
function open_theme_editor(){
_showdiv('theme_advanced_editor');
_showdiv('theme_edit_link_hide');
_hidediv('theme_edit_link');
force_IE_redraw();
}
window.open_theme_editor=open_theme_editor;
function delete_theme(theme_name){
if(window.current_theme_name==theme_name){
return;
}
var textdiv=_gel('are_you_sure_you_want_to_delete_text');
if(textdiv){
if(!confirm(textdiv.innerHTML)){
return;
}
window.deleting_theme=true;
request=[theme_name];
var backend=get_channel_backend();
_addclass(_gel("tab_contents_colors"),'saving');
backend.aq_.quick_send(request,'delete_theme',delete_theme_handler);
}
}
window.delete_theme=delete_theme;
window.deleting_theme=false;
function delete_theme_handler(response){
var theme_name=null;
var tdiv=null;
if(response&&response.success){
for(var i=0;i<response.deleted.length;i++){
theme_name=response.deleted[i];
delete window.theme_map[theme_name];
tdiv=_gel(theme_name);
tdiv.parentNode.removeChild(tdiv);
}
}
window.deleting_theme=false;
_removeclass(_gel("tab_contents_colors"),'saving');
}
window.delete_theme_handler=delete_theme_handler;
function hide_theme_editor(){
_hidediv('theme_advanced_editor');
_hidediv('theme_edit_link_hide');
_showdiv('theme_edit_link');
force_IE_redraw();
}
window.hide_theme_editor=hide_theme_editor;
var THEME_DIV_HTML="<div id=\"^theme_name^\" class='theme_selector_div' "+
"style=\"font-family:^font^\""+
"onclick=\"set_theme_obj(this.id);\""+
" ^delete_stuff^ "+
"><div style=\"background-color: ^background_color^;"+
"color:^body_text_color^;padding: 3px;line-height:120%\""+
"><div style=\"background-color: ^wrapper_color^;color: ^wrapper_text_color^;padding:3px;font-size:10px\">"+
"<div style=\"float:right;width:4em;background-color:^box_background_color^;font-size:9px;padding-left:1px;color:^body_text_color^\">"+
"<span style=\"color:^title_text_color^;font-size:120%\">"+
"A"+
"</span>"+
" &nbsp;<span style=\"color:^link_color^;text-decoration:underline\">url</span><br>"+
"abc</div>"+
"<span style=\"color:^wrapper_link_color^;text-decoration:underline\">url</span><br>"+
"abc"+
"</div></div>"+
"<div style=\"text-align:center;\"><span class=\"theme_title\" style=\"padding:2px;height:2em;overflow:hidden\">^theme_display_name^</span><br>"+
"<a href=\"#\" class=\"hLink\" onclick=\"delete_theme('^theme_name^');return false;\""+
"style=\"font-size:75%;visibility:hidden\" id=\"delete_^theme_name^\">^delete_text^</a></div>"+
"</div>\n";
var THEME_DIV_DELETE="onmouseover=\"_gel('delete_^theme_name^').style.visibility='visible';\" "+
"onmouseout=\"_gel('delete_^theme_name^').style.visibility='hidden';\""
function get_default_palette(theme_obj){
var default_palette=theme_obj.palettes['default'];
default_palette.name='default';
return default_palette;
}
function generate_theme_box_html(theme_name,theme_obj){
if(!theme_obj||!theme_obj.palettes){
return;
}
var output_html=THEME_DIV_HTML;
if(theme_obj.builtin){
output_html=output_html.replace(/\^delete_stuff\^/g,'');
}else{
output_html=output_html.replace(/\^delete_stuff\^/g,THEME_DIV_DELETE);
}
output_html=output_html.replace(/\^theme_name\^/g,theme_name);
output_html=output_html.replace(/\^background_color\^/g,theme_obj.background_color);
output_html=output_html.replace(/\^wrapper_color\^/g,theme_obj.wrapper_color);
output_html=output_html.replace(/\^wrapper_text_color\^/g,theme_obj.wrapper_text_color);
output_html=output_html.replace(/\^wrapper_link_color\^/g,theme_obj.wrapper_link_color);
output_html=output_html.replace(/\^theme_display_name\^/g,htmlEscape(theme_obj.display_name));
output_html=output_html.replace(/\^font\^/g,theme_obj.font);
var default_palette=get_default_palette(theme_obj);
output_html=output_html.replace(/\^box_background_color\^/g,default_palette.box_background_color);
output_html=output_html.replace(/\^title_text_color\^/g,default_palette.title_text_color);
output_html=output_html.replace(/\^link_color\^/g,default_palette.link_color);
output_html=output_html.replace(/\^body_text_color\^/g,default_palette.body_text_color);
output_html=output_html.replace(/\^delete_text\^/g,_gel('delete_link_text').innerHTML);
return output_html;
}
function add_theme_div(theme_name,theme_obj){
var output_html=generate_theme_box_html(theme_name,theme_obj);
var temp_div=document.createElement('div');
temp_div.innerHTML=output_html;
_gel('theme_container').appendChild(temp_div.firstChild);
}
window.add_theme_div=add_theme_div;
var current_palette;
function edit_main_theme(name,value,opt_skip_css){
var theme_name=window.current_theme_name;
var theme_obj=window.current_theme_obj;
if(theme_obj.builtin){
create_new_theme();
return edit_main_theme(name,value);
}
if(typeof theme_obj[name]!="undefined"){
theme_obj[name]=value;
if(!opt_skip_css){
update_theme_css(name,value);
}
}else{
current_palette[name]=value;
var prefix=current_palette.name=='default'?null:'.palette-'+current_palette.name;
if(!opt_skip_css){
update_theme_css(name,value,prefix);
}
}
replace_div(_gel(theme_name),generate_theme_box_html(theme_name,theme_obj,true));
_addclass(_gel(theme_name),'theme_selected');
}
window.edit_main_theme=edit_main_theme;
var theme_obj_backups={};
function add_theme_selectors(default_theme_name,theme_ordering){
for(var i in theme_ordering){
var theme_name=theme_ordering[i];
var theme_obj=window.theme_map[theme_name];
if(theme_obj){
add_theme_div(theme_name,theme_obj);
theme_obj_backups[theme_name]=copy_object(theme_obj);
}
}
current_theme_name_backup=default_theme_name;
set_theme_obj(default_theme_name,true);
}
window.add_theme_selectors=add_theme_selectors;
function generate_theme_name(old_name){
var numeric_suffix=old_name.match("[0-9]+$");
if(numeric_suffix){
return old_name.substr(0,old_name.length-numeric_suffix[0].length)+(parseInt(numeric_suffix[0])+1);
}
return old_name+" 2";
};
function create_new_theme(){
if(window.theme_map.length>=20){
display_message('colors-messages',"#F99",yt.getMsg('THEME_LIMIT'));
return;
}
var new_theme_obj=copy_object(window.current_theme_obj);
new_theme_obj.builtin=false;
new_theme_obj.display_name=generate_theme_name(new_theme_obj.display_name);
var suffix=window.current_theme_name.match("[0-9]+$");
var new_theme_name=window.current_theme_name.slice(0,suffix?-suffix[0].length:window.current_theme_name.length);
suffix=(suffix!=null)?parseInt(suffix[0])+1:2;
while(window.theme_map[new_theme_name+suffix]){
suffix++;
}
new_theme_name+=suffix;
window.theme_map[new_theme_name]=new_theme_obj;
add_theme_div(new_theme_name,new_theme_obj);
set_theme_obj(new_theme_name,true);
open_theme_editor();
}
window.create_new_theme=create_new_theme;
function redraw_moderator_box(){
if(_gel('moderator')){
redraw_box('moderator');
}
}
function save_theme_handler(response){
if(response&&response.success){
current_tab_modified=false;
theme_obj_backups=copy_object(window.theme_map);
current_theme_name_backup=window.current_theme_name;
var tab_contents=_gel('tab_contents_'+current_channel_edit_tab);
tab_contents.__backup=tab_contents.innerHTML;
display_message("edit-save-messages",CHANNEL_SUCCESS_COLOR,yt.getMsg('SUCCESS'));
channel_edit_tab('close');
redraw_moderator_box();
}else if(response&&response.errors){
display_message('colors-messages',"#F99",response.errors.join('<br>'));
}
_removeclass(_gel("tab_contents_colors"),'saving');
}
function save_themes(){
var backend=get_channel_backend();
var request={'themes':copy_object(window.theme_map)};
request.theme_name=window.current_theme_name;
request.background_image_counter=window.background_image_counter;
backend.aq_.quick_send(request,'save_theme',save_theme_handler);
_addclass(_gel("tab_contents_colors"),'saving');
}
window.save_themes=save_themes;
function replace_stylesheet(cssId,cssText){
var cssEl=_gel(cssId);
if(!cssEl)return;
try{
cssEl.innerHTML=cssText;
}catch(e){
try{
cssEl.innerText=cssText;
}catch(e){
var css=document.styleSheets[cssId];
css.cssText=cssText;
}
}
}
function get_theme_css_handler(data){
replace_stylesheet('channel-theme-css',data.html);
}
function get_theme_css(){
var backend=get_channel_backend();
var theme_obj=window.theme_map[window.current_theme_name];
var request={'theme':theme_obj};
backend.aq_.quick_send(request,'get_theme_css',get_theme_css_handler);
}
function update_theme_name(obj,evt){
var e=evt?evt:window.event;
if(e.keyCode==13||e.keyCode==27){
obj.blur();
return false;
}
length_check(e,obj,15);
window.setTimeout(function(){
var new_name=_gel('theme_edit_name').value;
window.current_theme_obj.display_name=new_name;
_gel('theme_display_name').innerHTML=htmlEscape(new_name);
var current_theme_div=_gel(window.current_theme_name);
var title_div=goog.dom.getElementsByTagNameAndClass('SPAN','theme_title',current_theme_div)[0];
title_div.innerHTML=htmlEscape(new_name);
},0);
}
window.update_theme_name=update_theme_name;
function length_check(evt,obj,max_length){
var old_value=obj.value;
window.setTimeout(function(){
if(obj.value.length>max_length){
var old_scroll_top=obj.scrollTop;
obj.value=old_value.substr(0,max_length);
obj.scrollTop=old_scroll_top;
}
},0);
var e=evt?evt:window.event;
if(obj.value.length>=max_length&&e.keyCode>46){
return false;
}
return true;
}
window.length_check=length_check;
var popup_prop_name=null;
function popup_color_grid(name){
document.onclick=null;
var grid=_gel('popup_color_grid');
if(popup_prop_name){
grid.style.display='none';
popup_prop_name=null;
return;
}
var pos=ani.getPosition(_gel(name));
grid.style.top=(pos.y+20)+'px';
grid.style.left=(pos.x-20)+'px';
grid.style.display='';
document.body.appendChild(grid);
popup_prop_name=name;
window.setTimeout(function(){
document.onclick=function(opt_evt){
var e=opt_evt?opt_evt:window.event;
var t=e.target?e.target:e.srcElement;
if(t.nodeType==3)t=t.parentNode;
grid.style.display='none';
document.onclick=null;
popup_prop_name=null;
var preview_node=_gel(name+'_option');
if(t==preview_node||yt.dom.hasAncestor(t,preview_node)){
yt.events.stopPropagation(e);
return false;
}
};
},1);
}
window.popup_color_grid=popup_color_grid;
function select_popup_color(color){
if(popup_prop_name){
edit_main_theme(popup_prop_name,color);
_gel(popup_prop_name+'-preview').style.backgroundColor=color;
_gel(popup_prop_name).value=color;
}
}
window.select_popup_color=select_popup_color;
var VALID_COLOR_REGEX=new RegExp("^(#[0-9a-f]{3,6}|white|black|blue|red|green|yellow|cyan|purple|violet|pink|salmon|orange|navy|gray|lightgrey|darkgray|brown)$",'i');
function blur_color_picker(el){
if(el.value.match(VALID_COLOR_REGEX)){
edit_main_theme(el.id,el.value);
_gel(el.id+'-preview').style.backgroundColor=el.value;
el.value=el.value.toUpperCase();
}else{
el.value=el.__old_value||"";
}
}
window.blur_color_picker=blur_color_picker;
function color_picker_keypress(input,evt){
if(evt.keyCode==13){
this.blur();
if(this.onblur)this.onblur();
return false;
}else if(evt.keyCode==27){
this.value=this.__old_value;
this.blur();
if(this.onblur)this.onblur();
return false;
}
}
window.color_picker_keypress=color_picker_keypress;
function draw_box_handler(response){
if(response&&response.data){
var old_node=_gel(response.data.box_info.name);
if(old_node){
window.setTimeout(function(){removeNode(old_node);draw_box_handler(response);},200);
return;
}
var box_info=response.data.box_info;
window.boxes[box_info.name]=box_info;
var temp_div=document.createElement('div');
temp_div.innerHTML=response.data.html;
var node=temp_div.firstChild;
insert_box(box_info,node);
}else{
}
}
function insert_box(box_info,node){
box_status[box_info.name]=true;
var parent_div;
if(box_info.y_position<0){
parent_div=_gel('channel-base-div');
}else if(box_info.x_position==1){
parent_div=_gel('main-channel-right');
}else{
parent_div=_gel('main-channel-left');
}
var next_box=get_box_after(box_info);
if(next_box){
var next_box_div=_gel(next_box);
next_box_div.parentNode.insertBefore(node,next_box_div);
}else if(box_info.y_position<0){
parent_div.insertBefore(node,_gel('main-channel-content'));
}else{
parent_div.appendChild(node);
}
if(box_info.name=='user_events'){
run_scripts_in_el(node);
}
fix_box_arrows();
ani.slideDownAndFadeIn(node,0,0.4,0.25);
}
function polarity(num){
return num>=0;
}
function get_box_after(box_info){
var next_box=null;
for(var name in window.boxes){
var box=window.boxes[name];
if(polarity(box.y_position)!=polarity(box_info.y_position)){
continue;
}
if(box.y_position>box_info.y_position&&x_pos_matches(box,box_info)&&box.name!=box_info.name&&box_status[box.name]&&(!next_box||box.y_position<next_box.y_position)){
next_box=box;
}
}
return next_box?next_box.name:null;
}
function x_pos_matches(box1,box2){
if(box1.y_position<0&&box2.y_position<0){
return true;
}
return box1.x_position==box2.x_position;
}
function get_box_before(box_info){
var previous_box=null;
for(var name in window.boxes){
var box=window.boxes[name];
if(box.x_position==box_info.x_position&&
box.name!=box_info.name&&
box_status[box.name]&&
box.y_position<box_info.y_position&&
(!previous_box||box.y_position>previous_box.y_position)){
previous_box=box;
}
}
return previous_box?previous_box.name:null;
}
function add_box(name,opt_save){
var backend=get_channel_backend();
var request={'name':name};
if(window.boxes[name]){
request.x_position=window.boxes[name].x_position;
request.y_position=window.boxes[name].y_position;
}
request.theme_name=window.current_theme_name;
request.save=opt_save?true:false;
backend.aq_.quick_send(request,'draw_box',draw_box_handler);
}
function redraw_box(name){
var backend=get_channel_backend();
var request={'name':name}
request.theme_name=window.current_theme_name;
backend.aq_.quick_send(request,'draw_box',draw_box_handler);
}
function remove_box(name){
var node=_gel(name);
ani.fadeAndSlideUp(node,0,0.3,0.4);
scheduleAction(node,node,function(){removeNode(node)},1.7);
box_status[name]=false;
fix_box_arrows();
}
function add_or_remove_box(input){
window.setTimeout(function(){
if(input.checked){
add_box(input.value);
}else{
_gel('box_removed_message').style.display='';
remove_box(input.value);
}
if(input.value=='user_playlist_navigator'){
_gel('channel_tab_playnav').style.display=input.checked?'block':'none';
}
},0);
current_tab_modified=true;
}
window.add_or_remove_box=add_or_remove_box;
function hide_if_there(id){
var el=_gel(id);
if(el)_addclass(el,'disabled');
}
function show_if_there(id){
var el=_gel(id);
if(el)_removeclass(el,'disabled');
}
function fix_box_arrows(){
var top_left=null;
var top_right=null;
var bottom_left=null;
var bottom_right=null;
var top_top=null;
var bottom_top=null;
for(var name in window.boxes){
var box=window.boxes[name];
show_if_there(name+'-up-arrow');
show_if_there(name+'-down-arrow');
if(box&&box_status[name]&&!IMMOVABLE_BOX[name]){
if(box.y_position>=0){
if(box.x_position==1){
if(!top_right||top_right.y_position>box.y_position){
top_right=box;
}
if(!bottom_right||bottom_right.y_position<box.y_position){
bottom_right=box;
}
}else{
if(!top_left||top_left.y_position>box.y_position){
top_left=box;
}
if(!bottom_left||bottom_left.y_position<box.y_position){
bottom_left=box;
}
}
}else{
if(box.x_position>0){
if(!top_top||top_top.y_position>box.y_position){
top_top=box;
}
if(!bottom_top||bottom_top.y_position<box.y_position){
bottom_top=box;
}
}
}
}
}
if(top_right)hide_if_there(top_right.name+'-up-arrow');
if(top_left)hide_if_there(top_left.name+'-up-arrow');
if(bottom_right)hide_if_there(bottom_right.name+'-down-arrow');
if(bottom_left)hide_if_there(bottom_left.name+'-down-arrow');
if(top_top)hide_if_there(top_top.name+'-up-arrow');
if(bottom_top)hide_if_there(bottom_top.name+'-down-arrow');
}
window.fix_box_arrows=fix_box_arrows;
function move_up(name){
if(_hasclass(_gel(name+'-up-arrow'),'disabled')){
return;
}
swap_boxes(name,get_box_before(window.boxes[name]));
}
window.move_up=move_up;
function move_down(name){
if(_hasclass(_gel(name+'-down-arrow'),'disabled')){
return;
}
swap_boxes(name,get_box_after(window.boxes[name]));
}
window.move_down=move_down;
function swap_boxes(name1,name2){
var el1=_gel(name1);
var el2=_gel(name2);
var tmp=window.boxes[name1].y_position;
window.boxes[name1].y_position=window.boxes[name2].y_position;
window.boxes[name2].y_position=tmp;
fix_box_arrows();
ani.swapDivs(el1,el2,0.7);
var backend=get_channel_backend();
backend.aq_.send_message({'boxes':[name1,name2]},'swap_boxes',true);
}
function move_left(name){
if(_hasclass(_gel(name+'-left-arrow'),'disabled')){
return;
}
window.boxes[name].x_position=0;
remove_box(name);
add_box(name,true);
}
window.move_left=move_left;
function move_right(name){
if(_hasclass(_gel(name+'-right-arrow'),'disabled')){
return;
}
window.boxes[name].x_position=1;
remove_box(name);
add_box(name,true);
}
window.move_right=move_right;
var IMMOVABLE_BOX={'user_profile':true};
var box_status={};
yt.pubsub.subscribe('init',function(){
for(var name in window.boxes){
var box=window.boxes[name];
if(box&&box.name&&_gel(name)){
box_status[name]=true;
}
}
if(window.channel_new_ui){
_addclass(_gel('channel-body'),'jsloaded')
fix_box_arrows();
}
});
function save_boxes_handler(response){
if(response&&response.data&&response.data.success){
current_tab_modified=false;
var tab_contents=_gel('tab_contents_'+current_channel_edit_tab);
tab_contents.__backup=tab_contents.innerHTML;
display_message('edit-save-messages',CHANNEL_SUCCESS_COLOR,yt.getMsg('SUCCESS'));
channel_edit_tab('close');
}else if(response&&response.errors){
display_message('layout-messages',"#F99",response.errors.join('<br>'));
}
_removeclass(_gel("tab_contents_layout"),'saving');
}
function get_layout_status(form){
var statusRequest={};
for(var i=0;i<form.elements.length;i++){
var input=form.elements[i];
if(input.type=='checkbox'){
statusRequest[input.value]=input.checked;
}
}
return statusRequest;
}
function save_boxes(){
var backend=get_channel_backend();
backend.aq_.register_handler('save_boxes',save_boxes_handler);
backend.aq_.send_message({'boxes':get_layout_status(_gel('channel_layout'))},'save_boxes',true);
_addclass(_gel("tab_contents_layout"),'saving');
}
window.save_boxes=save_boxes;
function save_watch_header_handler(response){
if(response&&response.data&&response.data.success){
current_tab_modified=false;
current_subtab_modified=false;
display_message('edit-save-messages',CHANNEL_SUCCESS_COLOR,yt.getMsg('SUCCESS'));
}else if(response&&response.errors){
display_message('video-messages',"#F99",response.errors.join('<br>'));
}
_removeclass(_gel("subtab_contents_videopage"),'saving');
}
function save_watch_header(){
var form=_gel("watch_header_form");
var request=form_to_dict(form);
var backend=get_channel_backend();
backend.aq_.register_handler('save_watch_header',save_watch_header_handler);
backend.aq_.send_message(request,'save_watch_header',true);
_addclass(_gel("subtab_contents_videopage"),'saving');
}
window.save_watch_header=save_watch_header;
function save_banners_handler(response){
if(response&&response.data&&response.data.success){
current_tab_modified=false;
current_subtab_modified=false;
display_message('edit-save-messages',CHANNEL_SUCCESS_COLOR,yt.getMsg('SUCCESS'));
}else if(response&&response.errors){
display_message('banners-messages',"#F99",response.errors.join('<br>'));
}
_removeclass(_gel("subtab_contents_banners"),'saving');
}
function save_banners(){
var form=_gel("banners_form");
var request=form_to_dict(form);
var backend=get_channel_backend();
backend.aq_.register_handler('save_banners',save_banners_handler);
backend.aq_.send_message(request,'save_banners',true);
_addclass(_gel("subtab_contents_banners"),'saving');
}
window.save_banners=save_banners;
function save_tracking_handler(response){
if(response&&response.data&&response.data.success){
current_tab_modified=false;
current_subtab_modified=false;
display_message('edit-save-messages',CHANNEL_SUCCESS_COLOR,yt.getMsg('SUCCESS'));
}else if(response&&response.errors){
display_message('tracking-messages',"#F99",response.errors.join('<br>'));
}
_removeclass(_gel("subtab_contents_tracking"),'saving');
}
function save_tracking(){
var form=_gel("tracking_form");
var request=form_to_dict(form);
var backend=get_channel_backend();
backend.aq_.register_handler('save_tracking',save_tracking_handler);
backend.aq_.send_message(request,'save_tracking',true);
_addclass(_gel("subtab_contents_tracking"),'saving');
}
window.save_tracking=save_tracking;
function close_edit_mode(box_id){
var box=_gel(box_id);
if(_hasclass(box,'edit_mode')){
_removeclass(box,'edit_mode');
}
}
function cancel_edit_mode(box_id){
close_edit_mode(box_id);
var box=_gel(box_id);
box.innerHTML=box.__backup;
}
window.cancel_edit_mode=cancel_edit_mode;
function toggle_edit_mode(box_id){
var box=_gel(box_id);
if(!_hasclass(box,'edit_mode')){
box.__backup=box.innerHTML;
}
if(_hasclass(box,'edit_mode')){
_removeclass(box,'edit_mode');
}else{
_addclass(box,'edit_mode');
}
}
window.toggle_edit_mode=toggle_edit_mode;
function save_box_settings(box_id){
var box_info=get_channel_box_info(box_id);
var backend=get_channel_backend();
_addclass(_gel(box_id),'saving');
var callback=function(response){
_removeclass(_gel(box_id),'saving');
if(response.success){
close_edit_mode(box_id);
if(response.html){
channel_replace_div(_gel(box_id),response.html);
fix_box_arrows();
}
if(response.js_exec){
eval(response.js_exec);
}
display_message(box_id+'-messages',CHANNEL_SUCCESS_COLOR,yt.getMsg('SUCCESS'));
}else if(response.errors){
display_message(box_id+'-messages',"#F99",response.errors.join('<br>'));
}
};
var params=form_to_dict(_gel('edit_form_'+box_id));
backend.call_box_method(box_info,params,'save',callback);
}
window.save_box_settings=save_box_settings;
function save_playnav_settings(){
var box_id='user_playlist_navigator';
var box_info=get_channel_box_info(box_id);
var backend=get_channel_backend();
_addclass(_gel('tab_contents_playnav'),'saving');
var callback=function(response){
if(response.success){
if(_gel(box_id)){
if(response.html){
channel_replace_div(_gel(box_id),response.html);
fix_box_arrows();
}
if(response.js_exec){
eval(response.js_exec);
}
}
current_tab_modified=false;
var tab_contents=_gel('tab_contents_'+current_channel_edit_tab);
tab_contents.__backup=tab_contents.innerHTML;
display_message("edit-save-messages",CHANNEL_SUCCESS_COLOR,yt.getMsg('SUCCESS'));
channel_edit_tab('close');
}else if(response&&response.errors){
display_message('info-messages',"#F99",response.errors.join('<br>'));
}
_removeclass(_gel("tab_contents_playnav"),'saving');
};
var params=form_to_dict(_gel('edit_form_'+box_id));
backend.call_box_method(box_info,params,'save',callback);
}
window.save_playnav_settings=save_playnav_settings;
function swap_with_input(id,focus,opt_update_height){
yt.style.toggle("profile_temp_"+id,"profile_edit_"+id);
if(focus){
_gel('profile_edit_'+id).focus();
if(opt_update_height){
_gel('profile_edit_'+id).style.height=Math.max(_gel('profile_temp_'+id).offsetHeight,45)+'px';
}
}else{
var new_value=_gel('profile_edit_'+id).value;
if(new_value){
var view_toggle=_gel('hide_'+id);
if(view_toggle){
view_toggle.checked=false;
}
}
_gel('profile_temp_'+id).innerHTML=new_value?htmlEscape(new_value).replace(/\n/g,"<br>"):"&nbsp;";
}
}
window.swap_with_input=swap_with_input;
function reload_profile_box(request_save){
var box_id='user_profile';
var box_info=get_channel_box_info(box_id);
var backend=get_channel_backend();
if(request_save){
_addclass(_gel(box_id),'saving');
}
var callback=function(response){
if(request_save){
_removeclass(_gel(box_id),'saving');
}
if(response.success){
close_edit_mode(box_id);
_gel(box_id).innerHTML=response.html;
if(request_save){
display_message(box_id+'-messages',CHANNEL_SUCCESS_COLOR,yt.getMsg('SUCCESS'));
}
}else if(response.error_fields){
for(var field_name in response.error_fields){
var bad_field=_gel('profile_edit_'+field_name);
if(bad_field){
bad_field.focus();
var error_field=_gel('profile_errors_'+field_name);
error_field.style.display='';
error_field.innerHTML=escapeHTML(response.error_fields[field_name]);
}
}
}else if(request_save&&response.errors){
display_message(box_id+'-messages',"#F99",response.errors.join('<br>'));
}
};
var params=form_to_dict(_gel('edit_form_'+box_id));
backend.call_box_method(box_info,params,'save',callback);
}
function save_profile_box(){
reload_profile_box(true);
}
window.save_profile_box=save_profile_box;
function set_channel_title(title){
var title_div=_gel('channel_title');
var title_base_div=_gel('channel_base_title');
title_div.innerHTML=htmlEscape(title);
if(title){
title_base_div.style.fontSize="11px";
title_base_div.style.paddingTop="0";
title_div.style.display='';
}else{
title_base_div.style.fontSize="16px";
title_base_div.style.paddingTop="9px";
title_div.style.display='none';
}
}
function save_channel_settings_handler(response){
if(response&&response.data&&response.data.success){
set_channel_title(_gel("channel_title_input").value);
reload_profile_box(false);
current_tab_modified=false;
var tab_contents=_gel('tab_contents_'+current_channel_edit_tab);
tab_contents.__backup=tab_contents.innerHTML;
display_message("edit-save-messages",CHANNEL_SUCCESS_COLOR,yt.getMsg('SUCCESS'));
channel_edit_tab('close');
}else if(response&&response.errors){
display_message('info-messages',"#F99",response.errors.join('<br>'));
}
_removeclass(_gel("tab_contents_info"),'saving');
}
function settings_tab_keypress(){
current_tab_modified=true;
}
window.settings_tab_keypress=settings_tab_keypress;
function save_channel_settings(){
var form=_gel("channel_settings");
var request=form_to_dict(form);
var backend=get_channel_backend();
backend.aq_.register_handler('save_channel_settings',save_channel_settings_handler);
backend.aq_.send_message(request,'save_channel_settings',true);
_addclass(_gel("tab_contents_info"),'saving');
}
window.save_channel_settings=save_channel_settings;
function swap_input_for_placeholder(name){
var input=_gel(name);
var placeholder=_gel(name+'__');
placeholder.style.display='none';
input.value='';
input.style.display='';
input.focus();
}
window.swap_input_for_placeholder=swap_input_for_placeholder;
function feed_bulletin_preview_onfocus(input){
input.hasFocus__=true;
feed_bulleting_preview_periodic(input,_gel('preview_bulletin_message'));
}
window.feed_bulletin_preview_onfocus=feed_bulletin_preview_onfocus;
function feed_bulletin_preview_onblur(input){
input.hasFocus__=false;
}
window.feed_bulletin_preview_onblur=feed_bulletin_preview_onblur;
function feed_bulleting_preview_periodic(input,previewMessage){
previewMessage.innerHTML='';
if(input.style.display!='none'){
feed_bulletin_maxlength(input);
previewMessage.appendChild(document.createTextNode(input.value));
}
if(input.hasFocus__){
window.setTimeout(function(){
feed_bulleting_preview_periodic(input,previewMessage);
},500);
}
}
function feed_bulletin_maxlength(input){
var MAX_LENGTH=500;
if(input.value.length>MAX_LENGTH){
input.value=input.value.substr(0,MAX_LENGTH);
}
}
window.feed_bulletin_maxlength=feed_bulletin_maxlength;
function feed_bulletin_preview_video_onfocus(input){
input.hasFocus__=true;
input.value__=input.value;
feed_bulletin_preview_video_periodic(input);
}
window.feed_bulletin_preview_video_onfocus=feed_bulletin_preview_video_onfocus;
function feed_bulletin_preview_video_onblur(input){
input.hasFocus__=false;
}
window.feed_bulletin_preview_video_onblur=feed_bulletin_preview_video_onblur;
function feed_bulletin_preview_video_periodic(input){
if(input.style.display!='none'&&input.value!=input.value__){
input.value__=input.value;
feed_bulletin_preview_video(input);
}
if(input.hasFocus__){
window.setTimeout(function(){
feed_bulletin_preview_video_periodic(input);
},500);
}
}
function feed_bulletin_preview_video(input){
var previewLoading=_gel('preview_bulletin_loading');
var previewVideo=_gel('preview_bulletin_video');
var videoUrl=input.value;
previewLoading.style.display='none';
previewVideo.innerHTML='';
if(input.style.display!='none'&&is_valid_feed_bulletin_url(videoUrl)){
var callback=function(response){
if(input.requestUrl__==videoUrl){
previewLoading.style.display='none';
if(response&&response.success&&response.html){
previewVideo.innerHTML=response.html;
}
}
};
input.requestUrl__=videoUrl;
previewLoading.style.display='';
preview_feed_bulletin(videoUrl,callback);
}
}
function is_valid_feed_bulletin_url(url){
var urlPrefix='^(https?:/)?/[-\\w./&?+=~:;!%()@#,*]*';
var videoIdPrefix='(v=|/v/|/vi/|video_id=|youtu\\.be/|/cp/|#p(lay)?/.*/)';
var encryptedId='[A-Za-z0-9-_]{11}';
var docId='\\?docid=([-0-9]+)';
var pattern=new RegExp(urlPrefix+
'('+videoIdPrefix+encryptedId+'|'+docId+')');
return pattern.test(url);
}
function reset_feed_bulletin_fields(){
var form=_gel('post_feed_bulletin_tab');
form.bulletin_input.style.display='none';
form.bulletin_input.value='';
form.bulletin_input__.value=form.bulletin_default.value;
form.bulletin_input__.style.display='';
form.bulletin_video_input.style.display='none';
form.bulletin_video_input.value='';
form.bulletin_video_input__.value=form.bulletin_video_default.value;
form.bulletin_video_input__.style.display='';
_gel('preview_bulletin_message').innerHTML='';
_gel('preview_bulletin_video').innerHTML='';
_gel('preview_bulletin_loading').style.display='none';
}
function post_feed_bulletin_from_tab_handler(response){
if(response&&response.success){
display_message('edit-save-messages',CHANNEL_SUCCESS_COLOR,response.message);
reset_feed_bulletin_fields();
channel_edit_tab('close');
}else if(response){
display_message('bulletin-messages','#F99',response.message);
}
}
function post_feed_bulletin_from_tab(){
var form=_gel('post_feed_bulletin_tab');
if(form.bulletin_input.style.display=='none'){
form.bulletin_input.value='';
}
if(form.bulletin_video_input.style.display=='none'){
form.bulletin_video_input.value='';
}
post_feed_bulletin('user_recent_activity',form,post_feed_bulletin_from_tab_handler);
}
window.post_feed_bulletin_from_tab=post_feed_bulletin_from_tab;
function cancel_feed_bulletin_from_tab(){
reset_feed_bulletin_fields();
channel_edit_tab('close',true);
}
window.cancel_feed_bulletin_from_tab=cancel_feed_bulletin_from_tab;
function save_watch_branding_handler(response){
if(response&&response.data&&response.data.success){
display_message("edit-save-messages",CHANNEL_SUCCESS_COLOR,yt.getMsg('SUCCESS'));
current_tab_modified=false;
var tab_contents=_gel('tab_contents_'+current_channel_edit_tab);
tab_contents.__backup=tab_contents.innerHTML;
}else if(response&&response.errors){
display_message('watch_branding-messages',"#F99",response.errors.join('<br>'));
}
_removeclass(_gel("tab_contents_watch_branding"),'saving');
}
function save_watch_branding(){
var form=_gel("watch_branding");
var request=form_to_dict(form);
var backend=get_channel_backend();
backend.aq_.quick_send(request,'save_watch_branding',save_watch_branding_handler);
_addclass(_gel("tab_contents_watch_branding"),'saving');
}
window.save_watch_branding=save_watch_branding;
function save_live_stream_handler(response){
if(response&&response.data&&response.data.success){
display_message("edit-save-messages",CHANNEL_SUCCESS_COLOR,yt.getMsg('SUCCESS'));
current_tab_modified=false;
var tab_contents=_gel('tab_contents_'+current_channel_edit_tab);
tab_contents.__backup=tab_contents.innerHTML;
_gel('live_stream_ingest_name').innerText=response.data.live_stream_ingest_name;
}else if(response&&response.errors){
display_message('live_stream-messages',"#F99",response.errors.join('<br>'));
}
_removeclass(_gel("tab_contents_live_stream"),'saving');
}
function save_live_stream(){
var form=_gel("live_stream");
var request=form_to_dict(form);
var backend=get_channel_backend();
backend.aq_.quick_send(request,'save_live_stream',save_live_stream_handler);
_addclass(_gel("tab_contents_live_stream"),'saving');
}
window.save_live_stream=save_live_stream;
function gen_new_live_stream_id_handler(response){
if(response&&response.data&&response.data.success){
_gel('live_stream_video_id').value=response.data.live_stream_video_id;
_gel('live_stream_ingest_name').innerText=response.data.live_stream_ingest_name;
}else if(response&&response.errors){
display_message('live_stream-messages',"#F99",response.errors.join('<br>'));
}
_removeclass(_gel("tab_contents_live_stream"),'saving');
}
function gen_new_live_stream_id(){
var form=_gel("live_stream");
var request=form_to_dict(form);
var backend=get_channel_backend();
backend.aq_.quick_send(request,'gen_new_live_stream_id',gen_new_live_stream_id_handler);
_addclass(_gel("tab_contents_live_stream"),'saving');
}
window.gen_new_live_stream_id=gen_new_live_stream_id;
function channel_hierarchy_response_handler(response){
if(response&&response.data&&response.data.success){
display_message("edit-save-messages",CHANNEL_SUCCESS_COLOR,yt.getMsg('SUCCESS'));
current_tab_modified=false;
var tab_contents=_gel('tab_contents_'+current_channel_edit_tab);
tab_contents.__backup=tab_contents.innerHTML;
}else if(response&&response.errors){
display_message('channel_hierarchy-messages',"#F99",response.errors.join('<br>'));
}
}
function change_hierarchy_passcode(){
var form=_gel("hierarchy_passcode");
var request=form_to_dict(form);
var backend=get_channel_backend();
backend.aq_.quick_send(request,'change_hierarchy_passcode',channel_hierarchy_response_handler);
}
window.change_hierarchy_passcode=change_hierarchy_passcode;
function modify_child_channel_handler(response){
if(response.data&&response.data.html)
_gel('children_list').innerHTML=response.data.html;
channel_hierarchy_response_handler(response);
}
function add_child_channel(){
var form=_gel("add_child");
var request=form_to_dict(form);
var backend=get_channel_backend();
backend.aq_.quick_send(request,'add_child_channel',modify_child_channel_handler);
}
window.add_child_channel=add_child_channel;
function remove_child_channel(childname){
var request={'childname':childname};
var backend=get_channel_backend();
backend.aq_.quick_send(request,'remove_child_channel',modify_child_channel_handler);
}
window.remove_child_channel=remove_child_channel;
function changeCommentPermissions(friend_only,moderation){
_gel("profile_comment_friend_only").value=friend_only;
_gel("profile_comment_moderation").value=moderation;
}
window.changeCommentPermissions=changeCommentPermissions;
function uploaded_background_image(upload_response_variables){
if(upload_response_variables.upload_type=='channel_background'){
if(upload_response_variables.success){
_gel('background_image').value=upload_response_variables.image_url;
edit_main_theme('background_image',upload_response_variables.image_url,true);
update_theme_css('background_image',upload_response_variables.preview_url);
}else{
display_message('colors-messages',"#F99",upload_response_variables.error_msg);
}
window.frames['background_frame'].document.getElementById('channel_background_counter').value=++window.background_image_counter;
}else if(upload_response_variables.upload_type=='watch_background'){
if(!upload_response_variables.success){
display_message('watch_branding-messages',"#F99",upload_response_variables.error_msg);
}
_gel('delete_watch_background').value='False';
}else if(upload_response_variables.upload_type=='watch_header'){
if(!upload_response_variables.success){
display_message('video-messages',"#F99",upload_response_variables.error_msg);
}else{
_gel('delete_watch_header').value='False';
}
}else if(upload_response_variables.upload_type=='watch_icon'){
if(!upload_response_variables.success){
display_message('video-messages',"#F99",upload_response_variables.error_msg);
}else{
_gel('delete_watch_icon').value='False';
_gel('delete_new_watch_icon').value='False';
}
}else if(upload_response_variables.upload_type=='profile_header'){
if(upload_response_variables.success){
_gel('branding_image_visible').value='True';
}else{
display_message('banners-messages',"#F99",upload_response_variables.error_msg);
}
}else if(upload_response_variables.upload_type=='side_column'){
if(upload_response_variables.success){
_gel('side_column_image_visible').value='True';
}else{
display_message('banners-messages',"#F99",upload_response_variables.error_msg);
}
}
}
window.uploaded_background_image=uploaded_background_image;
function delete_background_upload(upload_type){
switch(upload_type){
case 'channel_background':
_gel('background_image').value='';
edit_main_theme('background_image','');
break;
case 'watch_background':
_gel('delete_watch_background').value='True';
current_subtab_modified=true;
break;
case 'new_watch_background':
_gel('delete_new_watch_background').value='True';
current_subtab_modified=true;
break;
case 'new_watch_small_banner':
_gel('delete_new_watch_small_banner').value='True';
current_subtab_modified=true;
break;
case 'new_watch_large_banner':
_gel('delete_new_watch_large_banner').value='True';
current_subtab_modified=true;
break;
case 'watch_header':
_gel('delete_watch_header').value='True';
current_subtab_modified=true;
break;
case 'watch_icon':
_gel('delete_watch_icon').value='True';
_gel('delete_new_watch_icon').value='True';
current_subtab_modified=true;
break;
case 'profile_header':
_gel('branding_image_visible').value='False';
current_subtab_modified=true;
break;
case 'side_column':
_gel('side_column_image_visible').value='False';
current_subtab_modified=true;
break;
case 'album_cover_0':
case 'album_cover_1':
case 'album_cover_2':
var imgPreview=_gel('img_url_'+upload_type);
imgPreview.style.display='none';
var imgUrlInput=_gel('img_url__'+upload_type);
imgUrlInput.value='';
break;
}
current_tab_modified=true;
}
window.delete_background_upload=delete_background_upload;
function update_hidden_field(name){
window.setTimeout(function(){
var displayed=_gel('show_'+name).checked;
_gel('hide_'+name).checked=!displayed;
if(!displayed){
_addclass(_gel('edit_info_'+name),'opacity40');
}else{
_removeclass(_gel('edit_info_'+name),'opacity40');
}
},1);
}
window.update_hidden_field=update_hidden_field;
function update_merged_date(name){
var year=_gel(name+"_yr").value;
var month=_gel(name+"_mon").value;
if(month.length<2){
month="0"+month;
}
var day=_gel(name+"_day").value;
if(day.length<2){
day="0"+day;
}
_gel(name+"_merged").value=year+month+day;
}
window.update_merged_date=update_merged_date;
function toggle_playnav_edit_mode(){
_gel('playnav_edit_info').__backup=_gel('playnav_edit_info').innerHTML;
toggle_edit_mode('user_playlist_navigator');
}
window.toggle_playnav_edit_mode=toggle_playnav_edit_mode;
function profile_remove_user(username,box){
if(!confirm(yt.getMsg('SRSLY_GTFO'))){
return;
}
var backend=get_channel_backend();
var request={'username':username,'box':box};
backend.aq_.quick_send(request,'profile_remove_user',profile_remove_user_handler);
}
window.profile_remove_user=profile_remove_user;
function profile_remove_user_handler(response){
window.location.reload(true);
}
function toggle_remover(el_name,show){
var name='rm-user-'+el_name;
if(show){
_showdiv(name);
}else{
_hidediv(name);
}
}
window.toggle_remover=toggle_remover;
function gather_form_data(form){
var formdata={};
var form_elements=form.elements;
var input_names=[];
for(var i=0;i<form_elements.length;i++){
var input=form_elements[i];
input_names.push(input.name);
if((input.type=="checkbox"||input.type=="radio")&&input.checked==false){
continue;
}
var value=input.value;
if(input.type=='select-multiple'){
value=[];
var options=input.options;
for(var j=0;j<options.length;j++){
var option=options[j];
value.push(option.value);
}
}
formdata[input.name]=value;
}
return formdata;
}
function copy_object(obj){
var temp={};
if(typeof(obj)=="object"){
for(var prop in obj){
if(typeof(obj[prop])=="object"){
if(obj[prop].__isArray){
temp[prop]=copy_array(obj[prop]);
}else{
temp[prop]=copy_object(obj[prop]);
}
}else{
temp[prop]=obj[prop];
}
}
return temp;
}
return obj;
}
function copy_array(arr){
return arr.slice(0);
}
function form_to_dict(form){
var form_vars={};
for(var i=0;i<form.elements.length;i++){
var input=form.elements[i];
var name=input.name;
if(input.type=='checkbox'){
if(input.checked){
if(!form_vars[name]){
form_vars[name]=new Array;
}
form_vars[name].push(input.value);
}
}else if(input.type!='radio'||input.checked){
var value=input.value;
if(input.type=='select-multiple'){
value=[];
var options=input.options;
for(var j=0;j<options.length;j++){
var option=options[j];
value.push(option.value);
}
}
form_vars[name]=value;
}
}
return form_vars;
}
window.form_to_dict=form_to_dict;
})();
var playnav=function(){};
playnav.onPlayerLoadedFunctions=[];
playnav.onDomLoaded=[];
(function(){
var OVERSCROLL=500;
var AUTOSKIP_ERROR_TIMEOUT=3000;
var ARRANGER_WAIT_DELAY=100;
var PlayState={
UNSTARTED:-1,
ENDED:0,
PLAYING:1,
PAUSED:2,
BUFFERING:3,
CUED:5
};
var isAutoskip_=false;
var isAutoplay_=true;
var boxId_='user_playlist_navigator';
var backend_;
var boxInfo_={'name':boxId_,'x_position':0};
var player_;
var currentPlayState_=PlayState.UNSTARTED;
var isWritePlayerPending_=false;
var initialLocationHash_;
var curViewName_='';
var gridViewTitle_='';
var curPlaylistName_;
var curPlaylistId_;
var curSearchQuery_;
var curSortName_='default';
var invalidatedPlaylists_={};
var curSelection_;
var curVideoId_;
var curVideoIndex_;
var curPanelName_='info';
var curLiveStreamingPanelName_='ls_info';
var liveStreamingTabLoaded_=false;
var isSkipping_=false;
var isDomLoaded_=false;
var isViewUpdateRequested_=false;
var isViewUpdatePending_=false;
var arrangerOpenRequested_=null;
var arrangerRestoreParams_=null;
var ageVerificationRequired_=false;
var scrollableItemSetupCallback_=null;
var arranger_=null;
function setupScrollableItems(callback){
scrollableItemSetupCallback_=callback;
if(callback){
var currentScrollbox=goog.dom.$(getCurrentScrollboxId());
callback(currentScrollbox);
}
}
function getCurrentScrollboxId(){
return['playnav',curViewName_,curPlaylistId_,'scrollbox'].join('-');
}
function setBoxInfo(boxId){
boxId_=boxId;
boxInfo_={'name':boxId_,'x_position':0};
}
function handlePendingFunction(fname){
if(playnav[fname]){
playnav[fname]();
playnav[fname]=null;
}
}
function executeAll(callbacks){
while(callbacks.length>0){
callbacks.shift()();
}
}
function setViewElementStyle(id,param,value){
var element=goog.dom.$(id);
if(element){
element.style[param]=value;
}
}
function removeLoadingClasses(elementName){
var element=goog.dom.$(elementName);
_removeclass(element,'playnav-visible');
_removeclass(element,'playnav-hidden');
_removeclass(element,'playnav-show');
_removeclass(element,'playnav-hide');
}
function stripLocationHash(locationHash){
if(locationHash.charAt(0)=='#'){
locationHash=locationHash.substr(1);
}
return locationHash.split('&')[0];
}
function getLocationHash(){
return stripLocationHash(window.location.hash);
}
function parseLocationHash(opt_hash){
var locationHash={
length:0,
view:'',
playlistName:'',
playlistId:'',
videoIndex:0,
videoId:'',
liveVideoId:''
};
var hash=opt_hash||getLocationHash();
if(hash&&hash!=''){
var parts=hash.split('/');
parts=Iter(parts).collect(function(str){
return decodeURIComponent(str);
});
var view=parts[0];
if(view=='v'){
locationHash.videoId=parts[1]||'';
}else{
view=attemptToMap(viewNameMap,'+',view);
if(view!='grid'&&view!='play'){
view='';
parts.unshift(view);
}
locationHash.view=view;
locationHash.length=parts.length;
if(locationHash.length>1){
locationHash.playlistName=attemptToMap(tabNameMap,'+',parts[1]);
}
if(locationHash.playlistName=='live_streaming'){
switch(locationHash.length){
case 3:
locationHash.liveVideoId=parts[2];
break;
}
}else{
switch(locationHash.length){
case 3:
locationHash.playlistId=attemptToMap(playlistIdMap,'+',parts[2]);
break;
case 4:
locationHash.videoIndex=parts[2];
locationHash.videoId=parts[3];
break;
case 5:
locationHash.playlistId=parts[2];
if(locationHash.playlistName=='all'){
if(locationHash.playlistId.indexOf('-all')<0){
locationHash.playlistId+='-all';
}
locationHash.playlistId=attemptToMap(playlistIdMap,'+',locationHash.playlistId);
}
locationHash.videoIndex=parts[3];
locationHash.videoId=parts[4];
break;
}
}
}
}
return locationHash;
}
function handleLocationHash(locationHash,opt_isInitialLocationHash){
var wasVideoRequested=false;
var handlerFunctions=[];
if(!locationHash){
return false;
}
if(locationHash.view!=''&&locationHash.view!=curViewName_){
playnav.selectView(locationHash.view);
}
var playlistId=locationHash.playlistName;
var loadPlaylistFunction;
if(locationHash.playlistId!=''){
playlistId=locationHash.playlistId;
if(locationHash.playlistId!=curPlaylistId_){
loadPlaylistFunction=playnav.selectPlaylist.bind(null,
locationHash.playlistName,
playlistId);
}
}else if(locationHash.playlistName!=''){
handlerFunctions.push(playnav.selectPlaylist.bind(null,
locationHash.playlistName));
}
if(locationHash.videoId!=''){
handlerFunctions.push(playnav.playVideo.bind(null,playlistId,
locationHash.videoIndex,locationHash.videoId,
null,null,opt_isInitialLocationHash));
wasVideoRequested=true;
}else if(loadPlaylistFunction){
handlerFunctions.push(loadPlaylistFunction);
}
executeAll(handlerFunctions);
return wasVideoRequested;
}
function handleLocationHashUpdate(windowLocationHash){
var locationHash=stripLocationHash(windowLocationHash);
handleLocationHash(parseLocationHash(locationHash));
}
var viewNameMap={
'-grid':'g',
'-play':'p',
'+p':'play',
'+g':'grid'
};
var tabNameMap={
'-all':'a',
'+a':'all',
'-favorites':'f',
'+f':'favorites',
'-uploads':'u',
'+u':'uploads',
'-playlists':'p',
'+p':'playlists',
'-user':'c',
'+c':'user',
'-topics':'t',
'+t':'topics',
'-recent':'r',
'+r':'recent',
'-live_streaming':'l',
'+l':'live_streaming'
};
var playlistIdMap={
'-uploads-all':'u-all',
'-favorites-all':'f-all',
'+u-all':'uploads-all',
'+f-all':'favorites-all'
};
function attemptToMap(map,prefix,key){
var tmp=map[prefix+key];
if(tmp)return tmp;
return key;
}
function updateHistory(viewName,tabName,playlistId,opt_videoIndex,opt_videoId){
viewName=attemptToMap(viewNameMap,'-',viewName);
tabName=attemptToMap(tabNameMap,'-',tabName);
playlistId=attemptToMap(tabNameMap,'-',playlistId);
parts=[viewName,tabName];
if(playlistId!=tabName){
playlistId=attemptToMap(playlistIdMap,'-',playlistId);
if(tabName=='a'){
playlistId=playlistId.replace('-all','');
}
parts.push(playlistId);
}
if(opt_videoIndex&&opt_videoId){
parts.push(opt_videoIndex);
parts.push(opt_videoId);
}
var windowLocationHash=getLocationHash();
var locationHash=parts.join('/');
if(windowLocationHash.indexOf(locationHash)!=0){
History.add(locationHash);
}
}
function navigatorNotReady(){
if(!isDomLoaded_){
if(window.console&&window.console['warn']){
window.console['warn']('Function called before navigator initialized.');
window.console['trace']&&window.console['trace']();
}
return true;
}
return false;
}
function setInitialView(viewName){
curViewName_=viewName;
}
function setInitialTab(tabName){
curPlaylistName_=tabName;
}
function initDom(){
if(isDomLoaded_){
return;
}
isDomLoaded_=true;
backend_=get_channel_backend();
boxInfo_=get_channel_box_info(boxId_);
removeLoadingClasses('playnav-player');
removeLoadingClasses('playnav-playview');
removeLoadingClasses('playnav-gridview');
initTab(curPlaylistName_);
initView(curViewName_);
if(curPlaylistName_=="uploads"){
updateViewOnly();
}
else{
updateView();
}
resizeView();
executeAll(playnav.onDomLoaded);
handlePendingFunction('mostRecentSelectViewFunction');
handlePendingFunction('mostRecentSelectTabFunction');
}
function initPlayer(playerId,tabName){
player_.addEventListener('onStateChange','playnav.onPlayerStateChange');
player_.addEventListener('onError','playnav.onPlayerError');
if(curViewName_=='play'){
executeAll(playnav.onPlayerLoadedFunctions);
handlePendingFunction('mostRecentStopFunction');
}else{
handlePendingFunction('mostRecentStopFunction');
}
}
var infoPanelData={'html':'<div></div>'};
function setVideoPlayerConfigVars(data){
var swfArgs=data['swf_args'];
var swfUrl=data['swf_url'];
swfArgs&&yt.setConfig('SWF_ARGS',swfArgs);
swfUrl&&yt.setConfig('SWF_URL',swfUrl);
var navigator=_gel('user_playlist_navigator');
navigator.className.replace(/player-as3/,'');
if(swfArgs.ps=='as3'){
navigator.className=navigator.className+' player-as3';
}
}
function disableAutoplaySwfArg(){
var swfArgs=yt.getConfig('SWF_ARGS');
swfArgs&&(swfArgs['autoplay']='0');
yt.setConfig('SWF_ARGS',swfArgs);
}
function handleVideoMetadata(videoId,data,opt_embeddedVideo){
var okToWritePlayer=true;
if(opt_embeddedVideo){
goog.dom.$('profile-noplayer-div').style.display='none';
initialLocationHash_=parseLocationHash();
if(initialLocationHash_.playlistName!=''){
curPlaylistName_=initialLocationHash_.playlistName;
}
if(initialLocationHash_.view!=''){
curViewName_=initialLocationHash_.view;
}
if(initialLocationHash_.playlistId!=''){
curPlaylistId_=initialLocationHash_.playlistId;
}
if(handleLocationHash(initialLocationHash_,true)||
initialLocationHash_.view=='grid'){
okToWritePlayer=false;
}
if(curViewName_=='grid'){
okToWritePlayer=false;
}
}
var error=data['error'];
if(error){
display_message('user_playlist_navigator-messages',"#F99",error);
}
else if(data['play_response_error']||data['play_response_check']){
playnav.verifyAge(data['play_response_id'],
data['play_response_title'],
data['redirect_url'],
data['play_response_error_message']);
onPlayerError();
}
else{
playnav.verifyNotRequired();
setVideoPlayerConfigVars(data);
if(okToWritePlayer){
writePlayer();
}else{
isWritePlayerPending_=true;
}
infoPanelData={'html':data['info_panel_html'],'js_exec':data['js_exec']};
playnav.selectPanel('info');
}
}
function writePlayer(){
isWritePlayerPending_=false;
var div=goog.dom.$('profile-noplayer-div');
if(div){
div.style.display='';
}
yt.www.watch.player.write('playnav-player',null,false,'onChannelPlayerReady','640','385');
player_=goog.dom.$('movie_player');
}
function deletePlayer(){
if(player_){
goog.dom.removeNode(player_);
player_=null;
}
}
function requestPlayback(videoId,opt_isFirstplayVideo){
var params={
'video_id':videoId,
'playlist_name':curPlaylistName_,
'encrypted_playlist_id':curPlaylistId_,
'is_firstplay':!!opt_isFirstplayVideo
};
if(opt_isFirstplayVideo){
params['request_uri']=yt.getConfig('request_uri');
params['http_referer']=yt.getConfig('http_referer');
}
backend_.call_box_method(boxInfo_,params,'get_video_metadata_ajax',
handleVideoMetadata.bind(null,videoId));
}
function pausePlayerVideo(){
if(player_){
player_.pauseVideo();
}
}
function stopPlayerVideo(){
if(player_){
player_.stopVideo();
}
}
function highlightViewButton(buttonName,isHighlighted){
var button=goog.dom.$(buttonName);
if(!button){
return;
}
if(isHighlighted){
_addclass(button,'view-button-selected');
}else{
_removeclass(button,'view-button-selected');
}
}
function highlightViewButtons(viewName){
highlightViewButton('playview-icon',viewName=='play');
highlightViewButton('gridview-icon',viewName=='grid');
}
function initView(viewName){
curViewName_=viewName;
highlightViewButtons(viewName);
}
function selectView(viewName){
if(!isDomLoaded_){
highlightViewButtons(viewName);
playnav.mostRecentSelectViewFunction=selectView.bind(null,viewName);
return;
}
if(curPlaylistName_=='live_streaming'&&viewName=='grid'){
return;
}
if(curViewName_!=viewName){
if(!destructArranger()){
return;
}
initView(viewName);
if(viewName!='play'){
pausePlayerVideo();
}else{
if(isWritePlayerPending_){
disableAutoplaySwfArg();
writePlayer();
}
}
if(!isViewUpdateRequested_){
isViewUpdateRequested_=true;
requestViewUpdate();
}
}
}
var playlistNameToTabNameMap={
'user':'playlists',
'search':'uploads',
'season_episodes':'shows',
'season_clips':'shows',
'show':'shows'
};
function playlistNameToTabName(name){
return attemptToMap(playlistNameToTabNameMap,'',name);
}
function highlightTab(name){
var tabBar=goog.dom.$('playnav-navbar');
if(tabBar){
var tabs=goog.dom.$$('a','navbar-tab',tabBar);
var numberOfTabs=tabs.length;
for(var i=0;i<numberOfTabs;i++){
_removeclass(tabs[i],'navbar-tab-selected');
}
}
var className=playlistNameToTabName(name);
var tab=goog.dom.$('playnav-navbar-tab-'+className);
if(tab){
_addclass(tab,'navbar-tab-selected');
}
var arrangeLinkContainer=goog.dom.$('playnav-arrange-links');
if(arrangeLinkContainer){
var arrangeLinks=goog.dom.$$('a','channel-cmd',arrangeLinkContainer);
var numberOfArrangeLinks=arrangeLinks.length;
for(var j=0;j<numberOfArrangeLinks;j++){
_addclass(arrangeLinks[j],'hide-link');
}
}
var arrangeLink=goog.dom.$('arrange-link-'+className);
if(arrangeLink){
_removeclass(arrangeLink,'hide-link');
}
}
function enableGridView(){
_removeclass(goog.dom.$('gridview-icon'),'yt-www-ls-disabled-gridview');
if(gridViewTitle_==''){
gridViewTitle_=goog.dom.$('gridview-icon').title;
}
goog.dom.$('gridview-icon').title=gridViewTitle_;
}
function disableGridView(){
_addclass(goog.dom.$('gridview-icon'),'yt-www-ls-disabled-gridview');
goog.dom.$('gridview-icon').title='';
}
function initTab(name){
curPlaylistName_=name;
highlightTab(curPlaylistName_);
enableGridView();
switch(name){
case 'uploads':
case 'favorites':
case 'all':
curPlaylistId_=null;
break;
case 'live_streaming':
disableGridView();
if(!liveStreamingTabLoaded_){
selectLiveStreamingPanel('ls_info');
liveStreamingTabLoaded_=true;
}
break;
}
}
function selectTab(tabName,opt_suppressUpdate,opt_preserveArranger){
if(!isDomLoaded_){
highlightTab(tabName);
if(!opt_suppressUpdate){
playnav.mostRecentSelectTabFunction=selectTab.bind(null,tabName,opt_suppressUpdate);
}
return;
}
if(opt_preserveArranger&&
tabName==playlistNameToTabName(curPlaylistId_)&&
arranger_){
arrangerRestoreParams_=arranger_.save(true);
arrangerOpenRequested_=tabName;
destructArranger(true);
}else{
if(!destructArranger()){
return;
}
}
initTab(tabName);
if(!opt_suppressUpdate&&!isViewUpdateRequested_){
isViewUpdateRequested_=true;
requestViewUpdate();
}
}
function selectPlaylist(playlistName,opt_playlistId,opt_searchQuery){
curPlaylistId_=opt_playlistId;
curSearchQuery_=opt_searchQuery;
selectTab(playlistName);
}
function runPanelScriptsLater(name){
return function(){run_scripts_in_el('playnav-panel-'+name);};
}
function handlePanelLoaded(name,panel){
return function(data){
var html=data.html?data.html:data;
panel.innerHTML=html;
var scrollable=_hasclass(panel,'scrollable');
goog.dom.$('playnav-video-panel-inner').style.overflow=(scrollable?'auto':'hidden');
if(data.css){
var styleElement=document.createElement('style');
styleElement.setAttribute("type","text/css");
if(styleElement.styleSheet){
styleElement.styleSheet.cssText=data.css;
}else{
styleElement.appendChild(document.createTextNode(data.css));
}
document.getElementsByTagName('head')[0].appendChild(styleElement);
}
if(data.js){
var scriptElement=document.createElement('script');
scriptElement.text=data.js;
document.getElementsByTagName('head')[0].appendChild(scriptElement);
}
if(data.js_exec){
eval(data.js_exec);
}
window.setTimeout(runPanelScriptsLater(name),0);
};
}
function selectPanel(name,opt_params,opt_dont_hide){
if(name.search(/^ls_/)>=0){
selectLiveStreamingPanel(name,opt_params,opt_dont_hide);
return;
}
isAutoplay_=(name.search(/^info|^favorite/)>=0);
var panel=goog.dom.$('playnav-panel-'+name);
var panelTab=goog.dom.$('playnav-panel-tab-'+name);
if(!panel||!panelTab)return;
_removeclass(goog.dom.$('playnav-panel-tab-'+curPanelName_),'panel-tab-selected');
_addclass(panelTab,'panel-tab-selected');
if(!opt_dont_hide){
goog.dom.$('playnav-panel-'+curPanelName_).style.display='none';
}
removePoppedElements();
panel.style.display='block';
curPanelName_=name;
if(name=='info'){
handlePanelLoaded(name,panel)(infoPanelData);
return;
}
if(!opt_dont_hide){
panel.innerHTML=goog.dom.$('playnav-spinny-graphic').innerHTML;
}
var params={
'video_id':curVideoId_,
'playlist_id':curPlaylistId_,
'playlist_name':curPlaylistName_
};
if(name=='info'){
params['video_index']=curVideoIndex_;
}
if(curSelection_){
var _tmp=goog.dom.$('ID2POST-'+curSelection_.id);
if(_tmp){
params['comment']=_tmp.attributes['name'].value;
}
}
if(opt_params){
for(n in opt_params){
params[n]=opt_params[n];
}
}
backend_.call_box_method(boxInfo_,params,'load_popup_'+name,
handlePanelLoaded(name,panel));
}
function selectLiveStreamingPanel(name,opt_params,opt_dont_hide){
var panel=goog.dom.$('playnav-panel-'+name);
var panelTab=goog.dom.$('playnav-panel-tab-'+name);
if(!panel||!panelTab)return;
_removeclass(goog.dom.$('playnav-panel-tab-'+curLiveStreamingPanelName_),'panel-tab-selected');
_addclass(panelTab,'panel-tab-selected');
if(!opt_dont_hide){
goog.dom.$('playnav-panel-'+curLiveStreamingPanelName_).style.display='none';
}
removePoppedElements();
panel.style.display='block';
curLiveStreamingPanelName_=name;
if(name=='ls_info'&&liveStreamingTabLoaded_){
return;
}
if(!opt_dont_hide){
panel.innerHTML=goog.dom.$('playnav-spinny-graphic').innerHTML;
}
var params={
'video_id':curVideoId_,
'playlist_id':curPlaylistId_,
'playlist_name':curPlaylistName_
};
backend_.call_box_method(boxInfo_,params,'load_popup_'+name,handlePanelLoaded(name,panel));
}
function updateViewOnly(){
isViewUpdateRequested_=false;
if(goog.dom.$('playnav-live-streaming-body')){
if(curPlaylistName_=='live_streaming'){
setViewElementStyle('playnav-body','display','none');
setViewElementStyle('playnav-live-streaming-body','display','block');
}else{
setViewElementStyle('playnav-body','display','block');
setViewElementStyle('playnav-live-streaming-body','display','none');
}
}
if(curViewName_=='play'){
setViewElementStyle('playnav-playview','display','block');
setViewElementStyle('playnav-gridview','display','none');
hideCachedPages('grid');
var verifyCoverDiv=goog.dom.$('playnav-player-restricted');
var isVerifyCoverVisible=verifyCoverDiv&&verifyCoverDiv.style.display!='none';
goog.dom.$('playnav-player').style.visibility=isVerifyCoverVisible?'hidden':'visible';
goog.dom.$('playnav-player').style.left=isVerifyCoverVisible?'960px':'0';
}else{
goog.dom.$('playnav-player').style.visibility='hidden';
goog.dom.$('playnav-player').style.left='960px';
setViewElementStyle('playnav-playview','display','none');
setViewElementStyle('playnav-gridview','display','block');
hideCachedPages('play');
}
}
function updateTab(){
switch(curPlaylistName_){
case 'user':case 'show':case 'season_clips':case 'season_episodes':
loadPlaylist(curPlaylistName_,curPlaylistId_)
break;
case 'search':
loadPlaylist(curPlaylistName_,null,curSearchQuery_);
break;
case 'uploads':
clearSearchQueryFields();
loadPlaylist(curPlaylistName_);
break;
case 'favorites':case 'all':case 'recent':case 'playlists':case 'topics':case 'shows':
loadPlaylist(curPlaylistName_);
break;
case 'live_streaming':
updateHistory(curViewName_,curPlaylistName_,curPlaylistName_);
break;
}
}
function updateView(){
if(isViewUpdateRequested_){
updateViewOnly();
}
updateTab();
if(isViewUpdateRequested_){
isViewUpdateRequested_=false;
isViewUpdatePending_=true;
setTimeout(updateViewLater(),100);
}else{
isViewUpdatePending_=false;
}
}
function updateViewLater(){
return function(){updateView();};
}
function requestViewUpdate(){
if(!isViewUpdatePending_){
isViewUpdatePending_=true;
setTimeout(updateViewLater(),100);
}else{
isViewUpdateRequested_=true;
}
}
function clearSearchQueryFields(){
var base='upload_search_query-';
Iter(['grid','play']).each(function(post){
try{
goog.dom.$(base+post).value='';
}catch(e){}
});
}
var updateScrollbox=function(id){
var box=goog.dom.$(id);
if(!box)return;
if(!_hasclass(box,'outer-scrollbox')){
box=goog.dom.$$('div','outer-scrollbox',box)[0];
if(!box)return;
}
var top=box.scrollTop;
var bottom=top+box.offsetHeight;
top-=OVERSCROLL;
bottom+=OVERSCROLL;
var pages=goog.dom.$$('div','scrollbox-page',box);
var numberOfPages=pages.length;
for(var i=0;i<numberOfPages;i++){
var page=pages[i];
var pageTop=page.offsetTop;
var pageBottom=pageTop+page.offsetHeight;
if(pageTop>bottom){
break;
}
else if(pageBottom>top){
if((page.offsetHeight>0)&&
!_hasclass(page,'loaded')&&!_hasclass(page,'loading')){
queuePlaylistPageLoad(page);
}
}
}
};
updateScrollbox=Thread.bind(updateScrollbox,'updatePlaynavScrollbox');
var userAgent=navigator.userAgent.toLowerCase();
var isIE6=userAgent.indexOf('msie 6')!=-1&&userAgent.indexOf('opera')==-1;
var forceLayoutLater=function(el){
return function(){el.style.zoom='1';};
}
var resizeScrollbox=function(content,height){
if(!content)return;
var body=goog.dom.$$('div','scrollbox-body',content)[0];
if(body){
if(isIE6){
content.style.zoom='0';
}
var padding=5;
var outerScrollbox=goog.dom.$$('div','outer-scrollbox',body)[0];
var scrollHeight=height-outerScrollbox.offsetTop-padding;
body.style.height=scrollHeight+'px';
body.style.zoom='1';
if(isIE6){
content.style.height=scrollHeight+'px';
setTimeout(forceLayoutLater(content),0);
}
}
};
var resizeScrollboxes=function(node){
var scrollboxes=goog.dom.$$('div','scrollbox-content',node);
for(var i=0;i<scrollboxes.length;i++){
resizeScrollbox(scrollboxes[i],595);
}
}
var resizePlayviewWrapper=function(){
setTimeout(resizePlayview,0);
}
var resizePlayview=function(){
var container=goog.dom.$('playnav-play-panel');
var content=goog.dom.$('playnav-play-content');
if(container.style.display=='none'||content.style.display=='none'){
return;
}
content.style.height=(container.offsetHeight-content.offsetTop)+'px';
resizeScrollboxes(content);
}
var resizeView=function(){
if(curViewName_=='play'){
resizePlayview();
}else{
resizeScrollboxes(goog.dom.$('playnav-grid-content'));
}
}
resizeScrollboxes=Thread.bind(resizeScrollboxes,'resizePlaynavScrollbox');
var getPlaylistBox=function(view,name,id){
var playlistId=(name=='user')?id:name;
return goog.dom.$(['playnav',view,playlistId,'scrollbox'].join('-'));
};
var playlistQueueHandler=function(page,view,name,id,query,sort){
return function(){
if(!_hasclass(page,'loaded')&&!_hasclass(page,'loading')){
_addclass(page,'loading');
var box=getPlaylistBox(view,name,id);
if(box){
box.__pageRequested=true;
}
var pageNum=parseInt(page.id.split('-').pop());
loadPlaylistPage(pageNum,view,name,id,query,sort);
return true;
}
return false;
};
};
var queuePlaylistPageLoad=function(page){
var box=getPlaylistBox(curViewName_,curPlaylistName_,curPlaylistId_);
if(!box.__queue){
box.__queue=[];
}
box.__queue.push(playlistQueueHandler(page,curViewName_,
curPlaylistName_,curPlaylistId_,curSearchQuery_,curSortName_));
if(!box.__pageRequested){
loadNextPlaylistPage(box);
}
};
var loadNextPlaylistPage=function(box){
box.__pageRequested=false;
if(box.__queue){
var loadPlaylist=box.__queue.pop();
while(loadPlaylist&&!loadPlaylist()){
loadPlaylist=box.__queue.pop();
}
}
};
function loadPlaylistPage(pageNum,viewName,playlistName,
opt_playlistId,opt_searchQuery,opt_sortName){
if(navigatorNotReady()){
return;
}
var method='load_playlist_page';
var playlistId=(playlistName=='user')?opt_playlistId:playlistName;
var params={
'playlist_name':playlistName,
'encrypted_playlist_id':playlistId||"",
'query':opt_searchQuery||"",
'encrypted_shmoovie_id':playlistId==null?"":playlistId.substring(0,11),
'page_num':pageNum,
'view':viewName,
'playlist_sort':opt_sortName
};
var sortEl=goog.dom.$([playlistId,'sort'].join('-'));
var sort=sortEl&&sortEl.innerHTML||'';
backend_.call_box_method(boxInfo_,params,method,
onPlaylistPageLoaded.bind(this,viewName,playlistId,pageNum)
);
}
function onPlaylistPageLoaded(viewName,playlistId,pageNum,html){
var boxId=['playnav',viewName,playlistId,'scrollbox'].join('-');
var pageId=['playnav',viewName,playlistId,'page',pageNum].join('-');
var page=goog.dom.$(pageId);
if(page){
page.innerHTML=html;
updateEllipses(page);
_removeclass(page,'loading');
_addclass(page,'loaded');
selectCurrentVideo();
if(scrollableItemSetupCallback_){
scrollableItemSetupCallback_(page);
}
loadNextPlaylistPage(goog.dom.$(boxId));
}
}
function hideCachedPages(opt_viewName){
if(!opt_viewName){
opt_viewName=curViewName_;
}
var viewNode=goog.dom.$('playnav-'+opt_viewName+'-content');
if(!viewNode){
return;
}
var otherEls=goog.dom.$$('div','playnav-playlist-holder',viewNode);
var len=otherEls.length;
for(var i=0;i<len;i++){
var el=otherEls[i];
try{
el.style.display='none';
}catch(e){}
}
}
function invalidateTab(tabName){
invalidatedPlaylists_[tabName]={'play':true,'grid':true};
}
var elementsToDelete=[];
function loadPlaylist(playlistName,opt_playlistId,opt_searchQuery,opt_forceReload){
if(navigatorNotReady()){
return;
}
if(playlistName=='live_streaming'){
initTab(playlistName);
updateViewOnly();
return;
}
var playlistNameOrId=opt_playlistId||playlistName;
if(opt_playlistId){
curPlaylistId_=opt_playlistId;
}
selectTab(playlistName,true);
updateHistory(curViewName_,curPlaylistName_,playlistNameOrId);
var cachedEl=goog.dom.$(['playnav',curViewName_,'playlist',playlistNameOrId,'holder'].join('-'));
var isInvalidated=invalidatedPlaylists_[playlistName]&&invalidatedPlaylists_[playlistName][curViewName_];
if(opt_forceReload||isInvalidated){
if(isInvalidated){
delete invalidatedPlaylists_[playlistName][curViewName_];
}
if(cachedEl){
elementsToDelete.push(cachedEl);
cachedEl=null;
}
}
if(cachedEl){
hideCachedPages();
cachedEl.style.display='block';
resizeView();
var scrollArea=goog.dom.$$('div','outer-scrollbox',cachedEl)[0];
if(scrollArea){
scrollArea.scrollTop=0;
updateScrollbox(scrollArea);
}
updateEllipses(cachedEl);
selectCurrentVideo();
showArrangerIfRequested();
}else{
var method='load_playlist';
var params={};
var logging="&playlistName="+playlistName;
switch(playlistName){
case 'uploads':
logging+="&sort="+curSortName_;
break;
case 'favorites':
case 'playlists':
case 'topics':
break;
case 'all':
case 'recent':
method='load_playlist_videos_multi';
break;
case 'user':
params['encrypted_playlist_id']=opt_playlistId;
break;
case 'show':case 'season_episodes':case 'season_clips':
params['encrypted_shmoovie_id']=opt_playlistId.substring(0,11);
break;
case 'search':
params['query']=opt_searchQuery||"";
curSearchQuery_=opt_searchQuery;
break;
}
params['playlist_name']=playlistName;
params['view']=curViewName_;
params['playlist_sort']=curSortName_;
var view=curViewName_;
backend_.call_box_method(boxInfo_,params,method,
playlistLoadedResponse.bind(this,view,playlistNameOrId),logging);
setViewLoading(curViewName_,true);
}
}
function playlistLoadedResponse(viewName,playlistNameOrId,html){
hideCachedPages();
Iter(elementsToDelete).each(function(el){
goog.dom.removeNode(el);
});
elementsToDelete=[];
var viewNode=goog.dom.$(['playnav',viewName,'content'].join('-'));
if(viewNode){
var node=document.createElement('div');
node.className='playnav-playlist-holder';
node.id=['playnav',viewName,'playlist',playlistNameOrId,'holder'].join('-');
var old=goog.dom.$(node.id);
if(old){
goog.dom.removeNode(old);
}
node.innerHTML=html;
viewNode.appendChild(node);
resizeView();
selectCurrentVideo();
setViewLoading(viewName,false);
showArrangerIfRequested();
}
}
function selectCurrentVideo(){
selectVideo(curSelection_);
}
function setViewLoading(view,isLoading){
var loadingEl=goog.dom.$('playnav-'+view+'-loading');
if(loadingEl){
loadingEl.style.display=isLoading?'block':'none';
}
}
function setVideoId(videoId){
curVideoId_=videoId;
}
function setPlaylistId(playlistId){
curPlaylistId_=playlistId;
selectTab('user',true);
}
function goToWatchPage(){
window.location.href="/watch?v="+curVideoId_;
}
function selectionTargets(){
return[['playnav-video-play',curSelection_.p,curSelection_.i,curSelection_.v].join('-'),
['playnav-video-grid',curSelection_.p,curSelection_.i,curSelection_.v].join('-'),
['playnav-video-play',curSelection_.p+'-all',curSelection_.i,curSelection_.v].join('-'),
['playnav-video-grid',curSelection_.p+'-all',curSelection_.i,curSelection_.v].join('-')];
}
function selectVideoClass(classFunction){
return function(id){
var element=goog.dom.$(id);
if(element){
classFunction(element,'playnav-item-selected');
}
};
}
function selectVideo(selection){
if(curSelection_){
Iter(selectionTargets()).each(selectVideoClass(_removeclass));
}
curSelection_=selection;
if(curSelection_){
Iter(selectionTargets()).each(selectVideoClass(_addclass));
}
}
function playVideo(playlistNameOrId,videoIndex,videoId,opt_startSecs,opt_postId,opt_isFirstplayVideo){
isWritePlayerPending_=false;
var id=null;
if(!videoIndex&&opt_postId){
var _tmp=goog.dom.$('POST2ID-'+opt_postId);
if(_tmp){
id=_tmp.attributes['name'].value;
}
}
if(!id){
id=[curViewName_,playlistNameOrId,videoIndex,videoId].join('-');
}
if(!isSkipping_){
updateHistory('play',curPlaylistName_,playlistNameOrId,videoIndex,videoId);
}
closePopup();
if(curViewName_=='grid'&&!isSkipping_){
selectView('play');
}
selectVideo({p:playlistNameOrId.replace('-all',''),i:videoIndex,v:videoId,id:id});
curVideoIndex_=videoIndex;
curVideoId_=videoId;
currentPlayState_=PlayState.UNSTARTED;
hideAds();
resizePlayview();
requestPlayback(videoId,opt_isFirstplayVideo);
if(window.groupname){
selectPanel('discussion');
}else{
selectPanel('info');
}
if(videoIndex!=null){
try{
goog.dom.$('playnav-curplaylist-count').innerHTML=goog.dom.$('playnav-playlist-'+playlistNameOrId+'-count').value;
goog.dom.$('playnav-curplaylist-title').innerHTML=goog.dom.$('playnav-playlist-'+playlistNameOrId+'-title').innerHTML;
}catch(e){}
}
if(videoIndex==null){
if(goog.dom.$('playnav-curvideo-controls')){
goog.dom.$('playnav-curvideo-controls').style.visibility='hidden';
}
}else if(curSelection_){
}
}
function hideAds(){
function clearAndUnhide(id){
var el=goog.dom.$(id);
if(el){
el.innerHTML='';
_showdiv(id);
}
}
_hidediv('watch-channel-brand-div');
_hidediv('watch-longform-ad');
clearAndUnhide('ad300x250');
clearAndUnhide('google_companion_ad_div');
clearAndUnhide('instream_google_companion_ad_div');
clearAndUnhide('watch-longform-ad-placeholder');
}
function getNext(id){
var ind=id.lastIndexOf('-');
var ind2=id.lastIndexOf('-',ind-1);
return id.slice(0,ind2+1)+(parseInt(id.slice(ind2+1,ind))+1);
}
function getPrev(id){
var ind=id.lastIndexOf('-');
var ind2=id.lastIndexOf('-',ind-1);
return id.slice(0,ind2+1)+Math.max(parseInt(id.slice(ind2+1,ind))-1,0);
}
function skip(increment){
isSkipping_=true;
var currentIndex=parseInt(curSelection_.i);
var newIndex=currentIndex+increment;
if(newIndex<0)return;
var el=goog.dom.$('playnav-video-play-'+curSelection_.p+'-'+newIndex);
if(!el)return;
var videoId=el.innerHTML;
playVideo(curSelection_.p,newIndex,videoId);
isSkipping_=false;
}
function skipNext(){
skip(1);
}
function skipPrev(){
skip(-1);
}
function playAll(playlistId,firstVideoId){
playVideo(playlistId,0,firstVideoId,0,true);
selectPlaylist('user',playlistId);
}
var currentBottomPopup=null;
var currentPopupArrow=null;
function openBottomPopup(name,opt_params){
if(navigatorNotReady()){
return;
}
var popup=goog.dom.$(name+'-popup');
popup.style.display='';
arrow.style.display='';
goog.dom.$(name+'-popup-inner').innerHTML=goog.dom.$('playnav-spinny-graphic').innerHTML;
var callback=function(html){
goog.dom.$(name+'-popup-inner').innerHTML=html;
window.setTimeout(function(){run_scripts_in_el('playnav-panel-'+name)},0);
};
var params={'video_id':curVideoId_};
if(opt_params){
for(n in opt_params){
params[n]=opt_params[n];
}
}
backend_.call_box_method(boxInfo_,params,'load_popup_'+name,callback);
currentBottomPopup=popup;
}
function closePopup(){
if(currentBottomPopup){
currentBottomPopup.style.display='none';
currentPopupArrow.style.display='none';
var flag_floatie=goog.dom.$('popup_flagging_menu');
if(flag_floatie){
goog.dom.removeNode(flag_floatie);
}
}
}
function searchChannel(elementId){
var el=goog.dom.$(elementId);
var query=el.value;
if(query){
if(arranger_){
arrangerRestoreParams_=arranger_.save(true);
arrangerOpenRequested_='search';
arranger_.destruct(false);
}
invalidateTab('search');
selectPlaylist('search',null,query);
}
}
function clearFirstTime(inp){
if(!inp.__touched){
inp.__stored_value=inp.value;
inp.__stored_color=inp.style.color;
inp.value='';
inp.style.color='#333';
inp.__touched=true;
if(!inp.onblur){
inp.onblur=function(){
if(!inp.value){
inp.value=inp.__stored_value;
inp.style.color=inp.__stored_color;
inp.__touched=false;
}
};
}
}
}
function onPlayerStateChange(newState){
switch(newState){
case PlayState.ENDED:
if(currentPlayState_==PlayState.PLAYING&&isAutoplay_){
currentPlayState_=PlayState.UNSTARTED;
if(curSelection_.p&&curSelection_.p.search(/uploads|favorites|search/)<0){
isAutoskip_=true;
skipNext();
}
}
break;
case PlayState.PLAYING:
currentPlayState_=newState;
break;
}
}
function onPlayerError(){
if(isAutoskip_){
setTimeout(function(){
if(isAutoskip_){
skipNext();
}
},AUTOSKIP_ERROR_TIMEOUT)
}
currentPlayState_=PlayState.UNSTARTED;
}
function toggleFullVideoDescription(state){
var display=state?'block':'none';
var displayNot=state?'none':'block';
goog.dom.$('playnav-curvideo-description-more-holder').style.display=(state?'none':'block');
goog.dom.$('playnav-curvideo-description-less').style.display=(state?'inline':'none');
goog.dom.$('playnav-curvideo-description-container').style.height=state?'auto':'56px';
}
function toggleFullLiveStreamingEventDescription(state){
var display=state?'block':'none';
var displayNot=state?'none':'block';
goog.dom.$('playnav-curlivestream-description-more-holder').style.display=(state?'none':'block');
goog.dom.$('playnav-curlivestream-description-less').style.display=(state?'inline':'none');
goog.dom.$('playnav-curlivestream-description-container').style.height=state?'auto':'56px';
}
function verifyNotRequired(){
ageVerificationRequired_=false;
if(curViewName_=='play'){
goog.dom.$('playnav-player').style.visibility='visible';
goog.dom.$('playnav-player').style.left='0';
}
goog.dom.$('playnav-left-panel').style.display='block';
goog.dom.$('playnav-player-restricted').style.display='none';
}
function verifyAge(id,title,opt_url,opt_message){
ageVerificationRequired_=true;
var nextUrl=encodeURIComponent(document.location.href.toString());
var redirectUrl='';
if(opt_url){
redirectUrl=opt_url.replace('url_placeholder',nextUrl);
redirectUrl=redirectUrl.replace('url_encode2',encodeURIComponent(nextUrl));
}
deletePlayer();
goog.dom.$('playnav-left-panel').style.display='none';
goog.dom.$('playnav-player').style.visibility='hidden';
goog.dom.$('playnav-player').style.left='960px';
goog.dom.$('playnav-restricted-title').innerHTML=title;
if(opt_message){
goog.dom.$('playnav-custom-error-message').innerHTML=opt_message;
}
var overlayDiv=goog.dom.$('playnav-player-restricted');
var textDivs=goog.dom.$$('div','playnav-restricted-msg',overlayDiv);
for(var i=0;i<textDivs.length;i++){
textDivs[i].style.display='none';
}
var anchorDivs=goog.dom.$$('a','playnav-restricted-link',overlayDiv);
for(var i=0;i<anchorDivs.length;i++){
anchorDivs[i].href=redirectUrl;
}
goog.dom.$('playnav-'+id).style.display='block';
overlayDiv.style.display='block';
}
function makeUserAction(fref){
return function(){
isAutoskip_=false;
isAutoplay_=true;
fref.apply(this,arguments);
};
}
function requireDomLoadedDecorator(callback){
return function(){
var args=arguments;
if(!isDomLoaded_){
playnav.onDomLoaded.push(function(){
callback.apply(this,args);
});
}else{
callback.apply(this,args);
}
};
}
function destructArranger(opt_doNotShowConfirmation){
if(arranger_){
return arranger_.destruct(!opt_doNotShowConfirmation);
}
return true;
}
function saveArranger(){
arranger_.save();
}
function cancelArranger(){
arranger_.cancel();
}
function updateArrangerItemCount(count){
arranger_.updateItemCount(count);
}
function arrangerReady(playlistName){
return playlistName==curPlaylistName_&&
curViewName_=='grid'&&
goog.dom.$('playnav-arranger-'+playlistName);
}
function showArranger(playlistName){
if(!arranger_){
arranger_=new Arranger(playlistName,function(){
arranger_=null;
},arrangerRestoreParams_);
}
arrangerOpenRequested_=null;
arrangerRestoreParams_=null;
}
function showArrangerIfRequested(){
if(arrangerOpenRequested_&&arrangerReady(arrangerOpenRequested_)){
showArranger(arrangerOpenRequested_);
}
}
function toggleArranger(playlistName){
if(arranger_){
destructArranger(true);
}else if(arrangerReady(playlistName)){
showArranger(playlistName);
}else{
arrangerOpenRequested_=playlistName;
selectTab(playlistName);
selectView('grid');
}
}
function sort(sortName){
if(arranger_){
arrangerRestoreParams_=arranger_.save(true);
arrangerOpenRequested_=curPlaylistId_;
arranger_.destruct(false);
}
curSortName_=sortName;
invalidateTab(curPlaylistName_);
selectPlaylist(curPlaylistName_);
}
function like(){
goog.dom.classes.remove(goog.dom.$('watch-unlike'),'active');
goog.dom.classes.add(goog.dom.$('watch-like'),'active');
var loggedOut=goog.dom.$('channel-like-logged-out');
if(loggedOut){
goog.dom.classes.remove(loggedOut,'hid');
return;
}
goog.dom.$('watch-actions-area').innerHTML=
goog.dom.$('channel-like-loading').innerHTML;
goog.dom.classes.remove(goog.dom.$('channel-like-result'),'hid');
var form=document.forms['likeForm'];
var options={
'postBody':goog.dom.forms.getFormDataString(form),
'onComplete':function(){
goog.dom.$('watch-actions-area').innerHTML=
goog.dom.$('channel-like-close').innerHTML+
goog.dom.$('watch-actions-area').innerHTML;
goog.dom.classes.remove(goog.dom.$('channel-like-result'),'hid');
},
'update':'watch-actions-area',
'method':'POST'
};
var url=form.action+"?log_action_like_video=1";
yt.net.ajax.sendRequest(url,options);
};
function unlike(){
goog.dom.classes.remove(goog.dom.$('watch-like'),'active');
goog.dom.classes.add(goog.dom.$('watch-unlike'),'active');
var loggedOut=goog.dom.$('channel-like-logged-out');
if(loggedOut){
goog.dom.classes.remove(loggedOut,'hid');
return;
}
goog.dom.$('watch-actions-area').innerHTML=
goog.dom.$('channel-like-loading').innerHTML;
goog.dom.classes.remove(goog.dom.$('channel-like-result'),'hid');
var form=document.forms['unlikeForm'];
var options={
'postBody':goog.dom.forms.getFormDataString(form),
'onComplete':function(){
goog.dom.$('watch-actions-area').innerHTML=
goog.dom.$('channel-like-close').innerHTML+
goog.dom.$('watch-actions-area').innerHTML;
goog.dom.classes.remove(goog.dom.$('channel-like-result'),'hid');
},
'update':'watch-actions-area',
'method':'POST'
};
var url=form.action+"?log_action_unlike_video=1";
yt.net.ajax.sendRequest(url,options);
};
function hideLike(){
goog.dom.classes.add(goog.dom.$('channel-like-result'),'hid');
}
function submitFormDictAjax(formDict,method,callback){
backend_.call_box_method(boxInfo_,formDict,method,callback);
}
function submitFormAjax(form,method,callback){
submitFormDictAjax(form_to_dict(form),method,callback);
}
playnav['getPlayer']=function(){return player_;};
playnav['getPlaylistId']=function(){return curPlaylistId_;};
playnav['setInitialView']=setInitialView;
playnav['setInitialTab']=setInitialTab;
playnav['initDom']=initDom;
playnav['initPlayer']=initPlayer;
playnav['isInitted']=function(){return player_?true:false;};
playnav['invalidateTab']=invalidateTab;
playnav['setBoxInfo']=setBoxInfo;
playnav['selectTab']=requireDomLoadedDecorator(selectTab);
playnav['selectView']=requireDomLoadedDecorator(selectView);
playnav['openBottomPopup']=requireDomLoadedDecorator(openBottomPopup);
playnav['closePopup']=closePopup;
playnav['setVideoId']=setVideoId;
playnav['setPlaylistId']=setPlaylistId;
playnav['searchChannel']=searchChannel;
playnav['goToWatchPage']=goToWatchPage;
playnav['updateScrollbox']=updateScrollbox;
playnav['clearFirstTime']=clearFirstTime;
playnav['resizePlayview']=requireDomLoadedDecorator(resizePlayviewWrapper);
playnav['verifyNotRequired']=requireDomLoadedDecorator(verifyNotRequired);
playnav['verifyAge']=requireDomLoadedDecorator(verifyAge);
playnav['onPlayerStateChange']=onPlayerStateChange;
playnav['onPlayerError']=onPlayerError;
playnav['handleLocationHashUpdate']=handleLocationHashUpdate;
playnav['handlePanelLoaded']=handlePanelLoaded;
playnav['toggleFullVideoDescription']=toggleFullVideoDescription;
playnav['hideCachedPages']=hideCachedPages;
playnav['playVideo']=requireDomLoadedDecorator(playVideo);
playnav['loadPlaylist']=requireDomLoadedDecorator(loadPlaylist);
playnav['selectPlaylist']=requireDomLoadedDecorator(loadPlaylist);
playnav['selectPanel']=requireDomLoadedDecorator(selectPanel);
playnav['selectVideo']=requireDomLoadedDecorator(selectVideo);
playnav['playAll']=playAll;
playnav['skipNext']=makeUserAction(skipNext);
playnav['skipPrev']=makeUserAction(skipPrev);
playnav['sort']=makeUserAction(sort);
playnav['setupScrollableItems']=setupScrollableItems;
playnav['resizeScrollbox']=resizeScrollboxes;
playnav['getBoxInfo']=function(){
return boxInfo_;
};
playnav['getCurPlaylistName']=function(){return playlistNameToTabName(curPlaylistName_);};
playnav['getCurrentScrollboxId']=getCurrentScrollboxId;
playnav['saveArranger']=saveArranger;
playnav['cancelArranger']=cancelArranger;
playnav['updateArrangerItemCount']=updateArrangerItemCount;
playnav['toggleArranger']=toggleArranger;
playnav['handleVideoMetadata']=handleVideoMetadata;
playnav['like']=like;
playnav['unlike']=unlike;
playnav['hideLike']=hideLike;
playnav['submitFormDictAjax']=submitFormDictAjax;
playnav['submitFormAjax']=submitFormAjax;
})();
function removeElementById(id){
var el=goog.dom.$(id);
if(el){
removeElement(el);
}
}
function removeElement(el){
el.parentNode.removeChild(el);
}
window.poppedElements=[];
function removePoppedElements(){
Iter(window.poppedElements).each(function(el){
el.parentNode.removeChild(el);
});
window.poppedElements=[];
}
function popDivToTop(el){
el=goog.dom.$(el);
if(!el.__popped){
poppedElements.push(el);
var pos=ani.getPosition(el);
el.style.position='absolute';
el.style.top=pos.y+'px';
el.style.left=pos.x+'px';
document.body.appendChild(el);
el.__popped=true;
}
}
function onChannelPlayerReady(){
playnav.initPlayer('movie_player',window.defaultPlaylistName);
}
function submitToPlaylist(){
var form=document.forms['addfavsform'];
if(!form.playlist_id.value){
return;
}
if(!goog.dom.$('playlist_comment').__touched){
goog.dom.$('playlist_comment').value='';
}
var successCallback=function(xhr){
playnav.selectPanel('playlists',{'success':true});
};
var errorCallback=function(xhr){
playnav.selectPanel('playlists',{'error':true});
};
if(form.playlist_id.value=='N'){
var z=form.new_playlist_name.value.toLowerCase();
var y=-1;
var x='';
for(var i=0;i<form.playlist_id.options.length;i++){
x=form.playlist_id.options[i].text;
y=x.lastIndexOf('(')-z.length;
y=y<0?2:y;
if((x.slice(0,z.length).toLowerCase()==z)&&(y<2)){
form.playlist_id.selectedIndex=i;
break;
}
}
}
yt.net.ajax.sendRequest(form.action,{
postBody:goog.dom.forms.getFormDataString(form),
onComplete:successCallback,
onException:errorCallback
});
}
function addToPlaylistClose(){
_showdiv('popup_playlist_result');
window.setTimeout(playnav.closePopup,3000);
}
function handleAddToPlaylistsChange(el){
if(el.value=='N'){
goog.dom.$('new_playlist_area').style.display='block';
}else{
goog.dom.$('new_playlist_area').style.display='none';
}
}
function update_featured(input){
goog.dom.$("featured_content").style.visibility='visible';
var feature_option=goog.dom.$("feature_"+input.value);
if(input.checked){
feature_option.style.display="";
feature_option.disabled=false;
}else{
feature_option.style.display="none";
feature_option.disabled=true;
if(feature_option.selected||has_selected_child(feature_option)){
var select=feature_option.parentNode;
if(select.tagName.toLowerCase()!="select")select=select.parentNode;
if(!pick_first_option(select)){
goog.dom.$("featured_content").style.visibility='hidden';
}
}
}
if(input.value=='playlists'){
goog.dom.$("arrange_playlists").style.display=input.checked?'':"none";
}
var playlists_available=0;
var feature_playlists=goog.dom.$('feature_playlists');
feature_playlists.style.display='none';
feature_playlists.disabled=true;
var all_playlists_option=null;
for(var i=1;i<feature_playlists.childNodes.length;i++){
if(feature_playlists.childNodes[i].value=="playlists"){
all_playlists_option=feature_playlists.childNodes[i];
}else if(feature_playlists.childNodes[i].style&&feature_playlists.childNodes[i].style.display==''){
playlists_available++;
}
}
if(playlists_available>0){
feature_playlists.style.display='';
feature_playlists.disabled=false;
if(all_playlists_option){
all_playlists_option.style.display=(playlists_available>1)?'':'none';
all_playlists_option.disabled=(playlists_available<2);
}
}
var num_displayed=0;
if(goog.dom.$("display_uploads").checked)num_displayed++;
if(goog.dom.$("display_favorites").checked)num_displayed++;
if(goog.dom.$("display_playlists").checked&&playlists_available>0)num_displayed++;
if(num_displayed>1){
goog.dom.$('display_all').disabled=false;
_removeclass(goog.dom.$('display_all_container'),'opacity50');
}else{
goog.dom.$('display_all').disabled=true;
_addclass(goog.dom.$('display_all_container'),'opacity50');
}
}
window.update_featured=Thread.bind(update_featured);
function pick_first_option(select){
for(var i=0;i<select.options.length;i++){
var option=select.options[i];
if(option.style.display==''&&option.parentNode.style.display==''){
option.selected=true;
return true;
}
}
return false;
}
function has_selected_child(optgroup){
if(optgroup.tagName.toLowerCase()!="optgroup"){
return false;
}
for(var i=0;i<optgroup.childNodes.length;i++){
if(optgroup.childNodes[i].selected){
return true;
}
}
return false;
}
function handleAdLoaded(){
playnav.resizePlayview();
}
yt.www.watch.ads.handleAdLoaded=handleAdLoaded;
function checkCurrentVideo(){
}
yt.www.watch.player.checkCurrentVideo=checkCurrentVideo;
window.checkCurrentVideo=checkCurrentVideo;
function checkAll(formObj,is_checked)
{
for(var i=0;i<formObj.length;i++){
fldObj=formObj.elements[i];
if(fldObj.type=='checkbox'){
fldObj.checked=is_checked;
}
}
}
is_checked_all=false;
function toggleCheckAll(formObj){
is_checked_all=!is_checked_all;
checkAll(formObj,is_checked_all);
}
function resetCheckAllValue(formObj,is_checked){
if(!is_checked){
main_checkbox=document.getElementById("checkall_checkbox");
if(main_checkbox){
main_checkbox.checked=false;
}
is_checked_all=false;
}
}
function hasStr(src,sample){
return src.indexOf(sample)>=0
}
function addIfNotInStr(src,sample)
{
if(hasStr(src,sample))
{
return src;
}
else
{
return src+sample;
}
}
function removeOccurances(src,sample)
{
splitstring=src.split(sample);
tstring="";
for(i=0;i<splitstring.length;i++)
{
tstring+=splitstring[i];
}
return tstring;
}
function ghettoCheckAll(oldStr,formObj,is_checked)
{
for(var i=0;i<formObj.length;i++)
{
fldObj=formObj.elements[i];
if(fldObj.type=='checkbox'&&fldObj.checked!=is_checked)
{
fldObj.checked=is_checked;
if(is_checked)
{
oldStr=addIfNotInStr(oldStr,fldObj.name+',');
}
else
{
oldStr=removeOccurances(oldStr,fldObj.name+',');
}
}
}
return oldStr
}
function confirmSubmit(formObj,message){
var agree=confirm(message);
if(agree)
return true;
else
return false;
}
