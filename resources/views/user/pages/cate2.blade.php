 @extends('user.master')
 @section('description','Day la trang chu')
@section('content')
 <!--  Best Seller -->  
  <div class="sidewidt">
    <h2 class="heading2"><span>Best Seller</span></h2>
    <ul class="bestseller">
      <li>
        <img width="50" height="50" src="{!! url('user/img/prodcut-40x40.jpg')!!}" alt="product" title="product">
        <a class="productname" href="product.html"> Product Name</a>
        <span class="procategory">Women Accessories</span>
        <span class="price">$250</span>
      </li>
      <li>
        <img width="50" height="50" src="{!! url('user/img/prodcut-40x40.jpg')!!}" alt="product" title="product">
        <a class="productname" href="product.html"> Product Name</a>
        <span class="procategory">Electronics</span>
        <span class="price">$250</span>
      </li>
      <li>
        <img width="50" height="50" src="{!! url('user/img/prodcut-40x40.jpg')!!}" alt="product" title="product">
        <a class="productname" href="product.html"> Product Name</a>
        <span class="procategory">Electronics</span>
        <span class="price">$250</span>
      </li>
    </ul>
  </div>
  <!-- Latest Product -->  
  <div class="sidewidt">
    <h2 class="heading2"><span>Latest Products</span></h2>
    <ul class="bestseller">
      <li>
        <img width="50" height="50" src="{!! url('user/img/prodcut-40x40.jpg')!!}" alt="product" title="product">
        <a class="productname" href="product.html"> Product Name</a>
        <span class="procategory">Women Accessories</span>
        <span class="price">$250</span>
      </li>
      <li>
        <img width="50" height="50" src="{!! url('user/img/prodcut-40x40.jpg')!!}" alt="product" title="product">
        <a class="productname" href="product.html"> Product Name</a>
        <span class="procategory">Electronics</span>
        <span class="price">$250</span>
      </li>
      <li>
        <img width="50" height="50" src="{!! url('user/img/prodcut-40x40.jpg')!!}" alt="product" title="product">
        <a class="productname" href="product.html"> Product Name</a>
        <span class="procategory">Electronics</span>
        <span class="price">$250</span>
      </li>
    </ul>
  </div>
  <!--  Must have -->  
  <div class="sidewidt">
  <h2 class="heading2"><span>Must have</span></h2>
  <div class="flexslider" id="mainslider">
    <ul class="slides">
      <li>
        <img src="{!! url('user/img/product1.jpg')!!}" alt="" />
      </li>
      <li>
        <img src="{!! url('user/img/product2.jpg')!!}" alt="" />
      </li>
    </ul>
  </div>
  </div>
</aside>
<!-- Sidebar End-->
<!-- Category-->
<div class="span9">          
  <!-- Category Products-->
  <section id="category">
    <div class="row">
      <div class="span9">
       <!-- Category-->
        <section id="categorygrid">
          <ul class="thumbnails grid">
            <li class="span3">
              <a class="prdocutname" href="product.html">Product Name Here</a>
              <div class="thumbnail">
                <span class="sale tooltip-test">Sale</span>
                <a href="#"><img alt="" src="{!! url('user/img/product1.jpg')!!}"></a>
                <div class="pricetag">
                  <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                  <div class="price">
                    <div class="pricenew">$4459.00</div>
                    <div class="priceold">$5000.00</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="span3">
              <a class="prdocutname" href="product.html">Product Name Here</a>
              <div class="thumbnail">
                <span class="sale tooltip-test">Sale</span>
                <a href="#"><img alt="" src="{!! url('user/img/product1.jpg')!!}"></a>
                <div class="pricetag">
                  <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                  <div class="price">
                    <div class="pricenew">$4459.00</div>
                    <div class="priceold">$5000.00</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="span3">
              <a class="prdocutname" href="product.html">Product Name Here</a>
              <div class="thumbnail">
                <span class="sale tooltip-test">Sale</span>
                <a href="#"><img alt="" src="{!! url('user/img/product1.jpg')!!}"></a>
                <div class="pricetag">
                  <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                  <div class="price">
                    <div class="pricenew">$4459.00</div>
                    <div class="priceold">$5000.00</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="span3">
              <a class="prdocutname" href="product.html">Product Name Here</a>
              <div class="thumbnail">
                <span class="sale tooltip-test">Sale</span>
                <a href="#"><img alt="" src="{!! url('user/img/product1.jpg')!!}"></a>
                <div class="pricetag">
                  <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                  <div class="price">
                    <div class="pricenew">$4459.00</div>
                    <div class="priceold">$5000.00</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="span3">
              <a class="prdocutname" href="product.html">Product Name Here</a>
              <div class="thumbnail">
                <span class="offer tooltip-test" >Offer</span>
                <a href="#"><img alt="" src="{!! url('user/img/product1.jpg')!!}"></a>
                <div class="pricetag">
                  <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                  <div class="price">
                    <div class="pricenew">$4459.00</div>
                    <div class="priceold">$5000.00</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="span3">
              <a class="prdocutname" href="product.html">Product Name Here</a>
              <div class="thumbnail">
                <a href="#"><img alt="" src="{!! url('user/img/product2.jpg')!!}"></a>
                <div class="pricetag">
                  <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                  <div class="price">
                    <div class="pricenew">$4459.00</div>
                    <div class="priceold">$5000.00</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="span3">
              <a class="prdocutname" href="product.html">Product Name Here</a>
              <div class="thumbnail">
                <span class="sale tooltip-test">Sale</span>
                <a href="#"><img alt="" src="{!! url('user/img/product1.jpg')!!}"></a>
                <div class="pricetag">
                  <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                  <div class="price">
                    <div class="pricenew">$4459.00</div>
                    <div class="priceold">$5000.00</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="span3">
              <a class="prdocutname" href="product.html">Product Name Here</a>
              <div class="thumbnail">
                <span class="offer tooltip-test" >Offer</span>
                <a href="#"><img alt="" src="{!! url('user/img/product1.jpg')!!}"></a>
                <div class="pricetag">
                  <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                  <div class="price">
                    <div class="pricenew">$4459.00</div>
                    <div class="priceold">$5000.00</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="span3">
              <a class="prdocutname" href="product.html">Product Name Here</a>
              <div class="thumbnail">
                <a href="#"><img alt="" src="{!! url('user/img/product2.jpg')!!}"></a>
                <div class="pricetag">
                  <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                  <div class="price">
                    <div class="pricenew">$4459.00</div>
                    <div class="priceold">$5000.00</div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <div class="pagination pull-right">
            <ul>
              <li><a href="#">Prev</a>
              </li>
              <li class="active">
                <a href="#">1</a>
              </li>
              <li><a href="#">2</a>
              </li>
              <li><a href="#">3</a>
              </li>
              <li><a href="#">4</a>
              </li>
              <li><a href="#">Next</a>
              </li>
            </ul>
          </div>
        </section>
      </div>
    </div>
  </section>
</div>
@endsection