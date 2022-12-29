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
                    <caption> <p class="p-caption"> *table jenis barang </p> </caption>
                    <tr >
                        <form action="{{ route('jenis_barang.update',$show->id) }}" method="post">
                            @csrf @method('PUT')
                              <div class="mb-3"> <input type="text" name="nama" id="" value="{{ $show->nama }}" class="form-control" ></div>
                              </option>
                      </div>
                          <button type="submit" class="btn btn-secondary">Save</button>

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
