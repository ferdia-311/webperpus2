@extends("template.template")

@section("content")
<div class="container">
    <h1 style="color: #566A7F;">Tambah Akun</h1>
    <div class="col-xxl">
        <div class="card mb-4">

            <div class="card-body">
                <form action="/book-create" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-5">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Kategori Buku</label>
                        <div class="col-sm-10">
                            <select name="book_category_id" id="book_category_id" class="form-control">
                                <option value="">-- Pilih Category --</option>
                                @foreach ($book_categories as $bc)
                                <option value="{{$bc->id}}">{{$bc->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" name="judul" class="form-control" id="basic-default-name" />
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Pengarang</label>
                        <div class="col-sm-10">
                            <input type="text" name="pengarang" class="form-control" id="basic-default-name" />
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Penerbit</label>
                        <div class="col-sm-10">
                            <input type="text" name="penerbit" class="form-control" id="basic-default-name" />
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Jumlah Stok</label>
                        <div class="col-sm-10">
                            <input type="number" name="jumlah_stok" class="form-control" id="basic-default-name" />
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Lokasi</label>
                        <div class="col-sm-10">
                            <input type="text" name="lokasi" class="form-control" id="basic-default-name" />
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">

                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection