<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{{ trans('panel.Test No') }}. {{ $result->id }}</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
        <style type="text/css">
            html {
                margin: 0;
            }
            body {
                background-color: #FFFFFF;
                font-size: 10px;
                margin: 36pt;
            }
        </style>
    </head>
    <body>
        <p class="mt-5">{{ trans('panel.Total points') }}: {{ $result->total_points }} {{ trans('panel.points') }}</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>{{ trans('panel.Question Text') }}</th>
                    <th>{{ trans('panel.Points') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($result->questions as $question)
                    <tr>
                        <td>{{ $question->question_text }}</td>
                        <td>{{ $question->pivot->points }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>