
<div class="row">
  <div class="col-lg">
      <div class="card">
        <div class="card-body">
          <div class="button-items mb-3">
            <form action="{{ route('admin.products.create') }}" method="get">
              <button type="submit" class="btn btn-success waves-effect waves-light">Add Product</button>
            </form>
          </div>
          
          <p class="card-title-desc mb-2">Select one of these categories to see list:</p>
          <div class="button-items mb-2" id="tooltip-container">
            @foreach($categories as $category)
              <button type="button" class="btn btn-primary" data-bs-placement="top">
                  {{$category->name}}
              </button>
            @endforeach
          </div>


            <h4 class="card-title">Samsung</h4>

              <div class="table-responsive">
                  <table class="table mb-0">
                      <thead class="table-light">
                          <tr>
                              <th  style="width: 60px;">#</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th style="width: 130px;">Actions</th>
                          </tr>
                      </thead>
                      <?php 
                        $num = 1;
                      ?>
                      <tbody class="bg-white divide-y divide-gray-200">
                        @if($products->count())
                        @foreach($products as $product)
                                <tr>
                                  <td  style="width: 60px;">{{$num++}}</td>
                                  <td class="px-6 py-2 text-sm whitespace-no-wrap">{{ $product->name }}</td>
                                  <td class="px-6 py-2 text-sm whitespace-no-wrap">{{ $product->price }}</td>
                                  <td class="px-6 py-2 text-sm" style="width: 130px;">
                                    <button wire:click="updateShowModal({{ $product->id }})" type="button" class="btn btn-warning waves-effect waves-light"><i class="uil-edit"></i></button>
                                    <button wire:click="deleteShowModal({{ $product->id }})" type="button" class="btn btn-danger waves-effect waves-light"><i class="uil-trash"></i></button>
                                  </td>
                                </tr>
                            @endforeach
                        @else
                                <tr>
                                    <td class="px-6 py-4 text-sm whitespace-no-wrap" colspan="4">No Results Found</td>
                                </tr>
                        @endif
                    </tbody>

                    {{-- {{ $categories->links() }} --}}
                  </table>
              </div>

          </div>
      </div>
  </div>
  
</div>






{{-- <div class="col-lg-6">
  <div class="card">
      <div class="card-body">
          <h4 class="card-title">Striped rows</h4>
          <p class="card-title-desc">Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p>    
          
          <div class="table-responsive">
              <table class="table table-striped mb-0">

                  <thead>
                      <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                      </tr>
                      <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                      </tr>
                      <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                      </tr>
                  </tbody>
              </table>
          </div>

      </div>
  </div>
</div> --}}
