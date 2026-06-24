<?php
/* Smarty version 4.3.2, created on 2026-06-23 13:29:57
  from '/home/rbgvtenu/torrentdemo.enlau.dev/applications/archive.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6a3a8a558685f4_01572008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10680e1679a909469d016af54a9e6589bda02147' => 
    array (
      0 => '/home/rbgvtenu/torrentdemo.enlau.dev/applications/archive.tpl',
      1 => 1780921471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a3a8a558685f4_01572008 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD><META http-equiv="content-Type" content="text/html; charset=UTF-8">

<TITLE>Application <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</TITLE>

<META name="description" content="Application <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">













<LINK rel="shortcut icon" type="image/x-icon" href="favicon.ico">



<LINK rel="stylesheet" type="text/css" href="./images/main.css" media="screen">







	











</HEAD><BODY>









<DIV id="retlin">

		<DIV id="title_page">

		<H1 class="header_grey">Application <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</H1>

	</DIV>

		

</DIV>







                                                                                                 


<CENTER>

  <table width="661" border="0" align="center">

    <tr>

      <td width="655" align="center">

        <?php
$__section_s_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['sm']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_s_0_total = $__section_s_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_s'] = new Smarty_Variable(array());
if ($__section_s_0_total !== 0) {
for ($__section_s_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index'] = 0; $__section_s_0_iteration <= $__section_s_0_total; $__section_s_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_s']->value['rownum'] = $__section_s_0_iteration;
?>

      <td width="25%"><a href="<?php echo $_smarty_tpl->tpl_vars['sm']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_s']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index'] : null)]['lnk'];?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['sm']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_s']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index'] : null)]['title'];?>
" class="listi"><?php echo $_smarty_tpl->tpl_vars['sm']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_s']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index'] : null)]['kw'];?>
</a></td>

	<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_s']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_s']->value['rownum'] : null)%4 == 0) {?>

    </tr>

            <tr align="left" valign="top">

	<?php }?>			

<?php
}
}
?></td>

    </tr>

  </table>

</CENTER>

















<BR>

<DIV align="center" class="fileation" width="600">

	<DIV><DIV id="tructmos"></DIV></DIV>

</DIV>

<BR>


<BR>





<BR>

		

		</DIV>

	

	</TD>

	

	<TD width="160px">

	

</TD>	

		

	</TR>	</TBODY></TABLE>





<BR>

 

 

 

















</BODY></HTML><?php }
}
