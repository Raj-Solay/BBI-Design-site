<?php include_once('header.php'); ?>
 <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js'></script>

<body ng-app='myapp'>
   <main ng-controller="userCtrl">
        <!--page-title-area start-->
        <section class="page-title-area" style="background-image: url(assets/img/banners/Our_work.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="page-title-wrapper pt-80 text-center">
                            <h3 class="page-title mb-25">Product Details</h3>
                            <div class="breadcrumb-list">
                                <ul class="breadcrumb">
                                    <li><a href="index.html">Home <i class="far fa-chevron-right"></i></a></li>
                                    <li><a href="#">Product Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page-title-area end-->
       
        <!-- product-desc-area-start -->
        <section class="product-desc-area pt-100 pb-95">
            <div class="container" >
                <div class="row" >
                    <div class="col-12">
                        <div class="bakix-details-tab mb-50">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#dhome" type="button" role="tab">Description</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#dprofile" type="button" role="tab">Additional Information</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#dcontact" type="button" role="tab">Reviews(10)</button>
                                </li>
                              </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="dhome" role="tabpanel">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="event-text">
                                    <table class="table table-bordered">
                                    <tr>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>location</th>
                                    <th>message</th>
                                    </tr>

                                    <tr ng-repeat="user in users">
                                    <td>{{user.name}}</td>
                                    <td>{{user.email}}</td>
                                    <td>{{user.phone}}</td>
                                    <td>{{user.location}}</td>
                                    <td>{{user.message}}</td>
                                    </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="dprofile" role="tabpanel">
                        <div class="additional-info">
                            <div class="table-responsive">
                               
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>Weight</th>
                                            <td class="product_weight">1.4 oz</td>
                                        </tr>
                                        <tr>
                                            <th>Dimensions</th>
                                            <td class="product_dimensions">62 × 56 × 12 in</td>
                                        </tr>
                                        <tr>
                                            <th>Size</th>
                                            <td class="product_dimensions">XL, XXL, LG, SM, MD</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="dcontact" role="tabpanel">
                        <div class="additional-info">
                            <div class="event-text mb-40">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                    ut aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint
                                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                                    id est laborum. Sed ut perspiciatis
                                    unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                    totam rem aperiam, eaque ipsa quae ab
                                    illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                    Nemo enim ipsam voluptatem quia
                                    voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
                                    eos qui ratione voluptatem sequi
                                    nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                    consectetur, adipisci velit, sed quia non
                                    numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                    voluptatem.</p>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum. Sed ut
                                    perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque
                                    ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                                    sunt explicabo. Nemo enim ipsam voluptatem
                                    quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                                    dolores eos qui ratione voluptatem sequi
                                    nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                    consectetur, adipisci velit, sed quia non
                                    numquam eius modi tempora.</p>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </section>
        <!-- product-desc-area-End -->
       

 <!-- Script -->
        <script>
        var fetch = angular.module('myapp', []);

        fetch.controller('userCtrl', ['$scope', '$http', function ($scope, $http) {
            
            $http({
            method: 'get',
            url: 'getData.php'
            }).then(function successCallback(response) {
                $scope.users = response.data;
            });

        }]);

        </script>
</main>
</body>
<?php include_once('footer.php'); ?>


