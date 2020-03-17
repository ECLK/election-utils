<?php $__env->startSection('content'); ?>
<div class="row justify-content-md-center">
      <form> 
        <div class="row">
          <div class="col col-lg-5">
            <select class="custom-select custom-select-md mb-3" class="election" name="election">
                <option value="0" disabled="true" selected="true">Select Election</option> 
                <?php $__currentLoopData = $Fdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
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
            <span>PE-09  </span>
            
          </h5>
         
          <h2 class="section-heading mb-4">
            <span>පාර්ලිමේන්තු මැතිවරණය<br>PARLIAMENTARY ELECTIONS </span>
          </h2>
          <h5 class="section-heading mb-4">
            <span> ඡන්ද පත්රිකා ඇණවුම - Ballot Paper Indent </span>
            
          </h5>
         
         <table border="0" cellpadding="5" width="100%">
         	<tr>
             <td align="right"> මගේ අංකය /My No:........................</td>
             </tr>
             <tr>
             <td align="left"> ආණ්ඩුවේ මුද්රණාලයාධිපති තුමා වෙතටයි <br> To: The Government Printer,</td>
             </tr>
             <tr>
             <td align="left"> මැතිවරණ කොමසාරිස්තුමා මගින් <br> Through Commissioner of Elections,</td>
             </tr>


         	<tr>
             <td align="left"> <br>මෙහි පහත සඳහන් දෑ ඉක්මණින් මා වෙත සපයන්න :- <br> Please supply me early with the fallowing </td>
             <tr><td> 



             <Ul align="left" >
             <li>(අ) එක පොතක ඡන්ද පත්රිකා 50 බැගින් චු පොත් :- ......................................................................................................................................</li>
             <li>(a) ..........................................................books of ballot papers of 50 each</li>
             <li>(ආ) එක පොතක ඡන්ද පත්රිකා 25 බැගින් චූ ද්වීන්ච ඡන්ද පත්රිකා පොත් ...............................................................................................................මේවා <br> වර්ණවත් කඩදාසි වල මුද්රණය කළ යුතුය.
</li>
             <li>(b) .......................................................................................................books of tendered ballot papers of 25 each, which should be printed <br>on colored paper.</li>
             <li>(ඉ) පක්ෂවල සහ කණ්ඩායම්වල, අපේක්ෂකයන්ගේ නම් සහ ලකුණු දැක්වෙන දැන්වීම් .......................................................................................................</li>
             <li>(c)..........................................................notices speifying names of parties and group, candidates and symbols.</li>
             </ol>
             </td>
             </tr>
             <tr>
             <td align="left"><br> 02. ................................................................................................................................................ වැනි දිනට නියම කර ඈති පාර්ලිමේන්තු මැතිවරණයේදී පාවිච්චි <br>කිරීම්ට හැකිවනු චස් මේවා ඉක්මණින් මුද්රණය කර දෙන මෙන් ඉල්ලමි,<br>I shall be glad if you could kindly print and supply these items to be used at the forthcoming <br> parliamentary Elections fixed for ............................................................without delay</td>
             </tr>
             <tr>
             <td align="left"><br> 03. අ. සහ ආ යන්නෙන් ලකුණු කරනු ලෑබූ ආදර්ශ ඡන්ද පත්රිකා සහ දැන්වීම් මීට අමුණා ඇත.<br>Specimen ballot papers and notices are annexed, marked A and B.</td>
             </tr>
             <tr>
             <td align="left"> <br>04. . ශෝධ්ය පත්ර, මෑතිවරණ කොමසාරිස්තූමා වෙත යැවිය යුතුය.<br>Proofs should be sent o Commissioner of Elections</td>
             </tr>
             <tr>
             <td align="Right">......................................................................</td>
             </tr>
             <tr>
             <td align="right">තේරීම්භාර නිලධාරී/Returning Officer</td>
             </tr>
             <tr>
             <td align="left"> මැතිවරණ කාර්යාලය/The Elections Office,</td>
             </tr>
             
             <tr>
             <table border="0" width="100%">
             <tr>
             <td align="left">........................................................... </td>
             <td align="right">...............................................පරිපාලන දිස්ත්රික්කය/Administrative District</tr>
             </td>
             </tr>
   </table>
   </table>
   <table border="0" width="100%">
             <tr >
             <td align="left"> ආණ්ඩුවේ මුද්රණාලයාධිපතිතුමා<br>The Government Printer</td>
             </tr>
             <tr>
             <td align="centert"> Forwarded</td>
             </tr>
             <tr>
             <td align="Right">..............................................................</td>
             </tr>
             <tr>
             <td align="Right">මැතිවරණ කොමසාරිස් වෙනුවට<br>For Commissioner of Elections</td>
             </tr>
             <tr>
             <td align="left">Date :-20.........................</td>
             </tr>
         </table>
         <hr>
         <table border="0" width="100%">
             <tr >
             <td align="center"><h4> ලැබුණ බව දැනුම්දෙන ආකෘතිය<br>Form of Acknowledgement<h4></td>
             </tr>
             <tr>
             <td align="left">නේරීම්භාර නිලධාරී/ Returning Officer ...................................................................<br></td>
             </tr>
             <tr>
             <td align="left"><br>ඉදිරියේදී පෑවැත්වීමට නියමිත පාර්ලිමේන්තු මැතිවරණයට අදාළ ඔබේ ඡන්ද පත්රිකා ඇණවුම්....................................................................................................වැනි දින <br>
             මෙම කාර්යාලයට එචන ලදුව භරි වැරදි බෑලීමෙන් පසු රජයේ මුද්රණාලයාධිපති වෙත ........................................................................................වැනි දින යවන ලදි.
Your Ballot PaperIndest for the forthcoming Parliamentary Elections was received at this office on.................................................................and <br> transmitted to the Government Printer on ....................................................................................after verification</td>
             </tr>
             <tr>
             <td align="left"><br>දිනය/date:-20........................</td>
             </tr>
             <tr>
             <td align="Right">..................................................</td>
             </tr>
             <tr>
             <td align="Right">ළෑතිවරණ කොම සෟරික්‌ පංචනුවව,<br> for Commissioner of Elections</td>
             </tr>
        
        </table>
         <br>
        
        <br><br>
        
            
            

         
         
          </div>

        </div>

     
    </div><br>
<div class="container">
  <center> 
      <br> 
      <input class="btn btn-primary" type="button" onclick="printDiv('example')" value="Print Data" /> 
  </center>
</div>
  </section>

  <?php $__env->startPush('scripts'); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script>
  
//  $(document).ready(function(){

// -------------------------Get District----------------------------------
  $("select[name='election']").change(function () {

      var elec_id=$(this).val();
      var op=" ";

      $.ajax({
        type:'GET',
        url:'<?php echo URL::to('getDistrict'); ?>',
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
  
    </script>
    <?php $__env->stopPush(); ?>



  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>