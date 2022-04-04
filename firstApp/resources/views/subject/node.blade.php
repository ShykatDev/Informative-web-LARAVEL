@extends('masterpage')
@section('title',"About Page")
@section('line')
    <section class="mainPage" data-barba="wrapper">
        <div class="materialpage">
            <section class="firstpage" data-barba="container" data-barba-namespace="node">
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
                    <div class="low node-cont">
                        <h2 class="subject node"><i class="lni lni-nodejs-alt"></i>  NODE </h2>
                        <p class="details">Node.js is an open-source, cross-platform, back-end JavaScript runtime environment that runs on the V8 engine and executes JavaScript code outside a web browser.</p>
                    </div>
                </div>
                <div class="arrowNext">
                    <a href="{{route('react')}}"><i class="lni lni-arrow-right"></i></a>
                </div>
            </section>
        </div>
    </section>
@endsection