<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
<div class="col-lg-6 col-md-6">
<div class="card margin-bottom-no">
<div class="card-main">
<div class="card-inner">
<div class="card-inner">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
  <p class="card-heading">
	<?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></p>
    <?php $comments->listComments(); ?>
    <?php $comments->pageNav('<span class="icon">chevron left</span>前一页', '后一页<span class="icon">chevron right</span>',3); ?>
    <?php endif; ?>
</div>
</div>
</div>
</div>
</div>
    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
<div class="col-lg-6 col-md-6">
<div class="card margin-bottom-no">
	<div class="card-main">
		<div class="card-inner">
			<div class="card-inner">
				<p class="card-heading" id="response"><?php _e('添加新评论'); ?></p>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
			<div class="form-group form-group-label">
                <label class="floating-label" for="author" class="required"><?php _e('称呼'); ?></label>
    			<input type="text" name="author" id="author" class="form-control" value="<?php $this->remember('author'); ?>" required />
    		</div>
			<div class="form-group form-group-label">
                <label class="floating-label" for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('Email'); ?></label>
    			<input type="email" name="mail" id="mail" class="form-control" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    		</div>
			<div class="form-group form-group-label">
                <label class="floating-label" for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('网站'); ?></label>
    			<input type="url" name="url" id="url" class="form-control" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</div>
            <?php endif; ?>
    		<div class="form-group form-group-label">
                <label class="floating-label" for="textarea" class="required"><?php _e('内容'); ?></label>
                <textarea rows="8" cols="50" name="text" id="textarea" class="form-control" required ><?php $this->remember('text'); ?></textarea>
            </div>
    		<p>
			<button class="btn btn-flat waves-attach" type="submit">
				<span class="icon">
					check
				</span>
				&nbsp;<?php _e('提交评论'); ?>
			</button>
            </p>
    	</form>
		</div>
    </div>
	</div>
	</div>
	</div>
	</div>
    <?php else: ?>
<div class="col-lg-12 col-md-12">
<div class="card margin-bottom-no">
	<div class="card-main">
		<div class="card-inner">
			<div class="card-inner">
				<p class="card-heading" id="response"><?php _e('评论已关闭'); ?></p>
    </div>
	</div>
	</div>
	</div>
	</div>
    <?php endif; ?>
</div>
