<nav class="nav flex-column">
    @foreach($list AS $row)
<a class="nav-link {{$isActive($row['label']) ? 'active' : ''}}" href="#">
        {{$row['label']}}
    @endforeach
    </a>
</nav>