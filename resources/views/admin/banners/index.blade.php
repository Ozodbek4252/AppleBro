@extends('layouts.app')
@section('content')
  <!-- Begin page -->
  <div class="container-fluid">

    {{-- Slider Beginning --}}
    <div class="col-xl-6">
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
        <form action="{{ Route('admin.banner.slider') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card" style="display: flex; justify-content: space-between; flex-direction: row;">
            <div class="col-xl-12">
              <div class="card-body">
                <h4 class="card-title">Slider Video</h4>
                <p class="card-title-desc">Images in Bootstrap are made responsive
                  with <code class="highlighter-rouge">.img-fluid</code>. <code class="highlighter-rouge">max-width:
                    100%;</code>
                  and <code class="highlighter-rouge">height: auto;</code> are applied to
                  the image so that it scales with the parent element.</p>
                <div class="mb-2">
                  <img src="/img/video.jpg" class="img-fluid" alt="Responsive image" style="width: 100%;">
                </div>

                <div class="mb-3 col-lg-3">
                  <button style="submit" class="btn btn-warning waves-effect waves-light">Edit</button>
                  <button style="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
                </div>

              </div>
            </div>

          </div>
        </form>
      </div>
    </div>
    {{-- Slider End --}}



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

      <div class="col-xl-6">
        <form action="{{ Route('admin.banner.middle') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card" style="display: flex; flex-direction: row;">

            <div class="col-xl-12">
              <div class="card-body">
                <h4 class="card-title">Middle Banner</h4>
                <p class="card-title-desc">Images in Bootstrap are made responsive
                  with <code class="highlighter-rouge">.img-fluid</code>. <code class="highlighter-rouge">max-width:
                    100%;</code>
                  and <code class="highlighter-rouge">height: auto;</code> are applied to
                  the image so that it scales with the parent element.</p>

                <div class="mb-2">
                  <img src="/assets/images/small/img-2.jpg" class="img-fluid" alt="Responsive image">
                </div>
                <div class="mb-3">
                  <button submit="submit" class="btn btn-warning waves-effect waves-light">Edit</button>
                  <button submit="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
                </div>
              </div>
            </div>
          </div>
        </form>
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
