<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengunjungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengunjungs = [
            array('nama'=> 'Fuad Hilmi', 'username'=> 'fuadhilmi', 'password'=> bcrypt(121212), 'alamat'=> 'Alamat Fuad Hilmi'),
            array('nama'=> 'Hilmi Ramadhan', 'username'=> 'ramadhan', 'password'=> bcrypt(121212), 'alamat'=> 'Alamat Hilmi Ramadhan'),
            array('nama'=> 'Fulan', 'username'=> 'fulans', 'password'=> bcrypt(121212), 'alamat'=> 'Alamat Fulan'),
            array('nama'=> 'Roy', 'username'=> 'roykyo', 'password'=> bcrypt(121212), 'alamat'=> 'Alamat Roy'),
            array('nama'=> 'Iko', 'username'=> 'ikowais', 'password'=> bcrypt(121212), 'alamat'=> 'Alamat Iko'),
        ];
        
        DB::table('pengunjungs')->insert($pengunjungs);
    }
}
