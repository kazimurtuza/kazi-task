<!-- Bootstrap 5 Starter template -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
            crossorigin="anonymous"
    />

    <title>Hello, world!</title>
    <style>
        .userimg{
            border-radius: 100%;
            height: 44px;
            width: 54px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">The Blog</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto  mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <img src="{{asset('img/img1.jpg')}}" height="300px" width="100%" alt="">

          <h1> SDKFHK ASDF LASDFJL LKASDFJ</h1>

           <div class="row" style="display: flex">
               <div class="col-sm-3">
                   <img class="userimg" src="{{asset('img/img1.jpg')}}"  alt="">
                   <span>sdlfjlsdfj</span>
               </div>

            </div>

           </div>

        <div class="col-sm-4">
            <div class="row" >
                <div class="col-sm-4">
                    <img class="userimg" src="{{asset('img/img1.jpg')}}"  alt="">
                </div>
                <div class="col-sm-4">
                    <h4 style="margin-top:10px;  font-size: 19px;
  margin-top: 10px;">sdlfjlsdfj</h4>
                </div>

            </div>

            <table class="table">
                <thead>
                <tr>
                    <td scope="col"><strong>More from</strong> agb</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center">Mark dsfkhasdkf</td>
                </tr>  <tr>
                    <td class="text-center">Mark dsfkhasdkf</td>
                </tr>  <tr>
                    <td class="text-center">Mark dsfkhasdkf</td>
                </tr>  <tr>
                    <td class="text-center">Mark dsfkhasdkf</td>
                </tr>
                <tr>
                    <td class="text-center">Mark dsfkhasdkf</td>
                </tr>

                </tbody>
            </table>

        </div>

    </div>

</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"
></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
-->
</body>
</html>