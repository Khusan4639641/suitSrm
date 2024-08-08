<?php
/* Smarty version 4.5.3, created on 2024-08-08 14:44:17
  from '/Applications/XAMPP/xamppfiles/htdocs/test/include/utils/recaptcha_disabled.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_66b4bda1b49b34_13177652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e13c784cce434351c76d70be2ea43779e58c056b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/test/include/utils/recaptcha_disabled.tpl',
      1 => 1722986931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4bda1b49b34_13177652 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

  /**
   * Login Screen Validation
   */
  function validateAndSubmit() {
      generatepwd();
    }

  /**
   * Password reset screen validation
   */
  function validateCaptchaAndSubmit() {
      document.getElementById('username_password').value = document.getElementById('new_password').value;
      document.getElementById('ChangePasswordForm').submit();
    }
<?php echo '</script'; ?>
>
<?php }
}
