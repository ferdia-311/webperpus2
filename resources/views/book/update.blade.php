@extends("template.template")

@section("content")
@foreach ($data_book as $dtb)


<div class="container">
    <h1 style="color: #566A7F;">Edit Akun</h1>
    <div class="col-xxl">
        <div class="card mb-4">

            <div class="card-body">
                <form action="/book-update" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$dtb->id}}">
                    <div class="row mb-5">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Kategori Buku</label>
                        <div class="col-sm-10">
                            <select name="book_category_id" id="book_category_id" class="form-control">
                                <option value="{{$dtb->book_category->id}}">{{$dtb->book_category->name}}</option>
                                @foreach ($book_categories as $bc)
                                <option value="{{$bc->id}}">{{$bc->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$dtb->judul}}" name="judul" class="form-control" id="basic-default-name" />
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Pengarang</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$dtb->pengarang}}" name="pengarang" class="form-control" id="basic-default-name" />
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Penerbit</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$dtb->penerbit}}" name="penerbit" class="form-control" id="basic-default-name" />
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Jumlah Stok</label>
                        <div class="col-sm-10">
                            <input type="number" value="{{$dtb->jumlah_stok}}" name="jumlah_stok" class="form-control" id="basic-default-name" />
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Lokasi</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$dtb->lokasi}}" name="lokasi" class="form-control" id="basic-default-name" />
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
<script>
    function limitPasswordDisplay(input, maxLength) {
        // Mengambil nilai input password
        var password = input.value;

        // Mengatur nilai input password dengan mengambil hanya 5 karakter pertama
        input.value = password.slice(0, maxLength);
    }
</script>
@endforeach
@endsection