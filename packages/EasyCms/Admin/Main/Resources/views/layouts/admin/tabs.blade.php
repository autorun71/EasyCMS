<?php $keys = explode('.', $menu->currentKey); ?>

@if ($tabItems = \Illuminate\Support\Arr::get($menu->items, implode('.children.', array_slice($keys, 0, 2)) . '.children'))
    <div class="tabs">
        <ul>
            @foreach ($tabItems as $item)
                <li class="{{ $menu->getActive($item) }}">
                    <a href="{{ $item['url'] }}">
                        {{ trans($item['name']) }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endif
