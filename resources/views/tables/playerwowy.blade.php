@php
  function wowyBuilder($data) {
    $wowy = array();

    for($x = 0; $x < count($data); $x++) {
      $wowyData = $data[$x];
      $wowyType = 0;
      if($x == 0) {
        $wowy[1] = "";
        $wowy[1] .= '<td class="pq-col-200"><i class="fa fa-external-link" aria-hidden="true"></i> <a href="/player-data/' . $wowyData->pinfo->p2id . '">' . $wowyData->pinfo->p2fullname . '</a></td>';
        if(isset($wowyData->pinfo->season))
          $wowy[1] .= '<td class="pq-col-50">' . $wowyData->pinfo->season . '</td>';
        $wowy[1] .= '<td class="pq-col-50">' . $wowyData->pinfo->team . '</td>';
        $wowy[1] .= '<td class="pq-col-50">' . join($wowyData->pinfo->p2possible, ',') . '</td>';
      }

      switch ($wowyData->pinfo->wowytype) {
        case '1 and 2':
          $wowyType = 2;
          break;
        case '1 not 2':
          $wowyType = 3;
          break;
        case '2 not 1':
          $wowyType = 4;
          break;
      }

      $wowy[$wowyType] = '<td class="text-right pq-col-50">' + $wowyData->evtoi . '</td>';
      //if(getDisplayType('G', pqdisplay)) {
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . $wowyData->gf . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . $wowyData->ga . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->gfpct, 1, ".", "") . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->gf60, 1, ".", "") . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->ga60, 1, ".", "") . '</td>';
      //}
      //if(getDisplayType('S', pqdisplay)) {
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . $wowyData->sf + '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . $wowyData->sa + '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->sfpct, 1, ".", "") . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->sf60, 1, ".", "") . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->sa60, 1, ".", "") . '</td>';
      //}
      //if(getDisplayType('C', pqdisplay)) {
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . $wowyData->cf + '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . $wowyData->ca + '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->cfpct, 1, ".", "") . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->cf60, 1, ".", "") . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->ca60, 1, ".", "") . '</td>';
      //}
      //if(getDisplayType('F', pqdisplay)) {
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . $wowyData->ff + '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . $wowyData->fa + '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->ffpct, 1, ".", "") . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->ff60, 1, ".", "") . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->fa60, 1, ".", "") . '</td>';
      //}
      //if(getDisplayType('D', pqdisplay)) {
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->dff, 1, ".", "") . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->dfa, 1, ".", "") . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->dffpct, 1, ".", "") . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->dff60, 1, ".", "") . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->dfa60, 1, ".", "") . '</td>';
      //}
      //if(getDisplayType('A', pqdisplay)) {
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->sacf, 1, ".", "") . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->saca, 1, ".", "") . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->sacfpct, 1, ".", "") . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->sacf60, 1, ".", "") . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->saca60, 1, ".", "") . '</td>';
      //}
      //if(getDisplayType('Z', pqdisplay)) {
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . $wowyData->oz + '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->ozpct, 1, ".", "") . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->oz60, 1, ".", "") . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . $wowyData->dz + '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->dzpct, 1, ".", "") . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->dz60, 1, ".", "") . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . $wowyData->nz + '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->nzpct, 1, ".", "") . '</td>';
        $wowy[$wowyType] .= '<td class="text-right pq-col-50">' . number_format($wowyData->nz60, 1, ".", "") . '</td>';
      //}
    }

    return $wowy;
  }
@endphp

<ul class="nav nav-pills nav-justified" role="tablist">
@for ($x = 0; $x < count($withWithout); $x++)
  <li class="nav-item">
    <a href="#pq-{{$withWithout[$x]['id']}}" id="pq-{{$withWithout[$x]['id']}}-tab" class="nav-link {{ $x == 0 ? 'active' : null}}" data-toggle="pill" aria-controls="pills-{{$withWithout[$x]['id']}}" aria-selected="{{ $x == 0 ? 'true' : 'false'}}">{{$withWithout[$x]['title']}}</a>
  </li>
@endfor
</ul>

