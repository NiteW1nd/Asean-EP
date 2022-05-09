@extends('layout.main')

@section('container')
<script>
function show(shown, hidden) {
  document.getElementById(shown).style.display='block';
  document.getElementById(hidden).style.display='none';
  return false;
}
</script>
</head>
<link href="css/test.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bottom-bar.css" rel="stylesheet" type="text/css" media="all" />
<div class="img">
</div>
@if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
<div class="container quiz">
  @auth
  <form action="/test" method="post">
    @csrf
    <div id="profile">
      <h1>Profile survey</h1>
      <h5>Please tell us more about you</h5>
      <div class="gender form-group" name="gender">
        <label class="title" for="gender">Gender</label><br>
        <span class="custom-control custom-radio custom-control-inline">
          <input class="custom-control-input" type="radio" value="Male" id="male" name="gender">
          <label class="custom-control-label" for="male">Male</label>
        </span>
        <span class="custom-control custom-radio custom-control-inline">
          <input class="custom-control-input" type="radio" value="Female" id="female" name="gender">
          <label class="custom-control-label" for="female">Female</label>
        </span>
      </div>
      <div class="country form-group" name="country">
        <label class="title" for="country">Country</label><br>
        <select class="form-control" name="country" id="country">
        <option value="">Choose</option>
        <option value="1">Brunei Darussalam</option>
        <option value="2">Cambodia </option>
        <option value="3">Indonesia</option>
        <option value="4">Laos</option>
        <option value="5">Malaysia</option>
        <option value="6">Myanmar</option>
        <option value="7">Philippines</option>
        <option value="8">Singapore</option>
        <option value="9">Thailand</option>
        <option value="10">Vietnam</option>
        </select>
      </div>
      <div class="age form-group" name="age">
        <label class="title" for="age">Age</label><br>
        <div class="custom-control custom-radio custom-control-inline">
          <input class="custom-control-input" type="radio" id="age1" name="age" value="18">
          <label class="custom-control-label" for="age1">18 - 25 years old</label><br>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input class="custom-control-input" type="radio" id="age2" name="age" value="26">
          <label class="custom-control-label" for="age2">26 - 35 years old</label><br>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input class="custom-control-input" type="radio" id="age3" name="age" value="36">
          <label class="custom-control-label" for="age3">35 - 45 years old</label><br>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input class="custom-control-input" type="radio" id="age4" name="age" value="45">
          <label class="custom-control-label" for="age4">>45 years old</label><br>
        </div>
      </div>
      <div class="business-type form-group" name="business-type">
        <label class="title" for="business-type">Type of Business</label><br>
        <input type="radio" id="startup" name="business-type" value="Startup">
        <label for="startup">Startup</label><br>
        <input type="radio" id="small industry" name="business-type" value="Small Industry">
        <label for="small industry">Small Industry (Number of employees 5 - 50, the total share capital up 
          to USD 500 thousand)</label><br>
        <input type="radio" id="medium industry" name="business-type" value="Medium Industry">
        <label for="medium industry">Medium Industry (Number of employees 50 - 75, the total share capital 
          up to USD 500 thousand - 2.5 million)</label><br>
        <input type="radio" id="large industry" name="business-type" value="Large Industry">
        <label for="large industry">Large Industry (Number of employees > 75, the total share capital more 
          than USD 2.5 million)</label><br>
      </div>
      <div class="business-field" name="business-field">
        <label class="title" for="business-field">Business Field (choose one)</label><br>
        <input type="radio" id="agricultur" name="business-field" value="Agricultur">
        <label for="agricultur">Agriculture: agriculture, forestry, fisheries, plantations, etc.</label><br>
        <input type="radio" id="mining" name="business-field" value="Mining">
        <label for="mining">Mining Business (Mining): excavating sand, excavating soil, stone, brick, etc.</label><br>
        <input type="radio" id="manufactur" name="business-field" value="Manufactur">
        <label for="manufactur">Manufacturing Business (Manufacturing): industry, assembly, synthesis, etc.</label><br>
        <input type="radio" id="construction" name="business-field" value="Construction">
        <label for="construction">Construction business (construction): construction of buildings, bridges, irrigation, 
          roads, etc.</label><br>
        <input type="radio" id="trade" name="business-field" value="Trade">
        <label for="trade">Trade Business (Trade): small trade (retailer), wholesaler, agent, 
          export-import, etc.</label><br>
        <input type="radio" id="finance" name="business-field" value="Finance">
        <label for="finance">Financial Services Business (Financial Service): banking, insurance, 
          cooperatives, etc.</label><br>
        <input type="radio" id="service" name="business-field" value="Service">
        <label for="service">Personal Service Business: haircut, salon, loundry, catering, etc.</label><br>
        <input type="radio" id="public" name="business-field" value="Public">
        <label for="public">Field of Public Services (Public Service): transportation, warehousing, 
          telephone shops, distribution, etc.</label><br>
        <input type="radio" id="tour" name="business-field" value="Tour">
        <label for="tour">Tourism Services: travel agents, travel agents, guide, intensive travel convection 
          and exhibition, impresariat, tourism consultant, tourism information, etc.</label><br> 
        <input type="radio" id="micro" name="business-field" value="Micro">
        <label for="micro">Micro businesses (culinary, fashion, education, automotive, agribusiness, internet 
          technology, handicrafts, electronics / gadgets)</label><br>
      </div>
      <a href="#">
      <button type="button" class="btn btn-secondary" onclick="return show('question','profile');">Next</button>
    </a>
    </div>
    <div id="question" style="display:none">
      <h1>Survey Questions</h1>
      <h5>Please answer the questions below</h5>
      <div class="quest1">
        <label class="title" for="quest1">Government policies support entrepreneurial development</label><br>
        <input type="radio" id="never" name="quest1" value="1">
        <label for="never">Never</label>
        <input type="radio" id="rarely" name="quest1" value="2">
        <label for="rarely">Rarely</label>
        <input type="radio" id="sometimes" name="quest1" value="3">
        <label for="sometimes">Sometimes</label>
        <input type="radio" id="often" name="quest1" value="4">
        <label for="often">Often</label>
        <input type="radio" id="always" name="quest1" value="5">
        <label for="always">Always</label>
      </div>
      <div class="quest2">
        <label class="title" for="quest2">Government policies make the entrepreneurial climate grow healthily</label><br>
        <input type="radio" id="never2" name="quest2" value="1">
        <label for="never2">Never</label>
        <input type="radio" id="rarely2" name="quest2" value="2">
        <label for="rarely2">Rarely</label>
        <input type="radio" id="sometimes2" name="quest2" value="3">
        <label for="sometimes2">Sometimes</label>
        <input type="radio" id="often2" name="quest2" value="4">
        <label for="often2">Often</label>
        <input type="radio" id="always2" name="quest2" value="5">
        <label for="always2">Always</label>
      </div>
      <div class="quest3">
        <label class="title" for="quest3">The government provides a network for entrepreneurs</label><br>
        <input type="radio" id="never3" name="quest3" value="1">
        <label for="never3">Never</label>
        <input type="radio" id="rarely3" name="quest3" value="2">
        <label for="rarely3">Rarely</label>
        <input type="radio" id="sometimes3" name="quest3" value="3">
        <label for="sometimes3">Sometimes</label>
        <input type="radio" id="often3" name="quest3" value="4">
        <label for="often3">Often</label>
        <input type="radio" id="always3" name="quest3" value="5">
        <label for="always3">Always</label>
      </div>
      <div class="quest4">
        <label class="title" for="quest4">One of the reasons for entrepreneurial success is the network 
          facilitated by the government</label><br>
        <input type="radio" id="never4" name="quest4" value="1">
        <label for="never4">Never</label>
        <input type="radio" id="rarely4" name="quest4" value="2">
        <label for="rarely4">Rarely</label>
        <input type="radio" id="sometimes4" name="quest4" value="3">
        <label for="sometimes4">Sometimes</label>
        <input type="radio" id="often4" name="quest4" value="4">
        <label for="often4">Often</label>
        <input type="radio" id="always4" name="quest4" value="5">
        <label for="always4">Always</label>
      </div>
      <div class="quest5">
        <label class="title" for="quest5">I have the potential resources to move my business forward</label><br>
        <input type="radio" id="never5" name="quest5" value="1">
        <label for="never5">Never</label>
        <input type="radio" id="rarely5" name="quest5" value="2">
        <label for="rarely5">Rarely</label>
        <input type="radio" id="sometimes5" name="quest5" value="3">
        <label for="sometimes5">Sometimes</label>
        <input type="radio" id="often5" name="quest5" value="4">
        <label for="often5">Often</label>
        <input type="radio" id="always5" name="quest5" value="5">
        <label for="always5">Always</label>
      </div>
      <div class="quest6">
        <label class="title" for="quest6">My business progress is due to my ability to manage the resources I have</label><br>
        <input type="radio" id="never6" name="quest6" value="1">
        <label for="never6">Never</label>
        <input type="radio" id="rarely6" name="quest6" value="2">
        <label for="rarely6">Rarely</label>
        <input type="radio" id="sometimes6" name="quest6" value="3">
        <label for="sometimes6">Sometimes</label>
        <input type="radio" id="often6" name="quest6" value="4">
        <label for="often6">Often</label>
        <input type="radio" id="always6" name="quest6" value="5">
        <label for="always6">Always</label>
      </div>
      <div class="quest7">
        <label class="title" for="quest7">Innovation is the strength and uniqueness of my business</label><br>
        <input type="radio" id="never7" name="quest7" value="1">
        <label for="never7">Never</label>
        <input type="radio" id="rarely7" name="quest7" value="2">
        <label for="rarely7">Rarely</label>
        <input type="radio" id="sometimes7" name="quest7" value="3">
        <label for="sometimes7">Sometimes</label>
        <input type="radio" id="often7" name="quest7" value="4">
        <label for="often7">Often</label>
        <input type="radio" id="always7" name="quest7" value="5">
        <label for="always7">Always</label>
      </div>
      <div class="quest8">
        <label class="title" for="quest8">My business continues to grow because of continuous innovation</label><br>
        <input type="radio" id="never8" name="quest8" value="1">
        <label for="never8">Never</label>
        <input type="radio" id="rarely8" name="quest8" value="2">
        <label for="rarely8">Rarely</label>
        <input type="radio" id="sometimes8" name="quest8" value="3">
        <label for="sometimes8">Sometimes</label>
        <input type="radio" id="often8" name="quest8" value="4">
        <label for="often8">Often</label>
        <input type="radio" id="always8" name="quest8" value="5">
        <label for="always8">Always</label>
      </div>
      <div class="quest9">
        <label class="title" for="quest9">I am able to target business opportunities with precision</label><br>
        <input type="radio" id="never9" name="quest9" value="1">
        <label for="never9">Never</label>
        <input type="radio" id="rarely9" name="quest9" value="2">
        <label for="rarely9">Rarely</label>
        <input type="radio" id="sometimes9" name="quest9" value="3">
        <label for="sometimes9">Sometimes</label>
        <input type="radio" id="often9" name="quest9" value="4">
        <label for="often9">Often</label>
        <input type="radio" id="always9" name="quest9" value="5">
        <label for="always9">Always</label>
      </div>
      <div class="quest10">
        <label class="title" for="quest10">I have the competence in predicting the chances of success in a business</label><br>
        <input type="radio" id="never10" name="quest10" value="1">
        <label for="never10">Never</label>
        <input type="radio" id="rarely10" name="quest10" value="2">
        <label for="rarely10">Rarely</label>
        <input type="radio" id="sometimes10" name="quest10" value="3">
        <label for="sometimes10">Sometimes</label>
        <input type="radio" id="often10" name="quest10" value="4">
        <label for="often10">Often</label>
        <input type="radio" id="always10" name="quest10" value="5">
        <label for="always10">Always</label>
      </div>
      <div class="quest11">
        <label class="title" for="quest11">I try to be active in increasing entrepreneurial competence</label><br>
        <input type="radio" id="never11" name="quest11" value="1">
        <label for="never11">Never</label>
        <input type="radio" id="rarely11" name="quest11" value="2">
        <label for="rarely11">Rarely</label>
        <input type="radio" id="sometimes11" name="quest11" value="3">
        <label for="sometimes11">Sometimes</label>
        <input type="radio" id="often11" name="quest11" value="4">
        <label for="often11">Often</label>
        <input type="radio" id="always11" name="quest11" value="5">
        <label for="always11">Always</label>
      </div>
      <div class="quest12">
        <label class="title" for="quest12">I have a strategy that is always ready to be executed</label><br>
        <input type="radio" id="never12" name="quest12" value="1">
        <label for="never12">Never</label>
        <input type="radio" id="rarely12" name="quest12" value="2">
        <label for="rarely12">Rarely</label>
        <input type="radio" id="sometimes12" name="quest12" value="3">
        <label for="sometimes12">Sometimes</label>
        <input type="radio" id="often12" name="quest12" value="4">
        <label for="often12">Often</label>
        <input type="radio" id="always12" name="quest12" value="5">
        <label for="always12">Always</label>
      </div>
      <div class="quest13">
        <label class="title" for="quest13">Through the business that I have developed, I feel that it continues 
          to grow and is enriched with various competencies as an entrepreneur</label><br>
        <input type="radio" id="never13" name="quest13" value="1">
        <label for="never13">Never</label>
        <input type="radio" id="rarely13" name="quest13" value="2">
        <label for="rarely13">Rarely</label>
        <input type="radio" id="sometimes13" name="quest13" value="3">
        <label for="sometimes13">Sometimes</label>
        <input type="radio" id="often13" name="quest13" value="4">
        <label for="often13">Often</label>
        <input type="radio" id="always13" name="quest13" value="5">
        <label for="always13">Always</label>
      </div>
      <div class="quest14">
        <label class="title" for="quest14">I feel prosperous in running my business</label><br>
        <input type="radio" id="never14" name="quest14" value="1">
        <label for="never14">Never</label>
        <input type="radio" id="rarely14" name="quest14" value="2">
        <label for="rarely14">Rarely</label>
        <input type="radio" id="sometimes14" name="quest14" value="3">
        <label for="sometimes14">Sometimes</label>
        <input type="radio" id="often14" name="quest14" value="4">
        <label for="often14">Often</label>
        <input type="radio" id="always14" name="quest14" value="5">
        <label for="always14">Always</label>
      </div>
      <div class="quest15">
        <label class="title" for="quest15">I am able to compete with competitors</label><br>
        <input type="radio" id="never15" name="quest15" value="1">
        <label for="never15">Never</label>
        <input type="radio" id="rarely15" name="quest15" value="2">
        <label for="rarely15">Rarely</label>
        <input type="radio" id="sometimes15" name="quest15" value="3">
        <label for="sometimes15">Sometimes</label>
        <input type="radio" id="often15" name="quest15" value="4">
        <label for="often15">Often</label>
        <input type="radio" id="always15" name="quest15" value="5">
        <label for="always15">Always</label>
      </div>
      <div class="quest16">
        <label class="title" for="quest16">I am capable of dealing with complex situations in my business</label><br>
        <input type="radio" id="never16" name="quest16" value="1">
        <label for="never16">Never</label>
        <input type="radio" id="rarely16" name="quest16" value="2">
        <label for="rarely16">Rarely</label>
        <input type="radio" id="sometimes16" name="quest16" value="3">
        <label for="sometimes16">Sometimes</label>
        <input type="radio" id="often16" name="quest16" value="4">
        <label for="often16">Often</label>
        <input type="radio" id="always16" name="quest16" value="5">
        <label for="always16">Always</label>
      </div>
      <a href="#">
      <button type="button" class="btn btn-secondary" onclick="return show('profile','question');">Back</button>
    </a>
      <input class="btn btn-secondary submit" type="submit" name="submit" value="Submit">
    </div>
  </form>
  @else
  <div class="container guest">
      <p>please either <a href="/login">login</a> or <a href="/register">register</a> first.</p>
  </div>
  @endauth
</div>
@include('part.bottom')
@endsection