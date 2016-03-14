<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
<?php if(isset($sidebarData) && !empty($sidebarData)): ?>
  <ul class="list-group">
  <?php foreach ($sidebarData as $key => $value): ?>
  	<?php
	$classActive = null;
  	if(isset($value['active']) && $value['active'] === true){
  		$classActive = ' active';
  	}
  	$badge = null;
  	if(isset($value['badge']) && is_int($value['badge'])){
  		$badge = '<span class="badge">' . $value['badge'] . '</span>';
  	}
  	?>
	<?php echo '<li class="list-group-item'.$classActive.'">'.$value['text'] . $badge .'</li>'; ?>
  <?php endforeach;?>
  </ul>
<?php endif; ?>
</div><!--/.sidebar-offcanvas-->