<div class="container p-5">
    <a href="<?= base_url('buku');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data Barang</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('buku/add');?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Nama Buku</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">No ISBN</label>
                    <input type="number" name="isbn" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Nama Penulis</label>
                    <input type="number" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Penerbit</label>
                    <input type="date" name="tanggal" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Harga Beli</label>
                    <input type="number" name="beli" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Harga Jual</label>
                    <input type="number" name="jual" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Jumlah Buku</label>
                    <input type="text" name="jumlah" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input name="file" type="file" class="form-control" accept="image/*" >
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>
            
        </div>
    </div>
</div>