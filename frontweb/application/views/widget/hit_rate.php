<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="page-header">
  <h2>MySQL检查工具组件</h2>
</div>

<p>
<a href="<?php echo site_url('widget/bigtable') ?>" class="btn btn-info  btn-large" >MySQL大表查询</a>
<a href="<?php echo site_url('widget/hit_rate') ?>" class="btn btn-info  btn-large" >MySQL命中率查询</a>
<a href="<?php echo site_url('widget/connect') ?>" class="btn btn-info  btn-large" >MySQL连接源查询</a>
</p>

<div class="page-header">
  <h4>检查数据库的相关命中率<small> &nbsp;&nbsp;请手动执行程序./check_mysql_widget_hit_rate.py启动一次检查，然后刷新该页面。</h4>
</div>


<table class="table table-hover table-striped  table-bordered table-condensed"  >
	<tr class="success">
		<th><center>服务器</center></th>
		<th ><center>Query_cache_hits</center></th>
        <th ><center>Key_buffer_read_hits</center></th>
		<th ><center>Key_buffer_write_hits</center></th>
		<th ><center>Thread_cache_hits</center></th>
        <th ><center>Key_blocks_used_rate</center></th>
        <th ><center>Created_tmp_disk_tables_rate</center></th>
        <th ><center>检查时间</center></th>

	</tr>
  	
 <?php if(!empty($datalist)) {?>
 <?php foreach ($datalist  as $item):?>
    <tr style="font-size: 12px;" >
        <td><?php  echo $item['host'].':'. $item['port'] ?></td>
        <td><?php echo $item['Query_cache_hits'] ?></td>
        <td><?php echo $item['Key_buffer_read_hits'] ?></td>
        <td><?php echo $item['Key_buffer_write_hits'] ?></td>
        <td><?php echo $item['Thread_cache_hits'] ?></td>
        <td><?php echo $item['Key_blocks_used_rate'] ?></td>
        <td><?php echo $item['Created_tmp_disk_tables_rate'] ?></td>
        <td><?php echo $item['create_time'] ?></td>
	</tr>
 <?php endforeach;?>
<?php }else{  ?>
<tr>
<td colspan="12">
<font color="red">对不起，没有查询到相关数据！</font>
</td>
</tr>
<?php } ?>
	 
</table>
