@extends('masterpage')
@section('title',"About Page")
@section('line')
    <section class="mainPage" data-barba="wrapper">
        <div class="materialpage" >
            <section class="firstpage" data-barba="container" data-barba-namespace="angular">
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
                    <div class="low angular-cont">
                        <h2 class="subject angular"><i class="lni lni-angular"></i>  ANGULAR </h2>
                        <p class="details">Angular is a TypeScript-based free and open-source web application framework led by the Angular Team at Google and by a community of individuals and corporations. Angular is a complete rewrite from the same team that built AngularJS.</p>
                    </div>
                </div>
                <div class="arrowNext">
                    <a href="{{route('php')}}"><i class="lni lni-arrow-right"></i></a>
                </div>
            </section>
        </div>
    </section>
@endsection