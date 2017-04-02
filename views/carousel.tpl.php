<div id="mainCarousel" class="carousel slide carousel-main" data-ride="carousel">
    <?php $projects = $di->projects->getProjects(); ?>
    <?php $projectsCount = count($projects); ?>

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php for ($i = 0; $i < $projectsCount; $i++): ?>
            <li data-target="#mainCarousel" data-slide-to="<?= $i; ?>"<?= ($i === 0 ? " class=\"active\"" : "") ?>></li>
        <?php endfor; ?>
    </ol>

    <div class="carousel-inner" role="listbox">
        <?php for ($i = 0; $i < $projectsCount; $i++): ?>
        <?php $p = $projects[$i] ?>
        <div class="item<?= ($i === 0 ? " active" : "") ?>">
            <img src="<?= SERVER_PATH . 'img/' . $p->getFirstImage(); ?>" alt="<?= $p->getName(); ?>">
            <div class="container">
                <div class="carousel-caption">
                    <h1><?= $p->getName(); ?></h1>
                    <p><?= $p->getDescription(); ?></p>
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>

    <a class="left carousel-control" href="#mainCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#mainCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
