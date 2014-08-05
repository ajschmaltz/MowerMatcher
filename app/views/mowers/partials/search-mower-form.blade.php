<div class="pad">

  <h2>Search</h2>

  {{ Form::open(['method' => 'get']) }}

    <!-- Make Form Input -->
    <div class="form-group">
      {{ Form::label('mower_make[in][value]', 'Make:') }}
      {{ Form::text('mower_make[in][value]', Input::get('mower_make')['in']['value'], ['class' => 'form-control']) }}
    </div>

    <!-- Cutting Width Form Input -->
    <div class="form-group">
      {{ Form::label('cutting_width[in][value]', 'Cutting Width:') }}
      {{ Form::text('cutting_width[in][value]', Input::get('cutting_width')['in']['value'], ['class' => 'form-control']) }}
    </div>

    <div class="row">
      <div class="col-md-6">

        <!-- Min Price Form Input -->
        <div class="form-group">
          {{ Form::label('price[between][min]', 'Min. Price:') }}
          {{ Form::text('price[between][min]', Input::get('price')['between']['min'], ['class' => 'form-control']) }}
        </div>

      </div>
      <div class="col-md-6">

        <!-- Max Price Form Input -->
        <div class="form-group">
          {{ Form::label('price[between][max]', 'Max. Price:') }}
          {{ Form::text('price[between][max]', Input::get('price')['between']['max'], ['class' => 'form-control']) }}
        </div>

      </div>
    </div>

    <!-- Style Form Input -->
    <div class="form-group">
      {{ Form::label('style[in][value]', 'Style:') }}
      {{ Form::select('style[in][value]', array('' => '-- Any --', 'Walk Behind' => 'Walk Behind', 'Stand On' => 'Stand On', 'Zero Turn' => 'Zero Turn'), Input::get('style')['in']['value'], ['class' => 'form-control']) }}
    </div>

    <!-- Use Form Input -->
    <div class="form-group">
      {{ Form::label('use[in][value]', 'Use:') }}
      {{ Form::select('use[in][value]', array('' => '-- Any --', 'Residential' => 'Residential', 'Commercial' => 'Commercial'), Input::get('use')['in']['value'], ['class' => 'form-control']) }}
    </div>

    <!-- Engine Make Form Input -->
    <div class="form-group">
      {{ Form::label('engine_make[in][value]', 'Engine Make:') }}
      {{ Form::select('engine_make[in][value]', array('' => '-- Any --', 'Briggs & Stratton' => 'Briggs & Stratton', 'Honda' => 'Honda', 'Kawasaki' => 'Kawasaki', 'Kohler' => 'Kohler', 'Subaru' => 'Subaru', 'Tecumseh' => 'Tecumseh', 'Toro' => 'Toro'), Input::get('engine_make')['in']['value'], ['class' => 'form-control']) }}
    </div>

    <!-- Form Submit -->
    <div class="form-group">
      {{ Form::submit('Search', ['class' => 'btn btn-success']) }}
    </div>

  {{ Form::close() }}

</div>