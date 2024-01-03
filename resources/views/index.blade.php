@extends('layouts.app')

@section('navbar')
    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('images/hero_5.jpg');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-6">
                    <div class="post-entry text-center">
                            <h1 class="mb-4"></h1>
                            <div class="post-meta align-items-center text-center">
                                <figure class="author-figure mb-0 me-3 d-inline-block"> <img
                                        src="{{ Storage::url('public/images/' . $data->image) }}"
                                        class="rounded card-img-top img-fluid mt-2" style="height: 300px; object-fit: cover"
                                        alt="...">
                                </figure>
                                <span class="d-inline-block mt-1">By Carl Atkinson</span>
                                <span>&nbsp;-&nbsp; {{$data->created_at}}</span>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container">

            <div class="row blog-entries element-animate">

                <div class="col-md-12 col-lg-12 main-content">

                    <div class="post-content-body">
                        <p>{ !! $data->isi_artikel !!}</p>
                        
                    </div>
                </div>
                <!-- END main-content -->
it
            </div>
        </div>
    </section>
    @include('layouts.footer')
    </main>
@endsection
