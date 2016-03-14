<div class="bs-example data-example-id=table-within-panel"> 
	<div class="panel panel-default">  
	  <div class="panel-heading"><?php echo $panelTitle; ?></div> 
	  <div class="panel-body"> 
	    <p><?php echo $panelContent; ?></p>
	  </div>
	  <?php
	  if(isset($panelTable) && !empty($panelTable)){
	  	$tContent = $tHead = null;
	  	foreach ($panelTable as $index => $row) {
	  		if(!empty($row)){
	  			if($index === 0){
	  				$tHead = '<thead><tr>';
	  				foreach ($row as $key => $value) {
	  					$tHead .= '<th>'.$value.'</th>';
	  				}
	  				$tHead .= '</tr></thead>';
	  			} else {
	  				$tContent .= '<tr>';
	  				foreach ($row as $key => $value) {
	  					$tag = 'td';
	  					if($key === 0)
	  						$tag = 'th';

	  					$tContent .= "<$tag>".$value."<//$tag>";
	  				}
	  				$tContent .= '</tr>';
	  			}
		  	}
	  	}
	  	$table = '<table class="table">' . $tHead . '<tbody>' . $tContent . '</tbody></table>';
	  	echo $table;
	  }?>
	  
	</div>
</div>