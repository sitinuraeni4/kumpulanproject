@extends('layout')

@section('content')
<a href="#" onclick="ModalTambahSpesialis()" class="btn btn-success"> + Add New Data</a>

<table class="table table-bordered table-dark">
    <tr>
        <th>Kode Spesialis</th>
        <th>Spesialis</th>
        <th>Opsi</th>
    </tr>
    @foreach($tb_spesialis as $Get)
    <tr>
        <td>{{ $Get->kd_spesialis }}</td>
        <td>{{ $Get->spesialis }}</td>
        <td>
            <a href="#" onclick="ModalEditSpesialis('{{ $Get->kd_spesialis }}', '{{ $Get->spesialis }}')" class="btn btn-info">Update</a>
            <a href="#" onclick="ModalHapusSpesialis('{{ $Get->kd_spesialis }}')" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</table>

<!-- Form Modal Tambah Spesialis -->
<form action="tb_spesialis/tambah" method="post">
    @csrf
    <div class="modal fade" id="ModalTambahSpesialis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Tambah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Kode Spesialis</label>
                        <input type="text" class="form-control" name="kd_spesialis" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Spesialis</label>
                        <textarea name="spesialis" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Form Modal Hapus Spesialis -->
<form action="tb_spesialis/hapus" method="post">
    @csrf
    <div class="modal fade" id="ModalHapusSpesialis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
                <div class="modal-footer">
                    <input type="hidden" name="kd_spesialis" id="kd_spesialis_hapus">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Form Modal Edit Spesialis -->
<form action="tb_spesialis/edit" method="post">
    @csrf
    <div class="modal fade" id="ModalEditSpesialis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Ubah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Kode Spesialis</label>
                        <input type="text" class="form-control" name="kd_spesialis" id="edit_kd_spesialis" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Spesialis</label>
                        <input type="text" class="form-control" name="spesialis" id="edit_spesialis" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" name="ubah" value="Ubah">
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    function ModalTambahSpesialis() {
        var modal = new bootstrap.Modal(document.getElementById('ModalTambahSpesialis'));
        modal.show();
    }

    function ModalHapusSpesialis(id) {
        document.getElementById('kd_spesialis_hapus').value = id;
        var modal = new bootstrap.Modal(document.getElementById('ModalHapusSpesialis'));
        modal.show();
    }

    function ModalEditSpesialis(kd_spesialis, spesialis) {
        document.getElementById('edit_kd_spesialis').value = kd_spesialis;
        document.getElementById('edit_spesialis').value = spesialis;
        var modal = new bootstrap.Modal(document.getElementById('ModalEditSpesialis'));
        modal.show();
    }
</script>
@endsection
