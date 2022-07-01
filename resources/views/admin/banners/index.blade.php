@extends('layouts.app')
@section('content')
  <!-- Begin page -->
  <div class="container-fluid">

    {{-- Slider Beginning --}}
    <div class="col-xl-12">

      {{-- Flash Message for Adding Product Beginning --}}
      <div style="margin-bottom: 1rem;">
        @if (session()->has('success-slider'))
          <div
            style="padding: .75rem; background: #9ae6b4; color: #276749; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);"
            class="alert alert-success">
            {{ session('success-slider') }}
          </div>
        @elseif(session()->has('success-slider-updated'))
          <div
            style="padding: .75rem; background: #9ae6b4; color: #276749; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);"
            class="alert alert-success">
            {{ session('success-slider-updated') }}
          </div>
        @elseif(session()->has('success-slider-deleted'))
          <div
            style="padding: .75rem; background: #e69a9a; color: #672727; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);"
            class="alert alert-danger">
            {{ session('success-slider-deleted') }}
          </div>
        @endif
      </div>
      {{-- Flash Message for Adding Product End --}}

      <div class="flex col-xl-12" style="overflow-x: scroll;">
        @foreach ($banners as $banner)
          @if ($banner->type == 'slider')
            <div class="col-xl-6 mr-3">
              <div class="card" style="display: flex; justify-content: space-between; flex-direction: row;">
                <div class="col-xl-12">
                  <div class="card-body">
                    <h4 class="card-title">Slider</h4>
                    {{-- <p class="card-title-desc">Images in Bootstrap are made responsive
                      with <code class="highlighter-rouge">.img-fluid</code>. <code class="highlighter-rouge">max-width:
                        100%;</code>
                      and <code class="highlighter-rouge">height: auto;</code> are applied to
                      the image so that it scales with the parent element.</p> --}}
                    <div class="mb-2">
                      @if ($banner->media_type == 'image')
                        <img src="/{{ $banner->image }}" class="img-fluid" alt="Responsive image" style="width: 100%;">
                      @endif
                    </div>

                    <div class="mb-3 col-lg-3">
                      <a href="{{ Route('admin.banner.slider.edit', $banner) }}"
                        class="btn btn-warning waves-effect waves-light">Edit</a>
                      <a href="" class="btn btn__delete btn-danger waves-effect waves-light">Delete</a>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            {{-- Delete Modal Beginning --}}
            <div class="popup__confirm"
              style="
                display:none; position: fixed; 
                top: 50%; left: 50%; transform: translate(-50%, -50%); 
                background-color:#ffffff; width: 500px; height: auto; 
                z-index:999; 
                border-radius: 10px;
                box-shadow: 0px 0px 40px 0px rgba(0,0,0,0.5);
                ">
              <div class="card-body">

                <div style="margin: 1rem 0">
                  Do you really want to delete this?
                </div>

                <div style="display: flex; justify-content: space-between;">
                  <button class="btn btn-primary btn__close" style="color: #fff">Close</button>
                  <a href="{{ Route('admin.banner.slider.delete', $banner) }}" method="get" class="btn btn-danger"
                    style="color: #fff">Delete</a>
                </div>

              </div>
            </div>
            {{-- Delete Modal End --}}
          @endif
        @endforeach
      </div>

    </div>
    {{-- Slider End --}}



    {{-- Middle Big Banner Beginning --}}
    <div class="col-xl">

      {{-- Flash Message for Adding Product Beginning --}}
      <div style="margin-bottom: 1rem; margin-top: 1rem;">
        @if (session()->has('success-mid'))
          <div
            style="padding: .75rem; background: #9ae6b4; color: #276749; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);"
            class="alert alert-success">
            {{ session('success-mid') }}
          </div>
        @elseif(session()->has('success-mid-updated'))
          <div
            style="padding: .75rem; background: #9ae6b4; color: #276749; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);"
            class="alert alert-success">
            {{ session('success-mid-updated') }}
          </div>
        @elseif(session()->has('success-mid-deleted'))
          <div
            style="padding: .75rem; background: #e69a9a; color: #672727; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);"
            class="alert alert-danger">
            {{ session('success-mid-deleted') }}
          </div>
        @endif
      </div>
      {{-- Flash Message for Adding Product End --}}

      <div class="col-xl-6">
        <div class="card" style="display: flex; flex-direction: row;">
          @foreach ($banners as $banner)
            @if ($banner->type == 'middle')
              <div class="col-xl-12">
                <div class="card-body">
                  <h4 class="card-title">Middle Banner</h4>
                  {{-- <p class="card-title-desc">Images in Bootstrap are made responsive
                    with <code class="highlighter-rouge">.img-fluid</code>. <code class="highlighter-rouge">max-width:
                      100%;</code>
                    and <code class="highlighter-rouge">height: auto;</code> are applied to
                    the image so that it scales with the parent element.</p> --}}

                  <div class="mb-2">
                    <img src="/{{ $banner->image }}" class="img-fluid" alt="Responsive image">
                  </div>
                  <div class="mb-3">
                    <a href="{{ Route('admin.banner.mid.edit', $banner) }}" submit="submit"
                      class="btn btn-warning waves-effect waves-light">Edit</a>
                    <a href="" class="btn btn__delete btn-danger waves-effect waves-light">Delete</a>
                  </div>
                </div>
              </div>

              {{-- Delete Modal Beginning --}}
              <div class="popup__confirm"
                style="
              display:none; position: fixed; 
              top: 50%; left: 50%; transform: translate(-50%, -50%); 
              background-color:#ffffff; width: 500px; height: auto; 
              z-index:999; 
              border-radius: 10px;
              box-shadow: 0px 0px 40px 0px rgba(0,0,0,0.5);
              ">
                <div class="card-body">

                  <div style="margin: 1rem 0">
                    Do you really want to delete this?
                  </div>

                  <div style="display: flex; justify-content: space-between;">
                    <button class="btn btn-primary btn__close" style="color: #fff">Close</button>
                    <a href="{{ Route('admin.banner.mid.delete', $banner) }}" method="get" class="btn btn-danger"
                      style="color: #fff">Delete</a>
                  </div>

                </div>
              </div>
              {{-- Delete Modal End --}}
            @endif
          @endforeach
        </div>
      </div>
    </div>
    {{-- Middle Big Banner End --}}



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

      <div class="col-xl-12">
        <div class="card" style="display: flex; justify-content: space-between; flex-direction: row;">

          {{-- Left Beginning --}}
          <div class="col-xl-6">
            <div class="card-body">
              <h4 class="card-title">Botton Banner Left</h4>
              <p class="card-title-desc">Images in Bootstrap are made responsive
                with <code class="highlighter-rouge">.img-fluid</code>. <code class="highlighter-rouge">max-width:
                  100%;</code>
                and <code class="highlighter-rouge">height: auto;</code> are applied to
                the image so that it scales with the parent element.</p>

              <div class="mb-3">
                <img src="/assets/images/small/img-2.jpg" class="img-fluid" alt="Responsive image">
              </div>

              <div class="mb-3">
                <button submit="submit" class="btn btn-warning waves-effect waves-light">Edit</button>
                <button submit="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
              </div>

            </div>
          </div>
          {{-- Left End --}}


          {{-- Right Beginning --}}
          <div class="col-xl-6">
            <div class="card-body">
              <h4 class="card-title">Botton Banner Right</h4>
              <p class="card-title-desc">Images in Bootstrap are made responsive
                with <code class="highlighter-rouge">.img-fluid</code>. <code class="highlighter-rouge">max-width:
                  100%;</code>
                and <code class="highlighter-rouge">height: auto;</code> are applied to
                the image so that it scales with the parent element.</p>

              <div class="mb-3">
                <img src="/assets/images/small/img-2.jpg" class="img-fluid" alt="Responsive image">
              </div>

              <div class="mb-3">
                <button submit="submit" class="btn btn-warning waves-effect waves-light">Edit</button>
                <button submit="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
              </div>


            </div>
          </div>
          {{-- Right End --}}

        </div>
      </div>
    </div>
    {{-- Bottom Small Banners End --}}



  </div>
@endsection
