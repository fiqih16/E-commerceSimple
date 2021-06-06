<div>
    <form role="form" method="POST" wire:submit.prevent="submit">
        <div class="card-body">
            <h4>Nama Category</h4>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                </div>
                <input type="text" wire:model="nama" class="form-control" placeholder="Nama Category">
            </div>

            <h4>Images Banner</h4>
            <div class="input-group mb-3">
                <input id="input-fa" type="file" wire:model="banner" class="form-control file"  data-browse-on-zone-click="true">
                {{-- Multiple = Upload lebih dari satu gambar --}}
                {{-- data-max-file-count = Jumlah maksimal gambar yg akan di upload --}}
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" wire:model="active" value="1">
                <label class="form-check-label" for="exampleCheck1">Active</label>
            </div>
        </div>
        <div class="input-group">
            <button type="submit" class="btn btn-success w-100 mt-2 ml-4 mr-4 mb-3">submit</button>
        </div>
    </form>
</div>
