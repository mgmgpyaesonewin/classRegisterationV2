@extends('layouts.app')

@section('content')
<div class="section">
  <div class="column is-half is-offset-one-quarter">
    <div class="card">
      <header class="card-header">
        <p class="card-header-title">
          Course Registeration
        </p>
      </header>
      <div class="card-content">
        <div class="content">
          <form action="">
            <div class="field is-horizontal">
              <div class="field-label is-normal">
                <label class="label">Course Name</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <input class="input is-danger" type="text" placeholder="e.g. Partnership opportunity" name="course_name">
                  </div>
                  <p class="help is-danger">
                    This field is required
                  </p>
                </div>
              </div>
            </div>

            <div class="field is-horizontal">
              <div class="field-label is-normal">
                <label class="label">Course Level</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <input class="input is-danger" type="text" placeholder="e.g. Partnership opportunity" name="course_level">
                  </div>
                  <p class="help is-danger">
                    This field is required
                  </p>
                </div>
              </div>
            </div>

            <div class="field is-horizontal">
              <div class="field-label">
                <!-- Left empty for spacing -->
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <button class="button is-primary">
                      Send message
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection