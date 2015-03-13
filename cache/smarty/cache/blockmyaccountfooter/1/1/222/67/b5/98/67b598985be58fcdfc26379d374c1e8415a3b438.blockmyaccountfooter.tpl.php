<?php /*%%SmartyHeaderCode:86225502639f64dfc3-82683875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67b598985be58fcdfc26379d374c1e8415a3b438' => 
    array (
      0 => 'C:\\wamp\\www\\shop\\themes\\default-bootstrap\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1424775222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86225502639f64dfc3-82683875',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5502639f878b40_69165861',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5502639f878b40_69165861')) {function content_5502639f878b40_69165861($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://localhost/shop/en/my-account" title="Manage my customer account" rel="nofollow">My account</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://localhost/shop/en/order-history" title="My orders" rel="nofollow">My orders</a></li>
						<li><a href="http://localhost/shop/en/credit-slip" title="My credit slips" rel="nofollow">My credit slips</a></li>
			<li><a href="http://localhost/shop/en/addresses" title="My addresses" rel="nofollow">My addresses</a></li>
			<li><a href="http://localhost/shop/en/identity" title="Manage my personal information" rel="nofollow">My personal info</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
