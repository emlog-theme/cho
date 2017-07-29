<?php 
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
	<div id="layout">
	<div style="background:#f5f5f5 url(<?php echo getpostimagetop($logid); ?>) center;background-size:cover;filter:blur(10px);-webkit-filter:blur(5px);-moz-filter:blur(10px);-ms-filter:blur(10px);-o-filter:blur(10px);" class="neck-cover">
	</div>
<style>#nav-menu .site_nav li a{color:#fff!important}#logo{color:#ccc!important}#logo:hover{color:#f5f5f5!important}#header .site-name .site-avatar{border-color:#ccc}.post-lady{margin-top:0!important}.post-page .post-title-position-box .post-header-title{color:#222!important}</style>
	<div class="post-layout">
		<div class="body_container">
			<div class="pure-g">
				<div class="hidden-if-min pure-u-sm-1-16 pure-u-md-1-6">
					<div class="post-aside">
					</div>
				</div>
				<div class="pure-u-1 pure-u-sm-7-8 pure-u-md-2-3 post-body">
					<div class="post">
						<div class="post-title-position-box">
							<h1 class="post-header-title"><?php echo $log_title; ?></h1>
						</div>
						<div class="post-content">
                         <?php echo $log_content; ?>
							</div>		
								<div class="post-content">	
									<div class="section comments">
<div class="container">
	<h3 id="comments"><?php echo $comnum; ?>条回应：“<?php echo $log_title; ?>”	</h3>
	<?php blog_comments($comments); ?>
	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
</div>
</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<?php
 include View::getView('footer');
?>