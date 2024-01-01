@extends('layouts.app-admin')


@section('navbar-admin')

<main>

    <h4>Tambah Artikel,</h4>
    <div class="card-body">
        <form action="proses_aksi.php?aksi=add" method="POST" encytpe="multipart/form-data">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-3">
                        <label for="forName" class="from-label">Judul Artikel*</label>
                        <input type="text" name="judul_artikel" class="form-control" id="formName"
                            placeholder="Judul Artikel" required />
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="extarea">Isi Artikel*</label>
                        <textarea class="summernote" name="isi_artikel" rows="5" required></textarea>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="col-md mb-3">
                        <small class="form-label d-block">Status Publish*</small>
                        <div class="form-check form-check-inline mt-2">
                            <input class="form-check-input" type="radio" name="status_publish" id="inlineRadio3"
                                value="publish" checked required />
                            <label class="form-check-label" for="inlineRadio3">Publish</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status_publish" id="inlineRadio4"
                                value="draft" />
                            <label class="form-check-label" for="inlineRadio4">Draft</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="formFilePicture" class="form-label">Gambar Header*</label>
                        <input class="form-control" name="header" type="file" id="formFilePicture" required>
                        <small class="text-danger">Max Size 5Mb, ext. png, jpg, jpeg</small>
                    </div>
                </div>
            </div>
            <hr>
            <div class="mb-3 float-end">
                <a href="index.php" class="btn btn-danger">Batalkan</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    
    </main>

    @endsection