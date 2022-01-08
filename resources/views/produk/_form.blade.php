                <div class="card-body container">
                    <div class="card-header mb-4">
                        <h3 class="card-title">Update Produk</h3>
                    </div>
                    <div class="form-group mb-3 ">
                        <label class="form-label"  for="kategori">Kategori Prodk</label>
                        <div>
                            <input type="text" class="form-control" id="kategori" name="kategori"  value="{{ $model->category_id }}">
                        </div>
                    </div>
                    <div class="form-group mb-3 ">
                        <label class="form-label"  for="nama">Nama Produk</label>
                        <div>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $model->nama }}">
                        </div>
                    </div>
                    <div class="form-group mb-3 ">
                        <label class="form-label"  for="slug">Slug Produk</label>
                        <div>
                            <input type="text" class="form-control" id="slug" name="slug" value="{{ $model->slug }}">
                        </div>
                    </div>
                    <div class="form-group mb-3 ">
                        <label class="form-label" for="deskripsi"  autocomplete="off">Deskripsi Produk</label>
                        <div>
                            <input type="text" name="deskripsi" id="deskripsi" class="form-control"  autocomplete="off" value="{{ $model->deskripsi }}">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="form-group mb-3 text-muted">
                        <label class="form-label" for="alamat">Harga</label>
                        <input type="number" name="harga" id="alamat" class="form-control" value="{{ $model->harga }}">
                    </div>
                    {{-- <div class="form-group mb-3 text-muted">
                        <label class="form-label" for="photo">Pilih photo</label>
                        <input type="file" name="photo" id="gambar" class="form-control" value="{{ $model->photo }}">
                    </div> --}}
                    <div class="form-group mb-3">
                        <label class="form-label" for="photo">Pilih photo</label>
                        <input type="file" name="photo" class="form-control">
                        @if (strlen($model->photo) > 0)
                            <img src="{{ asset('img/'.$model->photo) }}" style="width: 300px">
                        @endif
                    </div>
                    
                    <div class="form-footer">
                        <button type="submit" id="submit" class="btn btn-primary w-100">Tambah Produk </button>
                    </div>
                </div>