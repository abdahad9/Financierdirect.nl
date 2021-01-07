<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactuurCSVSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factuur_c_s_v_s', function (Blueprint $table) {
            $table->id();
            $table->string('purchase_id');
            $table->string('status');
            $table->string('created_at');
            $table->string('updated_at');
            $table->string('user_id');
            $table->string('product_id');
            $table->string('product_title');
            $table->string('profit');
            $table->string('accountmanager_id');
            $table->string('invoice_status');
            $table->string('moneybird_invoice_id');
            $table->string('bank');
            $table->string('company_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factuur_c_s_v_s');
    }
}
