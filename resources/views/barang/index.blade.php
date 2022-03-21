<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tabel Barang</title>
</head>

<body>


    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <div class="card-tools">
                    <a href="{{url('barang/create')}}" class="btn btn-success">Tambah Data</a>
                    <a href="{{url('chart')}}" class="btn btn-success">Tambah Transaksi</a>

                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach($datas as $key=>$values)
                    <tr>
                        <td>{{ $values->nama_barang }}</td>
                        <td>{{ $values->jumlah }}</td>
                        <td>{{ $values->harga }}</td>
                        <td><a href="{{url('barang',$values->id_barang.'/edit')}}" class="btn btn-info">Update</a>

                        </td>
                        <td>
                            <form action="{{url('barang',$values->id_barang)}}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="delete">

                                <button type="submit" class="btn btn-warning">Hapus</button>

                            </form>
                        </td>

                    </tr>
                    @endforeach
                </table>
            </div>

        </div>
        <!-- /.content -->
    </div>
</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</html>