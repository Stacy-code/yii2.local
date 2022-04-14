<?php
/**
 * @var \yii\widgets\ActiveForm $form
 * @var \yii\db\ActiveRecord $searchModel
 * @var array $field
 */
?>

<div class="<?=$field['col']?>">
    <?=$form->field($searchModel , $field['attribute'],['template' => "{label}{input}",])->textInput(["type" => "number"])?>
</div>