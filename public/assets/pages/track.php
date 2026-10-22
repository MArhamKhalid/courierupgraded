<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Courier</title>
    
    <!-- Favicons (Kyunki ye file assets/pages/ ke andar hai, toh bahar nikalne ke liye ../../ use hoga) -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicons/favicon-32x32.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">

    <!-- CSS Stylesheet -->
    <link href="../../assets/css/theme.css" rel="stylesheet" />
</head>
<body>

    <!-- Header Include (Dono ek hi folder mein hain, isliye sirf naam aayega) -->
    <?php include 'header.php'; ?>
    
    <section class="py-xxl-10 pb-0 ">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end">
              <img class="pt-7 pt-md-0 w-100" src="../../assets/img/illustrations/hero.png" alt="hero-header" />
            </div>
            <div class="col-md-7 col-xl-6 col-xxl-5 text-md-start text-center py-8">
              <h1 class="fw-normal fs-6 fs-xxl-7">A trusted provider of </h1>
              <h1 class="fw-bolder fs-6 fs-xxl-7 mb-2">courier services.</h1>
              <div>
                  
                <input type="text" placeholder="Track your order" class="me-2  ms-2">
                <a class="btn btn-primary me-2" href="#!" role="button">Track<i class="fas fa-arrow-right ms-2"></i></a>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- Footer Include -->
    <?php include 'footer.php'; ?>

</body>
</html>