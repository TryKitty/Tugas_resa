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
                    <caption> <p class="p-caption"> *Transaksi Terbanyak </p> </caption>
                    <tr class="text-center">
                        <th class="text-secondary" >Nama Barang</th>
                        <th class="text-secondary" >Jumlah Terjual</th>
                        <th class="text-secondary" >Tanggal</th>

                    </tr>
                    </thead>
                    @foreach ($show as $data )
                    <tbody class="table-group-divider">
                        <tr class="table-resa text-center" >
                            <td scope="row">{{ $data->nama_barang }}</td>
                            <td scope="row">{{ $data->jumlah_terjual }}</td>
                            <td scope="row">{{ $data->tanggal_transaksi }}</td>
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
@include('layout.foot')
