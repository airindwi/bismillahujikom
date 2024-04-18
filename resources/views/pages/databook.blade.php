@extends('layout')
@section('content')


<div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Data Book</h5>
                    <div>
                    <a href="" class="btn icon btn-danger"><i class="bi bi-pdf"> Print</i></a>
                    <a href="" class="btn icon btn-primary"><i class="bi bi-plus"> Add Book</i></a>
                </div>
            </div>

        <!-- Table with stripped rows -->
        <table class="table datatable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Category</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Year</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="d-flex" role="group">
                            <!-- Edit Button -->
                            <button type="button" class="btn icon btn-primary me-1" data-bs-toggle="modal"
                                data-bs-target="#basicModal{{ $books->id }}">
                                <i class="bi bi-pencil"></i>
                            </button>

                            <form action="{{ route('deleteBook', $books->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button href="#"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus data?')"
                                    class="btn icon btn-danger ms-1">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                    {{-- Modal Update --}}
                    <div class="modal fade text-left" id="basicModal{{ $books->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"="document"
                            style="max-width: 700px; margin-top: -20px;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Edit Book</h4>
                                </div>
                                <form action="{{ route('updateBook', $books->id) }}" method="POST">
                                    @method('PATCH')
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="judul">Judul: </label>
                                            <input id="judul" type="text" name="title" value="{{ $books->title }}"
                                                placeholder="Masukkan Judul" class="form-control">
                                            <label for="judul">Category: </label>
                                            <select class="form-select" name="category_id"
                                                aria-label="Default select example">
                                                @foreach ($category as $c)
                                                <option value="{{ $c->id }}"
                                                    {{ $books->c == $c->id ? 'selected' : '' }}>{{ $c->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            <label for="judul">Penulis: </label>
                                            <input id="judul" type="text" name="author" value="{{ $books->author }}"
                                                placeholder="Masukkan Penulis" class="form-control">
                                            <label for="judul">Penerbit: </label>
                                            <input id="publisher" type="text" name="publisher"
                                                value="{{ $books->publisher }}" placeholder="Masukkan Penerbit"
                                                class="form-control">
                                            <label for="judul">Year: </label>
                                            <input id="judul" type="text" name="year" value="{{ $books->year }}"
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
