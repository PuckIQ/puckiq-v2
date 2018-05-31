@extends('layouts.app')

@section('content')
    <div class="row">
      <div class="col-sm-12 col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header bg-dark text-white">
            <h3>About PuckIQ</h3>
          </div>
          <div class="card-body">
            <div class="card-text">
              <p class="text-justify">PuckIQ is the result of a series of conversations Ganesh Murdashwar (GMoney - <a href="#">@OilersNerdAlert</a>) and Darcy McLeod (Woodguy) had about Quality of Competition.</p>
              <p class="text-justify">Hockey players will get different results playing against different qualities of players. In order to analyze a player properly it is important to know how often they play against the best NHLers and how often the play against replacement level NHLers as these micro-results will influence the overall results as the accumulate over a season and over a career.</p>
              <p class="text-justify">There is no &quot;Generally Accepted&quot; definition of QoC or metric for QoC. Our goal was to identify the players whose overall results are over 1 standard deviation better than the mean (Elite) and the players whose overall results are below 1 standard deviation worse than the mean (Gritensity). The rest are left in the middle.</p>
              <p class="text-justify">You can read about our methods and results <a href="http://becauseoilers.blogspot.ca/2016/07/woodmoney-new-quality-of-competition.html">here</a>.</p>
              <p class="text-justify">Ganesh was the brain behind creating the database for the site and creating all the code for WoodMoney QoC.</p>
              <p class="text-justify">We were beyond lucky to be joined by the very talented Zsolt Munoz <a href="#">@OilFanInYYC</a> and Derek Blasutti <a href="#">@dawgbone98</a>. Zsolt designed and coded the infrastructure of the site and Derek was the developer.</p>
              <p class="text-justify">Zsolt then took the bull by the horns and was both the developer and designed the infrastructure of the this version of PuckIQ.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection