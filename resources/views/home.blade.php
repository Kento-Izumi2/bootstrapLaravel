<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bootstrap w/ Vite</title>

    

        <!-- Styles -->
        @vite([
            'resources/css/app.css',
            'resources/js/app.js', 
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.css'
            ])
    </head>
    <body>
    
   <div class="container py-4 px-3 mx-auto">
       <h1>hello, bootstrap and vite! </h1>
       <button class="btn bnt-primary">button


        
    
       </button>
       </div>
      </body>
</html>
