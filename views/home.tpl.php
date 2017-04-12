<div class = "container">
    <div class="about">
        <div class="container text-center">
            <img class="profile-image img-circle" src="<?= SERVER_PATH . 'img/profile.png'; ?>" alt="Rasmus Appelqvist profile picture">
            <h1 class="name">Rasmus Appelqvist</h1>
            <div class="title">Software Developer</div>
            <div class="profile">
                <p>My name is Rasmus Appelqvist and I consider myself to be a software developer. For the last six years I have been educating myself within different aspects of software development, such as game development and web development. I am as comfortable with front-end development as I am with the back-end development. In parallel with my studies I have been freelancing my services as well as I have worked on personal projects. Some of these projects that actually have a visual presentation can be viewed below, for other projects, please take a look at my GitHub profile.</p>
            </div>
        </div>

        <div class="social container-fluid text-center">
             <ul class="social-list list-inline">
                 <li><a href="mailto:rasmus.a-91@hotmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                 <li><a href="https://www.linkedin.com/in/rasmus-appelqvist/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                 <li><a href="https://github.com/rasmusa91/"><i class="fa fa-github-alt" aria-hidden="true"></i></a></li>
             </ul>
        </div>
    </div>

    <hr>

    <div class = "projects">
        <?php $projects = $di->projects->getProjects(); ?>
        <?php for ($i = 0; $i < count($projects); $i++): ?>
        <?php $imgs = $projects[$i]->getImages(); ?>
        <?php $tags = $projects[$i]->getTags(); ?>
        <?php $imgsCount = count($imgs); ?>

        <?php if ($i % 3 === 0): ?>
        <div class="row">
        <?php endif; ?>
            <div class="col-md-4 portfolio-item">
                <div id = "carousel-<?= $i; ?>" class="carousel slide" data-ride="carousel" data-interval="false">
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
                    <?= $projects[$i]->getName(); ?>
                    <?php if($projects[$i]->getSourceControl() !== null): ?>
                    <?php if($projects[$i]->getRepository() === null): ?>
                    <i class="fa fa-<?= $projects[$i]->getSourceControl(); ?>" aria-hidden="true"></i>
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <?php else: ?>
                    <a href = "<?= $projects[$i]->getRepository(); ?>"><i class="fa fa-<?= $projects[$i]->getSourceControl(); ?>" aria-hidden="true"></i></a>
                    <?php endif; ?>
                    <?php endif; ?>
                </h3>
                <p><?= $projects[$i]->getDescription(); ?></p>
                <p>
                    <?php foreach ($tags as $tag): ?>
                    <span class="badge"><?= $tag; ?></span>
                    <?php endforeach; ?>
                </p>
            </div>
        <?php if (($i % 3 === 2 && $i !== 0) || $i === count($projects) - 1): ?>
        </div>
        <?php endif;?>
        <?php endfor; ?>
    </div>

    <hr>

    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017 Rasmus Appelqvist</p>
    </footer>
</div>
