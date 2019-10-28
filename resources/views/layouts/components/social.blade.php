@foreach($items as $menu_item)
    <li class="list-inline-item">
        <a href="{{ $menu_item->link() }}">
              <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab {{ $menu_item->icon_class }} fa-inverse"></i>
              </span>
        </a>
    </li>
@endforeach