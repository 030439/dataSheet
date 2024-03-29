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
        Schema::create('sheet_data', function (Blueprint $table) {
            $table->id();
            $table->string('Ticket_Id');
            $table->string('Time');
            $table->string('Action');
            $table->string('Type');
            $table->string('Type_Detail');
            $table->decimal('Account', 10, 2)->nullable(); // Make 'Account' nullable
            $table->string('Parent');
            $table->string('Amount');
            $table->string('Script');
            $table->decimal('Price', 10, 2);
            $table->decimal('Close_Price', 10, 2);
            $table->decimal('Total_PnL', 10, 2);
            $table->decimal('SL', 10, 2);
            $table->decimal('TP', 10, 2);
            $table->string('Open_Position');
            $table->date('Open_Date')->nullable();
            $table->string('Time_Diff');
            $table->string('Created_By');
            $table->string('Comment');
            $table->string('IP');
            $table->string('Script_Description');
            $table->string('Expiry_Date')->nullable();  // Set the default value to null
            $table->string('Method');
            $table->decimal('Contract_Size', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sheet_data');
    }
};
