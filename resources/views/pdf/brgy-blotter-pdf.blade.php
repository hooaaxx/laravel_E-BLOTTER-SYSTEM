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
    </style>
 </head>
<body class="login-page" style="background: white">



    <div class="row">
      <div class="column-right text-right" >
        {{-- <img  style="width: 120PX" src="{{  public_path('logo/logo1.png') }}" alt="logo"> --}}
        <img src="{{  public_path('logo/pangasinan.svg') }}" alt="logo" style="width: 120PX">
      </div>
      <div class="column-center text-center" >
       <p style='font-size:19px;font-family: "Times New Roman, Times, serif"; text-align: center; text-transform:uppercase;'> REPUBLIC OF THE PHILIPPINES<br>
        MUNICIPALITY OF {{ $show->municipal }}<br>
        PROVINCE OF PANGASINAN<br>
         <b style="text-align: center;"><u>BARANGAY {{ $show->barangay }}</u></b>
        </p>
        <div style='font-size:22px;font-family: "Times New Roman, Times, serif"; text-align: center;'><b>EXTRACT COPY FROM BARANGAY BLOTTER</b>

        </div>

      </div>

      <div class="column-left" >
        {{-- <img  style="width: 120PX" src="{{  public_path('logo/logo2.png') }}" alt="logo"> --}}
        <img src="{{  public_path('logo/calasiao.png') }}" alt="logo" style="width: 120PX">
      </div>
    </div>


    <div class="content">
      <h4 style="margin-bottom: 0.5rem;"><b>TO WHOM IT MAY CONCERN:</b></h4>
      <h4><b style="margin-left: 5rem;">THIS IS TO CERTIFY</b> that as per record available in the Barangay BLotter on Barangay {{ $show->barangay }}, the following data exists:</h4>

      <div style="margin-top: 0.5rem;" class="data-row">
          <div class="data-row-1">
              <h5>Case No:</h5>
              <h5>Date Reported:</h5>
              <h5>Time Reported:</h5>
              <h5>Blotter Status:</h5>
          </div>

          <div class="data-row-2" style="text-align: center; ">
              <h5 style="color: red;"> {{ $show->case_number }}</h5>
              <h5> {{ $show->created_at->format('M/d/Y') }}</h5>
              <h5> {{ $show->created_at->format('H:i:s A') }}</h5>
              @if ($show->approval == 'closed')
                <h5 style="color: red;">Case Closed</h5>
              @elseif($show->approval == 'revived')
                <h5 style="color: rgb(4, 222, 255);">Revived</h5>
              @elseif($show->approval == 'approved')
                <h5 style="color: green;">Approved by barangay</h5>
              @elseif($show->approval == 'passed')
                <h5 style="color: blue;">Passed to municipal</h5>
              @elseif($show->approval == 'passed_to_provincial')
                <h5 style="color: rgb(247, 11, 220);">Passed to provincial</h5>
              @endif
          </div>
        
      </div>

      <h4><b>COMPLAINT DETAILS:</b></h4>

      <h5 style="text-align: right;"><b>{{ $date }} : DATE OF INCIDENT</b></h5>
      <h5 style="text-align: right;"><b>{{ $show->where }} : PLACE OF INCIDENT</b></h5>
      <h5 style="text-align: center; margin-bottom: 0.5rem;"><b>"{{ $show->what }}"</b></h5>

      <div class="row">
        <div class="col-sm-1" >
          <h5>Complainant : <h4>{{ $show->complainant_lastname }}, {{ $show->complainant_firstname }}</h4></h5>
          <h5>Respondent : <h4>{{ $show->respondent_lastname }}, {{ $show->respondent_firstname }}</h4></h5>
        </div>
      </div>

      <div style="text-align: right;">
        <h5><b>{{ $user->name }}</b></h5>
        <h5>Barangay Captain</h5>
      </div>
    </div>
</body>

</html>