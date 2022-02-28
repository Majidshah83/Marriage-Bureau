@extends('Dashboard.layout.master')
@section('content')
<section class="content">

    <div class="container mt-2">

        <div class="row">
            <div class="col-md-12 card-header text-center font-weight-bold">
                <h2>Customer List</h2>
            </div>

            <ul id="save_msgList"></ul>
            <div class="col-md-12">
                <table class="table" id="example">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Date of Birth</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Disablity</th>
                            <th scope="col">Cast</th>
                            <th scope="col">Adress</th>
                            <th scope="col">Image</th>
                            <th scope="col">Qualification</th>
                            <th>Customer Profile</th>
                            <th scope="col">Action</th>



                        </tr>
                    </thead>
                    <tbody class="tab">
                        @foreach($customer as $customer)
                        <tr>
                            <td>{{$customer->id}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->gender}}</td>
                            <td>{{$customer->date_of_birth}}</td>
                            <td>{{$customer->phone_number}}</td>
                            <td>{{$customer->disablity}}</td>
                            <td>{{$customer->cast}}</td>
                            <td>{{$customer->adress}}</td>

                            <td> <img src="{{ asset('public/wedding-page-images/' . $customer->image) }}"
                                    style="height:50px;width:50px;"> </td>
                            <td>{{$customer->qualification}}</td>
                            <td>
                                <a href="{{ URL('/customer-profile/'.$customer->id )}}">View</a>
                            </td>
                            <td><input type="checkbox" data-id="{{$customer->id}}" class="toggle-class"
                                    data-toggle="toggle" data-style="slow" data-on="Enabled" data-off="Disabled"
                                    {{$customer->satatus==true ? 'checked':''}}></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });

    //disabale enable
    $(function() {
        $('#toggle-two').bootstrapToggle({
            on: 'Enabled',
            off: 'Disabled'
        });
    })

    //get data toggle
    $('.toggle-class').on('change', function() {
        var satatus = $(this).prop('checked') == true ? 1 : 0; //prop is a slector which slect attribute
        var id = $(this).data('id');
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: 'customer-list/changeStatus',
            data: {
                'satatus': satatus,
                'id': id,
            },
            success: function(data) {
                alert(data.success);

            }


        });
    });
    </script>


    @endsection
