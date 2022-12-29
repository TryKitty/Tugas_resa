@include('layout.nav')
@include('sweetalert::alert')
<div class="col-md-9 bg-cofee">
    <div class="container-fluid py-3 ">
        <div class="table-responsive  rounded-3 shadow-lg">
            <table class="table table-striped
            table-hover
            table-borderless
            table-resa
            align-middle ">
                <thead >
                    <caption> <p class="p-caption"> * jenis barang </p> </caption>
                    <tr class="text-center">
                        <th class="text-secondary" >Jenis Barang</th>
                        <th>
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#modalId">
                                +
                              </button>
                        </th>
                    </tr>
                    </thead>
                    @foreach ($show as $data )
                    <tbody class="table-group-divider">
                        <tr class="table-resa text-center" >
                            <td scope="row">{{ $data->nama }}</td>
                            <td>
                                <form action="{{ route('jenis_barang.destroy', $data->id) }}" method="post">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
                                   <a href="{{ route('jenis_barang.edit',$data->id) }}"> <button type="button" class="btn btn-outline-secondary btn-sm"><i class="bi bi-pencil"></i></button></a>
                                    </form>
                            </td>
                            @endforeach
                        </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
            </table>
        </div>
    </div>
  </div>
</div>
  <!-- Modal trigger button -->
  <div class="modal fade " id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm " role="document">
          <div class="modal-content bg-cofee">
              <div class="modal-header">
                  <h5 class="modal-title" id="modalTitleId">Tambah Jenis Barang </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="{{ route('jenis_barang.store') }}" method="post">
                    @csrf
                      <div class="mb-3"> <input type="text" name="nama" id="" placeholder="jenis barang" class="form-control"></div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-secondary">Save</button>
                </form>
              </div>
          </div>
      </div>
  </div>

@include('layout.foot')
