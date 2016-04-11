<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use common\models\LookupState;
use common\models\LookupBahagian;
use common\models\LookupDistrict;
use common\models\LookupMukim;
use common\models\LookupSubBase;
use common\models\LookupCluster;
use common\models\LookupKampung;

$state = ArrayHelper::map(LookupState::find()->where(['kawasan_perlaksanaan'=>'Ya'])->asArray()->all(), 'state_id', 'state');
?>
<div class="alert alert-danger">Sila Buat Pilihan Kawasan Perlaksanaan !</div>

<?= Html::beginForm(['/kds-profil/create','id'=>'profil'], 'post', ['class' => 'dropdown']); ?>

<label class='control-label' >Negeri</label>
<?= Html::dropDownList('state_id', null,$state,
	[
		'prompt' => '--Sila Pilih--',
		'class'=>'form-control',
		'id'=>'state',
		'onchange' => '$.post( "'.Yii::$app->urlManager->createUrl(['dropdown/liststate','id'=>'']).'"+$(this).val(), function( data ) {$( "#show1" ).html( data );});'

	]
) ?>
<div class='help-block'></div>

<div id="show1"></div>

<div id="show2"></div>

<div id="show3"></div>

<div id="show4"></div>

<div id="show5"></div>

<div class="form-group">
    <?= Html::submitButton('Hantar', ['class' => 'btn btn-primary']) ?>
</div>

<?php Html::endForm() ?>
