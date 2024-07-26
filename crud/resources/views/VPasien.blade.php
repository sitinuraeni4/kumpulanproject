@extends('layout')

@section('content')
<a href="#" onclick="ModalTambahPasien()" class="btn btn-success"> + Add New Data</a>

<table class="table table-bordered table-dark">
    <tr>
        <th>Kode Pasien</th>
        <th>Nama Pasien</th>
        <th>Alamat Pasien</th>
        <th>Telepon</th>
        <th>Jenis Kelamin</th>
        <th>Spesialis</th>
        <th>Opsi</th>
    </tr>
    @foreach($tb_pasien as $Get)
    <tr>
        <td>{{ $Get->kd_pasien }}</td>
        <td>{{ $Get->nama_pasien }}</td>
        <td>{{ $Get->alamat_pasien }}</td>
        <td>{{ $Get->telepon }}</td>
        <td>{{ $Get->jenis_kelamin }}</td>
        <td>{{ $Get->spesialis }}</td>
        <td>
            <a href="#" onclick="ModalEditPasien('{{ $Get->kd_pasien }}', '{{ $Get->nama_pasien }}')" class="btn btn-info">Update</a>
            <a href="#" onclick="ModalHapusPasien('{{ $Get->kd_pasien }}')" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</table>

<!-- Modal code... -->




<!-- Form Modal Tambah Dokter-->
<form action="tb_pasien/tambah" method="post">
    @csrf
    <div class="modal fade" id="ModalTambahPasien" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Tambah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Kode Pasien</label>
                        <input type="text" class="form-control" name="kd_pasien" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Pasien</label>
                        <textarea name="nama_pasien" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat Pasien</label>
                        <input type="text" class="form-control" name="kd_spesialis" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telepon</label>
                        <textarea name="telepon" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" name="sex" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Spesialis</label>
                        <input type="text" class="form-control" name="spesialis" required>
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

<!-- Form Modal Hapus Dokter-->
<form action="tb_pasien/hapus" method="post">
    @csrf
    <div class="modal fade" id="ModalHapusPasien" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
                <div class="modal-footer">
                    <input type="hidden" name="kd_pasien" id="kd_pasien_hapus">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Form Modal Edit Dokter -->
<form action="tb_pasien/edit" method="post">
    @csrf
    <div class="modal fade" id="ModalEditPasien" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Ubah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Kode Pasien</label>
                        <input type="text" class="form-control" name="kd_pasien" id="edit_kd_pasien" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Pasien</label>
                        <input type="text" class="form-control" name="nama_pasien" id="edit_nama_pasien" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat Pasien</label>
                        <input type="text" class="form-control" name="alamat_pasien" id="edit_alamat_pasien" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telepon</label>
                        <input type="text" class="form-control" name="telepon" id="edit_telepon" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" name="jenis_kelamin" id="edit_jenis_kelamin" required>
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
    function ModalTambahPasien() {
        var modal = new bootstrap.Modal(document.getElementById('ModalTambahPasien'));
        modal.show();
    }

    function ModalHapusPasien(id) {
        document.getElementById('kd_pasien_hapus').value = id;
        var modal = new bootstrap.Modal(document.getElementById('ModalHapusPasien'));
        modal.show();
    }

    function ModalEditPasien(kd_pasien, nama_pasien, alamat_pasien, telepon, jenis_kelamin, spesialis) {
        document.getElementById('edit_kd_pasien').value = kd_pasien;
        document.getElementById('edit_nama_pasien').value = nama_pasien;
        document.getElementById('edit_alamat_pasien').value = alamat_pasien;
        document.getElementById('edit_telepon').value = telepon;
        document.getElementById('edit_jenis_kelamin').value = jenis_kelamin;
        document.getElementById('edit_spesialis').value = spesialis;
        var modal = new bootstrap.Modal(document.getElementById('ModalEditPasien'));
        modal.show();
    }
</script>


@endsection
