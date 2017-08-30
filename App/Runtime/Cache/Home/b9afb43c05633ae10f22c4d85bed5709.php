<?php if (!defined('THINK_PATH')) exit();?>
<div class="bjui-pageContent">
     <table data-toggle="tablefixed" data-width="100%" data-layout-h="0" data-nowrap="true">
        <thead>
            <tr>
            <th width="10" height="30"></th>
            </tr>
        </thead>
        <tbody>

          <tr>
		   <td>
            <?php $list = M('hetong')->distinct('name')->field('name')->select(); ?>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><img src='/index.php/Home/Htfenxi/name/user/<?php echo ($v["name"]); ?>'> 
			<img src='/index.php/Home/Htfenxi/names/user/<?php echo ($v["name"]); ?>'> 
			<img src='/index.php/Home/Htfenxi/namew/user/<?php echo ($v["name"]); ?>'> 
			<img src='/index.php/Home/Htfenxi/namef/user/<?php echo ($v["name"]); ?>'><?php endforeach; endif; else: echo "" ;endif; ?>
</td>
         </tr> 

        </tbody>
    </table>
</div>