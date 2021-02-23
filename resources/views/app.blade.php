  
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <title>My Amazing Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <header>
            @include('_partials/nav')
            @yield("heading")
        </header>
      <main class="mt-4">
          @yield("main")
      </main>
    </body>
    <footer class="container">
      @yield("pagination")
    </footer>
  </div>
</html>