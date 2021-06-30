@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Albums') }}</div>

                <div class="card-body">

                    <table class="table table-bordered">

                        <tbody>
                        @if(!empty($data) && $data->count())
                            @foreach($data as $key => $value)
                                <tr>
                                    <td><a href="{{ URL::to("albums/{$value->id}") }}">{{ $value->name }}</a></td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="10">There are no data.</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>

                    {!! $data->links() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
