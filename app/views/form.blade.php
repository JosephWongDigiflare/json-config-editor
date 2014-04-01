<!-- app/views/form.blade.php -->

{{ Form::open(array('url' => 'my/route')) }}
    {{ Form::label('first_name', 'First Name') }}
    {{ Form::text('first_name', 'Taylor Otwell') }}
    {{ Form::label('secret', 'Super Secret') }}
    {{ Form::password('secret') }}

    {{ Form::label('pandas_are_cute', 'Are pandas cute?') }}
    {{ Form::checkbox('pandas_are_cute', '1', true) }}

    {{ Form::label('panda_colour', 'Pandas are?') }}
    {{ Form::radio('panda_colour', 'red', true) }} Red
    {{ Form::radio('panda_colour', 'black') }} Black
    {{ Form::radio('panda_colour', 'white') }} White	


    {{ Form::label('bear', 'Bears are?') }}
    {{ Form::select('bear', array(
        'Panda' => array(
            'red'       => 'Red',
            'black'     => 'Black',
            'white'     => 'White'
        ),
        'Character' => array(
            'pooh'      => 'Pooh',
            'baloo'     => 'Baloo'
        )
    ), 'black') }}

	{{ Form::reset('Clear') }}
{{ Form::close() }}


{{ Form::open(array(
    'url'   => 'my/route',
    'files' => true
)) }}
    {{ Form::label('avatar', 'Avatar') }}
    {{ Form::file('avatar') }}
{{ Form::close() }}

{{ Form::open(array('url' => 'my/route')) }}
    {{ Form::hidden('panda', 'luishi') }}
{{ Form::close() }}

{{ Form::open(array('url' => 'test')) }}
    {{ Form::submit('Save') }}
{{ Form::close() }}