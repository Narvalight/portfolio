<?php include('includes/header.php'); ?>

<header class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-dark mb-2">Bonjour, je suis [Ton Prénom]</h1>
                    <p class="lead fw-normal text-muted mb-4">Étudiant en BTS SIO (Services Informatiques aux Organisations), passionné par le développement d'applications.</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="projets.php">Voir mes travaux</a>
                        <a class="btn btn-outline-dark btn-lg px-4" href="presentation.php">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                <img class="img-fluid rounded-3 my-5" src="assets/img/hero-image.png" alt="Illustration" />
            </div>
        </div>
    </div>
</header>

<section class="py-5">
    <div class="container my-5">
        <div class="text-center">
            <h2 class="fw-bolder">Mes Compétences</h2>
            <p class="lead mb-5">Voici les technologies que je maîtrise actuellement.</p>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <i class="bi bi-code-slash fs-1 text-primary"></i>
                <h3>Développement</h3>
                <p>HTML, CSS, PHP, SQL</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="bi bi-database fs-1 text-primary"></i>
                <h3>Base de données</h3>
                <p>MySQL, PostgreSQL</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="bi bi-git fs-1 text-primary"></i>
                <h3>Outils</h3>
                <p>Git, GitHub, VS Code</p>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>