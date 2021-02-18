<form class="container mt-5" action="addlegume-store" method="POST">
  @csrf
    <div class="form-group">
      <label for="">Legume</label>
      <input type="text" name="name" class="form-control" id="" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="">Quantite</label>
        <input type="number" name="qantite" class="form-control" id="" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>