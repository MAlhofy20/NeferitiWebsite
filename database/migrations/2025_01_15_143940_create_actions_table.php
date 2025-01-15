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
        Schema::create('actions', function (Blueprint $table) {
            $table->id();
            $table->string('session_id')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->string('action_name')->nullable(); // اسم الحدث (مثلاً clicked_whatsapp)
            $table->string('url')->nullable();         // الصفحة التي وقع فيها الحدث
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actions');
    }
};
