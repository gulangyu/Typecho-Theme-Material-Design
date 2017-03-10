<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($form) {
    $Myico = new Typecho_Widget_Helper_Form_Element_Text('Myico', NULL, NULL, _t('设置图标'), _t('在这里输入您博客图标'));
    $form->addInput($Myico);
    $Bulletin = new Typecho_Widget_Helper_Form_Element_Text('Bulletin', NULL, NULL, _t('编辑公告'), _t('在这里输入您博客的公告,可输入代码'));
    $form->addInput($Bulletin);
    $Myhead = new Typecho_Widget_Helper_Form_Element_Text('Myhead', NULL, NULL, _t('设置头像'), _t('在这里输入您博客主题的头像（非用户头像）'));
    $form->addInput($Myhead);
}
