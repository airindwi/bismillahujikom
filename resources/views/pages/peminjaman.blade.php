@extends('layout')
@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Lending</h5>

      <!-- Table with stripped rows -->
      <table class="table datatable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Peminjam</th>
            <th scope="col">Buku</th>
            <th scope="col">Tanggal Pinjam</th>
            <th scope="col">Tanggal Kembali</th>
            <th scope="col">Status Peminjaman</th>
        </thead>
        <tbody>
          <tr>
            <th scope="row">index + 1 </th>
            <td>p->user->username</td>
            <td> $p->book->title</td>
            <td>$p->tanggalpeminjaman</td>
            <td>$p->tanggalpengembalian</td>
            <td>
              <div class="d-flex ms-1">
                <span class="badge bg-danger me-2 align-self-center">Belum Kembali</span>
                <form action="" method="POST">
                    <button type="submit" class="btn bg-primary">Kembalikan</button>
                </form>
            </div>
            
            
                    
                  </div>
              <span type="submit" class="badge bg-success decoration-none">Sudah Dikembalikan</span>
          </td>
          

          </tr>
        </tbody>
      </table>
      <!-- End Table with stripped rows -->

    </div>
  </div>

  @endsection
