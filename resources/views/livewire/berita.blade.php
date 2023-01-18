<div>
    <div class="container mt-4">
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
                        <input type="submit" class="btn btn-primary" value="KIRIM" wire:click='simpan'>
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
                        @foreach ($isi_komentar as $item)
                            saya, di unggah pada {{carbon\carbon::parse($item->created_at)->isoFormat('dddd,D MMMMM Y')}}
                            Menulis: <br>
                            <p>
                                <i>
                                    {{ $item->isi_komentar }}
                                </i>
                                <button class="float-end btn btn-danger" wire:click="hapus('{{ $item->id }}')">
                                    Hapus
                                </button>
                            </p>
                            <hr>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
