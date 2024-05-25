<x-layout>
@include('sweetalert::alert')

  <div class="container py-5">
    <h3 class="mb-3">Order Page</h3>
    <p class="mb-4">This is your Order Page</p>
    <div class="row">
      <div class="col-lg-12">
        <div class="card shadow">
          <div class="card-header bg-primary text-white">
            <h3>ORDER LIST</h3>
          </div>
          <div class="card-body">
            <a href="{{ route('order.create') }}" class="btn btn-success mb-3">Add Order</a>
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Item Name</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($orders as $order)
                <tr>
                  <td>{{ $order->item_name }}</td>
                  <td>{{ $order->category->name}}</td>
                  <td>{{ $order->item_price }}</td>
                  <td>{{ $order->quantity }}</td>
                  <td>{{ $order->item_price * $order->quantity }}</td>
                  <td>
                  <form action="{{ route('order.destroy', [$order->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this order?')">
                    <a href="{{ route('order.edit', [$order->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" value="Delete"class="btn btn-danger btn-sm">Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>