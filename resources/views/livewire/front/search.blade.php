<div>
  <input wire:model="input" type="text" placeholder="Поиск">
  @if (count($search_results) > 0)
    <div class="header-search__result">
      <ul>
        @foreach ($search_results as $result)
          <li>
            <a href="{{ Route('front.single-product', $result->slug) }}">
              <img src="{{ $result->main_photo_path }}/{{ $result->main_photo }}" alt="apple">
              <p>{{ $result->name }}</p>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
              </svg>
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  @endif
</div>
