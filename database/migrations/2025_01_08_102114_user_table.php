<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //

        Schema::create(
            "users",
            function (Blueprint $table) {
                $table->id();
                $table->string("firstName", 50);
                $table->string("lastName", 50);
                $table->string("email", 50)->unique();
                $table->string("mobile", 30)->unique();
                $table->string("password", 50);
                $table->string("otp", 10);
                // $table->timestamp("created_at")->useCurrent();
                // $table->timestamp("update_at")->useCurrent()->useCurrentOnUpdate();
    
                $table->timestamps(); // This adds `created_at` and `updated_at` columns.
    

            }
        );

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
