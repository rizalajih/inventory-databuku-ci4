<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Buku_model;

class BukuController extends Controller
{
    public function index()
    {
        $model = new Buku_model;
        $data['title']     = 'Data Buku';
        $data['getBarang'] = $model->getBarang();
        echo view('header_view', $data);
        echo view('buku_view', $data);
        echo view('footer_view', $data);
    }
    public function tambah()
    {
        $data['title']     = 'Tambah Data Barang';
        echo view('header_view', $data);
        echo view('tambah_view', $data);
        echo view('footer_view', $data);
    }
    public function add()
    {
        $imageFile = $this->request->getFile('file');
        $imageFile->move('uploads');

        $model = new Buku_model;
        $data = [
            'nama_buku' => $this->request->getPost('nama'),
            'no_isbn'         => $this->request->getPost('isbn'),
            'penerbit'  => $this->request->getPost('penerbit'),
            'nama_penerbit'  => $this->request->getPost('nama'),
            'tanggal_terbit' => $this->request->getpost('terbit'),
            'harga_beli'        => $this->request->getpost('beli'),
            'harga_jual'     => $this->request->getpost('jual'),
            'jumlah_buku'     => $this->request->getpost('jumlah'),
            'gambar' => $imageFile->getName(), 
        ];
        $model->saveBarang($data);
        echo '<script>
                alert("Sukses Tambah Data Barang");
                window.location="'.base_url('buku').'"
            </script>';

    }
    public function edit($id)
    {

        $model = new Buku_model;
        $getBarang = $model->getBarang($id)->getRow();
        if(isset($getBarang))
        {
            $data['buku'] = $getBarang;
            $data['title']  = 'Edit '.$getBarang->nama_buku;

            echo view('header_view', $data);
            echo view('edit_view', $data);
            echo view('footer_view', $data);

        }else{

            echo '<script>
                    alert("ID buku '.$id.' Tidak ditemukan");
                    window.location="'.base_url('buku').'"
                </script>';
        }
    }
    public function update()
    {
        helper(['form', 'url']);
        
        $input = $this->validate([
            'nama'   => 'required',
            'isbn' => 'required',
            'penerbit' => 'required',
            'nama' => 'required',
            'tanggal'   => 'required',
            'beli'   => 'required',
            'jual' => 'required',
            'jumlah'   => 'required',
            'file'   => 'required'
        ]);
        if (!$input) {
            return redirect()->to(site_url('buku/edit/'.$this->request->getPost('id')));
        } 
        else {
           
            $imageFile = $this->request->getFile('file');
            $filename = $imageFile->getRandomName();
            $imageFile->move('uploads');
        $savename=$imageFile->getName();
        $model = new Buku_model;
        $id = $this->request->getPost('id');
        $data = array(
            'nama_buku' => $this->request->getPost('nama'),
            'no_isbn'         => $this->request->getPost('isbn'),
            'penerbit'  => $this->request->getPost('penerbit'),
            'nama_penerbit'  => $this->request->getPost('nama'),
            'tanggal_terbit' => $this->request->getpost('terbit'),
            'harga_beli'        => $this->request->getpost('beli'),
            'harga_jual'     => $this->request->getpost('jual'),
            'jumlah_buku'     => $this->request->getpost('jumlah'),
            'nama_gambar' => $savename 

        );
        $model->editBarang($data,$id);
        echo '<script>
                alert("Sukses Edit Data Barang");
                window.location="'.base_url('buku').'"
            </script>';
        }

    }
    public function hapus($id)
    {
        $model = new Buku_model;
        $getBarang = $model->getBarang($id)->getRow();
        if(isset($getBarang))
        {
            $model->hapusBarang($id);
            echo '<script>
                    alert("Hapus Data Barang Sukses");
                    window.location="'.base_url('buku').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID barang '.$id.' Tidak ditemukan");
                    window.location="'.base_url('buku').'"
                </script>';
        }
    }

   
}