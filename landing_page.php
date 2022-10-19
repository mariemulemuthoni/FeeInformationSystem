<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"  content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../assets/css_files/landingpage.css">
        <link rel="stylesheet" type="text/css" href="../assets/css_files/footer.css">
        <title>Landing Page</title>
    </head>

    <body>
        <!--Banner-->
        <section class="header">
            <h1>Kahera Dayspring School</h1>
            <p>To create a conducive environment that will enable the young learner to be creative and independent through safe play</p>
        </section>

        <!--Cards Row 2-->
        <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top: 20px;">
            <div class="col">
              <div class="card">
                <img src="../assets/images/life.jpg" class="card-img-top" style="height: 328px;">
                <div class="card-body">
                  <h5 class="card-title">Student Life</h5>
                  <a href="#" class="btn btn-primary">See More</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="../assets/images/performance.jpg" class="card-img-top" style="height: 328px;">
                <div class="card-body">
                  <h5 class="card-title">School Performance</h5>
                  <a href="#" class="btn btn-primary">See More</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="../assets/images/pay.jpg" class="card-img-top" style="height: 328px;">
                <div class="card-body">
                  <h5 class="card-title">Fee Information</h5>
                  <a href="fee_plan.php" class="btn btn-primary">See More</a>
                </div>
              </div>
            </div>
          </div>

          <?php include('../navbar/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>