@extends("layout.app")

@section("konten")
        <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table"></i> Data Table Example</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id_Pasien</th>
                      <th>Nama Pasien</th>
                      <th>Jenis Kelamin</th>
                      <th>Nomor Telepon</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($id as $data)
                    <tr>
                        <td >{{$data->id}}</td>
                        <td >{{$data->nama}}</td>
                        <td >{{$data->jumlah}}</td>
                        <td >{{$data->status}}</td>
                        <td>
                            <a href="edit/{{$data->id}}"><button class="btn btn-warning"><i class="fa fa-pencil-square"> Edit</i></button></a>   
                            <form action="hapus/{{$data->id}}" method="post">
                            {{csrf_field()}}
                                <button class="btn btn-danger"><i class="fa fa-trash"> Hapus</i></button>
                                <input type="hidden" name="_method" value="DELETE">
                            </form>   
                        </td>
                      </tr>
                    @endforeach
                     </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
        </div>
@endsection