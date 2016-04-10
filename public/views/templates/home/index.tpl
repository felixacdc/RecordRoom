{extends file="layouts/front_layout.tpl"}

{block name="content"}

<!-- Sing In Section -->
    <section id="signin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="record">Registro</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" action="?view=index" method="POST" enctype="multipart/form-data">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nombres</label>
                                <input type="text" name="name" class="form-control" placeholder="Nombres" id="name" autocomplete="off">
                                <p class="help-block text-danger animated bounceIn retraso-2" id="helpname"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Apellidos</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Apellidos" id="lastname" autocomplete="off">
                                <p class="help-block text-danger animated bounceIn retraso-2" id="helplast"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Correo Electronico</label>
                                <input type="text" name="email" class="form-control" placeholder="Correo Electronico" id="email" autocomplete="off">
                                <p class="help-block text-danger animated bounceIn retraso-2" id="helpemail"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Telefono</label>
                                <input type="tel" name="phone" class="form-control" placeholder="Telefono" id="phone"  autocomplete="off">
                                <p class="help-block text-danger animated bounceIn retraso-2" id="helpphone"></p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="button" class="btn btn-success btn-lg" id="buttone">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
{/block}