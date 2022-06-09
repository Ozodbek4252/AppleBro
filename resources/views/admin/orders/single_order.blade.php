@extends('layouts.app')
@section('content')
            <!-- Begin page -->
            <div class="container-fluid">

              <!-- start page title -->
              <div class="row">
                  <div class="col-12">
                      <div class="page-title-box d-flex align-items-center justify-content-between">
                          <h4 class="mb-0">Order</h4>
                      </div>
                      <p></p>
                  </div>
              </div>
              <!-- end page title -->

              {{-- main content beginning --}}
              <div class="row">
                <table class="table mb-0">
                  <thead class="table-light">
                      <tr>
                          <th style="width: 60px;">#</th>
                          <th>Img</th>
                          <th>Product Name</th>
                          <th>Price</th>
                          <th>Details</th>
                          <th>Quantity</th>
                          <th style="width: 130px;">Actions</th>
                      </tr>
                  </thead>
                  <?php 
                    $num = 1;
                  ?>
                  <tbody class="bg-white divide-y divide-gray-200">
                    @if($order->count() > 0)
                      @foreach($order->order_products as $each_order)
                        <tr>
                            <td  style="width: 60px;">{{$num++}}</td>
                            <td class="px-6 py-2 text-sm whitespace-no-wrap"> <img src="/{{$each_order->order_product->main_photo_path}}/{{$each_order->order_product->main_photo}}" alt="img" style="width: 150px; height: 150px; object-fit: contain; object-position: center;"> </td>
                            <td class="px-6 py-2 text-sm whitespace-no-wrap"> <a href="{{route('admin.single-product', $each_order->order_product->id)}}">{{$each_order->order_product->name}}</a> </td>
                            <td class="px-6 py-2 text-sm whitespace-no-wrap"> ${{$each_order->price}} USD </td>
                            <td class="px-6 py-2 text-sm whitespace-no-wrap"> 
                              @foreach($each_order->order_options as $each_option)
                                {{$each_option->option}}: {{$each_option->value}}<br>
                              @endforeach
                            </td>
                            <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$each_order->quantity}} </td>

                            <td class="px-6 py-2 text-sm" style="width: 130px;">
                              <button wire:click="deleteShowModal()" type="button" class="btn btn-success waves-effect waves-light"><i class="uil-check"></i></button>
                              <button wire:click="deleteShowModal()" type="button" class="btn btn-danger waves-effect waves-light"><i class="uil-trash"></i></button>
                            </td>
                        </tr>
                      @endforeach
                      @else
                        <tr>
                          <td colspan="7" class="text-center">No orders found</td>
                        </tr>
                      @endif
                  </tbody>
              </table>
              </div>
              {{-- main content end --}}



          </div> <!-- container-fluid -->
@endsection

