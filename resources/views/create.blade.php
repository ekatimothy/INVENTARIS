@extends("layout.app")

@section("konten")
    @if (Session::has('gagal'))
        <div class="alert alert-danger">
            <p>{{session('gagal')}}</p>
        </div>
    @elseif (Session::has('success'))
        <div class="alert alert-success">
            <p>{{session('success')}}</p>
        </div>
    @endif 
    <div class="form-control col-sm-8">
        <form action="{{url('/buat')}}" method="POST">
        {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="jumlahbarang">Jumlah</label>
                        <input name="jumlah" type="text" class="form-control" placeholder="Jumlah Barang">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="namabarang">Nama Lengkap</label>
                        <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="kodebarang">Kode Barang</label>
                        <input name="kode" type="text" id="kode" class="form-control" placeholder="Kode Barang">
                    </div>
                </div>
                <div class="text-right">
                    <button id="btnsubmit" type="submit" class="btn btn-primary btn-lg">Daftar Barang</button> <br><br>
                </div>
        </form>
    </div>
@endsection
