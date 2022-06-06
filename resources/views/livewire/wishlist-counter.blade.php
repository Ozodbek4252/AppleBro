<div>
  @if (Auth::check())
    <span id="wishlist_count">
      {{$count}}
    </span>
  @endif
</div>
