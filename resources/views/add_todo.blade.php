@include('partial.head')
@include('partial.header')
<div class="container" style="margin-top:100px">
    <div class="row">
        <div class="col-lg-4 m-auto">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center" style="font-size: 32px;">Add <b class="text-primary">TODO</b></h1>
                </div>
                <form action="{{ route('store.todo') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="add" class="mb-3"><b>Add Todo:</b></label>
                            <input type="text" name="todo" class="form-control" id="add" placeholder="Enter Your TODO">
                            @error('todo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn form-control" style="background: #007bff;color:#fff; font-wight:bold;">Add TODO</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('partial.script')