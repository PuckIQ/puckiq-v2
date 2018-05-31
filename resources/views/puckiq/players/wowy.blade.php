<div class="card">
  <div class="card-header bg-primary text-white">
    Player WOWY
  </div>
  <div class="card-body">
    <h5 class="card-title">Options</h5>
    {!! Form::open(['action' => 'PlayerWowyController@store', 'method' => 'POST']) !!}
      <div class="row">
        <div class="col-md-4 col-lg-3">
          {{ Form::bsSelect('Player 1', 'q2player1id', [], ['placeholder' => 'Player Name...']) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsSelect('Player 2', 'q2player2id', [], ['placeholder' => 'Player Name...']) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsNumber('Minimum TOI', 'q3toi', '50', []) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsDate('By Date Range', 'q1datestart', 'q1dateend', \Carbon\Carbon::now(), \Carbon\Carbon::now()) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsSelect('By Season', 'season', [], ['placeholder' => 'Season...']) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsSelect('Position', 'position', [], ['placeholder' => 'Position...']) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsSelect('Display Options', 'display', [], ['placeholder' => 'Stat Type...']) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>