<!-- Registered Section -->
<section class="success" id="registered">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Registrados</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="table-responsive">
                   <table class="table table-striped" id="registered">
                       <thead>
                           <tr>
                               <th>No.</th>
                               <th>Nombre</th>
                               <th>Apellido</th>
                               <th>Telefono</th>
                               <th>Correo</th>
                           </tr>
                       </thead>
                       <tbody>
                            {assign var="numero" value=1}

                            {foreach from=$data item=item}
                                <tr>
                                    <td>{$numero++}</td>
                                    <td>{$item.firstName}</td>
                                    <td>{$item.lastName}</td>
                                    <td>{$item.phone}</td>
                                    <td>{$item.email}</td>
                                </tr>
                            {/foreach}
                       </tbody>
                   </table>
               </div>
            </div>
        </div>
    </div>
</section>