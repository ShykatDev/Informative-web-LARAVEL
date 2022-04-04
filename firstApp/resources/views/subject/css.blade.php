@extends('masterpage')
@section('title',"About Page")
@section('line')
    <section class="mainPage">
       
        <div class="materialpage">
            <section class="firstpage">
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
                    <div class="low css-cont">
                        <h2 class="subject css"><i class="lni lni-css3"></i>  CSS </h2>
                        <p class="details">Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.</p>
                    </div>
                </div>
                <div class="arrowNext">
                    <a href="{{route('js')}}"><i class="lni lni-arrow-right"></i></a>
                </div>
            </section>
        </div>
        
    </section>
@endsection