<div>
    <form role="form">
        <div class="card-body">
            <h4>Nama Category</h4>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                </div>
                <input type="email" class="form-control" placeholder="Nama Category">
            </div>

            <h4>Images Banner</h4>
            <div class="input-group mb-3">
                <input id="input-fa" type="file" class="form-control file" multiple data-max-file-count="1" data-browse-on-zone-click="true" placeholder="Email">
                {{-- Multiple = Upload lebih dari satu gambar --}}
                {{-- data-max-file-count = Jumlah maksimal gambar yg akan di upload --}}
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
        </div>

    </form>
</div>
