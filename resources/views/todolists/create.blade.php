@extends('layouts.base')

@section('body')
<div class="row column">

    <h1>Add New Todo List</h1>

    <form method="POST" action="{{ route('todolists.store') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="columns">
                <label>Input Label
                    <input type="text" placeholder="Todo List Name" />
                </label>
            </div>
        </div>
        <div class="row">
            <div class="columns">
                <input type="submit" class="button" value="Submit" />
            </div>
        </div>

    </form>

</div>
@endsection
