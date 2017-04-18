<?php
use yii\helpers\Url;

?>
<li>
    <a href="<?= Url::to(['site/catalog', 'name' => $category['name'], 'id' => $category['id']])?>">
        <?= $category['name']?>
        <?php if( isset($category['childs']) ): ?>
            <span class="badge"><i class="glyphicon glyphicon-triangle-bottom"></i></span>
        <?php endif;?>
    </a>
    <?php if( isset($category['childs']) ): ?>
        <ul>
            <?= $this->getMenuHtml($category['childs'])?>
        </ul>
    <?php endif;?>
</li>