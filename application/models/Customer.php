<?php

use Illuminate\Database\Eloquent\Model;
class Customer  extends  Model  { 
        
        protected  $table='customers';
        protected  $primaryKey='id';
        public $timestamps = true;

        // customer มีหลาย ๆ การสั่งซื้อ    
        public function orders(){
            return $this->hasMany('Order');
        }
        // id,name,address,...

}

