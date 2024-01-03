   @extends('layouts.app')

   @section('navbar')
       <main>
           <section class="section">
               <div class="container">
                   <div class="row mb-4">
                       <div class="col-sm-6">
                           <h2 class="posts-entry-title">JeWePe Mading</h2>
                       </div>
                   </div>

                   <div class="row">
                       @foreach ($data as $item)
                           <div class="col-lg-4 mb-4">
                               <div class="post-entry-alt">
                                   <a href="{{ route('article.show', ['id' => $item->id]) }}" class="img-link">
                                       <img src="{{ Storage::url('public/images/' . $item->image) }}"
                                           class="rounded card-img-top img-fluid mt-2"
                                           style="height: 300px; object-fit: cover" alt="...">
                                   </a>
                                   <div class="excerpt">
                                       <h2><a href="{{ route('article.show', ['id' => $item->id]) }}">{{ $item->judul_artikel }}</a></h2>
                                       <div class="post-meta align-items-center text-left clearfix">
                                           <span class="d-inline-block mt-1">{{ $item->user->name }} <a
                                                   href="#"></a></span>
                                           <span>&nbsp;-&nbsp; {{ $item->created_at }}</span>
                                       </div>
                                       <p>{!! \Illuminate\Support\Str::limit($item->isi_artikel, 200) !!}</p>
                                       <p><a href="{{ route('article.show', ['id' => $item->id]) }}"
                                               class="read-more">Continue Reading</a></p>
                                   </div>
                               </div>
                           </div>
                       @endforeach
                   </div>


               </div>
           </section>

           @include('layouts.footer')
       </main>
   @endsection
