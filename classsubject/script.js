const menuName = "classsubject";
if (menuName != "") {
    $("#menu-" + menuName).addClass("active");
    $("#mainmanu").addClass("active open")

}
$(document).ready(function () {
  //ทำเสร็จก็นำมาเรียกใช้
  getdata();
  showyearedu();
  $("#btnmodal").click(function () {
    $("#myModal").modal("show"); //ใช้หน้า modal
  });

  $("#classseting").submit(function (e) { 
    $("#myModal").modal("hide");
    e.preventDefault();
    
  });

});

let url = "https://app.cpw.ac.th/swimmingSurveyService/api/SurveyData/";

let getdata = () => {
  //ดึงapi
  let datasend = {
    sdName: "1",
  };
  $.ajax({
    type: "GET",
    url: url+'GetSurveyData',
    dataType: "json ",
    success: function (response) {
      if (response.status == 200) {
        let html = "";
        let num = response.data.length;
        if (num >= 1) {
          for (i = 0; i < num; i++) {
            let row = response.data[i];
            html += `<tr>
                           <td><h5><input type="checkbox">&nbsp&nbsp&nbsp${row.sdName}</h5></td>
                     </tr>                        
                    `;
          }
        } else {
          html = `<tr>
                    <td colspan="3">ไม่พบข้อมูล</td>
                </tr>`;
        }
        $("#showsubject").html(html);
      }
    },
  });
};

url = "https://app.cpw.ac.th/swimmingSurveyService/api/Master/";

let showyearedu = () => {
$.ajax({
  type: "GET",
  url: url+'GetSurveyYear',
  dataType: "json ",
  success: function (response) {
    if (response.status == 200) {
      let num= response.data.length

      let html = "";
      if (num >= 1) {
        for (i = 0; i < num; i++) {
          let row = response.data[i];
          html += `
                <option value="${row.code}">ปีการศึกษา ${row.value}</option>

                  `;
        }
      } else {
        html = `<option value="0">"ไม่มีข้อมูล"</option>`;
      }
      $("#Year_edu").html(html);
      
    }
  },
})
}