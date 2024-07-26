@extends('layout')

@section('content')
<a href="#" onclick="ModalTambahJaga()" class="btn btn-success"> + Add New Data</a>

<table class="table table-bordered table-dark">
    <tr>
        <th>Kode Dokter</th>
        <th>Hari</th>
        <th>Jam Mulai</th>
        <th>Jam Selesai</th>
        <th>Opsi</th>
    </tr>
    @foreach($tb_jaga as $Get)
    <tr>
        <td>{{ $Get->kd_dokter }}</td>
        <td>{{ $Get->hari }}</td>
        <td>{{ $Get->jam_mulai }}</td>
        <td>{{ $Get->jam_selesai }}</td>
        <td>
            <a href="#" onclick="ModalEditJaga('{{ $Get->kd_dokter }}', '{{ $Get->hari }}', '{{ $Get->jam_mulai }}', '{{ $Get->jam_selesai }}')" class="btn btn-info">Update</a>
            <a href="#" onclick="ModalHapusJaga('{{ $Get->kd_dokter }}')" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</table>

<!-- Form Modal Tambah Jaga -->
<form action="tb_jaga/tambah" method="post">
    @csrf
    <div class="modal fade" id="ModalTambahJaga" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Tambah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Kode Dokter</label>
                        <input type="text" class="form-control" name="kd_dokter" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Hari</label>
                        <input type="text" class="form-control" name="hari" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jam Mulai</label>
                        <input type="text" class="form-control" name="jam_mulai" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jam Selesai</label>
                        <input type="text" class="form-control" name="jam_selesai" required>
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

<!-- Form Modal Hapus Jaga -->
<form action="tb_jaga/hapus" method="post">
    @csrf
    <div class="modal fade" id="ModalHapusJaga" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
                <div class="modal-footer">
                    <input type="hidden" name="kd_dokter" id="kd_dokter_hapus">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Form Modal Edit Jaga -->
<form action="tb_jaga/edit" method="post">
    @csrf
    <div class="modal fade" id="ModalEditJaga" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <label class="form-label">Hari</label>
                        <input type="text" class="form-control" name="hari" id="edit_hari" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jam Mulai</label>
                        <input type="text" class="form-control" name="jam_mulai" id="edit_jam_mulai" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jam Selesai</label>
                        <input type="text" class="form-control" name="jam_selesai" id="edit_jam_selesai" required>
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
    function ModalTambahJaga() {
        var modal = new bootstrap.Modal(document.getElementById('ModalTambahJaga'));
        modal.show();
    }

    function ModalHapusJaga(id) {
        document.getElementById('kd_dokter_hapus').value = id;
        var modal = new bootstrap.Modal(document.getElementById('ModalHapusJaga'));
        modal.show();
    }

    function ModalEditJaga(kd_dokter, hari, jam_mulai, jam_selesai) {
        document.getElementById('edit_kd_dokter').value = kd_dokter;
        document.getElementById('edit_hari').value = hari;
        document.getElementById('edit_jam_mulai').value = jam_mulai;
        document.getElementById('edit_jam_selesai').value = jam_selesai;
        var modal = new bootstrap.Modal(document.getElementById('ModalEditJaga'));
        modal.show();
    }
</script>
@endsection
