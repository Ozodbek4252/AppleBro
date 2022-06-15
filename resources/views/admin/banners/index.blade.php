@extends('layouts.app')
@section('content')
  <!-- Begin page -->
  <div class="container-fluid">

    {{-- Slider Beginning --}}
    <div class="row">
      <div class="col-xl-12">
        <form action="{{Route('admin.banner.slider')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card" style="display: flex; justify-content: space-between; flex-direction: row;">
            <div class="col-xl-6">
              <div class="card-body">
                <h4 class="card-title">Slider Video</h4>
                <p class="card-title-desc">Images in Bootstrap are made responsive
                  with <code class="highlighter-rouge">.img-fluid</code>. <code class="highlighter-rouge">max-width:
                    100%;</code>
                  and <code class="highlighter-rouge">height: auto;</code> are applied to
                  the image so that it scales with the parent element.</p>
                <div class="mb-2">
                  <img src="img/video.jpg" class="img-fluid" alt="Responsive image" style="width: 100%;">
                </div>

                <div class="mb-3 col-lg-2">
                  <input type="file" name="slider" class="form-control-file" id="resume">
                </div>

                <button style="submit" class="btn btn-success waves-effect waves-light">Add</button>
              </div>
            </div>

            {{-- <div class="col-xl-6" style="display: flex; justify-content: flex-start; flex-wrap: wrap;">

              <div class="col-xl-5 col-sm-5 mr-3">
                <div class="card text-center">
                  <div class="card-body">
                    <div class="dropdown float-end">
                      <a class="text-body dropdown-toggle font-size-16" href="contacts-grid.html#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true">
                        <i class="uil uil-ellipsis-h"></i>
                      </a>

                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="contacts-grid.html#">Edit</a>
                        <a class="dropdown-item" href="contacts-grid.html#">Action</a>
                        <a class="dropdown-item" href="contacts-grid.html#">Remove</a>
                      </div>
                    </div>
                    <img src="assets/images/users/avatar-2.jpg" alt="" style="width: 100%" class="">


                    <div style="margin-top: 10px;">
                      <h3>Images in Bootstrap are made responsive</h3>
                      <p class="card-title-desc" style="margin: 0; margin-top: 10px;">
                        with and are applied to the image so that it scales with the parent element.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

            </div> --}}
            <div class="col-xl-6">
              <div class="card-body">

                <div class="mt-4">

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <label class="form-label">Single Product</label>
                        <select name="product" class="form-control select2">
                          <option>Select</option>
                            @foreach($products as $product)
                              <option value="{{$product->id}}">{{$product->name}}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="mb-3 mt-3 mt-lg-0">
                        <label class="form-label">Name Uz</label>
                        <input name="name_uz" type="text" class="form-control" id="formrow-email-input">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="formrow-email-input">Name Ru</label>
                        <input name="name_ru" type="text" class="form-control" id="formrow-email-input">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="formrow-password-input">Name En</label>
                        <input name="name_en" type="text" class="form-control" id="formrow-password-input">
                      </div>
                    </div>
                  </div>

                  <div>
                    <label class="form-label">Description Uz</label>
                    <textarea name="desc_uz" id="textarea" class="form-control" maxlength="225" rows="3"
                      placeholder="This textarea has a limit of 225 chars."></textarea>
                  </div>
                  <div class="mt-3">
                    <label class="form-label">Description Ru</label>
                    <textarea name="desc_ru" id="textarea" class="form-control" maxlength="225" rows="3"
                      placeholder="This textarea has a limit of 225 chars."></textarea>
                  </div>
                  <div class="mt-3">
                    <label class="form-label">Description En</label>
                    <textarea name="desc_en" id="textarea" class="form-control" maxlength="225" rows="3"
                      placeholder="This textarea has a limit of 225 chars."></textarea>
                  </div>

                </div>

              </div>

            </div>

          </div>
        </form>

      </div>
    </div>
    {{-- Slider End --}}



    {{-- Middle Big Banner Beginning --}}
    <div class="col-xl-6">
      <div class="card">
        <div class="card-body">

          <h4 class="card-title">Responsive images</h4>
          <p class="card-title-desc">Images in Bootstrap are made responsive
            with <code class="highlighter-rouge">.img-fluid</code>. <code class="highlighter-rouge">max-width:
              100%;</code>
            and <code class="highlighter-rouge">height: auto;</code> are applied to
            the image so that it scales with the parent element.</p>

          <div class="">
            <img src="assets/images/small/img-2.jpg" class="img-fluid" alt="Responsive image">
          </div>
        </div>
      </div>
    </div>
    {{-- Middle Big Banner End --}}



    {{-- Bottom Small Banners Beginning --}}
    <div class="col-xl-6 card" style="display: flex; justify-content: space-between; flex-direction: row;">
      <div class="col-xl-6">

        <div class="card-body">
          <h4 class="card-title">Responsive images</h4>
          <p class="card-title-desc">Images in Bootstrap are made responsive
            with <code class="highlighter-rouge">.img-fluid</code>. <code class="highlighter-rouge">max-width:
              100%;</code>
            and <code class="highlighter-rouge">height: auto;</code> are applied to
            the image so that it scales with the parent element.</p>

          <div class="">
            <img src="assets/images/small/img-2.jpg" class="img-fluid" alt="Responsive image">
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="card-body">
          <h4 class="card-title">Responsive images</h4>
          <p class="card-title-desc">Images in Bootstrap are made responsive
            with <code class="highlighter-rouge">.img-fluid</code>. <code class="highlighter-rouge">max-width:
              100%;</code>
            and <code class="highlighter-rouge">height: auto;</code> are applied to
            the image so that it scales with the parent element.</p>

          <div class="">
            <img src="assets/images/small/img-2.jpg" class="img-fluid" alt="Responsive image">
          </div>
        </div>
      </div>
    </div>
    {{-- Bottom Small Banners End --}}

  </div>
@endsection
