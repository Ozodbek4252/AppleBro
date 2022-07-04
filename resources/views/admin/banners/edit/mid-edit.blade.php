@extends('layouts.app')
@section('content')
  {{-- Middle Big Banner Beginning --}}
  <div class="col-xl">

    {{-- Flash Message for Adding Product Beginning --}}
    <div style="margin-bottom: 1rem;">
      @if (session()->has('success-mid'))
        <div
          style="padding: .75rem; background: #9ae6b4; color: #276749; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);"
          class="alert alert-success">
          {{ session('success-mid') }}
        </div>
      @endif
    </div>
    {{-- Flash Message for Adding Product End --}}

    <div class="col-xl-12">
      <form action="{{ Route('admin.banner.mid.update') }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="card" style="display: flex; flex-direction: row;">

          <div class="col-xl-6">
            <div class="card-body">
              <h4 class="card-title">Middle Banner</h4>
              {{-- <p class="card-title-desc">Images in Bootstrap are made responsive
                with <code class="highlighter-rouge">.img-fluid</code>. <code class="highlighter-rouge">max-width:
                  100%;</code>
                and <code class="highlighter-rouge">height: auto;</code> are applied to
                the image so that it scales with the parent element.</p> --}}

              <div class="mb-3">
                <img src="/{{$banner->image}}" class="img-fluid" alt="Responsive image">
              </div>
              <div class="mb-3" style="display: flex; justify-content: space-between;">
                <input type="file" name="image" class="form-control-file">
                <input type="hidden" value="{{$banner->id}}" name="data_id">
                <input type="hidden" value="{{$banner->image}}" name="old_image">
                <button submit="submit" class="btn btn-success waves-effect waves-light">Update</button>
              </div>
            </div>
          </div>

          <div class="col-xl-6">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label class="form-label">Product</label>
                    <select name="product_slug" class="form-control select2">
                      <option value="{{ null }}">Select</option>
                      @foreach ($products as $product)
                        <option @if($product->slug == $banner->product_slug) selected @endif value="{{ $product->slug }}">{{ $product->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="mb-3 mt-3 mt-lg-0">
                    <label class="form-label">Name Uz</label>
                    <input name="name_uz" value="{{$banner->name_uz}}" type="text" placeholder="Nomini kiriting" class="form-control"
                      id="formrow-email-input">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label" for="formrow-email-input">Name Ru</label>
                    <input name="name_ru" value="{{$banner->name_ru}}" type="text" class="form-control" placeholder="Название"
                      id="formrow-email-input">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label" for="formrow-password-input">Name En</label>
                    <input name="name_en" value="{{$banner->name_en}}" type="text" class="form-control" placeholder="Enter name"
                      id="formrow-password-input">
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </form>
    </div>

  </div>
  {{-- Middle Big Banner End --}}
@endsection
