<div class="tiles-wrap section__inner-content tog-underElements">
    <?php foreach ($profile as $profile): ?>
        <a href="<?= \yii\helpers\Url::to(['site/view-case', 'id' => $profile['id']]) ?>" class="tiles-wrap__tile"
           data-tilt data-tilt-scale="1.06" data-tilt-speed="500" data-tilt-max="10">
            <div class="tiles-wrap__tile-inner">
                <div class="tile-inner__overlay">
                    <div class="tile-content">
                        <div>
                            <h5><?= $profile['article'] ?></h5>
                        </div>
                        <div><span class="label"><?= $type[$profile['type_service_id']]['type'] ?></span></div>
                    </div>
                </div>
                <div class="tiles-wrap__bg"
                     style="background: url(/img/content/portfolio/<?= $profile['image'] ?>); background-size: cover;background-position: center center; background-repeat: no-repeat;"></div>
            </div>
        </a>
    <?php endforeach; ?>
</div>
<script src="libs/vanilla-tilt.min.js"></script>
