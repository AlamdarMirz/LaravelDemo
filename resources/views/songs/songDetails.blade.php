@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Songs Details') }}</div>

                    <div class="card-body">
                        <table class="table table-bordered">

                            <tr>
                                <td>Song Name</td>
                                <td><b>{{ $songDetail[0]->name }}</b></td>
                            </tr>
                            <tr>
                                <td>Artist</td>
                                <td><b>{{ $songDetail[0]->artist }}</b></td>
                            </tr>
                            @php
                                $metadata = $songDetail[0]->metadata;
                                $metadata = json_decode($metadata);
                            @endphp
                            @foreach($metadata as $key => $value)
                                @php
                                    $key = str_replace('_', ' ', $key);
                                    $key = ucfirst($key);
                                @endphp
                                <tr>
                                    <td>{{$key}}</td>
                                    <td><b>{{$value}}</b></td>
                                </tr>

                            @endforeach
                            <tr>
                                <td>Album Name</td>
                                <td><a href="{{ URL::to("albums/{$songDetail[0]->album_id}") }}">Album Link</a></td>
                            </tr>
                        </table>



                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container pb-cmnt-container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @foreach($comments as $key => $value)
                <div class="card p-3 mt-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="user d-flex flex-row align-items-center">
                            <img src="{{asset('assets/images/user.png')}}" width="30" class="user-img rounded-circle mr-2">
                            <span>
                                <small class="font-weight-bold text-primary">{{ $value->name }}</small>
                                <small class="font-weight-bold">{{ $value->message }} </small>
                             </span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container pb-cmnt-container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-info">
                    <div class="card-block">
                        <form method="post" class="form-inline" action="{{ route('comments.store') }}">
                            @csrf
                            <input type="hidden" name="song_id" value="{{ $songDetail[0]->id }}" />
                            <textarea placeholder="Write your comment here!" name="message" class="pb-cmnt-textarea"></textarea>
                            <button class="btn btn-primary float-xs-right" type="submit" style="margin:10px;">Share</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .pb-cmnt-container {
            font-family: Lato;
            margin-top: 100px;
        }

        .pb-cmnt-textarea {
            resize: none;
            padding: 20px;
            height: 130px;
            width: 100%;
            border: 1px solid #F2F2F2;
        }
    </style>

@endsection
