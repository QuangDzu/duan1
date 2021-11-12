<?php
class Models extends DB
{

    public function insertLuong($manv, $hoten, $clb, $luong, $thuong, $phucap, $note)
    {
        $sql = "SELECT * FROM baove WHERE id = '$manv'";
        $result = mysqli_query($this->con, $sql);
        $check = mysqli_num_rows($result);
        if ($check == 0) {
            $sql = "INSERT INTO baove (id, hoten, clb, luong,thuong, phucap, note) VALUES  ('$manv' ,'$hoten','$clb' ,'$luong','$thuong' ,'$phucap','$note')";
            $result = mysqli_query($this->con, $sql);
            if (!isset($result)) {
                echo '
                <script>
                    swal("Thất bại!", "Thêm thông tin thất bại!", "error");
                </script>
                ';
            } else {
                echo '
                <script>
                    swal("Thành công!", "Thêm thông tin thành công!", "success");
                </script>
                ';
            }
        } else {
            echo '
            <script>
                swal("Thất bại!", "Mã nhân viên đã tồn tại!", "error");
            </script>
            ';
        }
    }

    public function selectClb(){
        $sql="SELECT * FROM clb";
        return mysqli_query($this->con, $sql);
    }
}
