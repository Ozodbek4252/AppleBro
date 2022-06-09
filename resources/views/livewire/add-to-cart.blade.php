<div>
    <span class="new-item__basket" 
        onclick="addToCart('{{$product->id}}')"
        wire:click="addToCart({{$product->id}})" 
        @if(isset(session()->get('cart')[$product->id])) style="background-color: #0967c5" @endif
        >
        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" >
            <path fill="#fff" 
                @if(isset(session()->get('cart')[$product->id])) style="stroke: #fff;" @endif d="M5.96905 6.625L5.30205 3.625H3.37305" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path fill="#fff" 
                @if(isset(session()->get('cart')[$product->id])) style="stroke: #fff;" @endif fill-rule="evenodd" clip-rule="evenodd" d="M7.73075 14.835L5.96875 6.625H18.6267C19.2638 6.625 19.7377 7.212 19.6047 7.835L18.1027 14.835C18.0037 15.296 17.5968 15.625 17.1248 15.625H8.70775C8.23675 15.625 7.82975 15.296 7.73075 14.835Z" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path fill="#fff" 
                @if(isset(session()->get('cart')[$product->id])) style="stroke: #fff;" @endif d="M17.4648 19.25C17.2578 19.25 17.0898 19.418 17.0918 19.625C17.0918 19.832 17.2598 20 17.4668 20C17.6738 20 17.8418 19.832 17.8418 19.625C17.8408 19.418 17.6728 19.25 17.4648 19.25" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path fill="#fff" 
                @if(isset(session()->get('cart')[$product->id])) style="stroke: #fff;" @endif d="M8.85593 19.25C8.64893 19.25 8.48093 19.418 8.48293 19.625C8.48193 19.832 8.64993 20 8.85693 20C9.06393 20 9.23193 19.832 9.23193 19.625C9.23193 19.418 9.06393 19.25 8.85593 19.25" stroke="#7B7B7B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>                                    
    </span>
</div>

