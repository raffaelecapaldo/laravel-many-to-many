<!-- Modal -->
<div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="AddModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-uppercase" id="AddModalLabel">nuovo linguaggio</h1>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('admin.languages.store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label for="name" class="form-label">Nome categoria</label>
                            <input required maxlength="100" name="name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="badge_color" class="form-label">Colore HEX badge</label>
                            <input required maxlength="100" value="#" name="badge_color" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="buttons d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mt-3">Aggiungi</button>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
            </div>
        </div>
    </div>
</div>
