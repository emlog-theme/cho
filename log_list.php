<?php 
/**
 * 站点首页模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="layout">
	<div class="body_container">
		<div class="pure-g">
			<div class="post-cols">
				<div id="list_container">
					<?php sl_sortlog();?>					
					<?php foreach($logs as $value): ?>
					<?php $imgsrc = preg_match_all("|<img[^>]+src=\"([^>\"]+)\"?[^>]*>|is", $value['content'], $img);$imgsrc = !empty($img[1]) ? $img[1][0] : ''; ?>
					<?php if($imgsrc): ?>
					<article class="post-box pure-u-1 pure-u-sm-1-2 pure-u-md-1-3">
					<div class="post">
						<a href="<?php echo $value['log_url']; ?>" rel="nofollow" class="post-cover-box">
						<div style="background-image:url(<?php echo $imgsrc; ?>)" class="post-cover">
						</div>
						</a>
						<div class="post-text">
							<h2 class="post-title"><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a>
							</h2>
							<div class="post-content">
								<div class="p_part">
									<p>
										<?php echo subString(strip_tags($value['content']),0,50); ?>
									</p>
								</div>
							</div>
							<div class="post-meta">
								<?php echo gmdate('Y年n月j日', $value['date']); ?>
							</div>
						</div>
					</div>
					</article>
				<?php else: ?>
								<article class="post-box pure-u-1 pure-u-sm-1-2 pure-u-md-1-3">
					<div class="post">
						<div class="post-text post-text-full">
							<h2 class="post-title"><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a>
							</h2>
							<div class="post-content">
								<div class="p_part">
									<p>
										<?php echo subString(strip_tags($value['content']),0,230); ?>
									</p>
								</div>
							</div>
							<div class="post-meta">
								<?php echo gmdate('Y年n月j日', $value['date']); ?>
							</div>
						</div>
					</div>
					</article>
					<?php endif; ?>
				<?php endforeach; ?>
				</div>
			</div>
			<div class="pure-u-1-1">
				<div class="paginator pager pagination">
					<div class="paginator_container pagination_container">
						<?php echo $page_url;?>
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