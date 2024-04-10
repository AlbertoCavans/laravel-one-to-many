@extends('layouts.app')

@section('title', 'List Type')

@section('content')

<section>
    <div class="container">
    <a href="{{ route("admin.types.create") }}" class="btn btn-success my-3"><i class="fa-solid fa-upload me-2"></i>Add new type</a>
        <h1>List Types</h1>

        <table class="table table-striped border">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Label</th>
                    <th>Color</th>
                    <th>Badge</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse($types as $type)
                   <tr>
                       <td>{{ $type->id }}</td>
                       <td>{{ $type->label }}</td>
                       <td>{{ $type->color }}</td>
                       <td>{!! $type->getBadge() !!}</td>
                       <td></td>
                       
                   </tr>
                @empty
                   <tr>
                       <td colspan="100%">
                           <span>Nessun risultato trovato</span>
                       </td>
                   </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>

@endsection

@section("css")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection