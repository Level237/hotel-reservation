<?php

use App\Models\Hotel;
use App\Models\Room_Type;
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
        Schema::create('chambres', function (Blueprint $table) {
            $table->id();
            $table->string('classe');
            $table->string('type');
            $table->string('image');
            $table->boolean('status');
            $table->foreignIdFor(Hotel::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();
            $table->foreignIdFor(Room_Type::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chambres');
    }
};
