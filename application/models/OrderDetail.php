<?php

use Illuminate\Database\Eloquent\Model;

class OrderDetail  extends  Model  { 
        
        protected  $table='orderdetails';
        protected  $primaryKey='id';
        public $timestamps = true;

        public function order(){
            return $this->belongsTo('Order');
        }

        // id,order_id,product_id,qty,unitprice,total,discount...
}