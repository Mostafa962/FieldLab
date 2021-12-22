<div class="row">
      @foreach($records as $record)
      <div class="col-sm-6 col-lg-4 text-center item mb-4" data-aos="fade-up" data-aos-delay="100">
        <a href="{{route('users.products.show',['name'=>str_replace([' ','/'], '-',$record->name),'id'=>$record->id])}}"> 
          <img src="{{ asset('storage/'.$record->image)}}" width="300" height="400" alt="Image">
        </a>
        <h3 class="text-dark">
          <a href="{{route('users.products.show',['name'=>str_replace([' ','/'], '-',$record->name),'id'=>$record->id])}}">{{$record->name}}
          </a>
        </h3>
        <p class="price">
          {{$record->quotation}}.....
          <br>
          <a href="{{route('users.products.show',['name'=>str_replace([' ','/'], '-',$record->name),'id'=>$record->id])}}">
            <span style="color:#3278cd; font-weight:bold;">Read More</span>
          </a>
        </p>
      </div>
      @endforeach
    </div>
    <div class="row mt-5">
      <div class="col-md-12 text-center">
        <div class="site-block-27">
          <ul>
          {{ $records->appends(['c'=>request()->query('c')])->links() }}
          </ul>  
        </div>
      </div>
    </div>