<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
    <form action="/index.php/Home/Mygo/edit/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
           <tbody>
		   <tr><td><label for='kssj_input' class='control-label x85'>开始时间:</label><input type='text' data-toggle='datepicker' data-pattern='yyyy-MM-dd HH:mm:ss' id='kssj' name='kssj'  data-rule='required;datetime' size='20'   value='<?php echo ($Rs["kssj"]); ?>'  ></td><td><label for='jssj_input' class='control-label x85'>结束时间:</label><input type='text' data-toggle='datepicker' data-pattern='yyyy-MM-dd HH:mm:ss' id='jssj' name='jssj'  data-rule='required;datetime' size='20'   value='<?php echo ($Rs["jssj"]); ?>'  ></td></tr>
<tr></tr>
<tr><td colspan=2><label for='title_input' class='control-label x85'>去向说明:</label><textarea name='title' data-rule='required;' cols='65' rows='5' ><?php echo ($Rs["title"]); ?></textarea></td></tr>
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