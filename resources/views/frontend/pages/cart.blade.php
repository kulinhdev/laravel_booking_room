@extends('frontend.layouts.master')

@section('content')

<main>
    <!-- Breadcrumb section -->
    <section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
        style="background-image: url({{ asset('assets/frontend') }}/img/bg/breadcrumb-01.jpg);">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h1>Cart</h1>
                <ul class="list-inline">
                    <li><a href="index-2.html">Home</a></li>
                    <li><i class="far fa-angle-double-right"></i></li>
                    <li>Cart</li>
                </ul>
            </div>
        </div>
        <h1 class="big-text">
            Cart
        </h1>
    </section>
    <!-- Breadcrumb section End-->
    <section class="rooms-warp list-view section-bg">
        <div class="container">
            <div class="cart-page">
                <div class="margin_60">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                {{-- Show Alert --}}
                                @if (Session::has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success !</strong> {{ Session('success') }}.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                                @if (count($cart->content()) > 0)
                                <div class="table-cart">
                                    <table class="table table-borderless mb-0">
                                        <thead>
                                            <tr class="text-center">
                                                <th width="15%">Image</th>
                                                <th width="20%">Name</th>
                                                <th width="10%">Information</th>
                                                <th width="10%">Adult</th>
                                                <th width="10%">Children</th>
                                                <th width="15%">Room</th>
                                                <th width="10%">Total</th>
                                                <th width="10%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cart->content() as $key => $item)
                                            <form action="{{ route('cart.update', $key) }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <input type="hidden" name="key-delete" id="key-{{ $loop->iteration }}"
                                                    value="{{ $key }}">
                                                <tr class="text-center">
                                                    <td>
                                                        <div class="room-img d-flex align-items-center">
                                                            <img class="img-fluid"
                                                                src="{{ asset('uploads/rooms/room_avatar') . '/' . $item['image'] }}"
                                                                alt="Image">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="room-title"><strong>
                                                                <a
                                                                    href="{{ route('user.room', $item['room']->slug) }}">{{ $item['name'] }}</a>
                                                            </strong>
                                                        </div>
                                                        <div class="room-title"><strong>Category:
                                                            </strong>{{ $item['room']->category->name }}</div>
                                                    </td>
                                                    <td>
                                                        <div class="room-bed"><strong>Bed :
                                                            </strong>{{ $item['room']->bed }}
                                                        </div>
                                                        <div class="room-bath">
                                                            <strong>Bath: </strong>{{ $item['room']->bath }}
                                                        </div>
                                                        <div class="room-size"><strong>Area: </strong>
                                                            {{ $item['room']->area }}m<sup>2</sup>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <select name="adult" class="option-number" id="adult">
                                                            @foreach (range(0,15) as $number)
                                                            <option {{ $item['adult'] == $number ? 'selected': '' }} }}
                                                                value="{{ $number }}">{{ $number }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="child" class="option-number" id="child">
                                                            @foreach (range(0,15) as $number)
                                                            <option {{ $item['child'] == $number ? 'selected': '' }} }}
                                                                value="{{ $number }}">{{ $number }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <div class="input-group bootstrap-touchspin">
                                                            <span
                                                                class="input-group-btn input-group-prepend bootstrap-touchspin-injected">
                                                                <button id="{{ $loop->iteration }}"
                                                                    class="btn btn-primary bootstrap-touchspin-down count-down"
                                                                    type="button"> -
                                                                </button>
                                                            </span>
                                                            <input type="text" id="count-{{ $loop->iteration }}"
                                                                class="text-center count touchspin form-control"
                                                                value="{{ $item['quantity'] }}" name="quantity">
                                                            <span
                                                                class="input-group-btn input-group-append bootstrap-touchspin-injected">
                                                                <button id="{{ $loop->iteration }}"
                                                                    class="btn btn-primary bootstrap-touchspin-up count-up"
                                                                    type="button"> + </button>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="total-price">
                                                            ${{ $item['quantity'] * $item['price'] }}</div>
                                                    </td>
                                                    <td>
                                                        <div class="room-action">
                                                            <button type="submit" class="text-dark action-cart"><i
                                                                    class="far fa-save"></i></button>
                                                            <a href="{{ route('cart.remove', $key) }}"
                                                                onclick="return confirm('Are you sure to take this action?')"
                                                                class="text-dark action-cart">
                                                                <i class="fas fa-times"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </form>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @else
                                <div class="cart-empty text-center">
                                    <h3>Your cart is empty !</h3>
                                    <a href="{{ route('user.category') }}" class="btn btn-primary p-2 my-3"><i
                                            class="fas fa-arrow-left"></i> Booking now
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="match-height row mb-5">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Apply Coupon</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <label class="text-muted">Enter your coupon code if you have one!</label>
                                    <form action="#">
                                        <div class="form-body">
                                            <input type="text" class="form-control-lg"
                                                placeholder="Enter Coupon Code Here">
                                        </div>
                                        <div class="form-actions border-0 pb-0 text-right">
                                            <button type="button" class="btn btn-info">Apply Code</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Price Details</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="price-detail"><strong>Room :</strong>
                                        <span class="float-right"><strong>Total:</strong></span>
                                    </div>
                                    @foreach ($cart->content() as $key => $item)
                                    <div class="price-detail">{{ $item['name'] }} ({{ $item['quantity'] }}
                                        rooms) <span
                                            class="float-right">${{ $item['quantity'] * $item['price'] }}</span>
                                    </div>
                                    @endforeach
                                    <div class="price-detail">Coupon: <span class="float-right"> - $300</span>
                                    </div>
                                    <hr>
                                    <div class="price-detail">Payable Amount <span
                                            class="float-right">${{ $cart->getTotalAmount() }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-5">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="text-right">
                                        <a href="{{ route('user.category') }}" class="btn btn-info p-2 mr-3"><i
                                                class="fas fa-arrow-left"></i> Book
                                            Room</a>
                                        <a href="{{ route('checkout.show') }}" class="btn btn-primary p-2">
                                            Place Order
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Container -->
                <!-- Chat popup -->
                {{-- <div class="chat-popup">
                    <div class="page-content page-container" id="page-content">

                        <div class="box box-warning direct-chat direct-chat-warning">
                            <div class="box-header with-border">
                                <h3 class="box-title">Chat Messages</h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool remove-popup" data-close="remove">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="direct-chat-messages">
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name pull-left">Alexander</span> <span
                                                class="direct-chat-timestamp pull-right">23 Jan
                                                2:00
                                                pm</span>
                                        </div> <img class="direct-chat-img"
                                            src="https://img.icons8.com/color/36/000000/administrator-male.png"
                                            alt="message user image">
                                        <div class="direct-chat-text"> For what reason would it be advisable for me
                                            to think
                                            about business content? </div>
                                    </div>
                                    <div class="direct-chat-msg right">
                                        <div class="direct-chat-info clearfix"> <span
                                                class="direct-chat-name pull-right">Sarah
                                                Bullock</span>
                                            <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                                        </div> <img class="direct-chat-img"
                                            src="https://img.icons8.com/office/36/000000/person-female.png"
                                            alt="message user image">
                                        <div class="direct-chat-text"> Thank you for your believe in our supports
                                        </div>
                                    </div>
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-info clearfix"> <span
                                                class="direct-chat-name pull-left">Timona
                                                Siera</span> <span class="direct-chat-timestamp pull-right">23 Jan
                                                5:37
                                                pm</span> </div> <img class="direct-chat-img"
                                            src="https://img.icons8.com/color/36/000000/administrator-male.png"
                                            alt="message user image">
                                        <div class="direct-chat-text"> For what reason would it be advisable for me
                                            to think
                                            about business content? </div>
                                    </div>
                                    <div class="direct-chat-msg right">
                                        <div class="direct-chat-info clearfix"> <span
                                                class="direct-chat-name pull-right">Sarah
                                                Bullock</span> <span class="direct-chat-timestamp pull-left">23 Jan
                                                6:10
                                                pm</span> </div> <img class="direct-chat-img"
                                            src="https://img.icons8.com/office/36/000000/person-female.png"
                                            alt="message user image">
                                        <div class="direct-chat-text"> I would love to. </div>
                                    </div>

                                    <div class="direct-chat-msg right">
                                        <div class="direct-chat-info clearfix"> <span
                                                class="direct-chat-name pull-right">Sarah
                                                Bullock</span> <span class="direct-chat-timestamp pull-left">23 Jan
                                                6:10
                                                pm</span> </div> <img class="direct-chat-img"
                                            src="https://img.icons8.com/office/36/000000/person-female.png"
                                            alt="message user image">
                                        <div class="direct-chat-text"> Thanks a lot. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer my-2">
                                <form action="#" method="post">
                                    <div class="input-group">
                                        <input type="text" name="message" placeholder="Type Message ..."
                                            class="form-control">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn filled-btn px-2 py-1 ml-3">Send</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
</main>
@endsection