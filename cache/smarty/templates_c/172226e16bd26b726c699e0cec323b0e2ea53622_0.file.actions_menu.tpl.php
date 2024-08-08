<?php
/* Smarty version 4.5.3, created on 2024-08-08 14:44:25
  from '/Applications/XAMPP/xamppfiles/htdocs/test/themes/SuiteP/include/MySugar/tpls/actions_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_66b4bda97922b3_62236128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '172226e16bd26b726c699e0cec323b0e2ea53622' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/test/themes/SuiteP/include/MySugar/tpls/actions_menu.tpl',
      1 => 1722986931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4bda97922b3_62236128 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="dropdown-menu tab-actions">
    <?php if (!$_smarty_tpl->tpl_vars['lock_homepage']->value) {?>

        <li>
            <input class="button addDashlets" type="button" name="Edit"  data-toggle="modal" data-target=".modal-add-dashlet" value="<?php echo $_smarty_tpl->tpl_vars['lblAddDashlets']->value;?>
">
        </li>
        <li>
            <input class="button addDashboard" type="button" name="Edit"  data-toggle="modal" data-target=".modal-add-dashboard" value="<?php echo $_smarty_tpl->tpl_vars['lblAddTab']->value;?>
">
        </li>
        <li>
            <input class="button addDashboard" type="button" name="Edit"  data-toggle="modal" data-target=".modal-edit-dashboard" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['LBL_EDIT_TAB'];?>
">
        </li>
    <?php }?>
</ul>
<?php }
}
