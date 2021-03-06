<?php 
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<div class="content">
            <div class="container-fluid">
                <div id="pad-wrapper" class="new-user">
                    <div class="row-fluid header">
                        <h3>添加商品</h3></div>
                    <div class="row-fluid form-wrapper">
                        <!-- left column -->
                        <div class="span9 with-sidebar">
                            <div class="container">
                            <?php if(Yii::$app->session->hasFlash('info')){
                                echo Yii::$app->session->getFlash('info');
                            }
                            ?>
                            <?php $form=ActiveForm::begin([
                            'options'=>['class'=>'new_user_form inline-input',
                            'enctype'=>'multipart/form-data'],
                            'fieldConfig'=>['template'=>'<div class="form-group field-cates required"><div class="span12 field-box">{label}{input}{error}</div></div>'],
                            ])?>
                            <?php echo $form->field($model,'cateid')->dropDownList($list);?>
                            <?php echo $form->field($model,'title')->textInput(['class'=>'span9']);?>
                            <?php echo $form->field($model,'summary')->textInput(['class'=>'span9']);?>
                            <?php echo $form->field($model,'desc')->textarea(['class'=>'span9 wysihtml5','style'=>'margin-left:120px','id'=>"wysi"]);?>
                            <?php echo $form->field($model,'price')->textInput(['class'=>'span9']);?>
                            <?php echo $form->field($model,'ishot')->radioList(['1'=>'是','0'=>'否'],['class'=>'span8']);?>
                            <?php echo $form->field($model,'issale')->radioList(['1'=>'是','0'=>'否'],['class'=>'span8']);?>
                            <?php echo $form->field($model,'saleprice')->textInput(['class'=>'span9']);?>
                            <?php echo $form->field($model,'num')->textInput(['class'=>'span9']);?>
                            <?php echo $form->field($model,'isshelve')->radioList(['1'=>'是','0'=>'否'],['class'=>'span8']);?>
                            <?php echo $form->field($model,'isrecommend')->radioList(['1'=>'是','0'=>'否'],['class'=>'span8']);?>
                            <?php echo $form->field($model,'cover')->fileInput(['class'=>'span9']);?>
                            <?php echo $form->field($model,'pics[]')->fileInput(['class'=>'span9',"multiple"=>true]);?>
                                    <hr>
                                    <input type='button' id="addpic" value='增加一个'>
                                    <div class="span11 field-box actions">
                                    <?php echo Html::submitButton('提交',['class'=>'btn-glow primary'])?>
                                        <span>OR</span>
                                        <?php echo Html::resetButton('取消',['class'=>'btn-glow default'])?></div>
                                <?php ActiveForm::end();?>
                            </div>
                        </div>
                        <!-- side right column -->
                        <div class="span3 form-sidebar pull-right">
                            <div class="alert alert-info hidden-tablet">
                                <i class="icon-lightbulb pull-left"></i>请在左侧表单当中填入要添加的商品信息,包括商品名称,描述,图片等</div>
                            <h6>商城用户说明</h6>
                            <p>可以在前台进行购物</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>