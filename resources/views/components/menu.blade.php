<nav class="nav flex-column">
    @foreach($list AS $row)
    <a class="nav-link @if($row['label'] == $active) active @endif" href="#">
        {{$row['label']}}
    @endforeach
    </a>
</nav>