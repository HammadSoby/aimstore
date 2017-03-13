@extends('partials/app')

@section('title')
    Create New Product
@stop

@section('content')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active"><a href="/">Dashboard</a></li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                {{--<h1 class="page-header">Dashboard</h1>--}}
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Product</div>
                    <div class="panel-body">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <form role="form" action="/admin/create-new-product" method="POST" enctype="multipart/form-data" id="create-form">
                                {{csrf_field()}}

                                <div class="form-group" id="alert">
                                    {{--@if (count($errors) > 0)--}}
                                        {{--<div class="alert alert-danger">--}}
                                            {{--<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>--}}
                                                {{--@foreach ($errors->all() as $error)--}}
                                                    {{--<p class="alert-p">{{ $error }}</p>--}}
                                                {{--@endforeach--}}
                                        {{--</div>--}}
                                    {{--@endif--}}
                                </div>

                                <div class="form-group">
                                    <label>Product Name <span id="required">*</span></label>
                                    <input type="text" class="form-control" placeholder="Product Name" name="name" value="{{old('name')}}" required>
                                </div>

                                <div class="form-group">
                                    <label>Product Price <span id="required">*</span></label>
                                    <input type="text" class="form-control" name="price" placeholder="Product Price" value="{{old('price')}}" required>
                                </div>

                                <div class="form-group">
                                    <label>Product Color</label>
                                    <input type="text" class="form-control" name="color" placeholder="Product Color" value="{{old('color')}}">
                                </div>

                                <div class="form-group">
                                    <label>Notes </label>
                                    <textarea class="form-control" rows="3" name="notes" placeholder="Notes">{{old('notes')}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Product Image <span id="required">*</span></label>
                                    <input type="file" name="image" required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <a href="/product-list"><button type="button" class="btn btn-danger">Back</button></a>
                                </div>


                            </form>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->

    </div>	<!--/.main-->

@endsection

@section('script')

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script>

        $(document).on('submit',"#create-form" , function(e){
            e.preventDefault();
            var formObj = $(this);
            var formURL = formObj.attr("action");
            var formData = new FormData(this);
            $.ajax({
                url: formURL,
                type: 'POST',
                data:  formData,
                contentType: false,
                cache: false,
                processData:false,
                success: function(response)
                {
                    console.log(response.success);
                    $('#alert').append('<div class="alert alert-success">'+
                        '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+
                        '<p class="alert-p">'+response.success+'</p>'+
                        '</div>');
                    document.getElementById("create-form").reset();
                },
                error: function(error)
                {
                    console.log(error);
                }
            });
        });

    </script>

@stop