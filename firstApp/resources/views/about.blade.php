@extends('masterpage')
@section('title',"Material")
@section('line')
    <section class="mainPage">
      <div class="materialpage">
        <section class="firstpage">
          <div class="left">
            <div class="upp">
              <img class="comp" src="/asset/computer.png" alt="banenr" />
            </div>
            <div class="low">
              <p>Done with this? Always you have option to go !</p>
              <button><a href="#second">Ok, Got it</a></button>
            </div>
          </div>
          <div class="right">
            <div class="upp">
              <h1>{{__('lang.material-title')}}</h1>
              <p>
                {{__('lang.material-sub-title')}}
              </p>
            </div>
            <div
              class="low html-cont">
              <h2 class="subject html"><i class="lni lni-html5"></i>  HTML </h2>
                        <p class="details">The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript</p>
              <div class="arrowNext">
                <a class="aa1" href="#"><i class="lni lni-arrow-right"></i></a>
              </div>
            </div>
            <div
              class="low css-cont">
              <h2 class="subject css"><i class="lni lni-css3"></i> CSS</h2>
              <p class="details">
                Cascading Style Sheets is a style sheet language used for
                describing the presentation of a document written in a markup
                language such as HTML. CSS is a cornerstone technology of the
                World Wide Web, alongside HTML and JavaScript.
              </p>
              <div class="arrowNext">
                <a class="aa2" href="#"><i class="lni lni-arrow-right"></i></a>
              </div>
            </div>

            <div
              class="low js-cont">
              <h2 class="subject js">
                <i class="lni lni-javascript"></i> JAVASCRIPT
              </h2>
              <p class="details">
                JavaScript, often abbreviated JS, is a programming language that
                is one of the core technologies of the World Wide Web, alongside
                HTML and CSS. Over 97% of websites use JavaScript on the client
                side for web page behavior, often incorporating third-party
                libraries.
              </p>
              <div class="arrowNext">
                <a class="aa3" href="#"><i class="lni lni-arrow-right"></i></a>
              </div>
            </div>

            <div class="low node-cont">
                <h2 class="subject node"><i class="lni lni-nodejs-alt"></i>  NODE </h2>
                <p class="details">Node.js is an open-source, cross-platform, back-end JavaScript runtime environment that runs on the V8 engine and executes JavaScript code outside a web browser.</p>
                <div class="arrowNext">
                    <a class="aa4" href="#"><i class="lni lni-arrow-right"></i></a>
                  </div>
            </div>

            <div
              class="low angular-cont">
              <h2 class="subject angular">
                <i class="lni lni-angular"></i> ANGULAR
              </h2>
              <p class="details">
                Angular is a TypeScript-based free and open-source web
                application framework led by the Angular Team at Google and by a
                community of individuals and corporations. Angular is a complete
                rewrite from the same team that built AngularJS.
              </p>
              <div class="arrowNext">
                <a class="aa5" href="#"><i class="lni lni-arrow-right"></i></a>
              </div>
            </div>

            <div class="low react-cont">
                <h2 class="subject react"><i class="lni lni-react"></i>  REACT </h2>
                <p class="details">
                    React is a free and open-source front-end JavaScript library for building user interfaces based on UI components. It is maintained by Meta and a community of individual developers and companies. React can be used as a base in the development of single-page or mobile applications.</p>
                    <div class="arrowNext">
                        <a class="aa6" href="#"><i class="lni lni-arrow-right"></i></a>
                      </div>
            </div>

            <div class="low php-cont">
                <h2 class="subject php"><i class="lni lni-php"></i>  PHP </h2>
                <p class="details">PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group.</p>
                <div class="arrowNext">
                    <a class="aa7" href="#"><i class="lni lni-arrow-right"></i></a>
                  </div>
            </div>
            
            <div class="low laravel-cont">
                <h2 class="subject laravel"><i class="lni lni-laravel"></i>  LARAVEL </h2>
                <p class="details">Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony.</p>
                <div class="arrowNext">
                    <a class="aa8" href="#"><i class="lni lni-arrow-right"></i></a>
                  </div>
            </div>
            
            <div class="low git-cont">
                <h2 class="subject"><i class="lni lni-github-original"></i>  GITHUB </h2>
                <p class="details">Git is software for tracking changes in any set of files, usually used for coordinating work among programmers collaboratively developing source code during software development. Its goals include speed, data integrity, and support for distributed, non-linear workflows.</p>
                <div class="arrowNext">
                    <a class="aa9" href="#"><i class="lni lni-arrow-right"></i></a>
                  </div>
            </div>
          </div>
        </section>
    </div>
    <section class="secondpage" id="second">

        <div class="title">
            <div class="logo-1">
                <p>HelloEXE<span>.</span></p>
            </div>
            <h1>Material</h1>
            <span>you might need this tools</span>
        </div>
        <div class="container">
          <div class="material">
            <div class="mind">
              <i class="lni lni-flickr"></i>
              <p>Mindset with passion</p>
            </div>
            <div class="editor">
              <i class="lni lni-code-alt"></i>
              <p>Laptop with a code editor</p>
            </div>
            <div class="net">
              <i class="lni lni-chrome"></i>
              <p>Browser with intertnet</p>
            </div>
          </div>
          <div class="course-cont">
            <div class="course-title">
              <p>Courses you might join</p>
            </div>
            <div class="course-menu">
              <div class="menu-one .men-on">
                <div class="banr">
                </div>
                <div class="sub-tit">
                  <p>This course will provide you which things you need d to start web development</p>
                </div>
                <div class="col">
                  <div class="price">
                    <label> <del>$30</del></label>
                    <label>$25</label>
                  </div>
                  <button> <a href="{{route('404')}}">Enroll</a></button>
                </div>
              </div>
              <div class="menu-one menu-two">
                <div class="banr">
                </div>
                <div class="sub-tit">
                  <p>This course will provide the fundamentals of frontend web design</p>
                </div>
                <div class="col">
                  <div class="price">
                    <label> <del>$60</del></label>
                    <label>$45</label>
                  </div>
                  <button> <a href="{{route('404')}}">Enroll</a></button>
                </div>
              </div>
              <div class="menu-one menu-three">
                <div class="banr">
                </div>
                <div class="sub-tit">
                  <p>This course will provide the full stack development of a web application</p>
                </div>
                <div class="col">
                  <div class="price">
                    <label> <del>$60</del></label>
                    <label>$45</label>
                  </div>
                  <button> <a href="{{route('404')}}">Enroll</a></button>
                </div>
              </div>
            </div>
            
          </div>
        </div>

    </section>
    </section>
@endsection