<?php $keys = explode('.', $menu->currentKey);  ?>

@if(isset($keys) && strlen($keys[0]))
    <?php
    $childItems = \Illuminate\Support\Arr::get($menu->items, current($keys) . '.children');
    ?>
    @if(!empty($childItems))
        <div class="left-menu-children">
            <ul>
                @foreach ($childItems as $item)
                    <li class="{{ $menu->getActive($item) }}">
                        <a href="{{ $item['url'] }}">
                            {{ trans($item['name']) }}

                            @if ($menu->getActive($item))
                                <i class="angle-right-icon"></i>
                            @endif
                        </a>
                    </li>
                @endforeach
            </ul>

            <div class="close-menu">
                <span><<</span>
            </div>
        </div>
    @endif
@endif


