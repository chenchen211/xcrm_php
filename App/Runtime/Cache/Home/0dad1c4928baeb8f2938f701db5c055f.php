<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
    <form action="/xcrm/index.php/Home/Proin/edit/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
           <tbody>
		   <tr><td><label for='jpid_input' class='control-label x85'>产品ID:</label><input type='text' id='jpid' name='jpid'  size='20' data-toggle='lookup' data-url='/xcrm/index.php/Home/public/proname/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["jpid"]); ?>' disabled ></td><td><label for='jpname_input' class='control-label x85'>产品名称:</label><input type='text' id='jpname' name='jpname'  size='20' data-toggle='lookup' data-url='/xcrm/index.php/Home/public/proname/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["jpname"]); ?>' disabled ></td></tr>
<tr><td><label for='jpjiage_input' class='control-label x85'>产品价格:</label><input type='text' id='jpjiage' name='jpjiage'  size='20' data-toggle='lookup' data-url='/xcrm/index.php/Home/public/proname/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["jpjiage"]); ?>' disabled ></td><td><label for='jpdanwei_input' class='control-label x85'>计量单位:</label><input type='text' id='jpdanwei' name='jpdanwei'  size='20' data-toggle='lookup' data-url='/xcrm/index.php/Home/public/proname/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["jpdanwei"]); ?>' disabled  ></td></tr>
<tr><td><label for='jpguige_input' class='control-label x85'>规格型号:</label><input type='text' id='jpguige' name='jpguige'  size='20' data-toggle='lookup' data-url='/xcrm/index.php/Home/public/proname/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["jpguige"]); ?>' disabled ></td><td><label for='shuliang_input' class='control-label x85'>入库数量:</label><input type='text' id='shuliang' name='shuliang' data-rule='required;' size='20' disabled  value='<?php echo ($Rs["shuliang"]); ?>'  ></td></tr>
<tr><td><label for='juid_input' class='control-label x85'>经办人:</label><input type='text' id='juid' name='juid'  size='20' data-toggle='lookup' data-url='/xcrm/index.php/Home/public/user/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["juid"]); ?>'  ></td><td><label for='juname_input' class='control-label x85'>经办人:</label><input type='text' id='juname' name='juname'  size='20' data-toggle='lookup' data-url='/xcrm/index.php/Home/public/user/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["juname"]); ?>'  ></td></tr>
<tr><td><label for='title_input' class='control-label x85'>说明:</label><input type='text' id='title' name='title'  size='20'   value='<?php echo ($Rs["title"]); ?>'  ></td>
           </tbody>
          </table>
        </div>
        <div class="bjui-footBar">
            <ul>
                <li><button type="button" class="btn-close" data-icon="close">取消</button></li>
                <li><button type="submit" class="btn-default" data-icon="save">保存</button></li>
            </ul>
        </div>
    </form>
</div>