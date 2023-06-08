<div class="row">

    <div class="card">
        <div class="card-header">
            <h3>ทักษะทัังหมด</h3>
            <br>
            <form>
            <div class="input-group" style="width:360px;">
            
                <span class="input-group-text"><i class="tf-icons bx bx-search"></i></span>
                <input type="text" class="form-control" placeholder="ชื่อทักษะ" required>
                <button class="btn btn-primary" id="btnsearch">ค้นหา</button>
            
            </div>
            </form>
            <br>
            <button class="btn btn-primary d-block" style="float:right;" id="btnmodal">เพิ่มทักษะการเรียนรู้</button>

        </div>
        

        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>

                    <tr>
                        <th width="100">No.</th>
                        <th>ชื่อทักษะ</th>
                        <th  class="text-center" width="100">แก้ไข/ลบ</th>



                    </tr>

                </thead>
                <tbody class="table-border-bottom-0" id="listData">

                    <tr>
                        <td colspan="3">กำลังโหลด..</td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
</div>
