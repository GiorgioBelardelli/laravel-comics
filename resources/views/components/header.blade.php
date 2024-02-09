<header>
    <div class="top-header">
        <div class="a-container">
            <a href="#">DC POWER VISA ® </a>
            <a href="#">ADDITIONAL DC SITES ▼</a>
        </div>
    </div>
    <div class="container">
        <nav>
            <!-- logo -->
            <a href="#">
                <img src="/images/dc-logo.png" alt="DC Logo">
            </a>
            
            <!-- menu di navigazione -->
            <ul>
                @foreach($links as $link)
                <li>
                    <a href="{{ $link['url'] }}" class="{{$link['current'] ? 'active' : ''}}" >{{ $link['text'] }}</a>
                </li>
                @endforeach
                
            </ul>
            <form>
                <input type="text" placeholder="Search...">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </nav>
    </div>
</header>
<div class="jumbo">

</div>
