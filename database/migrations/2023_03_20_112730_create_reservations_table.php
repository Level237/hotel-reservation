<?php

use App\Models\User;
use App\Models\Chambre;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Chambre::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();

            $table->string('check_in');
            $table->string('check_out');
            $table->integer('duration_of_stay');
            $table->foreignIdFor(User::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();
            $table->double('price_reser')->nullable();
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
