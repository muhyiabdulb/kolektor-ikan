<div class="form-row">
    <div class="form-group col-md-12">
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="{{ old('nama') ?? $ikan->nama }}" class="form-control"
            placeholder="Nama">
        @error('nama')
            <div class="invalid text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <label for="photo">Photo</label> <br>
        @if ($ikan->photo)
            <img style="height:300px; width:300px; object-fit:cover; object-position:center;" class="card-img-top mr-1"
                src="{{ $ikan->takeImage }}"> <br>
        @endif
        <br>
        <input type="file" name="photo" class="form-control">
        @error('photo')
            <div class="invalid text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <label for="harga">Harga</label>
        <input type="number" name="harga" value="{{ old('harga') ?? $ikan->harga }}" class="form-control"
            placeholder="Harga">
        @error('harga')
            <div class="invalid text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <label for="penjual">Penjual</label>
        <input type="text" name="penjual" value="{{ old('penjual') ?? $ikan->penjual }}" class="form-control"
            placeholder="Penjual">
        @error('penjual')
            <div class="invalid text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <label for="tanggal_beli">Tanggal Beli</label>
        <input type="date" name="tanggal_beli" value="{{ old('tanggal_beli') ?? $ikan->tanggal_beli }}"
            class="form-control">
        @error('tanggal_beli')
            <div class="invalid text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6" style="padding-top: 29px;">
        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> {{ $submit ?? 'Ubah' }}</button>
    </div>
</div>
