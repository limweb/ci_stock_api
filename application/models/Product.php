<?php
use Illuminate\Database\Eloquent\Model;
class Product  extends  Model  { 
        
        protected  $table='products';
        protected  $primaryKey='id';
        public $timestamps = true;
        // id,product_code,product_name,unit,unit_price,...
}