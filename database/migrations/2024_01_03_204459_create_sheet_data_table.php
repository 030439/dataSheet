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
            $table->string('Account');
            $table->string('Parent');
            $table->string('Amount');
            $table->string('Script');
            $table->string('Price');
            $table->string('Close_Price');
            $table->string('Total_PnL');
            $table->string('SL');
            $table->string('TP');
            $table->string('Open_Position');
            $table->string('Open_Date')->nullable();
            $table->string('Time_Diff');
            $table->string('Created_By');
            $table->string('Comment');
            $table->string('IP');
            $table->string('Script_Description');
            $table->string('Expiry_Date')->nullable();  // Set the default value to null
            $table->string('Method');
            $table->string('Contract_Size');
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
