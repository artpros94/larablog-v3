<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        @foreach($categories as $category)
            <li class="nav-item">
            <a href="#" class="nav-link" aria-current="page">
                {{ $category['name'] }}
            </a>
            </li>
        @endforeach
    </ul>
    <hr>
  </div>