<div class="container d-flex">
    @foreach ($legumedata as $legume)
    @if (Str::length($legume->name)>=7)
    <div class="card m-2 bg-success" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">{{$legume->name}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$legume->qantite}}</h6>
      </div>
  </div>       
    @else
    <div class="card m-2" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$legume->name}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$legume->qantite}}</h6>
        </div>
    </div>
    @endif
    @endforeach
</div>