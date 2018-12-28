<?php /* Smarty version 3.1.27, created on 2017-04-13 18:40:16
         compiled from "D:\AppServ\www\smarty\2.html" */ ?>
<?php
/*%%SmartyHeaderCode:1664858ef55905ebcc7_88780141%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28307da0a8292212aa008d543e1d23d31a97e20a' => 
    array (
      0 => 'D:\\AppServ\\www\\smarty\\2.html',
      1 => 1492080014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1664858ef55905ebcc7_88780141',
  'variables' => 
  array (
    'd' => 0,
    'sss' => 0,
    'tit' => 0,
    'h' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58ef5590655a47_35368562',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ef5590655a47_35368562')) {
function content_58ef5590655a47_35368562 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1664858ef55905ebcc7_88780141';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php  Smarty_Internal_Extension_Config::configLoad($_smarty_tpl, "xxx.conf", null, 'local');?>
<?php echo $_smarty_tpl->tpl_vars['d']->value;?>

<?php echo $_smarty_tpl->tpl_vars['sss']->value['b'];?>

   <h1><?php echo $_smarty_tpl->tpl_vars['tit']->value->name;?>
</h1>
    <h1><?php echo $_smarty_tpl->tpl_vars['h']->value->hh;?>
</h1>
   <?php echo time();?>

   <?php echo $_GET['id'];?>

zxczxczxczxczccc
<?php echo $_smarty_tpl->getConfigVariable('xx');?>

</body>
</html><?php }
}
?>