<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ficitv Immo - Résultats de la recherche</title>

    <?php include 'parts/meta.php'; ?>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <?php include 'parts/spinner.php'; ?>

        <?php include 'parts/header.php'; ?>

        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center
             flex-column-reverse flex-md-row pt-5">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Résultats de la recherche</h1>
                    <nav aria-label="breadcrumb animated fadeIn">
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/home1.jpeg" alt="appartements a louer">
                </div>
            </div>
        </div>
        <!-- Header End -->


        <?php include 'parts/search.php'; ?>


        <div class="container-xxl">
            <div class="container">
                <!-- Property List Start -->
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col">
                        <p>
                            Aucun résultat ne correspond à
                             votre recherche, ce site est juste un site
                            <strong>fictif</strong>, un
                            exemple,
                            N'hésitez pas à me <strong><a
                                    href="rachad-alabi-adekambi.github.io/portfolio">contacter</a></strong> au
                            besoin
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'parts/footer.php'; ?>
    </div>

    <?php include 'parts/includeJs.php'; ?>
</body>

</html>