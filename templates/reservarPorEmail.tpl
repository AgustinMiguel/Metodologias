{include file="templates/header.tpl"}
{include file="templates/NavBarLogeado.tpl"}

<section>
    <div class="container">
        <div class="row cont">
            <div class="col-12 roles">
                <div class="container-fluid">
                    <h1 style="margin-bottom: 3%">Reserva mediante email</h1>
                    <form>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail" placeholder=hotelupmetodologiacompany@gmail.com>
                            </div>
                            <label for="inputBoucher" class="col-sm-2 col-form-label">Boucher</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="inputBoucher" placeholder=hotelupmetodologiacompany@gmail.com>
                            </div>
                        </div>                            
                        <button type="submit" class="btn btn-primary mb-2" > <a href="cofirmacionEmail" style="color:black">Reservar</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{include file="templates/footer.tpl"}