<?php
/* Smarty version 4.5.3, created on 2024-08-08 14:44:25
  from '/Applications/XAMPP/xamppfiles/htdocs/test/include/SugarFields/Fields/Base/ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_66b4bda9756c22_32806696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4ba64f74afcde05a52e43666672a4591af831ae' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/test/include/SugarFields/Fields/Base/ListView.tpl',
      1 => 1722986931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4bda9756c22_32806696 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/test/include/Smarty/plugins/function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),));
?>

<?php echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);?>

<?php }
}
