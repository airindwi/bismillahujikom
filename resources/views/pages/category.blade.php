@extends('layout')
@section('content')
    


<div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Category</h5>

        <!-- Vertical Form -->
        <form action="" method="POST">
            @csrf
          <div class="col-12">
            <input type="text" name="name" class="form-control" id="inputNanme4">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
          </div>
        </form><!-- Vertical Form -->

      </div>
    </div>


    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title">Category</h5>
            <div>
            <a href="" class="btn icon btn-danger"><i class="bi bi-pdf"> Print</i></a>
        </div>
    </div>
  
        <!-- Table with stripped rows -->
        <table class="table datatable">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Action</th>
          </thead>
          <tbody>
            <tr>
              <th scope="row"></th>
              <td></td>
              <td>
                  <div class="d-flex" role="group">
                      <!-- Edit Button -->
                      <button type="button" class="btn icon btn-primary me-1" data-bs-toggle="modal" data-bs-target="#basicModal{{ $categories->id }}">
                          <i class="bi bi-pencil"></i>
                      </button>
                  
                      <form action="{{ route('deleteCategory', $categories->id) }}"
                          method="POST">
                          @method('DELETE')
                          @csrf
                          <button href="#" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn icon btn-danger ms-1"><i
                                  class="bi bi-trash"></i></button>
                      </form>
                  </div>

              </td>
              {{-- Modal Update --}}
              <div class="modal fade text-left" id="basicModal{{ $categories->id }}"
                  tabindex="-1" role="dialog"aria-labelledby="myModalLabel33"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"="document"
                      style="max-width: 700px; margin-top: -20px;">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h4 class="modal-title" id="myModalLabel33">Edit Category</h4>

                          </div>
                          <form action="{{ route('updateCategory', $categories->id) }}"
                              method="POST">
                              @method('PATCH')
                              @csrf
                              <div class="modal-body">
                                  <div class="form-group">
                                      <label for="judul">Category: </label>
                                      <input id="judul" type="text"
                                          name="name"
                                          value=""
                                          placeholder="Masukkan Judul Artikel"class="form-control">
                                  </div>
                              </div>
                              <div class="modal-footer">
                                  <button type="button"
                                      class="btn btn-secondary"data-bs-dismiss="modal">
                                      <i class="bx bx-x d-block d-sm-none"></i>
                                      <span class="d-none d-sm-block">Close</span>
                                  </button>
                                  <button type="submit"
                                      class="btn btn-primary ms-1"data-bs-dismiss="modal">
                                      <i class="bx bx-check d-block d-sm-none"></i>
                                      <span class="d-none d-sm-block">Save</span>
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
        <!-- End Table with stripped rows -->
  
      </div>
    </div>

@endsection