<?php
/* Smarty version 3.1.39, created on 2021-03-08 19:28:11
  from 'D:\xampp\htdocs\cw3\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60466cbbefc436_35356599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24ef14336200a972cda85256f8b65ea31a79f3a9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\cw3\\templates\\main.tpl',
      1 => 1615228086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60466cbbefc436_35356599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main.css" />
	</head>
	<body>

        <header id = "header">
            <h1> <strong> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
 </strong> </h1>
        </header>

        <section id = "main" class = "wrapper">
            <div class = "container">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142972137460466cbbefbaa8_47450436', 'content');
?>

            </div>
        </section>

        <footer id = "footer">
            <div class="container">
                <h6>  Wykonał Klaudiusz Wjtuszek </h6> 
                <ul class="copyright">
					<li> &copy; Untitled</li>
					<li> Źródło Szablonu: <a href="http://templated.co">Templated</a></li>
					<li> Wykorzystany Szablon: <a href = "https://templated.co/spatial">Szablon</a></li> 
                </ul>
            </div>
        </footer>

    <?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/skel.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>
    
    </body>
</html><?php }
/* {block 'content'} */
class Block_142972137460466cbbefbaa8_47450436 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_142972137460466cbbefbaa8_47450436',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości <?php
}
}
/* {/block 'content'} */
}
