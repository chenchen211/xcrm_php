<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-bordered table-striped table-hover">
           <tbody>
		   <tr><td><label for='id_input' class='control-label x85'>ID:</label><?php echo ($Rs["id"]); ?></td><td><label for='juname_input' class='control-label x85'>员工姓名:</label><?php echo ($Rs["juname"]); ?></td></tr>
<tr><td><label for='title_input' class='control-label x85'>调动原因:</label><?php echo ($Rs["title"]); ?></td><td><label for='type_input' class='control-label x85'>调动类型:</label><?php echo ($Rs["type"]); ?></td></tr>
<tr><td><label for='ddrq_input' class='control-label x85'>调动日期:</label><?php echo ($Rs["ddrq"]); ?></td><td><label for='sxrq_input' class='control-label x85'>生效日期:</label><?php echo ($Rs["sxrq"]); ?></td></tr>
<tr><td><label for='bumen_input' class='control-label x85'>调动前部门:</label><?php echo ($Rs["bumen"]); ?></td><td><label for='hbumen_input' class='control-label x85'>调用后部门:</label><?php echo ($Rs["hbumen"]); ?></td></tr>
<tr><td><label for='zhiwei_input' class='control-label x85'>调动前职位:</label><?php echo ($Rs["zhiwei"]); ?></td><td><label for='hzhiwei_input' class='control-label x85'>调动后职位:</label><?php echo ($Rs["hzhiwei"]); ?></td></tr>
<tr></tr>
<tr></tr>
<tr><td><label for='uname_input' class='control-label x85'>添加人:</label><?php echo ($Rs["uname"]); ?></td><td><label for='addtime_input' class='control-label x85'>添加时间:</label><?php echo ($Rs["addtime"]); ?></td></tr>
<tr><td><label for='uuname_input' class='control-label x85'>更新人:</label><?php echo ($Rs["uuname"]); ?></td><td><label for='updatetime_input' class='control-label x85'>更新时间:</label><?php echo ($Rs["updatetime"]); ?></td></tr>
<tr></tr>
<tr><td colspan=2><label for='beizhu_input' class='control-label x85'>备注:</label><div style='display: inline-block; vertical-align: middle;'><textarea name='beizhu'   data-toggle='kindeditor' data-minheight='150' data-items='fontname, fontsize, |, forecolor, hilitecolor, bold, italic, underline, removeformat, |, justifyleft, justifycenter, justifyright, insertorderedlist, insertunorderedlist, |, emoticons, image, link'><?php echo ($Rs["beizhu"]); ?></textarea></div></td></tr></tr>
<tr><td colspan=2><label for='attid_input' class='control-label x85'>上传附件:</label>
			<?php $attlist=M('files')->where('attid='.$Rs['attid'])->select(); ?>	
	         <?php if(is_array($attlist)): foreach($attlist as $key=>$vf): echo (truename($vf['uid'])); ?>:<a href='/xcrm/<?php echo ($vf['folder']); echo ($vf['filename']); ?>' target=_blank><?php echo ($vf['filedesc']); ?></A>&nbsp;&nbsp;<?php echo ($vf['addtime']); ?><Br/><label  class='control-label x85'></label><?php endforeach; endif; ?></td></tr>
           </tbody>
          </table>
        </div>
		<div class="bjui-footBar">
        <ul>
            <li><button type="button" class="btn-close" data-icon="close">关闭</button></li>
        </ul>
    </div>
</div>