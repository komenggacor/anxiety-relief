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
        Schema::table('relaxation_pages', function (Blueprint $table) {
            $table->string('title')->nullable()->after('youtube_url');
            $table->string('subtitle')->nullable()->after('title');
            $table->text('description')->nullable()->after('subtitle');
            $table->text('quote')->nullable()->after('description');
            $table->string('benefit_1')->nullable()->after('quote');
            $table->string('benefit_2')->nullable()->after('benefit_1');
            $table->string('benefit_3')->nullable()->after('benefit_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('relaxation_pages', function (Blueprint $table) {
            $table->dropColumn(['title', 'subtitle', 'description', 'quote', 'benefit_1', 'benefit_2', 'benefit_3']);
        });
    }
};
