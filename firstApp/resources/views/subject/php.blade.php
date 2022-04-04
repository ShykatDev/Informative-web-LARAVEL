@extends('masterpage')
@section('title',"About Page")
@section('line')
    <section class="mainPage" data-barba="wrapper">
        <div class="materialpage">
            <section class="firstpage" data-barba="container" data-barba-namespace="php">
                <div class="left">
                    <div class="upp">
                        <img src="/asset/computer.png" alt="banenr">
                    </div>
                    <div class="low">
                        <p>Done with this? Always you have option to go !</p>
                        <button><a href="#">Ok, Got it</a></button>
                    </div>
                </div>
                <div class="right">
                    <div class="upp">
                        <h1>Web Development<br>Roadmap</h1>
                        <p>The tecnologies and tools you need to become a master web developer</p>
                    </div>
                    <div class="low php-cont">
                        <h2 class="subject php"><i class="lni lni-php"></i>  PHP </h2>
                        <p class="details">PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group.</p>
                    </div>
                </div>
                <div class="arrowNext">
                    <a href="{{route('laravel')}}"><i class="lni lni-arrow-right"></i></a>
                </div>
            </section>
        </div>
    </section>
@endsection