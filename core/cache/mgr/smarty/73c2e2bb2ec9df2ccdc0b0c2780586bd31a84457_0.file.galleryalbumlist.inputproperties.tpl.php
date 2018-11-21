<?php
/* Smarty version 3.1.31, created on 2018-11-20 23:45:09
  from "/home/e/egocosm/laflooring/public_html/core/components/gallery/elements/tv/galleryalbumlist.inputproperties.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bf4725590bb10_68316596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73c2e2bb2ec9df2ccdc0b0c2780586bd31a84457' => 
    array (
      0 => '/home/e/egocosm/laflooring/public_html/core/components/gallery/elements/tv/galleryalbumlist.inputproperties.tpl',
      1 => 1542744327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf4725590bb10_68316596 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="tv-input-properties-form<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
"></div>


<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[
var params = {
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value, 'v', false, 'k', 'p', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['total'];
?>
 '<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
': '<?php echo strtr($_smarty_tpl->tpl_vars['v']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['last'] : null)) {?>,<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

};
var oc = {'change':{fn:function(){Ext.getCmp('modx-panel-tv').markDirty();},scope:this}};
MODx.load({
    xtype: 'panel'
    ,layout: 'form'
    ,autoHeight: true
    ,labelWidth: 150
    ,border: false
    ,items: [{
        xtype: 'combo-boolean'
        ,fieldLabel: _('required')
        ,description: _('required_desc')
        ,name: 'inopt_allowBlank'
        ,hiddenName: 'inopt_allowBlank'
        ,id: 'inopt_allowBlank<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['allowBlank'] == 0 || params['allowBlank'] == 'false' ? false : true
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'combo'
        ,store: [['rank','<?php echo $_smarty_tpl->tpl_vars['gl']->value['rank'];?>
'],['name','<?php echo $_smarty_tpl->tpl_vars['gl']->value['name'];?>
']]
        ,fieldLabel: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['sort'];?>
'
        ,description: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['sort_desc'];?>
'
        ,name: 'inopt_sort'
        ,hiddenName: 'inopt_sort'
        ,forceSelection: true
        ,typeAhead: false
        ,editable: false
        ,triggerAction: 'all'
        ,id: 'inopt_sort<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['sort'] || 'rank'
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'combo'
        ,store: [['ASC','<?php echo $_smarty_tpl->tpl_vars['gl']->value['ascending'];?>
'],['DESC','<?php echo $_smarty_tpl->tpl_vars['gl']->value['descending'];?>
']]
        ,fieldLabel: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['sortdir'];?>
'
        ,description: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['sortdir_desc'];?>
'
        ,name: 'inopt_dir'
        ,hiddenName: 'inopt_dir'
        ,forceSelection: true
        ,typeAhead: false
        ,editable: false
        ,triggerAction: 'all'
        ,id: 'inopt_dir<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['dir'] || 'DESC'
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'textfield'
        ,fieldLabel: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['limit'];?>
'
        ,description: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['limit_desc'];?>
'
        ,name: 'inopt_limit'
        ,hiddenName: 'inopt_limit'
        ,id: 'inopt_limit<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['limit'] || 0
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'textfield'
        ,fieldLabel: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['start'];?>
'
        ,description: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['start_desc'];?>
'
        ,name: 'inopt_start'
        ,hiddenName: 'inopt_start'
        ,id: 'inopt_start<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['start'] || 0
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'combo-boolean'
        ,fieldLabel: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['shownone'];?>
'
        ,description: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['shownone_desc'];?>
'
        ,name: 'inopt_showNone'
        ,hiddenName: 'inopt_showNone'
        ,id: 'inopt_showNone<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['showNone'] == 0 || params['showNone'] == 'false' ? false : true
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'combo-boolean'
        ,fieldLabel: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['showcover'];?>
'
        ,description: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['showcover_desc'];?>
'
        ,name: 'inopt_showCover'
        ,hiddenName: 'inopt_showCover'
        ,id: 'inopt_showCover<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['showCover'] == 0 || params['showCover'] == 'false' ? false : true
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'textfield'
        ,fieldLabel: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['parent'];?>
'
        ,description: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['parent_desc'];?>
'
        ,name: 'inopt_parent'
        ,id: 'inopt_parent<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['parent'] || ''
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'combo-boolean'
        ,fieldLabel: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['subchilds'];?>
'
        ,description: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['subchilds_desc'];?>
'
        ,name: 'inopt_subchilds'
        ,id: 'inopt_subchilds<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['subchilds'] || ''
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'textfield'
        ,fieldLabel: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['width'];?>
'
        ,description: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['width_desc'];?>
'
        ,name: 'inopt_width'
        ,id: 'inopt_width<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['width'] || 400
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'textfield'
        ,fieldLabel: _('combo_listwidth')
        ,description: _('combo_listwidth_desc')
        ,name: 'inopt_listWidth'
        ,id: 'inopt_listWidth<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['listWidth'] || ''
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'combo-boolean'
        ,fieldLabel: _('combo_typeahead')
        ,description: _('combo_typeahead_desc')
        ,name: 'inopt_typeAhead'
        ,hiddenName: 'inopt_typeAhead'
        ,id: 'inopt_typeAhead<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['typeAhead'] || false
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'textfield'
        ,fieldLabel: _('combo_typeahead_delay')
        ,description: _('combo_typeahead_delay_desc')
        ,name: 'inopt_typeAheadDelay'
        ,id: 'inopt_typeAheadDelay<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['typeAheadDelay'] || 250
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'combo-boolean'
        ,fieldLabel: _('combo_forceselection')
        ,description: _('combo_forceselection_desc')
        ,name: 'inopt_forceSelection'
        ,hiddenName: 'inopt_forceSelection'
        ,id: 'inopt_forceSelection<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['forceSelection'] || false
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'textfield'
        ,fieldLabel: _('combo_listempty_text')
        ,description: _('combo_listempty_text_desc')
        ,name: 'inopt_listEmptyText'
        ,id: 'inopt_listEmptyText<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['listEmptyText'] || ''
        ,width: 300
        ,listeners: oc
    }]
    ,renderTo: 'tv-input-properties-form<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
});
// ]]>
<?php echo '</script'; ?>
>
<?php }
}
