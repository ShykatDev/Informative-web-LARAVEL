@extends('masterpage')
@section('title',"Work")
@section('line')

    <section class="mainPage">
        
        <div class="portfoliopage">
            <div class="top-wave">
                <img src="/asset/topWave.png" alt="">
            </div>
            <div class="port-content">
                <h1 id="port-title">PROJECTS</h1>
                <button id="btn-1"><a href="#proto">Prototypes</a></button>
                <button id="btn-2"><a href="#web">Websites</a></button>
            </div>

            <div class="cat-gif">
                <img src="/asset/cat.gif" alt="">
            </div>

        </div>
        <div class="secondPage" id="proto">
            <div class="title">
                <div class="logo-1">
                    <p>HelloEXE<span>.</span></p>
                </div>
                <h1>Work Samples</h1>
                <span>both prototype and websites are here</span>
            </div>
            <div class="projContainer ">
                <div class="leftside">
                    <div class="div1">
                        <div class="num">I</div>
                        <p class="im-title" style="text-align:center;font-size: 1rem;border-bottom:1px solid black;width:30%;padding-bottom:5px; letter-spacing:1px">A construction site</p>
                        <img src="/asset/p1.png" alt="">
                        <button><a href="#">view</a></button>
                    </div>
                    <div class="div2">
                        <div class="num roman2">II</div>
                        <p class="im-title" style="text-align:center;font-size: 1rem;border-bottom:1px solid black;width:30%;padding-bottom:5px; letter-spacing:1px">A bank site</p>
                        <img src="/asset/p2.jpg" alt="">
                        <button><a href="#">view</a></button>
                    </div>
                    <div class="div3">
                        <div class="num roman3">III</div>
                        <p class="im-title" style="text-align:center;font-size: 1rem;border-bottom:1px solid black;width:30%;padding-bottom:5px; letter-spacing:1px">Online watch selling site</p>
                        <img src="/asset/p3.png" alt="">
                        <button><a href="#">view</a></button>
                    </div>
                    <div class="div4">
                        <div class="num roman4">IV</div>
                        <p class="im-title" style="text-align:center;font-size: 1rem;border-bottom:1px solid black;width:30%;padding-bottom:5px; letter-spacing:1px">Design an e-commerce site</p>
                        <img src="/asset/p4.jpg" alt="">
                        <button><a href="#">view</a></button>
                    </div>
                    <div class="div5">
                        <div class="num roman5">V</div>
                        <p class="im-title" style="text-align:center;font-size: 1rem;border-bottom:1px solid black;width:30%;padding-bottom:5px; letter-spacing:1px">Comming soon page</p>
                        <img src="/asset/p5.png" alt="">
                        <button><a href="#">view</a></button>
                    </div>
                    <div class="div6">
                        <div class="num roman6">VI</div>
                        <p class="im-title" style="text-align:center;font-size: 1rem;border-bottom:1px solid black;width:30%;padding-bottom:5px; letter-spacing:1px">Portfolio design</p>
                        <img src="/asset/p6.jpg" alt="">
                        <button><a href="#">view</a></button>
                    </div>
                </div>
                
                <div class="rightside portproj">
                    <div class="div1 rightdiv">
                        <h1>Design<br>Prototypes</h1>
                        <div class="border-b"></div>
                        <p>Prototype is designed for create final work. It always help to make better design</p>
                        <div class="uses">
                            <img class="xd" src="/asset/xd.png" alt="">
                            <img class="figma" src="/asset/figma.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="wave">
                    <img src="/asset/wave.png" alt="wave">
                </div>
            </div>

            <div class="projContainer1" id="web">
                <div class="leftside1 webProj">
                    <div class="sec1">
                        <h1>Design<br>Websites</h1>
                        <div class="border-b"></div>
                        <p>This is the designs which made by code</p>
                        <div class="uses">
                            <img class="figma" src="/asset/html5.png" alt="">
                            <img class="figma" src="/asset/css.jpg" alt="">
                            <img class="figma" src="/asset/js.png" alt="">
                            <img class="figma" src="/asset/boot.png" alt="">
                            <img class="figma" src="/asset/jquery.png" alt="">
                            <img class="figma" src="/asset/gsap.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="rightside1">
                    <div class="sec1">
                        <div class="num roman7">VII</div>
                        <p class="im-title" style="text-align:center;font-size: 1rem;border-bottom:1px solid black;width:30%;padding-bottom:5px; letter-spacing:1px">Business website</p>
                        <img src="/asset/w4.png" alt="">
                        <button><a href="/asset/web/one/index.html">view</a></button>
                    </div>
                    <div class="sec2">
                        <div class="num roman8">VIII</div>
                        <p class="im-title" style="text-align:center;font-size: 1rem;border-bottom:1px solid black;width:30%;padding-bottom:5px; letter-spacing:1px">Portfolio Website (dark)</p>
                        <img src="/asset/w2.png" alt="">
                        <button><a href="/asset/web/two/profile.html">view</a></button>
                    </div>
                    <div class="sec3">
                        <div class="num roman9">IX</div>
                        <p class="im-title" style="text-align:center;font-size: 1rem;border-bottom:1px solid black;width:30%;padding-bottom:5px; letter-spacing:1px">Online money converter company website</p>
                        <img src="/asset/w3.png" alt="">
                        <button><a href="/asset/web/three/homepage.html">view</a></button>
                    </div>
                    <div class="sec4">
                        <div class="num roman10">X</div>
                        <p class="im-title" style="text-align:center;font-size: 1rem;border-bottom:1px solid black;width:30%;padding-bottom:5px; letter-spacing:1px">Portfolio Website (light)</p>
                        <img src="/asset/w1.png" alt="">
                        <button><a href="/asset/web/four/index.html">view</a></button>
                    </div>
                    <div class="sec5">
                        <div class="num roman11">XI</div>
                        <p class="im-title" style="text-align:center;font-size: 1rem;border-bottom:1px solid black;width:30%;padding-bottom:5px; letter-spacing:1px">Simple website design</p>
                        <img src="/asset/w5.png" alt="">
                        <button><a href="/asset/web/five/LevelX.html">view</a></button>
                    </div>
                    <div class="sec6">
                        <div class="num roman12">XII</div>
                        <p class="im-title" style="text-align:center;font-size: 1rem;border-bottom:1px solid black;width:30%;padding-bottom:5px; letter-spacing:1px">A dice game</p>
                        <img src="/asset/w6.png" alt="">
                        <button><a href="/asset/web/six/index.html">view</a></button>
                    </div>
                </div>
                <div class="tree">
                    <img src="/asset/tree.png" alt="tree">
                </div>
            </div>
        </div>
        
    </section>
    
@endsection