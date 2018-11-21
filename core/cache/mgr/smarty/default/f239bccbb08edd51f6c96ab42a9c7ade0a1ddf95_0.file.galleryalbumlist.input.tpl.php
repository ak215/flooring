<?php
/* Smarty version 3.1.31, created on 2018-11-20 23:45:54
  from "/home/e/egocosm/laflooring/public_html/core/components/gallery/elements/tv/galleryalbumlist.input.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bf4728270ad80_54404159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f239bccbb08edd51f6c96ab42a9c7ade0a1ddf95' => 
    array (
      0 => '/home/e/egocosm/laflooring/public_html/core/components/gallery/elements/tv/galleryalbumlist.input.tpl',
      1 => 1542744327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf4728270ad80_54404159 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" type="text" />


<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[
Ext.onReady(function() {
    var galStore<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
 = new Ext.data.ArrayStore({
        fields: ['id','name','description','cover'],
        data : <?php echo $_smarty_tpl->tpl_vars['list']->value;?>

    });
    var galTpl<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
 = new Ext.XTemplate(
        '<tpl for="."><div class="search-item" style="padding: 4px">'
        ,'<tpl if="cover"><div style="float: right;"><img src="{cover}" alt="" /></div></tpl>'
        ,'{name}'
        ,'<br /><span style="font-size: small; font-style: italic">{description}</span>'
        ,'<div style="clear: both;"></div></div></tpl>'
    );

    var fld = MODx.load({
        xtype: 'combo'
        ,store: galStore<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>

        ,displayField: 'name'
        ,valueField: 'id'
        ,name: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,hiddenName: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,mode: 'local'
        ,triggerAction: 'all'
        ,applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,value: '<?php echo $_smarty_tpl->tpl_vars['tv']->value->value;?>
'
        ,tpl: galTpl<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>

        ,itemSelector: 'div.search-item'
        ,width: <?php if ($_smarty_tpl->tpl_vars['params']->value['width']) {
echo $_smarty_tpl->tpl_vars['params']->value['width'];
} else { ?>400<?php }?>
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['listWidth']) {?>,listWidth: <?php echo $_smarty_tpl->tpl_vars['params']->value['listWidth'];
}?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['typeAhead']) {?>
            ,typeAhead: true
            ,typeAheadDelay: <?php if ($_smarty_tpl->tpl_vars['params']->value['typeAheadDelay'] && $_smarty_tpl->tpl_vars['params']->value['typeAheadDelay'] != '') {
echo $_smarty_tpl->tpl_vars['params']->value['typeAheadDelay'];
} else { ?>250<?php }?>
        <?php } else { ?>
            ,editable: false
            ,typeAhead: false
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['listEmptyText']) {?>
            ,listEmptyText: '<?php echo $_smarty_tpl->tpl_vars['params']->value['listEmptyText'];?>
'
        <?php }?>
        ,forceSelection: <?php if ($_smarty_tpl->tpl_vars['params']->value['forceSelection'] && $_smarty_tpl->tpl_vars['params']->value['forceSelection'] != 'false') {?>true<?php } else { ?>false<?php }?>
        ,msgTarget: 'under'
        ,listeners: { 'select': { fn:MODx.fireResourceFormChange, scope:this}}
        
    });

    var pr = Ext.getCmp('modx-panel-resource');
    if (pr) {
        pr.getForm().add(fld);
    }
    MODx.makeDroppable(fld);
});
// ]]>
<?php echo '</script'; ?>
>
<?php }
}
