<div>
    {{-- The whole world belongs to you. --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="store">
                        <div class="mb-3">
                            <label for="nama_ruang" class="form-label">Nama Ruang</label>
                            <input type="text" id="nama_ruang" wire:model="nama_ruang" class="form-control" required>
                            @error('nama_ruang') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="kapasitas" class="form-label">Kapasitas</label>
                            <input type="number" id="kapasitas" wire:model="kapasitas" class="form-control" required>
                            @error('kapasitas') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" wire:model="deskripsi" class="form-control" cols="30" rows="10"></textarea>
                            @error('deskripsi') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>