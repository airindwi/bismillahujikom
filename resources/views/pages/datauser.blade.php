@extends('layout')
@section('content')


<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title">Data User</h5>
            <div>
            <a href="" class="btn icon btn-danger"><i class="bi bi-pdf"> Print</i></a>
            <a href="" class="btn icon btn-primary"><i class="bi bi-plus"> Add User</i></a>
        </div>
    </div>

        <!-- Table with stripped rows -->
        <table class="table datatable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="d-flex" role="group">
                            <!-- Edit Button -->
                            <button type="button" class="btn icon btn-primary me-1" data-bs-toggle="modal"
                                data-bs-target="#basicModal">
                                <i class="bi bi-pencil"></i>
                            </button>

                            <form action="deleteUser" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus data?')"
                                    class="btn icon btn-danger ms-1">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                    {{-- Modal Update --}}
                    <div class="modal fade text-left" id="basicModal" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"="document"
                            style="max-width: 700px; margin-top: -20px;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Edit Book</h4>
                                </div>
                                <form action="{{ route('editUser', ['id' => $users->id]) }}" method="POST">
                                    @method('PATCH')
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="judul">Full Name: </label>
                                            <input id="judul" type="text" name="name" value=""
                                                placeholder="Masukkan Nama" class="form-control">
                                                <label for="role">Role: </label>
                                                <select class="form-select" name="role">
                                                    <option value="" selected></option>
                                                    <option value="admin">Admin</option>
                                                    <option value="petugas">Petugas</option>
                                                    <option value="user">Peminjam</option>
                                                </select>
                                            <label for="judul">Username: </label>
                                            <input id="judul" type="text" name="username" value=""
                                                placeholder="Masukkan Username" class="form-control">
                                            <label for="judul">Email: </label>
                                            <input id="publisher" type="email" name="email"
                                                value="" placeholder="Masukkan Email"
                                                class="form-control">
                                            <label for="judul">Address: </label>
                                            <input id="judul" type="text" name="address" value=""
                                                placeholder="Masukkan Year" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="submit" class="btn btn-primary ms-1"
                                            data-bs-dismiss="modal">
                                            Save
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tr>
            </tbody>
        </table>
        <!-- End Table with stripped rows

    </div>
  </div>

  @endsection
