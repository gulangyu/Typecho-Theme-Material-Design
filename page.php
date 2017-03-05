<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
		<main class="content">
			<div class="content-header ui-content-header">
				<div class="container">
					<h1 class="content-heading">
						<?php $this->title() ?>
					</h1>
				</div>
			</div>
			<div class="container">
				<section class="content-inner margin-top-no">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card margin-bottom-no">
								<div class="card-main">
									<div class="card-inner">
										<div class="card-inner">
											<?php $this->content(); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
							<?php include('comments.php'); ?>
						<div class="col-lg-12 col-md-12">
							<div class="card margin-bottom-no">
								<div class="card-main">
									<div class="card-inner">
										<div class="card-inner">
											<p class="card-heading">
												许可协议
											</p>
											<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
												<img alt="知识共享许可协议" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png"
												/>
											</a>
											本站内容除特殊说明外均采用
											<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
												知识共享署名-非商业性使用-相同方式共享 4.0 国际许可协议
											</a>
											进行许可。
										</div>
									</div>
								</div>
							</div>
						</div>
				</section>
				</div>
			</div>
		</main>
<?php $this->need('footer.php'); ?>