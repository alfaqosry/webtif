<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('image')->nullable();
            $table->string('nidn')->default('00000000');
            $table->string('email');
            $table->string('wa')->nullable();
            $table->string('jabatan_prodi')->default('Dosen');
            $table->longText('riwayat_jabatan')->nullable();
            $table->string('pejabat_lain')->default('no');
            $table->longText('pendidikan');
            $table->string('sinta')->nullable();
            $table->string('scopus')->nullable();
            $table->string('google_scholar')->nullable();
            $table->string('research_gate')->nullable();
            $table->string('link_staff')->nullable();
            $table->string('link_orchid')->nullable();
            $table->string('linkdin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('website')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosens');
    }
};
