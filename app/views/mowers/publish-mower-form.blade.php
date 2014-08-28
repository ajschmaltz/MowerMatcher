@include('layouts.partials.errors')

<div class="mower-post pad" ng-controller="postImageController" flow-init="{target: '/uploader'}" flow-files-submitted="$flow.upload()">

  {{ Form::open(['name' => 'publishMowerForm', 'route' => 'mowers_path', 'unsaved-warning-form', 'class' => 'form font-large']) }}

    <fieldset>

      <legend>Mower Information</legend>

      <div class="row">
        <div class="col-md-6">

          <!-- Make Form Input -->
          <div class="form-group">
            {{ Form::label('mower_make', 'Make:') }}
            {{ Form::text('mower_make', null, ['required', 'ng-model' => 'mower_make', 'class' => 'form-control']) }}
          </div>

        </div>
        <div class="col-md-6">

          <!-- Model Form Input -->
          <div class="form-group">
            {{ Form::label('mower_model', 'Model:') }}
            {{ Form::text('mower_model', null, ['ng-model' => 'mower_model', 'class' => 'form-control']) }}
          </div>

        </div>
      </div>

      <div class="row">
        <div class="col-md-6">

          <!-- Style Form Input -->
          <div class="form-group">
            {{ Form::label('style', 'Style:') }}
            {{ Form::select('style', array('Walk Behind' => 'Walk Behind', 'Stand On' => 'Stand On', 'Zero Turn' => 'Zero Turn'), null, ['required', 'ng-model' => 'style', 'class' => 'form-control']) }}
          </div>

        </div>
        <div class="col-md-6">

          <!-- Use Form Input -->
          <div class="form-group">
            {{ Form::label('use', 'Use:') }}
            {{ Form::select('use', array('Residential' => 'Residential', 'Commercial' => 'Commercial'), null, ['ng-model' => 'use', 'class' => 'form-control']) }}
          </div>

        </div>
      </div>

      <div class="row">
        <div class="col-md-4">

          <!-- Year Form Input -->
          <div class="form-group">
            {{ Form::label('year', 'Year:') }}
            {{ Form::text('year', null, ['ng-model' => 'year', 'class' => 'form-control']) }}
          </div>

        </div>
        <div class="col-md-4">

          <!-- Cutting Width Form Input -->
          <div class="form-group">
            {{ Form::label('cutting_width', 'Cutting Width:') }}
            <div class="input-group">
              {{ Form::text('cutting_width', null, ['required', 'ng-model' => 'cutting_width', 'class' => 'form-control']) }}
              <span class="input-group-addon">"</span>
            </div>
          </div>

        </div>

        <div class="col-md-4">

        <!-- Price Form Input -->
        <div class="form-group">
          {{ Form::label('price', 'Price:') }}
          <div class="input-group">
            <span class="input-group-addon">$</span>
            {{ Form::text('price', null, ['required', 'ng-model' => 'price', 'class' => 'form-control']) }}
            <span class="input-group-addon">.00</span>
          </div>
        </div>

      </div>

      </div>

    </fieldset>

    <hr/>

    <fieldset>

      <legend>Engine Information</legend>

      <div class="row">
        <div class="col-md-6">

          <!-- Engine Make Form Input -->
          <div class="form-group">
            {{ Form::label('engine_make', 'Engine Make:') }}
            {{ Form::select('engine_make', array('Briggs & Stratton' => 'Briggs & Stratton', 'Honda' => 'Honda', 'Kawasaki' => 'Kawasaki', 'Kohler' => 'Kohler', 'Subaru' => 'Subaru', 'Tecumseh' => 'Tecumseh', 'Toro' => 'Toro'), null, ['required', 'ng-model' => 'engine_make', 'class' => 'form-control']) }}
          </div>

        </div>
        <div class="col-md-6">

          <!-- Engine Model Form Input -->
          <div class="form-group">
            {{ Form::label('engine_model', 'Engine Model:') }}
            {{ Form::text('engine_model', null, ['ng-model' => 'engine_model', 'class' => 'form-control']) }}
          </div>

        </div>
      </div>

      <div class="row">
        <div class="col-md-6">

          <!-- Engine Hours Form Input -->
          <div class="form-group">
            {{ Form::label('engine_hours', 'Hours:') }}
            {{ Form::text('engine_hours', null, ['ng-model' => 'engine_hours', 'class' => 'form-control']) }}
          </div>

        </div>
      </div>


    </fieldset>



    <hr/>

    <!-- Description Form Input -->
    <div class="form-group">
      {{ Form::label('body', 'Details:') }}
      {{ Form::textarea('body', null, ['ng-model' => 'body', 'class' => 'form-control', 'rows' => 3, 'placeholder' => 'Add any important details here...']) }}
    </div>

    <!-- Images Form Input -->
    {{ Form::label('imageIds', 'Images:') }}
    <div class="mower-post-gallery">
      <div class="mower-post-gallery-item" class="thumbnail" ng-show="$flow.files.length" ng-repeat="file in $flow.files" image-field>
      </div>
    </div>
    <br/>
    {{ Form::button('<span class="glyphicon glyphicon-camera"></span> Add Picture', ['flow-btn', 'flow-attrs' => "{accept:'image/*'}", 'class' => 'btn btn-default']) }}

    <hr/>

    <div class="form-group">
      {{ Form::label('location', 'Location:') }}
      <google-map center="map.center" zoom="map.zoom" draggable="true" options="options">
          <marker ng-if="marker" coords="marker.coords" options="marker.options" events="marker.events" idkey="marker.id" >
          </marker>
      </google-map>
    </div>

    <hr/>

    <!-- Form Submit -->
    <div class="form-group">
      {{ Form::submit('Post Mower', ['ng-disabled' => 'disableForm', 'class' => 'btn btn-success']) }}
    </div>
  {{ Form::close() }}
</div>