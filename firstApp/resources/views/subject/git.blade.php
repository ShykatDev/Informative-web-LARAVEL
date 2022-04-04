@extends('masterpage')
@section('title',"About Page")
@section('line')
    <section class="mainPage" data-barba="wrapper">
        <div class="materialpage" >
            <section class="firstpage" data-barba="container" data-barba-namespace="git">
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
                    <div class="low git-cont">
                        <h2 class="subject"><i class="lni lni-github-original"></i>  GITHUB </h2>
                        <p class="details">Git is software for tracking changes in any set of files, usually used for coordinating work among programmers collaboratively developing source code during software development. Its goals include speed, data integrity, and support for distributed, non-linear workflows.</p>
                    </div>
                </div>
                <div class="arrowNext">
                    <a href="{{route('about')}}"><i class="lni lni-arrow-right"></i></a>
                </div>
            </section>
        </div>
    </section>
@endsection