<?php

class erLhcoreClassModelTransfer {

   public function getState()
   {
       return array(
               'id'       			 => $this->id,
               'dep_id'  			 => $this->dep_id,
               'chat_id'  			 => $this->chat_id,
               'transfer_user_id'  	 => $this->transfer_user_id,
               'from_dep_id'  		 => $this->from_dep_id,
               'to_instance_id'  	 => $this->to_instance_id,
               'transfer_to_user_id' => $this->transfer_to_user_id,
       );
   }

   public function setState( array $properties )
   {
       foreach ( $properties as $key => $val )
       {
           $this->$key = $val;
       }
   }

   public function saveThis( )
   {
   	   erLhcoreClassTransfer::getSession()->saveOrUpdate($this);
   }

   public $id = null;
   public $dep_id = 0;
   public $chat_id = null;
   public $transfer_user_id = 0;
   public $from_dep_id = null;
   public $transfer_to_user_id = 0;
   public $to_instance_id = 0;
}

?>