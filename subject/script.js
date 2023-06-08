const menuName = "subject";
if (menuName != "") {
    $("#menu-" + menuName).addClass("active");
    $("#mainmanu").addClass("active open")

}

$(document).ready(function () {
  //ทำเสร็จก็นำมาเรียกใช้
  getdata();
  $("#btnmodal").click(function () {
    $("#modal-saveData").modal("show");
     //ใช้หน้า modal
    $('#unit_name').val('');
  });

  $("#fromaddData").submit(function () {
    addData();
  });

  $("#fromeditData").submit(function () {
    saveeditData();
  });

  $('.toast').toast('show');

});





const url = "https://app.cpw.ac.th/swimmingSurveyService/api/SurveyData/";

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
                        <td>${i + 1}</td>
                        <td>${row.sdName}</td>
                        <td class="text-center">
                            <button type="button" class = "btn btn-warning" onclick="getDataedit(${row.sdId},'${row.sdName}')">
                                <i class='bx bxs-edit-alt'></i>
                            </button>
                            


                            <button id="demo" type="button" class = "btn btn-danger" onclick="deleteData(${row.sdId})">
                            
                            <i class='bx bxs-trash'></i>
                            </button>


                        </td>

                    </tr>`;
          }
        } else {
          html = `<tr>
                    <td colspan="3">ไม่พบข้อมูล</td>
                </tr>`;
        }
        $("#listData").html(html);
      }
    },
  });
};



let addData = () => {
  //เพิ่มคำใหม่
  let unit_name = $("#unit_name").val();
  let datasend = {
    sdName: unit_name,
  };
  $.ajax({
    type: "POST",
    url: url+'CreateSurveyData?sdName='+unit_name,
    dataType: "json ",
    success: function (response) {
      if (response.status == 200) {
        getdata();
        $("#modal-saveData").modal("hide");
        $.toast({
          heading: 'บันทึกสำเร็จ',
          text: 'เพิ่มทักษะการเรียนรู้สำเร็จแล้ว',
          showHideTransition: 'slide',
          icon: 'info'
      })
        
      }
    },
  });
  
};

let deleteData = (unit_id) => {  //ลบ

  let text = "คุณต้องการที่จะลบทักษะนี้ใช่หรือไม่";
  if (confirm(text) == true) {
    text = "You pressed OK!";
    let datasend = {
      unit_id: unit_id,
      
    };
    $.ajax({
      type: "DELETE",
      url: url+'DeleteSurveyData?sdId='+unit_id,
      dataType: "json ",
      success: function (response) {
          if (response.status == 200) {
            getdata();}}
    });
  } else {
    
  }
  


};



let getDataedit = (sdId,sdName) => { //แสดงผลในtextbox
  //ดึงคำเก่ามาโชว์
  $("#editunit_name").val(sdName);
  $("#unit_id").val(sdId);
  $("#modal-editData").modal("show");
};



let saveeditData = () => {
  //บันทึกคำที่แก้ไข
  let unit_id = $("#unit_id").val();
  let unit_name = $("#editunit_name").val();
  
  let datasend = {  
    sdId: unit_id,
    sdName: unit_name,
    
  };
  $.ajax({
    type: "PUT",
    url: url+'UpdateSurveyData?sdId='+unit_id+'&sdName='+unit_name,
    dataType: "json ",
    success: function (response) {
      if (response.status == 200) {
        getdata();
        $("#modal-editData").modal("hide");
      }
    },
  });
};
