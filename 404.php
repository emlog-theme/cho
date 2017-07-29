<?php 
/**
 * 自定义404页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>错误提示-页面未找到</title>
<body>
<link href="<?php echo TEMPLATE_URL; ?>css/error.css" rel="stylesheet" type="text/css">
<div class="figure">
	<img src="<?php echo TEMPLATE_URL; ?>images/psychobox.png" alt="Error: 4xx">
</div>
<div id="errorbox">
	<div class="not-found"> 
	<h1>Error (4xx)</h1> We can't find the page you're looking for. 
		<div class="not-found--links"> Here are a few links that may be helpful: 
			<ul> 
				<li><a href="<?php echo BLOG_URL; ?>">Home</a></li>
				<li>额。。。。还有什么呢?要不你告诉我什么东西没找到，主页有联系方式</li>
			</ul> 
		</div>
	</div>
	<style type="text/css">
		object,embed{  
		-webkit-animation-duration:.001s;
		-webkit-animation-name:playerInserted;
		-ms-animation-duration:.001s;
		-ms-animation-name:playerInserted;
		-o-animation-duration:.001s;
		-o-animation-name:playerInserted;
		animation-duration:.001s;
		animation-name:playerInserted;
		}        
		@-webkit-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}
		@-ms-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}
		@-o-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}
		@keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}
	</style>
</body>
</html>