<div class="container d-flex">
    @foreach ($fruitdata as $fruit)
    <div class="card m-2" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$fruit->name}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$fruit->qantite}}</h6>
        </div>
    </div>
    @endforeach
</div>