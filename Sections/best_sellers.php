<div class="album container py-5">
    <h1 class="display-3 text-center">Los más vendidos</h1>
    <div class="container my-5">
        <div class="row">
            <?php for ($i=0; $i < 6; $i++):?>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow boxproduct">
                    <img class="card-img-top" src="Images/salsas.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                            <h3>Salsa de tomate</h3>
                            <p><b>Cantidad:</b> 350 Gr.</p> 
                            <p><b>Marca:</b> Differ</p> 
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group ">
                                <button type="button" onclick="window.location.href='index.php?section=view'" class="btn btn-sm btn-outline-secondary my-btn">Ver</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary my-btn">Editar</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary my-btn">Comentar</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</div>