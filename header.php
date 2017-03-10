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
      	<link href="<?php if ($this->options->Myico): ?><?php $this->options->Myico() ?><?php endif; ?>" rel="shortcut icon" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <style>
#comments{padding-top:15px;}.comment-list,.comment-list ol{list-style:none;margin:0;padding:0;}.comment-list li{padding:14px;margin-top:10px;border:1px solid #EEE;}.comment-list li.comment-level-odd{background:#F6F6F3;}.comment-list li.comment-level-even{background:#FFF;}.comment-list li.comment-by-author{background:#FFF9E8;}.comment-list li .comment-reply{text-align:right;font-size:.92857em;}.comment-meta a{color:#999;font-size:.92857em;}.comment-author{display:block;margin-bottom:3px;color:#444;}.comment-author .avatar{float:left;margin-right:10px;}.comment-author cite{font-weight:bold;font-style:normal;}.comment-list .respond{margin-top:15px;border-top:1px solid #EEE;}.respond .cancel-comment-reply{float:right;margin-top:15px;font-size:.92857em;}#comment-form label{display:block;margin-bottom:.5em;font-weight:bold;}#comment-form .required:after{content:" *";color:#C00;}#secondary{padding-top:15px;word-wrap:break-word;}.widget{margin-bottom:30px;}.widget-list{list-style:none;padding:0;}.widget-list li{margin:5px 0;line-height:1.6;}.widget-list li ul{margin-left:15px;}#footer{padding:3em 0;line-height:1.5;text-align:center;color:#999;}.error-page{margin-top:100px;margin-bottom:100px;}.post-content,.comment-content{line-height:1.5;word-wrap:break-word;}.post-content h2,.comment-content h2{font-size:1.28571em;}.post-content img,.comment-content img,.post-content video,.comment-content video{max-width:100%;}.post-content a img,.comment-content a img{background:#FFF;position:relative;bottom:-4px;}.post-content hr,.comment-content hr{margin:2em auto;width:100px;border:1px solid #E9E9E9;border-width:2px 0 0 0;}
      </style>
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
							<img src="<?php $this->options->themeUrl('<?php if ($this->options->Myhead): ?><?php $this->options->Myhead() ?><?php endif; ?>'); ?>">
						</span>
					</a>
					<ul class="dropdown-menu dropdown-menu-right">
							<a class="padding-right-lg waves-attach" href="<?php $this->options->adminUrl(); ?>">
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
              <a class="menu-logo" href="#">
						<i class="icon icon-lg">
							menu
						</i>
						&nbsp;菜单
					</a>
					<ul class="nav">
						<li>
							<a href="<?php $this->options->siteUrl(); ?>">
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
						<form method="post" action="" class="form-group form-group-label" align="right">
							<label class="floating-label" for="oldpwd">
								&nbsp;&nbsp;搜索一下
							</label>
							<input class="form-control" id="author" type="text" name="s" size="20">
						</form>
					</ul>
				</div>
			</div>
		</nav>
