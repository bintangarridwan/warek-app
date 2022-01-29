@extends('layouts.main')
@section('container')
    <table class="table table-striped table-dark">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="text-white">
            <tr>
                <th scope="row">1</th>
                <td>Jason</td>
                <td>Erano</td>
                <td>Jason@mail.com</td>
                <td>male</td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Cecilia</td>
                <td>Yue</td>
                <td>cecil.yue@mail.com</td>
                <td>female</td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Bruno</td>
                <td>walazky</td>
                <td>brunowalaz@mail.com</td>
                <td>male</td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Jennie</td>
                <td>Swakovaz</td>
                <td>jenvaz@mail.com</td>
                <td>female</td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
@endsection