@extends('layouts.app')

@section('navbar')
    <div class="site-cover site-cover-sm same-height overlay single-page"
        style="background-image: url('{{ asset('storage/images/' . $data->image) }}');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-6">
                    <div class="post-entry text-center">
                        <h1 class="">{{ $data->header }}</h1>
                        <div class="post-meta align-items-center text-center">
                            <span class="d-inline-block mt-1">{{$data->user->name}}</span>
                            <span>&nbsp;-&nbsp; {{ $data->created_at }}</span>
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
                        <p>{!! $data->isi_artikel !!}</p>

                    </div>
                </div>
                <!-- END main-content -->

            </div>
        </div>
        @include('layouts.footer')
    </section>
    </main>
@endsection
