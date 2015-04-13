<?php /* Smarty version 3.1.22-dev/17, created on 2015-04-13 15:41:49
         compiled from "D:/Web/www/test/PHP/TestComposer/app/views/test/test.html" */ ?>
<?php
/*%%SmartyHeaderCode:18589552b733d5ff611_94777381%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed66ac9479e645c66bcc33e3e1e38a7f991f8bb8' => 
    array (
      0 => 'D:/Web/www/test/PHP/TestComposer/app/views/test/test.html',
      1 => 1428909125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18589552b733d5ff611_94777381',
  'variables' => 
  array (
    'test' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/17',
  'unifunc' => 'content_552b733d899e76_57465160',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_552b733d899e76_57465160')) {
function content_552b733d899e76_57465160 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '18589552b733d5ff611_94777381';
?>
<html>
<head>
<title>test page</title>
</head>
<?php echo $_smarty_tpl->tpl_vars['test']->value;?>

</html><?php }
}
?>