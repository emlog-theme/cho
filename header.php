<?php
/*
Template Name:CHO
Description:默认模板，简洁优雅
Version:1.0
Author:Brian
Author Url:http://www.ihxx.cc
Sidebar Amount:1
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $site_title; ?></title>
<meta name="keywords" content="<?php echo $site_key; ?>" />
<meta name="description" content="<?php echo $site_description; ?>" />
<meta name="generator" content="emlog" />
<link href="<?php echo TEMPLATE_URL; ?>css/basic.css" type="text/css" rel="stylesheet">
<link href="<?php echo TEMPLATE_URL; ?>css/pure-custom.css" type="text/css" rel="stylesheet">
<link href="<?php echo TEMPLATE_URL; ?>css/style.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>js/jquery.js"></script>
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
<!--[if IE 6]>
<script src="<?php echo TEMPLATE_URL; ?>js/iefix.js" type="text/javascript"></script>
<![endif]-->
<?php doAction('index_head'); ?>
</head>
<body>
    <div id="header">
	<div class="body_container">
		<div class="header-inner clearfix">
			<div class="site-name">
				<a href="<?php echo BLOG_URL; ?>">
				<div id="logo">
					longboard
				</div>
				</a>
				<h1 class="title">longboard</h1>
			</div>
			<div id="nav-menu" class="hidden-if-min">
				<div class="bitcron_nav_container">
					<div class="bitcron_nav">
						<div class="mixed_site_nav_wrap site_nav_wrap">
							<ul class="mixed_site_nav site_nav sm sm-base">
								<?php blog_navi();?>
							</ul>
							<div class="clear clear_nav_inline_end">
							</div>
						</div>
					</div>
					<div class="clear clear_nav_end">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>