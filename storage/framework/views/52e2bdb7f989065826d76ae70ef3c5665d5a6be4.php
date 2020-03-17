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
            <span>PE-10 (1)  </span>
            
          </h5>
          <h6 class="section-heading mb-10" align="left">
            <span> 
            Specimen Notice </span>
            
          </h6>
         
          <h2 class="section-heading mb-4">
            <span></span>
            
          </h2>
          <h2 class="section-heading mb-4">
            <span><b>PARLIAMENTARY ELECTIONS ACT, No.01 OF 1981</b> </span>
          </h2>
          <h5 class="section-heading mb-4">
            <span> Notice under Section 30 (1) (b) </span>
            
          </h5>
         
        <h5> <table border="0" cellpadding="5" width="100%">
         	<tr>
             <td align="centert"> <b>Electoral District: No:.......................................................................................................................</b>
             <tr>
             <td><b>Date of Poll:............................................................  Time of Poll : From 7 .00 a.m. to 4.00 P.M.</b>
             </td>
             <tr>
             <td></td>
             </tr>
             <tr>
             <td align="left">The name of each Recognized Political Party/ and distinguishing number of each Independent Group * contesting the election and the Symbol allotted to each Recognized Political Party/
             </td>
             <tr>
             <td align="left"> Independent Group* are shown below:-</td>
             </tr>
             
   </table >

   <table align="center" table border="1" cellpadding="5" width="60%">
   <tr>
   <td></td>
   <td></td>
   </tr>
   </table>
   <br>
   <br>

   <p align="left"> 
Following are the names of candidates as set out in the Nomination Paper of each Recognized Political Party/Independent Group *contesting the election:-
</P>
<table align="center" table border="1" cellpadding="5" width="100%">
   <tr>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   </tr>
  </table>

   
   
   
   </h5>

        
         <br>
        
        <br><br>
        
            
            
          </div>

        </div>

      
    </div>
    <br> 
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