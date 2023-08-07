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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();//INT PRIMARY KEY AUTO_INCREMENT
            $table->string('NameSender');
            $table->unsignedBigInteger('PhoneSender');
            $table->unsignedInteger('region_id');
            $table->string('AddSender');
            $table->unsignedInteger('AddSenderApartment')->nullable();//NULL
            $table->unsignedInteger('AddSenderfloor')->nullable();//NULL
            $table->unsignedInteger('NumberSeats'); //не может быть отрецательным
            $table->unsignedInteger('Weight'); //не может быть отрецательным
            $table->string('RecipientName');
            $table->unsignedBigInteger('PhoneRecipient');
            $table->string('AddRecipient');
            $table->tinyInteger('status')->default(0);//TINYINT(1) NOT NULL DEFAULT 0. Выполнен 1 ? Не выполнен 0
            $table->text('comments');
            $table->timestamps();//будет зависить какой формат, нужен 'Y-m-d'
            $table->foreign('region_id')->on('regions')->references('region')->onDelete('cascade'); // каскадное удаление
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
