<x-header/>
    <!-- Latest Blog Section End -->
    <section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <ul class="filter__controls">
                </ul>
                </div>
            </div>
            <div class="row product__filter">
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix {{$products->type}}">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{$products->picture}}">
                            <span class="label">New</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="{{asset('img/icon/heart.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('img/icon/compare.png')}}" alt=""> <span>Compare</span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>{{$products->title}}</h6>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>${{$products->price}}</h5>
                            <div class="product__color__select">
                                <label for="pc-1">
                                    <input type="radio" id="pc-1">
                                </label>
                                <label class="active black" for="pc-2">
                                    <input type="radio" id="pc-2">
                                </label>
                                <label class="grey" for="pc-3">
                                    <input type="radio" id="pc-3">
                                </label>
                            </div>
                        </div>
                        <form action="{{route('products.store',$products->id)}}" method="post">
                        @csrf
<div class="card" width="30">
<div class="quantity">
<input type="number"  min="1" max="{{$products->quantity}}" class="form-control" name="quantity" id="" value="1">

</div>
<input type="hidden"  name="Pid" value="{{$products->id}}">
<button type="submit" name="" id=""  class="btn btn-success btn-lg btn-block">+ Add to cart</button>

</div>
</form>



                    </div>
                </div>

    </div>
</section>

    <x-footer />



















