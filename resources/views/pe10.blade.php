
@extends('layout')
@section('content')
<div class="row justify-content-md-center">
      <form> 
        <div class="row">
          <div class="col col-lg-5">
            <select class="custom-select custom-select-md mb-3" class="election" name="election" >
                <option value="0" disabled="true" selected="true">Select Election</option> 
                @foreach($Fdata as $data)
                  <option value="{{ $data->id }}">{{ $data->name }}</option>
                @endforeach
            </select>
          </div>
          <div class="col col-lg-5">
              <select class="custom-select custom-select-md mb-3" class="district" name="district" >
                  <option value="0" disabled="true" selected="true">Select District</option> 
              </select>
          </div>

           <div class="col col-md-2">
              <Button type="button" class="btn btn-primary" id="bellot">Generate</Button>
          </div>

        </div>
           
      </form>
  </div>  

  <section class="page-section clearfix mt-2">
    <div class="container" id="example">
      
       
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
        <h5 class="section-heading mb-10" align="right">
            <span>PE-10  </span>
            
          </h5>
          <h6 class="section-heading mb-10" align="left">
            <span>24(1) ආ වගන්තිය <br>
            24(1) ஆம் பிரிவு 
           <br> Section Under 24(1)(b) </span>
            
          </h6>
         
          <h2 class="section-heading mb-4">
            <span></span>
            
          </h2>
          <h5 class="section-heading mb-4">
            <span> <b>1981 අංක 1 දරණ පාර්ලිමේන්තූ මැතිවරණ පනත <br>24(1)(ආ) චන වගන්තිය යටතේ වූ දැන්වීම</b><br>1981 ஆம் ஆண்டின் 1ஆம் இலக்க பாராளுமன்றத் தேர்தல்கள் சட்டம்
            <br>24(1)(அ) ஆம் பிரிவின் கீழான அறிவித்தல்<br> Parliamentary Elections ACT, No.1of 1981<br>
            Notice Under Section 24(1)(b)<br>උපලේඛනය/அட்டவணை/Schedule </span>
            
          </h5>


         <table border="0" cellpadding="5" width="100%">
         	<tr>
             <td align="Left"> මැතිවරන කොට්ඨාසසඝ :............................</td>
             <td align="center"> යබයාැද පරිපාලන දිස්ත්රික්කය :........................</td>
             </tr>
             <tr>
             <td align="Left"> தேர்தல் மாவட்டம்  :........................</td>
             <td align="center">நிருவாக மாவட்டம் :...............................</td>
             </tr>
             <tr>
             <td align="Left"> Electoral District  :.................................</td>
             <td align="center"> Administrative District :...............................</td>
             </tr>
</table>
<table table border="1" cellpadding="5" width="100%" id="tblBellot">
<thead>
<tr><td>එක් එක් පිළිගත් දේශපාලන <br>
පක්ෂයේ නම/සභ එක් එක්<br>
ස්වාධීන කණ්ඩායම්<br>
වෙන්කොට හඳුනාගැනීමේ අංකය*<br><br>ஒவ்வொரு அங்கீகரிக்கப்பட்ட அரசியற் <br>
கட்சியின் பெயர் /ஒவ்வொரு சுயேச்சைக் <br>
குழுவின் வேறுபடுத்திக் காட்டூம் <br>
இலக்கம்* <br><br>
Name of each recognized <br>
Political Party/and the <br>
distinguishing Number of <br>
Eaca.independent Group*<br>






</td>
<td>එක් එක් පිළිගත්<br>
දේශපාලන පක්ෂයට/හා<br>
ස්වාධීන කණ්ඩායමට*<br>
වෙන්කර දෙන ලද ලකුණ<br><br>
ஒவ்வொரு அங்கீகரிக்கப்பட்ட <br>
அரசியற் கட்சிக்கும்/சுயேச்சைக் <br>
குழுவிற்கும்* ஒதுக்கிக் <br>
கொடுக்கப்பட்ட சின்னம் <br><br>
Symbol allocated to each<br>
recognized Political<br>
Party/and Independent<br>
Group*


</td>
<td>එක් එක් අපේක්ෂකයාට පවරන ලද අනුක්රමික<br>
අංකය සහ නාමයෝජනා පත්රයෙහි දැක්වෙන<br>
පරිදි අපේක්ෂකයන්ගේ නම්<br><br
>ஒவ்வொரு வேட்பாளருக்கும் ஒதுக்கிக் <br>
கொடுக்கப்பட்ட தொடர் இலக்கமும் <br>
பெயர் குறித்த நியமனப்பத்திரத்தின் <br>
குறிப்பிடப்பட்டிருந்தவாறு வேட்பாளர்களின்<br><br>
The serial number assigned to each<br>
Candidate and names of candidates<br>
as set out in the Nomination Paper<br>

பெயர்களும்.


</td>
</tr>
</thead>

<tbody>
<tr>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>

</table>

        
         <br>
        
        <br><br>
        
            
           
          </div>

        </div>
 
<div class="container">
  <center> 
      <br> 
      <input class="btn btn-primary" type="button" onclick="printDiv('example')" value="Print Data" /> 
  </center>
</div>
</section>

@push('scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script>
  
//  $(document).ready(function(){

// -------------------------Get District----------------------------------
  $("select[name='election']").change(function () {

      var elec_id=$(this).val();
      var op=" ";

      $.ajax({
        type:'GET',
        url:'{!!URL::to('getDistrict')!!}',
        data:{'id':elec_id},
        success:function(data){
          op+='<option value="0" disabled="true" >Select District</option>';
          for(var i=0;i<data.length;i++){
          op+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
          
          }
          $("select[name='district']").html("");
          $("select[name='district']").append(op);

        },
        error:function(){

        }
      });
    });
  // -----------------------------------------------------------------------
  
// -------------------------Get Bellot----------------------------------
$("#bellot").click(function () {
  var dist_id = $("select[name='district']").val();
  var op=" ";

$.ajax({
  type:'GET',
  url:'{!!URL::to('getBallot')!!}',
  data:{'id':dist_id},
  
  success:function(data){
    // alert(data[0].parties.length);
    for(var i=0;i<data[0].parties.length;i++){
      for(var j=0;j<data[0].parties[i].candidates.length;j++){
      op+='<tr>';
      op+='<td>'+data[0].parties[i].id+'</td><td>'+data[0].parties[i].id+'</td><td>'+data[0].parties[i].candidates[j].name+'</td>';
      op+='</tr>';   
      }
    }
    $("#tblBellot tbody").empty();
    $("#tblBellot tbody").append(op);
  },
  error:function(){
    alert("error");

  }
});
});

// ---------------------------------------------------------------------
$("select[name='district']").change(function () {
      $("#tblBellot tbody").empty();
});
    </script>
    @endpush
  @endsection