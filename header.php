<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="UTF-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width"
		name="viewport">
		<meta name="theme-color" content="#3f51b5">
		<title>
		<?php $this->archiveTitle(array(
					'category'  =>  _t('分类 %s 下的文章'),
					'search'    =>  _t('包含关键字 %s 的文章'),
					'tag'       =>  _t('标签 %s 下的文章'),
					'author'    =>  _t('%s 发布的文章')
				), '', ' - '); ?>
		<?php $this->options->title(); ?>
		</title>
		<?php $this->header(); ?>
		<!--
		页面标题
		-->
		<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/base.min.css'); ?>" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/project.min.css'); ?>" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body class="page-brand">
		<header class="header header-transparent header-waterfall ui-header">
			<ul class="nav nav-list pull-left">
				<li>
					<a data-toggle="menu" href="#ui_menu">
						<span class="icon icon-lg">
							menu
						</span>
					</a>
				</li>
			</ul>
			<ul class="nav nav-list pull-right">
				<li class="dropdown margin-right">
					<a class="dropdown-toggle padding-left-no padding-right-no" data-toggle="dropdown">
						<span class="access-hide">
							头像
						</span>
						<span class="avatar avatar-sm">
							<img src="img/logo.png">
						</span>
					</a>
					<ul class="dropdown-menu dropdown-menu-right">
						<li>
							<a class="padding-right-lg waves-attach" href="#">
								<span class="icon icon-lg margin-right">
									security
								</span>
								后台
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</header>
		<nav aria-hidden="true" class="menu menu-left nav-drawer nav-drawer-md"
		id="ui_menu" tabindex="-1">
			<div class="menu-scroll">
				<div class="menu-content">
					<a class="menu-logo" href="#menu">
						<i class="icon icon-lg">
							menu
						</i>
						&nbsp;菜单
					</a>
					<ul class="nav">
						<li>
							<a href="<?php $this->options->siteUrl(); ?>#home">
								<i class="icon icon-lg">
									home
								</i>
								&nbsp;首页
							</a>
						</li>
						<?php $this->widget('Widget_Contents_Page_List')
						->parse('
						<li>
							<a href="{permalink}">
								<i class="icon icon-lg">
									description
								</i>
								&nbsp;{title}
							</a>
						</li>
						');?>
						<form method="post" action="" class="form-group form-group-label">
							<label class="floating-label" for="oldpwd">
								搜索一下
							</label>
							<input class="form-control" id="author" type="text" name="s" size="20">
						</form>
					</ul>
				</div>
			</div>
		</nav>