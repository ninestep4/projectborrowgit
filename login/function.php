<?php

class getdata
{

    public function login($input)
    {

        $security = new connectDB();
        $conn = $security->connectDatabase();
        if ($conn === false) {
            $data['error'] = 1;
            $data['msg'] = 'เชื่อมต่อฐานข้อมูลไม่ได้';
            return $data;
        }

        $security = new checkSql();
        $username = $security->replaceString($input['username'], 1);
        $password = $security->replaceString($input['password'], 1);
        $password = md5($password);
        $sql = "SELECT count(*) as total FROM sys_admin WHERE ad_user = '$username'";
        $stmt = sqlsrv_query($conn, $sql);
        if ($stmt === false) {
            $data['error'] = 1;
            $data['msg'] = 'เกิดข้อผิดพลาดในการดึงข้อมูล 100';
            $data['sqlerror'] = sqlsrv_errors();
            return $data;
        } else {

            $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
            $num = $row['total'];
            if ($num == 0) {
                $data['error'] = 1;
                $data['msg'] = 'ไม่พบข้อมูล';
                $data['sqlerror'] = $sql;
                $data['num'] = $num;
                return $data;
            } else {
                $sql = "SELECT * FROM sys_admin WHERE ad_user = '$username'";
                $result = sqlsrv_query($conn, $sql);
                $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
                if ($row['ad_pass'] == $password) {
                    $data['error'] = 0;
                    $data['login'] = 0;
                    $data['msg'] = 'เข้าสู่ระบบสำเร็จ';
                    $data['data'] = $row;
                    session_start();
                    $_SESSION['room_id'] = $row['room_id'];
                    $_SESSION['ad_id'] = $row['ad_id'];
                    $data['data'] = $row;
                    return $data;
                } else {
                    $data['error'] = 0;
                    $data['login'] = 1;
                    $data['msg'] = ' ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง';

                    return $data;
                }
            }
        }
    }
}
