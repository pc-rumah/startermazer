<div class="modal fade" id="tambahTaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('manageuser.store') }}" method="POST" data-parsley-validate>
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-form-label col-sm-2">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Masukan Nama User" data-parsley-required="true"
                                data-parsley-required-message="Bidang ini wajib di isi!" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-form-label col-sm-2">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" id="email" class="form-control"
                                placeholder="Masukan email" data-parsley-required="true"
                                data-parsley-required-message="Bidang ini wajib di isi!" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tanggal_lahir" class="col-form-label col-sm-2">Role</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role" id="admin"
                                    value="admin" @checked(old('role') == 'admin') required>
                                <label class="form-check-label" for="admin">admin</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role" id="staff"
                                    value="staff" @checked(old('role') == 'staff') required>
                                <label class="form-check-label" for="staff">staff</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-form-label col-sm-2">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Masukan password" data-parsley-required="true"
                                data-parsley-required-message="Bidang ini wajib di isi!" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
