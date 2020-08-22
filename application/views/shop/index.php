<div class="site-section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-lg-9 order-2 order-lg-1">

                <div class="row align">
                    <div class="col-md-12 mb-5">
                        <div class="float-md-left">
                            <h2 class="text-black h5">Shop All</h2>
                        </div>
                    </div>
                </div>
                <div class="products-wrap border-top-0">
                    <div class="container-fluid">
                        <div class="row no-gutters products">
                            <?php foreach ($data->result() as $all_produk) :  ?>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <a href="<?= base_url('shop/detail/' . $all_produk->id); ?>" class="item">
                                        <img src="<?= base_url('assets/image/' . $all_produk->image); ?>" alt="Image" class="img-fluid">
                                        <div class="item-info">
                                            <h3>The Shoe</h3>
                                            <span class="collection d-block"><?= $all_produk->name; ?></span>
                                            <strong class="price"><?= ('Rp.' . $all_produk->harga); ?></strong>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="site-block-27">
                            <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="border p-4 mb-4">
                    <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-1"><a href="#" class="d-flex"><span>Men</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                        <li class="mb-1"><a href="#" class="d-flex"><span>Women</span> <span class="text-black ml-auto">(2,550)</span></a></li>
                        <li class="mb-1"><a href="#" class="d-flex"><span>Children</span> <span class="text-black ml-auto">(2,124)</span></a></li>
                    </ul>
                </div>

                <div class="border p-4 mb-4">
                    <div class="mb-4">
                        <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
                        <div id="slider-range" class="border-primary"></div>
                        <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
                    </div>

                    <div class="mb-4">
                        <h3 class="mb-3 h6 text-uppercase text-black d-block">Size</h3>
                        <label for="s_sm" class="d-flex">
                            <input type="checkbox" id="s_sm" class="mr-2 mt-1"> <span class="text-black">Small (2,319)</span>
                        </label>
                        <label for="s_md" class="d-flex">
                            <input type="checkbox" id="s_md" class="mr-2 mt-1"> <span class="text-black">Medium (1,282)</span>
                        </label>
                        <label for="s_lg" class="d-flex">
                            <input type="checkbox" id="s_lg" class="mr-2 mt-1"> <span class="text-black">Large (1,392)</span>
                        </label>
                    </div>

                    <div class="mb-4">
                        <h3 class="mb-3 h6 text-uppercase text-black d-block">Color</h3>
                        <a href="#" class="d-flex color-item align-items-center">
                            <span class="bg-danger color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Red (2,429)</span>
                        </a>
                        <a href="#" class="d-flex color-item align-items-center">
                            <span class="bg-success color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Green (2,298)</span>
                        </a>
                        <a href="#" class="d-flex color-item align-items-center">
                            <span class="bg-info color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Blue (1,075)</span>
                        </a>
                        <a href="#" class="d-flex color-item align-items-center">
                            <span class="bg-primary color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Purple (1,075)</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>