<?php
/* Smarty version 4.5.3, created on 2024-08-08 14:44:25
  from '/Applications/XAMPP/xamppfiles/htdocs/test/themes/SuiteP/include/ListView/ListViewSelectObjects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_66b4bda95cbc48_13764987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70290c1dfd113421d5032a7907ef7d7ceac3ea86' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/test/themes/SuiteP/include/ListView/ListViewSelectObjects.tpl',
      1 => 1722986931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4bda95cbc48_13764987 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="selectedRecords label hidden"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LISTVIEW_SELECTED_OBJECTS'];?>
</div><div class="selectedRecords value hidden"><?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
</div>
<input type='hidden' id='selectCountTop' name='selectCount[]' value='<?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
' />

<?php echo '<script'; ?>
>

    $(document).ready(function () {
        setInterval(function () {
            sListView.toggleSelected();
        }, 100);
    });

<?php echo '</script'; ?>
><?php }
}
