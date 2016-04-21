<?php
use yii\helpers\Html;
?>
	<div id="mycarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  	<?php foreach ($models as $key => $value) { ?>
    <div class="item">
        <img src="<?php echo $value['path']?>" data-color="lightblue" alt="First Image">
        <div class="carousel-caption">
            <h3><?php echo $value['caption_1']?></h3>
        </div>
    </div>
    <?php } ?>
  </div>

  
</div>