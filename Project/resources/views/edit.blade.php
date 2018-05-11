@extends("layout.app")

@section("konten")
    <div class="form-control col-sm-8">
        <form action="{{url('/edit')}}" method="POST">
        {{ csrf_field() }}
                <div class="form-group col-md-6">
                    <label for="idpasien">Id Barang</label>
                    <input name="id" type="text" class="form-control" placeholder="Jumlah Barang" value="{{$id->id}}" readonly>
                    </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="idpasien">Jumlah</label>
                        <input name="jumlah" type="text" class="form-control" placeholder="Jumlah Barang" value="{{$id->jumlah}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="namapasien">Nama Lengkap</label>
                        <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" value="{{$id->nama}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="jkpasien">Status</label>
                        <select name="status" class="form-control" required>
                            <option selected>Pilih...</option>
                            <option value="Baik">Baik</option>
                            <option value="Rusak">Rusak</option>
                        </select>
                    </div>
                </div>
                <input type="hidden" name="_method" value="PUT">
                <div class="text-right">
                    <button type="submit" class="btn btn-primary btn-lg">Edit Barang</button> <br><br>
                </div>
        </form>
    </div>
@endsection