@extends('layouts.app')
@section('content')
  <!-- Begin page -->
  <div class="container-fluid">

    {{-- Slider Beginning --}}
    <div class="col-xl">
      {{-- Flash Message for Adding Product Beginning --}}
      <div style="margin-bottom: 1rem;">
        @if (session()->has('success-slider'))
          <div
            style="padding: .75rem; background: #9ae6b4; color: #276749; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);"
            class="alert alert-success">
            {{ session('success-slider') }}
          </div>
        @endif
      </div>
      {{-- Flash Message for Adding Product End --}}

      <div class="col-xl-12">
        <form action="{{ Route('admin.banner.slider.update') }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <input type="hidden" name="data_id" value="{{ $banner->id }}">
          <div class="card" style="display: flex; justify-content: space-between; flex-direction: row;">
            <div class="col-xl-6">

              {{-- Slider Image Beginning --}}
              <div class="card-body" style="padding-bottom: .25rem;">
                <h4 class="card-title">Slider</h4>
                {{-- <p class="card-title-desc">Images in Bootstrap are made responsive
                  with <code class="highlighter-rouge">.img-fluid</code>. <code class="highlighter-rouge">max-width:
                    100%;</code>
                  and <code class="highlighter-rouge">height: auto;</code> are applied to
                  the image so that it scales with the parent element.</p> --}}
                <div class="mb-2">
                  <img src="/{{$banner->image}}" class="img-fluid" alt="Responsive image" style="width: 100%;">
                  <input name="old_image" type="hidden" value="{{$banner->image}}">
                </div>

                <div class="flex justify-between">
                  <div class="col-lg-2" style="height: 38.62px;">
                    <input type="file" name="image" class="form-control-file" id="resume">
                  </div>

                  <button style="submit" class="btn btn-success waves-effect waves-light"
                    style="height: 40px;">Update</button>
                </div>
              </div>
              {{-- Slider Image End --}}

              <p style="margin: 0px; margin-left: 1.25rem;">Or</p>

              {{-- Slider YouTube Link Beginning --}}
              <div class="card-body" style="padding-top: .25rem;">
                <div class="mt-4 flex justify-between" style="margin-top: .7rem !important;">
                  <div class="col-10">
                    <div class="input-group">
                      <input @if($banner->media_type == 'video') value="{{$banner->image}}" @endif name="video_link" type="text" class="form-control" id="specificSizeInputGroupUsername"
                        placeholder="Paste YouTube Link">
                    </div>
                  </div>
                  <div class="col-2 flex justify-end">
                    <button style="submit" class="btn btn-success waves-effect waves-light"
                    style="height: 40px;">Update</button>
                  </div>
                </div>
              </div>
              {{-- Slider YouTube Link End --}}

            </div>
            <div class="col-xl-6">
              <div class="card-body">

                <div class="mt-4">

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <label class="form-label">Single Product</label>
                        <select name="product_id" class="form-control select2">
                          <option value="{{ null }}">Select</option>
                          @foreach ($products as $product)
                            <option @if($product->id == $banner->product_id) selected @endif value="{{ $product->id }}">{{ $product->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="mb-3 mt-3 mt-lg-0">
                        <label class="form-label">Name Uz</label>
                        <input name="name_uz" value="{{$banner->name_uz}}" type="text" class="form-control" id="formrow-email-input">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="formrow-email-input">Name Ru</label>
                        <input name="name_ru" value="{{$banner->name_ru}}" type="text" class="form-control" id="formrow-email-input">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="formrow-password-input">Name En</label>
                        <input name="name_en" value="{{$banner->name_en}}" type="text" class="form-control" id="formrow-password-input">
                      </div>
                    </div>
                  </div>

                  <div>
                    <label class="form-label">Description Uz</label>
                    <textarea name="desc_uz" id="textarea" class="form-control" maxlength="225" rows="3"
                      placeholder="This textarea has a limit of 225 chars.">{{$banner->desc_uz}}</textarea>
                  </div>
                  <div class="mt-3">
                    <label class="form-label">Description Ru</label>
                    <textarea name="desc_ru" id="textarea" class="form-control" maxlength="225" rows="3"
                      placeholder="This textarea has a limit of 225 chars.">{{$banner->desc_ru}}</textarea>
                  </div>
                  <div class="mt-3">
                    <label class="form-label">Description En</label>
                    <textarea name="desc_en" id="textarea" class="form-control" maxlength="225" rows="3"
                      placeholder="This textarea has a limit of 225 chars.">{{$banner->desc_en}}</textarea>
                  </div>

                </div>

              </div>
            </div>

          </div>
        </form>
      </div>
    </div>
    {{-- Slider End --}}
  </div>
@endsection
