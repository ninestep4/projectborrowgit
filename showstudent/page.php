<div class="row">
    <form action="../showstudent/" method="POST">
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
                            <th class="text-center">นายสมชาย สมพล้อย</th>
                            <th class="text-center"><input type="radio" id="3" name="total" value="3"></th>
                            <th class="text-center"><input type="radio" id="2" name="total" value="2"></th>
                            <th class="text-center"><input type="radio" id="1" name="total" value="1"></th>
                            <th class="text-center thcenter"><input class="form-control" type="text"> </th>


                        </tr>

                        <tr>
                            <th class="text-center">นางสมใจ ต้นแคน</th>
                            <th class="text-center"><input type="radio" id="3" name="total" value="3"></th>
                            <th class="text-center"><input type="radio" id="2" name="total" value="2"></th>
                            <th class="text-center"><input type="radio" id="1" name="total" value="1"></th>
                            <th class="text-center thcenter"><input type="text" name="send" class="form-control"></th>


                        </tr>
                        <tr>
                            <th colspan="5"><a href="../showclass/"><button type="submit" class="btn btn-suc"
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