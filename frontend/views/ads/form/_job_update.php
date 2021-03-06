<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 4/11/2018
 * Time: 9:22 AM
 */

use kartik\depdrop\DepDrop;
use kartik\select2\Select2;
use kartik\money\MaskMoney;
use trntv\filekit\widget\Upload;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\data\ArticlePackage;
use dungphanxuan\vnlocation\models\City;
use froala\froalaeditor\FroalaEditorWidget;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $model common\models\Article */
/* @var $modelDetail common\models\ArticleDetail */
/* @var $categories common\models\ArticleCategory[] */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $prices */
/* @var $areas */
/* @var $cities */
/* @var $dataSubCat */
/* @var $dataDistrict */
/* @var $dataWard */
/* @var $ranks */
/* @var $article_type */
$this->title = 'Cập nhật việc làm';
?>
<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-9 page-content">
                <div class="inner-box category-content">
                    <h2 class="title-2 uppercase"><strong> <i class="icon-briefcase"></i> Cập nhật việc làm </strong>
                    </h2>

                    <div class="row">
                        <div class="col-sm-12">
                            <?php echo $this->render('_job_form', [
                                'model'         => $model,
                                'modelDetail'   => $modelDetail,
                                'modelCategory' => $modelCategory,
                                'categories'    => $categories,
                                'dataSubCat'    => $dataSubCat,
                                'article_type'  => $article_type,
                                'cities'        => $cities,
                                'dataDistrict'  => $dataDistrict,
                                'dataWard'      => $dataWard,
                                'jobTypes'      => $jobTypes,
                                'jobCategories' => $jobCategories
                            ]) ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.page-content -->

            <div class="col-md-3 reg-sidebar">
                <div class="reg-sidebar-inner text-center">
                    <?php echo $this->render('_sidebar_job_form', []) ?>
                </div>
            </div>
            <!--/.reg-sidebar-->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.main-container -->
