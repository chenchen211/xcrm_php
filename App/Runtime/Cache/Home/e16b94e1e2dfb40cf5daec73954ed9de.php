<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageHeader">
<form id="pagerForm" data-toggle="ajaxsearch" action="/index.php/Home/Ccontact" method="post">
	
	<input type="hidden" name="pageSize" value="<?php echo ($numPerPage); ?>">
    <input type="hidden" name="pageCurrent" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>">
	 
        <div class="bjui-searchBar">
		  <label>筛选:</label>
            <select name="filter" data-toggle="selectpicker">
			<option value="">全部</option>
			    <?php if(is_array($filters)): foreach($filters as $key=>$v): ?><option value="<?php echo ($v["title"]); ?>"  <?php if($v["title"] == $_REQUEST['filter'] ): ?>selected<?php else: echo ($_REQUEST['filter']); endif; ?> ><?php echo ($v["title"]); ?></option><?php endforeach; endif; ?>
            </select>&nbsp;
            <label>关键词：</label><input type="text" value="<?php echo ($_REQUEST['keys']); ?>" name="keys" class="form-control" size="15" />
             <button type="submit"  class="btn-default" data-icon="search">查询</button>
              <a class="btn btn-orange" href="javascript:;" onclick="$(this).navtab('reloadForm', true);" data-icon="undo">清空查询</a>
		      <span class="right"><a href="/index.php/Home/Ccontact/outxls" class="btn btn-blue" data-toggle="doexport" data-confirm-msg="确定要导出吗？" data-icon="arrow-up">导出</a></span>
		</div> 
</form>
    
</div>
<div class="bjui-pageContent">
     <table data-toggle="tablefixed" data-width="100%" data-layout-h="0" data-nowrap="true">
        <thead>
            <tr>
            <th width="30" height="30"></th>
            <th width="30">编号</th>
			<th>登陆账号</th>
            <th>姓名</th>
			<th>性别</th>
		    <th>所在部门</th>
	    	<th>担任职位</th>
		    <th>固定电话</th>
            <th>移动电话</th>
            <th>电子邮箱</th>
			<th>内线/短号</th>
			<th>QQ</th>
            </tr>
        </thead>
        <tbody>

          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
		   <td></td>
		   <td><?php echo ($v["id"]); ?></td>
           <td><?php echo ($v["username"]); ?></td>
           <td><?php echo ($v["truename"]); ?></td>
		   <td><?php echo ($v["sex"]); ?></td>
		   <td><?php echo ($v["depname"]); ?> </td>
		   <td><?php echo ($v["posname"]); ?></td>
		   <td><?php echo ($v["tel"]); ?></td>
           <td><?php echo ($v["phone"]); ?></td>
           <td><?php echo ($v["email"]); ?></td>
		   <td><?php echo ($v["neixian"]); ?></td>
		   <td><?php echo ($v["qq"]); ?></td> 
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