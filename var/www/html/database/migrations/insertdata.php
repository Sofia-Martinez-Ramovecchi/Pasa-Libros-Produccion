<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class InsertData extends Migration
{
    public function up(): void
    {
        $path = base_path('sql/insert_data.sql');

                $sql = File::get($path);
                DB::unprepared($sql);

    }

    public function down()
    {
        // Código para revertir la inserción de datos si es necesario
    }
}
