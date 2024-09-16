@extends('backend.layouts.master')

@section('main-content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
     
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary float-left">car Lists</h6>
      <a href="{{route('car.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add car</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
          @if ($cars->count() > 0)
              <table class="table table-bordered" id="car-dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>S.N.</th>
                          <th>Title</th>
                          <th>Engine Capacity</th>
                          <th>Engine Type</th>
                          <th>Transmission</th>
                          <th>Price</th>
                          <th>Year</th>
                          <th>Description</th>
                          <th>Is Featured</th>
                          <th>Stock</th>
                          <th>Brand</th>
                          <th>Photo</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                 
                  <tbody>
                      @foreach ($cars as $car)
                      <tr>
                          <td>{{ $car->id }}</td>
                          <td>{{ $car->title }}</td>
                          <td>{{ $car->engineCapacity }}</td>
                          <td>{{ $car->engineType }}</td>
                          <td>{{ ucfirst($car->transmission) }}</td>
                          <td>Rs. {{ $car->price }} /-</td>
                          <td>{{ $car->year }}</td>
                          <td>{{ $car->description }}</td>
                          <td>{{ $car->is_featured ? 'Yes' : 'No' }}</td>
                          <td>
                              <span class="badge {{ $car->stock > 0 ? 'badge-primary' : 'badge-danger' }}">{{ $car->stock }}</span>
                          </td>
                          <td>{{ ucfirst($car->brand->title) }}</td>
                          <td>
                              @if ($car->photo)
                                  @php $photo = explode(',', $car->photo); @endphp
                                  <img src="{{ $photo[0] }}" class="img-fluid zoom" style="max-width:80px" alt="{{ $car->photo }}">
                              @else
                                  <img src="{{ asset('backend/img/thumbnail-default.jpg') }}" class="img-fluid" style="max-width:80px" alt="avatar.png">
                              @endif
                          </td>
                          <td>
                              <span class="badge {{ $car->status == 'active' ? 'badge-success' : 'badge-warning' }}">{{ $car->status }}</span>
                          </td>
                          <td>
                              <a href="{{ route('car.edit', $car->id) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
                              <form method="POST" action="{{ route('car.destroy', [$car->id]) }}" style="display:inline;">
                                  @csrf
                                  @method('delete')
                                  <button class="btn btn-danger btn-sm dltBtn" data-car-id="{{ $car->id }}" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                              </form>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
              <div class="d-flex justify-content-end">
                  {{ $cars->links() }}
              </div>
          @else
              <h6 class="text-center">No cars found! Please create a car.</h6>
          @endif
      </div>
  </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
    $(document).ready(function () {
      $('#car-dataTable').DataTable({
            "paging": true // Enable pagination
        });

        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.dltBtn').click(function (e) {
            var form = $(this).closest('form');
            var dataID = $(this).data('car-id');
            e.preventDefault();
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    } else {
                        swal("Your data is safe!");
                    }
                });
        });
    });
</script>
@endpush
