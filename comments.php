    <?php $this->comments()->to($comments);?>
				<?php if ($comments->have()): ?>
						<div class="col-lg-6 col-md-6">
							<div class="card margin-bottom-no">
								<div class="card-main">
									<div class="card-inner">
										<div class="card-inner">
											<p class="card-heading">
												文章评论
											</p>
											评论
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="card margin-bottom-no">
								<div class="card-main">
									<div class="card-inner">
										<div class="card-inner">
											<p class="card-heading">
												添加新评论
											</p>
											<div class="form-group form-group-label">
												<label class="floating-label" for="oldpwd">
													称呼
												</label>
												<input class="form-control" id="author" type="text">
											</div>
											<div class="form-group form-group-label">
												<label class="floating-label" for="pwd">
													邮箱
												</label>
												<input class="form-control" id="mail" type="text">
											</div>
											<div class="form-group form-group-label">
												<label class="floating-label"  for="url"<?php if ($this->options->commentsRequireURL): ?>>
													<?php endif;?>><?php _e('网站');?>
												</label>
												<input class="form-control" id="url" type="text">
											</div>
											<div class="form-group form-group-label">
												<label class="floating-label" for="repwd">
													内容
												</label>
												<textarea class="form-control" id="textarea" type="text">
												</textarea>
											</div>
										</div>
										<div class="card-action">
											<div class="card-action-btn pull-left">
												<button class="btn btn-flat waves-attach" id="pwd-update">
													<span class="icon">
														check
													</span>
													&nbsp;提交
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
			    <?php else: ?>
    <?php endif;?>