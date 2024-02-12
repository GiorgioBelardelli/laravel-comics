@extends('layouts.main-layout')
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>DC COMICS</title>
@endsection
@section('content')
    <section id="comics-cards">
        <div class="container">
            <div class="current-series">
                <h3>CURRENT SERIES</h3>
            </div>
            @foreach ($comics as $comic)
            <div class="card">    
                <ul>
                    <li>
                        <a href="#">
                            <img src="{{ $comic['thumb'] }}" alt="comic">
                            <p>
                                {{ $comic['title'] }}
                            </p>    
                        </a>
                    </li>
                </ul>
            </div>
            @endforeach
        </div>
        <button class="load-button">
            LOAD MORE
        </button>
    </section>
    <section id="shop-nav">
        <div class="container">
            <ul>
                <li>
                    <a href="#">
                        <img src="/images/buy-comics-digital-comics.png">
                        <p>DIGITAL COMICS</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/images/buy-comics-merchandise.png">
                        <p>DC MERCHANDISE</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/images/buy-comics-subscriptions.png">
                        <p>SUBSCRIPTION</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/images/buy-comics-shop-locator.png">
                        <p>COMIC SHOP LOCATOR</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/images/buy-dc-power-visa.svg">
                        <p>DC POWER VISA</p>
                    </a>
                </li>
            </ul>
        </div>
    </section>
@endsection
