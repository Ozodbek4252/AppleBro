<div>
  @if (Auth::check())
    <span id="cart_count">{{$count}}</span>
  @endif
</div>
