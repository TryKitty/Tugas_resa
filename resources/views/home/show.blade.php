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
                                <caption> <p class="p-caption"> * </p> </caption>
                                <tr >
                                    <th class="text-secondary"  >Nama Barang</th>
                                    <th class="text-secondary" >Stok</th>
                                    <th class="text-secondary" >Jumlah terjual</th>
                                    <th class="text-secondary" >Tanggal Transaksi</th>
                                    <th class="text-secondary" >Jenis Barang</th>
                                    <th>
                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#Add">
                                            +
                                          </button>
                                    </th>
                                     <th class="text-secondary" >
                                        <form action="{{ route('cari.barang') }}" method="get">
                                        <div class="input-group">
                                        <div class="form-outline">
                                            <input type="search" id="form1" class="form-control"  placeholder="Cari" name="s"/>
                                        </div>
                                        </div>
                                    </form>
                                    </th>
                                    <th></th>

                                </tr>
                                </thead>
                                @foreach ($show as $data )
                                <tbody class="table-group-divider">
                                    <tr class="table-resa" >
                                        <td scope="row">{{ $data->nama_barang }}</td>
                                        <td>{{ ($data->stok) }} </td>
                                        <td>{{ ($data->jumlah_terjual) }} </td>
                                        <td>{{ ($data->tanggal_transaksi) }} </td>
                                        <td>{{ $data->categories->nama }} </td>
                                        <td>
                                            <form action="{{ route('barang.destroy', $data->id) }}" method="post">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
                                         <a href="{{ route('barang.edit',$data->id) }}">   <button type="button" class="btn btn-outline-secondary btn-sm"><i class="bi bi-pencil"></i></button> </a>
                                            </form>
                                        </td>
                                        <td></td>
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
              <div class="modal fade " id="Add" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm " role="document">
                      <div class="modal-content bg-cofee">
                          <div class="modal-header">
                              <h5 class="modal-title" id="modalTitleId">Tambah barang</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="{{ route('barang.store') }}" method="post">
                                @csrf
                                  <div class="mb-3"> <input type="text" name="nama_barang" id="" placeholder="nama barang" class="form-control"></div>
                                 <div class="mb-3"><input type="text" name="stok" placeholder="stok" class="form-control"></div>
                                  <div class="mb-3"><input type="text" name="jumlah_terjual" placeholder="jumlah terjual" class="form-control"></div>
                                  <div class="mb-3"><input type="date" name="tanggal_transaksi" placeholder="tanggal" class="form-control"></div>
                                  <div class="mb-3">
                                      <select class="form-select" id="category" name="categories_id">
                                          @foreach ($showw as $data )
                                          <option  value="{{ $data->id }}">{{ $data->nama }}</option>
                                          @endforeach
                                        </select>
                                  </div>
                                  </option>
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
