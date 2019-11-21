<?php

public function update_product($product_id, $data, $method = "PUT") {

    return $this->_make_api_call('update.php/' . $product_id, $data, $method);
}

$data=  json_encode(

    array( 'pessoa' =>

       array( 
          'nome'        => "Kelly Linda",
          'endereco'   => "Minha casa",
          'telefone'         => "999",
          'email'   => "kelly@gmail.com"
       )
    )
);
?>