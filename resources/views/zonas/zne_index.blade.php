
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">ZONA NO ESTERIL</h2>
                    <h3 class="section-subheading text-muted">Elegir el procedimiento a realizar.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-7 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            @include("zonas.zne.vapor_1")
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/m1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">MATACHANA</div>
                                <div class="portfolio-caption-subheading text-muted">EQUIPO DE VAPOR</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-7 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            @include("zonas.zne.vapor_2_cisa")
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/c2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">CISA</div>
                                <div class="portfolio-caption-subheading text-muted">EQUIPO DE VAPOR</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-7 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            @include("zonas.zne.hpo_1")
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">

                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/m3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">MATACHANA 13OHPO</div>
                                <div class="portfolio-caption-subheading text-muted">EQUIPO DE PERÒXIDO DE HIDRÒGENO</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-7 mb-4 mb-lg-0">
                        <!-- Portfolio item 4 bowie and dick-->
                        <div class="portfolio-item">
                            @include("zonas.zne.test_b&d")
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/b&d4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">TEST DE PRUEBAS</div>
                                <div class="portfolio-caption-subheading text-muted">Test de B&D, Test de vacìo</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-7 mb-4 mb-lg-0">
                        <!-- Portfolio item 5 bowie and dick-->
                        <div class="portfolio-item">
                            @include("zonas.qr_generator")
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/qr_generator.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">GENERADOR DE ETIQUETAS</div>
                                <div class="portfolio-caption-subheading text-muted">Genera aquí la etiqueta previo ingresar al equipo</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
