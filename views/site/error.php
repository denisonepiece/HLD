<?php


use app\assets\ContactAsset;

//$this->registerJs("var rellax = new Rellax('.rellax');");

$this->title = 'HLD agency';
ContactAsset::register($this);

$this->title = $name;
?>
<main>
    <section class="section start-sec v3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 col-sm col-xs">
                    <div class="header-block tog-underCont v0">
                        <h1 class="heading hGray-v2">Вы зашли слишком далеко</h1>
                        <p class="p-style p-v1 header-block__p tog-underCont">Похоже, вы попали на страницу, которая больше не существует ;(</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md col-sm col-xs">
                    <a href="<?=\yii\helpers\Url::to(['site/index']) ?>" class="link-btn one-link-btn modal-open">
                        <span>Перейти на главную</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60.9 23">
                            <polygon points="47.4,1.3 45.7,3.5 54.4,10.2 1.5,10.2 1.5,12.9 54.4,12.9 45.7,19.6 47.4,21.8 60.6,11.5 "/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>