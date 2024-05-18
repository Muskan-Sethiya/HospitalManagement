@include('user.header')

   <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">News</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">News</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            @foreach($news1 as $newsItem)
            <div class="col-sm-6 py-3">
                <div class="card-blog">
                    <div class="header">
                        <div class="post-category">
                            <a href="#">{{ $newsItem->topic }}</a>
                        </div>
                        <a href="blog-details" class="post-thumb">
                            <img src="{{ url('newsimg/'.$newsItem->image) }}" alt="">
                        </a>
                    </div>
                    <div class="body">
                        <h5 class="post-title"><a href="{{url('news_details',$newsItem->id)}}">{{ $newsItem->title }}</a></h5>
                        <div class="site-info">
                            <div class="avatar mr-2">
                                <div class="avatar-img">
                                    <img src="{{URL::asset('assets/img/person/person_1.jpg')}}" alt="">
                                </div>
                                <span>Admin</span>
                            </div>
                            <span class="mai-time">{{\Carbon\Carbon::parse($newsItem->date)->format('d-m-Y')}} </span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
          </div>
          {{$news1->links()}} <!-- .row -->
        </div>
        
      
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-block">
              <h3 class="sidebar-title">Recent Blog</h3>
              @foreach($latestNews as $newsItem)
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

            <div class="sidebar-block">
              <h3 class="sidebar-title">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>
        </div> 
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->


 @include('user.footer')