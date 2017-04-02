<div class = "marketing">
    <?php $projects = $di->projects->getProjects(); ?>
    <?php $projectsCount = count($projects); ?>

    <?php for ($i = 0; $i < $projectsCount; $i++): ?>
    <?php $p = $projects[$i] ?>

    <?php if ($i % 2 === 0): ?>
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading"><?= $p->getName(); ?></h2>
            <p class="lead"><?= $p->getDescription(); ?></p>
        </div>
        <div class="col-md-5">
            <img class = "featurette-image img-responsive center-block" src="<?= SERVER_PATH . 'img/' . $p->getFirstImage(); ?>" alt="<?= $p->getName(); ?>">
        </div>
    </div>

    <?php else: ?>

    <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading"><?= $p->getName(); ?></h2>
            <p class="lead"><?= $p->getDescription(); ?></p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img class = "featurette-image img-responsive center-block" src="<?= SERVER_PATH . 'img/' . $p->getFirstImage(); ?>" alt="<?= $p->getName(); ?>">
        </div>
    </div>
    <?php endif; ?>

    <?php if ($i !== $projectsCount - 1): ?>
    <hr class="featurette-divider">
    <?php endif; ?>

    <?php endfor; ?>


</div>
