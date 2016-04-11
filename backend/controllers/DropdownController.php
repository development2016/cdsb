<?php

namespace backend\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Html;
use common\models\LookupState;
use common\models\LookupBahagian;
use common\models\LookupDistrict;
use common\models\LookupSubBase;
use common\models\LookupCluster;
use common\models\LookupKampung;
use common\models\LookupMukim;
use yii\helpers\ArrayHelper;
/**
 * PeopleController implements the CRUD actions for People model.
 */
class DropdownController extends Controller
{

	// this function to change sarawak to bahaian ,johor to district and etc
	public function actionSukarelawan()
	{
        return $this->renderAjax('sukarelawan');
	}
	public function actionIsu()
	{
        return $this->renderAjax('isu');
	}
	public function actionProfil()
	{
        return $this->renderAjax('profil');
	}



	public function actionListstate($id)
	{

		if ($id == 21) {

			$model = LookupBahagian::find() ->where(['state_id' => $id])->all();
	        $listData=ArrayHelper::map($model,'bahagian_id','bahagian');
	        echo "<label class='control-label' >Bahagian</label>";
			echo Html::dropDownList('bahagian_id', null,$listData,['prompt' => '--Sila Pilih--','class'=>'form-control','id'=>'bahagian','onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl(['dropdown/listdaerahsarawak','id'=>'']).'"+$(this).val(), function( data ) {$( "#show2" ).html( data );});']);
			echo "<div class='help-block'></div>";

		} elseif ($id == 22) {

			$model = LookupDistrict::find() ->where(['state_id' => $id])->all();
	        $listData=ArrayHelper::map($model,'district_id','district');
	        echo "<label class='control-label' >Daerah</label>";
			echo Html::dropDownList('district_id', null,$listData,['prompt' => '--Sila Pilih--','class'=>'form-control','id'=>'district','onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl(['dropdown/listmukimjohor','id'=>'']).'"+$(this).val(), function( data ) {$( "#show2" ).html( data );});']);
			echo "<div class='help-block'></div>";

		} else {

			$model = LookupDistrict::find() ->where(['state_id' => $id])->all();
	        $listData=ArrayHelper::map($model,'district_id','district');
	        echo "<label class='control-label' >Daerah</label>";
			echo Html::dropDownList('district_id', null,$listData,['prompt' => '--Sila Pilih--','class'=>'form-control','id'=>'district','onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl(['dropdown/listsubbase','id'=>'']).'"+$(this).val(), function( data ) {$( "#show2" ).html( data );});']);
			echo "<div class='help-block'></div>";

		}


	}
	// for sarawak
	public function actionListdaerahsarawak($id)
	{
			$model = LookupDistrict::find() ->where(['bahagian_id' => $id])->all();
	        $listData=ArrayHelper::map($model,'district_id','district');
	        echo "<label class='control-label' >Daerah</label>";
			echo Html::dropDownList('district_id', null,$listData,['prompt' => '--Sila Pilih--','class'=>'form-control','id'=>'district','onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl(['dropdown/listsubbasesarawak','id'=>'']).'"+$(this).val(), function( data ) {$( "#show3" ).html( data );});']);
			echo "<div class='help-block'></div>";
	}

	public function actionListsubbasesarawak($id)
	{
			$model = LookupSubBase::find() ->where(['district_id' => $id])->all();
	        $listData=ArrayHelper::map($model,'sub_base_id','sub_base');
	        echo "<label class='control-label' >Sub Base</label>";
			echo Html::dropDownList('sub_base_id', null,$listData,['prompt' => '--Sila Pilih--','class'=>'form-control','id'=>'sub_base','onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl(['dropdown/listcluster','id'=>'']).'"+$(this).val(), function( data ) {$( "#show4" ).html( data );});']);
			echo "<div class='help-block'></div>";
	}
	//



	// for johor
	public function actionListmukimjohor($id)
	{
			$model = LookupMukim::find() ->where(['district_id' => $id])->all();
	        $listData=ArrayHelper::map($model,'mukim_id','mukim');
	        echo "<label class='control-label' >Mukim</label>";
			echo Html::dropDownList('mukim_id', null,$listData,['prompt' => '--Sila Pilih--','class'=>'form-control','id'=>'mukim','onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl(['dropdown/listsubbasejohor','id'=>'']).'"+$(this).val(), function( data ) {$( "#show3" ).html( data );});']);
			echo "<div class='help-block'></div>";

	}
	public function actionListsubbasejohor($id)
	{
			$model = LookupSubBase::find() ->where(['mukim_id' => $id])->all();
	        $listData=ArrayHelper::map($model,'sub_base_id','sub_base');
	        echo "<label class='control-label' >Sub Base</label>";
			echo Html::dropDownList('sub_base_id', null,$listData,['prompt' => '--Sila Pilih--','class'=>'form-control','id'=>'sub_base','onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl(['dropdown/listcluster','id'=>'']).'"+$(this).val(), function( data ) {$( "#show4" ).html( data );});']);
			echo "<div class='help-block'></div>";
	}
	//


	// for another state
	public function actionListsubbase($id)
	{
			$model = LookupSubBase::find() ->where(['district_id' => $id])->all();
	        $listData=ArrayHelper::map($model,'sub_base_id','sub_base');
	        echo "<label class='control-label' >Sub Base</label>";
			echo Html::dropDownList('sub_base_id', null,$listData,['prompt' => '--Sila Pilih--','class'=>'form-control','id'=>'sub_base','onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl(['dropdown/listcluster','id'=>'']).'"+$(this).val(), function( data ) {$( "#show3" ).html( data );});']);
			echo "<div class='help-block'></div>";
	}




	// for all
	public function actionListcluster($id)
	{
			$model = LookupCluster::find() ->where(['sub_base_id' => $id])->all();
	        $listData=ArrayHelper::map($model,'cluster_id','cluster');
	        echo "<label class='control-label' >Cluster</label>";
			echo Html::dropDownList('cluster_id', null,$listData,['prompt' => '--Sila Pilih--','class'=>'form-control','id'=>'cluster','onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl(['dropdown/listkampung','id'=>'']).'"+$(this).val(), function( data ) {$( "#show5" ).html( data );});']);
			echo "<div class='help-block'></div>";
	}

	public function actionListkampung($id)
	{
			$model = LookupKampung::find() ->where(['cluster_id' => $id])->all();
	        $listData=ArrayHelper::map($model,'kampung_id','kampung');
	        echo "<label class='control-label' >Kampung</label>";
			echo Html::dropDownList('kampung_id', null,$listData,['prompt' => '--Sila Pilih--','class'=>'form-control','id'=>'kampung',]);
			echo "<div class='help-block'></div>";
	}
	//



}
