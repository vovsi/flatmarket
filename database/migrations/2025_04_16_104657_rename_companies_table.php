<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public const TABLE_OLD = 'companies';
    public const TABLE_NEW = 'company_contacts';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable(self::TABLE_OLD)) {
            return;
        }

        Schema::rename(self::TABLE_OLD, self::TABLE_NEW);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (!Schema::hasTable(self::TABLE_OLD)) {
            return;
        }

        Schema::rename(self::TABLE_NEW, self::TABLE_OLD);
    }
};
