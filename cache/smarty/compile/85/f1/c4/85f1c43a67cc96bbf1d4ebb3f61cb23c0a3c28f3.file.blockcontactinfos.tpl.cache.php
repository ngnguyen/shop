<?php /* Smarty version Smarty-3.1.19, created on 2015-03-13 11:12:15
         compiled from "C:\wamp\www\shop\themes\default-bootstrap\modules\blockcontactinfos\blockcontactinfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28955502639f8ab7d8-80736592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85f1c43a67cc96bbf1d4ebb3f61cb23c0a3c28f3' => 
    array (
      0 => 'C:\\wamp\\www\\shop\\themes\\default-bootstrap\\modules\\blockcontactinfos\\blockcontactinfos.tpl',
      1 => 1426144319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28955502639f8ab7d8-80736592',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockcontactinfos_company' => 0,
    'blockcontactinfos_address' => 0,
    'blockcontactinfos_phone' => 0,
    'blockcontactinfos_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5502639f982580_13919328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5502639f982580_13919328')) {function content_5502639f982580_13919328($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include 'C:\\wamp\\www\\shop\\tools\\smarty\\plugins\\function.mailto.php';
?>

<!-- MODULE Block contact infos -->
<section id="block_contact_infos" class="footer-block col-xs-12 col-sm-4">
	<div>
        <h4><?php echo smartyTranslate(array('s'=>'Store Information','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
</h4>
        <ul class="toggle-footer">
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value!='') {?>
            	<li>
            		<!--<i class="icon-map-marker"></i>-->
                    <img src="/shop/img/icons/location.png" />
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value, ENT_QUOTES, 'UTF-8', true);?>
<br/>
                    <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value!='') {?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value!='') {?>
            	<li>
                    <!--<i class="icon-phone"></i>-->
                    <img src="/shop/img/icons/call.png" /><?php echo smartyTranslate(array('s'=>'','mod'=>'blockcontactinfos'),$_smarty_tpl);?>

            		<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value!='') {?>
            	<li>
            		<!--<i class="icon-envelope-alt"></i>-->
                    <img src="/shop/img/icons/mouse.png" /><?php echo smartyTranslate(array('s'=>'','mod'=>'blockcontactinfos'),$_smarty_tpl);?>

            		<span><?php echo smarty_function_mailto(array('address'=>htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value, ENT_QUOTES, 'UTF-8', true),'encode'=>"hex"),$_smarty_tpl);?>
</span>
            	</li>
            <?php }?>
        </ul>
    </div>
</section>
<!-- /MODULE Block contact infos -->
<?php }} ?>
