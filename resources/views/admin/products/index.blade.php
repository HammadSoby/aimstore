@extends('partials/app')

@section('title')
    Products
@stop

@section('content')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/admin"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product Lists</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="pull-left">Details</span>
                        <span class="pull-right">
                            <a href="/admin/create-new-product"><button type="button" class="btn btn-primary">Create New</button></a>
                        </span>
                    </div>
                    <div class="panel-body">
                        <table  data-toggle="table" data-url="/"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Color</th>
                                <th>Notes</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <?php $index = 1 ?>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$index++}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->color}}</td>
                                    <td>{{substr($product->notes,0,80)."..."}}</td>
                                    <td class="action">
                                        <a href="/view-lock/{{$product->id}}"><i class="glyphicon glyphicon-eye-open"></i></a>
                                        <a href="/update-lock/{{$product->id}}"><i class="glyphicon glyphicon-edit"></i></a>
                                        <a href="/delete-lock/{{$product->id}}"><i class="glyphicon glyphicon-remove"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div><!--/.row-->

    </div>	<!--/.main-->


    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Share Smart Lock</h4>
                </div>
                <div class="modal-body">
                    <form role="form">


                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" id="share_link" class="form-control" placeholder="Placeholder" name="share_link">
                        </div>

                        <div class="form-group">
                            <button type="button" class="btn btn-success" onclick="copy();">Copy Clipboard</button>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.6.0/clipboard.min.js"></script>

    <script>

        $(document).on('click','.show-password',function() {
            $pass_input = $(this).closest('tr').find('.password');
            var type = $pass_input.attr('type');
            if(type == 'password'){
                $pass_input.attr('type', 'text');
            }else{
                $pass_input.attr('type', 'password');
            }
        });

        $(document).on('submit',"#share-form" , function(e){
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
                    $('#share_link').attr('value',response.secret_key);
                    $("#myModal").modal('show');
                },
                error: function(error)
                {
                    console.log(error);
                }
            });
        });

        function copy(){
            var text = document.getElementById('share_link');
            var range = document.createRange();

            range.selectNode(text);
            window.getSelection().addRange(range);
            document.execCommand('copy');
        }

    </script>

@stop