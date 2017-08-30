<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-bordered table-striped table-hover">
           <tbody>
		   <tr><td><label for='id_input' class='control-label x85'>ID:</label><?php echo ($Rs["id"]); ?></td><td><label for='jpid_input' class='control-label x85'>产品ID:</label><?php echo ($Rs["jpid"]); ?></td></tr>
<tr><td><label for='jpname_input' class='control-label x85'>产品名称:</label><?php echo ($Rs["jpname"]); ?></td><td><label for='jpjiage_input' class='control-label x85'>产品价格:</label><?php echo ($Rs["jpjiage"]); ?></td></tr>
<tr><td><label for='jpdanwei_input' class='control-label x85'>计量单位:</label><?php echo ($Rs["jpdanwei"]); ?></td><td><label for='jpguige_input' class='control-label x85'>规格型号:</label><?php echo ($Rs["jpguige"]); ?></td></tr>
<tr><td><label for='shuliang_input' class='control-label x85'>出库数量:</label><?php echo ($Rs["shuliang"]); ?></td><td><label for='juname_input' class='control-label x85'>经办人:</label><?php echo ($Rs["juname"]); ?></td></tr>
<tr><td><label for='title_input' class='control-label x85'>说明:</label><?php echo ($Rs["title"]); ?></td><td><label for='jhid_input' class='control-label x85'>关联合同:</label><?php echo ($Rs["jhid"]); ?></td></tr>
<tr><td><label for='jhname_input' class='control-label x85'>关联合同:</label><?php echo ($Rs["jhname"]); ?></td><td><label for='uname_input' class='control-label x85'>操作人:</label><?php echo ($Rs["uname"]); ?></td></tr>
<tr><td><label for='addtime_input' class='control-label x85'>入库时间:</label><?php echo ($Rs["addtime"]); ?></td>
           </tbody>
          </table>
        </div>
		<div class="bjui-footBar">
        <ul>
            <li><button type="button" class="btn-close" data-icon="close">关闭</button></li>
        </ul>
    </div>
</div>