@extends('layouts.main')

@section('judul')


<div class="row">
    <div class="col"><dl class="row">
        <dt class="col-sm-3">Zona Dieeng</dt>
        <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
      
        <dt class="col-sm-3">Euismod</dt>
        <dd class="col-sm-9">
          <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
          <p>Donec id elit non mi porta gravida at eget metus.</p>
        </dd>
      
        <dt class="col-sm-3">Malesuada porta</dt>
        <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>
      
        <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
        <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
      
        <dt class="col-sm-3">Nesting</dt>
        <dd class="col-sm-9">
          <dl class="row">
            <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
          </dl>
        </dd>
      </dl></div>
    <div class="col"><img src="https://images.unsplash.com/photo-1669123309443-c9c40c596133?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80" alt="..." class="img-thumbnail"> </div>

</div>
@endsection