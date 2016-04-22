<?php
use yii\helpers\Html;
?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->

  <!-- Wrapper for slides -->
  <div class="carousel-inner">

    <?php foreach ($models as $key => $value) { ?>
      <div class="item">
        <img src="<?php echo $value['path']; ?>" alt="" />
        <div class="container">
          <div class="carousel-caption">
            <h1><?php echo $value['caption_1']; ?></h1>
            <p class="lead"><?php echo $value['caption_2']; ?></p>
          </div>
        </div>
      </div>
    
    <?php } ?>



  </div>


</div>