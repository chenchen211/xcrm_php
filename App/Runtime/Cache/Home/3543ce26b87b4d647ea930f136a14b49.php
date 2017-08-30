<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageHeader">
<form id="pagerForm" data-toggle="ajaxsearch" action="/xcrm/index.php/Home/Mytask" method="post">
	
	<input type="hidden" name="pageSize" value="<?php echo ($numPerPage); ?>">
    <input type="hidden" name="pageCurrent" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>">
	 
        <div class="bjui-searchBar">
            <label>关键词：</label><input type="text" value="<?php echo ($_REQUEST['keys']); ?>" name="keys" class="form-control" size="15" />
             <button type="submit"  class="btn-default" data-icon="search">查询</button>
              <a class="btn btn-orange" href="javascript:;" onclick="$(this).navtab('reloadForm', true);" data-icon="undo">清空查询</a>
			  <span <?php echo display(CONTROLLER_NAME.'/outxls'); ?> style="float:right;margin-right:20px;"><a href="/xcrm/index.php/Home/Mytask/outxls" class="btn btn-blue" data-toggle="doexport" data-confirm-msg="确定要导出吗？" data-icon="arrow-up">导出</a></span>
		</div> 
</form>
    
</div>
<div class="bjui-pageContent">
     <table data-toggle="tablefixed" data-width="100%" data-layout-h="0" data-nowrap="true">
        <thead>
            <tr>
            <th width="10" height="30"></th>
            <th data-order-direction='desc' data-order-field='id'>ID</th>
<th>接收人</th>
<th data-order-direction='desc' data-order-field='kssj'>开始时间</th>
<th data-order-direction='desc' data-order-field='jssj'>结束时间</th>
<th>任务标题</th>
<th>关联合同</th>
<th data-order-direction='desc' data-order-field='zhuangtai'>状态</th>
<th data-order-direction='desc' data-order-field='uname'>发布人</th>
<th data-order-direction='desc' data-order-field='addtime'>发布时间</th>
<th data-order-direction='desc' data-order-field='uuname'>更新人</th>

			<th>详细</th>
		    <th <?php echo display(CONTROLLER_NAME.'/edit'); ?> >编辑</th>
            </tr>
        </thead>
        <tbody>

          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
		   <td></td>
		   <td><?php echo ($v["id"]); ?></td>
<td><?php echo (msubstr($v["juname"],0,20)); ?></td>
<td><?php echo (substr($v["kssj"],0,10)); ?></td>
<td><?php echo (substr($v["jssj"],0,10)); ?></td>
<td><?php echo (msubstr($v["title"],0,20)); ?></td>
<td><?php echo (msubstr($v["jhname"],0,20)); ?></td>
<td><?php echo ($v["zhuangtai"]); ?></td>
<td><?php echo ($v["uname"]); ?></td>
<td><?php echo (substr($v["addtime"],0,10)); ?></td>
<td><?php echo ($v["uuname"]); ?></td>

		   <td><a href="/xcrm/index.php/Home/Mytask/view/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>"  data-toggle="dialog" data-width="900" data-height="500" data-id="dialog-mask" data-mask="true" >详细</a></td>
		   <td <?php echo display(CONTROLLER_NAME.'/edit'); ?> > <a href="/xcrm/index.php/Home/Mytask/edit/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>"   class="btn btn-green btn-sm" data-toggle="dialog" data-width="900" data-height="500" data-id="dialog-mask" data-mask="true" >编辑</a></td>
		   </td>
         </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="bjui-footBar">
        <div class="pages">
            <span>共 <?php echo ($totalCount); ?> 条  每页 <?php echo ($numPerPage); ?> 条</span>
        </div>
	    <div class="pagination-box" data-toggle="pagination" data-total="<?php echo ($totalCount); ?>" data-page-size="<?php echo ($numPerPage); ?>" data-page-current="<?php echo ($currentPage); ?>">
        </div>
    </div>
</div>