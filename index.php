<?php
/**
 * 这是一款Material Design风格主题，你可以访问<a href="http://ccizm.com">芝麻的小站</a>获得和提交更多关于此皮肤的信息与问题
 * 
 * @package cmd Theme 
 * @author ccizm
 * @version 0.1.2
 * @link http://ccizm.com
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 		<main class="content">
			<div class="content-header ui-content-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-lg-push-0 col-sm-12 col-sm-push-0">
							<h1 class="content-heading">
								<?php $this->options->title() ?>
							</h1>
						</div>
					</div>
				</div>
			</div>
          <!--我最会英语了！！！！！！！！！！！！！--->
			<div class="container">
				<section class="content-inner margin-top-no">
					<div class="col-lg-12 col-sm-12">
						<div class="card">
							<div class="card-main">
								<div class="card-inner">
									<p>
										<?php $this->options->description() ?>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-sm-12">
						<div class="card card-brand-accent">
							<div class="card-main">
								<div class="card-action">
									<div class="card-action-btn pull-left">
										<ul>
					<?php if ($this->options->Bulletin): ?><p><?php $this->options->Bulletin() ?></p><?php endif; ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
                  <?php while($this->next()): ?>
					<div class="col-lg-12 col-sm-12">
						<div class="card card-brand">
							<div class="card-main">
								<div class="card-action">
									<div class="card-action-btn pull-left">
										<a class="btn btn-flat waves-attach waves-light waves-effect" href="<?php $this->permalink() ?>">
											<span class="icon">
												send
											</span>
											&nbsp;<?php $this->title() ?>
										</a>
									</div>
								</div>
								<div class="card-action">
									<div class="card-action-btn pull-left">
										<a class="btn btn-flat waves-attach waves-light waves-effect" href="<?php $this->author->permalink(); ?>">
											<span class="icon">
												send
											</span>
											&nbsp;<?php $this->author(); ?>
										</a>
										<a class="btn btn-flat waves-attach waves-light waves-effect" href="#date">
											<span class="icon">
												send
											</span>
											&nbsp;<?php $this->date('Y m d'); ?>
										</a>
										<a class="btn btn-flat waves-attach waves-light waves-effect" href="#category">
											<span class="icon">
												send
											</span>
											&nbsp;<?php $this->category(','); ?>
										</a>
									</div>
								</div>
								<div class="card-inner">
									<p>
										<?php $this->content('Continue Reading...'); ?>
									</p>
								</div>
							</div>
						</div>
					</div>
                  <?php endwhile; ?>
                  <center>
										<?php $this->pageNav('&laquo; ', ' &raquo;'); ?>
                  </center>
				</section>
			</div>
		</main>
 <?php $this->need('footer.php'); ?>
