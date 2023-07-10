@extends('main')
@section('main_title')
Physical Therapy visit note
@endsection
@section('style')
<style>
    textarea::placeholder{
      font-size:15px;
    }
    @media print {
  #printPageButton {
    display: none;
  }
}

</style>
@endsection
@section('title2')
<textarea name="patient_label" id="patient" cols="20" class="text-center"  placeholder="PATIENT LABEL" rows="3"></textarea>
@endsection
@section('content')
<div class="row">
    <div class="col-12 border mb-3">
            <form action="" class="p-3" id="myform">
                <div class="row">
                    <div class=" col-6 d-inline-flex">
                        <label class="form-label mr-3">Doctor:</label>
                        <select class="form-control form-select-sm" name="Doctor" aria-label=".form-select-sm example">
                            <option selected value="">Open this select menu</option>
                            @foreach($doctors as $doctor)
                            <option value="{{$doctor['id']}}">{{$doctor['name']}}</option>
                            @endforeach
                          </select>
                    </div>

                    <div class=" col-6 d-inline-flex">
                        <label class="form-label mr-3">Patient:</label>
                        <select class="form-control form-select-sm" name="Patient" aria-label=".form-select-sm example">
                            <option selected value="">Open this select menu</option>
                            @foreach($patients as $patient)
                            <option value="{{$patient['id']}}">{{$patient['name']}}</option>
                            @endforeach
                          </select>
                    </div>
                </div>
                <hr>
               <div class="row">
                    <div class="form-group  col-6 d-inline-flex">
                        <label class="form-label mr-3">Date:</label>
                        <input type="date" name="Date" class="form-control">
                    </div>

                    <div class="form-group  col-6  d-inline-flex">
                        <label class="form-label mr-3">Timein:</label>
                        <input type="time" name="Timein" class="form-control">
                    </div>

                    <div class="form-group  col-6 d-inline-flex">
                        <label class="form-label mr-3">Timeout:</label>
                        <input type="time" name="Timeout" class="form-control ">
                    </div>
                </div> 

                <div class="row">
                    <div class="form-group  col-6  d-inline-flex">
                        <label class="form-label mr-3">Visit Length:</label>
                        <input type="text" name="Visit Length"  class="form-control " >
                    </div>
                </div>

                <div class="row">
                    <div class="form-group  col-6  d-inline-flex">
                        <label class="form-label mr-3">NFS:</label>
                        <input type="text" name="NFS"  class="form-control ">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group  col-6">
                        <label class="form-label mr-3">Focus Of Visit:</label>
                        <input type="checkbox" name="Focus Of Visit" class="form-check-input ml-1">
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class=" col-2">
                        <label class="form-label mr-3">Visit Type:</label>
                    </div>
                   <div class="col-4">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label mr-3" for="inlineCheckbox1">Routine</label>
                        <input class="form-check-input" type="radio" name="Visit Type" id="inlineCheckbox1" value="routine">
                      </div>
                      <div class="form-check form-check-inline">
                        <label class="form-check-label mr-3" for="inlineCheckbox2">Unscheduled</label>
                        <input class="form-check-input" type="radio" name="Visit Type" id="inlineCheckbox2" value="unscheduled">
                      </div>
                      <div class="form-check form-check-inline">
                        <label class="form-check-label mr-3" for="inlineCheckbox3">Other</label>
                        <input class="form-check-input" type="radio" name="Visit Type" id="inlineCheckbox3" value="other">
                      </div>                      
                   </div>
                </div>

                <hr>
                <div class="row">
                    <div class="form-group  col-4  d-inline-flex">
                        <label class="form-label mr-3">B/P</label>
                        <input type="text" name="B/P" class="form-control">
                    </div>
                    <div class="form-group  col-4  d-inline-flex">
                        <label class="form-label mr-3">P</label>
                        <input type="text" name="P" class="form-control">
                    </div>
                    <div class="form-group  col-4  d-inline-flex">
                        <label class="form-label mr-3">R</label>
                        <input type="text" name="R" class="form-control">
                    </div>

                </div>
                <div class="row">
                    <div class="form-group  col-4  d-inline-flex">
                        <label class="form-label mr-3">SPO2</label>
                        <input type="text" name="SPO2" class="form-control ">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12">
                        <label class="form-label mr-3">Diagnosis:</label>
                        <input type="text" name="Diagnosis" class="form-control">
                    </div>    
                </div>

                <div class="row">
                    <div class="col-12">
                        <label class="form-label mr-3">Precautions:</label>
                        <input type="text" name="Precautions" class="form-control">
                    </div>    
                </div>

                <hr>

                <div class="row">
                    <div class="form-group col-12">
                        <label class="form-label mr-3">Subjective Findings:</label>
                    </div>    
                </div>

                <div class="row">
                    <div class="form-group col-12">
                        <label class="form-label mr-3">Ocular Inspection:</label>
                        <input type="text" name="Ocular Inspection" class="form-control">
                    </div>    
                </div>

                <div class="row">
                    <div class="form-group  col-12">
                        <label class="form-label mr-3">Palpation:</label>
                        <input type="text" name="Palpation" class="form-control ">
                    </div>    
                </div>

                <div class="row">
                    <div class=" form-group col-12">
                        <label class="form-label mr-3">Rom:</label>
                        <input type="text" name="Rom" class="form-control ">
                    </div>    
                </div>

                <div class="row">
                    <div class="form-group  col-12">
                        <label class="form-label mr-3">Gait:</label>
                        <input type="text" name="Gait" class="form-control ">
                    </div>    
                </div>

                <div class="row">
                    <div class="form-group  col-12">
                        <label class="form-label mr-3">MMT:</label>
                        <input type="text" name="mmt" class="form-control ">
                    </div>    
                </div>

                <div class="row">
                    <div class="col-12">
                        <label class="form-label mr-3">Posture:</label>
                        <input type="text" name="posture" class="form-control">
                    </div>    
                </div>

                <div class="row">
                    <div class="form-group  col-12">
                        <label class="form-label mr-3">Others:</label>
                        <input type="text" name="others" class="form-control ">
                    </div>    
                </div>

                <hr>
                <div class="row">
                    <div class="form-group  col-12">
                        <label class="form-label mr-3">Physical Therapy Management:</label>
                    </div>
                    
                        <div class="form-group  col-12">
                            <label class="form-label mr-3">Hydro Therapy:</label>
                            <input type="text" name="Hydro Therapy" class="form-control ">
                        </div> 
                        
                        <div class="form-group  col-12">
                            <label class="form-label mr-3">Electro Therapy:</label>
                            <input type="text" name="Electro Therapy" class="form-control">
                        </div> 
                        
                        <div class="form-group  col-12">
                            <label class="form-label mr-3">Message:</label>
                            <textarea  name="Message" class="form-control" cols="12" rows="3"></textarea>
                        </div>
                        
                </div>

                <div class="row d-flex justify-content-end mt-3">
                <button type="submit" id="printPageButton" class="btn btn-primary">Submit</button>
                </div>
            </form>
    </div>
</div>
@endsection
@push('scripts')
   <script type="text/javascript">
   $(document).on('submit','#myform',function(e){
    e.preventDefault()

    const element = $("#content").clone()
   element.find('#printPageButton').remove()
   var patient=$('select[name=Patient]').val()
   const options = { 
      filename: `form-data${patient}.pdf`, 
      margin: [0, 0], 
     };

   html2pdf().set(options).from(element[0]).outputPdf('blob').then((blob) => {
  		const formData = new FormData();
  		formData.append('file', blob, `form-data${patient}.pdf`);
    //    redirect to route report.store to save pdf file in public/storage/pdfs
        $.ajax({
            url:'{{route("report.store")}}',
            method:'post',
           headers: { 'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content') },
           data:formData,
  			processData:false,
			contentType:false,
             success:function(response){
                console.log(response);
                alert('report saved in pdf successfully')
             },error:function(){
                alert('report failed to save')
             }
         });
  	});





   })
    </script> 
@endpush