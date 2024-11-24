<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CreateTablesMigration extends Migration
{
    public function up(): void
    {
        $path = base_path('sql/pasalibrosdbproduccion.sql');
        $sql = File::get($path);
        DB::unprepared($sql);


    }
    public function down()
    {
        // Código para eliminar las tablas si es necesario
    }
}
