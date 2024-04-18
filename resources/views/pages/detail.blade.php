@extends('layout')
@section('content')

@if (isset($book) && is_object($book))
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('image/cover_book/'. $book->cover) }}" alt="..." /></div>
            <div class="col-md-6">
                <div class="small mb-1"></div>
                <h1 class="display-5 fw-bolder"></h1>
                <div class="fs-5 mb-5">
                    <span></span>
                </div>

                <!-- Comment -->
                <div class="me-2">Rating dan Ulasan:</div>
                
                    <div class="mb-3">
                        <div class="fw-bold"></div>
                        <div class="d-flex align-items-center mb-2">
                            <!-- Rating Stars -->
                            <div class="rating-stars">
                                @for ($i = 1; $i <= $u->rating; $i++)
                                    <i class="bi bi-star-fill"></i>
                                @endfor
                                @for ($i = $u->rating + 1; $i <= 5; $i++)
                                    <i class="bi bi-star"></i>
                                @endfor
                            </div>
                        </div>
                        <div class="mb-2">{{ $u->ulasan }}</div>
                    </div>
                    <hr>
                @endforeach

                <!-- Form for Comment -->
                <div class="mt-5">
                    <form action="{{ route('ulasan') }}" method="post">
                        @csrf
                        <input type="hidden" name="book_id" value="{{ $book->id }}">
                        <div class="mb-3">
                            <label for="rating" class="form-label">Rating:</label>
                            <div class="rating">
                                @for ($i = 5; $i >= 1; $i--)
                                    <input type="radio" name="rating" id="rating{{ $i }}" value="{{ $i }}">
                                    <label for="rating{{ $i }}"><i class="bi bi-star"></i></label>
                                @endfor
                            </div>
                        </div>                        
                        <div class="mb-3">
                            <label for="comment" class="form-label">Komentar:</label>
                            <textarea class="form-control" id="comment" name="ulasan" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif

<script>
    const stars = document.querySelectorAll('.rating input');

    stars.forEach((star, index) => {
        star.addEventListener('click', function() {
            const value = index + 1;
            // Setiap bintang yang diklik akan memberi warna pada bintang hingga ke bintang yang di klik
            for (let i = 0; i < stars.length; i++) {
                if (i < value) {
                    stars[i].checked = true;
                } else {
                    stars[i].checked = false;
                }
            }
        });
    });
</script>


@endsection
