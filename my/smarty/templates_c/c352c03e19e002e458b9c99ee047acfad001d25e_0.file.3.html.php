<?php /* Smarty version 3.1.27, created on 2017-04-13 18:38:22
         compiled from "D:\AppServ\www\smarty\3.html" */ ?>
<?php
/*%%SmartyHeaderCode:219958ef551ec86286_39366471%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c352c03e19e002e458b9c99ee047acfad001d25e' => 
    array (
      0 => 'D:\\AppServ\\www\\smarty\\3.html',
      1 => 1492079900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219958ef551ec86286_39366471',
  'variables' => 
  array (
    'xxx' => 0,
    'v' => 0,
    'n' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58ef551ece7a80_31729371',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ef551ece7a80_31729371')) {
function content_58ef551ece7a80_31729371 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '219958ef551ec86286_39366471';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <div>
        <?php
$_from = $_smarty_tpl->tpl_vars['xxx']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
        <?php echo $_smarty_tpl->tpl_vars['v']->value['title']*2;?>

        <?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>

        <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
    </div>
    <h1>
        <!--<?php if ($_smarty_tpl->tpl_vars['n']->value == 5) {?>您5
        <?php } elseif ($_smarty_tpl->tpl_vars['n']->value == 4) {?>您4
        <?php } else { ?> 不是5也不是4
        <?php }?>-->
    </h1>
</body>
</html><?php }
}
?>