<!DOCTYPE html>
<html>

<head>
    @include('home.css')

    <style>
        .div_design {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        table {
            border: 2px solid black;
            text-align: center;
            width: 900px;
            height: 300px;
        }

        th {
            border: 2px solid black;
            text-align: center;
            color: white;
            font: 20px;
            font-weight: bold;
            background-color: black;
        }

        td {
            border: 1px solid skyblue;
        }

        .cart_value {
            text-align: center;
            margin-bottom: 70px;
            padding: 18px;
        }

        .order {
            padding-right: 150px;
            margin-top: -200px;
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .form-group label {
            width: 150px;
            margin-right: 10px;
        }

        .form-group input {
            flex: 1;
        }
    </style>
</head>

<body>
    <div class="hero_area">

        <!-- header section starts -->
        @include('home.header')
        <!-- end header section -->
    </div>

    <div class="div_design">

        <div class="order">
            <form action="{{url('confirm_order')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Receiver Name:</label>
                    <input type="text" name="name" value="{{Auth::user()->name}}">
                    <!-- <label>{{Auth::user()->name}}</label> -->
                </div>
                <div class="form-group">
                    <label for="">Table Number</label>
                    <input type="text" name="table">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Confirm">
                </div>
            </form>
        </div>

        <table>
            <tr>
                <th>Product Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Delete</th>
            </tr>

            @php
            $value = 0;
            @endphp

            @foreach ($cart as $cartItem)
            <tr>
                <td>{{ $cartItem->product->title }}</td>
                <td>{{ $cartItem->product->price }}</td>
                <td>
                    <img width="100" src="/products/{{ $cartItem->product->image }}">
                </td>
                <td>
                    <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_cart',$cartItem->id)}}">Delete</a>
                </td>
            </tr>

            @php
            $value += (int) $cartItem->product->price;
            @endphp
            @endforeach

        </table>
    </div>

    <div class="cart_value">
        <h3>Total: Rp. {{ $value }}</h3>
    </div>

    <!-- info section -->
    @include('home.footer')
    <!-- end info section -->

</body>

</html>
