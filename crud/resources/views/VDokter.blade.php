@extends('layout')

@section('content')
<a href="#" onclick="ModalTambahDokter()" class="btn btn-success"> + Add New Data</a>

<table class="table table-bordered table-dark">
    <tr>
        <th>Kode Dokter</th>
        <th>Nama Dokter</th>
        <th>Kode Spesialis</th>
        <th>Telepon</th>
        <th>Sex</th>
        <th>Opsi</th>
    </tr>
    @foreach($tb_dokter as $Get)
    <tr>
        <td>{{ $Get->kd_dokter }}</td>
        <td>{{ $Get->nama_dokter }}</td>
        <td>{{ $Get->kd_spesialis }}</td>
        <td>{{ $Get->telepon }}</td>
        <td>{{ $Get->sex }}</td>
        <td>
            <a href="#" onclick="ModalEditDokter('{{ $Get->kd_dokter }}', '{{ $Get->nama_dokter }}', '{{ $Get->kd_spesialis }}', '{{ $Get->telepon }}', '{{ $Get->sex }}')" class="btn btn-info">Update</a>
            <a href="#" onclick="ModalHapusDokter('{{ $Get->kd_dokter }}')" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</table>

<!-- Form Modal Tambah Dokter -->
<form action="tb_dokter/tambah" method="post">
    @csrf
    <div class="modal fade" id="ModalTambahDokter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <!-- Form tambah dokter -->
    </div>
</form>

<!-- Form Modal Hapus Dokter -->
<form action="tb_dokter/hapus" method="post">
    @csrf
    <div class="modal fade" id="ModalHapusDokter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <!-- Form hapus dokter -->
    </div>
</form>

<!-- Form Modal Edit Dokter -->
<form action="tb_dokter/edit" method="post">
    @csrf
    <div class="modal fade" id="ModalEditDokter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Ubah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Kode Dokter</label>
                        <input type="text" class="form-control" name="kd_dokter" id="edit_kd_dokter" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Dokter</label>
                        <input type="text" class="form-control" name="nama_dokter" id="edit_nama_dokter" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kode Spesialis</label>
                        <input type="text" class="form-control" name="kd_spesialis" id="edit_kd_spesialis" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telepon</label>
                        <input type="text" class="form-control" name="telepon" id="edit_telepon" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sex</label>
                        <input type="text" class="form-control" name="sex" id="edit_sex" required>
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
    function ModalTambahDokter() {
        var modal = new bootstrap.Modal(document.getElementById('ModalTambahDokter'));
        modal.show();
    }

    function ModalHapusDokter(id) {
        document.getElementById('kd_dokter_hapus').value = id;
        var modal = new bootstrap.Modal(document.getElementById('ModalHapusDokter'));
        modal.show();
    }

    function ModalEditDokter(kd_dokter, nama_dokter, kd_spesialis, telepon, sex) {
        document.getElementById('edit_kd_dokter').value = kd_dokter;
        document.getElementById('edit_nama_dokter').value = nama_dokter;
        document.getElementById('edit_kd_spesialis').value = kd_spesialis;
        document.getElementById('edit_telepon').value = telepon;
        document.getElementById('edit_sex').value = sex;
        var modal = new bootstrap.Modal(document.getElementById('ModalEditDokter'));
        modal.show();
    }
</script>

@endsection
