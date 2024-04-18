@extends('layout')
@section('content')

<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title">Lending</h5>
            <div>
                <a href="{{ route('peminjaman.pdf') }}" class="btn icon btn-danger"><i class="bi bi-pdf"> Print</i></a>
            </div>
        </div>
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
                </tr>
            </thead>
            <tbody>

                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                                <div>
                                    <span class="badge bg-danger">Belum Kembali</span>
                                </div>
                                <span class="badge bg-success">Sudah Kembali</span>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data saat ini.</td>
                    </tr>
                @endif
            </tbody>
        </table>
        <!-- End Table with stripped rows -->
    </div>
</div>

@endsection
