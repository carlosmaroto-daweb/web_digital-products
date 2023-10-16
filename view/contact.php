<?php require_once "view/template/header.php" ?>

<!-- Contact Section -->
<section class="page-section bg-dark light-content" id="contact">
    <div class="container relative">

        <div class="text-center mb-80 mb-sm-50">
            <h2 class="section-title">Contacto</h2>
            <p class="section-title-descr">
                Estamos disponibles para los nuevos proyectos.
            </p>
        </div>

        <div class="row mb-60 mb-xs-40">

            <div class="col-md-10 offset-md-1">
                <div class="row">

                    <!-- Phone -->
                    <div class="col-sm-6 mb-40">
                        <div class="contact-item wow fadeScaleIn" data-wow-delay="0" data-wow-duration="1s">
                            <div class="ci-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="ci-title">
                                Llámanos
                            </div>
                            <div class="ci-text">
                                +61 383 767 284
                            </div>
                        </div>
                    </div>
                    <!-- End Phone -->

                    <!-- Email -->
                    <div class="col-sm-6 mb-40">
                        <div class="contact-item wow fadeScaleIn" data-wow-delay=".2s" data-wow-duration="1s">
                            <div class="ci-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ci-title">
                                Email
                            </div>
                            <div class="ci-text">
                                support@bestlooker.pro
                            </div>
                            <div class="ci-link">
                                <a href="mailto:support@bestlooker.pro">Say Hello</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Email -->

                </div>
            </div>

        </div>

        <!-- Contact Form -->
        <div class="row">
            <div class="col-md-10 offset-md-1">

                <form class="form contact-form wow fadeInUpShort" data-wow-delay=".5s" id="contact_form">

                    <div class="row">
                        <div class="col-md-6">
                            <!-- Name -->
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" id="name" class="input-lg round form-control" placeholder="Inserta tu nombre" pattern=".{3,100}" required aria-required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Email -->
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="input-lg round form-control" placeholder="Inserta tu email" pattern=".{5,100}" required aria-required="true">
                            </div>
                        </div>
                    </div>

                    <!-- Message -->
                    <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea name="message" id="message" class="input-lg round form-control" style="height: 130px;" placeholder="Inserta tu mensaje"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Inform Tip -->
                            <div class="form-tip pt-20 pt-sm-0 mb-sm-20">
                                Todos los campos son requeridos.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Send Button -->
                            <div class="text-end pt-10">
                                <button class="submit_btn btn btn-mod btn-w btn-large btn-round" id="submit_btn" aria-controls="result">
                                    Enviar mensaje
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="result" role="region" aria-live="polite" aria-atomic="true"></div>

                </form>

            </div>
        </div>
        <!-- End Contact Form -->

    </div>
</section>
<!-- End Contact Section -->

<?php require_once "view/template/footer.php" ?>