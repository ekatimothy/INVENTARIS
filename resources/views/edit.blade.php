@extends("layout.app")

@section("konten")
    <div class="form-control col-sm-8">
        <form action="{{url('/edit')}}" method="POST">
        {{ csrf_field() }}
                <div class="form-group col-md-6">
                    <label for="idbarang">Id Barang</label>
                    <input name="id" type="text" class="form-control" placeholder="Jumlah Barang" value="{{$id->id}}" readonly>
                    </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="jumlahbarang">Jumlah</label>
                        <input name="jumlah" type="text" class="form-control" placeholder="Jumlah Barang" value="{{$id->jumlah}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="namabarang">Nama Lengkap</label>
                        <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" value="{{$id->nama}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="statusbarang">Status</label>
                        <select name="status" class="form-control" required>
                            <option value="{{$id->status}}" selected>{{$id->status}}</option>
                            @if($id->status == "Baik")
                                <option value="Rusak">Rusak</option>
                            @endif
                            @if($id->status == "Rusak")
                                <option value="Baik">Baik</option>
                            @endif
                            
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="kodebarang">Status</label>
                        <input name="kode" type="text" class="form-control" placeholder="Kode Barang" value="{{$id->kode}}">
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