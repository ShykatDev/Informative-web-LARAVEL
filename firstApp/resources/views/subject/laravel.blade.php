@extends('masterpage')
@section('title',"About Page")
@section('line')
    <section class="mainPage" data-barba="wrapper">
        <div class="materialpage" >
            <section class="firstpage" data-barba="container" data-barba-namespace="laravel">
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
                    <div class="low laravel-cont">
                        <h2 class="subject laravel"><i class="lni lni-laravel"></i>  LARAVEL </h2>
                        <p class="details">Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony.</p>
                    </div>
                </div>
                <div class="arrowNext">
                    <a href="{{route('git')}}"><i class="lni lni-arrow-right"></i></a>
                </div>
            </section>
        </div>
    </section>
@endsection