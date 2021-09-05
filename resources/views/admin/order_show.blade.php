@php
    $page_type = 'Admin';
@endphp
@extends('admin.layouts.master')

@section('content')



<div class="main-content">
 
  <form action="{{ route('admin.order.update', $order->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <div class="row">
          <div class="col-3">
            <select name="status" id="" class="form-control">
              <option {{ $order->status == 0 ? 'selected' : '' }} value="0">Pending</option>
              <option {{ $order->status == 2 ? 'selected' : '' }} value="2">Confirmed</option>
              <option {{ $order->status == 3 ? 'selected' : '' }} value="3">Canceled</option>
              <option {{ $order->status == 1 ? 'selected' : '' }} value="1">Delivered</option>
            </select>
          </div>
          <div class="col-2">
            <button type="submit" class="btn btn-info mt-1">change status</button>
          </div>
        </div>
      </div>
  </form>
 
    <div class="section">
        {{-- main card --}}
        <div class="invoice">
            <div class="invoice-print">
              <div class="row">
                <div class="col-lg-12">
                  <div class="invoice-title">
                    <h2>Invoice</h2>
                    <div class="invoice-number">Order #{{ $order->invoice }}</div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-6">
                      <address>
                        <strong>Billed To:</strong><br>
                        Name: <br>
                        {{ $order->user->name }}
                        <br>
                        Address: <br>
                        {{ $order->user->address->division_id }},<br>
                        {{ $order->user->address->district_id }},<br>
                        {{ $order->user->address->city_id }},<br>
                        {{ $order->user->address->address }}
                      </address>
                    </div>
                    <div class="col-md-6 text-end">
                      <address>
                        <strong>Shop:</strong><br>
                        {{ $order->library->name }}<br>
                        {{ $order->library->division_id }},<br>
                        {{ $order->library->district_id }},<br>
                        {{ $order->library->city_id }},<br>
                        {{ $order->library->address }}
                      </address>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <address>
                        <strong>Payment Method:</strong><br>
                        COD<br>
                        Phone: {{ $order->user->phone }}
                      </address>
                    </div>
                    <div class="col-md-6 text-end">
                      <address>
                        <strong>Order Date:</strong><br>
                        {{ $order->created_at->format('d-m-Y') }}<br>
                        {{ $order->created_at->format('g:i A') }}
                        <br><br>
                      </address>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-md-12">
                  <div class="section-title">Order Summary</div>
                  <p class="section-lead">All items here cannot be deleted.</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-hover table-md">
                      <tbody>
                      <tr>
                        <th data-width="40" style="width: 40px;">#</th>
                        <th>Item</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-end">Totals</th>
                      </tr>

                      @foreach ($order->orderItems as $item)
                      <tr>
                        <td>1</td>
                        <td>{{ $item->book->title }}</td>
                        <td class="text-center">{{ $item->book->price }}</td>
                        <td class="text-center">{{ $item->quantity }}</td>
                        <td class="text-end">{{ $item->sum_price }}</td>
                      </tr> 
                      @endforeach
                      
                      
                    </tbody></table>
                  </div>
                  <div class="row mt-4">
                    <div class="col-lg-8">
                      <div class="section-title">Payment Method</div>
                      <p class="section-lead">The payment method that we provide is to make it easier for you to pay
                        invoices.</p>
                      <div class="images">
                        <img src="assets/img/cards/visa.png" alt="visa">
                        <img src="assets/img/cards/jcb.png" alt="jcb">
                        <img src="assets/img/cards/mastercard.png" alt="mastercard">
                        <img src="assets/img/cards/paypal.png" alt="paypal">
                      </div>
                    </div>
                    <div class="col-lg-4 text-end">
                      <div class="invoice-detail-item">
                        <div class="invoice-detail-name">Subtotal</div>
                        <div class="invoice-detail-value">{{ $subTotal }}</div>
                      </div>
                      <div class="invoice-detail-item">
                        <div class="invoice-detail-name">Shipping</div>
                        <div class="invoice-detail-value">$0</div>
                      </div>
                      <hr class="mt-2 mb-2">
                      <div class="invoice-detail-item">
                        <div class="invoice-detail-name">Total</div>
                        <div class="invoice-detail-value invoice-detail-value-lg">{{ $subTotal }}</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="text-end">
              {{-- <button class="btnprn btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Print</button> --}}
            </div>
          </div>    
    </div>
</div>

@endsection

