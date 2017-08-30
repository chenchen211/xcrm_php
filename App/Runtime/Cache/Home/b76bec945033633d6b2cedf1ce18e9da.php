<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
    <form action="/index.php/Home/Contact/edit/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
           <tbody>
		   <tr><td><label for='xingming_input' class='control-label x85'>姓名:</label><input type='text' id='xingming' name='xingming' data-rule='required;' size='20'   value='<?php echo ($Rs["xingming"]); ?>'  ></td><td><label for='sex_input' class='control-label x85'>性别:</label><?php if(is_array(C("BASE_SEX"))): $i = 0; $__LIST__ = C("BASE_SEX");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sex): $mod = ($i % 2 );++$i;?><input type='radio'  name='sex' data-toggle='icheck'  data-label='<?php echo ($sex); ?>' value='<?php echo ($sex); ?>' <?php if( $sex == $Rs['sex'] ): ?>checked data-rule='checked'<?php endif; ?> ><?php endforeach; endif; else: echo "" ;endif; ?></td></tr>
<tr><td><label for='danwei_input' class='control-label x85'>单位:</label><input type='text' id='danwei' name='danwei'  size='20'   value='<?php echo ($Rs["danwei"]); ?>'  ></td><td><label for='zhiwu_input' class='control-label x85'>职位:</label><input type='text' id='zhiwu' name='zhiwu'  size='20'   value='<?php echo ($Rs["zhiwu"]); ?>'  ></td></tr>
<tr><td><label for='dianhua_input' class='control-label x85'>固定电话:</label><input type='text' id='dianhua' name='dianhua'  size='20'   value='<?php echo ($Rs["dianhua"]); ?>'  ></td><td><label for='phone_input' class='control-label x85'>手机号码:</label><input type='text' id='phone' name='phone'  size='20'   value='<?php echo ($Rs["phone"]); ?>'  ></td></tr>
<tr><td><label for='email_input' class='control-label x85'>电子邮箱:</label><input type='text' id='email' name='email'  size='20'   value='<?php echo ($Rs["email"]); ?>'  ></td><td><label for='qq_input' class='control-label x85'>QQ:</label><input type='text' id='qq' name='qq'  size='20'   value='<?php echo ($Rs["qq"]); ?>'  ></td></tr>
<tr><td><label for='shuxing_input' class='control-label x85'>属性:</label><?php if(is_array(C("BASE_SHUXING"))): $i = 0; $__LIST__ = C("BASE_SHUXING");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shuxing): $mod = ($i % 2 );++$i;?><input type='radio'  name='shuxing' data-toggle='icheck'  data-label='<?php echo ($shuxing); ?>' value='<?php echo ($shuxing); ?>' <?php if( $shuxing == $Rs['shuxing'] ): ?>checked data-rule='checked'<?php endif; ?> ><?php endforeach; endif; else: echo "" ;endif; ?></td><td><label for='fenlei_input' class='control-label x85'>分类:</label><input type='text' id='fenlei' name='fenlei'  size='20' data-toggle='lookup' data-url='/index.php/Home/public/mycate/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["fenlei"]); ?>'  ></td></tr>
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