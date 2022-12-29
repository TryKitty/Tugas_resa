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
                <caption> <p class="p-caption"> *Update barang </p> </caption>
                <tr >
                    <form action="{{ route('barang.update',$show->id) }}" method="post">
                        @csrf @method('PUT')
                          <div class="mb-3"> <input type="text" name="nama_barang" id="" value="{{ $show->nama_barang }}" class="form-control" ></div>
                         <div class="mb-3"><input type="text" name="stok" value="{{ $show->stok }}" class="form-control"></div>
                          <div class="mb-3"><input type="text" name="jumlah_terjual" value="{{ $show->jumlah_terjual }}" class="form-control"></div>
                          <div class="mb-3"><input type="date" name="tanggal_transaksi" value="{{ $show->tanggal_transaksi }}" class="form-control"></div>
                          <div class="mb-3">
                              <select class="form-select" id="category" name="categories_id">
                                  @foreach ($showw as $data )
                                 @if (old('categories_id') == $data->id)
                                  <option  value="{{ $data->id }}" selected>{{ $data->nama }}</option>
                                  @else
                                  <option  value="{{ $data->id }}" >{{ $data->nama }}</option>
                                  @endif
                                  @endforeach
                                </select>
                          </div>
                          </option>
                          <button type="submit" class="btn btn-secondary">Save</button>
                                </div>


                    </form>
                </tr>
                </thead>
                <tfoot>

                </tfoot>
        </table>
    </div>

</div>
</div>
</div>
@include('layout.foot')
