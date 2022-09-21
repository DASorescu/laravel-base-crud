@php
    $ComicsLinks = [
        [
          "text"=> "Characters",
          "url"=> "#",
          "current"=> false,
        ],
        [
          "text"=> "Comics",
          "url"=> "#",
          "current"=> true,
        ],
        [
          "text"=> "Movies",
          "url"=> "#",
          "current"=> false,
        ],
        [
          "text"=> "TV",
          "url"=> "#",
          "current"=> false,
        ],
        [
          "text"=> "Games",
          "url"=> "#",
          "current"=> false,
        ],
        [
          "text"=> "Collectibles",
          "url"=> "#",
          "current"=> false,
        ],
        [
          "text"=> "Videos",
          "url"=> "#",
          "current"=> false,
        ],
        [
          "text"=> "Fans",
          "url"=> "#",
          "current"=> false,
        ],
        [
          "text"=> "News",
          "url"=> "#",
          "current"=> false,
        ],
        [
          "text"=> "Shop",
          "url"=> "#",
          "current"=> false,
        ],
];
      $Links = [
        [
          "text"=> "Terms of use",
          "url"=> "#",
        ],
        [
          "text"=> "Privacy policy(New)",
          "url"=> "#",
          "current"=> true,
        ],
        [
          "text"=> "Ad choices",
          "url"=> "#",
        ],
        [
          "text"=> "Advertising",
          "url"=> "#",
        ],
        [
          "text"=> "Jobs",
          "url"=> "#",
        ],
        [
          "text"=> "Subscriptions",
          "url"=> "#",
        ],
        [
          "text"=> "Talent Workshops",
          "url"=> "#",
        ],
        [
          "text"=> "CPSC Certificates",
          "url"=> "#",
        ],
        [
          "text"=> "Ratings",
          "url"=> "#",
        ],
        [
          "text"=> "Shop Help",
          "url"=> "#",
        ],
        [
          "text"=> "Contact Us",
          "url"=> "#",
        ],
];
      $Sites = [
        [
          "text"=> "DC",
          "url"=> "#",
        ],
        [
          "text"=> "MAD MAgazine",
          "url"=> "#",
          "current"=> true,
        ],
        [
          "text"=> "DC Kids",
          "url"=> "#",
        ],
        [
          "text"=> "DC Universe",
          "url"=> "#",
        ],
        [
          "text"=> "DC Power Visa",
          "url"=> "#",
        ],
];
      $Shop = [[ 'text'=> "Shop DC" ,"url"=> "#"], [ 'text'=> "Shop DC Collectibles","url"=> "#" ]];
@endphp


<footer>
    <div class="top-footer">
        <div class="container">
            <div class="footer-list">
                <div class="column">
                    <h3>DC Comics</h3>
                    <ul>
                        @foreach($ComicsLinks as $cl)
                        <li>
                            <a :href="{{$cl['url']}}">{{$cl['text']}}</a>
                        </li>
                        @endforeach
                    </ul>
                    <h3>Shop</h3>
                    <ul>
                        @foreach($Shop as $shop)
                        <li>
                            <a :href="{{$shop['url']}}">{{$shop['text']}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="column">
                    <h3>DC</h3>
                    <ul>
                        @foreach($Links as $link)
                        <li>
                            <a :href="{{$link['url']}}">{{$link['text']}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="column">
                    <h3>Sites</h3>
                    <ul>
                        @foreach($Sites as $site)
                        <li>
                            <a :href="{{$site['url']}}">{{$site['text']}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="footer-logo"></div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="button">
                <button>SIGN-UP NOW!</button>
            </div>
            <div class="social">
                <div>
                    <button>FOLLOW US</button>
                </div>
                <div class="social-icons ">
                    <img src="../images/footer-facebook.png" alt="">
                    <img src="../images/footer-twitter.png" alt="">
                    <img src="../images/footer-pinterest.png" alt="">
                    <img src="../images//footer-youtube.png" alt="">
                    <img src="../images/footer-periscope.png" alt="">
                </div>
            </div>
        </div>
    </div>
</footer>