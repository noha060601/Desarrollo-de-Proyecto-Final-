<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('dni', 8)->nullable()->after('name'); // SIN ->unique()
        $table->string('direccion')->nullable()->after('dni');
        $table->date('fecha_nacimiento')->nullable()->after('direccion');
        $table->enum('tipo_usuario', ['estudiante', 'docente', 'administrador', 'apoderado'])->default('estudiante')->after('fecha_nacimiento');
    });
}


public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn(['dni', 'direccion', 'fecha_nacimiento', 'tipo_usuario']);
    });
}

};
