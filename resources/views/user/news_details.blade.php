@include('user.header')

  <div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb bg-transparent py-0 mb-5">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('blog')}}">Blog</a></li>
              <li class="breadcrumb-item active" aria-current="page">List of Countries without Coronavirus case</li>
            </ol>
          </nav>
        </div>
      </div> <!-- .row -->

      <div class="row">
        <div class="col-lg-8">
          <article class="blog-details">
            <div class="post-thumb">
              <img src="{{URL::asset('newsimg/'.$data->image)}}" alt="">
            </div>
            <div class="post-meta">
              <div class="post-author">
                <span class="text-grey">By</span> <a href="#">Admin</a>  
              </div>
              <span class="divider">|</span>
              <div class="post-date">
                <a href="#">{{$data->date}}</a>
              </div>
             
            </div>
            <h2 class="post-title h1">{{$data->title}}</h2>
            <div class="post-content">
              <p>{{$data->description}}</p>
            </div>
          </article> <!-- .blog-details -->
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            {{-- <div class="sidebar-block">
              <h3 class="sidebar-title">Search</h3>
              <form action="#" class="search-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                  <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                </div>
              </form>
            </div> --}}
            {{-- <div class="sidebar-block">
              <h3 class="sidebar-title">Categories</h3>
              <ul class="categories">
                <li><a href="#">Food <span>12</span></a></li>
                <li><a href="#">Dish <span>22</span></a></li>
                <li><a href="#">Desserts <span>37</span></a></li>
                <li><a href="#">Drinks <span>42</span></a></li>
                <li><a href="#">Ocassion <span>14</span></a></li>
              </ul>
            </div> --}}

            <div class="sidebar-block">
              <h3 class="sidebar-title">Recent Blog</h3>
              @foreach($latestnews as $newsItem)
              <div class="blog-item">
                  <a class="post-thumb" href="">
                      <img src="{{ URL::asset('newsimg/'.$newsItem->image) }}" alt="">
                  </a>
                  <div class="content">
                      <h5 class="post-title"><a href="{{url('news_details',$newsItem->id)}}">{{ $newsItem->title }}</a></h5>
                      <div class="meta">
                          <a href="#"><span class="mai-calendar"></span>{{ $newsItem->date }}</a>
                          <a href="#"><span class="mai-person"></span> Admin</a>
                      </div>
                  </div>
              </div>
          @endforeach
            </div>

            {{-- <div class="sidebar-block">
              <h3 class="sidebar-title">Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">dish</a>
                <a href="#" class="tag-cloud-link">menu</a>
                <a href="#" class="tag-cloud-link">food</a>
                <a href="#" class="tag-cloud-link">sweet</a>
                <a href="#" class="tag-cloud-link">tasty</a>
                <a href="#" class="tag-cloud-link">delicious</a>
                <a href="#" class="tag-cloud-link">desserts</a>
                <a href="#" class="tag-cloud-link">drinks</a>
              </div>
            </div> --}}

            <div class="sidebar-block">
              <h3 class="sidebar-title">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>
        </div> 
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->
{{-- 
  <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="{{URL::asset('assets/img/mobile_app.png')}}" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
          <a href="#"><img src="{{URL::asset('assets/img/google_play.svg')}}" alt=""></a>
          <a href="#" class="ml-2"><img src="{{URL::asset('assets/img/app_store.svg')}}" alt=""></a>
        </div>
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .banner-home --> --}}

 @include('user.footer')