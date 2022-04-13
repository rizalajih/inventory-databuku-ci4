<div class="container p-5">
    <a href="<?= base_url('barang');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Barang : <?= $buku->nama_buku;?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('buku/update');?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Nama Buku</label>
                    <input type="text" value="<?= $buku->nama_buku;?>" name="nama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">No ISBN</label>
                    <input type="number" value="<?= $buku->no_isbn;?>" name="isbn" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Penerbit</label>
                    <input type="text" value="<?= $buku->penerbit;?>" name="penerbit" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nama Penerbit</label>
                    <input type="text" value="<?= $buku->nama_penerbit;?>" name="nama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Terbit</label>
                    <input type="date" value="<?= $buku->tanggal_terbit;?>" name="tanggal" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Harga Beli</label>
                    <input type="number" value="<?= $buku->harga_beli;?>" name="beli" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Harga Jual</label>
                    <input type="number" value="<?= $buku->harga_jual;?>" name="jual" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Jumlah Buku</label>
                    <input type="text" value="<?= $buku->jumlah_buku;?>" name="jumlah" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input name="file" type="file" class="form-control" accept="image/*" >
                </div>
                <input type="hidden" value="<?= $buku->id;?>" name="id">
                <button class="btn btn-success">Edit Data</button>
            </form>
            
        </div>
    </div>
</div>