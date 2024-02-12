<?php
$menu=array('Asosiy','Jahon','Mahalliy','Sport','It','Ilm');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary bg-primary">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        data-mdb-collapse-init
        class="navbar-toggler"
        type="button"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse">
       
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img
            src="paris.jpg"
            height="15" alt="Paris"/>
        </a>
        
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <?php for($i=0;$i<6;$i++){ ?>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <?php echo 'salom' ?>
            </a>
          </li>
          <?php } ?>
        </ul>
       
      </div>
     
      <div class="d-flex align-items-center">
       
        <a class="text-reset me-3" href="#">
          <i class="fas fa-shopping-cart"></i>
        </a>
  
      
      </div>
     
    </div>
    
  </nav>


  <main>

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Bootstrap Website</h1>
        <p class="lead text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis esse assumenda doloribus impedit ex quidem molestiae expedita hic ut quasi.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Login</a>
          <a href="#" class="btn btn-secondary my-2">Sign-up</a>
        </p>
      </div>
    </section>
  
    <div class="album py-5 bg-light">
      <div class="container">
  
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="nature.jpg" alt=""></img>
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis nobis ex magni laudantium.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Submit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="nature1.jpg" alt=""></img>
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia quia aperiam sit? Omnis!</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Submit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="nature3.jpg" alt=""></img>
              <div class="card-body">
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio quia exercitationem optio ullam.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Submit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
  
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="nature4.jpg" alt=""></img>
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda id nobis alias quam.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Submit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="nature5.jpg" alt=""></img>
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nostrum itaque pariatur dolor!</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Submit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="nature6.jpg" alt=""></img>
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae perferendis labore eveniet natus.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Submit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
  
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="nature7.jpg" alt=""></img>
              <div class="card-body">
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis minus itaque ipsa. Explicabo!</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Submit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="images.jpg" alt=""></img>
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et molestias cum ad? Unde.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Submit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="images1.jpg" alt=""></img>
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet, pariatur odio. Ullam, aspernatur.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Submit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </main>


 
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>