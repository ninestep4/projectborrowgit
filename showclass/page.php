<div class="row">

    <div class="card">
        <div class="card-header">
            <h3>ประเมินทักษะแต่ละชั้นเรียน</h3>
            <div class="row">

                <div class="mb-4 col-md-3">
                    <select class="form-select" id="Year_edu" style="width:280px;">
                       
                    </select>
                </div>

                <div class="mb-4 col-md-3">
                    <select class="form-select" id="level" style="width:280px;">
                        <option selected="">เลือกชั้นเรียน</option>
                        <option value="a">อ.1</option>
                        <option value="b">อ.2</option>
                        <option value="c">อ.3</option>

                        <option value="d">ป.1</option>
                        <option value="e">ป.2</option>
                        <option value="f">ป.3</option>
                        <option value="g">ป.4</option>
                        <option value="h">ป.5</option>
                        <option value="i">ป.6</option>

                        <option value="j">ม.1</option>
                        <option value="k">ม.2</option>
                        <option value="l">ม.3</option>
                        <option value="m">ม.4</option>
                        <option value="n">ม.5</option>
                        <option value="o">ม.6</option>
                    </select>
                </div>

                <div class="mb-4 col-md-3">
                    <select class="form-select" id="classroom" style="width:280px;">
                    <option selected="">กรุณาเลือกชั้นเรียน</option>
                    </select>
                </div>

            </div>
            <div class="row">
                <div class="mb-4 col-md-3" class="modal">
                    <select class="form-select" id="listData" style="width: 580px;">
                        
                    </select>
                    
                </div>

                <div>
                <button class="btn btn-primary" id="btnshow">ค้นหา</button>
                </div>
            </div>
        </div>




        <form action="../showclass/" method="POST" id="showstudent">
            <div class="card">
                <div class="card-header">
                    <h3>ประเมินการเรียนรายบุคคล</h3> 
                    <div class="row">
                    </div>
                </div>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>

                            <tr>
                                <th class="text-center" rowspan="2" width="200">รหัสนักเรียน</th>
                                <th class="text-center" rowspan="2" width="200">ชื่อนักเรียน</th>
                                <th class="text-center" colspan="3">ผลการประเมิน</th>
                                <th class="text-center" rowspan="3" align="center">หมายเหตุ</th>
                            </tr>
                            <tr>
                                <th class="text-center" width="200">3</th>
                                <th class="text-center" width="200">2</th>
                                <th class="text-center" width="200">1</th>
                            </tr>

                        </thead>
                        <tbody class="table-border-bottom-0">

                            <tr>
                                <th class="text-center">000001</th>
                                <th class="text-center">นายสมชาย สมพล้อย</th>
                                <th class="text-center"><input type="radio" id="3" name="total" value="3"></th>
                                <th class="text-center"><input type="radio" id="2" name="total" value="2"></th>
                                <th class="text-center"><input type="radio" id="1" name="total" value="1"></th>
                                <th class="text-center thcenter"><input class="form-control" type="text"> </th>


                            </tr>

                            <tr>
                                <th class="text-center">000002</th>
                                <th class="text-center">นางสมใจ ต้นแคน</th>
                                <th class="text-center"><input type="radio" id="3" name="total" value="3"></th>
                                <th class="text-center"><input type="radio" id="2" name="total" value="2"></th>
                                <th class="text-center"><input type="radio" id="1" name="total" value="1"></th>
                                <th class="text-center thcenter"><input type="text" name="send" class="form-control">
                                </th>


                            </tr>
                            <tr>
                                <th colspan="6"><a href="../showclass"><button type="submit" class="btn btn-success"
                                            style="float:right;" onclick="msg()">บันทึก</button></a></th>
                            </tr>

                        </tbody>

                    </table>

                    <script>
                    function msg() {
                        alert("บันทึกสำเร็จ");
                    }
                    </script>



                </div>

            </div>
        </form>


    </div>

</div>
</div>