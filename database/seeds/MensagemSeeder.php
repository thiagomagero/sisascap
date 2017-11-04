<?php

use Illuminate\Database\Seeder;
use App\Mensagem;
class MensagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $allMensagens = [
            ['id' => 1, 'msg' => 'Filiado já cadastrado.'],
            ['id' => 2, 'msg' => 'Filiado cadastrado com sucesso.'],
        ];
      foreach ($allMensagens as $mensagem) {
        Mensagem::create($mensagem);
      }
    }
}
