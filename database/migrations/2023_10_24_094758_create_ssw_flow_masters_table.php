<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ssw_flow_masters', function (Blueprint $table) {
            $table->id();
            $table->string('job_id')->nullable();
            $table->string('employer_id')->nullable();
            $table->integer('candidate_id')->nullable();
            $table->string('OfferingLetter')->nullable();
            $table->text('OfferingLetter_deskripsi')->nullable();
            $table->string('SuratPernyataan')->nullable();
            $table->text('SuratPernyataan_deskripsi')->nullable();
            $table->string('KTPKandidat')->nullable();
            $table->text('KTPKandidat_deskripsi')->nullable();
            $table->string('KTPWali')->nullable();
            $table->text('KTPWali_deskripsi')->nullable();
            $table->string('KKKandidat')->nullable();
            $table->text('KKKandidat_deskripsi')->nullable();
            $table->string('FotoKeluarga')->nullable();
            $table->text('FotoKeluarga_deskripsi')->nullable();
            $table->string('CVCoE')->nullable();
            $table->text('CVCoE_deskripsi')->nullable();
            $table->string('LembarKondisiKesehatan')->nullable();
            $table->text('LembarKondisiKesehatan_deskripsi')->nullable();
            $table->string('SyaratKerja')->nullable();
            $table->text('SyaratKerja_deskripsi')->nullable();
            $table->string('PembayaranGaji')->nullable();
            $table->text('PembayaranGaji_deskripsi')->nullable();
            $table->string('KonfirmasiJizenGuidance')->nullable();
            $table->text('KonfirmasiJizenGuidance_deskripsi')->nullable();
            $table->string('FormulirDetailRekrutmen')->nullable();
            $table->text('FormulirDetailRekrutmen_deskripsi')->nullable();
            $table->string('RencanaBantuanPekerjaAsing')->nullable();
            $table->text('RencanaBantuanPekerjaAsing_deskripsi')->nullable();
            $table->string('MCUAsli')->nullable();
            $table->text('MCUAsli_deskripsi')->nullable();
            $table->string('PasFoto')->nullable();
            $table->text('PasFoto_deskripsi')->nullable();
            $table->string('SuratKeteranganStatusPerkawinan')->nullable();
            $table->text('SuratKeteranganStatusPerkawinan_deskripsi')->nullable();
            $table->string('SuratKeteranganIzinWali')->nullable();
            $table->text('SuratKeteranganIzinWali_deskripsi')->nullable();
            $table->string('SuratKeteranganSehat')->nullable();
            $table->text('SuratKeteranganSehat_deskripsi')->nullable();
            $table->string('BPJSKIS')->nullable();
            $table->text('BPJSKIS_deskripsi')->nullable();
            $table->string('Paspor')->nullable();
            $table->text('Paspor_deskripsi')->nullable();
            $table->string('PerjanjianKerja')->nullable();
            $table->text('PerjanjianKerja_deskripsi')->nullable();
            $table->string('CoE')->nullable();
            $table->text('CoE_deskripsi')->nullable();
            $table->string('SuratPernyataanBertanggungJawab')->nullable();
            $table->text('SuratPernyataanBertanggungJawab_deskripsi')->nullable();
            $table->string('PengajuanPaspor')->nullable();
            $table->string('PengajuanSIM')->nullable();
            $table->string('JizenGuidance')->nullable();
            $table->string('MCU')->nullable();
            $table->string('MencetakPasFoto')->nullable();
            $table->string('TiketPesawatKeberangkatans')->nullable();
            $table->string('CoEs')->nullable();
            $table->string('eIDs')->nullable();
            $table->string('KontrakKerjas')->nullable();
            $table->string('Pasports')->nullable();
            $table->string('FormulirPengajuanVisas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ssw_flow_masters');
    }
};