<div class="tab-content">
@for ($x = 0; $x < count($withWithout); $x++)
  <div class="tab-pane fade {{ $x == 0 ? 'show active' : null }}" id="pq-{{ $withWithout[$x]['id'] }}" role="tabpanel" aria-labelledby="pills-{{ $withWithout[$x]['id'] }}-tab">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Player</th>
          <th>Position</th>
          <th>Team</th>
          <th>EV TOI</th>
          <!-- Display Type G -->
          <th>GF</th>
          <th>GA</th>
          <th>GF%</th>
          <th>GF/60</th>
          <th>GA/60</th>
          <!-- Display Type S -->
          <th>SF</th>
          <th>SA</th>
          <th>SF%</th>
          <th>SF/60</th>
          <th>SA/60</th>
          <!-- Display Type C -->
          <th>CF</th>
          <th>CA</th>
          <th>CF%</th>
          <th>CF/60</th>
          <th>CA/60</th>
          <!-- Display Type F -->
          <th>FF</th>
          <th>FA</th>
          <th>FF%</th>
          <th>FF/60</th>
          <th>FA/60</th>
          <!-- Display Type DF -->
          <th>DFF</th>
          <th>DFA</th>
          <th>DFF%</th>
          <th>DFF/60</th>
          <th>DFA/60</th>
          <!-- Display Type SA -->
          <th>SACF</th>
          <th>SACA</th>
          <th>SACF%</th>
          <th>SACF/60</th>
          <th>SACA/60</th>
          <!-- Display Type ZS -->
          <th>OZ</th>
          <th>OZ%</th>
          <th>OZ/60</th>
          <th>DZ</th>
          <th>DZ%</th>
          <th>DZ/60</th>
          <th>NZ</th>
          <th>NZ%</th>
          <th>NZ/60</th>
        </tr>
      </thead>
      <tbody>
      @for ($i = 0; $i < count($playerWowy); $i++)
        @for ($w = 0; $w < count($playerWowy[$i]->wowy); $w++)
          @php
            $currentWowy = $playerWowy[$i]->wowy[$w];
          @endphp
          @if ($currentWowy->pinfo->wowytype === $withWithout[$x]['type'])
            <tr>
              <td>{{ $currentWowy->pinfo->p2fullname }}</td>
              <td>{{ join($currentWowy->pinfo->p2possible, ',') }}</td>
              <td>{{ $currentWowy->pinfo->team }}</td>

              <td>{{ $currentWowy->evtoi }}</td>

              <td>{{ $currentWowy->gf }}</td>
              <td>{{ $currentWowy->ga }}</td>
              <td>{{ number_format($currentWowy->gfpct, "1", ".", "") }}</td>
              <td>{{ number_format($currentWowy->gf60, "1", ".", "") }}</td>
              <td>{{ number_format($currentWowy->ga60, "1", ".", "") }}</td>

              <td>{{ $currentWowy->sf }}</td>
              <td>{{ $currentWowy->sa }}</td>
              <td>{{ number_format($currentWowy->sfpct, "1", ".", "") }}</td>
              <td>{{ number_format($currentWowy->sf60, "1", ".", "") }}</td>
              <td>{{ number_format($currentWowy->sa60, "1", ".", "") }}</td>

              <td>{{ $currentWowy->cf }}</td>
              <td>{{ $currentWowy->ca }}</td>
              <td>{{ number_format($currentWowy->cfpct, "1", ".", "") }}</td>
              <td>{{ number_format($currentWowy->cf60, "1", ".", "") }}</td>
              <td>{{ number_format($currentWowy->ca60, "1", ".", "") }}</td>

              <td>{{ $currentWowy->ff }}</td>
              <td>{{ $currentWowy->fa }}</td>
              <td>{{ number_format($currentWowy->ffpct, "1", ".", "") }}</td>
              <td>{{ number_format($currentWowy->ff60, "1", ".", "") }}</td>
              <td>{{ number_format($currentWowy->fa60, "1", ".", "") }}</td>

              <td>{{ number_format($currentWowy->dff, "1", ".", "") }}</td>
              <td>{{ number_format($currentWowy->dfa, "1", ".", "") }}</td>
              <td>{{ number_format($currentWowy->dffpct, "1", ".", "") }}</td>
              <td>{{ number_format($currentWowy->dff60, "1", ".", "") }}</td>
              <td>{{ number_format($currentWowy->dfa60, "1", ".", "") }}</td>

              <td>{{ number_format($currentWowy->sacf, "1", ".", "") }}</td>
              <td>{{ number_format($currentWowy->saca, "1", ".", "") }}</td>
              <td>{{ number_format($currentWowy->sacfpct, "1", ".", "") }}</td>
              <td>{{ number_format($currentWowy->sacf60, "1", ".", "") }}</td>
              <td>{{ number_format($currentWowy->saca60, "1", ".", "") }}</td>

              <td>{{ $currentWowy->oz }}</td>
              <td>{{ number_format($currentWowy->ozpct, "1", ".", "") }}</td>
              <td>{{ number_format($currentWowy->oz60, "1", ".", "") }}</td>
              <td>{{ $currentWowy->dz }}</td>
              <td>{{ number_format($currentWowy->dzpct, "1", ".", "") }}</td>
              <td>{{ number_format($currentWowy->dz60, "1", ".", "") }}</td>
              <td>{{ $currentWowy->nz }}</td>
              <td>{{ number_format($currentWowy->nzpct, "1", ".", "") }}</td>
              <td>{{ number_format($currentWowy->nz60, "1", ".", "") }}</td>
            </tr>
          @endif
        @endfor
      @endfor
      </tbody>
    </table>
  </div>
@endfor
</div>