@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column container-fluid">
        <form method="post">
            @csrf
            <div>
                <label for="description">Saisir un nouveau gage ci-dessous puis choisir dans la liste lequel remplacer.</label>
                <input required pattern=".{10,}" name="description" class="form-control container-fluid mb-5"/>
            </div>
            @foreach($customForfeits as $forfeit)

                <div class="d-flex flex-row pb-2">
                    <button type="submit" name="score" value="{{$forfeit->score}}" class="btn-primary mr-2">remplacer <span class="badge badge-primary ml-1">{{$forfeit->score}}</span></button>
                    <div class="flex-grow-1">
                        {{$forfeit->description_fr ?: 'Relancez !'}}
                    </div>
                </div>
            @endforeach
        </form>
    </div>
@endsection
