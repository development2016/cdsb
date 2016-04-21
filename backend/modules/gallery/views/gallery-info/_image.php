<?php 
use yii\helpers\Html;

?>
<div id="slider">

  <ul>
    <?php foreach ($models as $key => $value) { ?>

    	<li>
    		<?= Html::img($value['path'],['class'=>'imgshow']);?>
    			<p class="caption_1"><?php echo $value['caption_1'] ?></p>
            	<p class="caption_2"><?php echo $value['caption_2'] ?></p>

    	</li>

    <?php } ?>


  </ul>  
</div>

