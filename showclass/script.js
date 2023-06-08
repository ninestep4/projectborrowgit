const menuName = "showclass";
if (menuName != "") {
    $("#menu-" + menuName).addClass("active");
    $("#mainmanu").addClass("active open")

}

$(document).ready(function () {
    getdata();

    $("#btnshow").click(function(){
        $("#showstudent").fadeIn("slow");
    })
    $('#level').change(function (e) { 
      dataroom()
      
    });
    });

const url = "https://app.cpw.ac.th/swimmingSurveyService/api/Master/";


let getdata = () => {
    //ดึงapi
    let datasend = {
      
    };
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

let dataroom = ()=> {
  let level = $('#level').val()
  let datasend = {
    "masterData" :[
      "mtDataroom"
    ],
    
    "filter": {
      "leKey": level
    }
  };
  $.ajax({
    type: "POST",
    url: url+'MasterDataAll',
    dataType: "json ",
    headers: {
      "Content-Type": "application/json",
      "Accept": "application/json"
    },
    data: JSON.stringify(datasend),
    success: function (response) {
        if (response.status == 200) {
          let num= response.data.dataroom.length
          console.log(num);
          let html = "";
          if (num >= 1) {
            for (i = 0; i < num; i++) {
              let row = response.data.dataroom[i];
              html += `
                    <option value="${row.roKey}">${row.roName}</option>
  
                      `;
            }
          } else {
            html = `<option value="0">กรุณาเลือกชั้นเรียน</option>`;
          }
          $("#classroom").html(html);
        }
      }
  })
    
}


