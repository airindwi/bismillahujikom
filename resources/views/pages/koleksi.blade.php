@extends('layout')
@section('content')


<section class="py-5">
    <div class="container">
        <div class="row justify-content-start">
                <div class="col-md-4"> <!-- Set maximum width to adjust size -->
                    <!-- Card -->
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="'image/cover_book/'" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"></h5>
                                <!-- Product price-->
                             
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <form action="{{ route('pinjam.buku') }}" method="POST">
                                @csrf
                                <input type="hidden" name="book_id" value="{{ $k->book->id }}">
                                <div class="d-grid">
                                  <button type="submit" class="btn btn-outline-primary">Pinjam</button>
                                </div>
                              </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
