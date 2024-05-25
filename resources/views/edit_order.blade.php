<x-layout>

    <div class="container py-5">
        <h3 class="mb-3">Order Page</h3>
        <p class="mb-4">This is your Order Page</p>
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow">
                    <form action="{{ route('order.update', $order->id) }}" method="post">
                      {!! csrf_field() !!}
                      @method("PATCH")
                        <div class="card-header bg-primary text-white">
                            <h3>EDIT ORDER</h3>
                        </div>
                        <div class="card-body">
                            <input type="hidden" class="form-control" id="id" name="id" required value="{{ $order->id }}">

                            <div class="mb-3">
                                <label for="category" class="form-label">Select Category:</label>
                                <select name="category_id" id="category_id" class="form-select" required>
                                  @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id==$order->category_id ? 'selected' : '' }}> {{ $category->name }}</option>
                                  @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="item_name">Enter Item Name:</label>
                                <input type="text" class="form-control" id="item_name" name="item_name" required value="{{ $order->item_name }}">
                            </div>

                            <div class="mb-3">
                                <label for="item_price">Enter Item Price:</label>
                                <input type="number" class="form-control" id="item_price" name="item_price" required value ="{{ $order->item_price }}">
                            </div>

                            <div class="mb-3">
                                <label for="item_qty">Enter Item Quantity:</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" required value="{{ $order->quantity }}">
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <input class="btn btn-success" type="submit" name="update" id="update" value="UPDATE" />
                                <a href="{{ route('order.index') }}" class="btn btn-danger">CANCEL</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>