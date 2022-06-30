@extends('layouts.app')
@section('content')



<div class="container-fluid">

<!-- start page title -->
<div class="row">
  <div class="col-12">
      <div class="page-title-box d-flex align-items-center justify-content-between">
          <h4 class="mb-0">Profile</h4>

          <div class="page-title-right">
              <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                  <li class="breadcrumb-item active">Profile</li>
              </ol>
          </div>

      </div>
  </div>
</div>
<!-- end page title -->

<div class="row mb-4">
  <div class="col-xl-4">
    <div class="card h-100">
      <div class="card-body">
        <div class="text-muted">
                  {{-- <h5 class="font-size-16">About</h5>
                  <p>Hi I'm Marcus,has been the industry's standard dummy text To an English person, it will seem like simplified English, as a skeptical Cambridge.</p> --}}
                  <div class="table-responsive mt-4">
                      <div>
                          <p class="mb-1">Name :</p>
                          <h5 class="font-size-16">{{$user?->name}}</h5>
                      </div>

                      <div>
                        <p class="mb-1">Last Name :</p>
                        <h5 class="font-size-16">{{$user?->last_name}}</h5>
                    </div>

                      <div class="mt-4">
                          <p class="mb-1">Mobile :</p>
                          <h5 class="font-size-16">{{$user?->phone}}</h5>
                      </div>
                      <div class="mt-4">
                          <p class="mb-1">E-mail :</p>
                          <h5 class="font-size-16">{{$user?->email}}</h5>
                      </div>
                      <div class="mt-4">
                          <p class="mb-1">Address :</p>
                          <h5 class="font-size-16">{{$user?->address}}</h5>
                      </div>

                  </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-8">
    <div class="card mb-0">
      <div class="tab-content p-4">
        <div class="tab-pane active" id="about" role="tabpanel">
          <div class="row">
                  <div class="col-12">
                      <div class="page-title-box d-flex align-items-center justify-content-between">
                          <h4 class="mb-0">Orders</h4>
                      </div>
                  </div>
        </div>
        <div class="row">
                <table class="table mb-0">
                  <thead class="table-light">
                    <tr>
                      <th style="width: 60px;">#</th>
                      <th>Invoice</th>
                      <th>User</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Requested Date/Time</th>
                      <th style="width: 130px;">Actions</th>
                    </tr>
                  </thead>
                  <?php 
                    $num = 1;
                  ?>
                  <tbody class="bg-white divide-y divide-gray-200">
                    @if($orders->count() > 0)
                      @foreach($orders as $order)
                        <tr>
                            <td  style="width: 60px;">{{$num++}}</td>
                            <td class="px-6 py-2 text-sm whitespace-no-wrap"> <a href="{{ Route('admin.orders.single-order', $order->id) }}">as56asd51s</a> </td>
                            <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$order->name}} {{$order->last_name}} </td>
                            <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$order->user->email}} </td>
                            <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$order->status}} </td>
                            <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$order->updated_at}} </td>
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
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end row -->
</div>

  {{-- <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Orders</h4>
            </div>
        </div>
    </div>
    <div class="row">
      <table class="table mb-0">
        <thead class="table-light">
          <tr>
            <th style="width: 60px;">#</th>
            <th>Invoice</th>
            <th>User</th>
            <th>Email</th>
            <th>Status</th>
            <th>Requested Date/Time</th>
            <th style="width: 130px;">Actions</th>
          </tr>
        </thead>
        <?php 
          $num = 1;
        ?>
        <tbody class="bg-white divide-y divide-gray-200">
          @if($orders->count() > 0)
            @foreach($orders as $order)
              <tr>
                  <td  style="width: 60px;">{{$num++}}</td>
                  <td class="px-6 py-2 text-sm whitespace-no-wrap"> <a href="{{ Route('admin.orders.single-order', $order->id) }}">as56asd51s</a> </td>
                  <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$order->name}} {{$order->last_name}} </td>
                  <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$order->user->email}} </td>
                  <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$order->status}} </td>
                  <td class="px-6 py-2 text-sm whitespace-no-wrap"> {{$order->updated_at}} </td>
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
  </div>  --}}
@endsection

