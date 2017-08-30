<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
    <form action="/xcrm/index.php/Home/Task/add/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
           <tbody>
			<tr><td><label for='juid_input' class='control-label x85'>接收人ID:</label><input type='text' id='juid' name='juid'  size='20' data-toggle='lookup' data-url='/xcrm/index.php/Home/public/user/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["juid"]); ?>'  ></td><td><label for='juname_input' class='control-label x85'>接收人:</label><input type='text' id='juname' name='juname'  size='20' data-toggle='lookup' data-url='/xcrm/index.php/Home/public/user/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["juname"]); ?>'  ></td></tr>
<tr><td><label for='kssj_input' class='control-label x85'>开始时间:</label><input type='text' data-toggle='datepicker' data-pattern='yyyy-MM-dd HH:mm:ss' id='kssj' name='kssj'  data-rule='required;datetime' size='20'   value='<?php echo ($Rs["kssj"]); ?>'  ></td><td><label for='jssj_input' class='control-label x85'>结束时间:</label><input type='text' data-toggle='datepicker' data-pattern='yyyy-MM-dd HH:mm:ss' id='jssj' name='jssj'  data-rule='required;' size='20'   value='<?php echo ($Rs["jssj"]); ?>'  ></td></tr>
<tr><td><label for='title_input' class='control-label x85'>任务标题:</label><input type='text' id='title' name='title' data-rule='required;' size='20'   value='<?php echo ($Rs["title"]); ?>'  ></td></tr>
<tr><td><label for='jhid_input' class='control-label x85'>关联合同:</label><input type='text' id='jhid' name='jhid'  size='20' data-toggle='lookup' data-url='/xcrm/index.php/Home/public/htname/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["jhid"]); ?>'  ></td><td><label for='jhname_input' class='control-label x85'>关联合同:</label><input type='text' id='jhname' name='jhname'  size='20' data-toggle='lookup' data-url='/xcrm/index.php/Home/public/htname/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["jhname"]); ?>'  ></td></tr>

<tr><td colspan=2><label for='beizhu_input' class='control-label x85'>任务内容:</label><div style='display: inline-block; vertical-align: middle;'><textarea name='beizhu'   data-toggle='kindeditor' data-minheight='150' data-items='fontname, fontsize, |, forecolor, hilitecolor, bold, italic, underline, removeformat, |, justifyleft, justifycenter, justifyright, insertorderedlist, insertunorderedlist, |, emoticons, image, link'><?php echo ($Rs["beizhu"]); ?></textarea></div></td></tr></tr>

<tr><td colspan=2><label for='attid_input' class='control-label x85'>上传附件:</label><div style='display: inline-block; vertical-align: middle;'><IFRAME   src='/xcrm/index.php/Home/Public/attfile/attid/<?php echo ($attid); ?>/'  frameBorder=0 width='100%' height='30' scrolling=no ></IFRAME><input type='hidden' id='attid' name='attid'  value='<?php echo ($attid); ?>'  ></div></td></tr>
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