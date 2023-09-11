@include('partial.head')
@include('partial.header')

<div class="container" style="margin-top:100px">
    <div class="row">
        @if (session('delete'))
            <span class="alert alert-danger">{{ session('delete') }}</span>
        @endif
        @if (session('success'))
        <span class="alert alert-success">{{ session('success') }}</span>
    @endif
        <div class="col-lg-8 m-auto shadow">
       

       

        <table class="table table-stripe">
            <tr>
                <th>SL NO:</th>
                <th>TODO NAME:</th>
                <th>STATUS:</th>
                <th>Action</th>
            </tr>
            @foreach ($todos  as $key=> $todo)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $todo->todo }}</td>
                    @if ($todo->status == 0)
                        <td><span>In Process</span></td>
                    @endif
                    @if ($todo->status == 1)
                        <td><span>Work Done</span></td>
                    @endif
                    @if ($todo->status == -1)
                        <td><span>Late</span></td>
                    @endif
                    {{-- <td>{{ $todo->status }}</td> --}}
                    <td>
                        <a href="{{ route('approve.todo',$todo->id) }}"><span class="badge" style="background:green;color:#fff;"> Done</span></a>
                        <a href="{{ route('cencle.todo',$todo->id) }}"><span class="badge" style="background:red;color:#fff;"> Late</span></a>
                        <a href="{{ route('delete.todo',$todo->id) }}"><span class="badge" style="background:blue;color:#fff;"> Delete</span></a>

                    </td>
                </tr>
            @endforeach
        </table>
        </div>
    </div>
@include('partial.script')