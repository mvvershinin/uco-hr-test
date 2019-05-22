@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div  class="col-lg-12">
                <div class="table-responsive ajaxTable">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>age</th>
                            <th>eyeColor</th>
                            <th>name</th>
                            <th>gender</th>
                            <th>company</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>address</th>
                        </tr>
                        </thead>
                        <tbody class="ajaxTableBody">

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
