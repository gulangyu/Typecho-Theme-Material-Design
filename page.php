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
				</section>
				</div>
			</div>
		</main>
<?php $this->need('footer.php'); ?>
