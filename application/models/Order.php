<?php

use Illuminate\Database\Eloquent\Model;
class Order  extends  Model  { 
        
        protected  $table='orders';
        protected  $primaryKey='id';
        public $timestamps = true;

        // 1 บิลมีหลาย ๆ รายการสินค้า     
        public function details(){
            return $this->hasMany('OrderDetail');
        }

        // 1 บิลมี 1 customer 
        public function customer(){
            return $this->belongsTo('Customer');
        }

        // id,customer_id,order_date,amount,vat,netamount,discount,..

}