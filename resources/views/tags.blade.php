@extends('layouts.app')

@section('content')
@extends('layouts.menu')
<div class="container col-md-12">
  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Tags</div>
          <div class="panel-body">
            <table class="table table-hover table-striped">
              <thead>
                <th>Tag ID</th>
                <th>Tag Naam</th>
              </thead>
              <tbody>
                @foreach($result as $tags)
                  <tr>
                    <td>{{ $tags->id}}</td>
                    <td>{{ $tags->tag_name}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Maak een nieuwe tag aan</div>
          <div class="panel-body">
              <tbody>
                {!! Form::open(array('url' => 'tag', 'required')) !!}
                  <div class="form-group">
                    @if ((session()->has('error')))
                      <p style="color:red;">Er is een fout opgetreden.</p>
                    @endif
                      {!! Form::label('name', 'Tag naam:') !!}
                      {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Vul hier de naam van de tag in.', 'required']) !!}
                      </br>
                      {!! Form::submit('Create tag', ['class' => 'btn btn-primary form-control']) !!}
                  </div>
                {!! Form::close() !!}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
