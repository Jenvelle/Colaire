
<div class="dropdown-panel">
              <ul class="dropdown-panel-list">
              <li class="menu-title">
                <a href="#">Apple</a>
              </li>
              @foreach ($devices as $device)
              <li class="panel-list-item">
                @if ($device->device=='apple')
                <a href="#">{{$device->model}}</a>
                </li>
                @endif
                @endforeach
                <li class="panel-list-item">
            <a href="#"></a>
          </li>
              </ul>
              

        <ul class="dropdown-panel-list">

          <li class="menu-title">
            <a href="#">Samsung</a>
          </li>
          @foreach ($devices as $device)
          <li class="panel-list-item">
            @if ($device->device=='android')
            <a href="#">{{$device->model}}</a>
          </li>
          @endif
          @endforeach
          
          <li class="panel-list-item">
            <a href="#"></a>
          </li>
        </ul>
</div>
