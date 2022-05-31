@extends('layouts.app')
@section('content')
            <!-- Begin page -->
            <div class="container-fluid">

              <!-- start page title -->
              <div class="row">
                  <div class="col-12">
                      <div class="page-title-box d-flex align-items-center justify-content-between">
                          <h4 class="mb-0">Orders</h4>
                      </div>
                  </div>
              </div>
              <!-- end page title -->

              {{-- main content beginning --}}
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
                      {{-- @foreach($products as $product) --}}
                      @for($i = 0; $i < 10; $i++)
                        <tr>
                            <td  style="width: 60px;">{{$num++}}</td>
                            <td class="px-6 py-2 text-sm whitespace-no-wrap"> <a href="">as56asd51s</a> </td>
                            <td class="px-6 py-2 text-sm whitespace-no-wrap"> John </td>
                            <td class="px-6 py-2 text-sm whitespace-no-wrap"> john.example@gmail.com </td>
                            <td class="px-6 py-2 text-sm whitespace-no-wrap"> pending </td>
                            <td class="px-6 py-2 text-sm whitespace-no-wrap"> 12:41 13.05.2022 </td>
                            <td class="px-6 py-2 text-sm" style="width: 130px;">
                              <button wire:click="deleteShowModal()" type="button" class="btn btn-success waves-effect waves-light"><i class="uil-check"></i></button>
                              <button wire:click="deleteShowModal()" type="button" class="btn btn-danger waves-effect waves-light"><i class="uil-trash"></i></button>
                            </td>
                        </tr>
                      @endfor
                      {{-- @endforeach --}}
                  </tbody>
              </table>
              </div>
              {{-- main content end --}}



          </div> <!-- container-fluid -->
@endsection

