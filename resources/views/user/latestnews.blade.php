
<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest News</h1>
      <div class="row mt-5">
        @foreach($newsItem as $newsItems)
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">{{$newsItems->topic}}</a>
              </div>
              <a href="{{url('news_details')}}" class="post-thumb">
                <img src="{{URL::asset('newsimg/'.$newsItems->image)}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="{{url('news_details')}}">{{$newsItems->title}}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="{{URL::asset('assets/img/person/person_1.jpg')}}" alt="">
                  </div>
                  <span>By Admin</span>
                </div>
                <span class="mai-time">{{$newsItems->date}}</span>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="{{url('news')}}" class="btn btn-primary">Read More</a>
        </div>

      </div>
    </div>
  </div>