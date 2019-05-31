<?php

  require __DIR__ . '/vendor/autoload.php' ;
  require __DIR__ . '/lib/config.php' ;

  use Psr\Http\Message\ServerRequestInterface ;
  use Psr\Http\Message\ResponseInterface ;

  $app = new Slim\App();

  $app->get('/',function(){
    echo "Esta é a index!" ;
  });

  $app->post('/'.API_PATH.'/product[/{id}]',function( ServerRequestInterface $request, ResponseInterface $response, $args ){

    echo "add " ;

    $parsedBody = $request->getBody();

    print_r($parsedBody);

    echo "\n\n\n\n" ;
    
    $parsedBody = $request->getParsedBody();
    
    print_r($parsedBody);

    echo "\n\n\n\n" ;

    var_dump($args);
    exit;

    // $parsedBody = $request->getParsedBody();

    // exit;
    // echo "<pre>" ;
    // var_dump($request);
    
    // $response = $response->withHeader('Content-type', 'application/json');
    // $response = $response->withStatus(200);

    // $data = array(1,2,3,4,5);

    // $response = $response->withJson($data, 201);

    // return $response ;

  });

  $app->get('/'.API_PATH.'/product',function(){
    var_dump('/'.API_PATH.'/product') ;
    var_dump('List all products') ;
  });

  $app->get('/'.API_PATH.'/product/{id}',function(){
    var_dump('/'.API_PATH.'/product/{id}') ;
    var_dump('List product {id}') ;
  });

  $app->put('/'.API_PATH.'/product/{id}',function(){
    var_dump('/'.API_PATH.'/product/{id}') ;
    var_dump('Update product {id}') ;
  });

  $app->delete('/'.API_PATH.'/product/{id}',function(){
    var_dump('/'.API_PATH.'/product/{id}') ;
    var_dump('Delete product {id}') ;
  });

  $app->run();



?>
