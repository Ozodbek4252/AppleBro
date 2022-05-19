<div>
  <span 
		@auth
			@if(\App\Models\Wishlist::where('user_id', Auth::user()->id)->where('product_id', $product->id)->count() > 0)
				style="background-color: #FF1E1E;" 
			@endif
		@endauth
		id="{{$product->id}}" class="new-item__fav addToWishlist product-item__fav_{{ $product->id }}" wire:click="add({{$product->id}})">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
			@if(\App\Models\Wishlist::where('user_id', Auth::user()->id)->where('product_id', $product->id)->count() > 0)
				style="color: white !important;" 
			@endif
			>
				<path 
				@if(\App\Models\Wishlist::where('user_id', Auth::user()->id)->where('product_id', $product->id)->count() > 0)
					fill="#fff" 
				@endif
				fill-rule="evenodd" clip-rule="evenodd" d="M12.1671 5.26144C13.1502 4.35261 14.4229 3.81953 15.7602 3.75644L16.0284 3.75012C17.5527 3.75012 19.0132 4.36188 20.0979 5.46437L20.2807 5.66182C22.3094 7.95844 22.2302 11.4408 20.0823 13.648L14.6899 19.1234C13.9804 19.8442 13.0112 20.2501 11.9998 20.2501C10.9884 20.2501 10.0193 19.8442 9.30992 19.1235L3.91412 13.6447C1.69503 11.3643 1.69503 7.73159 3.93137 5.43403L4.13608 5.23724C5.18336 4.28122 6.55111 3.75012 7.97113 3.75012C9.48356 3.75012 10.9332 4.35239 12.0001 5.42281L12.1671 5.26144ZM19.0131 6.50027C18.2258 5.70039 17.1504 5.24994 16.028 5.24994C14.9057 5.24994 13.8303 5.70038 13.0428 6.5004L12.5338 7.01732C12.24 7.31564 11.7588 7.31563 11.465 7.01731L10.9557 6.50019C10.1684 5.70035 9.09306 5.24994 7.97074 5.24994C6.92518 5.24994 5.91806 5.641 5.16161 6.33118L4.98875 6.49711C3.33631 8.19521 3.33631 10.9003 4.98561 12.5952L10.3784 18.0709C10.806 18.5053 11.3899 18.7499 11.9994 18.7499C12.6089 18.7499 13.1929 18.5053 13.6206 18.0708L19.0101 12.5985C20.607 10.9574 20.666 8.364 19.1683 6.66813L19.0131 6.50027Z" fill="#7B7B7B"/>
			</svg>
	</span>
</div>
