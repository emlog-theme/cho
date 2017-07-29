<?php 
/**
 * 微语部分
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<style>body.theme-dark .cbp_tmtimeline::before { background: RGBA(255,255,255,.06)}ul.cbp_tmtimeline { padding: 0}div class.cdp_tmlabel>li .cbp_tmlabel { margin-bottom: 0}.cbp_tmtimeline { margin: 30px 0 0 0; padding: 0; list-style: none; position: relative}.cbp_tmtimeline:before { content: ''; position: absolute; top: 0; bottom: 0; width: 4px; background: RGBA(0,0,0,.02); left: 80px; margin-left: 10px}.cbp_tmtimeline>li .cbp_tmtime { display: block; max-width: 70px; position: absolute}.cbp_tmtimeline>li .cbp_tmtime span { display: block; text-align: right}.cbp_tmtimeline>li .cbp_tmtime span:first-child { font-size: .9em; color: #bdd0db}.cbp_tmtimeline>li .cbp_tmtime span:last-child { font-size: 1.2em; color: #9BCD9B}.cbp_tmtimeline>li:nth-child(odd) .cbp_tmtime span:last-child { color: RGBA(255,125,73,.75)}div.cbp_tmlabel>p { margin-bottom: 0}.cbp_tmtimeline>li .cbp_tmlabel { margin: 0 0 45px 120px; background: #9BCD9B; color: #fff; padding: 1.5em; font-weight: 300; line-height: 1.4; position: relative; border-radius: 5px; transition: all .3s ease 0s; box-shadow: 0 1px 2px rgba(0,0,0,.15); cursor: pointer}.cbp_tmlabel:hover { transform: translateY(-3px); z-index: 1; -webkit-box-shadow: 0 15px 32px rgba(0,0,0,.15)!important}.cbp_tmtimeline>li:nth-child(odd) .cbp_tmlabel { background: RGBA(255,125,73,.75)}.cbp_tmtimeline>li .cbp_tmlabel:after { right: 100%; border: solid transparent; content: " "; height: 0; width: 0; position: absolute; pointer-events: none; border-right-color: #9BCD9B; border-width: 10px; top: 4px}.cbp_tmtimeline>li:nth-child(odd) .cbp_tmlabel:after { border-right-color: RGBA(255,125,73,.75)}@media screen and (max-width:65.375em) { .cbp_tmtimeline>li .cbp_tmtime span:last-child { font-size: 1.2em }}@media screen and (max-width:47.2em) { .cbp_tmtimeline:before { display: none } .cbp_tmtimeline>li .cbp_tmtime { width: 100%; position: relative; padding: 0 0 20px 0 } .cbp_tmtimeline>li .cbp_tmtime span { text-align: left } .cbp_tmtimeline>li .cbp_tmlabel { margin: 0 0 30px 0; padding: 1em; font-weight: 400; font-size: 95% } .cbp_tmtimeline>li .cbp_tmlabel:after { right: auto; left: 20px; border-right-color: transparent; border-bottom-color: #9BCD9B; top: -20px } .cbp_tmtimeline>li:nth-child(odd) .cbp_tmlabel:after { border-right-color: transparent; border-bottom-color: RGBA(255,125,73,.75) } .cbp_tmtimeline>li .cbp_tmicon { position: relative; float: right; left: auto; margin: -55px 5px 0 0 }}#cont{ margin-top: 10px;}.header{background:#fafafa url() center;background-size:cover;}.header::before{position:absolute;top:0;right:0;bottom:0;left:0;background-image:linear-gradient(to top,#fff,rgba(0,180,255,.1));content:''} }</style>
		<div class="body_container">
			<div class="pure-g">
				<div class="hidden-if-min pure-u-sm-1-16 pure-u-md-1-6">
					<div class="post-aside">
					</div>
				</div>
				<div class="pure-u-1 pure-u-sm-7-8 pure-u-md-2-3 post-body">
					<div class="post">
						<div class="post-content">
      <ul class="cbp_tmtimeline">
            <?php 
    foreach($tws as $val):
    $author = $user_cache[$val['author']]['name'];
    $avatar = empty($user_cache[$val['author']]['avatar']) ? 
                BLOG_URL . 'admin/views/images/avatar.jpg' : 
                BLOG_URL . $user_cache[$val['author']]['avatar'];
    $tid = (int)$val['id'];
    $img = empty($val['img']) ? "" : '<a title="查看图片" href="'.BLOG_URL.str_replace('thum-', '', $val['img']).'" target="_blank"><img style="border: 1px solid #EFEFEF;" src="'.BLOG_URL.$val['img'].'"/></a>';
    ?>
            <li>
			  <time class="cbp_tmtime"><span><?php echo $val['date'];?></span></time>
			  <div class="cbp_tmlabel"><?php echo $val['t'].'<br/>'.$img;?>
              </div>
            </li>
            <?php endforeach;?>
        </ul>
										<div class="page-navi">
			<?php echo $pageurl;?>
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