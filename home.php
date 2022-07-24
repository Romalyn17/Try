 <!-- Masthead-->

 <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>

</head>
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4 page-title">
                      <h3 class="text-white">Welcome to <?php echo $_SESSION['setting_name']; ?></h3>
                        <hr class="divider my-4" />
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#menu">Order Now</a>

                    </div>
                    
                </div>
            </div>
        </header>
  <section class="page-section" id="menu">

<div class="row inner-menu-box">
        <div class="col-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            
            <a class="nav-link" id="v-pills-drinks-tab" data-toggle="pill" href="#v-pills-drinks"tab" aria-controls="v-pills-breakfast" aria-selected="false">Drinks</a>

            <a class="nav-link" id="v-pills-lunch-tab" data-toggle="pill" href="#v-pills-lunch" role="tab" aria-controls="v-pills-lunch" aria-selected="false">Lunch</</a>

            <a class="nav-link" id="v-pills-mirienda-tab" data-toggle="pill" href="#v-pills-mirienda" role="tab" aria-controls="v-pills-mirienda" aria-selected="false">Mirienda</a>

            <a class="nav-link" id="v-pills-beverages-tab" data-toggle="pill" href="#v-pills-beverages" role="tab" aria-controls="v-pills-beverages" aria-selected="false">Beverages</a>

            <a class="nav-link" id="v-pills-dessert-tab" data-toggle="pill" href="#v-pills-dessert" role="tab" aria-controls="v-pills-dessert" aria-selected="false">Dessert</a>

          </div>
        </div>

          <div class="col-9">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-lunch" role="tabpanel" aria-labelledby="v-pills-drinks-tab">
              <div class="row">
                 <?php 
                    include'admin/db_connect.php';
                    $qry = $conn->query("SELECT * FROM  product_list WHERE category_id = 5 order by category_id ");
                    while($row = $qry->fetch_assoc()):
                    ?>
                    <div class="col-lg-6">
                     <div class="card menu-item ">
                        <img src="assets/img/<?php echo $row['img_path'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $row['name'] ?></h5>
                          <p class="card-text truncate"><?php echo $row['description'] ?></p>
                          <div class="text-center">
                              <button class="btn btn-sm btn-outline-primary view_prod btn-block" data-id=<?php echo $row['id'] ?>><i class="fa fa-eye"></i> View</button>
                              
                          </div>
                        </div>
                        
                      </div>
                      </div>
                    <?php endwhile; ?>
              </div>  
</div>
          
          <div class="col-10">
            <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-drinks" role="tabpanel" aria-labelledby="v-pills-drinks-tab">
              <div class="row">
                 <?php 
                    include'admin/db_connect.php';
                    $qry = $conn->query("SELECT * FROM  product_list WHERE category_id = 6 order by category_id ");
                    while($row = $qry->fetch_assoc()):
                    ?>
                    <div class="col-lg-6">
                     <div class="card menu-item ">
                        <img src="assets/img/<?php echo $row['img_path'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $row['name'] ?></h5>
                          <p class="card-text truncate"><?php echo $row['description'] ?></p>
                          <div class="text-center">
                              <button class="btn btn-sm btn-outline-primary view_prod btn-block" data-id=<?php echo $row['id'] ?>><i class="fa fa-eye"></i> View</button>
                              
                          </div>
                        </div>
                        
                      </div>
                      </div>
                    <?php endwhile; ?>
              </div>  

          </div>

              
              <div class="col-11">


                 <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-mirienda" role="tabpanel" aria-labelledby="v-pills-drinks-tab">
              <div class="row">
                 <?php 
                    include'admin/db_connect.php';
                    $qry = $conn->query("SELECT * FROM  product_list WHERE category_id = 4 order by category_id ");
                    while($row = $qry->fetch_assoc()):
                    ?>
                    <div class="col-lg-6">
                     <div class="card menu-item ">
                        <img src="assets/img/<?php echo $row['img_path'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $row['name'] ?></h5>
                          <p class="card-text truncate"><?php echo $row['description'] ?></p>
                          <div class="text-center">
                              <button class="btn btn-sm btn-outline-primary view_prod btn-block" data-id=<?php echo $row['id'] ?>><i class="fa fa-eye"></i> View</button>
                              
                          </div>
                        </div>
                        
                      </div>
                      </div>
                    <?php endwhile; ?>
              </div>  
              </div>
         



            </div>




             
</div>
        
        </div>
    </section>
    <script>
        
        $('.view_prod').click(function(){
            uni_modal_right('Product','view_prod.php?id='+$(this).attr('data-id'))
        })
    </script>
  
