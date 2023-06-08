<div id="modal-saveData" class="modal">
    <div class="modal-dialog" role="document">

        <!-- Modal content -->


        <div class="modal-content">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">เพิ่มทักษะการเรียนรู้</h5>
                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>

            </div>
            <div class="card-body">
                <form id="fromaddData" action="javascript:void(0)">
                    <div class="mb-3">
                        <label class="form-label" for="unit_name">ทักษะ</label>
                        <input type="text" class="form-control" id="unit_name" placeholder="เพิ่มทักษะการเรียนรู้" required>
                    </div>

                    <button id="showToastPlacement" type="submit" class="btn btn-success">บันทึก</button>
                    
                    
                </form>
            </div>
            
        </div>


    </div>
</div>

<div id="modal-editData" class="modal">
    <div class="modal-dialog" role="document">

        <!-- Modal content -->

        <div class="modal-content">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">แก้ไขทักษะการเรียนรู้</h5>
                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>

            </div>
            <div class="card-body">
                <form id="fromeditData" action="javascript:void(0)">
                    <div class="mb-3">
                        <label class="form-label" for="editunit_name">ทักษะ</label>
                        <input type="text" class="form-control" id="editunit_name" placeholder="เพิ่มทักษะการเรียนรู้"  >
                    </div>
                    <input type="hidden" id="unit_id">
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </form>
            </div>
        </div>


    </div>
</div>