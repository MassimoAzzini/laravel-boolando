@php
    $privacy_information = config('menues.privacy_information');
    $social = config('menues.social');
@endphp


<footer>

    <div class="container flex">

        <div class="company">
            <span>Booleando s.r.l.</span>
            <nav>
                <ul class="flex">
                    @foreach ($privacy_information as $info)
                        <li><a href="{{$info['href']}}" target="_self">{{$info['text']}}</a></li>

                    @endforeach
                </ul>
            </nav>
        </div>


        <div class="social">
            <span>Trovaci anche su</span>
            <nav>
              <ul class="flex">
                @foreach ($social as $item)

                    <li><a href="{{$item['link']}}" target="_blank"><i class="{{$item['icon']}}"></i></a></li>
                @endforeach
              </ul>
            </nav>

        </div>

    </div>

</footer>
