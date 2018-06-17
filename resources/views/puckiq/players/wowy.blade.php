<div class="card">
  <div class="card-header bg-primary text-white">
    Player WOWY
  </div>
  <div class="card-body">
    <h5 class="card-title">Options</h5>
    {!! Form::open(['action' => 'PlayerWowyController@store', 'method' => 'POST', 'id' => 'wowyform']) !!}
      <div class="row">
        <div class="col-md-4 col-lg-3">
          {{ Form::bsSelect('Player 1', 'q2player1id', [], ['placeholder' => 'Player Name...', 'id' => 'pq-player1name']) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsSelect('Player 2', 'q2player2id', [], ['placeholder' => 'Player Name...', 'id' => 'pq-player2name']) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsNumber('Minimum TOI', 'q3toi', '50', []) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsDate('By Date Range', 'q1date', '', ['max' => date('Y-m-d')]) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsSelect('By Season', 'season', [], ['placeholder' => 'Season...', 'id' => 'pq-season']) }}
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

@section('scripts')

    <script>
      $(document).ready(function() {

        $('#pq-player1name, #pq-player2name').select2({
          placeholder: {
            id: -1,
            text: 'Player Name...',
          },
          theme: "bootstrap4",
          ajax: {
            url: 'http://api.puckiq.org/puckiq/0/players/getPlayerSearch',
            dataType: 'json',
            delay: 250,
            data: function (params) {
              return {
                fullName: params.term
              }
            },
            processResults: function (data, params) {
              return {
                results: $.map(data, function (item) {
                  return {
                    text: item.fullName,
                    id: item.playerid
                  }
                })
              }
            },
            cache: false
          },
          allowClear: true
        });

        $('#pq-dateend').on('change', function() {
          $('#pq-datestart').prop('max', $('#pq-dateend').val());
          if($(this).val() != '') {
            $('#pq-season').prop('disabled', true);
          } else {
            $('#pq-season').prop('disabled', false);
          }
        });

        $('#pq-datestart').on('change', function() {
          $('#pq-dateend').prop('min', $('#pq-datestart').val());
          if($(this).val() != '') {
            $('#pq-season').prop('disabled', true);
          } else {
            $('#pq-season').prop('disabled', false);
          }
        });
      });
    </script>

@endsection