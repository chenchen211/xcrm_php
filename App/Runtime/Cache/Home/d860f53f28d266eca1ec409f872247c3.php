<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
    <form action="/index.php/Home/Pro/edit/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
           <tbody>
		   <tr><td><label for='name_input' class='control-label x85'>产品名称:</label><input type='text' id='name' name='name' data-rule='required;' size='20'   value='<?php echo ($Rs["name"]); ?>'  ></td><td><label for='fenlei_input' class='control-label x85'>产品分类:</label><input type='text' id='fenlei' name='fenlei'  size='20' data-toggle='lookup' data-url='/index.php/Home/public/procate/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["fenlei"]); ?>'  ></td></tr>
<tr><td><label for='jiage_input' class='control-label x85'>采购价格:</label><input type='text' id='jiage' name='jiage'  size='20'   value='<?php echo ($Rs["jiage"]); ?>'  ></td><td><label for='sjiage_input' class='control-label x85'>销售价格:</label><input type='text' id='sjiage' name='sjiage'  size='20'   value='<?php echo ($Rs["sjiage"]); ?>'  ></td></tr>
<tr><td><label for='type_input' class='control-label x85'>计量单位:</label><select name='type'  data-toggle='selectpicker' ><option value=''>请选择</option><?php if(is_array(C("PRO_TYPE"))): $i = 0; $__LIST__ = C("PRO_TYPE");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><option value='<?php echo ($type); ?>' <?php if( $type == $Rs['type'] ): ?>selected<?php endif; ?> ><?php echo ($type); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></td><td><label for='title_input' class='control-label x85'>型号规格:</label><input type='text' id='title' name='title'  size='20'   value='<?php echo ($Rs["title"]); ?>'  ></td></tr>
<tr></tr>
<tr><td colspan=2><label for='beizhu_input' class='control-label x85'>详细说明:</label><div style='display: inline-block; vertical-align: middle;'><textarea name='beizhu'   data-toggle='kindeditor' data-minheight='150' data-items='fontname, fontsize, |, forecolor, hilitecolor, bold, italic, underline, removeformat, |, justifyleft, justifycenter, justifyright, insertorderedlist, insertunorderedlist, |, emoticons, image, link'><?php echo ($Rs["beizhu"]); ?></textarea></div></td></tr>
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