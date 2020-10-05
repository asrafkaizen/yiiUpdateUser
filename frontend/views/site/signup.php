<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
//goto5: edit view accordingly. add input fields in the form
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'fname')->textInput()->label('Full name') ?>

                <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(), [
                                        'mask' => '[99999999999999]'])->label('Phone number') ?>
                
                <?= $form->field($model, 'zone')->dropdownList([
                    'tengah' => 'tengah',
                    'utara' => 'utara',
                    'selatan' => 'selatan',
                    'timur' => 'timur',
                    'international' => 'international',
                ],
                ['prompt' => 'select zone'])->label('Zone')
                /* retrieve item list from db
                $items = Category::find()
                ->select(['label'])
                ->indexBy('id')
                ->column();
                */
                ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
