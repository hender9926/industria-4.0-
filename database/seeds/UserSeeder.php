<?php
use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $user = new User();
        $user ->usu_rut  = '2222222';
        $user ->usu_dig  = '1';        
        $user ->usu_name = 'Hender';
        $user ->usu_ape = 'Morales';
        $user ->email = 'h@antalis.cl';
        $user ->usu_tlf   = '968607020';
        $user ->password = bcrypt('antalis2020');
        $user ->usu_fk_car = 'Administrador';
        $user ->save();
    }
}

