@extends('layouts.app-admin')

@section('navbar-admin')
    <main>
        <div class="container-xxl flex-grow-1 container-p-y">
            <a class="btn btn-primary mb-3" href="{{ url('dashboard/create') }}">Tambah Data</a>
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Responsive Table</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr class="text-nowrap">
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Judul Artikel</th>
                                <th>Isi Artikel</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = $data->firstItem(); ?>
                            @foreach ($data as $item)
                                <tr>
                                    <th scope="row">{{ $i }}</th>
                                    <th scope="row">
                                        <img src="{{Storage::url('public/images/' . $item->image )  }}" class="rounded" style="width: 150px">
                                    </th>
                                    <th scope="row">{{ $item->judul_artikel }}</th>
                                    <th scope="row">{!!$item->isi_artikel !!}</th>
                                    <th scope="row">{{ $item->status_publish }}</th>
                                    <td scope="row">
                                        <a href="" class="btn btn-warning mb-2"><i class=" fa fa-solid fa-pen-to-square" style="color:white;"></i></a>
                                        <form action="" method="POST">
                                          @csrf
                                          @method('DELETE')
                                        <button class="btn btn-danger mb-2"><i class="fa fa-solid fa-trash"></i></button>
                                      </form>
                                      </td>
                                                </tr>
                                <?php $i++; ?>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
            <!--/ Responsive Table -->
        </div>
        <!-- / Content -->
        @include('layouts.footer-admin')

        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js"
        integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous">
    </script>

    </main>
@endsection
<!-- Content -->
