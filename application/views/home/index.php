<div class="site-blocks-cover" data-aos="fade">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-5 text-center">
                <div class="featured-hero-product w-100">
                    <h1 class="mb-2">Madewell</h1>
                    <h4>Summer Collection</h4>
                    <div class="price mt-3 mb-5"><strong>1,499</strong> <del>$1,999</del></div>
                    <p><a href="#" class="btn btn-outline-primary rounded-0">Shop Now</a> <a href="#" class="btn btn-primary rounded-0">Shop Now</a></p>
                </div>
            </div>
            <div class="col-lg-7 align-self-end text-center text-lg-right">
                <img src="assets/images/new/person_transparent.png" alt="Image" class="img-fluid img-1">
            </div>

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
                            <strong class="price"><?= $all_produk->harga; ?></strong>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="site-blocks-cover inner-page py-5" data-aos="fade">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 ml-auto order-lg-2 align-self-start">
                <div class="site-block-cover-content">
                    <h2 class="sub-title">#New Summer Collection 2019</h2>
                    <h1>Jacket</h1>
                    <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
                </div>
            </div>
            <div class="col-lg-8 order-1 align-self-end">
                <img src="assets/images/model_woman_1.png" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="title-section text-center col-12">
                <h2 class="text-uppercase">Collections</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 block-3 products-wrap">
                <div class="nonloop-block-3 owl-carousel">
                    <?php foreach ($data->result() as $all_produk) : ?>
                        <div class="product">
                            <a href="#" class="item">
                                <img src="<?= base_url('assets/image/' . $all_produk->image); ?>" alt="Image" class="img-fluid">
                                <div class="item-info">
                                    <h3>The Shoe</h3>
                                    <span class="collection d-block">Summer Collection</span>
                                    <strong class="price">$9.50</strong>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div>
        </div>
    </div>
</div>


<div class="site-blocks-cover inner-page py-5" data-aos="fade">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 ml-auto order-lg-2 align-self-start">
                <div class="site-block-cover-content">
                    <h2 class="sub-title">#New Summer Collection 2019</h2>
                    <h1>New Denim Coat</h1>
                    <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
                </div>
            </div>
            <div class="col-lg-6 order-1 align-self-end">
                <img src="assets/images/model_5.png" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>