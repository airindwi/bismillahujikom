@extends('layout')
@section('content')

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Book <span>| Total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ !is_null($book) ? count($book) : '-'}}</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Category <span>| Total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ !is_null($category) ? count($category) : '-'}}</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

      </div>
      <div class="container">
        <div class="row justify-content-start">
          <!-- First Card -->
          <div class="col-4">

          <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src="" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <a class="fw-bolder fs-5" href=""></a>
                <!-- Product price-->
                <p></p>
              </div>
            </div>

            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <form action="" method="POST">
                @csrf
                <input type="hidden" name="book_id" value="">
                <div class="d-grid">
                  <button type="submit" class="btn btn-outline-primary">Pinjam</button>
                </div>
              </form>
                <form action="" method="POST">
                   @csrf
                   <div class="d-grid gap-2 mt-2">
                   <input type="hidden" name="book_id" value="">
                <button class="btn btn-outline-success" type="submit">Tambah Koleksi</button>
              </div>
                </form>
            </div>
          </div>
          </div>
          @endforeach

        <!-- Modal -->
        {{-- <div class="modal fade text-left" id="basicModal" tabindex="-1" role="dialog"
          aria-labelledby="myModalLabel33" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"="document"
              style="max-width: 700px; margin-top: -20px;">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel33">Ulasan</h4>
                  </div>
                  <form action="{{ route ('ulasan')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="modal-body">
                            <div class="form-group">
                              <input type="hidden" name="book_id" value="{{ $books->id }}">
                                <label for="rating">Rating: </label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rating" id="rating1" value="1">
                                    <label class="form-check-label" for="rating1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rating" id="rating2" value="2">
                                    <label class="form-check-label" for="rating2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rating" id="rating3" value="3">
                                    <label class="form-check-label" for="rating3">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rating" id="rating4" value="4">
                                    <label class="form-check-label" for="rating4">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rating" id="rating5" value="5">
                                    <label class="form-check-label" for="rating5">5</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ulasan">Ulasan</label>
                                <textarea class="form-control" name="ulasan" id="ulasan" rows="3"></textarea>
                                @error('ulasan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" class="btn btn-success ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Save</span>
                        </button>
                    </div>
                  </form>
              </div>
          </div>
        </div> --}}



        </div>
      </div>
    </div>
  </div>
    </section>
    @endsection
