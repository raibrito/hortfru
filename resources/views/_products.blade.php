@if(isset($list))
    <div class="row">
        @foreach($list as $products)
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{asset($products->photo)}}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">{{$products->name}} - ${{$products->value}} kg</h6>
                        <a href="{{route('add_cart', ['idproduct'=>$products->id])}}" class="btn btn-sm btn-secondary">Add Items</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
