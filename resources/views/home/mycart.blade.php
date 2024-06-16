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
            width: 800px;
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
    </style>
</head>

<body>
    <div class="hero_area">

        <!-- header section starts -->
        @include('home.header')
        <!-- end header section -->
    </div>

    <div class="div_design">
        <table>
            <tr>
                <th>Product Title</th>
                <th>Price</th>
                <th>Image</th>
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
