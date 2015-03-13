<?php /* Smarty version Smarty-3.1.19, created on 2015-03-13 11:12:16
         compiled from "C:\wamp\www\shop\themes\default-bootstrap\modules\blockcontact\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30049550263a0880bd2-82647434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '814beccf4d76055ef454401bef428f3a264680ee' => 
    array (
      0 => 'C:\\wamp\\www\\shop\\themes\\default-bootstrap\\modules\\blockcontact\\nav.tpl',
      1 => 1426143779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30049550263a0880bd2-82647434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550263a0944107_14538064',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550263a0944107_14538064')) {function content_550263a0944107_14538064($_smarty_tpl) {?>
<div id="contact-link">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<span class="shop-phone">
		<!--<i class="icon-phone"></i>-->
        <img src="/shop/img/icons/call.png" /><?php echo smartyTranslate(array('s'=>'','mod'=>'blockcontact'),$_smarty_tpl);?>
 <span><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</span>
	</span>
<?php }?><?php }} ?>
