@extends('layouts.base')

@section('body')
<div class="row column">

    <h1>Todo Lists</h1>

    <a href="{{ route('todolists.create') }}" class="button small">Add New</a>

    <table>
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Name 1</td>
            </tr>
            <tr>
                <td>Name 2</td>
            </tr>
        </tbody>
    </table>

</div>
@endsection
