<div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                      Status
                    </div>
                    <div class="card-body">
                        komentar <br>
                        <input type="text" name="" id="" class="form-control" wire:model='txtkomentar'/>
                        <br>
                        <input type="submit" class="btn btn-primary" value="KIRIM">
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                      Kiriman Saya
                    </div>
                    <div class="card-body">
                        Saya : <br>
                        <p>
                            <i>
                                {{ $txtkomentar }}
                            </i>
                        </p>
                        <hr>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
