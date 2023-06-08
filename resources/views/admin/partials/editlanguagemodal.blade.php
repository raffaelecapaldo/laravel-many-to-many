<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="EditModalLabel">MODIFICA LINGUAGGIO <span id="catname"></span></h1>
            </div>
            <div class="modal-body">
                <form id="editcategoryform" method="POST" action="" >
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <label for="name" class="form-label">Modifica linguaggio</label>
                            <input required maxlength="100" name="name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="badge_color" class="form-label">Modifica colore HEX badge</label>
                            <input required maxlength="100" value="#" name="badge_color" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="buttons d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mt-3">Modifica</button>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
            </div>
        </div>
    </div>
</div>
