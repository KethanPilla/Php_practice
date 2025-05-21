<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>E-commerce Site</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <!--        Reference: https://www.w3schools.com/bootstrap5/bootstrap_navbar.php-->
        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/KethanPilla/CreditCard_Validation_PHP">GitHub repo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <!--        Reference: https://mdbootstrap.com/docs/standard/extended/product-cards/-->
        <!-- Products Section -->
        <section style="background-color: #eee;">
            <div class="container py-5">
                <div class="row">
                    <!-- Product Card 1: iPhone 16 Pro -->
                    <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                        <div class="card text-black">
                            <img src="https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/iphone-16-pro-model-unselect-gallery-2-202409_GEO_US?wid=5120&hei=2880&fmt=webp&qlt=70&.v=aWs5czA5aDFXU0FlMGFGRlpYRXk2UWFRQXQ2R0JQTk5udUZxTkR3ZVlpSlo4cUtOVXZ0VkpGRlBQT0VQc1Qrd0lYUWYrQkRLNitCbE9QRVRqNHErMkE3b3pFWnhZZ2g0M0pRR0pEdHVSRUduT0czaHArUlZLcEtOcW5GMm05cGpjZEdRU1pKUzFhYUR2UXFULzFGNGpB&traceId=1"
                                 class="card-img-top" alt="iPhone 16 Pro" />
                            <div class="card-body">
                                <div class="text-center mt-1">
                                    <h4 class="card-title">iPhone 16 Pro</h4>
                                    <h6 class="text-primary mb-1 pb-3">Starting at $999</h6>
                                </div>
                                <form method="post" action="orderSummary.php">
                                    <label for="model1">Model</label>
                                    <select id="model1" name="model">
                                        <option value="16 Pro" selected>iPhone 16 Pro</option>
                                    </select>
                                    <br>
                                    <label for="storage1">Choose the storage size:</label>
                                    <select id="storage1" name="storage">
                                        <option value="128GB" selected>128GB</option>
                                        <option value="256GB">256GB</option>
                                        <option value="512GB">512GB</option>
                                    </select>
                                    <br>
                                    <label for="quantity1">Quantity :</label>
                                    <input type="text" id="quantity" name="quantity">
                                    <br><br>
                                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product Card 2: iPhone 16 Plus -->
                    <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                        <div class="card text-black">
                            <img src="https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/iphone-16-finish-select-202409-6-7inch_AV1?wid=5120&hei=2880&fmt=webp&qlt=70&.v=UXp1U3VDY3IyR1hNdHZwdFdOLzg1V0tFK1lhSCtYSGRqMUdhR284NTN4L1I3L1M0QlNtaE9Db2U5UFlybWQ0Smd2S3NaRzcrU0dmYjNHTUFiMnlsWFRocXAvNjVVaCtjTTZGTUNzOU8wNkZJY0RuMElmRE9OZGM2SktpdUtlZnI&traceId=1"
                                 class="card-img-top" alt="iPhone 16 Plus" />
                            <div class="card-body">
                                <div class="text-center mt-1">
                                    <h4 class="card-title">iPhone 16 Plus</h4>
                                    <h6 class="text-primary mb-1 pb-3">Starting at $899</h6>
                                </div>
                                <form method="post" action="orderSummary.php">
                                    <label for="model2">Model</label>
                                    <select id="model2" name="model">
                                        <option value="16 Plus" selected>iPhone 16 Plus</option>
                                    </select>
                                    <br>
                                    <label for="storage2">Choose the storage size:</label>
                                    <select id="storage2" name="storage">
                                        <option value="128GB" selected>128GB</option>
                                        <option value="256GB">256GB</option>
                                        <option value="512GB">512GB</option>
                                    </select>
                                    <br>
                                    <label for="quantity1">Quantity :</label>
                                    <input type="text" id="quantity" name="quantity">
                                    <br><br>
                                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product Card 3: iPhone 16 -->
                    <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                        <div class="card text-black">
                            <img src="https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/iphone-16-finish-select-202409-6-1inch_AV2?wid=5120&hei=2880&fmt=webp&qlt=70&.v=UXp1U3VDY3IyR1hNdHZwdFdOLzg1V0tFK1lhSCtYSGRqMUdhR284NTN4L3NSLzZtS1JDN0EvNXZMcnFMK3Rha2d2S3NaRzcrU0dmYjNHTUFiMnlsWFRocXAvNjVVaCtjTTZGTUNzOU8wNkhvYktJZitWMjFDQ3F6S0JXVFkvYUw"
                                 class="card-img-top" alt="iPhone 16" />
                            <div class="card-body">
                                <div class="text-center mt-1">
                                    <h4 class="card-title">iPhone 16</h4>
                                    <h6 class="text-primary mb-1 pb-3">Starting at $799</h6>
                                </div>
                                <form method="post" action="orderSummary.php">
                                    <label for="model3">Model</label>
                                    <select id="model3" name="model">
                                        <option value="16" selected>iPhone 16</option>
                                    </select>
                                    <br>
                                    <label for="storage3">Choose the storage size:</label>
                                    <select id="storage3" name="storage">
                                        <option value="128GB" selected>128GB</option>
                                        <option value="256GB">256GB</option>
                                        <option value="512GB">512GB</option>
                                    </select>
                                    <br>
                                    <label for="quantity1">Quantity :</label>
                                    <input type="text" id="quantity" name="quantity">
                                    <br><br>
                                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </body>
</html>

// <?php
//        $model = array();
//        $storage = array();
//        $quantity = array();
//        if ($_SERVER["REQUEST_METHOD"] == "POST") {
//            // collect value of input field
//            $model[] = htmlspecialchars($_REQUEST['model']);
//            $storage[] = htmlspecialchars($_REQUEST['storage']);
//            $quantity[] = htmlspecialchars($_REQUEST['quantity']);
//        }
//        var_dump($model);
//        <br>;
//        var_dump($storage);
//        <br>;
//        var_dump($quantity);
//        <br>;
//        ?>
//