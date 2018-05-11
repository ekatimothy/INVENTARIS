@extends("layout.app")

@section("konten")
    <div class="form-control col-sm-8">
        <form action="{{url('/buat')}}" method="POST">
        {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="idpasien">Jumlah</label>
                        <input name="jumlah" type="text" class="form-control" placeholder="Jumlah Barang">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="namapasien">Nama Lengkap</label>
                        <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap">
                    </div>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary btn-lg">Daftar Barang</button> <br><br>
                </div>
        </form>
    </div>
@endsection