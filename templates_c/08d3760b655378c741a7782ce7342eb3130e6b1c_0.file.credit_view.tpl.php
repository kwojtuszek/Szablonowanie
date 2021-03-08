<?php
/* Smarty version 3.1.39, created on 2021-03-08 20:05:53
  from 'D:\xampp\htdocs\cw3\app\credit_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60467591c19dd5_53866402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08d3760b655378c741a7782ce7342eb3130e6b1c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\cw3\\app\\credit_view.tpl',
      1 => 1615230344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60467591c19dd5_53866402 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82949206860467591c0cc95_01427345', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_82949206860467591c0cc95_01427345 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_82949206860467591c0cc95_01427345',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section>
    <h4> Kalkulator Kredytowy </h4>
    <form method = "post" action = "#">
        <div class = "row uniform 50%">
            <div class = "4u 12u$(xsmall)">
                <input type = "text" name = "amount" value = "" placeholder = "Wysokość Kredytu"/>
            </div>
            <div class = "4u 12u$(xsmall)">
                <input type = "text" name = "percentage" value = "" placeholder = "Oprocentowanie"/>
            </div>
            <div class = "4u 12u$(xsmall)">
                <input type = "text" name = "years" value = "" placeholder = "Na ile lat"/>
            </div>
            <div class = "12u$">
				<ul class = "actions">
                    <input type = "submit" class = "button special big" value = "Oblicz"/>
                </ul>
            </div>
        </div>
    </form>
<section>

<section>
    <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
        <?php if (!empty($_smarty_tpl->tpl_vars['messages']->value)) {?>
            <h4> Wystąpiły błędy: </h4>
            <div calss = "row">
                <div class = "12u$">
                    <ul class = "alt">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                            <li> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
 </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            </div>
        <?php }?>
    <?php }?>
</section>

<section>
    <?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
        <?php if (!empty($_smarty_tpl->tpl_vars['infos']->value)) {?>
            <h4> Informacje: </h4>
            <div calss = "row">
                <div class = "12u$">
                    <ul class = "alt">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
                            <li> <?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
 </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            </div>
        <?php }?>
    <?php }?>
</section> 
            
<section>
    <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
        <h5> Wynik: </h5>
        <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

    <?php }?>
</section>

<?php
}
}
/* {/block 'content'} */
}
