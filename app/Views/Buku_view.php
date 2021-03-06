<div class="container pt-5">
    <a href="<?= base_url('buku/tambah');?>" class="btn btn-success mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Buku</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Buku</th>
                            <th>No ISBN</th>
                            <th>Penerbit</th>
                            <th>Nama Penulis</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Jumlah Buku</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getBarang as $isi){?>
                        <tr>
                            <td><?= $no;?></td>
                            <td><img src="uploads/<?= $isi['gambar'] ?>"width= 100 height= 100 alt="">
                            
                        </td>
                            <td><?= $isi['nama_buku'];?></td>
                            <td><?= $isi['no_isbn'];?></td>
                            <td><?= $isi['penerbit']?></td>
                            <td><?= $isi['nama_penulis']?></td>
                            <td><?= $isi['tanggal_terbit']?></td>
                            <td>Rp<?= number_format($isi['harga_beli']);?>,-</td>
                            <td>Rp<?= number_format($isi['harga_jual']);?>,-</td>
                            <td><?= $isi['jumlah_buku'];?></td>
                            <td>
                                <a href="<?= base_url('barang/edit/'.$isi['id']);?>" class="btn btn-success">
                                    Edit</a>
                                <a href="<?= base_url('barang/hapus/'.$isi['id']);?>"
                                    onclick="javascript:return confirm('Apakah ingin menghapus data buku ?')"
                                    class="btn btn-danger">
                                    Hapus</a>

                            </td>
                        </tr>
                        <?php $no++;}?>
                    </tbody>

                </table>
            </div>
            <!-- <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <title>CodeIgniter 4 Image Upload with File Validation Example</title>

                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
                <style>
                    .container {
                        max-width: 400px;
                        margin-top: 50px;
                    }
                </style>
            </head>

            <body>
                <div class="container">


                    <form action="<?php echo base_url('ImageUploadController/uploadImage');?>" method="post"
                        enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <input name="file" type="file" class="form-control" accept="image/*">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </div>
                    </form>


                </div>
            </body>


            </html> -->
        </div>
    </div>
</div>