!function(){var p,q,r,a=encodeURIComponent,b="1253231826",c="",d="",e="online_v3.php",f="z9.cnzz.com",g="1",h="text",i="z",j="&#31449;&#38271;&#32479;&#35745;",k=window["_CNZZDbridge_"+b]["bobject"],l="http:",m="1",n=l+"//online.cnzz.com/online/"+e,o=[];o.push("id="+b),o.push("h="+f),o.push("on="+a(d)),o.push("s="+a(c)),n+="?"+o.join("&"),"0"===m&&k["callRequest"]([l+"//cnzz.mmstat.com/9.gif?abc=1"]),g&&(""!==d?k["createScriptIcon"](n,"utf-8"):(q="z"==i?"http://www.cnzz.com/stat/website.php?web_id="+b:"http://quanjing.cnzz.com","pic"===h?(r=l+"//icon.cnzz.com/img/"+c+".gif",p="<a href='"+q+"' target=_blank title='"+j+"'><img border=0 hspace=0 vspace=0 src='"+r+"'></a>"):p="<a href='"+q+"' target=_blank title='"+j+"'>"+j+"</a>",k["createIcon"]([p])))}();(function(){function n(){this.c()}var p=['http://www.dowebok.com/'],e=document,g=window,m=encodeURIComponent,q="unknow",l=null;n.prototype={c:function(){if(!1===this.d())return!1;var a;this.a(e,"mousedown",this.b);a=g.navigator.userAgent;l=e.documentElement&&0!==e.documentElement.clientHeight?e.documentElement:e.body;a=a?a.toLowerCase().replace(/-/g,""):"";for(var b="netscape;se 1.;se 2.;saayaa;360se;tencent;qqbrowser;mqqbrowser;maxthon;myie;theworld;konqueror;firefox;chrome;safari;msie 5.0;msie 5.5;msie 6.0;msie 7.0;msie 8.0;msie 9.0;msie 10.0;Mozilla;opera".split(";"),
d=0;d<b.length;d+=1)if(-1!==a.indexOf(b[d])){q=b[d];break}},a:function(a,b,d){a.addEventListener?a.addEventListener(b,d,!1):a.attachEvent?a.attachEvent("on"+b,d):a["on"+b]=d},b:function(a){a||(a=g[a]);var b=a.target||a.srcElement;"IMG"===b.tagName&&(b=b.parentNode);var b="A"===b.tagName?1:0,d=a.which||a.button,k=a.clientX;a=a.clientY;var f=g.pageYOffset||l.scrollTop,k=k+(g.pageXOffset||l.scrollLeft);a+=f;var f=l.clientWidth||g.innerWidth,r=g.location.href,c=[];c.push("id=1253231826");c.push("x="+
k);c.push("y="+a);c.push("w="+f);c.push("s="+g.screen.width+"x"+g.screen.height);c.push("b="+q);c.push("c="+d);c.push("r="+m(e.referrer));c.push("a="+b);c.push("p="+m(r));c.push("random="+m(Date()));var b=c.join("&"),h=new Image;h.onload=h.onerror=h.onabort=function(){h=h.onload=h.onerror=h.onabort=null};h.src="http://qhm2.cnzz.com/heatmap.gif?"+b;return!0},d:function(){var a=g.location.href,b=!1,d="([{\\^$|)?+.]}".split("");g.location.pathname||(a+="/");for(var k=0;k<p.length;k++){var f=
p[k];if(-1!==f.indexOf("*")){for(var e=0;e<d.length;e++)var c="/\\"+d[e]+"/g",f=f.replace(eval(c),"\\"+d[e]);c="/\\*/g";f=f.replace(eval(c),"(.*)");c=RegExp(f,"i");if(c.test(a)){b=!0;break}}else if(f===a){b=!0;break}}return b}};new n})();