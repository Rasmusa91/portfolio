<div class = "projects">
    <?php $projects = $di->projects->getProjects(); ?>
    <?php for ($i = 0; $i < count($projects); $i++): ?>
    <?php $imgs = $projects[$i]->getImages(); ?>
    <?php $imgsCount = count($imgs); ?>

    <?php if ($i % 3 === 0): ?>
    <div class="row">
    <?php endif; ?>
        <div class="col-md-4 portfolio-item">
            <div id = "carousel-<?= $i; ?>" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <?php for ($j = 0; $j < $imgsCount; $j++): ?>
                <li data-target="#carousel-<?= $i; ?>" data-slide-to="<?= $j; ?>"<?= ($j === 0 ? " class=\"active\"" : "") ?>></li>
                <?php endfor; ?>
              </ol>
              <div class="carousel-inner" role="listbox">
                <?php for ($j = 0; $j < $imgsCount; $j++): ?>
                <div class="item<?= ($j === 0 ? " active" : "") ?>">
                  <img src="<?= SERVER_PATH . 'img/' . $imgs[$j]; ?>">
                </div>
                <?php endfor; ?>
              </div>
            </div>
            <h3>
                <a href="#"><?= $projects[$i]->getName(); ?></a>
            </h3>
            <p><?= $projects[$i]->getDescription(); ?></p>
        </div>
    <?php if ($i % 3 === 3 || $i === count($projects) - 1): ?>
    </div>
    <?php endif;?>
    <?php endfor; ?>
        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

<hr>
</div>
