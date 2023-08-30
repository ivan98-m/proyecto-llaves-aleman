<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $arrayClientes = array(
        array(
            'identificacion' =>'CC 108557455',
			'nombre' => 'Sonya',
			'apellidos' => 'Frost', 
			'direcion' => 'calle falsa 123', 
			'celular' => '325225225',
			'correo' => 'sony@gmail.com', 
		),
        array(
            'identificacion' =>'CC 105855489',
			'nombre' => 'Jena',
			'apellidos' => 'Gaines', 
			'direcion' => 'cll 25 cr 45-6', 
			'celular' => '318525455',
			'correo' => 'jena@hotmail.com', 
		),array(
            'identificacion' =>'CC 108557455',
			'nombre' => 'Yessid',
			'apellidos' => 'Acosta', 
			'direcion' => 'calle falsa 123', 
			'celular' => '325225225',
			'correo' => 'sony@gmail.com', 
		),
        array(
            'identificacion' =>'CC 105855489',
			'nombre' => 'Ruben',
			'apellidos' => 'Jimenez', 
			'direcion' => 'cll 25 cr 45-6', 
			'celular' => '318525455',
			'correo' => 'jena@hotmail.com', 
		),array(
            'identificacion' =>'CC 108557455',
			'nombre' => 'Ivan',
			'apellidos' => 'Morales', 
			'direcion' => 'calle falsa 123', 
			'celular' => '325225225',
			'correo' => 'sony@gmail.com', 
		),
        array(
            'identificacion' =>'CC 105855489',
			'nombre' => 'Lady',
			'apellidos' => 'Fernandez', 
			'direcion' => 'cll 25 cr 45-6', 
			'celular' => '318525455',
			'correo' => 'jena@hotmail.com', 
		),array(
            'identificacion' =>'CC 108557455',
			'nombre' => 'Alfredo',
			'apellidos' => 'Astorquiza', 
			'direcion' => 'calle falsa 123', 
			'celular' => '325225225',
			'correo' => 'sony@gmail.com', 
		),
        array(
            'identificacion' =>'CC 105855489',
			'nombre' => 'Hernando',
			'apellidos' => 'Timana', 
			'direcion' => 'cll 25 cr 45-6', 
			'celular' => '318525455',
			'correo' => 'jena@hotmail.com', 
		),
        array(
            'identificacion' =>'CC 108557455',
			'nombre' => 'Liliana',
			'apellidos' => 'Alvares', 
			'direcion' => 'calle falsa 123', 
			'celular' => '325225225',
			'correo' => 'sony@gmail.com', 
		),
        array(
            'identificacion' =>'CC 105855489',
			'nombre' => 'Carolina',
			'apellidos' => 'Gutierres', 
			'direcion' => 'cll 25 cr 45-6', 
			'celular' => '318525455',
			'correo' => 'jena@hotmail.com', 
		),array(
            'identificacion' =>'CC 108557455',
			'nombre' => 'Sonya',
			'apellidos' => 'Frost', 
			'direcion' => 'calle falsa 123', 
			'celular' => '325225225',
			'correo' => 'sony@gmail.com', 
		),
        array(
            'identificacion' =>'CC 105855489',
			'nombre' => 'Jena',
			'apellidos' => 'Gaines', 
			'direcion' => 'cll 25 cr 45-6', 
			'celular' => '318525455',
			'correo' => 'jena@hotmail.com', 
		),
        
    );

    public function run()
    {
        self::seedCliente(); 
        $this->command->info('Tabla catálogo inicializada con datos!');
    }
    private function seedCliente()
    {
        DB::table('clientes')->delete();

        foreach( $this->arrayClientes as $cliente) {
            $p = new Cliente();
            $p->identificacion = $cliente['identificacion'];
            $p->nombre = $cliente['nombre'];
            $p->apellidos = $cliente['apellidos'];
            $p->direccion = $cliente['direccion'];
            $p->celular = $cliente['celular'];
            $p->correo = $cliente['correo']; 
            $p->save();
      }
    }
}
