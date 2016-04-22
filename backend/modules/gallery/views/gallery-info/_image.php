<?php
use yii\helpers\Html;
?>

    <!-- Full Page Image Background Carousel Header -->
    <div id="carousel" class="carousel slide">

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
          <?php foreach ($models as $key => $value) { ?>
            <div class="item">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?php echo $value['path']; ?>');"></div>
                <div class="carousel-caption">
                  <div class="caption-wall">
                    <h1><?php echo $value['caption_1']; ?></h1>
                    <p class="lead"><?php echo $value['caption_2']; ?></p>
                  </div>
                </div>
            </div>
          <?php } ?>

        </div>

   

    </div>
