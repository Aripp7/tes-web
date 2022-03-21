<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit Data</title>
</head>

<body>
    <!-- <form method="POST" action="{{url('barang/'.$model->id_barang)}}">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        Nama : <input type="text" name="nama_barang" value="{{$model->nama_barang}}">
        Alamat : <input type="text" name="jumlah" value="{{$model->jumlah}}">
        No Hp : <input type="text" name="harga" value="{{$model->harga}}">
        <button type="submit">Edit Data</button>
    </form> -->

    <form method="POST" action="{{url('barang/'.$model->id_barang)}}">
        @csrf
        <div class="form-group row">
            <label for="nama">Nama :</label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Barang" name="nama_barang" value="{{$model->nama_barang}}">
        </div>

        <div class="form-group">
            <label for="jumlah"> Jumlah :</label>
            <input type="text" class="form-control" placeholder="Masukkan jumlah" name="jumlah" value="{{$model->jumlah}}">
        </div>

        <div class="form-group">
            <label for="harga">Harga :</label>
            <input type="text" class="form-control" placeholder="Masukkan Harga" name="harga" value="{{$model->harga}}">
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>

    </form>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</html>