@extends('layouts.base.app')

@section('title', 'Homepage')

@section('content')
    <div>
        <div class="d-flex justify-content-between align-items-center">
            <div class="fw-bold">
                Showing 577 search results
            </div>
            <div class="d-flex">
                <select id="sort" name="sort" class="form-select w-100">
                    <option value="n">Sort by: Newest</option>
                    <option value="o">Sort by: Oldest</option>
                </select>
            </div>
        </div>
        <div class="row mb-5">
            @foreach($adverts as $advert)
                @include('layouts.advertisement.card', ['advert' => $advert])
            @endforeach
        </div>
    </div>
@endsection
