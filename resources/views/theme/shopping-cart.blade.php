<x-header />

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="{{url('home')}}">Home</a>
                            <a href="{{url('Shop')}}">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
$total = 0;
$prices=1;
                                @endphp
                                @foreach($itemcarts as $item)
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src="{{$item->picture}}" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>{{$item->title}}</h6>
                                            <h5>{{$item->price}}</h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                    <div class="quantity">
                                        <form action="{{ route('carts.update', $item->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="pro-qty-2">
                                                <input type="number" name="quantity" value="{{ $item->quantity }}" min="1">
                                            </div>
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </form>
                                    </div>
                                </td>
                                    <td class="cart__price">$ {{$item->quantity * $item->price}}</td>
                                    <form action="{{route('carts.destroy', $item->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
 <td class="cart__close"><button type="submit"><i class="fa fa-close"></i> </button></td>

                                </form>
                                </tr>
                                @php
    $total += ($item->quantity * $item->price);
    $prices =$item->price;
                                @endphp
@endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="#">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">


                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__discount">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Apply</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span>{{$total}}</span></li>
                            <li>Total <span>{{$total}}</span></li>
                        </ul>
                        <form action="{{route('carts.store')}}" method="post">
                        @csrf
           <div class="mb-2">
  <input type="text" class="form-control"  name="name"id="exampleFormControlInput1" placeholder="Enter your name">
  <input type="phone" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="Enter your phone number">
  <input type="hidden" class="form-control" name="total" id="exampleFormControlInput1" value="{{$total}}">
  <input type="hidden" class="form-control" name="price" id="exampleFormControlInput1" value="{{$prices}}">
  <input type="text" class="form-control"name="address" id="exampleFormControlInput1" placeholder="Enter your address">

 <button type="submit" class="primary-btn mt-2 btn-block">Proceed to checkout</button>

           </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
    <x-footer />
