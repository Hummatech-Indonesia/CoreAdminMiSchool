<?php

use App\Enums\SchoolEnum;
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
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('logo');
            $table->string('email');
            $table->string('password');
            $table->char('npsn', 8);
            $table->char('phone_number', 15);
            $table->foreignId('province_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('city_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('sub_district_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->char('pas_code', 10);
            $table->text('address');
            $table->string('head_master');
            $table->char('nip', 18)->nullable();
            $table->string('website')->nullable();
            $table->text('description')->nullable();
            $table->boolean('active')->default(1);
            $table->enum('type', [SchoolEnum::NEGERI->value, SchoolEnum::SWASTA->value]);
            $table->enum('level', [SchoolEnum::SDMI->value, SchoolEnum::SMPMTS->value, SchoolEnum::SMASMKMA->value]);
            $table->string('accreditation')->default('Belum Ter-akreditasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
