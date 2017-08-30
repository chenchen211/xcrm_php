<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
    <form action="/index.php/Home/Custcon/add/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
           <tbody>
			<tr><td><label for='jcid_input' class='control-label x85'>客户ID:</label><input type='text' id='jcid' name='jcid'  size='20' data-toggle='lookup' data-url='/index.php/Home/public/cname/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($jcid); ?>'  ></td><td><label for='jcname_input' class='control-label x85'>客户名称:</label><input type='text' id='jcname' name='jcname'  size='0' data-toggle='lookup' data-url='/index.php/Home/public/cname/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($jcname); ?>'  ></td></tr>
<tr><td><label for='xingming_input' class='control-label x85'>姓名:</label><input type='text' id='xingming' name='xingming'  size='20'   value='<?php echo ($Rs["xingming"]); ?>'  ></td><td><label for='sex_input' class='control-label x85'>性别:</label><select name='sex'  data-toggle='selectpicker' ><option value=''>请选择</option><?php if(is_array(C("BASE_SEX"))): $i = 0; $__LIST__ = C("BASE_SEX");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sex): $mod = ($i % 2 );++$i;?><option value='<?php echo ($sex); ?>' <?php if( $sex == $Rs['sex'] ): ?>selected<?php endif; ?> ><?php echo ($sex); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></td></tr>
<tr><td><label for='bumen_input' class='control-label x85'>部门职务:</label><input type='text' id='bumen' name='bumen'  size='20'   value='<?php echo ($Rs["bumen"]); ?>'  ></td><td><label for='phone_input' class='control-label x85'>手机号码:</label><input type='text' id='phone' name='phone' data-rule='required;' size='20'   value='<?php echo ($Rs["phone"]); ?>'  ></td></tr>
<tr><td><label for='email_input' class='control-label x85'>EMAIL:</label><input type='text' id='email' name='email'  size='20'   value='<?php echo ($Rs["email"]); ?>'  ></td><td><label for='qq_input' class='control-label x85'>QQ:</label><input type='text' id='qq' name='qq'  size='20'   value='<?php echo ($Rs["qq"]); ?>'  ></td></tr>
<tr><td><label for='name_input' class='control-label x85'>爱好:</label><input type='text' id='name' name='name'  size='20'   value='<?php echo ($Rs["name"]); ?>'  ></td></tr>
<tr></tr>
<tr><td colspan=2><label for='beizhu_input' class='control-label x85'>备注:</label><textarea name='beizhu'  cols='65' rows='5' ><?php echo ($Rs["beizhu"]); ?></textarea></td></tr>
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