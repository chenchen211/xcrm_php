<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
        <div class="pageFormContent" style="margin:1px;" data-layout-h="0">
		          <ul class="nav nav-tabs" role="tablist">
                   <li class="active"><a href="#pro" role="tab" data-toggle="tab">产品管理</a></li>
					<li><a href='#proin' role='tab' data-toggle='tab'>入库记录</a></li><li><a href='#proout' role='tab' data-toggle='tab'>出库记录</a></li>
                  </ul>
		 <div class="tab-content">
           <div class="tab-pane fade active in" id="pro"><table class="table table-bordered table-striped table-hover">
           <tbody>
		   <tr><td><label for='id_input' class='control-label x85'>ID:</label><?php echo ($Rs["id"]); ?></td><td><label for='name_input' class='control-label x85'>产品名称:</label><?php echo ($Rs["name"]); ?></td></tr>
<tr><td><label for='fenlei_input' class='control-label x85'>产品分类:</label><?php echo ($Rs["fenlei"]); ?></td><td><label for='jiage_input' class='control-label x85'>采购价格:</label><?php echo ($Rs["jiage"]); ?></td></tr>
<tr><td><label for='sjiage_input' class='control-label x85'>销售价格:</label><?php echo ($Rs["sjiage"]); ?></td><td><label for='type_input' class='control-label x85'>计量单位:</label><?php echo ($Rs["type"]); ?></td></tr>
<tr><td><label for='tilte_input' class='control-label x85'>型号规格:</label><?php echo ($Rs["title"]); ?></td><td><label for='kucun_input' class='control-label x85'>库存数量:</label><?php echo ($Rs["kucun"]); ?></td></tr>
<tr><td><label for='ruku_input' class='control-label x85'>入库数量:</label><?php echo ($Rs["ruku"]); ?></td><td><label for='chuku_input' class='control-label x85'>出库数量:</label><?php echo ($Rs["chuku"]); ?></td></tr>
<tr><td><label for='uname_input' class='control-label x85'>添加人:</label><?php echo ($Rs["uname"]); ?></td><td><label for='addtime_input' class='control-label x85'>添加时间:</label><?php echo ($Rs["addtime"]); ?></td></tr>
<tr><td><label for='uuname_input' class='control-label x85'>更新人:</label><?php echo ($Rs["uuname"]); ?></td><td><label for='updatetime_input' class='control-label x85'>更新时间:</label><?php echo ($Rs["updatetime"]); ?></td></tr>
<tr></tr>
<tr><td colspan=2><label for='beizhu_input' class='control-label x85'>详细说明:</label><div style='display: inline-block; vertical-align: middle;'><textarea name='beizhu'   data-toggle='kindeditor' data-minheight='150' data-items='fontname, fontsize, |, forecolor, hilitecolor, bold, italic, underline, removeformat, |, justifyleft, justifycenter, justifyright, insertorderedlist, insertunorderedlist, |, emoticons, image, link'><?php echo ($Rs["beizhu"]); ?></textarea></div></td></tr>
           </tbody>
          </table>
		  </div>
		  
		 <div class='tab-pane fade' id='proin'><table class='table table-bordered table-striped table-hover'><?php $proinlist=M('proin')->where(array('jpid'=>I('id')))->select(); ?> <thead> <tr><th>ID</th>
<th height=30>产品名称</th>
<th height=30>产品价格</th>
<th height=30>计量单位</th>
<th height=30>规格型号</th>
<th>入库数量</th>
<th height=30>经办人</th>
<th height=30>说明</th>
<th>操作人</th>
<th>入库时间</th>
<th>详细</th></tr></thead><tbody><?php if(is_array($proinlist)): foreach($proinlist as $key=>$proinv): ?><tr><td><?php echo ($proinv["id"]); ?></td>
<td><?php echo (msubstr($proinv["jpname"],0,20)); ?></td>
<td><?php echo (msubstr($proinv["jpjiage"],0,20)); ?></td>
<td><?php echo (msubstr($proinv["jpdanwei"],0,20)); ?></td>
<td><?php echo (msubstr($proinv["jpguige"],0,20)); ?></td>
<td><?php echo ($proinv["shuliang"]); ?></td>
<td><?php echo (msubstr($proinv["juname"],0,20)); ?></td>
<td><?php echo (msubstr($proinv["title"],0,20)); ?></td>
<td><?php echo ($proinv["uname"]); ?></td>
<td><?php echo (substr($proinv["addtime"],0,10)); ?></td>
  <td><a href='/xcrm/index.php/Home/proin/view/id/<?php echo ($proinv['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>'  data-toggle='dialog' data-width='800' data-height='500' data-id='dialog-maskproin' data-mask='true' >详细</a></td></tr><?php endforeach; endif; ?> </tbody> </table></div><div class='tab-pane fade' id='proout'><table class='table table-bordered table-striped table-hover'><?php $prooutlist=M('proout')->where(array('jpid'=>I('id')))->select(); ?> <thead> <tr><th>ID</th>
<th height=30>产品名称</th>
<th height=30>产品价格</th>
<th height=30>计量单位</th>
<th height=30>规格型号</th>
<th>出库数量</th>
<th>经办人</th>
<th height=30>说明</th>
<th height=30>关联合同</th>
<th>操作人</th>
<th>入库时间</th>
<th>详细</th></tr></thead><tbody><?php if(is_array($prooutlist)): foreach($prooutlist as $key=>$prooutv): ?><tr><td><?php echo ($prooutv["id"]); ?></td>
<td><?php echo (msubstr($prooutv["jpname"],0,20)); ?></td>
<td><?php echo (msubstr($prooutv["jpjiage"],0,20)); ?></td>
<td><?php echo (msubstr($prooutv["jpdanwei"],0,20)); ?></td>
<td><?php echo (msubstr($prooutv["jpguige"],0,20)); ?></td>
<td><?php echo ($prooutv["shuliang"]); ?></td>
<td><?php echo ($prooutv["juname"]); ?></td>
<td><?php echo (msubstr($prooutv["title"],0,20)); ?></td>
<td><?php echo (msubstr($prooutv["jhname"],0,20)); ?></td>
<td><?php echo ($prooutv["uname"]); ?></td>
<td><?php echo (substr($prooutv["addtime"],0,10)); ?></td>
  <td><a href='/xcrm/index.php/Home/proout/view/id/<?php echo ($prooutv['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>'  data-toggle='dialog' data-width='800' data-height='500' data-id='dialog-maskproout' data-mask='true' >详细</a></td></tr><?php endforeach; endif; ?> </tbody> </table></div>
		   
		 </div>
        </div>
		<div class="bjui-footBar">
        <ul>
            <li><button type="button" class="btn-close" data-icon="close">关闭</button></li>
        </ul>
    </div>
</div>