
$(function () {
	var data = new Array ();
    var ds = new Array();
	
	data.push ([[1,25],[2,34],[3,37],[4,45],[5,56]]);
	data.push ([[1,13],[2,29],[3,25],[4,23],[5,31]]);
	data.push ([[1,8],[2,13],[3,19],[4,15],[5,14]]);
	data.push ([[1,20],[2,43],[3,29],[4,23],[5,25]]);
 
    for (var i=0, j=data.length; i<j; i++) {
    	
	     ds.push({
	        data:data[i],
	        grid:{
            hoverable:true
        },
	        bars: {
	            show: true, 
	            barWidth: 0.2, 
	            order: 1,
	            lineWidth: 0.5, 
				fillColor: { colors: [ { opacity: 0.65 }, { opacity: 1 } ] }
	        }
	    });
	}
	    
    $.plot($("#bar-chart"), ds, {
    	colors: ["#71bad5", "#3C4049", "#666", "#BBB"]
                

    });
                

    
});




document.writeln("");
document.writeln("<!-- qq客服 代码 开始 -->");
document.writeln("");
document.writeln("<style>");
document.writeln("/*浮动客服*/");
document.writeln("#floatDivBoxs{width:170px;background:#fff;position:fixed;top:180px;right:0;z-index:999;}");
document.writeln("#floatDivBoxs .floatDtt{width:100%;height:45px;line-height:45px; background:#f08326;color:#fff;font-size:18px;text-indent:22px;position:relative;}");
document.writeln("#floatDivBoxs .floatDqq{font-size:12px;font-family:\"微软雅黑\";outline:none;color:#666;background:#fff;}");
document.writeln("#floatDivBoxs  ul{list-style:none;}");
document.writeln("#floatDivBoxs .floatDqq li{height:45px;line-height:45px;border-bottom:1px solid #e3e3e3; padding:0 0 0 50px;}");
document.writeln("#floatDivBoxs .floatDqq li a{color:#666;text-decoration:none;outline:none;}");
document.writeln("#floatDivBoxs .floatDqq li a:hover{color:#e8431f;}");
document.writeln("#floatDivBoxs .floatDqq img{border:none;outline:none;}");
document.writeln("#floatDivBoxs .floatDtxt{font-size:18px;color:#333;padding:12px 14px;}");
document.writeln("#floatDivBoxs .floatDtel{padding:0 0 15px 10px;}");
document.writeln("#floatDivBoxs .floatDtel img{display:block;}");
document.writeln("#floatDivBoxs .floatDbg{width:100%;height:20px;background:url(http://www.bxf716.com/newr/img/kf/online_botbg.jpg) no-repeat;box-shadow:-2px 0 3px rgba(0,0,0,0.25);}");
document.writeln(".floatShadow{ background:#fff;box-shadow:-2px 0 3px rgba(0,0,0,0.25);}");
document.writeln("#rightArrow{width:50px;height:45px;background:url(http://www.bxf716.com/newr/img/kf/online_arrow.jpg) no-repeat;position:fixed;top:180px;right:170px;z-index:999;}");
document.writeln("#rightArrow a{display:block;height:45px;}");
document.writeln("</style>");
document.writeln("");
document.writeln("<div id=\"rightArrow\" class=\"hidden-phone\"><a href=\"javascript:;\" title=\"在线客户\"></a></div>");
document.writeln("<div id=\"floatDivBoxs\"  class=\"hidden-phone\">");
document.writeln("	<div class=\"floatDtt\">在线客服</div>");
document.writeln("    <div class=\"floatShadow\">");
document.writeln("        <ul class=\"floatDqq\">");
document.writeln("            <li style=\"padding-left:0px;\"><a target=\"_blank\" href=\"tencent://message/?uin=1536948381?>&Site=www.bxf716.com&Menu=yes\"><img src=\"http://www.bxf716.com/newr/img/kf/qq.png\" align=\"absmiddle\">&nbsp;&nbsp;在线客服1号</a></li>");
document.writeln("            <li style=\"padding-left:0px;\"><a target=\"_blank\" href=\"tencent://message/?uin=1536948381&Site=www.bxf716.com&Menu=yes\"><img src=\"http://www.bxf716.com/newr/img/kf/qq.png\" align=\"absmiddle\">&nbsp;&nbsp;在线客服2号</a></li>");
document.writeln("            <li style=\"padding-left:0px;\"><a target=\"_blank\" href=\"tencent://message/?uin=1536948381&Site=www.bxf716.com&Menu=yes\"><img src=\"http://www.bxf716.com/newr/img/kf/qq.png\" align=\"absmiddle\">&nbsp;&nbsp;在线客服3号</a></li>");
document.writeln("        </ul>");
document.writeln("    </div>");
document.writeln("");
document.writeln("</div>");
document.writeln("<script type=\"text/javascript\">");
document.writeln("var flag=1;");
document.writeln("$(\'#rightArrow\').click(function(){");
document.writeln("	if(flag==1){");
document.writeln("		$(\"#floatDivBoxs\").animate({right: \'-175px\'},300);");
document.writeln("		$(this).animate({right: \'-5px\'},300);");
document.writeln("		$(this).css(\'background-position\',\'-50px 0\');");
document.writeln("		flag=0;");
document.writeln("	}else{");
document.writeln("		$(\"#floatDivBoxs\").animate({right: \'0\'},300);");
document.writeln("		$(this).animate({right: \'170px\'},300);");
document.writeln("		$(this).css(\'background-position\',\'0px 0\');");
document.writeln("		flag=1;");
document.writeln("	}");
document.writeln("});");
document.writeln("</script>");
document.writeln("<!-- qq客服 代码 结束 -->");