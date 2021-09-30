@extends('layouts.master')

@section('content')



<section class="section-sm">
	<div class="container">

        @if ($cart->count() > 0)


        <div class="p-4 bg-white">
            <table class="table bg-white p-5 table-bordered ">

                <tbody>

                    <style>

                        .action-button{

                            vertical-align: middle !important;

                        }

                        .item-price{
                            vertical-align: middle !important;
                        }

                        .btn-xs{
                            padding: 8px;
                            font-size: 14px;
                        }

                        .book-details{
                            text-align: left;
                        }

                        .book-details h1{
                            font-weight: 100;
                            font-size: 20px
                        }

                        .book-details p > strong{
                            color: rgb(86 114 249);
                            font-weight: 100;
                        }

                    </style>

                    @php
                        $total = 0;
                    @endphp



                    @foreach ($cart as $item)
                    @php
                        $total += App\Models\Book::find($item->book_id)->price * $item->quantity;
                    @endphp
                    <tr>
                        <td style="width: 100px" class="d-none d-md-table-cell">
                            <img src="{{App\Models\Book::find($item->book_id)->cover_image}}" alt="" width="100px" class="float-left">
                        </td>
                        <td class="book-details">
                            <img src="{{App\Models\Book::find($item->book_id)->cover_image}}" alt="" width="100px" class="float-left mb-2 d-block d-md-none">
                            <h1>{{App\Models\Book::find($item->book_id)->title}}</h1>
                            <p>By <strong>মুহম্মদ জাফর ইকবাল</strong></p>
                            <p>Category : <i>উপন্যাস</i></p>
                        </td>
                        <td class="item-price">৳ {{App\Models\Book::find($item->book_id)->price}} x {{$item->quantity}}</td>
                        <td class="action-button">
                            <a class="btn btn-danger btn-xs text-white" href="{{route('cart_remove', ['id'=> $item->id ])}}" role="button">
                                <i class="fas fa-trash    "></i> Remove
                            </a>
                        </td>
                    </tr>
                    @endforeach






                        <tr style="background: #f5f5f5;">
                            <td style="width: 100px; vertical-align: middle !important;" class="d-none d-md-table-cell">
                                <i>Total</i>
                            </td>
                            <td class="book-details">
                                <i class="d-block d-md-none">Total</i>
                            </td>
                            <td class="item-price">৳ {{ $total }}</td>






                            <td class="action-button">

                               <a class="btn btn-success btn-xs text-white" href="{{route('checkout')}}" role="button">
                                    <i class="fas fa-shopping-bag    "></i> Checkout
                               </a>

                            </td>
                        </tr>

                </tbody>
            </table>
        </div>

        @endif


    </div>
</section>

@endsection

@push('style')

<style>
    .img-fluid{
        border-radius: 10px;
    }
</style>

@endpush
