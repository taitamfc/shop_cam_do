@extends('admin.layouts.master')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">



    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">eCommerce /</span><span> Add Product</span>
    </h4>

    <div class="app-ecommerce">

        <!-- Add Product -->
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">

            <div class="d-flex flex-column justify-content-center">
                <h4 class="mb-1 mt-3">Add a new Product</h4>
                <p class="text-muted">Orders placed across your store</p>
            </div>
            <div class="d-flex align-content-center flex-wrap gap-3">
                <button class="btn btn-label-secondary" fdprocessedid="38mgnb">Discard</button>
                <button class="btn btn-label-primary" fdprocessedid="wjdvy">Save draft</button>
                <button type="submit" class="btn btn-primary" fdprocessedid="7ivav7">Publish product</button>
            </div>

        </div>

        <div class="row">

            <!-- First column-->
            <div class="col-12 col-lg-8">
                <!-- Product Information -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-tile mb-0">Product information</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="ecommerce-product-name">Name</label>
                            <input type="text" class="form-control" id="ecommerce-product-name" placeholder="Product title" name="productTitle" aria-label="Product title" fdprocessedid="l2mh0m">
                        </div>
                        <div class="row mb-3">
                            <div class="col"><label class="form-label" for="ecommerce-product-sku">SKU</label>
                                <input type="number" class="form-control" id="ecommerce-product-sku" placeholder="SKU" name="productSku" aria-label="Product SKU" fdprocessedid="80ad1r">
                            </div>
                            <div class="col"><label class="form-label" for="ecommerce-product-barcode">Barcode</label>
                                <input type="text" class="form-control" id="ecommerce-product-barcode" placeholder="0123-4567" name="productBarcode" aria-label="Product barcode" fdprocessedid="7lglt">
                            </div>
                        </div>
                        <!-- Description -->
                        <div>
                            <label class="form-label">Description <span class="text-muted">(Optional)</span></label>
                            <div class="form-control p-0 pt-1">
                                <div class="comment-toolbar border-0 border-bottom ql-toolbar ql-snow">
                                    <div class="d-flex justify-content-start">
                                        <span class="ql-formats me-0">
                                            <button class="ql-bold" type="button" fdprocessedid="m86fd9"><svg viewBox="0 0 18 18">
                                                    <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path>
                                                    <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path>
                                                </svg></button>
                                            <button class="ql-italic" type="button" fdprocessedid="hb524"><svg viewBox="0 0 18 18">
                                                    <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line>
                                                    <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line>
                                                    <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line>
                                                </svg></button>
                                            <button class="ql-underline" type="button" fdprocessedid="eo1ae9"><svg viewBox="0 0 18 18">
                                                    <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path>
                                                    <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect>
                                                </svg></button>
                                            <button class="ql-list" value="ordered" type="button" fdprocessedid="jvr5m"><svg viewBox="0 0 18 18">
                                                    <line class="ql-stroke" x1="7" x2="15" y1="4" y2="4"></line>
                                                    <line class="ql-stroke" x1="7" x2="15" y1="9" y2="9"></line>
                                                    <line class="ql-stroke" x1="7" x2="15" y1="14" y2="14"></line>
                                                    <line class="ql-stroke ql-thin" x1="2.5" x2="4.5" y1="5.5" y2="5.5"></line>
                                                    <path class="ql-fill" d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z"></path>
                                                    <path class="ql-stroke ql-thin" d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156"></path>
                                                    <path class="ql-stroke ql-thin" d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109"></path>
                                                </svg></button>
                                            <button class="ql-list" value="bullet" type="button" fdprocessedid="wxakhj"><svg viewBox="0 0 18 18">
                                                    <line class="ql-stroke" x1="6" x2="15" y1="4" y2="4"></line>
                                                    <line class="ql-stroke" x1="6" x2="15" y1="9" y2="9"></line>
                                                    <line class="ql-stroke" x1="6" x2="15" y1="14" y2="14"></line>
                                                    <line class="ql-stroke" x1="3" x2="3" y1="4" y2="4"></line>
                                                    <line class="ql-stroke" x1="3" x2="3" y1="9" y2="9"></line>
                                                    <line class="ql-stroke" x1="3" x2="3" y1="14" y2="14"></line>
                                                </svg></button>
                                            <button class="ql-link" type="button" fdprocessedid="hxt9nx"><svg viewBox="0 0 18 18">
                                                    <line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line>
                                                    <path class="ql-even ql-stroke" d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z"></path>
                                                    <path class="ql-even ql-stroke" d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z"></path>
                                                </svg></button>
                                            <button class="ql-image" type="button" fdprocessedid="jqveae"><svg viewBox="0 0 18 18">
                                                    <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect>
                                                    <circle class="ql-fill" cx="6" cy="7" r="1"></circle>
                                                    <polyline class="ql-even ql-fill" points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline>
                                                </svg></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="comment-editor border-0 pb-4 ql-container ql-snow" id="ecommerce-category-description">
                                    <div class="ql-editor ql-blank" data-gramm="false" contenteditable="true" data-placeholder="Product Description">
                                        <p><br></p>
                                    </div>
                                    <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                    <div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Product Information -->
                <!-- Media -->
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 card-title">Media</h5>
                        <a href="javascript:void(0);" class="fw-medium">Add media from URL</a>
                    </div>
                    <div class="card-body">
                        <form action="/upload" class="dropzone needsclick dz-clickable" id="dropzone-basic">
                            <div class="dz-message needsclick my-5">
                                <p class="fs-4 note needsclick my-2">Drag and drop your image here</p>
                                <small class="text-muted d-block fs-6 my-2">or</small>
                                <span class="note needsclick btn bg-label-primary d-inline" id="btnBrowse">Browse image</span>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- /Media -->
                <!-- Variants -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Variants</h5>
                    </div>
                    <div class="card-body">
                        <form class="form-repeater">
                            <div data-repeater-list="group-a">
                                <div data-repeater-item="">
                                    <div class="row">

                                        <div class="mb-3 col-4">
                                            <label class="form-label" for="form-repeater-1-1">Options</label>
                                            <div class="position-relative"><select id="form-repeater-1-1" class="select2 form-select select2-hidden-accessible" data-placeholder="Size" data-select2-id="form-repeater-1-1" tabindex="-1" aria-hidden="true">
                                                    <option value="" data-select2-id="2">Size</option>
                                                    <option value="size">Size</option>
                                                    <option value="color">Color</option>
                                                    <option value="weight">Weight</option>
                                                    <option value="smell">Smell</option>
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 232.038px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-form-repeater-1-1-container"><span class="select2-selection__rendered" id="select2-form-repeater-1-1-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Size</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                                        </div>

                                        <div class="mb-3 col-8">
                                            <label class="form-label invisible" for="form-repeater-1-2">Not visible</label>
                                            <input type="number" id="form-repeater-1-2" class="form-control" placeholder="Enter size" fdprocessedid="o76s5">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary" data-repeater-create="" fdprocessedid="gn6g4j">
                                    Add another option
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Variants -->
                <!-- Inventory -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Inventory</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Navigation -->
                            <div class="col-12 col-md-4 mx-auto card-separator">
                                <div class="d-flex justify-content-between flex-column mb-3 mb-md-0 pe-md-3">
                                    <ul class="nav nav-align-left nav-pills flex-column" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#restock" aria-selected="true" role="tab" fdprocessedid="3dcjya">
                                                <i class="bx bx-cube me-2"></i>
                                                <span class="align-middle">Restock</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#shipping" aria-selected="false" tabindex="-1" role="tab">
                                                <i class="bx bx-car me-2"></i>
                                                <span class="align-middle">Shipping</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#global-delivery" aria-selected="false" tabindex="-1" role="tab">
                                                <i class="bx bx-globe me-2"></i>
                                                <span class="align-middle">Global Delivery</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#attributes" aria-selected="false" tabindex="-1" role="tab">
                                                <i class="bx bx-link me-2"></i>
                                                <span class="align-middle">Attributes</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#advanced" aria-selected="false" tabindex="-1" role="tab">
                                                <i class="bx bx-lock me-2"></i>
                                                <span class="align-middle">Advanced</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /Navigation -->
                            <!-- Options -->
                            <div class="col-12 col-md-8 pt-4 pt-md-0">
                                <div class="tab-content p-0 pe-md-5 ps-md-3">
                                    <!-- Restock Tab -->
                                    <div class="tab-pane fade show active" id="restock" role="tabpanel">
                                        <h5>Options</h5>
                                        <label class="form-label" for="ecommerce-product-stock">Add to Stock</label>
                                        <div class="row mb-3 g-3">
                                            <div class="col-12 col-sm-9">
                                                <input type="number" class="form-control" id="ecommerce-product-stock" placeholder="Quantity" name="quantity" aria-label="Quantity" fdprocessedid="ncv8ng">
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <button class="btn btn-primary" fdprocessedid="ptswmvo"><i class="bx bx-check me-2"></i>Confirm</button>
                                            </div>
                                        </div>
                                        <div>
                                            <h6>Product in stock now: <span class="text-muted">54</span></h6>
                                            <h6>Product in transit: <span class="text-muted">390</span></h6>
                                            <h6>Last time restocked: <span class="text-muted">24th June, 2023</span></h6>
                                            <h6>Total stock over lifetime: <span class="text-muted">2430</span></h6>
                                        </div>
                                    </div>
                                    <!-- Shipping Tab -->
                                    <div class="tab-pane fade" id="shipping" role="tabpanel">
                                        <h5 class="mb-4">Shipping Type</h5>
                                        <div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="shippingType" id="seller">
                                                <label class="form-check-label" for="seller">
                                                    <span class="mb-1 h6">Fulfilled by Seller</span>
                                                    <small class="text-muted">You'll be responsible for product delivery.<br>
                                                        Any damage or delay during shipping may cost you a Damage fee.</small>
                                                </label>
                                            </div>
                                            <div class="form-check mb-5">
                                                <input class="form-check-input" type="radio" name="shippingType" id="companyName" checked="">
                                                <label class="form-check-label" for="companyName">
                                                    <span class="mb-1 h6">Fulfilled by Company name &nbsp;<span class="badge rounded-2 badge-warning bg-label-warning fs-tiny py-1">RECOMMENDED</span></span>
                                                    <br><small class="text-muted">Your product, Our responsibility.<br>
                                                        For a measly fee, we will handle the delivery process for you.</small>
                                                </label>
                                            </div>
                                            <p class="mb-0">See our <a href="javascript:void(0);">Delivery terms and conditions</a> for details</p>
                                        </div>
                                    </div>
                                    <!-- Global Delivery Tab -->
                                    <div class="tab-pane fade" id="global-delivery" role="tabpanel">
                                        <h5 class="mb-4">Global Delivery</h5>
                                        <!-- Worldwide delivery -->
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="globalDel" id="worldwide">
                                            <label class="form-check-label" for="worldwide">
                                                <span class="mb-1 h6">Worldwide delivery</span>
                                                <small class="text-muted">Only available with Shipping method:
                                                    <a href="javascript:void(0);">Fulfilled by Company name</a></small>
                                            </label>
                                        </div>
                                        <!-- Global delivery -->
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="globalDel" checked="">
                                            <label class="form-check-label w-75 pe-5" for="country-selected">
                                                <span class="mb-2 h6">Selected Countries</span>
                                                <input type="text" class="form-control" placeholder="Type Country name" id="country-selected">
                                            </label>
                                        </div>
                                        <!-- Local delivery -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="globalDel" id="local">
                                            <label class="form-check-label" for="local">
                                                <span class="mb-1 h6">Local delivery</span>
                                                <small class="text-muted">Deliver to your country of residence :
                                                    <a href="javascript:void(0);">Change profile address</a></small>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- Attributes Tab -->
                                    <div class="tab-pane fade" id="attributes" role="tabpanel">
                                        <h5 class="mb-4">Attributes</h5>
                                        <div>
                                            <!-- Fragile Product -->
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value="fragile" id="fragile">
                                                <label class="form-check-label" for="fragile">
                                                    <span class="mb-0 h6">Fragile Product</span>
                                                </label>
                                            </div>
                                            <!-- Biodegradable -->
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value="biodegradable" id="biodegradable">
                                                <label class="form-check-label" for="biodegradable">
                                                    <span class="mb-0 h6">Biodegradable</span>
                                                </label>
                                            </div>
                                            <!-- Frozen Product -->
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value="frozen" checked="">
                                                <label class="form-check-label w-75 pe-5" for="frozen">
                                                    <span class="mb-1 h6">Frozen Product</span>
                                                    <input type="number" class="form-control" placeholder="Max. allowed Temperature" id="frozen">
                                                </label>
                                            </div>
                                            <!-- Exp Date -->
                                            <div class="form-check mb-4">
                                                <input class="form-check-input" type="checkbox" value="expDate" id="expDate" checked="">
                                                <label class="form-check-label w-75 pe-5" for="date-input">
                                                    <span class="mb-1 h6">Expiry Date of Product</span>
                                                    <input type="text" class="product-date form-control flatpickr-input" id="date-input" readonly="readonly">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Attributes Tab -->
                                    <!-- Advanced Tab -->
                                    <div class="tab-pane fade" id="advanced" role="tabpanel">
                                        <h5 class="mb-4">Advanced</h5>
                                        <div class="row">
                                            <!-- Product Id Type -->
                                            <div class="col">
                                                <label class="form-label" for="product-id">
                                                    <span class="mb-0 h6">Product ID Type</span>
                                                </label>
                                                <div class="position-relative"><select id="product-id" class="select2 form-select select2-hidden-accessible" data-placeholder="ISBN" data-select2-id="product-id" tabindex="-1" aria-hidden="true">
                                                        <option value="" data-select2-id="4">ISBN</option>
                                                        <option value="ISBN">ISBN</option>
                                                        <option value="UPC">UPC</option>
                                                        <option value="EAN">EAN</option>
                                                        <option value="JAN">JAN</option>
                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-product-id-container"><span class="select2-selection__rendered" id="select2-product-id-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">ISBN</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                                            </div>
                                            <!-- Product Id -->
                                            <div class="col">
                                                <label class="form-label" for="product-id-1">
                                                    <span class="mb-0 h6">Product ID</span>
                                                </label>
                                                <input type="number" id="product-id-1" class="form-control" placeholder="ISBN Number">
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /Advanced Tab -->

                                </div>
                            </div>
                            <!-- /Options-->
                        </div>
                    </div>
                </div>
                <!-- /Inventory -->
            </div>
            <!-- /Second column -->

            <!-- Second column -->
            <div class="col-12 col-lg-4">
                <!-- Pricing Card -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Pricing</h5>
                    </div>
                    <div class="card-body">
                        <!-- Base Price -->
                        <div class="mb-3">
                            <label class="form-label" for="ecommerce-product-price">Base Price</label>
                            <input type="number" class="form-control" id="ecommerce-product-price" placeholder="Price" name="productPrice" aria-label="Product price" fdprocessedid="psrb4d">
                        </div>
                        <!-- Discounted Price -->
                        <div class="mb-3">
                            <label class="form-label" for="ecommerce-product-discount-price">Discounted Price</label>
                            <input type="number" class="form-control" id="ecommerce-product-discount-price" placeholder="Discounted Price" name="productDiscountedPrice" aria-label="Product discounted price" fdprocessedid="y7vvsa">
                        </div>
                        <!-- Charge tax check box -->
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="price-charge-tax" checked="">
                            <label class="form-label" for="price-charge-tax">
                                Charge tax on this product
                            </label>
                        </div>
                        <!-- Instock switch -->
                        <div class="d-flex justify-content-between align-items-center border-top pt-3">
                            <span class="mb-0 h6">In stock</span>
                            <div class="w-25 d-flex justify-content-end">
                                <label class="switch switch-primary switch-sm me-4 pe-2">
                                    <input type="checkbox" class="switch-input" checked="">
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on">
                                            <span class="switch-off"></span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Pricing Card -->
                <!-- Organize Card -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Organize</h5>
                    </div>
                    <div class="card-body">
                        <!-- Vendor -->
                        <div class="mb-3 col ecommerce-select2-dropdown">
                            <label class="form-label mb-1" for="vendor">
                                Vendor
                            </label>
                            <div class="position-relative"><select id="vendor" class="select2 form-select select2-hidden-accessible" data-placeholder="Select Vendor" data-select2-id="vendor" tabindex="-1" aria-hidden="true">
                                    <option value="" data-select2-id="6">Select Vendor</option>
                                    <option value="men-clothing">Men's Clothing</option>
                                    <option value="women-clothing">Women's-clothing</option>
                                    <option value="kid-clothing">Kid's-clothing</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 337.062px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-vendor-container"><span class="select2-selection__rendered" id="select2-vendor-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select Vendor</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        </div>
                        <!-- Category -->
                        <div class="mb-3 col ecommerce-select2-dropdown">
                            <label class="form-label mb-1 d-flex justify-content-between align-items-center" for="category-org">
                                <span>Category</span><a href="javascript:void(0);" class="fw-medium">Add new category</a>
                            </label>
                            <div class="position-relative"><select id="category-org" class="select2 form-select select2-hidden-accessible" data-placeholder="Select Category" data-select2-id="category-org" tabindex="-1" aria-hidden="true">
                                    <option value="" data-select2-id="8">Select Category</option>
                                    <option value="Household">Household</option>
                                    <option value="Management">Management</option>
                                    <option value="Electronics">Electronics</option>
                                    <option value="Office">Office</option>
                                    <option value="Automotive">Automotive</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="7" style="width: 337.062px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-category-org-container"><span class="select2-selection__rendered" id="select2-category-org-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select Category</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        </div>
                        <!-- Collection -->
                        <div class="mb-3 col ecommerce-select2-dropdown">
                            <label class="form-label mb-1" for="collection">Collection
                            </label>
                            <div class="position-relative"><select id="collection" class="select2 form-select select2-hidden-accessible" data-placeholder="Collection" data-select2-id="collection" tabindex="-1" aria-hidden="true">
                                    <option value="" data-select2-id="10">Collection</option>
                                    <option value="men-clothing">Men's Clothing</option>
                                    <option value="women-clothing">Women's-clothing</option>
                                    <option value="kid-clothing">Kid's-clothing</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="9" style="width: 337.062px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-collection-container"><span class="select2-selection__rendered" id="select2-collection-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Collection</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        </div>
                        <!-- Status -->
                        <div class="mb-3 col ecommerce-select2-dropdown">
                            <label class="form-label mb-1" for="status-org">Status
                            </label>
                            <div class="position-relative"><select id="status-org" class="select2 form-select select2-hidden-accessible" data-placeholder="Published" data-select2-id="status-org" tabindex="-1" aria-hidden="true">
                                    <option value="" data-select2-id="12">Published</option>
                                    <option value="Published">Published</option>
                                    <option value="Scheduled">Scheduled</option>
                                    <option value="Inactive">Inactive</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="11" style="width: 337.062px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-status-org-container"><span class="select2-selection__rendered" id="select2-status-org-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Published</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        </div>
                        <!-- Tags -->
                        <div class="mb-3">
                            <label for="ecommerce-product-tags" class="form-label mb-1">Tags</label>
                            <tags class="tagify  form-control" tabindex="-1">
                                <tag title="Normal" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Normal">
                                    <x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x>
                                    <div><span class="tagify__tag-text">Normal</span></div>
                                </tag>
                                <tag title="Standard" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Standard">
                                    <x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x>
                                    <div><span class="tagify__tag-text">Standard</span></div>
                                </tag>
                                <tag title="Premium" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Premium">
                                    <x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x>
                                    <div><span class="tagify__tag-text">Premium</span></div>
                                </tag><span contenteditable="" tabindex="0" data-placeholder="​" aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                                ​
                            </tags><input id="ecommerce-product-tags" class="form-control" name="ecommerce-product-tags" value="Normal,Standard,Premium" aria-label="Product Tags" tabindex="-1">
                        </div>
                    </div>
                </div>
                <!-- /Organize Card -->
            </div>
            <!-- /Second column -->
        </div>
    </div>
</div>
@endsection
