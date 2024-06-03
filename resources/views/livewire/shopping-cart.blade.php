<div class="single-cart">
    <div class="container">
        <div class="wrapper">
            <div class="breadcrumb">
                <ul class="flexitem">
                    <li><a href="">Home</a></li>
                    <li><a href="">Cart</a></li>
                    <!-- <li>Men Slip on shoes casual with arch support Insoles</li> -->
                </ul>
            </div>
            <div class="page-title">
                <h1>Shopping Cart</h1>
            </div>
            <?php 
            $carts = \App\Models\Cart::where('user_id', Auth::id())->get();
            ?>
            <div class="products one cart">
                <div class="flexwrap">
                    @if($carts->count() > 0)
                    <form action="" class="form-cart">
                        <div class="item"></div>
                        @if(Session::has('success'))
                        <p style="color: red" class="text-center">{{ Session::get('success')}}</p>
                        @endif
                        @if(Session::has('error'))
                        <p style="color: red" class="text-center">{{ Session::get('error')}}</p>
                        @endif
                        <table id="cart-table">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $carts = \App\Models\Cart::where('user_id', Auth::id())->get();
                                $totalPrice = 0;

                                foreach ($carts as $cart) {
                                    $totalPrice += $cart->price;
                                }
                                ?>

                                @if($carts->count() > 0)
                                @foreach($carts as $cart)

                                <?php 
                                $product = \App\Models\Product::find($cart->product_id);
                                $unitPrice = $product->current_price;
                                ?>

                                <tr>
                                    <td class="flexitem">
                                        <div class="thumbnail object-cover">
                                            <a><img src="{{ url('upload/images', $cart->image) }}" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <strong><a>{{ $cart->title}}</a></strong>
                                            <p></p>
                                        </div>
                                    </td>
                                    <td>${{ $unitPrice }}</td>
                                    <td>
                                        <div class="qty-control flexitem">
                                            <button class="minus" wire:click.prevent="decrementQuantity('{{ $cart->id }}')">-</button>
                                            <input type="text" value="{{ $cart->quantity }}" min="1" id="quantity_{{ $cart->id }}" name="quantity">
                                            <button class="plus" wire:click.prevent="incrementQuantity('{{ $cart->id }}')">+</button>
                                        </div>

                                    </td>
                                    <td>${{ $cart->price }}</td>
                                    <td><a style="cursor: pointer;" class="item-remove"><i class="ri-close-line" wire:click.prevent="destroy('{{ $cart->id }}')"></i></a></td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td style="color: red; text-align: center;" colspan="4">
                                        <p class="mb-0 fw-normal">No Data Fount!</p>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </form>
                    
                    <div class="cart-summary styled">
                        <div class="item">
                            <div class="cart-total">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Subtotal</th>
                                            <td>${{ number_format($totalPrice, 2) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping <span class="mini-text">(Flat)</span></th>
                                            <td>$10.00</td>
                                        </tr>
                                        <tr class="grand-total">
                                            <th>Total</th>
                                            <td><strong>$2065.00</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="/checkout" class="primary-button">Checkout</a>
                            </div>
                        </div>
                    </div>
                    @else
                    <div style="align-items: center;">
                        <p style="font-size: 50px;text-align: center;color:red;margin-bottom: 30px;">No Items in Cart!</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>