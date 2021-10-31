<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan ke 7</title>
</head>

<body>
    <center>
        <h1>TokoKu Keren</h1>
    </center>
    <form style="margin:20px auto" method="post" action="<?php echo base_url(); ?>index.php/transaksi/">
        <label>Nama : </label>
        <input type="text" name="nama" id=""> <br />
        <label for="">No HP</label> : </label>
        <input type="text" name="nohp" id=""> <br />
        <label">Merk Sepatu</label>
            <select name="merk-sepatu" id="">
                <option value="nike">Nike - Rp. 375000</option>
                <option value="adidas">Adidas - Rp. 300000</option>
                <option value="kickers">Kickers - 250000</option>
                <option value="eiger">Eiger - 275000</option>
                <option value="bucherri">Bucherri - 400000</option>
            </select> <br />
            <select name="ukuran-sepatu" id="">
                <option value="32">32</option>
                <option value="33">33</option>
                <option value="34">34</option>
                <option value="35">35</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
            </select>

            <input type="submit" name="tombol" value="Simpan">
    </form>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan ke 7</title>

    <!-- Load file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Load file library jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Load file library Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Load file library JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Input Data Pembeli</h2>
        <form action="<?php echo base_url() ?>pembelian/simpan_pembeli" method="post">
            <div class="form-group">
                <label>No Pembeli :</label>
                <input type="text" name="no_pembeli" class="form-control" placeholder="No Pembeli" />
            </div>
            <div class="form-group">
                <label>Nama Pembeli :</label>
                <input type="text" name="nama_pembeli" class="form-control" placeholder="Nama Pembeli" />
            </div>
            <div class="form-group">
                <label>No HP :</label>
                <input type="text" name="no_hp" class="form-control" placeholder="No HP" />
            </div>
            <div class="form-group">
                <label>Merk Sepatu :</label>
                <select class="form-control" name="merk">
                    <option value="Nike">Nike</option>
                    <option value="Adidas">Adidas</option>
                    <option value="Kickers">Kickers</option>
                    <option value="Eiger">Eiger</option>
                    <option value="Bucherri">Bucherri</option>
                </select>
            </div>
            <div class="form-group">
                <label>Harga :</label>
                <select class="form-control" name="harga">
                    <option value="375000">Rp. 375.000</option>
                    <option value="300000">Rp. 300.000</option>
                    <option value="250000">Rp. 250.000</option>
                    <option value="275000">Rp. 275.000</option>
                    <option value="400000">Rp. 400.000</option>
                </select>
            </div>
            <div class="form-group">
                <label>Ukuran</label>
                <select class="form-control" name="ukuran">
                    <option value="32">32</option>
                    <option value="33">33</option>
                    <option value="34">34</option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>


        </form>
    </div>
</body>

</html>