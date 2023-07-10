<!DOCTYPE html>
<html>
<head>

<style>
    table{
    width:100%;
    table-layout:fixed;
}
.column {
  float: left;
  width: 33.33%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.overlay {

  margin: 20px;

}

table{
    border-collapse: collapse;
}
th, td {
max-width:50%;
  padding: 8px;

}

</style>
</head>
<body>
<form action="{{route('report.save')}}" method="POST" >
        @csrf

  <table id="mytable" border="1px ,solid ,black"  >

    <tr>
        <h3 align="center">Patients Right at THHC</h3>
    </tr>
    <tr>
        <th>
            <div align=left >
                <p>
                <br> 1. 	Be informed about their rights in a manner they can understand.
                <br> 2.	    Access treatment, services and care necessary to help regain or maintain his / her maximum state of health regardless race, religion, gender, marital status, ethnicity, age, disability or source of payment.
                <br> 3.	    Be treated with consideration and respect with recognition of individuality and dignity, including reasonable visual and auditory privacy during personal hygiene activities, Clinical procedures, consultation, examination and treatment.
                <br> 4.	    Privacy from staff, other patients or family members as desired.
                <br> 5.	    Privacy & confidentiality of health information as required by law and to have this information protected from loss or misuse.
                <br> 6.	    To be cared for by health providers who are qualified through education and experience and who perform the service for which they are responsible efficiently.
                <br> 7.	    Expect that the health care providers are educated about their role in identifying patient's values and beliefs and protecting patients' rights.
                <br> 8.	    Participate in the care process.
                <br> 9.   	Have information provided in way and language they understand.
                <br> 10.	Appropriate assessment and management of pain.
                <br> 11.	Be informed of the process in order to participate in care decisions to the extent he/she wishes to participate.
                <br> 12.	Refuse or discontinue treatment to the extent permitted by law.
                <br> 13.	Be informed of his/her responsibilities and consequences related to his/her decision   to refuse treatment.
                <br> 14.	Ask questions when he/she does not understand his/her care treatment or service provided or what he/she is expected to do.
                <br> 15.	Be fully informed of the scope of services provided by the THHC and how to access those services.
                <br> 16.	Identify legal guardian to make decision for him/her when the patient is unwilling to make decision regarding the treatment plan
                <br> 17.	Provide a safe and secure environment during the treatment session and protection from any type of sexual, verbal, or neglect and ill treatment.
                <br> 18.	To be provided with advance information on the cost of his treatment, including the right to obtain a reasonable explanation of the total bill and detailed entitlement for the services rendered to him as a patient receiving treatment.
                <br> 19.	 To obtain an explanation of all the papers he/she is required to sign.
                <br> 20.	To obtain another opinion when requested.
                </p>
            </div>
        </th>

        <th>
            <div align=right dir=rtl>
                <p>
                    ١.معرفه حقوقه بإسلوب ولغه يسهل فهمها
                <br>٢.أن يتلقى العلاج، الخدمات، والرعاية الضروريه التي تساعده في إسترداد صحته أو المحافظه عليها بأعلى مستوى بعيدا عن أي اعتبارات للعرق،الديانه،الجنس،الحاله الاجتماعيه،الاصل،العمر،الاعاقه،أو مصدر دفع تكلفه العلاج
                <br>٣.المعامله بإحترام والمحافظة على خصوصيته وكرامته ،متضمنا توفير خصوصيه بصريه وسمعيه للمريض أثناء نشاطات النظافه الشخصيه ،الإجراءات السريريه،الاستشارة،الفحص والمعالجه
                <br>٤.أن تحفظ للمريض الخصوصيه من قبل الموظفين،المرضى الآخرين أو أفراد العائلة حسب الرغبه.
                <br>٥.أن تحفظ للمريض خصوصية وسريه المعلومات الطبيه كما هو مطلوب قانونيا وأن تحفظ هذه المعلومات من الضياع أو سوء الاستخدام.
                <br>٦.الاعتناء به من جهه مقدمي الرعاية الطبيية المؤهلين بالتعليم و الخبرة والذين يقدمون الخدمه المطلوبه بكفائه.
                <br>٧.أن يكون مقدمو الرعاية الطبيية على علم بدورهم في معرفة قيم المرضى ومعتقداتهم وحماية حقوقهم.
                <br>٨.المشاركه في عملية الرعاية الطبيية
                <br>٨.أن توفر له المعلومات على الطريقه واللغه التي يفهمها.
                <br>٩.يراعي التقييم والتحكم بالألم على النحو المناسب.
                <br>١١.أن يكون على علم بالاجراءات العلاجيه ليقرر حول رعايته الطبيية ،والمدى الذي يرغب المشاركه به.
                <br> ١٢.للمريض الحق رفض أو عدم إكمال العلاج وفق القوانين المشرعه بذلك.
                <br> ١٢.أن يخبر بمسؤولياته المتعلقه برفضه للعلاج وعواقب قراره.
                <br>١٣.أن يستفسر عند عدم فهمه لأي شئ يختص بمعالجته،أو بالخدمه المقدمه،أو حول المتوقع منه فعله.
                <br>١٥.أن يكون على دراية تامه بنطاق الخدمات المقدمة من الرعاية الطبيية المنزلية وكيفيه الحصول عليها.
                <br>١٦.تعيين وصي قانوني عن المريض عند عدم قدرة المريض أو عدم رغبته إتخاذ القرارات فيما يتعلق بالخطه العلاجية .
                <br>١٧.أن توفر له بيئه آمنة أثناء الجلسات العلاجية وتتم حمايته من أي نوع من الإساءة الجنسيه ،واللفظيه،أو الإهمال وسوء المعامله.
                <br>١٨.أن يزود بمعلومات مسبقه عن تكلفه علاجه،متضمنه الحق في الحصول عن تفسير معقول للفاتوره الكليه و الاستحقاقات المفصلة للخدمات المقدمه له كمريض يتلقى العلاج.
                <br>١٩.أن يحصل على تفسير لجميع الاوراق التي يطلب منه التوقيع عليها.
                <br>٢٠.أن يحصل على رأي آخر عند طلبه.
                </p>
            </div>
        </th>
    </tr>

  </table>
<div align="center" >
  <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Save And Print" onclick="myPrint('mytable')">
</div>
</form>


</body>

<script>
    function myPrint(mytable) {
        var printdata = document.getElementById(mytable);
       var data= document.write(printdata.innerHTML);
        newwin = window.open("");
        newwin.document.write(printdata.innerHTML);
        newwin.print();
        newwin.close();
    }
</script>
</html>

