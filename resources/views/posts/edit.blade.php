@extends('main')

@section('title', '| Edit Blog Post')

@section('content')

    <div class="row">
        {!! Form::model($post, [
                'route' => ['posts.update', $post->id],
                'method' => 'PUT'
            ]) !!}

        <div class="col-md-8">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, ['class' => 'form-control input-lg', 'required' => '', 'maxlength' => '255']) }}

            {{ Form::label('slug', 'Slug:', ['class' => 'form-spacing-top']) }}
            {{ Form::text('slug', null, ['class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255']) }}

            {{ Form::label('body', 'Body:', ['class' => 'form-spacing-top']) }}
            {{ Form::textarea('body', null, ['class' => 'form-control']) }}
        </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{ date("M j, Y h:i a", strtotime($post->created_at)) }}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{ date("M j, Y h:i a", strtotime($post->updated_at)) }}</dd>
                </dl>

                <hr>

                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                    </div>

                    <div class="col-sm-6">
                        {!! Form::submit('Save', array('class' => 'btn btn-success btn-block')) !!}
                    </div>
                <div> 
            </div>
        </div>

        {!! Form::close() !!}
    </div> <!-- end of .row (form) -->

@endsection