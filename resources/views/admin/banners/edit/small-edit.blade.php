@extends('layouts.app')
@section('content')
  {{-- Bottom Small Banners Beginning --}}
  <div class="col-xl-9">
    {{-- Flash Message for Adding Product Beginning --}}
    <div style="margin-bottom: 1rem;">
      @if (session()->has('success-small'))
        <div
          style="padding: .75rem; background: #9ae6b4; color: #276749; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);"
          class="alert alert-success">
          {{ session('success-small') }}
        </div>
      @endif
    </div>
    {{-- Flash Message for Adding Product End --}}

    <div class="col-xl-6">
      <div class="card" style="display: flex; justify-content: space-between; flex-direction: row;">

        {{-- Left Beginning --}}
        <div class="col-xl-12">
          <div class="card-body">
            <h4 class="card-title">Botton Banner Left</h4>

            <div class="mb-3">
              <img src="/img/banner.png" class="img-fluid" alt="Responsive image">
            </div>

            <form action="{{ Route('admin.banner.small') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3" style="display: flex; justify-content: space-between; align-items: end;">
                <input type="file" name="image" class="form-control-file">
                <div class="mr-3">
                  <label class="form-label">Product</label>
                  <select name="product_id" class="form-control select2">
                    <option value="{{ null }}">Select</option>
                    @foreach ($products as $product)
                      <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                  </select>
                </div>
                <button type="submit" class="btn btn-success w-1 waves-effect waves-light"
                  style="width: 80px;">Add</button>
              </div>
            </form>


          </div>
        </div>
        {{-- Left End --}}

      </div>
    </div>
  </div>
  {{-- Bottom Small Banners End --}}
@endsection
