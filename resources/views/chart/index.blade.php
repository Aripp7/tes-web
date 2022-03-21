<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <script src="https://cdn.tailwindcss.com"></script>
    <title>Trans</title>
</head>

<body class="body">
    <form method="POST" action="{{url('chart')}}">
        @csrf
        <div class="form-group">
            <label for="position-option">Posisi</label>
            <select class="form-control" id="position-option" name="position_id">
                @foreach($data as $key=>$values)
                <option value="{{ $values->id_barang }}">{{ $values->nama_barang }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="jumlah"> Jumlah :</label>
            <input type="text" class="form-control" placeholder="Masukkan jumlah" name="jumlah">
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top: 10px;">hitung</button>

        <div class="form-group">
            <label for="harga">Total Harga :</label>
            <input type="text" class="form-control" placeholder="Harga" name="total_harga">
        </div>



    </form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>