<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      * {
        box-sizing: border-box;
      }
    
      
      .column-left {
        float: left;
        width: 20%;
        padding: 0px;
        height: 190px;
      }
      .column-center {
        float: left;
        width:60%;
        padding: 0px;
        height: 190px; 
      }
      .column-right {
        float: left;
        width: 20%;
    
        height: 190px; 
      }
    
      .data-row{
        float: left;
        width: 100%;
        margin-bottom: 2rem;
      }
    
      .data-row .data-row-1{
        float: left;
      }

      .center {
        display: block;
        margin-left: 15%;
        margin-right: auto;
        margin-top:170px;
        width: 70%;
      }
    </style>
 </head>
<body class="login-page" style="position:relative;">
  <img src="{{ public_path('logo/pangasinan.svg') }}" class="center" style="position: absolute;
    z-index:-999;
    opacity:0.2;"
  />
    <div class="row">
      <div class="column-right text-right" >
        {{-- <img  style="width: 120PX" src="{{  public_path('logo/logo1.png') }}" alt="logo"> --}}
        <img src="{{  public_path('logo/pangasinan.svg') }}" alt="logo" style="width: 120PX">
      </div>
      <div class="column-center text-center" >
        <p style='font-size:14px;font-family: "Times New Roman, Times, serif"; text-align: center; text-transform:uppercase;'>
          REPUBLIC OF THE PHILIPPINES<br>
          NATIONAL POLICE COMMISSION <br>
          <b>PHILIPPINE NATIONAL POLICE</b> <br>
          <b>POLICE REGIONAL OFFICE1</b> <br>
          <b>PANGASINAN POLICE PROVINCIAL OFFICE</b> <br>
          <b>{{ $show->municipal }} POLICE STATION</b> <br>
          {{ $show->municipal }}, PANGASINAN<br>
        </p>
        <div style='font-size:22px;font-family: "Times New Roman, Times, serif"; text-align: center;'>
          <b><u>C E R T I F I C A T I O N</u></b>
        </div>
      </div>
      <div class="column-left" >
        {{-- <img  style="width: 120PX" src="{{  public_path('logo/logo2.png') }}" alt="logo"> --}}
        <img src="{{  public_path('logo/calasiao.png') }}" alt="logo" style="width: 120PX">
      </div>
    </div>


    <div class="content">
      <h5 style="margin-bottom: 0.5rem;"><b>TO WHOM IT MAY CONCERN:</b></h5>
      <h5><b style="margin-left: 5rem;">THIS IS TO CERTIFY</b> that the following data are excerpt from the Police Blotter Book 201 Series of 2022 of this station to wit:</h5>

      <div style="margin-top: 0.5rem;" class="data-row">
          <div class="data-row-1">
            <h5 style="margin-left: 5rem;">Case No:</h5>
            <h5 style="margin-left: 5rem;">Date Reported:</h5>
            <h5 style="margin-left: 5rem;">Time Reported:</h5>
            <h5 style="margin-left: 5rem;">Blotter Status:</h5>
          </div>
          <div class="data-row-2" style="text-align: center; ">
            <h5 style="color: red; margin-left: 5rem;"> {{ $show->case_number }}</h5>
            <h5 style="margin-left: 5rem;"> {{ $show->created_at->format('M/d/Y') }}</h5>
            <h5 style="margin-left: 5rem;"> {{ $show->created_at->format('H:i:s A') }}</h5>
            @if ($show->approval == 'closed')
              <h5 style="color: red; margin-left: 5rem;">Case Closed</h5>
            @elseif($show->approval == 'revived')
              <h5 style="color: rgb(4, 222, 255); margin-left: 5rem;">Revived</h5>
            @elseif($show->approval == 'approved')
              <h5 style="color: green; margin-left: 5rem;">Approved by barangay</h5>
            @elseif($show->approval == 'passed')
              <h5 style="color: blue; margin-left: 5rem;">Passed to municipal</h5>
            @elseif($show->approval == 'passed_to_provincial')
              <h5 style="color: rgb(247, 11, 220); margin-left: 5rem;">Passed to provincial</h5>
            @elseif($show->approval == 'created_by_municipal')
              <h5 style="color: green; margin-left: 5rem;">Created at {{ $show->municipal }} Police Station</h5>
            @endif
          </div>
          <hr>
          <b style="margin-left: 5rem;">Case No. {{ $show->case_number }}-</b> {{ $show->what }}
      </div>

      <div class="row">
        <div class="col-sm-1" >
          <h5>Complainant : <h4>{{ $show->complainant_lastname }}, {{ $show->complainant_firstname }}</h4></h5>
          <h5>Respondent : <h4>{{ $show->respondent_lastname }}, {{ $show->respondent_firstname }}</h4></h5>
        </div>
      </div>

      <h5><b style="margin-left: 5rem;">This Certification</b> is issued on {{ Carbon\Carbon::now()->toFormattedDateString()  }} upon request for whatever legal purpose it may serve.</h5>

      <div style="text-align: right;">
        <p>Prepared and verified by:</p>
        <h5><p><b>{{ $user->name }}</b></p></h5>
        Police staff sergeant
      </div>
    </div>
</body>

</html>