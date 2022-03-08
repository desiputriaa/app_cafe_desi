<?php
    namespace App\Models;

    use CodeIgniter\model;

    class PesananModel extends Model{
        protected $table = 'tb_pesanan';
        protected $primaryKey = 'id';
        protected $allowedFields = ['user_id','tanggal','total_harga','nama_pemesan','no_meja'];
    }
