<?php /* Smarty version 3.1.27, created on 2016-07-23 04:50:50
         compiled from "/var/www/public/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7632540855792f7aabbe7b0_44927100%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23b81ee04eb3627d4c46ce34603a83ffd9310266' => 
    array (
      0 => '/var/www/public/manager/templates/default/welcome.tpl',
      1 => 1469249208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7632540855792f7aabbe7b0_44927100',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5792f7aabd4c13_84720403',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5792f7aabd4c13_84720403')) {
function content_5792f7aabd4c13_84720403 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7632540855792f7aabbe7b0_44927100';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>