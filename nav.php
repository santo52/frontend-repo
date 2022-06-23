  <nav class="navbar navbar-expand-lg navbar-dark bg-danger" aria-label="Ninth navbar example">
    <div class="container-xl">
     
    
   
      <div class="col-2 pt-1">
        <a href="/frontend/index.php">
          <img src="/frontend/albunes/hey.png" width="50" height="50">
         <img src="/frontend/albunes/nota.png" width="50" height="50">
        </a>
       
      </div>


      <div class="col-6 text-center">
        <form method="post" action="resultados.php">
          <input class="form-control" type="text" placeholder="Buscar" aria-label="Search">
         <input class="btn btn-sm text-white" type="submit" value="buscar" />
        </form >
      </div>
     
   
 
      <div class="col-2 pt-1">
        <a class="btn btn-sm text-white" href="/frontend/register/registro.php">register</a>

        <a class="btn btn-sm text-white bg-danger" href="/frontend/login/login.html"> Login</a>
           
      </div>
    </div>
  </nav>


<div class="container">


  <div class="nav-scroller py-1 mb-2">
    <nav id="main-nav" class="nav d-flex justify-content-between"></nav>
  </div>
</div>

<script>
  (() => {
    $.ajax({ 
      url: '<?= $SERVER ?>/api/generos.php',
      type: 'GET',
      dataType: 'json',
      success: (data) => {
        const html = data.map(item => `<a class="p-2 link-secondary" href="#">${item.nombre}</a>`)
        $('#main-nav').html(html);
      }
    })
  })();
</script>

