<div class="card">
  <div class="card-header bg-primary text-white">
    Player Boxcars
  </div>
  <div class="card-body">
    <h5 class="card-title">Options</h5>
    {!! Form::open(['action' => 'PlayerBoxcarsController@store', 'method' => 'POST']) !!}
      <div class="row">
        <div class="col-md-4 col-lg-3">
          {{ Form::bsText('Player 1', 'player1name', '', ['placeholder' => 'Player Name...']) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsText('Player 2', 'player2name', '', ['placeholder' => 'Player Name...']) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsNumber('Minimum TOI', 'toi', '50', []) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsDate('By Date Range', 'date1', 'date2', \Carbon\Carbon::now(), \Carbon\Carbon::now()) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsText('By Season', 'season', '', ['placeholder' => 'Season...']) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsText('Position', 'position', '', ['placeholder' => 'Position...']) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsText('Display Options', 'display', '', ['placeholder' => 'Stat Type...']) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>