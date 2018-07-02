<div class="card">
  <div class="card-header bg-primary text-white">
    Player WOWY
  </div>
  <div class="card-body">
    <h5 class="card-title">Options</h5>
    {!! Form::open(['action' => 'PlayerWowyController@store', 'method' => 'POST', 'id' => 'wowyform']) !!}
      <div class="row">
        <div class="col-md-4 col-lg-3">
          {{ Form::bsTypeahead('Player 1', 'q2player1id', null, ['placeholder' => 'Player Name...', 'id' => 'pq-player1name', 'data-provide' => 'typeahead', 'autocomplete' => 'off']) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsTypeahead('Player 2', 'q2player2id', null, ['placeholder' => 'Player Name...', 'id' => 'pq-player2name', 'data-provide' => 'typeahead', 'autocomplete' => 'off']) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsNumber('Minimum TOI', 'q3toi', '50', []) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsDate('By Date Range', 'q1date', '', []) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsSelect('By Season', 'q2season', [], ['id' => 'pq-season', 'multiple' => 'multiple']) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsSelect('By Position', 'q3postype[]', [], ['id' => 'pq-postype', 'multiple' => 'multiple']) }}
        </div>
        <div class="col-md-4 col-lg-3">
          {{ Form::bsSelect('By Stat', 'q3stattype[]', [], ['id' => 'pq-stattype', 'multiple' => 'multiple']) }}
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

        $('#pq-player1name').typeahead({
          source: function(request, response) {
            $.ajax({
              url: 'http://api.puckiq.org/puckiq/0/players/getPlayerSearch',
              dataType: 'json',
              data: {
                fullName: $('#pq-player1name').val()
              },
              success: function(data) {
                response(data);
              }
            });
          },
          autoSelect: true,
          displayText: function (item) {
            return item.fullName;
          },
          afterSelect: function(item) {
            $('#q2player1id_val').val(item.playerid)
          }
        });

        $('#pq-player2name').typeahead({
          source: function(request, response) {
            $.ajax({
              url: 'http://api.puckiq.org/puckiq/0/players/getPlayerSearch',
              dataType: 'json',
              data: {
                fullName: $('#pq-player2name').val()
              },
              success: function(data) {
                console.log(data);
                response(data);
              }
            });
          },
          autoSelect: true,
          displayText: function (item) {
            return item.fullName;
          },
          afterSelect: function(item) {
            $('#q2player2id_val').val(item.playerid)
          }
        });

        var postype = [
          { id: 'D', text: 'Defense' },
          { id: 'G', text: 'Goalie' },
          { id: 'L', text: 'Left Wing' },
          { id: 'R', text: 'Right Wing' },
          { id: 'C', text: 'Centre' }
        ];

        var stattype = [
          { id: 'G', text: 'Goals' },
          { id: 'S', text: 'Shots' },
          { id: 'C', text: 'Corsi' },
          { id: 'F', text: 'Fenwick' },
          { id: 'D', text: 'Dangerous' },
          { id: 'A', text: 'Score Adjusted' },
          { id: 'Z', text: 'Zone Start' }
        ];

        var seasons = [
          '20162017',
          '20172018'
        ];

        $('#q1date')
          .daterangepicker({
            opens: 'left',
            autoUpdateInput: false,
            locale: {
              cancelLabel: 'Clear',
              format: 'YYYY-MM-DD'
            }
          }, function(start, end, label) {
            $('#pq-datestart').val(start.format('YYYY-MM-DD'));
            $('#pq-dateend').val(end.format('YYYY-MM-DD'));
            $('#pq-season').prop('disabled', true);
          })
          .on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
            $('#pq-season').prop('disabled', false);
          })
          .on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MMM D, YYYY') + ' to ' + picker.endDate.format('MMM D, YYYY'));
            $('#pq-season').prop('disabled', true);
          });

        $.each(postype, function(key, value) {
          $('#pq-postype')
            .append($('<option></option>')
              .prop('value', value.id)
              .text(value.text)
          );
        });

        $.each(stattype, function(key, value) {
          $('#pq-stattype')
            .append($('<option></option>')
              .prop('value', value.id)
              .text(value.text)
          );
        })

        $.each(seasons, function(key, value) {
          $('#pq-season')
            .append($('<option></option>')
              .prop('value', value)
              .text(value)
            );
        })

        $('#pq-postype').selectpicker({
          noneSelectedText: 'Position...',
          style: 'puckiq-select'
        });

        $('#pq-stattype').selectpicker({
          noneSelectedText: 'Display Stat...',
          style: 'puckiq-select'
        });

        $('#pq-season').selectpicker({
          noneSelectedText: 'Season...',
          style: 'puckiq-select'
        });

        // Figure out AJAX for player search
      });
    </script>

@endsection